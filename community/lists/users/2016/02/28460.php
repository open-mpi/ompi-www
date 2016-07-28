<?
$subject_val = "Re: [OMPI users] OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 08:14:29 2016" -->
<!-- isoreceived="20160208131429" -->
<!-- sent="Mon, 8 Feb 2016 13:14:21 +0000" -->
<!-- isosent="20160208131421" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Fortran vs C reductions" -->
<!-- id="8C5AF460-5719-45AE-84B5-D612468DDD95_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="wpbgn2ilas5gmlh1wmbc8e82.1454921985356_at_email.android.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] Fortran vs C reductions<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-08 08:14:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28461.php">Jeff Hammond: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28459.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28459.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28461.php">Jeff Hammond: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28461.php">Jeff Hammond: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The issue at hand is trying to help the user figure out that they have an open MPI built without fortran support.
<br>
<p>Perhaps we should improve the error reporting at run time to display something about the fact that you used a fortran data type but have an OMPI that was compiled without fortran support.
<br>
<p>Sent from my phone. No type good.
<br>
<p>On Feb 8, 2016, at 4:00 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
<br>
<p>That being said, should we remove these fortran types from include files and libs when ompi is configure'd without fortran support ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Jeff Hammond &lt;jeff.science_at_[hidden]&lt;mailto:jeff.science_at_[hidden]&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; BTW: is there a reason you don't want to just use the C datatypes?  The fundamental output of the index is an integer value -- casting it to a float of some flavor doesn't fundamentally change its value.
</span><br>
<p>The code in question is not mine.  I have suggested to the developers that they should use the correct C types.  The reason I became aware of this issue is that one of my colleagues compiled and ran this code on a system where OpenMPI was built without Fortran support and the code started failing with errors from MPI which were not seen on other systems.
<br>
<p><p>If you use an MPI library compiled without Fortran support, you should expect precisely nothing related to Fortran to work.  You might get more than this because the universe is being nice to you, but you should treat it as serendipity when something works, not a bug when something doesn't.
<br>
<p>Jeff
<br>
<p><p><pre>
--
Jeff Hammond
jeff.science_at_[hidden]&lt;mailto:jeff.science_at_[hidden]&gt;
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28459.php">http://www.open-mpi.org/community/lists/users/2016/02/28459.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28460/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28461.php">Jeff Hammond: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28459.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28459.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28461.php">Jeff Hammond: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28461.php">Jeff Hammond: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
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
