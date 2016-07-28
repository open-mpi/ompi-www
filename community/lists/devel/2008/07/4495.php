<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19107";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 12:21:10 2008" -->
<!-- isoreceived="20080731162110" -->
<!-- sent="Thu, 31 Jul 2008 12:21:02 -0400" -->
<!-- isosent="20080731162102" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19107" -->
<!-- id="D37EAEDA-38EB-47FC-8E77-FD1518B7EA49_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200807311546.m6VFkANV003370_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19107<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-31 12:21:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4496.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4494.php">Ralph Castain: "[OMPI devel] 1.3 branch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer --
<br>
<p>I took the liberty of adding similar examples to <a href="https://svn.open-mpi.org/trac/ompi/wiki/CompilerAttributes">https://svn.open-mpi.org/trac/ompi/wiki/CompilerAttributes</a> 
<br>
.
<br>
<p><p>On Jul 31, 2008, at 11:46 AM, rusraink_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rusraink
</span><br>
<span class="quotelev1">&gt; Date: 2008-07-31 11:46:09 EDT (Thu, 31 Jul 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 19107
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/19107">https://svn.open-mpi.org/trac/ompi/changeset/19107</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; - Update the warn_unused result from allocating functions
</span><br>
<span class="quotelev1">&gt; - Set __opal_attribute_nonnull__ where an argument *must* not be null
</span><br>
<span class="quotelev1">&gt; - Mark unused functions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/opal/util/argv.h     |     8 ++++----
</span><br>
<span class="quotelev1">&gt;   trunk/opal/util/cmd_line.c |     2 +-
</span><br>
<span class="quotelev1">&gt;   trunk/opal/util/cmd_line.h |    12 ++++++------
</span><br>
<span class="quotelev1">&gt;   3 files changed, 11 insertions(+), 11 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/util/argv.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/util/argv.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/util/argv.h	2008-07-31 11:46:09 EDT (Thu, 31 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -5,7 +5,7 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The University of Tennessee and The  
</span><br>
<span class="quotelev1">&gt; University
</span><br>
<span class="quotelev1">&gt;  *                         of Tennessee Research Foundation.  All  
</span><br>
<span class="quotelev1">&gt; rights
</span><br>
<span class="quotelev1">&gt;  *                         reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2004-2005 High Performance Computing Center  
</span><br>
<span class="quotelev1">&gt; Stuttgart,
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2008 High Performance Computing Center  
</span><br>
<span class="quotelev1">&gt; Stuttgart,
</span><br>
<span class="quotelev1">&gt;  *                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; @@ -162,9 +162,9 @@
</span><br>
<span class="quotelev1">&gt;    *
</span><br>
<span class="quotelev1">&gt;    * It is the callers responsibility to free the returned string.
</span><br>
<span class="quotelev1">&gt;    */
</span><br>
<span class="quotelev1">&gt; -OPAL_DECLSPEC  char *opal_argv_join(char **argv, int delimiter)  
</span><br>
<span class="quotelev1">&gt; __opal_attribute_malloc__;
</span><br>
<span class="quotelev1">&gt; +OPAL_DECLSPEC  char *opal_argv_join(char **argv, int delimiter)  
</span><br>
<span class="quotelev1">&gt; __opal_attribute_malloc__ __opal_attribute_warn_unused_result__;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -OPAL_DECLSPEC char *opal_argv_join_range(char **argv, size_t start,  
</span><br>
<span class="quotelev1">&gt; size_t end, int delimiter) __opal_attribute_malloc__;
</span><br>
<span class="quotelev1">&gt; +OPAL_DECLSPEC char *opal_argv_join_range(char **argv, size_t start,  
</span><br>
<span class="quotelev1">&gt; size_t end, int delimiter) __opal_attribute_malloc__  
</span><br>
<span class="quotelev1">&gt; __opal_attribute_warn_unused_result__;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /**
</span><br>
<span class="quotelev1">&gt;    * Return the number of bytes consumed by an argv array.
</span><br>
<span class="quotelev1">&gt; @@ -189,7 +189,7 @@
</span><br>
<span class="quotelev1">&gt;    * Specifically, the output argv will be an array of the same length
</span><br>
<span class="quotelev1">&gt;    * as the input argv, and strcmp(argv_in[i], argv_out[i]) will be 0.
</span><br>
<span class="quotelev1">&gt;    */
</span><br>
<span class="quotelev1">&gt; -OPAL_DECLSPEC  char **opal_argv_copy(char **argv)  
</span><br>
<span class="quotelev1">&gt; __opal_attribute_malloc__;
</span><br>
<span class="quotelev1">&gt; +OPAL_DECLSPEC  char **opal_argv_copy(char **argv)  
</span><br>
<span class="quotelev1">&gt; __opal_attribute_malloc__ __opal_attribute_warn_unused_result__;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /**
</span><br>
<span class="quotelev1">&gt;      * Delete one or more tokens from the middle of an argv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/util/cmd_line.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/util/cmd_line.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/util/cmd_line.c	2008-07-31 11:46:09 EDT (Thu, 31 Jul  
</span><br>
<span class="quotelev1">&gt; 2008)
</span><br>
<span class="quotelev1">&gt; @@ -130,7 +130,7 @@
</span><br>
<span class="quotelev1">&gt;                         int *output_argc, char ***output_argv,
</span><br>
<span class="quotelev1">&gt;                         int *num_args_used, bool ignore_unknown);
</span><br>
<span class="quotelev1">&gt; static cmd_line_option_t *find_option(opal_cmd_line_t *cmd,
</span><br>
<span class="quotelev1">&gt; -                                      const char *option_name);
</span><br>
<span class="quotelev1">&gt; +                                      const char *option_name)  
</span><br>
<span class="quotelev1">&gt; __opal_attribute_nonnull__(1) __opal_attribute_nonnull__(2);
</span><br>
<span class="quotelev1">&gt; static void set_dest(cmd_line_option_t *option, char *sval);
</span><br>
<span class="quotelev1">&gt; static void fill(const cmd_line_option_t *a, char result[3][BUFSIZ]);
</span><br>
<span class="quotelev1">&gt; static int qsort_callback(const void *a, const void *b);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/util/cmd_line.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/util/cmd_line.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/util/cmd_line.h	2008-07-31 11:46:09 EDT (Thu, 31 Jul  
</span><br>
<span class="quotelev1">&gt; 2008)
</span><br>
<span class="quotelev1">&gt; @@ -5,7 +5,7 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The University of Tennessee and The  
</span><br>
<span class="quotelev1">&gt; University
</span><br>
<span class="quotelev1">&gt;  *                         of Tennessee Research Foundation.  All  
</span><br>
<span class="quotelev1">&gt; rights
</span><br>
<span class="quotelev1">&gt;  *                         reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2004-2007 High Performance Computing Center  
</span><br>
<span class="quotelev1">&gt; Stuttgart,
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 High Performance Computing Center  
</span><br>
<span class="quotelev1">&gt; Stuttgart,
</span><br>
<span class="quotelev1">&gt;  *                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; @@ -416,7 +416,7 @@
</span><br>
<span class="quotelev1">&gt;      *
</span><br>
<span class="quotelev1">&gt;      * The returned string must be freed by the caller.
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; -    OPAL_DECLSPEC char *opal_cmd_line_get_usage_msg(opal_cmd_line_t  
</span><br>
<span class="quotelev1">&gt; *cmd);
</span><br>
<span class="quotelev1">&gt; +    OPAL_DECLSPEC char *opal_cmd_line_get_usage_msg(opal_cmd_line_t  
</span><br>
<span class="quotelev1">&gt; *cmd) __opal_attribute_malloc__ __opal_attribute_warn_unused_result__;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /**
</span><br>
<span class="quotelev1">&gt;      * Test if a given option was taken on the parsed command line.
</span><br>
<span class="quotelev1">&gt; @@ -438,7 +438,7 @@
</span><br>
<span class="quotelev1">&gt;      * Otherwise, it will return false.
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     OPAL_DECLSPEC bool opal_cmd_line_is_taken(opal_cmd_line_t *cmd,
</span><br>
<span class="quotelev1">&gt; -                                              const char *opt);
</span><br>
<span class="quotelev1">&gt; +                                              const char *opt)  
</span><br>
<span class="quotelev1">&gt; __opal_attribute_nonnull__(1) __opal_attribute_nonnull__(2);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /**
</span><br>
<span class="quotelev1">&gt;      * Return the number of arguments parsed on a OPAL command line  
</span><br>
<span class="quotelev1">&gt; handle.
</span><br>
<span class="quotelev1">&gt; @@ -451,7 +451,7 @@
</span><br>
<span class="quotelev1">&gt;      * Arguments are added to the handle via the opal_cmd_line_parse()
</span><br>
<span class="quotelev1">&gt;      * function.
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; -    OPAL_DECLSPEC int opal_cmd_line_get_argc(opal_cmd_line_t *cmd);
</span><br>
<span class="quotelev1">&gt; +    OPAL_DECLSPEC int opal_cmd_line_get_argc(opal_cmd_line_t *cmd)  
</span><br>
<span class="quotelev1">&gt; __opal_attribute_unused__;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /**
</span><br>
<span class="quotelev1">&gt;      * Return a string argument parsed on a OPAL command line handle.
</span><br>
<span class="quotelev1">&gt; @@ -494,7 +494,7 @@
</span><br>
<span class="quotelev1">&gt;      * handle, or opal_cmd_line_parse() was not invoked on this  
</span><br>
<span class="quotelev1">&gt; handle.
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     OPAL_DECLSPEC int opal_cmd_line_get_ninsts(opal_cmd_line_t *cmd,
</span><br>
<span class="quotelev1">&gt; -                                               const char *opt);
</span><br>
<span class="quotelev1">&gt; +                                               const char *opt)  
</span><br>
<span class="quotelev1">&gt; __opal_attribute_nonnull__(1) __opal_attribute_nonnull__(2);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /**
</span><br>
<span class="quotelev1">&gt;      * Return a specific parameter for a specific instance of a option
</span><br>
<span class="quotelev1">&gt; @@ -556,7 +556,7 @@
</span><br>
<span class="quotelev1">&gt;      * to opal_argv_free()) by the caller.
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     OPAL_DECLSPEC int opal_cmd_line_get_tail(opal_cmd_line_t *cmd,  
</span><br>
<span class="quotelev1">&gt; int *tailc,
</span><br>
<span class="quotelev1">&gt; -                                             char ***tailv);
</span><br>
<span class="quotelev1">&gt; +                                             char ***tailv)  
</span><br>
<span class="quotelev1">&gt; __opal_attribute_nonnull__(1) __opal_attribute_nonnull__(2);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4496.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4494.php">Ralph Castain: "[OMPI devel] 1.3 branch"</a>
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
