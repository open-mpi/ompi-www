<?
$subject_val = "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 10:11:14 2016" -->
<!-- isoreceived="20160219151114" -->
<!-- sent="Fri, 19 Feb 2016 07:11:10 -0800" -->
<!-- isosent="20160219151110" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris" -->
<!-- id="DC1886C5-8C5D-4294-A757-72EFEA16A9C1_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56C72C11.4010202_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-19 10:11:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28552.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28550.php">Siegmar Gross: "[OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28550.php">Siegmar Gross: "[OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28552.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Reply:</strong> <a href="28552.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;m afraid I have no idea what Solaris is complaining about here.
<br>
<p><span class="quotelev1">&gt; On Feb 19, 2016, at 6:52 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yesterday I tried to build openmpi-dev-3498-gdc4d3ed on my
</span><br>
<span class="quotelev1">&gt; machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux
</span><br>
<span class="quotelev1">&gt; 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. I was successful on
</span><br>
<span class="quotelev1">&gt; my Linux machine, but I got the following errors on both Solaris
</span><br>
<span class="quotelev1">&gt; platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sun C 5.13:
</span><br>
<span class="quotelev1">&gt; ===========
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  CC       base/ess_base_std_tool.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/iof/base/base.h&quot;, line 116: syntax error before or at: &amp;
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/iof/base/base.h&quot;, line 116: warning: syntax requires &quot;;&quot; after last struct/union member
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/iof/base/base.h&quot;, line 121: cannot recover from previous errors
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for ../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev1">&gt; make[2]: *** [base/ess_base_std_tool.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_cc/orte/mca/ess'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_cc/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_cc 50
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; GCC-5.2.0:
</span><br>
<span class="quotelev1">&gt; ==========
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  CC       base/ess_base_std_tool.lo
</span><br>
<span class="quotelev1">&gt; In file included from /usr/include/stdio.h:66:0,
</span><br>
<span class="quotelev1">&gt;                 from ../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/ess/base/ess_base_std_tool.c:29:
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/iof/base/base.h:116:22: error: expected identifier or '(' before '&amp;' token
</span><br>
<span class="quotelev1">&gt;     orte_iof_sink_t *stdin;
</span><br>
<span class="quotelev1">&gt;                      ^
</span><br>
<span class="quotelev1">&gt; make[2]: *** [base/ess_base_std_tool.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_gcc/orte/mca/ess'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_gcc/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_gcc 50
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody can fix the problem. Thank you
</span><br>
<span class="quotelev1">&gt; very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28550.php">http://www.open-mpi.org/community/lists/users/2016/02/28550.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28552.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28550.php">Siegmar Gross: "[OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28550.php">Siegmar Gross: "[OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28552.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Reply:</strong> <a href="28552.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
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
