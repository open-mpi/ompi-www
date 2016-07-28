<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan  3 16:03:45 2007" -->
<!-- isoreceived="20070103210345" -->
<!-- sent="Wed, 3 Jan 2007 13:03:39 -0800" -->
<!-- isosent="20070103210339" -->
<!-- name="Reese Faucette" -->
<!-- email="reese_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="00df01c72f7a$a4f9fa30$58c31fac_at_bart" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="559847D38F12F742B0EE27727596F42901A7E965_at_NDJSEVS14.ndc.nasa.gov" -->
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
<strong>From:</strong> Reese Faucette (<em>reese_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-03 16:03:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2432.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2430.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2430.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2432.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; $ mpirun --prefix /usr/local/openmpi-1.2b2 --hostfile ./h1-3 -np 1 --mca
</span><br>
<span class="quotelev1">&gt; btl mx,sm,self ./cpi
</span><br>
<span class="quotelev1">&gt; [node-1:09704] mca: base: component_find: unable to open mtl mx: file
</span><br>
<span class="quotelev1">&gt; not found (ignored)
</span><br>
<span class="quotelev1">&gt; [node-1:09704] mca: base: component_find: unable to open btl mx: file
</span><br>
<span class="quotelev1">&gt; not found (ignored)
</span><br>
<p>This in particular is almost certainly a library path issue.  A quick way to 
<br>
check to see if your LD_LIBRARY_PATH is correct is to run:
<br>
$ mpirun &lt;whatever args you want to test&gt; ldd 
<br>
&lt;ompi_install_path&gt;/lib/openmpi/mca_mtl_mx.so
<br>
<p>If things are good, you will get a first line like:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmyriexpress.so =&gt; /opt/mx/lib/libmyriexpress.so (0xb7f1d000)
<br>
<p>If not, it will tell you explicitly.  Since all you specified is 
<br>
the --prefix line, I'm not surprised libmyriexpress.so is not found in this 
<br>
case.
<br>
-reese
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2432.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2430.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2430.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2432.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
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
