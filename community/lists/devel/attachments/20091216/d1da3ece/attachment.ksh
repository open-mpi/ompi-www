Index: ompi/mca/btl/openib/help-mpi-btl-openib.txt
===================================================================
--- ompi/mca/btl/openib/help-mpi-btl-openib.txt	(revision 22318)
+++ ompi/mca/btl/openib/help-mpi-btl-openib.txt	(working copy)
@@ -168,9 +168,9 @@
 You may need to consult with your system administrator to get this
 problem fixed.
 #
-[SRQ doesn't found]
-The srq doesn't found.
-Below is some information about the host that raised the error:
+[SRQ not found]
+Open MPI tried to access a shared receive queue (SRQ) that was not found.
+This should not happen, and is a fatal error.  Your MPI job will now abort.
 
     Local host:   %s
     Local device: %s
@@ -411,9 +411,8 @@
   - A sender will not send to a peer unless it has less than 32
     outstanding sends to that peer.
   - 32 receive buffers will be preposted.
-  - When the number of not used receive buffers will decreased to 8
-    the IBV_EVENT_SRQ_LIMIT_REACHED event will be signaled and the number
-    of receive buffers that we can pre-post will be increased.
+  - When the number of unused shared receive buffers reaches 8, more
+    buffers (32 in this case) will be posted.
 
   Local host: %s
   Bad queue specification: %s
Index: ompi/mca/btl/openib/btl_openib.h
===================================================================
--- ompi/mca/btl/openib/btl_openib.h	(revision 22318)
+++ ompi/mca/btl/openib/btl_openib.h	(working copy)
@@ -381,6 +381,15 @@
     /** The flag points if we want to get the 
          IBV_EVENT_SRQ_LIMIT_REACHED events for dynamically resizing SRQ */
     bool srq_limit_event_flag;
+    /**< In difference of the "--mca enable_srq_resize" parameter that says, if we want(or no)
+         to start with small num of pre-posted receive buffers (rd_curr_num) and to increase this number by needs
+         (the max of this value is rd_num – the whole size of SRQ), the "srq_limit_event_flag" says if we want to get limit event
+         from device if the defined srq limit was reached (signal to the main thread) and we put off this flag if the rd_curr_num
+         was increased up to rd_num.
+         In order to prevent lock/unlock operation in the critical path we prefer only put-on
+         the srq_limit_event_flag in asynchronous thread, because in this way we post receive buffers
+         in the main thread only and only after posting we set (if srq_limit_event_flag is true)
+         the limit for IBV_EVENT_SRQ_LIMIT_REACHED event. */
 }; typedef struct mca_btl_openib_module_srq_qp_t mca_btl_openib_module_srq_qp_t;
 
 struct mca_btl_openib_module_qp_t {
