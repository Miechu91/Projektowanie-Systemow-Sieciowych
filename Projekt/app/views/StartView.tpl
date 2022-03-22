{extends file="main.tpl"}

{block name=top}

    {foreach $user_reservations as $p}
        {if {$p["id_cars"]} == 1}
            {assign var="reservation_state1" value={$p["state"]}}
        {/if}
        {if {$p["id_cars"]} == 2}
            {assign var="reservation_state2" value={$p["state"]}}
        {/if}
        {if {$p["id_cars"]} == 3}
            {assign var="reservation_state3" value={$p["state"]}}
        {/if}
    {/foreach}

    <div class="l-content">
        <div class="pricing-tables pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <div class="pricing-table">
                    <div class="pricing-table-header">
                        <span class="pricing-table-price">
                            <img src="{$conf->app_url}/images/samochod1.jpg" width="310" height="200" />
                        </span>
                    </div>
                    <ul class="pricing-table-list">
                        <li>Model: Mercedes AMG</li>
                        <li>Moc: 500 KM</li>
                        <li>Wyposażenie: komfort</li>
                        <li>Spalanie: 10 L/100km</li>
                        <li>Cena: 200 zł/h</li>
                    </ul>
                    <form action="{$conf->action_root}reservation/1" method="get">
                        {if {$reservation_state1} == 1}
                            <button type="submit" class="button-choose pure-button" disabled>Zarezerwowany</button>
                        {elseif {$reservation_state1} == 2}
                            <button type="submit" class="button-choose pure-button" disabled>Rezerwacja zaakceptowana</button>
                        {else}
                            <button type="submit" class="button-choose pure-button">Wybierz</button>
                        {/if}

                    </form>
                </div>
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <div class="pricing-table">
                    <div class="pricing-table-header">
                        <span class="pricing-table-price">
                            <img src="{$conf->app_url}/images/samochod2.jpg" width="310" height="200" />
                        </span>
                    </div>
                    <ul class="pricing-table-list">
                        <li>Model: Ford Mustang</li>
                        <li>Moc: 800 KM</li>
                        <li>Wyposażenie: sport</li>
                        <li>Spalanie: 18 L/100km</li>
                        <li>Cena: 180 zł/h</li>
                    </ul>
                    <form action="{$conf->action_root}reservation/2" method="get">
                        {if {$reservation_state2} == 1}
                            <button type="submit" class="button-choose pure-button" disabled>Zarezerwowany</button>
                        {elseif {$reservation_state2} == 2}
                            <button type="submit" class="button-choose pure-button" disabled>Rezerwacja zaakceptowana</button>
                        {else}
                            <button type="submit" class="button-choose pure-button">Wybierz</button>
                        {/if}

                    </form>
                </div>
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <div class="pricing-table">
                    <div class="pricing-table-header">
                        <span class="pricing-table-price">
                            <img src="{$conf->app_url}/images/samochod3.jpg" width="310" height="200" />
                        </span>
                    </div>
                    <ul class="pricing-table-list">
                        <li>Model: Porsche Panamera</li>
                        <li>Moc: 420 KM</li>
                        <li>Wyposażenie: komfort</li>
                        <li>Spalanie: 8 L/100km</li>
                        <li>Cena: 150 zł/h</li>
                    </ul>
                    <form action="{$conf->action_root}reservation/3" method="get">
                        {if {$reservation_state3} == 1}
                            <button type="submit" class="button-choose pure-button" disabled>Zarezerwowany</button>
                        {elseif {$reservation_state3} == 2}
                            <button type="submit" class="button-choose pure-button" disabled>Rezerwacja zaakceptowana</button>
                        {else}
                            <button type="submit" class="button-choose pure-button">Wybierz</button>
                        {/if}

                    </form>
                </div>
            </div>
        </div> <!-- end pricing-tables -->

        <div class="information pure-g">
            <div class="pure-u-1 pure-u-md-1-1">
                <div class="l-box">
                    <h3 class="information-head">O nas</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel est nulla. Interdum et
                        malesuada fames ac ante ipsum primis in faucibus. Integer scelerisque, elit ac semper aliquet,
                        ligula ipsum eleifend est, eu scelerisque diam lectus ac enim. Sed finibus iaculis erat, vel
                        viverra enim rutrum nec. Pellentesque accumsan, est sed mollis posuere, purus urna pulvinar est,
                        a imperdiet orci nulla eu leo. Nulla non est non urna facilisis semper. Donec eu ipsum sollicitudin,
                        malesuada leo in, efficitur dui. Ut pretium ex id elit laoreet, id ultricies sapien sodales.
                        Sed eleifend tempus sem, a faucibus elit bibendum quis. In rhoncus aliquam nulla non porttitor.
                        Morbi eget convallis massa. Suspendisse ullamcorper fermentum dictum. Cras vestibulum pretium varius.
                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras gravida elementum velit, nec
                        mattis nunc scelerisque non.
                    </p>
                </div>
            </div>
        </div> <!-- end information -->
    </div> <!-- end l-content -->

{/block}