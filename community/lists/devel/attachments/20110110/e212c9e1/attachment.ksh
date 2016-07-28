diff --git a/src/mpi/romio/adio/common/cb_config_list.c b/src/mpi/romio/adio/common/cb_config_list.c
index ca03677..29fb1f6 100644
--- a/src/mpi/romio/adio/common/cb_config_list.c
+++ b/src/mpi/romio/adio/common/cb_config_list.c
@@ -405,8 +405,12 @@ int ADIOI_cb_delete_name_array(MPI_Comm comm,
     ADIOI_UNREFERENCED_ARG(extra);
 
     array = (ADIO_cb_name_array) attr_val;
-    if (array == NULL)
-	    goto fn_exit;
+    if (array == NULL) {
+        if (comm == MPI_COMM_SELF) {
+            MPI_Keyval_free(&cb_config_list_keyval);
+        }
+        goto fn_exit;
+    }
     array->refct--;
 
     if (array->refct <= 0) {
@@ -422,7 +426,6 @@ int ADIOI_cb_delete_name_array(MPI_Comm comm,
 	ADIOI_Free(array);
     }
 fn_exit:
-    MPI_Keyval_free(&keyval);
     return MPI_SUCCESS;
 }
 
