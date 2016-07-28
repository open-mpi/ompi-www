<?
$subject_val = "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 03:57:35 2011" -->
<!-- isoreceived="20110629075735" -->
<!-- sent="Wed, 29 Jun 2011 16:57:28 +0900" -->
<!-- isosent="20110629075728" -->
<!-- name="Kawashima" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;Open MPI&amp;quot;-based MPI library used by K computer" -->
<!-- id="87mxh16pef.wl%t-kawashima_at_jp.fujitsu.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C0BB5A63-64C5-4925-9683-ABA0C5C32D0E_at_cisco.com" -->
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
<strong>From:</strong> Kawashima (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-29 03:57:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9440.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9438.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>In reply to:</strong> <a href="9436.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9440.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9440.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9442.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, Ralph, and all,
<br>
<p>Thank you for your reply.
<br>
RIKEN and Fujitsu will work toword 10Pflops with Open MPI continuously.
<br>
<p>Here we can explain some parts of our MPI:
<br>
<p>As page 13 of Koh Hotta's presentation shows, we extended OMPI
<br>
communication layers.
<br>
<p><span class="quotelev1">&gt; <a href="http://www.fujitsu.com/downloads/TC/sc10/programming-on-k-computer.pdf">http://www.fujitsu.com/downloads/TC/sc10/programming-on-k-computer.pdf</a>
</span><br>
# Sorry, this figure is somewhat broken. Arrows point incorrect layers.
<br>
<p>First, we created a new BTL component, 'tofu BTL'. It's not so special
<br>
one but dedicated to our Tofu interconnect. But its latency was not
<br>
enough for us.
<br>
<p>So we created a new framework, 'LLP', and its component, 'tofu LLP'.
<br>
It bypasses request object creation in PML and BML/BTL, and sends
<br>
a message immediately if possible.
<br>
<p>Also, we modified tuned COLL to implement interconnect-and-topology-
<br>
specific bcast/allgather/alltoall/allreduce algorithm. These algorithm
<br>
implementations also bypass PML/BML/BTL to eliminate protocol and software
<br>
overhead.
<br>
<p>To achieve above, we created 'tofu COMMON', like sm (ompi/mca/common/sm/).
<br>
<p>Is there interesting one?
<br>
<p>Though our BTL and COLL are quite interconnect-specific, LLP may be
<br>
contributed in the future.
<br>
<p>Regards,
<br>
<p>Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><span class="quotelev1">&gt; I echo what Ralph said -- congratulations!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let us know when you'll be ready to contribute back what you can.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 27, 2011, at 9:58 PM, Takahiro Kawashima wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dear Open MPI community,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm a member of MPI library development team in Fujitsu. Shinji
</span><br>
<span class="quotelev2">&gt; &gt; Sumimoto, whose name appears in Jeff's blog, is one of our bosses.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As Rayson and Jeff noted, K computer, world's most powerful HPC system
</span><br>
<span class="quotelev2">&gt; &gt; developed by RIKEN and Fujitsu, utilizes Open MPI as a base of its MPI
</span><br>
<span class="quotelev2">&gt; &gt; library. We, Fujitsu, are pleased to announce that, and also have special
</span><br>
<span class="quotelev2">&gt; &gt; thanks to Open MPI community.
</span><br>
<span class="quotelev2">&gt; &gt; We are sorry to be late announce!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Our MPI library is based on Open MPI 1.4 series, and has a new point-
</span><br>
<span class="quotelev2">&gt; &gt; to-point component (BTL) and new topology-aware collective communication
</span><br>
<span class="quotelev2">&gt; &gt; algorithms (COLL). Also, it is adapted to our runtime environment (ESS,
</span><br>
<span class="quotelev2">&gt; &gt; PLM, GRPCOMM etc).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; K computer connects 68,544 nodes by our custom interconnect.
</span><br>
<span class="quotelev2">&gt; &gt; Its runtime environment is our proprietary one. So we don't use orted.
</span><br>
<span class="quotelev2">&gt; &gt; We cannot tell start-up time yet because of disclosure restriction, sorry.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We are surprised by the extensibility of Open MPI, and have proved that
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI is scalable to 68,000 processes level! We feel pleasure to
</span><br>
<span class="quotelev2">&gt; &gt; utilize such a great open-source software.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We cannot tell detail of our technology yet because of our contract
</span><br>
<span class="quotelev2">&gt; &gt; with RIKEN AICS, however, we will plan to feedback of our improvements
</span><br>
<span class="quotelev2">&gt; &gt; and bug fixes. We can contribute some bug fixes soon, however, for
</span><br>
<span class="quotelev2">&gt; &gt; contribution of our improvements will be next year with Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; agreement.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; MPI development team,
</span><br>
<span class="quotelev2">&gt; &gt; Fujitsu
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I got more information:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   <a href="http://blogs.cisco.com/performance/open-mpi-powers-8-petaflops/">http://blogs.cisco.com/performance/open-mpi-powers-8-petaflops/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Short version: yes, Open MPI is used on K and was used to power the 8PF runs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; w00t!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 24, 2011, at 7:16 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; w00t!  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OMPI powers 8 petaflops!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (at least I'm guessing that -- does anyone know if that's true?)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Jun 24, 2011, at 7:03 PM, Rayson Ho wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Interesting... page 11:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.fujitsu.com/downloads/TC/sc10/programming-on-k-computer.pdf">http://www.fujitsu.com/downloads/TC/sc10/programming-on-k-computer.pdf</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Open MPI based:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; * Open Standard, Open Source, Multi-Platform including PC Cluster.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; * Adding extension to Open MPI for &quot;Tofu&quot; interconnect
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Rayson
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9440.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9438.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>In reply to:</strong> <a href="9436.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9440.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9440.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9442.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
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
