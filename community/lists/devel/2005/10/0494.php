<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 25 08:51:09 2005" -->
<!-- isoreceived="20051025135109" -->
<!-- sent="Tue, 25 Oct 2005 08:51:07 -0500" -->
<!-- isosent="20051025135107" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  MPI_Barrier in Netpipe causes segfault" -->
<!-- id="435E384B.3060402_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20051025032149.GB3275_at_kalmia.hozed.org" -->
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
<strong>Date:</strong> 2005-10-25 08:51:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0495.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Previous message:</strong> <a href="0493.php">Ralf Wildenhues: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0491.php">Troy Benjegerdes: "MPI_Barrier in Netpipe causes segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0495.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm assuming that this is a production version of NP, right?  (i.e., not 
<br>
a development version)
<br>
<p>Can you run the MPI processes through valgrind to see where the error 
<br>
really occurs?  This corefile only shows the final results, not the 
<br>
actual cause.
<br>
<p><p>Troy Benjegerdes wrote:
<br>
<span class="quotelev1">&gt; On Mon, Oct 24, 2005 at 06:03:02PM -0500, Troy Benjegerdes wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;troy_at_opteron1:/usr/src/netpipe3-dev$ mpirun -np 2 -mca btl_base_exclude
</span><br>
<span class="quotelev2">&gt;&gt;openib NPmpi
</span><br>
<span class="quotelev2">&gt;&gt;1: opteron1
</span><br>
<span class="quotelev2">&gt;&gt;0: opteron1
</span><br>
<span class="quotelev2">&gt;&gt;mpirun noticed that job rank 1 with PID 352 on node &quot;localhost&quot; exited
</span><br>
<span class="quotelev2">&gt;&gt;on signal 11.
</span><br>
<span class="quotelev2">&gt;&gt;1 process killed (possibly by Open MPI)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;This is debian-amd64 (from 
</span><br>
<span class="quotelev2">&gt;&gt;deb <a href="http://mirror.espri.arizona.edu/debian-amd64/debian/">http://mirror.espri.arizona.edu/debian-amd64/debian/</a> etch main )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Mon, Oct 24, 2005 at 10:36:29AM -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;That's a really weird backtrace - it seems to indicate that the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;datatype engine is improperly calling free().  Can you try running  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;without openib (add &quot;-mca btl_base_exclude openib&quot; to the mpirun  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;arguments) and see if the problem goes away?  Also, what platform was  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;this on?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Okay.. here's another backtrace, this time with no openib.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0x00002aaaab6fb365 in malloc_usable_size () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00002aaaab6fb365 in malloc_usable_size () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00002aaaaaecb016 in opal_mem_free_free_hook ()
</span><br>
<span class="quotelev1">&gt;    from /usr/local/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x00002aaaaac0c663 in ompi_convertor_cleanup ()
</span><br>
<span class="quotelev1">&gt;    from /usr/local/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00002aaaaeb41dbe in mca_pml_ob1_match_completion_cache ()
</span><br>
<span class="quotelev1">&gt;    from /usr/local/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #4  0x00002aaaaf179c7b in mca_btl_sm_component_progress ()
</span><br>
<span class="quotelev1">&gt;    from /usr/local/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #5  0x00002aaaaee5eefe in mca_bml_r2_progress ()
</span><br>
<span class="quotelev1">&gt;    from /usr/local/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #6  0x00002aaaaeb3dd4e in mca_pml_ob1_progress ()
</span><br>
<span class="quotelev1">&gt;    from /usr/local/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #7  0x00002aaaaaeb5c4a in opal_progress () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #8  0x00002aaaaeb3c265 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev1">&gt;    from /usr/local/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #9  0x00002aaaaf6a0936 in mca_coll_basic_barrier_intra_lin ()
</span><br>
<span class="quotelev1">&gt;    from /usr/local/lib/openmpi/mca_coll_basic.so
</span><br>
<span class="quotelev1">&gt; #10 0x00002aaaaac1f3b8 in PMPI_Barrier () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #11 0x00000000004030a2 in Sync (p=0x10053d900) at src/mpi.c:89
</span><br>
<span class="quotelev1">&gt; #12 0x0000000000401f83 in main (argc=2, argv=0x7fffffe30ae8)
</span><br>
<span class="quotelev1">&gt;     at src/netpipe.c:463
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="0495.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Previous message:</strong> <a href="0493.php">Ralf Wildenhues: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0491.php">Troy Benjegerdes: "MPI_Barrier in Netpipe causes segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0495.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
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
