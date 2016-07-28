<?
$subject_val = "[OMPI users] multipath support for infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 11:45:35 2010" -->
<!-- isoreceived="20100921154535" -->
<!-- sent="Tue, 21 Sep 2010 17:45:25 +0200" -->
<!-- isosent="20100921154525" -->
<!-- name="Jens Domke" -->
<!-- email="jens.domke_at_[hidden]" -->
<!-- subject="[OMPI users] multipath support for infiniband" -->
<!-- id="4C98D315.5000109_at_zih.tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] multipath support for infiniband<br>
<strong>From:</strong> Jens Domke (<em>jens.domke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-21 11:45:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14260.php">Ethan Deneault: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Previous message:</strong> <a href="14258.php">Gus Correa: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14269.php">Jeff Squyres: "Re: [OMPI users] multipath support for infiniband"</a>
<li><strong>Reply:</strong> <a href="14269.php">Jeff Squyres: "Re: [OMPI users] multipath support for infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>the InfiniBand architecture has a LMC feature to assign mutiple virtual 
<br>
LIDs to one port and so provides multiple paths between two ports. Is 
<br>
there a methode in openmpi to enable message-striping over these paths 
<br>
to increase bandwidth or avoid congestions?
<br>
(I don't mean the multirail feature, to split traffic across two ports 
<br>
of one Hca)
<br>
The only function I have found, was to enable automatic path migration 
<br>
over lmc, but this is only for failover, if I remember rightly.
<br>
<p>Regards,
<br>
Jens
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14260.php">Ethan Deneault: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Previous message:</strong> <a href="14258.php">Gus Correa: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14269.php">Jeff Squyres: "Re: [OMPI users] multipath support for infiniband"</a>
<li><strong>Reply:</strong> <a href="14269.php">Jeff Squyres: "Re: [OMPI users] multipath support for infiniband"</a>
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
