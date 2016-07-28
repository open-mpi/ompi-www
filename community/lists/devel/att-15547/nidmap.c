Index: orte/util/nidmap.c
===================================================================
--- orte/util/nidmap.c	(revision 32449)
+++ orte/util/nidmap.c	(working copy)
@@ -13,7 +13,6 @@
  * Copyright (c) 2012-2014 Los Alamos National Security, LLC.
  *                         All rights reserved.
  * Copyright (c) 2013      Intel, Inc. All rights reserved
- *
  * Copyright (c) 2014      Research Organization for Information Science
  *                         and Technology (RIST). All rights reserved.
  * $COPYRIGHT$
@@ -171,7 +170,9 @@
     int rc;
     struct hostent *h;
     opal_buffer_t buf;
-    orte_process_name_t proc;
+    /* FIXME make sure the orte_process_name_t is 8 bytes aligned */
+    opal_identifier_t _proc;
+    orte_process_name_t *proc = (orte_process_name_t *)&_proc;
     char *uri, *addr;
     char *proc_name;
 
@@ -192,15 +193,15 @@
      */
 
     /* install the entry for the HNP */
-    proc.jobid = ORTE_PROC_MY_NAME->jobid;
-    proc.vpid = 0;
-    if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)&proc, OPAL_SCOPE_INTERNAL,
-                                            ORTE_DB_DAEMON_VPID, &proc.vpid, OPAL_UINT32))) {
+    proc->jobid = ORTE_PROC_MY_NAME->jobid;
+    proc->vpid = 0;
+    if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)proc, OPAL_SCOPE_INTERNAL,
+                                            ORTE_DB_DAEMON_VPID, &proc->vpid, OPAL_UINT32))) {
         ORTE_ERROR_LOG(rc);
         return rc;
     }
     addr = "HNP";
-    if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)&proc, OPAL_SCOPE_INTERNAL,
+    if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)proc, OPAL_SCOPE_INTERNAL,
                                             ORTE_DB_HOSTNAME, addr, OPAL_STRING))) {
         ORTE_ERROR_LOG(rc);
         return rc;
@@ -213,9 +214,9 @@
     OBJ_CONSTRUCT(&buf, opal_buffer_t);
     for (i=0; i < num_nodes; i++) {
         /* define the vpid for this daemon */
-        proc.vpid = i+1;
+        proc->vpid = i+1;
         /* store the hostname for the proc */
-        if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)&proc, OPAL_SCOPE_INTERNAL,
+        if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)proc, OPAL_SCOPE_INTERNAL,
                                                 ORTE_DB_HOSTNAME, nodes[i], OPAL_STRING))) {
             ORTE_ERROR_LOG(rc);
             return rc;
@@ -223,7 +224,7 @@
         /* the arch defaults to our arch so that non-hetero
          * case will yield correct behavior
          */
-        if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)&proc, OPAL_SCOPE_INTERNAL,
+        if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)proc, OPAL_SCOPE_INTERNAL,
                                                 ORTE_DB_ARCH, &opal_local_arch, OPAL_UINT32))) {
             ORTE_ERROR_LOG(rc);
             return rc;
@@ -244,7 +245,7 @@
          */
 
         /* construct the URI */
-        orte_util_convert_process_name_to_string(&proc_name, &proc);
+        orte_util_convert_process_name_to_string(&proc_name, proc);
         asprintf(&uri, "%s;tcp://%s:%d", proc_name, addr, (int)orte_process_info.my_port);
         OPAL_OUTPUT_VERBOSE((2, orte_nidmap_output,
                              "%s orte:util:build:daemon:nidmap node %s daemon %d addr %s uri %s",
@@ -392,7 +393,9 @@
 {
     int n;
     orte_vpid_t num_daemons;
-    orte_process_name_t daemon;
+    /* FIXME make sure the orte_process_name_t is 8 bytes aligned */
+    opal_identifier_t _daemon;
+    orte_process_name_t *daemon = (orte_process_name_t *)&_daemon;
     opal_buffer_t buf;
     int rc=ORTE_SUCCESS;
     uint8_t oversub;
@@ -432,10 +435,10 @@
     }
 
     /* set the daemon jobid */
-    daemon.jobid = ORTE_DAEMON_JOBID(ORTE_PROC_MY_NAME->jobid);
+    daemon->jobid = ORTE_DAEMON_JOBID(ORTE_PROC_MY_NAME->jobid);
 
     n=1;
-    while (OPAL_SUCCESS == (rc = opal_dss.unpack(&buf, &daemon.vpid, &n, ORTE_VPID))) {
+    while (OPAL_SUCCESS == (rc = opal_dss.unpack(&buf, &daemon->vpid, &n, ORTE_VPID))) {
         /* unpack and store the node's name */
         n=1;
         if (ORTE_SUCCESS != (rc = opal_dss.unpack(&buf, &nodename, &n, OPAL_STRING))) {
@@ -443,7 +446,7 @@
             return rc;
         }
         /* we only need the hostname for our own error messages, so mark it as internal */
-        if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)&daemon, OPAL_SCOPE_INTERNAL,
+        if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)daemon, OPAL_SCOPE_INTERNAL,
                                                 ORTE_DB_HOSTNAME, nodename, OPAL_STRING))) {
             ORTE_ERROR_LOG(rc);
             return rc;
@@ -452,9 +455,9 @@
         opal_output_verbose(2, orte_nidmap_output,
                             "%s storing nodename %s for daemon %s",
                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
-                            nodename, ORTE_VPID_PRINT(daemon.vpid));
+                            nodename, ORTE_VPID_PRINT(daemon->vpid));
         if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)ORTE_NAME_WILDCARD, OPAL_SCOPE_INTERNAL,
-                                                nodename, &daemon.vpid, OPAL_UINT32))) {
+                                                nodename, &daemon->vpid, OPAL_UINT32))) {
             ORTE_ERROR_LOG(rc);
             return rc;
         }
@@ -462,10 +465,10 @@
         OPAL_OUTPUT_VERBOSE((2, orte_nidmap_output,
                              "%s orte:util:decode:nidmap daemon %s node %s",
                              ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
-                             ORTE_VPID_PRINT(daemon.vpid), nodename));
+                             ORTE_VPID_PRINT(daemon->vpid), nodename));
 
         /* if this is my daemon, then store the data for me too */
-        if (daemon.vpid == ORTE_PROC_MY_DAEMON->vpid) {
+        if (daemon->vpid == ORTE_PROC_MY_DAEMON->vpid) {
             if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)ORTE_PROC_MY_NAME, OPAL_SCOPE_NON_PEER,
                                                     ORTE_DB_HOSTNAME, nodename, OPAL_STRING))) {
                 ORTE_ERROR_LOG(rc);
@@ -473,7 +476,7 @@
             }
             /* we may need our daemon vpid to be shared with non-peers */
             if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)ORTE_PROC_MY_NAME, OPAL_SCOPE_NON_PEER,
-                                                    ORTE_DB_DAEMON_VPID, &daemon.vpid, OPAL_UINT32))) {
+                                                    ORTE_DB_DAEMON_VPID, &daemon->vpid, OPAL_UINT32))) {
                 ORTE_ERROR_LOG(rc);
                 return rc;
             }
@@ -498,9 +501,9 @@
                 opal_output_verbose(2, orte_nidmap_output,
                                     "%s storing alias %s for daemon %s",
                                     ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
-                                    alias, ORTE_VPID_PRINT(daemon.vpid));
+                                    alias, ORTE_VPID_PRINT(daemon->vpid));
                 if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)ORTE_NAME_WILDCARD, OPAL_SCOPE_INTERNAL,
-                                                        alias, &daemon.vpid, OPAL_UINT32))) {
+                                                        alias, &daemon->vpid, OPAL_UINT32))) {
                     ORTE_ERROR_LOG(rc);
                     return rc;
                 }
@@ -524,13 +527,13 @@
                 ORTE_ERROR_LOG(rc);
                 return rc;
             }
-            if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)&daemon, OPAL_SCOPE_NON_PEER,
+            if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)daemon, OPAL_SCOPE_NON_PEER,
                                                     ORTE_DB_HOSTID, &hostid, OPAL_UINT32))) {
                 ORTE_ERROR_LOG(rc);
                 return rc;
             }
             /* if this is my daemon, then store it as my hostid as well */
-            if (daemon.vpid == ORTE_PROC_MY_DAEMON->vpid) {
+            if (daemon->vpid == ORTE_PROC_MY_DAEMON->vpid) {
                 if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)ORTE_PROC_MY_NAME, OPAL_SCOPE_NON_PEER,
                                                         ORTE_DB_HOSTID, &hostid, OPAL_UINT32))) {
                     ORTE_ERROR_LOG(rc);
@@ -885,7 +888,10 @@
     orte_proc_state_t state;
     orte_app_idx_t app_idx;
     int32_t restarts;
-    orte_process_name_t proc, dmn;
+    /* FIXME make sure the orte_process_name_t is 8 bytes aligned */
+    opal_identifier_t _proc, _dmn;
+    orte_process_name_t *proc = (orte_process_name_t *)&_proc;
+    orte_process_name_t *dmn = (orte_process_name_t *)&_dmn;
     char *hostname;
     uint8_t flag;
     opal_buffer_t *bptr;
@@ -899,16 +905,16 @@
     }
 
     /* set the daemon jobid */
-    dmn.jobid = ORTE_DAEMON_JOBID(ORTE_PROC_MY_NAME->jobid);
+    dmn->jobid = ORTE_DAEMON_JOBID(ORTE_PROC_MY_NAME->jobid);
 
     n = 1;
     /* cycle through the buffer */
     orte_process_info.num_local_peers = 0;
-    while (ORTE_SUCCESS == (rc = opal_dss.unpack(&buf, &proc.jobid, &n, ORTE_JOBID))) {
+    while (ORTE_SUCCESS == (rc = opal_dss.unpack(&buf, &proc->jobid, &n, ORTE_JOBID))) {
         OPAL_OUTPUT_VERBOSE((2, orte_nidmap_output,
                              "%s orte:util:decode:pidmap working job %s",
                              ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
-                             ORTE_JOBID_PRINT(proc.jobid)));
+                             ORTE_JOBID_PRINT(proc->jobid)));
 
         /* unpack and store the number of procs */
         n=1;
@@ -916,9 +922,9 @@
             ORTE_ERROR_LOG(rc);
             goto cleanup;
         }
-        proc.vpid = ORTE_VPID_INVALID;
+        proc->vpid = ORTE_VPID_INVALID;
         /* only useful to ourselves */
-        if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)&proc, OPAL_SCOPE_INTERNAL,
+        if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)proc, OPAL_SCOPE_INTERNAL,
                                                 ORTE_DB_NPROCS, &num_procs, OPAL_UINT32))) {
             ORTE_ERROR_LOG(rc);
             goto cleanup;
@@ -930,7 +936,7 @@
             goto cleanup;
         }
         /* only of possible use to ourselves */
-        if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)&proc, OPAL_SCOPE_INTERNAL,
+        if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)proc, OPAL_SCOPE_INTERNAL,
                                                 ORTE_DB_NPROC_OFFSET, &offset, OPAL_UINT32))) {
             ORTE_ERROR_LOG(rc);
             goto cleanup;
@@ -939,12 +945,12 @@
          * all data for this job has been read
          */
         n=1;
-        while (OPAL_SUCCESS == (rc = opal_dss.unpack(&buf, &proc.vpid, &n, ORTE_VPID))) {
-            if (ORTE_VPID_INVALID == proc.vpid) {
+        while (OPAL_SUCCESS == (rc = opal_dss.unpack(&buf, &proc->vpid, &n, ORTE_VPID))) {
+            if (ORTE_VPID_INVALID == proc->vpid) {
                 break;
             }
             n=1;
-            if (ORTE_SUCCESS != (rc = opal_dss.unpack(&buf, &dmn.vpid, &n, ORTE_VPID))) {
+            if (ORTE_SUCCESS != (rc = opal_dss.unpack(&buf, &dmn->vpid, &n, ORTE_VPID))) {
                 ORTE_ERROR_LOG(rc);
                 goto cleanup;
             }
@@ -965,15 +971,15 @@
                 goto cleanup;
             }
 #endif
-            if (proc.jobid == ORTE_PROC_MY_NAME->jobid &&
-                proc.vpid == ORTE_PROC_MY_NAME->vpid) {
+            if (proc->jobid == ORTE_PROC_MY_NAME->jobid &&
+                proc->vpid == ORTE_PROC_MY_NAME->vpid) {
                 /* set mine */
                 orte_process_info.my_local_rank = local_rank;
                 orte_process_info.my_node_rank = node_rank;
                 /* if we are the local leader (i.e., local_rank=0), then record it */
                 if (0 == local_rank) {
                     if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)ORTE_PROC_MY_NAME, OPAL_SCOPE_INTERNAL,
-                                                            OPAL_DB_LOCALLDR, (opal_identifier_t*)&proc, OPAL_ID_T))) {
+                                                            OPAL_DB_LOCALLDR, (opal_identifier_t*)proc, OPAL_ID_T))) {
                         ORTE_ERROR_LOG(rc);
                         goto cleanup;
                     }
@@ -983,14 +989,14 @@
                     orte_process_info.cpuset = strdup(cpu_bitmap);
                 }
 #endif
-            } else if (proc.jobid == ORTE_PROC_MY_NAME->jobid &&
-                       dmn.vpid == ORTE_PROC_MY_DAEMON->vpid) {
+            } else if (proc->jobid == ORTE_PROC_MY_NAME->jobid &&
+                       dmn->vpid == ORTE_PROC_MY_DAEMON->vpid) {
                 /* if we share a daemon, then add to my local peers */
                 orte_process_info.num_local_peers++;
                 /* if this is the local leader (i.e., local_rank=0), then record it */
                 if (0 == local_rank) {
                     if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)ORTE_PROC_MY_NAME, OPAL_SCOPE_INTERNAL,
-                                                            OPAL_DB_LOCALLDR, (opal_identifier_t*)&proc, OPAL_ID_T))) {
+                                                            OPAL_DB_LOCALLDR, (opal_identifier_t*)proc, OPAL_ID_T))) {
                         ORTE_ERROR_LOG(rc);
                         goto cleanup;
                     }
@@ -1020,18 +1026,18 @@
                 goto cleanup;
             }
             /* store the values in the database - again, these are for our own internal use */
-            if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)&proc, OPAL_SCOPE_INTERNAL,
+            if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)proc, OPAL_SCOPE_INTERNAL,
                                                     ORTE_DB_LOCALRANK, &local_rank, ORTE_LOCAL_RANK))) {
                 ORTE_ERROR_LOG(rc);
                 goto cleanup;
             }
-            if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)&proc, OPAL_SCOPE_INTERNAL,
+            if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)proc, OPAL_SCOPE_INTERNAL,
                                                     ORTE_DB_NODERANK, &node_rank, ORTE_NODE_RANK))) {
                 ORTE_ERROR_LOG(rc);
                 goto cleanup;
             }
 #if OPAL_HAVE_HWLOC
-            if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)&proc, OPAL_SCOPE_INTERNAL,
+            if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)proc, OPAL_SCOPE_INTERNAL,
                                                     OPAL_DB_CPUSET, cpu_bitmap, OPAL_STRING))) {
                 ORTE_ERROR_LOG(rc);
                 goto cleanup;
@@ -1044,25 +1050,25 @@
              * for ourself in the database
              * as we already did so during startup
              */
-            if (proc.jobid != ORTE_PROC_MY_NAME->jobid ||
-                proc.vpid != ORTE_PROC_MY_NAME->vpid) {
+            if (proc->jobid != ORTE_PROC_MY_NAME->jobid ||
+                proc->vpid != ORTE_PROC_MY_NAME->vpid) {
                 /* store the data for this proc - the location of a proc is something
                  * we would potentially need to share with a non-peer
                  */
-                if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)&proc, OPAL_SCOPE_NON_PEER,
-                                                        ORTE_DB_DAEMON_VPID, &dmn.vpid, OPAL_UINT32))) {
+                if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)proc, OPAL_SCOPE_NON_PEER,
+                                                        ORTE_DB_DAEMON_VPID, &dmn->vpid, OPAL_UINT32))) {
                     ORTE_ERROR_LOG(rc);
                     goto cleanup;
                 }
                 /* in a singleton comm_spawn, we can be passed the name of a daemon, which
                  * means that the proc's parent is invalid - check and avoid the rest of
                  * this logic in that case */
-                if (ORTE_VPID_INVALID != dmn.vpid) {
+                if (ORTE_VPID_INVALID != dmn->vpid) {
                     /* if coprocessors were detected, lookup and store the hostid for this proc */
                     if (orte_coprocessors_detected) {
                         /* lookup the hostid for this daemon */
                         vptr = &hostid;
-                        if (ORTE_SUCCESS != (rc = opal_db.fetch((opal_identifier_t*)&dmn, ORTE_DB_HOSTID,
+                        if (ORTE_SUCCESS != (rc = opal_db.fetch((opal_identifier_t*)dmn, ORTE_DB_HOSTID,
                                                                 (void**)&vptr, OPAL_UINT32))) {
                             ORTE_ERROR_LOG(rc);
                             goto cleanup;
@@ -1070,29 +1076,29 @@
                         OPAL_OUTPUT_VERBOSE((2, orte_nidmap_output,
                                              "%s FOUND HOSTID %s FOR DAEMON %s",
                                              ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
-                                             ORTE_VPID_PRINT(hostid), ORTE_VPID_PRINT(dmn.vpid)));
+                                             ORTE_VPID_PRINT(hostid), ORTE_VPID_PRINT(dmn->vpid)));
                         /* store it as hostid for this proc */
-                        if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)&proc, OPAL_SCOPE_NON_PEER,
+                        if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)proc, OPAL_SCOPE_NON_PEER,
                                                                 ORTE_DB_HOSTID, &hostid, OPAL_UINT32))) {
                             ORTE_ERROR_LOG(rc);
                             goto cleanup;
                         }
                     }
                     /* lookup and store the hostname for this proc */
-                    if (ORTE_SUCCESS != (rc = opal_db.fetch_pointer((opal_identifier_t*)&dmn, ORTE_DB_HOSTNAME,
+                    if (ORTE_SUCCESS != (rc = opal_db.fetch_pointer((opal_identifier_t*)dmn, ORTE_DB_HOSTNAME,
                                                                     (void**)&hostname, OPAL_STRING))) {
                         ORTE_ERROR_LOG(rc);
                         goto cleanup;
                     }
-                    if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)&proc, OPAL_SCOPE_NON_PEER,
+                    if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)proc, OPAL_SCOPE_NON_PEER,
                                                             ORTE_DB_HOSTNAME, hostname, OPAL_STRING))) {
                         ORTE_ERROR_LOG(rc);
                         goto cleanup;
                     }
                 }
                 /* store this procs global rank - only used by us */
-                global_rank = proc.vpid + offset;
-                if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)&proc, OPAL_SCOPE_INTERNAL,
+                global_rank = proc->vpid + offset;
+                if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)proc, OPAL_SCOPE_INTERNAL,
                                                         ORTE_DB_GLOBAL_RANK, &global_rank, OPAL_UINT32))) {
                     ORTE_ERROR_LOG(rc);
                     goto cleanup;
@@ -1101,8 +1107,8 @@
                 /* update our own global rank - this is something we will need
                  * to share with non-peers
                  */
-                global_rank = proc.vpid + offset;
-                if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)&proc, OPAL_SCOPE_NON_PEER,
+                global_rank = proc->vpid + offset;
+                if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)proc, OPAL_SCOPE_NON_PEER,
                                                         ORTE_DB_GLOBAL_RANK, &global_rank, OPAL_UINT32))) {
                     ORTE_ERROR_LOG(rc);
                     goto cleanup;

