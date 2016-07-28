<?
$subject_val = "Re: [OMPI users] Multiple Communicators for communication";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 16:54:45 2012" -->
<!-- isoreceived="20120615205445" -->
<!-- sent="Fri, 15 Jun 2012 16:54:40 -0400" -->
<!-- isosent="20120615205440" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple Communicators for communication" -->
<!-- id="18642111-8A3B-411B-8512-F493E4B2DC95_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOgG+PfCUtpgXBFsphT+JLhe1O=+cqo3BzDtvOzttvBn4HdTaQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-06-15 16:54:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19600.php">Roland Schulz: "[OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<li><strong>Previous message:</strong> <a href="19598.php">Ramesh Vinayagam: "Re: [OMPI users] Multiple Communicators for communication"</a>
<li><strong>In reply to:</strong> <a href="19598.php">Ramesh Vinayagam: "Re: [OMPI users] Multiple Communicators for communication"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 15, 2012, at 4:38 PM, Ramesh Vinayagam wrote:
<br>
<p><span class="quotelev1">&gt; I was looking more into this scenario :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if (rank ==0){
</span><br>
<span class="quotelev1">&gt;         MPI_Send(&amp;tmp,2048, MPI_INT, 1,123, myComm);
</span><br>
<span class="quotelev1">&gt;         MPI_Recv(&amp;tmp2,2048, MPI_INT, 1,321,
</span><br>
<span class="quotelev1">&gt;                  MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   if (rank == 1){
</span><br>
<span class="quotelev1">&gt;         MPI_Send(&amp;tmp1,2048, MPI_INT, 0,321, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         MPI_Recv(&amp;tmp3,2048, MPI_INT, 0,123, myComm, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; This scenario in a normal case will lead to a deadlock. But I was wondering whether multiple communicators will solve this issue, but apparently it doesn't.
</span><br>
<p>No, it does not.
<br>
<p>You can use non-blocking communications, instead.
<br>
<p><span class="quotelev1">&gt; I tried doing sends and receives on different threads, but that did not help too. So  I was wondering if there is a way to handle this in MPI without using non-blocking sends and receives. 
</span><br>
<p>You could use MPI_Sendrecv().
<br>
<p><span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ramesh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 15, 2012 at 3:40 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Jun 14, 2012, at 8:43 PM, Ramesh Vinayagam wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I was wondering is there a way to communicate between two processes with two different communicators simultaneously in MPI? Like having two channels for communication?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not quite sure what you're asking.  Are you asking if it's possible to have 2 processes share 2 entirely different communicators (and use both of them for communication)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, yes.  Any set of processes can have any number of shared communicators.  For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Comm foo;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_dup(MPI_COMM_WORLD, &amp;foo);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now foo will be a duplicate of MPI_COMM_WORLD, but with a different communication context (so that messages sent on MCW won't be received on foo, and vice versa).  Hence, you can send a message on MCW to any peer in that communicator, but you can also send a message on foo to any peer in that communicator.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note, however, that sending multiple messages on different communicators to the same peer doesn't (usually) expand your available bandwidth.  Think of communicators (and tags, too), as message matching mechanisms rather than bandwidth-multiplying mechanisms.  For example, you might send control messages on &quot;foo&quot;, but send data messages on MPI_COMM_WORLD.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19600.php">Roland Schulz: "[OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<li><strong>Previous message:</strong> <a href="19598.php">Ramesh Vinayagam: "Re: [OMPI users] Multiple Communicators for communication"</a>
<li><strong>In reply to:</strong> <a href="19598.php">Ramesh Vinayagam: "Re: [OMPI users] Multiple Communicators for communication"</a>
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
