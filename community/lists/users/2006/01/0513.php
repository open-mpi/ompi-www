<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 19 10:45:01 2006" -->
<!-- isoreceived="20060119154501" -->
<!-- sent="Thu, 19 Jan 2006 10:44:53 -0500" -->
<!-- isosent="20060119154453" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Totalview question?" -->
<!-- id="55512CC6-92F8-4C9E-86A7-B06580397C0A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.61.0601121749110.5091_at_papua.etnus.com" -->
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
<strong>Date:</strong> 2006-01-19 10:44:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0514.php">Kraig Winters: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0512.php">Galen Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>In reply to:</strong> <a href="0499.php">Chris Gottbrath: "Re: [O-MPI users] Totalview question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0475.php">Patrick Geoffray: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To follow up for the web archives:
<br>
<p>Chris helped us out by tracking down the problem to bad command line  
<br>
parsing in mpirun (a.k.a. orterun) and submitted a patch to fix it.   
<br>
I've committed the fix on both the trunk and and the v1.0 branch.   
<br>
I'll make a 1.0.2a4 shortly that contains this (and other) fixes.
<br>
<p>Thanks Chris!
<br>
<p><p>On Jan 12, 2006, at 5:59 PM, Chris Gottbrath wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tom,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just saw your note so I thought I would
</span><br>
<span class="quotelev1">&gt; check this out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did see the behavior you describe with
</span><br>
<span class="quotelev1">&gt; /bin/bash when I did
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -tv -np 4 a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TV shouldn't be crashing like that. Please
</span><br>
<span class="quotelev1">&gt; feel free to report that as a bug to Etnus.
</span><br>
<span class="quotelev1">&gt; Meanwhile, I do have success with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; totalview mpirun -a -np 4 a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think I have any OpenMPI
</span><br>
<span class="quotelev1">&gt; specific tcl scripts in my .totalview
</span><br>
<span class="quotelev1">&gt; dir.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you continue to have trouble
</span><br>
<span class="quotelev1">&gt; give us a shout here at Etnus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We didn't have OpenMPI integrated
</span><br>
<span class="quotelev1">&gt; into our testing system so it
</span><br>
<span class="quotelev1">&gt; isn't listed as supported but
</span><br>
<span class="quotelev1">&gt; it should be possible to get at
</span><br>
<span class="quotelev1">&gt; least process aquisition working
</span><br>
<span class="quotelev1">&gt; between TV 7.1.0 and OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Chris Gottbrath
</span><br>
<span class="quotelev1">&gt; Partner Technologies Engineer    Etnus, LLC
</span><br>
<span class="quotelev1">&gt; Chris.Gottbrath_at_[hidden]        <a href="http://www.etnus.com/">http://www.etnus.com/</a>
</span><br>
<span class="quotelev1">&gt; Voice: 508-652-7700 x7735        Fax: 508-652-7787
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
<li><strong>Next message:</strong> <a href="0514.php">Kraig Winters: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0512.php">Galen Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>In reply to:</strong> <a href="0499.php">Chris Gottbrath: "Re: [O-MPI users] Totalview question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0475.php">Patrick Geoffray: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
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
