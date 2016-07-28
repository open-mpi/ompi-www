<?
$subject_val = "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 02:31:44 2015" -->
<!-- isoreceived="20151124073144" -->
<!-- sent="Tue, 24 Nov 2015 16:29:07 +0900" -->
<!-- isosent="20151124072907" -->
<!-- name="KIM GEON HONG" -->
<!-- email="geonhong.kim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu" -->
<!-- id="2854D2F87CDF6541B1DAB26B3E1EA12B1E953C81E5_at_HHIW3MXMBXVS3.HHI.co.kr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="7B9679FF-B87C-4722-AF6A-0271BC513927_at_open-mpi.org" -->
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
<strong>From:</strong> KIM GEON HONG (<em>geonhong.kim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-24 02:29:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28103.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Previous message:</strong> <a href="28101.php">Ralph Castain: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>In reply to:</strong> <a href="28101.php">Ralph Castain: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28103.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Reply:</strong> <a href="28103.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Reply:</strong> <a href="28108.php">Dave Love: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I use Open MPI 1.8.5.
<br>
The command is as following:
<br>
$ mpirun &#226;&#128;&#147;np 40 &#226;&#128;&#147;hostfile machines simpleFoam &#226;&#128;&#147;parallel
<br>

<br>
and the host file &#226;&#128;&#156;machines&#226;&#128;&#157; says,
<br>
hpcnode127 cpu=20
<br>
hpcnode128 cpu=20
<br>

<br>
Another interesting symptom is that,
<br>
if I run two mpirun&#226;&#128;&#153;s with &#226;&#128;&#147;np 2 option on a same node, those two mpirun&#226;&#128;&#153;s run on the same cpu&#226;&#128;&#153;s.
<br>
As it is shown in the following figure, only two cpu&#226;&#128;&#153;s are working while four simpleFoam processes are running.
<br>

<br>
[cid:image001.png_at_01D126D5.3DA13680]
<br>

<br>
Thank you.
<br>

<br>
Best regards,
<br>
Geon-Hong Kim.
<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Tuesday, November 24, 2015 4:11 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu
<br>

<br>
Could you please tell us what version of OpenMPI you are using, and the cmd line you used to execute the job?
<br>

<br>
Thanks
<br>
Ralph
<br>

<br>
On Nov 23, 2015, at 11:05 PM, &#234;&#185;&#128;&#234;&#177;&#180;&#237;&#153;&#141;(KIM GEON HONG) &lt;geonhong.kim_at_[hidden]&lt;mailto:geonhong.kim_at_[hidden]&gt;&gt; wrote:
<br>

<br>
Hello,
<br>

<br>
I tried to run a parallel computation (OpenFOAM) using Open MPI on a HPC connected with infiniband.
<br>
When I ran a job using mpirun over a couple of nodes (20 cpus per node), the computation was not accelerated as I expected.
<br>

<br>
For example, I ran the job over 40 cpus on 2 nodes, and I checked cpu usages and processes via top command.
<br>
I expected 20 processes would be running on each node but I found that only 19 processes were running and a cpu was in idle while others were used.
<br>
Following is a capture of top result.
<br>

<br>
As you can see, Cpu1 is in idle and there are only 19 simpleFoam processes!
<br>

<br>
&lt;image002.png&gt;
<br>

<br>
I have no idea why this is happened.
<br>

<br>
Sometimes, a cpu is in idle while 20 processes are running but, in that case two processes running with 50% of cpu usage.
<br>
That is, those two different processes are assigned to the same cpu.
<br>

<br>
Please refer to the attached file for required information of the cluster and its environment.
<br>
The output of &#226;&#128;&#156;ulimit &#226;&#128;&#147;l&#226;&#128;&#156; command on both nodes is &#226;&#128;&#156;unlimited&#226;&#128;&#157;.
<br>

<br>
Additional information for OpenFabrics-based network is as following:
<br>
1.     OpenFabrics version : MLNX_OFED_LINUX-2.4.1.0.0
<br>
2.     Linux/kernel info: RHEL6.5 2.6.32-431.el6.x86_64
<br>
- Linux distro/version : Red hat Enterprise Linux Server release 6.5 (Santiago)
<br>
- Kernel version : 2.6.32-431.el6.x86_64
<br>
3.     Subnet manager : infiniband B class
<br>

<br>
Thank you.
<br>

<br>
Best regards,
<br>
Geon-Hong Kim.
<br>

<br>
-----------------------------------
<br>
&lt;image001.png&gt;
<br>
Geon-Hong Kim
<br>
Engineer, Ph.D.
<br>

<br>
Performance Evaluation Research Department
<br>
Hyundai Maritime Research Institute
<br>
Hyundai Heavy Industries Co., Ltd.
<br>

<br>
Office +82-52-203-8053
<br>
Fax +82-52-250-9675
<br>
Mobile +82-10-3084-1357
<br>
-----------------------------------
<br>

<br>
&lt;system_info.tar.bz2&gt;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28100.php">http://www.open-mpi.org/community/lists/users/2015/11/28100.php</a>
<br>

<br>
<p>
<p>
<br><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28102/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-28102/image001.png" alt="image001.png
">
<!-- attachment="image001.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28103.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Previous message:</strong> <a href="28101.php">Ralph Castain: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>In reply to:</strong> <a href="28101.php">Ralph Castain: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28103.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Reply:</strong> <a href="28103.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Reply:</strong> <a href="28108.php">Dave Love: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
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
