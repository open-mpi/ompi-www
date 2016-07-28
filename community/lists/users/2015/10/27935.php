<?
$subject_val = "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 18:10:01 2015" -->
<!-- isoreceived="20151028221001" -->
<!-- sent="Wed, 28 Oct 2015 16:09:59 -0600" -->
<!-- isosent="20151028220959" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] single CPU vs four CPU result differences, is it normal?" -->
<!-- id="563147B7.6030003_at_khubla.com" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-28 18:09:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27936.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Previous message:</strong> <a href="27934.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>In reply to:</strong> <a href="27934.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27936.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Reply:</strong> <a href="27936.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Diego,
<br>
<p>There aren't many linear solvers that are bit-consistent, where the 
<br>
answer is the same no matter how many cores or processes you use. 
<br>
Intel's version of Pardiso is bit-consistent and I think MUMPS 5.0 might 
<br>
be, but that's all.  You should assume your answer will not be exactly 
<br>
the same as you change the number of cores or processes, although you 
<br>
should reach the same overall error tolerance in approximately the same 
<br>
number of iterations.
<br>
<p>Damien
<br>
<p>On 2015-10-28 3:51 PM, Diego Avesani wrote:
<br>
<span class="quotelev1">&gt; dear Andreas, dear all,
</span><br>
<span class="quotelev1">&gt; The code is quite long. It is a conjugate gradient algorithm to solve 
</span><br>
<span class="quotelev1">&gt; a complex system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have noticed that when a do cycle is small, let's say
</span><br>
<span class="quotelev1">&gt; do i=1,3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; enddo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the results are identical. If the cycle is big, let's say do i=1,20, 
</span><br>
<span class="quotelev1">&gt; the results are different and the difference increase with the number 
</span><br>
<span class="quotelev1">&gt; of iterations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you think?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 28 October 2015 at 22:32, Andreas Sch&#228;fer &lt;gentryx_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gentryx_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 22:03 Wed 28 Oct     , Diego Avesani wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; When I use a single CPU a get a results, when I use 4 CPU I get
</span><br>
<span class="quotelev1">&gt;     another
</span><br>
<span class="quotelev2">&gt;     &gt; one. I do not think that very is a bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Sounds like a bug to me, most likely in your code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Do you think that these small differences are normal?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It depends on what small means. Floating point operations in a
</span><br>
<span class="quotelev1">&gt;     computer are generally not commutative, so parallelization may in deed
</span><br>
<span class="quotelev1">&gt;     lead to different results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Is there any way to get the same results? is some align problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Impossible to say without knowing your code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers
</span><br>
<span class="quotelev1">&gt;     -Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     ==========================================================
</span><br>
<span class="quotelev1">&gt;     Andreas Sch&#228;fer
</span><br>
<span class="quotelev1">&gt;     HPC and Grid Computing
</span><br>
<span class="quotelev1">&gt;     Department of Computer Science 3
</span><br>
<span class="quotelev1">&gt;     Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
</span><br>
<span class="quotelev1">&gt;     +49 9131 85-27910 &lt;tel:%2B49%209131%2085-27910&gt;
</span><br>
<span class="quotelev1">&gt;     PGP/GPG key via keyserver
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
</span><br>
<span class="quotelev1">&gt;     ==========================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     (\___/)
</span><br>
<span class="quotelev1">&gt;     (+'.'+)
</span><br>
<span class="quotelev1">&gt;     (&quot;)_(&quot;)
</span><br>
<span class="quotelev1">&gt;     This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev1">&gt;     signature to help him gain world domination!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/10/27933.php">http://www.open-mpi.org/community/lists/users/2015/10/27933.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27934.php">http://www.open-mpi.org/community/lists/users/2015/10/27934.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27935/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27936.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Previous message:</strong> <a href="27934.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>In reply to:</strong> <a href="27934.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27936.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Reply:</strong> <a href="27936.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
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
