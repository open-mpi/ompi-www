<?
$subject_val = "Re: [hwloc-devel] PUs not located under cores";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 24 12:28:23 2010" -->
<!-- isoreceived="20100624162823" -->
<!-- sent="Thu, 24 Jun 2010 18:28:18 +0200" -->
<!-- isosent="20100624162818" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PUs not located under cores" -->
<!-- id="20100624162818.GS5590_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A1917696-3273-4787-85BF-6EBB80104423_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PUs not located under cores<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-24 12:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1087.php">Samuel Thibault: "Re: [hwloc-devel] PUs not located under cores"</a>
<li><strong>Previous message:</strong> <a href="1085.php">Jeff Squyres: "[hwloc-devel] PUs not located under cores"</a>
<li><strong>In reply to:</strong> <a href="1085.php">Jeff Squyres: "[hwloc-devel] PUs not located under cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1087.php">Samuel Thibault: "Re: [hwloc-devel] PUs not located under cores"</a>
<li><strong>Reply:</strong> <a href="1087.php">Samuel Thibault: "Re: [hwloc-devel] PUs not located under cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Thu 24 Jun 2010 12:02:48 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; Is that right?  I.e., is it proper that hwloc can return just a pile of PUs under a numa node with no core as an umbrella?
</span><br>
<p>Yes, that happens when the kernel doesn't know where cores are.  In that
<br>
case you thus can't know whether the proc is hyperthreaded or not.
<br>
<p><span class="quotelev1">&gt; It might be worth adding a section in hwloc.doxy describing stuff like this (yes, I'm volunteering to write it :-) )
</span><br>
<p>Please do.
<br>
<p><span class="quotelev1">&gt;  depending on the type of machine you're running on.
</span><br>
<p>It also depends on the OS and kernel version for instance. Not all
<br>
information is available, the only you can bet on is PUs under a system
<br>
object. At worse there is just one because the OS didn't even say how
<br>
many there are.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1087.php">Samuel Thibault: "Re: [hwloc-devel] PUs not located under cores"</a>
<li><strong>Previous message:</strong> <a href="1085.php">Jeff Squyres: "[hwloc-devel] PUs not located under cores"</a>
<li><strong>In reply to:</strong> <a href="1085.php">Jeff Squyres: "[hwloc-devel] PUs not located under cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1087.php">Samuel Thibault: "Re: [hwloc-devel] PUs not located under cores"</a>
<li><strong>Reply:</strong> <a href="1087.php">Samuel Thibault: "Re: [hwloc-devel] PUs not located under cores"</a>
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
