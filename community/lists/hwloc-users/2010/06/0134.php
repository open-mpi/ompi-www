<?
$subject_val = "Re: [hwloc-users] Getting a graphics view for a non	graphic	system...";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  6 16:04:05 2010" -->
<!-- isoreceived="20100606200405" -->
<!-- sent="Sun, 06 Jun 2010 22:03:59 +0200" -->
<!-- isosent="20100606200359" -->
<!-- name="Olivier Cessenat" -->
<!-- email="cessenat_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Getting a graphics view for a non	graphic	system..." -->
<!-- id="1275854640.13649.107.camel_at_iliana.magic" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20100606194216.GT5358_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Getting a graphics view for a non	graphic	system...<br>
<strong>From:</strong> Olivier Cessenat (<em>cessenat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-06 16:03:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0135.php">Olivier Cessenat: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<li><strong>Previous message:</strong> <a href="0133.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>In reply to:</strong> <a href="0130.php">Samuel Thibault: "Re: [hwloc-users] Getting a graphics view for a non graphic	system..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0151.php">Jeff Squyres: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
<li><strong>Reply:</strong> <a href="0151.php">Jeff Squyres: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel,
<br>
<p>OK, the answer, to my unclear question is:
<br>
&lt;&lt;
<br>
[cessenat_at_valerie hwloc-1.0.1]# lstopo file.xml
<br>
[cessenat_at_iliana ~]$ hwloc-ls --xml file.xml 
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
comp1 is the computer with no graphics lib, comp2 is the one with the
<br>
libs.
<br>
<p>What you write is clear to computer scientists, but I failed to figure
<br>
out what it meant. Sorry, it is clear now !
<br>
<p>Olivier.
<br>
<p>Le dimanche 06 juin 2010 &#195;&#160; 21:42 +0200, Samuel Thibault a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Olivier Cessenat, le Sun 06 Jun 2010 21:34:49 +0200, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Sure. It does not explain how.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#156;
</span><br>
<span class="quotelev1">&gt; Usage: lt-lstopo [ options ] ... [ filename ]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See lstopo(1) for more details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Supported output file formats: .txt, .fig, .pdf, .ps, .png, .svg, .xml
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#157;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How should we write it instead?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Should I perform on comp1 the no-graphics machine and comp2 the one with
</span><br>
<span class="quotelev2">&gt; &gt; graphics :
</span><br>
<span class="quotelev2">&gt; &gt; $ comp1: hwloc-ls &gt; toto.txt
</span><br>
<span class="quotelev2">&gt; &gt; $ comp2: hwloc-ls toto.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is comp1 and comp2, and what do you want to achieve precisely?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0135.php">Olivier Cessenat: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<li><strong>Previous message:</strong> <a href="0133.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>In reply to:</strong> <a href="0130.php">Samuel Thibault: "Re: [hwloc-users] Getting a graphics view for a non graphic	system..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0151.php">Jeff Squyres: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
<li><strong>Reply:</strong> <a href="0151.php">Jeff Squyres: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
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
