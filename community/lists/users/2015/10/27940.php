<?
$subject_val = "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 20:31:25 2015" -->
<!-- isoreceived="20151029003125" -->
<!-- sent="Wed, 28 Oct 2015 19:31:17 -0500" -->
<!-- isosent="20151029003117" -->
<!-- name="Joshua Mora" -->
<!-- email="joshua_mora_at_[hidden]" -->
<!-- subject="Re: [OMPI users] single CPU vs four CPU result differences, is it normal?" -->
<!-- id="221TJCaER8528S06.1446078677_at_web06.cms.usa.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] single CPU vs four CPU result differences, is it normal?" -->
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
<strong>From:</strong> Joshua Mora (<em>joshua_mora_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-28 20:31:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27941.php">Fabian Wein: "[OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27939.php">Gilles Gouaillardet: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Maybe in reply to:</strong> <a href="27932.php">Diego Avesani: "[OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Diego.
<br>
Assuming you are not properly coding the solver.
<br>
Write a problem so you know the exact solution.
<br>
That is know A (a very simple non singular SDP) and x_ , where x_ !=0. Make x
<br>
a linear function or a constant so it is super easy to spot where it is
<br>
happening the bad x's.
<br>
I assume A has the boundary conditions on it and you are not taking care of
<br>
them outside of A. If not you will have to check those too.
<br>
Then find b=A*x_.
<br>
Given A and b, initialize x to zero.
<br>
Then use your CG to find x.
<br>
Display/plot your x or the error ( abs(x-x_) ) as you go on the iterations.
<br>
Display them in a map where you can easily identify/locate your cores and the
<br>
distribution of A,x and b.
<br>
You will soon see where (eg. not exchanging data between your cores properly)
<br>
your data x is not being properly updated.
<br>
I assume you are also using an easy 1D or 2D partitioning of your data so you
<br>
can easily spot the issues.
<br>
<p>Good luck.
<br>
Joshua
<br>
<p>PS. Usually you have to build a communication library for your algebra that
<br>
you trust (thoroughly tested). Then you build your data types of the algebra
<br>
bit a bit: scalar, vector, matrix. Then the operators (addition, product), and
<br>
finally your solver  : CG, BiCGSTAB, GMRESR,...
<br>
<p>------ Original Message ------
<br>
Received: 05:58 PM CDT, 10/28/2015
<br>
From: Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] single CPU vs four CPU result differences,	is it
<br>
normal?
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
<span class="quotelev2">&gt; &gt; Diego,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There aren't many linear solvers that are bit-consistent, where the
</span><br>
answer
<br>
<span class="quotelev2">&gt; &gt; is the same no matter how many cores or processes you use.  Intel's
</span><br>
version
<br>
<span class="quotelev2">&gt; &gt; of Pardiso is bit-consistent and I think MUMPS 5.0 might be, but that's
</span><br>
<span class="quotelev2">&gt; &gt; all.  You should assume your answer will not be exactly the same as you
</span><br>
<span class="quotelev2">&gt; &gt; change the number of cores or processes, although you should reach the
</span><br>
same
<br>
<span class="quotelev2">&gt; &gt; overall error tolerance in approximately the same number of iterations.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Damien
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 2015-10-28 3:51 PM, Diego Avesani wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; dear Andreas, dear all,
</span><br>
<span class="quotelev2">&gt; &gt; The code is quite long. It is a conjugate gradient algorithm to solve a
</span><br>
<span class="quotelev2">&gt; &gt; complex system.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have noticed that when a do cycle is small, let's say
</span><br>
<span class="quotelev2">&gt; &gt; do i=1,3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; enddo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the results are identical. If the cycle is big, let's say do i=1,20, the
</span><br>
<span class="quotelev2">&gt; &gt; results are different and the difference increase with the number of
</span><br>
<span class="quotelev2">&gt; &gt; iterations.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What do you think?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Diego
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 28 October 2015 at 22:32, Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 22:03 Wed 28 Oct     , Diego Avesani wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; When I use a single CPU a get a results, when I use 4 CPU I get
</span><br>
another
<br>
<span class="quotelev4">&gt; &gt;&gt; &gt; one. I do not think that very is a bug.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sounds like a bug to me, most likely in your code.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Do you think that these small differences are normal?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It depends on what small means. Floating point operations in a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; computer are generally not commutative, so parallelization may in deed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; lead to different results.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Is there any way to get the same results? is some align problem?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Impossible to say without knowing your code.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Andreas
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ==========================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev3">&gt; &gt;&gt; HPC and Grid Computing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Department of Computer Science 3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +49 9131 85-27910
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ==========================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (\___/)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (+'.'+)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev3">&gt; &gt;&gt; signature to help him gain world domination!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27933.php">http://www.open-mpi.org/community/lists/users/2015/10/27933.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2015/10/27934.php">http://www.open-mpi.org/community/lists/users/2015/10/27934.php</a>
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27935.php">http://www.open-mpi.org/community/lists/users/2015/10/27935.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2015/10/27936.php">http://www.open-mpi.org/community/lists/users/2015/10/27936.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27941.php">Fabian Wein: "[OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27939.php">Gilles Gouaillardet: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Maybe in reply to:</strong> <a href="27932.php">Diego Avesani: "[OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
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
