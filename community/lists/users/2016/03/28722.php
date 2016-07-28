<?
$subject_val = "[OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 05:01:07 2016" -->
<!-- isoreceived="20160317090107" -->
<!-- sent="Thu, 17 Mar 2016 10:00:50 +0100" -->
<!-- isosent="20160317090050" -->
<!-- name="Rainer Koenig" -->
<!-- email="Rainer.Koenig_at_[hidden]" -->
<!-- subject="[OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine" -->
<!-- id="56EA7242.6070309_at_ts.fujitsu.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine<br>
<strong>From:</strong> Rainer Koenig (<em>Rainer.Koenig_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 05:00:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28723.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>Previous message:</strong> <a href="28721.php">dpchoudh .: "[OMPI users] Issue about cm PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28724.php">Ralph Castain: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Reply:</strong> <a href="28724.php">Ralph Castain: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Reply:</strong> <a href="28753.php">Thomas Jahns: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm experiencing a strange problem with running LIGGGHTS on  48 core
<br>
workstation running Ubuntu 14.04.4 LTS.
<br>
<p>If I cold boot the workstation and start one of the examples form
<br>
LIGGGHTS then everything looks fine:
<br>
<p>$ mpirun -np 48 liggghts &lt; in.chute_wear
<br>
<p>launches the example on all 48 cores, htop in a second window shows that
<br>
all cores are occupied and run at nearly 100% workload.
<br>
<p>So far so good. Now I just reboot the workstation and do the exact same
<br>
steps as abovre.
<br>
<p>This time the job just runs on a few cores (16 to 20) and the cores
<br>
don't even run at 100% load.
<br>
<p>So now I'm trying to find out what is wrong. Bad luck is that I can't
<br>
just ask the vendor of the workstation since I'm working for that vendor
<br>
and trying to solve this issue. :-)
<br>
<p>I guess that something that OpenMPI needs is initialized different when
<br>
I do a cold boot or a warm boot. But how can I find out what is wrong?
<br>
<p>Already tried to look for differences in the Ubuntu boot logs, but there
<br>
is nothing different.
<br>
<p>ompi_info --all or even the parsable format  doesn't show any difference
<br>
between cold boot and warm boot.
<br>
<p>Any ideas what could be wrong after the reboot that causes such a behaviour?
<br>
<p>Thanks,
<br>
Rainer
<br>
<pre>
-- 
Dipl.-Inf. (FH) Rainer Koenig
Project Manager Linux Clients
Dept. PDG WPS R&amp;D SW OSE
Fujitsu Technology Solutions
B&#195;&#188;rgermeister-Ullrich-Str. 100
86199 Augsburg
Germany
Telephone: +49-821-804-3321
Telefax:   +49-821-804-2131
Mail:      mailto:Rainer.Koenig_at_[hidden]
Internet         ts.fujtsu.com
Company Details  ts.fujitsu.com/imprint.html
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28723.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>Previous message:</strong> <a href="28721.php">dpchoudh .: "[OMPI users] Issue about cm PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28724.php">Ralph Castain: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Reply:</strong> <a href="28724.php">Ralph Castain: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Reply:</strong> <a href="28753.php">Thomas Jahns: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
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
