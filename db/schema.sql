CREATE TABLE IF NOT EXISTS "portfolios" (
    "id" INTEGER PRIMARY KEY,
    "title" TEXT,
    "description" TEXT,
    "image" TEXT,
    "url" TEXT,
    "category" TEXT,
    "gallery_order" INTEGER,
    "created_at" TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    "updated_at" TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);