<template>
    <header class="header">
        <b-container>
            <b-navbar toggleable="lg" type="dark" variant="black">
                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

                <b-collapse id="nav-collapse"  is-nav>
                    <b-navbar-nav fill style="width:100%">
                        <b-nav-item to="/lesson">
                            <b-icon icon="house-door-fill" aria-hidden="true"></b-icon>
                        </b-nav-item>
                        <b-nav-item to="/lesson/finalcutpro">Final Cut Pro 影片剪輯操作班</b-nav-item>
                        <b-nav-item to="/lesson/imove">iMovie 影片剪輯操作班</b-nav-item>
                        <b-nav-item to="/lesson/logicpro">Logic Pro X 音樂創作班</b-nav-item>
                        <b-nav-item to="/lesson/garageband">Garageband 音樂創作班</b-nav-item>
                        <b-nav-item to="/">返回RTC首頁</b-nav-item>
                    </b-navbar-nav>

                </b-collapse>
            </b-navbar>
        </b-container>
    </header>
</template>