<?
$subject_val = "Re: [OMPI users] Existing and emerging interconnects for commodity PCs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 19:11:49 2016" -->
<!-- isoreceived="20160321231149" -->
<!-- sent="Mon, 21 Mar 2016 16:11:29 -0700" -->
<!-- isosent="20160321231129" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Existing and emerging interconnects for commodity PCs" -->
<!-- id="CAGKz=uJ5HBb2cJRnZV+mogn10+-ceC2fwSAjGbiGAsLoWDZMAg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5vSEeB7pRGxiPEpNO6WD8SDyfXrnsfJc4ADW+XXypJEdw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Existing and emerging interconnects for commodity PCs<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-21 19:11:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28785.php">Gilles Gouaillardet: "Re: [OMPI users] Existing and emerging interconnects for commodity PCs"</a>
<li><strong>Previous message:</strong> <a href="28783.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>In reply to:</strong> <a href="28769.php">Gilles Gouaillardet: "Re: [OMPI users] Existing and emerging interconnects for commodity PCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28785.php">Gilles Gouaillardet: "Re: [OMPI users] Existing and emerging interconnects for commodity PCs"</a>
<li><strong>Reply:</strong> <a href="28785.php">Gilles Gouaillardet: "Re: [OMPI users] Existing and emerging interconnects for commodity PCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Mar 21, 2016 at 6:06 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Durga,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; currently, the average life expectancy of a cluster is 3 years.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>By average life expectancy, do you mean the average time to upgrade?  DOE
<br>
supercomputers usually run for 5-6 years, and some HPC systems run for 6-9
<br>
years.  I know that some folks upgrade their clusters more often than every
<br>
3 years, but I've never heard of an HPC system that was used for less than
<br>
3 years.
<br>
<p><p><span class="quotelev1">&gt; si if you have to architect a cluster out of off the shelf components, I
</span><br>
<span class="quotelev1">&gt; would recommend
</span><br>
<span class="quotelev1">&gt; you take the &quot;best&quot; components available today or to be released in a
</span><br>
<span class="quotelev1">&gt; very near future.
</span><br>
<span class="quotelev1">&gt; so many things can happen in 10 years, so I can only suggest you do not
</span><br>
<span class="quotelev1">&gt; lock in yourself with a given vendor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Indeed, just write code that relies upon open standards and then buy the
<br>
hardware that supports those open standards best at any given point in time.
<br>
<p>MPI is, of course, the best open standard to which you should be writing
<br>
applications, and I am absolutely certain that MPI will be supported by
<br>
interconnect products in 10 years, if for no other reason than why Fortran
<br>
77 is widely supported nearly 40 years after its introduction :-)
<br>
<p>&quot;best&quot; should be understood as &quot;best match with your needs and your budget&quot;.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
And relying upon MPI rather than some hardware technology is the best way
<br>
to optimize your budget, because MPI is supported by a huge range of
<br>
networks, both commodity and custom.
<br>
<p><p><span class="quotelev1">&gt; as a general though, market is both rational and irrational, so the best
</span><br>
<span class="quotelev1">&gt; engineered technology might not always prevail. and I do not know the magic
</span><br>
<span class="quotelev1">&gt; recipe to guarantee success.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
For example, VHS vs Betamax :-)
<br>
<p>Jeff
<br>
<p><p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Monday, March 21, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't mean this to be a political conversation, but more of a research
</span><br>
<span class="quotelev2">&gt;&gt; type.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From what I have been observing, some of the interconnects that had very
</span><br>
<span class="quotelev2">&gt;&gt; good technological features as well as popularity in the past have
</span><br>
<span class="quotelev2">&gt;&gt; basically gone down the history book and some others, with comparable
</span><br>
<span class="quotelev2">&gt;&gt; feature set, have gained (although I won't put any names here, neither of
</span><br>
<span class="quotelev2">&gt;&gt; these are commodity gigabit Ethernet).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any comments on what drives these factors? Put another way, if I am to
</span><br>
<span class="quotelev2">&gt;&gt; architect a system consisting of commodity nodes today, how can I
</span><br>
<span class="quotelev2">&gt;&gt; reasonably be sure that the interconnect will be a good choice, in all
</span><br>
<span class="quotelev2">&gt;&gt; sense of the word 'good', say, 10 years down the road?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28769.php">http://www.open-mpi.org/community/lists/users/2016/03/28769.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28784/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28785.php">Gilles Gouaillardet: "Re: [OMPI users] Existing and emerging interconnects for commodity PCs"</a>
<li><strong>Previous message:</strong> <a href="28783.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>In reply to:</strong> <a href="28769.php">Gilles Gouaillardet: "Re: [OMPI users] Existing and emerging interconnects for commodity PCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28785.php">Gilles Gouaillardet: "Re: [OMPI users] Existing and emerging interconnects for commodity PCs"</a>
<li><strong>Reply:</strong> <a href="28785.php">Gilles Gouaillardet: "Re: [OMPI users] Existing and emerging interconnects for commodity PCs"</a>
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
