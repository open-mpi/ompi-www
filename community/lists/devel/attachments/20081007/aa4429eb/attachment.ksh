Index: ompi/mca/btl/openib/btl_openib_component.c
===================================================================
--- ompi/mca/btl/openib/btl_openib_component.c	(revision 19490)
+++ ompi/mca/btl/openib/btl_openib_component.c	(working copy)
@@ -558,7 +558,7 @@ static int init_one_hca(opal_list_t *btl
          goto dealloc_pd;
     }
    
-    ret = OMPI_SUCCESS; 
+    ret = OMPI_SUCCESS;
     /* Note ports are 1 based hence j = 1 */
     for(i = 1; i <= hca->ib_dev_attr.phys_port_cnt; i++){
         struct ibv_port_attr ib_port_attr;
@@ -580,7 +580,7 @@ static int init_one_hca(opal_list_t *btl
                 uint16_t pkey,j;
                 for (j=0; j < hca->ib_dev_attr.max_pkeys; j++) {
                     ibv_query_pkey(hca->ib_dev_context, i, j, &pkey);
-                    pkey=ntohs(pkey);
+                    pkey=ntohs(pkey) & 0x7fff;
                     if(pkey == mca_btl_openib_component.ib_pkey_val){
                         ret = init_one_port(btl_list, hca, i, j, &ib_port_attr);
                         break;
Index: ompi/mca/btl/openib/btl_openib_ini.c
===================================================================
--- ompi/mca/btl/openib/btl_openib_ini.c	(revision 19490)
+++ ompi/mca/btl/openib/btl_openib_ini.c	(working copy)
@@ -90,8 +90,6 @@ static int parse_line(parsed_section_val
 static void reset_section(bool had_previous_value, parsed_section_values_t *s);
 static void reset_values(ompi_btl_openib_ini_values_t *v);
 static int save_section(parsed_section_values_t *s);
-static int intify(char *string);
-static int intify_list(char *str, uint32_t **values, int *len);
 static inline void show_help(const char *topic);
 
 
@@ -364,14 +362,14 @@ static int parse_line(parsed_section_val
        all whitespace at the beginning and ending of the value. */
 
     if (0 == strcasecmp(key_buffer, "vendor_id")) {
-        if (OMPI_SUCCESS != (ret = intify_list(value, &sv->vendor_ids, 
+        if (OMPI_SUCCESS != (ret = ompi_btl_openib_ini_intify_list(value, &sv->vendor_ids, 
                                                &sv->vendor_ids_len))) {
             return ret;
         }
     }
 
     else if (0 == strcasecmp(key_buffer, "vendor_part_id")) {
-        if (OMPI_SUCCESS != (ret = intify_list(value, &sv->vendor_part_ids,
+        if (OMPI_SUCCESS != (ret = ompi_btl_openib_ini_intify_list(value, &sv->vendor_part_ids,
                                                &sv->vendor_part_ids_len))) {
             return ret;
         }
@@ -379,13 +377,13 @@ static int parse_line(parsed_section_val
 
     else if (0 == strcasecmp(key_buffer, "mtu")) {
         /* Single value */
-        sv->values.mtu = (uint32_t) intify(value);
+        sv->values.mtu = (uint32_t) ompi_btl_openib_ini_intify(value);
         sv->values.mtu_set = true;
     }
 
     else if (0 == strcasecmp(key_buffer, "use_eager_rdma")) {
         /* Single value */
-        sv->values.use_eager_rdma = (uint32_t) intify(value);
+        sv->values.use_eager_rdma = (uint32_t) ompi_btl_openib_ini_intify(value);
         sv->values.use_eager_rdma_set = true;
     }
 
@@ -547,7 +545,7 @@ static int save_section(parsed_section_v
 /*
  * Do string-to-integer conversion, for both hex and decimal numbers
  */
-static int intify(char *str)
+int ompi_btl_openib_ini_intify(char *str)
 {
     while (isspace(*str)) {
         ++str;
@@ -568,7 +566,7 @@ static int intify(char *str)
 /*
  * Take a comma-delimited list and infity them all
  */
-static int intify_list(char *value, uint32_t **values, int *len)
+int ompi_btl_openib_ini_intify_list(char *value, uint32_t **values, int *len)
 {
     char *comma;
     char *str = value;
@@ -584,7 +582,7 @@ static int intify_list(char *value, uint
         if (NULL == *values) {
             return OMPI_ERR_OUT_OF_RESOURCE;
         }
-        *values[0] = (uint32_t) intify(str);
+        *values[0] = (uint32_t) ompi_btl_openib_ini_intify(str);
         *len = 1;
     } else {
         /* If we found a comma, loop over all the values.  Be a
@@ -594,7 +592,7 @@ static int intify_list(char *value, uint
         do {
             *comma = '\0';
             *values = realloc(*values, sizeof(uint32_t) * (*len + 2));
-            (*values)[*len] = (int32_t) intify(str);
+            (*values)[*len] = (int32_t) ompi_btl_openib_ini_intify(str);
             ++(*len);
             str = comma + 1;
             comma = strchr(str, ',');
@@ -602,7 +600,7 @@ static int intify_list(char *value, uint
         /* Get the last value (i.e., the value after the last
            comma, because it won't have been snarfed in the
            loop) */
-        (*values)[*len] = (uint32_t) intify(str);
+        (*values)[*len] = (uint32_t) ompi_btl_openib_ini_intify(str);
         ++(*len);
     }
 
Index: ompi/mca/btl/openib/btl_openib_ini.h
===================================================================
--- ompi/mca/btl/openib/btl_openib_ini.h	(revision 19490)
+++ ompi/mca/btl/openib/btl_openib_ini.h	(working copy)
@@ -49,6 +49,9 @@ extern "C" {
      */
     int ompi_btl_openib_ini_finalize(void);
 
+    int ompi_btl_openib_ini_intify(char *string);
+    int ompi_btl_openib_ini_intify_list(char *str, uint32_t **values, int *len);
+
 #if defined(c_plusplus) || defined(__cplusplus)
 }
 #endif
Index: ompi/mca/btl/openib/btl_openib_mca.c
===================================================================
--- ompi/mca/btl/openib/btl_openib_mca.c	(revision 19490)
+++ ompi/mca/btl/openib/btl_openib_mca.c	(working copy)
@@ -27,6 +27,7 @@
 #include "opal/mca/base/mca_base_param.h"
 #include "btl_openib.h"
 #include "btl_openib_mca.h"
+#include "btl_openib_ini.h"
 
 /*
  * Local flags
@@ -97,7 +98,7 @@ static inline int reg_int(const char* pa
  */
 int btl_openib_register_mca_params(void) 
 {
-    char *msg, *str;
+    char *msg, *str, *pkey;
     int ival, ival2, ret, tmp;
 
     ret = OMPI_SUCCESS;
@@ -192,13 +193,15 @@ int btl_openib_register_mca_params(void)
                   0, &ival, REGINT_GE_ZERO));
     mca_btl_openib_component.ib_pkey_ix = (uint32_t) ival;
 
-    CHECK(reg_int("ib_pkey_val", "InfiniBand pkey value"
+    CHECK(reg_string("ib_pkey_val", "InfiniBand pkey value"
                   "(must be > 0 and < 0xffff)",
-                  0, &ival, REGINT_GE_ZERO));
-    if (ival > 0xffff) {
+                  "0", &pkey, 0));
+    mca_btl_openib_component.ib_pkey_val = ompi_btl_openib_ini_intify(pkey) & 0x7fff;
+    if (mca_btl_openib_component.ib_pkey_val > 0xffff || 
+            mca_btl_openib_component.ib_pkey_val < 0) {
         ret = OMPI_ERR_BAD_PARAM;
     }
-    mca_btl_openib_component.ib_pkey_val = (uint32_t) ival;
+    free(pkey);
 
     CHECK(reg_int("ib_psn", "InfiniBand packet sequence starting number "
                   "(must be >= 0)", 
