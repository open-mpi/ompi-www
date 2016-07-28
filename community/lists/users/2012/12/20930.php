<?
$subject_val = "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 15:59:36 2012" -->
<!-- isoreceived="20121212205936" -->
<!-- sent="Thu, 13 Dec 2012 07:59:32 +1100" -->
<!-- isosent="20121212205932" -->
<!-- name="Ifeanyi" -->
<!-- email="ifeanyeg2012_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr" -->
<!-- id="CAMxrTy_5FqHiEftHkjP3q3VLjT0GstNiOk0Nj4Rgnne-SXCarQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EFB23DAB-8748-4EC9-ADA2-FB778A5CE110_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr<br>
<strong>From:</strong> Ifeanyi (<em>ifeanyeg2012_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-12 15:59:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20931.php">Ifeanyi: "Re: [OMPI users] Live process migration"</a>
<li><strong>Previous message:</strong> <a href="20929.php">Extreme Programming: "Re: [OMPI users] users Digest, Vol 2435, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="20926.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks Ralph.
<br>
<p>On Thu, Dec 13, 2012 at 1:54 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The checkpoint/restart code in the 1.7 branch is almost certainly broken
</span><br>
<span class="quotelev1">&gt; as the developer/maintainer of that code graduated and left for a colder
</span><br>
<span class="quotelev1">&gt; climate. We do not yet have someone to take their place, so the future of
</span><br>
<span class="quotelev1">&gt; that capability is somewhat in doubt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Afraid you'll have to stick with the 1.6 series for now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2012, at 12:38 AM, Ifeanyi &lt;ifeanyeg2012_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am having trouble building openmpi-1.7rc5 with ../configure
</span><br>
<span class="quotelev1">&gt; --with-ft=cr
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.7rc5# ./configure --with-ft=cr
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.7rc5# make all install
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; error message:
</span><br>
<span class="quotelev2">&gt; &gt; base/errmgr_base_fns.c:565:13: warning: ignoring return value of
</span><br>
<span class="quotelev1">&gt; 'asprintf', declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev2">&gt; &gt; base/errmgr_base_fns.c: In function 'orte_errmgr_base_migrate_state_str':
</span><br>
<span class="quotelev2">&gt; &gt; base/errmgr_base_fns.c:384:17: warning: ignoring return value of
</span><br>
<span class="quotelev1">&gt; 'asprintf', declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev2">&gt; &gt; base/errmgr_base_fns.c: In function 'orte_errmgr_base_abort':
</span><br>
<span class="quotelev2">&gt; &gt; base/errmgr_base_fns.c:244:18: warning: ignoring return value of
</span><br>
<span class="quotelev1">&gt; 'vasprintf', declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [base/errmgr_base_fns.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/abolap/Downloads/openmpi-1.7rc5/orte/mca/errmgr'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory `/home/abolap/Downloads/openmpi-1.7rc5/orte'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It install successfully when fault tolerance is not enabled on the build.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Pls help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards - Ifeanyi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20930/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20931.php">Ifeanyi: "Re: [OMPI users] Live process migration"</a>
<li><strong>Previous message:</strong> <a href="20929.php">Extreme Programming: "Re: [OMPI users] users Digest, Vol 2435, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="20926.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
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
