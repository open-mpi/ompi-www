<?
$subject_val = "Re: [OMPI users] Are the Messages delivered in order in the MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 25 01:20:44 2012" -->
<!-- isoreceived="20120125062044" -->
<!-- sent="Wed, 25 Jan 2012 01:20:52 -0500" -->
<!-- isosent="20120125062052" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Are the Messages delivered in order in the MPI?" -->
<!-- id="AB7168B1-F470-4E12-A658-43AAB7CCDAF8_at_eecs.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1327467225.56511.YahooMailClassic_at_web160705.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Are the Messages delivered in order in the MPI?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-25 01:20:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18266.php">Ilias Miroslav: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>Previous message:</strong> <a href="18264.php">Mateus Augusto: "Re: [OMPI users] Are the Messages delivered in order in the MPI?"</a>
<li><strong>In reply to:</strong> <a href="18264.php">Mateus Augusto: "Re: [OMPI users] Are the Messages delivered in order in the MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18268.php">Jeff Squyres: "Re: [OMPI users] Are the Messages delivered in order in the MPI?"</a>
<li><strong>Reply:</strong> <a href="18268.php">Jeff Squyres: "Re: [OMPI users] Are the Messages delivered in order in the MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mateus,
<br>
<p>MPI guarantee message ordering per communicator per peer. In other words any message going from peer A to peer B in the same communicator will be __matched__ on the receiver in the exact same order as they were sent (this remains true even for multi-threaded libraries). MPI does not mandate any other type of ordering, such as between communicators or between different pairs of processes.
<br>
<p>Now, what I previously said is only true for the matching logic. Completion of message reception is a totally different thing.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Jan 24, 2012, at 23:53, Mateus Augusto &lt;teleomintos_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; After a read: <a href="http://blogs.cisco.com/performance/more_traffic/">http://blogs.cisco.com/performance/more_traffic/</a> 
</span><br>
<span class="quotelev1">&gt; I understood that if a large message is sent and then a short message is sent, then the short message can reach before. But what if the messages have the same size, and are small enough so that no fragmentation occurs, the ordering in delivery will be guaranteed?
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18265/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18266.php">Ilias Miroslav: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>Previous message:</strong> <a href="18264.php">Mateus Augusto: "Re: [OMPI users] Are the Messages delivered in order in the MPI?"</a>
<li><strong>In reply to:</strong> <a href="18264.php">Mateus Augusto: "Re: [OMPI users] Are the Messages delivered in order in the MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18268.php">Jeff Squyres: "Re: [OMPI users] Are the Messages delivered in order in the MPI?"</a>
<li><strong>Reply:</strong> <a href="18268.php">Jeff Squyres: "Re: [OMPI users] Are the Messages delivered in order in the MPI?"</a>
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
