<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 25 09:53:14 2007" -->
<!-- isoreceived="20070625135314" -->
<!-- sent="Mon, 25 Jun 2007 09:52:52 -0400" -->
<!-- isosent="20070625135252" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="467FC8B4.7090400_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0706251222200.25992_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-25 09:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1759.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1757.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1755.php">Bogdan Costescu: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1757.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bogdan Costescu wrote:
<br>
<span class="quotelev1">&gt; On Mon, 25 Jun 2007, sadfub_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I *assume* loose coupled jobs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm, given Sun's supposed involvement in this project, I'm really 
</span><br>
<span class="quotelev1">&gt; surprised that there is nobody from Sun to explain this.
</span><br>
<p>So do I! :) I have my hands wrapped around for playing too much 
<br>
basketball, I couldn't really type for a few days.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't use SGE anymore, but some years ago when I did I have worked 
</span><br>
<span class="quotelev1">&gt; on the integration of LAM/MPI; here's what I remember:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - loose integration: the batch job is given a file which contains the
</span><br>
<span class="quotelev1">&gt;    list of nodes and number of slots (=processes that can be run on
</span><br>
<span class="quotelev1">&gt;    each node). The scheduler knows that the resources are ocupied until
</span><br>
<span class="quotelev1">&gt;    the batch job finishes. SGE has no involvement in starting of the
</span><br>
<span class="quotelev1">&gt;    processes on remote nodes, the job should do everything by itself
</span><br>
<span class="quotelev1">&gt;    (f.e. by using rsh/ssh). The end of the batch script or maybe an
</span><br>
<span class="quotelev1">&gt;    early termination (f.e. for exceeded runtime) tells SGE that the job
</span><br>
<span class="quotelev1">&gt;    has ended and there is no effort from SGE to finish processes
</span><br>
<span class="quotelev1">&gt;    launched on remote nodes. Removing a running job means that signals
</span><br>
<span class="quotelev1">&gt;    are sent only to the process on the main node of the job; the job
</span><br>
<span class="quotelev1">&gt;    should take care by itself of propagating signals or cleaning up on
</span><br>
<span class="quotelev1">&gt;    remote nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - tight integration: the batch job is given the same nodes file, but
</span><br>
<span class="quotelev1">&gt;    SGE expects the job to use SGE's own launch mechanism, which is
</span><br>
<span class="quotelev1">&gt;    based on NetBSD's rsh [1]. The SGE daemons on remote nodes then know
</span><br>
<span class="quotelev1">&gt;    about the processes that belong to the job and there is a SGE rsh
</span><br>
<span class="quotelev1">&gt;    connection allowed for each slot allocated to the job on that node.
</span><br>
<span class="quotelev1">&gt;    Upon termination of the job, SGE tries to kill all processes that
</span><br>
<span class="quotelev1">&gt;    belong to the job on all allocated nodes. To track the processes
</span><br>
<span class="quotelev1">&gt;    that belong to a job on a node, the daemon uses a pool of group IDs
</span><br>
<span class="quotelev1">&gt;    that are normally not used and then sets an additional group ID
</span><br>
<span class="quotelev1">&gt;    (setgroups(2)) on the the launched process(es) - this call is
</span><br>
<span class="quotelev1">&gt;    available only to 'root', so there is no way for user processes to
</span><br>
<span class="quotelev1">&gt;    escape (like creating a separate process group, etc.) and upon
</span><br>
<span class="quotelev1">&gt;    termination of the job all processes (included spawned ones) that
</span><br>
<span class="quotelev1">&gt;    are marked with the job-specific group are killed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I've came across DanT's blog that does some good explanation for the 
<br>
difference between the two.
<br>
<a href="http://blogs.sun.com/templedf/entry/pe_tight_integration">http://blogs.sun.com/templedf/entry/pe_tight_integration</a>
<br>
<p><span class="quotelev1">&gt; [1] There is currently some effort on integrating ssh as well, the 
</span><br>
<span class="quotelev1">&gt; problem being that the ssh daemon needs some modifications to allow 
</span><br>
<span class="quotelev1">&gt; SGE to obtain accounting information. There was also some talk about a 
</span><br>
<span class="quotelev1">&gt; TM-like API; unfortunately the progress in this area seems to be very 
</span><br>
<span class="quotelev1">&gt; slow, if there is any at all...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>We are still pushing for the TM-like API or DRMAA for SGE since the 
<br>
current state of rsh socket limitation imposes a limitation on the 
<br>
number of nodes we can launch at one time. A workaround is to use the 
<br>
SSH integration but it is only available when you get SGE 6.1 from 
<br>
source, and not binaries.
<br>
<p>I've heard that the SGE team is working on making rsh/rshd dispensable, 
<br>
so the modification for rshd/sshd will not be needed. Without leaking 
<br>
too much details (since I don't believe they have announced it yet), 
<br>
this should help speedup the start time and also also solve the 
<br>
privileged socket limitation for launching parallel jobs. It will be in 
<br>
the upcoming release.
<br>
<p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1759.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1757.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1755.php">Bogdan Costescu: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1757.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
