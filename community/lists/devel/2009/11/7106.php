<?
$subject_val = "Re: [OMPI devel] opal_convertor / ompi_convertor";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 10:56:40 2009" -->
<!-- isoreceived="20091109155640" -->
<!-- sent="Mon, 9 Nov 2009 16:56:29 +0100" -->
<!-- isosent="20091109155629" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_convertor / ompi_convertor" -->
<!-- id="69446317-57D1-459B-86F5-24E66A8FFFDB_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AF83647.3040603_at_informatik.tu-cottbus.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_convertor / ompi_convertor<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-09 10:56:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7107.php">Jeff Squyres: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>Previous message:</strong> <a href="7105.php">Christian Bendele: "[OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>In reply to:</strong> <a href="7105.php">Christian Bendele: "[OMPI devel] opal_convertor / ompi_convertor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7107.php">Jeff Squyres: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>Reply:</strong> <a href="7107.php">Jeff Squyres: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christian,
<br>
<p>I'm puzzled by your questions as I don't remember that at any past  
<br>
moment in the lifetime of Open MPI the convertor or datatype was in  
<br>
OPAL. So I don't see how your &quot;OLD&quot; code could have included &quot;opal/ 
<br>
datatype/convertor.h&quot;. This only ended in the 1.3 series starting from  
<br>
1.3.4.
<br>
<p><p>To your last question the short answer is: the obsolete one is the  
<br>
ompi_convertor. About two months ago, most of the datatype was moved  
<br>
from the OMPI layer into the OPAL one. When I say most this means  
<br>
everything not MPI specific was moved in OPAL, everything else was  
<br>
kept in OMPI. The convertor is MPI agnostic so it ended in OPAL.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 9, 2009, at 16:33 , Christian Bendele wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was porting a 3rd party btl module that was originally written for
</span><br>
<span class="quotelev1">&gt; openmpi 1.0.x to the current release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, even after some googling, I am a little confused about  
</span><br>
<span class="quotelev1">&gt; ompi_convertor and opal_convertor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The OLD code includes opal/datatype/convertor.h and calls several  
</span><br>
<span class="quotelev1">&gt; functions starting opal_convertor_...(). That header file didn't  
</span><br>
<span class="quotelev1">&gt; seem to exist in 1.3.3 though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 1.3.3 btl_tcp code I referenced uses ompi_convertor. Thus I  
</span><br>
<span class="quotelev1">&gt; understood that at some point in history opal_convertor was  
</span><br>
<span class="quotelev1">&gt; obsoleted and replaced by ompi_convertor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It happened so that I overlooked a single occurence of  
</span><br>
<span class="quotelev1">&gt; opal_convertor_need_buffers() in my code. Although I thought I  
</span><br>
<span class="quotelev1">&gt; removed all headers related to opal_convertor the code actually  
</span><br>
<span class="quotelev1">&gt; compiled, and only failed during the linking stage (no such symbol).  
</span><br>
<span class="quotelev1">&gt; Now since I thought that rather strange (I thought maybe there was  
</span><br>
<span class="quotelev1">&gt; some obsolete header still astray or something), I checked with  
</span><br>
<span class="quotelev1">&gt; google.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There I actually found a few rather current patches (e.g. <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6457.php">http://www.open-mpi.org/community/lists/devel/2009/07/6457.php</a> 
</span><br>
<span class="quotelev1">&gt; ) that seem to suggest that actually ompi_datatype is obsoleted in  
</span><br>
<span class="quotelev1">&gt; favour of opal_datatype...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anybody give me a small overview what's going on here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Christian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7107.php">Jeff Squyres: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>Previous message:</strong> <a href="7105.php">Christian Bendele: "[OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>In reply to:</strong> <a href="7105.php">Christian Bendele: "[OMPI devel] opal_convertor / ompi_convertor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7107.php">Jeff Squyres: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>Reply:</strong> <a href="7107.php">Jeff Squyres: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
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
