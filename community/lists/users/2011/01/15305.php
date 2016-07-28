<?
$subject_val = "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 05:28:16 2011" -->
<!-- isoreceived="20110107102816" -->
<!-- sent="Fri, 7 Jan 2011 10:27:33 +0000" -->
<!-- isosent="20110107102733" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance" -->
<!-- id="AANLkTikVNNTTHPZ136yAcC79QQ+XOTLUCOG++1Cs-Hxi_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D262FE2.40004_at_cern.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance<br>
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-07 05:27:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15306.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15304.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>In reply to:</strong> <a href="15288.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15308.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<li><strong>Reply:</strong> <a href="15308.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6 January 2011 21:10, Gilbert Grosdidier &lt;Gilbert.Grosdidier_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;Where's located lstopo command on SuseLinux, please ?
</span><br>
<span class="quotelev1">&gt; And/or hwloc-bind, which seems related to it ?
</span><br>
<p>I was able to get hwloc to install quite easily on SuSE -
<br>
download/configure/make
<br>
Configure it to install to /usr/local/bin
<br>
<p><p>Actually, the topic of hyperthreading is interesting, and we should
<br>
discuss it please.
<br>
Hyperthreading is supposedly implemented better and 'properly' on
<br>
Nehalem - I would be interested to see some genuine
<br>
performance measurements with hyperthreading on/off on your machine Gilbert.
<br>
<p>Also you don;t need to reboot and change BIOS settings - there was a
<br>
rather niofty technique on this list I think,
<br>
where you disable every second CPU in Linux - which has the same
<br>
effect as switching off hyperthreading.
<br>
Maybe you could try it?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15306.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15304.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>In reply to:</strong> <a href="15288.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15308.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<li><strong>Reply:</strong> <a href="15308.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
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
