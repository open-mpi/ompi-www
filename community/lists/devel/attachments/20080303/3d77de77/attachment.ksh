Index: orte/mca/oob/tcp/oob_tcp_peer.c
===================================================================
--- orte/mca/oob/tcp/oob_tcp_peer.c	(revision 17666)
+++ orte/mca/oob/tcp/oob_tcp_peer.c	(working copy)
@@ -55,7 +55,7 @@
 #include "opal/util/net.h"
 #include "opal/util/error.h"
 
-#include "orte/class/orte_proc_table.h"
+#include "opal/class/opal_hash_table.h"
 #include "orte/util/name_fns.h"
 #include "orte/runtime/orte_globals.h"
 #include "orte/mca/errmgr/errmgr.h"
@@ -216,14 +216,14 @@
 mca_oob_tcp_peer_t * mca_oob_tcp_peer_lookup(const orte_process_name_t* name)
 {
     int rc;
-    mca_oob_tcp_peer_t * peer, *old;
+    mca_oob_tcp_peer_t * peer = NULL, *old;
     if (NULL == name) { /* can't look this one up */
         return NULL;
     }
     
     OPAL_THREAD_LOCK(&mca_oob_tcp_component.tcp_lock);
-    peer = (mca_oob_tcp_peer_t*)orte_hash_table_get_proc(
-       &mca_oob_tcp_component.tcp_peers, name);
+    opal_hash_table_get_value_uint64(&mca_oob_tcp_component.tcp_peers,
+                                     orte_util_hash_name(name), (void**)&peer);
     if (NULL != peer && 0 == orte_util_compare_name_fields(ORTE_NS_CMP_ALL, &peer->peer_name, name)) {
         OPAL_THREAD_UNLOCK(&mca_oob_tcp_component.tcp_lock);
         return peer;
@@ -247,8 +247,8 @@
     peer->peer_retries = 0;
 
     /* add to lookup table */
-    if(ORTE_SUCCESS != orte_hash_table_set_proc(&mca_oob_tcp_component.tcp_peers, 
-        &peer->peer_name, peer)) {
+    if(OPAL_SUCCESS != opal_hash_table_set_value_uint64(&mca_oob_tcp_component.tcp_peers, 
+                                                        orte_util_hash_name(&peer->peer_name), peer)) {
         MCA_OOB_TCP_PEER_RETURN(peer);
         OPAL_THREAD_UNLOCK(&mca_oob_tcp_component.tcp_lock);
         return NULL;
Index: orte/mca/oob/tcp/oob_tcp_peer.h
===================================================================
--- orte/mca/oob/tcp/oob_tcp_peer.h	(revision 17666)
+++ orte/mca/oob/tcp/oob_tcp_peer.h	(working copy)
@@ -93,7 +93,7 @@
 #define MCA_OOB_TCP_PEER_RETURN(peer)                                   \
 {                                                                       \
     mca_oob_tcp_peer_shutdown(peer);                                    \
-    orte_hash_table_remove_proc(&mca_oob_tcp_component.tcp_peers, &peer->peer_name); \
+    opal_hash_table_remove_value_uint64(&mca_oob_tcp_component.tcp_peers, orte_util_hash_name(&peer->peer_name)); \
     OPAL_FREE_LIST_RETURN(&mca_oob_tcp_component.tcp_peer_free,         \
                           &peer->super);                                \
 }
Index: orte/mca/oob/tcp/oob_tcp.c
===================================================================
--- orte/mca/oob/tcp/oob_tcp.c	(revision 17666)
+++ orte/mca/oob/tcp/oob_tcp.c	(working copy)
@@ -50,7 +50,6 @@
 #include "opal/util/net.h"
 #include "opal/class/opal_hash_table.h"
 
-#include "orte/class/orte_proc_table.h"
 #include "orte/mca/errmgr/errmgr.h"
 #include "orte/mca/rml/rml.h"
 #include "orte/util/name_fns.h"
@@ -1125,12 +1124,12 @@
 
 int mca_oob_tcp_resolve(mca_oob_tcp_peer_t* peer)
 {
-    mca_oob_tcp_addr_t* addr;
+    mca_oob_tcp_addr_t* addr = NULL;
 
     /* if the address is already cached - simply return it */
     OPAL_THREAD_LOCK(&mca_oob_tcp_component.tcp_lock);
-    addr = (mca_oob_tcp_addr_t *)orte_hash_table_get_proc(&mca_oob_tcp_component.tcp_peer_names,
-         &peer->peer_name);
+    opal_hash_table_get_value_uint64(&mca_oob_tcp_component.tcp_peer_names,
+         orte_util_hash_name(&peer->peer_name), (void**)&addr);
     OPAL_THREAD_UNLOCK(&mca_oob_tcp_component.tcp_lock);
     if(NULL != addr) {
          mca_oob_tcp_peer_resolved(peer, addr);
@@ -1459,23 +1458,26 @@
 int mca_oob_tcp_set_addr(const orte_process_name_t* name, const char* uri)
 {
     struct sockaddr_storage inaddr;
-    mca_oob_tcp_addr_t* addr;
-    mca_oob_tcp_peer_t* peer;
+    mca_oob_tcp_addr_t* addr = NULL;
+    mca_oob_tcp_peer_t* peer = NULL;
     int rc;
     if((rc = mca_oob_tcp_parse_uri(uri, (struct sockaddr*) &inaddr)) != ORTE_SUCCESS) {
         return rc;
     }
 
     OPAL_THREAD_LOCK(&mca_oob_tcp_component.tcp_lock);
-    addr = (mca_oob_tcp_addr_t*)orte_hash_table_get_proc(&mca_oob_tcp_component.tcp_peer_names, name);
+    opal_hash_table_get_value_uint64(&mca_oob_tcp_component.tcp_peer_names,
+                                     orte_util_hash_name(name), (void**)&addr);
     if(NULL == addr) {
         addr = OBJ_NEW(mca_oob_tcp_addr_t);
         addr->addr_name = *name;
-        orte_hash_table_set_proc(&mca_oob_tcp_component.tcp_peer_names, &addr->addr_name, addr);
+        opal_hash_table_set_value_uint64(&mca_oob_tcp_component.tcp_peer_names,
+                                         orte_util_hash_name(&addr->addr_name), addr);
     }
     rc = mca_oob_tcp_addr_insert(addr, (struct sockaddr*) &inaddr);
-    peer = (mca_oob_tcp_peer_t *)orte_hash_table_get_proc(
-        &mca_oob_tcp_component.tcp_peers, &addr->addr_name);
+    opal_hash_table_get_value_uint64(&mca_oob_tcp_component.tcp_peers,
+                                     orte_util_hash_name(&addr->addr_name), 
+                                     (void**)&peer);
     if(NULL != peer) {
         mca_oob_tcp_peer_resolved(peer, addr);
     }
Index: orte/mca/oob/tcp/oob_tcp_msg.c
===================================================================
--- orte/mca/oob/tcp/oob_tcp_msg.c	(revision 17666)
+++ orte/mca/oob/tcp/oob_tcp_msg.c	(working copy)
@@ -28,7 +28,7 @@
 
 #include "opal/opal_socket_errno.h"
 
-#include "orte/class/orte_proc_table.h"
+#include "opal/class/opal_hash_table.h"
 #include "orte/util/name_fns.h"
 #include "orte/mca/errmgr/errmgr.h"
 #include "orte/mca/routed/routed.h"
@@ -458,9 +458,11 @@
     
     OPAL_THREAD_LOCK(&mca_oob_tcp_component.tcp_lock);
     if (orte_util_compare_name_fields(ORTE_NS_CMP_ALL, &peer->peer_name, &src) != OPAL_EQUAL) {
-        orte_hash_table_remove_proc(&mca_oob_tcp_component.tcp_peers, &peer->peer_name);
+        opal_hash_table_remove_value_uint64(&mca_oob_tcp_component.tcp_peers, 
+                                            orte_util_hash_name(&peer->peer_name));
         peer->peer_name = src;
-        orte_hash_table_set_proc(&mca_oob_tcp_component.tcp_peers, &peer->peer_name, peer);
+        opal_hash_table_set_value_uint64(&mca_oob_tcp_component.tcp_peers, 
+                                         orte_util_hash_name(&peer->peer_name), peer);
     }
     OPAL_THREAD_UNLOCK(&mca_oob_tcp_component.tcp_lock);
 }
Index: orte/mca/routed/tree/routed_tree.c
===================================================================
--- orte/mca/routed/tree/routed_tree.c	(revision 17666)
+++ orte/mca/routed/tree/routed_tree.c	(working copy)
@@ -14,9 +14,9 @@
 #include "opal/util/output.h"
 #include "opal/threads/condition.h"
 #include "opal/runtime/opal_progress.h"
+#include "opal/dss/dss.h"
+#include "opal/class/opal_hash_table.h"
 
-#include "opal/dss/dss.h"
-#include "orte/class/orte_proc_table.h"
 #include "orte/mca/errmgr/errmgr.h"
 #include "orte/mca/grpcomm/grpcomm.h"
 #include "orte/mca/rml/rml.h"
@@ -35,6 +35,7 @@
                                orte_process_name_t *route)
 { 
     int rc;
+    orte_process_name_t * route_copy;
     
     if (target->jobid == ORTE_JOBID_INVALID ||
         target->vpid == ORTE_VPID_INVALID) {
@@ -70,12 +71,14 @@
         }
     }
     
+    route_copy = malloc(sizeof(orte_process_name_t));
+    *route_copy = *route;
     /* exact match */
     if (target->jobid != ORTE_JOBID_WILDCARD &&
         target->vpid != ORTE_VPID_WILDCARD) {
-        if (ORTE_SUCCESS != (rc = orte_hash_table_set_proc_name(&orte_routed_tree_module.peer_list,
-                                                                target, route,
-                                                                ORTE_NS_CMP_ALL))) {
+        rc = opal_hash_table_set_value_uint64(&orte_routed_tree_module.peer_list,
+                                              orte_util_hash_name(target), route_copy);
+        if (ORTE_SUCCESS != rc) {
             ORTE_ERROR_LOG(rc);
         }
         return rc;
@@ -84,13 +87,14 @@
     /* vpid wildcard */
     if (target->jobid != ORTE_JOBID_WILDCARD &&
         target->vpid == ORTE_VPID_WILDCARD) {
-        if (ORTE_SUCCESS != (rc = orte_hash_table_set_proc_name(&orte_routed_tree_module.vpid_wildcard_list,
-                                                                target, route,
-                                                                ORTE_NS_CMP_JOBID))) {
+        opal_hash_table_set_value_uint32(&orte_routed_tree_module.vpid_wildcard_list,
+                                         target->jobid, route_copy);
+        if (ORTE_SUCCESS != rc) {
             ORTE_ERROR_LOG(rc);
         }
         return rc;
     }
+    free(route_copy);
 
     return ORTE_ERR_NOT_SUPPORTED;
 }
@@ -99,32 +103,35 @@
 orte_process_name_t
 orte_routed_tree_get_route(orte_process_name_t *target)
 {
-    orte_process_name_t ret;
+    orte_process_name_t *ret;
+    int rc;
 
     /* if it is me, then the route is just direct */
     if (OPAL_EQUAL == opal_dss.compare(ORTE_PROC_MY_NAME, target, ORTE_NAME)) {
-        ret = *target;
+        ret = target;
         goto found;
     }
     
     /* check exact matches */
-    ret = orte_hash_table_get_proc_name(&orte_routed_tree_module.peer_list,
-                                        target, ORTE_NS_CMP_ALL);
-    if (OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, &ret, ORTE_NAME_INVALID)) {
+    rc = opal_hash_table_get_value_uint64(&orte_routed_tree_module.peer_list,
+                                          orte_util_hash_name(target), (void**)&ret);
+    if (ORTE_SUCCESS == rc && 
+        OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, ret, ORTE_NAME_INVALID)) {
         /* got a good result - return it */
         goto found;
     }
     
     /* didn't find an exact match - check to see if a route for this job was defined */
-    ret = orte_hash_table_get_proc_name(&orte_routed_tree_module.vpid_wildcard_list,
-                                        target, ORTE_NS_CMP_JOBID);
-    if (OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, &ret, ORTE_NAME_INVALID)) {
+    rc = opal_hash_table_get_value_uint32(&orte_routed_tree_module.vpid_wildcard_list,
+                                          target->jobid, (void**)&ret);
+    if (ORTE_SUCCESS == rc &&
+        OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, ret, ORTE_NAME_INVALID)) {
         /* got a good result - return it */
         goto found;
     }
     
     /* default to wildcard route */
-    ret = orte_routed_tree_module.wildcard_route;
+    ret = &orte_routed_tree_module.wildcard_route;
 
  found:
 
@@ -132,9 +139,9 @@
                          "%s routed_tree_get(%s) --> %s",
                          ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
                          ORTE_NAME_PRINT(target), 
-                         ORTE_NAME_PRINT(&ret)));
+                         ORTE_NAME_PRINT(ret)));
     
-    return ret;
+    return *ret;
 }
 
 static int process_callback(orte_jobid_t job, opal_buffer_t *buffer)
Index: orte/mca/routed/unity/routed_unity_component.c
===================================================================
--- orte/mca/routed/unity/routed_unity_component.c	(revision 17666)
+++ orte/mca/routed/unity/routed_unity_component.c	(working copy)
@@ -16,9 +16,8 @@
 #include "opal/mca/base/base.h"
 #include "opal/mca/base/mca_base_param.h"
 #include "opal/threads/condition.h"
+#include "opal/dss/dss.h"
 
-#include "opal/dss/dss.h"
-#include "orte/class/orte_proc_table.h"
 #include "orte/mca/errmgr/errmgr.h"
 #include "orte/mca/grpcomm/grpcomm.h"
 #include "orte/mca/odls/odls_types.h"
@@ -160,8 +159,8 @@
 orte_routed_unity_update_route(orte_process_name_t *target,
                                orte_process_name_t *route)
 {
-    orte_ns_cmp_bitmask_t mask;
     int rc;
+    orte_process_name_t * route_copy;
     
     if (ORTE_JOB_FAMILY(target->jobid) != ORTE_JOB_FAMILY(ORTE_PROC_MY_NAME->jobid)) {
         /* this message came from a different job family, so we will update
@@ -180,17 +179,15 @@
                              ORTE_NAME_PRINT(target), 
                              ORTE_NAME_PRINT(route)));
 
-        /* if we are routing everything for this target through one place, set
-         * the mask to only compare jobids
+        route_copy = malloc(sizeof(orte_process_name_t));
+        *route_copy = *route;
+        /* if we are routing everything for this target through one place, 
+         * then the target vpid is ORTE_NS_VPID_WILDCARD. So no need for
+         * special cases, just add it 
          */
-        if (ORTE_VPID_WILDCARD == target->vpid) {
-            mask = ORTE_NS_CMP_JOBID;
-        } else {
-            mask = ORTE_NS_CMP_ALL;
-        }
-        if (ORTE_SUCCESS != (rc = orte_hash_table_set_proc_name(&peer_list,
-                                                                target, route,
-                                                                mask))) {
+        rc = opal_hash_table_set_value_uint64(&peer_list, orte_util_hash_name(target), 
+                                              route_copy);
+        if (ORTE_SUCCESS != rc) {
             ORTE_ERROR_LOG(rc);
         }
         return rc;
@@ -211,32 +208,39 @@
 orte_process_name_t
 orte_routed_unity_get_route(orte_process_name_t *target)
 {
-    orte_process_name_t ret;
+    orte_process_name_t *ret, lookup;
+    int rc;
     
     if (ORTE_JOB_FAMILY(target->jobid) != ORTE_JOB_FAMILY(ORTE_PROC_MY_NAME->jobid)) {
-        ret = orte_hash_table_get_proc_name(&peer_list, target, ORTE_NS_CMP_ALL);
-        if (OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, &ret, ORTE_NAME_INVALID)) {
+        rc = opal_hash_table_get_value_uint64(&peer_list, orte_util_hash_name(target),
+                                              (void**)&ret);
+        if (ORTE_SUCCESS != rc &&
+            OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, ret, ORTE_NAME_INVALID)) {
             /* got a good result - return it */
             goto found;
         }
         /* check to see if we specified the route to be for all vpids in the job */
-        ret = orte_hash_table_get_proc_name(&peer_list, target, ORTE_NS_CMP_JOBID);
-        if (OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, &ret, ORTE_NAME_INVALID)) {
+        lookup = *target;
+        lookup.vpid = ORTE_VPID_WILDCARD;
+        rc = opal_hash_table_get_value_uint64(&peer_list, orte_util_hash_name(&lookup),
+                                              (void**)&ret);
+        if (ORTE_SUCCESS == rc &&
+            OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, ret, ORTE_NAME_INVALID)) {
             /* got a good result - return it */
             goto found;
         }
     }
 
     /* if it is our own job family, or we didn't find it on the list, just go direct */
-    ret = *target;
+    ret = target;
     
 found:
     OPAL_OUTPUT_VERBOSE((5, orte_routed_base_output,
                          "%s routed_unity_get(%s) --> %s",
                          ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
                          ORTE_NAME_PRINT(target), 
-                         ORTE_NAME_PRINT(&ret)));
-    return ret;
+                         ORTE_NAME_PRINT(ret)));
+    return *ret;
 }
 
 static int process_callback(orte_jobid_t job, opal_buffer_t *buffer)
Index: orte/mca/grpcomm/basic/grpcomm_basic_module.c
===================================================================
--- orte/mca/grpcomm/basic/grpcomm_basic_module.c	(revision 17666)
+++ orte/mca/grpcomm/basic/grpcomm_basic_module.c	(working copy)
@@ -30,7 +30,7 @@
 #include "opal/util/output.h"
 #include "opal/util/bit_ops.h"
 
-#include "orte/class/orte_proc_table.h"
+#include "opal/class/opal_hash_table.h"
 #include "orte/util/proc_info.h"
 #include "opal/dss/dss.h"
 #include "orte/mca/errmgr/errmgr.h"
@@ -765,7 +765,7 @@
  * information must be kept for later use, because if accept/connect
  * causes the proc to be added to the ompi_proc_all() list, it could
  * cause a connection storm.  Therefore, we use an
- * orte_proc_table backing store to contain all modex information.
+ * opal_hast_table_t backing store to contain all modex information.
  *
  * While we could add the now discovered proc into the ompi_proc_all()
  * list, this has some problems, in that we don't have the
@@ -937,11 +937,11 @@
 static modex_proc_data_t*
 modex_lookup_orte_proc(const orte_process_name_t *orte_proc)
 {
-    modex_proc_data_t *proc_data;
+    modex_proc_data_t *proc_data = NULL;
     
     OPAL_THREAD_LOCK(&orte_grpcomm_basic.mutex);
-    proc_data = (modex_proc_data_t*)
-        orte_hash_table_get_proc(&orte_grpcomm_basic.modex_data, orte_proc);
+    opal_hash_table_get_value_uint64(&orte_grpcomm_basic.modex_data, 
+                    orte_util_hash_name(orte_proc), (void**)&proc_data);
     if (NULL == proc_data) {
         /* The proc clearly exists, so create a modex structure
         for it */
@@ -951,7 +951,8 @@
             OPAL_THREAD_UNLOCK(&orte_grpcomm_basic.mutex);
             return NULL;
         }
-        orte_hash_table_set_proc(&orte_grpcomm_basic.modex_data, orte_proc, proc_data);
+        opal_hash_table_set_value_uint64(&orte_grpcomm_basic.modex_data, 
+                    orte_util_hash_name(orte_proc), proc_data);
     }
     OPAL_THREAD_UNLOCK(&orte_grpcomm_basic.mutex);
     
Index: orte/mca/iof/svc/iof_svc_sub.c
===================================================================
--- orte/mca/iof/svc/iof_svc_sub.c	(revision 17666)
+++ orte/mca/iof/svc/iof_svc_sub.c	(working copy)
@@ -22,7 +22,7 @@
 
 #include "opal/util/output.h"
 
-#include "orte/class/orte_proc_table.h"
+#include "opal/class/opal_hash_table.h"
 #include "orte/mca/rml/rml.h"
 #include "orte/mca/errmgr/errmgr.h"
 #include "orte/runtime/orte_globals.h"
@@ -269,13 +269,13 @@
                    calculate seq_min anymore.  Otherwise, put its
                    updated value in the table. */
                 if (do_close) {
-                    orte_hash_table_remove_proc(&fwd->fwd_seq_hash,
-                                                &hdr->msg_origin);
+                    opal_hash_table_remove_value_uint64(&fwd->fwd_seq_hash,
+                                        orte_util_hash_name(&hdr->msg_origin));
                     value_set = false;
                 } else {
                     value.uval = hdr->msg_seq + hdr->msg_len;
-                    orte_hash_table_set_proc(&fwd->fwd_seq_hash,
-                                             &hdr->msg_origin, &value.vval);
+                    opal_hash_table_set_value_uint64(&fwd->fwd_seq_hash,
+                                        orte_util_hash_name(&hdr->msg_origin), &value.vval);
                 }
             } 
             /* Otherwise, if the publication origin and publication
@@ -289,8 +289,8 @@
                bytes ACK'ed across all the forwards on this
                subscription. */
             else {
-                value.vval = orte_hash_table_get_proc(&fwd->fwd_seq_hash,
-                                                      &hdr->msg_origin);
+                opal_hash_table_get_value_uint64(&fwd->fwd_seq_hash,
+                        orte_util_hash_name(&hdr->msg_origin), (void**)&value.vval);
             }
 
             /* If we got a valid value, update the seq_min calculation */
Index: orte/util/name_fns.c
===================================================================
--- orte/util/name_fns.c	(revision 17666)
+++ orte/util/name_fns.c	(working copy)
@@ -529,3 +529,14 @@
     */
     return OPAL_EQUAL;
 }
+
+
+uint64_t  orte_util_hash_name(const orte_process_name_t * name) {
+    uint64_t hash;
+    
+    hash = name->jobid;
+    hash <<= sizeof(name->jobid) * 8;
+    hash += name->vpid;
+    
+    return hash;
+}
Index: orte/util/name_fns.h
===================================================================
--- orte/util/name_fns.h	(revision 17666)
+++ orte/util/name_fns.h	(working copy)
@@ -86,7 +86,8 @@
 ORTE_DECLSPEC int orte_util_compare_name_fields(orte_ns_cmp_bitmask_t fields,
                                   const orte_process_name_t* name1,
                                   const orte_process_name_t* name2);
+/** This funtion returns a guaranteed unique hash value for the passed process name */
+ORTE_DECLSPEC uint64_t orte_util_hash_name(const orte_process_name_t * name);
 
-
 END_C_DECLS
 #endif
Index: ompi/mca/btl/portals/btl_portals.h
===================================================================
--- ompi/mca/btl/portals/btl_portals.h	(revision 17666)
+++ ompi/mca/btl/portals/btl_portals.h	(working copy)
@@ -28,7 +28,6 @@
 #include "ompi/mca/btl/base/base.h"
 #include "ompi/class/ompi_bitmap.h"
 #include "ompi/class/ompi_free_list.h"
-#include "orte/class/orte_proc_table.h"
 
 #include "btl_portals_endpoint.h"
 #include "btl_portals_frag.h"
Index: ompi/mca/btl/tcp/btl_tcp_proc.c
===================================================================
--- ompi/mca/btl/tcp/btl_tcp_proc.c	(revision 17666)
+++ ompi/mca/btl/tcp/btl_tcp_proc.c	(working copy)
@@ -25,7 +25,7 @@
 #include <netinet/in.h>
 #endif
 
-#include "orte/class/orte_proc_table.h"
+#include "opal/class/opal_hash_table.h"
 #include "ompi/mca/btl/base/btl_base_error.h"
 #include "ompi/runtime/ompi_module_exchange.h"
 #include "ompi/datatype/dt_arch.h"
@@ -74,7 +74,8 @@
 {
     /* remove from list of all proc instances */
     OPAL_THREAD_LOCK(&mca_btl_tcp_component.tcp_lock);
-    orte_hash_table_remove_proc(&mca_btl_tcp_component.tcp_procs, &proc->proc_name);
+    opal_hash_table_remove_value_uint64(&mca_btl_tcp_component.tcp_procs, 
+                                        orte_util_hash_name(&proc->proc_name));
     OPAL_THREAD_UNLOCK(&mca_btl_tcp_component.tcp_lock);
 
     /* release resources */
@@ -97,11 +98,12 @@
     int rc;
     size_t size;
     mca_btl_tcp_proc_t* btl_proc;
+    uint64_t hash = orte_util_hash_name(&ompi_proc->proc_name);
 
     OPAL_THREAD_LOCK(&mca_btl_tcp_component.tcp_lock);
-    btl_proc = (mca_btl_tcp_proc_t*)orte_hash_table_get_proc(
-         &mca_btl_tcp_component.tcp_procs, &ompi_proc->proc_name);
-    if(NULL != btl_proc) {
+    rc = opal_hash_table_get_value_uint64(&mca_btl_tcp_component.tcp_procs, 
+                                          hash, (void**)&btl_proc);
+    if(OMPI_SUCCESS == rc) {
         OPAL_THREAD_UNLOCK(&mca_btl_tcp_component.tcp_lock);
         return btl_proc;
     }
@@ -111,11 +113,10 @@
         return NULL;
     btl_proc->proc_ompi = ompi_proc;
     btl_proc->proc_name = ompi_proc->proc_name;
-
+    
     /* add to hash table of all proc instance */
-    orte_hash_table_set_proc( &mca_btl_tcp_component.tcp_procs,
-                              &btl_proc->proc_name,
-                              btl_proc );
+    opal_hash_table_set_value_uint64(&mca_btl_tcp_component.tcp_procs,
+                                     hash, btl_proc);
     OPAL_THREAD_UNLOCK(&mca_btl_tcp_component.tcp_lock);
 
     /* lookup tcp parameters exported by this proc */
@@ -554,10 +555,10 @@
  */
 mca_btl_tcp_proc_t* mca_btl_tcp_proc_lookup(const orte_process_name_t *name)
 {
-    mca_btl_tcp_proc_t* proc;
+    mca_btl_tcp_proc_t* proc = NULL;
     OPAL_THREAD_LOCK(&mca_btl_tcp_component.tcp_lock);
-    proc = (mca_btl_tcp_proc_t*)orte_hash_table_get_proc(
-         &mca_btl_tcp_component.tcp_procs, name);
+    opal_hash_table_get_value_uint64(&mca_btl_tcp_component.tcp_procs, 
+                                     orte_util_hash_name(name), (void**)&proc);
     OPAL_THREAD_UNLOCK(&mca_btl_tcp_component.tcp_lock);
     return proc;
 }
Index: ompi/mca/btl/sctp/btl_sctp_proc.c
===================================================================
--- ompi/mca/btl/sctp/btl_sctp_proc.c	(revision 17666)
+++ ompi/mca/btl/sctp/btl_sctp_proc.c	(working copy)
@@ -25,7 +25,7 @@
 #include <netinet/in.h>
 #endif
 
-#include "orte/class/orte_proc_table.h"
+#include "opal/class/opal_hash_table.h"
 #include "ompi/mca/btl/base/btl_base_error.h"
 #include "ompi/runtime/ompi_module_exchange.h"
 #include "ompi/datatype/dt_arch.h"
@@ -63,7 +63,8 @@
 {
     /* remove from list of all proc instances */
     OPAL_THREAD_LOCK(&mca_btl_sctp_component.sctp_lock);
-    orte_hash_table_remove_proc(&mca_btl_sctp_component.sctp_procs, &proc->proc_name);
+    opal_hash_table_remove_value_uint64(&mca_btl_sctp_component.sctp_procs, 
+                                        orte_util_hash_name(&proc->proc_name));
     OPAL_THREAD_UNLOCK(&mca_btl_sctp_component.sctp_lock);
 
     /* release resources */
@@ -109,11 +110,12 @@
     int rc;
     size_t size;
     mca_btl_sctp_proc_t* btl_proc;
+    uint64_t hash = orte_util_hash_name(&ompi_proc->proc_name);
 
     OPAL_THREAD_LOCK(&mca_btl_sctp_component.sctp_lock);
-    btl_proc = (mca_btl_sctp_proc_t*)orte_hash_table_get_proc(
-            &mca_btl_sctp_component.sctp_procs, &ompi_proc->proc_name);
-    if(NULL != btl_proc) {
+    rc = opal_hash_table_get_value_uint64(&mca_btl_sctp_component.sctp_procs, 
+                                          hash, (void**)&btl_proc);
+    if(OMPI_SUCCESS == rc) {
         OPAL_THREAD_UNLOCK(&mca_btl_sctp_component.sctp_lock);
         return btl_proc;
     }
@@ -126,10 +128,8 @@
     btl_proc->proc_name = ompi_proc->proc_name;
 
     /* add to hash table of all proc instance */
-    orte_hash_table_set_proc(
-            &mca_btl_sctp_component.sctp_procs,
-            &btl_proc->proc_name,
-            btl_proc);
+    opal_hash_table_set_value_uint64(&mca_btl_sctp_component.sctp_procs,
+                                     hash, btl_proc);
     OPAL_THREAD_UNLOCK(&mca_btl_sctp_component.sctp_lock);
 
     /* lookup sctp parameters exported by this proc */
@@ -325,10 +325,10 @@
  */
 mca_btl_sctp_proc_t* mca_btl_sctp_proc_lookup(const orte_process_name_t *name)
 {
-    mca_btl_sctp_proc_t* proc;
+    mca_btl_sctp_proc_t* proc = NULL;
     OPAL_THREAD_LOCK(&mca_btl_sctp_component.sctp_lock);
-    proc = (mca_btl_sctp_proc_t*)orte_hash_table_get_proc(
-            &mca_btl_sctp_component.sctp_procs, name);
+    opal_hash_table_get_value_uint64(&mca_btl_sctp_component.sctp_procs,
+                                     orte_util_hash_name(name), (void**)&proc);
     OPAL_THREAD_UNLOCK(&mca_btl_sctp_component.sctp_lock);
     return proc;
 }
