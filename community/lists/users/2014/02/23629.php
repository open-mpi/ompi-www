<?
$subject_val = "Re: [OMPI users] OpenMPI + Hadoop";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 24 10:32:28 2014" -->
<!-- isoreceived="20140224153228" -->
<!-- sent="Mon, 24 Feb 2014 07:30:57 -0800" -->
<!-- isosent="20140224153057" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI + Hadoop" -->
<!-- id="7A94551B-1E1A-47E8-9A93-6879853C4DF1_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+ssbKXqZNXucx7qXO6jA3=A8Ltj2TEJg2dhqzgZ+zwQ3SSu1Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI + Hadoop<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-24 10:30:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23630.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>Previous message:</strong> <a href="23628.php">Saliya Ekanayake: "[OMPI users] OpenMPI + Hadoop"</a>
<li><strong>In reply to:</strong> <a href="23628.php">Saliya Ekanayake: "[OMPI users] OpenMPI + Hadoop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23630.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>Reply:</strong> <a href="23630.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 23, 2014, at 10:42 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is to get some info on the subject and not directly a question on OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've Jeff's blog post on integrating OpenMPI with Hadoop (<a href="http://blogs.cisco.com/performance/resurrecting-mpi-and-java/">http://blogs.cisco.com/performance/resurrecting-mpi-and-java/</a>) and wanted to check if this is related with the Jira at <a href="https://issues.apache.org/jira/browse/MAPREDUCE-2911">https://issues.apache.org/jira/browse/MAPREDUCE-2911</a>
</span><br>
<p>Somewhat. A little history might help. I was asked a couple of years ago to work on integrating MPI support with Hadoop. At that time, the thought of those asking for my help was that we would enable YARN to support MPI, which was captured in 2911. However, after working on it for a few months, it became apparent to me that this was a mistake. YARN's architecture makes support of MPI very difficult (but achievable - I did it with OMPI, and someone else has now done it with MPICH), and the result exhibits horrible scaling and relatively poor performance by HPC standards. So if you want to run a very small MPI job under YARN, you can do it with a custom application manager and JNI wrappers around every MPI call - just don't expect great performance.
<br>
<p>What I did instead was to pivot direction and focus on porting Hadoop to the HPC environment. Thought here was that, if we could get the Hadoop classes working with a regular HPC environment, then all the HPC world's tools and programming models become available. This is what we have done, and it comes in four parts:
<br>
<p>1. Java MPI bindings that are very close to C-level performance. These are being released in the 1.7 series of OMPI and are unique to OMPI at this time. Jose Roman and Oscar Vega continue to close the performance gap.
<br>
<p>2. Integration to HPC resource managers such as Slurm and Moab. Intel has taken the lead there and announced that support at SC13 - in beta test now
<br>
<p>3. Integration to HPC file systems such as Lustre. Intel again took the lead here and has a Lustre adaptor in beta test
<br>
<p>4. Equivalent of an application manager to stage map-reduce executions. I updated OMPI's &quot;mpirun&quot; to handle that - available in the current 1.7 release series. It fully understands &quot;staged&quot; execution and also notifies the associated processes when MPI is feasible (i.e., all the procs in comm_world are running).
<br>
<p>We continue to improve the Hadoop support - Cisco and I are collaborating on a new &quot;dynamic MPI&quot; capability that will allow the procs to interact without imposing the barrier at MPI_Init, for example. So I expect that this summer will demonstrate a pretty robust capability in that area.
<br>
<p>After all, there is no reason you shouldn't be able to run Hadoop on an HPC cluster :-)
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, is there a place I can get more info on this effort?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23629/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23630.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>Previous message:</strong> <a href="23628.php">Saliya Ekanayake: "[OMPI users] OpenMPI + Hadoop"</a>
<li><strong>In reply to:</strong> <a href="23628.php">Saliya Ekanayake: "[OMPI users] OpenMPI + Hadoop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23630.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>Reply:</strong> <a href="23630.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
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
