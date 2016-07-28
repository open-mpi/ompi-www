<?
$subject_val = "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 22:12:59 2014" -->
<!-- isoreceived="20140212031259" -->
<!-- sent="Wed, 12 Feb 2014 12:13:04 +0900" -->
<!-- isosent="20140212031304" -->
<!-- name="Tetsuya Mishima" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;bind-to l3chace&amp;quot; with r30643 in ticket #4240	dosen't work" -->
<!-- id="201402120313.AA00005_at_MCML0096.jcity.maeda.co.jp" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E24BC350-2406-4810-8045-6036075C969A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work<br>
<strong>From:</strong> Tetsuya Mishima (<em>tmishima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-11 22:13:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23587.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work"</a>
<li><strong>Previous message:</strong> <a href="23585.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>In reply to:</strong> <a href="23585.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23587.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work"</a>
<li><strong>Reply:</strong> <a href="23587.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your fix worked for me, thanks.
<br>
<p>By the way, I noticed that &quot;bind-to obj&quot; is forcibly override by &quot;bind-to core&quot;, when pe=N is specified.
<br>
This is just my opinion, but I think it's too conservative and a kind of regression from the openmpi-1.6.5. For example, &quot;-map-by slot:pe=N -bind-to numa&quot; looks 
<br>
acceptable to me. Your round_robin_mapper is now robust enough to handle it. The patch below would be better.  Please give it a try.
<br>
<p>--- orte/mca/rmaps/base/rmaps_base_frame.c.org	2014-02-11 17:34:36.000000000 +0900
<br>
+++ orte/mca/rmaps/base/rmaps_base_frame.c	2014-02-12 11:01:42.000000000 +0900
<br>
@@ -393,13 +393,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* bind to those cpus - any other binding policy is an
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* error
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
-        if (!(OPAL_BIND_GIVEN &amp; OPAL_GET_BINDING_POLICY(opal_hwloc_binding_policy))) {
<br>
+        if (OPAL_BIND_TO_NONE == OPAL_GET_BINDING_POLICY(opal_hwloc_binding_policy)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (opal_hwloc_use_hwthreads_as_cpus) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_SET_BINDING_POLICY(opal_hwloc_binding_policy, OPAL_BIND_TO_HWTHREAD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_SET_BINDING_POLICY(opal_hwloc_binding_policy, OPAL_BIND_TO_CORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-        } else {
<br>
+        } else if (OPAL_BIND_TO_L1CACHE &lt; OPAL_GET_BINDING_POLICY(opal_hwloc_binding_policy)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (opal_hwloc_use_hwthreads_as_cpus) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_BIND_TO_HWTHREAD != OPAL_GET_BINDING_POLICY(opal_hwloc_binding_policy)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_show_help(&quot;help-orte-rmaps-base.txt&quot;, &quot;mismatch-binding&quot;, true,
<br>
Regards,
<br>
Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt;Okay, I fixed it. Keep getting caught by a very, very unfortunate design flaw in hwloc that forces you to treat cache's as a special case that requires you to 
</span><br>
call a different function. So you have to constantly protect function calls into hwloc with &quot;if cache, call this one - else, call that one&quot;. REALLY irritating, and 
<br>
it caught us again here.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Should be fixed now in trunk now, set to go over to 1.7.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks
</span><br>
<span class="quotelev1">&gt;Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Feb 11, 2014, at 4:47 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Since the ticket #4240 has been already set as fixed, I'm sending this
</span><br>
<span class="quotelev2">&gt;&gt; email to you. ( I don't konw I could add comments to the fixed ticket)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I tried to bind the process to l3chace, it didn't work like below:
</span><br>
<span class="quotelev2">&gt;&gt; (the host mangae has the normal topology - not inverted)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [mishima_at_manage openmpi-1.7.4]$ mpirun -np 2 -bind-to l3cache
</span><br>
<span class="quotelev2">&gt;&gt; -report-bindings ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; No objects of the specified type were found on at least one node:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Type: Cache
</span><br>
<span class="quotelev2">&gt;&gt;  Node: manage
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The map cannot be done as specified.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-bind-to l1cache/l2cahce&quot; doesn't work as well. At least, I confirmed that
</span><br>
<span class="quotelev2">&gt;&gt; the openmpi-1.7.4 works with &quot;-bind-to l3cache&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
----
Tetsuya Mishima  tmishima_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23587.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work"</a>
<li><strong>Previous message:</strong> <a href="23585.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>In reply to:</strong> <a href="23585.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23587.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work"</a>
<li><strong>Reply:</strong> <a href="23587.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work"</a>
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
