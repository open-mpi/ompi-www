<?
$subject_val = "Re: [OMPI devel] Seldom deadlock in mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 07:17:23 2016" -->
<!-- isoreceived="20160602111723" -->
<!-- sent="Thu, 2 Jun 2016 20:17:22 +0900" -->
<!-- isosent="20160602111722" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Seldom deadlock in mpirun" -->
<!-- id="CAAkFZ5u-JuP6j5sT9St-UEROU6FkE8X5M5+y2ds3DpHfxjQ7mA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="35466BA4-5655-4D61-99AE-55B3ABF30DC7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Seldom deadlock in mpirun<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-02 07:17:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19060.php">Nathan Hjelm: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19058.php">Nathan Hjelm: "Re: [OMPI devel] contributing to Open MPI"</a>
<li><strong>In reply to:</strong> <a href="19056.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19060.php">Nathan Hjelm: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Reply:</strong> <a href="19060.php">Nathan Hjelm: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
fwiw,
<br>
<p>the onsided/c_fence_lock test from the ibm test suite hangs
<br>
<p>(mpirun -np 2 ./c_fence_lock)
<br>
<p>i ran a git bisect and it incriminates commit
<br>
b90c83840f472de3219b87cd7e1a364eec5c5a29
<br>
<p>commit b90c83840f472de3219b87cd7e1a364eec5c5a29
<br>
Author: bosilca &lt;bosilca_at_[hidden]&gt;
<br>
Date:   Tue May 24 18:20:51 2016 -0500
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Refactor the request completion (#1422)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* Remodel the request.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Added the wait sync primitive and integrate it into the PML and MTL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;infrastructure. The multi-threaded requests are now significantly
<br>
&nbsp;&nbsp;&nbsp;&nbsp;less heavy and less noisy (only the threads associated with completed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;requests are signaled).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* Fix the condition to release the request.
<br>
<p><p>I also noted a warning is emitted when running only one task
<br>
<p>./c_fence_lock
<br>
<p>but I did not git bisect, so that might not be related
<br>
<p>Cheers,
<br>
<p><p>Gilles
<br>
<p>On Thursday, June 2, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes, please! I&#226;&#128;&#153;d like to know what mpirun thinks is happening - if you
</span><br>
<span class="quotelev1">&gt; like, just set the &#226;&#128;&#148;timeout N &#226;&#128;&#148;report-state-on-timeout flags and tell me
</span><br>
<span class="quotelev1">&gt; what comes out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 1, 2016, at 7:57 PM, George Bosilca &lt;bosilca_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','bosilca_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think it matters. I was running the IBM collective and pt2pt
</span><br>
<span class="quotelev1">&gt; tests, but each time it deadlocked was in a different test. If you are
</span><br>
<span class="quotelev1">&gt; interested in some particular values, I would be happy to attach a debugger
</span><br>
<span class="quotelev1">&gt; next time it happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 1, 2016 at 10:47 PM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What kind of apps are they? Or does it matter what you are running?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Jun 1, 2016, at 7:37 PM, George Bosilca &lt;bosilca_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','bosilca_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have a seldomly occurring deadlock on a OS X laptop if I use more
</span><br>
<span class="quotelev2">&gt;&gt; than 2 processes). It is coming up once every 200 runs or so.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Here is what I could gather from my experiments: All the MPI processes
</span><br>
<span class="quotelev2">&gt;&gt; seem to have correctly completed (I get all the expected output and the MPI
</span><br>
<span class="quotelev2">&gt;&gt; processes are in a waiting state), but somehow the mpirun does not detect
</span><br>
<span class="quotelev2">&gt;&gt; their completion. As a result, mpirun never returns.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   George.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Searchable archives:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19054.php">http://www.open-mpi.org/community/lists/devel/2016/06/19054.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19054.php">http://www.open-mpi.org/community/lists/devel/2016/06/19054.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19055.php">http://www.open-mpi.org/community/lists/devel/2016/06/19055.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19059/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19060.php">Nathan Hjelm: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19058.php">Nathan Hjelm: "Re: [OMPI devel] contributing to Open MPI"</a>
<li><strong>In reply to:</strong> <a href="19056.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19060.php">Nathan Hjelm: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Reply:</strong> <a href="19060.php">Nathan Hjelm: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
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
