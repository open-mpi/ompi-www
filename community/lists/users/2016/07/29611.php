<?
$subject_val = "Re: [OMPI users] mpi_reduce implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 10:29:54 2016" -->
<!-- isoreceived="20160708142954" -->
<!-- sent="Fri, 8 Jul 2016 16:29:42 +0200" -->
<!-- isosent="20160708142942" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_reduce implementation" -->
<!-- id="CAMJJpkUQ5majd=z8GGXaGAJOS_8Du7XKOyA=4xR1nN8CkuKR6Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkV_8R5R8UDYxzAdtNwPzWPptmOVOnikXaVk+KfCjY3hFQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-07-08 10:29:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29612.php">Supun Kamburugamuve: "[OMPI users] Using Open MPI as a communication library"</a>
<li><strong>Previous message:</strong> <a href="29610.php">Howard Pritchard: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Maybe in reply to:</strong> <a href="29606.php">Juan Francisco Mart&#237;nez: "[OMPI users] mpi_reduce implementation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 8, 2016 4:04 PM, &quot;Juan Francisco Mart&#195;&#173;nez&quot; &lt;
<br>
juan.francisco.martinez_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your rapid answer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just ask for &quot;simple synchronized reduction implementation&quot; because I
</span><br>
<span class="quotelev1">&gt; am using a simple (and therefore really rapid) mpi communications
</span><br>
<span class="quotelev1">&gt; simulator that models all collectives as synchronized collectives and I
</span><br>
<span class="quotelev1">&gt; appreciate a huge differences between the real and the simulated
</span><br>
<span class="quotelev1">&gt; execution because the reductions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After note that in reallity there is no case where the mpi_reductions
</span><br>
<span class="quotelev1">&gt; syncrhonizes, then maybe could be a good idea to try to model an
</span><br>
<span class="quotelev1">&gt; approximation to the real behaviour.
</span><br>
<p>Then maybe you want to take a look into the sync collective module, which
<br>
does exactly what you want /need,  i.e. automatically adds a barrier every
<br>
X collective per communicator. I'm away from my computer and I can't check
<br>
if we still have this module in the repo, if not you should be able to
<br>
resurrect it from an older version.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is any place where I can found documentation about the different
</span><br>
<span class="quotelev1">&gt; algorithms that are implemented for mpi_reduction?
</span><br>
<p>Not that I know of. Ompi_info should be good enough no?
<br>
<p>George
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Fran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, 2016-07-08 at 15:40 +0200, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 8, 2016 3:16 PM, &quot;Juan Francisco Mart&#195;&#173;nez&quot; &lt;
</span><br>
<span class="quotelev2">&gt; &gt; juan.francisco.martinez_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi everybody!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; First of all I want to congratulate all of you because the quality
</span><br>
<span class="quotelev2">&gt; &gt; of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the community, I have solved a lot of doubts just reading the
</span><br>
<span class="quotelev2">&gt; &gt; mailing
</span><br>
<span class="quotelev3">&gt; &gt; &gt; list.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; However I have a question that I can not solve... Until now I
</span><br>
<span class="quotelev2">&gt; &gt; though
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that all the collective operations have an implicit sincronization,
</span><br>
<span class="quotelev2">&gt; &gt; but
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I can see that this is not true at all (because optimizations?).
</span><br>
<span class="quotelev2">&gt; &gt; Then,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; after searching a little bit on the web I saw that there are
</span><br>
<span class="quotelev2">&gt; &gt; several
</span><br>
<span class="quotelev3">&gt; &gt; &gt; implementations of the reduction in openmpi, in fact there are 6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; possible algorithm (at least on OMPI 1.6) that you can use by mean
</span><br>
<span class="quotelev2">&gt; &gt; of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the mca parameters...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I thought that one of them behaves as a synchronization but after
</span><br>
<span class="quotelev3">&gt; &gt; &gt; execute a test with each one, no one behaves as it. Then my
</span><br>
<span class="quotelev2">&gt; &gt; question
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is, there is any possibility, by tuning ompi, the reduce operation
</span><br>
<span class="quotelev3">&gt; &gt; &gt; syncrhonize all the ranks that are involved at the end of the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; operation?
</span><br>
<span class="quotelev2">&gt; &gt; The straightforward answer is that the reduction provides a logical
</span><br>
<span class="quotelev2">&gt; &gt; synchronization only between the root of the reduction and each one
</span><br>
<span class="quotelev2">&gt; &gt; of the participants individually.
</span><br>
<span class="quotelev2">&gt; &gt; As you already noticed this is not the case from a practical
</span><br>
<span class="quotelev2">&gt; &gt; perspective because different underlying algorithms can be used,  and
</span><br>
<span class="quotelev2">&gt; &gt; they use different communication patterns. Thus, you cannot,  and you
</span><br>
<span class="quotelev2">&gt; &gt; should not, make a parallel between a reduction and a
</span><br>
<span class="quotelev2">&gt; &gt; synchronization.
</span><br>
<span class="quotelev2">&gt; &gt; If you really need the synchronization behavior why don't you use
</span><br>
<span class="quotelev2">&gt; &gt; allreduce instead? Or at least a bcast of a single byte after the
</span><br>
<span class="quotelev2">&gt; &gt; reduction (it also works with a barrier but as already have 1/2 of
</span><br>
<span class="quotelev2">&gt; &gt; the synchronization, aka. all-to-root, this will be an overkill).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Also I would like to know if there is any mechanism to know at
</span><br>
<span class="quotelev2">&gt; &gt; runtime
</span><br>
<span class="quotelev3">&gt; &gt; &gt; which algorithm is being used.
</span><br>
<span class="quotelev2">&gt; &gt; Again,  there is no simple answer. Even if the tuned collective
</span><br>
<span class="quotelev2">&gt; &gt; module could expose the algorithm, how do you know that a particular
</span><br>
<span class="quotelev2">&gt; &gt; collective will be using the tuned module? We order the collective
</span><br>
<span class="quotelev2">&gt; &gt; modules by priority,  and the decision of which module will handle
</span><br>
<span class="quotelev2">&gt; &gt; each collective is dynamic, based on the many factors.
</span><br>
<span class="quotelev2">&gt; &gt; George
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks for all!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - Fran
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29606.php">http://www.open-mpi.org/community/lists/users/2016/07/29606.php</a>
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
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29607.php">http://www.open-mpi.org/community/lists/users/2016/07/29607.php</a>
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
<a href="http://www.open-mpi.org/community/lists/users/2016/07/29609.php">http://www.open-mpi.org/community/lists/users/2016/07/29609.php</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29611/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29612.php">Supun Kamburugamuve: "[OMPI users] Using Open MPI as a communication library"</a>
<li><strong>Previous message:</strong> <a href="29610.php">Howard Pritchard: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Maybe in reply to:</strong> <a href="29606.php">Juan Francisco Mart&#237;nez: "[OMPI users] mpi_reduce implementation"</a>
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
