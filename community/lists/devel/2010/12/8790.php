<?
$subject_val = "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 13:43:11 2010" -->
<!-- isoreceived="20101217184311" -->
<!-- sent="17 Dec 2010 18:43:06 +0000" -->
<!-- isosent="20101217184306" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)" -->
<!-- id="Prayer.1.3.3.1012171843060.1007_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7334A467-07BC-4B2F-9EEF-5A3B3543FED3_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 13:43:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8791.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8789.php">George Bosilca: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8789.php">George Bosilca: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8791.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 17 2010, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me try to round the edges on this one. It is not that we couldn't or 
</span><br>
<span class="quotelev1">&gt; wouldn't like to have a more &quot;MPI&quot; compliant approach on this, but the 
</span><br>
<span class="quotelev1">&gt; definition of connected processes in the MPI standard is [kind of] shady. 
</span><br>
<span class="quotelev1">&gt; One thing is clear however, it is a transitive relationship. If A is 
</span><br>
<span class="quotelev1">&gt; &quot;connected&quot; to B, and B is &quot;connected&quot; to C, then A and C are &quot;connected&quot; 
</span><br>
<span class="quotelev1">&gt; even if they don't know anything about each other. In other terms when 
</span><br>
<span class="quotelev1">&gt; you call disconnect, it is difficult to compute the peers that have to be 
</span><br>
<span class="quotelev1">&gt; &quot;disconnected&quot; as even if you disconnected them in one communicator they 
</span><br>
<span class="quotelev1">&gt; can still be connected some other way. Therefore, we choose the simplest 
</span><br>
<span class="quotelev1">&gt; path, once connected the processes remain connected until the end of the 
</span><br>
<span class="quotelev1">&gt; execution.
</span><br>
<p>I apologise for confusing the issue!
<br>
<p>My response was generic - true, but the next stage on, if the above were
<br>
not the explanation.  I fully agree that the definition is shady - this
<br>
is a nightmare area, even in POSIX alone, and I advise most people to
<br>
avoid it like the plague if they can.
<br>
<p>I can't square the above approach with MPI 2.2 10.5.4 in this case, though
<br>
I accept that realistic programs are far murkier.  I haven't studied the
<br>
area deeply enough to convince myself whether or not it is possible to
<br>
do this sort of thing cleanly and according to the MPI specification.
<br>
You may be right that it's a hopeless task, which deserves the explicit
<br>
recommendation &quot;don't even THINK of going there&quot;.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8791.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8789.php">George Bosilca: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8789.php">George Bosilca: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8791.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
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
