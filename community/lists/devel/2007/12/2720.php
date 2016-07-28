<?
$subject_val = "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 10:35:12 2007" -->
<!-- isoreceived="20071205153512" -->
<!-- sent="Wed, 05 Dec 2007 10:35:10 -0500" -->
<!-- isosent="20071205153510" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks" -->
<!-- id="4756C52E.5090609_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C37ABCD9.B784%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 10:35:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Previous message:</strong> <a href="2719.php">Ralph H Castain: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="2710.php">Ralph H Castain: "[OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2726.php">Brian W. Barrett: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<li><strong>Reply:</strong> <a href="2726.php">Brian W. Barrett: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To me, (c) is a non-starter. I think whenever possible we should be 
<br>
automatically doing the right thing. The user should not need to have 
<br>
any idea how things work inside the library.
<br>
<p>Between options (a) and (b), I don't really care.
<br>
<p>(b) would be great if we had a mca component dependency system which has 
<br>
been much talked about. But without such a system it gets messy.
<br>
<p>(a) has the advantage of making sure there is no problems and allowing 
<br>
the 2 systems to interact very nicely together, but it also might add a 
<br>
large burden to a component writer.
<br>
<p>On a related, but slightly different topic, one thing that has always 
<br>
bothered me about the grpcomm/routed implementation is that it is not 
<br>
self contained. There is logic for routing algorithms outside of the 
<br>
components (for example, in orte/orted/orted_comm.c). So, if there are 
<br>
any overhauls planned I definitely think this needs to be cleaned up.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; II. Interaction between the ROUTED and GRPCOMM frameworks
</span><br>
<span class="quotelev1">&gt; When we initially developed these two frameworks within the RTE, we
</span><br>
<span class="quotelev1">&gt; envisioned them to operate totally independently of each other. Thus, the
</span><br>
<span class="quotelev1">&gt; grpcomm collectives provide algorithms such as a binomial &quot;xcast&quot; that uses
</span><br>
<span class="quotelev1">&gt; the daemons to scalably send messages across the system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, we recently realized that the efficacy of the current grpcomm
</span><br>
<span class="quotelev1">&gt; algorithms directly hinge on the daemons being fully connected - which we
</span><br>
<span class="quotelev1">&gt; were recently told may not be the case as other people introduce different
</span><br>
<span class="quotelev1">&gt; ROUTED components. For example, using the binomial algorithm in grpcomm's
</span><br>
<span class="quotelev1">&gt; xcast while having a ring topology selected in ROUTED would likely result in
</span><br>
<span class="quotelev1">&gt; terrible performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This raises the following questions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (a) should the GRPCOMM and ROUTED frameworks be consolidated to ensure that
</span><br>
<span class="quotelev1">&gt; the group collectives algorithms properly &quot;match&quot; the communication
</span><br>
<span class="quotelev1">&gt; topology?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (b) should we automatically select the grpcomm/routed pairings based on some
</span><br>
<span class="quotelev1">&gt; internal logic?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (c) should we leave this &quot;as-is&quot; and the user is responsible for making
</span><br>
<span class="quotelev1">&gt; intelligent choices (and for detecting when the performance is bad due to
</span><br>
<span class="quotelev1">&gt; this mismatch)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (d) other suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Previous message:</strong> <a href="2719.php">Ralph H Castain: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="2710.php">Ralph H Castain: "[OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2726.php">Brian W. Barrett: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<li><strong>Reply:</strong> <a href="2726.php">Brian W. Barrett: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
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
