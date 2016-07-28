<?
$subject_val = "[OMPI devel] mpi_test_suite question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  6 13:03:41 2015" -->
<!-- isoreceived="20150306180341" -->
<!-- sent="Fri, 6 Mar 2015 11:03:40 -0700" -->
<!-- isosent="20150306180340" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] mpi_test_suite question" -->
<!-- id="CAF1Cqj56XEBeCSAFwV3Pp-fijJBiycwyNyUjfG_vE=f1HEGgKA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] mpi_test_suite question<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-06 13:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17117.php">Edgar Gabriel: "Re: [OMPI devel] mpi_test_suite question"</a>
<li><strong>Previous message:</strong> <a href="17115.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17117.php">Edgar Gabriel: "Re: [OMPI devel] mpi_test_suite question"</a>
<li><strong>Reply:</strong> <a href="17117.php">Edgar Gabriel: "Re: [OMPI devel] mpi_test_suite question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>I&quot;m trying to run the mpi_test_suite test from ompi-tests.  I'm noticing
<br>
that if I try to run the io tests, I get an error in the read_all_begin
<br>
test:
<br>
<p>STATIC READ ALL BEGIN
<br>
<p>STATIC READ ALL END
<br>
<p>(io/tst_file_read_all_begin.c:82) ERROR: Error in position; Invalid
<br>
argument(22)(io/tst_file_read_all_begin.c:82) ERROR: Error in position;
<br>
Invalid argument(22)(io/tst_file_read_all_begin.c:82) ERROR: Error in
<br>
position; Invalid argument(22)(io/tst_file_read_all_begin.c:82) ERROR:
<br>
Error in position; Invalid argument(22)
<br>
<p>-------------------------------------------------------
<br>
Are there known issues with the io tests?  My first guess is yes
<br>
since I notice esslingen is excluding io from their MTT runs.
<br>
<p>Thanks for any info,
<br>
<p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17116/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17117.php">Edgar Gabriel: "Re: [OMPI devel] mpi_test_suite question"</a>
<li><strong>Previous message:</strong> <a href="17115.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17117.php">Edgar Gabriel: "Re: [OMPI devel] mpi_test_suite question"</a>
<li><strong>Reply:</strong> <a href="17117.php">Edgar Gabriel: "Re: [OMPI devel] mpi_test_suite question"</a>
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
