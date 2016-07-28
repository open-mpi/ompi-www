<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 06:26:11 2014" -->
<!-- isoreceived="20140602102611" -->
<!-- sent="Mon, 2 Jun 2014 10:26:09 +0000" -->
<!-- isosent="20140602102609" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="ACC063EE-5FBD-4A4F-9755-5C8428D83BB6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tsRji__cU0a=aGQsii0zKVfDTL55CkRpstCKyyOw9rPQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intermittent hangs when exiting with error<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-02 06:26:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14943.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14941.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14941.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14943.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14943.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2014, at 5:03 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; i faced a bit different problem, but that is 100% reproductible :
</span><br>
<span class="quotelev1">&gt; - i launch mpirun (no batch manager) from a node with one IB port
</span><br>
<span class="quotelev1">&gt; - i use -host node01,node02 where node01 and node02 both have two IB port on the
</span><br>
<span class="quotelev1">&gt;   same subnet
</span><br>
<p>FWIW: 2 IB ports on the same subnet?  That's not a good idea.
<br>
<p><span class="quotelev1">&gt; by default, this will hang.
</span><br>
<p>...but it still shouldn't hang.  I wonder if it's somehow related to <a href="https://svn.open-mpi.org/trac/ompi/ticket/4442">https://svn.open-mpi.org/trac/ompi/ticket/4442</a>...?
<br>
<p><span class="quotelev1">&gt; if this is a &quot;feature&quot; (e.g. openmpi does not support this kind of configuration) i am fine with it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when i run mpirun --mca btl_openib_if_exclude mlx4_1, then if the application is a success, then it works just fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if the application calls MPI_Abort() /* and even if all tasks call MPI_Abort() */ then it will hang 100% of the time.
</span><br>
<span class="quotelev1">&gt; i do not see that as a feature but as a bug.
</span><br>
<p>Yes, OMPI should never hang upon a call to MPI_Abort.
<br>
<p>Can you get some stack traces to show where the hung process(es) are stuck?  That would help Ralph pin down where things aren't working down in ORTE.
<br>
<p><span class="quotelev1">&gt; in an other thread, Jeff mentionned that the usnic btl is doing stuff even if there is no usnic hardware (this will be fixed shortly).
</span><br>
<span class="quotelev1">&gt; Do you still see intermittent hang without listing usnic as a btl ?
</span><br>
<p>Yeah, there's a definite race in the usnic BTL ATM.  If you care, here's what's happening:
<br>
<p>- the usnic BTL fires off its connectivity checker, even if there is no usnic hardware present
<br>
- during the connectivity checker init:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- local rank 0 on each server will establish a named socket
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- non-local-rank-0 will wait for that named socket to exist
<br>
<p>The race is that the local rank 0 may establish the socket (which completes its connectivity checker setup), and then realize that there is no usnic hardware, so it exits/closes the usnic BTL -- which destroys the named socket.  Hence, if the non-local-rank-0's are late to the party, they never saw the named socket get created and wait forever for it.  Result: hang.
<br>
<p>Patch coming today that fixes both of these things:
<br>
<p>1. connectivity checker won't be launched unless there is usnic hardware present
<br>
2. non-local-rank-0's won't wait indefinitely for the named socket
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
<li><strong>Next message:</strong> <a href="14943.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14941.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14941.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14943.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14943.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
