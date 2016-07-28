<?
$subject_val = "Re: [OMPI users] gpudirect p2p (again)?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  9 14:07:32 2012" -->
<!-- isoreceived="20120709180732" -->
<!-- sent="Mon, 9 Jul 2012 11:07:26 -0700" -->
<!-- isosent="20120709180726" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gpudirect p2p (again)?" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E8A543BF5_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAO65DGc8_vOBxhjONTO6shk9GYkBp1a4PLTH2RzQ1en4dkY9yg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] gpudirect p2p (again)?<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-09 14:07:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19748.php">Dugenoux Albert: "[OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19746.php">Crni Gorac: "[OMPI users] gpudirect p2p (again)?"</a>
<li><strong>In reply to:</strong> <a href="19746.php">Crni Gorac: "[OMPI users] gpudirect p2p (again)?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this feature is in Open MPI 1.7.  It is implemented in the &quot;smcuda&quot; btl.  If you configure as outlined in the FAQ, then things should just work.  The smcuda btl will be selected and P2P will be used between GPUs on the same node.  This is only utilized on transfers of buffers that are larger than 4K in size.
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Crni Gorac
</span><br>
<span class="quotelev1">&gt;Sent: Monday, July 09, 2012 1:25 PM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] gpudirect p2p (again)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Trying to examine CUDA support in OpenMPI, using OpenMPI current feature
</span><br>
<span class="quotelev1">&gt;series (v1.7).  There was a question on this mailing list back in October 2011
</span><br>
<span class="quotelev1">&gt;(<a href="http://www.open-mpi.org/community/lists/users/2011/10/17539.php">http://www.open-mpi.org/community/lists/users/2011/10/17539.php</a>),
</span><br>
<span class="quotelev1">&gt;about OpenMPI being able to use P2P transfers in case when two MPI
</span><br>
<span class="quotelev1">&gt;processed involved in the transfer operation happens to execute on the same
</span><br>
<span class="quotelev1">&gt;machine, and the answer was that this feature is being implemented.  So my
</span><br>
<span class="quotelev1">&gt;question is - what is the current status here, is this feature supported now?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks.
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19748.php">Dugenoux Albert: "[OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19746.php">Crni Gorac: "[OMPI users] gpudirect p2p (again)?"</a>
<li><strong>In reply to:</strong> <a href="19746.php">Crni Gorac: "[OMPI users] gpudirect p2p (again)?"</a>
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
