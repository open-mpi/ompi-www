<?
$subject_val = "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 16 16:01:44 2011" -->
<!-- isoreceived="20110416200144" -->
<!-- sent="Sat, 16 Apr 2011 14:01:35 -0600" -->
<!-- isosent="20110416200135" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?" -->
<!-- id="4DA9F59F.70703_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4DA9F2EF.9030903_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?<br>
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-16 16:01:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16263.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Previous message:</strong> <a href="16261.php">Shiqing Fan: "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
<li><strong>In reply to:</strong> <a href="16261.php">Shiqing Fan: "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shiqing,
<br>
<p>I'm using Composer XE2011 and Visual Studio 2008.  VS2008 is doing the 
<br>
linking.  I'll do a build of 1.5.3 myself and see how the symbols turn out.
<br>
<p>Damien
<br>
<p>On 16/04/2011 1:50 PM, Shiqing Fan wrote:
<br>
<span class="quotelev1">&gt; Hi Damien,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which version of Intel MPI do you use? The only difference between 
</span><br>
<span class="quotelev1">&gt; 1.5.3 and .1.52 I can tell is that 1.5.3 was built with Intel Fortran 
</span><br>
<span class="quotelev1">&gt; Composer XE 2011. That might be the reason of the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/16/2011 4:01 AM, Damien wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hiya,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just tested the 1.5.3 binaries and my link pass broke.  Using 1.5.3 
</span><br>
<span class="quotelev2">&gt;&gt; I get unresolved externals on things like _MPI_NULL_COPY_FN.  On 
</span><br>
<span class="quotelev2">&gt;&gt; 1.5.2.2 it's fine.  I did a dumpbin on libmpi.lib for both versions, 
</span><br>
<span class="quotelev2">&gt;&gt; and in 1.5.3 there's upper-case symbols for _OMPI_C_MPI_NULL_COPY_FN, 
</span><br>
<span class="quotelev2">&gt;&gt; but not _MPI_NULL_COPY_FN.  In the 1.5.2.2 libmpi.lib there's symbols 
</span><br>
<span class="quotelev2">&gt;&gt; for both.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16263.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Previous message:</strong> <a href="16261.php">Shiqing Fan: "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
<li><strong>In reply to:</strong> <a href="16261.php">Shiqing Fan: "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
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
