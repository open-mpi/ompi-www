<?
$subject_val = "Re: [OMPI devel] Open MPI (not quite) on Cray XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 15:45:58 2013" -->
<!-- isoreceived="20130130204558" -->
<!-- sent="Wed, 30 Jan 2013 21:45:53 +0100" -->
<!-- isosent="20130130204553" -->
<!-- name="Jure Pe&#196;&#141;ar" -->
<!-- email="pegasus_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI (not quite) on Cray XC30" -->
<!-- id="20130130214553.40ed2864.pegasus_at_nerv.eu.org" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6C801D0F-CA94-4A86-8A76-0B26EFD898B2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI (not quite) on Cray XC30<br>
<strong>From:</strong> Jure Pe&#196;&#141;ar (<em>pegasus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 15:45:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12086.php">Rolf vandeVaart: "[OMPI devel] mpirun -host does not work from r27879 and forward on trunk"</a>
<li><strong>Previous message:</strong> <a href="12084.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc3 released"</a>
<li><strong>In reply to:</strong> <a href="12082.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12083.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 30 Jan 2013 10:09:09 -0800
<br>
Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm afraid that optimized-common doesn't stand alone - it requires other modules as well. If you look at optimized-lustre, you'll see that we include cray-common, optimized-common, and gnu-common, and then add the lustre flags.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You need all three of those modules to build successfully. If you don't want lustre support, I suggest you copy the optimized-lustre platform file to make you own, and then just remove the lustre flags.
</span><br>
<p>Ah excellent, a lesson in building open-mpi. Thanks.
<br>
<p>I can confirm it builds with platform set to optimized-lustre.
<br>
<p>Since this is my first meeting with cray environment, I just have to figure out how to run the thing. Not a question for this list anymore.
<br>
<p>Thanks again!
<br>
<p><p><pre>
-- 
Jure Pe&#196;&#141;ar
<a href="http://jure.pecar.org">http://jure.pecar.org</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12086.php">Rolf vandeVaart: "[OMPI devel] mpirun -host does not work from r27879 and forward on trunk"</a>
<li><strong>Previous message:</strong> <a href="12084.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc3 released"</a>
<li><strong>In reply to:</strong> <a href="12082.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12083.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
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
