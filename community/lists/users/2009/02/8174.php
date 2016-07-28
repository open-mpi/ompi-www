<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3:";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 04:43:15 2009" -->
<!-- isoreceived="20090224094315" -->
<!-- sent="Tue, 24 Feb 2009 10:43:07 +0100" -->
<!-- isosent="20090224094307" -->
<!-- name="Olaf Lenz" -->
<!-- email="lenzo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3:" -->
<!-- id="49A3C12B.7020201_at_mpip-mainz.mpg.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7583DEEA-FD41-46DB-8452-E9E301895C8D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3:<br>
<strong>From:</strong> Olaf Lenz (<em>lenzo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 04:43:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8175.php">Thomas Exner: "[OMPI users] Gamess with openmpi"</a>
<li><strong>Previous message:</strong> <a href="8173.php">Olaf Lenz: "Re: [OMPI users] Bug reporting [was: OpenMPI 1.3]"</a>
<li><strong>In reply to:</strong> <a href="8158.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8181.php">Olaf Lenz: "Re: [OMPI users] OpenMPI 1.3:"</a>
<li><strong>Reply:</strong> <a href="8181.php">Olaf Lenz: "Re: [OMPI users] OpenMPI 1.3:"</a>
<li><strong>Reply:</strong> <a href="8189.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3:"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>And now for the actual mailing.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; We've talked about similar errors before; I thought that the issue was 
</span><br>
<span class="quotelev1">&gt; caused by the Python front-end calling dlopen() to manually open the 
</span><br>
<span class="quotelev1">&gt; libmpi.so library.  Is that the cause in your scenario?
</span><br>
<p>Not really. We have written a shared library _espresso.so, which is a 
<br>
Python module that is loaded by Python, which in turn dynamically loads 
<br>
libmpi.so - but only on the C++ level. Python itself never sees libmpi.so.
<br>
<p><span class="quotelev1">&gt; If so, note that it needs to load libmpi.so with RTLD_GLOBAL.  For example:
</span><br>
<p>That is not really under my control, as the library is opened by Python.
<br>
<p><span class="quotelev2">&gt;&gt; the problem disappears. Note also, that the same program works when I'm
</span><br>
<span class="quotelev2">&gt;&gt; using OpenMPI 1.2.x (tested 1.2.6 and 1.2.9). 
</span><br>
<p>I still wonder, why everything worked fine in 1.2.x, while in OpenMPI 
<br>
1.3 it doesn't. Has anything changed between these versions that could 
<br>
influence the behaviour?
<br>
<p>Olaf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8175.php">Thomas Exner: "[OMPI users] Gamess with openmpi"</a>
<li><strong>Previous message:</strong> <a href="8173.php">Olaf Lenz: "Re: [OMPI users] Bug reporting [was: OpenMPI 1.3]"</a>
<li><strong>In reply to:</strong> <a href="8158.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8181.php">Olaf Lenz: "Re: [OMPI users] OpenMPI 1.3:"</a>
<li><strong>Reply:</strong> <a href="8181.php">Olaf Lenz: "Re: [OMPI users] OpenMPI 1.3:"</a>
<li><strong>Reply:</strong> <a href="8189.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3:"</a>
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
