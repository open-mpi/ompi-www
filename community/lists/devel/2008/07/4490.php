<?
$subject_val = "Re: [OMPI devel] Change in slot_list specification";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 11:47:46 2008" -->
<!-- isoreceived="20080730154746" -->
<!-- sent="Wed, 30 Jul 2008 18:47:41 +0300" -->
<!-- isosent="20080730154741" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in slot_list specification" -->
<!-- id="453d39990807300847h23b60edbn575adf90d7003a60_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF3FA145-5B96-4655-8DFC-231DE60A0B00_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-07-30 11:47:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4491.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in slot_list specification"</a>
<li><strong>Previous message:</strong> <a href="4489.php">Jeff Squyres: "[OMPI devel] OMPI v1.3 report"</a>
<li><strong>In reply to:</strong> <a href="4464.php">Ralph Castain: "[OMPI devel] Change in slot_list specification"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4491.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in slot_list specification"</a>
<li><strong>Reply:</strong> <a href="4491.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in slot_list specification"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
if there is no objection I want to bring it to 1.3
<br>
<p>( r19062)
<br>
<p>On 7/28/08, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just an FYI for those of you working with slot_lists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny, Jeff and I have changed the mca param associated with how you
</span><br>
<span class="quotelev1">&gt; specify the slot list you want the rank_file mapper to use. This was done to
</span><br>
<span class="quotelev1">&gt; avoid the possibility of ORTE processes such as mpirun and orted
</span><br>
<span class="quotelev1">&gt; accidentally binding themselves to cores. The prior param was identical to
</span><br>
<span class="quotelev1">&gt; the one used to tell MPI procs their core bindings - so if someone ever
</span><br>
<span class="quotelev1">&gt; modified the paffinity system to detect the param and automatically
</span><br>
<span class="quotelev1">&gt; perform the binding, mpirun and orted could both bind themselves to the
</span><br>
<span class="quotelev1">&gt; specified cores...which isn't what we would want.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The new param is &quot;rmaps_base_slot_list&quot;. To make life easier, we also added
</span><br>
<span class="quotelev1">&gt; a new orterun cmd line option --slot-list which acts as a shorthand for the
</span><br>
<span class="quotelev1">&gt; new mca param.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4490/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4491.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in slot_list specification"</a>
<li><strong>Previous message:</strong> <a href="4489.php">Jeff Squyres: "[OMPI devel] OMPI v1.3 report"</a>
<li><strong>In reply to:</strong> <a href="4464.php">Ralph Castain: "[OMPI devel] Change in slot_list specification"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4491.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in slot_list specification"</a>
<li><strong>Reply:</strong> <a href="4491.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in slot_list specification"</a>
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
