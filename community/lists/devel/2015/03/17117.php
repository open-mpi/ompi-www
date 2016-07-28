<?
$subject_val = "Re: [OMPI devel] mpi_test_suite question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  6 14:43:37 2015" -->
<!-- isoreceived="20150306194337" -->
<!-- sent="Fri, 06 Mar 2015 13:43:36 -0600" -->
<!-- isosent="20150306194336" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpi_test_suite question" -->
<!-- id="54FA0368.8040408_at_cs.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAF1Cqj56XEBeCSAFwV3Pp-fijJBiycwyNyUjfG_vE=f1HEGgKA_at_mail.gmail.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-06 14:43:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17118.php">Howard Pritchard: "Re: [OMPI devel] mpi_test_suite question"</a>
<li><strong>Previous message:</strong> <a href="17116.php">Howard Pritchard: "[OMPI devel] mpi_test_suite question"</a>
<li><strong>In reply to:</strong> <a href="17116.php">Howard Pritchard: "[OMPI devel] mpi_test_suite question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17118.php">Howard Pritchard: "Re: [OMPI devel] mpi_test_suite question"</a>
<li><strong>Reply:</strong> <a href="17118.php">Howard Pritchard: "Re: [OMPI devel] mpi_test_suite question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
this error message comes from ompio, the split collective are not 
<br>
properly implemented at this point in time, they are basically just a 
<br>
printf statement. Once I have the non-blocking collectives re-enabled, 
<br>
it should be trivial add these interfaces to the list as well.
<br>
<p>That being said, since I spent quite some time debugging the I/O tests 
<br>
in mpi_test_suite, I would recommend *not* to use that for I/O 
<br>
validation. I found some fundamental mistakes in the test suite, (e.g. 
<br>
writing with a file view, reading back without the file view and 
<br>
assuming that the byte pattern is the same) that I can not easily fix.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 3/6/2015 12:03 PM, Howard Pritchard wrote:
<br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&quot;m trying to run the mpi_test_suite test from ompi-tests.  I'm noticing
</span><br>
<span class="quotelev1">&gt; that if I try to run the io tests, I get an error in the read_all_begin
</span><br>
<span class="quotelev1">&gt; test:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; STATIC READ ALL BEGIN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; STATIC READ ALL END
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (io/tst_file_read_all_begin.c:82) ERROR: Error in position; Invalid
</span><br>
<span class="quotelev1">&gt; argument(22)(io/tst_file_read_all_begin.c:82) ERROR: Error in position;
</span><br>
<span class="quotelev1">&gt; Invalid argument(22)(io/tst_file_read_all_begin.c:82) ERROR: Error in
</span><br>
<span class="quotelev1">&gt; position; Invalid argument(22)(io/tst_file_read_all_begin.c:82) ERROR:
</span><br>
<span class="quotelev1">&gt; Error in position; Invalid argument(22)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there known issues with the io tests?  My first guess is yes
</span><br>
<span class="quotelev1">&gt; since I notice esslingen is excluding io from their MTT runs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any info,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17116.php">http://www.open-mpi.org/community/lists/devel/2015/03/17116.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17118.php">Howard Pritchard: "Re: [OMPI devel] mpi_test_suite question"</a>
<li><strong>Previous message:</strong> <a href="17116.php">Howard Pritchard: "[OMPI devel] mpi_test_suite question"</a>
<li><strong>In reply to:</strong> <a href="17116.php">Howard Pritchard: "[OMPI devel] mpi_test_suite question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17118.php">Howard Pritchard: "Re: [OMPI devel] mpi_test_suite question"</a>
<li><strong>Reply:</strong> <a href="17118.php">Howard Pritchard: "Re: [OMPI devel] mpi_test_suite question"</a>
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
