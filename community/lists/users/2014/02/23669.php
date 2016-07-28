<?
$subject_val = "Re: [OMPI users] Binding to Core Warning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 15:23:29 2014" -->
<!-- isoreceived="20140226202329" -->
<!-- sent="Wed, 26 Feb 2014 12:21:44 -0800" -->
<!-- isosent="20140226202144" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Binding to Core Warning" -->
<!-- id="0238D757-563D-4289-A2E0-5CFE5E42386D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+ssbKWdjeA+09sW1MNZP4Q4dyAjRV+-aaS48bz2j+AxTy-3zQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Binding to Core Warning<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 15:21:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23670.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>Previous message:</strong> <a href="23668.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>In reply to:</strong> <a href="23668.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23670.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>Reply:</strong> <a href="23670.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 26, 2014, at 12:17 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a followup question on this. In our application we have parallel for loops similar to OMP parallel for. I noticed that in order to gain speedup with threads I've to set --bind-to none, otherwise multiple threads will bind to same core giving no increase in performance. For example, I get following (attached) performance for a simple 3point stencil computation run with T threads on 1 MPI process on 1 node (Tx1x1). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My understanding is even when there are multiple procs per node we should use --bind-to none in order to get performance with threads. Is this correct? Also, what's the disadvantage of not using --bind-to core?
</span><br>
<p>Your best performance with threads comes when you bind each process to multiple cores. Binding helps performance by ensuring your memory is always local, and provides some optimized scheduling benefits. You can bind to multiple cores by adding the qualifier &quot;pe=N&quot; to your mapping definition, like this:
<br>
<p>mpirun --map-by socket:pe=4 ....
<br>
<p>The above example will map processes by socket, and bind each process to 4 cores.
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 26, 2014 at 11:01 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Thank you Ralph, I'll check this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 26, 2014 at 10:04 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; It means that OMPI didn't get built against libnuma, and so we can't ensure that memory is being bound local to the proc binding. Check to see if numactl and numactl-devel are installed, or you can turn off the warning using &quot;-mca hwloc_base_mem_bind_failure_action silent&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2014, at 10:32 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried to run an MPI Java program with --bind-to core. I receive the following warning and wonder how to fix this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev2">&gt;&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev2">&gt;&gt; support binding memory to the process location.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Node:  192.168.0.19
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev2">&gt;&gt; be degraded.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake esaliya_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt; &lt;3pointstencil.png&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23669/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23670.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>Previous message:</strong> <a href="23668.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>In reply to:</strong> <a href="23668.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23670.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>Reply:</strong> <a href="23670.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
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
