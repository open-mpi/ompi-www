<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  8 06:44:32 2006" -->
<!-- isoreceived="20061208114432" -->
<!-- sent="Fri, 8 Dec 2006 06:44:19 -0500" -->
<!-- isosent="20061208114419" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure problem using g77 on OSX 10.4" -->
<!-- id="A32C0401-01CB-4ED2-BED5-06931A8C40DC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3C564BC7-6302-48B4-8D4A-0DD22C608A9A_at_virginia.edu" -->
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
<strong>Date:</strong> 2006-12-08 06:44:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2331.php">Allen Barnett: "[OMPI users] Hang with Mixed Machines"</a>
<li><strong>Previous message:</strong> <a href="2329.php">Jeff Squyres: "Re: [OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>In reply to:</strong> <a href="2319.php">Thomas Spraggins: "[OMPI users] configure problem using g77 on OSX 10.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem appears to be that your g77 compiler is not properly  
<br>
cross-linking against your gcc compiler.  Specifically, the following  
<br>
test failed in configure:
<br>
<p>configure:23709: g77  conftestf.f conftest.o -o conftest
<br>
/usr/bin/ld: Undefined symbols:
<br>
_fprintf$LDBLStub
<br>
collect2: ld returned 1 exit status
<br>
<p>This issue has been discussed a few times on this mailing list:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.google.com/search?q=_fprintf%24LDBLStub+site">http://www.google.com/search?q=_fprintf%24LDBLStub+site</a>% 
<br>
3Awww.open-mpi.org
<br>
<p>I believe that you can solve the issue by adding -lSystemStubs to the  
<br>
LIBS flag when calling configure:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure LIBS=-lSystemStubs
<br>
<p>FWIW, on my MacBook, I use gfortran from hpc.sourceforge.net with the  
<br>
latest Xcode and it works great.  gfortran is much more recent than  
<br>
g77, and I don't need to add an additional -lSystemStubs in the  
<br>
command line anywhere.
<br>
<p><p>On Dec 7, 2006, at 12:18 PM, Thomas Spraggins wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not a lot of description I can provide.  I'm trying to configure  
</span><br>
<span class="quotelev1">&gt; under OSX 10.4, using the g77 fortran compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any hints will be most appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tom Spraggins
</span><br>
<span class="quotelev1">&gt; tas_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.gz&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="2331.php">Allen Barnett: "[OMPI users] Hang with Mixed Machines"</a>
<li><strong>Previous message:</strong> <a href="2329.php">Jeff Squyres: "Re: [OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>In reply to:</strong> <a href="2319.php">Thomas Spraggins: "[OMPI users] configure problem using g77 on OSX 10.4"</a>
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
