# Attention: ceci est la version python
import os
try:
  import requests
except:
  os.system("pip install requests")

website = 'https://your-website.com'
r  = requests.get(website)
if r.status_code >= 400:
  print(f"Client error for: {website}")
elif r.status_code >= 500:
  print(f"Server error for: {website}")
