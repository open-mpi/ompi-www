<?
$subject_val = "Re: [OMPI users] Multiple Communicators for communication";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 16:38:24 2012" -->
<!-- isoreceived="20120615203824" -->
<!-- sent="Fri, 15 Jun 2012 13:38:18 -0700" -->
<!-- isosent="20120615203818" -->
<!-- name="Ramesh Vinayagam" -->
<!-- email="rvinayagam.85_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple Communicators for communication" -->
<!-- id="CAOgG+PfCUtpgXBFsphT+JLhe1O=+cqo3BzDtvOzttvBn4HdTaQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="094F466B-FC32-4E58-A6B7-C3FAE5987AEA_at_cisco.com" -->
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
<strong>From:</strong> Ramesh Vinayagam (<em>rvinayagam.85_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-15 16:38:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19599.php">Jeff Squyres: "Re: [OMPI users] Multiple Communicators for communication"</a>
<li><strong>Previous message:</strong> <a href="19597.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>In reply to:</strong> <a href="19586.php">Jeff Squyres: "Re: [OMPI users] Multiple Communicators for communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19599.php">Jeff Squyres: "Re: [OMPI users] Multiple Communicators for communication"</a>
<li><strong>Reply:</strong> <a href="19599.php">Jeff Squyres: "Re: [OMPI users] Multiple Communicators for communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff,
<br>
<p>I was looking more into this scenario :
<br>
<p>if (rank ==0){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;tmp,2048, MPI_INT, 1,123, myComm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;tmp2,2048, MPI_INT, 1,321,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;if (rank == 1){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;tmp1,2048, MPI_INT, 0,321, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;tmp3,2048, MPI_INT, 0,123, myComm, MPI_STATUS_IGNORE);
<br>
<p>&nbsp;&nbsp;}
<br>
<p>This scenario in a normal case will lead to a deadlock. But I was wondering
<br>
whether multiple communicators will solve this issue, but apparently it
<br>
doesn't.
<br>
I tried doing sends and receives on different threads, but that did not
<br>
help too. So  I was wondering if there is a way to handle this in MPI
<br>
without using non-blocking sends and receives.
<br>
<p>Thanks
<br>
Ramesh
<br>
<p><p>On Fri, Jun 15, 2012 at 3:40 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 14, 2012, at 8:43 PM, Ramesh Vinayagam wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was wondering is there a way to communicate between two processes with
</span><br>
<span class="quotelev1">&gt; two different communicators simultaneously in MPI? Like having two channels
</span><br>
<span class="quotelev1">&gt; for communication?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not quite sure what you're asking.  Are you asking if it's possible to
</span><br>
<span class="quotelev1">&gt; have 2 processes share 2 entirely different communicators (and use both of
</span><br>
<span class="quotelev1">&gt; them for communication)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, yes.  Any set of processes can have any number of shared
</span><br>
<span class="quotelev1">&gt; communicators.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm foo;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_dup(MPI_COMM_WORLD, &amp;foo);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now foo will be a duplicate of MPI_COMM_WORLD, but with a different
</span><br>
<span class="quotelev1">&gt; communication context (so that messages sent on MCW won't be received on
</span><br>
<span class="quotelev1">&gt; foo, and vice versa).  Hence, you can send a message on MCW to any peer in
</span><br>
<span class="quotelev1">&gt; that communicator, but you can also send a message on foo to any peer in
</span><br>
<span class="quotelev1">&gt; that communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note, however, that sending multiple messages on different communicators
</span><br>
<span class="quotelev1">&gt; to the same peer doesn't (usually) expand your available bandwidth.  Think
</span><br>
<span class="quotelev1">&gt; of communicators (and tags, too), as message matching mechanisms rather
</span><br>
<span class="quotelev1">&gt; than bandwidth-multiplying mechanisms.  For example, you might send control
</span><br>
<span class="quotelev1">&gt; messages on &quot;foo&quot;, but send data messages on MPI_COMM_WORLD.
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19598/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19599.php">Jeff Squyres: "Re: [OMPI users] Multiple Communicators for communication"</a>
<li><strong>Previous message:</strong> <a href="19597.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>In reply to:</strong> <a href="19586.php">Jeff Squyres: "Re: [OMPI users] Multiple Communicators for communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19599.php">Jeff Squyres: "Re: [OMPI users] Multiple Communicators for communication"</a>
<li><strong>Reply:</strong> <a href="19599.php">Jeff Squyres: "Re: [OMPI users] Multiple Communicators for communication"</a>
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
