<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 25 06:48:23 2007" -->
<!-- isoreceived="20070625104823" -->
<!-- sent="Mon, 25 Jun 2007 12:48:17 +0200 (CEST)" -->
<!-- isosent="20070625104817" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="Pine.LNX.4.64.0706251222200.25992_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="467F690B.2080200_at_gmx.net" -->
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
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-25 06:48:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1756.php">Gleb Natapov: "[OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Previous message:</strong> <a href="1754.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1754.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1758.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1758.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 25 Jun 2007, sadfub_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I *assume* loose coupled jobs
</span><br>
<p>Hmm, given Sun's supposed involvement in this project, I'm really 
<br>
surprised that there is nobody from Sun to explain this.
<br>
<p>I don't use SGE anymore, but some years ago when I did I have worked 
<br>
on the integration of LAM/MPI; here's what I remember:
<br>
<p>- loose integration: the batch job is given a file which contains the
<br>
&nbsp;&nbsp;&nbsp;list of nodes and number of slots (=processes that can be run on
<br>
&nbsp;&nbsp;&nbsp;each node). The scheduler knows that the resources are ocupied until
<br>
&nbsp;&nbsp;&nbsp;the batch job finishes. SGE has no involvement in starting of the
<br>
&nbsp;&nbsp;&nbsp;processes on remote nodes, the job should do everything by itself
<br>
&nbsp;&nbsp;&nbsp;(f.e. by using rsh/ssh). The end of the batch script or maybe an
<br>
&nbsp;&nbsp;&nbsp;early termination (f.e. for exceeded runtime) tells SGE that the job
<br>
&nbsp;&nbsp;&nbsp;has ended and there is no effort from SGE to finish processes
<br>
&nbsp;&nbsp;&nbsp;launched on remote nodes. Removing a running job means that signals
<br>
&nbsp;&nbsp;&nbsp;are sent only to the process on the main node of the job; the job
<br>
&nbsp;&nbsp;&nbsp;should take care by itself of propagating signals or cleaning up on
<br>
&nbsp;&nbsp;&nbsp;remote nodes.
<br>
<p>- tight integration: the batch job is given the same nodes file, but
<br>
&nbsp;&nbsp;&nbsp;SGE expects the job to use SGE's own launch mechanism, which is
<br>
&nbsp;&nbsp;&nbsp;based on NetBSD's rsh [1]. The SGE daemons on remote nodes then know
<br>
&nbsp;&nbsp;&nbsp;about the processes that belong to the job and there is a SGE rsh
<br>
&nbsp;&nbsp;&nbsp;connection allowed for each slot allocated to the job on that node.
<br>
&nbsp;&nbsp;&nbsp;Upon termination of the job, SGE tries to kill all processes that
<br>
&nbsp;&nbsp;&nbsp;belong to the job on all allocated nodes. To track the processes
<br>
&nbsp;&nbsp;&nbsp;that belong to a job on a node, the daemon uses a pool of group IDs
<br>
&nbsp;&nbsp;&nbsp;that are normally not used and then sets an additional group ID
<br>
&nbsp;&nbsp;&nbsp;(setgroups(2)) on the the launched process(es) - this call is
<br>
&nbsp;&nbsp;&nbsp;available only to 'root', so there is no way for user processes to
<br>
&nbsp;&nbsp;&nbsp;escape (like creating a separate process group, etc.) and upon
<br>
&nbsp;&nbsp;&nbsp;termination of the job all processes (included spawned ones) that
<br>
&nbsp;&nbsp;&nbsp;are marked with the job-specific group are killed.
<br>
<p>[1] There is currently some effort on integrating ssh as well, the 
<br>
problem being that the ssh daemon needs some modifications to allow 
<br>
SGE to obtain accounting information. There was also some talk about a 
<br>
TM-like API; unfortunately the progress in this area seems to be very 
<br>
slow, if there is any at all...
<br>
<p><pre>
-- 
Bogdan Costescu
IWR - Interdisziplinaeres Zentrum fuer Wissenschaftliches Rechnen
Universitaet Heidelberg, INF 368, D-69120 Heidelberg, GERMANY
Telephone: +49 6221 54 8869, Telefax: +49 6221 54 8868
E-mail: Bogdan.Costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1756.php">Gleb Natapov: "[OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Previous message:</strong> <a href="1754.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1754.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1758.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1758.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
