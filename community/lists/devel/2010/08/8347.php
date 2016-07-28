<?
$subject_val = "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 12:05:25 2010" -->
<!-- isoreceived="20100825160525" -->
<!-- sent="Wed, 25 Aug 2010 09:05:02 -0700" -->
<!-- isosent="20100825160502" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)" -->
<!-- id="4C753F2E.4090901_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8CE472C4-1F22-4CA3-ABDF-628FA6345E18_at_open-mpi.org" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 12:05:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8348.php">Steve Wise: "[OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Previous message:</strong> <a href="8346.php">Rolf vandeVaart: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>In reply to:</strong> <a href="8345.php">Ralph Castain: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8352.php">George Bosilca: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Reply:</strong> <a href="8352.php">George Bosilca: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>&nbsp;&nbsp;This is seen when compiling Open MPI.  I suspect that gcc's analysis 
<br>
is seeing a free() call on a value it can prove did not come from 
<br>
malloc() (or equivalent).  However, if as you say the value is always 
<br>
NULL, then this would be a false alarm.
<br>
<p>-Paul
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Much appreciate all your testing!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quick question here: is this on compile, or were you trying to run something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We haven't seen this before, but I'm wondering if it is due to us failing to initialize an object's fields. If so, then it might be we don't see it because those fields usually default to zero (looks like NULL), but you might see it if they don't on your system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 24, 2010, at 10:19 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; With both recent RCs I get the following suspicious warnings from gcc-4.5.0 on Linux/ia64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.4.3rc1:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:963:5: warning: attempt to free a non-heap object 'ompi_mpi_comm_null'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:965:5: warning: attempt to free a non-heap object 'ompi_mpi_group_null'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:967:5: warning: attempt to free a non-heap object 'ompi_mpi_errors_are_fatal'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.5rc5:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:990:5: warning: attempt to free a non-heap object 'ompi_mpi_comm_null'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:992:5: warning: attempt to free a non-heap object 'ompi_mpi_group_null'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/dpm/orte/dpm_orte.c:994:5: warning: attempt to free a non-heap object 'ompi_mpi_errors_are_fatal'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt;   
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8348.php">Steve Wise: "[OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Previous message:</strong> <a href="8346.php">Rolf vandeVaart: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>In reply to:</strong> <a href="8345.php">Ralph Castain: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8352.php">George Bosilca: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Reply:</strong> <a href="8352.php">George Bosilca: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
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
