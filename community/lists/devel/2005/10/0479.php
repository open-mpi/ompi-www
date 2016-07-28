<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 24 10:36:31 2005" -->
<!-- isoreceived="20051024153631" -->
<!-- sent="Mon, 24 Oct 2005 10:36:29 -0500" -->
<!-- isosent="20051024153629" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  Segfaults on startup? (ORTE_ERROR_LOG)" -->
<!-- id="FC6AAE00-5DDF-412D-82A6-314B7EEFB02B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051021233739.GH30127_at_kalmia.hozed.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-24 10:36:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0480.php">Brian Barrett: "Re:  ppc64 linux bustage?"</a>
<li><strong>Previous message:</strong> <a href="0478.php">Brian Barrett: "Re:  Dumb SVN question (was RE: Segfaults on startup?)"</a>
<li><strong>In reply to:</strong> <a href="0473.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0482.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0482.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's a really weird backtrace - it seems to indicate that the  
<br>
datatype engine is improperly calling free().  Can you try running  
<br>
without openib (add &quot;-mca btl_base_exclude openib&quot; to the mpirun  
<br>
arguments) and see if the problem goes away?  Also, what platform was  
<br>
this on?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p>On Oct 21, 2005, at 6:37 PM, Troy Benjegerdes wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Oct 21, 2005 at 06:26:32PM -0500, Troy Benjegerdes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Oct 21, 2005 at 04:12:05PM -0500, Andrew Friedley wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just committed a fix to the trunk to fix your original segfault  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; down
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in opal_show_help() - this is the same problem Ken posted. This fix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should make it into the v1.0 branch eventually.  Even so, you are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; going
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to run into the real problem you were handling - this fix is just  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proper error handling/output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error below looks like a word size mismatch - one thing is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 64bit, the other is compiled 32bit.  Make sure everything is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; either 32bit or 64bit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another note.. I think I may have had some problems because I  
</span><br>
<span class="quotelev2">&gt;&gt; built with
</span><br>
<span class="quotelev2">&gt;&gt; 'make -j16'.. has anyone else tried parallel make builds?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a working mpirun now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now I'm back to having NetPIPE segfault when I run it..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And here's a backtrace:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0x00002aaaab6fb365 in malloc_usable_size () from /lib/libc.so.6
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
<span class="quotelev1">&gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---#11
</span><br>
<span class="quotelev1">&gt; 0x0000000000403016 inSync ()
</span><br>
<span class="quotelev1">&gt; #12 0x0000000000401ef8 in main ()
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0480.php">Brian Barrett: "Re:  ppc64 linux bustage?"</a>
<li><strong>Previous message:</strong> <a href="0478.php">Brian Barrett: "Re:  Dumb SVN question (was RE: Segfaults on startup?)"</a>
<li><strong>In reply to:</strong> <a href="0473.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0482.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0482.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
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
