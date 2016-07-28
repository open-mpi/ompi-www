<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 21:59:44 2009" -->
<!-- isoreceived="20090429015944" -->
<!-- sent="Tue, 28 Apr 2009 19:59:29 -0600" -->
<!-- isosent="20090429015929" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097" -->
<!-- id="ECAA920D-C542-4903-8F86-936A5136FDCA_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="161CC77B-721C-4CB7-AAA9-90B20B3A45B8_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-04-28 21:59:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5891.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<li><strong>Previous message:</strong> <a href="5889.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<li><strong>In reply to:</strong> <a href="5889.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5892.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<li><strong>Reply:</strong> <a href="5892.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I have found the correct fix. Please back this commit out and I  
<br>
will submit the correct one.
<br>
<p>Just a missing header file in orte_init.c
<br>
<p><p>On Apr 28, 2009, at 7:55 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...even worse than I thought. We now have orte_name_wildcard and  
</span><br>
<span class="quotelev1">&gt; orte_name_invalid instantiated everywhere that orte_globals.h is  
</span><br>
<span class="quotelev1">&gt; used. This breaks everything in my systems as the values are no  
</span><br>
<span class="quotelev1">&gt; longer defined in a central place - so they are now undefined  
</span><br>
<span class="quotelev1">&gt; everywhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought you had tested this before? Did this not show up??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 28, 2009, at 7:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ummm...no, that definitely is wrong, Rainer. Please back this out -  
</span><br>
<span class="quotelev2">&gt;&gt; it doubly allocates memory for those variables. Like the comment  
</span><br>
<span class="quotelev2">&gt;&gt; says, they are instantiated in orte_init.c.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 28, 2009, at 7:44 PM, rusraink_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: rusraink
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2009-04-28 21:44:43 EDT (Tue, 28 Apr 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 21097
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21097">https://svn.open-mpi.org/trac/ompi/changeset/21097</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - So, this ain't right, but somewhere the orte-tools
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do not detect the orte_name_wildcard and orte_name_invalid.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/orte/runtime/orte_globals.h |     4 ++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/orte/runtime/orte_globals.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/orte/runtime/orte_globals.h	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/orte/runtime/orte_globals.h	2009-04-28 21:44:43 EDT  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Tue, 28 Apr 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -53,9 +53,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* Shortcut for some commonly used names */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define ORTE_NAME_WILDCARD      (&amp;orte_name_wildcard)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -ORTE_DECLSPEC extern orte_process_name_t orte_name_wildcard;  /**  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instantiated in orte/runtime/orte_init.c */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +ORTE_DECLSPEC orte_process_name_t orte_name_wildcard;  /**  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instantiated in orte/runtime/orte_init.c */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define ORTE_NAME_INVALID       (&amp;orte_name_invalid)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -ORTE_DECLSPEC extern orte_process_name_t orte_name_invalid;  /**  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instantiated in orte/runtime/orte_init.c */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +ORTE_DECLSPEC orte_process_name_t orte_name_invalid;  /**  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instantiated in orte/runtime/orte_init.c */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define ORTE_PROC_MY_NAME       (&amp;orte_process_info.my_name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5891.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<li><strong>Previous message:</strong> <a href="5889.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<li><strong>In reply to:</strong> <a href="5889.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5892.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<li><strong>Reply:</strong> <a href="5892.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
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
