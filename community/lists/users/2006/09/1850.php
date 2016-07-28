<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Sep  9 03:44:33 2006" -->
<!-- isoreceived="20060909074433" -->
<!-- sent="Sat, 09 Sep 2006 09:44:09 +0200" -->
<!-- isosent="20060909074409" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Blacs tester failure due to bug in	datatype_unpack.c (?)" -->
<!-- id="1157787849.5983.11.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="C127838B.26047%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-09 03:44:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1851.php">Brock Palen: "[OMPI users] segfault with HPL/OMPI/LAM"</a>
<li><strong>Previous message:</strong> <a href="1849.php">Jeff Squyres: "Re: [OMPI users] Slackware Package for openmpi 1.1.1 and mpich2 1.0.4p1"</a>
<li><strong>In reply to:</strong> <a href="1848.php">Jeff Squyres: "Re: [OMPI users] Blacs tester failure due to bug in datatype_unpack.c (?)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2006-09-08 at 20:31 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Thanks Harald -- I filed bug 356 on this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://svn.open-mpi.org/trac/ompi/ticket/356">http://svn.open-mpi.org/trac/ompi/ticket/356</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9/6/06 10:39 AM, &quot;Harald Forbert&quot;
</span><br>
<span class="quotelev1">&gt; &lt;Harald.Forbert_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think I traced a bug found by blacs testers with various versions
</span><br>
<span class="quotelev2">&gt; &gt; of openmpi in ompi/datatype/datatype_unpack.c (ompi/datatype/dt_unpack.c
</span><br>
<span class="quotelev2">&gt; &gt; in 1.0.x). This might be related to ticket #65. At least after
</span><br>
<span class="quotelev2">&gt; &gt; applying the following patch (for 1.1.[01]), the blacs reduce amax seems
</span><br>
<span class="quotelev2">&gt; &gt; to work correctly:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --- openmpi-1.1/ompi/datatype/datatype_unpack.c.orig
</span><br>
<span class="quotelev2">&gt; &gt; +++ openmpi-1.1/ompi/datatype/datatype_unpack.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -221,6 +221,8 @@
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;              length = pConv-&gt;bConverted / pData-&gt;size;  /* already done */
</span><br>
<span class="quotelev2">&gt; &gt;              length = pConv-&gt;bConverted - length * pData-&gt;size;  /* still left
</span><br>
<span class="quotelev2">&gt; &gt; on the last element */
</span><br>
<span class="quotelev2">&gt; &gt; +            length = pData-&gt;size - length;
</span><br>
<span class="quotelev2">&gt; &gt; +            if (length &gt; remaining) length = 0;
</span><br>
<span class="quotelev2">&gt; &gt;              /* complete the last copy */
</span><br>
<span class="quotelev2">&gt; &gt;              if( length != 0 ) {
</span><br>
<span class="quotelev2">&gt; &gt;                  OMPI_DDT_SAFEGUARD_POINTER( user_memory, length,
</span><br>
<span class="quotelev2">&gt; &gt; pConv-&gt;pBaseBuf,
</span><br>
<p>In the same function at the bottom of the loop, is the
<br>
stack-&gt;disp = user_memory - pConv-&gt;pBaseBuf;
<br>
really the correct thing to do considering the two statements
<br>
user_memory = pConv-&gt;pBaseBuf + initial_displ;
<br>
and in the else part
<br>
user_memory += stack-&gt;disp;
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1851.php">Brock Palen: "[OMPI users] segfault with HPL/OMPI/LAM"</a>
<li><strong>Previous message:</strong> <a href="1849.php">Jeff Squyres: "Re: [OMPI users] Slackware Package for openmpi 1.1.1 and mpich2 1.0.4p1"</a>
<li><strong>In reply to:</strong> <a href="1848.php">Jeff Squyres: "Re: [OMPI users] Blacs tester failure due to bug in datatype_unpack.c (?)"</a>
<!-- nextthread="start" -->
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
