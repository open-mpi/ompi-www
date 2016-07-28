<?
$subject_val = "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 18 15:17:37 2015" -->
<!-- isoreceived="20150218201737" -->
<!-- sent="Wed, 18 Feb 2015 15:17:35 -0500" -->
<!-- isosent="20150218201735" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Several Bcast calls in a loop causing the code to hang" -->
<!-- id="CAG4F6z94RQHOZBJzuFy5HtOeEOFQnTkSH0scgdtiMLosnXOetA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAC_-9jy_+3XOX1Yp7XGxj2cZeB4ZWViVDBA0m=2xPOcURDnvBg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Several Bcast calls in a loop causing the code to hang<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-18 15:17:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26342.php">Éric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26340.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>In reply to:</strong> <a href="26338.php">Sachin Krishnan: "[OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26363.php">Sachin Krishnan: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sachin,
<br>
<p>Can you, please, provide a command line? Additional information about your
<br>
system could be helpful also.
<br>
<p>Josh
<br>
<p>On Wed, Feb 18, 2015 at 3:43 AM, Sachin Krishnan &lt;sachkris_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to MPI and also this list.
</span><br>
<span class="quotelev1">&gt; I wrote an MPI code with several MPI_Bcast calls in a loop. My code was
</span><br>
<span class="quotelev1">&gt; getting stuck at random points, ie it was not systematic. After a few hours
</span><br>
<span class="quotelev1">&gt; of debugging and googling, I found that the issue may be with the several
</span><br>
<span class="quotelev1">&gt; MPI_Bcast calls in a loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I stumbled on this test code which can reproduce the issue:
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/fintler/ompi/blob/master/orte/test/mpi/bcast_loop.c">https://github.com/fintler/ompi/blob/master/orte/test/mpi/bcast_loop.c</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Im using OpenMPI v1.8.4 installed from official Arch Linux repo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it a known issue with OpenMPI?
</span><br>
<span class="quotelev1">&gt; Is it some problem with the way openmpi is configured in my system?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sachin
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26338.php">http://www.open-mpi.org/community/lists/users/2015/02/26338.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26341/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26342.php">Éric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26340.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>In reply to:</strong> <a href="26338.php">Sachin Krishnan: "[OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26363.php">Sachin Krishnan: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
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
