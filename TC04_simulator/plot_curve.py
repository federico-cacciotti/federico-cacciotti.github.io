import numpy as np
from matplotlib import pyplot as plt
from matplotlib import cm
cmap = cm.get_cmap('coolwarm', lut=None)
path = 'web/calib/'


fig = plt.figure(figsize=(7,7))
ax = fig.gca()

filenames_thermistors = ['GR50_G31.txt', 'Ge_Cryomech.txt', 'RuOx13_new.txt', 'RuOx13_.txt', 'RuOX13.txt', 'RuOx15.txt', 'RuOx16.txt']

for i,filename in enumerate(filenames_thermistors):
    temperature, voltage = np.loadtxt(path+filename, unpack=True)
    ax.plot(temperature, voltage, linestyle='solid', color=cmap(i/len(filenames_thermistors)), label=path+filename)

ax.set_xlabel('Temperature [K]')
ax.set_ylabel('Resistance [Ohm]')

ax.set_yscale('log')
ax.set_xscale('log')

ax.grid(color='gray', linestyle='dashed', alpha=0.4)

ax.legend(loc='best')

plt.show()



fig = plt.figure(figsize=(7,7))
ax = fig.gca()

filenames_diodes = ['DP07.txt', 'DP08.txt']

for i,filename in enumerate(filenames_diodes):
    temperature, voltage = np.loadtxt(path+filename, unpack=True)
    ax.plot(temperature, voltage, linestyle='solid', color=cmap(i/len(filenames_diodes)), label=path+filename)

ax.set_xlabel('Temperature [K]')
ax.set_ylabel('Voltage [V]')


ax.grid(color='gray', linestyle='dashed', alpha=0.4)

ax.legend(loc='best')

plt.show()