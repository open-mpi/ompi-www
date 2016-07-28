<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 15 11:50:37 2005" -->
<!-- isoreceived="20050215165037" -->
<!-- sent="Tue, 15 Feb 2005 11:50:33 -0500 (Eastern Standard Time)" -->
<!-- isosent="20050215165033" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Thread-safety and daemon initiation" -->
<!-- id="Pine.WNT.4.62.0502151129430.2380_at_blackbox" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="421219E1.8020008_at_ecmwf.int" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-02-15 11:50:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0006.php">Mitch Sukalski: "Re: [O-MPI users] Thread-safety and daemon initiation"</a>
<li><strong>Previous message:</strong> <a href="0004.php">Neil Storer: "[O-MPI users] Thread-safety and daemon initiation"</a>
<li><strong>In reply to:</strong> <a href="0004.php">Neil Storer: "[O-MPI users] Thread-safety and daemon initiation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0007.php">Jeff Squyres: "Re: [O-MPI users] Thread-safety and daemon initiation"</a>
<li><strong>Reply:</strong> <a href="0007.php">Jeff Squyres: "Re: [O-MPI users] Thread-safety and daemon initiation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Neil,
<br>
<p>Open-MPI support all thread models defined by the MPI standard if they are 
<br>
available on the target system. Few years ago I did some work with MPI and 
<br>
OpenMP and locking mechanism of existing MPI implementations was the 
<br>
performance killer. We have work hard to remove this bottleneck on 
<br>
Open-MPI. The lock are very specific and normally short term. We try to 
<br>
find all available mechanisms on the running architecture in order to 
<br>
avoid using thread locks for short term operations (we use atomic 
<br>
operations). There are no (or very few) global locks. However, at the 
<br>
current stage of developpement, few tests have been done in this 
<br>
direction, mainly on the MPI_THREAD_MULTIPLE model (who work well as far 
<br>
as we know).
<br>
<p>Therefore, the short answer to your first query is yes and yes, at the 
<br>
present tense not future. Today, it's possible to use MPI functions in 
<br>
OpenMP regions (without additional locks) and/or OpenMP directive within 
<br>
MPI tasks.
<br>
<p>For the second query, we dont have start daemons similar to lamboot or 
<br>
mpiboot. But someone from the RTE (RunTime Environment) can give your a 
<br>
more precise answer.
<br>
<p>&nbsp;&nbsp;&nbsp;Regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Tue, 15 Feb 2005, Neil Storer wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two queries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Is Open MPI thread-safe (assuming the system-supplied libraries are 
</span><br>
<span class="quotelev1">&gt; thread-safe)? In particular will it be possible to call MPI routines from 
</span><br>
<span class="quotelev1">&gt; OpenMP regions and will it be possible to use OpenMP directives within MPI 
</span><br>
<span class="quotelev1">&gt; tasks?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Does Open MPI use the same mechanism as LAM-MPI's &quot;lamboot&quot; (rsh/ssh) to 
</span><br>
<span class="quotelev1">&gt; start daemons on other nodes or is there a different mechanism altogether?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;       Neil Storer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0006.php">Mitch Sukalski: "Re: [O-MPI users] Thread-safety and daemon initiation"</a>
<li><strong>Previous message:</strong> <a href="0004.php">Neil Storer: "[O-MPI users] Thread-safety and daemon initiation"</a>
<li><strong>In reply to:</strong> <a href="0004.php">Neil Storer: "[O-MPI users] Thread-safety and daemon initiation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0007.php">Jeff Squyres: "Re: [O-MPI users] Thread-safety and daemon initiation"</a>
<li><strong>Reply:</strong> <a href="0007.php">Jeff Squyres: "Re: [O-MPI users] Thread-safety and daemon initiation"</a>
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
