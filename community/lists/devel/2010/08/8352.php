<?
$subject_val = "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 13:25:11 2010" -->
<!-- isoreceived="20100825172511" -->
<!-- sent="Wed, 25 Aug 2010 13:25:06 -0400" -->
<!-- isosent="20100825172506" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)" -->
<!-- id="384AFFD8-A6D5-4A09-83A1-3C5593B4A76A_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C753F2E.4090901_at_lbl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 13:25:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8353.php">Steve Wise: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Previous message:</strong> <a href="8351.php">George Bosilca: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>In reply to:</strong> <a href="8347.php">Paul H. Hargrove: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8354.php">Jeff Squyres: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Reply:</strong> <a href="8354.php">Jeff Squyres: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In this particular case the compiler is both right and wrong. It is right to complain, because as Paul pointed out, there is a free on a non-malloced object (ompi_mpi_comm_null). However, this free is protected by the reference count going to zero, and this should never happens in this particular piece of code (hopefully!).
<br>
<p>What we really need here is one of the following:
<br>
1) to simply decrease the reference count once, to signal that ompi_comm_parent is not using the ompi_mpi_comm_null anymore. Unfortunately, we don't have such a macro.
<br>
<p>2) As, in this code, we handle only statically allocated objects remove the OBJ_RELEASE from the dyn_init code, and their counterpart (OBJ_RETAIN) in the comm_init.c:166.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Aug 25, 2010, at 12:05 , Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is seen when compiling Open MPI.  I suspect that gcc's analysis is seeing a free() call on a value it can prove did not come from malloc() (or equivalent).  However, if as you say the value is always NULL, then this would be a false alarm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Much appreciate all your testing!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Quick question here: is this on compile, or were you trying to run something?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We haven't seen this before, but I'm wondering if it is due to us failing to initialize an object's fields. If so, then it might be we don't see it because those fields usually default to zero (looks like NULL), but you might see it if they don't on your system.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 24, 2010, at 10:19 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With both recent RCs I get the following suspicious warnings from gcc-4.5.0 on Linux/ia64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.4.3rc1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:963:5: warning: attempt to free a non-heap object 'ompi_mpi_comm_null'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:965:5: warning: attempt to free a non-heap object 'ompi_mpi_group_null'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:967:5: warning: attempt to free a non-heap object 'ompi_mpi_errors_are_fatal'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.5rc5:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:990:5: warning: attempt to free a non-heap object 'ompi_mpi_comm_null'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:992:5: warning: attempt to free a non-heap object 'ompi_mpi_group_null'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:994:5: warning: attempt to free a non-heap object 'ompi_mpi_errors_are_fatal'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;  
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
<li><strong>Next message:</strong> <a href="8353.php">Steve Wise: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Previous message:</strong> <a href="8351.php">George Bosilca: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>In reply to:</strong> <a href="8347.php">Paul H. Hargrove: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8354.php">Jeff Squyres: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Reply:</strong> <a href="8354.php">Jeff Squyres: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
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
