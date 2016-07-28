<?
$subject_val = "Re: [hwloc-users] Regarding the Dell 8 core machine with GPUs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 18 06:25:04 2013" -->
<!-- isoreceived="20131118112504" -->
<!-- sent="Mon, 18 Nov 2013 04:24:59 -0700" -->
<!-- isosent="20131118112459" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Regarding the Dell 8 core machine with GPUs" -->
<!-- id="5289F90B.9000504_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CEAFB16F.3218D%solibakk_at_himolde.no" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Regarding the Dell 8 core machine with GPUs<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-18 06:24:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0925.php">Ashley Reid: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<li><strong>Previous message:</strong> <a href="0923.php">Brice Goglin: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(readding the list to CC).
<br>
<p>OK, good to know it actually works.
<br>
v1.7.2 doesn't get any PCI device (and therefore no CUDA devices)
<br>
because you don't have PCI libraries/headers installed (see
<br>
&quot;Installation&quot; in <a href="http://www.open-mpi.org/projects/hwloc/doc/v1.8rc1/">http://www.open-mpi.org/projects/hwloc/doc/v1.8rc1/</a> ).
<br>
v1.8 has a new Linux-specific way to discover PCI devices, that's why it
<br>
works there.
<br>
<p>Note that --whole-system isn't relevant here (it's only about showing
<br>
processors/cores that have been reserved by the administrator).
<br>
--whole-io isn't strictly needed either (GPUs are always shown by
<br>
default in lstopo).
<br>
<p>cpuinfo.txt doesn't contain the kernel version (&quot;uname -a&quot; would be more
<br>
useful) but I don't need this information anymore anyway.
<br>
<p>Looks like I am ready to release the final hwloc v1.8 now :)
<br>
<p>Brice
<br>
<p><p><p>Le 18/11/2013 04:17, Solibakke Per Bjarte a &#233;crit :
<br>
<span class="quotelev1">&gt; Dear Brice Goglin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, there must have been a version problem on my machine from 1.7.2
</span><br>
<span class="quotelev1">&gt; to 1.8rc1. The lstopo &#151;whole-system now report the bridges and the
</span><br>
<span class="quotelev1">&gt; CoProc L#2 &#147;cuda0&#148; + pci&#180;s +++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the answers for your questions and the attached bz2-file (if
</span><br>
<span class="quotelev1">&gt; you are interested)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First question is UBUNTU 12.04 with CUDA-5.5 installed.
</span><br>
<span class="quotelev1">&gt; Open-MPI-1.7.3 for parallell processing and hwloc for the mpirun-command.
</span><br>
<span class="quotelev1">&gt; Kernel: cpu_info.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The hwloc version 1.8rc1 &#150; version and &#147;&#151;io&#148; worked well.
</span><br>
<span class="quotelev1">&gt; The lstopo &#151;whole &#150;io solibakke did also work well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bz2-file is attached (68K)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will now &#147;&#151;use-hwthread-cpus&quot; in the mpirun-command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; PBSolibakke
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dr.econ Per Bjarte Solibakke
</span><br>
<span class="quotelev1">&gt; Professor
</span><br>
<span class="quotelev1">&gt; per.b.solibakke_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cell phone: 004790035606
</span><br>
<span class="quotelev1">&gt; Phone: 004771214238
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Brice Goglin &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Date: Monday 18 November 2013 11:14
</span><br>
<span class="quotelev1">&gt; To: Per B Solibakke &lt;per.b.solibakke_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:per.b.solibakke_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: Regarding the Dell 8 core machine with GPUs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --io is only in hwloc v1.8, did you use this one?
</span><br>
<span class="quotelev1">&gt; I can't do anything with the tarball unless you pass this option.
</span><br>
<span class="quotelev1">&gt; Also you forgot to reply to the other questions :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 18/11/2013 03:12, Solibakke Per Bjarte a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Dear Brice Goglin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The &#147;&#151;io&#148; -option did not work. I therefore produced the command
</span><br>
<span class="quotelev2">&gt;&gt; without the &#147;&#151;io&#148; - option.
</span><br>
<span class="quotelev2">&gt;&gt; It is attached to this e-mail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (the file size is 13K)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; PBSolibakke
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dr.econ Per Bjarte Solibakke
</span><br>
<span class="quotelev2">&gt;&gt; Professor
</span><br>
<span class="quotelev2">&gt;&gt; per.b.solibakke_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cell phone: 004790035606
</span><br>
<span class="quotelev2">&gt;&gt; Phone: 004771214238
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0924/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0925.php">Ashley Reid: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
<li><strong>Previous message:</strong> <a href="0923.php">Brice Goglin: "Re: [hwloc-users] windows PCI locality (was; DELL 8 core machine + Quadro K5000 GPU Card...)"</a>
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
