import matplotlib.pyplot as plt
from wordcloud import WordCloud
import jieba
text_from_file_with_apath = open('C:/Users/why89/Desktop/testch.txt',encoding='utf8').read()
wordlist_after_jieba = jieba.cut(text_from_file_with_apath, cut_all = True)
wl_space_split = " ".join(wordlist_after_jieba)
font_path = 'C:/Users/why89/Documents/Kingsoft/office6/fonts/irohamaru-Regular.ttf'

from PIL import Image
import numpy as np
abel_mask = np.array(Image.open("C:/Users/why89/Desktop/1-150616211Q40-L.jpg"))

my_wordcloud = WordCloud(background_color='white',mask=abel_mask,font_path=font_path).generate(wl_space_split)
plt.imshow(my_wordcloud)
plt.axis("off")
plt.show()