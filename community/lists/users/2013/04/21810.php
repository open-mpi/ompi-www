<?
$subject_val = "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 27 07:34:17 2013" -->
<!-- isoreceived="20130427113417" -->
<!-- sent="Sat, 27 Apr 2013 13:34:12 +0200" -->
<!-- isosent="20130427113412" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange &amp;quot;All-to-All&amp;quot; behavior" -->
<!-- id="1367062478.0000_at_hypermail.dummy" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-27 07:34:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21811.php">Sebastian Rettenberger: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Previous message:</strong> <a href="21809.php">George Bosilca: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>In reply to:</strong> <a href="21808.php">Stephan Wolf: "[OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21811.php">Sebastian Rettenberger: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you use only non-blocking communications I don't see how the behavior you describe can happen in the code of Open MPI. There might be something else going on there.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Apr 27, 2013, at 00:14 , Stephan Wolf &lt;wolfst_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
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
<span class="quotelev1">&gt; node 1 sends all the data, &#133;
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
<li><strong>Next message:</strong> <a href="21811.php">Sebastian Rettenberger: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Previous message:</strong> <a href="21809.php">George Bosilca: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>In reply to:</strong> <a href="21808.php">Stephan Wolf: "[OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21811.php">Sebastian Rettenberger: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
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
