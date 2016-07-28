<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 15:43:35 2014" -->
<!-- isoreceived="20140110204335" -->
<!-- sent="Fri, 10 Jan 2014 12:43:20 -0800" -->
<!-- isosent="20140110204320" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure" -->
<!-- id="36856581-D3D4-45E5-B7B0-286361AFD1D0_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15DqdP-eGYdgJ0HRk0iUTsWjUoDbQguAuPifwdwtyX7Jg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 15:43:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13719.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Previous message:</strong> <a href="13717.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>In reply to:</strong> <a href="13717.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13721.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Reply:</strong> <a href="13721.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bingo - the proc can't send a message to the daemon to tell it &quot;i'm alive and need my nidmap data&quot;. I suspect we'll find that your headnode isn't allowing us to open a socket for communication between two processes on it, and we don't have (yet) a pipe-like mechanism to replace it.
<br>
<p>Can verify that by putting &quot;-mca oob_base_verbose 10&quot; on the cmd line - should see the oob indicate that it fails to make the connection back to the daemon
<br>
<p><p>On Jan 10, 2014, at 12:33 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configuring using a proper --with-tm=... I find that I *can* run a singleton in an allocation (&quot;qsub -I -l nodes=1 ....&quot;).
</span><br>
<span class="quotelev1">&gt; The case of a singleton on the front end is still failing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The verbose output using &quot;-mca state_base_verbose 5 -mca plm_base_verbose 5 -mca odls_base_verbose 5&quot; is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 10, 2014 at 12:12 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 10, 2014, at 11:04 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 10, 2014 at 10:41 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 10, 2014 at 10:08 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; ??? that was it? Was this built with --enable-debug?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Nope, I missed --enable-debug.  Will try again.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OK, Take-2 below.
</span><br>
<span class="quotelev2">&gt;&gt; There is an obvious &quot;recipient list is empty!&quot; in the output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That one is correct and expected - all it means is that you are running on only one node, so mpirun doesn't need to relay messages to another daemon
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -mca btl sm,self -np 2 -mca grpcomm_base_verbose 5 -mca orte_nidmap_verbose 10 examples/ring_c'
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21200] mca:base:select:(grpcomm) Querying component [bad]
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21200] mca:base:select:(grpcomm) Query of component [bad] set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21200] mca:base:select:(grpcomm) Selected component [bad]
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21200] [[45961,0],0] grpcomm:base:receive start comm
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21200] [[45961,0],0] orte:util:encode_nidmap
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21200] [[45961,0],0] grpcomm:bad:xcast sent to job [45961,0] tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21200] [[45961,0],0] grpcomm:xcast:recv: with 1135 bytes
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21200] [[45961,0],0] orte:daemon:send_relay - recipient list is empty!
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21200] [[45961,0],0] orte:util:encode_nidmap
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21200] [[45961,0],0] orte:util:build:daemon:nidmap packed 55 bytes
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21200] [[45961,0],0] PROGRESSING COLL id 0
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21200] [[45961,0],0] ALL LOCAL PROCS FOR JOB [45961,1] CONTRIBUTE 2
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21200] [[45961,0],0] PROGRESSING COLL id 1
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21200] [[45961,0],0] ALL LOCAL PROCS FOR JOB [45961,1] CONTRIBUTE 2
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21200] [[45961,0],0] PROGRESSING COLL id 2
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21200] [[45961,0],0] ALL LOCAL PROCS FOR JOB [45961,1] CONTRIBUTE 2
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21202] mca:base:select:(grpcomm) Querying component [bad]
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21202] mca:base:select:(grpcomm) Query of component [bad] set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21202] mca:base:select:(grpcomm) Selected component [bad]
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21202] [[45961,1],0] grpcomm:base:receive start comm
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21202] [[45961,1],0] ORTE_ERROR_LOG: Data for specified key not found in file /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-trunk-linux-x86_64-gcc/openmpi-1.9a1r30215/orte/runtime/orte_globals.c at line 503
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21203] mca:base:select:(grpcomm) Querying component [bad]
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21203] mca:base:select:(grpcomm) Query of component [bad] set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21203] mca:base:select:(grpcomm) Selected component [bad]
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21203] [[45961,1],1] grpcomm:base:receive start comm
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:21203] [[45961,1],1] ORTE_ERROR_LOG: Data for specified key not found in file /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-trunk-linux-x86_64-gcc/openmpi-1.9a1r30215/orte/runtime/orte_globals.c at line 503
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is very weird - it appears that your procs are looking for hostname data prior to receiving the necessary data. Let's try jacking up the debug, I guess - add &quot;-mca state_base_verbose 5 -mca plm_base_verbose 5 -mca odls_base_verbose 5&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry that will be rather wordy, but I don't understand the ordering you show above. It's like your procs are skipping a bunch of steps in the startup procedure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Out of curiosity, if you do have an allocation on run on it, does it work?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; &lt;log-fe.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13718/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13719.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Previous message:</strong> <a href="13717.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>In reply to:</strong> <a href="13717.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13721.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Reply:</strong> <a href="13721.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
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
