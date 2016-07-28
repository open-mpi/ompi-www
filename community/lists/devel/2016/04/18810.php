<?
$subject_val = "Re: [OMPI devel] 1.10.3rc MTT failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 09:20:20 2016" -->
<!-- isoreceived="20160425132020" -->
<!-- sent="Mon, 25 Apr 2016 22:20:19 +0900" -->
<!-- isosent="20160425132019" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.3rc MTT failures" -->
<!-- id="CAAkFZ5tZkS3WHPe4SxGjXRxn-yWSqGbha+ymisY3rT3aCCkFnw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C682A88A-EBCB-46F6-B1FF-2496AF3B0685_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-25 09:20:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18811.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Previous message:</strong> <a href="18809.php">Ralph Castain: "[OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>In reply to:</strong> <a href="18809.php">Ralph Castain: "[OMPI devel] 1.10.3rc MTT failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18811.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Reply:</strong> <a href="18811.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>can you make sure the ibm test suite is up to date ?
<br>
I pushed a fix for datatypes a few days ago, and it should be fine now.
<br>
<p>I will double check this tomorrow anyway
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, April 25, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I&#226;&#128;&#153;m seeing some consistent errors in the 1.10.3rc MTT results and would
</span><br>
<span class="quotelev1">&gt; appreciate it if folks could check them out:
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18809.php">http://www.open-mpi.org/community/lists/devel/2016/04/18809.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18810/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18811.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Previous message:</strong> <a href="18809.php">Ralph Castain: "[OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>In reply to:</strong> <a href="18809.php">Ralph Castain: "[OMPI devel] 1.10.3rc MTT failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18811.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<li><strong>Reply:</strong> <a href="18811.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
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
