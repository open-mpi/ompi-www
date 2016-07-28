<?
$subject_val = "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 18:07:43 2010" -->
<!-- isoreceived="20101217230743" -->
<!-- sent="Fri, 17 Dec 2010 18:07:38 -0500" -->
<!-- isosent="20101217230738" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)" -->
<!-- id="3D3F5AA6-DD8F-49B1-8D5B-47DAD09F875F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D0BBEFD.6070101_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 18:07:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8793.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8791.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8791.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8793.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8793.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 17, 2010, at 2:50 PM, Suraj Prabhakaran wrote:
<br>
<p><span class="quotelev1">&gt; Yes, with MPI_Finalize() called before an abrupt exit() it is clean but talking generally about releasing connections, if Process A and Process B are connected through MPI_Comm_connect/accept and then made to MPI_Comm_disconnect at a later point of time, an abrupt exit of Process B (for example) *after* the disconnect does *NOT* affect Process A! I also tried a triangular connect/disconnect and it is quite clean!
</span><br>
<span class="quotelev1">&gt; So the problem that I indicated occurs only between spawned child and parent (after they disconnect) and *does not* occur between two processes connected via port and then later disconnects. Perhaps then the problem is easier to corner?
</span><br>
<p>It's not an unknown problem -- as George and Ralph were trying to say, it was a design decision on our part.
<br>
<p>Sadly, flexible dynamic processing is not something that many people ask for. We have invested time in it over the year to get it working and have a baseline functionality level.  Beyond that, we unfortunately simply haven't had enough requests to justify spending time to do stuff like you suggest (e.g., allow abnormal termination of MPI-disconnected processes to not also take down previously-connected processes).  :-(
<br>
<p>But as George said, we're an open source project and open to patches!  :-)
<br>
<p><span class="quotelev1">&gt; P.s: I also indicated in another mail that processes trying to connect through a port, *sometimes* blocks at the connect/accept call or sometimes one of the processes blocks indefinitely at the disconnect call. I underline *sometimes*. Any inputs for this one?
</span><br>
<p>Can you come up with a small program / scenario that shows the problem?
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
<li><strong>Next message:</strong> <a href="8793.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8791.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8791.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8793.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8793.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
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
