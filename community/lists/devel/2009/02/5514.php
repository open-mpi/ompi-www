<?
$subject_val = "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 15:26:05 2009" -->
<!-- isoreceived="20090223202605" -->
<!-- sent="Mon, 23 Feb 2009 15:25:58 -0500" -->
<!-- isosent="20090223202558" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: eliminating &amp;quot;descriptor&amp;quot; argument from sendi function" -->
<!-- id="74B09838-7E38-4DDF-BCE6-CEE5D19BD1BE_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49A2D97F.5000301_at_sun.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 15:25:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5515.php">Ken Olum: "[OMPI devel] Failure to make progress"</a>
<li><strong>Previous message:</strong> <a href="5513.php">Wayne Gilmore: "[OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
<li><strong>In reply to:</strong> <a href="5512.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5517.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5517.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 23, 2009, at 12:14 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I'm a newbie and George is a veteran.  So, this feels rather like  
</span><br>
<span class="quotelev1">&gt; David and Goliath.  (Hmm, David won and became king.  Gee, I kinda  
</span><br>
<span class="quotelev1">&gt; like that.)   Anyhow...
</span><br>
<p>That's an old story, we're living in modern times now ;)
<br>
<p><p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It doesn't sound reasonable to me. There is a reason for this, and  
</span><br>
<span class="quotelev2">&gt;&gt; I  think it's a good reason. The sendi function work for some  
</span><br>
<span class="quotelev2">&gt;&gt; devices as  a fast path for sending data, when the network is not  
</span><br>
<span class="quotelev2">&gt;&gt; flooded.  However, in the case sendi cannot do the job we expect,  
</span><br>
<span class="quotelev2">&gt;&gt; the fact that  it return the descriptor save us a call (we don't  
</span><br>
<span class="quotelev2">&gt;&gt; have to do the alloc  call later).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This does not make any sense to me.  In what sense are we &quot;saving a  
</span><br>
<span class="quotelev1">&gt; call&quot;?  Not in the sense of run-time performance since the BTL is  
</span><br>
<span class="quotelev1">&gt; now having to allocate a descriptor it did not otherwise need.  The  
</span><br>
<span class="quotelev1">&gt; amount of work is the same (one descriptor allocation either way),  
</span><br>
<span class="quotelev1">&gt; but you're just pushing that work into the BTLs.
</span><br>
<p>The descriptor is a BTL resource. If the sendi doesn't return one, the  
<br>
PML will have to call the BTL alloc function from the BTL again (in  
<br>
this case the calls will look like this: btl_sendi followed by  
<br>
btl_alloc followed by btl_send). I'm not looking only at SM, I want  
<br>
all of the BTL to have the opportunity to get good performance.
<br>
<p>If sendi return a descriptor when it fails to send the data the call  
<br>
list will be shorter: btl_sendi followed by btl_send. I'm trying to  
<br>
decrease the number of jumps between the layers (PML/BTL), not the  
<br>
number of lines of code in the BTL.
<br>
<p><span class="quotelev1">&gt; We are certainly not &quot;saving a call&quot; in the sense of reducing source  
</span><br>
<span class="quotelev1">&gt; code.  The PML has to have code to allocate a descriptor anyway  
</span><br>
<span class="quotelev1">&gt; since there may not even be any sendi functions.  So, the code to  
</span><br>
<span class="quotelev1">&gt; allocate the descriptor is already in the PML.  By asking sendi  
</span><br>
<span class="quotelev1">&gt; functions to do the same, you're replicating that code in every  
</span><br>
<span class="quotelev1">&gt; sendi function... possibly multiple times per BTL since a sendi  
</span><br>
<span class="quotelev1">&gt; function might have multiple &quot;out of resource&quot; return paths.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Therefore, in the PML we already have the descriptor and  we can  
</span><br>
<span class="quotelev2">&gt;&gt; hand it back to the BTL, which give a chance for asynchronous   
</span><br>
<span class="quotelev2">&gt;&gt; progress later on. Without this descriptor, the only option the  
</span><br>
<span class="quotelev2">&gt;&gt; PML  have is to put the PML request in a queue, and to try to send  
</span><br>
<span class="quotelev2">&gt;&gt; it  later, which is very expensive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This also makes no sense to me.  We're not talking about doing  
</span><br>
<span class="quotelev1">&gt; without the descriptor.  The PML is prepared to allocate it anyhow.   
</span><br>
<span class="quotelev1">&gt; The issue is where the descriptor is allocated in the case that  
</span><br>
<span class="quotelev1">&gt; sendi functions exist but cannot succeed.  One alternative is to use  
</span><br>
<span class="quotelev1">&gt; a single allocation point in the PML.  The other alternative (what  
</span><br>
<span class="quotelev1">&gt; we have today) is to replicate that code out to multiple sites,  
</span><br>
<span class="quotelev1">&gt; adding unnecessary source code and interface arguments.
</span><br>
<p>As I said previously, this save one jump from the PML to the BTL by  
<br>
adding one more return argument to the sendi function and some lines  
<br>
of code in every BTL. Not a big deal as a correctly written BTL can do  
<br>
it pretty smartly (as an example special return case where everybody  
<br>
jumps when an error is detected).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; The PML code is in
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.c">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.c</a> 
</span><br>
<span class="quotelev1">&gt; #mca_pml_ob1_send_request_start_copy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Existing BTL sendi functions are at
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/</a> 
</span><br>
<span class="quotelev1">&gt; btl_sm.c#mca_btl_sm_sendi
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/mx/">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/mx/</a> 
</span><br>
<span class="quotelev1">&gt; btl_mx.c#mca_btl_mx_sendi
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/portals/btl_portals_send.c">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/portals/btl_portals_send.c</a> 
</span><br>
<span class="quotelev1">&gt; #mca_btl_portals_sendi
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
<li><strong>Next message:</strong> <a href="5515.php">Ken Olum: "[OMPI devel] Failure to make progress"</a>
<li><strong>Previous message:</strong> <a href="5513.php">Wayne Gilmore: "[OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
<li><strong>In reply to:</strong> <a href="5512.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5517.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5517.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
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
