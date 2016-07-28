<?
$subject_val = "Re: [OMPI users] Is Iprobe fast when there is no message to recieve";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 16:15:16 2009" -->
<!-- isoreceived="20091003201516" -->
<!-- sent="Sat, 03 Oct 2009 21:15:24 +0100" -->
<!-- isosent="20091003201524" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is Iprobe fast when there is no message to recieve" -->
<!-- id="1254600924.25206.3.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5593931F-BB40-401B-900A-8ED3D0EC1FD2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is Iprobe fast when there is no message to recieve<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-03 16:15:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10883.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10881.php">Jeff Squyres: "Re: [OMPI users] use additional interface for openmpi"</a>
<li><strong>In reply to:</strong> <a href="10877.php">Jeff Squyres: "Re: [OMPI users] Is Iprobe fast when there is no message to recieve"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, 2009-10-03 at 07:05 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; That being said, if you just want to send a quick &quot;notify&quot; that an  
</span><br>
<span class="quotelev1">&gt; event has occurred, you might want to use a specific tag and/or  
</span><br>
<span class="quotelev1">&gt; communicator for these extraordinary messages.  Then, when the event  
</span><br>
<span class="quotelev1">&gt; occurs, send a very short message on this special tag/communicator  
</span><br>
<span class="quotelev1">&gt; (potentially even a 0-byte message).
</span><br>
<p><span class="quotelev1">&gt; You can MPI_TEST for  
</span><br>
<span class="quotelev1">&gt; the completion of this short/0-byte receive very quickly.  You can  
</span><br>
<span class="quotelev1">&gt; then send the actual data of the event in a different non-blocking  
</span><br>
<span class="quotelev1">&gt; receive that is only checked if the short &quot;alert&quot; message is received.
</span><br>
<p>In general I would say that Iprobe is a bad thing to use, as Jeff says
<br>
post a receive in advance and then call test on this receive rather than
<br>
using Iprobe.
<br>
<p><span class="quotelev1">&gt;From your description it sounds like a zero byte send is all you need
</span><br>
which should be fast in all cases.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10883.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10881.php">Jeff Squyres: "Re: [OMPI users] use additional interface for openmpi"</a>
<li><strong>In reply to:</strong> <a href="10877.php">Jeff Squyres: "Re: [OMPI users] Is Iprobe fast when there is no message to recieve"</a>
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
