<?
$subject_val = "Re: [OMPI devel] orte-dvm / orte-submit race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 20:51:06 2015" -->
<!-- isoreceived="20151021005106" -->
<!-- sent="Tue, 20 Oct 2015 17:50:56 -0700" -->
<!-- isosent="20151021005056" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-dvm / orte-submit race condition" -->
<!-- id="7C3A6641-5036-48BE-A9CE-B3347DCB42FB_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3441B151-939E-47E7-9B02-C652D9297AE9_at_rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte-dvm / orte-submit race condition<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-20 20:50:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18221.php">Gilles Gouaillardet: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>Previous message:</strong> <a href="18219.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>In reply to:</strong> <a href="18188.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18261.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18261.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Mark
<br>
<p>Can you do me a favor? I&#226;&#128;&#153;m totally buried, but I have been able to replicate this on my machine, so it is a definite race condition.
<br>
<p>What would really help me is if you could do the following:
<br>
<p>* start the orte-dvm with the &#226;&#128;&#156;&#226;&#128;&#148;mca state_base_verbose 10&#226;&#128;&#157; option, and capture stdout/stderr in a file
<br>
<p>* run your test program - I don&#226;&#128;&#153;t think you need all 40 submits, so you might try a smaller number just to make life easier
<br>
<p>* reorganize the output, organizing the resulting state machine debug output according to the job. You&#226;&#128;&#153;ll see output like this:
<br>
<p>[bend001:22303] [[55873,0],0] state:base:check_job_completed job [55873,2] is terminated (1 vs 1 [NORMALLY TERMINATED])
<br>
<p>[bend001:22303] [[55873,0],0] ACTIVATE JOB [55873,32] STATE NOTIFY COMPLETED AT state_dvm.c:415
<br>
<p>etc. If you could collect all the state output for each job, it would really help me to identify the last state each job reached. I could then see what state the jobs that aren&#226;&#128;&#153;t being properly marked as terminated finished in.
<br>
<p>I hate to ask it of you - I just don&#226;&#128;&#153;t have time to do all that sorting right now. If you&#226;&#128;&#153;d prefer to decline, feel free to do so and I&#226;&#128;&#153;ll attack this when I next have a chance.
<br>
<p>Ralph
<br>
<p><p><span class="quotelev1">&gt; On Oct 15, 2015, at 3:50 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 16 Oct 2015, at 0:44 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm....ok. I'll have to look at it this weekend when I return from travel. Can you please send me your test program so I can try to locally reproduce it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, thanks Ralph.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Start the DVM with: orte-dvm --report-uri dvm_uri --debug-devel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And then run the following script. The &quot;serial /bin/date&quot; and the &quot;parallel sleep 1&quot; are fine. The &quot;parallel /bin/date&quot; shows the hanging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for i in $(seq 42):
</span><br>
<span class="quotelev1">&gt; do
</span><br>
<span class="quotelev1">&gt;    # GOOD
</span><br>
<span class="quotelev1">&gt;    #orte-submit --hnp file:dvm_uri -np 1 /bin/date
</span><br>
<span class="quotelev1">&gt;    #orte-submit --hnp file:dvm_uri -np 1 /bin/sleep 1 &amp;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    # BAD
</span><br>
<span class="quotelev1">&gt;    orte-submit --hnp file:dvm_uri -np 1 /bin/date &amp;
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt; wait
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18188.php">http://www.open-mpi.org/community/lists/devel/2015/10/18188.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18220/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18221.php">Gilles Gouaillardet: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>Previous message:</strong> <a href="18219.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>In reply to:</strong> <a href="18188.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18261.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18261.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
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
