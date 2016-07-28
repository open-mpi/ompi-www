<?
$subject_val = "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 17:07:00 2014" -->
<!-- isoreceived="20140303220700" -->
<!-- sent="Mon, 03 Mar 2014 23:06:57 +0100" -->
<!-- isosent="20140303220657" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5" -->
<!-- id="5314FD01.4090703_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5314FBFE.30600_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 17:06:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23751.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23749.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23749.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23774.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23774.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 03/03/2014 23:02, Gus Correa a &#233;crit :
<br>
<span class="quotelev1">&gt; I rebooted the node and ran hwloc-gather-topology again.
</span><br>
<span class="quotelev1">&gt; This turn it didn't throw any errors on the terminal window,
</span><br>
<span class="quotelev1">&gt; which may be a good sign.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_node14 ~]# hwloc-gather-topology /tmp/`date
</span><br>
<span class="quotelev1">&gt; +&quot;%Y%m%d%H%M&quot;`.$(uname -n)
</span><br>
<span class="quotelev1">&gt; Hierarchy gathered in /tmp/201403031639.node14.tar.bz2 and kept in
</span><br>
<span class="quotelev1">&gt; /tmp/tmp.FM97IQCCKc/201403031639.node14/
</span><br>
<span class="quotelev1">&gt; Expected topology output stored in /tmp/201403031639.node14.output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I attach the diagnostic files.
</span><br>
<span class="quotelev1">&gt; Was the problem fixed with the processor re-seating, or is it still
</span><br>
<span class="quotelev1">&gt; there?
</span><br>
<p>Everything looks good now. Looks like the problem is gone. Something bad
<br>
happened somewhere before you repluged the processor, we'll never know
<br>
exactly what :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23751.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23749.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23749.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23774.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Reply:</strong> <a href="23774.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
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
