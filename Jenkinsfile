pipeline {
    agent any

    environment {
        APP_NAME = "square-one"
        GIT_REPO = "moderntribe/${APP_NAME}.git"
        GITHUB_TOKEN = credentials('tr1b0t-github-api-token')
        HOSTED_SSH_KEYS = "${env.APP_NAME}-ssh-key"
        HOSTED_FOLDER = "./.HOSTED-SCM"
        SLACK_CHANNEL= "nicks-playground"
    }

    stages {
        stage('Start Pipeline'){
            echo "${env.BRANCH_NAME} - ${params.SLACK_CHANNEL}"
            slackSend(channel: "${SLACK_CHANNEL}",
                message: "Pipeline Deploy of `${APP_NAME}` of `${env.BRANCH_NAME}`: (build: <${RUN_DISPLAY_URL}|#${BUILD_NUMBER}>)")
        }

        stage('Build Processes') {
            parallel {
                stage('Composer') {
                    agent {
                        docker {
                            image 'composer:1.8'
                            args '-u root'
                            reuseNode true
                        }
                    }

                    steps {
                        withCredentials([file(credentialsId: "square-one-compose-plugins-keys", variable: "ENV_FILE")]) {
                            sh script: "cp $ENV_FILE .env", label: "Copy Composer .env to the root folder"
                            sh "composer config -g github-oauth.github.com ${GITHUB_TOKEN}"
                            sh script:  "composer install --ignore-platform-reqs --no-dev", label: "Composer install"
                            sh "rm .env"
                        }
                    }
                }

                stage('Node') {
                    agent {
                        docker {
                            image 'node:12.13.1-alpine'
                            args '-u root'
                            reuseNode true
                        }
                    }

                    steps {
                        // Install dependencies
                        sh 'apk add --no-cache git openssh'
                        sh 'npm install -g gulp-cli'

                        sh 'yarn install'
                        sh 'cp local-config-sample.json local-config.json'
                        sh 'gulp server_dist'

                        // Clean Up before packaging
                        sh 'rm -rf node_modules'

                        // Jenkins as owner
                        sh 'chown -R 110:117 .'
                    }
                }
            }
        }
    }

    post {
        always {
            cleanWs()
        }
        failure {
            slackSend(channel: "${SLACK_CHANNEL}", color: 'danger', message: "Pipeline: Deployment of `branch: ${env.BRANCH}` FAILED: (build: <${RUN_DISPLAY_URL}|#${BUILD_NUMBER}>)")
        }
        success {
            slackSend(channel: "${SLACK_CHANNEL}", color: 'good', message: "Pipeline: Deployment of `branch: ${env.BRANCH}` was SUCCESSFUL. (build: <${RUN_DISPLAY_URL}|#${BUILD_NUMBER}>)")
        }
    }

    options {

    }
}
