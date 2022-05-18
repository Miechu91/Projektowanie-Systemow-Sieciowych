            {foreach $cars_list as $c}
            <div class="pure-u-1 pure-u-md-1-3">
                <div class="pricing-table">
                    <div class="pricing-table-header">
                        <span class="pricing-table-price">
                            <img src="{$conf->app_url}/images/samochod{$c["id"]}.jpg" width="310" height="200" />
                        </span>
                    </div>
                    <ul class="pricing-table-list">
                        <li>Model: {$c["marka"]} {$c["model"]}</li>
                        <li>Moc: {$c["moc"]} KM</li>
                        <li>Wyposażenie: {$c["wyposazenie"]}</li>
                        <li>Spalanie: {$c["spalanie"]} L/100km</li>
                        <li>Cena: {$c["cena"]} zł/h</li>
                    </ul>

                    <form action="{$conf->action_root}reservation/{$c["id"]}" method="get">

                        {if {$state_res[{$c["id"]}]} == 1}
                            <button type="submit" class="button-choose pure-button" disabled>Zarezerwowany</button>
                        {elseif {$state_res[{$c["id"]}]} == 2}
                            <button type="submit" class="button-choose pure-button" disabled>Rezerwacja zaakceptowana</button>
                        {else}
                            <button type="submit" class="button-choose pure-button">Wybierz</button>
                        {/if}

                    </form>
                </div>
            </div>
                    {/foreach}
            <form class="pagination" id="cars">
                {for $foo=1 to {$max_page}}
                    {if {$foo} == {$curr_page}}
                        <a class="active" onclick="ajaxPostForm('cars','{$conf->action_root}startpart/{$foo}','ajax'); return false;">{$foo}</a>
                    {else}
                        <a onclick="ajaxPostForm('cars','{$conf->action_root}startpart/{$foo}','ajax'); return false;">{$foo}</a>
                    {/if}
                {/for}
            </form>