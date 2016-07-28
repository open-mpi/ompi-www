<?
$subject_val = "[OMPI devel] 1.7.4rc: MIPS64 atomics tests fail";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 21 00:38:59 2014" -->
<!-- isoreceived="20140121053859" -->
<!-- sent="Mon, 20 Jan 2014 21:38:56 -0800" -->
<!-- isosent="20140121053856" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc: MIPS64 atomics tests fail" -->
<!-- id="CAAvDA16gpFYQ8rjs0WWnAKD4ub9pVYMz=-QhEG4S=J1_jPJVJg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-21 00:38:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13823.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Previous message:</strong> <a href="13821.php">Josh Hursey: "Re: [OMPI devel] callback debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13826.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail"</a>
<li><strong>Reply:</strong> <a href="13826.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building a recent (1.7.4rc2r30303) v1.7 tarball on a (QEMU-emulated) MIPS64
<br>
system I find that the opal atomics test fail.
<br>
<p>Applying the &quot;for trunk&quot; patch I attached to ticket #3039 roughly 1 year
<br>
ago resolves the problems for me.  I suppose it would be great if at least
<br>
one person with real MIPS h/w could verify.
<br>
<p>As far as I am concerned there is no &quot;pressure&quot; to push this into 1.7.4 if
<br>
time is tight.  I am just (re)testing this platform and reporting the
<br>
results for completeness.
<br>
<p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13822/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13823.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Previous message:</strong> <a href="13821.php">Josh Hursey: "Re: [OMPI devel] callback debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13826.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail"</a>
<li><strong>Reply:</strong> <a href="13826.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail"</a>
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
