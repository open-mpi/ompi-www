<?
$subject_val = "Re: [OMPI devel] Program prefix for OpenMPI binaries?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  8 20:41:34 2012" -->
<!-- isoreceived="20120909004134" -->
<!-- sent="Sat, 8 Sep 2012 17:41:26 -0700" -->
<!-- isosent="20120909004126" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Program prefix for OpenMPI binaries?" -->
<!-- id="30F9FAC4-4E42-458D-91DF-FAEF47A221EF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGR4S9HFsZcuHd_VHeQL9PBmz=A2pcZ7qKNa1=3-tUC8ndjRoQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Program prefix for OpenMPI binaries?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-08 20:41:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11482.php">Dmitry N. Mikushin: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
<li><strong>Previous message:</strong> <a href="11480.php">Dmitry N. Mikushin: "[OMPI devel] Program prefix for OpenMPI binaries?"</a>
<li><strong>In reply to:</strong> <a href="11480.php">Dmitry N. Mikushin: "[OMPI devel] Program prefix for OpenMPI binaries?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11482.php">Dmitry N. Mikushin: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
<li><strong>Reply:</strong> <a href="11482.php">Dmitry N. Mikushin: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 8, 2012, at 1:14 PM, &quot;Dmitry N. Mikushin&quot; &lt;maemarcus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Setting program prefix is disabled for OpenMPI compilation, could you
</span><br>
<span class="quotelev1">&gt; please explain why?
</span><br>
<p>I'm not sure I understand - setting the prefix is most definitely enabled and working. What version of OMPI are you concerned about?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Consider we want to make a package containing OpenMPI packed together
</span><br>
<span class="quotelev1">&gt; with our open-source compiler, that is installable on arbitrary Linux
</span><br>
<span class="quotelev1">&gt; system. In this case, it would be very handy to add some program
</span><br>
<span class="quotelev1">&gt; prefix to guarantee no confusion with other possibly installed MPI
</span><br>
<span class="quotelev1">&gt; implementations visible through $PATH.
</span><br>
<p><p>Are you saying that --enable-orterun-prefix-by-default is inadequate? This is the reason it exists - to avoid path confusion. If something further is required, please let us know and we'll see what can be done.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; - D.
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
<li><strong>Next message:</strong> <a href="11482.php">Dmitry N. Mikushin: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
<li><strong>Previous message:</strong> <a href="11480.php">Dmitry N. Mikushin: "[OMPI devel] Program prefix for OpenMPI binaries?"</a>
<li><strong>In reply to:</strong> <a href="11480.php">Dmitry N. Mikushin: "[OMPI devel] Program prefix for OpenMPI binaries?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11482.php">Dmitry N. Mikushin: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
<li><strong>Reply:</strong> <a href="11482.php">Dmitry N. Mikushin: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
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
