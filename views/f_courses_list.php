
<?php include_once('views/_head.php') ?>

<?php include_once('views/_header.php') ?>

<?php include_once('views/_breadcrumb.php') ?>

<div class="section banner b01">
	<div class="container">
		<h1 class="page-title s02">Toate cursurile</h1>
		<div class="section-sub-title">Descopera toate cursurile sau filtreaza in functie de interesele tale</div>

		<div class="row">
			<div class="col col-lg-6">
				<a href="/cursuri/medical" class="link-card">
					<span class="title">Cursuri Medical</span>
					<span class="count">1234 de cursuri</span>
				</a>
			</div>

			<div class="col col-lg-6">
				<a href="/cursuri/medical" class="link-card">
					<span class="title">Cursuri Farma</span>
					<span class="count">234 de cursuri</span>
				</a>
			</div>
		</div>

        <ul class="nav nav-tabs tabswithslick" id="navPandN" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="medical-tab-button" data-bs-toggle="tab" data-bs-target="#popularTab" type="button" role="tab" aria-controls="popularTab" aria-selected="true">Populare</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="new-tab-button" data-bs-toggle="tab" data-bs-target="#newTab" type="button" role="tab" aria-controls="newTab" aria-selected="true">Cele mai noi</button>
            </li>
        </ul>
        <div class="tab-content" id="navPandNContent">
            <div class="tab-pane fade show active" id="popularTab" role="tabpanel" aria-labelledby="popular-tab-button">
                <div class="row slick slick-courses-pop">
                        <div class="col-md-3">
                            <div class="card">
                                <p class="course-category">Farmaceutic Popular</p>
                                <p class="course-title">Strategic Medical Affairs for Modern Pharma</p>
                                <div class="lector-info">
                                    <img src="/images/users/avatar-lector-adrian-popescu.png" alt="" class="avatar">
                                    <div class="text">
                                        Lector, <span class="name">Adrian Popescu</span>
                                    </div>
                                </div>
                                <div class="course-description">Medical Affairs has become a strategically critical function for the success of any pharma product.</div>
                                <div class="course-info">
                                    <div class="icon">
                                        <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-camera"/></svg>
                                    </div>
                                    <div class="text">
                                        <div class="tag outline-blue">LIVE</div>
                                        <p class="date">20 Martie, 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <p class="course-category">Farmaceutic</p>
                                <p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
                                <div class="lector-info">
                                    <img src="/images/users/avatar-lector-mariana-dumitru.png" alt="" class="avatar">
                                    <div class="text">
                                        Lector, <span class="name">Mariana Dumitru</span>
                                    </div>
                                </div>
                                <div class="course-description">Understand regulations for medical devices in simple terms to gain market approval of a medical device in the EU.</div>
                                <div class="course-info">
                                    <div class="icon">
                                        <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-video"/></svg>
                                    </div>
                                    <div class="text">
                                        <div class="tag pale">VIDEO</div>
                                        <p class="date length">2 ore, 30 minut(e)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <p class="course-category">Farmaceutic</p>
                                <p class="course-title">Practical Regulatory Affairs 2020 - European Medical Devices</p>
                                <div class="lector-info">
                                    <img src="/images/users/avatar-lector-mihai-enulescu.png" alt="" class="avatar">
                                    <div class="text">
                                        Lector, <span class="name">Mihai Enulescu</span>
                                    </div>
                                </div>
                                <div class="course-description">A practical course discussing the EU Medical Device Regulation (MDR) in real-world situations.</div>
                                <div class="course-info">
                                    <div class="icon">
                                        <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-camera"/></svg>
                                    </div>
                                    <div class="text">
                                        <div class="tag outline-blue">LIVE</div>
                                        <p class="date">20 Martie, 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <p class="course-category">Farmaceutic</p>
                                <p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
                                <div class="lector-info">
                                    <img src="/images/users/avatar-lector-mariana-dumitru.png" alt="" class="avatar">
                                    <div class="text">
                                        Lector, <span class="name">Mariana Dumitru</span>
                                    </div>
                                </div>
                                <div class="course-description">Understand regulations for medical devices in simple terms to gain market approval of a medical device in the EU.</div>
                                <div class="course-info">
                                    <div class="icon">
                                        <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-video"/></svg>
                                    </div>
                                    <div class="text">
                                        <div class="tag pale">VIDEO</div>
                                        <p class="date length">2 ore, 30 minut(e)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <p class="course-category">Farmaceutic</p>
                                <p class="course-title">Strategic Medical Affairs for Modern Pharma</p>
                                <div class="lector-info">
                                    <img src="/images/users/avatar-lector-adrian-popescu.png" alt="" class="avatar">
                                    <div class="text">
                                        Lector, <span class="name">Adrian Popescu</span>
                                    </div>
                                </div>
                                <div class="course-description">Medical Affairs has become a strategically critical function for the success of any pharma product.</div>
                                <div class="course-info">
                                    <div class="icon">
                                        <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-camera"/></svg>
                                    </div>
                                    <div class="text">
                                        <div class="tag outline-blue">LIVE</div>
                                        <p class="date">20 Martie, 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <p class="course-category">Farmaceutic</p>
                                <p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
                                <div class="lector-info">
                                    <img src="/images/users/avatar-lector-mariana-dumitru.png" alt="" class="avatar">
                                    <div class="text">
                                        Lector, <span class="name">Mariana Dumitru</span>
                                    </div>
                                </div>
                                <div class="course-description">Understand regulations for medical devices in simple terms to gain market approval of a medical device in the EU.</div>
                                <div class="course-info">
                                    <div class="icon">
                                        <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-video"/></svg>
                                    </div>
                                    <div class="text">
                                        <div class="tag pale">VIDEO</div>
                                        <p class="date length">2 ore, 30 minut(e)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <p class="course-category">Farmaceutic</p>
                                <p class="course-title">Practical Regulatory Affairs 2020 - European Medical Devices</p>
                                <div class="lector-info">
                                    <img src="/images/users/avatar-lector-mihai-enulescu.png" alt="" class="avatar">
                                    <div class="text">
                                        Lector, <span class="name">Mihai Enulescu</span>
                                    </div>
                                </div>
                                <div class="course-description">A practical course discussing the EU Medical Device Regulation (MDR) in real-world situations.</div>
                                <div class="course-info">
                                    <div class="icon">
                                        <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-camera"/></svg>
                                    </div>
                                    <div class="text">
                                        <div class="tag outline-blue">LIVE</div>
                                        <p class="date">20 Martie, 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <p class="course-category">Farmaceutic</p>
                                <p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
                                <div class="lector-info">
                                    <img src="/images/users/avatar-lector-mariana-dumitru.png" alt="" class="avatar">
                                    <div class="text">
                                        Lector, <span class="name">Mariana Dumitru</span>
                                    </div>
                                </div>
                                <div class="course-description">Understand regulations for medical devices in simple terms to gain market approval of a medical device in the EU.</div>
                                <div class="course-info">
                                    <div class="icon">
                                        <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-video"/></svg>
                                    </div>
                                    <div class="text">
                                        <div class="tag pale">VIDEO</div>
                                        <p class="date length">2 ore, 30 minut(e)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <p class="course-category">Farmaceutic</p>
                                <p class="course-title">Strategic Medical Affairs for Modern Pharma</p>
                                <div class="lector-info">
                                    <img src="/images/users/avatar-lector-adrian-popescu.png" alt="" class="avatar">
                                    <div class="text">
                                        Lector, <span class="name">Adrian Popescu</span>
                                    </div>
                                </div>
                                <div class="course-description">Medical Affairs has become a strategically critical function for the success of any pharma product.</div>
                                <div class="course-info">
                                    <div class="icon">
                                        <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-camera"/></svg>
                                    </div>
                                    <div class="text">
                                        <div class="tag outline-blue">LIVE</div>
                                        <p class="date">20 Martie, 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <p class="course-category">Farmaceutic</p>
                                <p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
                                <div class="lector-info">
                                    <img src="/images/users/avatar-lector-mariana-dumitru.png" alt="" class="avatar">
                                    <div class="text">
                                        Lector, <span class="name">Mariana Dumitru</span>
                                    </div>
                                </div>
                                <div class="course-description">Understand regulations for medical devices in simple terms to gain market approval of a medical device in the EU.</div>
                                <div class="course-info">
                                    <div class="icon">
                                        <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-video"/></svg>
                                    </div>
                                    <div class="text">
                                        <div class="tag pale">VIDEO</div>
                                        <p class="date length">2 ore, 30 minut(e)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <p class="course-category">Farmaceutic</p>
                                <p class="course-title">Practical Regulatory Affairs 2020 - European Medical Devices</p>
                                <div class="lector-info">
                                    <img src="/images/users/avatar-lector-mihai-enulescu.png" alt="" class="avatar">
                                    <div class="text">
                                        Lector, <span class="name">Mihai Enulescu</span>
                                    </div>
                                </div>
                                <div class="course-description">A practical course discussing the EU Medical Device Regulation (MDR) in real-world situations.</div>
                                <div class="course-info">
                                    <div class="icon">
                                        <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-camera"/></svg>
                                    </div>
                                    <div class="text">
                                        <div class="tag outline-blue">LIVE</div>
                                        <p class="date">20 Martie, 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <p class="course-category">Farmaceutic</p>
                                <p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
                                <div class="lector-info">
                                    <img src="/images/users/avatar-lector-mariana-dumitru.png" alt="" class="avatar">
                                    <div class="text">
                                        Lector, <span class="name">Mariana Dumitru</span>
                                    </div>
                                </div>
                                <div class="course-description">Understand regulations for medical devices in simple terms to gain market approval of a medical device in the EU.</div>
                                <div class="course-info">
                                    <div class="icon">
                                        <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-video"/></svg>
                                    </div>
                                    <div class="text">
                                        <div class="tag pale">VIDEO</div>
                                        <p class="date length">2 ore, 30 minut(e)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

            <div class="tab-pane fade" id="newTab" role="tabpanel" aria-labelledby="new-tab-button">
                <div class="row slick slick-courses-new">
                    <div class="col-md-3">
                        <div class="card">
                            <p class="course-category">Farmaceutic Cele mai noi</p>
                            <p class="course-title">Strategic Medical Affairs for Modern Pharma</p>
                            <div class="lector-info">
                                <img src="/images/users/avatar-lector-adrian-popescu.png" alt="" class="avatar">
                                <div class="text">
                                    Lector, <span class="name">Adrian Popescu</span>
                                </div>
                            </div>
                            <div class="course-description">Medical Affairs has become a strategically critical function for the success of any pharma product.</div>
                            <div class="course-info">
                                <div class="icon">
                                    <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-camera"/></svg>
                                </div>
                                <div class="text">
                                    <div class="tag outline-blue">LIVE</div>
                                    <p class="date">20 Martie, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <p class="course-category">Farmaceutic</p>
                            <p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
                            <div class="lector-info">
                                <img src="/images/users/avatar-lector-mariana-dumitru.png" alt="" class="avatar">
                                <div class="text">
                                    Lector, <span class="name">Mariana Dumitru</span>
                                </div>
                            </div>
                            <div class="course-description">Understand regulations for medical devices in simple terms to gain market approval of a medical device in the EU.</div>
                            <div class="course-info">
                                <div class="icon">
                                    <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-video"/></svg>
                                </div>
                                <div class="text">
                                    <div class="tag pale">VIDEO</div>
                                    <p class="date length">2 ore, 30 minut(e)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <p class="course-category">Farmaceutic</p>
                            <p class="course-title">Practical Regulatory Affairs 2020 - European Medical Devices</p>
                            <div class="lector-info">
                                <img src="/images/users/avatar-lector-mihai-enulescu.png" alt="" class="avatar">
                                <div class="text">
                                    Lector, <span class="name">Mihai Enulescu</span>
                                </div>
                            </div>
                            <div class="course-description">A practical course discussing the EU Medical Device Regulation (MDR) in real-world situations.</div>
                            <div class="course-info">
                                <div class="icon">
                                    <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-camera"/></svg>
                                </div>
                                <div class="text">
                                    <div class="tag outline-blue">LIVE</div>
                                    <p class="date">20 Martie, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <p class="course-category">Farmaceutic</p>
                            <p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
                            <div class="lector-info">
                                <img src="/images/users/avatar-lector-mariana-dumitru.png" alt="" class="avatar">
                                <div class="text">
                                    Lector, <span class="name">Mariana Dumitru</span>
                                </div>
                            </div>
                            <div class="course-description">Understand regulations for medical devices in simple terms to gain market approval of a medical device in the EU.</div>
                            <div class="course-info">
                                <div class="icon">
                                    <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-video"/></svg>
                                </div>
                                <div class="text">
                                    <div class="tag pale">VIDEO</div>
                                    <p class="date length">2 ore, 30 minut(e)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <p class="course-category">Farmaceutic</p>
                            <p class="course-title">Strategic Medical Affairs for Modern Pharma</p>
                            <div class="lector-info">
                                <img src="/images/users/avatar-lector-adrian-popescu.png" alt="" class="avatar">
                                <div class="text">
                                    Lector, <span class="name">Adrian Popescu</span>
                                </div>
                            </div>
                            <div class="course-description">Medical Affairs has become a strategically critical function for the success of any pharma product.</div>
                            <div class="course-info">
                                <div class="icon">
                                    <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-camera"/></svg>
                                </div>
                                <div class="text">
                                    <div class="tag outline-blue">LIVE</div>
                                    <p class="date">20 Martie, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <p class="course-category">Farmaceutic</p>
                            <p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
                            <div class="lector-info">
                                <img src="/images/users/avatar-lector-mariana-dumitru.png" alt="" class="avatar">
                                <div class="text">
                                    Lector, <span class="name">Mariana Dumitru</span>
                                </div>
                            </div>
                            <div class="course-description">Understand regulations for medical devices in simple terms to gain market approval of a medical device in the EU.</div>
                            <div class="course-info">
                                <div class="icon">
                                    <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-video"/></svg>
                                </div>
                                <div class="text">
                                    <div class="tag pale">VIDEO</div>
                                    <p class="date length">2 ore, 30 minut(e)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <p class="course-category">Farmaceutic</p>
                            <p class="course-title">Practical Regulatory Affairs 2020 - European Medical Devices</p>
                            <div class="lector-info">
                                <img src="/images/users/avatar-lector-mihai-enulescu.png" alt="" class="avatar">
                                <div class="text">
                                    Lector, <span class="name">Mihai Enulescu</span>
                                </div>
                            </div>
                            <div class="course-description">A practical course discussing the EU Medical Device Regulation (MDR) in real-world situations.</div>
                            <div class="course-info">
                                <div class="icon">
                                    <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-camera"/></svg>
                                </div>
                                <div class="text">
                                    <div class="tag outline-blue">LIVE</div>
                                    <p class="date">20 Martie, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <p class="course-category">Farmaceutic</p>
                            <p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
                            <div class="lector-info">
                                <img src="/images/users/avatar-lector-mariana-dumitru.png" alt="" class="avatar">
                                <div class="text">
                                    Lector, <span class="name">Mariana Dumitru</span>
                                </div>
                            </div>
                            <div class="course-description">Understand regulations for medical devices in simple terms to gain market approval of a medical device in the EU.</div>
                            <div class="course-info">
                                <div class="icon">
                                    <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-video"/></svg>
                                </div>
                                <div class="text">
                                    <div class="tag pale">VIDEO</div>
                                    <p class="date length">2 ore, 30 minut(e)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <p class="course-category">Farmaceutic</p>
                            <p class="course-title">Strategic Medical Affairs for Modern Pharma</p>
                            <div class="lector-info">
                                <img src="/images/users/avatar-lector-adrian-popescu.png" alt="" class="avatar">
                                <div class="text">
                                    Lector, <span class="name">Adrian Popescu</span>
                                </div>
                            </div>
                            <div class="course-description">Medical Affairs has become a strategically critical function for the success of any pharma product.</div>
                            <div class="course-info">
                                <div class="icon">
                                    <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-camera"/></svg>
                                </div>
                                <div class="text">
                                    <div class="tag outline-blue">LIVE</div>
                                    <p class="date">20 Martie, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <p class="course-category">Farmaceutic</p>
                            <p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
                            <div class="lector-info">
                                <img src="/images/users/avatar-lector-mariana-dumitru.png" alt="" class="avatar">
                                <div class="text">
                                    Lector, <span class="name">Mariana Dumitru</span>
                                </div>
                            </div>
                            <div class="course-description">Understand regulations for medical devices in simple terms to gain market approval of a medical device in the EU.</div>
                            <div class="course-info">
                                <div class="icon">
                                    <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-video"/></svg>
                                </div>
                                <div class="text">
                                    <div class="tag pale">VIDEO</div>
                                    <p class="date length">2 ore, 30 minut(e)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <p class="course-category">Farmaceutic</p>
                            <p class="course-title">Practical Regulatory Affairs 2020 - European Medical Devices</p>
                            <div class="lector-info">
                                <img src="/images/users/avatar-lector-mihai-enulescu.png" alt="" class="avatar">
                                <div class="text">
                                    Lector, <span class="name">Mihai Enulescu</span>
                                </div>
                            </div>
                            <div class="course-description">A practical course discussing the EU Medical Device Regulation (MDR) in real-world situations.</div>
                            <div class="course-info">
                                <div class="icon">
                                    <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-camera"/></svg>
                                </div>
                                <div class="text">
                                    <div class="tag outline-blue">LIVE</div>
                                    <p class="date">20 Martie, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <p class="course-category">Farmaceutic</p>
                            <p class="course-title">Medical Device Regulation 2017/745 EU regulatory affairs.</p>
                            <div class="lector-info">
                                <img src="/images/users/avatar-lector-mariana-dumitru.png" alt="" class="avatar">
                                <div class="text">
                                    Lector, <span class="name">Mariana Dumitru</span>
                                </div>
                            </div>
                            <div class="course-description">Understand regulations for medical devices in simple terms to gain market approval of a medical device in the EU.</div>
                            <div class="course-info">
                                <div class="icon">
                                    <svg class="img" role="img" aria-label="Live" width="34" height="34"><use xlink:href="#icon-video"/></svg>
                                </div>
                                <div class="text">
                                    <div class="tag pale">VIDEO</div>
                                    <p class="date length">2 ore, 30 minut(e)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<?php include_once('views/_footer.php') ?>