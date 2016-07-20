<?
$subject_val = "Re: [hwloc-users] Understanding hwloc-ps output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 09:54:29 2012" -->
<!-- isoreceived="20120530135429" -->
<!-- sent="Wed, 30 May 2012 15:54:24 +0200" -->
<!-- isosent="20120530135424" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Understanding hwloc-ps output" -->
<!-- id="4FC62690.2020502_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9113A52E1096EB41B1F88DD94C4369D5F74851_at_EXCHSRV.transvalor.com" -->
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
<strong>Date:</strong> 2012-05-30 09:54:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Previous message:</strong> <a href="0633.php">Youri LACAN-BARTLEY: "[hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>In reply to:</strong> <a href="0633.php">Youri LACAN-BARTLEY: "[hwloc-users] Understanding hwloc-ps output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Reply:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Youri,
<br>
When using openmpi 1.4.4 with --np 2 --bind-to-core --bycore&quot; it reports
<br>
the following:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [hostname:03339] [[17125,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[17125,1],0] to cpus 0001
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [hostname:03339] [[17125,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[17125,1],1] to cpus 0002
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Bitmask 0001 and 0002 mean CPUs with physical indexes 0 and 1 in OMPI
<br>
1.4. So that corresponds to the first core of each socket, and that
<br>
matches what hwloc-ps says. Try &quot;hwloc-ps -c&quot; should show the same bitmask.
<br>
<p>However, I agree that these are not adjacent cores, but I don't know
<br>
enough of OMPI binding options to understand what it was supposed to do
<br>
in your case.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0634/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Previous message:</strong> <a href="0633.php">Youri LACAN-BARTLEY: "[hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>In reply to:</strong> <a href="0633.php">Youri LACAN-BARTLEY: "[hwloc-users] Understanding hwloc-ps output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Reply:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
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
