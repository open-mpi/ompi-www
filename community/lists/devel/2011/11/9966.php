<?
$subject_val = "[OMPI devel] VT issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 14 12:22:27 2011" -->
<!-- isoreceived="20111114172227" -->
<!-- sent="Mon, 14 Nov 2011 10:22:19 -0700" -->
<!-- isosent="20111114172219" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] VT issue" -->
<!-- id="78418F17-5762-436C-8399-E0C97D9A032D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] VT issue<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-14 12:22:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9967.php">George Bosilca: "Re: [OMPI devel] VT issue"</a>
<li><strong>Previous message:</strong> <a href="9965.php">Y.MATSUMOTO: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9967.php">George Bosilca: "Re: [OMPI devel] VT issue"</a>
<li><strong>Reply:</strong> <a href="9967.php">George Bosilca: "Re: [OMPI devel] VT issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi VT-folks
<br>
<p>I'm building the devel trunk on a Mac, using a vanilla configure line: ./configure --prefix=foo. When I try to compile, I get this error:
<br>
<p>undefined symbols for architecture x86_64:
<br>
&nbsp;&nbsp;&quot;___builtin_expect&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main.omp_fn.0 in otfprofile-otfprofile.o
<br>
ld: symbol(s) not found for architecture x86_64
<br>
collect2: ld returned 1 exit status
<br>
<p><p>I believe this comes from your VT code. Can you take a look?
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9967.php">George Bosilca: "Re: [OMPI devel] VT issue"</a>
<li><strong>Previous message:</strong> <a href="9965.php">Y.MATSUMOTO: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9967.php">George Bosilca: "Re: [OMPI devel] VT issue"</a>
<li><strong>Reply:</strong> <a href="9967.php">George Bosilca: "Re: [OMPI devel] VT issue"</a>
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
