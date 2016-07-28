<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 14:04:42 2014" -->
<!-- isoreceived="20140110190442" -->
<!-- sent="Fri, 10 Jan 2014 11:04:35 -0800" -->
<!-- isosent="20140110190435" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure" -->
<!-- id="CAAvDA17B7LKhnrA7ffNcEb-RNgB7i=v08U+x7ghg9wPg2v66Kg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA16oFmcjDsGv3q=R1PPkoF_XeB0V+WoGZ+TwajiyB=r_5g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 14:04:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13714.php">Paul Hargrove: "Re: [OMPI devel] Paul H build on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13712.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>In reply to:</strong> <a href="13712.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13715.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Reply:</strong> <a href="13715.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jan 10, 2014 at 10:41 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 10, 2014 at 10:08 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ??? that was it? Was this built with --enable-debug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nope, I missed --enable-debug.  Will try again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
OK, Take-2 below.
<br>
There is an obvious &quot;recipient list is empty!&quot; in the output.
<br>
<p>-Paul
<br>
<p>$ mpirun -mca btl sm,self -np 2 -mca grpcomm_base_verbose 5 -mca
<br>
orte_nidmap_verbose 10 examples/ring_c'
<br>
[cvrsvc01:21200] mca:base:select:(grpcomm) Querying component [bad]
<br>
[cvrsvc01:21200] mca:base:select:(grpcomm) Query of component [bad] set
<br>
priority to 10
<br>
[cvrsvc01:21200] mca:base:select:(grpcomm) Selected component [bad]
<br>
[cvrsvc01:21200] [[45961,0],0] grpcomm:base:receive start comm
<br>
[cvrsvc01:21200] [[45961,0],0] orte:util:encode_nidmap
<br>
[cvrsvc01:21200] [[45961,0],0] grpcomm:bad:xcast sent to job [45961,0] tag 1
<br>
[cvrsvc01:21200] [[45961,0],0] grpcomm:xcast:recv: with 1135 bytes
<br>
[cvrsvc01:21200] [[45961,0],0] orte:daemon:send_relay - recipient list is
<br>
empty!
<br>
[cvrsvc01:21200] [[45961,0],0] orte:util:encode_nidmap
<br>
[cvrsvc01:21200] [[45961,0],0] orte:util:build:daemon:nidmap packed 55 bytes
<br>
[cvrsvc01:21200] [[45961,0],0] PROGRESSING COLL id 0
<br>
[cvrsvc01:21200] [[45961,0],0] ALL LOCAL PROCS FOR JOB [45961,1] CONTRIBUTE
<br>
2
<br>
[cvrsvc01:21200] [[45961,0],0] PROGRESSING COLL id 1
<br>
[cvrsvc01:21200] [[45961,0],0] ALL LOCAL PROCS FOR JOB [45961,1] CONTRIBUTE
<br>
2
<br>
[cvrsvc01:21200] [[45961,0],0] PROGRESSING COLL id 2
<br>
[cvrsvc01:21200] [[45961,0],0] ALL LOCAL PROCS FOR JOB [45961,1] CONTRIBUTE
<br>
2
<br>
[cvrsvc01:21202] mca:base:select:(grpcomm) Querying component [bad]
<br>
[cvrsvc01:21202] mca:base:select:(grpcomm) Query of component [bad] set
<br>
priority to 10
<br>
[cvrsvc01:21202] mca:base:select:(grpcomm) Selected component [bad]
<br>
[cvrsvc01:21202] [[45961,1],0] grpcomm:base:receive start comm
<br>
[cvrsvc01:21202] [[45961,1],0] ORTE_ERROR_LOG: Data for specified key not
<br>
found in file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-trunk-linux-x86_64-gcc/openmpi-1.9a1r30215/orte/runtime/orte_globals.c
<br>
at line 503
<br>
[cvrsvc01:21203] mca:base:select:(grpcomm) Querying component [bad]
<br>
[cvrsvc01:21203] mca:base:select:(grpcomm) Query of component [bad] set
<br>
priority to 10
<br>
[cvrsvc01:21203] mca:base:select:(grpcomm) Selected component [bad]
<br>
[cvrsvc01:21203] [[45961,1],1] grpcomm:base:receive start comm
<br>
[cvrsvc01:21203] [[45961,1],1] ORTE_ERROR_LOG: Data for specified key not
<br>
found in file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-trunk-linux-x86_64-gcc/openmpi-1.9a1r30215/orte/runtime/orte_globals.c
<br>
at line 503
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13713/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13714.php">Paul Hargrove: "Re: [OMPI devel] Paul H build on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13712.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>In reply to:</strong> <a href="13712.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13715.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Reply:</strong> <a href="13715.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
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
