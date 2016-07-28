<?
$subject_val = "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 16:37:41 2016" -->
<!-- isoreceived="20160321203741" -->
<!-- sent="Mon, 21 Mar 2016 14:37:39 -0600" -->
<!-- isosent="20160321203739" -->
<!-- name="Brian Dobbins" -->
<!-- email="bdobbins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines" -->
<!-- id="CAFkGP2=dyG1JptV+BTkB1wT+oLEJuf2uM2UNJ2w5VCUTgBv-qg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGKz=uL6axZjv6H5+0aESCnbQa76FWCOG8irD_KGrYeG3UuiNQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Dobbins (<em>bdobbins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-21 16:37:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28781.php">Dave Love: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Previous message:</strong> <a href="28779.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>In reply to:</strong> <a href="28779.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28783.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Reply:</strong> <a href="28783.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>On Mon, Mar 21, 2016 at 2:18 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; You can consult <a href="http://meetings.mpi-forum.org/mpi3-impl-status-Mar15.pdf">http://meetings.mpi-forum.org/mpi3-impl-status-Mar15.pdf</a>
</span><br>
<span class="quotelev1">&gt; to see the status of all implementations w.r.t. MPI-3 as of one year ago.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Thank you - that's something I was curious about, and it's incredibly
<br>
helpful.  Some places seem to not update their libraries terribly often,
<br>
perhaps for stability/reproducibility reasons, and one of the primary
<br>
systems I'm using still has an MPI2 library as the default.  I suspected,
<br>
but hadn't known, that MPI3 versions were already widely available.  Anyone
<br>
else still have an MPI2 library as the default on their systems?
<br>
<p>Calling from C code is another workable but less-than-elegant solution,
<br>
since not everyone knows C, even the basics of it, plus it adds a bit of
<br>
complexity.  I think maybe I'll just plan on 'expecting' MPI3 and using
<br>
macros to tackle the edge-case of MPI2/2.1.
<br>
<p>Still, I wish there was an automatic -DMPI_VERSION=30 flag (or something
<br>
similar) added implicitly by the MPI command line.  Maybe, since
<br>
MPI_VERSION and MPI_SUBVERSION are taken, an MPI_FEATURES one (eg,
<br>
-DMPI_FEATURES=30, combining version and subversion)?  I guess it's rarely
<br>
needed except in situations where you have new codes on older systems,
<br>
though.
<br>
<p>Any other perspectives on this?
<br>
<p>Cheers,
<br>
&nbsp;&nbsp;- Brian
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28780/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28781.php">Dave Love: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Previous message:</strong> <a href="28779.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>In reply to:</strong> <a href="28779.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28783.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Reply:</strong> <a href="28783.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
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
