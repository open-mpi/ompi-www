<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 18:07:56 2012" -->
<!-- isoreceived="20120313220756" -->
<!-- sent="Tue, 13 Mar 2012 18:07:52 -0400 (EDT)" -->
<!-- isosent="20120313220752" -->
<!-- name="Joshua Baker-LePain" -->
<!-- email="jlb17_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="alpine.LRH.2.02.1203131742500.11946_at_hogwarts.egr.duke.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B9761AB2-D425-4360-884F-7B8782D455BD_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE<br>
<strong>From:</strong> Joshua Baker-LePain (<em>jlb17_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 18:07:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18748.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18746.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18746.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18748.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18748.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 13 Mar 2012 at 9:15pm, Gutierrez, Samuel K wrote
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Any more information surrounding your failures in 1.5.4 are greatly 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm happy to provide, but what exactly are you looking for?  The test 
</span><br>
<span class="quotelev2">&gt;&gt; code I'm running is *very* simple:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you experience this type of failure with 1.4.5, can you send another 
</span><br>
<span class="quotelev1">&gt; backtrace?  We'll go from there.
</span><br>
<p>In an odd way I'm relieved to say that 1.4.5 failed in the same way.  From 
<br>
the SGE log of the run, here's the error message from one of the threads 
<br>
that segfaulted:
<br>
[iq104:05697] *** Process received signal ***
<br>
[iq104:05697] Signal: Segmentation fault (11)
<br>
[iq104:05697] Signal code: Address not mapped (1)
<br>
[iq104:05697] Failing at address: 0x2ad032188e8c
<br>
[iq104:05697] [ 0] /lib64/libpthread.so.0() [0x3e5420f4a0]
<br>
[iq104:05697] [ 1] /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_btl_sm.so(+0x3c4c) [0x2b0099ec4c4c]
<br>
[iq104:05697] [ 2] /netapp/sali/jlb/ompi-1.4.5/lib/libopen-pal.so.0(opal_progress+0x6a) [0x2b00967737ca]
<br>
[iq104:05697] [ 3] /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_grpcomm_bad.so(+0x18d5) [0x2b00975ef8d5]
<br>
[iq104:05697] [ 4] /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0(+0x38a24) [0x2b009628da24]
<br>
[iq104:05697] [ 5] /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0(MPI_Init+0x1b0) [0x2b00962b24f0]
<br>
[iq104:05697] [ 6] /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4-debug(main+0x22) [0x400826]
<br>
[iq104:05697] [ 7] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3e53e1ecdd]
<br>
[iq104:05697] [ 8] /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4-debug() [0x400749]
<br>
[iq104:05697] *** End of error message ***
<br>
<p>And the backtrace of the resulting core file:
<br>
#0  0x00002b0099ec4c4c in mca_btl_sm_component_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_btl_sm.so
<br>
#1  0x00002b00967737ca in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /netapp/sali/jlb/ompi-1.4.5/lib/libopen-pal.so.0
<br>
#2  0x00002b00975ef8d5 in barrier ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_grpcomm_bad.so
<br>
#3  0x00002b009628da24 in ompi_mpi_init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0
<br>
#4  0x00002b00962b24f0 in PMPI_Init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0
<br>
#5  0x0000000000400826 in main (argc=1, argv=0x7fff9fe113f8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpihello-long.c:11
<br>
<p><span class="quotelev1">&gt; Another question.  How reproducible is this on your system?
</span><br>
<p>In my testing today, it's been 100% reproducible.
<br>
<p><pre>
-- 
Joshua Baker-LePain
QB3 Shared Cluster Sysadmin
UCSF
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18748.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18746.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18746.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18748.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18748.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
