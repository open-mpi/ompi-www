<?
$subject_val = "Re: [OMPI users] mpi_reduce implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 09:40:46 2016" -->
<!-- isoreceived="20160708134046" -->
<!-- sent="Fri, 8 Jul 2016 15:40:45 +0200" -->
<!-- isosent="20160708134045" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_reduce implementation" -->
<!-- id="CAMJJpkWwQKPtdWjGay=iRmySvmEQPpjG0rgryTkLodCqDp54cw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1467983613.5372.16.camel_at_est.fib.upc.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-08 09:40:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29608.php">Gilles Gouaillardet: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>Previous message:</strong> <a href="29606.php">Juan Francisco Mart&#237;nez: "[OMPI users] mpi_reduce implementation"</a>
<li><strong>In reply to:</strong> <a href="29606.php">Juan Francisco Mart&#237;nez: "[OMPI users] mpi_reduce implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29609.php">Juan Francisco Martínez: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>Reply:</strong> <a href="29609.php">Juan Francisco Martínez: "Re: [OMPI users] mpi_reduce implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 8, 2016 3:16 PM, &quot;Juan Francisco Mart&#195;&#173;nez&quot; &lt;
<br>
juan.francisco.martinez_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi everybody!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all I want to congratulate all of you because the quality of
</span><br>
<span class="quotelev1">&gt; the community, I have solved a lot of doubts just reading the mailing
</span><br>
<span class="quotelev1">&gt; list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However I have a question that I can not solve... Until now I though
</span><br>
<span class="quotelev1">&gt; that all the collective operations have an implicit sincronization, but
</span><br>
<span class="quotelev1">&gt; I can see that this is not true at all (because optimizations?). Then,
</span><br>
<span class="quotelev1">&gt; after searching a little bit on the web I saw that there are several
</span><br>
<span class="quotelev1">&gt; implementations of the reduction in openmpi, in fact there are 6
</span><br>
<span class="quotelev1">&gt; possible algorithm (at least on OMPI 1.6) that you can use by mean of
</span><br>
<span class="quotelev1">&gt; the mca parameters...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought that one of them behaves as a synchronization but after
</span><br>
<span class="quotelev1">&gt; execute a test with each one, no one behaves as it. Then my question
</span><br>
<span class="quotelev1">&gt; is, there is any possibility, by tuning ompi, the reduce operation
</span><br>
<span class="quotelev1">&gt; syncrhonize all the ranks that are involved at the end of the
</span><br>
<span class="quotelev1">&gt; operation?
</span><br>
<p>The straightforward answer is that the reduction provides a logical
<br>
synchronization only between the root of the reduction and each one of the
<br>
participants individually.
<br>
<p>As you already noticed this is not the case from a practical perspective
<br>
because different underlying algorithms can be used,  and they use
<br>
different communication patterns. Thus, you cannot,  and you should not,
<br>
make a parallel between a reduction and a synchronization.
<br>
<p>If you really need the synchronization behavior why don't you use allreduce
<br>
instead? Or at least a bcast of a single byte after the reduction (it also
<br>
works with a barrier but as already have 1/2 of the synchronization, aka.
<br>
all-to-root, this will be an overkill).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also I would like to know if there is any mechanism to know at runtime
</span><br>
<span class="quotelev1">&gt; which algorithm is being used.
</span><br>
<p>Again,  there is no simple answer. Even if the tuned collective module
<br>
could expose the algorithm, how do you know that a particular collective
<br>
will be using the tuned module? We order the collective modules by
<br>
priority,  and the decision of which module will handle each collective is
<br>
dynamic, based on the many factors.
<br>
<p>George
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for all!
</span><br>
<span class="quotelev1">&gt; - Fran
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
<a href="http://www.open-mpi.org/community/lists/users/2016/07/29606.php">http://www.open-mpi.org/community/lists/users/2016/07/29606.php</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29607/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29608.php">Gilles Gouaillardet: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>Previous message:</strong> <a href="29606.php">Juan Francisco Mart&#237;nez: "[OMPI users] mpi_reduce implementation"</a>
<li><strong>In reply to:</strong> <a href="29606.php">Juan Francisco Mart&#237;nez: "[OMPI users] mpi_reduce implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29609.php">Juan Francisco Martínez: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>Reply:</strong> <a href="29609.php">Juan Francisco Martínez: "Re: [OMPI users] mpi_reduce implementation"</a>
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
