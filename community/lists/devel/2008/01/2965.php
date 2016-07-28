<?
$subject_val = "Re: [OMPI devel] vt integration -- still problems on os x";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 11:45:50 2008" -->
<!-- isoreceived="20080111164550" -->
<!-- sent="Fri, 11 Jan 2008 17:45:42 +0100" -->
<!-- isosent="20080111164542" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt integration -- still problems on os x" -->
<!-- id="1200069942.5957.36.camel_at_ricolap" -->
<!-- charset="utf-8" -->
<!-- inreplyto="F92ADF50-1031-4322-A71A-5DA965EC6DB8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vt integration -- still problems on os x<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-11 11:45:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2966.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Previous message:</strong> <a href="2964.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>In reply to:</strong> <a href="2957.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2966.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Reply:</strong> <a href="2966.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I could reproduce the linker problem with the sf.net GCC. Thanks for
<br>
your hint.
<br>
A header include was missing for STL's functional objects. :-(
<br>
<p><p>Matthias
<br>
<p><p>On Do, 2008-01-10 at 13:21 -0500, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 10, 2008, at 10:19 AM, Andreas Kn&#195;&#188;pfer wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; unfortunately, we're unable to reproduce this error. Could you pass  
</span><br>
<span class="quotelev2">&gt; &gt; some more
</span><br>
<span class="quotelev2">&gt; &gt; information about your configure command line? This was done with  
</span><br>
<span class="quotelev2">&gt; &gt; gcc 4.2 on
</span><br>
<span class="quotelev2">&gt; &gt; mac os X, wasn't it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm on Leopard on my MBP with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/Users/jsquyres/bogus --enable-mpi-f90 --without- 
</span><br>
<span class="quotelev1">&gt; threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I might see the problem here -- I just realized/remembered that  
</span><br>
<span class="quotelev1">&gt; I'm using the sf.net GCC install (hpc.sf.net).  If I force /usr/bin/ 
</span><br>
<span class="quotelev1">&gt; gcc (and friends), it seems to work:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/Users/jsquyres/bogus CC=/usr/bin/gcc CXX=/usr/ 
</span><br>
<span class="quotelev1">&gt; bin/g++ --disable-mpi-fortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, the hpc.sf.net OS X compilers are not uncommon (because they  
</span><br>
<span class="quotelev1">&gt; provide fortran compiler support for OS X).  Do you think you'll be  
</span><br>
<span class="quotelev1">&gt; able to test with these compilers?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
--
Matthias Jurenz,
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A106, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-31945, fax +49-351-463-37773
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2965/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2966.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Previous message:</strong> <a href="2964.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>In reply to:</strong> <a href="2957.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2966.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Reply:</strong> <a href="2966.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
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
