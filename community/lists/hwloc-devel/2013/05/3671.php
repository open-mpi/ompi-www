<?
$subject_val = "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  3 04:50:59 2013" -->
<!-- isoreceived="20130503085059" -->
<!-- sent="Fri, 3 May 2013 10:50:55 +0200" -->
<!-- isosent="20130503085055" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD" -->
<!-- id="20130503085055.GE6755_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5183409C.70100_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-03 04:50:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3672.php">Guy Streeter: "[hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>Previous message:</strong> <a href="3670.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="3669.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pavan Balaji, le Fri 03 May 2013 06:45:10 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; -Wbad-function-cast'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lstopo-draw.c:437: warning: cast from function call of type 'double' to
</span><br>
<span class="quotelev1">&gt; non-matching type 'unsigned int'
</span><br>
<p>I'm not sure to understand what one is supposed to do here.
<br>
double-&gt;float-&gt;unsigned is less precise than double-&gt;unsigned.  I
<br>
don't know any standard function that would do the double-&gt;unsigned
<br>
conversion, thus simply casting, which should already be doing the job
<br>
exactly how we want, anyway...
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3672.php">Guy Streeter: "[hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>Previous message:</strong> <a href="3670.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="3669.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 Warnings on FreeBSD"</a>
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
