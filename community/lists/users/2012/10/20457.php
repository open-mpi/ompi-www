<?
$subject_val = "Re: [OMPI users] Open MPI on Cray XE6 / Gemini";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 11:04:24 2012" -->
<!-- isoreceived="20121010150424" -->
<!-- sent="Wed, 10 Oct 2012 08:04:20 -0700" -->
<!-- isosent="20121010150420" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI on Cray XE6 / Gemini" -->
<!-- id="CAMD57ocmBR3e5hohQ06yrKx90Rk4+sYd6hpqpVq+f-F1T=WfYQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20121010145904.GA14407_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI on Cray XE6 / Gemini<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 11:04:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20458.php">Nathan Hjelm: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Previous message:</strong> <a href="20456.php">Nathan Hjelm: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>In reply to:</strong> <a href="20456.php">Nathan Hjelm: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20458.php">Nathan Hjelm: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Reply:</strong> <a href="20458.php">Nathan Hjelm: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan
<br>
<p>The only way to get that OOB error is if PMI isn't running - hence my
<br>
earlier note. If PMI isn't actually running, then we fall back to the TCP
<br>
OOB and try to open sockets - which won't work because the app is being
<br>
direct-launched.
<br>
<p>Alternatively, he could launch using &quot;mpirun&quot; and then it should work just
<br>
fine.
<br>
<p><p><p>On Wed, Oct 10, 2012 at 7:59 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Oct 10, 2012 at 02:50:59PM +0200, Christoph Niethammer wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I just tried to use Open MPI 1.7a1r27416 on a Cray XE6 system.
</span><br>
<span class="quotelev1">&gt; Unfortunately I
</span><br>
<span class="quotelev2">&gt; &gt; get the following error when I run a simple HelloWorldMPI program:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ pirun HelloWorldMPI
</span><br>
<span class="quotelev2">&gt; &gt; App launch reported: 2 (out of 2) daemons - 0 (out of 32) procs
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; [unset]:_pmi_alps_get_appLayout:pmi_alps_get_apid returned with error:
</span><br>
<span class="quotelev1">&gt; Bad
</span><br>
<span class="quotelev2">&gt; &gt; file descriptor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a bug in Cray's PMI-3 which causes this error message. Change the
</span><br>
<span class="quotelev1">&gt; platform file to point at PMI 2.1.4. I was hoping Cray would fix the bug
</span><br>
<span class="quotelev1">&gt; before 1.7.0. Since that doesn't appear to be the case I will push updated
</span><br>
<span class="quotelev1">&gt; platform files that use PMI 2.1.4 instead of the default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [nid01766:20603] mca_oob_tcp_init: unable to create IPv4 listen socket:
</span><br>
<span class="quotelev1">&gt; Unable
</span><br>
<span class="quotelev2">&gt; &gt; to open a TCP socket for out-of-band communications
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Never seen this error before. What PE release is installed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20457/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20458.php">Nathan Hjelm: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Previous message:</strong> <a href="20456.php">Nathan Hjelm: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>In reply to:</strong> <a href="20456.php">Nathan Hjelm: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20458.php">Nathan Hjelm: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Reply:</strong> <a href="20458.php">Nathan Hjelm: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
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
