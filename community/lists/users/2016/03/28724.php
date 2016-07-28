<?
$subject_val = "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 05:40:59 2016" -->
<!-- isoreceived="20160317094059" -->
<!-- sent="Thu, 17 Mar 2016 02:40:53 -0700" -->
<!-- isosent="20160317094053" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine" -->
<!-- id="3017814D-FF3A-4379-9EF2-69D011CBC411_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56EA7242.6070309_at_ts.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 05:40:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28725.php">Gilles Gouaillardet: "Re: [OMPI users] Issue about cm PML"</a>
<li><strong>Previous message:</strong> <a href="28723.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>In reply to:</strong> <a href="28722.php">Rainer Koenig: "[OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28787.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Reply:</strong> <a href="28787.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just some thoughts offhand:
<br>
<p>* what version of OMPI are you using?
<br>
<p>* are you saying that after the warm reboot, all 48 procs are running on a subset of cores?
<br>
<p>* it sounds like some of the cores have been marked as &#226;&#128;&#156;offline&#226;&#128;&#157; for some reason. Make sure you have hwloc installed on the machine, and run &#226;&#128;&#156;lstopo&#226;&#128;&#157; and see if that is the case
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt; On Mar 17, 2016, at 2:00 AM, Rainer Koenig &lt;Rainer.Koenig_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm experiencing a strange problem with running LIGGGHTS on  48 core
</span><br>
<span class="quotelev1">&gt; workstation running Ubuntu 14.04.4 LTS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I cold boot the workstation and start one of the examples form
</span><br>
<span class="quotelev1">&gt; LIGGGHTS then everything looks fine:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 48 liggghts &lt; in.chute_wear
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; launches the example on all 48 cores, htop in a second window shows that
</span><br>
<span class="quotelev1">&gt; all cores are occupied and run at nearly 100% workload.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So far so good. Now I just reboot the workstation and do the exact same
</span><br>
<span class="quotelev1">&gt; steps as abovre.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This time the job just runs on a few cores (16 to 20) and the cores
</span><br>
<span class="quotelev1">&gt; don't even run at 100% load.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So now I'm trying to find out what is wrong. Bad luck is that I can't
</span><br>
<span class="quotelev1">&gt; just ask the vendor of the workstation since I'm working for that vendor
</span><br>
<span class="quotelev1">&gt; and trying to solve this issue. :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess that something that OpenMPI needs is initialized different when
</span><br>
<span class="quotelev1">&gt; I do a cold boot or a warm boot. But how can I find out what is wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Already tried to look for differences in the Ubuntu boot logs, but there
</span><br>
<span class="quotelev1">&gt; is nothing different.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info --all or even the parsable format  doesn't show any difference
</span><br>
<span class="quotelev1">&gt; between cold boot and warm boot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas what could be wrong after the reboot that causes such a behaviour?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. (FH) Rainer Koenig
</span><br>
<span class="quotelev1">&gt; Project Manager Linux Clients
</span><br>
<span class="quotelev1">&gt; Dept. PDG WPS R&amp;D SW OSE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fujitsu Technology Solutions
</span><br>
<span class="quotelev1">&gt; B&#195;&#188;rgermeister-Ullrich-Str. 100
</span><br>
<span class="quotelev1">&gt; 86199 Augsburg
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Telephone: +49-821-804-3321
</span><br>
<span class="quotelev1">&gt; Telefax:   +49-821-804-2131
</span><br>
<span class="quotelev1">&gt; Mail:      mailto:Rainer.Koenig_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Internet         ts.fujtsu.com
</span><br>
<span class="quotelev1">&gt; Company Details  ts.fujitsu.com/imprint.html
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28722.php">http://www.open-mpi.org/community/lists/users/2016/03/28722.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28725.php">Gilles Gouaillardet: "Re: [OMPI users] Issue about cm PML"</a>
<li><strong>Previous message:</strong> <a href="28723.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>In reply to:</strong> <a href="28722.php">Rainer Koenig: "[OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28787.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Reply:</strong> <a href="28787.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
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
