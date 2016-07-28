<?
$subject_val = "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 18:55:05 2016" -->
<!-- isoreceived="20160321225505" -->
<!-- sent="Mon, 21 Mar 2016 15:54:44 -0700" -->
<!-- isosent="20160321225444" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines" -->
<!-- id="CAGKz=uK8nKJmokLs+1Vs==gjQdFt8NOz8s6R0ECmibBmzWh0zA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAFkGP2=dyG1JptV+BTkB1wT+oLEJuf2uM2UNJ2w5VCUTgBv-qg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-21 18:54:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28784.php">Jeff Hammond: "Re: [OMPI users] Existing and emerging interconnects for commodity PCs"</a>
<li><strong>Previous message:</strong> <a href="28782.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>In reply to:</strong> <a href="28780.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28781.php">Dave Love: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Mar 21, 2016 at 1:37 PM, Brian Dobbins &lt;bdobbins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 21, 2016 at 2:18 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can consult <a href="http://meetings.mpi-forum.org/mpi3-impl-status-Mar15.pdf">http://meetings.mpi-forum.org/mpi3-impl-status-Mar15.pdf</a>
</span><br>
<span class="quotelev2">&gt;&gt; to see the status of all implementations w.r.t. MPI-3 as of one year ago.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you - that's something I was curious about, and it's incredibly
</span><br>
<span class="quotelev1">&gt; helpful.  Some places seem to not update their libraries terribly often,
</span><br>
<span class="quotelev1">&gt; perhaps for stability/reproducibility reasons, and one of the primary
</span><br>
<span class="quotelev1">&gt; systems I'm using still has an MPI2 library as the default.  I suspected,
</span><br>
<span class="quotelev1">&gt; but hadn't known, that MPI3 versions were already widely available.  Anyone
</span><br>
<span class="quotelev1">&gt; else still have an MPI2 library as the default on their systems?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
If you want to support IBM Blue Gene MPI and Fujitsu MPI, you should verify
<br>
MPI-3 support there.  Every other machine I know about has the ability to
<br>
support MPI-3.
<br>
<p>Calling from C code is another workable but less-than-elegant solution,
<br>
<span class="quotelev1">&gt; since not everyone knows C, even the basics of it, plus it adds a bit of
</span><br>
<span class="quotelev1">&gt; complexity.  I think maybe I'll just plan on 'expecting' MPI3 and using
</span><br>
<span class="quotelev1">&gt; macros to tackle the edge-case of MPI2/2.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Sure, but more people know C than Fortran :-)
<br>
<p><p><span class="quotelev1">&gt; Still, I wish there was an automatic -DMPI_VERSION=30 flag (or something
</span><br>
<span class="quotelev1">&gt; similar) added implicitly by the MPI command line.  Maybe, since
</span><br>
<span class="quotelev1">&gt; MPI_VERSION and MPI_SUBVERSION are taken, an MPI_FEATURES one (eg,
</span><br>
<span class="quotelev1">&gt; -DMPI_FEATURES=30, combining version and subversion)?  I guess it's rarely
</span><br>
<span class="quotelev1">&gt; needed except in situations where you have new codes on older systems,
</span><br>
<span class="quotelev1">&gt; though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
This is a great feature suggestion for the MPI Fortran compiler wrapper
<br>
scripts.  The behavior of these scripts is not standardized, but if
<br>
Open-MPI and MPICH support this, that's pretty close to standardized :-)
<br>
<p>Jeff
<br>
<p><p><span class="quotelev1">&gt; Any other perspectives on this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;   - Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28780.php">http://www.open-mpi.org/community/lists/users/2016/03/28780.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28783/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28784.php">Jeff Hammond: "Re: [OMPI users] Existing and emerging interconnects for commodity PCs"</a>
<li><strong>Previous message:</strong> <a href="28782.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>In reply to:</strong> <a href="28780.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28781.php">Dave Love: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
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
