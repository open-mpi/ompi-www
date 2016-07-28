<?
$subject_val = "Re: [OMPI users] mpi_reduce implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 10:04:24 2016" -->
<!-- isoreceived="20160708140424" -->
<!-- sent="Fri, 08 Jul 2016 16:02:00 +0200" -->
<!-- isosent="20160708140200" -->
<!-- name="Juan Francisco Mart&#237;nez" -->
<!-- email="juan.francisco.martinez_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_reduce implementation" -->
<!-- id="1467986520.5372.26.camel_at_est.fib.upc.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkWwQKPtdWjGay=iRmySvmEQPpjG0rgryTkLodCqDp54cw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_reduce implementation<br>
<strong>From:</strong> Juan Francisco Mart&#237;nez (<em>juan.francisco.martinez_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-08 10:02:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29610.php">Howard Pritchard: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="29608.php">Gilles Gouaillardet: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>In reply to:</strong> <a href="29607.php">George Bosilca: "Re: [OMPI users] mpi_reduce implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29608.php">Gilles Gouaillardet: "Re: [OMPI users] mpi_reduce implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>Thanks for your rapid answer. 
<br>
<p>I just ask for &quot;simple synchronized reduction implementation&quot; because I
<br>
am using a simple (and therefore really rapid) mpi communications
<br>
simulator that models all collectives as synchronized collectives and I
<br>
appreciate a huge differences between the real and the simulated
<br>
execution because the reductions. 
<br>
<p>After note that in reallity there is no case where the mpi_reductions
<br>
syncrhonizes, then maybe could be a good idea to try to model an
<br>
approximation to the real behaviour.
<br>
<p>There is any place where I can found documentation about the different
<br>
algorithms that are implemented for mpi_reduction?
<br>
<p>- Fran
<br>
<p>On Fri, 2016-07-08 at 15:40 +0200, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 8, 2016 3:16 PM, &quot;Juan Francisco Mart&#195;&#173;nez&quot; &lt;
</span><br>
<span class="quotelev1">&gt; juan.francisco.martinez_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi everybody!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; First of all I want to congratulate all of you because the quality
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev2">&gt; &gt; the community, I have solved a lot of doubts just reading the
</span><br>
<span class="quotelev1">&gt; mailing
</span><br>
<span class="quotelev2">&gt; &gt; list.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However I have a question that I can not solve... Until now I
</span><br>
<span class="quotelev1">&gt; though
</span><br>
<span class="quotelev2">&gt; &gt; that all the collective operations have an implicit sincronization,
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev2">&gt; &gt; I can see that this is not true at all (because optimizations?).
</span><br>
<span class="quotelev1">&gt; Then,
</span><br>
<span class="quotelev2">&gt; &gt; after searching a little bit on the web I saw that there are
</span><br>
<span class="quotelev1">&gt; several
</span><br>
<span class="quotelev2">&gt; &gt; implementations of the reduction in openmpi, in fact there are 6
</span><br>
<span class="quotelev2">&gt; &gt; possible algorithm (at least on OMPI 1.6) that you can use by mean
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev2">&gt; &gt; the mca parameters...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I thought that one of them behaves as a synchronization but after
</span><br>
<span class="quotelev2">&gt; &gt; execute a test with each one, no one behaves as it. Then my
</span><br>
<span class="quotelev1">&gt; question
</span><br>
<span class="quotelev2">&gt; &gt; is, there is any possibility, by tuning ompi, the reduce operation
</span><br>
<span class="quotelev2">&gt; &gt; syncrhonize all the ranks that are involved at the end of the
</span><br>
<span class="quotelev2">&gt; &gt; operation?
</span><br>
<span class="quotelev1">&gt; The straightforward answer is that the reduction provides a logical
</span><br>
<span class="quotelev1">&gt; synchronization only between the root of the reduction and each one
</span><br>
<span class="quotelev1">&gt; of the participants individually.
</span><br>
<span class="quotelev1">&gt; As you already noticed this is not the case from a practical
</span><br>
<span class="quotelev1">&gt; perspective because different underlying algorithms can be used,  and
</span><br>
<span class="quotelev1">&gt; they use different communication patterns. Thus, you cannot,  and you
</span><br>
<span class="quotelev1">&gt; should not, make a parallel between a reduction and a
</span><br>
<span class="quotelev1">&gt; synchronization.
</span><br>
<span class="quotelev1">&gt; If you really need the synchronization behavior why don't you use
</span><br>
<span class="quotelev1">&gt; allreduce instead? Or at least a bcast of a single byte after the
</span><br>
<span class="quotelev1">&gt; reduction (it also works with a barrier but as already have 1/2 of
</span><br>
<span class="quotelev1">&gt; the synchronization, aka. all-to-root, this will be an overkill).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also I would like to know if there is any mechanism to know at
</span><br>
<span class="quotelev1">&gt; runtime
</span><br>
<span class="quotelev2">&gt; &gt; which algorithm is being used.
</span><br>
<span class="quotelev1">&gt; Again,  there is no simple answer. Even if the tuned collective
</span><br>
<span class="quotelev1">&gt; module could expose the algorithm, how do you know that a particular
</span><br>
<span class="quotelev1">&gt; collective will be using the tuned module? We order the collective
</span><br>
<span class="quotelev1">&gt; modules by priority,  and the decision of which module will handle
</span><br>
<span class="quotelev1">&gt; each collective is dynamic, based on the many factors.
</span><br>
<span class="quotelev1">&gt; George
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for all!
</span><br>
<span class="quotelev2">&gt; &gt; - Fran
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29606.php">http://www.open-mpi.org/community/lists/users/2016/07/29606.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29607.php">http://www.open-mpi.org/community/lists/users/2016/07/29607.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29610.php">Howard Pritchard: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="29608.php">Gilles Gouaillardet: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>In reply to:</strong> <a href="29607.php">George Bosilca: "Re: [OMPI users] mpi_reduce implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29608.php">Gilles Gouaillardet: "Re: [OMPI users] mpi_reduce implementation"</a>
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
