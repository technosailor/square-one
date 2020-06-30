<?php

namespace Tribe\Project\Templates\Components;

/**
 * Class Pagination
 *
 * @property string[] $wrapper_classes
 * @property string[] $wrapper_attrs
 * @property string[] $list_classes
 * @property string[] $list_attrs
 * @property string[] $list_item_classes
 * @property string[] $list_item_attrs
 * @property string   $first_post
 * @property string   $last_post
 * @property string   $prev_post
 * @property string   $next_post
 * @property string   $pagination_numbers
 */
class Pagination extends Component {

	public const WRAPPER_CLASSES    = 'wrapper_classes';
	public const WRAPPER_ATTRS      = 'wrapper_attrs';
	public const LIST_CLASSES       = 'list_classes';
	public const LIST_ATTRS         = 'list_attrs';
	public const LIST_ITEM_CLASSES  = 'list_item_classes';
	public const LIST_ITEM_ATTRS    = 'list_item_attrs';
	public const FIRST_POST         = 'first_post';
	public const LAST_POST          = 'last_post';
	public const PREV_POST          = 'prev_post';
	public const NEXT_POST          = 'next_post';
	public const PAGINATION_NUMBERS = 'pagination_numbers';

	protected function defaults(): array {
		return [
			self::WRAPPER_ATTRS     => [],
			self::WRAPPER_CLASSES   => [],
			self::LIST_CLASSES      => [],
			self::LIST_ATTRS        => [],
			self::LIST_ITEM_CLASSES => [],
			self::LIST_ITEM_ATTRS   => [],
		];
	}

	public function render(): void {
		?>
        <nav {{ classes( wrapper_classes ) }} {{ attributes( wrapper_attrs ) }}>

            <ul {{ classes( list_classes ) }} {{ attributes( list_attrs ) }}>

                {% if first_post %}
                <li {{ classes( list_item_classes ) }} {{ attributes( list_item_attrs ) }}>
                    {{ first_post }}
                </li>
                {% endif %}

                {% if prev_post %}
                <li {{ classes( list_item_classes ) }} {{ attributes( list_item_attrs ) }}>
                    {{ prev_post }}
                </li>
                {% endif %}

                {% if pagination_numbers %}
                {% for number in pagination_numbers %}
                <li {{ classes( list_item_classes ) }} {{ attributes( list_item_attrs ) }}>
                    {{ component( 'link/Link.php', number ) }}
                </li>
                {% endfor %}
                {% endif %}

                {% if next_post %}
                <li {{ classes( list_item_classes ) }} {{ attributes( list_item_attrs ) }}>
                    {{ next_post }}
                </li>
                {% endif %}

                {% if last_post %}
                <li {{ classes( list_item_classes ) }} {{ attributes( list_item_attrs ) }}>
                    {{ last_post }}
                </li>
                {% endif %}

            </ul>

        </nav>
		<?php
	}

}
