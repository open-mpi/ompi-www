<?
$subject_val = "Re: [OMPI devel] Thread/Process affinity for Mac OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 11:47:34 2008" -->
<!-- isoreceived="20081212164734" -->
<!-- sent="Fri, 12 Dec 2008 11:47:29 -0500" -->
<!-- isosent="20081212164729" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Thread/Process affinity for Mac OS X" -->
<!-- id="ea86ce220812120847y58a3256h47d1a7a26ebb8b34_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C731E1C0-0582-4F5C-B55F-B2105D7BE385_at_lanl.gov" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 11:47:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5054.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Previous message:</strong> <a href="5052.php">Ralph Castain: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="5052.php">Ralph Castain: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
The Mac OS X affinity stuff doesn't work like Linux, etc.
<br>
The document I pointed to is sparse in details, but basically
<br>
they didn't leave a way for unrelated processes to affect
<br>
how they are scheduled relative to each other.  Only
<br>
processes/threads that have a fork/thread-spawn ancestor
<br>
can cooperate/coordinate on who runs where.
<br>
<p>They have this &quot;affinity namespace&quot; thing that would need to be inherited
<br>
from a common ancestor, so that then each rank could specify
<br>
within that namespace which other threads it should/should-not
<br>
share L2 cache's with.  Its funky, and not at all like how we
<br>
currently do affinity.  That was why I said this would
<br>
be &quot;quite a bit of work&quot;.  It is probably not worth the effort,
<br>
unless Apple wanted to contribute directly.
<br>
<p>On Fri, Dec 12, 2008 at 11:29 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; But we don't want the child to inherit affinity from the orted anyway, so I
</span><br>
<span class="quotelev1">&gt; don't see why the exec call is an issue for us. The MPI proc sets its own
</span><br>
<span class="quotelev1">&gt; affinity during MPI_Init using the paffinity framework, so it looks to me
</span><br>
<span class="quotelev1">&gt; like the only thing missing is the correct set_affinity code in the darwin
</span><br>
<span class="quotelev1">&gt; paffinity module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2008, at 9:21 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; I just ran across this document from Apple that describes
</span><br>
<span class="quotelev2">&gt;&gt; the Thread affinity scheme that was added in Leopard.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://developer.apple.com/releasenotes/Performance/RN-AffinityAPI/">http://developer.apple.com/releasenotes/Performance/RN-AffinityAPI/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In its current form, and how orteds start the MPI ranks with exec,
</span><br>
<span class="quotelev2">&gt;&gt; we can't use this, AFAIK.  However, if someone cares, there
</span><br>
<span class="quotelev2">&gt;&gt; might be a path for doing MPI process affinity on Mac OS X
</span><br>
<span class="quotelev2">&gt;&gt; with quite a bit of work.  Let me know if you have the
</span><br>
<span class="quotelev2">&gt;&gt; time &amp; interest, and I can explain my idea on how to do it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the curious, here is the key text extracted from that document:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Generally, the affinity tag namespace is private to one task
</span><br>
<span class="quotelev2">&gt;&gt; (process). However, a child process forked after its parent has made a
</span><br>
<span class="quotelev2">&gt;&gt; THREAD_AFFINITY_POLICY call will share the affinity namespace of the
</span><br>
<span class="quotelev2">&gt;&gt; parent process. This enables a family of forked processes to share an
</span><br>
<span class="quotelev2">&gt;&gt; affinity namespace despite comprising separate tasks. Moreover, the
</span><br>
<span class="quotelev2">&gt;&gt; forked child inherits the affinity tag of its parent. Hence, a parent
</span><br>
<span class="quotelev2">&gt;&gt; can seed a number of child processes within an arbitrary organization
</span><br>
<span class="quotelev2">&gt;&gt; of shared affinity sets. Note: affinity namespace inheritance is
</span><br>
<span class="quotelev2">&gt;&gt; destroyed by the exec(3) system call, however.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's that last sentence about exec(3) that makes things (very) difficult
</span><br>
<span class="quotelev2">&gt;&gt; for us.
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;   I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5054.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Previous message:</strong> <a href="5052.php">Ralph Castain: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="5052.php">Ralph Castain: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
<!-- nextthread="start" -->
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
