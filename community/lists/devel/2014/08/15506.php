<?
$subject_val = "[OMPI devel] minor atomics nit";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 22:15:24 2014" -->
<!-- isoreceived="20140805021524" -->
<!-- sent="Mon, 4 Aug 2014 19:15:22 -0700" -->
<!-- isosent="20140805021522" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] minor atomics nit" -->
<!-- id="CAAvDA15A8JMme2G5BEAUesfd4yGuGYfVf=Yg25Jv2PibKi4efA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] minor atomics nit<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-04 22:15:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15507.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem enabled by default"</a>
<li><strong>Previous message:</strong> <a href="15505.php">Paul Hargrove: "[OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15516.php">Ralph Castain: "Re: [OMPI devel] minor atomics nit"</a>
<li><strong>Reply:</strong> <a href="15516.php">Ralph Castain: "Re: [OMPI devel] minor atomics nit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Running &quot;make dist&quot; on trunk I see:
<br>
<p>--&gt; Generating assembly for &quot;SPARC&quot; &quot;default-.text-.globl-:--.L-#-1-0-1-0-0&quot;
<br>
Could not open ../../../opal/asm/base/SPARC.asm: No such file or directory
<br>
<p>Which is apparent because the following lines were never removed
<br>
from opal/asm/asm-data.txt
<br>
<p># default compile mode on Solaris.  Evil.  equiv to about Sparc v8
<br>
SPARC   default-.text-.globl-:--.L-#-1-0-1-0-0  sparc-solaris
<br>
<p>README is clear about having dropped support for SPARC &lt; v8plus.
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15506/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15507.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem enabled by default"</a>
<li><strong>Previous message:</strong> <a href="15505.php">Paul Hargrove: "[OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15516.php">Ralph Castain: "Re: [OMPI devel] minor atomics nit"</a>
<li><strong>Reply:</strong> <a href="15516.php">Ralph Castain: "Re: [OMPI devel] minor atomics nit"</a>
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
