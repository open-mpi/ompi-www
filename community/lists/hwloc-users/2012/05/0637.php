<?
$subject_val = "Re: [hwloc-users] Understanding hwloc-ps output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 10:34:26 2012" -->
<!-- isoreceived="20120530143426" -->
<!-- sent="Wed, 30 May 2012 16:34:19 +0200" -->
<!-- isosent="20120530143419" -->
<!-- name="Youri LACAN-BARTLEY" -->
<!-- email="youri.lacan-bartley_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Understanding hwloc-ps output" -->
<!-- id="9113A52E1096EB41B1F88DD94C4369D5F74879_at_EXCHSRV.transvalor.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FC62976.4020100_at_inria.fr" -->
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
<strong>From:</strong> Youri LACAN-BARTLEY (<em>youri.lacan-bartley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 10:34:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0638.php">Jeff Squyres: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Previous message:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>In reply to:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0638.php">Jeff Squyres: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice, Jeff,
<br>
<p>Thank you for your swift reply.
<br>
I will try out openmpi 1.6 as soon as I can and see if this produces the expected results.
<br>
The benchmarking results I've obtained seem to confirm that openmpi is indeed reporting the wrong bindings.
<br>
<p>It would indeed be great if openmpi 1.6 could display hwloc bitmasks to avoid confusion.
<br>
<p>Youri
<br>
<p>-----Message d'origine-----
<br>
De&#160;: hwloc-users-bounces_at_[hidden] [mailto:hwloc-users-bounces_at_[hidden]] De la part de Brice Goglin
<br>
Envoy&#233;&#160;: mercredi 30 mai 2012 16:07
<br>
&#192;&#160;: Hardware locality user list
<br>
Objet&#160;: Re: [hwloc-users] Understanding hwloc-ps output
<br>
<p>Jeff,
<br>
What is the displayed bitmask in OMPI 1.6? Is it the hwloc bitmask? Or the OMPI bitmask made of OMPI indexes?
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
<span class="quotelev1">&gt; (these affinity fixes are not yet in a nightly 1.6 tarball because 
</span><br>
<span class="quotelev1">&gt; we're testing them before they get committed to the OMPI v1.6 SVN 
</span><br>
<span class="quotelev1">&gt; branch)
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
<span class="quotelev2">&gt;&gt; When using openmpi 1.4.4 with --np 2 --bind-to-core --bycore&quot; it reports the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hostname:03339] [[17125,0],0] odls:default:fork binding child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[17125,1],0] to cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hostname:03339] [[17125,0],0] odls:default:fork binding child 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[17125,1],1] to cpus 0002
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
<p>_______________________________________________
<br>
hwloc-users mailing list
<br>
hwloc-users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0638.php">Jeff Squyres: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Previous message:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>In reply to:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0638.php">Jeff Squyres: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
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
