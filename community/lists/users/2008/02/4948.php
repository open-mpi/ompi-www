<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 17:07:50 2008" -->
<!-- isoreceived="20080201220750" -->
<!-- sent="Fri, 1 Feb 2008 17:07:45 -0500" -->
<!-- isosent="20080201220745" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="7E2A1117-4A22-497E-BFE4-3A52DE4297CD_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 17:07:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4949.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4947.php">Sacerdoti, Federico: "[OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4947.php">Sacerdoti, Federico: "[OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4949.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Voltaire tech was right. There is no credit management at the  
<br>
upper level, each BTL is allowed to do it (if needed). This doesn't  
<br>
means the transport is not reliable. Most of the devices have internal  
<br>
flow control, and Open MPI rely on it instead of implementing our own.  
<br>
However, the devices that do not provide in their low level drivers or  
<br>
hardware such feature, have it implemented at the BTL layer. As an  
<br>
example, infiniband have a flow control mechanism implemented in the  
<br>
BTL.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 1, 2008, at 3:05 PM, Sacerdoti, Federico wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
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
<span class="quotelev1">&gt; message to node B, it must have a credit to do so. The credit  
</span><br>
<span class="quotelev1">&gt; assures A
</span><br>
<span class="quotelev1">&gt; that B has enough buffer space to accept the message. Credits are
</span><br>
<span class="quotelev1">&gt; required by the mpi layer regardless of the BTL transport layer used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been told by a Voltaire tech that this is not so, the credits  
</span><br>
<span class="quotelev1">&gt; are
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4948/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4949.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4947.php">Sacerdoti, Federico: "[OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4947.php">Sacerdoti, Federico: "[OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4949.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
