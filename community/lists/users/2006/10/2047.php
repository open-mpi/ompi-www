<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 25 12:31:30 2006" -->
<!-- isoreceived="20061025163130" -->
<!-- sent="Wed, 25 Oct 2006 18:29:32 +0200" -->
<!-- isosent="20061025162932" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Starting on remote nodes" -->
<!-- id="200610251829.32639.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1161791039.26570.346.camel_at_shavano.itc.virginia.edu" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-25 12:29:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2048.php">Michael Kluskens: "Re: [OMPI users] Starting on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="2046.php">Katherine Holcomb: "[OMPI users] Starting on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="2046.php">Katherine Holcomb: "[OMPI users] Starting on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2048.php">Michael Kluskens: "Re: [OMPI users] Starting on remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello dear Katherine,
<br>
On Wednesday 25 October 2006 17:43, Katherine Holcomb wrote:
<br>
<span class="quotelev1">&gt; We currently use MPICH on our Linux clusters, but due to a high
</span><br>
<span class="quotelev1">&gt; frequency of semaphore problems we are planning to replace it.  OpenMPI
</span><br>
<span class="quotelev1">&gt; looks like our best candidate but we have hit a snag.  We support
</span><br>
<span class="quotelev1">&gt; multiple compilers (specifically PGI and Intel) and due to
</span><br>
<span class="quotelev1">&gt; incompatibilities in different vendors' f90 .mod files, we have separate
</span><br>
<span class="quotelev1">&gt; directories for OpenMPI with each compiler.  Therefore we cannot set a
</span><br>
<span class="quotelev1">&gt; global path to the OpenMPI binaries -- it will differ depending on the
</span><br>
<span class="quotelev1">&gt; user's choice of compiler.  I have read about the --prefix flag and this
</span><br>
<span class="quotelev1">&gt; does work, but our users are mostly barely conversant with Unix and many
</span><br>
<span class="quotelev1">&gt; would have difficulty finding and specifying the appropriate path.  (We
</span><br>
<span class="quotelev1">&gt; use the modules software environment currently to set paths and the like
</span><br>
<span class="quotelev1">&gt; for them.)
</span><br>
If You use modules already, You can set the path / prefix depending on the 
<br>
compilers to be used. Additionally, You may provide wrappers to mpirun to 
<br>
specify the correct prefix, so that for the user nothing will change, so:
<br>
<p>/opt/OpenMPI/bin/... mpi-wrappers calling
<br>
/opt/OpenMPI/1.1.2-pgi/...
<br>
/opt/OpenMPI/1.1.2-intel/...
<br>
<p>We have used this kind of setup before to provide different versions of Open 
<br>
MPI.
<br>
<p>The next Open MPI-1.2 will provide --enable-orterun-prefix-by-default flag to 
<br>
always have the prefix being passed.
<br>
<p>Hope, I could help?
<br>
<p>With best regards,
<br>
Rainer
<br>
<p><p><span class="quotelev1">&gt; Is there some way to specify something like &quot;use the same 
</span><br>
<span class="quotelev1">&gt; path as you are in&quot; from the root process?  There was some allusion in
</span><br>
<span class="quotelev1">&gt; the FAQ to changing the wrappers to include directives, but the link led
</span><br>
<span class="quotelev1">&gt; to a &quot;no such category&quot; page.
</span><br>
<p><pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 High Performance Computing       Tel: ++49 (0)711-685 6 5858
   Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
 POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]     
 ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
 70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2048.php">Michael Kluskens: "Re: [OMPI users] Starting on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="2046.php">Katherine Holcomb: "[OMPI users] Starting on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="2046.php">Katherine Holcomb: "[OMPI users] Starting on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2048.php">Michael Kluskens: "Re: [OMPI users] Starting on remote nodes"</a>
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
