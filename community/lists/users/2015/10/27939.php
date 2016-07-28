<?
$subject_val = "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 19:58:27 2015" -->
<!-- isoreceived="20151028235827" -->
<!-- sent="Thu, 29 Oct 2015 08:58:21 +0900" -->
<!-- isosent="20151028235821" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] single CPU vs four CPU result differences, is it normal?" -->
<!-- id="5631611D.1060906_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-28 19:58:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27940.php">Joshua Mora: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Previous message:</strong> <a href="27938.php">Noam Bernstein: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>In reply to:</strong> <a href="27936.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27944.php">BRADLEY, PETER C          PW: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Diego,
<br>
<p>your problem might be numerically unstable, that's why results might 
<br>
differ between one run and an other.
<br>
floating point numbers have their own restrictions (rounding errors, 
<br>
absorption, ...)
<br>
<p>are you running single or double precision ?
<br>
if you are running single precision, you might give double precision a try.
<br>
(if your code is written in fortran, you can use the -r8 flag to treat 
<br>
real (single precision) as double)
<br>
<p>let me give you a (theoretical) example :
<br>
<p>1 / (1.e+100 + 1 - 1.e+100) = ?
<br>
<p>if you do this by hand, the answer is 1
<br>
now if you ask a computer using floating point numbers to do that, he 
<br>
might do
<br>
<p>1.e+100 +1 ~= 1.e+100
<br>
1.e+100 - 1.e+100 = 0
<br>
1 / 0 = Division by zero
<br>
<p>an other classic example is
<br>
sum = 0
<br>
do i=1,n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sum = sum + 1/i
<br>
done
<br>
<p>that might look trivial, but it is very hard to get accurate results 
<br>
with a computer :
<br>
a naive approach will give you inaccurate results
<br>
<p>bottom line, you notice differences, and that is normal.
<br>
the question is how do you compare your results and how much do they 
<br>
differ ?
<br>
if you do a binary comparison of the results, it is very likely results 
<br>
will differ.
<br>
if you compare a and b, and abs(a-b) / abs(a)  is very low (depending on 
<br>
you using single vs double precision),
<br>
then this is likely the normal behaviour.
<br>
now if this number is high, that could be a bug in your code (never say 
<br>
never ...) or your algorithm might be numerically unstable (at least for 
<br>
your test case)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 10/29/2015 7:58 AM, Diego Avesani wrote:
<br>
<span class="quotelev1">&gt; dear Damin,
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
<span class="quotelev1">&gt; On 28 October 2015 at 23:09, Damien &lt;damien_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:damien_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Diego,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     There aren't many linear solvers that are bit-consistent, where
</span><br>
<span class="quotelev1">&gt;     the answer is the same no matter how many cores or processes you
</span><br>
<span class="quotelev1">&gt;     use.  Intel's version of Pardiso is bit-consistent and I think
</span><br>
<span class="quotelev1">&gt;     MUMPS 5.0 might be, but that's all.  You should assume your answer
</span><br>
<span class="quotelev1">&gt;     will not be exactly the same as you change the number of cores or
</span><br>
<span class="quotelev1">&gt;     processes, although you should reach the same overall error
</span><br>
<span class="quotelev1">&gt;     tolerance in approximately the same number of iterations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 2015-10-28 3:51 PM, Diego Avesani wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     dear Andreas, dear all,
</span><br>
<span class="quotelev2">&gt;&gt;     The code is quite long. It is a conjugate gradient algorithm to
</span><br>
<span class="quotelev2">&gt;&gt;     solve a complex system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I have noticed that when a do cycle is small, let's say
</span><br>
<span class="quotelev2">&gt;&gt;     do i=1,3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     enddo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     the results are identical. If the cycle is big, let's say do
</span><br>
<span class="quotelev2">&gt;&gt;     i=1,20, the results are different and the difference increase
</span><br>
<span class="quotelev2">&gt;&gt;     with the number of iterations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     What do you think?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Diego
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On 28 October 2015 at 22:32, Andreas Sch&#228;fer &lt;gentryx_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:gentryx_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On 22:03 Wed 28 Oct     , Diego Avesani wrote:
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; When I use a single CPU a get a results, when I use 4 CPU I
</span><br>
<span class="quotelev2">&gt;&gt;         get another
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; one. I do not think that very is a bug.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Sounds like a bug to me, most likely in your code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Do you think that these small differences are normal?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         It depends on what small means. Floating point operations in a
</span><br>
<span class="quotelev2">&gt;&gt;         computer are generally not commutative, so parallelization
</span><br>
<span class="quotelev2">&gt;&gt;         may in deed
</span><br>
<span class="quotelev2">&gt;&gt;         lead to different results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Is there any way to get the same results? is some align
</span><br>
<span class="quotelev2">&gt;&gt;         problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Impossible to say without knowing your code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Cheers
</span><br>
<span class="quotelev2">&gt;&gt;         -Andreas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         --
</span><br>
<span class="quotelev2">&gt;&gt;         ==========================================================
</span><br>
<span class="quotelev2">&gt;&gt;         Andreas Sch&#228;fer
</span><br>
<span class="quotelev2">&gt;&gt;         HPC and Grid Computing
</span><br>
<span class="quotelev2">&gt;&gt;         Department of Computer Science 3
</span><br>
<span class="quotelev2">&gt;&gt;         Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
</span><br>
<span class="quotelev2">&gt;&gt;         +49 9131 85-27910 &lt;tel:%2B49%209131%2085-27910&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         PGP/GPG key via keyserver
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
</span><br>
<span class="quotelev2">&gt;&gt;         ==========================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         (\___/)
</span><br>
<span class="quotelev2">&gt;&gt;         (+'.'+)
</span><br>
<span class="quotelev2">&gt;&gt;         (&quot;)_(&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;         This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev2">&gt;&gt;         signature to help him gain world domination!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/10/27933.php">http://www.open-mpi.org/community/lists/users/2015/10/27933.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________ users mailing
</span><br>
<span class="quotelev2">&gt;&gt;     list users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27934.php">http://www.open-mpi.org/community/lists/users/2015/10/27934.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/10/27935.php">http://www.open-mpi.org/community/lists/users/2015/10/27935.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27936.php">http://www.open-mpi.org/community/lists/users/2015/10/27936.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27939/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27940.php">Joshua Mora: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Previous message:</strong> <a href="27938.php">Noam Bernstein: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>In reply to:</strong> <a href="27936.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27944.php">BRADLEY, PETER C          PW: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
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
