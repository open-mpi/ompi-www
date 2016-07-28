<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 24 22:21:51 2005" -->
<!-- isoreceived="20051025032151" -->
<!-- sent="Mon, 24 Oct 2005 22:21:49 -0500" -->
<!-- isosent="20051025032149" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="MPI_Barrier in Netpipe causes segfault" -->
<!-- id="20051025032149.GB3275_at_kalmia.hozed.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20051024230302.GO30127_at_kalmia.hozed.org" -->
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
<strong>From:</strong> Troy Benjegerdes (<em>hozer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-24 22:21:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0492.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<li><strong>Previous message:</strong> <a href="0490.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0482.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0494.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Reply:</strong> <a href="0494.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Reply:</strong> <a href="0495.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Reply:</strong> <a href="0501.php">Brian Barrett: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Oct 24, 2005 at 06:03:02PM -0500, Troy Benjegerdes wrote:
<br>
<span class="quotelev1">&gt; troy_at_opteron1:/usr/src/netpipe3-dev$ mpirun -np 2 -mca btl_base_exclude
</span><br>
<span class="quotelev1">&gt; openib NPmpi
</span><br>
<span class="quotelev1">&gt; 1: opteron1
</span><br>
<span class="quotelev1">&gt; 0: opteron1
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 1 with PID 352 on node &quot;localhost&quot; exited
</span><br>
<span class="quotelev1">&gt; on signal 11.
</span><br>
<span class="quotelev1">&gt; 1 process killed (possibly by Open MPI)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is debian-amd64 (from 
</span><br>
<span class="quotelev1">&gt; deb <a href="http://mirror.espri.arizona.edu/debian-amd64/debian/">http://mirror.espri.arizona.edu/debian-amd64/debian/</a> etch main )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 24, 2005 at 10:36:29AM -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt; &gt; That's a really weird backtrace - it seems to indicate that the  
</span><br>
<span class="quotelev2">&gt; &gt; datatype engine is improperly calling free().  Can you try running  
</span><br>
<span class="quotelev2">&gt; &gt; without openib (add &quot;-mca btl_base_exclude openib&quot; to the mpirun  
</span><br>
<span class="quotelev2">&gt; &gt; arguments) and see if the problem goes away?  Also, what platform was  
</span><br>
<span class="quotelev2">&gt; &gt; this on?
</span><br>
<p>Okay.. here's another backtrace, this time with no openib.
<br>
<p>0x00002aaaab6fb365 in malloc_usable_size () from /lib/libc.so.6
<br>
(gdb) bt
<br>
#0  0x00002aaaab6fb365 in malloc_usable_size () from /lib/libc.so.6
<br>
#1  0x00002aaaaaecb016 in opal_mem_free_free_hook ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/lib/libopal.so.0
<br>
#2  0x00002aaaaac0c663 in ompi_convertor_cleanup ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/lib/libmpi.so.0
<br>
#3  0x00002aaaaeb41dbe in mca_pml_ob1_match_completion_cache ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/lib/openmpi/mca_pml_ob1.so
<br>
#4  0x00002aaaaf179c7b in mca_btl_sm_component_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/lib/openmpi/mca_btl_sm.so
<br>
#5  0x00002aaaaee5eefe in mca_bml_r2_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/lib/openmpi/mca_bml_r2.so
<br>
#6  0x00002aaaaeb3dd4e in mca_pml_ob1_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/lib/openmpi/mca_pml_ob1.so
<br>
#7  0x00002aaaaaeb5c4a in opal_progress () from
<br>
/usr/local/lib/libopal.so.0
<br>
#8  0x00002aaaaeb3c265 in mca_pml_ob1_recv ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/lib/openmpi/mca_pml_ob1.so
<br>
#9  0x00002aaaaf6a0936 in mca_coll_basic_barrier_intra_lin ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/lib/openmpi/mca_coll_basic.so
<br>
#10 0x00002aaaaac1f3b8 in PMPI_Barrier () from
<br>
/usr/local/lib/libmpi.so.0
<br>
#11 0x00000000004030a2 in Sync (p=0x10053d900) at src/mpi.c:89
<br>
#12 0x0000000000401f83 in main (argc=2, argv=0x7fffffe30ae8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at src/netpipe.c:463
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0492.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<li><strong>Previous message:</strong> <a href="0490.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0482.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0494.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Reply:</strong> <a href="0494.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Reply:</strong> <a href="0495.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Reply:</strong> <a href="0501.php">Brian Barrett: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
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
