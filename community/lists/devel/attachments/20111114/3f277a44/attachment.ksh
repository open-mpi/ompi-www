Index: ompi/datatype/datatype_pack.c
===================================================================
--- ompi/datatype/datatype_pack.c	(revision 25474)
+++ ompi/datatype/datatype_pack.c	(working copy)
@@ -187,7 +187,7 @@
 
             packed_buffer = (unsigned char *) iov[iov_count].iov_base;
             done = pConv->bConverted - i * pData->size;  /* partial data from last pack */
-            if( done != 0 ) {  /* still some data to copy from the last time */
+            if( (done + max_allowed) >= pData->size ) {  /* still some data to copy from the last time */
                 done = pData->size - done;
                 OMPI_DDT_SAFEGUARD_POINTER( user_memory, done, pConv->pBaseBuf, pData, pConv->count );
                 MEMCPY_CSUM( packed_buffer, user_memory, done, pConv );