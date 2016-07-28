<?
$subject_val = "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 09:54:35 2012" -->
<!-- isoreceived="20121212145435" -->
<!-- sent="Wed, 12 Dec 2012 06:54:28 -0800" -->
<!-- isosent="20121212145428" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr" -->
<!-- id="EFB23DAB-8748-4EC9-ADA2-FB778A5CE110_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMxrTy9B8xvD8pzTsxY_GdqgeUsznjTpXH5ufBcMhQ+Yzdxh+A_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-12 09:54:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20927.php">Siegmar Gross: "[OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<li><strong>Previous message:</strong> <a href="20925.php">Ralph Castain: "Re: [OMPI users] Serveral issue in mpirun on macosx 10.8.2"</a>
<li><strong>In reply to:</strong> <a href="20920.php">Ifeanyi: "[OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20930.php">Ifeanyi: "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<li><strong>Reply:</strong> <a href="20930.php">Ifeanyi: "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The checkpoint/restart code in the 1.7 branch is almost certainly broken as the developer/maintainer of that code graduated and left for a colder climate. We do not yet have someone to take their place, so the future of that capability is somewhat in doubt.
<br>
<p>Afraid you'll have to stick with the 1.6 series for now.
<br>
<p>On Dec 12, 2012, at 12:38 AM, Ifeanyi &lt;ifeanyeg2012_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am having trouble building openmpi-1.7rc5 with ../configure --with-ft=cr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi-1.7rc5# ./configure --with-ft=cr
</span><br>
<span class="quotelev1">&gt; openmpi-1.7rc5# make all install 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; error message:
</span><br>
<span class="quotelev1">&gt; base/errmgr_base_fns.c:565:13: warning: ignoring return value of 'asprintf', declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; base/errmgr_base_fns.c: In function 'orte_errmgr_base_migrate_state_str':
</span><br>
<span class="quotelev1">&gt; base/errmgr_base_fns.c:384:17: warning: ignoring return value of 'asprintf', declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; base/errmgr_base_fns.c: In function 'orte_errmgr_base_abort':
</span><br>
<span class="quotelev1">&gt; base/errmgr_base_fns.c:244:18: warning: ignoring return value of 'vasprintf', declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; make[2]: *** [base/errmgr_base_fns.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/abolap/Downloads/openmpi-1.7rc5/orte/mca/errmgr'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/abolap/Downloads/openmpi-1.7rc5/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It install successfully when fault tolerance is not enabled on the build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pls help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards - Ifeanyi 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20927.php">Siegmar Gross: "[OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<li><strong>Previous message:</strong> <a href="20925.php">Ralph Castain: "Re: [OMPI users] Serveral issue in mpirun on macosx 10.8.2"</a>
<li><strong>In reply to:</strong> <a href="20920.php">Ifeanyi: "[OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20930.php">Ifeanyi: "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<li><strong>Reply:</strong> <a href="20930.php">Ifeanyi: "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
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
