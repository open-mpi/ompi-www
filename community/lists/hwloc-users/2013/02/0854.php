<?
$subject_val = "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 12:48:35 2013" -->
<!-- isoreceived="20130207174835" -->
<!-- sent="Thu, 07 Feb 2013 09:48:26 -0800" -->
<!-- isosent="20130207174826" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core" -->
<!-- id="5113E8EA.2090704_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130206100352.GB8836_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-07 12:48:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0855.php">Brice Goglin: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
<li><strong>Previous message:</strong> <a href="0853.php">Brice Goglin: "Re: [hwloc-users] How to get the coreid of a process on which it is currently mapped?"</a>
<li><strong>In reply to:</strong> <a href="0851.php">Samuel Thibault: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0855.php">Brice Goglin: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
<li><strong>Reply:</strong> <a href="0855.php">Brice Goglin: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/06/13 02:03, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Eugene Loh, le Wed 06 Feb 2013 07:50:02 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; How about adding a check upon entry to hwloc_solaris_get_sth_cpubind():  if
</span><br>
<span class="quotelev2">&gt;&gt; processor_bind() shows binding, report this and be done.  If not, then
</span><br>
<span class="quotelev2">&gt;&gt; continue on with the lgroup logic that's already in that function.  Yes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If processor_bind() correctly reports an error when only an lgroup
</span><br>
<span class="quotelev1">&gt; binding is done, that should be all fine and welcome, indeed.
</span><br>
<p>Well, no.  It doesn't report an error.  It simply says there is no binding.  I think we're on the same page, though.  The point is 
<br>
not to check on processor_bind error but to check on &quot;no binding&quot;.
<br>
<p>I'm attaching a patch.
<br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0854/patch.diff">patch.diff</a>
</ul>
<!-- attachment="patch.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0855.php">Brice Goglin: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
<li><strong>Previous message:</strong> <a href="0853.php">Brice Goglin: "Re: [hwloc-users] How to get the coreid of a process on which it is currently mapped?"</a>
<li><strong>In reply to:</strong> <a href="0851.php">Samuel Thibault: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0855.php">Brice Goglin: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
<li><strong>Reply:</strong> <a href="0855.php">Brice Goglin: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
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
