<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  8 20:31:12 2006" -->
<!-- isoreceived="20060909003112" -->
<!-- sent="Fri, 08 Sep 2006 20:31:07 -0400" -->
<!-- isosent="20060909003107" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Blacs tester failure due to bug in datatype_unpack.c (?)" -->
<!-- id="C127838B.26047%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.61.0609061616380.14858_at_bryan.theochem.ruhr-uni-bochum.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-08 20:31:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1849.php">Jeff Squyres: "Re: [OMPI users] Slackware Package for openmpi 1.1.1 and mpich2 1.0.4p1"</a>
<li><strong>Previous message:</strong> <a href="1847.php">Nuno Sucena Almeida: "[OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="1827.php">Harald Forbert: "[OMPI users] Blacs tester failure due to bug in datatype_unpack.c (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1850.php">흆e Sandgren: "Re: [OMPI users] Blacs tester failure due to bug in	datatype_unpack.c (?)"</a>
<li><strong>Reply:</strong> <a href="1850.php">흆e Sandgren: "Re: [OMPI users] Blacs tester failure due to bug in	datatype_unpack.c (?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Harald -- I filed bug 356 on this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://svn.open-mpi.org/trac/ompi/ticket/356">http://svn.open-mpi.org/trac/ompi/ticket/356</a>
<br>
<p><p>On 9/6/06 10:39 AM, &quot;Harald Forbert&quot;
<br>
&lt;Harald.Forbert_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think I traced a bug found by blacs testers with various versions
</span><br>
<span class="quotelev1">&gt; of openmpi in ompi/datatype/datatype_unpack.c (ompi/datatype/dt_unpack.c
</span><br>
<span class="quotelev1">&gt; in 1.0.x). This might be related to ticket #65. At least after
</span><br>
<span class="quotelev1">&gt; applying the following patch (for 1.1.[01]), the blacs reduce amax seems
</span><br>
<span class="quotelev1">&gt; to work correctly:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.1/ompi/datatype/datatype_unpack.c.orig
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.1/ompi/datatype/datatype_unpack.c
</span><br>
<span class="quotelev1">&gt; @@ -221,6 +221,8 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              length = pConv-&gt;bConverted / pData-&gt;size;  /* already done */
</span><br>
<span class="quotelev1">&gt;              length = pConv-&gt;bConverted - length * pData-&gt;size;  /* still left
</span><br>
<span class="quotelev1">&gt; on the last element */
</span><br>
<span class="quotelev1">&gt; +            length = pData-&gt;size - length;
</span><br>
<span class="quotelev1">&gt; +            if (length &gt; remaining) length = 0;
</span><br>
<span class="quotelev1">&gt;              /* complete the last copy */
</span><br>
<span class="quotelev1">&gt;              if( length != 0 ) {
</span><br>
<span class="quotelev1">&gt;                  OMPI_DDT_SAFEGUARD_POINTER( user_memory, length,
</span><br>
<span class="quotelev1">&gt; pConv-&gt;pBaseBuf,
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1849.php">Jeff Squyres: "Re: [OMPI users] Slackware Package for openmpi 1.1.1 and mpich2 1.0.4p1"</a>
<li><strong>Previous message:</strong> <a href="1847.php">Nuno Sucena Almeida: "[OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="1827.php">Harald Forbert: "[OMPI users] Blacs tester failure due to bug in datatype_unpack.c (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1850.php">흆e Sandgren: "Re: [OMPI users] Blacs tester failure due to bug in	datatype_unpack.c (?)"</a>
<li><strong>Reply:</strong> <a href="1850.php">흆e Sandgren: "Re: [OMPI users] Blacs tester failure due to bug in	datatype_unpack.c (?)"</a>
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
