Index: ompi/runtime/ompi_mpi_init.c
===================================================================
--- ompi/runtime/ompi_mpi_init.c	(revision 20022)
+++ ompi/runtime/ompi_mpi_init.c	(working copy)
@@ -685,7 +685,9 @@
     }
 
     /* Do we need to wait for a debugger? */
+#ifndef __WINDOWS__
     ompi_wait_for_debugger();
+#endif
     
     /* check for timing request - get stop time and report elapsed
      time if so, then start the clock again */
Index: opal/event/event.c
===================================================================
--- opal/event/event.c	(revision 20022)
+++ opal/event/event.c	(working copy)
@@ -310,7 +310,11 @@
 #ifdef __APPLE__
                                        "select",
 #else
+#  ifdef __WINDOWS__
+                                       "win32",
+#  else
                                        "poll",
+#  endif
 #endif
                                        &event_module_include);
         free(help_msg);  /* release the help message */
Index: orte/runtime/orte_wait.c
===================================================================
--- orte/runtime/orte_wait.c	(revision 20022)
+++ orte/runtime/orte_wait.c	(working copy)
@@ -495,6 +495,9 @@
     /* create the event */
     *event = (opal_event_t*)malloc(sizeof(opal_event_t));
     
+    /* setup the trigger and its associated lock */
+    OBJ_CONSTRUCT(trig, orte_trigger_event_t);
+    
     /* pass back the write end of the pipe */
     trig->channel = p[1];
     
@@ -887,8 +890,8 @@
         return;
     }
         
-    send(trig->channel, (const char *) &data, sizeof(int), 0);
-	closesocket(trig->channel);
+    send(trig->channel, (const char*)&data, sizeof(int), 0);
+    closesocket(trig->channel);
     opal_progress();
 }
 
@@ -1102,6 +1105,9 @@
     /* create the event */
     *event = (opal_event_t*)malloc(sizeof(opal_event_t));
     
+    /* setup the trigger and its associated lock */
+    OBJ_CONSTRUCT(trig, orte_trigger_event_t);
+    
     /* pass back the write end of the pipe */
     trig->channel = p[1];
     
Index: orte/tools/orterun/orterun.c
===================================================================
--- orte/tools/orterun/orterun.c	(revision 20022)
+++ orte/tools/orterun/orterun.c	(working copy)
@@ -738,8 +738,15 @@
                             orte_max_timeout, timeout_callback);
     }
     
+#ifndef __WINDOWS__
     /* now wait to hear it has been done */
     opal_event_dispatch();
+#else
+	/* We are using WT_EXECUTEINWAITTHREAD mode of threading pool,
+       the other callbacks won't be triggerred until this thread finishes,
+	   so just return to main thread and process the rest events there.  */
+	return;
+#endif
     
     /* if we cannot order the daemons to terminate, then
      * all we can do is cleanly exit ourselves
Index: orte/util/hnp_contact.c
===================================================================
--- orte/util/hnp_contact.c	(revision 20022)
+++ orte/util/hnp_contact.c	(working copy)
@@ -255,7 +255,7 @@
          * See if a contact file exists in this directory and read it
          */
         contact_filename = opal_os_path( false, headdir,
-                                         dir_entry->d_name, "contact.txt", NULL );
+                                         file_data, "contact.txt", NULL );
         
         hnp = OBJ_NEW(orte_hnp_contact_t);
         if (ORTE_SUCCESS == (ret = orte_read_hnp_contact_file(contact_filename, hnp))) {