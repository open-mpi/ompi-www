<?
$subject_val = "Re: [OMPI devel] RFC: merge windows branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 10:50:32 2008" -->
<!-- isoreceived="20081120155032" -->
<!-- sent="Thu, 20 Nov 2008 16:50:23 +0100" -->
<!-- isosent="20081120155023" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: merge windows branch into trunk" -->
<!-- id="4925873F.1080208_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ea86ce220811200553v77ae9f14n2ec9defac033eb3f_at_mail.gmail.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI devel] RFC: merge windows branch into trunk<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-20 10:50:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4931.php">Shiqing Fan: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4929.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="4928.php">Tim Mattox: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4933.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim,
<br>
<p>Yes, you're right. Most of those changes are made based on #ifdef 
<br>
__WINDOWS__, that would make troubles for CMRs.
<br>
<p>Here I provide some more information :
<br>
<p>------------------------------------
<br>
<p>These files are harmless, because no other platform will use them (no need to go into 1.3).
<br>
<p>M opal/event/WIN32-Code/win32.c
<br>
M opal/mca/installdirs/windows/opal_installdirs_windows.c
<br>
M opal/win32/ompi_misc.h
<br>
M opal/win32/win_compat.h
<br>
M orte/mca/plm/ccp/plm_ccp_component.c
<br>
M orte/mca/plm/ccp/plm_ccp_module.c
<br>
M orte/mca/ras/ccp/ras_ccp_component.c
<br>
M orte/mca/ras/ccp/ras_ccp_module.c
<br>
<p><p>------------------------------------
<br>
<p>The changes in these files are important for windows support(see details in the first diff file).
<br>
<p>M orte/runtime/orte_wait.c
<br>
M orte/tools/orterun/orterun.c
<br>
M orte/util/hnp_contact.c
<br>
M ompi/runtime/ompi_mpi_init.c
<br>
M opal/event/event.c
<br>
<p>------------------------------------
<br>
<p>These files are less important, and could be committed to trunk later (after 1.3). The modification is huge in plm_process_module.c(see the second diff file)
<br>
<p>M opal/runtime/opal_cr.c
<br>
M orte/mca/plm/process/plm_process_module.c
<br>
M opal/mca/base/mca_base_param.c
<br>
<p><p><p>If it's necessary, we can also delay one/two of the three parts.
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p><p><p><p><p>Tim Mattox wrote:
<br>
<span class="quotelev1">&gt; I have two concerns.  First is that we really need to focus on
</span><br>
<span class="quotelev1">&gt; getting 1.3 stable and released.  My second concern with
</span><br>
<span class="quotelev1">&gt; this is how will it effect merging of bugfixes for 1.3 from the
</span><br>
<span class="quotelev1">&gt; trunk once we release 1.3.  Will the following modified files
</span><br>
<span class="quotelev1">&gt; cause merge conflicts for CMRs?  How big is this diff,
</span><br>
<span class="quotelev1">&gt; can you send it to the list, or otherwise make it available?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; M ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev2">&gt;&gt; M opal/event/event.c
</span><br>
<span class="quotelev2">&gt;&gt; M opal/event/WIN32-Code/win32.c
</span><br>
<span class="quotelev2">&gt;&gt; M opal/mca/base/mca_base_param.c
</span><br>
<span class="quotelev2">&gt;&gt; M opal/mca/installdirs/windows/opal_installdirs_windows.c
</span><br>
<span class="quotelev2">&gt;&gt; M opal/runtime/opal_cr.c
</span><br>
<span class="quotelev2">&gt;&gt; M opal/win32/ompi_misc.h
</span><br>
<span class="quotelev2">&gt;&gt; M opal/win32/win_compat.h
</span><br>
<span class="quotelev2">&gt;&gt; M orte/mca/plm/ccp/plm_ccp_component.c
</span><br>
<span class="quotelev2">&gt;&gt; M orte/mca/plm/ccp/plm_ccp_module.c
</span><br>
<span class="quotelev2">&gt;&gt; M orte/mca/plm/process/plm_process_module.c
</span><br>
<span class="quotelev2">&gt;&gt; M orte/mca/ras/ccp/ras_ccp_component.c
</span><br>
<span class="quotelev2">&gt;&gt; M orte/mca/ras/ccp/ras_ccp_module.c
</span><br>
<span class="quotelev2">&gt;&gt; M orte/runtime/orte_wait.c
</span><br>
<span class="quotelev2">&gt;&gt; M orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev2">&gt;&gt; M orte/util/hnp_contact.c
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would ask that you consider breaking these
</span><br>
<span class="quotelev1">&gt; modifications into parts that &quot;could&quot; be harmlessly
</span><br>
<span class="quotelev1">&gt; brought over independently to 1.3, if a subsequent
</span><br>
<span class="quotelev1">&gt; non-windows bugfix to one of those files needs to
</span><br>
<span class="quotelev1">&gt; be brought over that will only merge cleanly if some
</span><br>
<span class="quotelev1">&gt; of your changes to the same file are also brought over.
</span><br>
<span class="quotelev1">&gt; For example, it would be a real pain to have to use
</span><br>
<span class="quotelev1">&gt; patchfiles to resolve merge conflicts simply because
</span><br>
<span class="quotelev1">&gt; of an #ifdef or white-space change here or there.
</span><br>
<span class="quotelev1">&gt; Hopefully that made sense...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Although I don't use windows myself, I appreciate your
</span><br>
<span class="quotelev1">&gt; and others' efforts to expand the number of platforms
</span><br>
<span class="quotelev1">&gt; we can run on.  Great work!
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>
<p>
Index: ompi/runtime/ompi_mpi_init.c
<br>
===================================================================
<br>
--- ompi/runtime/ompi_mpi_init.c	(revision 20022)
<br>
+++ ompi/runtime/ompi_mpi_init.c	(working copy)
<br>
@@ -685,7 +685,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Do we need to wait for a debugger? */
<br>
+#ifndef __WINDOWS__
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_wait_for_debugger();
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* check for timing request - get stop time and report elapsed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time if so, then start the clock again */
<br>
Index: opal/event/event.c
<br>
===================================================================
<br>
--- opal/event/event.c	(revision 20022)
<br>
+++ opal/event/event.c	(working copy)
<br>
@@ -310,7 +310,11 @@
<br>
&nbsp;#ifdef __APPLE__
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;select&quot;,
<br>
&nbsp;#else
<br>
+#  ifdef __WINDOWS__
<br>
+                                       &quot;win32&quot;,
<br>
+#  else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;poll&quot;,
<br>
+#  endif
<br>
&nbsp;#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;event_module_include);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(help_msg);  /* release the help message */
<br>
Index: orte/runtime/orte_wait.c
<br>
===================================================================
<br>
--- orte/runtime/orte_wait.c	(revision 20022)
<br>
+++ orte/runtime/orte_wait.c	(working copy)
<br>
@@ -495,6 +495,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* create the event */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*event = (opal_event_t*)malloc(sizeof(opal_event_t));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
+    /* setup the trigger and its associated lock */
<br>
+    OBJ_CONSTRUCT(trig, orte_trigger_event_t);
<br>
+    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* pass back the write end of the pipe */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;trig-&gt;channel = p[1];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
@@ -887,8 +890,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
-    send(trig-&gt;channel, (const char *) &amp;data, sizeof(int), 0);
<br>
-	closesocket(trig-&gt;channel);
<br>
+    send(trig-&gt;channel, (const char*)&amp;data, sizeof(int), 0);
<br>
+    closesocket(trig-&gt;channel);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_progress();
<br>
&nbsp;}
<br>
&nbsp;
<br>
@@ -1102,6 +1105,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* create the event */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*event = (opal_event_t*)malloc(sizeof(opal_event_t));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
+    /* setup the trigger and its associated lock */
<br>
+    OBJ_CONSTRUCT(trig, orte_trigger_event_t);
<br>
+    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* pass back the write end of the pipe */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;trig-&gt;channel = p[1];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
Index: orte/tools/orterun/orterun.c
<br>
===================================================================
<br>
--- orte/tools/orterun/orterun.c	(revision 20022)
<br>
+++ orte/tools/orterun/orterun.c	(working copy)
<br>
@@ -738,8 +738,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_max_timeout, timeout_callback);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
+#ifndef __WINDOWS__
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* now wait to hear it has been done */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_event_dispatch();
<br>
+#else
<br>
+	/* We are using WT_EXECUTEINWAITTHREAD mode of threading pool,
<br>
+       the other callbacks won't be triggerred until this thread finishes,
<br>
+	   so just return to main thread and process the rest events there.  */
<br>
+	return;
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* if we cannot order the daemons to terminate, then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* all we can do is cleanly exit ourselves
<br>
Index: orte/util/hnp_contact.c
<br>
===================================================================
<br>
--- orte/util/hnp_contact.c	(revision 20022)
<br>
+++ orte/util/hnp_contact.c	(working copy)
<br>
@@ -255,7 +255,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* See if a contact file exists in this directory and read it
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contact_filename = opal_os_path( false, headdir,
<br>
-                                         dir_entry-&gt;d_name, &quot;contact.txt&quot;, NULL );
<br>
+                                         file_data, &quot;contact.txt&quot;, NULL );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hnp = OBJ_NEW(orte_hnp_contact_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS == (ret = orte_read_hnp_contact_file(contact_filename, hnp))) {
<br>

<p>
Index: opal/mca/base/mca_base_param.c
<br>
===================================================================
<br>
--- opal/mca/base/mca_base_param.c	(revision 20022)
<br>
+++ opal/mca/base/mca_base_param.c	(working copy)
<br>
@@ -93,7 +93,7 @@
<br>
&nbsp;&nbsp;* local functions
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;#if defined(__WINDOWS__)
<br>
-static int read_keys_from_registry(HKEY hKey, char *sub_key, char *current_key);
<br>
+static int read_keys_from_registry(HKEY hKey, char *sub_key, char *current_name);
<br>
&nbsp;#endif  /* defined(__WINDOWS__) */
<br>
&nbsp;static int fixup_files(char **file_list, char * path, bool rel_path_search);
<br>
&nbsp;static int read_files(char *file_list);
<br>
@@ -1077,7 +1077,7 @@
<br>
&nbsp;#define MAX_KEY_LENGTH 255
<br>
&nbsp;#define MAX_VALUE_NAME 16383
<br>
&nbsp;
<br>
-static int read_keys_from_registry(HKEY hKey, char *sub_key, char *current_key)
<br>
+static int read_keys_from_registry(HKEY hKey, char *sub_key, char *current_name)
<br>
&nbsp;{       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TCHAR   achKey[MAX_KEY_LENGTH];        /* buffer for subkey name */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DWORD   cbName;                        /* size of name string */
<br>
@@ -1094,8 +1094,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LPDWORD lpType;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LPDWORD word_lpData;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TCHAR   str_lpData[MAX_VALUE_NAME];
<br>
-    TCHAR   *str_key_name, *tmp_key, *type;
<br>
-    DWORD   dwSize, i, retCode, type_len;
<br>
+    TCHAR   *str_key_name, *type_name, *next_name;
<br>
+    DWORD   dwSize, i, retCode, type_len, param_type;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TCHAR achValue[MAX_VALUE_NAME];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DWORD cchValue = MAX_VALUE_NAME;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HKEY hTestKey; 
<br>
@@ -1120,102 +1120,75 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL );
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Enumerate the subkeys, until RegEnumKeyEx fails. */
<br>
-    if (cSubKeys) {
<br>
-        for (i = 0; i &lt; cSubKeys; i++) { 
<br>
-            cbName = MAX_KEY_LENGTH;
<br>
-            retCode = RegEnumKeyEx(hTestKey, i, achKey, &amp;cbName, NULL, NULL, NULL, NULL); 
<br>
-            if (retCode == ERROR_SUCCESS) {
<br>
-                asprintf(&amp;sub_sub_key, &quot;%s\\%s&quot;, sub_key, achKey);
<br>
-                if (current_key!=NULL) {
<br>
-                    asprintf(&amp;tmp_key, &quot;%s&quot;, current_key);
<br>
-                    asprintf(&amp;current_key, &quot;%s_%s&quot;, current_key, achKey);
<br>
-                } else {
<br>
-                    tmp_key = NULL;
<br>
-                    asprintf(&amp;current_key, &quot;%s&quot;, achKey);
<br>
-                }
<br>
-                read_keys_from_registry(hKey, sub_sub_key, current_key);
<br>
-                free(current_key);
<br>
-                if (tmp_key!=NULL) {
<br>
-                    asprintf(&amp;current_key, &quot;%s&quot;, tmp_key);
<br>
-                    free(tmp_key);
<br>
-                } else
<br>
-                    current_key = NULL;
<br>
-            }
<br>
+    for (i = 0; i &lt; cSubKeys; i++) { 
<br>
+        cbName = MAX_KEY_LENGTH;
<br>
+        retCode = RegEnumKeyEx(hTestKey, i, achKey, &amp;cbName, NULL, NULL, NULL, NULL); 
<br>
+        if (retCode != ERROR_SUCCESS) continue;
<br>
+        asprintf(&amp;sub_sub_key, &quot;%s\\%s&quot;, sub_key, achKey);
<br>
+        if( NULL != current_name ) {
<br>
+            asprintf(&amp;next_name, &quot;%s_%s&quot;, current_name, achKey);
<br>
+        } else {
<br>
+            asprintf(&amp;next_name, &quot;%s&quot;, achKey);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    } 
<br>
+        read_keys_from_registry(hKey, sub_sub_key, next_name);
<br>
+        free(next_name);
<br>
+        free(sub_sub_key);
<br>
+    }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Enumerate the key values. */
<br>
-    if (cValues) {
<br>
-        for (i=0, retCode=ERROR_SUCCESS; i&lt;cValues; i++) { 
<br>
-            cchValue = MAX_VALUE_NAME; 
<br>
-            achValue[0] = '\0'; 
<br>
-            retCode = RegEnumValue(hTestKey, i, achValue, &amp;cchValue, NULL, NULL, NULL, NULL);
<br>
-     
<br>
-            if (retCode == ERROR_SUCCESS ) { 
<br>
-           
<br>
-                /* lpType - get the type of the value
<br>
-                 * dwSize - get the size of the buffer to hold the value
<br>
-                 */
<br>
-                retCode = RegQueryValueEx(hTestKey, achValue, NULL, (LPDWORD)&amp;lpType, NULL, &amp;dwSize);
<br>
+    for( i = 0; i &lt; cValues; i++ ) { 
<br>
+        cchValue = MAX_VALUE_NAME; 
<br>
+        achValue[0] = '\0'; 
<br>
+        retCode = RegEnumValue(hTestKey, i, achValue, &amp;cchValue, NULL, NULL, NULL, NULL);
<br>
+        if (retCode != ERROR_SUCCESS ) continue; 
<br>
+       
<br>
+        /* lpType - get the type of the value
<br>
+         * dwSize - get the size of the buffer to hold the value
<br>
+         */
<br>
+        retCode = RegQueryValueEx(hTestKey, achValue, NULL, (LPDWORD)&amp;lpType, NULL, &amp;dwSize);
<br>
&nbsp;
<br>
-                if (strcmp(achValue,&quot;&quot;)) {
<br>
-                    if (current_key!=NULL)
<br>
-                        asprintf(&amp;str_key_name, &quot;%s_%s&quot;, current_key, achValue);
<br>
-                    else
<br>
-                        asprintf(&amp;str_key_name, &quot;%s&quot;, achValue);
<br>
-                } else {
<br>
-                    if (current_key!=NULL)
<br>
-                        asprintf(&amp;str_key_name, &quot;%s&quot;, current_key);
<br>
-                    else
<br>
-                        asprintf(&amp;str_key_name, &quot;%s&quot;, achValue);
<br>
-                } 
<br>
-                
<br>
-                type_len = strcspn(str_key_name, &quot;_&quot;);
<br>
-                type = (char*) malloc((type_len+1)*sizeof(char));
<br>
-                strncpy( type, str_key_name, type_len );
<br>
-                if ( type_len == strlen(str_key_name) )
<br>
-                    strcpy( str_key_name, &quot;&quot; );
<br>
-                else
<br>
-                    strcpy( str_key_name, str_key_name + type_len + 1 ); /* trim str_key_name by length of type + 1 for underscrore */
<br>
-                type[type_len]='\0';
<br>
-                if (lpType == (LPDWORD) REG_SZ) { /* REG_SZ = 1 */
<br>
-                    retCode = RegQueryValueEx(hTestKey, achValue, NULL, NULL, (LPBYTE)&amp;str_lpData, &amp;dwSize);
<br>
-                    if (!retCode) {
<br>
-                        mca_base_param_storage_t storage, override;
<br>
-                        mca_base_param_storage_t lookup;
<br>
-    
<br>
-                        storage.stringval = (char*)str_lpData;
<br>
-                        override.stringval = (char*)str_lpData;
<br>
-                        (void)param_register( type, NULL, str_key_name, &quot;Key read from Windows registry&quot;, 
<br>
-                                              MCA_BASE_PARAM_TYPE_STRING, false, false,
<br>
-                                              &amp;storage, NULL, &amp;override, 
<br>
-                                              &amp;lookup );
<br>
-                        /*printf( &quot;%s %s = %s.\n&quot;, type, str_key_name, str_lpData);*/
<br>
-                    } else {
<br>
-                        opal_output( 0, &quot;error reading value of param_name: %s with %d error.\n&quot;,
<br>
-                                     str_key_name, retCode);
<br>
-                    }
<br>
-                }
<br>
-                if (lpType == (LPDWORD) REG_DWORD) { /* REG_DWORD = 4 */
<br>
-                    retCode = RegQueryValueEx(hTestKey, achValue, NULL, NULL, (LPBYTE)&amp;word_lpData, &amp;dwSize);
<br>
-                    if (!retCode) {
<br>
-                        storage.intval  = (int)word_lpData;
<br>
-                        override.intval = (int)word_lpData;
<br>
-                        (void)param_register( type, NULL, str_key_name, &quot;Key read from Windows registry&quot;, 
<br>
-                                              MCA_BASE_PARAM_TYPE_INT, false, false,
<br>
-                                              &amp;storage, NULL, &amp;override, 
<br>
-                                              &amp;lookup );
<br>
-                        /*printf( &quot;%s %s = %d.\n&quot;, type, str_key_name, (int)word_lpData);*/
<br>
-                    } else {
<br>
-                        opal_output( 0, &quot;error reading value of param_name: %s with %d error.\n&quot;,
<br>
-                                     str_key_name, retCode );
<br>
-                    }
<br>
-                }
<br>
-                free(type);
<br>
-                free(str_key_name);
<br>
-            } 
<br>
+        if (strcmp(achValue,&quot;&quot;)) {
<br>
+            if (current_name!=NULL)
<br>
+                asprintf(&amp;type_name, &quot;%s_%s&quot;, current_name, achValue);
<br>
+            else
<br>
+                asprintf(&amp;type_name, &quot;%s&quot;, achValue);
<br>
+        } else {
<br>
+            if (current_name!=NULL)
<br>
+                asprintf(&amp;type_name, &quot;%s&quot;, current_name);
<br>
+            else
<br>
+                asprintf(&amp;type_name, &quot;%s&quot;, achValue);
<br>
+        } 
<br>
+        
<br>
+        type_len = strcspn(type_name, &quot;_&quot;);
<br>
+        str_key_name = type_name + type_len + 1;
<br>
+        if( type_len == strlen(type_name) )
<br>
+            str_key_name = NULL;
<br>
+        type_name[type_len] = '\0';
<br>
+
<br>
+        retCode = 1;
<br>
+        if( lpType == (LPDWORD)REG_SZ ) { /* REG_SZ = 1 */
<br>
+            retCode = RegQueryValueEx(hTestKey, achValue, NULL, NULL, (LPBYTE)&amp;str_lpData, &amp;dwSize);
<br>
+            storage.stringval = (char*)str_lpData;
<br>
+            override.stringval = (char*)str_lpData;
<br>
+            param_type = MCA_BASE_PARAM_TYPE_STRING;
<br>
+        } else if( lpType == (LPDWORD)REG_DWORD ) { /* REG_DWORD = 4 */
<br>
+            retCode = RegQueryValueEx(hTestKey, achValue, NULL, NULL, (LPBYTE)&amp;word_lpData, &amp;dwSize);
<br>
+            storage.intval  = (int)word_lpData;
<br>
+            override.intval = (int)word_lpData;
<br>
+            param_type = MCA_BASE_PARAM_TYPE_INT;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+        if( !retCode ) {
<br>
+            (void)param_register( type_name, NULL, str_key_name, NULL, 
<br>
+                                  param_type, false, false,
<br>
+                                  &amp;storage, NULL, &amp;override, &amp;lookup );
<br>
+        } else {
<br>
+            opal_output( 0, &quot;error reading value of param_name: %s with %d error.\n&quot;,
<br>
+                         str_key_name, retCode);
<br>
+        }
<br>
+        
<br>
+        free(type_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RegCloseKey( hKey );
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_SUCCESS;
<br>
Index: opal/runtime/opal_cr.c
<br>
===================================================================
<br>
--- opal/runtime/opal_cr.c	(revision 20022)
<br>
+++ opal/runtime/opal_cr.c	(working copy)
<br>
@@ -321,8 +321,7 @@
<br>
&nbsp;#endif
<br>
&nbsp;
<br>
&nbsp;#else
<br>
-    opal_output( 0, &quot;This feature is disabled on Windows&quot; );
<br>
-    return 0;
<br>
+    opal_cr_is_tool = true;  /* no support for CR on Windows yet */ 
<br>
&nbsp;#endif  /* __WINDOWS__ */
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_base_param_reg_string_name(&quot;opal_cr&quot;, &quot;tmp_dir&quot;,
<br>
Index: orte/mca/plm/process/plm_process_module.c
<br>
===================================================================
<br>
--- orte/mca/plm/process/plm_process_module.c	(revision 20022)
<br>
+++ orte/mca/plm/process/plm_process_module.c	(working copy)
<br>
@@ -645,9 +645,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != param) free(param);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
-            char* name_string;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char** env;
<br>
-            char* var;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT_VERBOSE((1, orte_plm_globals.output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;%s plm:process: launching on node %s&quot;,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4931.php">Shiqing Fan: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4929.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="4928.php">Tim Mattox: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4933.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
