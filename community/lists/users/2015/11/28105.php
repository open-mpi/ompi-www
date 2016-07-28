<?
$subject_val = "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 02:59:57 2015" -->
<!-- isoreceived="20151124075957" -->
<!-- sent="Tue, 24 Nov 2015 02:59:52 -0500" -->
<!-- isosent="20151124075952" -->
<!-- name="Aur&#195;&#169;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu" -->
<!-- id="346C9D16-9C79-4E42-907A-96649A15F88B_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="565417B5.9040309_at_rist.or.jp" -->
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
<strong>From:</strong> Aur&#195;&#169;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-24 02:59:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28106.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="28104.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>In reply to:</strong> <a href="28104.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28108.php">Dave Love: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not by default. It can be done with a rankfile, but the observed behavior is normal when launching two mpirun with the same machinefile and all default options. 
<br>
<p>Aur&#195;&#169;lien 
<br>
<pre>
--
Aur&#195;&#169;lien Bouteiller, Ph.D. ~~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a> &lt;<a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>&gt;
&gt; Le 24 nov. 2015 &#195;&#160; 02:54, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; a &#195;&#169;crit :
&gt; 
&gt; are two mpirun supposed to talk to each other in order to avoid binding to the same cpu/socket/... twice ?
&gt; 
&gt; 
&gt; On 11/24/2015 4:46 PM, Aur&#195;&#169;lien Bouteiller wrote:
&gt;&gt; You can use the 'mpirun -report-bindings&#226;&#128;&#153; option to see how your processes have been mapped in your deployment. If you are unhappy with the default, you can play with the -map-by option. 
&gt;&gt; 
&gt;&gt; Aur&#195;&#169;lien
&gt;&gt; --
&gt;&gt; Aur&#195;&#169;lien Bouteiller, Ph.D. ~~  &lt;<a href="https://icl.cs.utk.edu/%7Ebouteill/">https://icl.cs.utk.edu/%7Ebouteill/</a>&gt;<a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a> &lt;<a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>&gt;
&gt;&gt;&gt; Le 24 nov. 2015 &#195;&#160; 02:29, &#234;&#185;&#128;&#234;&#177;&#180;&#237;&#153;&#141;(KIM GEON HONG) &lt;geonhong.kim_at_[hidden] &lt;mailto:geonhong.kim_at_[hidden]&gt;&gt; a &#195;&#169;crit :
&gt;&gt;&gt; 
&gt;&gt;&gt; I use Open MPI 1.8.5.
&gt;&gt;&gt; The command is as following:
&gt;&gt;&gt; $ mpirun &#226;&#128;&#147;np 40 &#226;&#128;&#147;hostfile machines simpleFoam &#226;&#128;&#147;parallel
&gt;&gt;&gt;  
&gt;&gt;&gt; and the host file &#226;&#128;&#156;machines&#226;&#128;&#157; says,
&gt;&gt;&gt; hpcnode127 cpu=20
&gt;&gt;&gt; hpcnode128 cpu=20
&gt;&gt;&gt;  
&gt;&gt;&gt; Another interesting symptom is that,
&gt;&gt;&gt; if I run two mpirun&#226;&#128;&#153;s with &#226;&#128;&#147;np 2 option on a same node, those two mpirun&#226;&#128;&#153;s run on the same cpu&#226;&#128;&#153;s.
&gt;&gt;&gt; As it is shown in the following figure, only two cpu&#226;&#128;&#153;s are working while four simpleFoam processes are running.
&gt;&gt;&gt;  
&gt;&gt;&gt; &lt;image001.png&gt;
&gt;&gt;&gt;  
&gt;&gt;&gt; Thank you.
&gt;&gt;&gt;  
&gt;&gt;&gt; Best regards,
&gt;&gt;&gt; Geon-Hong Kim.
&gt;&gt;&gt;  
&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf Of Ralph Castain
&gt;&gt;&gt; Sent: Tuesday, November 24, 2015 4:11 PM
&gt;&gt;&gt; To: Open MPI Users
&gt;&gt;&gt; Subject: Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu
&gt;&gt;&gt;  
&gt;&gt;&gt; Could you please tell us what version of OpenMPI you are using, and the cmd line you used to execute the job?
&gt;&gt;&gt;  
&gt;&gt;&gt; Thanks
&gt;&gt;&gt; Ralph
&gt;&gt;&gt;  
&gt;&gt;&gt; On Nov 23, 2015, at 11:05 PM, &#234;&#185;&#128; &#234;&#177;&#180;&#237;&#153;&#141;(KIM GEON HONG) &lt;geonhong.kim_at_[hidden] &lt;mailto:geonhong.kim_at_[hidden]&gt;&gt; wrote:
&gt;&gt;&gt;  
&gt;&gt;&gt; Hello,
&gt;&gt;&gt;  
&gt;&gt;&gt; I tried to run a parallel computation (OpenFOAM) using Open MPI on a HPC connected with infiniband.
&gt;&gt;&gt; When I ran a job using mpirun over a couple of nodes (20 cpus per node), the computation was not accelerated as I expected.
&gt;&gt;&gt;  
&gt;&gt;&gt; For example, I ran the job over 40 cpus on 2 nodes, and I checked cpu usages and processes via top command.
&gt;&gt;&gt; I expected 20 processes would be running on each node but I found that only 19 processes were running and a cpu was in idle while others were used.
&gt;&gt;&gt; Following is a capture of top result.
&gt;&gt;&gt;  
&gt;&gt;&gt; As you can see, Cpu1 is in idle and there are only 19 simpleFoam processes!
&gt;&gt;&gt;  
&gt;&gt;&gt; &lt;image002.png&gt;
&gt;&gt;&gt;  
&gt;&gt;&gt; I have no idea why this is happened.
&gt;&gt;&gt;  
&gt;&gt;&gt; Sometimes, a cpu is in idle while 20 processes are running but, in that case two processes running with 50% of cpu usage.
&gt;&gt;&gt; That is, those two different processes are assigned to the same cpu.
&gt;&gt;&gt;  
&gt;&gt;&gt; Please refer to the attached file for required information of the cluster and its environment.
&gt;&gt;&gt; The output of &#226;&#128;&#156;ulimit &#226;&#128;&#147;l&#226;&#128;&#156; command on both nodes is &#226;&#128;&#156;unlimited&#226;&#128;&#157;.
&gt;&gt;&gt;  
&gt;&gt;&gt; Additional information for OpenFabrics-based network is as following:
&gt;&gt;&gt; 1.     OpenFabrics version : MLNX_OFED_LINUX-2.4.1.0.0
&gt;&gt;&gt; 2.     Linux/kernel info: RHEL6.5 2.6.32-431.el6.x86_64
&gt;&gt;&gt; - Linux distro/version : Red hat Enterprise Linux Server release 6.5 (Santiago)
&gt;&gt;&gt; - Kernel version : 2.6.32-431.el6.x86_64
&gt;&gt;&gt; 3.     Subnet manager : infiniband B class
&gt;&gt;&gt;  
&gt;&gt;&gt; Thank you.
&gt;&gt;&gt;  
&gt;&gt;&gt; Best regards,
&gt;&gt;&gt; Geon-Hong Kim.
&gt;&gt;&gt;  
&gt;&gt;&gt; -----------------------------------
&gt;&gt;&gt; &lt;image001.png&gt;
&gt;&gt;&gt; Geon-Hong Kim
&gt;&gt;&gt; Engineer, Ph.D.
&gt;&gt;&gt;  
&gt;&gt;&gt; Performance Evaluation Research Department
&gt;&gt;&gt; Hyundai Maritime Research Institute
&gt;&gt;&gt; Hyundai Heavy Industries Co., Ltd.
&gt;&gt;&gt;  
&gt;&gt;&gt; Office +82-52-203-8053
&gt;&gt;&gt; Fax +82-52-250-9675
&gt;&gt;&gt; Mobile +82-10-3084-1357
&gt;&gt;&gt; -----------------------------------
&gt;&gt;&gt;  
&gt;&gt;&gt; &lt;system_info.tar.bz2&gt;_______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;  &lt;mailto:users_at_[hidden]&gt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;&gt;&gt; Subscription:  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
&gt;&gt;&gt; Link to this post:  &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/11/28100.php">http://www.open-mpi.org/community/lists/users/2015/11/28100.php</a>&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/11/28100.php">http://www.open-mpi.org/community/lists/users/2015/11/28100.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/11/28100.php">http://www.open-mpi.org/community/lists/users/2015/11/28100.php</a>&gt;
&gt;&gt;&gt;  
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;&gt;&gt; Subscription:  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
&gt;&gt;&gt; Link to this post:  &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/11/28102.php">http://www.open-mpi.org/community/lists/users/2015/11/28102.php</a>&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/11/28102.php">http://www.open-mpi.org/community/lists/users/2015/11/28102.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/11/28102.php">http://www.open-mpi.org/community/lists/users/2015/11/28102.php</a>&gt;
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28103.php">http://www.open-mpi.org/community/lists/users/2015/11/28103.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/11/28103.php">http://www.open-mpi.org/community/lists/users/2015/11/28103.php</a>&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28104.php">http://www.open-mpi.org/community/lists/users/2015/11/28104.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28105/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28106.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="28104.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>In reply to:</strong> <a href="28104.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28108.php">Dave Love: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
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
