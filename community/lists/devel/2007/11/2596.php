<?
$subject_val = "Re: [OMPI devel] collective problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 15:12:11 2007" -->
<!-- isoreceived="20071108201211" -->
<!-- sent="Thu, 08 Nov 2007 15:12:05 -0500" -->
<!-- isosent="20071108201205" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collective problems" -->
<!-- id="47336D95.9080104_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20071108090307.GC4397_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] collective problems<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 15:12:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2597.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<li><strong>Previous message:</strong> <a href="2595.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>In reply to:</strong> <a href="2581.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2577.php">Shipman, Galen M.: "Re: [OMPI devel] collective problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gleb,
<br>
<p>Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; In the case of TCP, kernel is kind enough to progress message for you,
</span><br>
<span class="quotelev1">&gt; but only if there was enough space in a kernel internal buffers. If there
</span><br>
<span class="quotelev1">&gt; was no place there, TCP BTL will also buffer messages in userspace and
</span><br>
<span class="quotelev1">&gt; will, eventually, have the same problem.
</span><br>
<p>Occasionally buffering to hide flow-control issue is fine, assuming that 
<br>
there is a mechanism to flush the buffer (below). However, you cannot 
<br>
buffer everything and it is just as fine to expose the back pressure 
<br>
when the buffer space is exhausted, to show the application that there 
<br>
is a sustained problem. In this case, it is reasonable to block the 
<br>
application (ie the MPI request) while you cannot buffer the outgoing data.
<br>
<p>The problem of the progression of already buffered outgoing data is the 
<br>
real problem, not the buffering itself.
<br>
<p>Here, the proposal is to allow the BTL to buffer, but requires the PML 
<br>
to handle progress. That's broken, IMHO.
<br>
<p><span class="quotelev1">&gt; To progress such outstanding messages additional thread is needed in
</span><br>
<span class="quotelev1">&gt; userspace. Is this what MX does?
</span><br>
<p>MX uses user-level thread but it's mainly for progressing the 
<br>
higher-level protocol on the receive side. On the send side for the 
<br>
low-level protocol, it is easier to ask your driver to either wake you 
<br>
up when the sending resource is available again (blocking on a CQ for 
<br>
IB) or take care of the sending itself.
<br>
<p>&lt;usual rant&gt;
<br>
My overall problem with this proposal is a race to the bottom, based on 
<br>
the lowest BTL, functionality-wise. The PML already imposes a pipelining 
<br>
for large messages (with a few knobs, but still) when most protocols in 
<br>
other BTLs already have their own. Now it's flow-control progression 
<br>
(not MPI progression).
<br>
<p>Can each BTL implement what is needed for a particular back-end instead 
<br>
of bloating the upper layer ?
<br>
&lt;/usual rant&gt;
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2597.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<li><strong>Previous message:</strong> <a href="2595.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>In reply to:</strong> <a href="2581.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2577.php">Shipman, Galen M.: "Re: [OMPI devel] collective problems"</a>
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
