<?
$subject_val = "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 02:10:42 2015" -->
<!-- isoreceived="20151124071042" -->
<!-- sent="Mon, 23 Nov 2015 23:10:35 -0800" -->
<!-- isosent="20151124071035" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu" -->
<!-- id="7B9679FF-B87C-4722-AF6A-0271BC513927_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2854D2F87CDF6541B1DAB26B3E1EA12B1E953C8148_at_HHIW3MXMBXVS3.HHI.co.kr" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-24 02:10:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28102.php">KIM GEON HONG: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Previous message:</strong> <a href="28100.php">KIM GEON HONG: "[OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>In reply to:</strong> <a href="28100.php">KIM GEON HONG: "[OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28102.php">KIM GEON HONG: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Reply:</strong> <a href="28102.php">KIM GEON HONG: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you please tell us what version of OpenMPI you are using, and the cmd line you used to execute the job?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Nov 23, 2015, at 11:05 PM, &#234;&#185;&#128;&#234;&#177;&#180;&#237;&#153;&#141;(KIM GEON HONG) &lt;geonhong.kim_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I tried to run a parallel computation (OpenFOAM) using Open MPI on a HPC connected with infiniband.
</span><br>
<span class="quotelev1">&gt; When I ran a job using mpirun over a couple of nodes (20 cpus per node), the computation was not accelerated as I expected.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; For example, I ran the job over 40 cpus on 2 nodes, and I checked cpu usages and processes via top command.
</span><br>
<span class="quotelev1">&gt; I expected 20 processes would be running on each node but I found that only 19 processes were running and a cpu was in idle while others were used.
</span><br>
<span class="quotelev1">&gt; Following is a capture of top result.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; As you can see, Cpu1 is in idle and there are only 19 simpleFoam processes!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;image002.png&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have no idea why this is happened.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Sometimes, a cpu is in idle while 20 processes are running but, in that case two processes running with 50% of cpu usage.
</span><br>
<span class="quotelev1">&gt; That is, those two different processes are assigned to the same cpu.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Please refer to the attached file for required information of the cluster and its environment.
</span><br>
<span class="quotelev1">&gt; The output of &#226;&#128;&#156;ulimit &#226;&#128;&#147;l&#226;&#128;&#156; command on both nodes is &#226;&#128;&#156;unlimited&#226;&#128;&#157;.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Additional information for OpenFabrics-based network is as following:
</span><br>
<span class="quotelev1">&gt; 1.     OpenFabrics version : MLNX_OFED_LINUX-2.4.1.0.0
</span><br>
<span class="quotelev1">&gt; 2.     Linux/kernel info: RHEL6.5 2.6.32-431.el6.x86_64
</span><br>
<span class="quotelev1">&gt; - Linux distro/version : Red hat Enterprise Linux Server release 6.5 (Santiago)
</span><br>
<span class="quotelev1">&gt; - Kernel version : 2.6.32-431.el6.x86_64
</span><br>
<span class="quotelev1">&gt; 3.     Subnet manager : infiniband B class
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Geon-Hong Kim.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -----------------------------------
</span><br>
<span class="quotelev1">&gt; &lt;image001.png&gt;
</span><br>
<span class="quotelev1">&gt; Geon-Hong Kim
</span><br>
<span class="quotelev1">&gt; Engineer, Ph.D.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Performance Evaluation Research Department
</span><br>
<span class="quotelev1">&gt; Hyundai Maritime Research Institute
</span><br>
<span class="quotelev1">&gt; Hyundai Heavy Industries Co., Ltd.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Office +82-52-203-8053
</span><br>
<span class="quotelev1">&gt; Fax +82-52-250-9675
</span><br>
<span class="quotelev1">&gt; Mobile +82-10-3084-1357
</span><br>
<span class="quotelev1">&gt; -----------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;system_info.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28100.php">http://www.open-mpi.org/community/lists/users/2015/11/28100.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/11/28100.php">http://www.open-mpi.org/community/lists/users/2015/11/28100.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28101/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28102.php">KIM GEON HONG: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Previous message:</strong> <a href="28100.php">KIM GEON HONG: "[OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>In reply to:</strong> <a href="28100.php">KIM GEON HONG: "[OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28102.php">KIM GEON HONG: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Reply:</strong> <a href="28102.php">KIM GEON HONG: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
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
