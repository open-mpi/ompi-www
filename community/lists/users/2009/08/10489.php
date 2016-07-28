<?
$subject_val = "[OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 15:43:03 2009" -->
<!-- isoreceived="20090826194303" -->
<!-- sent="Wed, 26 Aug 2009 15:41:16 -0400" -->
<!-- isosent="20090826194116" -->
<!-- name="twurgl_at_[hidden]" -->
<!-- email="twurgl_at_[hidden]" -->
<!-- subject="[OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects" -->
<!-- id="OFF8D68614.6965686C-ON8525761E.0069F9DC-8525761E.006C3300_at_goodyear.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects<br>
<strong>From:</strong> <a href="mailto:twurgl_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Using%20OPENMPI%20configured%20for%20MX,%20GM%20and%20OPENIB%20interconnects"><em>twurgl_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-08-26 15:41:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10490.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>Previous message:</strong> <a href="10488.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10490.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>Reply:</strong> <a href="10490.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I configure openmpi (1.3.3 and previous ones as well) to be able to have an
<br>
executable able to run on any cluster we have.
<br>
<p>I used:   ./configure --with-mx  --with-openib --with-gm ....
<br>
<p>At the end of the day, the same executable does run on any of the clusters.
<br>
<p>The question I have is:
<br>
<p>When, for example, I run on an IB cluster, I get warning messages about not
<br>
finding GM NICS and another transport will be used etc.
<br>
And warnings about mca btl mx components not found etc.  It DOES run the
<br>
IB, but it never says that in the output.
<br>
<p>What I'd like is to not get warnings about what I don't have on the cluster
<br>
in question and instead get a note that says it found the IB.
<br>
<p>Is this already possible?
<br>
<p>Or can I at least suppress the warnings for the not-found interconnects?
<br>
<p>thanks!
<br>
tom
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10490.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>Previous message:</strong> <a href="10488.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10490.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>Reply:</strong> <a href="10490.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
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
