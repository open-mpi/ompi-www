<?
$subject_val = "Re: [OMPI devel] KNEM + user-space hybrid for sm BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 11:34:24 2013" -->
<!-- isoreceived="20130718153424" -->
<!-- sent="Thu, 18 Jul 2013 17:34:21 +0200" -->
<!-- isosent="20130718153421" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] KNEM + user-space hybrid for sm BTL" -->
<!-- id="73CA241B-EDF5-40F1-935F-851335346263_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5A5117ABD18DE547BB3D3FE3D0CB3188389A4A_at_MBX1.rwth-ad.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] KNEM + user-space hybrid for sm BTL<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 11:34:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12654.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12652.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12650.php">Iliev, Hristo: "[OMPI devel] KNEM + user-space hybrid for sm BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12656.php">Aurélien Bouteiller: "Re: [OMPI devel] KNEM + user-space hybrid for sm BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 18, 2013, at 17:12 , &quot;Iliev, Hristo&quot; &lt;Iliev_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Could someone, who is more familiar with the architecture of the sm BTL, comment on the technical feasibility of the following: is it possible to easily extend the BTL (i.e. without having to rewrite it completely from scratch) so as to be able to perform transfers using both KNEM (or other kernel-assisted copying mechanism) for messages over a given size and the normal user-space mechanism for smaller messages with the switch-over point being a user-tunable parameter?
</span><br>
<p>This is already what the SM BTL does. When support for kernel-assisted mechanisms is enabled everything under the eager size is going over &quot;traditional&quot; shared memory (double copy and so on), while larger messages use the single-copy mechanism.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From what I&#146;ve seen, both implementations have something in common, e.g. both use FIFOs to communicate controlling information.
</span><br>
<span class="quotelev1">&gt; The motivation behind this are our efforts to become greener by extracting the best possible out of the box performance on our systems without having to profile each and every user application that runs on them. We&#146;ve already determined that activating KNEM really benefits some collective operations on big shared-memory systems, but the increased latency significantly slows down small message transfers, which also hits the pipelined implementations.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; sm&#146;s code doesn&#146;t seem to be very complex but still I&#146;ve decided to ask first before diving any deeper.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Hristo
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hristo Iliev, PhD &#150; High Performance Computing Team
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23, D 52074 Aachen (Germany)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12653/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12654.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12652.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12650.php">Iliev, Hristo: "[OMPI devel] KNEM + user-space hybrid for sm BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12656.php">Aurélien Bouteiller: "Re: [OMPI devel] KNEM + user-space hybrid for sm BTL"</a>
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
