<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  3 18:59:47 2008" -->
<!-- isoreceived="20080203235947" -->
<!-- sent="Sun, 3 Feb 2008 18:59:38 -0500" -->
<!-- isosent="20080203235938" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="859F232E-B80A-493C-9BDB-6CE92A42AD2D_at_eecs.utk.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="21250-64639_at_sneakemail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi credits for eager messages<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-03 18:59:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4952.php">George Bosilca: "Re: [OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error"</a>
<li><strong>Previous message:</strong> <a href="4950.php">Lydia Heck: "[OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error"</a>
<li><strong>In reply to:</strong> <a href="4949.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4954.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4954.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well ... this is exactly the kind of behavior a high performance  
<br>
application try to achieve isn't it ?
<br>
<p>The problem here is not the flow control. What you need is to avoid  
<br>
buffering the messages on the receiver side. Luckily, Open MPI is  
<br>
entirely configurable at runtime, so this situation is really easy to  
<br>
deal with even at the user level. Set the eager size to zero, and no  
<br>
buffering on the receiver side will be made. Your program will survive  
<br>
as long as there is some available memory on the receiver.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p>On Feb 1, 2008, at 6:32 PM, 8mj6tc902_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; That would make sense. I able to break OpenMPI by having Node A wait  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; messages from Node B. Node B is in fact sleeping while Node C bombards
</span><br>
<span class="quotelev1">&gt; Node A with a few thousand messages. After a while Node B wakes up and
</span><br>
<span class="quotelev1">&gt; sends Node A the message it's been waiting on, but Node A has long  
</span><br>
<span class="quotelev1">&gt; since
</span><br>
<span class="quotelev1">&gt; been buried and seg faults. If I decrease the number of messages C is
</span><br>
<span class="quotelev1">&gt; sending, it works properly. This was on OpenMPI 1.2.4 (using I think  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; SM BTL (might have been MX or TCP, but certainly not infiniband. I  
</span><br>
<span class="quotelev1">&gt; could
</span><br>
<span class="quotelev1">&gt; dig up the test and try again if anyone is seriously curious).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Trying the same test on MPICH/MX went very very slow (I don't think  
</span><br>
<span class="quotelev1">&gt; they
</span><br>
<span class="quotelev1">&gt; have any clever buffer management) but it didn't crash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sacerdoti, Federico Federico.Sacerdoti-at-deshaw.com
</span><br>
<span class="quotelev1">&gt; |openmpi-users/Allow| wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am readying an openmpi 1.2.5 software stack for use with a
</span><br>
<span class="quotelev2">&gt;&gt; many-thousand core cluster. I have a question about sending small
</span><br>
<span class="quotelev2">&gt;&gt; messages that I hope can be answered on this list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was under the impression that if node A wants to send a small MPI
</span><br>
<span class="quotelev2">&gt;&gt; message to node B, it must have a credit to do so. The credit  
</span><br>
<span class="quotelev2">&gt;&gt; assures A
</span><br>
<span class="quotelev2">&gt;&gt; that B has enough buffer space to accept the message. Credits are
</span><br>
<span class="quotelev2">&gt;&gt; required by the mpi layer regardless of the BTL transport layer used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been told by a Voltaire tech that this is not so, the  
</span><br>
<span class="quotelev2">&gt;&gt; credits are
</span><br>
<span class="quotelev2">&gt;&gt; used by the infiniband transport layer to reliably send a message,  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; is not an openmpi feature.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Federico
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; --Kris
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#229;&#143;&#182;&#227;&#129;&#163;&#227;&#129;&#166;&#227;&#129;&#151;&#227;&#129;&#190;&#227;&#129;&#134;&#229;&#164;&#162;&#227;&#129;&#175;&#230;&#156;&#172;&#229;&#189;&#147;&#227;&#129;&#174;&#229;&#164;&#162;&#227;&#129;&#168;&#232;&#168;&#128;&#227;&#129;&#136;&#227;&#130;&#147;&#227;&#128;&#130;
</span><br>
<span class="quotelev1">&gt; [A dream that comes true can't really be called a dream.]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4951/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4952.php">George Bosilca: "Re: [OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error"</a>
<li><strong>Previous message:</strong> <a href="4950.php">Lydia Heck: "[OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error"</a>
<li><strong>In reply to:</strong> <a href="4949.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4954.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4954.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
