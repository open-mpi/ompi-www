<?
$subject_val = "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy	parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 21 03:48:11 2012" -->
<!-- isoreceived="20120821074811" -->
<!-- sent="Tue, 21 Aug 2012 07:48:05 +0000" -->
<!-- isosent="20120821074805" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Irecv: Confusion with &amp;lt;&amp;lt;int count&amp;gt;&amp;gt; inputy	parameter" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC90311B899_at_rz-mbx2.win.rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DD8BA821-DE1C-47F8-8A73-DF3937968C9C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy	parameter<br>
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-21 03:48:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19970.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Previous message:</strong> <a href="19968.php">Jeff Squyres: "Re: [OMPI users] issue with column type in language C"</a>
<li><strong>In reply to:</strong> <a href="19964.php">Jeff Squyres: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19970.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Reply:</strong> <a href="19970.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p><span class="quotelev2">&gt;&gt; Or is it the number of elements that are expected to be received, and hence MPI_Test will tell me that the receive is not complete untill &quot;count&quot; number of elements have not been received?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<p>Answering &quot;Yes&quot; this question might further the confusion there. The &quot;count&quot; argument specifies the *capacity* of the receive buffer and the receive operation (blocking or not) will complete successfully for any matching message with size up to &quot;count&quot;, even for an empty message with 0 elements, and will produce an overflow error if the received message was longer and data truncation has to occur.
<br>
<p>On 20.08.2012, at 16:32, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 20, 2012, at 5:51 AM, devendra rai wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is it the number of elements that have been received *thus far* in the buffer?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Or is it the number of elements that are expected to be received, and hence MPI_Test will tell me that the receive is not complete untill &quot;count&quot; number of elements have not been received?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's the reason why I have a problem (and I think I may be completely stupid here, I'd appreciate your patience):
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone see what could be going wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Double check that the (sender_rank, tag, communicator) tuple that you issued in the MPI_Irecv matches the (rank, tag, communicator) tuple from the sender (tag and communicator are arguments on the sending side, and rank is the rank of the sender in that communicator).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When receives block like this without completing like this, it usually means a mismatch between the tuples.
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
<p><pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19969/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19970.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Previous message:</strong> <a href="19968.php">Jeff Squyres: "Re: [OMPI users] issue with column type in language C"</a>
<li><strong>In reply to:</strong> <a href="19964.php">Jeff Squyres: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19970.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Reply:</strong> <a href="19970.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
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
