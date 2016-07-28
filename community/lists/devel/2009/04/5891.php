<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 22:07:11 2009" -->
<!-- isoreceived="20090429020711" -->
<!-- sent="Tue, 28 Apr 2009 18:06:21 -0400" -->
<!-- isosent="20090428220621" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097" -->
<!-- id="200904281806.21994.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E8F92CDD-66B1-4F67-9144-3A1B43A5F427_at_open-mpi.org" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 18:06:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5892.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<li><strong>Previous message:</strong> <a href="5890.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<li><strong>In reply to:</strong> <a href="5888.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
I know it's not right.
<br>
That's why it got commited in a separate commit!
<br>
BUT, somewhere in libopen-rte.so, they are marked as file-LOCAL, and are not 
<br>
known.
<br>
<p>CU,.
<br>
Rainer
<br>
<p>On Tuesday 28 April 2009, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Ummm...no, that definitely is wrong, Rainer. Please back this out - it
</span><br>
<span class="quotelev1">&gt; doubly allocates memory for those variables. Like the comment says,
</span><br>
<span class="quotelev1">&gt; they are instantiated in orte_init.c.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 28, 2009, at 7:44 PM, rusraink_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Author: rusraink
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2009-04-28 21:44:43 EDT (Tue, 28 Apr 2009)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 21097
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21097">https://svn.open-mpi.org/trac/ompi/changeset/21097</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; - So, this ain't right, but somewhere the orte-tools
</span><br>
<span class="quotelev2">&gt; &gt;   do not detect the orte_name_wildcard and orte_name_invalid.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/runtime/orte_globals.h |     4 ++--
</span><br>
<span class="quotelev2">&gt; &gt;   1 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/runtime/orte_globals.h
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/runtime/orte_globals.h	(original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/runtime/orte_globals.h	2009-04-28 21:44:43 EDT (Tue,
</span><br>
<span class="quotelev2">&gt; &gt; 28 Apr 2009)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -53,9 +53,9 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* Shortcut for some commonly used names */
</span><br>
<span class="quotelev2">&gt; &gt; #define ORTE_NAME_WILDCARD      (&amp;orte_name_wildcard)
</span><br>
<span class="quotelev2">&gt; &gt; -ORTE_DECLSPEC extern orte_process_name_t orte_name_wildcard;  /**
</span><br>
<span class="quotelev2">&gt; &gt; instantiated in orte/runtime/orte_init.c */
</span><br>
<span class="quotelev2">&gt; &gt; +ORTE_DECLSPEC orte_process_name_t orte_name_wildcard;  /**
</span><br>
<span class="quotelev2">&gt; &gt; instantiated in orte/runtime/orte_init.c */
</span><br>
<span class="quotelev2">&gt; &gt; #define ORTE_NAME_INVALID       (&amp;orte_name_invalid)
</span><br>
<span class="quotelev2">&gt; &gt; -ORTE_DECLSPEC extern orte_process_name_t orte_name_invalid;  /**
</span><br>
<span class="quotelev2">&gt; &gt; instantiated in orte/runtime/orte_init.c */
</span><br>
<span class="quotelev2">&gt; &gt; +ORTE_DECLSPEC orte_process_name_t orte_name_invalid;  /**
</span><br>
<span class="quotelev2">&gt; &gt; instantiated in orte/runtime/orte_init.c */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #define ORTE_PROC_MY_NAME       (&amp;orte_process_info.my_name)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
----------------------------------------------------------------
 Dr.-Ing. Rainer Keller  <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                         Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                 Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5892.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<li><strong>Previous message:</strong> <a href="5890.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
<li><strong>In reply to:</strong> <a href="5888.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21097"</a>
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
