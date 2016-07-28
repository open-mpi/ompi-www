<?
$subject_val = "Re: [OMPI devel] [1.10.3rc2] OpenBSD build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 01:40:04 2016" -->
<!-- isoreceived="20160521054004" -->
<!-- sent="Fri, 20 May 2016 22:40:02 -0700" -->
<!-- isosent="20160521054002" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.10.3rc2] OpenBSD build failure" -->
<!-- id="CAAvDA15FQweHnFDK6HcZ+0Js0eo7W7kfHrx2MW+nVCgj8iq_Rg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5sfcxHZjg=ow9w9dre85qyidaWc50VyY=HDsX48_t80YA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.10.3rc2] OpenBSD build failure<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-21 01:40:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19018.php">Paul Hargrove: "[OMPI devel] [1.10.3rc2] testing summary"</a>
<li><strong>Previous message:</strong> <a href="19016.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc2] Build failure with Studio 12.5-beta"</a>
<li><strong>In reply to:</strong> <a href="19014.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc2] OpenBSD build failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>As I said there is no urgency.
<br>
If the respective RMs are OK w/o the MPICH/ROMIO folks feedback then it
<br>
would be great to get this fixed in the 1.10.3 and 2.0.0 releases.
<br>
However, it they think it is best to wait, that is fine too.
<br>
<p>I just wanted to be sure it wasn't a case of this fix getting lost in the
<br>
noise.
<br>
Even I don't actually *use* Open MPI on Open BSD (which still has
<br>
openmpi-1.4.1 in their package repo).
<br>
<p>-Paul
<br>
<p><p>On Fri, May 20, 2016 at 10:21 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was hoping I got some feedback from mpich folks before I commit it into
</span><br>
<span class="quotelev1">&gt; master and PR to the release branches.
</span><br>
<span class="quotelev1">&gt; I am fine to merge it and pr now if needed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Saturday, May 21, 2016, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As before, this RC cannot build ROMIO on OpenBSD 5.7 and higher.
</span><br>
<span class="quotelev2">&gt;&gt; Unlike previous times that I've reported this issue, Gilles now has a fix
</span><br>
<span class="quotelev2">&gt;&gt; available.
</span><br>
<span class="quotelev2">&gt;&gt; However, it it currently stuck in a PR for master:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/pull/1643">https://github.com/open-mpi/ompi/pull/1643</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not a high priority, but thought I mention it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19014.php">http://www.open-mpi.org/community/lists/devel/2016/05/19014.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19017/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19018.php">Paul Hargrove: "[OMPI devel] [1.10.3rc2] testing summary"</a>
<li><strong>Previous message:</strong> <a href="19016.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc2] Build failure with Studio 12.5-beta"</a>
<li><strong>In reply to:</strong> <a href="19014.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.3rc2] OpenBSD build failure"</a>
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
