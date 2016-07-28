<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 21:47:02 2009" -->
<!-- isoreceived="20090429014702" -->
<!-- sent="Tue, 28 Apr 2009 19:46:48 -0600" -->
<!-- isosent="20090429014648" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097" -->
<!-- id="E8F92CDD-66B1-4F67-9144-3A1B43A5F427_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200904290144.n3T1ihQJ021249_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 21:46:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5889.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<li><strong>Previous message:</strong> <a href="5887.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Branching for 1.5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5889.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<li><strong>Reply:</strong> <a href="5889.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<li><strong>Reply:</strong> <a href="5891.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ummm...no, that definitely is wrong, Rainer. Please back this out - it  
<br>
doubly allocates memory for those variables. Like the comment says,  
<br>
they are instantiated in orte_init.c.
<br>
<p><p><p>On Apr 28, 2009, at 7:44 PM, rusraink_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rusraink
</span><br>
<span class="quotelev1">&gt; Date: 2009-04-28 21:44:43 EDT (Tue, 28 Apr 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21097
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21097">https://svn.open-mpi.org/trac/ompi/changeset/21097</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; - So, this ain't right, but somewhere the orte-tools
</span><br>
<span class="quotelev1">&gt;   do not detect the orte_name_wildcard and orte_name_invalid.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/runtime/orte_globals.h |     4 ++--
</span><br>
<span class="quotelev1">&gt;   1 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/runtime/orte_globals.h
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
<span class="quotelev1">&gt; --- trunk/orte/runtime/orte_globals.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/runtime/orte_globals.h	2009-04-28 21:44:43 EDT (Tue,  
</span><br>
<span class="quotelev1">&gt; 28 Apr 2009)
</span><br>
<span class="quotelev1">&gt; @@ -53,9 +53,9 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Shortcut for some commonly used names */
</span><br>
<span class="quotelev1">&gt; #define ORTE_NAME_WILDCARD      (&amp;orte_name_wildcard)
</span><br>
<span class="quotelev1">&gt; -ORTE_DECLSPEC extern orte_process_name_t orte_name_wildcard;  /**  
</span><br>
<span class="quotelev1">&gt; instantiated in orte/runtime/orte_init.c */
</span><br>
<span class="quotelev1">&gt; +ORTE_DECLSPEC orte_process_name_t orte_name_wildcard;  /**  
</span><br>
<span class="quotelev1">&gt; instantiated in orte/runtime/orte_init.c */
</span><br>
<span class="quotelev1">&gt; #define ORTE_NAME_INVALID       (&amp;orte_name_invalid)
</span><br>
<span class="quotelev1">&gt; -ORTE_DECLSPEC extern orte_process_name_t orte_name_invalid;  /**  
</span><br>
<span class="quotelev1">&gt; instantiated in orte/runtime/orte_init.c */
</span><br>
<span class="quotelev1">&gt; +ORTE_DECLSPEC orte_process_name_t orte_name_invalid;  /**  
</span><br>
<span class="quotelev1">&gt; instantiated in orte/runtime/orte_init.c */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define ORTE_PROC_MY_NAME       (&amp;orte_process_info.my_name)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5889.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<li><strong>Previous message:</strong> <a href="5887.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Branching for 1.5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5889.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<li><strong>Reply:</strong> <a href="5889.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<li><strong>Reply:</strong> <a href="5891.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
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
