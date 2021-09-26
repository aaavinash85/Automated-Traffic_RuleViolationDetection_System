# Automated-Traffic-Rule-Violation-Detection-System

## Introduction

The number of vehicles has increased drastically in the last few decades making it difficult to monitor each and every vehicle for traffic management and law enforcement purposes. We proposed a computer vision-based solution using deep learning that automatically detects traffic violators.
The main objective is to detect vehicles that do not follow the rules of traffic, such as overspeeding, overloading, not wearing a helmet and running on the wrong side of the road. We use Yolov3 for object detection and DeepSort for tracking the vehicles and pedestrians. The system detects the type of violation along with the vehicle information, maintains a log of violations, provides a detailed dashboard and provides alerts to the traffic police personnel. The logs can also be used for forensic purposes.

## Prerequisites

The following dependencies must be installed in order to run the project

* Python3
* Cv2
* Dlib
* Imutil
<br>
You also need to download the YOLO weight file which is available online. 

## Tasks Breakdown
1. Vehicle Detection
    - We are using Haarcascade classifier to identify vehicles.
2. Vehicle Tracking - ( assigning IDs to vehicles )
    - We have used corelation tracker from dlib library.
3. Speed Calculation
    - We are calculating the distance moved by the tracked vehicle 
		  in a second, in terms of pixels, so we need pixel per meter
		  to calculate the distance travelled in meters.
	- With distance travelled per second in meters, we will get the 
		  speed of the vehicle.
4. Helmet Detection 
     - We have used Yolo to detect Vehicles

## Usage
  - main.py is the main file
  - python3 main.py
 
