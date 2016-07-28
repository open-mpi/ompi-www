<?
$subject_val = "Re: [OMPI users] OpenFOAM fail to run under openmpi-1.3.3 on 2x Ubuntu 9.10 x64 Server";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 14:05:30 2009" -->
<!-- isoreceived="20091215190530" -->
<!-- sent="Tue, 15 Dec 2009 12:05:20 -0700" -->
<!-- isosent="20091215190520" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenFOAM fail to run under openmpi-1.3.3 on 2x Ubuntu 9.10 x64 Server" -->
<!-- id="CD8D22FF-6DF9-4802-A0B0-57B143DCBE6F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="24461260899167_at_webmail55.yandex.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenFOAM fail to run under openmpi-1.3.3 on 2x Ubuntu 9.10 x64 Server<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-15 14:05:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11547.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11545.php">Dmitry Zaletnev: "[OMPI users] OpenFOAM fail to run under openmpi-1.3.3 on 2x Ubuntu 9.10 x64 Server"</a>
<li><strong>In reply to:</strong> <a href="11545.php">Dmitry Zaletnev: "[OMPI users] OpenFOAM fail to run under openmpi-1.3.3 on 2x Ubuntu 9.10 x64 Server"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your path on a remote node is wrong and so OMPI cannot find the required OMPI executable (&quot;orted&quot;) to launch your job.
<br>
<p>Check your path to ensure that it is getting setup correctly on your remote nodes - every node needs to see you OMPI installed binaries and libraries.
<br>
<p><p>On Dec 15, 2009, at 10:46 AM, Dmitry Zaletnev wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I've got the message:
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; A daemon (pid 1550) died unexpectedly with status 127 while attempting to launch so we are aborting
</span><br>
<span class="quotelev1">&gt; when I tried to run OpenFOAM in parallel on 2x Ubuntu 9.10 x64 Server nodes the same way as it runs OK on 2x OpenSUSE 11.1 x64 nodes.
</span><br>
<span class="quotelev1">&gt; Another time I tried to run it from OpenSUSE 11.1 x64 node on that node and Ubuntu 9.10 x64 Desktop node resulting in the same error message.
</span><br>
<span class="quotelev1">&gt; OpenFOAM runs OK on 4 cores at one Ubuntu 9.10 x64 Server in parallel under openmpi-1.3.3.
</span><br>
<span class="quotelev1">&gt; What's wrong?
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dmitry
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11547.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11545.php">Dmitry Zaletnev: "[OMPI users] OpenFOAM fail to run under openmpi-1.3.3 on 2x Ubuntu 9.10 x64 Server"</a>
<li><strong>In reply to:</strong> <a href="11545.php">Dmitry Zaletnev: "[OMPI users] OpenFOAM fail to run under openmpi-1.3.3 on 2x Ubuntu 9.10 x64 Server"</a>
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
