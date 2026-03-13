# MEGABOX Renewal

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.x-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-ES6-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![jQuery](https://img.shields.io/badge/jQuery-3.7-0769AD?style=for-the-badge&logo=jquery&logoColor=white)
![Swiper](https://img.shields.io/badge/Swiper-12-6332F6?style=for-the-badge&logo=swiper&logoColor=white)
![Kakao%20Maps](https://img.shields.io/badge/Kakao_Maps-API-FFCD00?style=for-the-badge&logo=kakaotalk&logoColor=000000)
![OpenWeather](https://img.shields.io/badge/OpenWeather-API-E96E50?style=for-the-badge&logo=openweathermap&logoColor=white)

메가박스 웹사이트를 기반으로 메인 경험과 상세 탐색 흐름을 다시 구성한 개인 리뉴얼 프로젝트입니다.  
브랜드 무드를 유지하면서도 영화 탐색, 프로모션 노출, 상세 페이지 몰입감, 로그인/회원가입 흐름을 직접 구현하는 데 초점을 맞췄습니다.

## 프로젝트 소개

이 프로젝트는 단순 클론보다 "사용자가 실제로 둘러보는 흐름"에 집중했습니다.

- 메인 페이지에서 영화, 이벤트, 큐레이션, 특별관 정보를 한 번에 탐색할 수 있도록 구성
- 영화 상세 페이지에서 예고편, 스틸컷, 관람평을 묶어 콘텐츠 소비 경험 강화
- 로그인/회원가입과 아이디 중복 확인까지 연결해 기본 회원 흐름 구현
- 위치 기반 날씨 정보와 내 주변 메가박스 탐색 위젯으로 실사용 감각 보강

## 구현 페이지

| 메인 페이지                                                                                    | 영화 상세 페이지                                                                                               |
| ---------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| <p align="center"><img src="이미지_URL_추가" alt="메인 페이지 스크린샷" width="100%" /></p>    | <p align="center"><img src="이미지_URL_추가" alt="영화 상세 페이지 스크린샷" width="100%" /></p>               |
| <p align="center"><a href="https://megaboxapp.dothome.co.kr/" target="_blank">바로가기</a></p> | <p align="center"><a href="https://megaboxapp.dothome.co.kr/movie-detail.php" target="_blank">바로가기</a></p> |

| 로그인 페이지                                                                                           | 회원가입 페이지                                                                                            |
| ------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| <p align="center"><img src="이미지_URL_추가" alt="로그인 페이지 스크린샷" width="100%" /></p>           | <p align="center"><img src="이미지_URL_추가" alt="회원가입 페이지 스크린샷" width="100%" /></p>            |
| <p align="center"><a href="https://megaboxapp.dothome.co.kr/login.php" target="_blank">바로가기</a></p> | <p align="center"><a href="https://megaboxapp.dothome.co.kr/register.php" target="_blank">바로가기</a></p> |

## 주요 기능

### 메인 페이지

- 박스오피스 / 상영예정작 탭 전환과 커스텀 슬라이드 인터랙션
- 이벤트 영역 무한 캐러셀, 큐레이션 로테이션, 공지사항 슬라이더 구현
- 메인 팝업, 퀵메뉴, 특별관 소개 등 브랜드형 랜딩 페이지 구성

### 영화 상세 페이지

- 예고편 Swiper + 오버레이 비디오 재생
- Masonry 기반 스틸컷 갤러리와 이미지 확대 보기
- 탭 메뉴를 활용한 상세 정보 전환

### 사용자 흐름

- 회원가입 유효성 검사
- AJAX 아이디 중복 확인
- PHP + MySQL 기반 로그인 / 세션 처리
- 비밀번호 해시 저장

### 위젯 기능

- OpenWeather API를 활용한 현재 날씨 / 미세먼지 표시
- Kakao Maps API 기반 내 주변 메가박스 탐색
- 검색 패널 / 사이트맵 토글 인터랙션
