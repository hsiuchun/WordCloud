# Wordcloud
First,we should install the package below.
```cmd
pip install wordcloud
pip install jieba
pip install simplejson
```
## only english
If the text is written only with english, you can run this program with your text.    
You can transform the "text.txt" to your text.
```python
#upload the text and the mask picture

import matplotlib.pyplot as plt
from wordcloud import WordCloud
import jieba
text_from_file_with_apath = open('test.txt').read()
wordlist_after_jieba = jieba.cut(text_from_file_with_apath, cut_all = True)
wl_space_split = " ".join(wordlist_after_jieba)
my_wordcloud = WordCloud().generate(wl_space_split)
plt.imshow(my_wordcloud)
plt.axis("off")
plt.show()
```
**result**
--
![](https://raw.githubusercontent.com/hsiuchun/first_work/master/test.png "test.png")
## chinese with image mask
If the text is existing chiness character, you can run this program with your text.   
You can transform the "text.txt" to your text, and remember add the font template which including the chiness character.
And if you wamt to have a image mask with your word cloud, add the mask image.

```python
import matplotlib.pyplot as plt
from wordcloud import WordCloud
import jieba
text_from_file_with_apath = open('testch.txt',encoding='utf8').read()
wordlist_after_jieba = jieba.cut(text_from_file_with_apath, cut_all = True)
wl_space_split = " ".join(wordlist_after_jieba)
font_path = 'irohamaru-Regular.ttf' #add a font template which can display the chiness character.

from PIL import Image
import numpy as np
abel_mask = np.array(Image.open("1-150616211Q40-L.jpg")) #add the mask image

my_wordcloud = WordCloud(background_color='white',mask=abel_mask,font_path=font_path).generate(wl_space_split)
plt.imshow(my_wordcloud)
plt.axis("off")
plt.show()
```
**result**
--
![]( https://raw.githubusercontent.com/hsiuchun/first_work/master/testch.png "testch.png")
