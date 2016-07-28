<?
$subject_val = "Re: [OMPI devel] 1.7.0rc3 available - PLEASE test";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 20:21:19 2012" -->
<!-- isoreceived="20121026002119" -->
<!-- sent="Thu, 25 Oct 2012 17:21:11 -0700" -->
<!-- isosent="20121026002111" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.0rc3 available - PLEASE test" -->
<!-- id="92EC2CD5-D98E-4EF5-9E8A-8919E67FAFC5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5607D260-AE69-4C3F-A44A-74087C3E5E4C_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-25 20:21:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11651.php">Lirong Jian: "Re: [OMPI devel] OMPI devel] NIC Failover and Message Stripping of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="11649.php">Brice Goglin: "Re: [OMPI devel] MX BTL segfaults"</a>
<li><strong>In reply to:</strong> <a href="11647.php">Ralph Castain: "Re: [OMPI devel] 1.7.0rc3 available - PLEASE test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, 1.7.0rc4 has been posted, with ompi_info fixed :-)
<br>
<p><p>On Oct 25, 2012, at 2:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ah, I see the problem - it is localized to ompi_info and due to the fact that we aren't setting things up completely in that code (trying to avoid a complete start).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: you are most certainly allowed to amend event callbacks in the base open function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll fix it. Meantime, the branch seems to run just fine (minus ompi_info)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 25, 2012, at 2:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Strange - okay, will look.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 25, 2012, at 2:34 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Broken enough that even the ompi_info fails. And for a good reason: one is not allowed to amend event callbacks in the component base open function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the stack:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0  0x00007ffff7a82fc4 in opal_libevent2019_event_priority_set (ev=0x63b100, pri=3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     at ../../../../../../ompi/opal/mca/event/libevent2019/libevent/event.c:1849
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x00007ffff7a3402e in orte_iof_base_open ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     at ../../../../ompi/orte/mca/iof/base/iof_base_open.c:259
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x00007ffff7a058d4 in orte_info_register_components (mca_types=0x7fffffffd7b0, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     component_map=0x7fffffffd700) at ../../ompi/orte/runtime/orte_info_support.c:199
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x0000000000403572 in main (argc=1, argv=0x7fffffffd998)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     at ../../../../ompi/ompi/tools/ompi_info/ompi_info.c:148
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 25, 2012, at 14:23 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We have posted the first release candidate for the 1.7.0 release in the usual place:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please put it thru the wringer to help us validate it prior to release later this month. We are still updating the NEWS section, but we REALLY need to validate this release!! So please at least ensure it compiles and runs on the usual systems.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11650/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11651.php">Lirong Jian: "Re: [OMPI devel] OMPI devel] NIC Failover and Message Stripping of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="11649.php">Brice Goglin: "Re: [OMPI devel] MX BTL segfaults"</a>
<li><strong>In reply to:</strong> <a href="11647.php">Ralph Castain: "Re: [OMPI devel] 1.7.0rc3 available - PLEASE test"</a>
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
