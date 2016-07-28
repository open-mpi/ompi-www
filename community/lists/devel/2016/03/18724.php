<?
$subject_val = "Re: [OMPI devel] Confusion about slots";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 16:25:03 2016" -->
<!-- isoreceived="20160323202503" -->
<!-- sent="Wed, 23 Mar 2016 13:24:59 -0700" -->
<!-- isosent="20160323202459" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Confusion about slots" -->
<!-- id="DBFA9980-F716-4384-AE9A-DFB4CF30ED9C_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CADf4hJ+WKK+h+B8ey-UJLsw0nzMe7Sp5dC3cLXq7tp00NsdNQg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-23 16:24:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18725.php">Aurélien Bouteiller: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Previous message:</strong> <a href="18723.php">Federico Reghenzani: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>In reply to:</strong> <a href="18723.php">Federico Reghenzani: "Re: [OMPI devel] Confusion about slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18725.php">Aurélien Bouteiller: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Reply:</strong> <a href="18725.php">Aurélien Bouteiller: "Re: [OMPI devel] Confusion about slots"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&#226;&#128;&#156;Slots&#226;&#128;&#157; are an abstraction commonly used by schedulers as a way of indicating how many processes are allowed to run on a given node. It has nothing to do with hardware, either cores or HTs.
<br>
<p>MPI programmers frequently like to bind a process to one or more hardware assets (cores or HTs). Thus, you will see confusion in the community where people mix the term &#226;&#128;&#156;slot&#226;&#128;&#157; with &#226;&#128;&#156;cores&#226;&#128;&#157; or &#226;&#128;&#156;cpus&#226;&#128;&#157;. This is unfortunate as it the terms really do mean very different things.
<br>
<p>In OMPI, we chose to try and &#226;&#128;&#156;help&#226;&#128;&#157; the user by not requiring them to specify detailed info in a hostfile. So if you don&#226;&#128;&#153;t specify the number of &#226;&#128;&#156;slots&#226;&#128;&#157; for a given node, we will sense the number of cores on that node and set the slots to match that number. This best matches user expectations today.
<br>
<p>If you do specify the number of slots, then we use that to guide the desired number of processes assigned to each node. We then bind each of those processes according to the user-provided guidance.
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Mar 23, 2016, at 9:35 AM, Federico Reghenzani &lt;federico1.reghenzani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, I've investigated further today, it seems &quot;--map-by hwthread&quot; does not remove the problem. However, if I specified in the hostfile &quot;node0 slots=32&quot; it runs really slower than specifying only &quot;node0&quot;. In both cases I run mpirun with -np 32. So I'm quite sure I didn't understand what slots are.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; __
</span><br>
<span class="quotelev1">&gt; Federico Reghenzani
</span><br>
<span class="quotelev1">&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev1">&gt; Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2016-03-22 18:56 GMT+01:00 Federico Reghenzani &lt;federico1.reghenzani_at_[hidden] &lt;mailto:federico1.reghenzani_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm really confused about slots in resource allocation: I thought that slots are the number of processes spawnable in a certain node, so it should correspond to the number of Processing Elements of the node. For example, on each of my nodes I have 2 processors, total 16 cores with hyperthreading, so a total of 32 processing elements per node (i.e. 32 hw threads). However, considering a single node, passing in the hostfile 32 slots and requesting &quot;-np 32&quot; results is a performance degradation of 20x slower than using only &quot;-np 16&quot;. The problem disappears specifing --map-by hwthread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Investigating on the problem I found these counterintuitive things:
</span><br>
<span class="quotelev1">&gt; - here &lt;<a href="https://www.open-mpi.org/faq/?category=running#slots-without-hostfiles">https://www.open-mpi.org/faq/?category=running#slots-without-hostfiles</a>&gt; is stated &quot;slots are Open MPI's representation of how many processors are available&quot;
</span><br>
<span class="quotelev1">&gt; - here &lt;<a href="https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php#sect6">https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php#sect6</a>&gt; is stated &quot;Slots indicate how many processes can potentially execute on a node. For best performance, the number of slots may be chosen to be the number of cores on the node or the number of processor sockets&quot; 
</span><br>
<span class="quotelev1">&gt; - I tried to remove the slots information from the hostfile, so according to this &lt;<a href="https://www.open-mpi.org/faq/?category=running#slots-without-hostfiles">https://www.open-mpi.org/faq/?category=running#slots-without-hostfiles</a>&gt; should be interpreted as &quot;1&quot;, but it spawns anyway 32 processes
</span><br>
<span class="quotelev1">&gt; - I'm not sure what --map-by and --rank-by do 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In custom RAS we are developing, what we have to send to mpirun? The number of processor sockets, the number of cores or the number of hwthread available? How --map-by and --rank-by affect the spawn policy?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OFFTOPIC: is someone going to EuroMPI 2016 in September? We will be there to present our migration technique.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Federico
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; __
</span><br>
<span class="quotelev1">&gt; Federico Reghenzani
</span><br>
<span class="quotelev1">&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev1">&gt; Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18723.php">http://www.open-mpi.org/community/lists/devel/2016/03/18723.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/03/18723.php">http://www.open-mpi.org/community/lists/devel/2016/03/18723.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18724/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18725.php">Aurélien Bouteiller: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Previous message:</strong> <a href="18723.php">Federico Reghenzani: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>In reply to:</strong> <a href="18723.php">Federico Reghenzani: "Re: [OMPI devel] Confusion about slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18725.php">Aurélien Bouteiller: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Reply:</strong> <a href="18725.php">Aurélien Bouteiller: "Re: [OMPI devel] Confusion about slots"</a>
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
