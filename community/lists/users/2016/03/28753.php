<?
$subject_val = "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 18 06:38:55 2016" -->
<!-- isoreceived="20160318103855" -->
<!-- sent="Fri, 18 Mar 2016 11:38:40 +0100" -->
<!-- isosent="20160318103840" -->
<!-- name="Thomas Jahns" -->
<!-- email="jahns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine" -->
<!-- id="56EBDAB0.9030600_at_dkrz.de" -->
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
<strong>From:</strong> Thomas Jahns (<em>jahns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-18 06:38:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28754.php">Ralph Castain: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28752.php">Husen R: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28722.php">Rainer Koenig: "[OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On 03/17/2016 10:00 AM, Rainer Koenig wrote:
<br>
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
<p>does that machine really have 48 cores or 48 cpus, i.e. assuming it's an Intel 
<br>
machine is Hyperthreading active or not?
<br>
<p><span class="quotelev1">&gt; So far so good. Now I just reboot the workstation and do the exact same
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
<p>I might be wrong but you mpirun command does not specify affinity so it's 
<br>
probably not something in OpenMPI and rather an effect of the way your Linux 
<br>
scheduler works.
<br>
<p><span class="quotelev1">&gt; Already tried to look for differences in the Ubuntu boot logs, but there
</span><br>
<span class="quotelev1">&gt; is nothing different.
</span><br>
<p>Did you look into /proc/cpuinfo?
<br>
<p>Regards, Thomas
<br>
<pre>
-- 
Thomas Jahns
HD(CP)^2
Abteilung Anwendungssoftware
Deutsches Klimarechenzentrum GmbH
Bundesstra&#195;&#159;e 45a &#226;&#128;&#162; D-20146 Hamburg &#226;&#128;&#162; Germany
Phone:  +49 40 460094-151
Fax:    +49 40 460094-270
Email:  Thomas Jahns &lt;jahns_at_[hidden]&gt;
URL:    www.dkrz.de
Gesch&#195;&#164;ftsf&#195;&#188;hrer: Prof. Dr. Thomas Ludwig
Sitz der Gesellschaft: Hamburg
Amtsgericht Hamburg HRB 39784

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28753/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28754.php">Ralph Castain: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28752.php">Husen R: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28722.php">Rainer Koenig: "[OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- nextthread="start" -->
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
