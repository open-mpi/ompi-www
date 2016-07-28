<?
$subject_val = "Re: [OMPI devel] OMPIO vs ROMIO";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 08:52:22 2016" -->
<!-- isoreceived="20160511125222" -->
<!-- sent="Wed, 11 May 2016 21:52:20 +0900" -->
<!-- isosent="20160511125220" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPIO vs ROMIO" -->
<!-- id="CAAkFZ5uW1c7PpjK5F7ZJ+DFgSv1cosvTP6V7ZJ4VqZh6k9KvZQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGFyy0xs8QN-c-exmFj_+3QAwCFX-856Q9jmYpHv=SbPRQMQgg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPIO vs ROMIO<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-11 08:52:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18966.php">Michael Rezny: "[OMPI devel] parameters for OMPIO"</a>
<li><strong>Previous message:</strong> <a href="18964.php">Michael Rezny: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>In reply to:</strong> <a href="18964.php">Michael Rezny: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
to use ompio
<br>
mpirun --mca io ompio ...
<br>
to use romio (v2.x)
<br>
mpirun --mca io romio314 ...
<br>
to use romio (v1.10)
<br>
mpirun --mca io romio ...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Wednesday, May 11, 2016, Michael Rezny &lt;michael.rezny_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Sreenidhi,
</span><br>
<span class="quotelev1">&gt; you need to specify --collective as an input parameter to mpi_tile_io
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kindest regards
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11 May 2016 at 12:01, Sreenidhi Bharathkar Ramesh &lt;
</span><br>
<span class="quotelev1">&gt; sreenidhi-bharathkar.ramesh_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','sreenidhi-bharathkar.ramesh_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you so much for the details.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. while running the &quot;Tile I/O&quot; benchmark, I see the following message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 28 ./mpi-tile-io --nr_tiles_x 7 --nr_tiles_y 4 --sz_tile_x
</span><br>
<span class="quotelev2">&gt;&gt; 100 --sz_tile_y 100 --sz_element 32 --filename file1g
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; # collective I/O off
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How do I enable collective I/O ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. I switched to using Open MPI v 2.0.0rc2 .  How do I know which IO is
</span><br>
<span class="quotelev2">&gt;&gt; being used ?  How do I switch between OMPIO and ROMIO ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; - Sreenidhi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, May 10, 2016 at 7:14 PM, Edgar Gabriel &lt;egabriel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','egabriel_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the 1.7, 1.8 and 1.10 series ROMIO remains the default. In the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; upcomgin 2.x series, OMPIO will be the default, except for Lustre file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; systems, where we will stick with ROMIO as the primary resource.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regarding performance comparison, we ran numerous tests late last year
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and early this year. It really depends on the application scenario and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; platform that you are using. If you want to know which one should you use,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would definitely suggest to stick with ROMIO in the 1.10 series, since
</span><br>
<span class="quotelev3">&gt;&gt;&gt; many of the bug fixes of OMPIO that we did in the last two years could not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be back-ported to the 1.10 series for technical reasons. If you plan to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; switch to the 2.x series, it might be easiest to just run a couple of tests
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and compare the performance for your application on your platform, and base
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your decision on that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 5/10/2016 6:32 AM, Sreenidhi Bharathkar Ramesh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. During default build of OpenMPI, it looks like both ompio.la and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; romio.la are built.  Which I/O MCA library is used and based on what is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the decision taken ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Are there any statistics available to compare these two - OMPIO vs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ROMIO ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using OpenMPI v1.10.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Sreenidhi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18951.php">http://www.open-mpi.org/community/lists/devel/2016/05/18951.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18963.php">http://www.open-mpi.org/community/lists/devel/2016/05/18963.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18965/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18966.php">Michael Rezny: "[OMPI devel] parameters for OMPIO"</a>
<li><strong>Previous message:</strong> <a href="18964.php">Michael Rezny: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>In reply to:</strong> <a href="18964.php">Michael Rezny: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
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
