<?
$subject_val = "Re: [OMPI users] MPI_Init never returns on IA64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 30 15:16:54 2010" -->
<!-- isoreceived="20100330191654" -->
<!-- sent="Tue, 30 Mar 2010 12:15:21 -0700" -->
<!-- isosent="20100330191521" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init never returns on IA64" -->
<!-- id="1269976521.4553.19.camel_at_sjackman01.phage.bcgsc.ca" -->
<!-- inreplyto="4FC10AB0-66DD-46CE-8A6C-34B316D802A2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init never returns on IA64<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-30 15:15:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12481.php">Jeff Squyres: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<li><strong>Previous message:</strong> <a href="12479.php">Gus Correa: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>In reply to:</strong> <a href="12471.php">Jeff Squyres: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12481.php">Jeff Squyres: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<li><strong>Reply:</strong> <a href="12481.php">Jeff Squyres: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I tested 1.4.2a1r22893, and it does not hang in ompi_free_list_grow.
<br>
<p>I hadn't noticed that the 1.4.1 installation I was using was configured
<br>
with --enable-mpi-threads. Could that have been related to this problem?
<br>
<p>Cheers,
<br>
Shaun
<br>
<p>On Mon, 2010-03-29 at 17:00 -0700, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Could you try one of the 1.4.2 nightly tarballs and see if that makes the issue better?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/nightly/v1.4/">http://www.open-mpi.org/nightly/v1.4/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 29, 2010, at 7:47 PM, Shaun Jackman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On an IA64 platform, MPI_Init never returns. I fired up GDB and it seems
</span><br>
<span class="quotelev2">&gt; &gt; that ompi_free_list_grow never returns. My test program does nothing but
</span><br>
<span class="quotelev2">&gt; &gt; call MPI_Init. Here's the backtrace:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x2000000000075620 in ompi_free_list_grow () from /home/aubjtl/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x2000000000078e50 in ompi_rb_tree_init () from /home/aubjtl/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x2000000000160840 in mca_mpool_base_tree_init () from /home/aubjtl/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x200000000015dac0 in mca_mpool_base_open () from /home/aubjtl/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x20000000000bfd30 in ompi_mpi_init () from /home/aubjtl/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x200000000010efb0 in PMPI_Init () from /home/aubjtl/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x4000000000000b70 in main ()
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any suggestion how I can trouble shoot?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun --version
</span><br>
<span class="quotelev2">&gt; &gt; mpirun (Open MPI) 1.4.1
</span><br>
<span class="quotelev2">&gt; &gt; $ ./config.guess
</span><br>
<span class="quotelev2">&gt; &gt; ia64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Shaun
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12481.php">Jeff Squyres: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<li><strong>Previous message:</strong> <a href="12479.php">Gus Correa: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>In reply to:</strong> <a href="12471.php">Jeff Squyres: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12481.php">Jeff Squyres: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<li><strong>Reply:</strong> <a href="12481.php">Jeff Squyres: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
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
