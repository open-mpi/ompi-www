<?
$subject_val = "[OMPI devel] parameters for OMPIO";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 10:29:26 2016" -->
<!-- isoreceived="20160511142926" -->
<!-- sent="Wed, 11 May 2016 16:29:24 +0200" -->
<!-- isosent="20160511142924" -->
<!-- name="Michael Rezny" -->
<!-- email="michael.rezny_at_[hidden]" -->
<!-- subject="[OMPI devel] parameters for OMPIO" -->
<!-- id="CAGFyy0xFRUGtbFPF1T0mzqJK_Y=1_DiCFg_iSHo+vR2+KXw6+w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] parameters for OMPIO<br>
<strong>From:</strong> Michael Rezny (<em>michael.rezny_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-11 10:29:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18967.php">Edgar Gabriel: "Re: [OMPI devel] parameters for OMPIO"</a>
<li><strong>Previous message:</strong> <a href="18965.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18967.php">Edgar Gabriel: "Re: [OMPI devel] parameters for OMPIO"</a>
<li><strong>Reply:</strong> <a href="18967.php">Edgar Gabriel: "Re: [OMPI devel] parameters for OMPIO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am looking at the online FAQ for ompio
<br>
which seems to show that the following parameters are defined:
<br>
io_ompio_num_aggregators
<br>
io_ompio_call_timing
<br>
<p>But on OMPI version 1.10.1 or 1.8.3:
<br>
1: setting mpirun -mca io ompio -mca io_ompio_coll_timing_info
<br>
appears to not produce a summary.
<br>
<p>2: io_ompio_num_aggregators is not listed as a parameter
<br>
as listed by
<br>
ompi_info -a | grep ompio
<br>
<p>Am I doing something wrong, or are these options not supported in these
<br>
versions?
<br>
<p>kindest regards
<br>
Mike
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18966/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18967.php">Edgar Gabriel: "Re: [OMPI devel] parameters for OMPIO"</a>
<li><strong>Previous message:</strong> <a href="18965.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18967.php">Edgar Gabriel: "Re: [OMPI devel] parameters for OMPIO"</a>
<li><strong>Reply:</strong> <a href="18967.php">Edgar Gabriel: "Re: [OMPI devel] parameters for OMPIO"</a>
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
