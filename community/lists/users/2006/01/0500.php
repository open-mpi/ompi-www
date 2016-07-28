<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 13 12:20:32 2006" -->
<!-- isoreceived="20060113172032" -->
<!-- sent="Fri, 13 Jan 2006 12:23:10 -0500 (EST)" -->
<!-- isosent="20060113172310" -->
<!-- name="Michael L. Stokes" -->
<!-- email="mstokes_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] (no subject)" -->
<!-- id="55898.70.197.72.46.1137172990.squirrel_at_loginhost.osc.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7597F036-2C82-4B38-B9B8-78671597541D_at_open-mpi.org" -->
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
<strong>From:</strong> Michael L. Stokes (<em>mstokes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-13 12:23:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0501.php">Kraig Winters: "[O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0499.php">Chris Gottbrath: "Re: [O-MPI users] Totalview question?"</a>
<li><strong>In reply to:</strong> <a href="0464.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>I had compiled 1.0.1 which seemed to be the latest stable version.  But
<br>
just to be sure, I downloaded the latest, rebuilt, and I'm getting the
<br>
same problem.  I ran strace on the run and mpirun is hanging on a futex()
<br>
call.
<br>
Any notion  of what might cause this?
<br>
<p>Thanks
<br>
Mike
<br>
<p><p><p><span class="quotelev1">&gt; On Dec 30, 2005, at 4:01 PM, Michael L. Stokes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 30, 2005, at 1:05 PM, Michael L. Stokes wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have compiled and installed OpenMPI on a SUSE based SGI PRISM (8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processor model).  I configured the build with --with-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; device=ch_shmem,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; otherwise I took all the defaults. I installed as root using the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; install prefix. SO good so far.  Then I compile my hello world
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; project
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using mpiCC, and again this looks good. I run ldd on the executable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was convinced that is is using the OpenMPI libs and not the MPT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I noticed you are using a fairly old version of Open MPI (from before
</span><br>
<span class="quotelev1">&gt; we officially released v1.0.1).  Could you try either v1.0.1 or a new
</span><br>
<span class="quotelev1">&gt; nightly tarball and see if you get the same results.  I'm also a
</span><br>
<span class="quotelev1">&gt; little concerned about the output from mpirun -d -- can you double
</span><br>
<span class="quotelev1">&gt; check that you are using the mpirun from the right installation path
</span><br>
<span class="quotelev1">&gt; (and not one from an older version of Open MPI or LAM or MPICH or
</span><br>
<span class="quotelev1">&gt; something?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p>---------------------------------------
<br>
Michael L. Stokes, Ph.D.
<br>
Integrated Modeling &amp; Test On-site Lead
<br>
RTTC/WST&amp;E Support
<br>
Room 27 Building 4500
<br>
Redstone Arsenal, AL 35898
<br>
<p>Ohio Supercomputer Center
<br>
1224 Kinnear Road
<br>
Columbus, OH 43212-1163
<br>
<p>256.876.5967 phone
<br>
256.876.7918 fax
<br>
mstokes_at_[hidden]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0501.php">Kraig Winters: "[O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0499.php">Chris Gottbrath: "Re: [O-MPI users] Totalview question?"</a>
<li><strong>In reply to:</strong> <a href="0464.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
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
