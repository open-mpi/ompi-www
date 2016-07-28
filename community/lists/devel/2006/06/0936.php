<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 12 23:24:28 2006" -->
<!-- isoreceived="20060613032428" -->
<!-- sent="Mon, 12 Jun 2006 21:24:19 -0600" -->
<!-- isosent="20060613032419" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi r10316" -->
<!-- id="448E2FE3.3070200_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200606122222.k5CMM6lI003285_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-12 23:24:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0937.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r10331"</a>
<li><strong>Previous message:</strong> <a href="0935.php">Brian Barrett: "Re: [OMPI devel] Question on &quot;get&quot; operation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
I did something very similar in my branch re the universe list object,
so we will have conflicts there. Go ahead with it, though, and I'll
adapt to yours.<br>
<br>
What this highlights, however, is the need for us to find a way to
coordinate these branches - we are starting to step all over each other.<br>
<br>
Ralph<br>
<br>
<br>
<a class="moz-txt-link-abbreviated" href="mailto:jjhursey@osl.iu.edu">jjhursey@osl.iu.edu</a> wrote:
<blockquote cite="mid200606122222.k5CMM6lI003285@sourcehaven.osl.iu.edu"
 type="cite">
  <pre wrap="">Author: jjhursey
Date: 2006-06-12 18:22:02 EDT (Mon, 12 Jun 2006)
New Revision: 10316

Modified:
   tmp/jjhursey-ft-cr/orte/runtime/orte_universe_exists.c
   tmp/jjhursey-ft-cr/orte/runtime/runtime.h
   tmp/jjhursey-ft-cr/orte/tools/orte_ps/orte_ps.c
   tmp/jjhursey-ft-cr/orte/util/univ_info.c
   tmp/jjhursey-ft-cr/orte/util/univ_info.h

Log:
Moved the universe search functionality from orte_ps to the runtime library with
the rest of the universe validation functionality.

I decided to create a new type 'orte_universe_list_t' which is an object wrapper
around 'orte_universe_t' so that we can string them together into a list format
for the search results. It would be fairly trivial to convert orte_universe_t to
the Object, and simplify things a bit, but I didn't want to do this without
passing it by the group first, since it is playing with a global variable
and data structure used throughout the code base.
&lt;Thoughts on that?&gt;




Modified: tmp/jjhursey-ft-cr/orte/runtime/orte_universe_exists.c
==============================================================================
--- tmp/jjhursey-ft-cr/orte/runtime/orte_universe_exists.c	(original)
+++ tmp/jjhursey-ft-cr/orte/runtime/orte_universe_exists.c	2006-06-12 18:22:02 EDT (Mon, 12 Jun 2006)
@@ -29,6 +29,9 @@
 #ifdef HAVE_SYS_TIME_H
 #include &lt;sys/time.h&gt;
 #endif
+#include &lt;sys/types.h&gt;
+#include &lt;dirent.h&gt;
+#include &lt;libgen.h&gt;
 
 #include "orte/orte_constants.h"
 #include "opal/util/output.h<a class="moz-txt-link-rfc2396E" href="mailto:@@-48,6+51,102@@staticstructtimevalompi_rte_ping_wait={2,0};+intorte_universe_search(opal_list_t*universe_list){+intret,exit_status=ORTE_SUCCESS;+DIR*cur_dirp=NULL;+structdirent*dir_entry;+char*univ_setup_filename=NULL;+char*fulldirpath=NULL;+char*prefix=NULL;+char*frontend=NULL;++/*+*Getthesessiondirectory+*/+if(ORTE_SUCCESS!=(ret=orte_session_dir_get_name(&fulldirpath,+&prefix,+&frontend,+orte_system_info.user,+orte_system_info.nodename,+NULL,/*batchID--Notused*/+strdup(">"
@@ -48,6 +51,102 @@
 
 static struct timeval ompi_rte_ping_wait = {2, 0};
 
+int orte_universe_search(opal_list_t *universe_list) {
+    int ret, exit_status = ORTE_SUCCESS;
+    DIR *cur_dirp = NULL;
+    struct dirent * dir_entry;
+    char *univ_setup_filename = NULL;
+    char *fulldirpath = NULL;
+    char *prefix = NULL;
+    char *frontend = NULL;
+    
+    /*
+     * Get the session directory
+     */
+    if( ORTE_SUCCESS != (ret = orte_session_dir_get_name(&amp;fulldirpath,
+                                                         &amp;prefix,
+                                                         &amp;frontend,
+                                                         orte_system_info.user,
+                                                         orte_system_info.nodename,
+                                                         NULL, /* batch ID -- Not used */
+                                                         strdup("</a>dummy"), /* Universe Name -- appened below */
+                                                         NULL, /* jobid */
+                                                         NULL  /* vpid */
+                                                         ) ) ) {
+        exit_status = ret;
+        goto cleanup;
+    }
+    
+    /* Strip off dummy the universe name */
+    fulldirpath = dirname(fulldirpath);
+
+    /*
+     * Check to make sure we have access to this directory
+     */
+    if( ORTE_SUCCESS != (ret = orte_session_dir_check_dir(fulldirpath) )) {
+        exit_status = ret;
+        goto cleanup;
+    }
+
+    /*
+     * Open up the base directory so we can get a listing
+     */
+    if( NULL == (cur_dirp = opendir(fulldirpath)) ) {
+        exit_status = ORTE_ERROR;
+        goto cleanup;
+    }
+    
+    /*
+     * For each directory/universe
+     */
+    while( NULL != (dir_entry = readdir(cur_dirp))) {
+        orte_universe_list_t *univ;
+        
+        /*
+         * Skip non-universe directories
+         */
+        if( 0 == strncmp(dir_entry-&gt;d_name, ".", strlen(".")) ||
+            0 == strncmp(dir_entry-&gt;d_name, ".", strlen("..")) ) {
+            continue;
+        }
+
+        univ = OBJ_NEW(orte_universe_list_t);
+        
+        univ-&gt;universe.name = strdup(dir_entry-&gt;d_name);
+        univ-&gt;universe.host = strdup(orte_system_info.nodename);
+        univ-&gt;universe.uid  = strdup(orte_system_info.user);
+
+        /*
+         * Read the setup file
+         */
+        asprintf(&amp;univ_setup_filename, "%s/%s/%s", 
+                 fulldirpath,
+                 univ-&gt;universe.name,
+                 "universe-setup.txt");
+
+        if(ORTE_SUCCESS != (ret = orte_read_universe_setup_file(univ_setup_filename, &amp;univ-&gt;universe) ) ){
+            printf("orte_ps: Unable to read the file (%s)\n", univ_setup_filename);
+            exit_status = ret;
+            goto cleanup;
+        }
+
+        opal_list_append(universe_list, &amp;(univ-&gt;super));
+    }
+    
+ cleanup:
+    if( NULL != cur_dirp )
+        closedir(cur_dirp);
+    if( NULL != univ_setup_filename)
+        free(univ_setup_filename);
+    if( NULL != fulldirpath)
+        free(fulldirpath);
+    if( NULL != prefix)
+        free(prefix);
+    if( NULL != frontend)
+        free(frontend);
+
+    return exit_status;
+}
 
 int orte_universe_exists(orte_universe_t *univ)
 {

Modified: tmp/jjhursey-ft-cr/orte/runtime/runtime.h
==============================================================================
--- tmp/jjhursey-ft-cr/orte/runtime/runtime.h	(original)
+++ tmp/jjhursey-ft-cr/orte/runtime/runtime.h	2006-06-12 18:22:02 EDT (Mon, 12 Jun 2006)
@@ -136,6 +136,17 @@
 OMPI_DECLSPEC    int orte_monitor_procs_unregistered(void);
 
     /**
+     * Obtain a listing of all the universes on the machine
+     * 
+     * @param univ_list An opal_list_t is returned to the user.
+     *        This is not initalized in the function, the caller retains
+     *        the responsibility for this variable.
+     * @retval ORTE_SUCCESS Upon successful search.
+     * @retval ORTE_ERROR Upon unsuccessful search.
+     */
+    OMPI_DECLSPEC int orte_universe_search(opal_list_t *universe_list);
+
+    /**
      * Check for universe existence
      *
      * Checks to see if a specified universe exists. If so, attempts

Modified: tmp/jjhursey-ft-cr/orte/tools/orte_ps/orte_ps.c
==============================================================================
--- tmp/jjhursey-ft-cr/orte/tools/orte_ps/orte_ps.c	(original)
+++ tmp/jjhursey-ft-cr/orte/tools/orte_ps/orte_ps.c	2006-06-12 18:22:02 EDT (Mon, 12 Jun 2006)
@@ -168,8 +168,6 @@
 static int orte_ps_init(void);
 static int parse_args(int argc, char *argv[]);
 
-static int get_universe_list(opal_list_t *universe_list);
-
 static int connect_to_universe(orte_universe_t universe_info);
 
 static int gather_information(orte_ps_universe_info_t* universe);
@@ -242,6 +240,7 @@
     int ret, exit_status;
     opal_list_t universe_list;
     opal_list_item_t* item = NULL;
+    opal_list_t universe_search_result;
 
     /***************
      * Initialize
@@ -256,6 +255,7 @@
     }
 
     OBJ_CONSTRUCT(&amp;universe_list, opal_list_t);
+    OBJ_CONSTRUCT(&amp;universe_search_result, opal_list_t);
 
     /*
      * Get the directory listing
@@ -263,7 +263,7 @@
     if( orte_ps_globals.verbose ) {
         printf("orte_ps: Acquiring universe list...\n");
     }
-    if (ORTE_SUCCESS != (ret = get_universe_list(&amp;universe_list) ) ) {
+    if (ORTE_SUCCESS != (ret = orte_universe_search(&amp;universe_search_result) ) ) {
         exit_status = ret;
         goto cleanup;
     }
@@ -271,11 +271,21 @@
     /*
      * For each universe in the listing
      */
-    for(item  = opal_list_get_first(&amp;universe_list);
-        item != opal_list_get_end(&amp;universe_list);
+    for(item  = opal_list_get_first(&amp;universe_search_result);
+        item != opal_list_get_end(&amp;universe_search_result);
         item  = opal_list_get_next(item) ) {
         orte_ps_universe_info_t *univ;
-        univ = (orte_ps_universe_info_t *)item;
+        orte_universe_list_t *search_result;
+
+        /*
+         * Copy over the universe information
+         */
+        search_result = (orte_universe_list_t *) item;
+
+        univ = OBJ_NEW(orte_ps_universe_info_t);
+        univ-&gt;universe_info = search_result-&gt;universe;
+
+        opal_list_append(&amp;universe_list, &amp;(univ-&gt;super));
 
         /*
          * Connect to the universe
@@ -325,6 +335,9 @@
     while (NULL != (item = opal_list_remove_first(&amp;universe_list))) {
         OBJ_RELEASE(item);
     }
+    while (NULL != (item = opal_list_remove_first(&amp;universe_search_result))) {
+        OBJ_RELEASE(item);
+    }
 
     /*
      * Only finalize if we are attached to a specific universe
@@ -447,110 +460,6 @@
     return exit_status;
 }
 
-static int get_universe_list(opal_list_t *universe_list) {
-    int ret, exit_status = ORTE_SUCCESS;
-    DIR *cur_dirp = NULL;
-    struct dirent * dir_entry;
-    char *univ_setup_filename = NULL;
-    char *fulldirpath = NULL;
-    char *prefix = NULL;
-    char *frontend = NULL;
-
-    /*
-     * Get the session directory
-     */
-    if( ORTE_SUCCESS != (ret = orte_session_dir_get_name(&amp;fulldirpath,
-                                                         &amp;prefix,
-                                                         &amp;frontend,
-                                                         orte_system_info.user,
-                                                         orte_system_info.nodename,
-                                                         NULL, /* batch ID -- Not used */
-                                                         strdup("dummy"), /* Universe Name -- appened below */
-                                                         NULL, /* jobid */
-                                                         NULL  /* vpid */
-                                                         ) ) ) {
-        exit_status = ret;
-        goto cleanup;
-    }
-    
-    /* Strip off dummy the universe name */
-    fulldirpath = dirname(fulldirpath);
-    if(orte_ps_globals.verbose) {
-        printf("orte_ps: get_universe_list(): Looking at session directory (%s)\n", fulldirpath);
-    }
-
-    /*
-     * Check to make sure we have access to this directory
-     */
-    if( ORTE_SUCCESS != (ret = orte_session_dir_check_dir(fulldirpath) )) {
-        exit_status = ret;
-        goto cleanup;
-    }
-
-    /*
-     * Open up the base directory so we can get a listing
-     */
-    if( NULL == (cur_dirp = opendir(fulldirpath)) ) {
-        exit_status = ORTE_ERROR;
-        goto cleanup;
-    }
-    
-    /*
-     * For each directory/universe
-     */
-    while( NULL != (dir_entry = readdir(cur_dirp))) {
-        orte_ps_universe_info_t *univ;
-        
-        /*
-         * Skip non-universe directories
-         */
-        if( 0 == strncmp(dir_entry-&gt;d_name, ".", strlen(".")) ||
-            0 == strncmp(dir_entry-&gt;d_name, ".", strlen("..")) ) {
-            continue;
-        }
-
-        univ = OBJ_NEW(orte_ps_universe_info_t);
-        
-        univ-&gt;universe_info.name = strdup(dir_entry-&gt;d_name);
-        univ-&gt;universe_info.host = strdup(orte_system_info.nodename);
-        univ-&gt;universe_info.uid  = strdup(orte_system_info.user);
-
-        if(orte_ps_globals.verbose) {
-            printf("orte_ps: get_universe_list(): Looking at universe (%s)\n", univ-&gt;universe_info.name);
-        }
-        
-        /*
-         * Read the setup file
-         */
-        asprintf(&amp;univ_setup_filename, "%s/%s/%s", 
-                 fulldirpath,
-                 univ-&gt;universe_info.name,
-                 "universe-setup.txt");
-
-        if(ORTE_SUCCESS != (ret = orte_read_universe_setup_file(univ_setup_filename, &amp;univ-&gt;universe_info) ) ){
-            printf("orte_ps: Unable to read the file (%s)\n", univ_setup_filename);
-            exit_status = ret;
-            goto cleanup;
-        }
-
-        opal_list_append(universe_list, &amp;(univ-&gt;super));
-    }
-    
- cleanup:
-    if( NULL != cur_dirp )
-        closedir(cur_dirp);
-    if( NULL != univ_setup_filename)
-        free(univ_setup_filename);
-    if( NULL != fulldirpath)
-        free(fulldirpath);
-    if( NULL != prefix)
-        free(prefix);
-    if( NULL != frontend)
-        free(frontend);
-
-    return exit_status;
-}
-
 static int pretty_print(orte_ps_universe_info_t* universe) {
     opal_list_item_t* job_item = NULL;
     opal_list_item_t* vpid_item = NULL;

Modified: tmp/jjhursey-ft-cr/orte/util/univ_info.c
==============================================================================
--- tmp/jjhursey-ft-cr/orte/util/univ_info.c	(original)
+++ tmp/jjhursey-ft-cr/orte/util/univ_info.c	2006-06-12 18:22:02 EDT (Mon, 12 Jun 2006)
@@ -55,6 +55,21 @@
     /* .scriptfile =          */    NULL,
 };
 
+void orte_universe_list_construct(orte_universe_list_t *obj);
+void orte_universe_list_destruct( orte_universe_list_t *obj);
+
+OBJ_CLASS_INSTANCE(orte_universe_list_t,
+                   opal_list_item_t,
+                   orte_universe_list_construct,
+                   orte_universe_list_destruct);
+
+void orte_universe_list_construct(orte_universe_list_t *obj) {
+    ;
+}
+
+void orte_universe_list_destruct( orte_universe_list_t *obj) {
+    ;
+}
 
 int orte_univ_info(void)
 {

Modified: tmp/jjhursey-ft-cr/orte/util/univ_info.h
==============================================================================
--- tmp/jjhursey-ft-cr/orte/util/univ_info.h	(original)
+++ tmp/jjhursey-ft-cr/orte/util/univ_info.h	2006-06-12 18:22:02 EDT (Mon, 12 Jun 2006)
@@ -33,6 +33,9 @@
 #include &lt;sys/types.h&gt;
 #endif
 
+#include "opal/class/opal_object.h"
+#include "opal/class/opal_list.h"
+
 #ifndef _ORTE_UNIV_INFO_H_
 #define _ORTE_UNIV_INFO_H_
 
@@ -66,6 +69,16 @@
     };
     typedef struct orte_universe_t orte_universe_t;
 
+    struct orte_universe_list_t {
+        /** This is an object, so it must have a super */
+        opal_list_item_t super;
+
+        orte_universe_t universe;
+    };
+    typedef struct orte_universe_list_t orte_universe_list_t;
+    
+    OMPI_DECLSPEC OBJ_CLASS_DECLARATION(orte_universe_list_t);
+
 OMPI_DECLSPEC extern orte_universe_t orte_universe_info;
 
 
_______________________________________________
svn-docs mailing list
<a class="moz-txt-link-abbreviated" href="mailto:svn-docs@open-mpi.org">svn-docs@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-docs">http://www.open-mpi.org/mailman/listinfo.cgi/svn-docs</a>

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0937.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r10331"</a>
<li><strong>Previous message:</strong> <a href="0935.php">Brian Barrett: "Re: [OMPI devel] Question on &quot;get&quot; operation"</a>
<!-- nextthread="start" -->
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
