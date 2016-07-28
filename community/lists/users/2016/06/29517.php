<?
$subject_val = "Re: [OMPI users] Continuous integration question...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 14:06:25 2016" -->
<!-- isoreceived="20160622180625" -->
<!-- sent="Wed, 22 Jun 2016 14:06:11 -0400" -->
<!-- isosent="20160622180611" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Continuous integration question..." -->
<!-- id="576AD393.1020303_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="48617075-7CB3-4CF0-A705-4B11CF8E904E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Continuous integration question...<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-22 14:06:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29518.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>Previous message:</strong> <a href="29516.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>In reply to:</strong> <a href="29516.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Continuous integration question..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29518.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>Reply:</strong> <a href="29518.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Continuous integration question..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 22/06/16 01:49 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a similar mechanism already (that is used by the Open MPI community for nightly regression testing), but with the advantage that it will give you a unique download filename (vs. &quot;openmpi-v2.x-latest.bz2&quot; every night).  Do this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; wget <a href="https://www.open-mpi.org/nightly/v2.x/latest_snapshot.txt">https://www.open-mpi.org/nightly/v2.x/latest_snapshot.txt</a>
</span><br>
<span class="quotelev1">&gt; wget <a href="https://www.open-mpi.org/nightly/v2.x/openmpi-`cat">https://www.open-mpi.org/nightly/v2.x/openmpi-`cat</a> latest_snapshot.txt`.tar.bz2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The nightly snapshots are created each night starting around 9pm US Eastern.  New snapshots are created if there were commits to the tree that day.
</span><br>
<p>Nice!  But I have a concern about taking the nightly: it it &quot;just&quot; a 
<br>
snapshot, or is it &quot;somewhat validated&quot; before beeing a snapshot?
<br>
<p>Or I could ask: is this snapshot stable enough to be tested by 
<br>
&quot;outsiders&quot;?  Is there any more &quot;stable&quot; branch to wget?
<br>
<p>If not, I would ask if there is a similar wget trick to get the latest 
<br>
&quot;release candidate&quot; or something more &quot;stable&quot; than a snapshot of the 
<br>
repository...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, thanks!
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29518.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>Previous message:</strong> <a href="29516.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>In reply to:</strong> <a href="29516.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Continuous integration question..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29518.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>Reply:</strong> <a href="29518.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Continuous integration question..."</a>
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
