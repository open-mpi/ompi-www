<?
$subject_val = "Re: [OMPI devel] build failure in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 10:36:58 2014" -->
<!-- isoreceived="20140123153658" -->
<!-- sent="Thu, 23 Jan 2014 08:36:57 -0700" -->
<!-- isosent="20140123153657" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] build failure in trunk" -->
<!-- id="20140123153657.GN31559_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyY_uCtXX54svPGz1nXBkLPqiRV2ogn=M6MjmAUifYUhDw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] build failure in trunk<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 10:36:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13879.php">Ralph Castain: "Re: [OMPI devel] trunk and v1.7: xlc and lost atomics patch"</a>
<li><strong>Previous message:</strong> <a href="13877.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>In reply to:</strong> <a href="13869.php">Mike Dubman: "[OMPI devel] build failure in trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shoot. Forgot to add the ignore for that component. Will do that now.
<br>
<p>-Nathan
<br>
<p>On Thu, Jan 23, 2014 at 08:17:47AM +0200, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt;  06:29:26 make[3]: Leaving directory `/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi/mca/bcol/ptpcoll'
</span><br>
<span class="quotelev1">&gt;  06:29:26 make[2]: Leaving directory `/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi/mca/bcol/ptpcoll'
</span><br>
<span class="quotelev1">&gt;  06:29:26 Making install in mca/bcol/iboffload
</span><br>
<span class="quotelev1">&gt;  06:29:26 make[2]: Entering directory `/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi/mca/bcol/iboffload'
</span><br>
<span class="quotelev1">&gt;  06:29:26   CC       bcol_iboffload_module.lo
</span><br>
<span class="quotelev1">&gt;  06:29:26 bcol_iboffload_module.c: In function 'load_func':
</span><br>
<span class="quotelev1">&gt;  06:29:26 bcol_iboffload_module.c:734: error: 'mca_bcol_iboffload_allgather_register' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;  06:29:26 bcol_iboffload_module.c:734: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt;  06:29:26 bcol_iboffload_module.c:734: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt;  06:29:26 make[2]: *** [bcol_iboffload_module.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  06:29:26 make[2]: Leaving directory `/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi/mca/bcol/iboffload'
</span><br>
<span class="quotelev1">&gt;  06:29:26 make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;  06:29:26 make[1]: Leaving directory `/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi'
</span><br>
<span class="quotelev1">&gt;  06:29:26 make: *** [install-recursive] Error 1
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13878/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13879.php">Ralph Castain: "Re: [OMPI devel] trunk and v1.7: xlc and lost atomics patch"</a>
<li><strong>Previous message:</strong> <a href="13877.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>In reply to:</strong> <a href="13869.php">Mike Dubman: "[OMPI devel] build failure in trunk"</a>
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
