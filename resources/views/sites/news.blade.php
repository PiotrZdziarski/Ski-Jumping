@extends('layouts.app')
@section('title')Ski Jumping @endsection
@section('content')
    <!-- Section Area - Content Central -->
    <section class="content-info">

        <div class="container paddings-mini">
            <div class="row">

                <!-- Sidebars -->
                <aside class="col-lg-3">

                    <div>
                        <h4>Searh Sidebar</h4>
                        <form class="search" action="#" method="Post">
                            <div class="input-group">
                                <input class="form-control" placeholder="Search..." name="email" type="email"
                                       required="required">
                                <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" name="subscribe">Go!</button>
                                        </span>
                            </div>
                        </form>
                    </div>

                    <!-- Widget Categories-->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Categories</h4>
                        </div>
                        <div class="info-panel">
                            <ul class="list">
                                <li><i class="fa fa-check"></i><a href="#">Design</a></li>
                                <li><i class="fa fa-check"></i><a href="#">Photos</a></li>
                                <li><i class="fa fa-check"></i><a href="#">Videos</a></li>
                                <li><i class="fa fa-check"></i><a href="#">Lifestyle</a></li>
                                <li><i class="fa fa-check"></i><a href="#">Technology</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Widget Categories-->

                    <!-- Widget Text-->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Widget Text</h4>
                        </div>
                        <div class="info-panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et
                                dolore.</p>
                        </div>
                    </div>
                    <!-- End Widget Text-->

                    <!-- Widget img-->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Widget Image</h4>
                        </div>
                        <img src="img/slide/1.jpg" alt="">
                        <div class="row">
                            <div class="info-panel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ut sit amet, consectetur
                                    adipisicing elit, labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget img-->
                </aside>
                <!-- End Sidebars -->


                <div class="col-lg-9">
                    <!-- Content Text-->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Russia 2018’s potential classic match-ups</h4>
                        </div>
                        <img src="{{asset('img/slide/1.jpg')}}" alt="Ski jumping">
                        <div class="info-panel">
                            {{--<p>From the moment that the Final Draw for the 2018 FIFA World Cup Russia™ was made, fans
                                around the globe have been poring over each of the groups and contemplating who might
                                face who in the knockout rounds.</p>

                            <p>As they will no doubt have noticed there are some classic matches potentially in store
                                from the Round of 16 onwards. Yet though the sport of football continues to develop at
                                pace, it remains as unpredictable as ever. Anything can happen over the course of 90
                                minutes and nothing can be taken for granted in the group phase, where many a favourite
                                has found themselves struggling just to make it through to the next round. For example,
                                few would have tipped Costa Rica to advance from a Brazil 2014 pool also containing
                                England, Italy and Uruguay. And yet Los Ticos progressed as group winners, while the
                                English and Italians caught the first plane home.</p>

                            <p>To help fire your imagination and let you see if there is a potential knockout match you
                                might be tempted to buy tickets for, FIFA.com has come up with a list of possible
                                last-16 and quarter-final duels between some of the game’s biggest attractions. </p>

                            <h5>France-Argentina</h5>
                            <p>The top seeds in Groups C and D both have designs on winning their respective sections.
                                But if one of them advances as a group winner and the other as a runner-up, then we will
                                be seeing Lionel Messi facing off against Antoine Griezmann either in Kazan (30 June) or
                                Nizhny Novgorod (1 July), depending on their team’s group placings. Argentina have won
                                both previous world finals meetings between the two countries: 1-0 at Uruguay 1930 and
                                2-1 at Argentina 1978.</p>

                            <h5>Brazil-Germany</h5>
                            <p>Brazil may have the chance to avenge that 7-1 semi-final defeat at the last World Cup as
                                early as the Round of 16. If they suffer a minor slip-up in Group E and only finish
                                second and Germany win Group F, or vice versa, then the two nations will meet in Samara
                                (2 July) or St Petersburg (3 July). After two previous meetings on the big stage, it is
                                honours even: Brazil won the Final of Korea/Japan 2002 2-0, while Germany recorded that
                                famous victory at Brazil 2014.</p>

                            <h5>Russia-Spain</h5>
                            <p>Should they advance from the group phase, the hosts are more than likely to face stiff
                                opposition in the last 16, with Portugal or Spain potentially lying in wait for them,
                                either in Sochi (30 June) or Moscow (1 July). Should Russia come up against the Spanish,
                                it would be the first World Cup finals encounter between the two. La Roja have long been
                                a bogey team for the eastern European nation, winning their first European title against
                                the former USSR in 1964 and then beating them twice en route to their second continental
                                crown, in 2008. </p>

                            <h5>Germany-England</h5>
                            <p>Kazan (6 July) or Samara (7 July) could provide the setting for the latest instalment in
                                one of world football’s great rivalries. Again, one would have to top their group, the
                                other finish second, and both win their last-16 ties. Germany have the upper hand in the
                                head-to-head with three wins in five previous encounters, though England prevailed in
                                the most important one of them all – the Final of England 1966 (4-2 a.e.t.). Since then,
                                it has been virtually all Germany: a 3-2 extra-time win in the quarters at Mexico 1970 ,
                                a 4-3 penalty shoot-out victory following a 1-1 draw in the semi-finals at Italy 1990,
                                and a 4-1 win in the last 16 at South Africa 2010. The other meeting, which came in the
                                second round at Spain 1982, ended goalless. </p>

                            <h5>Portugal-Argentina</h5>
                            <p>Lionel Messi and Cristiano Ronaldo will come face to face for the first time in the World
                                Cup only if their two nations finish in the same position in the group phase, either
                                first or second. That would leave them in the same side of the draw and on course for a
                                possible collision in Nizhny Novgorod (6 July) or Sochi (7 July). The countries have
                                never locked horns before in the world finals, adding even more interest to the possible
                                duel between their star players.</p>--}}
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper lobortis dolor, in
                            ornare massa ornare ut. Nullam auctor finibus lacus quis faucibus. Phasellus diam odio,
                            varius in enim non, euismod pretium neque. Aliquam efficitur lectus velit, a pellentesque
                            erat ornare at. Integer dictum metus eget velit gravida, non pellentesque elit fermentum.
                            Cras sed lectus in ante elementum volutpat eget non turpis. Nulla imperdiet tortor leo, sit
                            amet pulvinar lorem commodo eget. Nulla facilisi. Nulla interdum vehicula purus nec
                            faucibus. Praesent varius metus non ante consequat, id tempus tellus condimentum. Vestibulum
                            maximus volutpat purus, id porta odio scelerisque id. Phasellus molestie purus eu lobortis
                            congue. Vivamus quis volutpat erat. Vestibulum sed lacus vitae nisl dapibus luctus. Duis et
                            accumsan purus.

                            Mauris ac dignissim orci, dapibus pretium neque. Sed pellentesque consectetur tempor.
                            Maecenas consequat scelerisque metus, condimentum pharetra est eleifend ut. Donec in turpis
                            urna. Proin tempor, leo quis pulvinar suscipit, arcu ipsum ultrices eros, pharetra rutrum
                            neque metus ut metus. Donec luctus quam ut placerat pellentesque. Ut placerat est in sapien
                            maximus, vel finibus justo consectetur. Ut accumsan ipsum quis ipsum mollis euismod. Duis
                            rutrum id elit vitae posuere. Phasellus a eros id enim scelerisque vulputate. Nulla rhoncus
                            est et diam fringilla, vitae tincidunt neque dignissim. Fusce vitae ante sollicitudin,
                            posuere sapien sit amet, euismod tellus.

                            Mauris dignissim rutrum pretium. Donec pulvinar erat ut eros sollicitudin, vitae tincidunt
                            erat dapibus. Phasellus pharetra aliquam rhoncus. Donec gravida nisi pretium mauris eleifend
                            tristique. In efficitur tortor turpis, ut pellentesque leo aliquet non. Donec sollicitudin
                            velit lacinia feugiat auctor. Ut vel eleifend ipsum. Aliquam ut nibh eget augue maximus
                            convallis a vel leo. Nunc sit amet tellus lobortis, ultricies risus vitae, aliquam felis.
                            Vestibulum enim justo, imperdiet ac gravida eget, ultricies non odio. Praesent dictum
                            faucibus neque, ac laoreet metus rutrum ut. Ut at magna mauris. Sed efficitur libero ut nibh
                            consequat, eu lobortis eros euismod.

                            In sapien purus, consequat sed mauris ornare, dictum dapibus justo. Proin auctor varius
                            turpis, eget mollis sem venenatis et. Mauris euismod erat aliquet velit viverra blandit. Sed
                            egestas mollis justo et ultricies. Nullam non urna ante. Nullam sagittis eros vel libero
                            sollicitudin, ut elementum ex cursus. Nullam augue libero, lobortis sed quam eu, sodales
                            volutpat massa. Suspendisse vestibulum metus at purus scelerisque, tristique interdum leo
                            imperdiet.

                            Morbi pulvinar luctus nibh eu gravida. Quisque ac mattis massa. Sed feugiat orci et quam
                            molestie scelerisque. Mauris lectus lacus, ultricies a feugiat eu, egestas ut augue.
                            Suspendisse potenti. Mauris finibus urna augue, sit amet accumsan arcu mollis in. Duis ac
                            pellentesque urna. Nullam luctus, turpis vel rhoncus ultricies, est magna cursus turpis, sed
                            auctor est turpis cursus mauris. Duis iaculis tellus id neque porta, nec mattis libero
                            sollicitudin. Curabitur consectetur porttitor luctus. Phasellus bibendum tortor viverra
                            sollicitudin tristique.
                        </div>
                    </div>
                    <!-- End Content Text-->

                    <!-- Comments -->
                    <div class="panel-box">
                        <!-- Title Post -->
                        <div class="titles">
                            <h4>Comments</h4>
                        </div>
                        <!-- Title Post -->
                        <ul class="testimonials">
                            <li>
                                <blockquote><p>Lionel Messi and Cristiano Ronaldo will come face to face for the first
                                        time in the World Cup only if their two nations finish in the same position in
                                        the group phase, either first or second.!.</p></blockquote>
                            </li>
                            <li>
                                <blockquote><p>After two previous meetings on the big stage, it is honours even: Brazil
                                        won the Final of Korea/Japan 2002 2-0, while Germany recorded that famous
                                        victory at Brazil 2014!.</p></blockquote>
                            </li>
                            <li>
                                <blockquote><p>To help fire your imagination and let you see if there is a potential
                                        knockout match you might be tempted to buy tickets for, FIFA.com has come up
                                        with a list of possible last-16 and quarter-final duels between some of the
                                        game’s biggest attractions.!.</p></blockquote>
                            </li>
                        </ul>
                    </div>
                    <!-- End Comments -->

                    <!-- Comment Form -->
                    <div class="panel-box padding-b">
                        <!-- Title Post -->
                        <div class="titles">
                            <h4>Publish Commnet</h4>
                        </div>

                        <div class="info-panel">
                            <!-- Form coment -->
                            <form class="form-theme">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Your name *</label>
                                        <input type="text" required="required" value="" maxlength="100"
                                               class="form-control" name="name" id="name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Your email address *</label>
                                        <input type="email" required="required" value="" maxlength="100"
                                               class="form-control" name="email" id="email">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Comment *</label>
                                        <textarea maxlength="5000" rows="10" class="form-control" name="comment"
                                                  id="comment" style="height: 138px;" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="Post Comment" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                            <!-- End Form coment -->
                        </div>
                    </div>
                    <!-- End Comment Form -->

                </div>
            </div>
        </div>
@endsection