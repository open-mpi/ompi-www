<?
$subject_val = "Re: [OMPI devel] about Mellanox Jenkins";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 21 10:27:01 2016" -->
<!-- isoreceived="20160721142701" -->
<!-- sent="Thu, 21 Jul 2016 23:26:58 +0900" -->
<!-- isosent="20160721142658" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] about Mellanox Jenkins" -->
<!-- id="CAAkFZ5sZmz4XKP5KAMj3Vc2Qe8T5m-Cbkznb+4OzoOffvwnLzQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJ2Qj5rH9FAGw_iY_qOy2HSoOGjM4bcUZemkAhUOYF1cACjcVA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] about Mellanox Jenkins<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-21 10:26:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19257.php">Gilles Gouaillardet: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Previous message:</strong> <a href="19255.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>In reply to:</strong> <a href="19255.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19258.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Reply:</strong> <a href="19258.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Reply:</strong> <a href="19259.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I explicitly removed this directory in autogen.sh of
<br>
<a href="https://github.com/open-mpi/ompi/pull/1891">https://github.com/open-mpi/ompi/pull/1891</a>
<br>
<p>if only this pr is causing this error, then please disregard it until I
<br>
update it tomorrow.
<br>
<p>note this log suggests a workspace shared by all pr, so I guess this is
<br>
obsolete now
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Thursday, July 21, 2016, Artem Polyakov &lt;artpol84_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We see the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *14:26:55* + taskset -c 2,3 timeout -s SIGSEGV 15m /var/lib/jenkins/jobs/gh-ompi-master-pr/workspace/ompi_install1/bin/mpirun -np 8 -bind-to none -mca pml ob1 -mca btl self,tcp taskset -c 2,3 /var/lib/jenkins/jobs/gh-ompi-master-pr/workspace/ompi_install1/examples/hello_c*14:26:55* /var/lib/jenkins/jobs/gh-ompi-master-pr/workspace/ompi_install1/bin/mpirun: Error: unknown option &quot;-np&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason is that &lt;install&gt;/lib has no &quot;openmpi&quot; directory. My guess that
</span><br>
<span class="quotelev1">&gt; it is somehow removed during jenkins execution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm checking now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-07-21 20:11 GMT+06:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 21, 2016, at 3:53 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Folks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Mellanox Jenkins marks recent PR's as failed for very surprising
</span><br>
<span class="quotelev2">&gt;&gt; reasons.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun --mca btl sm,self ...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; failed because processes could not contact each other. i was able to
</span><br>
<span class="quotelev2">&gt;&gt; reproduce this once on my workstation,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and found the root cause was a dirty build and/or install dir.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles: I note that these tests also failed in MTT last night (e.g., at
</span><br>
<span class="quotelev2">&gt;&gt; Absoft, which *rarely* has errors):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://mtt.open-mpi.org/index.php?do_redir=2336">https://mtt.open-mpi.org/index.php?do_redir=2336</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure that the cause is a dirty build and/or install dir?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19254.php">http://www.open-mpi.org/community/lists/devel/2016/07/19254.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev1">&gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19256/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19257.php">Gilles Gouaillardet: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Previous message:</strong> <a href="19255.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>In reply to:</strong> <a href="19255.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19258.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Reply:</strong> <a href="19258.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Reply:</strong> <a href="19259.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
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
