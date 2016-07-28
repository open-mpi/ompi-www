<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  9 20:15:50 2005" -->
<!-- isoreceived="20051110011550" -->
<!-- sent="Wed, 09 Nov 2005 17:15:32 -0800" -->
<!-- isosent="20051110011532" -->
<!-- name="Brent LEBACK" -->
<!-- email="brent.leback_at_[hidden]" -->
<!-- subject="[O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`" -->
<!-- id="43729F34.9070607_at_st.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Brent LEBACK (<em>brent.leback_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-09 20:15:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0300.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NICmachines"</a>
<li><strong>Previous message:</strong> <a href="0298.php">Jeff Squyres: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0303.php">Jeff Squyres: "Re: [O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
<li><strong>Reply:</strong> <a href="0303.php">Jeff Squyres: "Re: [O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm building rc4 with a soon-to-be released pgf90.  mpicc and mpif77 
<br>
both seem okay.  When I compile
<br>
with mpif90 I get:
<br>
<p>: In function `MAIN_':
<br>
: undefined reference to `mpi_reduce0dr8_'
<br>
pgf90-Fatal-linker completed with exit code 1
<br>
<p>Your problem or mine?  I see these type extensions for bcast and various 
<br>
sends and receives in libmpi_f90.a,
<br>
but nothing for mpi_reduce.  Where should I be looking?
<br>
<p>This is on an opteron cluster, SLES 9.
<br>
<p>Thanks.
<br>
<p>- Brent
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0300.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NICmachines"</a>
<li><strong>Previous message:</strong> <a href="0298.php">Jeff Squyres: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0303.php">Jeff Squyres: "Re: [O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
<li><strong>Reply:</strong> <a href="0303.php">Jeff Squyres: "Re: [O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
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
