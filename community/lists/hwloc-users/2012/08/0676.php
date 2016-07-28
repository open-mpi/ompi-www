<?
$subject_val = "Re: [hwloc-users] lstopo and GPus";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 12:10:03 2012" -->
<!-- isoreceived="20120828161003" -->
<!-- sent="Tue, 28 Aug 2012 18:09:59 +0200" -->
<!-- isosent="20120828160959" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] lstopo and GPus" -->
<!-- id="CAJNPZUUJFHvdxCh4Tu0jU=3w1yu5DB+8mzkFG9eR35B8em2LYw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120828124748.GI28646_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] lstopo and GPus<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-28 12:09:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0677.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Previous message:</strong> <a href="0675.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>In reply to:</strong> <a href="0675.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0677.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Reply:</strong> <a href="0677.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>thanks for the reply.
<br>
<p>How can cuda branch help me? lstopo output of that branch is the same of
<br>
the trunk.
<br>
<p>Another question: the GPU IDs are the same (10de: 06d2). How is it possible?
<br>
<p>Thanks.
<br>
<p>2012/8/28 Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Brice Goglin, le Tue 28 Aug 2012 14:43:53 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ lstopo
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Socket #0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Socket #1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     PCI...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (connected to socket #1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; vs
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ lstopo
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Socket #0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Socket #1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   PCI...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (connected to both sockets)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Fortunately, this won't occur in most cases (including Gabriele's
</span><br>
<span class="quotelev2">&gt; &gt; machines) because there's a NUMAnode object above each socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oops, I actually meant NUMAnode above
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Both the socket and the PCI bus are drawn inside the NUMA box, so
</span><br>
<span class="quotelev2">&gt; &gt; things appear OK in graphics to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed, if the PCI bus was connected to one NUMAnode/socket only, it
</span><br>
<span class="quotelev1">&gt; would be drawn inside, which is not the case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gabriele, assuming you have a dual Xeon X56xx Westmere machine, there
</span><br>
<span class="quotelev2">&gt; &gt; are plenty of such platforms where the GPU is indeed connected to both
</span><br>
<span class="quotelev2">&gt; &gt; sockets. Or it could be a buggy BIOS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed.
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0676/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0677.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Previous message:</strong> <a href="0675.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>In reply to:</strong> <a href="0675.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0677.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Reply:</strong> <a href="0677.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
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
