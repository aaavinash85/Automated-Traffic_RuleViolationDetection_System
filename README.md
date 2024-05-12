# Automated Traffic Rule Violation Detection System

## Introduction

In an era of escalating vehicle numbers, traditional methods of traffic monitoring and law enforcement struggle to keep pace. To address this challenge, we've developed a computer vision-based solution leveraging deep learning techniques. Our system autonomously identifies traffic violators, targeting offenses such as overspeeding, overloading, lack of helmet usage, and wrong-way driving. By employing YOLOv3 for object detection and DeepSort for vehicle and pedestrian tracking, we achieve comprehensive surveillance capabilities. The system not only identifies violations and captures vehicle details but also maintains a comprehensive violation log, offers an intuitive dashboard, and sends alerts to law enforcement personnel. Moreover, the collected data serves forensic purposes, enhancing accountability and law enforcement efficiency.

## Prerequisites

Ensure the following dependencies are installed to execute the project successfully:

- Python 3
- OpenCV (Cv2)
- Dlib
- Imutil

Additionally, download the YOLO weight file, readily available online, for model initialization.

## Tasks Breakdown

1. **Vehicle Detection**
    - Utilize a Haarcascade classifier for initial vehicle identification.
2. **Vehicle Tracking (Assigning IDs)**
    - Employ dlib's Corelation tracker for seamless vehicle tracking.
3. **Speed Calculation**
    - Determine vehicle speed by computing distance traveled per second in meters.
4. **Helmet Detection**
    - Employ YOLO for detecting helmets.

## Usage

Execute the project using the `main.py` file:

```bash
python3 main.py
