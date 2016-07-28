<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 10 08:18:03 2005" -->
<!-- isoreceived="20051110131803" -->
<!-- sent="Thu, 10 Nov 2005 08:17:55 -0500" -->
<!-- isosent="20051110131755" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`" -->
<!-- id="256e2a269231b548d2bafcb97f39df0d_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43729F34.9070607_at_st.com" -->
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
<strong>Date:</strong> 2005-11-10 08:17:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0304.php">Marty Humphrey: "Re: [O-MPI users] can't get openmpi to run across twomulti-NICmachines"</a>
<li><strong>Previous message:</strong> <a href="0302.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>In reply to:</strong> <a href="0299.php">Brent LEBACK: "[O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0312.php">Jeff Squyres: "Re: [O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
<li><strong>Reply:</strong> <a href="0312.php">Jeff Squyres: "Re: [O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great Leaping Lizards, Batman!
<br>
<p>Unbelievably, the MPI_Reduce interfaces were left out.  I'm going to go 
<br>
a complete F90 audit right now to ensure that no other interfaces were 
<br>
unintentionally excluded; I'll commit a fix today.
<br>
<p>Thanks for catching this!
<br>
<p><p>On Nov 9, 2005, at 8:15 PM, Brent LEBACK wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm building rc4 with a soon-to-be released pgf90.  mpicc and mpif77
</span><br>
<span class="quotelev1">&gt; both seem okay.  When I compile
</span><br>
<span class="quotelev1">&gt; with mpif90 I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; : In function `MAIN_':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `mpi_reduce0dr8_'
</span><br>
<span class="quotelev1">&gt; pgf90-Fatal-linker completed with exit code 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your problem or mine?  I see these type extensions for bcast and 
</span><br>
<span class="quotelev1">&gt; various
</span><br>
<span class="quotelev1">&gt; sends and receives in libmpi_f90.a,
</span><br>
<span class="quotelev1">&gt; but nothing for mpi_reduce.  Where should I be looking?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is on an opteron cluster, SLES 9.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Brent
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
<li><strong>Next message:</strong> <a href="0304.php">Marty Humphrey: "Re: [O-MPI users] can't get openmpi to run across twomulti-NICmachines"</a>
<li><strong>Previous message:</strong> <a href="0302.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>In reply to:</strong> <a href="0299.php">Brent LEBACK: "[O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0312.php">Jeff Squyres: "Re: [O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
<li><strong>Reply:</strong> <a href="0312.php">Jeff Squyres: "Re: [O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
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
