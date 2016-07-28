<?
$subject_val = "[OMPI users] MPI_Init never returns on IA64";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 19:48:58 2010" -->
<!-- isoreceived="20100329234858" -->
<!-- sent="Mon, 29 Mar 2010 16:47:20 -0700" -->
<!-- isosent="20100329234720" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Init never returns on IA64" -->
<!-- id="1269906440.5311.33.camel_at_sjackman01.phage.bcgsc.ca" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Init never returns on IA64<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 19:47:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12471.php">Jeff Squyres: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<li><strong>Previous message:</strong> <a href="12469.php">Klymak Jody: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12471.php">Jeff Squyres: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<li><strong>Reply:</strong> <a href="12471.php">Jeff Squyres: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On an IA64 platform, MPI_Init never returns. I fired up GDB and it seems
<br>
that ompi_free_list_grow never returns. My test program does nothing but
<br>
call MPI_Init. Here's the backtrace:
<br>
<p>(gdb) bt
<br>
#0  0x2000000000075620 in ompi_free_list_grow () from /home/aubjtl/openmpi/lib/libmpi.so.0
<br>
#1  0x2000000000078e50 in ompi_rb_tree_init () from /home/aubjtl/openmpi/lib/libmpi.so.0
<br>
#2  0x2000000000160840 in mca_mpool_base_tree_init () from /home/aubjtl/openmpi/lib/libmpi.so.0
<br>
#3  0x200000000015dac0 in mca_mpool_base_open () from /home/aubjtl/openmpi/lib/libmpi.so.0
<br>
#4  0x20000000000bfd30 in ompi_mpi_init () from /home/aubjtl/openmpi/lib/libmpi.so.0
<br>
#5  0x200000000010efb0 in PMPI_Init () from /home/aubjtl/openmpi/lib/libmpi.so.0
<br>
#6  0x4000000000000b70 in main ()
<br>
<p>Any suggestion how I can trouble shoot?
<br>
<p>$ mpirun --version
<br>
mpirun (Open MPI) 1.4.1
<br>
$ ./config.guess
<br>
ia64-unknown-linux-gnu
<br>
<p>Thanks,
<br>
Shaun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12471.php">Jeff Squyres: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<li><strong>Previous message:</strong> <a href="12469.php">Klymak Jody: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12471.php">Jeff Squyres: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<li><strong>Reply:</strong> <a href="12471.php">Jeff Squyres: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
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
