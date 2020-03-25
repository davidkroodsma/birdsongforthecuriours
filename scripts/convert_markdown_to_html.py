
# coding: utf-8

# In[18]:

from __future__ import print_function
import markdown2
from os import listdir
import os
from os.path import isfile, join
# from __future__ import print_function
import re

def upper_repl(match):
     return '<small style="font-size: 75%">' + match.group(1).upper() + '</small>'


# In[19]:


# MP3 Text

mp3path = '../songs'
mp3s = [f for f in listdir(mp3path) if isfile(join(mp3path, f))]
mp3_lookup = {}
for m in mp3s:
    try:
        number = int(m[:3])
        mp3_lookup[number]=m
    except:
        print(m)
        
# player_text = u'''♫{}<div id="audio">
#     <audio controls  > 
#         <source src="songs/{}" type="audio/mpeg">
#     Your browser does not support the audio element.
#     </audio>
# </div>'''

player_text = u'''<div class='audio-element' style="margin-top: -1em;height:4em">
<audio src="songs/{song}" type="audio/mpeg" preload="none" ></audio>
<div class="track-details">  <a href='songs/{song}' download>download</a></div>
</div>'''


# In[20]:


# mp3s


# In[21]:


mypath = 'Explore_Markdown'
onlyfiles = [f for f in listdir(mypath) if isfile(join(mypath, f))]


# In[22]:


def make_table(table_text):
    text = '''
    <table>
'''
    for row in table_text.split("\n"):
        text += '''        <tr>
'''
        for item in row.split("  "):
            text+='''            <td>{}</td>
'''.format(item)
        text += '''        </tr>
'''
    text += '''    </table>'''
    return text


# In[23]:


# onlyfiles


# In[24]:


# ♫
explore_50_table = '''+-----------+-----------+-----------+-----------+-----------+-----------+
| Recording | Type of recording  | Begin time am     | Sunrise,[(a.m.)]{.smallcaps}   | Date, (2018)      | Duration, Min:sec  |
| 464      | stereo    | 6:07      | 6:34      | April 1   | 3:32      |
+-----------+-----------+-----------+-----------+-----------+-----------+
| 465      | monaural  | 5:57      | 6:27      | April 5   | 8:00      |
+-----------+-----------+-----------+-----------+-----------+-----------+
| 466      | monaural  | 5:54      | 6:27      | April 6   | 3:49      |
+-----------+-----------+-----------+-----------+-----------+-----------+
| 467      | stereo    | 5:45      | 6:15      | April 12  | 17:05     |
+-----------+-----------+-----------+-----------+-----------+-----------+
| 468      | monaural  | 5:38      | 6:12      | April 14  | 8:03      |
+-----------+-----------+-----------+-----------+-----------+-----------+
| 469      | monaural  | 5:42      | 6:10      | April 15  | 7:20      |
+-----------+-----------+-----------+-----------+-----------+-----------+
| 470      | monaural  | 5:38      | 6:05      | April 18  | 4:35      |
+-----------+-----------+-----------+-----------+-----------+-----------+
| 471      | monaural  | 5:24      | 5:53      | April 26  | 18:38     |
+-----------+-----------+-----------+-----------+-----------+-----------+
| 472      | monaural  | 5:08      | 5:42      | May 4     | 4:21      |
+-----------+-----------+-----------+-----------+-----------+-----------+
| 473      | monaural  | 5:01      | 5:41      | May 5     | 6:06      |
+-----------+-----------+-----------+-----------+-----------+-----------+
| 474      | monaural  | 5:04      | 5:40      | May 6     | 6:23      |
+-----------+-----------+-----------+-----------+-----------+-----------+
| 475      | monaural  | 4:56      | 5:38      | May 7     | 11:00     |
+-----------+-----------+-----------+-----------+-----------+-----------+
| 476      | monaural  | 4:57      | 5:37      | May 8     | 4:38      |
+-----------+-----------+-----------+-----------+-----------+-----------+'''.split("\n")

text = []
for e in explore_50_table:
    if e[0]=="+":
        continue
    e = e[2:-2].replace("  "," ").replace("  "," ").replace("  "," ").replace("  "," ").replace("  "," ").replace("  "," ")
    e = e.split(" | ")
#     print(e)
    t = "  ".join(e)
    text.append(t)
text = "\n".join(text)
table_50 = make_table(text)


# In[25]:


print(text)


# In[26]:


for fi in onlyfiles:
    with open(mypath+"/"+fi, 'r') as f:
        data = f.read()
    web_text = markdown2.markdown(data) 
    lines = web_text.split("\n")
    new_lines = []
    for line in lines:
        if line[:len("<p>Play-")]=="<p>Play-":
            number = line.split("-")[1].split("<")[0]
            number = int(number)
            line = player_text.format(song=mp3_lookup[number])
            
        new_lines.append(line)
        new_webtext = "\n".join(new_lines)
        
        
        new_webtext = new_webtext.replace('TABLE50', table_50)
        new_webtext = re.sub(r'\[(.*)\]\{\.smallcaps\}', upper_repl, new_webtext)
        new_webtext = new_webtext.replace('--','&mdash;') # fix m dash
        
    with open("Explore_HTML/"+fi.replace("md","html"), 'w') as f:
        f.write(new_webtext.encode("utf-8"))


# In[27]:


mypath = 'Species_Markdown'
onlyfiles = [f for f in listdir(mypath) if isfile(join(mypath, f))]


# In[28]:


# mp3_lookup


# In[29]:


cardinal_table1 = '''Example   Beginning time in recording   Content (female loud and near, male more distant)
  1         0:00                          6 male songs, 1 female song
  2         0:44                          4 male songs, 1 female song
  3         1:13                          6 male songs, 1 female song
  4         2:05                          7 male songs (some partial), 2 female songs
  5         3:02                          1 male song (distant), 1 female song
  6         3:13                          7 male songs, 2 female songs
  7         3:59                          1 female song with no audible male'''.replace("   ",'  ')
cardinal_table1= cardinal_table1.replace("   ",'  ')
cardinal_table1= cardinal_table1.replace("   ",'  ')
cardinal_table1= cardinal_table1.replace("   ",'  ')
cardinal_table1= cardinal_table1.replace("   ",'  ')
cardinal_table1= cardinal_table1.replace("   ",'  ')
cardinal_table1= cardinal_table1.replace("   ",'  ')
cardinal_table1= cardinal_table1.replace("   ",'  ')
cardinal_table1= cardinal_table1.replace("   ",'  ')
cardinal_table1= cardinal_table1.replace("\n  ",'\n')
print(cardinal_table1)


# In[30]:


cardinal_table2 = '''Example	Beginning time in recording	Content (female loud and near, male more distant)
1	0:00	2 male songs, 1 female song
2	0:13	1 male song, 1 female song
3	0:24	2 male songs, 1 female song
4	0:39	1 male song, 1 female song. Listen carefully: at 0:45 the female matches the male with a single note, but then she switches to another song type.
5	0:50	1 partial male song, 1 female song
6	1:00	1 male song, 1 female song
7	1:11	2 male songs, 1 female song
8	1:24	2 male songs, 1 female song
9	1:40	1 female song
10	1:50	1 female song'''.replace("\t",'  ')


# In[31]:


cardinal_table2 = cardinal_table2.replace("\n  ",'\n')
print(cardinal_table2)


# In[32]:


cardinal_table1 = (make_table(cardinal_table1))
cardinal_table2 = (make_table(cardinal_table2))


# In[33]:




for fi in onlyfiles:
    with open(mypath+"/"+fi, 'r') as f:
        data = f.read()
    web_text = markdown2.markdown(data)
    lines = web_text.split("\n")
    new_lines = []
    for line in lines:
        if line[:len("<p>Play-")]=="<p>Play-":
            number = line.split("-")[1].split("<")[0]
            number = int(number)
            line = player_text.format(song=mp3_lookup[number])
            
        new_lines.append(line)
    new_webtext = "\n".join(new_lines)
    new_webtext = re.sub(r'\[(.*)\]\{\.smallcaps\}', upper_repl, new_webtext)
    new_webtext = new_webtext.replace('CARDINALTABLE1', cardinal_table1)
    new_webtext = new_webtext.replace('CARDINALTABLE2', cardinal_table2)
    new_webtext = new_webtext.replace('--','&mdash;') # fix m dash
    with open("Species_HTML/"+fi.replace("md","html"), 'w') as f:
        f.write(new_webtext.encode("utf-8"))


# In[34]:


# print(carindal_table1)

