<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 22 11:01:12 2007" -->
<!-- isoreceived="20070822150112" -->
<!-- sent="Wed, 22 Aug 2007 11:01:07 -0400" -->
<!-- isosent="20070822150107" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX" -->
<!-- id="20070822150106.GC22627_at_avicenna.cc.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="151CCF3F-6530-46ED-8C44-FA030A70CA04_at_lanl.gov" -->
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
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-22 11:01:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3909.php">Higor de Padua Vieira Neto: "[OMPI users] Error: error in configure (maybe libtool)"</a>
<li><strong>Previous message:</strong> <a href="3907.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<li><strong>In reply to:</strong> <a href="3907.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Received from Brian Barrett on Wed, Aug 22, 2007 at 10:50:09AM EDT:
<br>
<span class="quotelev1">&gt; On Aug 21, 2007, at 10:52 PM, Lev Givon wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (Running ompi_info after installing the build confirms the absence of
</span><br>
<span class="quotelev2">&gt; &gt; said components). My concern, unsurprisingly, is motivated by a desire
</span><br>
<span class="quotelev2">&gt; &gt; to use OpenMPI on an xgrid cluster (i.e., not with rsh/ssh); unless I
</span><br>
<span class="quotelev2">&gt; &gt; am misconstruing the above observations, building OpenMPI with
</span><br>
<span class="quotelev2">&gt; &gt; --enable-static seems to preclude this. Should xgrid functionality
</span><br>
<span class="quotelev2">&gt; &gt; still be present when OpenMPI is built with --enable-static?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, yes.  Do to some issues with our build system, you have to build  
</span><br>
<span class="quotelev1">&gt; shared libraries to use the XGrid support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<p>It might be desirable to make a note of this in the FAQ
<br>
(<a href="http://www.open-mpi.org/faq/?category=building#build-rte">http://www.open-mpi.org/faq/?category=building#build-rte</a>) or the
<br>
package README.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L.G.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3909.php">Higor de Padua Vieira Neto: "[OMPI users] Error: error in configure (maybe libtool)"</a>
<li><strong>Previous message:</strong> <a href="3907.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<li><strong>In reply to:</strong> <a href="3907.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
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
