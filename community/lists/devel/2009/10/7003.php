<?
$subject_val = "Re: [OMPI devel] 0.9.1rc2 is available";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 05:53:58 2009" -->
<!-- isoreceived="20091022095358" -->
<!-- sent="Thu, 22 Oct 2009 10:54:14 +0100" -->
<!-- isosent="20091022095414" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 0.9.1rc2 is available" -->
<!-- id="1256205254.3392.44.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AE02047.7060607_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 0.9.1rc2 is available<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 05:54:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7004.php">Ashley Pittman: "[OMPI devel] Stack traces and message queues in MTT results."</a>
<li><strong>Previous message:</strong> <a href="7002.php">Brice Goglin: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>In reply to:</strong> <a href="7002.php">Brice Goglin: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7006.php">Jeff Squyres: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="7006.php">Jeff Squyres: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-10-22 at 11:05 +0200, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Ashley Pittman wrote:
</span><br>
<p><span class="quotelev2">&gt; &gt; Does this imply the default is to report on processes in the current
</span><br>
<span class="quotelev2">&gt; &gt; cpuset rather than the entire system?  Does anyone else feel that
</span><br>
<span class="quotelev2">&gt; &gt; violates the principal of least surprise?
</span><br>
<p><span class="quotelev1">&gt; Yes, by default, it's the current cpuset. Maybe lstopo should report the
</span><br>
<span class="quotelev1">&gt; whole system (it does if you pass --whole-system), or display a clear
</span><br>
<span class="quotelev1">&gt; message saying that's it's only showing the current cpuset. Apart from
</span><br>
<span class="quotelev1">&gt; lstopo, for real applications, I feel like using the current cpuset only
</span><br>
<span class="quotelev1">&gt; is better.
</span><br>
<p>I guess 95% of the time you run it by hand you won't have a cpuset so
<br>
it'll be the same anyway and when you do have a cpuset then it's
<br>
probably what you are interested in.
<br>
<p>Could I add a feature request that you can query the topology for other
<br>
arbitrary processes in the system?  I've taken a look at the source and
<br>
it appears I could add this for Linux easily enough (I assume I could
<br>
just change /proc/self/ in src/topology-linux.c:1005?) but doing the
<br>
same for other operating systems isn't something I could do.
<br>
<p>It would be a two minute job to add this to padb which would allow you
<br>
to see the topology of all processes within a parallel job at run-time
<br>
without needing to interrupt the job.
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
<li><strong>Next message:</strong> <a href="7004.php">Ashley Pittman: "[OMPI devel] Stack traces and message queues in MTT results."</a>
<li><strong>Previous message:</strong> <a href="7002.php">Brice Goglin: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>In reply to:</strong> <a href="7002.php">Brice Goglin: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7006.php">Jeff Squyres: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="7006.php">Jeff Squyres: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
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
