<?
$subject_val = "Re: [OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 00:31:44 2016" -->
<!-- isoreceived="20160208053144" -->
<!-- sent="Sun, 7 Feb 2016 21:31:24 -0800" -->
<!-- isosent="20160208053124" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran vs C reductions" -->
<!-- id="CAGKz=uL=jBF7M7be7RyVFhe6zwGKC7+2skZoD6OUKN7AoHQXuA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAKRe6eDuPZqOoZnEmRgPHqMm4mmrg+B=raA4WMdjG4=8ESyTvA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran vs C reductions<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-08 00:31:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28459.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28457.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28457.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28462.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28462.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; BTW: is there a reason you don't want to just use the C datatypes?  The
</span><br>
<span class="quotelev1">&gt; fundamental output of the index is an integer value -- casting it to a
</span><br>
<span class="quotelev1">&gt; float of some flavor doesn't fundamentally change its value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code in question is not mine.  I have suggested to the developers that
</span><br>
<span class="quotelev1">&gt; they should use the correct C types.  The reason I became aware of this
</span><br>
<span class="quotelev1">&gt; issue is that one of my colleagues compiled and ran this code on a system
</span><br>
<span class="quotelev1">&gt; where OpenMPI was built without Fortran support and the code started
</span><br>
<span class="quotelev1">&gt; failing with errors from MPI which were not seen on other systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
If you use an MPI library compiled without Fortran support, you should
<br>
expect precisely nothing related to Fortran to work.  You might get more
<br>
than this because the universe is being nice to you, but you should treat
<br>
it as serendipity when something works, not a bug when something doesn't.
<br>
<p>Jeff
<br>
<p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28458/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28459.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28457.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28457.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28462.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28462.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
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
