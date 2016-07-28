<?
$subject_val = "Re: [OMPI users] new hwloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 16:55:15 2015" -->
<!-- isoreceived="20150428205515" -->
<!-- sent="Tue, 28 Apr 2015 22:54:59 +0200" -->
<!-- isosent="20150428205459" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new hwloc error" -->
<!-- id="553FF3A3.3000905_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="FD3C2360-A9DA-4503-A81F-BBD7FE599CB3_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] new hwloc error<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-28 16:54:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26808.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26806.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26803.php">Noam Bernstein: "[OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26808.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="26808.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
Can you build hwloc and run lstopo on these nodes to check that
<br>
everything looks similar?
<br>
You have hyperthreading enabled on all nodes, and you're trying to bind
<br>
processes to entire cores, right?
<br>
Does 0,16 correspond to two hyperthreads within a single core on these
<br>
nodes? (lstopo -p should show PU#0 and PU#16 inside the first core).
<br>
thanks
<br>
Brice
<br>
<p><p><p>Le 28/04/2015 15:31, Noam Bernstein a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi all - we&#146;re having a new error, despite the fact that as far as I can tell we haven&#146;t changed anything recently, and I was wondering if anyone had any ideas as to what might be going on. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The symptom is that we sometimes get an error when starting a new mpi job:
</span><br>
<span class="quotelev1">&gt; Open MPI tried to bind a new process, but something went wrong.  The
</span><br>
<span class="quotelev1">&gt; process was killed without launching the target application.  Your job
</span><br>
<span class="quotelev1">&gt; will now abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:        compute-1-19
</span><br>
<span class="quotelev1">&gt;   Application name:  XXXXXXXXX
</span><br>
<span class="quotelev1">&gt;   Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;0,16&quot;
</span><br>
<span class="quotelev1">&gt;   Location:          odls_default_module.c:499
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 16 total processes failed to start
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This started happening with one particular node, although there&#146;s nothing obviously wrong with it.  Now it&#146;s happening with another, and again nothing is obviously wrong. I haven&#146;t quite determined whether it always happens on those nodes, but it doesn&#146;t seem to happen much at all on other nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We&#146;re running openmpi 1.7.4, which I know isn&#146;t the newest, but it&#146;s been working fine for months.  The kernel is 2.6.32-504.8.1.el6.x86_64 from RHEL6, and the CPUs are 
</span><br>
<span class="quotelev1">&gt;     model name	: Intel(R) Xeon(R) CPU E5-2670 0 @ 2.60GHz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If anyone has any ideas, I&#146;d appreciate it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 									thanks,
</span><br>
<span class="quotelev1">&gt; 									Noam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Noam Bernstein
</span><br>
<span class="quotelev1">&gt; Center for Computational Materials Science
</span><br>
<span class="quotelev1">&gt; Naval Research Laboratory Code 6390
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; noam.bernstein_at_[hidden]
</span><br>
<span class="quotelev1">&gt; phone: 202 404 8628
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26803.php">http://www.open-mpi.org/community/lists/users/2015/04/26803.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26807/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26808.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26806.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26803.php">Noam Bernstein: "[OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26808.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="26808.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
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
