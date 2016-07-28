<?
$subject_val = "Re: [OMPI users] Are the Messages delivered in order in the MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 25 05:59:09 2012" -->
<!-- isoreceived="20120125105909" -->
<!-- sent="Wed, 25 Jan 2012 05:59:04 -0500" -->
<!-- isosent="20120125105904" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Are the Messages delivered in order in the MPI?" -->
<!-- id="A54D7FA0-CF0D-4477-90C4-6A9CAF30E846_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AB7168B1-F470-4E12-A658-43AAB7CCDAF8_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-25 05:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18269.php">Yevgeny Kliteynik: "Re: [OMPI users] openib btl and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="18267.php">Victor Pomponiu: "[OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object"</a>
<li><strong>In reply to:</strong> <a href="18265.php">George Bosilca: "Re: [OMPI users] Are the Messages delivered in order in the MPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The tag also factors in here.  What I said in the blog entry was:
<br>
<p>&quot;The MPI specification doesn&#146;t define which message arrives first.  It defines which message is matched first at the receiver: the first one (which happens to be the long one).  Specifically, between a pair of peers, MPI defines that messages sent on the same communicator and tag will be matched at the receiver in the same relative order.&quot;
<br>
<p><p>On Jan 25, 2012, at 1:20 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Mateus,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI guarantee message ordering per communicator per peer. In other words any message going from peer A to peer B in the same communicator will be __matched__ on the receiver in the exact same order as they were sent (this remains true even for multi-threaded libraries). MPI does not mandate any other type of ordering, such as between communicators or between different pairs of processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, what I previously said is only true for the matching logic. Completion of message reception is a totally different thing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 24, 2012, at 23:53, Mateus Augusto &lt;teleomintos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After a read: <a href="http://blogs.cisco.com/performance/more_traffic/">http://blogs.cisco.com/performance/more_traffic/</a> 
</span><br>
<span class="quotelev2">&gt;&gt; I understood that if a large message is sent and then a short message is sent, then the short message can reach before. But what if the messages have the same size, and are small enough so that no fragmentation occurs, the ordering in delivery will be guaranteed?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18269.php">Yevgeny Kliteynik: "Re: [OMPI users] openib btl and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="18267.php">Victor Pomponiu: "[OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object"</a>
<li><strong>In reply to:</strong> <a href="18265.php">George Bosilca: "Re: [OMPI users] Are the Messages delivered in order in the MPI?"</a>
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
