import React from 'react'
import { Container, Row, Col } from 'react-bootstrap'
import { AiFillGithub, AiOutlineTwitter, AiFillInstagram } from 'react-icons/ai'
import { FaFacebook, FaGithub, FaGitlab, FaLinkedinIn } from 'react-icons/fa'

function Footer() {
  let date = new Date()
  let year = date.getFullYear()
  return (
    <Container fluid className="footer">
      <Row>
        <Col md="4" className="footer-copywright">
          <h3>
            Designed and Developed by{' '}
            <span className="purple">Jasdakorn Khumdej</span>
          </h3>
        </Col>
        <Col md="4" className="footer-copywright">
          <h3>Create in © {year} SB</h3>
        </Col>
        <Col md="4" className="footer-body">
          <ul className="footer-icons">
            <li className="social-icons">
              <a
                href="https://github.com/AekJ4s"
                style={{ color: 'white' }}
                target="_blank"
                rel="noopener noreferrer"
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
                <AiFillInstagram />
              </a>
            </li>
          </ul>
        </Col>
      </Row>
    </Container>
  )
}

export default Footer
