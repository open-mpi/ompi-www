<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 10:06:14 2007" -->
<!-- isoreceived="20070709140614" -->
<!-- sent="Mon, 9 Jul 2007 10:06:00 -0400" -->
<!-- isosent="20070709140600" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't get TotalView to find main program" -->
<!-- id="A29D09C7-5BAF-4006-84C1-35D7174A3E5D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5927226A3D285F40AB95CA2A3D2369D401B28738_at_EXCLUSTER.pu.win.princeton.edu" -->
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
<strong>Date:</strong> 2007-07-09 10:06:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3603.php">Tim Prins: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Previous message:</strong> <a href="3601.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3585.php">Dennis McRitchie: "[OMPI users] Can't get TotalView to find main program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3668.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Reply:</strong> <a href="3668.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 5, 2007, at 4:02 PM, Dennis McRitchie wrote:
<br>
<p><span class="quotelev1">&gt; Any idea why the main program can't be found when running under  
</span><br>
<span class="quotelev1">&gt; mpirun?
</span><br>
<p>Just to be sure: you compiled your test MPI application with -g, right?
<br>
<p><span class="quotelev1">&gt; Does openmpi need to be built with either --enable-debug or
</span><br>
<span class="quotelev1">&gt; --enable-mem-debug? The &quot;configure --help&quot; says the former is not for
</span><br>
<span class="quotelev1">&gt; general MPI users. Unclear about the latter.
</span><br>
<p>No, both of those should be just for OMPI developers; you should not  
<br>
need them for user installations.  Indeed, OMPI should build itself  
<br>
with -g as relevant for TV support (i.e., use -g to compile the  
<br>
relevant .c files in libmpi); you shouldn't need to build OMPI itself  
<br>
with -g.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3603.php">Tim Prins: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Previous message:</strong> <a href="3601.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3585.php">Dennis McRitchie: "[OMPI users] Can't get TotalView to find main program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3668.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Reply:</strong> <a href="3668.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
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
