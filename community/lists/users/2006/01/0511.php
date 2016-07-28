<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 18 22:25:30 2006" -->
<!-- isoreceived="20060119032530" -->
<!-- sent="Wed, 18 Jan 2006 22:25:21 -0500" -->
<!-- isosent="20060119032521" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1" -->
<!-- id="C84A84DC-1ADF-4BEC-BBA5-84D6E43140F8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8D6BFD4F-59B1-496A-BA18-7E1A97F70A6D_at_coast.ucsd.edu" -->
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
<strong>Date:</strong> 2006-01-18 22:25:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0512.php">Galen Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Previous message:</strong> <a href="0510.php">Jean-Christophe Hugly: "[O-MPI users] does btl_openib work ?"</a>
<li><strong>In reply to:</strong> <a href="0501.php">Kraig Winters: "[O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0514.php">Kraig Winters: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<li><strong>Reply:</strong> <a href="0514.php">Kraig Winters: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry it's taken a few days to look at this -- I'm unable to  
<br>
replicate your problem on a 10.4.3 machine, but I'm only using the  
<br>
gnu compilers (the IBM compilers are not officially supported on  
<br>
Tiger -- I wouldn't expect that to be the problem here, but anything  
<br>
is possible).
<br>
<p>Can you send your config.status file? (please compress)
<br>
<p><p><p>On Jan 13, 2006, at 8:48 PM, Kraig Winters wrote:
<br>
<p><span class="quotelev1">&gt; Hi.
</span><br>
<span class="quotelev1">&gt; I'm having trouble configuring v1.0.1 on a system
</span><br>
<span class="quotelev1">&gt; running OS X 10.4.3, using gcc/xlf. The configure script
</span><br>
<span class="quotelev1">&gt; is happy until it's in it's final stages and begins to
</span><br>
<span class="quotelev1">&gt; create the makefiles. Each time it attempts to create
</span><br>
<span class="quotelev1">&gt; a new makefile, the following error is produced:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; config.status: creating test/mca/ns/Makefile
</span><br>
<span class="quotelev1">&gt; sed: 23: ./confstatBmI51v/subs-4.sed: unescaped newline inside  
</span><br>
<span class="quotelev1">&gt; substitute pattern
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure then runs to completion but of course each and every
</span><br>
<span class="quotelev1">&gt; makefile is empty. I've enclosed the log and screen output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Kraig
</span><br>
<span class="quotelev1">&gt; &lt;config_output.tar.bz2&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0512.php">Galen Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Previous message:</strong> <a href="0510.php">Jean-Christophe Hugly: "[O-MPI users] does btl_openib work ?"</a>
<li><strong>In reply to:</strong> <a href="0501.php">Kraig Winters: "[O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0514.php">Kraig Winters: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<li><strong>Reply:</strong> <a href="0514.php">Kraig Winters: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
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
