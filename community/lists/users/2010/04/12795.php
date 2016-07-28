<?
$subject_val = "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 12:13:09 2010" -->
<!-- isoreceived="20100426161309" -->
<!-- sent="Mon, 26 Apr 2010 18:13:06 +0200" -->
<!-- isosent="20100426161306" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to &amp;quot;guess&amp;quot; the incoming data type ?" -->
<!-- id="87och6dwfh.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BD50ACE.7050807_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 12:13:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12796.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines) (Timur Magomedov)"</a>
<li><strong>Previous message:</strong> <a href="12794.php">Dave Love: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>In reply to:</strong> <a href="12773.php">Eugene Loh: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12789.php">Dave Love: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 25 Apr 2010 20:38:54 -0700, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Could you encode it into the tag?
</span><br>
<p>This sounds dangerous.
<br>
<p><span class="quotelev1">&gt; Or, append a data type to the front of each message?
</span><br>
<p>This is the idea, unfortunately this still requires multiple messages
<br>
for collectives (because you can't probe for a suitable buffer size, and
<br>
no dynamic language will be happy with &quot;the buffer can be anything as
<br>
long as it's type is in this list and the total number of bytes is N&quot;).
<br>
<p>This file is a pretty easy to read reference for a friendly MPI in
<br>
dynamic language:
<br>
<p>&nbsp;&nbsp;<a href="http://mpi4py.googlecode.com/svn/trunk/src/MPI/pickled.pxi">http://mpi4py.googlecode.com/svn/trunk/src/MPI/pickled.pxi</a>
<br>
<p>Note that mpi4py also exposes the low-level functionality.  Numpy arrays
<br>
can be sent without pickling:
<br>
<p>&nbsp;&nbsp;<a href="http://mpi4py.googlecode.com/svn/trunk/src/MPI/asbuffer.pxi">http://mpi4py.googlecode.com/svn/trunk/src/MPI/asbuffer.pxi</a>
<br>
<p>Something that could be done to prevent packing in some cases is to
<br>
define an MPI datatype for the send and receive types, but this will
<br>
usually require an extra message because the receiver has to wire up an
<br>
empty object that is ready to receive the incoming message.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12796.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines) (Timur Magomedov)"</a>
<li><strong>Previous message:</strong> <a href="12794.php">Dave Love: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>In reply to:</strong> <a href="12773.php">Eugene Loh: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12789.php">Dave Love: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
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
