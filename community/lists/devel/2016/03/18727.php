<?
$subject_val = "Re: [OMPI devel] Confusion about slots";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 09:49:08 2016" -->
<!-- isoreceived="20160324134908" -->
<!-- sent="Thu, 24 Mar 2016 22:49:04 +0900" -->
<!-- isosent="20160324134904" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Confusion about slots" -->
<!-- id="CAAkFZ5v-41aOavKdxxrY6Tm_OjMVMWSZBO52Nrp0QOhor0Mt-g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F809CEFC-6FEF-4D09-AA3B-0B67739E12D9_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Confusion about slots<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-24 09:49:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18728.php">Atchley, Scott: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Previous message:</strong> <a href="18726.php">Atchley, Scott: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>In reply to:</strong> <a href="18726.php">Atchley, Scott: "Re: [OMPI devel] Confusion about slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18728.php">Atchley, Scott: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Reply:</strong> <a href="18728.php">Atchley, Scott: "Re: [OMPI devel] Confusion about slots"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Scott,
<br>
<p>out of curiosity ...
<br>
<p>generally speaking, and when HT is more efficient, how is it used ?
<br>
- flat MPI, with one task per thread
<br>
- Hybrid MPI+OpenMP, a task is bound to a core or socket, but never to a
<br>
thread
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, March 24, 2016, Atchley, Scott &lt;atchleyes_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Aur&#195;&#169;lien,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have said the same thing to many users over the years. Our colleagues at
</span><br>
<span class="quotelev1">&gt; NERSC, however, have found that 20% of their codes work better when using
</span><br>
<span class="quotelev1">&gt; HT. Some codes benefit from SMT2 (i.e. HT) and even SMT4 (available on
</span><br>
<span class="quotelev1">&gt; Power8) in order to provide enough latency hiding of memory accesses.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As with everything in computer science, the answer is &#226;&#128;&#156;It depends&#226;&#128;&#157;. Try
</span><br>
<span class="quotelev1">&gt; with and without for each new generation of hardware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 23, 2016, at 4:32 PM, Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To add to what Ralf said, you probably do not want to use Hyper Threads
</span><br>
<span class="quotelev1">&gt; for HPC workloads, as that generally results in very poor performance (as
</span><br>
<span class="quotelev1">&gt; you noticed). Set the number of slots to the number of real cores (not HT),
</span><br>
<span class="quotelev1">&gt; that would yield optimal results 95% of the time.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Aur&#195;&#169;lien
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Aur&#195;&#169;lien Bouteiller, Ph.D. ~~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Le 23 mars 2016 &#195;&#160; 16:24, Ralph Castain &lt;rhc_at_[hidden] &lt;javascript:;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &#226;&#128;&#156;Slots&#226;&#128;&#157; are an abstraction commonly used by schedulers as a way of
</span><br>
<span class="quotelev1">&gt; indicating how many processes are allowed to run on a given node. It has
</span><br>
<span class="quotelev1">&gt; nothing to do with hardware, either cores or HTs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI programmers frequently like to bind a process to one or more
</span><br>
<span class="quotelev1">&gt; hardware assets (cores or HTs). Thus, you will see confusion in the
</span><br>
<span class="quotelev1">&gt; community where people mix the term &#226;&#128;&#156;slot&#226;&#128;&#157; with &#226;&#128;&#156;cores&#226;&#128;&#157; or &#226;&#128;&#156;cpus&#226;&#128;&#157;. This is
</span><br>
<span class="quotelev1">&gt; unfortunate as it the terms really do mean very different things.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In OMPI, we chose to try and &#226;&#128;&#156;help&#226;&#128;&#157; the user by not requiring them to
</span><br>
<span class="quotelev1">&gt; specify detailed info in a hostfile. So if you don&#226;&#128;&#153;t specify the number of
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#156;slots&#226;&#128;&#157; for a given node, we will sense the number of cores on that node
</span><br>
<span class="quotelev1">&gt; and set the slots to match that number. This best matches user expectations
</span><br>
<span class="quotelev1">&gt; today.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you do specify the number of slots, then we use that to guide the
</span><br>
<span class="quotelev1">&gt; desired number of processes assigned to each node. We then bind each of
</span><br>
<span class="quotelev1">&gt; those processes according to the user-provided guidance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; HTH
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Mar 23, 2016, at 9:35 AM, Federico Reghenzani &lt;
</span><br>
<span class="quotelev1">&gt; federico1.reghenzani_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ok, I've investigated further today, it seems &quot;--map-by hwthread&quot; does
</span><br>
<span class="quotelev1">&gt; not remove the problem. However, if I specified in the hostfile &quot;node0
</span><br>
<span class="quotelev1">&gt; slots=32&quot; it runs really slower than specifying only &quot;node0&quot;. In both cases
</span><br>
<span class="quotelev1">&gt; I run mpirun with -np 32. So I'm quite sure I didn't understand what slots
</span><br>
<span class="quotelev1">&gt; are.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; __
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Federico Reghenzani
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Computer Science and Engineering
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2016-03-22 18:56 GMT+01:00 Federico Reghenzani &lt;
</span><br>
<span class="quotelev1">&gt; federico1.reghenzani_at_[hidden] &lt;javascript:;&gt;&gt;:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi guys,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm really confused about slots in resource allocation: I thought that
</span><br>
<span class="quotelev1">&gt; slots are the number of processes spawnable in a certain node, so it should
</span><br>
<span class="quotelev1">&gt; correspond to the number of Processing Elements of the node. For example,
</span><br>
<span class="quotelev1">&gt; on each of my nodes I have 2 processors, total 16 cores with
</span><br>
<span class="quotelev1">&gt; hyperthreading, so a total of 32 processing elements per node (i.e. 32 hw
</span><br>
<span class="quotelev1">&gt; threads). However, considering a single node, passing in the hostfile 32
</span><br>
<span class="quotelev1">&gt; slots and requesting &quot;-np 32&quot; results is a performance degradation of 20x
</span><br>
<span class="quotelev1">&gt; slower than using only &quot;-np 16&quot;. The problem disappears specifing --map-by
</span><br>
<span class="quotelev1">&gt; hwthread.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Investigating on the problem I found these counterintuitive things:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - here is stated &quot;slots are Open MPI's representation of how many
</span><br>
<span class="quotelev1">&gt; processors are available&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - here is stated &quot;Slots indicate how many processes can potentially
</span><br>
<span class="quotelev1">&gt; execute on a node. For best performance, the number of slots may be chosen
</span><br>
<span class="quotelev1">&gt; to be the number of cores on the node or the number of processor sockets&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - I tried to remove the slots information from the hostfile, so
</span><br>
<span class="quotelev1">&gt; according to this should be interpreted as &quot;1&quot;, but it spawns anyway 32
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - I'm not sure what --map-by and --rank-by do
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In custom RAS we are developing, what we have to send to mpirun? The
</span><br>
<span class="quotelev1">&gt; number of processor sockets, the number of cores or the number of hwthread
</span><br>
<span class="quotelev1">&gt; available? How --map-by and --rank-by affect the spawn policy?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thank you!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OFFTOPIC: is someone going to EuroMPI 2016 in September? We will be
</span><br>
<span class="quotelev1">&gt; there to present our migration technique.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Federico
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; __
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Federico Reghenzani
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Computer Science and Engineering
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18723.php">http://www.open-mpi.org/community/lists/devel/2016/03/18723.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18724.php">http://www.open-mpi.org/community/lists/devel/2016/03/18724.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18725.php">http://www.open-mpi.org/community/lists/devel/2016/03/18725.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18726.php">http://www.open-mpi.org/community/lists/devel/2016/03/18726.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18727/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18728.php">Atchley, Scott: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Previous message:</strong> <a href="18726.php">Atchley, Scott: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>In reply to:</strong> <a href="18726.php">Atchley, Scott: "Re: [OMPI devel] Confusion about slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18728.php">Atchley, Scott: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Reply:</strong> <a href="18728.php">Atchley, Scott: "Re: [OMPI devel] Confusion about slots"</a>
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
