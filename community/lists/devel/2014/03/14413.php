<?
$subject_val = "Re: [OMPI devel] cleanup of rr_byobj";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 20:22:04 2014" -->
<!-- isoreceived="20140328002204" -->
<!-- sent="Fri, 28 Mar 2014 09:21:11 +0900" -->
<!-- isosent="20140328002111" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] cleanup of rr_byobj" -->
<!-- id="OF3E6DAD87.679EBB25-ON49257CA8.00835AA3-49257CA9.000204A8_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAMD57oeo68SgXV5HS9DWJ27yGr9n63Vn7QG=4owyzD+2y-+fMg_at_mail.gmail.com" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20cleanup%20of%20rr_byobj"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-27 20:21:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14414.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<li><strong>Previous message:</strong> <a href="14412.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing MPI 3 definitions"</a>
<li><strong>In reply to:</strong> <a href="14394.php">Ralph Castain: "Re: [OMPI devel] cleanup of rr_byobj"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I added two improvements. Please replace the previous patch file
<br>
by this attached one, and take a look this week end.
<br>
<p>1. Add pre-check for ORTE_ERR_NOT_FOUND to make retry with byslot
<br>
work afterward correctly. Otherwise, the retry could fail, because
<br>
some fields such as node-&gt;procs, node-&gt;slots_inuse is already
<br>
updated.
<br>
<p>2. Improve the detection of oversubscription, when node-&gt;slots is not
<br>
multiple number of cpus_per_rank. For example, using node05, node06
<br>
with slots = 8 and setting cpus_per_rank = 3, np = 5 should be
<br>
oversubscribed, although np x cpus_per_rank(3X5=15) is less than
<br>
num_slots(=16). I fixed to detect this oversubscription.
<br>
<p>Tetsuya
<br>
<p>(See attached file: patch.byobj2)
<br>
<p><span class="quotelev1">&gt; Hi Tetsuya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me take a look when I get home this weekend - I'm giving an ORTE
</span><br>
tutorial to a group of new developers this week and my time is very
<br>
limited.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 25, 2014 at 5:37 PM,  &lt;tmishima_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
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
<a href="http://www.open-mpi.org/community/lists/devel/2014/03/14393.php">http://www.open-mpi.org/community/lists/devel/2014/03/14393.php</a>_______________________________________________
<br>
<p><span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/develLink">http://www.open-mpi.org/mailman/listinfo.cgi/develLink</a> to
</span><br>
this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14394.php">http://www.open-mpi.org/community/lists/devel/2014/03/14394.php</a>
<br>

<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14413/patch.byobj2">patch.byobj2</a>
</ul>
<!-- attachment="patch.byobj2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14414.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<li><strong>Previous message:</strong> <a href="14412.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing MPI 3 definitions"</a>
<li><strong>In reply to:</strong> <a href="14394.php">Ralph Castain: "Re: [OMPI devel] cleanup of rr_byobj"</a>
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
