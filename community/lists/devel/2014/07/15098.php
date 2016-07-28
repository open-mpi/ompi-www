<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32166 - in trunk: ompi/mca/coll/fca	ompi/mca/coll/hcoll ompi/mca/mtl/mxm ompi/tools/ompi_info	opal/mca/base opal/runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 10:59:12 2014" -->
<!-- isoreceived="20140710145912" -->
<!-- sent="Thu, 10 Jul 2014 14:59:10 +0000" -->
<!-- isosent="20140710145910" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32166 - in trunk: ompi/mca/coll/fca	ompi/mca/coll/hcoll ompi/mca/mtl/mxm ompi/tools/ompi_info	opal/mca/base opal/runtime" -->
<!-- id="784A6D25-41BE-47BF-A162-A569CF112BAC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140709013724.1AE50160AFF_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32166 - in trunk: ompi/mca/coll/fca	ompi/mca/coll/hcoll ompi/mca/mtl/mxm ompi/tools/ompi_info	opal/mca/base opal/runtime<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-10 10:59:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15099.php">Nathan Hjelm: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Previous message:</strong> <a href="15097.php">Mike Dubman: "[OMPI devel] openmpi.spec"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Two quibbles with this commit:
<br>
<p>1. Can the help strings for the various components be updated to use proper grammar and capitalization?  For example:
<br>
<p>Version of the libfca library ompi compiled with
<br>
<p>change to:
<br>
<p>Version of the libfca library with which Open MPI was compiled
<br>
<p>2. I'm not a fan of --type automatically changing the level to 9.  --type should be orthogonal to level; --type should just set a filter to only show variables of a certain type -- nothing else.
<br>
<p><p><p>On Jul 8, 2014, at 9:37 PM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jladd (Joshua Ladd)
</span><br>
<span class="quotelev1">&gt; Date: 2014-07-08 21:37:23 EDT (Tue, 08 Jul 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 32166
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32166">https://svn.open-mpi.org/trac/ompi/changeset/32166</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Opal: Add a new MCA variable type &quot;version_string&quot;. Also add a 
</span><br>
<span class="quotelev1">&gt; new flag to ompi_info that allows a user to print all MCA variables of a specific type.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --type version_string
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This command will print all MCA variables of type version_string.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This feature was developed by Elena Shipunova and was reviewed by Josh Ladd.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/coll/fca/coll_fca_component.c     |     4 +-                                      
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/coll/hcoll/coll_hcoll_component.c |     4 +-                                      
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c       |     4 +-                                      
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/tools/ompi_info/ompi_info.1in         |    12 ++++++++                                
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/tools/ompi_info/ompi_info.c           |     4 ++                                      
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/base/mca_base_var.c               |    22 +++++++++-----                          
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/base/mca_base_var.h               |     3 ++                                      
</span><br>
<span class="quotelev1">&gt;   trunk/opal/runtime/opal_info_support.c           |    59 ++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;   trunk/opal/runtime/opal_info_support.h           |     2 +                                       
</span><br>
<span class="quotelev1">&gt;   9 files changed, 100 insertions(+), 14 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/coll/fca/coll_fca_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/coll/fca/coll_fca_component.c	Tue Jul  8 21:24:53 2014	(r32165)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/coll/fca/coll_fca_component.c	2014-07-08 21:37:23 EDT (Tue, 08 Jul 2014)	(r32166)
</span><br>
<span class="quotelev1">&gt; @@ -1411,7 +1411,7 @@
</span><br>
<span class="quotelev1">&gt;     (void) mca_base_component_var_register(c,
</span><br>
<span class="quotelev1">&gt;             MCA_COMPILETIME_VER,
</span><br>
<span class="quotelev1">&gt;             &quot;Version of the libfca library ompi compiled with&quot;,
</span><br>
<span class="quotelev1">&gt; -            MCA_BASE_VAR_TYPE_STRING,
</span><br>
<span class="quotelev1">&gt; +            MCA_BASE_VAR_TYPE_VERSION_STRING,
</span><br>
<span class="quotelev1">&gt;             NULL, 0, 0,
</span><br>
<span class="quotelev1">&gt;             OPAL_INFO_LVL_3,
</span><br>
<span class="quotelev1">&gt;             MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt; @@ -1420,7 +1420,7 @@
</span><br>
<span class="quotelev1">&gt;     (void) mca_base_component_var_register(c,
</span><br>
<span class="quotelev1">&gt;             MCA_RUNTIME_VER,
</span><br>
<span class="quotelev1">&gt;             &quot;Version of the libfca library ompi run with&quot;,
</span><br>
<span class="quotelev1">&gt; -            MCA_BASE_VAR_TYPE_STRING,
</span><br>
<span class="quotelev1">&gt; +            MCA_BASE_VAR_TYPE_VERSION_STRING,
</span><br>
<span class="quotelev1">&gt;             NULL, 0, 0,
</span><br>
<span class="quotelev1">&gt;             OPAL_INFO_LVL_3,
</span><br>
<span class="quotelev1">&gt;             MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/coll/hcoll/coll_hcoll_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/coll/hcoll/coll_hcoll_component.c	Tue Jul  8 21:24:53 2014	(r32165)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/coll/hcoll/coll_hcoll_component.c	2014-07-08 21:37:23 EDT (Tue, 08 Jul 2014)	(r32166)
</span><br>
<span class="quotelev1">&gt; @@ -211,7 +211,7 @@
</span><br>
<span class="quotelev1">&gt;     mca_base_component_var_register(&amp;mca_coll_hcoll_component.super.collm_version,
</span><br>
<span class="quotelev1">&gt;             MCA_COMPILETIME_VER,
</span><br>
<span class="quotelev1">&gt;             &quot;Version of the libhcoll library ompi compiled with&quot;,
</span><br>
<span class="quotelev1">&gt; -            MCA_BASE_VAR_TYPE_STRING,
</span><br>
<span class="quotelev1">&gt; +            MCA_BASE_VAR_TYPE_VERSION_STRING,
</span><br>
<span class="quotelev1">&gt;             NULL, 0, 0,
</span><br>
<span class="quotelev1">&gt;             OPAL_INFO_LVL_3,
</span><br>
<span class="quotelev1">&gt;             MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt; @@ -220,7 +220,7 @@
</span><br>
<span class="quotelev1">&gt;     mca_base_component_var_register(&amp;mca_coll_hcoll_component.super.collm_version,
</span><br>
<span class="quotelev1">&gt;             MCA_RUNTIME_VER,
</span><br>
<span class="quotelev1">&gt;             &quot;Version of the libhcoll library ompi run with&quot;,
</span><br>
<span class="quotelev1">&gt; -            MCA_BASE_VAR_TYPE_STRING,
</span><br>
<span class="quotelev1">&gt; +            MCA_BASE_VAR_TYPE_VERSION_STRING,
</span><br>
<span class="quotelev1">&gt;             NULL, 0, 0,
</span><br>
<span class="quotelev1">&gt;             OPAL_INFO_LVL_3,
</span><br>
<span class="quotelev1">&gt;             MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c	Tue Jul  8 21:24:53 2014	(r32165)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c	2014-07-08 21:37:23 EDT (Tue, 08 Jul 2014)	(r32166)
</span><br>
<span class="quotelev1">&gt; @@ -96,7 +96,7 @@
</span><br>
<span class="quotelev1">&gt;     (void) mca_base_component_var_register(c,
</span><br>
<span class="quotelev1">&gt;             MCA_COMPILETIME_VER,
</span><br>
<span class="quotelev1">&gt;             &quot;Version of the libmxm library ompi compiled with&quot;,
</span><br>
<span class="quotelev1">&gt; -            MCA_BASE_VAR_TYPE_STRING,
</span><br>
<span class="quotelev1">&gt; +            MCA_BASE_VAR_TYPE_VERSION_STRING,
</span><br>
<span class="quotelev1">&gt;             NULL, 0, 0,
</span><br>
<span class="quotelev1">&gt;             OPAL_INFO_LVL_3,
</span><br>
<span class="quotelev1">&gt;             MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt; @@ -115,7 +115,7 @@
</span><br>
<span class="quotelev1">&gt;     (void) mca_base_component_var_register(c,
</span><br>
<span class="quotelev1">&gt;             MCA_RUNTIME_VER,
</span><br>
<span class="quotelev1">&gt;             &quot;Version of the libmxm library ompi run with&quot;,
</span><br>
<span class="quotelev1">&gt; -            MCA_BASE_VAR_TYPE_STRING,
</span><br>
<span class="quotelev1">&gt; +            MCA_BASE_VAR_TYPE_VERSION_STRING,
</span><br>
<span class="quotelev1">&gt;             NULL, 0, 0,
</span><br>
<span class="quotelev1">&gt;             OPAL_INFO_LVL_3,
</span><br>
<span class="quotelev1">&gt;             MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/tools/ompi_info/ompi_info.1in
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/tools/ompi_info/ompi_info.1in	Tue Jul  8 21:24:53 2014	(r32165)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/tools/ompi_info/ompi_info.1in	2014-07-08 21:37:23 EDT (Tue, 08 Jul 2014)	(r32166)
</span><br>
<span class="quotelev1">&gt; @@ -83,6 +83,12 @@
</span><br>
<span class="quotelev1">&gt; to display; the second parameter is the specific component to display
</span><br>
<span class="quotelev1">&gt; (or the keyword &quot;all&quot;, meaning &quot;display all components of this type&quot;).
</span><br>
<span class="quotelev1">&gt; .TP 8
</span><br>
<span class="quotelev1">&gt; +.I \-t|\-\-type
</span><br>
<span class="quotelev1">&gt; +Show MCA parameters of the type specified in the parameter. Accepts the
</span><br>
<span class="quotelev1">&gt; +following parameters: unsigned_int, unsigned_long, unsigned_long_long,
</span><br>
<span class="quotelev1">&gt; +size_t, string, version_string, bool, double. By default level
</span><br>
<span class="quotelev1">&gt; +is 9 unless it is specified with \-\-level.
</span><br>
<span class="quotelev1">&gt; +.TP 8
</span><br>
<span class="quotelev1">&gt; .I \-\-parsable
</span><br>
<span class="quotelev1">&gt; When used in conjunction with other parameters, the output is
</span><br>
<span class="quotelev1">&gt; displayed in a machine-parsable format
</span><br>
<span class="quotelev1">&gt; @@ -243,6 +249,12 @@
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .TP
</span><br>
<span class="quotelev1">&gt; +ompi_info --type string --pretty-print --level 3
</span><br>
<span class="quotelev1">&gt; +Show the level 3 MCA parameters of string type in a human-readable /
</span><br>
<span class="quotelev1">&gt; +prettyprint format.
</span><br>
<span class="quotelev1">&gt; +.
</span><br>
<span class="quotelev1">&gt; +.
</span><br>
<span class="quotelev1">&gt; +.TP
</span><br>
<span class="quotelev1">&gt; ompi_info --path bindir
</span><br>
<span class="quotelev1">&gt; Show the &quot;bindir&quot; that Open MPI was configured with.
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/tools/ompi_info/ompi_info.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/tools/ompi_info/ompi_info.c	Tue Jul  8 21:24:53 2014	(r32165)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/tools/ompi_info/ompi_info.c	2014-07-08 21:37:23 EDT (Tue, 08 Jul 2014)	(r32166)
</span><br>
<span class="quotelev1">&gt; @@ -158,6 +158,10 @@
</span><br>
<span class="quotelev1">&gt;                             &amp;mca_types, ompi_info_cmd_line);
</span><br>
<span class="quotelev1">&gt;         acted = true;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    if (opal_cmd_line_is_taken(ompi_info_cmd_line, &quot;type&quot;)) {
</span><br>
<span class="quotelev1">&gt; +        opal_info_do_type(ompi_info_cmd_line);
</span><br>
<span class="quotelev1">&gt; +        acted = true;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* If no command line args are specified, show default set */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/base/mca_base_var.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/base/mca_base_var.c	Tue Jul  8 21:24:53 2014	(r32165)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/base/mca_base_var.c	2014-07-08 21:37:23 EDT (Tue, 08 Jul 2014)	(r32166)
</span><br>
<span class="quotelev1">&gt; @@ -73,11 +73,12 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; const char *var_type_names[] = {
</span><br>
<span class="quotelev1">&gt;     &quot;int&quot;,
</span><br>
<span class="quotelev1">&gt; -    &quot;unsigned&quot;,
</span><br>
<span class="quotelev1">&gt; -    &quot;unsigned long&quot;,
</span><br>
<span class="quotelev1">&gt; -    &quot;unsigned long long&quot;,
</span><br>
<span class="quotelev1">&gt; +    &quot;unsigned_int&quot;,
</span><br>
<span class="quotelev1">&gt; +    &quot;unsigned_long&quot;,
</span><br>
<span class="quotelev1">&gt; +    &quot;unsigned_long_long&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;size_t&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;string&quot;,
</span><br>
<span class="quotelev1">&gt; +    &quot;version_string&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;bool&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;double&quot;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; @@ -89,6 +90,7 @@
</span><br>
<span class="quotelev1">&gt;     sizeof (unsigned long long),
</span><br>
<span class="quotelev1">&gt;     sizeof (size_t),
</span><br>
<span class="quotelev1">&gt;     sizeof (char),
</span><br>
<span class="quotelev1">&gt; +    sizeof (char),
</span><br>
<span class="quotelev1">&gt;     sizeof (bool),
</span><br>
<span class="quotelev1">&gt;     sizeof (double)
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; @@ -653,6 +655,7 @@
</span><br>
<span class="quotelev1">&gt;         dst-&gt;lfval = strtod (src, NULL);
</span><br>
<span class="quotelev1">&gt;         break;
</span><br>
<span class="quotelev1">&gt;     case MCA_BASE_VAR_TYPE_STRING:
</span><br>
<span class="quotelev1">&gt; +    case MCA_BASE_VAR_TYPE_VERSION_STRING:
</span><br>
<span class="quotelev1">&gt;         var_set_string (var, src);
</span><br>
<span class="quotelev1">&gt;         break;
</span><br>
<span class="quotelev1">&gt;     case MCA_BASE_VAR_TYPE_MAX:
</span><br>
<span class="quotelev1">&gt; @@ -693,7 +696,7 @@
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    if (MCA_BASE_VAR_TYPE_STRING != var-&gt;mbv_type) {
</span><br>
<span class="quotelev1">&gt; +    if (MCA_BASE_VAR_TYPE_STRING != var-&gt;mbv_type &amp;&amp; MCA_BASE_VAR_TYPE_VERSION_STRING != var-&gt;mbv_type) {
</span><br>
<span class="quotelev1">&gt;         memmove (var-&gt;mbv_storage, value, var_type_sizes[var-&gt;mbv_type]);
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;         var_set_string (var, (char *) value);
</span><br>
<span class="quotelev1">&gt; @@ -735,7 +738,7 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Release the current value if it is a string. */
</span><br>
<span class="quotelev1">&gt; -    if (MCA_BASE_VAR_TYPE_STRING == var-&gt;mbv_type &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +    if ((MCA_BASE_VAR_TYPE_STRING == var-&gt;mbv_type || MCA_BASE_VAR_TYPE_VERSION_STRING == var-&gt;mbv_type) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;         var-&gt;mbv_storage-&gt;stringval) {
</span><br>
<span class="quotelev1">&gt;         free (var-&gt;mbv_storage-&gt;stringval);
</span><br>
<span class="quotelev1">&gt;         var-&gt;mbv_storage-&gt;stringval = NULL;
</span><br>
<span class="quotelev1">&gt; @@ -935,7 +938,7 @@
</span><br>
<span class="quotelev1">&gt;             continue;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -        if (MCA_BASE_VAR_TYPE_STRING == var-&gt;mbv_type &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        if ((MCA_BASE_VAR_TYPE_STRING == var-&gt;mbv_type || MCA_BASE_VAR_TYPE_VERSION_STRING == var-&gt;mbv_type) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;             NULL == var-&gt;mbv_storage-&gt;stringval) {
</span><br>
<span class="quotelev1">&gt;             continue;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; @@ -1327,7 +1330,7 @@
</span><br>
<span class="quotelev1">&gt;         var-&gt;mbv_storage = storage;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* make a copy of the default string value */
</span><br>
<span class="quotelev1">&gt; -        if (MCA_BASE_VAR_TYPE_STRING == type &amp;&amp; NULL != ((char **)storage)[0]) {
</span><br>
<span class="quotelev1">&gt; +        if ((MCA_BASE_VAR_TYPE_STRING == type || MCA_BASE_VAR_TYPE_VERSION_STRING == type) &amp;&amp; NULL != ((char **)storage)[0]) {
</span><br>
<span class="quotelev1">&gt;             ((char **)storage)[0] = strdup (((char **)storage)[0]);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; @@ -1655,7 +1658,8 @@
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; static void var_destructor(mca_base_var_t *var)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    if (MCA_BASE_VAR_TYPE_STRING == var-&gt;mbv_type &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +    if ((MCA_BASE_VAR_TYPE_STRING == var-&gt;mbv_type ||
</span><br>
<span class="quotelev1">&gt; +                MCA_BASE_VAR_TYPE_VERSION_STRING == var-&gt;mbv_type) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;         NULL != var-&gt;mbv_storage &amp;&amp;
</span><br>
<span class="quotelev1">&gt;         NULL != var-&gt;mbv_storage-&gt;stringval) {
</span><br>
<span class="quotelev1">&gt;         free (var-&gt;mbv_storage-&gt;stringval);
</span><br>
<span class="quotelev1">&gt; @@ -1759,6 +1763,7 @@
</span><br>
<span class="quotelev1">&gt;             ret = asprintf (value_string, &quot;%&quot; PRIsize_t, value-&gt;sizetval);
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt;         case MCA_BASE_VAR_TYPE_STRING:
</span><br>
<span class="quotelev1">&gt; +        case MCA_BASE_VAR_TYPE_VERSION_STRING:
</span><br>
<span class="quotelev1">&gt;             ret = asprintf (value_string, &quot;%s&quot;, 
</span><br>
<span class="quotelev1">&gt;                             value-&gt;stringval ? value-&gt;stringval : &quot;&quot;);
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt; @@ -2054,3 +2059,4 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/base/mca_base_var.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/base/mca_base_var.h	Tue Jul  8 21:24:53 2014	(r32165)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/base/mca_base_var.h	2014-07-08 21:37:23 EDT (Tue, 08 Jul 2014)	(r32166)
</span><br>
<span class="quotelev1">&gt; @@ -84,6 +84,8 @@
</span><br>
<span class="quotelev1">&gt;     MCA_BASE_VAR_TYPE_SIZE_T,
</span><br>
<span class="quotelev1">&gt;     /** The variable is of type string. */
</span><br>
<span class="quotelev1">&gt;     MCA_BASE_VAR_TYPE_STRING,
</span><br>
<span class="quotelev1">&gt; +    /** The variable is of type string and contains version. */
</span><br>
<span class="quotelev1">&gt; +    MCA_BASE_VAR_TYPE_VERSION_STRING,
</span><br>
<span class="quotelev1">&gt;     /** The variable is of type bool */
</span><br>
<span class="quotelev1">&gt;     MCA_BASE_VAR_TYPE_BOOL,
</span><br>
<span class="quotelev1">&gt;     /** The variable is of type double */
</span><br>
<span class="quotelev1">&gt; @@ -92,6 +94,7 @@
</span><br>
<span class="quotelev1">&gt;     MCA_BASE_VAR_TYPE_MAX
</span><br>
<span class="quotelev1">&gt; } mca_base_var_type_t;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +extern const char *var_type_names[];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;  * Source of an MCA variable's value
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/runtime/opal_info_support.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/runtime/opal_info_support.c	Tue Jul  8 21:24:53 2014	(r32165)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/runtime/opal_info_support.c	2014-07-08 21:37:23 EDT (Tue, 08 Jul 2014)	(r32166)
</span><br>
<span class="quotelev1">&gt; @@ -138,6 +138,8 @@
</span><br>
<span class="quotelev1">&gt;                             &quot;Show architecture Open MPI was compiled on&quot;);
</span><br>
<span class="quotelev1">&gt;     opal_cmd_line_make_opt3(opal_info_cmd_line, 'c', NULL, &quot;config&quot;, 0, 
</span><br>
<span class="quotelev1">&gt;                             &quot;Show configuration options&quot;);
</span><br>
<span class="quotelev1">&gt; +    opal_cmd_line_make_opt3(opal_info_cmd_line, 't', NULL, &quot;type&quot;, 1,
</span><br>
<span class="quotelev1">&gt; +                            &quot;Show internal MCA parameters with the type specified in parameter.&quot;);
</span><br>
<span class="quotelev1">&gt;     opal_cmd_line_make_opt3(opal_info_cmd_line, 'h', NULL, &quot;help&quot;, 0, 
</span><br>
<span class="quotelev1">&gt;                             &quot;Show this help message&quot;);
</span><br>
<span class="quotelev1">&gt;     opal_cmd_line_make_opt3(opal_info_cmd_line, '\0', NULL, &quot;pretty-print&quot;, 0, 
</span><br>
<span class="quotelev1">&gt; @@ -532,6 +534,63 @@
</span><br>
<span class="quotelev1">&gt;     return;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +void opal_info_do_type(opal_cmd_line_t *opal_info_cmd_line)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    mca_base_var_info_lvl_t max_level = OPAL_INFO_LVL_9;
</span><br>
<span class="quotelev1">&gt; +    int count;
</span><br>
<span class="quotelev1">&gt; +    char *type, *component, *str;
</span><br>
<span class="quotelev1">&gt; +    bool found;
</span><br>
<span class="quotelev1">&gt; +    int i, j, k, len, ret;
</span><br>
<span class="quotelev1">&gt; +    char *p;
</span><br>
<span class="quotelev1">&gt; +    const mca_base_var_t *var;
</span><br>
<span class="quotelev1">&gt; +    char** strings, *message;
</span><br>
<span class="quotelev1">&gt; +    const mca_base_var_group_t *group;
</span><br>
<span class="quotelev1">&gt; +    p = &quot;type&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (NULL != (str = opal_cmd_line_get_param (opal_info_cmd_line, &quot;level&quot;, 0, 0))) {
</span><br>
<span class="quotelev1">&gt; +        char *tmp;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        errno = 0;
</span><br>
<span class="quotelev1">&gt; +        max_level = strtol (str, &amp;tmp, 10) + OPAL_INFO_LVL_1 - 1;
</span><br>
<span class="quotelev1">&gt; +        if (0 != errno || '\0' != tmp[0] || max_level &lt; OPAL_INFO_LVL_1 || max_level &gt; OPAL_INFO_LVL_9) {
</span><br>
<span class="quotelev1">&gt; +            char *usage = opal_cmd_line_get_usage_msg(opal_info_cmd_line);
</span><br>
<span class="quotelev1">&gt; +            opal_show_help(&quot;help-opal_info.txt&quot;, &quot;invalid-level&quot;, true, str);
</span><br>
<span class="quotelev1">&gt; +            free(usage);
</span><br>
<span class="quotelev1">&gt; +            exit(1);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    count = opal_cmd_line_get_ninsts(opal_info_cmd_line, p);
</span><br>
<span class="quotelev1">&gt; +    len = mca_base_var_get_count ();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    for (k = 0; k &lt; count; ++k) {
</span><br>
<span class="quotelev1">&gt; +        type = opal_cmd_line_get_param(opal_info_cmd_line, p, k, 0);
</span><br>
<span class="quotelev1">&gt; +        for (i = 0; i &lt; len; ++i) {
</span><br>
<span class="quotelev1">&gt; +            ret = mca_base_var_get (i, &amp;var);
</span><br>
<span class="quotelev1">&gt; +            if (OPAL_SUCCESS != ret) {
</span><br>
<span class="quotelev1">&gt; +                continue;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            if (0 == strcmp(type, var_type_names[var-&gt;mbv_type]) &amp;&amp; (var-&gt;mbv_info_lvl &lt;= max_level)) {
</span><br>
<span class="quotelev1">&gt; +                ret = mca_base_var_dump(var-&gt;mbv_index, &amp;strings, !opal_info_pretty ? MCA_BASE_VAR_DUMP_PARSABLE : MCA_BASE_VAR_DUMP_READABLE);
</span><br>
<span class="quotelev1">&gt; +                if (OPAL_SUCCESS != ret) {
</span><br>
<span class="quotelev1">&gt; +                    continue;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +                (void) mca_base_var_group_get(var-&gt;mbv_group_index, &amp;group);
</span><br>
<span class="quotelev1">&gt; +                for (j = 0 ; strings[j] ; ++j) {
</span><br>
<span class="quotelev1">&gt; +                    if (0 == j &amp;&amp; opal_info_pretty) {
</span><br>
<span class="quotelev1">&gt; +                        asprintf (&amp;message, &quot;MCA %s&quot;, group-&gt;group_framework);
</span><br>
<span class="quotelev1">&gt; +                        opal_info_out(message, message, strings[j]);
</span><br>
<span class="quotelev1">&gt; +                        free(message);
</span><br>
<span class="quotelev1">&gt; +                    } else {
</span><br>
<span class="quotelev1">&gt; +                        opal_info_out(&quot;&quot;, &quot;&quot;, strings[j]);
</span><br>
<span class="quotelev1">&gt; +                    }
</span><br>
<span class="quotelev1">&gt; +                    free(strings[j]);
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +                free(strings);
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void opal_info_show_mca_group_params(const mca_base_var_group_t *group, mca_base_var_info_lvl_t max_level, bool want_internal)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/runtime/opal_info_support.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/runtime/opal_info_support.h	Tue Jul  8 21:24:53 2014	(r32165)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/runtime/opal_info_support.h	2014-07-08 21:37:23 EDT (Tue, 08 Jul 2014)	(r32166)
</span><br>
<span class="quotelev1">&gt; @@ -98,6 +98,8 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OPAL_DECLSPEC void opal_info_do_hostname(void);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +OPAL_DECLSPEC void opal_info_do_type(opal_cmd_line_t *opal_info_cmd_line);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; OPAL_DECLSPEC void opal_info_out(const char *pretty_message, const char *plain_message, const char *value);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OPAL_DECLSPEC void opal_info_out_int(const char *pretty_message, 
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15099.php">Nathan Hjelm: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Previous message:</strong> <a href="15097.php">Mike Dubman: "[OMPI devel] openmpi.spec"</a>
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
