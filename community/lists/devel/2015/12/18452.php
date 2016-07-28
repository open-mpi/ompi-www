<?
$subject_val = "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 22 19:27:11 2015" -->
<!-- isoreceived="20151223002711" -->
<!-- sent="Wed, 23 Dec 2015 09:27:09 +0900" -->
<!-- isosent="20151223002709" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.10: mpirun --host xxx behaviour" -->
<!-- id="CAAkFZ5uhEJrRCtNguPKaWqdc3+A-G7gg5RiVoo+Fot2gzAX3LA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1030AAB9-41C7-4626-A33A-617B1BB260D6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.10: mpirun --host xxx behaviour<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-22 19:27:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18453.php">Marco Atzeri: "[OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<li><strong>Previous message:</strong> <a href="18451.php">Ralph Castain: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>In reply to:</strong> <a href="18451.php">Ralph Castain: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18455.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks,
<br>
<p>As far as I remember, master and v2.x do not behave this way ...
<br>
Anyway, I will double check this tomorrow
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, December 22, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That is the behavior folks asked for, yes. I personally don&#226;&#128;&#153;t care either
</span><br>
<span class="quotelev1">&gt; way, but you&#226;&#128;&#153;ll find that the master and 2.x branch all work that way too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 22, 2015, at 12:49 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i (re)discovered an old and odd behaviour in v1.10, which was discussed
</span><br>
<span class="quotelev1">&gt; in <a href="https://github.com/open-mpi/ompi-release/pull/664">https://github.com/open-mpi/ompi-release/pull/664</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; when running
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --host xxx ...
</span><br>
<span class="quotelev2">&gt; &gt; mpirun v1.10 assumes one slot per host.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; consequently, on my vm with 4 cores
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 ./helloworld_mpi
</span><br>
<span class="quotelev2">&gt; &gt; works fine
</span><br>
<span class="quotelev2">&gt; &gt; but
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 --host localhost ./helloworld_mpi
</span><br>
<span class="quotelev2">&gt; &gt; fails with the following error message
</span><br>
<span class="quotelev2">&gt; &gt; &quot;There are not enough slots available ...&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; if i understand correctly, and thought this is a different behaviour
</span><br>
<span class="quotelev1">&gt; from v1.8, this is compliant with the definition of the --host option.
</span><br>
<span class="quotelev2">&gt; &gt; it seems you were open to some change.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; did you have time to think about it ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18450.php">http://www.open-mpi.org/community/lists/devel/2015/12/18450.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18451.php">http://www.open-mpi.org/community/lists/devel/2015/12/18451.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18452/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18453.php">Marco Atzeri: "[OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<li><strong>Previous message:</strong> <a href="18451.php">Ralph Castain: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>In reply to:</strong> <a href="18451.php">Ralph Castain: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18455.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
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
