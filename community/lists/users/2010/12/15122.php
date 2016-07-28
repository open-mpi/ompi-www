<?
$subject_val = "Re: [OMPI users] Spawning with the ompi-server option";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 14 09:48:12 2010" -->
<!-- isoreceived="20101214144812" -->
<!-- sent="Tue, 14 Dec 2010 07:48:04 -0700" -->
<!-- isosent="20101214144804" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawning with the ompi-server option" -->
<!-- id="F6A08804-4183-4F8C-B8D8-481B483CA707_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimV3CCF6QW4mzwrSZE_R+ASXLoEt5SiiTXm2NRu_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawning with the ompi-server option<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-14 09:48:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15123.php">Rolf vandeVaart: "Re: [OMPI users] One-sided datatype errors"</a>
<li><strong>Previous message:</strong> <a href="15121.php">Suraj Prabhakaran: "[OMPI users]  Spawning with the ompi-server option"</a>
<li><strong>In reply to:</strong> <a href="15121.php">Suraj Prabhakaran: "[OMPI users]  Spawning with the ompi-server option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not sure I fully understand the question. If you provide the --ompi-server &lt;uri&gt; option to mpirun, that info will be passed along to all processes, including those launched via comm_spawn, so they can subsequently connect to the server.
<br>
<p><p>On Dec 14, 2010, at 6:50 AM, Suraj Prabhakaran wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there anyway to spawn processes with the ompi-server option? I need the child processes to open and publish ports for which I require this option. Is there an alternative?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Suraj Prabhakaran
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
<li><strong>Next message:</strong> <a href="15123.php">Rolf vandeVaart: "Re: [OMPI users] One-sided datatype errors"</a>
<li><strong>Previous message:</strong> <a href="15121.php">Suraj Prabhakaran: "[OMPI users]  Spawning with the ompi-server option"</a>
<li><strong>In reply to:</strong> <a href="15121.php">Suraj Prabhakaran: "[OMPI users]  Spawning with the ompi-server option"</a>
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
