CREATE TABLE Customer (
  ID         int(10) NOT NULL, 
  Username   varchar(255) NOT NULL, 
  Email      varchar(255) NOT NULL, 
  Password   varchar(25) NOT NULL, 
  FirstName  varchar(255) NOT NULL, 
  LastName   varchar(255) NOT NULL, 
  Gender     varchar(255) NOT NULL, 
  Phone      int(11) NOT NULL, 
  Address1   varchar(255) NOT NULL, 
  Address2   varchar(255) NOT NULL, 
  City       varchar(255) NOT NULL, 
  State      varchar(255) NOT NULL, 
  Country    varchar(255) NOT NULL, 
  PostalCode int(10) NOT NULL, 
  PRIMARY KEY (ID));
CREATE TABLE Review (
  ID         int(10) NOT NULL AUTO_INCREMENT, 
  CustomerID int(10) NOT NULL, 
  Comment    varchar(1000) NOT NULL, 
  Rating     int(1) NOT NULL, 
  PRIMARY KEY (ID));
CREATE TABLE `Order` (
  ID                        int(10) NOT NULL AUTO_INCREMENT, 
  CustomerID                int(10) NOT NULL, 
  OrderTime                 time(7) NOT NULL, 
  OrderDate                 date NOT NULL, 
  Shopping_CartOrder_ItemID int(10) NOT NULL, 
  PRIMARY KEY (ID));
CREATE TABLE Item (
  Code            int(10) NOT NULL AUTO_INCREMENT, 
  Name            varchar(255) NOT NULL, 
  ItemDescription varchar(255) NOT NULL, 
  QtyInStock      int(10) NOT NULL, 
  BuyPrice        numeric(19, 0) NOT NULL, 
  PRIMARY KEY (Code));
CREATE TABLE Menu (
  ItemCode int(10) NOT NULL);
CREATE TABLE Payment (
  CheckNum    varchar(255) NOT NULL, 
  CustomerID  int(10) NOT NULL, 
  PaymentDate date NOT NULL, 
  Amount      numeric(19, 0) NOT NULL, 
  PRIMARY KEY (CheckNum));
CREATE TABLE Receipt (
  Receipt         int(10) NOT NULL AUTO_INCREMENT, 
  CustomerID      int(10) NOT NULL, 
  PaymentCheckNum varchar(255) NOT NULL, 
  OrderID         int(10) NOT NULL, 
  GenerateDate    date NOT NULL, 
  PRIMARY KEY (Receipt));
CREATE TABLE Order_List (
  OrderQueue  int(10) NOT NULL AUTO_INCREMENT, 
  OrderID     int(10) NOT NULL, 
  OrderStatus varchar(255) NOT NULL, 
  PRIMARY KEY (OrderQueue));
CREATE TABLE Order_Item (
  ID        int(10) NOT NULL AUTO_INCREMENT, 
  ItemCode  int(10) NOT NULL, 
  Qty       int(10) NOT NULL, 
  PriceEach numeric(19, 0) NOT NULL, 
  PRIMARY KEY (ID));
CREATE TABLE Shopping_Cart (
  Order_ItemID int(10) NOT NULL, 
  PRIMARY KEY (Order_ItemID));
CREATE TABLE Delivery (
  ID                   int(10) NOT NULL AUTO_INCREMENT, 
  Order_ListOrderQueue int(10) NOT NULL, 
  DeliveryDate         date NOT NULL, 
  DeliveryTime         time(7) NOT NULL, 
  DeliveryStatus       varchar(255) NOT NULL, 
  PRIMARY KEY (ID));
CREATE TABLE Staff (
  ID                   int(10) NOT NULL AUTO_INCREMENT, 
  FirstName            varchar(255) NOT NULL, 
  LastName             varchar(255) NOT NULL, 
  JobTitle             varchar(100) NOT NULL, 
  Email                varchar(255) NOT NULL, 
  Username             varchar(255) NOT NULL, 
  Password             varchar(25) NOT NULL, 
  Order_ListOrderQueue int(10) NOT NULL, 
  StoreCode            int(10) NOT NULL, 
  PRIMARY KEY (ID));
CREATE TABLE DeliveryMan (
  DeliveryID int(10) NOT NULL, 
  FirstName  varchar(255) NOT NULL, 
  LastName   varchar(255) NOT NULL, 
  Username   varchar(255) NOT NULL, 
  Password   varchar(25) NOT NULL, 
  Email      varchar(255) NOT NULL, 
  Phone      int(11) NOT NULL);
CREATE TABLE Store (
  Code       int(10) NOT NULL AUTO_INCREMENT, 
  City       varchar(255) NOT NULL, 
  Phone      int(11) NOT NULL, 
  Address1   varchar(255) NOT NULL, 
  Address2   varchar(255) NOT NULL, 
  State      varchar(255) NOT NULL, 
  Country    varchar(255) NOT NULL, 
  PostalCode int(10) NOT NULL, 
  PRIMARY KEY (Code));
CREATE TABLE Administrator (
  ID        int(10) NOT NULL AUTO_INCREMENT, 
  FirstName varchar(255) NOT NULL, 
  LastName  varchar(255) NOT NULL, 
  Email     varchar(255) NOT NULL, 
  Username  varchar(255) NOT NULL, 
  Password  varchar(25) NOT NULL, 
  StoreCode int(10) NOT NULL, 
  PRIMARY KEY (ID));
ALTER TABLE `Order` ADD CONSTRAINT FKOrder556711 FOREIGN KEY (CustomerID) REFERENCES Customer (ID);
ALTER TABLE Menu ADD CONSTRAINT FKMenu452447 FOREIGN KEY (ItemCode) REFERENCES Item (Code);
ALTER TABLE Payment ADD CONSTRAINT FKPayment75777 FOREIGN KEY (CustomerID) REFERENCES Customer (ID);
ALTER TABLE Receipt ADD CONSTRAINT FKReceipt921862 FOREIGN KEY (CustomerID) REFERENCES Customer (ID);
ALTER TABLE Receipt ADD CONSTRAINT FKReceipt156158 FOREIGN KEY (PaymentCheckNum) REFERENCES Payment (CheckNum);
ALTER TABLE Receipt ADD CONSTRAINT FKReceipt25420 FOREIGN KEY (OrderID) REFERENCES `Order` (ID);
ALTER TABLE Review ADD CONSTRAINT FKReview380693 FOREIGN KEY (CustomerID) REFERENCES Customer (ID);
ALTER TABLE Order_List ADD CONSTRAINT FKOrder_List286387 FOREIGN KEY (OrderID) REFERENCES `Order` (ID);
ALTER TABLE Order_Item ADD CONSTRAINT FKOrder_Item307080 FOREIGN KEY (ItemCode) REFERENCES Item (Code);
ALTER TABLE Shopping_Cart ADD CONSTRAINT FKShopping_C101954 FOREIGN KEY (Order_ItemID) REFERENCES Order_Item (ID);
ALTER TABLE `Order` ADD CONSTRAINT FKOrder625383 FOREIGN KEY (Shopping_CartOrder_ItemID) REFERENCES Shopping_Cart (Order_ItemID);
ALTER TABLE Delivery ADD CONSTRAINT FKDelivery790234 FOREIGN KEY (Order_ListOrderQueue) REFERENCES Order_List (OrderQueue);
ALTER TABLE Staff ADD CONSTRAINT FKStaff882782 FOREIGN KEY (Order_ListOrderQueue) REFERENCES Order_List (OrderQueue);
ALTER TABLE DeliveryMan ADD CONSTRAINT FKDeliveryMa443268 FOREIGN KEY (DeliveryID) REFERENCES Delivery (ID);
ALTER TABLE Staff ADD CONSTRAINT FKStaff2713 FOREIGN KEY (StoreCode) REFERENCES Store (Code);
ALTER TABLE Administrator ADD CONSTRAINT FKAdministra475433 FOREIGN KEY (StoreCode) REFERENCES Store (Code);
