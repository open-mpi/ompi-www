<?
$subject_val = "Re: [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 18 04:48:27 2013" -->
<!-- isoreceived="20131118094827" -->
<!-- sent="Mon, 18 Nov 2013 02:48:22 -0700" -->
<!-- isosent="20131118094822" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..." -->
<!-- id="5289E266.1070504_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CEAF9950.32110%solibakk_at_himolde.no" -->
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
<strong>Subject:</strong> Re: [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card...<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-18 04:48:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0922.php">Ashley Reid: "Re: [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
<li><strong>Previous message:</strong> <a href="0920.php">Solibakke Per Bjarte: "[hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
<li><strong>In reply to:</strong> <a href="0920.php">Solibakke Per Bjarte: "[hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0922.php">Ashley Reid: "Re: [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 18/11/2013 02:14, Solibakke Per Bjarte a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I recently got access to a very interesting and powerful machine: Dell
</span><br>
<span class="quotelev1">&gt; 8 core + GPU Quadro K5000 (96 cores).
</span><br>
<span class="quotelev1">&gt; A total of 1536 cores in the original machine configuration.
</span><br>
<p>Hello
<br>
<p>GPU cores are not real cores so I am not sure your count makes sense :)
<br>
<p><span class="quotelev1">&gt; I installed first HWLOC 1.7 version and I also installed the newly
</span><br>
<span class="quotelev1">&gt; released beta 1.8. The final installation lines report PCI (linux) CUDA.
</span><br>
<span class="quotelev1">&gt; However, the commands:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lstopo ---whole-system and lstopo ---whole-io
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; report only the 8 CPU-cores. No reference to PCI-Bridges, eth0, seas
</span><br>
<span class="quotelev1">&gt; +++ and the GPUs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the installation of the machine the problem or is my 
</span><br>
<span class="quotelev1">&gt; ./configure ---prefix=/usr/local/hwloc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; missing some vital elements?
</span><br>
<p>What kind of Linux distribution and what kernel version is this?
<br>
<p>Please run &quot;hwloc-gather-topology --io myname&quot; (from hwloc 1.8) and send
<br>
the corresponding myname.tar.bz2 that it will create.
<br>
Note that this command may be a bit slow. Also the generated tar.bz2 may
<br>
be big, so feel free to send it to me only since it may well be rejected
<br>
by the mailing list.
<br>
<p>Brice
<br>
<p><p><span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0921/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0922.php">Ashley Reid: "Re: [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
<li><strong>Previous message:</strong> <a href="0920.php">Solibakke Per Bjarte: "[hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
<li><strong>In reply to:</strong> <a href="0920.php">Solibakke Per Bjarte: "[hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0922.php">Ashley Reid: "Re: [hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
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
