<?
$subject_val = "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 17:12:28 2013" -->
<!-- isoreceived="20130430211228" -->
<!-- sent="Tue, 30 Apr 2013 22:12:19 +0100" -->
<!-- isosent="20130430211219" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange &amp;quot;All-to-All&amp;quot; behavior" -->
<!-- id="518033B3.3080905_at_ntlworld.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+3Wo4dT_Dwi74YnPP4L81LmYgahctCShArXiE3gBkdOVTryyg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange &quot;All-to-All&quot; behavior<br>
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 17:12:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21840.php">Number Cruncher: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Previous message:</strong> <a href="21838.php">Ralph Castain: "Re: [OMPI users] job termination on grid"</a>
<li><strong>In reply to:</strong> <a href="21808.php">Stephan Wolf: "[OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21840.php">Number Cruncher: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This sounds a bit like the All_to_allv algorithm change I complained 
<br>
about when 1.6.1 was released.
<br>
<p>Original post: 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2012/11/20722.php">http://www.open-mpi.org/community/lists/users/2012/11/20722.php</a>
<br>
Everything waits for &quot;rank 0&quot; observation: 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2013/01/21219.php">http://www.open-mpi.org/community/lists/users/2013/01/21219.php</a>
<br>
<p>Does switching to the older algorithm help?:
<br>
mpiexec --mca coll_tuned_use_dynamic_rules 1 --mca 
<br>
coll_tuned_alltoallv_algorithm 1
<br>
<p>Simon
<br>
<p>On 26/04/2013 23:14, Stephan Wolf wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have encountered really bad performance when all the nodes send data
</span><br>
<span class="quotelev1">&gt; to all the other nodes. I use Isend and Irecv with multiple
</span><br>
<span class="quotelev1">&gt; outstanding sends per node. I debugged the behavior and came to the
</span><br>
<span class="quotelev1">&gt; following conclusion: It seems that one sender locks out all other
</span><br>
<span class="quotelev1">&gt; senders for one receiver. This sender releases the receiver only when
</span><br>
<span class="quotelev1">&gt; there are no more sends posted or a node with lower rank, wants to
</span><br>
<span class="quotelev1">&gt; send to this node (deadlock prevention). As a consequence, node 0
</span><br>
<span class="quotelev1">&gt; sends all its data to all nodes, while all others are waiting, then
</span><br>
<span class="quotelev1">&gt; node 1 sends all the data, &#226;&#128;&#166;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the rationale behind this behaviour and can I change it by
</span><br>
<span class="quotelev1">&gt; some MCA parameter?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stephan
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21840.php">Number Cruncher: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Previous message:</strong> <a href="21838.php">Ralph Castain: "Re: [OMPI users] job termination on grid"</a>
<li><strong>In reply to:</strong> <a href="21808.php">Stephan Wolf: "[OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21840.php">Number Cruncher: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
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
