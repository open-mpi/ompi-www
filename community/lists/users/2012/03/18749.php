<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 19:06:43 2012" -->
<!-- isoreceived="20120313230643" -->
<!-- sent="Tue, 13 Mar 2012 17:06:36 -0600" -->
<!-- isosent="20120313230636" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="064343FC-DC6A-48BA-878A-2F89F2AA0744_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7F41D80D-5610-4D33-85E0-529599F1FAE3_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 19:06:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18750.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18748.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18748.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18750.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18750.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Out of curiosity: could you send along the mpirun cmd line you are using to launch these jobs? I'm wondering if the SGE integration itself is the problem, and it only shows up in the sm code.
<br>
<p><p>On Mar 13, 2012, at 4:57 PM, Gutierrez, Samuel K wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 13, 2012, at 4:07 PM, Joshua Baker-LePain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 13 Mar 2012 at 9:15pm, Gutierrez, Samuel K wrote
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any more information surrounding your failures in 1.5.4 are greatly appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm happy to provide, but what exactly are you looking for?  The test code I'm running is *very* simple:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you experience this type of failure with 1.4.5, can you send another backtrace?  We'll go from there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fooey.  What compiler are you using to build Open MPI and how are you configuring your build?  Can you also run with a debug build of Open MPI so we can see the line numbers?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In an odd way I'm relieved to say that 1.4.5 failed in the same way.  From the SGE log of the run, here's the error message from one of the threads that segfaulted:
</span><br>
<span class="quotelev2">&gt;&gt; [iq104:05697] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [iq104:05697] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [iq104:05697] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [iq104:05697] Failing at address: 0x2ad032188e8c
</span><br>
<span class="quotelev2">&gt;&gt; [iq104:05697] [ 0] /lib64/libpthread.so.0() [0x3e5420f4a0]
</span><br>
<span class="quotelev2">&gt;&gt; [iq104:05697] [ 1] /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_btl_sm.so(+0x3c4c) [0x2b0099ec4c4c]
</span><br>
<span class="quotelev2">&gt;&gt; [iq104:05697] [ 2] /netapp/sali/jlb/ompi-1.4.5/lib/libopen-pal.so.0(opal_progress+0x6a) [0x2b00967737ca]
</span><br>
<span class="quotelev2">&gt;&gt; [iq104:05697] [ 3] /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_grpcomm_bad.so(+0x18d5) [0x2b00975ef8d5]
</span><br>
<span class="quotelev2">&gt;&gt; [iq104:05697] [ 4] /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0(+0x38a24) [0x2b009628da24]
</span><br>
<span class="quotelev2">&gt;&gt; [iq104:05697] [ 5] /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0(MPI_Init+0x1b0) [0x2b00962b24f0]
</span><br>
<span class="quotelev2">&gt;&gt; [iq104:05697] [ 6] /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4-debug(main+0x22) [0x400826]
</span><br>
<span class="quotelev2">&gt;&gt; [iq104:05697] [ 7] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3e53e1ecdd]
</span><br>
<span class="quotelev2">&gt;&gt; [iq104:05697] [ 8] /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4-debug() [0x400749]
</span><br>
<span class="quotelev2">&gt;&gt; [iq104:05697] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And the backtrace of the resulting core file:
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00002b0099ec4c4c in mca_btl_sm_component_progress ()
</span><br>
<span class="quotelev2">&gt;&gt;  from /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00002b00967737ca in opal_progress ()
</span><br>
<span class="quotelev2">&gt;&gt;  from /netapp/sali/jlb/ompi-1.4.5/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00002b00975ef8d5 in barrier ()
</span><br>
<span class="quotelev2">&gt;&gt;  from /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_grpcomm_bad.so
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00002b009628da24 in ompi_mpi_init ()
</span><br>
<span class="quotelev2">&gt;&gt;  from /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00002b00962b24f0 in PMPI_Init ()
</span><br>
<span class="quotelev2">&gt;&gt;  from /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x0000000000400826 in main (argc=1, argv=0x7fff9fe113f8)
</span><br>
<span class="quotelev2">&gt;&gt;   at mpihello-long.c:11
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another question.  How reproducible is this on your system?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In my testing today, it's been 100% reproducible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's surprising.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sam
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Baker-LePain
</span><br>
<span class="quotelev2">&gt;&gt; QB3 Shared Cluster Sysadmin
</span><br>
<span class="quotelev2">&gt;&gt; UCSF
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18750.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18748.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18748.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18750.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18750.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
