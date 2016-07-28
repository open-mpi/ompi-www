<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 26 18:01:37 2006" -->
<!-- isoreceived="20060926220137" -->
<!-- sent="Tue, 26 Sep 2006 18:01:31 -0400" -->
<!-- isosent="20060926220131" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] some possible bugs" -->
<!-- id="C13F1B7B.28721%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40609261302t548bca83v5eb05bdb29fe9e46_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-26 18:01:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1085.php">Nysal Jan: "Re: [OMPI devel] btl_openib_max_btls"</a>
<li><strong>Previous message:</strong> <a href="1083.php">Lisandro Dalcin: "[OMPI devel] some possible bugs"</a>
<li><strong>In reply to:</strong> <a href="1083.php">Lisandro Dalcin: "[OMPI devel] some possible bugs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1086.php">Edgar Gabriel: "Re: [OMPI devel] some possible bugs"</a>
<li><strong>Reply:</strong> <a href="1086.php">Edgar Gabriel: "Re: [OMPI devel] some possible bugs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks for these reports!  I split up your e-mail into multiple reports
<br>
and filed each as its own tickets(#428 through #431).
<br>
<p><p><p>On 9/26/06 4:02 PM, &quot;Lisandro Dalcin&quot; &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'am developing mpi4py, a MPI port for Python. I've wrote many
</span><br>
<span class="quotelev1">&gt; unittest scripts for my wrappers, which also pretend to test MPI
</span><br>
<span class="quotelev1">&gt; implementations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below, I list some issues I've found when building my wrappers with
</span><br>
<span class="quotelev1">&gt; Open MPI 1.1.1. Please let me know your opinions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - MPI_Group_translate_ranks(group1, n, ranks1, group2, ranks2) fails
</span><br>
<span class="quotelev1">&gt;    (with MPI_ERR_GROUP) if n != size(group1). Regarding the standard,
</span><br>
<span class="quotelev1">&gt;    I understand this routine should whork for any value of n, if
</span><br>
<span class="quotelev1">&gt;    ranks1 contains values (even if some are duplicated) in a valid
</span><br>
<span class="quotelev1">&gt;    range according to size(group1).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - MPI_Info_get_nthkey(INFO, 0, key) does not fail when INFO is
</span><br>
<span class="quotelev1">&gt;    empty, ie, when MPI_Info_get_nkeys(info, &amp;nkeys) returns nkeys==0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - Usage of MPI_IN_PLACE is broken in some collectives, below the
</span><br>
<span class="quotelev1">&gt;    reasons I've found:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    + MPI_Gather:    with sendbuf=MPI_IN_PLACE, sendcount is not ignored.
</span><br>
<span class="quotelev1">&gt;    + MPI_Scatter:   with recvbuf=MPI_IN_PLACE, recvcount is not ignored.
</span><br>
<span class="quotelev1">&gt;    + MPI_Allgather: with sendbuf=MPI_IN_PLACE, sendcount is not ignored.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The standard says that [send|recv]count and [send|recv]type are
</span><br>
<span class="quotelev1">&gt;    ignored. I've not tested vector variants, perhaps they suffer the
</span><br>
<span class="quotelev1">&gt;    same problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - Some extended collective communications failed (not by raising
</span><br>
<span class="quotelev1">&gt;    errors, but instead aborting tracing to stdout) when using
</span><br>
<span class="quotelev1">&gt;    intercommunicators. Sometimes, the problems appeared when
</span><br>
<span class="quotelev1">&gt;    size(local_group) != size(remote_group). However, MPI_Barrier and
</span><br>
<span class="quotelev1">&gt;    MPI_Bcast worked well. I still could not get the reasons for those
</span><br>
<span class="quotelev1">&gt;    failures. I've found a similar problem in MPICH2 when configured
</span><br>
<span class="quotelev1">&gt;    with error-cheking enabled (they had a bug in some error-cheking
</span><br>
<span class="quotelev1">&gt;    macros, I reported this issue and next they told me I was right).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1085.php">Nysal Jan: "Re: [OMPI devel] btl_openib_max_btls"</a>
<li><strong>Previous message:</strong> <a href="1083.php">Lisandro Dalcin: "[OMPI devel] some possible bugs"</a>
<li><strong>In reply to:</strong> <a href="1083.php">Lisandro Dalcin: "[OMPI devel] some possible bugs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1086.php">Edgar Gabriel: "Re: [OMPI devel] some possible bugs"</a>
<li><strong>Reply:</strong> <a href="1086.php">Edgar Gabriel: "Re: [OMPI devel] some possible bugs"</a>
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
