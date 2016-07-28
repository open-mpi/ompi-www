<?
$subject_val = "Re: [OMPI devel] Info about ORTE structure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 04:13:41 2015" -->
<!-- isoreceived="20150611081341" -->
<!-- sent="Thu, 11 Jun 2015 10:13:35 +0200" -->
<!-- isosent="20150611081335" -->
<!-- name="Federico Reghenzani" -->
<!-- email="federico1.reghenzani_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Info about ORTE structure" -->
<!-- id="CADf4hJL+hB8S3ucnWfQNXgtijUsg4HWu4-XB4ckmfSVTEv=DPw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6B6F6CE0-FBF6-4545-96E6-4AA1D41CD681_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Info about ORTE structure<br>
<strong>From:</strong> Federico Reghenzani (<em>federico1.reghenzani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-11 04:13:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17492.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>Previous message:</strong> <a href="17490.php">Jose, Jithin: "Re: [OMPI devel] master seg fault in CM PML"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17216.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17492.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>Reply:</strong> <a href="17492.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just some other questions on ras functions:
<br>
- we found this old thread
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/users/2007/04/2974.php">http://www.open-mpi.org/community/lists/users/2007/04/2974.php</a>&gt; in
<br>
which you said that orte doesn't allow to spawn processes outside ras
<br>
allocation (e.g. with MPI_Comm_spawn). Is it still  like that? So,
<br>
allocate() function is called only once time?
<br>
- where can we found the number of requested processes for the task? We
<br>
searched in *orte_job_t* passed to allocate() but we cannot find it. We
<br>
don't know if take it from argv (&quot;mpirun -np 4 ...&quot;) it's a good strategy.
<br>
<p><p>We really appreciate your help guys :)
<br>
<p>Cheers,
<br>
Federico Reghenzani
<br>
<p>2015-04-13 21:08 GMT+02:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Yes - but the processes must stay in the same location
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 13, 2015, at 12:02 PM, Federico Reghenzani &lt;
</span><br>
<span class="quotelev1">&gt; federico1.reghenzani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And, to workaround, is it possible to temporary suspend processes on a
</span><br>
<span class="quotelev1">&gt; node and later resume it (requested by RM)?  I saw in the code that orted
</span><br>
<span class="quotelev1">&gt; can receive SIGTSTP and SIGCONT to suspend/resume processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Federico Reghenzani
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-04-10 16:58 GMT+02:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;m afraid not. The MPI job would not be very happy to suddenly lose some
</span><br>
<span class="quotelev2">&gt;&gt; nodes during execution, and relocating MPI processes during execution is
</span><br>
<span class="quotelev2">&gt;&gt; something we don&#226;&#128;&#153;t currently support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is work underway to integrate the RM more fully into that procedure
</span><br>
<span class="quotelev2">&gt;&gt; so it could tell the MPI job to checkpoint, wait until that completed,
</span><br>
<span class="quotelev2">&gt;&gt; terminate the job, and then fast-restart it on the new nodes - but that
</span><br>
<span class="quotelev2">&gt;&gt; isn&#226;&#128;&#153;t here yet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 10, 2015, at 7:54 AM, Federico Reghenzani &lt;
</span><br>
<span class="quotelev2">&gt;&gt; federico1.reghenzani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The RM can ask for deallocation of some nodes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For example, mpirun asks to the RM which resources are available (let
</span><br>
<span class="quotelev2">&gt;&gt; node1, node2, node3) and spawns orted in the nodes. After some time during
</span><br>
<span class="quotelev2">&gt;&gt; the elaboration, can the RM ask to deassign node3 or  reassign jobs on
</span><br>
<span class="quotelev2">&gt;&gt; node3 to node4?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Federico Reghenzani
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2015-03-26 18:09:22 GMT+06:00 Artem Polyakov &lt;artpol84_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P.S. also check ESS (orte/mca/ess) for environment setup.
</span><br>
<span class="quotelev2">&gt;&gt; 2015-03-26 18:06 GMT+06:00 Artem Polyakov &lt;artpol84_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2015-03-26 17:58 GMT+06:00 Gianmario Pozzi &lt;pozzigmario_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hi everyone,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I'm an italian M.Sc. student in Computer Engineering at Politecnico di
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Milano.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; My team and I are trying to integrate OpenMPI with a real time
</span><br>
<span class="quotelev2">&gt;&gt; resource
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; manager written by a group of students named BBQ (
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://bosp.dei.polimi.it/">http://bosp.dei.polimi.it/</a> ). We are encountering some troubles,
</span><br>
<span class="quotelev2">&gt;&gt; though.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Our main issue is to understand how ORTE interacts with the resource
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; manager, which parts of the code (if any) are executed on the &quot;slave&quot;
</span><br>
<span class="quotelev2">&gt;&gt; nodes
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; and which ones on the &quot;master&quot;.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; We spent some time looking at the source code but we still have many
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; doubts.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; check orte/mca/plm and orte/mca/ras
</span><br>
<span class="quotelev3">&gt;&gt; &gt; PLM - process lifecycle manager
</span><br>
<span class="quotelev3">&gt;&gt; &gt; RAS - resource allocation subsystem.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; In RAS mpirun detects under which RM it works and gets the allocation.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; in PLM spawn of remote processes is done.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun spawns orted daemons on the slave nodes and all the rest is done
</span><br>
<span class="quotelev3">&gt;&gt; &gt; without RM intervention (IMHO).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thank you.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17157.php">http://www.open-mpi.org/community/lists/devel/2015/03/17157.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#195;&#144;&#194;&#161; &#195;&#144;&#194;&#163;&#195;&#144;&#194;&#178;&#195;&#144;&#194;&#176;&#195;&#144;&#194;&#182;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#189;&#195;&#144;&#194;&#184;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#188;, &#195;&#144;&#197;&#184;&#195;&#144;&#194;&#190;&#195;&#144;&#194;&#187;&#195;&#145; &#195;&#144;&#194;&#186;&#195;&#144;&#194;&#190;&#195;&#144;&#194;&#178; &#195;&#144; &#195;&#145;&#226;&#130;&#172;&#195;&#145;&#226;&#128;&#154;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#188; &#195;&#144;&#194;&#174;&#195;&#145;&#226;&#130;&#172;&#195;&#145;&#197;&#146;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#178;&#195;&#144;&#194;&#184;&#195;&#145;&#226;&#128;&#161;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#195;&#144;&#194;&#161; &#195;&#144;&#194;&#163;&#195;&#144;&#194;&#178;&#195;&#144;&#194;&#176;&#195;&#144;&#194;&#182;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#189;&#195;&#144;&#194;&#184;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#188;, &#195;&#144;&#197;&#184;&#195;&#144;&#194;&#190;&#195;&#144;&#194;&#187;&#195;&#145; &#195;&#144;&#194;&#186;&#195;&#144;&#194;&#190;&#195;&#144;&#194;&#178; &#195;&#144; &#195;&#145;&#226;&#130;&#172;&#195;&#145;&#226;&#128;&#154;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#188; &#195;&#144;&#194;&#174;&#195;&#145;&#226;&#130;&#172;&#195;&#145;&#197;&#146;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#178;&#195;&#144;&#194;&#184;&#195;&#145;&#226;&#128;&#161;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17210.php">http://www.open-mpi.org/community/lists/devel/2015/04/17210.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17211.php">http://www.open-mpi.org/community/lists/devel/2015/04/17211.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17215.php">http://www.open-mpi.org/community/lists/devel/2015/04/17215.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17216.php">http://www.open-mpi.org/community/lists/devel/2015/04/17216.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17491/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17492.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>Previous message:</strong> <a href="17490.php">Jose, Jithin: "Re: [OMPI devel] master seg fault in CM PML"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17216.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17492.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>Reply:</strong> <a href="17492.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
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
