<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 18:32:55 2008" -->
<!-- isoreceived="20080201233255" -->
<!-- sent="Sat, 02 Feb 2008 08:32:46 +0900" -->
<!-- isosent="20080201233246" -->
<!-- name="8mj6tc902_at_[hidden]" -->
<!-- email="8mj6tc902_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="21250-64639_at_sneakemail.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="A14F91CBBBA3014385A806944C9BEF1BAE7C38_at_maildrd1.nyc.deshaw.com" -->
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
<strong>From:</strong> <a href="mailto:8mj6tc902_at_[hidden]?Subject=Re:%20[OMPI%20users]%20openmpi%20credits%20for%20eager%20messages"><em>8mj6tc902_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-02-01 18:32:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4950.php">Lydia Heck: "[OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error"</a>
<li><strong>Previous message:</strong> <a href="4948.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4947.php">Sacerdoti, Federico: "[OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4951.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4951.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4966.php">Brian W. Barrett: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That would make sense. I able to break OpenMPI by having Node A wait for
<br>
messages from Node B. Node B is in fact sleeping while Node C bombards
<br>
Node A with a few thousand messages. After a while Node B wakes up and
<br>
sends Node A the message it's been waiting on, but Node A has long since
<br>
been buried and seg faults. If I decrease the number of messages C is
<br>
sending, it works properly. This was on OpenMPI 1.2.4 (using I think the
<br>
SM BTL (might have been MX or TCP, but certainly not infiniband. I could
<br>
dig up the test and try again if anyone is seriously curious).
<br>
<p>Trying the same test on MPICH/MX went very very slow (I don't think they
<br>
have any clever buffer management) but it didn't crash.
<br>
<p>Sacerdoti, Federico Federico.Sacerdoti-at-deshaw.com
<br>
|openmpi-users/Allow| wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am readying an openmpi 1.2.5 software stack for use with a
</span><br>
<span class="quotelev1">&gt; many-thousand core cluster. I have a question about sending small
</span><br>
<span class="quotelev1">&gt; messages that I hope can be answered on this list. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was under the impression that if node A wants to send a small MPI
</span><br>
<span class="quotelev1">&gt; message to node B, it must have a credit to do so. The credit assures A
</span><br>
<span class="quotelev1">&gt; that B has enough buffer space to accept the message. Credits are
</span><br>
<span class="quotelev1">&gt; required by the mpi layer regardless of the BTL transport layer used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been told by a Voltaire tech that this is not so, the credits are
</span><br>
<span class="quotelev1">&gt; used by the infiniband transport layer to reliably send a message, and
</span><br>
<span class="quotelev1">&gt; is not an openmpi feature.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Federico
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
--Kris
叶ってしまう瘢雹夢は本当の夢と言えん。
[A dream that comes true can't really be called a dream.]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4950.php">Lydia Heck: "[OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error"</a>
<li><strong>Previous message:</strong> <a href="4948.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4947.php">Sacerdoti, Federico: "[OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4951.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4951.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4966.php">Brian W. Barrett: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
