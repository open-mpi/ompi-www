<?
$subject_val = "Re: [hwloc-users] Understanding hwloc-ps output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 10:01:14 2012" -->
<!-- isoreceived="20120530140114" -->
<!-- sent="Wed, 30 May 2012 10:01:08 -0400" -->
<!-- isosent="20120530140108" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Understanding hwloc-ps output" -->
<!-- id="5B1AAAF7-2DB4-448D-B991-0190139A6358_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4FC62690.2020502_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Understanding hwloc-ps output<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 10:01:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Previous message:</strong> <a href="0634.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>In reply to:</strong> <a href="0634.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Reply:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to try the OMPI tarball that is about to become OMPI v1.6.1 -- we made a bunch of affinity-related fixes, and it should be much more predictable / stable in what it does in terms of process binding:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/~jsquyres/unofficial/">http://www.open-mpi.org/~jsquyres/unofficial/</a>
<br>
<p>(these affinity fixes are not yet in a nightly 1.6 tarball because we're testing them before they get committed to the OMPI v1.6 SVN branch)
<br>
<p><p>On May 30, 2012, at 9:54 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Hello Youri,
</span><br>
<span class="quotelev1">&gt; When using openmpi 1.4.4 with --np 2 --bind-to-core --bycore&#148; it reports the following:
</span><br>
<span class="quotelev2">&gt;&gt; [hostname:03339] [[17125,0],0] odls:default:fork binding child [[17125,1],0] to cpus 0001
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [hostname:03339] [[17125,0],0] odls:default:fork binding child [[17125,1],1] to cpus 0002
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bitmask 0001 and 0002 mean CPUs with physical indexes 0 and 1 in OMPI 1.4. So that corresponds to the first core of each socket, and that matches what hwloc-ps says. Try &quot;hwloc-ps -c&quot; should show the same bitmask.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I agree that these are not adjacent cores, but I don't know enough of OMPI binding options to understand what it was supposed to do in your case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Previous message:</strong> <a href="0634.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>In reply to:</strong> <a href="0634.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Reply:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
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
