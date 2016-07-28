<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  8 06:44:04 2006" -->
<!-- isoreceived="20061208114404" -->
<!-- sent="Fri, 8 Dec 2006 06:43:49 -0500" -->
<!-- isosent="20061208114349" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] clarification regarding optimization of MPI collective calls" -->
<!-- id="777C7BC7-2B52-4109-A9B6-1D198A72A82C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b1a9299d0612080241s36350591jaba410aa30b5d2c1_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-12-08 06:43:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1230.php">Patrick Jessee: "[OMPI devel] issues with mpirun --prefix syntax"</a>
<li><strong>Previous message:</strong> <a href="1228.php">Christian Leber: "Re: [OMPI devel] clarification regarding optimization of MPI collective calls"</a>
<li><strong>In reply to:</strong> <a href="1227.php">krishna chaitanya: "[OMPI devel] clarification regarding optimization of MPI collective calls"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 8, 2006, at 5:41 AM, krishna chaitanya wrote:
<br>
<p><span class="quotelev1">&gt;               I learnt from a reliable source that MPI uses the  
</span><br>
<span class="quotelev1">&gt; services provided by TCP/IP or infiniband. Suppose that there is a  
</span><br>
<span class="quotelev1">&gt; bottle-neck in the
</span><br>
<p>Keep in mind that MPI is a specification -- a document.  There are  
<br>
many software implementations of that specification, such as Open  
<br>
MPI.  Open MPI can use a variety of network transports to effect the  
<br>
MPI semantics (e.g., the back end to MPI_SEND and MPI_RECV): TCP and  
<br>
IB are two, but Open MPI supports several others (Myrinet, shared  
<br>
memory, portals, ...).  Additionally, there are other MPI  
<br>
implementations that support other networks that Open MPI does not  
<br>
currently support.
<br>
<p><span class="quotelev1">&gt; TCP/IP layer itself, how will optimization of MPI calls really help?
</span><br>
<p>I'm not quite sure what you're asking here.  Open MPI generally  
<br>
chooses the &quot;best&quot; network to transport most of its MPI traffic (both  
<br>
point-to-point and collectives).  See this FAQ entry: <a href="http://www.open">http://www.open</a>- 
<br>
mpi.org/faq/?category=tcp#tcp-auto-disable
<br>
<p>Did that answer your question?
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1230.php">Patrick Jessee: "[OMPI devel] issues with mpirun --prefix syntax"</a>
<li><strong>Previous message:</strong> <a href="1228.php">Christian Leber: "Re: [OMPI devel] clarification regarding optimization of MPI collective calls"</a>
<li><strong>In reply to:</strong> <a href="1227.php">krishna chaitanya: "[OMPI devel] clarification regarding optimization of MPI collective calls"</a>
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
