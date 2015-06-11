<?php

/**
 * The button that gets injected into the Member object
 * Requires BetterButtons
 **/
class EmulateUser_BetterButton extends BetterButtonAction {

    protected $link;

    public function __construct($text, $link) {
        parent::__construct($text);
        $this->link = $link;
    }
	
    public function getButtonLink() {
        return $this->link;
    }

    /**
     * Gets the HTML representing the button
	 * We've cloned this from BetterButtonAction so we can remove the 'cms-button-link' class
     * @return string
     */
    public function getButtonHTML() {
        return
            '<a class="ss-ui-button ui-button-text-icon-primary" href="'.$this->getButtonLink().'">
				Emulate user
			</a>';
    }
}