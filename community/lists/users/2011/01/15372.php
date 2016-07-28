<?
$subject_val = "Re: [OMPI users] Newbie question continues, a step toward real app";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 14 15:47:25 2011" -->
<!-- isoreceived="20110114204725" -->
<!-- sent="Fri, 14 Jan 2011 12:47:21 -0800" -->
<!-- isosent="20110114204721" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question continues, a step toward real app" -->
<!-- id="20110114204721.GA25641_at_stikine.sfu.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C954E838.DD32%tsakai_at_gallo.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbie question continues, a step toward real app<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-14 15:47:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15373.php">Zhigang Wei: "[OMPI users] Concerning infiniband support"</a>
<li><strong>Previous message:</strong> <a href="15371.php">lagoun brahim: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>In reply to:</strong> <a href="15367.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 13, 2011 at 05:34:48PM -0800, Tena Sakai wrote:
<br>
<span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Did you speak to the Rmpi author about this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, I haven't, but here's what the author wrote:
</span><br>
<span class="quotelev1">&gt; <a href="https://stat.ethz.ch/pipermail/r-sig-hpc/2009-February/000104.html">https://stat.ethz.ch/pipermail/r-sig-hpc/2009-February/000104.html</a>
</span><br>
<span class="quotelev1">&gt; in which he states:
</span><br>
<span class="quotelev1">&gt;    ...The way of spawning R slaves under LAM is not working
</span><br>
<span class="quotelev1">&gt;    any more under OpenMPI. Under LAM, one just uses
</span><br>
<span class="quotelev1">&gt;      R -&gt; library(Rmpi) -&gt;  mpi.spawn.Rslaves()
</span><br>
<span class="quotelev1">&gt;    as long as host file is set. Under OpenMPI this leads only one R slave on
</span><br>
<span class="quotelev1">&gt;    the master host no matter how many remote hosts are specified in OpenMPI
</span><br>
<span class="quotelev1">&gt;    hostfile. ...
</span><br>
<span class="quotelev1">&gt; His README file doesn't tell what I need to know.  In the light of
</span><br>
<span class="quotelev1">&gt; LAM MPI being &quot;absorbed&quot; into openMPI, I find this unfortunate.
</span><br>
<p>Hmm. It has been a while that I had to compile Rmpi, but the following
<br>
works with openmpi-1.3.3, R-2.10.1:
<br>
<p># mpiexec -n 1 -hostfile mfile R --vanilla &lt; Rmpi-hello.R
<br>
<p>with a script Rmpi-hello.R like
<br>
<p>library(Rmpi)
<br>
mpi.spawn.Rslaves()
<br>
mpi.remote.exec(paste(&quot;I am&quot;,mpi.comm.rank(),&quot;of&quot;,mpi.comm.size()))
<br>
mpi.close.Rslaves()
<br>
mpi.quit()
<br>
<p>The only unfortunate effect is that by default mpi.spawn.Rslaves()
<br>
spawns as many slaves as there are lines in the hostfile, hence you
<br>
end up with one too many processes: 1 master + N slaves. You can repair
<br>
that by using
<br>
<p>Nprocs &lt;- mpi.universe.size()
<br>
mpi.spawn.Rslaves(nslaves=Nprocs-1)
<br>
<p>instead of the simple mpi.spawn.Rslaves() call.
<br>
<p>BTW: the whole script works in the same way when submitting under torque
<br>
using the TM interface and without specifying -hostfile ... on the
<br>
mpiexec command line.
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Head, Research Computing
WestGrid/ComputeCanada Site Lead
IT Services                                phone: 778 782-4691
Simon Fraser University                    fax:   778 782-4242
Burnaby, British Columbia                  email: siegert_at_[hidden]
Canada  V5A 1S6
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15373.php">Zhigang Wei: "[OMPI users] Concerning infiniband support"</a>
<li><strong>Previous message:</strong> <a href="15371.php">lagoun brahim: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>In reply to:</strong> <a href="15367.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
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
