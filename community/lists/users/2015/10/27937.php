<?
$subject_val = "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 19:36:09 2015" -->
<!-- isoreceived="20151028233609" -->
<!-- sent="Wed, 28 Oct 2015 19:35:47 -0400" -->
<!-- isosent="20151028233547" -->
<!-- name="Bibrak Qamar" -->
<!-- email="bibrakc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] single CPU vs four CPU result differences, is it normal?" -->
<!-- id="CANFHntDz3sUOMSzS6vGq83zgSMPq9yQFhv=jpkdnrtm9c8WKGg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG8o1y5N-SbNHYtMcXeWAY3CJEzhRr6QCJyqsd4=zJJZyM4_UQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Bibrak Qamar (<em>bibrakc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-28 19:35:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27938.php">Noam Bernstein: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Previous message:</strong> <a href="27936.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>In reply to:</strong> <a href="27936.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27938.php">Noam Bernstein: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Diego,
<br>
<p>I will suggest you read the following two. It will give you some good
<br>
understanding as to what is happening:
<br>
<p><a href="https://en.wikipedia.org/wiki/Butterfly_effect">https://en.wikipedia.org/wiki/Butterfly_effect</a>
<br>
<p><a href="http://www.amazon.com/The-End-Error-Computing-Computational/dp/1482239868">http://www.amazon.com/The-End-Error-Computing-Computational/dp/1482239868</a>
<br>
<p><p>--Bibrak
<br>
<p>On Wed, Oct 28, 2015 at 6:58 PM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; dear Damin,
</span><br>
<span class="quotelev1">&gt; I wrote the solver by myself. I have not understood your answer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 28 October 2015 at 23:09, Damien &lt;damien_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diego,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There aren't many linear solvers that are bit-consistent, where the
</span><br>
<span class="quotelev2">&gt;&gt; answer is the same no matter how many cores or processes you use.  Intel's
</span><br>
<span class="quotelev2">&gt;&gt; version of Pardiso is bit-consistent and I think MUMPS 5.0 might be, but
</span><br>
<span class="quotelev2">&gt;&gt; that's all.  You should assume your answer will not be exactly the same as
</span><br>
<span class="quotelev2">&gt;&gt; you change the number of cores or processes, although you should reach the
</span><br>
<span class="quotelev2">&gt;&gt; same overall error tolerance in approximately the same number of iterations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2015-10-28 3:51 PM, Diego Avesani wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; dear Andreas, dear all,
</span><br>
<span class="quotelev2">&gt;&gt; The code is quite long. It is a conjugate gradient algorithm to solve a
</span><br>
<span class="quotelev2">&gt;&gt; complex system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have noticed that when a do cycle is small, let's say
</span><br>
<span class="quotelev2">&gt;&gt; do i=1,3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; enddo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the results are identical. If the cycle is big, let's say do i=1,20, the
</span><br>
<span class="quotelev2">&gt;&gt; results are different and the difference increase with the number of
</span><br>
<span class="quotelev2">&gt;&gt; iterations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do you think?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diego
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 28 October 2015 at 22:32, Andreas Sch&#195;&#164;fer &lt;gentryx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 22:03 Wed 28 Oct     , Diego Avesani wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; When I use a single CPU a get a results, when I use 4 CPU I get another
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; one. I do not think that very is a bug.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sounds like a bug to me, most likely in your code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Do you think that these small differences are normal?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It depends on what small means. Floating point operations in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computer are generally not commutative, so parallelization may in deed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lead to different results.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Is there any way to get the same results? is some align problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Impossible to say without knowing your code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Andreas
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==========================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andreas Sch&#195;&#164;fer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC and Grid Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Computer Science 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Friedrich-Alexander-Universit&#195;&#164;t Erlangen-N&#195;&#188;rnberg, Germany
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +49 9131 85-27910
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==========================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (\___/)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (+'.'+)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signature to help him gain world domination!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27933.php">http://www.open-mpi.org/community/lists/users/2015/10/27933.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27934.php">http://www.open-mpi.org/community/lists/users/2015/10/27934.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27935.php">http://www.open-mpi.org/community/lists/users/2015/10/27935.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27936.php">http://www.open-mpi.org/community/lists/users/2015/10/27936.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27937/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27938.php">Noam Bernstein: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Previous message:</strong> <a href="27936.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>In reply to:</strong> <a href="27936.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27938.php">Noam Bernstein: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
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
