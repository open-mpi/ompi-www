<?
$subject_val = "Re: [OMPI users] GM + OpenMPI bug ...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 20 10:44:54 2010" -->
<!-- isoreceived="20100520144454" -->
<!-- sent="Thu, 20 May 2010 10:29:27 -0400" -->
<!-- isosent="20100520142927" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] GM + OpenMPI bug ..." -->
<!-- id="4BF54747.8040900_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BF5427A.5090906_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] GM + OpenMPI bug ...<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-20 10:29:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13108.php">Prentice Bisbal: "Re: [OMPI users] Segmentation fault at program end with 2+ processes"</a>
<li><strong>Previous message:</strong> <a href="13106.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Maybe in reply to:</strong> <a href="13044.php">Jos&#233; Ignacio Aliaga Estell&#233;s: "[OMPI users] GM + OpenMPI bug ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13118.php">José Ignacio Aliaga Estellés: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>Reply:</strong> <a href="13118.php">José Ignacio Aliaga Estellés: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jose,
<br>
<p>On 5/12/2010 10:57 PM, Jos? Ignacio Aliaga Estell?s wrote:
<br>
<span class="quotelev1">&gt; I think that I have found a bug on the implementation of GM collectives
</span><br>
<span class="quotelev1">&gt; routines included in OpenMPI. The version of the GM software is 2.0.30
</span><br>
<span class="quotelev1">&gt; for the PCI64 cards.
</span><br>
<p><span class="quotelev1">&gt; I obtain the same problems when I use the 1.4.1 or the 1.4.2 version.
</span><br>
<span class="quotelev1">&gt; Could you help me? Thanks.
</span><br>
<p>We have been running the test you provided on 8 nodes for 4 hours and 
<br>
haven't seen any errors. The setup used GM 2.0.30 and openmpi 1.4.2 on 
<br>
PCI-X cards (M3F-PCIXD-2 aka 'D' cards). We do not have PCI64 NICs 
<br>
anymore, and no machines with a PCI 64/66 slot.
<br>
<p>One-bit errors are rarely a software problem, they are usually linked to 
<br>
hardware corruption. Old PCI has a simple parity check but most 
<br>
machines/BIOS of this era ignored reported errors. You may want to check 
<br>
the lspci output on your machines and see if SERR or PERR is set. You 
<br>
can also try to reset each NIC in its PCI slot, or use a different slot 
<br>
if available.
<br>
<p>Hope it helps.
<br>
<p>Patrick
<br>
<pre>
-- 
Patrick Geoffray
Myricom, Inc.
<a href="http://www.myri.com">http://www.myri.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13108.php">Prentice Bisbal: "Re: [OMPI users] Segmentation fault at program end with 2+ processes"</a>
<li><strong>Previous message:</strong> <a href="13106.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Maybe in reply to:</strong> <a href="13044.php">Jos&#233; Ignacio Aliaga Estell&#233;s: "[OMPI users] GM + OpenMPI bug ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13118.php">José Ignacio Aliaga Estellés: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>Reply:</strong> <a href="13118.php">José Ignacio Aliaga Estellés: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
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
