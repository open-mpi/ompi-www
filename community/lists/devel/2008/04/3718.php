<?
$subject_val = "Re: [OMPI devel] MPI_Barrier performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 16:23:37 2008" -->
<!-- isoreceived="20080417202337" -->
<!-- sent="Thu, 17 Apr 2008 16:23:30 -0400" -->
<!-- isosent="20080417202330" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Barrier performance" -->
<!-- id="547A0BCB-9C3A-4223-980A-946469B139D5_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4804E9C5.7070604_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Barrier performance<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-17 16:23:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="3717.php">Ralph Castain: "Re: [OMPI devel] SIGUSR2 response"</a>
<li><strong>In reply to:</strong> <a href="3709.php">Rolf Vandevaart: "[OMPI devel] MPI_Barrier performance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This sounds like the fuel problem we're facing right now. Potentially,  
<br>
there are enough resources (for now). Simultaneously, there is enough  
<br>
demand (for ever). But they are connected by this artificially  
<br>
maintained tiny pipe ...
<br>
<p>The tuned collective are not supposed to adapt to all cases. They are  
<br>
supposed to deliver the best performance available when each process  
<br>
have its own dedicated network resources. In other words, when there  
<br>
is one process per node. Why CT6 deliver better performances ? Process  
<br>
placement and the communication pattern are just few factors that  
<br>
affect these performances. Change one of them and for a specific  
<br>
configuration will get a [possibly] large improvement in terms of  
<br>
performance. However, it's a temporary benefit, because it doesn't  
<br>
solve the real issue, it just hide it away.
<br>
<p>Until we have the hierarch collective working, there is no miracle  
<br>
solution to this problem. Well ... except not starting 16 processes  
<br>
per node :)
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 15, 2008, at 1:45 PM, Rolf Vandevaart wrote:
<br>
<p><span class="quotelev1">&gt; I have been running the IMB performance tests and noticed some  
</span><br>
<span class="quotelev1">&gt; strange behavior.  This is running on a CentOS cluster with 16  
</span><br>
<span class="quotelev1">&gt; processes per node and using the openib btl.  Currently, I am  
</span><br>
<span class="quotelev1">&gt; looking at the MPI_Barrier performance.  Since we make use of a  
</span><br>
<span class="quotelev1">&gt; recursive double algorithm (in the tuned collective)  I would have  
</span><br>
<span class="quotelev1">&gt; expected to see a log2(np) type performance.  However, the data is  
</span><br>
<span class="quotelev1">&gt; much worse than log2(np) with the trunk being worse than v1.2.4.
</span><br>
<span class="quotelev1">&gt; One interesting piece of data is that I replaced the tuned algorithm  
</span><br>
<span class="quotelev1">&gt; with one that is very similar (copied from Sun Clustertools 6) , but  
</span><br>
<span class="quotelev1">&gt; instead of each process doing send/recv, we have each one do a send  
</span><br>
<span class="quotelev1">&gt; to their lower partners followed by a receive with their upper  
</span><br>
<span class="quotelev1">&gt; partners.  Then, everything is reversed which finished the  
</span><br>
<span class="quotelev1">&gt; barrier.   For reasons unknown, this appears to perform better even  
</span><br>
<span class="quotelev1">&gt; thought both algorithms should be log2(np).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another interesting fact is that when run on my really slow cluster  
</span><br>
<span class="quotelev1">&gt; over TCP (latency of 150 usec) the tuned barrier algorithm very  
</span><br>
<span class="quotelev1">&gt; closely follows the expected log2(np).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have mentioned this issue to a few people, but thought I would  
</span><br>
<span class="quotelev1">&gt; share with a wider audience to see if anyone else has observed  
</span><br>
<span class="quotelev1">&gt; MPI_Barrier that is not log2(np).   I have attached two pdfs.  The  
</span><br>
<span class="quotelev1">&gt; first one shows my results and the second one is a picture of the  
</span><br>
<span class="quotelev1">&gt; two different barrier algorithms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;imb-barrier-ompi.pdf&gt;&lt;barrier- 
</span><br>
<span class="quotelev1">&gt; tree.pdf&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3718/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="3717.php">Ralph Castain: "Re: [OMPI devel] SIGUSR2 response"</a>
<li><strong>In reply to:</strong> <a href="3709.php">Rolf Vandevaart: "[OMPI devel] MPI_Barrier performance"</a>
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
