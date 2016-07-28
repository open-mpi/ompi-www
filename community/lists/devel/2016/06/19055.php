<?
$subject_val = "Re: [OMPI devel] Seldom deadlock in mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  1 22:57:27 2016" -->
<!-- isoreceived="20160602025727" -->
<!-- sent="Wed, 1 Jun 2016 22:57:25 -0400" -->
<!-- isosent="20160602025725" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Seldom deadlock in mpirun" -->
<!-- id="CAMJJpkXGsGHp85B4+MDX6X=XbTHgZArH-YtN4U73L7WWeBBobg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2DDDD525-F711-4878-A2AC-7CBA0E588593_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-01 22:57:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19056.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19054.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>In reply to:</strong> <a href="19054.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19056.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Reply:</strong> <a href="19056.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think it matters. I was running the IBM collective and pt2pt tests,
<br>
but each time it deadlocked was in a different test. If you are interested
<br>
in some particular values, I would be happy to attach a debugger next time
<br>
it happens.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Wed, Jun 1, 2016 at 10:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What kind of apps are they? Or does it matter what you are running?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 1, 2016, at 7:37 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a seldomly occurring deadlock on a OS X laptop if I use more than
</span><br>
<span class="quotelev1">&gt; 2 processes). It is coming up once every 200 runs or so.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is what I could gather from my experiments: All the MPI processes
</span><br>
<span class="quotelev1">&gt; seem to have correctly completed (I get all the expected output and the MPI
</span><br>
<span class="quotelev1">&gt; processes are in a waiting state), but somehow the mpirun does not detect
</span><br>
<span class="quotelev1">&gt; their completion. As a result, mpirun never returns.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   George.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19054.php">http://www.open-mpi.org/community/lists/devel/2016/06/19054.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19054.php">http://www.open-mpi.org/community/lists/devel/2016/06/19054.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19055/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19056.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19054.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>In reply to:</strong> <a href="19054.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19056.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Reply:</strong> <a href="19056.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
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
