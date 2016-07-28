<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun  5 12:34:22 2006" -->
<!-- isoreceived="20060605163422" -->
<!-- sent="Mon, 5 Jun 2006 10:34:17 -0600" -->
<!-- isosent="20060605163417" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Query on zero-copy sends" -->
<!-- id="8CD22C7F-A057-482F-8662-674B4384CF20_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060602235554.24107.qmail_at_web31508.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-05 12:34:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0930.php">Josh Aune: "[OMPI devel] Please add explicit test for sysfs/libsysfs.h"</a>
<li><strong>Previous message:</strong> <a href="0928.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>In reply to:</strong> <a href="0922.php">Jonathan Day: "[OMPI devel] Query on zero-copy sends"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2006, at 5:55 PM, Jonathan Day wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm working on developing some components for OpenMPI,
</span><br>
<span class="quotelev1">&gt; but am a little unclear as to how to implement
</span><br>
<span class="quotelev1">&gt; efficient sends and receives. I'm wanting to do
</span><br>
<span class="quotelev1">&gt; zero-copy two-sided MPI, but as far as I can see, this
</span><br>
<span class="quotelev1">&gt; is not going to be easy. As best as I can tell, the
</span><br>
<span class="quotelev1">&gt; receive mechanism copies into a temporary user buffer
</span><br>
<span class="quotelev1">&gt; then, on actually handling the receive, copies that
</span><br>
<span class="quotelev1">&gt; into the application's buffer. Would I be correct in
</span><br>
<span class="quotelev1">&gt; this interpretation?
</span><br>
<p>This is really up to the implementer. If the BTL supports &quot;send in  
<br>
place&quot; the PML will prepare a descriptor pointing at the users memory  
<br>
and then use send/receive to transfer the message.
<br>
The receive side is a bit more tricky. The zero copy interconnects  
<br>
which we support require that receive descriptors be posted to a  
<br>
queue and these are consumed in-order. To receive with zero copy the  
<br>
user buffer would need to be posted to the receive queue and these  
<br>
would have to be &quot;in order&quot;. The MPI level cannot post these receives  
<br>
such that ordering is obeyed in all cases. To get around this some  
<br>
interconnects allow you to post receives along with matching  
<br>
information and the interconnect ensures MPI ordering.
<br>
<p>In addition to the above issues on receiving directly into the user's  
<br>
buffer, there is also a performance hit for most interconnects  
<br>
because the memory must be registered (pinned and made resident).  
<br>
These costs dominate any benefit of zero copy for small/medium  
<br>
messages. Open MPI therefore uses send/receive with copy in/out for  
<br>
message sizes up to a configurable limit. After this limit RDMA is  
<br>
used to provide zero copy.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm also a little hazy on how to get information on
</span><br>
<span class="quotelev1">&gt; messages being passed. What information on the sending
</span><br>
<span class="quotelev1">&gt; process is visible to the receiving BTL components?
</span><br>
<span class="quotelev1">&gt;
</span><br>
The BTL's are designed to be MPI agnostic. They are the &quot;Byte  
<br>
Transfer Layer&quot; and the PML &quot;Point-to-Point Messaging Layer&quot; hides  
<br>
MPI from them..
<br>
<p><span class="quotelev1">&gt; Finally, I'm assuming that developers have, over time,
</span><br>
<span class="quotelev1">&gt; produced test harnesses and other useful (for
</span><br>
<span class="quotelev1">&gt; developers) tools that would have no real value to
</span><br>
<span class="quotelev1">&gt; general users. Has anyone put together a kit of
</span><br>
<span class="quotelev1">&gt; development aids for coders of new components?
</span><br>
<span class="quotelev1">&gt;
</span><br>
There have been some unit tests developed for various areas of Open  
<br>
MPI. For point-to-point however this was not seen as a big benefit.  
<br>
For us it was easier to begin testing with a simple MPI ping-pong and  
<br>
then graduate to the Intel-Test suite or some other more  
<br>
comprehensive set of point-to-point tests.
<br>
<p>There is some information on the web that should help you in  
<br>
understanding the Open MPI p2p architecture:
<br>
<p><a href="http://www.open-mpi.org/papers/ipdps-2006">http://www.open-mpi.org/papers/ipdps-2006</a>
<br>
<p>Take a look under Wednesday - Point to Point architecture, if you  
<br>
have problems reading the slides let me know and I can send them one  
<br>
slide per page.
<br>
<p><a href="http://www.open-mpi.org/papers/workshop-2006/">http://www.open-mpi.org/papers/workshop-2006/</a>
<br>
<p>We are also working on another point-to-point architecture for  
<br>
interconnects that provide matching and other MPI facilities but we  
<br>
are a few weeks off from having this available.
<br>
<p><p>Thanks,
<br>
<p>Galen
<br>
<p><p><span class="quotelev1">&gt; Jonathan Day
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __________________________________________________
</span><br>
<span class="quotelev1">&gt; Do You Yahoo!?
</span><br>
<span class="quotelev1">&gt; Tired of spam?  Yahoo! Mail has the best spam protection around
</span><br>
<span class="quotelev1">&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
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
<li><strong>Next message:</strong> <a href="0930.php">Josh Aune: "[OMPI devel] Please add explicit test for sysfs/libsysfs.h"</a>
<li><strong>Previous message:</strong> <a href="0928.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>In reply to:</strong> <a href="0922.php">Jonathan Day: "[OMPI devel] Query on zero-copy sends"</a>
<!-- nextthread="start" -->
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
