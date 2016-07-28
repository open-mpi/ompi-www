<?
$subject_val = "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 11:04:41 2016" -->
<!-- isoreceived="20160219160441" -->
<!-- sent="Sat, 20 Feb 2016 01:04:36 +0900" -->
<!-- isosent="20160219160436" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris" -->
<!-- id="CAAkFZ5v-LHtD5jpmNmV4WPcGUyzSk-s88g0Mp2yNt7ULkwDZSA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DC1886C5-8C5D-4294-A757-72EFEA16A9C1_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-19 11:04:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28553.php">Dave Love: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28551.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28551.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28553.php">Dave Love: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Reply:</strong> <a href="28553.php">Dave Love: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
a field from orte_iof_proc_t is named &quot;stdin&quot;
<br>
could stdin be #defined under the hood in Solaris ?
<br>
if so, then renaming this field should do the trick.
<br>
<p>I will double check that on Monday
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, February 20, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I&#226;&#128;&#153;m afraid I have no idea what Solaris is complaining about here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 19, 2016, at 6:52 AM, Siegmar Gross &lt;
</span><br>
<span class="quotelev1">&gt; Siegmar.Gross_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; yesterday I tried to build openmpi-dev-3498-gdc4d3ed on my
</span><br>
<span class="quotelev2">&gt; &gt; machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux
</span><br>
<span class="quotelev2">&gt; &gt; 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. I was successful on
</span><br>
<span class="quotelev2">&gt; &gt; my Linux machine, but I got the following errors on both Solaris
</span><br>
<span class="quotelev2">&gt; &gt; platforms.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sun C 5.13:
</span><br>
<span class="quotelev2">&gt; &gt; ===========
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  CC       base/ess_base_std_tool.lo
</span><br>
<span class="quotelev2">&gt; &gt; &quot;../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/iof/base/base.h&quot;, line
</span><br>
<span class="quotelev1">&gt; 116: syntax error before or at: &amp;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/iof/base/base.h&quot;, line
</span><br>
<span class="quotelev1">&gt; 116: warning: syntax requires &quot;;&quot; after last struct/union member
</span><br>
<span class="quotelev2">&gt; &gt; &quot;../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/iof/base/base.h&quot;, line
</span><br>
<span class="quotelev1">&gt; 121: cannot recover from previous errors
</span><br>
<span class="quotelev2">&gt; &gt; cc: acomp failed for
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [base/ess_base_std_tool.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-master/openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_cc/orte/mca/ess'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-master/openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_cc/orte'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_cc 50
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; GCC-5.2.0:
</span><br>
<span class="quotelev2">&gt; &gt; ==========
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  CC       base/ess_base_std_tool.lo
</span><br>
<span class="quotelev2">&gt; &gt; In file included from /usr/include/stdio.h:66:0,
</span><br>
<span class="quotelev2">&gt; &gt;                 from
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/ess/base/ess_base_std_tool.c:29:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/iof/base/base.h:116:22:
</span><br>
<span class="quotelev1">&gt; error: expected identifier or '(' before '&amp;' token
</span><br>
<span class="quotelev2">&gt; &gt;     orte_iof_sink_t *stdin;
</span><br>
<span class="quotelev2">&gt; &gt;                      ^
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [base/ess_base_std_tool.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-master/openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_gcc/orte/mca/ess'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-master/openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_gcc/orte'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_gcc 50
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would be grateful if somebody can fix the problem. Thank you
</span><br>
<span class="quotelev2">&gt; &gt; very much for any help in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28550.php">http://www.open-mpi.org/community/lists/users/2016/02/28550.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28551.php">http://www.open-mpi.org/community/lists/users/2016/02/28551.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28552/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28553.php">Dave Love: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28551.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28551.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28553.php">Dave Love: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Reply:</strong> <a href="28553.php">Dave Love: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
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
