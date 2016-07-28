<?
$subject_val = "Re: [OMPI devel] 1.7.0rc3 available - PLEASE test";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 17:34:42 2012" -->
<!-- isoreceived="20121025213442" -->
<!-- sent="Thu, 25 Oct 2012 23:34:35 +0200" -->
<!-- isosent="20121025213435" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.0rc3 available - PLEASE test" -->
<!-- id="D399211C-7E6B-479C-B098-5AA432D92A60_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="654416AE-E8D1-49AD-A8C6-B7DC452A3A1B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.0rc3 available - PLEASE test<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-25 17:34:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11646.php">Ralph Castain: "Re: [OMPI devel] 1.7.0rc3 available - PLEASE test"</a>
<li><strong>Previous message:</strong> <a href="11644.php">Ralph Castain: "Re: [OMPI devel] NIC Failover and Message Stripping of Open MPI."</a>
<li><strong>In reply to:</strong> <a href="11636.php">Ralph Castain: "[OMPI devel] 1.7.0rc3 available - PLEASE test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11646.php">Ralph Castain: "Re: [OMPI devel] 1.7.0rc3 available - PLEASE test"</a>
<li><strong>Reply:</strong> <a href="11646.php">Ralph Castain: "Re: [OMPI devel] 1.7.0rc3 available - PLEASE test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Broken enough that even the ompi_info fails. And for a good reason: one is not allowed to amend event callbacks in the component base open function.
<br>
<p>Here is the stack:
<br>
0  0x00007ffff7a82fc4 in opal_libevent2019_event_priority_set (ev=0x63b100, pri=3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../ompi/opal/mca/event/libevent2019/libevent/event.c:1849
<br>
#1  0x00007ffff7a3402e in orte_iof_base_open ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../ompi/orte/mca/iof/base/iof_base_open.c:259
<br>
#2  0x00007ffff7a058d4 in orte_info_register_components (mca_types=0x7fffffffd7b0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component_map=0x7fffffffd700) at ../../ompi/orte/runtime/orte_info_support.c:199
<br>
#3  0x0000000000403572 in main (argc=1, argv=0x7fffffffd998)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../ompi/ompi/tools/ompi_info/ompi_info.c:148
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Oct 25, 2012, at 14:23 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have posted the first release candidate for the 1.7.0 release in the usual place:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please put it thru the wringer to help us validate it prior to release later this month. We are still updating the NEWS section, but we REALLY need to validate this release!! So please at least ensure it compiles and runs on the usual systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11645/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11646.php">Ralph Castain: "Re: [OMPI devel] 1.7.0rc3 available - PLEASE test"</a>
<li><strong>Previous message:</strong> <a href="11644.php">Ralph Castain: "Re: [OMPI devel] NIC Failover and Message Stripping of Open MPI."</a>
<li><strong>In reply to:</strong> <a href="11636.php">Ralph Castain: "[OMPI devel] 1.7.0rc3 available - PLEASE test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11646.php">Ralph Castain: "Re: [OMPI devel] 1.7.0rc3 available - PLEASE test"</a>
<li><strong>Reply:</strong> <a href="11646.php">Ralph Castain: "Re: [OMPI devel] 1.7.0rc3 available - PLEASE test"</a>
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
