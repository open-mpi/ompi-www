--- pml_ob1_sendreq.c	2008-06-01 10:59:51.094063000 +0300
+++ pml_ob1_sendreq.c.new	2008-06-02 15:07:02.612983000 +0300
@@ -192,7 +192,7 @@
     MCA_PML_OB1_PROGRESS_PENDING(bml_btl);
 }
 
-static inline void
+static void
 mca_pml_ob1_match_completion_free( struct mca_btl_base_module_t* btl,  
                                    struct mca_btl_base_endpoint_t* ep,
                                    struct mca_btl_base_descriptor_t* des,
@@ -235,7 +235,7 @@
  *  Completion of the first fragment of a long message that 
  *  requires an acknowledgement
  */
-static inline void
+static void
 mca_pml_ob1_rndv_completion( mca_btl_base_module_t* btl,
                              struct mca_btl_base_endpoint_t* ep,
                              struct mca_btl_base_descriptor_t* des,
@@ -269,7 +269,7 @@
  * Completion of a get request.
  */
 
-static inline void
+static void
 mca_pml_ob1_rget_completion( mca_btl_base_module_t* btl,
                              struct mca_btl_base_endpoint_t* ep,
                              struct mca_btl_base_descriptor_t* des,
@@ -295,7 +295,7 @@
  * Completion of a control message - return resources.
  */
 
-static inline void
+static void
 mca_pml_ob1_send_ctl_completion( mca_btl_base_module_t* btl,
                                  struct mca_btl_base_endpoint_t* ep,
                                  struct mca_btl_base_descriptor_t* des,
@@ -312,7 +312,7 @@
  * to schedule additional fragments.
  */
 
-static inline void
+static void
 mca_pml_ob1_frag_completion( mca_btl_base_module_t* btl,
                              struct mca_btl_base_endpoint_t* ep,
                              struct mca_btl_base_descriptor_t* des,
