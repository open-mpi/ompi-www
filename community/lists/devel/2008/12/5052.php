<?
$subject_val = "Re: [OMPI devel] Thread/Process affinity for Mac OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 11:29:19 2008" -->
<!-- isoreceived="20081212162919" -->
<!-- sent="Fri, 12 Dec 2008 09:29:12 -0700" -->
<!-- isosent="20081212162912" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Thread/Process affinity for Mac OS X" -->
<!-- id="C731E1C0-0582-4F5C-B55F-B2105D7BE385_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220812120821n62051893pfd3424011bd3b18a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Thread/Process affinity for Mac OS X<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 11:29:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5053.php">Tim Mattox: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="5051.php">Tim Mattox: "[OMPI devel] Thread/Process affinity for Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="5051.php">Tim Mattox: "[OMPI devel] Thread/Process affinity for Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5053.php">Tim Mattox: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
<li><strong>Reply:</strong> <a href="5053.php">Tim Mattox: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
But we don't want the child to inherit affinity from the orted anyway,  
<br>
so I don't see why the exec call is an issue for us. The MPI proc sets  
<br>
its own affinity during MPI_Init using the paffinity framework, so it  
<br>
looks to me like the only thing missing is the correct set_affinity  
<br>
code in the darwin paffinity module.
<br>
<p><p>On Dec 12, 2008, at 9:21 AM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I just ran across this document from Apple that describes
</span><br>
<span class="quotelev1">&gt; the Thread affinity scheme that was added in Leopard.
</span><br>
<span class="quotelev1">&gt; <a href="http://developer.apple.com/releasenotes/Performance/RN-AffinityAPI/">http://developer.apple.com/releasenotes/Performance/RN-AffinityAPI/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In its current form, and how orteds start the MPI ranks with exec,
</span><br>
<span class="quotelev1">&gt; we can't use this, AFAIK.  However, if someone cares, there
</span><br>
<span class="quotelev1">&gt; might be a path for doing MPI process affinity on Mac OS X
</span><br>
<span class="quotelev1">&gt; with quite a bit of work.  Let me know if you have the
</span><br>
<span class="quotelev1">&gt; time &amp; interest, and I can explain my idea on how to do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the curious, here is the key text extracted from that document:
</span><br>
<span class="quotelev1">&gt; &quot;Generally, the affinity tag namespace is private to one task
</span><br>
<span class="quotelev1">&gt; (process). However, a child process forked after its parent has made a
</span><br>
<span class="quotelev1">&gt; THREAD_AFFINITY_POLICY call will share the affinity namespace of the
</span><br>
<span class="quotelev1">&gt; parent process. This enables a family of forked processes to share an
</span><br>
<span class="quotelev1">&gt; affinity namespace despite comprising separate tasks. Moreover, the
</span><br>
<span class="quotelev1">&gt; forked child inherits the affinity tag of its parent. Hence, a parent
</span><br>
<span class="quotelev1">&gt; can seed a number of child processes within an arbitrary organization
</span><br>
<span class="quotelev1">&gt; of shared affinity sets. Note: affinity namespace inheritance is
</span><br>
<span class="quotelev1">&gt; destroyed by the exec(3) system call, however.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's that last sentence about exec(3) that makes things (very)  
</span><br>
<span class="quotelev1">&gt; difficult
</span><br>
<span class="quotelev1">&gt; for us.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5053.php">Tim Mattox: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="5051.php">Tim Mattox: "[OMPI devel] Thread/Process affinity for Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="5051.php">Tim Mattox: "[OMPI devel] Thread/Process affinity for Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5053.php">Tim Mattox: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
<li><strong>Reply:</strong> <a href="5053.php">Tim Mattox: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
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
