<?
$subject_val = "Re: [OMPI devel] 1.10.3rc MTT failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 09:31:45 2016" -->
<!-- isoreceived="20160425133145" -->
<!-- sent="Mon, 25 Apr 2016 06:31:31 -0700" -->
<!-- isosent="20160425133131" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.3rc MTT failures" -->
<!-- id="A93CE470-3CC0-4DFE-BF1C-7EE195901955_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5tZkS3WHPe4SxGjXRxn-yWSqGbha+ymisY3rT3aCCkFnw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-04-25 09:31:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18812.php">Gilles Gouaillardet: "[OMPI devel]  1.10.3rc MTT failures"</a>
<li><strong>Previous message:</strong> <a href="18810.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>In reply to:</strong> <a href="18810.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18812.php">Gilles Gouaillardet: "[OMPI devel]  1.10.3rc MTT failures"</a>
<li><strong>Reply:</strong> <a href="18812.php">Gilles Gouaillardet: "[OMPI devel]  1.10.3rc MTT failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don&#226;&#128;&#153;t know - this isn&#226;&#128;&#153;t on my machine, but rather in the weekend and nightly MTT reports. I&#226;&#128;&#153;m assuming folks are running the latest test suite, but...
<br>
<p><p><span class="quotelev1">&gt; On Apr 25, 2016, at 6:20 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; On Monday, April 25, 2016, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m seeing some consistent errors in the 1.10.3rc MTT results and would appreciate it if folks could check them out:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ONESIDED:
</span><br>
<span class="quotelev1">&gt; onesided/cxx_win_attr:
</span><br>
<span class="quotelev1">&gt; [**ERROR**]: MPI_COMM_WORLD rank 0, file cxx_win_attr.cc:50:
</span><br>
<span class="quotelev1">&gt; Win::Get_attr: Got wrong value for disp unit
</span><br>
<span class="quotelev1">&gt; [**ERROR**]: MPI_COMM_WORLD rank 1, file cxx_win_attr.cc:50:
</span><br>
<span class="quotelev1">&gt; Win::Get_attr: Got wrong value for disp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DATATYPE:
</span><br>
<span class="quotelev1">&gt; datatype/predefined-datatype-name
</span><br>
<span class="quotelev1">&gt; MPI_LONG_LONG                    != MPI_LONG_LONG_INT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LOOP SPAWN:
</span><br>
<span class="quotelev1">&gt; too many retries sending message to &lt;addr&gt;, giving up
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18809.php">http://www.open-mpi.org/community/lists/devel/2016/04/18809.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/04/18809.php">http://www.open-mpi.org/community/lists/devel/2016/04/18809.php</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18810.php">http://www.open-mpi.org/community/lists/devel/2016/04/18810.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18811/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18812.php">Gilles Gouaillardet: "[OMPI devel]  1.10.3rc MTT failures"</a>
<li><strong>Previous message:</strong> <a href="18810.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>In reply to:</strong> <a href="18810.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18812.php">Gilles Gouaillardet: "[OMPI devel]  1.10.3rc MTT failures"</a>
<li><strong>Reply:</strong> <a href="18812.php">Gilles Gouaillardet: "[OMPI devel]  1.10.3rc MTT failures"</a>
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
