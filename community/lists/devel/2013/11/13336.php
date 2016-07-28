<?
$subject_val = "[OMPI devel] OMPI Performance Metrics";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 27 17:50:26 2013" -->
<!-- isoreceived="20131127225026" -->
<!-- sent="Wed, 27 Nov 2013 15:50:25 -0700" -->
<!-- isosent="20131127225025" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI Performance Metrics" -->
<!-- id="CAMD57octETwiUWRMe_AW3TU7Np17zJvKKyyTmjJrPetyH53xYQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI Performance Metrics<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-27 17:50:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13337.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29735 - trunk"</a>
<li><strong>Previous message:</strong> <a href="13335.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Performance benchmarks are always problematic and a source of contention -
<br>
it is very hard to obtain a meaningful comparison between MPI
<br>
implementations without taking great care that they are being wholly
<br>
optimized for the testbed environment. As you can imagine, all the MPIs
<br>
watch each other pretty carefully, and so results showing large performance
<br>
differences usually mean that someone didn't optimize one of the MPIs under
<br>
examination. OMPI can be particularly difficult given its wide range of
<br>
controls, many of which are intended to support academic research as
<br>
opposed to general users.
<br>
<p>The OMPI developers don't generally spend much time on benchmarks as we
<br>
have found them to be poor predictors of actual application performance.
<br>
However, we recognize that others may wish to use them, and that users can
<br>
definitely benefit from tuning their applications to their environment.
<br>
There is an FAQ section dedicated to tuning that focuses on getting
<br>
improved performance for your application, but we have now added an
<br>
additional section specifically addressing benchmarks to the web site:
<br>
<p><a href="http://www.open-mpi.org/performance/">http://www.open-mpi.org/performance/</a>
<br>
<p>The intent of this section is mostly to provide some baseline benchmarks
<br>
between some of the MPIs we typically track on our systems, and to provide
<br>
the configuration and runtime parameter settings used to &quot;tune&quot; OMPI for
<br>
that testbed environment. Hopefully, this will help both users and those
<br>
performing benchmarks in their work.
<br>
<p>We'll be adding data to this section periodically to track the relative
<br>
performance of the OMPI releases as we roll forward. Feedback on the
<br>
usefulness of the data, and/or questions about benchmarking OMPI
<br>
performance, are of course welcome.
<br>
<p>Ralph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13336/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13337.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29735 - trunk"</a>
<li><strong>Previous message:</strong> <a href="13335.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
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
