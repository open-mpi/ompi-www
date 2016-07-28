<?
$subject_val = "Re: [hwloc-devel] [OMPI devel] 0.9.1rc2 is available";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 09:52:07 2009" -->
<!-- isoreceived="20091022135207" -->
<!-- sent="Thu, 22 Oct 2009 09:52:03 -0400" -->
<!-- isosent="20091022135203" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [OMPI devel] 0.9.1rc2 is available" -->
<!-- id="BAD1337B-A16B-42F2-874E-0BF30E9454F6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1256205254.3392.44.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [OMPI devel] 0.9.1rc2 is available<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 09:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0241.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<li><strong>Previous message:</strong> <a href="0239.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Maybe in reply to:</strong> <a href="0237.php">Tony Breeds: "Re: [hwloc-devel] [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I added tickets #21 and #22 about these features.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/hwloc/ticket/21">https://svn.open-mpi.org/trac/hwloc/ticket/21</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/hwloc/ticket/22">https://svn.open-mpi.org/trac/hwloc/ticket/22</a>
<br>
<p>Thanks!
<br>
<p><p>On Oct 22, 2009, at 5:54 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 2009-10-22 at 11:05 +0200, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Does this imply the default is to report on processes in the  
</span><br>
<span class="quotelev1">&gt; current
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cpuset rather than the entire system?  Does anyone else feel that
</span><br>
<span class="quotelev3">&gt; &gt; &gt; violates the principal of least surprise?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, by default, it's the current cpuset. Maybe lstopo should  
</span><br>
<span class="quotelev1">&gt; report the
</span><br>
<span class="quotelev2">&gt; &gt; whole system (it does if you pass --whole-system), or display a  
</span><br>
<span class="quotelev1">&gt; clear
</span><br>
<span class="quotelev2">&gt; &gt; message saying that's it's only showing the current cpuset. Apart  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev2">&gt; &gt; lstopo, for real applications, I feel like using the current  
</span><br>
<span class="quotelev1">&gt; cpuset only
</span><br>
<span class="quotelev2">&gt; &gt; is better.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess 95% of the time you run it by hand you won't have a cpuset so
</span><br>
<span class="quotelev1">&gt; it'll be the same anyway and when you do have a cpuset then it's
</span><br>
<span class="quotelev1">&gt; probably what you are interested in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could I add a feature request that you can query the topology for  
</span><br>
<span class="quotelev1">&gt; other
</span><br>
<span class="quotelev1">&gt; arbitrary processes in the system?  I've taken a look at the source  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; it appears I could add this for Linux easily enough (I assume I could
</span><br>
<span class="quotelev1">&gt; just change /proc/self/ in src/topology-linux.c:1005?) but doing the
</span><br>
<span class="quotelev1">&gt; same for other operating systems isn't something I could do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be a two minute job to add this to padb which would allow you
</span><br>
<span class="quotelev1">&gt; to see the topology of all processes within a parallel job at run-time
</span><br>
<span class="quotelev1">&gt; without needing to interrupt the job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0241.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<li><strong>Previous message:</strong> <a href="0239.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Maybe in reply to:</strong> <a href="0237.php">Tony Breeds: "Re: [hwloc-devel] [OMPI devel] 0.9.1rc2 is available"</a>
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
