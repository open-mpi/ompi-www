<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 10 11:31:08 2005" -->
<!-- isoreceived="20051110163108" -->
<!-- sent="Thu, 10 Nov 2005 11:30:56 -0500" -->
<!-- isosent="20051110163056" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`" -->
<!-- id="ca9116876fd9a6b7d0b94fb06df846a3_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="256e2a269231b548d2bafcb97f39df0d_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-11-10 11:30:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0313.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Previous message:</strong> <a href="0311.php">Tim S. Woodall: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>In reply to:</strong> <a href="0303.php">Jeff Squyres: "Re: [O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Clarification on this -- my earlier response wasn't quite right...
<br>
<p>We actually do not provide F90 bindings for MPI_Reduce (and several 
<br>
other collectives) because they have 2 user-provided buffers.  This 
<br>
means that for N intrinsic types, there are N^2 possible overloads for 
<br>
this function (because F90 is strongly typed -- there's actually even 
<br>
more than N^2 because of all the array dimension possibilities).  
<br>
Although Open MPI can generate all those F90 interfaces, we have not 
<br>
yet run into a compiler that does not seg fault when we try to have 
<br>
that many subroutines in a single module.
<br>
<p>Hence, we don't generate subroutines for those functions -- that's what 
<br>
you were seeing (you could compile, but you couldn't link).  The 
<br>
problem was that we were actually generating the interfaces -- which 
<br>
meant your compiler was looking for a F90 subroutine, but we didn't 
<br>
provide it.
<br>
<p>The correct solution was for us to remove the F90 MPI_Reduce (and 
<br>
friend) interfaces so that you'll automatically fall down through and 
<br>
utilize the F77 bindings for MPI_Reduce (unfortunately, there's no type 
<br>
checking, but at least it compiles/links/runs).  I've committed this on 
<br>
both the trunk and the branch; it'll be in tomorrow's nightly tarballs.
<br>
<p>This problem is actually a well-known deficiency in the MPI F90 
<br>
bindings; it's been mentioned a few places, probably the most recent of 
<br>
which is in our paper proposing new MPI Fortran bindings:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/papers/euro-pvmmpi-2005-fortran">http://www.open-mpi.org/papers/euro-pvmmpi-2005-fortran</a>
<br>
<p><p>On Nov 10, 2005, at 8:17 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Great Leaping Lizards, Batman!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unbelievably, the MPI_Reduce interfaces were left out.  I'm going to 
</span><br>
<span class="quotelev1">&gt; go a complete F90 audit right now to ensure that no other interfaces 
</span><br>
<span class="quotelev1">&gt; were unintentionally excluded; I'll commit a fix today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for catching this!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 9, 2005, at 8:15 PM, Brent LEBACK wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm building rc4 with a soon-to-be released pgf90.  mpicc and mpif77
</span><br>
<span class="quotelev2">&gt;&gt; both seem okay.  When I compile
</span><br>
<span class="quotelev2">&gt;&gt; with mpif90 I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; : In function `MAIN_':
</span><br>
<span class="quotelev2">&gt;&gt; : undefined reference to `mpi_reduce0dr8_'
</span><br>
<span class="quotelev2">&gt;&gt; pgf90-Fatal-linker completed with exit code 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your problem or mine?  I see these type extensions for bcast and 
</span><br>
<span class="quotelev2">&gt;&gt; various
</span><br>
<span class="quotelev2">&gt;&gt; sends and receives in libmpi_f90.a,
</span><br>
<span class="quotelev2">&gt;&gt; but nothing for mpi_reduce.  Where should I be looking?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is on an opteron cluster, SLES 9.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Brent
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0313.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Previous message:</strong> <a href="0311.php">Tim S. Woodall: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>In reply to:</strong> <a href="0303.php">Jeff Squyres: "Re: [O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
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
