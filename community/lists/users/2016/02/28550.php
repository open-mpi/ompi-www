<?
$subject_val = "[OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 09:52:42 2016" -->
<!-- isoreceived="20160219145242" -->
<!-- sent="Fri, 19 Feb 2016 15:52:01 +0100" -->
<!-- isosent="20160219145201" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris" -->
<!-- id="56C72C11.4010202_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-19 09:52:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28551.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28549.php">Ralph Castain: "Re: [OMPI users] mpirun hanging after MPI_Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28551.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Reply:</strong> <a href="28551.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I tried to build openmpi-dev-3498-gdc4d3ed on my
<br>
machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux
<br>
12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. I was successful on
<br>
my Linux machine, but I got the following errors on both Solaris
<br>
platforms.
<br>
<p><p>Sun C 5.13:
<br>
===========
<br>
<p>&nbsp;&nbsp;&nbsp;CC       base/ess_base_std_tool.lo
<br>
&quot;../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/iof/base/base.h&quot;, line 116: syntax error before or at: &amp;
<br>
&quot;../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/iof/base/base.h&quot;, line 116: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/iof/base/base.h&quot;, line 121: cannot recover from previous errors
<br>
cc: acomp failed for ../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/ess/base/ess_base_std_tool.c
<br>
make[2]: *** [base/ess_base_std_tool.lo] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_cc/orte/mca/ess'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_cc/orte'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_cc 50
<br>
<p><p>GCC-5.2.0:
<br>
==========
<br>
<p>&nbsp;&nbsp;&nbsp;CC       base/ess_base_std_tool.lo
<br>
In file included from /usr/include/stdio.h:66:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/ess/base/ess_base_std_tool.c:29:
<br>
../../../../openmpi-dev-3498-gdc4d3ed/orte/mca/iof/base/base.h:116:22: error: expected identifier or '(' before '&amp;' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_iof_sink_t *stdin;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [base/ess_base_std_tool.lo] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_gcc/orte/mca/ess'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_gcc/orte'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-dev-3498-gdc4d3ed-SunOS.sparc.64_gcc 50
<br>
<p><p>I would be grateful if somebody can fix the problem. Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28551.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28549.php">Ralph Castain: "Re: [OMPI users] mpirun hanging after MPI_Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28551.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Reply:</strong> <a href="28551.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
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
