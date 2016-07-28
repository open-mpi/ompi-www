<?
$subject_val = "Re: [OMPI users] MPI jobs ending up in one node";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 14 04:49:02 2009" -->
<!-- isoreceived="20090314084902" -->
<!-- sent="Sat, 14 Mar 2009 16:48:57 +0800" -->
<!-- isosent="20090314084857" -->
<!-- name="Peter Teoh" -->
<!-- email="htmldeveloper_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI jobs ending up in one node" -->
<!-- id="804dabb00903140148x31bef7aw3c99596235771afd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="958D499D-A65C-4A05-8D7D-71CC7FEBC121_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI jobs ending up in one node<br>
<strong>From:</strong> Peter Teoh (<em>htmldeveloper_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-14 04:48:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8440.php">Raymond Wan: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
<li><strong>Previous message:</strong> <a href="8438.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>In reply to:</strong> <a href="8425.php">Ralph Castain: "Re: [OMPI users] MPI jobs ending up in one node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
oops....sorry....it is in Intel MPI library.   Thanks!!!
<br>
<p>On Fri, Mar 13, 2009 at 9:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hmmm...your comments don't sound like anything relating to Open MPI. Are you
</span><br>
<span class="quotelev1">&gt; sure you are not using some other MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our mpiexec isn't a script, for example, nor do we have anything named
</span><br>
<span class="quotelev1">&gt; I_MPI_PIN_PROCESSOR_LIST in our code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 13, 2009, at 4:00 AM, Peter Teoh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I saw the following problem posed somewhere - can anyone shed some
</span><br>
<span class="quotelev2">&gt;&gt; light? &#160; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a cluster of 8-sock quad core systems running Redhat 5.2. It
</span><br>
<span class="quotelev2">&gt;&gt; seems that whenever I try to run multiple MPI jobs to a single node
</span><br>
<span class="quotelev2">&gt;&gt; all the jobs end up running on the same processors. For example, if I
</span><br>
<span class="quotelev2">&gt;&gt; were to submit 4 8-way jobs to a single box they all end up in CPUs 0
</span><br>
<span class="quotelev2">&gt;&gt; to 7, leaving 8 to 31 idle.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I then tried all sorts of I_MPI_PIN_PROCESSOR_LIST combinations but
</span><br>
<span class="quotelev2">&gt;&gt; short of explicitly listing out the processors at each run, they all
</span><br>
<span class="quotelev2">&gt;&gt; end up still hanging on to CPUs 0-7. Browsing through the mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; script, I realise that it is doing a taskset on each run.
</span><br>
<span class="quotelev2">&gt;&gt; As my jobs are all submitted through a scheduler (PBS in this case) I
</span><br>
<span class="quotelev2">&gt;&gt; cannot possibly know at job submission time which CPUs are not used.
</span><br>
<span class="quotelev2">&gt;&gt; So is there a simple way to tell mpiexec to set the taskset affinity
</span><br>
<span class="quotelev2">&gt;&gt; correctly at each run so that it will choose only the idle processors?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Peter Teoh
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Regards,
Peter Teoh
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8440.php">Raymond Wan: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
<li><strong>Previous message:</strong> <a href="8438.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>In reply to:</strong> <a href="8425.php">Ralph Castain: "Re: [OMPI users] MPI jobs ending up in one node"</a>
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
