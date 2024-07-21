# containers
My personal Docker stacks, containers and Docker compose files

## Table of content
- [containers](#containers)
  - [Table of content](#table-of-content)
  - [Stacks](#stacks)
  - [Repository summary](#repository-summary)
  - [License](#license)

## Stacks
Directory | Stack | Note
--- | --- | ---
apt-cacher-ng | sameersbn/apt-cacher-ng | APT package caching
cloudflare-ddns | favonia/cloudflare-ddns | Cloudflare DDNS client
core-stack | Portainer agent, Dockge, AutoHeal, cAdvisor, Watchtower & Doku | My base core stack for every container host server
core-stack-client | Portainer + Dozzle | Client for the Core-Stack services
dns-adguard | AdGuard Home | AD Blocking DNS server in a box
dns-pihole | PiHole DNS server | AD Blocking DNS server in a box
exporter-stack | PiHole exporter, Speedtest exporter and Exportarr (Lidarr, Sonarr, Radarr, etc.) | Exporters for Prometheus
filebot | Filebot | Manage media files
fileflows | FileFlows | Manage media files
gatus | gatus | Monitoring services
homebridge | Homebridge | HomeBridge for Apple HomeKit
jenkins | Jenkins | CI/CD
jetbrains-datalore | Jetbrains DataLore | Self-hosted Data Science Platform for Teams
jetbrains-teamcity | Jetbrains TeamCity | The Hassle-Free CI/CD Tool by JetBrains
jetbrains-yourtrack | Jetbrains YourTrack | Everything in one place. Track tasks, manage projects, maintain a knowledge base, support your customers, collaborate, and deliver great products.
minio | Minio | S3 & Kubernetes Native Object Storage
overseerr | Overseerr | Request management and media discovery tool for the Plex ecosystem
pihole-sync | pihole-sync | Sync two PiHole systems
portainer | Portainer | Manage docker hosts easy
sso-stack | Authentik | Self-hosted, open source identity provider 
statsping-ng | statsping-ng | Monitor your websites, microservices and other servers with an awesome open source application that creates a welcoming status page for your end users.
trakt | plextraktsync | Track what you watch and when. Discover what's hot and where you can watch it. Share comments, ratings and recommendations.
unifi | UniFi | The UniFi network controller allows you to manage your UniFi network devices from an easy-to-use self-hosted dashboard.
uptime-kuma | Uptime Kuma | A fancy self-hosted monitoring tool

## Repository summary

Description | Status
---- | ------
License | ![GitHub](https://img.shields.io/github/license/Bastiaantjuhh/containers)
Commits | ![GitHub commit activity](https://img.shields.io/github/commit-activity/m/Bastiaantjuhh/containers)
Language | ![GitHub top language](https://img.shields.io/github/languages/top/Bastiaantjuhh/containers)
Open issues | ![GitHub issues](https://img.shields.io/github/issues/Bastiaantjuhh/containers)
Closed issues | ![GitHub closed issues](https://img.shields.io/github/issues-closed/Bastiaantjuhh/containers)
Pull requests | ![GitHub pull requests](https://img.shields.io/github/issues-pr-raw/Bastiaantjuhh/containers)
Closed pull requests | ![GitHub closed pull requests](https://img.shields.io/github/issues-pr-closed-raw/Bastiaantjuhh/containers)
Repo Size | ![GitHub repo size](https://img.shields.io/github/repo-size/Bastiaantjuhh/containers)

## License
This project is licensed under the [MIT License](https://github.com/Bastiaantjuhh/containers/blob/master/LICENSE). You are encouraged to embed the project into your other projects, as long as the license permits.

> MIT License
> 
> Copyright (c) 2024 Bastiaan de Hart
> 
> Permission is hereby granted, free of charge, to any person obtaining
> a copy of this software and associated documentation files (the
> "Software"), to deal in the Software without restriction, including
> without limitation the rights to use, copy, modify, merge, publish,
> distribute, sublicense, and/or sell copies of the Software, and to
> permit persons to whom the Software is furnished to do so, subject to
> the following conditions:
> 
> The above copyright notice and this permission notice shall be
> included in all copies or substantial portions of the Software.
> 
> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
> EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
> MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
> IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
> CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
> TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
> SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
