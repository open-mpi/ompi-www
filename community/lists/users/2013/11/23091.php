<?
$subject_val = "Re: [OMPI users] Multi-threading support for openib";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 27 09:59:24 2013" -->
<!-- isoreceived="20131127145924" -->
<!-- sent="Wed, 27 Nov 2013 07:59:19 -0700" -->
<!-- isosent="20131127145919" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-threading support for openib" -->
<!-- id="1D6596B9-4E1A-4D51-A974-AA342AAC2FF5_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAJVMBdpDoBBbejffY+MuCnjqCtZWFJHaqrMYmrdy9s4vySKXpQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multi-threading support for openib<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-27 09:59:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23092.php">Ralph Castain: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<li><strong>Previous message:</strong> <a href="23090.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23089.php">Daniel C&#225;mpora: "[OMPI users] Multi-threading support for openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23102.php">Jeff Hammond: "Re: [OMPI users] Multi-threading support for openib"</a>
<li><strong>Reply:</strong> <a href="23102.php">Jeff Hammond: "Re: [OMPI users] Multi-threading support for openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Openib does not currently support thread multiple - hopefully in 1.9 series
<br>
<p>Sent from my iPhone
<br>
<p><span class="quotelev1">&gt; On Nov 27, 2013, at 7:14 AM, Daniel C&#195;&#161;mpora &lt;dcampora_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've gone through several hours of configuring and testing to get a grasp of the current status for multi-threading support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to use a program with MPI_THREAD_MULTIPLE, over the openib BTL. I'm using openmpi-1.6.5 and SLC6 (rhel6), for what's worth.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Upon configuring my own openmpi library, if I just --enable-mpi-thread-multiple, and execute my program with -mca btl openib, it simply crashes upon openib not supporting MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've only started testing with --enable-opal-multi-threads, just in case it would help me. Configuring with the aforementioned options,
</span><br>
<span class="quotelev1">&gt; ./configure --enable-mpi-thread-multiple --enable-opal-multi-threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; results in a crash whenever executing my program,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 -mca mca_component_path /usr/mpi/gcc/openmpi-1.6.5/lib64/openmpi -mca btl openib -mca btl_openib_warn_default_gid_prefix 0 -mca btl_base_verbose 100 -mca btl_openib_verbose 100 -machinefile machinefile.labs `pwd`/em_bu_app 2&gt;&amp;1 | less
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [lab14:13672] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev1">&gt; [lab14:13672] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Several questions related to these. Does --enable-opal-multi-threads have any impact on the BTL multi-threading support? (If there's more documentation on what this does I'd be glad to read it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any additional configuration tag necessary for enabling opal-multi-threads to work?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers, thanks a lot!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Daniel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Daniel Hugo C&#195;&#161;mpora P&#195;&#169;rez
</span><br>
<span class="quotelev1">&gt; European Organization for Nuclear Research (CERN)
</span><br>
<span class="quotelev1">&gt; PH LBC, LHCb Online Fellow
</span><br>
<span class="quotelev1">&gt; e-mail. dcampora_at_[hidden]
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23091/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23092.php">Ralph Castain: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<li><strong>Previous message:</strong> <a href="23090.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23089.php">Daniel C&#225;mpora: "[OMPI users] Multi-threading support for openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23102.php">Jeff Hammond: "Re: [OMPI users] Multi-threading support for openib"</a>
<li><strong>Reply:</strong> <a href="23102.php">Jeff Hammond: "Re: [OMPI users] Multi-threading support for openib"</a>
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
