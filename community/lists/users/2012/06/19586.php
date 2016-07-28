<?
$subject_val = "Re: [OMPI users] Multiple Communicators for communication";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 06:40:23 2012" -->
<!-- isoreceived="20120615104023" -->
<!-- sent="Fri, 15 Jun 2012 06:40:17 -0400" -->
<!-- isosent="20120615104017" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple Communicators for communication" -->
<!-- id="094F466B-FC32-4E58-A6B7-C3FAE5987AEA_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOgG+PftZV4SB1X6-k-y5pce93O3ny2RTzNCOUWm99rKDO_Uyg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multiple Communicators for communication<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-15 06:40:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19587.php">Jeff Squyres: "Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19585.php">Ramesh Vinayagam: "[OMPI users] Multiple Communicators for communication"</a>
<li><strong>In reply to:</strong> <a href="19585.php">Ramesh Vinayagam: "[OMPI users] Multiple Communicators for communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19598.php">Ramesh Vinayagam: "Re: [OMPI users] Multiple Communicators for communication"</a>
<li><strong>Reply:</strong> <a href="19598.php">Ramesh Vinayagam: "Re: [OMPI users] Multiple Communicators for communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 14, 2012, at 8:43 PM, Ramesh Vinayagam wrote:
<br>
<p><span class="quotelev1">&gt; I was wondering is there a way to communicate between two processes with two different communicators simultaneously in MPI? Like having two channels for communication?
</span><br>
<p>I'm not quite sure what you're asking.  Are you asking if it's possible to have 2 processes share 2 entirely different communicators (and use both of them for communication)?
<br>
<p>If so, yes.  Any set of processes can have any number of shared communicators.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm foo;
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_dup(MPI_COMM_WORLD, &amp;foo);
<br>
<p>Now foo will be a duplicate of MPI_COMM_WORLD, but with a different communication context (so that messages sent on MCW won't be received on foo, and vice versa).  Hence, you can send a message on MCW to any peer in that communicator, but you can also send a message on foo to any peer in that communicator.
<br>
<p>Note, however, that sending multiple messages on different communicators to the same peer doesn't (usually) expand your available bandwidth.  Think of communicators (and tags, too), as message matching mechanisms rather than bandwidth-multiplying mechanisms.  For example, you might send control messages on &quot;foo&quot;, but send data messages on MPI_COMM_WORLD.
<br>
<p>Hope that helps.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19587.php">Jeff Squyres: "Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19585.php">Ramesh Vinayagam: "[OMPI users] Multiple Communicators for communication"</a>
<li><strong>In reply to:</strong> <a href="19585.php">Ramesh Vinayagam: "[OMPI users] Multiple Communicators for communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19598.php">Ramesh Vinayagam: "Re: [OMPI users] Multiple Communicators for communication"</a>
<li><strong>Reply:</strong> <a href="19598.php">Ramesh Vinayagam: "Re: [OMPI users] Multiple Communicators for communication"</a>
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
