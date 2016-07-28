<?
$subject_val = "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 12:15:08 2009" -->
<!-- isoreceived="20090223171508" -->
<!-- sent="Mon, 23 Feb 2009 09:14:39 -0800" -->
<!-- isosent="20090223171439" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: eliminating &amp;quot;descriptor&amp;quot; argument from sendi function" -->
<!-- id="49A2D97F.5000301_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F1A07E4D-7D32-4707-B730-72758189290C_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 12:14:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5513.php">Wayne Gilmore: "[OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
<li><strong>Previous message:</strong> <a href="5511.php">Brian W. Barrett: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>In reply to:</strong> <a href="5507.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5514.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5514.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm a newbie and George is a veteran.  So, this feels rather like David 
<br>
and Goliath.  (Hmm, David won and became king.  Gee, I kinda like 
<br>
that.)   Anyhow...
<br>
<p>George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; It doesn't sound reasonable to me. There is a reason for this, and I  
</span><br>
<span class="quotelev1">&gt; think it's a good reason. The sendi function work for some devices as  
</span><br>
<span class="quotelev1">&gt; a fast path for sending data, when the network is not flooded.  
</span><br>
<span class="quotelev1">&gt; However, in the case sendi cannot do the job we expect, the fact that  
</span><br>
<span class="quotelev1">&gt; it return the descriptor save us a call (we don't have to do the 
</span><br>
<span class="quotelev1">&gt; alloc  call later).
</span><br>
<p>This does not make any sense to me.  In what sense are we &quot;saving a 
<br>
call&quot;?  Not in the sense of run-time performance since the BTL is now 
<br>
having to allocate a descriptor it did not otherwise need.  The amount 
<br>
of work is the same (one descriptor allocation either way), but you're 
<br>
just pushing that work into the BTLs.
<br>
<p>We are certainly not &quot;saving a call&quot; in the sense of reducing source 
<br>
code.  The PML has to have code to allocate a descriptor anyway since 
<br>
there may not even be any sendi functions.  So, the code to allocate the 
<br>
descriptor is already in the PML.  By asking sendi functions to do the 
<br>
same, you're replicating that code in every sendi function... possibly 
<br>
multiple times per BTL since a sendi function might have multiple &quot;out 
<br>
of resource&quot; return paths.
<br>
<p><span class="quotelev1">&gt; Therefore, in the PML we already have the descriptor and  we can hand 
</span><br>
<span class="quotelev1">&gt; it back to the BTL, which give a chance for asynchronous  progress 
</span><br>
<span class="quotelev1">&gt; later on. Without this descriptor, the only option the PML  have is to 
</span><br>
<span class="quotelev1">&gt; put the PML request in a queue, and to try to send it  later, which is 
</span><br>
<span class="quotelev1">&gt; very expensive.
</span><br>
<p>This also makes no sense to me.  We're not talking about doing without 
<br>
the descriptor.  The PML is prepared to allocate it anyhow.  The issue 
<br>
is where the descriptor is allocated in the case that sendi functions 
<br>
exist but cannot succeed.  One alternative is to use a single allocation 
<br>
point in the PML.  The other alternative (what we have today) is to 
<br>
replicate that code out to multiple sites, adding unnecessary source 
<br>
code and interface arguments.
<br>
<p>The PML code is in
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.c#mca_pml_ob1_send_request_start_copy">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.c#mca_pml_ob1_send_request_start_copy</a>
<br>
<p>Existing BTL sendi functions are at
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c#mca_btl_sm_sendi">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c#mca_btl_sm_sendi</a>
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/mx/btl_mx.c#mca_btl_mx_sendi">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/mx/btl_mx.c#mca_btl_mx_sendi</a>
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/portals/btl_portals_send.c#mca_btl_portals_sendi">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/portals/btl_portals_send.c#mca_btl_portals_sendi</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5513.php">Wayne Gilmore: "[OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
<li><strong>Previous message:</strong> <a href="5511.php">Brian W. Barrett: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>In reply to:</strong> <a href="5507.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5514.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5514.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
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
