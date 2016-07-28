<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  6 10:39:18 2006" -->
<!-- isoreceived="20060906143918" -->
<!-- sent="Wed, 6 Sep 2006 16:39:16 +0200 (CEST)" -->
<!-- isosent="20060906143916" -->
<!-- name="Harald Forbert" -->
<!-- email="Harald.Forbert_at_[hidden]" -->
<!-- subject="[OMPI users] Blacs tester failure due to bug in datatype_unpack.c (?)" -->
<!-- id="Pine.LNX.4.61.0609061616380.14858_at_bryan.theochem.ruhr-uni-bochum.de" -->
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
<strong>From:</strong> Harald Forbert (<em>Harald.Forbert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-06 10:39:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1828.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="1826.php">Durga Choudhury: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1848.php">Jeff Squyres: "Re: [OMPI users] Blacs tester failure due to bug in datatype_unpack.c (?)"</a>
<li><strong>Reply:</strong> <a href="1848.php">Jeff Squyres: "Re: [OMPI users] Blacs tester failure due to bug in datatype_unpack.c (?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I traced a bug found by blacs testers with various versions
<br>
of openmpi in ompi/datatype/datatype_unpack.c (ompi/datatype/dt_unpack.c 
<br>
in 1.0.x). This might be related to ticket #65. At least after 
<br>
applying the following patch (for 1.1.[01]), the blacs reduce amax seems 
<br>
to work correctly:
<br>
<p>--- openmpi-1.1/ompi/datatype/datatype_unpack.c.orig
<br>
+++ openmpi-1.1/ompi/datatype/datatype_unpack.c
<br>
@@ -221,6 +221,8 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;length = pConv-&gt;bConverted / pData-&gt;size;  /* already done */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;length = pConv-&gt;bConverted - length * pData-&gt;size;  /* still left on the last element */
<br>
+            length = pData-&gt;size - length;
<br>
+            if (length &gt; remaining) length = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* complete the last copy */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( length != 0 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_DDT_SAFEGUARD_POINTER( user_memory, length, pConv-&gt;pBaseBuf,
<br>
<p><p><p>=======================================================================
<br>
Harald Forbert       e-mail: Harald.Forbert_at_[hidden]
<br>
Lehrstuhl fuer Theoretische Chemie          Phone: ++49 (0)234/32-26751
<br>
Ruhr-Universitaet Bochum                    Fax:   ++49 (0)234/32-14045
<br>
Universitaetsstrasse 150
<br>
D-44780 Bochum, Germany
<br>
=======================================================================
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1828.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="1826.php">Durga Choudhury: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1848.php">Jeff Squyres: "Re: [OMPI users] Blacs tester failure due to bug in datatype_unpack.c (?)"</a>
<li><strong>Reply:</strong> <a href="1848.php">Jeff Squyres: "Re: [OMPI users] Blacs tester failure due to bug in datatype_unpack.c (?)"</a>
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
