<?
$subject_val = "Re: [OMPI devel] OMPIO vs ROMIO";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 08:26:55 2016" -->
<!-- isoreceived="20160511122655" -->
<!-- sent="Wed, 11 May 2016 14:26:53 +0200" -->
<!-- isosent="20160511122653" -->
<!-- name="Michael Rezny" -->
<!-- email="michael.rezny_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPIO vs ROMIO" -->
<!-- id="CAGFyy0xs8QN-c-exmFj_+3QAwCFX-856Q9jmYpHv=SbPRQMQgg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CANi1EtP3+xKOUoMCTn+st9kcOZsa6L9Sp1J1hAd5f5KBC_Y+FQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Michael Rezny (<em>michael.rezny_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-11 08:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18965.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>Previous message:</strong> <a href="18963.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>In reply to:</strong> <a href="18963.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18965.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>Reply:</strong> <a href="18965.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sreenidhi,
<br>
you need to specify --collective as an input parameter to mpi_tile_io
<br>
<p>kindest regards
<br>
Mike
<br>
<p><p>On 11 May 2016 at 12:01, Sreenidhi Bharathkar Ramesh &lt;
<br>
sreenidhi-bharathkar.ramesh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you so much for the details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. while running the &quot;Tile I/O&quot; benchmark, I see the following message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 28 ./mpi-tile-io --nr_tiles_x 7 --nr_tiles_y 4 --sz_tile_x
</span><br>
<span class="quotelev1">&gt; 100 --sz_tile_y 100 --sz_element 32 --filename file1g
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; # collective I/O off
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do I enable collective I/O ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. I switched to using Open MPI v 2.0.0rc2 .  How do I know which IO is
</span><br>
<span class="quotelev1">&gt; being used ?  How do I switch between OMPIO and ROMIO ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; - Sreenidhi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 10, 2016 at 7:14 PM, Edgar Gabriel &lt;egabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in the 1.7, 1.8 and 1.10 series ROMIO remains the default. In the
</span><br>
<span class="quotelev2">&gt;&gt; upcomgin 2.x series, OMPIO will be the default, except for Lustre file
</span><br>
<span class="quotelev2">&gt;&gt; systems, where we will stick with ROMIO as the primary resource.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regarding performance comparison, we ran numerous tests late last year
</span><br>
<span class="quotelev2">&gt;&gt; and early this year. It really depends on the application scenario and the
</span><br>
<span class="quotelev2">&gt;&gt; platform that you are using. If you want to know which one should you use,
</span><br>
<span class="quotelev2">&gt;&gt; I would definitely suggest to stick with ROMIO in the 1.10 series, since
</span><br>
<span class="quotelev2">&gt;&gt; many of the bug fixes of OMPIO that we did in the last two years could not
</span><br>
<span class="quotelev2">&gt;&gt; be back-ported to the 1.10 series for technical reasons. If you plan to
</span><br>
<span class="quotelev2">&gt;&gt; switch to the 2.x series, it might be easiest to just run a couple of tests
</span><br>
<span class="quotelev2">&gt;&gt; and compare the performance for your application on your platform, and base
</span><br>
<span class="quotelev2">&gt;&gt; your decision on that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 5/10/2016 6:32 AM, Sreenidhi Bharathkar Ramesh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. During default build of OpenMPI, it looks like both ompio.la and
</span><br>
<span class="quotelev2">&gt;&gt; romio.la are built.  Which I/O MCA library is used and based on what is
</span><br>
<span class="quotelev2">&gt;&gt; the decision taken ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Are there any statistics available to compare these two - OMPIO vs
</span><br>
<span class="quotelev2">&gt;&gt; ROMIO ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using OpenMPI v1.10.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; - Sreenidhi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18951.php">http://www.open-mpi.org/community/lists/devel/2016/05/18951.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18963.php">http://www.open-mpi.org/community/lists/devel/2016/05/18963.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18964/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18965.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>Previous message:</strong> <a href="18963.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>In reply to:</strong> <a href="18963.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18965.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>Reply:</strong> <a href="18965.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
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
