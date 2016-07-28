<?
$subject_val = "Re: [OMPI devel] cleanup of rr_byobj";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 22:52:14 2014" -->
<!-- isoreceived="20140326025214" -->
<!-- sent="Tue, 25 Mar 2014 19:52:13 -0700" -->
<!-- isosent="20140326025213" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] cleanup of rr_byobj" -->
<!-- id="CAMD57oeo68SgXV5HS9DWJ27yGr9n63Vn7QG=4owyzD+2y-+fMg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF643AA896.034B31AB-ON49257CA7.0001D247-49257CA7.000382B3_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] cleanup of rr_byobj<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-25 22:52:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14395.php">tmishima_at_[hidden]: "Re: [OMPI devel] cleanup of rr_byobj"</a>
<li><strong>Previous message:</strong> <a href="14393.php">tmishima_at_[hidden]: "[OMPI devel] cleanup of rr_byobj"</a>
<li><strong>In reply to:</strong> <a href="14393.php">tmishima_at_[hidden]: "[OMPI devel] cleanup of rr_byobj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14395.php">tmishima_at_[hidden]: "Re: [OMPI devel] cleanup of rr_byobj"</a>
<li><strong>Reply:</strong> <a href="14395.php">tmishima_at_[hidden]: "Re: [OMPI devel] cleanup of rr_byobj"</a>
<li><strong>Reply:</strong> <a href="14413.php">tmishima_at_[hidden]: "Re: [OMPI devel] cleanup of rr_byobj"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tetsuya
<br>
<p>Let me take a look when I get home this weekend - I'm giving an ORTE
<br>
tutorial to a group of new developers this week and my time is very limited.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On Tue, Mar 25, 2014 at 5:37 PM, &lt;tmishima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph, I moved on to the development list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure why add_one flag is used in the rr_byobj.
</span><br>
<span class="quotelev1">&gt; Here, if oversubscribed, proc is mapped to each object
</span><br>
<span class="quotelev1">&gt; one by one. So, I think the add_one is not necesarry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Instead, when the user doesn't permit oversubscription,
</span><br>
<span class="quotelev1">&gt; the second pass should be skipped.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I made the logic a bit clear based upon this idea and
</span><br>
<span class="quotelev1">&gt; removed some outputs to synchronize it with the 1.7 branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please take a look at attached patch file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (See attached file: patch.byobj)
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14393.php">http://www.open-mpi.org/community/lists/devel/2014/03/14393.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14394/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14395.php">tmishima_at_[hidden]: "Re: [OMPI devel] cleanup of rr_byobj"</a>
<li><strong>Previous message:</strong> <a href="14393.php">tmishima_at_[hidden]: "[OMPI devel] cleanup of rr_byobj"</a>
<li><strong>In reply to:</strong> <a href="14393.php">tmishima_at_[hidden]: "[OMPI devel] cleanup of rr_byobj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14395.php">tmishima_at_[hidden]: "Re: [OMPI devel] cleanup of rr_byobj"</a>
<li><strong>Reply:</strong> <a href="14395.php">tmishima_at_[hidden]: "Re: [OMPI devel] cleanup of rr_byobj"</a>
<li><strong>Reply:</strong> <a href="14413.php">tmishima_at_[hidden]: "Re: [OMPI devel] cleanup of rr_byobj"</a>
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
