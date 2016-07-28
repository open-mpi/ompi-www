<?
$subject_val = "Re: [OMPI devel] 1.10.3rc MTT failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 10:23:38 2016" -->
<!-- isoreceived="20160425142338" -->
<!-- sent="Mon, 25 Apr 2016 07:23:35 -0700" -->
<!-- isosent="20160425142335" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.3rc MTT failures" -->
<!-- id="C6356725-E753-4F65-BBD6-613368511F8D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5tj+5PoswTr88tNgLevB6UB4hHmd+zap0U8p=vG13cakQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.3rc MTT failures<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-25 10:23:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18816.php">Josh Hursey: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Previous message:</strong> <a href="18814.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>In reply to:</strong> <a href="18812.php">Gilles Gouaillardet: "[OMPI devel]  1.10.3rc MTT failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18818.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I beg to differ on the Cisco case - some of those errors come directly from the Cisco MTT.
<br>
<p><p><span class="quotelev1">&gt; On Apr 25, 2016, at 6:50 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cisco mtt looks clean
</span><br>
<span class="quotelev1">&gt; since ompi_tests repo is private, it cannot be automatically pulled unless a password is saved (https) or a public key was uploaded to github (ssh)
</span><br>
<span class="quotelev1">&gt; for that reason, I would not simply assume the latest test suite is used :-(
</span><br>
<span class="quotelev1">&gt; and fwiw, Jeff uses an internally mirrored repo for ompi-tests, so it Cisco clusters should use the latest test suites.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Geoffrey,
</span><br>
<span class="quotelev1">&gt; can you please comment on the config of the ibm cluster ?
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
<span class="quotelev1">&gt; On Monday, April 25, 2016, Ralph Castain &lt;rhc_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I don&#226;&#128;&#153;t know - this isn&#226;&#128;&#153;t on my machine, but rather in the weekend and nightly MTT reports. I&#226;&#128;&#153;m assuming folks are running the latest test suite, but...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 25, 2016, at 6:20 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; can you make sure the ibm test suite is up to date ?
</span><br>
<span class="quotelev2">&gt;&gt; I pushed a fix for datatypes a few days ago, and it should be fine now.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will double check this tomorrow anyway
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Monday, April 25, 2016, Ralph Castain &lt;rhc_at_[hidden] &lt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;m seeing some consistent errors in the 1.10.3rc MTT results and would appreciate it if folks could check them out:
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
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18809.php">http://www.open-mpi.org/community/lists/devel/2016/04/18809.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/04/18809.php">http://www.open-mpi.org/community/lists/devel/2016/04/18809.php</a>&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18810.php">http://www.open-mpi.org/community/lists/devel/2016/04/18810.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/04/18810.php">http://www.open-mpi.org/community/lists/devel/2016/04/18810.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18812.php">http://www.open-mpi.org/community/lists/devel/2016/04/18812.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18815/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18816.php">Josh Hursey: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Previous message:</strong> <a href="18814.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>In reply to:</strong> <a href="18812.php">Gilles Gouaillardet: "[OMPI devel]  1.10.3rc MTT failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18818.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
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
