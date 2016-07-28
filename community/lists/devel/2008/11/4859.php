<?
$subject_val = "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 20:24:14 2008" -->
<!-- isoreceived="20081107012414" -->
<!-- sent="Thu, 6 Nov 2008 20:24:08 -0500" -->
<!-- isosent="20081107012408" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: libopen-rte --&amp;gt; libompi-rte" -->
<!-- id="FDC8CAAD-B671-4338-94ED-5D956C74C499_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081106195825.GE7190_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 20:24:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4860.php">Terry Dontje: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Previous message:</strong> <a href="4858.php">Jeff Squyres: "Re: [OMPI devel] Progress of the asynchronous messages"</a>
<li><strong>In reply to:</strong> <a href="4857.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4860.php">Terry Dontje: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: Terry told me in IM that he hates this RFC as well (more details  
<br>
coming later).
<br>
<p><p>On Nov 6, 2008, at 2:58 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Hmm, OpenMPI seems not to use versioning for its shared libraries.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That was on the to-do list for this release, but it just didn't  
</span><br>
<span class="quotelev2">&gt;&gt; happen.
</span><br>
<span class="quotelev2">&gt;&gt; :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oh well.  When you start doing it, please coordinate with  
</span><br>
<span class="quotelev1">&gt; distributors;
</span><br>
<span class="quotelev1">&gt; it's not likely, but some of them may have actually packaged OpenMPI
</span><br>
<span class="quotelev1">&gt; with versioning, including (one then hopes!) adjusting versions as
</span><br>
<span class="quotelev1">&gt; needed between releases.  You might want to start out with numbers
</span><br>
<span class="quotelev1">&gt; upward of that then.
</span><br>
<p>Will do; thanks for the tip.
<br>
<p><span class="quotelev2">&gt;&gt; MPI API is compatible across releases; it hasn't changed.  We have  
</span><br>
<span class="quotelev2">&gt;&gt; never
</span><br>
<span class="quotelev2">&gt;&gt; [yet] claimed ABI compatible across releases -- we may still do this
</span><br>
<span class="quotelev2">&gt;&gt; someday.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, this task looks quite a bit easier to me than, say, defining an
</span><br>
<span class="quotelev1">&gt; ABI valid for several MPI implementations.
</span><br>
<p><p>Yes; our biggest issue is the fact that gcc complains when the size of  
<br>
structs change, even though those structs are never exposed to MPI  
<br>
applications.  Specifically:
<br>
<p>1. MPI_Comm is defined as &quot;typedef struct ompi_communicator_t *MPI_Comm&quot;
<br>
2. If we change the size of the ompi_communicator_t struct between two  
<br>
different versions of libmpi, gcc warns when user MPI applications are  
<br>
linked against a new libmpi
<br>
<p>Everything seems to work since MPI_Comm is only ever used as an opaque  
<br>
handle by the MPI application.  But we haven't looked deeply [yet] to  
<br>
see if there are more hidden dragons than this, and if not, if there  
<br>
is a way to suppress the warning.
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
<li><strong>Next message:</strong> <a href="4860.php">Terry Dontje: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Previous message:</strong> <a href="4858.php">Jeff Squyres: "Re: [OMPI devel] Progress of the asynchronous messages"</a>
<li><strong>In reply to:</strong> <a href="4857.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4860.php">Terry Dontje: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
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
