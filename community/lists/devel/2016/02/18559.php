<?
$subject_val = "Re: [OMPI devel] mpirun --launch-proxy options";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 11:23:52 2016" -->
<!-- isoreceived="20160205162352" -->
<!-- sent="Fri, 5 Feb 2016 08:23:49 -0800" -->
<!-- isosent="20160205162349" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun --launch-proxy options" -->
<!-- id="24856AA5-83E2-418A-8329-2E4FD2C1AD95_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56B4BD11.9050402_at_xlab.si" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpirun --launch-proxy options<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-05 11:23:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18560.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Previous message:</strong> <a href="18558.php">Justin Cinkelj: "[OMPI devel] mpirun --launch-proxy options"</a>
<li><strong>In reply to:</strong> <a href="18558.php">Justin Cinkelj: "[OMPI devel] mpirun --launch-proxy options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18568.php">Justin Cinkelj: "Re: [OMPI devel] mpirun --launch-proxy options"</a>
<li><strong>Reply:</strong> <a href="18568.php">Justin Cinkelj: "Re: [OMPI devel] mpirun --launch-proxy options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;m pretty sure you can by simply enclosing the entire launch proxy command in quotes, but I can take a look a little later today
<br>
<p><span class="quotelev1">&gt; On Feb 5, 2016, at 7:17 AM, Justin Cinkelj &lt;justin.cinkelj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm starting mpi program via --launch-proxy, and would like to pass some additional parameters to it. But I'm not able to figure out how to do that (or if it is possible at all). Attempts to use environ failed:
</span><br>
<span class="quotelev1">&gt; OMPI_VAR1=aa mpirun program
</span><br>
<span class="quotelev1">&gt; mpirun -x VAR2=bb program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program will get set OMPI_VAR1 and VAR2, but only because orted setup environ. The launch-proxy gets no additional parameters. Is there a way to push some params to launch-proxy ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Justin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18558.php">http://www.open-mpi.org/community/lists/devel/2016/02/18558.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18560.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Previous message:</strong> <a href="18558.php">Justin Cinkelj: "[OMPI devel] mpirun --launch-proxy options"</a>
<li><strong>In reply to:</strong> <a href="18558.php">Justin Cinkelj: "[OMPI devel] mpirun --launch-proxy options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18568.php">Justin Cinkelj: "Re: [OMPI devel] mpirun --launch-proxy options"</a>
<li><strong>Reply:</strong> <a href="18568.php">Justin Cinkelj: "Re: [OMPI devel] mpirun --launch-proxy options"</a>
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
