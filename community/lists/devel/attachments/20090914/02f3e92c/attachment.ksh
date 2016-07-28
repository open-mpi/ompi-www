2009-09-14  Shaun Jackman  <sjackman@gmail.com>

	* ompi/mpi/c/request_get_status.c (MPI_Request_get_status):
	If opal_progress is called then check the status of the request
	before returning. opal_progress is called only once. This logic
	parallels MPI_Test (ompi_request_default_test).

--- ompi/mpi/c/request_get_status.c.orig	2008-11-04 12:56:27.000000000 -0800
+++ ompi/mpi/c/request_get_status.c	2009-09-14 13:38:35.452391000 -0700
@@ -41,6 +41,10 @@
 int MPI_Request_get_status(MPI_Request request, int *flag,
                            MPI_Status *status) 
 {
+#if OMPI_ENABLE_PROGRESS_THREADS == 0
+    int do_it_once = 0;
+#endif
+
     MEMCHECKER(
         memchecker_request(&request);
     );
@@ -65,6 +69,10 @@
         }
         return MPI_SUCCESS;
     }
+
+#if OMPI_ENABLE_PROGRESS_THREADS == 0
+ recheck_request_status:
+#endif
     if( request->req_complete ) { 
         *flag = true; 
         /* If this is a generalized request, we *always* have to call
@@ -78,9 +86,17 @@
         }
         return MPI_SUCCESS;
     }
-    *flag = false;
 #if OMPI_ENABLE_PROGRESS_THREADS == 0
-    opal_progress();
+    if( 0 == do_it_once ) {
+        /**
+         * If we run the opal_progress then check the status of the request before
+         * leaving. We will call the opal_progress only once per call.
+         */
+        opal_progress();
+        do_it_once++;
+        goto recheck_request_status;
+    }
 #endif
+    *flag = false;
     return MPI_SUCCESS;
 }