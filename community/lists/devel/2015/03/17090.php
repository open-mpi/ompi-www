<?
$subject_val = "Re: [OMPI devel] psm and process affinity in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 11:42:33 2015" -->
<!-- isoreceived="20150303164233" -->
<!-- sent="Tue, 3 Mar 2015 09:42:32 -0700" -->
<!-- isosent="20150303164232" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] psm and process affinity in open mpi" -->
<!-- id="CAF1Cqj6zS3jF6Dif-5Wo2WSUTEt3vqqHfWK6GueR=Ybb+JayRw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0429C22EBDB44040B478F8F77EF14518CB7727_at_ORSMSX114.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] psm and process affinity in open mpi<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-03 11:42:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17091.php">Paul Hargrove: "[OMPI devel] master tarball broken"</a>
<li><strong>Previous message:</strong> <a href="17089.php">Friedley, Andrew: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>In reply to:</strong> <a href="17089.php">Friedley, Andrew: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Andrew, I was getting confused with the libfabric psm provider code
<br>
inside open mpi.
<br>
<p>2015-03-03 9:35 GMT-07:00 Friedley, Andrew &lt;andrew.friedley_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;  Hi Howard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The PSM MTL sets PSM_EP_OPEN_AFFINITY_SKIP, so if I understand right, OMPI
</span><br>
<span class="quotelev1">&gt; already has the fix for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* devel [mailto:devel-bounces_at_[hidden]] *On Behalf Of *Howard
</span><br>
<span class="quotelev1">&gt; Pritchard
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, March 3, 2015 8:21 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers List
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI devel] psm and process affinity in open mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First initial disclaimer - I've looked through the open mpi faq and have
</span><br>
<span class="quotelev1">&gt; been unable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so far an answer to my question below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been having a discussion with one of the other trilab folks about
</span><br>
<span class="quotelev1">&gt; some issues with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using PSM within mvpaich where the default cpu affinity behavior of PSM
</span><br>
<span class="quotelev1">&gt; can cause problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It turns out that the default behavior of PSM appears to be to set cpu
</span><br>
<span class="quotelev1">&gt; affinity for a process
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which calls psm_ep_open if process affinity has not already been set.
</span><br>
<span class="quotelev1">&gt; We're finding that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it is necesary to use the PSM_EP_OPEN_AFFINITY_SKIP setting in the
</span><br>
<span class="quotelev1">&gt; affinity field
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; of the psm_opts struct that is passed to psm_ep_open in order to work
</span><br>
<span class="quotelev1">&gt; around the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem has to do with singleton processes.  If mvapich is using psm
</span><br>
<span class="quotelev1">&gt; and multiple
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; singleton jobs are scheduled on a node, they all by default end up binding
</span><br>
<span class="quotelev1">&gt; to core 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Setting the above option eliminates this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could Open MPI also potentially have this same problem?  If so, I'd want
</span><br>
<span class="quotelev1">&gt; to add an mca param
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to set this option before calling psm_ep_open within psm mtl.  Hmm.. maybe
</span><br>
<span class="quotelev1">&gt; the ofi mtl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; supporter should talk with the libfabric psm provider folks about this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17088.php">http://www.open-mpi.org/community/lists/devel/2015/03/17088.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17090/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17091.php">Paul Hargrove: "[OMPI devel] master tarball broken"</a>
<li><strong>Previous message:</strong> <a href="17089.php">Friedley, Andrew: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>In reply to:</strong> <a href="17089.php">Friedley, Andrew: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
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
