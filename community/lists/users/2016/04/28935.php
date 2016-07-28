<?
$subject_val = "Re: [OMPI users] Head Node as a Compute Node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 19:58:38 2016" -->
<!-- isoreceived="20160413235838" -->
<!-- sent="Thu, 14 Apr 2016 08:58:38 +0900" -->
<!-- isosent="20160413235838" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Head Node as a Compute Node" -->
<!-- id="570EDD2E.5070703_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1233038409.12589.1460577425350.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Head Node as a Compute Node<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-13 19:58:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28936.php">Gilles Gouaillardet: "Re: [OMPI users] system call failed that shouldn't?"</a>
<li><strong>Previous message:</strong> <a href="28934.php">Matthew Larkin: "[OMPI users] Head Node as a Compute Node"</a>
<li><strong>In reply to:</strong> <a href="28934.php">Matthew Larkin: "[OMPI users] Head Node as a Compute Node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matthew,
<br>
<p>this is generally a bad idea :
<br>
many users are logged into the login node, some of them run a graphic 
<br>
desktop in VNC, they sometime
<br>
start (heavy) compilation and once in a while, they even run a 
<br>
(hopefully) small MPI application so they do not have to use the batch 
<br>
manager (e.g. write a script and wait for the resources)
<br>
head node can also run several monitoring daemons (not to mention a NFS 
<br>
server) and this node can be quite &quot;noisy&quot; (OS jitter). once in a while, 
<br>
some end users will just ask too much memory and the oom killer will be 
<br>
invoked (and it sometimes kill process you do hope it spared)
<br>
<p>bottom line, it is virtually impossible to predict how much RAM and CPU 
<br>
will be available when a job runs.
<br>
<p>most MPI applications are synchronous, which means the performance is 
<br>
driven by the slowest node.
<br>
The head node might or might not be the slowest node, this is quite 
<br>
unpredictable and end users will likely end up complaining about random 
<br>
performances of their application.
<br>
<p>if your budget allows it, i strongly recommend you do not run jobs on a 
<br>
head node.
<br>
<p>that being said, you might consider running an &quot;overflow&quot; queue but only 
<br>
for single node jobs on the head node
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 4/14/2016 4:57 AM, Matthew Larkin wrote:
<br>
<span class="quotelev1">&gt; Has anyone in the users list conducted any kind of analysis about 
</span><br>
<span class="quotelev1">&gt; using a head node as a compute node in a distributed system?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does it effect resources, or simply chance performance in any way?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28934.php">http://www.open-mpi.org/community/lists/users/2016/04/28934.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28935/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28936.php">Gilles Gouaillardet: "Re: [OMPI users] system call failed that shouldn't?"</a>
<li><strong>Previous message:</strong> <a href="28934.php">Matthew Larkin: "[OMPI users] Head Node as a Compute Node"</a>
<li><strong>In reply to:</strong> <a href="28934.php">Matthew Larkin: "[OMPI users] Head Node as a Compute Node"</a>
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
