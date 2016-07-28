<?
$subject_val = "Re: [OMPI devel] One orted for each process on the same host - any problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 18:56:16 2011" -->
<!-- isoreceived="20110504225616" -->
<!-- sent="Wed, 04 May 2011 15:55:54 -0700" -->
<!-- isosent="20110504225554" -->
<!-- name="Tony Lam" -->
<!-- email="tony.lam_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] One orted for each process on the same host - any problem?" -->
<!-- id="4DC1D97A.30809_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B9A02C1-80EF-4A3A-BDAE-83BE133E8828_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] One orted for each process on the same host - any problem?<br>
<strong>From:</strong> Tony Lam (<em>tony.lam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-04 18:55:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9247.php">Ralph Castain: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>Previous message:</strong> <a href="9245.php">Thomas Herault: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>In reply to:</strong> <a href="9245.php">Thomas Herault: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9247.php">Ralph Castain: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>Reply:</strong> <a href="9247.php">Ralph Castain: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Thomas,
<br>
<p>We need to track job resource usage in our resource manager for
<br>
accounting and resource policy enforcement, sharing single orted
<br>
process in multiple jobs makes the tracking much complicated. We don't
<br>
enforce other restrictions, and I'll appreciate any suggestion on how
<br>
to resolve this or work around this.
<br>
<p>We have thought about mapping all processes from a mpirun into a
<br>
single job to simplify job resource tracking, but that will require much 
<br>
spread changes in our software.
<br>
<p>Thanks.
<br>
<p>Tony
<br>
<p><p>On 05/04/11 15:34, Thomas Herault wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you explain why you would like one orted on top of each MPI process?
</span><br>
<span class="quotelev1">&gt; There are some situations, like resource usage limitation / accounting, that are possible to solve without changing the one daemon per node deployment.
</span><br>
<span class="quotelev1">&gt; Or do you enforce other kinds of restrictions on the orted process? Why wouldn't it be able to launch more than one MPI process / why would not that be desirable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bests,
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 4 mai 2011 &#224; 15:51, Tony Lam a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I understand a single orted is shared by all MPI processes from the same communicator on each execution host, does anyone see any problem that MPI/OMPI may have problem with each process has its owner orted? My guess it is less efficient in terms of MPI communication and memory foot print, but for simplification of our integration with OMPI, launching one orted for each MPI process is much easier to do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will appreciate if someone can confirm this setup will or will not work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tony
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="9247.php">Ralph Castain: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>Previous message:</strong> <a href="9245.php">Thomas Herault: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>In reply to:</strong> <a href="9245.php">Thomas Herault: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9247.php">Ralph Castain: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>Reply:</strong> <a href="9247.php">Ralph Castain: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
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
