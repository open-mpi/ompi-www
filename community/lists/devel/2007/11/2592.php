<?
$subject_val = "Re: [OMPI devel] Moving fragments in btl sm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 11:53:11 2007" -->
<!-- isoreceived="20071108165311" -->
<!-- sent="Thu, 08 Nov 2007 09:52:59 -0700" -->
<!-- isosent="20071108165259" -->
<!-- name="Li-Ta Lo" -->
<!-- email="ollie_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Moving fragments in btl sm" -->
<!-- id="1194540779.2164.65.camel_at_exponential.lanl.gov" -->
<!-- inreplyto="Pine.LNX.4.63.0711081330320.19116_at_lgserv3.stud.cs.uit.no" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Moving fragments in btl sm<br>
<strong>From:</strong> Li-Ta Lo (<em>ollie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 11:52:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2593.php">George Bosilca: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<li><strong>Previous message:</strong> <a href="2591.php">George Bosilca: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2582.php">Torje Henriksen: "[OMPI devel] Moving fragments in btl sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2593.php">George Bosilca: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2007-11-08 at 13:38 +0100, Torje Henriksen wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a question that I shouldn't need to ask, but I'm 
</span><br>
<span class="quotelev1">&gt; kind of lost in the code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The btl sm component is using the circular buffers to write and read 
</span><br>
<span class="quotelev1">&gt; fragments (sending and receiving).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the write_to_head and read_from_tail I can only see pointers beeing set, 
</span><br>
<span class="quotelev1">&gt; no data being moved. So where does the actual data movement/copying take 
</span><br>
<span class="quotelev1">&gt; place? I'm thinking maybe a callback function existing somewhere :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your help now and earlier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>You are right. The &quot;real thing&quot; happens at the
<br>
mca_btl_sm_component_progess(). The PML/BML will call btl_register() 
<br>
to register callback function to be called when a frag is received.
<br>
In the event loop, the progress() function is called periodically to
<br>
check if there is any new frag arrived. It is complicated a little
<br>
bit by the fact that to transmit each &quot;data&quot; frag, there is a round
<br>
trip and two &quot;frags&quot; are exchanged. The send side sends the &quot;data&quot;
<br>
frag with header type SEND to the receiver. The receiver calls the
<br>
callback function the handle the frag and send back an ACK frag. Upon
<br>
receiving the ACK frag, the send side calls the des_cbfunc() to tell
<br>
the upper layer the the sending of this frag is completed. 
<br>
<p>BTW, it looks like it is still list append/remove in the PML/BML layer.
<br>
I don't know when/where the real &quot;copying&quot; happens.
<br>
<p>Ollie
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2593.php">George Bosilca: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<li><strong>Previous message:</strong> <a href="2591.php">George Bosilca: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2582.php">Torje Henriksen: "[OMPI devel] Moving fragments in btl sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2593.php">George Bosilca: "Re: [OMPI devel] Moving fragments in btl sm"</a>
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
