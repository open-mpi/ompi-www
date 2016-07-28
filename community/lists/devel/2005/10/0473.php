<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 18:37:41 2005" -->
<!-- isoreceived="20051021233741" -->
<!-- sent="Fri, 21 Oct 2005 18:37:39 -0500" -->
<!-- isosent="20051021233739" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="Re:  Segfaults on startup? (ORTE_ERROR_LOG)" -->
<!-- id="20051021233739.GH30127_at_kalmia.hozed.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20051021232632.GG30127_at_kalmia.hozed.org" -->
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
<strong>Date:</strong> 2005-10-21 18:37:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0474.php">Troy Benjegerdes: "Dumb SVN question (was RE: Segfaults on startup?)"</a>
<li><strong>Previous message:</strong> <a href="0472.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0472.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0479.php">Brian Barrett: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0479.php">Brian Barrett: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Oct 21, 2005 at 06:26:32PM -0500, Troy Benjegerdes wrote:
<br>
<span class="quotelev1">&gt; On Fri, Oct 21, 2005 at 04:12:05PM -0500, Andrew Friedley wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I just committed a fix to the trunk to fix your original segfault down 
</span><br>
<span class="quotelev2">&gt; &gt; in opal_show_help() - this is the same problem Ken posted. This fix 
</span><br>
<span class="quotelev2">&gt; &gt; should make it into the v1.0 branch eventually.  Even so, you are going 
</span><br>
<span class="quotelev2">&gt; &gt; to run into the real problem you were handling - this fix is just for 
</span><br>
<span class="quotelev2">&gt; &gt; proper error handling/output.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The error below looks like a word size mismatch - one thing is compiled 
</span><br>
<span class="quotelev2">&gt; &gt; 64bit, the other is compiled 32bit.  Make sure everything is compiled 
</span><br>
<span class="quotelev2">&gt; &gt; either 32bit or 64bit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another note.. I think I may have had some problems because I built with
</span><br>
<span class="quotelev1">&gt; 'make -j16'.. has anyone else tried parallel make builds?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a working mpirun now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I'm back to having NetPIPE segfault when I run it..
</span><br>
<p>And here's a backtrace:
<br>
<p>0x00002aaaab6fb365 in malloc_usable_size () from /lib/libc.so.6
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
---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---#11
<br>
0x0000000000403016 inSync ()
<br>
#12 0x0000000000401ef8 in main ()
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0474.php">Troy Benjegerdes: "Dumb SVN question (was RE: Segfaults on startup?)"</a>
<li><strong>Previous message:</strong> <a href="0472.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0472.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0479.php">Brian Barrett: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0479.php">Brian Barrett: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
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
