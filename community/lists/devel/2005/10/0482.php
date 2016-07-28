<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 24 18:03:09 2005" -->
<!-- isoreceived="20051024230309" -->
<!-- sent="Mon, 24 Oct 2005 18:03:02 -0500" -->
<!-- isosent="20051024230302" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="Re:  Segfaults on startup? (ORTE_ERROR_LOG)" -->
<!-- id="20051024230302.GO30127_at_kalmia.hozed.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FC6AAE00-5DDF-412D-82A6-314B7EEFB02B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-10-24 18:03:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0483.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Previous message:</strong> <a href="0481.php">Jeff Squyres: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0479.php">Brian Barrett: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0491.php">Troy Benjegerdes: "MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Reply:</strong> <a href="0491.php">Troy Benjegerdes: "MPI_Barrier in Netpipe causes segfault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
troy_at_opteron1:/usr/src/netpipe3-dev$ mpirun -np 2 -mca btl_base_exclude
<br>
openib NPmpi
<br>
1: opteron1
<br>
0: opteron1
<br>
mpirun noticed that job rank 1 with PID 352 on node &quot;localhost&quot; exited
<br>
on signal 11.
<br>
1 process killed (possibly by Open MPI)
<br>
<p>This is debian-amd64 (from 
<br>
deb <a href="http://mirror.espri.arizona.edu/debian-amd64/debian/">http://mirror.espri.arizona.edu/debian-amd64/debian/</a> etch main )
<br>
<p>On Mon, Oct 24, 2005 at 10:36:29AM -0500, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; That's a really weird backtrace - it seems to indicate that the  
</span><br>
<span class="quotelev1">&gt; datatype engine is improperly calling free().  Can you try running  
</span><br>
<span class="quotelev1">&gt; without openib (add &quot;-mca btl_base_exclude openib&quot; to the mpirun  
</span><br>
<span class="quotelev1">&gt; arguments) and see if the problem goes away?  Also, what platform was  
</span><br>
<span class="quotelev1">&gt; this on?
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
<span class="quotelev1">&gt; On Oct 21, 2005, at 6:37 PM, Troy Benjegerdes wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Oct 21, 2005 at 06:26:32PM -0500, Troy Benjegerdes wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Fri, Oct 21, 2005 at 04:12:05PM -0500, Andrew Friedley wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I just committed a fix to the trunk to fix your original segfault  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; down
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in opal_show_help() - this is the same problem Ken posted. This fix
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; should make it into the v1.0 branch eventually.  Even so, you are  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; going
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to run into the real problem you were handling - this fix is just  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; proper error handling/output.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The error below looks like a word size mismatch - one thing is  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; compiled
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 64bit, the other is compiled 32bit.  Make sure everything is  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; compiled
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; either 32bit or 64bit.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Another note.. I think I may have had some problems because I  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; built with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 'make -j16'.. has anyone else tried parallel make builds?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have a working mpirun now.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Now I'm back to having NetPIPE segfault when I run it..
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And here's a backtrace:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 0x00002aaaab6fb365 in malloc_usable_size () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00002aaaab6fb365 in malloc_usable_size () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00002aaaaaecb016 in opal_mem_free_free_hook ()
</span><br>
<span class="quotelev2">&gt; &gt;    from /usr/local/lib/libopal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00002aaaaac0c663 in ompi_convertor_cleanup ()
</span><br>
<span class="quotelev2">&gt; &gt;    from /usr/local/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00002aaaaeb41dbe in mca_pml_ob1_match_completion_cache ()
</span><br>
<span class="quotelev2">&gt; &gt;    from /usr/local/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x00002aaaaf179c7b in mca_btl_sm_component_progress ()
</span><br>
<span class="quotelev2">&gt; &gt;    from /usr/local/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00002aaaaee5eefe in mca_bml_r2_progress ()
</span><br>
<span class="quotelev2">&gt; &gt;    from /usr/local/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x00002aaaaeb3dd4e in mca_pml_ob1_progress ()
</span><br>
<span class="quotelev2">&gt; &gt;    from /usr/local/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x00002aaaaaeb5c4a in opal_progress () from
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/lib/libopal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x00002aaaaeb3c265 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev2">&gt; &gt;    from /usr/local/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt; &gt; #9  0x00002aaaaf6a0936 in mca_coll_basic_barrier_intra_lin ()
</span><br>
<span class="quotelev2">&gt; &gt;    from /usr/local/lib/openmpi/mca_coll_basic.so
</span><br>
<span class="quotelev2">&gt; &gt; #10 0x00002aaaaac1f3b8 in PMPI_Barrier () from
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---#11
</span><br>
<span class="quotelev2">&gt; &gt; 0x0000000000403016 inSync ()
</span><br>
<span class="quotelev2">&gt; &gt; #12 0x0000000000401ef8 in main ()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><pre>
-- 
--------------------------------------------------------------------------
Troy Benjegerdes                'da hozer'                hozer_at_[hidden]  
Somone asked me why I work on this free (<a href="http://www.fsf.org/philosophy/">http://www.fsf.org/philosophy/</a>)
software stuff and not get a real job. Charles Shultz had the best answer:
&quot;Why do musicians compose symphonies and poets write poems? They do it
because life wouldn't have any meaning for them if they didn't. That's why
I draw cartoons. It's my life.&quot; -- Charles Shultz
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0483.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Previous message:</strong> <a href="0481.php">Jeff Squyres: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0479.php">Brian Barrett: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0491.php">Troy Benjegerdes: "MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Reply:</strong> <a href="0491.php">Troy Benjegerdes: "MPI_Barrier in Netpipe causes segfault"</a>
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
