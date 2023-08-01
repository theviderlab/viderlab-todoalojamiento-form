<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://viderlab.com
 * @since      1.0.0
 *
 * @package    ViderLab_TodoAlojamiento_Form
 * @subpackage ViderLab_TodoAlojamiento_Form/public/partials
 */
?>

<div class="viderlab-todoalojamiento-form">
    <form method="post" id="viderlab-todoalojamiento-form" action="<?php echo esc_html_e( 'https://www.todoalojamiento.com/portal/es?forzarLimpiar=true&idHotel=', 'viderlab-todoalojamiento-form' ).$settings['viderlab-todoalojamiento-form-settings_url']; ?>">
        <input type="hidden" name="date_format" value="d/m/Y" />
        <div class="viderlab-search-room-form">
            <div class="viderlab-dates">
                <div class="viderlab-date">
                    <div class="viderlab-title">
                        <label><?php _e('Check-in', 'viderlab-todoalojamiento-form'); ?></label>
                    </div>
                    <div class="viderlab-datepicker">
                        <input type="date" class="date_picker" name="viderlab-checkin" id="viderlab-checkin" value="24/08/2023" />
                    </div>
                </div>
                <div class="viderlab-date">
                    <div class="viderlab-title">
                        <label><?php _e('Check-out', 'viderlab-todoalojamiento-form'); ?></label>
                    </div>
                    <div class="viderlab-datepicker">
                        <input type="date" class="date_picker" name="viderlab-checkout" id="viderlab-checkout" value="25/08/2023" />
                    </div>
                </div>
            </div>
            <div class="viderlab-numbers">
                <div class="viderlab-number">
                    <div class="viderlab-title">
                        <label><?php _e('Adults', 'viderlab-todoalojamiento-form'); ?></label>
                    </div>
                    <div class="viderlab-numberpicker">
                        <select class="number_picker" name="viderlab-adults" id="viderlab-adults">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                </div>
                <div class="viderlab-number">
                    <div class="viderlab-title">
                        <label><?php _e('Children', 'viderlab-todoalojamiento-form'); ?></label>
                    </div>
                    <div class="viderlab-numberpicker">
                        <select class="number_picker" name="viderlab-children" id="viderlab-children">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="viderlab-submit">
                <input type="submit" name="viderlab-search-room" id="viderlab-search-room" value="<?php echo $full_atts['button_text']; ?>" />
            </div>
        </div>
    </form>
</div>
