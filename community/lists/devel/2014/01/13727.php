<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 17:59:36 2014" -->
<!-- isoreceived="20140110225936" -->
<!-- sent="Fri, 10 Jan 2014 14:59:20 -0800" -->
<!-- isosent="20140110225920" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure" -->
<!-- id="6428CE6F-F4C8-4708-9CDE-14C4C66D2FCF_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16OoQ8EaiRK-dEwM6msNk_GNh_AZTvFBXm_NLWmmJZ6wQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-01-10 17:59:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13728.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Previous message:</strong> <a href="13726.php">Rolf vandeVaart: "[OMPI devel] NUMA bug in openib BTL device selection"</a>
<li><strong>In reply to:</strong> <a href="13725.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I *believe* oob can now support virtual interfaces, but can't swear to it - only very lightly tested on my box.
<br>
<p>I'll mark this in for resolving in 1.7.5
<br>
<p><p>On Jan 10, 2014, at 1:55 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since this turned out to be a matter of an unsupported system configuration, it is my opinion that this doesn't need to be addressed for 1.7.4 if it would cause any further delay.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, I noticed this system has lo and lo:0.
</span><br>
<span class="quotelev1">&gt; I know the TCP BTL doesn't support virtual interfaces (trac ticket 3339).
</span><br>
<span class="quotelev1">&gt; So, I mention it here in case oob:tcp has similar issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 10, 2014 at 1:02 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 10, 2014, at 12:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is the front end of a production cluster at NERSC.
</span><br>
<span class="quotelev2">&gt;&gt; So, I would not be surprised if there is a fairly restrictive firewall configuration in place.
</span><br>
<span class="quotelev2">&gt;&gt; However, I could't find a way to query the configuration.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aha - indeed, that is the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The verbose output with (only) &quot;-mca oob_base_verbose 10&quot; is attached.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On a hunch, I tried adding &quot;-mca oob_tcp_if_include lo&quot; and IT WORKS!
</span><br>
<span class="quotelev2">&gt;&gt; Is there some reason why the loopback interface is not being used automatically for the single-host case?
</span><br>
<span class="quotelev2">&gt;&gt; That would seem to be a straight-forward solution to this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, we should do a better job of that - I'll take a look and see what can be done in the near term.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 10, 2014 at 12:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Bingo - the proc can't send a message to the daemon to tell it &quot;i'm alive and need my nidmap data&quot;. I suspect we'll find that your headnode isn't allowing us to open a socket for communication between two processes on it, and we don't have (yet) a pipe-like mechanism to replace it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can verify that by putting &quot;-mca oob_base_verbose 10&quot; on the cmd line - should see the oob indicate that it fails to make the connection back to the daemon
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 10, 2014, at 12:33 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configuring using a proper --with-tm=... I find that I *can* run a singleton in an allocation (&quot;qsub -I -l nodes=1 ....&quot;).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The case of a singleton on the front end is still failing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The verbose output using &quot;-mca state_base_verbose 5 -mca plm_base_verbose 5 -mca odls_base_verbose 5&quot; is attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Jan 10, 2014 at 12:12 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 10, 2014, at 11:04 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Jan 10, 2014 at 10:41 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Jan 10, 2014 at 10:08 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ??? that was it? Was this built with --enable-debug?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nope, I missed --enable-debug.  Will try again.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OK, Take-2 below.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is an obvious &quot;recipient list is empty!&quot; in the output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That one is correct and expected - all it means is that you are running on only one node, so mpirun doesn't need to relay messages to another daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -mca btl sm,self -np 2 -mca grpcomm_base_verbose 5 -mca orte_nidmap_verbose 10 examples/ring_c'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21200] mca:base:select:(grpcomm) Querying component [bad]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21200] mca:base:select:(grpcomm) Query of component [bad] set priority to 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21200] mca:base:select:(grpcomm) Selected component [bad]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21200] [[45961,0],0] grpcomm:base:receive start comm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21200] [[45961,0],0] orte:util:encode_nidmap
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21200] [[45961,0],0] grpcomm:bad:xcast sent to job [45961,0] tag 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21200] [[45961,0],0] grpcomm:xcast:recv: with 1135 bytes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21200] [[45961,0],0] orte:daemon:send_relay - recipient list is empty!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21200] [[45961,0],0] orte:util:encode_nidmap
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21200] [[45961,0],0] orte:util:build:daemon:nidmap packed 55 bytes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21200] [[45961,0],0] PROGRESSING COLL id 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21200] [[45961,0],0] ALL LOCAL PROCS FOR JOB [45961,1] CONTRIBUTE 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21200] [[45961,0],0] PROGRESSING COLL id 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21200] [[45961,0],0] ALL LOCAL PROCS FOR JOB [45961,1] CONTRIBUTE 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21200] [[45961,0],0] PROGRESSING COLL id 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21200] [[45961,0],0] ALL LOCAL PROCS FOR JOB [45961,1] CONTRIBUTE 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21202] mca:base:select:(grpcomm) Querying component [bad]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21202] mca:base:select:(grpcomm) Query of component [bad] set priority to 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21202] mca:base:select:(grpcomm) Selected component [bad]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21202] [[45961,1],0] grpcomm:base:receive start comm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21202] [[45961,1],0] ORTE_ERROR_LOG: Data for specified key not found in file /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-trunk-linux-x86_64-gcc/openmpi-1.9a1r30215/orte/runtime/orte_globals.c at line 503
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21203] mca:base:select:(grpcomm) Querying component [bad]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21203] mca:base:select:(grpcomm) Query of component [bad] set priority to 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21203] mca:base:select:(grpcomm) Selected component [bad]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21203] [[45961,1],1] grpcomm:base:receive start comm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cvrsvc01:21203] [[45961,1],1] ORTE_ERROR_LOG: Data for specified key not found in file /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-trunk-linux-x86_64-gcc/openmpi-1.9a1r30215/orte/runtime/orte_globals.c at line 503
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is very weird - it appears that your procs are looking for hostname data prior to receiving the necessary data. Let's try jacking up the debug, I guess - add &quot;-mca state_base_verbose 5 -mca plm_base_verbose 5 -mca odls_base_verbose 5&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry that will be rather wordy, but I don't understand the ordering you show above. It's like your procs are skipping a bunch of steps in the startup procedure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Out of curiosity, if you do have an allocation on run on it, does it work?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;log-fe.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; &lt;log-fe-2.bz2&gt;_______________________________________________
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13727/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13728.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Previous message:</strong> <a href="13726.php">Rolf vandeVaart: "[OMPI devel] NUMA bug in openib BTL device selection"</a>
<li><strong>In reply to:</strong> <a href="13725.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<!-- nextthread="start" -->
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
