import numpy as np

filename = 'DP08.txt.bin'

hex_data = np.fromfile(filename, dtype='uint8')
data = np.unpackbits(hex_data)


output_data_bin = []
output_data_hex = []
output_data_int = []
output_data_ascii = []

j = 0
for size in range(hex_data.size):
    line_string = ''
    for i in range(8):
        line_string += str(data[i+8*j])
    j += 1
    output_data_bin.append(line_string)
    output_data_hex.append(hex(int(line_string, 2)))
    output_data_int.append(int(line_string, 2))
    output_data_ascii.append(chr(int(line_string, 2)))


float_size = 4
float_num = ''
for i,(b,h,int_val, char_val) in enumerate(zip(output_data_bin, output_data_hex, output_data_int, output_data_ascii)):
    float_num += b
    if (i+1) % (float_size) == 0:
        float_num = bytes(float_num, 'utf-8')#np.frombuffer(bin(int(float_num, 2)), dtype=np.float32)
        print(i, '\t', b, '\t', h, '\t', int_val, '\t', char_val, '\t', float_num)
        print()
        float_num = ''
    else:
        print(i, '\t', b, '\t', h, '\t', int_val, '\t', char_val)
