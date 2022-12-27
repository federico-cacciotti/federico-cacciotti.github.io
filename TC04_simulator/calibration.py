import sys
sys.path.insert(0, '/Users/federicocacciotti/Documents/GitHub/G31_thermometry/src/')
from G31_thermometry import Diode, Thermistor

# diodes
DP07 = Diode(model='DP07')
DP08 = Diode(model='DP08')
DT670 = Diode(model='DT670', serial_no='D6068043')

import matplotlib.pyplot as plt
fig = plt.figure(figsize=(7,7))
ax = fig.gca()
DP07.plotCalibrationCurve(ax=ax, linestyle='solid')
DP08.plotCalibrationCurve(ax=ax, linestyle='dashed')
DT670.plotCalibrationCurve(ax=ax, color='red')

# thermistors
Ge_cryomech = Thermistor(model='Ge_cryomech')
GR50 = Thermistor(model='GR50_G31')
RuOx13 = Thermistor(model='RuOx13')
RuOx15 = Thermistor(model='RuOx15')
RuOx16 = Thermistor(model='RuOx16')

import matplotlib.pyplot as plt
fig = plt.figure(figsize=(7,7))
ax = fig.gca()
Ge_cryomech.plotCalibrationCurve(ax=ax, linestyle='solid')
GR50.plotCalibrationCurve(ax=ax, linestyle='dashed')
RuOx13.plotCalibrationCurve(ax=ax, linestyle='solid', color='green')
RuOx15.plotCalibrationCurve(ax=ax, linestyle='solid', color='blue')
RuOx16.plotCalibrationCurve(ax=ax, linestyle='solid', color='red')