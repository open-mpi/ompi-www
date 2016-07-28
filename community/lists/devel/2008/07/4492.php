<?
$subject_val = "Re: [OMPI devel] Change in slot_list specification";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 11:55:27 2008" -->
<!-- isoreceived="20080730155527" -->
<!-- sent="Wed, 30 Jul 2008 18:55:23 +0300" -->
<!-- isosent="20080730155523" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in slot_list specification" -->
<!-- id="453d39990807300855p39d2cd37i6edf88117a24dc22_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990807300850y1ddab763k23167b4c996ba057_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Change in slot_list specification<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 11:55:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4493.php">Ralph Castain: "[OMPI devel] Change to launch agent"</a>
<li><strong>Previous message:</strong> <a href="4491.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in slot_list specification"</a>
<li><strong>In reply to:</strong> <a href="4491.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in slot_list specification"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
patch to 1.3 attached
<br>
<p>On 7/30/08, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; few more details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1. added new mca param rmaps_base_slot_list (r19062)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2. new -slot-list option to mpirun ( r19062)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     3. old opal_paffinity_base_slot_list will be invisible ( r19096)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     4. few bug fixes ( r19004)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/30/08, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if there is no objection I want to bring it to 1.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ( r19062)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/28/08, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just an FYI for those of you working with slot_lists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny, Jeff and I have changed the mca param associated with how you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specify the slot list you want the rank_file mapper to use. This was done to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; avoid the possibility of ORTE processes such as mpirun and orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accidentally binding themselves to cores. The prior param was identical to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the one used to tell MPI procs their core bindings - so if someone ever
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modified the paffinity system to detect the param and automatically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perform the binding, mpirun and orted could both bind themselves to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specified cores...which isn't what we would want.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The new param is &quot;rmaps_base_slot_list&quot;. To make life easier, we also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; added a new orterun cmd line option --slot-list which acts as a shorthand
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the new mca param.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4492/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4492/patch.patch">patch.patch</a>
</ul>
<!-- attachment="patch.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4493.php">Ralph Castain: "[OMPI devel] Change to launch agent"</a>
<li><strong>Previous message:</strong> <a href="4491.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in slot_list specification"</a>
<li><strong>In reply to:</strong> <a href="4491.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in slot_list specification"</a>
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
