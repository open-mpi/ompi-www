<?
$subject_val = "Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 28 11:19:06 2011" -->
<!-- isoreceived="20110928151906" -->
<!-- sent="Wed, 28 Sep 2011 11:18:56 -0400" -->
<!-- isosent="20110928151856" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe" -->
<!-- id="C1585E37-6347-4A5F-95BB-4B02A460B595_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C9C8EB62-22D3-4876-8452-D7D2EBA7B9B5_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-28 11:18:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9774.php">Sébastien Boisvert: "[OMPI devel] RE :  RE :  RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="9772.php">George Bosilca: "Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe"</a>
<li><strong>In reply to:</strong> <a href="9772.php">George Bosilca: "Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9774.php">Sébastien Boisvert: "[OMPI devel] RE :  RE :  RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="9774.php">Sébastien Boisvert: "[OMPI devel] RE :  RE :  RE :  Implementation of MPI_Iprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 28, 2011, at 10:04 AM, George Bosilca wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Why not use pre-posted non-blocking receives and MPI_WAIT_ANY?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's not very scalable either&#133; Might work for 256 processes, but that's about it.
</span><br>
<p>Just get a machine with oodles of RAM and you'll be fine.
<br>
<p>;-)
<br>
<p>I actually was thinking of his specific 256-process case.  I agree that it doesn't scale arbitrarily.  
<br>
<p>Another approach would potentially be to break your 256 processes up into N sub-communicators of M each (where N * M = 256, obviously), and doing a doing a non-blocking receive with ANY_SOURCE and then a WAIT_ANY on all of those.  
<br>
<p>The code gets a bit more complex, but it hypothetically extends your scalability.
<br>
<p>Or better yet, have your job mimic this idea -- a tree-based gathering system.  Have not just 1 master, but N sub-masters.  Individual compute processes report up to their sub-master, and the sub-master does whatever combinatorial work it can before reporting it to the ultimate master, etc.
<br>
<p>It depends on your code and how much delegation is possible, how much data you're transferring over the network, how much fairness you want to guarantee, etc.  My point is that there are a bunch of different options you can pursue outside of the &quot;everyone sends to 1 master&quot; model.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9774.php">Sébastien Boisvert: "[OMPI devel] RE :  RE :  RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="9772.php">George Bosilca: "Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe"</a>
<li><strong>In reply to:</strong> <a href="9772.php">George Bosilca: "Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9774.php">Sébastien Boisvert: "[OMPI devel] RE :  RE :  RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="9774.php">Sébastien Boisvert: "[OMPI devel] RE :  RE :  RE :  Implementation of MPI_Iprobe"</a>
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
