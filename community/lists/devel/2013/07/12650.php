<?
$subject_val = "[OMPI devel] KNEM + user-space hybrid for sm BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 11:12:37 2013" -->
<!-- isoreceived="20130718151237" -->
<!-- sent="Thu, 18 Jul 2013 15:12:31 +0000" -->
<!-- isosent="20130718151231" -->
<!-- name="Iliev, Hristo" -->
<!-- email="Iliev_at_[hidden]" -->
<!-- subject="[OMPI devel] KNEM + user-space hybrid for sm BTL" -->
<!-- id="5A5117ABD18DE547BB3D3FE3D0CB3188389A4A_at_MBX1.rwth-ad.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] KNEM + user-space hybrid for sm BTL<br>
<strong>From:</strong> Iliev, Hristo (<em>Iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 11:12:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12651.php">David Goodell (dgoodell): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12649.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12653.php">George Bosilca: "Re: [OMPI devel] KNEM + user-space hybrid for sm BTL"</a>
<li><strong>Reply:</strong> <a href="12653.php">George Bosilca: "Re: [OMPI devel] KNEM + user-space hybrid for sm BTL"</a>
<li><strong>Reply:</strong> <a href="12656.php">Aurélien Bouteiller: "Re: [OMPI devel] KNEM + user-space hybrid for sm BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;
<br>
<p>Could someone, who is more familiar with the architecture of the sm BTL,
<br>
comment on the technical feasibility of the following: is it possible to
<br>
easily extend the BTL (i.e. without having to rewrite it completely from
<br>
scratch) so as to be able to perform transfers using both KNEM (or other
<br>
kernel-assisted copying mechanism) for messages over a given size and the
<br>
normal user-space mechanism for smaller messages with the switch-over point
<br>
being a user-tunable parameter?
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt;From what I've seen, both implementations have something in common, e.g.
</span><br>
both use FIFOs to communicate controlling information.
<br>
<p>The motivation behind this are our efforts to become greener by extracting
<br>
the best possible out of the box performance on our systems without having
<br>
to profile each and every user application that runs on them. We've already
<br>
determined that activating KNEM really benefits some collective operations
<br>
on big shared-memory systems, but the increased latency significantly slows
<br>
down small message transfers, which also hits the pipelined implementations.
<br>
<p>&nbsp;
<br>
<p>sm's code doesn't seem to be very complex but still I've decided to ask
<br>
first before diving any deeper.
<br>
<p>&nbsp;
<br>
<p>Kind regards,
<br>
<p>Hristo
<br>
<p><pre>
--
Hristo Iliev, PhD - High Performance Computing Team
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23, D 52074 Aachen (Germany)
 
 
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12650/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12650/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12651.php">David Goodell (dgoodell): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12649.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12653.php">George Bosilca: "Re: [OMPI devel] KNEM + user-space hybrid for sm BTL"</a>
<li><strong>Reply:</strong> <a href="12653.php">George Bosilca: "Re: [OMPI devel] KNEM + user-space hybrid for sm BTL"</a>
<li><strong>Reply:</strong> <a href="12656.php">Aurélien Bouteiller: "Re: [OMPI devel] KNEM + user-space hybrid for sm BTL"</a>
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
