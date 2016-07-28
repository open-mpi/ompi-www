<?
$subject_val = "Re: [OMPI users] Shared Memory Performance Problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 27 07:26:49 2011" -->
<!-- isoreceived="20110327112649" -->
<!-- sent="Sun, 27 Mar 2011 13:26:45 +0200" -->
<!-- isosent="20110327112645" -->
<!-- name="Michele Marena" -->
<!-- email="michelemarena_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory Performance Problem." -->
<!-- id="AANLkTi=f+D0s9hShnq+pJxJXTLKByVY0cXvkg=DaENMH_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimzDW1XOOd8b_t_hP-98shiQGX6PNddweKaXdkZ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Memory Performance Problem.<br>
<strong>From:</strong> Michele Marena (<em>michelemarena_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-27 07:26:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16014.php">Tim Prince: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Previous message:</strong> <a href="16012.php">Michele Marena: "[OMPI users] Shared Memory Performance Problem."</a>
<li><strong>In reply to:</strong> <a href="16012.php">Michele Marena: "[OMPI users] Shared Memory Performance Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16014.php">Tim Prince: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is my machinefile
<br>
node-1-16 slots=2
<br>
node-1-17 slots=2
<br>
node-1-18 slots=2
<br>
node-1-19 slots=2
<br>
node-1-20 slots=2
<br>
node-1-21 slots=2
<br>
node-1-22 slots=2
<br>
node-1-23 slots=2
<br>
<p>Each cluster node has 2 processors. I launch my application with 3
<br>
processes, one on node-1-16 (manager) and two on node-1-17(workers). Two
<br>
processes on node-1-17 communicate each other.
<br>
<p>2011/3/27 Michele Marena &lt;michelemarena_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; My application performs good without shared memory utilization, but with
</span><br>
<span class="quotelev1">&gt; shared memory I get performance worst than without of it.
</span><br>
<span class="quotelev1">&gt; Do I make a mistake? Don't I pay attention to something?
</span><br>
<span class="quotelev1">&gt; I know OpenMPI uses /tmp directory to allocate shared memory and it is in
</span><br>
<span class="quotelev1">&gt; the local filesystem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thank you.
</span><br>
<span class="quotelev1">&gt; Michele.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16013/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16014.php">Tim Prince: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Previous message:</strong> <a href="16012.php">Michele Marena: "[OMPI users] Shared Memory Performance Problem."</a>
<li><strong>In reply to:</strong> <a href="16012.php">Michele Marena: "[OMPI users] Shared Memory Performance Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16014.php">Tim Prince: "Re: [OMPI users] Shared Memory Performance Problem."</a>
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
