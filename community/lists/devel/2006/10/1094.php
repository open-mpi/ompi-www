<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  2 12:48:36 2006" -->
<!-- isoreceived="20061002164836" -->
<!-- sent="Mon, 02 Oct 2006 12:48:23 -0400" -->
<!-- isosent="20061002164823" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI::File::Create_errhandler() missing?" -->
<!-- id="C146BB17.291C7%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061002164224.GA30184_at_cluster.inf-ra.uni-jena.de" -->
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
<strong>Date:</strong> 2006-10-02 12:48:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1095.php">George Bosilca: "[OMPI devel] configure &amp; Fortran problem"</a>
<li><strong>Previous message:</strong> <a href="1093.php">Christian Kauhaus: "[OMPI devel] MPI::File::Create_errhandler() missing?"</a>
<li><strong>In reply to:</strong> <a href="1093.php">Christian Kauhaus: "[OMPI devel] MPI::File::Create_errhandler() missing?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please do -- thanks!
<br>
<p><p>On 10/2/06 12:42 PM, &quot;Christian Kauhaus&quot; &lt;ckauhaus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After doing some application coding using the C++ bindings, I tried to
</span><br>
<span class="quotelev1">&gt; create a custom MPI::File Errorhandler but failed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; | mpiiowriter.cc: In member function `virtual void
</span><br>
<span class="quotelev1">&gt; MPIIOWriter::initialized()':
</span><br>
<span class="quotelev1">&gt; | mpiiowriter.cc:29: error: `Create_errhandler' is not a member of `MPI::File'
</span><br>
<span class="quotelev1">&gt; | mpiiowriter.cc:29: warning: unused variable 'errhandler'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After some source grepping, it seems that the function
</span><br>
<span class="quotelev1">&gt; MPI::File::Create_errhandler() is not implemented, although the MPI2.0
</span><br>
<span class="quotelev1">&gt; standard requires it for MPI-IO. Should I file a ticket?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christian
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
<li><strong>Next message:</strong> <a href="1095.php">George Bosilca: "[OMPI devel] configure &amp; Fortran problem"</a>
<li><strong>Previous message:</strong> <a href="1093.php">Christian Kauhaus: "[OMPI devel] MPI::File::Create_errhandler() missing?"</a>
<li><strong>In reply to:</strong> <a href="1093.php">Christian Kauhaus: "[OMPI devel] MPI::File::Create_errhandler() missing?"</a>
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
