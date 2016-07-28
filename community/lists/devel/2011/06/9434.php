<?
$subject_val = "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 27 21:58:55 2011" -->
<!-- isoreceived="20110628015855" -->
<!-- sent="Tue, 28 Jun 2011 10:58:44 +0900" -->
<!-- isosent="20110628015844" -->
<!-- name="Takahiro Kawashima" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;Open MPI&amp;quot;-based MPI library used by K computer" -->
<!-- id="87sjquu36z.wl%t-kawashima_at_jp.fujitsu.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E1BC7986-DCD6-4457-9759-F3FB11BEA689_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer<br>
<strong>From:</strong> Takahiro Kawashima (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-27 21:58:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9435.php">Ralph Castain: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9433.php">Ralf Wildenhues: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>In reply to:</strong> <a href="9416.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9435.php">Ralph Castain: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9435.php">Ralph Castain: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9436.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9965.php">Y.MATSUMOTO: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI community,
<br>
<p>I'm a member of MPI library development team in Fujitsu. Shinji
<br>
Sumimoto, whose name appears in Jeff's blog, is one of our bosses.
<br>
<p>As Rayson and Jeff noted, K computer, world's most powerful HPC system
<br>
developed by RIKEN and Fujitsu, utilizes Open MPI as a base of its MPI
<br>
library. We, Fujitsu, are pleased to announce that, and also have special
<br>
thanks to Open MPI community.
<br>
We are sorry to be late announce!
<br>
<p>Our MPI library is based on Open MPI 1.4 series, and has a new point-
<br>
to-point component (BTL) and new topology-aware collective communication
<br>
algorithms (COLL). Also, it is adapted to our runtime environment (ESS,
<br>
PLM, GRPCOMM etc).
<br>
<p>K computer connects 68,544 nodes by our custom interconnect.
<br>
Its runtime environment is our proprietary one. So we don't use orted.
<br>
We cannot tell start-up time yet because of disclosure restriction, sorry.
<br>
<p>We are surprised by the extensibility of Open MPI, and have proved that
<br>
Open MPI is scalable to 68,000 processes level! We feel pleasure to
<br>
utilize such a great open-source software.
<br>
<p>We cannot tell detail of our technology yet because of our contract
<br>
with RIKEN AICS, however, we will plan to feedback of our improvements
<br>
and bug fixes. We can contribute some bug fixes soon, however, for
<br>
contribution of our improvements will be next year with Open MPI
<br>
agreement.
<br>
<p>Best regards,
<br>
<p>MPI development team,
<br>
Fujitsu
<br>
<p><p><span class="quotelev1">&gt; I got more information:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://blogs.cisco.com/performance/open-mpi-powers-8-petaflops/">http://blogs.cisco.com/performance/open-mpi-powers-8-petaflops/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Short version: yes, Open MPI is used on K and was used to power the 8PF runs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; w00t!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 24, 2011, at 7:16 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; w00t!  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; OMPI powers 8 petaflops!
</span><br>
<span class="quotelev2">&gt; &gt; (at least I'm guessing that -- does anyone know if that's true?)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 24, 2011, at 7:03 PM, Rayson Ho wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Interesting... page 11:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.fujitsu.com/downloads/TC/sc10/programming-on-k-computer.pdf">http://www.fujitsu.com/downloads/TC/sc10/programming-on-k-computer.pdf</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI based:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * Open Standard, Open Source, Multi-Platform including PC Cluster.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * Adding extension to Open MPI for &quot;Tofu&quot; interconnect
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rayson
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9435.php">Ralph Castain: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9433.php">Ralf Wildenhues: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>In reply to:</strong> <a href="9416.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9435.php">Ralph Castain: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9435.php">Ralph Castain: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9436.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9965.php">Y.MATSUMOTO: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
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
