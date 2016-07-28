<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 15 10:45:08 2006" -->
<!-- isoreceived="20060915144508" -->
<!-- sent="Fri, 15 Sep 2006 10:44:43 -0400" -->
<!-- isosent="20060915144443" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Perl and MPI" -->
<!-- id="C130349B.26D68%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060915143604.61991.qmail_at_web37505.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-15 10:44:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1869.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1867.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>In reply to:</strong> <a href="1867.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1875.php">George Bosilca: "Re: [OMPI users] Perl and MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/15/06 10:36 AM, &quot;imran shaik&quot; &lt;sk.imran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi  Renato,
</span><br>
<span class="quotelev1">&gt;   thanks for your response.
</span><br>
<span class="quotelev1">&gt;   Can you elaborate on this.?
</span><br>
<span class="quotelev1">&gt;   I have few doubts as well:
</span><br>
<span class="quotelev1">&gt;   1) OpenMPI runtime supports SGE?? Does it uses SGE instead of MPI runtime
</span><br>
<span class="quotelev1">&gt; when it finds SGE running??
</span><br>
<p>SGE support will be included in Open MPI v1.2, scheduled to be released at
<br>
Supercomputing in November.  As with any other resource manager, if you run
<br>
Open MPI in an SGE job, &quot;mpirun&quot; will automatically use the back-end
<br>
resource manager mechanisms to launch and monitor MPI processes (as
<br>
appropriate).
<br>
<p><span class="quotelev1">&gt;   2) Is it possible to check point and run MPI jobs?
</span><br>
<p>This is ongoing work.  Not yet, but we expect to have demonstratable
<br>
versions of this at SC (November).
<br>
<p><span class="quotelev1">&gt;   3) Is it possible to add and remove processes dynamically from the MPI
</span><br>
<span class="quotelev1">&gt; communicator?
</span><br>
<p>No.  MPI defines that communicators are a fixed set of processes.
<br>
<p><span class="quotelev1">&gt;   5) When do we actually need many different communicators?
</span><br>
<p>It's up to your applications.
<br>
<p><span class="quotelev1">&gt;   4) Is MPI only suitable for low latency communication in  a cluster
</span><br>
<span class="quotelev1">&gt; environment?
</span><br>
<p>Yes and no; there's a lot of religious debate about this.  ;-)  Certainly,
<br>
this is an extremely common environment for MPI usage, but there are many
<br>
groups who are interested in using MPI in WAN kinds of scenarios, for
<br>
example.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1869.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1867.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>In reply to:</strong> <a href="1867.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1875.php">George Bosilca: "Re: [OMPI users] Perl and MPI"</a>
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
