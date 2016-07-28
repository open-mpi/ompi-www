<?
$subject_val = "Re: [OMPI devel] mpi_test_suite question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  6 15:32:36 2015" -->
<!-- isoreceived="20150306203236" -->
<!-- sent="Fri, 6 Mar 2015 13:32:35 -0700" -->
<!-- isosent="20150306203235" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpi_test_suite question" -->
<!-- id="CAF1Cqj5Nd+CAmg+m87QH5tcNXyN28OjPngoyOnpNva5zX8J0NA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54FA0368.8040408_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpi_test_suite question<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-06 15:32:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17119.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
<li><strong>Previous message:</strong> <a href="17117.php">Edgar Gabriel: "Re: [OMPI devel] mpi_test_suite question"</a>
<li><strong>In reply to:</strong> <a href="17117.php">Edgar Gabriel: "Re: [OMPI devel] mpi_test_suite question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Edgar,
<br>
<p>Thanks for the explanation.
<br>
<p>Howard
<br>
<p><p>2015-03-06 12:43 GMT-07:00 Edgar Gabriel &lt;gabriel_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; this error message comes from ompio, the split collective are not properly
</span><br>
<span class="quotelev1">&gt; implemented at this point in time, they are basically just a printf
</span><br>
<span class="quotelev1">&gt; statement. Once I have the non-blocking collectives re-enabled, it should
</span><br>
<span class="quotelev1">&gt; be trivial add these interfaces to the list as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, since I spent quite some time debugging the I/O tests in
</span><br>
<span class="quotelev1">&gt; mpi_test_suite, I would recommend *not* to use that for I/O validation. I
</span><br>
<span class="quotelev1">&gt; found some fundamental mistakes in the test suite, (e.g. writing with a
</span><br>
<span class="quotelev1">&gt; file view, reading back without the file view and assuming that the byte
</span><br>
<span class="quotelev1">&gt; pattern is the same) that I can not easily fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/6/2015 12:03 PM, Howard Pritchard wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&quot;m trying to run the mpi_test_suite test from ompi-tests.  I'm noticing
</span><br>
<span class="quotelev2">&gt;&gt; that if I try to run the io tests, I get an error in the read_all_begin
</span><br>
<span class="quotelev2">&gt;&gt; test:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; STATIC READ ALL BEGIN
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; STATIC READ ALL END
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (io/tst_file_read_all_begin.c:82) ERROR: Error in position; Invalid
</span><br>
<span class="quotelev2">&gt;&gt; argument(22)(io/tst_file_read_all_begin.c:82) ERROR: Error in position;
</span><br>
<span class="quotelev2">&gt;&gt; Invalid argument(22)(io/tst_file_read_all_begin.c:82) ERROR: Error in
</span><br>
<span class="quotelev2">&gt;&gt; position; Invalid argument(22)(io/tst_file_read_all_begin.c:82) ERROR:
</span><br>
<span class="quotelev2">&gt;&gt; Error in position; Invalid argument(22)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are there known issues with the io tests?  My first guess is yes
</span><br>
<span class="quotelev2">&gt;&gt; since I notice esslingen is excluding io from their MTT runs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any info,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/">http://www.open-mpi.org/community/lists/devel/2015/03/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 17116.php
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Associate Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/">http://www.open-mpi.org/community/lists/devel/2015/03/</a>
</span><br>
<span class="quotelev1">&gt; 17117.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17118/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17119.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
<li><strong>Previous message:</strong> <a href="17117.php">Edgar Gabriel: "Re: [OMPI devel] mpi_test_suite question"</a>
<li><strong>In reply to:</strong> <a href="17117.php">Edgar Gabriel: "Re: [OMPI devel] mpi_test_suite question"</a>
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
