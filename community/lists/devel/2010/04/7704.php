<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 16:44:27 2010" -->
<!-- isoreceived="20100406204427" -->
<!-- sent="Tue, 6 Apr 2010 16:44:23 -0400" -->
<!-- isosent="20100406204423" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="469D3CE2-3AA7-4C32-8ADF-49C96F4AB488_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BBB99C6.3070806_at_docawk.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 16:44:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7705.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7703.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7703.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7705.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6, 2010, at 4:29 PM, Oliver Geisler wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Sorry for the delay -- I just replied on the user list -- I think the first thing to do is to establish baseline networking performance and see if that is out of whack.  If the underlying network is bad, then MPI performance will also be bad.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could make sense. With kernel 2.6.24 it seems a major change in the
</span><br>
<span class="quotelev1">&gt; modules for Intel PCI-Express network cards was introduced.
</span><br>
<span class="quotelev1">&gt; Does openmpi use TCP communication, even if all processes are on the
</span><br>
<span class="quotelev1">&gt; same local node?
</span><br>
<p>It depends.  :-)
<br>
<p>The &quot;--mca btl sm,self,tcp&quot; option to mpirun tells Open MPI to use shared memory, tcp, and process-loopback for MPI point-to-point communications.  Open MPI computes a reachability / priority map and uses the highest priority plugin that is reachable for each peer MPI process.
<br>
<p>Meaning that on each node, if you allow &quot;sm&quot; to be used, &quot;sm&quot; should be used for all on-node communications.  If you had only said --mca btl tcp,self&quot;, then you're only allowing Open MPI to use TCP for all non-self MPI point-to-point communications.
<br>
<p>The default -- if you don't specify &quot;--mca btl ....&quot; at all -- is for Open MPI to figure it out automatically and use whatever networks it can find.  In your case, I'm guessing that it's pretty much identical to specifying &quot;--mca btl tcp,sm,self&quot;.
<br>
<p>Another good raw TCP performance program that network wonks are familiar with is netperf.  NetPipe is nice because it allows an apples-to-apples comparison of TCP and MPI (i.e., it's the same benchmark app that can use either TCP or MPI [or several other] transports underneath).  But netperf might be a bit more familiar to those outside the HPC community.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7705.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7703.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7703.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7705.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
