import React from 'react'
import { Container, Row, Col } from 'react-bootstrap'

import Tilt from 'react-parallax-tilt'
import { AiFillGithub, AiOutlineTwitter, AiFillInstagram } from 'react-icons/ai'
import {
  FaFacebook,
  FaGithub,
  FaGitlab,
  FaInstagram,
  FaLinkedinIn,
} from 'react-icons/fa'
import myImg from '../../Assets/myPicB.jpg'

function Home2() {
  return (
    <Container fluid className="home-about-section" id="about">
      <Container>
        <Row>
          <Col md={8} className="home-about-description">
            <h1 style={{ fontSize: '2.6em' }}>
              LET ME <span className="green"> INTRODUCE </span> MYSELF
            </h1>
            <p className="home-about-body">
              I am
              <strong>
                {' '}
                <b className="green"> Jasdakorn Khumdej </b>
              </strong>
              <br />
              <br />I am fluent in classics like
              <i>
                <b className="green"> C++, C# , React and Javascript </b>
              </i>
              <br />
              <br />
              My field of Interest's are building new &nbsp;
              <i>
                <b className="green">Web Technologies and Products </b>
              </i>
              <br />
              <br />
              Whenever possible, I also apply my passion for developing products
              with <b className="green">Node.js</b> and
              <i>
                <b className="green">
                  {' '}
                  Modern Javascript Library and Frameworks
                </b>
              </i>
              &nbsp; like
              <i>
                <b className="green"> React.js and Next.js</b>
              </i>
            </p>
          </Col>
          <Col md={4} className="myAvtar">
            <Tilt>
              <img src={myImg} className="img-fluid" alt="avatar" />
            </Tilt>
          </Col>
        </Row>
        <Row>
          <Col md={12} className="home-about-social ">
            <h1>FIND ME ON</h1>
            <p>
              Feel free to <span className="green">connect </span>with me
            </p>
            <ul className="home-about-social-links">
              <li className="social-icons">
                <a
                  href="https://github.com/AekJ4s"
                  target="_blank"
                  rel="noreferrer"
                  className="icon-colour  home-social-icons"
                >
                  <FaGithub />
                </a>
              </li>
              <li className="social-icons">
                <a
                  href="https://www.facebook.com/akeza.hackrockgark/"
                  target="_blank"
                  rel="noreferrer"
                  className="icon-colour  home-social-icons"
                >
                  <FaFacebook />
                </a>
              </li>
              <li className="social-icons">
                <a
                  href="https://www.instagram.com/4ekkkkkkkkk/"
                  target="_blank"
                  rel="noreferrer"
                  className="icon-colour home-social-icons"
                >
                  <FaInstagram />
                </a>
              </li>
            </ul>
          </Col>
          <p>
            <span style={{ color: 'white' }}>My Telephone Number </span>
            <span className="green">061-9799-148 </span>
          </p>
        </Row>
      </Container>
    </Container>
  )
}
export default Home2
