<?
$subject_val = "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 30 13:21:28 2010" -->
<!-- isoreceived="20100130182128" -->
<!-- sent="Sat, 30 Jan 2010 18:21:20 +0000" -->
<!-- isosent="20100130182120" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] processor restriction + lookup of pid for 1.0" -->
<!-- id="EE8CCC09-AB41-427B-8A70-076C6CBB51CA_at_pittman.co.uk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100130145701.GK4798_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] processor restriction + lookup of pid for 1.0<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-30 13:21:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0666.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1721)"</a>
<li><strong>Previous message:</strong> <a href="0664.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>In reply to:</strong> <a href="0651.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0652.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 30 Jan 2010, at 14:57, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Samuel Thibault, le Sat 30 Jan 2010 15:55:00 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; #21 implicitly does: &quot;what cpuset they're bound to&quot; is just an example.
</span><br>
<span class="quotelev2">&gt;&gt; A configuration function hwloc_topology_set_pid(topology, pid) would
</span><br>
<span class="quotelev2">&gt;&gt; mean that the discovery has to be done from the view of the given pid,
</span><br>
<span class="quotelev2">&gt;&gt; and thus the allowed_cpuset should be according to that view, thus
</span><br>
<span class="quotelev2">&gt;&gt; administrative restrictions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to give an example: lstopo --pid 1234 would not only show where the
</span><br>
<span class="quotelev1">&gt; process is currently bound to, but also its allowed cpuset, which can be
</span><br>
<span class="quotelev1">&gt; useful when monitoring applications run by a batch scheduler or such.
</span><br>
<p><p>Hi,
<br>
<p>It was my request that caused Jeff to file that enhancement request.  My take on this would be that #21 should be interpreted as 'report system state from the point of view of &lt;pid&gt; rather than self'.  I.e.  I don't care which cpuset is shown, the current or the allowed, all I care about is changing the frame of reference so the view is what you would see if the same code was being called from &lt;pid&gt;.
<br>
<p>The reason for this is it's currently possible to do &quot;mpirun lstopo&quot; to see where processes will be bound but it's not possible using lstopo to see the binding of already running jobs.  As some of you will be aware I maintain padb, a 'job inspection' tool and I believe lstopo and padb could work together to present a parallel, job-wide view of process binding across a parallel job.
<br>
<p>I've already added the code to padb to wrap around lstopo, it's available from SVN and has been for some time, it currently runs lstopo for every process within a job on the correct node with the --whole-system option, this means the output is not particuarly relevant though - hence the change request.
<br>
<p>If you are experimenting with this then the following padb command will allow you to play with the command line options provided, %p will be expanded to the pid.  I'm curious to see how this pans out in actual use but I believe it's got potential to be very useful indeed.
<br>
<p>$ padb --lstopo -Olstopo-show-warning=no -Olstopo-command=&quot;lstopo --pid=%p -&quot; -c [ -a | &lt;jobid&gt; ]
<br>
<p>I'm aiming to make a padb release in the next month with a being as RC as soon as two weeks away, if I can change the default &quot;lstopo-command&quot; to one that takes a pid before then that would be great, if not padb is future-proof as users can over-ride the default in a configuration file but this raises the barrier somewhat as people would need to be aware that this was an option.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0666.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1721)"</a>
<li><strong>Previous message:</strong> <a href="0664.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>In reply to:</strong> <a href="0651.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0652.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
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
