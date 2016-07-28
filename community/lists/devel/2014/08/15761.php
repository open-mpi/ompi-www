<?
$subject_val = "Re: [OMPI devel] mpirun hangs when a task exits with a non zero code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 13:04:42 2014" -->
<!-- isoreceived="20140829170442" -->
<!-- sent="Fri, 29 Aug 2014 10:03:52 -0700" -->
<!-- isosent="20140829170352" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun hangs when a task exits with a non zero code" -->
<!-- id="6D3FC5B5-DA1B-4B07-9507-6E746914C486_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="540034E3.9080205_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpirun hangs when a task exits with a non zero code<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-29 13:03:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15762.php">Ralph Castain: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Previous message:</strong> <a href="15760.php">Jed Brown: "Re: [OMPI devel] Contributor License Agreement"</a>
<li><strong>In reply to:</strong> <a href="15751.php">Gilles Gouaillardet: "[OMPI devel] mpirun hangs when a task exits with a non zero code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I dug into this a bit and think the patch wasn't quite complete, so I modified the approach to ensure this race condition gets resolved in every scenario. Hopefully, r32643 takes care of it for you.
<br>
<p><p>On Aug 29, 2014, at 1:08 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph and all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following trivial test hangs
</span><br>
<span class="quotelev1">&gt; /* it hangs at least 99% of the time in my environment, 1% is a race
</span><br>
<span class="quotelev1">&gt; condition and the program behaves as expected */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --mca btl self /bin/false
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; same behaviour happen with the following trivial but MPI program :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 1;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached patch fixes the hang (e.g. the program nicely abort with
</span><br>
<span class="quotelev1">&gt; the correct error message)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i did not commit it since i am not confident at all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; could you please review it ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; &lt;hang.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15751.php">http://www.open-mpi.org/community/lists/devel/2014/08/15751.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15762.php">Ralph Castain: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Previous message:</strong> <a href="15760.php">Jed Brown: "Re: [OMPI devel] Contributor License Agreement"</a>
<li><strong>In reply to:</strong> <a href="15751.php">Gilles Gouaillardet: "[OMPI devel] mpirun hangs when a task exits with a non zero code"</a>
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
