<?
$subject_val = "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket	#4240	dosen't work";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 22:42:58 2014" -->
<!-- isoreceived="20140212034258" -->
<!-- sent="Wed, 12 Feb 2014 12:42:37 +0900" -->
<!-- isosent="20140212034237" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;bind-to l3chace&amp;quot; with r30643 in ticket	#4240	dosen't work" -->
<!-- id="OFB65BC8F3.D4D9F9D0-ON49257C7D.00137D42-49257C7D.00147001_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B02C6B17-10CF-4D14-8BF3-187A2CF7E726_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket	#4240	dosen't work<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20&amp;amp;quot;bind-to%20l3chace&amp;amp;quot;%20with%20r30643%20in%20ticket	#4240	dosen't%20work"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-02-11 22:42:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23589.php">Brice Goglin: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>Previous message:</strong> <a href="23587.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work"</a>
<li><strong>In reply to:</strong> <a href="23587.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23589.php">Brice Goglin: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I understood. Actually speaking, so far I do not have a definite
<br>
problem about that. If I encounter some problems in future, I will tell
<br>
you.
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; Guess I disagree - it isn't a question of what the code can handle, but
</span><br>
rather user expectation. If you specify a definite number of cores for each
<br>
process, then we have to bind to core in order to
<br>
<span class="quotelev1">&gt; meet that directive. Binding to numa won't do it as the OS will continue
</span><br>
to schedule the proc on only one core at a time.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I think the current behavior is correct.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 11, 2014, at 7:13 PM, Tetsuya Mishima &lt;tmishima_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Your fix worked for me, thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; By the way, I noticed that &quot;bind-to obj&quot; is forcibly override by
</span><br>
&quot;bind-to core&quot;, when pe=N is specified.
<br>
<span class="quotelev2">&gt; &gt; This is just my opinion, but I think it's too conservative and a kind
</span><br>
of regression from the openmpi-1.6.5. For example, &quot;-map-by slot:pe=N
<br>
-bind-to numa&quot; looks
<br>
<span class="quotelev2">&gt; &gt; acceptable to me. Your round_robin_mapper is now robust enough to
</span><br>
handle it. The patch below would be better.  Please give it a try.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- orte/mca/rmaps/base/rmaps_base_frame.c.org	2014-02-11
</span><br>
17:34:36.000000000 +0900
<br>
<span class="quotelev2">&gt; &gt; +++ orte/mca/rmaps/base/rmaps_base_frame.c	2014-02-12
</span><br>
11:01:42.000000000 +0900
<br>
<span class="quotelev2">&gt; &gt; @@ -393,13 +393,13 @@
</span><br>
<span class="quotelev2">&gt; &gt;          * bind to those cpus - any other binding policy is an
</span><br>
<span class="quotelev2">&gt; &gt;          * error
</span><br>
<span class="quotelev2">&gt; &gt;          */
</span><br>
<span class="quotelev2">&gt; &gt; -        if (!(OPAL_BIND_GIVEN &amp; OPAL_GET_BINDING_POLICY
</span><br>
(opal_hwloc_binding_policy))) {
<br>
<span class="quotelev2">&gt; &gt; +        if (OPAL_BIND_TO_NONE == OPAL_GET_BINDING_POLICY
</span><br>
(opal_hwloc_binding_policy)) {
<br>
<span class="quotelev2">&gt; &gt;             if (opal_hwloc_use_hwthreads_as_cpus) {
</span><br>
<span class="quotelev2">&gt; &gt;                 OPAL_SET_BINDING_POLICY(opal_hwloc_binding_policy,
</span><br>
OPAL_BIND_TO_HWTHREAD);
<br>
<span class="quotelev2">&gt; &gt;             } else {
</span><br>
<span class="quotelev2">&gt; &gt;                 OPAL_SET_BINDING_POLICY(opal_hwloc_binding_policy,
</span><br>
OPAL_BIND_TO_CORE);
<br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt; -        } else {
</span><br>
<span class="quotelev2">&gt; &gt; +        } else if (OPAL_BIND_TO_L1CACHE &lt; OPAL_GET_BINDING_POLICY
</span><br>
(opal_hwloc_binding_policy)) {
<br>
<span class="quotelev2">&gt; &gt;             if (opal_hwloc_use_hwthreads_as_cpus) {
</span><br>
<span class="quotelev2">&gt; &gt;                 if (OPAL_BIND_TO_HWTHREAD != OPAL_GET_BINDING_POLICY
</span><br>
(opal_hwloc_binding_policy)) {
<br>
<span class="quotelev2">&gt; &gt;                     orte_show_help(&quot;help-orte-rmaps-base.txt&quot;,
</span><br>
&quot;mismatch-binding&quot;, true,
<br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Okay, I fixed it. Keep getting caught by a very, very unfortunate
</span><br>
design flaw in hwloc that forces you to treat cache's as a special case
<br>
that requires you to
<br>
<span class="quotelev2">&gt; &gt; call a different function. So you have to constantly protect function
</span><br>
calls into hwloc with &quot;if cache, call this one - else, call that one&quot;.
<br>
REALLY irritating, and
<br>
<span class="quotelev2">&gt; &gt; it caught us again here.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Should be fixed now in trunk now, set to go over to 1.7.5
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Feb 11, 2014, at 4:47 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Since the ticket #4240 has been already set as fixed, I'm sending
</span><br>
this
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; email to you. ( I don't konw I could add comments to the fixed
</span><br>
ticket)
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; When I tried to bind the process to l3chace, it didn't work like
</span><br>
below:
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (the host mangae has the normal topology - not inverted)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_manage openmpi-1.7.4]$ mpirun -np 2 -bind-to l3cache
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -report-bindings ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; No objects of the specified type were found on at least one node:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Type: Cache
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Node: manage
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The map cannot be done as specified.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;-bind-to l1cache/l2cahce&quot; doesn't work as well. At least, I
</span><br>
confirmed that
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the openmpi-1.7.4 works with &quot;-bind-to l3cache&quot;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima  tmishima_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23589.php">Brice Goglin: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>Previous message:</strong> <a href="23587.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work"</a>
<li><strong>In reply to:</strong> <a href="23587.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23589.php">Brice Goglin: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
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
