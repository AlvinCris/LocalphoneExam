The scalability of my solution:
  > Made a table for locations (tbllocations), we can dynamically add locations
  > Made a table for products (tblproducts), it has a LocationId which refers to the tbllocations Id field
  > Made a table for racks (tblracks), we can dynamically add racks
  > Made a table for picking stations (tblstations), which has a RackId so that we can dynamically add picking locations
  > Made use of arrays to construct the floor plan that is connected to the tables inside the database
  > Made a single page (Web2.0 concept), for easy implementation & testing