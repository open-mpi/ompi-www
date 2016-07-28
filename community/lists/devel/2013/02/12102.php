<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 12:02:53 2013" -->
<!-- isoreceived="20130204170253" -->
<!-- sent="Mon, 4 Feb 2013 17:02:48 +0000" -->
<!-- isosent="20130204170248" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC4ED2_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD317DC634_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-04 12:02:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12103.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12101.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12101.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12103.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="12103.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 1, 2013, at 9:59 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don't think this is right either. Excluding a device that doesn't exist has many use cases. Such as disabling a network that only exists on part of the cluster.  I'm not sure about what to do with seq; it's more like include than exclude.
</span><br>
<p>Hmm.  I've now given this quite a bit of thought.  Here's what I think:
<br>
<p>1. Just like there might be good reasons to exclude non-existent interfaces (e.g., networks that only include on part of the cluster), the same argument could be made for *including* non-existent interfaces.
<br>
<p>2. It seems odd to me to have different behavior for non-existent interfaces between include, exclude, and/or seq.
<br>
<p>3. We have a very strong precedent throughout OMPI that if a human asks for something that OMPI can't deliver, OMPI should error.  According to this, and according to the Law of Least Surprise, I would think that if I typo an exclude interface name, OMPI should error and make a human figure it out.
<br>
<p>4. If someone wants different includes/excludes in different parts of the cluster, then they should have per-node values for these MCA params.
<br>
<p>5. That being said, #4 is not always feasible.  Concrete example (which is why this whole thing started, incidentally): in my MTT cluster at Cisco, I have *some* nodes with back-to-back interfaces.  I can't think of a good way to have per-node MCA params in an MTT run that is SLURM-queued and may end up on random nodes in my cluster -- that may or may not include nodes with loopback interfaces.
<br>
<p>So how about this compromise:
<br>
<p>If an invalid include, exclude, or if_seq interface is specified:
<br>
- If that interface is prefaced with &quot;nowarn:&quot;, silently ignore that token
<br>
- Otherwise, display a show_help message and ignore the TCP BTL
<br>
<p>For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl_tcp_if_include nowarn:eth5,eth6
<br>
<p>- If eth5 doesn't exist, the job will continue just as if eth5 wasn't specified
<br>
- If eth6 doesn't exist, the TCP BTL will disqualify itself
<br>
<p>(BTW: yes, I'm volunteering to code up whatever we agree on)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12103.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12101.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12101.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12103.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="12103.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
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
