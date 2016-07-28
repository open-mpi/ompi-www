<?
$subject_val = "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 16 15:50:15 2011" -->
<!-- isoreceived="20110416195015" -->
<!-- sent="Sat, 16 Apr 2011 21:50:07 +0200" -->
<!-- isosent="20110416195007" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?" -->
<!-- id="4DA9F2EF.9030903_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4DA8F871.5060207_at_khubla.com" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-16 15:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16262.php">Damien: "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
<li><strong>Previous message:</strong> <a href="16260.php">Michael Di Domenico: "[OMPI users] Ofed v1.5.3?"</a>
<li><strong>In reply to:</strong> <a href="16259.php">Damien: "[OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16262.php">Damien: "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
<li><strong>Reply:</strong> <a href="16262.php">Damien: "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Damien,
<br>
<p>Which version of Intel MPI do you use? The only difference between 1.5.3 
<br>
and .1.52 I can tell is that 1.5.3 was built with Intel Fortran Composer 
<br>
XE 2011. That might be the reason of the problem.
<br>
<p>Shiqing
<br>
<p>On 4/16/2011 4:01 AM, Damien wrote:
<br>
<span class="quotelev1">&gt; Hiya,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tested the 1.5.3 binaries and my link pass broke.  Using 1.5.3 
</span><br>
<span class="quotelev1">&gt; I get unresolved externals on things like _MPI_NULL_COPY_FN.  On 
</span><br>
<span class="quotelev1">&gt; 1.5.2.2 it's fine.  I did a dumpbin on libmpi.lib for both versions, 
</span><br>
<span class="quotelev1">&gt; and in 1.5.3 there's upper-case symbols for _OMPI_C_MPI_NULL_COPY_FN, 
</span><br>
<span class="quotelev1">&gt; but not _MPI_NULL_COPY_FN.  In the 1.5.2.2 libmpi.lib there's symbols 
</span><br>
<span class="quotelev1">&gt; for both.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
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
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16262.php">Damien: "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
<li><strong>Previous message:</strong> <a href="16260.php">Michael Di Domenico: "[OMPI users] Ofed v1.5.3?"</a>
<li><strong>In reply to:</strong> <a href="16259.php">Damien: "[OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16262.php">Damien: "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
<li><strong>Reply:</strong> <a href="16262.php">Damien: "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
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
