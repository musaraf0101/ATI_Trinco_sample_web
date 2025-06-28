<style>
  .vision-mission-section {
    /* background-color: #1a064d; */
    padding: 60px 0;
    color: white;
  }

  .vision-mission-box {
    background-color: #dcdcdc;
    border: black 1px solid;
    border-radius: 10px;
    padding: 30px;
    text-align:center;
    transition: 0.3s;
  }

  .vision-mission-box:hover {
    background-color: #cfcfcf;
  }

  .bi-newspaper,
  .bi-eye {
    color: black;
  }

  .institute-heading {
    text-align: center;
    font-weight: bold;
    margin-top: 40px;
    margin-bottom: 20px;
    font-size: 1.2rem;
  }

  .about-details {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 60px;
  }

  .about-details img {
    max-width: 100%;
    border-radius: 10px;
  }
  .director{
    border-radius:10% 0%;
    width:300px;
    height: 200px;
    border: black 2px solid;
  }
  .position{
    color: #cfcfcf;
    text-transform: uppercase;
  }
  .name{
    color: #000;
  }
  .read_more{
    color: #000;
    text-decoration: none;
  }
  .read_more:hover{
    border: 1px solid #ccc;
    color: #fff;
    background-color: blue;
    padding: 10px 20px;
    border-radius: 8px;
  }
</style>
<!-- Vision and Mission -->
<div class="vision-mission-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="vision-mission-box">
          <i class="bi bi-eye fs-1"></i>
          <p class="mt-2 fw-bold text-dark">Our Vision</p>
          <p class="text-dark" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Laborum ut mollitia ratione quibusdam illo autem non fugit, cumque
            possimus nesciunt eos rerum voluptates inventore, delectus accusantium aspernatur.
            Voluptates, quis optio.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="vision-mission-box">
          <i class="bi bi-newspaper fs-1"></i>
          <p class="mt-2 fw-bold text-dark">Our Mission</p>
          <p class="text-dark" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores culpa numquam a
            laboriosam fugit consequuntur, atque ducimus delectus mollitia labore, maiores vel
            praesentium deserunt temporibus, sunt alias nesciunt illum quia?</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- institute -->
<div class="container text-center">
  <div class="row about-details">
    <div class="institute-heading">
      <em>SRI LANKA INSTITUTE OF ADVANCED TECHNOLOGICAL EDUCATION</em><br />
      <strong>Trincomalee</strong>
    </div>
    <div class="col">
      <img src="/img/trinco.jpg" alt="ATI Trincomalee" />
    </div>
    <div class="col" style="text-align:justify;">
      <p>
        As per the recommendations of the Committee appointed by Prof. Wiswa Waranapala, Deputy Minister of Higher Education in 1994,
        the Sri Lanka Institute of Advanced Technical Education (SLIATE) was formed in 1995, under the Sri Lanka Institute of Advanced
        Technical Education Act No. 29 of 1995. In 2001 the name of the institution was amended to read as Sri Lanka Institute of Advanced
        Technological Education, (SLIATE). It functions as an autonomous Institute for the management of Higher National and National Diploma
        courses.
      </p>
      <p>
        The main purposes of establishing SLIATE were to reform and restructure the entire technical and vocational education system in
        relation to the changing needs of economic development, to meet manpower requirements of national development strategies,
        and the promotion of privatization, with special concern for meeting the scarcity of trained technological manpower
        resources at the technician level.
      </p>
      <p>
        The SLIATE is a statutory body operating under the purview of Ministry of Higher Education and is one of
        the leading higher educational institutions in Sri Lanka.
      </p>
      <p>
        SLIATE has been focusing on fostering Advanced Technical Education at a post secondary level. It is mandated to
        establish Advanced Technological Institute (ATI) in every province for technological courses. At present it manages and
        supervises Twelve Advanced Technological Institutes and Six Sections.
      </p>
      <p>
        SLIATE is headed by a Director General while each of its institutes is headed by a Director.
        All academic sections of SLIATE and its institutions are headed by Academic Coordinators.
      </p>
    </div>
  </div>
</div>
<div class="container py-4 text-center">
  <div class="row mt-4">
    <div class="col-md-6 mb-4">
      <div class="card shadow-sm border-0 rounded-4 h-100">
        <div class="card-body">
          <img src="{{asset('/img/trinco.jpg')}}" class="director" alt="image">
          <h4 class="card-title name">Director General name</h4>
          <h5 class="card-title position">Director General</h5>
          <p class="card-text text-muted">
            To simplify and secure the way people connect with qualified service providers, making everyday problems easier to solve.
          </p>
          <a href="/message/director-genrel" class="read_more">Read more...</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 mb-4">
      <div class="card shadow-sm border-0 rounded-4 h-100">
        <div class="card-body">
          <img src="{{asset('/img/trinco.jpg')}}" class="director" alt="image">
          <h4 class="card-title name">Director name</h4>
          <h5 class="card-title position">Director</h5>
          <p class="card-text text-muted">
            We're not just a directory. We're a solution-focused platform that ensures quality, reliability, and customer satisfaction with every interaction.
          </p>
          <a href="/message/director" class="read_more">Read more...</a>
        </div>
      </div>
    </div>
  </div>
</div>