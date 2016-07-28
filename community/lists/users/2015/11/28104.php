<?
$subject_val = "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 02:54:30 2015" -->
<!-- isoreceived="20151124075430" -->
<!-- sent="Tue, 24 Nov 2015 16:54:29 +0900" -->
<!-- isosent="20151124075429" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu" -->
<!-- id="565417B5.9040309_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4A661E52-E2DA-409A-B794-44F5F6413F87_at_icl.utk.edu" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-24 02:54:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28105.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Previous message:</strong> <a href="28103.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>In reply to:</strong> <a href="28103.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28105.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Reply:</strong> <a href="28105.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
are two mpirun supposed to talk to each other in order to avoid binding 
<br>
to the same cpu/socket/... twice ?
<br>
<p><p>On 11/24/2015 4:46 PM, Aur&#195;&#169;lien Bouteiller wrote:
<br>
<span class="quotelev1">&gt; You can use the 'mpirun -report-bindings&#226;&#128;&#153; option to see how your 
</span><br>
<span class="quotelev1">&gt; processes have been mapped in your deployment. If you are unhappy with 
</span><br>
<span class="quotelev1">&gt; the default, you can play with the -map-by option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aur&#195;&#169;lien
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Aur&#195;&#169;lien Bouteiller, Ph.D. ~~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a> 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://icl.cs.utk.edu/%7Ebouteill/">https://icl.cs.utk.edu/%7Ebouteill/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 24 nov. 2015 &#195;&#160; 02:29, &#234;&#185;&#128;&#234;&#177;&#180;&#237;&#153;&#141;(KIM GEON HONG) 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;geonhong.kim_at_[hidden] &lt;mailto:geonhong.kim_at_[hidden]&gt;&gt; a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use Open MPI 1.8.5.
</span><br>
<span class="quotelev2">&gt;&gt; The command is as following:
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun &#226;&#128;&#147;np 40 &#226;&#128;&#147;hostfile machines simpleFoam &#226;&#128;&#147;parallel
</span><br>
<span class="quotelev2">&gt;&gt; and the host file &#226;&#128;&#156;machines&#226;&#128;&#157; says,
</span><br>
<span class="quotelev2">&gt;&gt; hpcnode127 cpu=20
</span><br>
<span class="quotelev2">&gt;&gt; hpcnode128 cpu=20
</span><br>
<span class="quotelev2">&gt;&gt; Another interesting symptom is that,
</span><br>
<span class="quotelev2">&gt;&gt; if I run two mpirun&#226;&#128;&#153;s with &#226;&#128;&#147;np 2 option on a same node, those two 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun&#226;&#128;&#153;s run on the same cpu&#226;&#128;&#153;s.
</span><br>
<span class="quotelev2">&gt;&gt; As it is shown in the following figure, only two cpu&#226;&#128;&#153;s are working 
</span><br>
<span class="quotelev2">&gt;&gt; while four simpleFoam processes are running.
</span><br>
<span class="quotelev2">&gt;&gt; &lt;image001.png&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Geon-Hong Kim.
</span><br>
<span class="quotelev2">&gt;&gt; *From:*users [mailto:users-bounces_at_[hidden]]*On Behalf Of*Ralph 
</span><br>
<span class="quotelev2">&gt;&gt; Castain
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:*Tuesday, November 24, 2015 4:11 PM
</span><br>
<span class="quotelev2">&gt;&gt; *To:*Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:*Re: [OMPI users] OpenMPI with infiniband, child processes 
</span><br>
<span class="quotelev2">&gt;&gt; of mpirun are missing or overlapped on the same cpu
</span><br>
<span class="quotelev2">&gt;&gt; Could you please tell us what version of OpenMPI you are using, and 
</span><br>
<span class="quotelev2">&gt;&gt; the cmd line you used to execute the job?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Nov 23, 2015, at 11:05 PM,&#234;&#185;&#128; &#234;&#177;&#180;&#237;&#153;&#141;(KIM GEON HONG)
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;geonhong.kim_at_[hidden] &lt;mailto:geonhong.kim_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hello,
</span><br>
<span class="quotelev2">&gt;&gt;     I tried to run a parallel computation (OpenFOAM) using Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;     on a HPC connected with infiniband.
</span><br>
<span class="quotelev2">&gt;&gt;     When I ran a job using mpirun over a couple of nodes (20 cpus per
</span><br>
<span class="quotelev2">&gt;&gt;     node), the computation was not accelerated as I expected.
</span><br>
<span class="quotelev2">&gt;&gt;     For example, I ran the job over 40 cpus on 2 nodes, and I checked
</span><br>
<span class="quotelev2">&gt;&gt;     cpu usages and processes via top command.
</span><br>
<span class="quotelev2">&gt;&gt;     I expected 20 processes would be running on each node but I found
</span><br>
<span class="quotelev2">&gt;&gt;     that only 19 processes were running and a cpu was in idle while
</span><br>
<span class="quotelev2">&gt;&gt;     others were used.
</span><br>
<span class="quotelev2">&gt;&gt;     Following is a capture of top result.
</span><br>
<span class="quotelev2">&gt;&gt;     As you can see, Cpu1 is in idle and there are only 19 simpleFoam
</span><br>
<span class="quotelev2">&gt;&gt;     processes!
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;image002.png&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I have no idea why this is happened.
</span><br>
<span class="quotelev2">&gt;&gt;     Sometimes, a cpu is in idle while 20 processes are running but,
</span><br>
<span class="quotelev2">&gt;&gt;     in that case two processes running with 50% of cpu usage.
</span><br>
<span class="quotelev2">&gt;&gt;     That is, those two different processes are assigned to the same cpu.
</span><br>
<span class="quotelev2">&gt;&gt;     Please refer to the attached file for required information of the
</span><br>
<span class="quotelev2">&gt;&gt;     cluster and its environment.
</span><br>
<span class="quotelev2">&gt;&gt;     The output of&#226;&#128;&#156;ulimit&#226;&#128;&#147;l&#226;&#128;&#156;command on both nodes is&#226;&#128;&#156;unlimited&#226;&#128;&#157;.
</span><br>
<span class="quotelev2">&gt;&gt;     Additional information for OpenFabrics-based network is as following:
</span><br>
<span class="quotelev2">&gt;&gt;     1.OpenFabrics version : MLNX_OFED_LINUX-2.4.1.0.0
</span><br>
<span class="quotelev2">&gt;&gt;     2.Linux/kernel info: RHEL6.5 2.6.32-431.el6.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;     - Linux distro/version : Red hat Enterprise Linux Server release
</span><br>
<span class="quotelev2">&gt;&gt;     6.5 (Santiago)
</span><br>
<span class="quotelev2">&gt;&gt;     - Kernel version : 2.6.32-431.el6.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;     3.Subnet manager : infiniband B class
</span><br>
<span class="quotelev2">&gt;&gt;     Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;     Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;     Geon-Hong Kim.
</span><br>
<span class="quotelev2">&gt;&gt;     *-----------------------------------*
</span><br>
<span class="quotelev2">&gt;&gt;     *&lt;image001.png&gt;*
</span><br>
<span class="quotelev2">&gt;&gt;     *Geon-Hong Kim*
</span><br>
<span class="quotelev2">&gt;&gt;     Engineer, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt;     Performance Evaluation Research Department
</span><br>
<span class="quotelev2">&gt;&gt;     Hyundai Maritime Research Institute
</span><br>
<span class="quotelev2">&gt;&gt;     Hyundai Heavy Industries Co., Ltd.
</span><br>
<span class="quotelev2">&gt;&gt;     Office +82-52-203-8053
</span><br>
<span class="quotelev2">&gt;&gt;     Fax +82-52-250-9675
</span><br>
<span class="quotelev2">&gt;&gt;     Mobile +82-10-3084-1357
</span><br>
<span class="quotelev2">&gt;&gt;     *-----------------------------------*
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;system_info.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this
</span><br>
<span class="quotelev2">&gt;&gt;     post:<a href="http://www.open-mpi.org/community/lists/users/2015/11/28100.php">http://www.open-mpi.org/community/lists/users/2015/11/28100.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this 
</span><br>
<span class="quotelev2">&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/11/28102.php">http://www.open-mpi.org/community/lists/users/2015/11/28102.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28103.php">http://www.open-mpi.org/community/lists/users/2015/11/28103.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28104/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28105.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Previous message:</strong> <a href="28103.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>In reply to:</strong> <a href="28103.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28105.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Reply:</strong> <a href="28105.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
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
