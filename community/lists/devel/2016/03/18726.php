<?
$subject_val = "Re: [OMPI devel] Confusion about slots";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 08:44:19 2016" -->
<!-- isoreceived="20160324124419" -->
<!-- sent="Thu, 24 Mar 2016 12:44:16 +0000" -->
<!-- isosent="20160324124416" -->
<!-- name="Atchley, Scott" -->
<!-- email="atchleyes_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Confusion about slots" -->
<!-- id="F809CEFC-6FEF-4D09-AA3B-0B67739E12D9_at_ornl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="18978661-6B2F-4039-A37E-DF9B17480A17_at_icl.utk.edu" -->
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
<strong>From:</strong> Atchley, Scott (<em>atchleyes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-24 08:44:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18727.php">Gilles Gouaillardet: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Previous message:</strong> <a href="18725.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>In reply to:</strong> <a href="18725.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI devel] Confusion about slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18727.php">Gilles Gouaillardet: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Reply:</strong> <a href="18727.php">Gilles Gouaillardet: "Re: [OMPI devel] Confusion about slots"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Aur&#195;&#169;lien,
<br>

<br>
I have said the same thing to many users over the years. Our colleagues at NERSC, however, have found that 20% of their codes work better when using HT. Some codes benefit from SMT2 (i.e. HT) and even SMT4 (available on Power8) in order to provide enough latency hiding of memory accesses.
<br>

<br>
As with everything in computer science, the answer is &#226;&#128;&#156;It depends&#226;&#128;&#157;. Try with and without for each new generation of hardware.
<br>

<br>
Scott
<br>

<br>
<span class="quotelev1">&gt; On Mar 23, 2016, at 4:32 PM, Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To add to what Ralf said, you probably do not want to use Hyper Threads for HPC workloads, as that generally results in very poor performance (as you noticed). Set the number of slots to the number of real cores (not HT), that would yield optimal results 95% of the time. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aur&#195;&#169;lien 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Aur&#195;&#169;lien Bouteiller, Ph.D. ~~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 23 mars 2016 &#195;&#160; 16:24, Ralph Castain &lt;rhc_at_[hidden]&gt; a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#156;Slots&#226;&#128;&#157; are an abstraction commonly used by schedulers as a way of indicating how many processes are allowed to run on a given node. It has nothing to do with hardware, either cores or HTs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI programmers frequently like to bind a process to one or more hardware assets (cores or HTs). Thus, you will see confusion in the community where people mix the term &#226;&#128;&#156;slot&#226;&#128;&#157; with &#226;&#128;&#156;cores&#226;&#128;&#157; or &#226;&#128;&#156;cpus&#226;&#128;&#157;. This is unfortunate as it the terms really do mean very different things.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In OMPI, we chose to try and &#226;&#128;&#156;help&#226;&#128;&#157; the user by not requiring them to specify detailed info in a hostfile. So if you don&#226;&#128;&#153;t specify the number of &#226;&#128;&#156;slots&#226;&#128;&#157; for a given node, we will sense the number of cores on that node and set the slots to match that number. This best matches user expectations today.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you do specify the number of slots, then we use that to guide the desired number of processes assigned to each node. We then bind each of those processes according to the user-provided guidance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 23, 2016, at 9:35 AM, Federico Reghenzani &lt;federico1.reghenzani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok, I've investigated further today, it seems &quot;--map-by hwthread&quot; does not remove the problem. However, if I specified in the hostfile &quot;node0 slots=32&quot; it runs really slower than specifying only &quot;node0&quot;. In both cases I run mpirun with -np 32. So I'm quite sure I didn't understand what slots are.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; __
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Federico Reghenzani
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science and Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2016-03-22 18:56 GMT+01:00 Federico Reghenzani &lt;federico1.reghenzani_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi guys,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm really confused about slots in resource allocation: I thought that slots are the number of processes spawnable in a certain node, so it should correspond to the number of Processing Elements of the node. For example, on each of my nodes I have 2 processors, total 16 cores with hyperthreading, so a total of 32 processing elements per node (i.e. 32 hw threads). However, considering a single node, passing in the hostfile 32 slots and requesting &quot;-np 32&quot; results is a performance degradation of 20x slower than using only &quot;-np 16&quot;. The problem disappears specifing --map-by hwthread.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Investigating on the problem I found these counterintuitive things:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - here is stated &quot;slots are Open MPI's representation of how many processors are available&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - here is stated &quot;Slots indicate how many processes can potentially execute on a node. For best performance, the number of slots may be chosen to be the number of cores on the node or the number of processor sockets&quot; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - I tried to remove the slots information from the hostfile, so according to this should be interpreted as &quot;1&quot;, but it spawns anyway 32 processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - I'm not sure what --map-by and --rank-by do 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In custom RAS we are developing, what we have to send to mpirun? The number of processor sockets, the number of cores or the number of hwthread available? How --map-by and --rank-by affect the spawn policy?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OFFTOPIC: is someone going to EuroMPI 2016 in September? We will be there to present our migration technique.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Federico
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; __
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Federico Reghenzani
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science and Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18723.php">http://www.open-mpi.org/community/lists/devel/2016/03/18723.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18724.php">http://www.open-mpi.org/community/lists/devel/2016/03/18724.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18725.php">http://www.open-mpi.org/community/lists/devel/2016/03/18725.php</a>
</span><br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18727.php">Gilles Gouaillardet: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Previous message:</strong> <a href="18725.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>In reply to:</strong> <a href="18725.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI devel] Confusion about slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18727.php">Gilles Gouaillardet: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Reply:</strong> <a href="18727.php">Gilles Gouaillardet: "Re: [OMPI devel] Confusion about slots"</a>
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
