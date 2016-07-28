<?
$subject_val = "Re: [OMPI devel] Info about ORTE structure (Ralph Castain)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 17:56:14 2015" -->
<!-- isoreceived="20150611215614" -->
<!-- sent="Thu, 11 Jun 2015 14:56:09 -0700" -->
<!-- isosent="20150611215609" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Info about ORTE structure (Ralph Castain)" -->
<!-- id="9D08098F-ED0A-4C8E-A6C8-9C924FD79272_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CADf4hJL1uGNAtBPMXOF0p2vwBZm7h4fN1w-Dqm_tNe=f5jC-OQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Info about ORTE structure (Ralph Castain)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-11 17:56:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17495.php">Ralph Castain: "[OMPI devel] Unused var in OB1 on master"</a>
<li><strong>Previous message:</strong> <a href="17493.php">Federico Reghenzani: "Re: [OMPI devel] Info about ORTE structure (Ralph Castain)"</a>
<li><strong>In reply to:</strong> <a href="17493.php">Federico Reghenzani: "Re: [OMPI devel] Info about ORTE structure (Ralph Castain)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Jun 11, 2015, at 2:25 PM, Federico Reghenzani &lt;federico1.reghenzani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-06-11 18:00 GMT+02:00 &lt;devel-request_at_[hidden] &lt;mailto:devel-request_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; ---------- Messaggio inoltrato ----------
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Cc: &quot;gianmario.pozzi_at_[hidden] &lt;mailto:gianmario.pozzi_at_[hidden]&gt;&quot; &lt;gianmario.pozzi_at_[hidden] &lt;mailto:gianmario.pozzi_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thu, 11 Jun 2015 08:09:30 -0700
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Info about ORTE structure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 11, 2015, at 1:13 AM, Federico Reghenzani &lt;federico1.reghenzani_at_[hidden] &lt;mailto:federico1.reghenzani_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just some other questions on ras functions:
</span><br>
<span class="quotelev2">&gt;&gt; - we found this old thread &lt;<a href="http://www.open-mpi.org/community/lists/users/2007/04/2974.php">http://www.open-mpi.org/community/lists/users/2007/04/2974.php</a>&gt; in which you said that orte doesn't allow to spawn processes outside ras allocation (e.g. with MPI_Comm_spawn). Is it still  like that? So, allocate() function is called only once time?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not really - you can use an MPI_Info key to &#226;&#128;&#156;add-host&#226;&#128;&#157; or &#226;&#128;&#156;add-hostfile&#226;&#128;&#157;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, I've tried and I got:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ras:base:add_hosts checking add-host 192.168.0.2
</span><br>
<span class="quotelev1">&gt; (...)
</span><br>
<span class="quotelev1">&gt; ras:base:node_insert inserting 1 nodes
</span><br>
<span class="quotelev1">&gt; ras:base:node_insert node 192.168.0.2 slots 1
</span><br>
<span class="quotelev1">&gt; ras:base:allocate
</span><br>
<span class="quotelev1">&gt; ras:base:allocate allocation already read
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; It seems it ignores the ras module related to RM. I think this is the expected behaviour (in ompi_info I selected a specific host, so it doesn't needed to ask RM the hosts). So, can we assume ras:bbq:allocate() called only once, during the startup? (bbq is our ras module)
</span><br>
<p>Yes - your RM module can only be called once.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - where can we found the number of requested processes for the task? We searched in orte_job_t passed to allocate() but we cannot find it. We don't know if take it from argv (&quot;mpirun -np 4 ...&quot;) it's a good strategy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is in the orte_job_t:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* number of procs in this job */
</span><br>
<span class="quotelev1">&gt;     orte_vpid_t num_procs;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We tried, but it's always 0 in orte_job_t *jdata passed to allocate().
</span><br>
<p>It may not get filled in until later as the allocator shouldn&#226;&#128;&#153;t need that info. However, in cases where the user specified it on the cmd line, you can get that value by adding up all the num_procs in the orte_app_context_t objects within the orte_job_t.
<br>
<p>Note, though, that you will not be able to get a number when someone uses &#226;&#128;&#148;nper&lt;object&gt; or similar cmd line directives
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We really appreciate your help guys :)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Federico Reghenzani
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2015-04-13 21:08 GMT+02:00 Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Yes - but the processes must stay in the same location
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 13, 2015, at 12:02 PM, Federico Reghenzani &lt;federico1.reghenzani_at_[hidden] &lt;mailto:federico1.reghenzani_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And, to workaround, is it possible to temporary suspend processes on a node and later resume it (requested by RM)?  I saw in the code that orted can receive SIGTSTP and SIGCONT to suspend/resume processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Federico Reghenzani
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2015-04-10 16:58 GMT+02:00 Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#226;&#128;&#153;m afraid not. The MPI job would not be very happy to suddenly lose some nodes during execution, and relocating MPI processes during execution is something we don&#226;&#128;&#153;t currently support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is work underway to integrate the RM more fully into that procedure so it could tell the MPI job to checkpoint, wait until that completed, terminate the job, and then fast-restart it on the new nodes - but that isn&#226;&#128;&#153;t here yet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 10, 2015, at 7:54 AM, Federico Reghenzani &lt;federico1.reghenzani_at_[hidden] &lt;mailto:federico1.reghenzani_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The RM can ask for deallocation of some nodes?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For example, mpirun asks to the RM which resources are available (let node1, node2, node3) and spawns orted in the nodes. After some time during the elaboration, can the RM ask to deassign node3 or  reassign jobs on node3 to node4?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Federico Reghenzani
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2015-03-26 18:09:22 GMT+06:00 Artem Polyakov &lt;artpol84_at_[hidden]&gt;:  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; P.S. also check ESS (orte/mca/ess) for environment setup. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2015-03-26 18:06 GMT+06:00 Artem Polyakov &lt;artpol84_at_[hidden]&gt;: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; 2015-03-26 17:58 GMT+06:00 Gianmario Pozzi &lt;pozzigmario_at_[hidden]&gt;: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Hi everyone, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; I'm an italian M.Sc. student in Computer Engineering at Politecnico di 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Milano. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; My team and I are trying to integrate OpenMPI with a real time resource 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; manager written by a group of students named BBQ ( 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; <a href="http://bosp.dei.polimi.it/">http://bosp.dei.polimi.it/</a> &lt;<a href="http://bosp.dei.polimi.it/">http://bosp.dei.polimi.it/</a>&gt; ). We are encountering some troubles, though. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Our main issue is to understand how ORTE interacts with the resource 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; manager, which parts of the code (if any) are executed on the &quot;slave&quot; nodes 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; and which ones on the &quot;master&quot;. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; We spent some time looking at the source code but we still have many 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; doubts. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Hello, 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; check orte/mca/plm and orte/mca/ras 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; PLM - process lifecycle manager 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; RAS - resource allocation subsystem. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; In RAS mpirun detects under which RM it works and gets the allocation. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; in PLM spawn of remote processes is done. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; mpirun spawns orted daemons on the slave nodes and all the rest is done 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; without RM intervention (IMHO). 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Thank you. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; _______________________________________________ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; devel mailing list 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; devel_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17157.php">http://www.open-mpi.org/community/lists/devel/2015/03/17157.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/03/17157.php">http://www.open-mpi.org/community/lists/devel/2015/03/17157.php</a>&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; &#195;&#144;&#194;&#161; &#195;&#144;&#194;&#163;&#195;&#144;&#194;&#178;&#195;&#144;&#194;&#176;&#195;&#144;&#194;&#182;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#189;&#195;&#144;&#194;&#184;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#188;, &#195;&#144;&#197;&#184;&#195;&#144;&#194;&#190;&#195;&#144;&#194;&#187;&#195;&#145; &#195;&#144;&#194;&#186;&#195;&#144;&#194;&#190;&#195;&#144;&#194;&#178; &#195;&#144; &#195;&#145;&#226;&#130;&#172;&#195;&#145;&#226;&#128;&#154;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#188; &#195;&#144;&#194;&#174;&#195;&#145;&#226;&#130;&#172;&#195;&#145;&#197;&#146;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#178;&#195;&#144;&#194;&#184;&#195;&#145;&#226;&#128;&#161; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Best regards, Artem Y. Polyakov 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#195;&#144;&#194;&#161; &#195;&#144;&#194;&#163;&#195;&#144;&#194;&#178;&#195;&#144;&#194;&#176;&#195;&#144;&#194;&#182;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#189;&#195;&#144;&#194;&#184;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#188;, &#195;&#144;&#197;&#184;&#195;&#144;&#194;&#190;&#195;&#144;&#194;&#187;&#195;&#145; &#195;&#144;&#194;&#186;&#195;&#144;&#194;&#190;&#195;&#144;&#194;&#178; &#195;&#144; &#195;&#145;&#226;&#130;&#172;&#195;&#145;&#226;&#128;&#154;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#188; &#195;&#144;&#194;&#174;&#195;&#145;&#226;&#130;&#172;&#195;&#145;&#197;&#146;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#178;&#195;&#144;&#194;&#184;&#195;&#145;&#226;&#128;&#161;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17210.php">http://www.open-mpi.org/community/lists/devel/2015/04/17210.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17210.php">http://www.open-mpi.org/community/lists/devel/2015/04/17210.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17211.php">http://www.open-mpi.org/community/lists/devel/2015/04/17211.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17211.php">http://www.open-mpi.org/community/lists/devel/2015/04/17211.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17215.php">http://www.open-mpi.org/community/lists/devel/2015/04/17215.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17215.php">http://www.open-mpi.org/community/lists/devel/2015/04/17215.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17216.php">http://www.open-mpi.org/community/lists/devel/2015/04/17216.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17216.php">http://www.open-mpi.org/community/lists/devel/2015/04/17216.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17491.php">http://www.open-mpi.org/community/lists/devel/2015/06/17491.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17491.php">http://www.open-mpi.org/community/lists/devel/2015/06/17491.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17493.php">http://www.open-mpi.org/community/lists/devel/2015/06/17493.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17494/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17495.php">Ralph Castain: "[OMPI devel] Unused var in OB1 on master"</a>
<li><strong>Previous message:</strong> <a href="17493.php">Federico Reghenzani: "Re: [OMPI devel] Info about ORTE structure (Ralph Castain)"</a>
<li><strong>In reply to:</strong> <a href="17493.php">Federico Reghenzani: "Re: [OMPI devel] Info about ORTE structure (Ralph Castain)"</a>
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
