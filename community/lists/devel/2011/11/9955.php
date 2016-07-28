<?
$subject_val = "Re: [OMPI devel] debugger changes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 17:57:11 2011" -->
<!-- isoreceived="20111108225711" -->
<!-- sent="Tue, 08 Nov 2011 14:56:45 -0800" -->
<!-- isosent="20111108225645" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] debugger changes" -->
<!-- id="4EB9B3AD.1070108_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2B714EF2-56D4-4899-8C89-7F2B32132785_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] debugger changes<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 17:56:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9956.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9954.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
<li><strong>In reply to:</strong> <a href="9954.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9957.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
<li><strong>Reply:</strong> <a href="9957.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
<li><strong>Reply:</strong> <a href="9959.php">Ralph Castain: "Re: [OMPI devel] debugger changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In theory, might a sufficiently smart compiler and linker eliminate some 
<br>
MPIR_* variables after optimization?  If that could potentially be true, 
<br>
then perhaps the volatile qualifier would prevent such a removal, which 
<br>
would break the existence check(s) by the debugger?  Just a thought.
<br>
<p>-Paul
<br>
<p>On 11/8/2011 2:46 PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; This value is not even read by the debugger. It only check for it's existence in the startup process, so I guess we're safe here as well.
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
<li><strong>Next message:</strong> <a href="9956.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9954.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
<li><strong>In reply to:</strong> <a href="9954.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9957.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
<li><strong>Reply:</strong> <a href="9957.php">George Bosilca: "Re: [OMPI devel] debugger changes"</a>
<li><strong>Reply:</strong> <a href="9959.php">Ralph Castain: "Re: [OMPI devel] debugger changes"</a>
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
