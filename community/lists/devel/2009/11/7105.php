<?
$subject_val = "[OMPI devel] opal_convertor / ompi_convertor";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 10:33:45 2009" -->
<!-- isoreceived="20091109153345" -->
<!-- sent="Mon, 09 Nov 2009 16:33:27 +0100" -->
<!-- isosent="20091109153327" -->
<!-- name="Christian Bendele" -->
<!-- email="Christian.Bendele_at_[hidden]" -->
<!-- subject="[OMPI devel] opal_convertor / ompi_convertor" -->
<!-- id="4AF83647.3040603_at_informatik.tu-cottbus.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI devel] opal_convertor / ompi_convertor<br>
<strong>From:</strong> Christian Bendele (<em>Christian.Bendele_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-09 10:33:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7106.php">George Bosilca: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>Previous message:</strong> <a href="7104.php">Jeff Squyres: "Re: [OMPI devel] RFC: Revamped topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7106.php">George Bosilca: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>Reply:</strong> <a href="7106.php">George Bosilca: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>I was porting a 3rd party btl module that was originally written for
<br>
openmpi 1.0.x to the current release.
<br>
<p>Now, even after some googling, I am a little confused about 
<br>
ompi_convertor and opal_convertor.
<br>
<p>The OLD code includes opal/datatype/convertor.h and calls several 
<br>
functions starting opal_convertor_...(). That header file didn't seem to 
<br>
exist in 1.3.3 though.
<br>
<p>The 1.3.3 btl_tcp code I referenced uses ompi_convertor. Thus I 
<br>
understood that at some point in history opal_convertor was obsoleted 
<br>
and replaced by ompi_convertor.
<br>
<p>It happened so that I overlooked a single occurence of 
<br>
opal_convertor_need_buffers() in my code. Although I thought I removed 
<br>
all headers related to opal_convertor the code actually compiled, and 
<br>
only failed during the linking stage (no such symbol). Now since I 
<br>
thought that rather strange (I thought maybe there was some obsolete 
<br>
header still astray or something), I checked with google.
<br>
<p>There I actually found a few rather current patches (e.g. 
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2009/07/6457.php">http://www.open-mpi.org/community/lists/devel/2009/07/6457.php</a>) that 
<br>
seem to suggest that actually ompi_datatype is obsoleted in favour of 
<br>
opal_datatype...
<br>
<p>Can anybody give me a small overview what's going on here?
<br>
<p>Greetings,
<br>
<p>Christian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7106.php">George Bosilca: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>Previous message:</strong> <a href="7104.php">Jeff Squyres: "Re: [OMPI devel] RFC: Revamped topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7106.php">George Bosilca: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>Reply:</strong> <a href="7106.php">George Bosilca: "Re: [OMPI devel] opal_convertor / ompi_convertor"</a>
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
