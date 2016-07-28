<?
$subject_val = "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 13:13:21 2011" -->
<!-- isoreceived="20110715171321" -->
<!-- sent="Fri, 15 Jul 2011 10:13:15 -0700" -->
<!-- isosent="20110715171315" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE." -->
<!-- id="4E20752B.5020100_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1310748578.47593.YahooMailNeo_at_web121713.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-15 13:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16942.php">Paul Kapinos: "[OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<li><strong>Previous message:</strong> <a href="16940.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16939.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm going to echo what you've already heard here:  it is impossible for 
<br>
a process to receive a message that was sent to a different process.  A 
<br>
sender must specify a unique destination.  No process other than the 
<br>
destination process will see that message.
<br>
<p>In what you write below, why do you think you are receiving a message 
<br>
that was intended for a different destination?  Maybe you can put 
<br>
together a short program that illustrates your question.
<br>
<p>On 7/15/2011 9:49 AM, Mudassar Majeed wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, processes receive messages that were not sent to them. I am 
</span><br>
<span class="quotelev1">&gt; receiving the message with the following call
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Recv(&amp;recv_packet, 1, loadDatatype, MPI_ANY_SOURCE, MPI_TAG_LOAD, 
</span><br>
<span class="quotelev1">&gt; comm, &amp;status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and that was sent using the following call,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Ssend(&amp;load_packet, 1, loadDatatype, rec_rank, MPI_TAG_LOAD, comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What problem it can have ?. All the parameters are correct, I have 
</span><br>
<span class="quotelev1">&gt; seen them by printf.  What I am thinking is that, the receive is done 
</span><br>
<span class="quotelev1">&gt; with MPI_ANY_SOURCE, so the process is getting any message (from any 
</span><br>
<span class="quotelev1">&gt; source). What should be done so that only that message is captured 
</span><br>
<span class="quotelev1">&gt; that had the destination as this process.
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16941/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16942.php">Paul Kapinos: "[OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<li><strong>Previous message:</strong> <a href="16940.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16939.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
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
