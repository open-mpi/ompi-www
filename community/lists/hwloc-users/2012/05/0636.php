<?
$subject_val = "Re: [hwloc-users] Understanding hwloc-ps output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 10:06:51 2012" -->
<!-- isoreceived="20120530140651" -->
<!-- sent="Wed, 30 May 2012 16:06:46 +0200" -->
<!-- isosent="20120530140646" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Understanding hwloc-ps output" -->
<!-- id="4FC62976.4020100_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5B1AAAF7-2DB4-448D-B991-0190139A6358_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 10:06:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0637.php">Youri LACAN-BARTLEY: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Previous message:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>In reply to:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0637.php">Youri LACAN-BARTLEY: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Reply:</strong> <a href="0637.php">Youri LACAN-BARTLEY: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Reply:</strong> <a href="0638.php">Jeff Squyres: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
What is the displayed bitmask in OMPI 1.6? Is it the hwloc bitmask? Or
<br>
the OMPI bitmask made of OMPI indexes?
<br>
Brice
<br>
<p><p><p>Le 30/05/2012 16:01, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; You might want to try the OMPI tarball that is about to become OMPI v1.6.1 -- we made a bunch of affinity-related fixes, and it should be much more predictable / stable in what it does in terms of process binding:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/~jsquyres/unofficial/">http://www.open-mpi.org/~jsquyres/unofficial/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (these affinity fixes are not yet in a nightly 1.6 tarball because we're testing them before they get committed to the OMPI v1.6 SVN branch)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 30, 2012, at 9:54 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Youri,
</span><br>
<span class="quotelev2">&gt;&gt; When using openmpi 1.4.4 with --np 2 --bind-to-core --bycore&#148; it reports the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hostname:03339] [[17125,0],0] odls:default:fork binding child [[17125,1],0] to cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hostname:03339] [[17125,0],0] odls:default:fork binding child [[17125,1],1] to cpus 0002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bitmask 0001 and 0002 mean CPUs with physical indexes 0 and 1 in OMPI 1.4. So that corresponds to the first core of each socket, and that matches what hwloc-ps says. Try &quot;hwloc-ps -c&quot; should show the same bitmask.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I agree that these are not adjacent cores, but I don't know enough of OMPI binding options to understand what it was supposed to do in your case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0637.php">Youri LACAN-BARTLEY: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Previous message:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>In reply to:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0637.php">Youri LACAN-BARTLEY: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Reply:</strong> <a href="0637.php">Youri LACAN-BARTLEY: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Reply:</strong> <a href="0638.php">Jeff Squyres: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
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
