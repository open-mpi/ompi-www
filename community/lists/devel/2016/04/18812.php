<?
$subject_val = "[OMPI devel]  1.10.3rc MTT failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 09:50:06 2016" -->
<!-- isoreceived="20160425135006" -->
<!-- sent="Mon, 25 Apr 2016 22:50:03 +0900" -->
<!-- isosent="20160425135003" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel]  1.10.3rc MTT failures" -->
<!-- id="CAAkFZ5tj+5PoswTr88tNgLevB6UB4hHmd+zap0U8p=vG13cakQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A93CE470-3CC0-4DFE-BF1C-7EE195901955_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel]  1.10.3rc MTT failures<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-25 09:50:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18813.php">Adrian Reber: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Previous message:</strong> <a href="18811.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>In reply to:</strong> <a href="18811.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18813.php">Adrian Reber: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Reply:</strong> <a href="18813.php">Adrian Reber: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Reply:</strong> <a href="18815.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Reply:</strong> <a href="18818.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cisco mtt looks clean
<br>
since ompi_tests repo is private, it cannot be automatically pulled unless
<br>
a password is saved (https) or a public key was uploaded to github (ssh)
<br>
for that reason, I would not simply assume the latest test suite is used :-(
<br>
and fwiw, Jeff uses an internally mirrored repo for ompi-tests, so it Cisco
<br>
clusters should use the latest test suites.
<br>
<p>Geoffrey,
<br>
can you please comment on the config of the ibm cluster ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, April 25, 2016, Ralph Castain &lt;rhc_at_[hidden]
<br>
&lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don&#226;&#128;&#153;t know - this isn&#226;&#128;&#153;t on my machine, but rather in the weekend and
</span><br>
<span class="quotelev1">&gt; nightly MTT reports. I&#226;&#128;&#153;m assuming folks are running the latest test suite,
</span><br>
<span class="quotelev1">&gt; but...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 25, 2016, at 6:20 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you make sure the ibm test suite is up to date ?
</span><br>
<span class="quotelev1">&gt; I pushed a fix for datatypes a few days ago, and it should be fine now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will double check this tomorrow anyway
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
<span class="quotelev1">&gt; On Monday, April 25, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;m seeing some consistent errors in the 1.10.3rc MTT results and would
</span><br>
<span class="quotelev2">&gt;&gt; appreciate it if folks could check them out:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ONESIDED:
</span><br>
<span class="quotelev2">&gt;&gt; onesided/cxx_win_attr:
</span><br>
<span class="quotelev2">&gt;&gt; [**ERROR**]: MPI_COMM_WORLD rank 0, file cxx_win_attr.cc:50:
</span><br>
<span class="quotelev2">&gt;&gt; Win::Get_attr: Got wrong value for disp unit
</span><br>
<span class="quotelev2">&gt;&gt; [**ERROR**]: MPI_COMM_WORLD rank 1, file cxx_win_attr.cc:50:
</span><br>
<span class="quotelev2">&gt;&gt; Win::Get_attr: Got wrong value for disp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DATATYPE:
</span><br>
<span class="quotelev2">&gt;&gt; datatype/predefined-datatype-name
</span><br>
<span class="quotelev2">&gt;&gt; MPI_LONG_LONG                    != MPI_LONG_LONG_INT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; LOOP SPAWN:
</span><br>
<span class="quotelev2">&gt;&gt; too many retries sending message to &lt;addr&gt;, giving up
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18809.php">http://www.open-mpi.org/community/lists/devel/2016/04/18809.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18810.php">http://www.open-mpi.org/community/lists/devel/2016/04/18810.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18812/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18813.php">Adrian Reber: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Previous message:</strong> <a href="18811.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>In reply to:</strong> <a href="18811.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18813.php">Adrian Reber: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Reply:</strong> <a href="18813.php">Adrian Reber: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Reply:</strong> <a href="18815.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Reply:</strong> <a href="18818.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
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
