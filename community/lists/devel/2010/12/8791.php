<?
$subject_val = "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 14:50:28 2010" -->
<!-- isoreceived="20101217195028" -->
<!-- sent="Fri, 17 Dec 2010 20:50:21 +0100" -->
<!-- isosent="20101217195021" -->
<!-- name="Suraj Prabhakaran" -->
<!-- email="suraj.prabhakaran_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)" -->
<!-- id="4D0BBEFD.6070101_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)<br>
<strong>From:</strong> Suraj Prabhakaran (<em>suraj.prabhakaran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 14:50:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8792.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8790.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8789.php">George Bosilca: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8792.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8792.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/17/2010 06:24 PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Let me try to round the edges on this one. It is not that we couldn't or wouldn't like to have a more &quot;MPI&quot; compliant approach on this, but the definition of connected processes in the MPI standard is [kind of] shady. One thing is clear however, it is a transitive relationship. If A is &quot;connected&quot; to B, and B is &quot;connected&quot; to C, then A and C are &quot;connected&quot; even if they don't know anything about each other. In other terms when you call disconnect, it is difficult to compute the peers that have to be &quot;disconnected&quot; as even if you disconnected them in one communicator they can still be connected some other way.*Therefore, we choose the simplest path, once connected the processes remain connected until the end of the execution.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; However, as Ralph pointed out, if you call MPI_Finalize as requested by the MPI standard, we handle the case nicely without forcing every process to abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're looking for a winter break project, we do accept contributions from the community ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<p>Yes, with MPI_Finalize() called before an abrupt exit() it is clean but 
<br>
talking generally about releasing connections, if Process A and Process 
<br>
B are connected through MPI_Comm_connect/accept and then made to 
<br>
MPI_Comm_disconnect at a later point of time, an abrupt exit of Process 
<br>
B (for example) *after* the disconnect does *NOT* affect Process A! I 
<br>
also tried a triangular connect/disconnect and it is quite clean!
<br>
So the problem that I indicated occurs only between spawned child and 
<br>
parent (after they disconnect) and *does not* occur between two 
<br>
processes connected via port and then later disconnects. Perhaps then 
<br>
the problem is easier to corner?
<br>
<p>P.s: I also indicated in another mail that processes trying to connect 
<br>
through a port, *sometimes* blocks at the connect/accept call or 
<br>
sometimes one of the processes blocks indefinitely at the disconnect 
<br>
call. I underline *sometimes*. Any inputs for this one?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8791/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8792.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8790.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8789.php">George Bosilca: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8792.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8792.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
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
