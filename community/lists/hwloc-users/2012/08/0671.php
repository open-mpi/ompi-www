<?
$subject_val = "Re: [hwloc-users] lstopo and GPus";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 08:21:45 2012" -->
<!-- isoreceived="20120828122145" -->
<!-- sent="Tue, 28 Aug 2012 14:21:37 +0200" -->
<!-- isosent="20120828122137" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] lstopo and GPus" -->
<!-- id="503CB7D1.9080903_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUW+Wy0Awh6BfRoW+DtW6dXw3xB2dQbJXuOG12qcc4YRKg_at_mail.gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-28 08:21:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0672.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Previous message:</strong> <a href="0670.php">Gabriele Fatigati: "[hwloc-users] lstopo and GPus"</a>
<li><strong>In reply to:</strong> <a href="0670.php">Gabriele Fatigati: "[hwloc-users] lstopo and GPus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0672.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
For now, you have to look at PCI ids. NVIDIA GPUs have &quot;10de:xxxx&quot; as
<br>
vendor/device ids, that's what is shown in your boxes on the right.
<br>
We should have better GPU support in the future. Right now, we only use
<br>
what Linux knows, and it knows pretty much nothing about NVIDIA GPUs
<br>
because of the closed-source driver :/
<br>
Brice
<br>
<p><p><p>Le 28/08/2012 14:18, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; Dear hwloc user,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using hwloc 1.5. I would to see how GPUs are connected with the
</span><br>
<span class="quotelev1">&gt; processor socket using lstopo command. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I attach the figure. The system has two GPUs, but I don't understand
</span><br>
<span class="quotelev1">&gt; how to find that information from PCI boxes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPC specialist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it &lt;<a href="http://www.cineca.it">http://www.cineca.it</a>&gt;                    Tel:   +39 051
</span><br>
<span class="quotelev1">&gt; 6171722 &lt;tel:%2B39%20051%206171722&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it &lt;<a href="http://cineca.it">http://cineca.it</a>&gt;          
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0671/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0672.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Previous message:</strong> <a href="0670.php">Gabriele Fatigati: "[hwloc-users] lstopo and GPus"</a>
<li><strong>In reply to:</strong> <a href="0670.php">Gabriele Fatigati: "[hwloc-users] lstopo and GPus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0672.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
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
