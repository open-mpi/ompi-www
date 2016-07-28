<?
$subject_val = "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 10:12:23 2010" -->
<!-- isoreceived="20100825141223" -->
<!-- sent="Wed, 25 Aug 2010 08:12:12 -0600" -->
<!-- isosent="20100825141212" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)" -->
<!-- id="8CE472C4-1F22-4CA3-ABDF-628FA6345E18_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C7499E0.9000907_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 10:12:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8346.php">Rolf vandeVaart: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Previous message:</strong> <a href="8344.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem"</a>
<li><strong>In reply to:</strong> <a href="8341.php">Paul H. Hargrove: "[OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8347.php">Paul H. Hargrove: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Reply:</strong> <a href="8347.php">Paul H. Hargrove: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul
<br>
<p>Much appreciate all your testing!
<br>
<p>Quick question here: is this on compile, or were you trying to run something?
<br>
<p>We haven't seen this before, but I'm wondering if it is due to us failing to initialize an object's fields. If so, then it might be we don't see it because those fields usually default to zero (looks like NULL), but you might see it if they don't on your system.
<br>
<p>Ralph
<br>
<p>On Aug 24, 2010, at 10:19 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; With both recent RCs I get the following suspicious warnings from gcc-4.5.0 on Linux/ia64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.4.3rc1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:963:5: warning: attempt to free a non-heap object 'ompi_mpi_comm_null'
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:965:5: warning: attempt to free a non-heap object 'ompi_mpi_group_null'
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:967:5: warning: attempt to free a non-heap object 'ompi_mpi_errors_are_fatal'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.5rc5:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:990:5: warning: attempt to free a non-heap object 'ompi_mpi_comm_null'
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:992:5: warning: attempt to free a non-heap object 'ompi_mpi_group_null'
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:994:5: warning: attempt to free a non-heap object 'ompi_mpi_errors_are_fatal'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8346.php">Rolf vandeVaart: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Previous message:</strong> <a href="8344.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem"</a>
<li><strong>In reply to:</strong> <a href="8341.php">Paul H. Hargrove: "[OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8347.php">Paul H. Hargrove: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Reply:</strong> <a href="8347.php">Paul H. Hargrove: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
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
