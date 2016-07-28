<?
$subject_val = "Re: [OMPI users] MPI_Init never returns on IA64";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 20:00:20 2010" -->
<!-- isoreceived="20100330000020" -->
<!-- sent="Mon, 29 Mar 2010 20:00:15 -0400" -->
<!-- isosent="20100330000015" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init never returns on IA64" -->
<!-- id="4FC10AB0-66DD-46CE-8A6C-34B316D802A2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1269906440.5311.33.camel_at_sjackman01.phage.bcgsc.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 20:00:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12472.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12470.php">Shaun Jackman: "[OMPI users] MPI_Init never returns on IA64"</a>
<li><strong>In reply to:</strong> <a href="12470.php">Shaun Jackman: "[OMPI users] MPI_Init never returns on IA64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12480.php">Shaun Jackman: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<li><strong>Reply:</strong> <a href="12480.php">Shaun Jackman: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you try one of the 1.4.2 nightly tarballs and see if that makes the issue better?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/v1.4/">http://www.open-mpi.org/nightly/v1.4/</a>
<br>
<p><p>On Mar 29, 2010, at 7:47 PM, Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On an IA64 platform, MPI_Init never returns. I fired up GDB and it seems
</span><br>
<span class="quotelev1">&gt; that ompi_free_list_grow never returns. My test program does nothing but
</span><br>
<span class="quotelev1">&gt; call MPI_Init. Here's the backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x2000000000075620 in ompi_free_list_grow () from /home/aubjtl/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x2000000000078e50 in ompi_rb_tree_init () from /home/aubjtl/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x2000000000160840 in mca_mpool_base_tree_init () from /home/aubjtl/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x200000000015dac0 in mca_mpool_base_open () from /home/aubjtl/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x20000000000bfd30 in ompi_mpi_init () from /home/aubjtl/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #5  0x200000000010efb0 in PMPI_Init () from /home/aubjtl/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x4000000000000b70 in main ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestion how I can trouble shoot?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun --version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.4.1
</span><br>
<span class="quotelev1">&gt; $ ./config.guess
</span><br>
<span class="quotelev1">&gt; ia64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Shaun
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12472.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12470.php">Shaun Jackman: "[OMPI users] MPI_Init never returns on IA64"</a>
<li><strong>In reply to:</strong> <a href="12470.php">Shaun Jackman: "[OMPI users] MPI_Init never returns on IA64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12480.php">Shaun Jackman: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<li><strong>Reply:</strong> <a href="12480.php">Shaun Jackman: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
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
