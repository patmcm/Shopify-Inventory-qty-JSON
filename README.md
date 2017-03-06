# Shopify-Inventory-qty-JSON
A quick PHP script that echos your Shopify store's variant skus and inventory values in JSON.

# Introduction
While this script is extremely basic, I've used it numerous times to quickly get the Inventory Values of a Shopify Store.

I've also used this with the Json to Csv converter made by @konklone https://konklone.io/json/ to update spreadsheets!

# Instructions
Create a Private app on your Shopify store and add the credentials to the top of the code. 

Shopify's Api handles the parsing of variant SKUs and inventory via the HTTP Request. The limit is 250 variants per request so we loop through the pages of variant SKUs your store has.

Best to check how many pages your store has by pasting this in your URL while signed into Shopify Admin:
"https://STORE.myshopify.com/admin/variants.json?limit=250&page=1&fields=sku,inventory_quantity"
  
Make sure to change "STORE" to your store's name, and find where the "page" value ends (keep adding one until there are no responses, skip ahead and work back if there are a lot).

Add the last page value that still had a response on it to the FOR LOOP in the code (default is 11, change it accordingly).

# How To Run
It's PHP so from your local Apache server is perfect. Probably even a shared host, it's super light so have fun!

Please feel free to download or commit! Thank you.
