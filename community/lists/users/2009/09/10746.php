<?
$subject_val = "Re: [OMPI users] switch and NIC performance (was: very bad parallelscaling of vasp using openmpi)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 23 15:16:00 2009" -->
<!-- isoreceived="20090923191600" -->
<!-- sent="Wed, 23 Sep 2009 15:15:55 -0400" -->
<!-- isosent="20090923191555" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] switch and NIC performance (was: very bad parallelscaling of vasp using openmpi)" -->
<!-- id="7A5F8ED1-0110-45AE-9883-AF6EFC2FC726_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="596C167D-F15A-4A32-ADEA-57F026DF2CF9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] switch and NIC performance (was: very bad parallelscaling of vasp using openmpi)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-23 15:15:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10747.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10745.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>In reply to:</strong> <a href="10743.php">Jeff Squyres: "Re: [OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10744.php">Peter Kjellstrom: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow; I should point out an amazing coincidence here.  Doug Eadline  
<br>
used [almost] exactly the same analogy that I did (truck vs. F1) in a  
<br>
column that was published today in Linux Magazine:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.linux-mag.com/id/7534">http://www.linux-mag.com/id/7534</a>
<br>
<p>I swear I didn't read his column before I posted my answer this morning!
<br>
<p>:-)
<br>
<p><p>On Sep 23, 2009, at 10:38 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 23, 2009, at 10:15 AM, Dave Love wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So, how does one go about selecting a good switch? &quot;The most
</span><br>
<span class="quotelev3">&gt; &gt;&gt; expensive
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the better&quot; is somewhat a unsatisfying option!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also it's apparently not always right
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +1 on Dave's and Joe's comments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, not all of Cisco's switches are suitable for &quot;ultra&quot; HPC
</span><br>
<span class="quotelev1">&gt; clusters.  Cisco has some very expensive switches whose goals are very
</span><br>
<span class="quotelev1">&gt; definitely not the same as what ultra HPC clusters typically need.
</span><br>
<span class="quotelev1">&gt; They're great switches (ok, I'm a bit biased ;-) ), but they're not
</span><br>
<span class="quotelev1">&gt; what you would need for an ultra HPC cluster.  Buying one of these
</span><br>
<span class="quotelev1">&gt; would be kind of like buying an F-350 truck instead of an F1 formula
</span><br>
<span class="quotelev1">&gt; race car; both are excellent at their respective tasks, but they're
</span><br>
<span class="quotelev1">&gt; very different tasks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My point: a network switch != a network switch != a network switch.
</span><br>
<span class="quotelev1">&gt; Make sure you understand what workloads and tasks the network switch
</span><br>
<span class="quotelev1">&gt; was designed for; don't just rely on published spec numbers -- they
</span><br>
<span class="quotelev1">&gt; don't tell the full story.  Both an F1 and an F-350 can go 100 mph --
</span><br>
<span class="quotelev1">&gt; but they get there in very different ways.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="10747.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10745.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>In reply to:</strong> <a href="10743.php">Jeff Squyres: "Re: [OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10744.php">Peter Kjellstrom: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
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
