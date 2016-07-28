<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3:";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 13:58:23 2009" -->
<!-- isoreceived="20090224185823" -->
<!-- sent="Tue, 24 Feb 2009 13:58:17 -0500" -->
<!-- isosent="20090224185817" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3:" -->
<!-- id="84D24AD9-DF08-45EB-B079-A4C1698DFF2E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49A3C12B.7020201_at_mpip-mainz.mpg.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 13:58:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8190.php">Vittorio: "[OMPI users] 3.5 seconds before application launches"</a>
<li><strong>Previous message:</strong> <a href="8188.php">Larry Adelberg: "[OMPI users] New User question"</a>
<li><strong>In reply to:</strong> <a href="8174.php">Olaf Lenz: "Re: [OMPI users] OpenMPI 1.3:"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2009, at 4:43 AM, Olaf Lenz wrote:
<br>
<p><span class="quotelev2">&gt;&gt; We've talked about similar errors before; I thought that the issue  
</span><br>
<span class="quotelev2">&gt;&gt; was caused by the Python front-end calling dlopen() to manually  
</span><br>
<span class="quotelev2">&gt;&gt; open the libmpi.so library.  Is that the cause in your scenario?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not really. We have written a shared library _espresso.so, which is  
</span><br>
<span class="quotelev1">&gt; a Python module that is loaded by Python, which in turn dynamically  
</span><br>
<span class="quotelev1">&gt; loads libmpi.so - but only on the C++ level. Python itself never  
</span><br>
<span class="quotelev1">&gt; sees libmpi.so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, note that it needs to load libmpi.so with RTLD_GLOBAL.  For  
</span><br>
<span class="quotelev2">&gt;&gt; example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is not really under my control, as the library is opened by  
</span><br>
<span class="quotelev1">&gt; Python.
</span><br>
<p>As your later post mentioned, there's another topic going on about  
<br>
exactly this issue right now.  I sent a lengthy reply which I think  
<br>
explains the issues:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2009/02/8186.php">http://www.open-mpi.org/community/lists/users/2009/02/8186.php</a>
<br>
<p><span class="quotelev3">&gt;&gt;&gt; the problem disappears. Note also, that the same program works  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using OpenMPI 1.2.x (tested 1.2.6 and 1.2.9).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I still wonder, why everything worked fine in 1.2.x, while in  
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.3 it doesn't. Has anything changed between these versions  
</span><br>
<span class="quotelev1">&gt; that could influence the behaviour?
</span><br>
<p>Yes; we upgraded our version of Libtool (and libltdl) to the 2.x  
<br>
series (specifically: Open MPI 1.2.x uses Libtool 1.5.something  
<br>
whereas Open MPI v1.3.x uses Libtool 2.something).  This is an  
<br>
instance of a change in policy in one of these core tools has ripple  
<br>
effects on lots and lots of other software...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8190.php">Vittorio: "[OMPI users] 3.5 seconds before application launches"</a>
<li><strong>Previous message:</strong> <a href="8188.php">Larry Adelberg: "[OMPI users] New User question"</a>
<li><strong>In reply to:</strong> <a href="8174.php">Olaf Lenz: "Re: [OMPI users] OpenMPI 1.3:"</a>
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
