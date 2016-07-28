<?
$subject_val = "Re: [OMPI users] GM + OpenMPI bug ...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 21 14:12:36 2010" -->
<!-- isoreceived="20100521181236" -->
<!-- sent="Fri, 21 May 2010 13:57:14 -0400" -->
<!-- isosent="20100521175714" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] GM + OpenMPI bug ..." -->
<!-- id="4BF6C97A.7050104_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DBC2BB8A-AF70-4A21-8DBB-A5D01918934C_at_icc.uji.es" -->
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
<strong>Date:</strong> 2010-05-21 13:57:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13127.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Previous message:</strong> <a href="13125.php">Reuti: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>In reply to:</strong> <a href="13118.php">Jos&#233; Ignacio Aliaga Estell&#233;s: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13188.php">José Ignacio Aliaga Estellés: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>Reply:</strong> <a href="13188.php">José Ignacio Aliaga Estellés: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jose,
<br>
<p>On 5/21/2010 6:54 AM, Jos&#233; Ignacio Aliaga Estell&#233;s wrote:
<br>
<span class="quotelev1">&gt; We have used the lspci -vvxxx and we have obtained:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bi00: 04:01.0 Ethernet controller: Intel Corporation 82544EI Gigabit
</span><br>
<span class="quotelev1">&gt; Ethernet Controller (Copper) (rev 02)
</span><br>
<p>This is the output for the Intel GigE NIC, you should look at the one 
<br>
for the Myricom NIC and the PCI bridge above it (lspci -t to see the tree).
<br>
<p><span class="quotelev1">&gt; bi00: Status: Cap+ 66MHz+ UDF- FastB2B- ParErr- DEVSEL=medium &gt;TAbort-
</span><br>
<span class="quotelev1">&gt; &lt;TAbort- &lt;MAbort- &gt;SERR- &lt;PERR-
</span><br>
<p>PERR- status means no parity detected when receiving data. Looking at 
<br>
the PERR status of the PCI bridge on the other side will show if there 
<br>
was in corruption on that bus.
<br>
<p>As a first step, you can see if you can reproduce errors with a simple 
<br>
test involving a single node at a time. You can run &quot;gm_allsize 
<br>
--verify&quot; on each machine: it will send packets to itself (loopback in 
<br>
the switch) and check for corruption. If you don't see errors after a 
<br>
while, that node is probably clean. If you see errors, you can look 
<br>
deeper at lspci output to see if it's a PCI problem. If you are using a 
<br>
riser card, you can try without.
<br>
<p>I am not sure if openMPI has an option to enable debug checksum, but it 
<br>
would also be useful to see if it detects anything.
<br>
<p><span class="quotelev1">&gt; Additionally, if you know any software tool or methodology to check the
</span><br>
<span class="quotelev1">&gt; hardware/software, please, could you send us how to do it?
</span><br>
<p>You may want to look at the FAQ on GM troubleshooting:
<br>
<a href="http://www.myri.com/cgi-bin/fom.pl?file=425">http://www.myri.com/cgi-bin/fom.pl?file=425</a>
<br>
<p>Additionally, you can send email to help_at_[hidden] to open a ticket.
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13127.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Previous message:</strong> <a href="13125.php">Reuti: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>In reply to:</strong> <a href="13118.php">Jos&#233; Ignacio Aliaga Estell&#233;s: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13188.php">José Ignacio Aliaga Estellés: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>Reply:</strong> <a href="13188.php">José Ignacio Aliaga Estellés: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
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
