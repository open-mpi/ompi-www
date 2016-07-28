<?
$subject_val = "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 12:12:40 2015" -->
<!-- isoreceived="20151029161240" -->
<!-- sent="Thu, 29 Oct 2015 16:12:18 +0000" -->
<!-- isosent="20151029161218" -->
<!-- name="BRADLEY, PETER C          PW" -->
<!-- email="peter.c.bradley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] single CPU vs four CPU result differences, is it normal?" -->
<!-- id="E6B38372B5A4894D811264E60EFF51E80FE697CE_at_UUSNWE1K.na.utcmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAG8o1y6nvcbxKxNmHyFJ8rQOUeRxaYBNZuPSSUmJPC_J_26C_g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] single CPU vs four CPU result differences, is it normal?<br>
<strong>From:</strong> BRADLEY, PETER C          PW (<em>peter.c.bradley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-29 12:12:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27945.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27943.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27934.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27940.php">Joshua Mora: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
CG solvers make use of dot products and other loops whose results may not be exactly the same depending on how those operations are performed serially or in parallel.  As the solver iterates, those differences *may* stack up.  However it&#226;&#128;&#153;s also really easy to write a subtle bug that causes the solver to converge to the wrong answer.  You need to have a very good validation process where you can check the result of your solution to understand whether it converges to the correct answer.
<br>

<br>
From: Diego Avesani [mailto:diego.avesani_at_[hidden]]
<br>
Sent: Wednesday, October 28, 2015 5:52 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] single CPU vs four CPU result differences, is it normal?
<br>

<br>
dear Andreas, dear all,
<br>
The code is quite long. It is a conjugate gradient algorithm to solve a complex system.
<br>

<br>
I have noticed that when a do cycle is small, let's say
<br>
do i=1,3
<br>

<br>
enddo
<br>

<br>
the results are identical. If the cycle is big, let's say do i=1,20, the results are different and the difference increase with the number of iterations.
<br>

<br>
What do you think?
<br>

<br>

<br>

<br>
Diego
<br>

<br>
On 28 October 2015 at 22:32, Andreas Sch&#195;&#164;fer &lt;gentryx_at_[hidden]&lt;mailto:gentryx_at_[hidden]&gt;&gt; wrote:
<br>
On 22:03 Wed 28 Oct     , Diego Avesani wrote:
<br>
<span class="quotelev1">&gt; When I use a single CPU a get a results, when I use 4 CPU I get another
</span><br>
<span class="quotelev1">&gt; one. I do not think that very is a bug.
</span><br>

<br>
Sounds like a bug to me, most likely in your code.
<br>

<br>
<span class="quotelev1">&gt; Do you think that these small differences are normal?
</span><br>

<br>
It depends on what small means. Floating point operations in a
<br>
computer are generally not commutative, so parallelization may in deed
<br>
lead to different results.
<br>

<br>
<span class="quotelev1">&gt; Is there any way to get the same results? is some align problem?
</span><br>

<br>
Impossible to say without knowing your code.
<br>

<br>
Cheers
<br>
-Andreas
<br>

<br>

<br>
--
<br>
==========================================================
<br>
Andreas Sch&#195;&#164;fer
<br>
HPC and Grid Computing
<br>
Department of Computer Science 3
<br>
Friedrich-Alexander-Universit&#195;&#164;t Erlangen-N&#195;&#188;rnberg, Germany
<br>
+49 9131 85-27910&lt;tel:%2B49%209131%2085-27910&gt;
<br>
PGP/GPG key via keyserver
<br>
<a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
<br>
==========================================================
<br>

<br>
(\___/)
<br>
(+'.'+)
<br>
(&quot;)_(&quot;)
<br>
This is Bunny. Copy and paste Bunny into your
<br>
signature to help him gain world domination!
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27933.php">http://www.open-mpi.org/community/lists/users/2015/10/27933.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27944/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27945.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27943.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27934.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27940.php">Joshua Mora: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
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
