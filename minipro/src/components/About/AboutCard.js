import React from 'react'
import Card from 'react-bootstrap/Card'
import { FaBasketballBall } from 'react-icons/fa'
import { IoGameController } from 'react-icons/io5'
import { MdModeOfTravel } from 'react-icons/md'
function AboutCard() {
  return (
    <Card className="quote-card-view">
      <Card.Body>
        <blockquote className="blockquote mb-0">
          <p style={{ textAlign: 'justify' }}>
            Hi Everyone, I am <span className="green">Jasdakorn Khumdej </span>
            from <span className="green"> Bangkok, Thailand.</span>
            <br />
            I have completed the bachelor's level. in electronic computer
            technology at King Mongkut University of North Bangkok.
            <br />
            <br />
            Apart from coding, some other activities that I love to do!
          </p>
          <ul>
            <li className="about-activity">
              <FaBasketballBall></FaBasketballBall>&nbsp; Playing BasketBall
            </li>

            <li className="about-activity">
              <IoGameController></IoGameController>&nbsp; Playing Games
            </li>
            <li className="about-activity">
              <MdModeOfTravel></MdModeOfTravel>&nbsp; Travelling
            </li>
          </ul>

          <p style={{ color: 'rgb(102, 255, 0)' }}>
            "I want a stable job, a good society, and a lot of money."{' '}
          </p>
          <footer className="blockquote-footer">Jasdakorn Khumdej</footer>
        </blockquote>
      </Card.Body>
    </Card>
  )
}

export default AboutCard
