<?
$subject_val = "Re: [OMPI devel] OMPIO vs ROMIO";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 06:01:39 2016" -->
<!-- isoreceived="20160511100139" -->
<!-- sent="Wed, 11 May 2016 15:31:37 +0530" -->
<!-- isosent="20160511100137" -->
<!-- name="Sreenidhi Bharathkar Ramesh" -->
<!-- email="sreenidhi-bharathkar.ramesh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPIO vs ROMIO" -->
<!-- id="CANi1EtP3+xKOUoMCTn+st9kcOZsa6L9Sp1J1hAd5f5KBC_Y+FQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="b07f649a-24a2-38d5-667f-accd8004bf2a_at_central.uh.edu" -->
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
<strong>From:</strong> Sreenidhi Bharathkar Ramesh (<em>sreenidhi-bharathkar.ramesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-11 06:01:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18964.php">Michael Rezny: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>Previous message:</strong> <a href="18962.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<li><strong>In reply to:</strong> <a href="18951.php">Edgar Gabriel: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18964.php">Michael Rezny: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>Reply:</strong> <a href="18964.php">Michael Rezny: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you so much for the details.
<br>
<p><p>1. while running the &quot;Tile I/O&quot; benchmark, I see the following message:
<br>
<p>$ mpirun -np 28 ./mpi-tile-io --nr_tiles_x 7 --nr_tiles_y 4 --sz_tile_x 100
<br>
--sz_tile_y 100 --sz_element 32 --filename file1g
<br>
...
<br>
# collective I/O off
<br>
<p>How do I enable collective I/O ?
<br>
<p>2. I switched to using Open MPI v 2.0.0rc2 .  How do I know which IO is
<br>
being used ?  How do I switch between OMPIO and ROMIO ?
<br>
<p><p>Please let me know.
<br>
<p>Thanks,
<br>
- Sreenidhi.
<br>
<p><p>On Tue, May 10, 2016 at 7:14 PM, Edgar Gabriel &lt;egabriel_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; in the 1.7, 1.8 and 1.10 series ROMIO remains the default. In the upcomgin
</span><br>
<span class="quotelev1">&gt; 2.x series, OMPIO will be the default, except for Lustre file systems,
</span><br>
<span class="quotelev1">&gt; where we will stick with ROMIO as the primary resource.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding performance comparison, we ran numerous tests late last year and
</span><br>
<span class="quotelev1">&gt; early this year. It really depends on the application scenario and the
</span><br>
<span class="quotelev1">&gt; platform that you are using. If you want to know which one should you use,
</span><br>
<span class="quotelev1">&gt; I would definitely suggest to stick with ROMIO in the 1.10 series, since
</span><br>
<span class="quotelev1">&gt; many of the bug fixes of OMPIO that we did in the last two years could not
</span><br>
<span class="quotelev1">&gt; be back-ported to the 1.10 series for technical reasons. If you plan to
</span><br>
<span class="quotelev1">&gt; switch to the 2.x series, it might be easiest to just run a couple of tests
</span><br>
<span class="quotelev1">&gt; and compare the performance for your application on your platform, and base
</span><br>
<span class="quotelev1">&gt; your decision on that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/10/2016 6:32 AM, Sreenidhi Bharathkar Ramesh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. During default build of OpenMPI, it looks like both ompio.la and
</span><br>
<span class="quotelev1">&gt; romio.la are built.  Which I/O MCA library is used and based on what is
</span><br>
<span class="quotelev1">&gt; the decision taken ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Are there any statistics available to compare these two - OMPIO vs
</span><br>
<span class="quotelev1">&gt; ROMIO ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI v1.10.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; - Sreenidhi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18951.php">http://www.open-mpi.org/community/lists/devel/2016/05/18951.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18963/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18964.php">Michael Rezny: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>Previous message:</strong> <a href="18962.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<li><strong>In reply to:</strong> <a href="18951.php">Edgar Gabriel: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18964.php">Michael Rezny: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>Reply:</strong> <a href="18964.php">Michael Rezny: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
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
