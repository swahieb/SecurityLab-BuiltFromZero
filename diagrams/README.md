# 🗺️ Security Lab Network Topology – Built From Scratch

## Overview

This Draw.io diagram (`lab-topology.drawio`) visually represents the internal network configuration of my home cybersecurity lab. The environment was created to safely simulate real-world penetration testing scenarios using VirtualBox virtual machines.

## Diagram Highlights

- **Host Platform:** Oracle VirtualBox (running on a physical Windows machine)
- **Attacking Machine:** Kali Linux VM  
  - IP: `10.38.1.110`  
- **Target Machine:** Mr. Robot Vulnerable VM (from VulnHub)  
  - IP: `10.38.1.111`
- **Network Type:** Internal VirtualBox network named `"loki"`
- **DHCP Configuration:**  
  - Server IP: `10.38.1.1`  
  - IP Range: `.110 – .120`  
  - Subnet: `255.255.255.0`

## Tools Used

- Oracle VirtualBox & Extension Pack  
- Kali Linux (2024.4)  
- Mr. Robot OVA from VulnHub  
- `VBoxManage` CLI for DHCP and internal network setup  
- Draw.io for diagram creation

## Purpose

This lab topology provides an isolated environment for ethical hacking and Capture The Flag (CTF) practice. By using internal networking, the vulnerable VM and attacker machine are kept separate from the host's real network, ensuring a safe and legal testing ground.

---

**Author:** `@swahieb`  
**Created:** June 2025
