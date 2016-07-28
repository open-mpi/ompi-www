<?
$subject_val = "Re: [OMPI devel] parameters for OMPIO";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 10:38:04 2016" -->
<!-- isoreceived="20160511143804" -->
<!-- sent="Wed, 11 May 2016 09:38:01 -0500" -->
<!-- isosent="20160511143801" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] parameters for OMPIO" -->
<!-- id="48cc9bc3-87f8-a8ae-6d6e-640e2f544819_at_central.uh.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAGFyy0xFRUGtbFPF1T0mzqJK_Y=1_DiCFg_iSHo+vR2+KXw6+w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] parameters for OMPIO<br>
<strong>From:</strong> Edgar Gabriel (<em>egabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-11 10:38:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18968.php">Ralph Castain: "[OMPI devel] New Github labels"</a>
<li><strong>Previous message:</strong> <a href="18966.php">Michael Rezny: "[OMPI devel] parameters for OMPIO"</a>
<li><strong>In reply to:</strong> <a href="18966.php">Michael Rezny: "[OMPI devel] parameters for OMPIO"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
the parameters on the webpage are for ompio in 2.x.  For 1.10 its a bit 
<br>
more complicated, you would have to set the number of aggregators for 
<br>
each fcoll component separatly, e.g.
<br>
<p>--mca fcoll two_phase_num_io_procs  x
<br>
<p>I would however start without setting the number of aggregators, since 
<br>
we do have some algorithms in ompio trying to predict the optimal number 
<br>
of aggregators. If you set these parameters, you are basically the 
<br>
algorithm. There might be very good reasons to override the algorithm 
<br>
(we are well aware of patterns where it will produce bad results), but 
<br>
the tile I/O patterns was one of the patterns it was originally designed 
<br>
for.
<br>
<p>The coll_timing_info option is there in 1.10, but requires an additional 
<br>
change for  the compilation (that was supposed to be a configure flag, 
<br>
but we just haven't gotten around to implement the configure flag).  I 
<br>
would consider this however an option which is more of interest for 
<br>
developers than for users. If you want to use it anyway, I can tell you 
<br>
what you need to do to activate it.
<br>
<p>Thanks
<br>
Edgar
<br>
<p><p>On 5/11/2016 9:29 AM, Michael Rezny wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am looking at the online FAQ for ompio
</span><br>
<span class="quotelev1">&gt; which seems to show that the following parameters are defined:
</span><br>
<span class="quotelev1">&gt; io_ompio_num_aggregators
</span><br>
<span class="quotelev1">&gt; io_ompio_call_timing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But on OMPI version 1.10.1 or 1.8.3:
</span><br>
<span class="quotelev1">&gt; 1: setting mpirun -mca io ompio -mca io_ompio_coll_timing_info
</span><br>
<span class="quotelev1">&gt; appears to not produce a summary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2: io_ompio_num_aggregators is not listed as a parameter
</span><br>
<span class="quotelev1">&gt; as listed by
</span><br>
<span class="quotelev1">&gt; ompi_info -a | grep ompio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I doing something wrong, or are these options not supported in 
</span><br>
<span class="quotelev1">&gt; these versions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kindest regards
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
--
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18967/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18968.php">Ralph Castain: "[OMPI devel] New Github labels"</a>
<li><strong>Previous message:</strong> <a href="18966.php">Michael Rezny: "[OMPI devel] parameters for OMPIO"</a>
<li><strong>In reply to:</strong> <a href="18966.php">Michael Rezny: "[OMPI devel] parameters for OMPIO"</a>
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
