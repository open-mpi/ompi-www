<?
$subject_val = "Re: [OMPI devel] mpirun --launch-proxy options";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  6 15:22:24 2016" -->
<!-- isoreceived="20160206202224" -->
<!-- sent="Sat, 6 Feb 2016 21:22:18 +0100 (CET)" -->
<!-- isosent="20160206202218" -->
<!-- name="Justin Cinkelj" -->
<!-- email="justin.cinkelj_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun --launch-proxy options" -->
<!-- id="1564274436.58315696.1454790138926.JavaMail.zimbra_at_zimbra.xlab.si" -->
<!-- charset="utf-8" -->
<!-- inreplyto="24856AA5-83E2-418A-8329-2E4FD2C1AD95_at_open-mpi.org" -->
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
<strong>From:</strong> Justin Cinkelj (<em>justin.cinkelj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-06 15:22:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18569.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-release branch v2.x updated. v2.x-dev-1078-gefeac60"</a>
<li><strong>Previous message:</strong> <a href="18567.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>In reply to:</strong> <a href="18559.php">Ralph Castain: "Re: [OMPI devel] mpirun --launch-proxy options"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you. That sounds just to logical and obvious :)
<br>
And it works too.
<br>
<p><p>----- Original Message -----
<br>
<span class="quotelev1">&gt; From: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Developers&quot; &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Friday, February 5, 2016 5:23:49 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] mpirun --launch-proxy options
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m pretty sure you can by simply enclosing the entire launch proxy command
</span><br>
<span class="quotelev1">&gt; in quotes, but I can take a look a little later today
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 5, 2016, at 7:17 AM, Justin Cinkelj &lt;justin.cinkelj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm starting mpi program via --launch-proxy, and would like to pass some
</span><br>
<span class="quotelev2">&gt; &gt; additional parameters to it. But I'm not able to figure out how to do that
</span><br>
<span class="quotelev2">&gt; &gt; (or if it is possible at all). Attempts to use environ failed:
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_VAR1=aa mpirun program
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -x VAR2=bb program
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The program will get set OMPI_VAR1 and VAR2, but only because orted setup
</span><br>
<span class="quotelev2">&gt; &gt; environ. The launch-proxy gets no additional parameters. Is there a way to
</span><br>
<span class="quotelev2">&gt; &gt; push some params to launch-proxy ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Justin
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18558.php">http://www.open-mpi.org/community/lists/devel/2016/02/18558.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18559.php">http://www.open-mpi.org/community/lists/devel/2016/02/18559.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18569.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-release branch v2.x updated. v2.x-dev-1078-gefeac60"</a>
<li><strong>Previous message:</strong> <a href="18567.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>In reply to:</strong> <a href="18559.php">Ralph Castain: "Re: [OMPI devel] mpirun --launch-proxy options"</a>
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
