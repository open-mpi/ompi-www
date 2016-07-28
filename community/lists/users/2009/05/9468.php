<?
$subject_val = "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 18:40:16 2009" -->
<!-- isoreceived="20090529224016" -->
<!-- sent="Fri, 29 May 2009 16:40:10 -0600" -->
<!-- isosent="20090529224010" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with 1.3.2 - need tips on debugging" -->
<!-- id="71d2d8cc0905291540k3f6182dakdb5d0541bc256787_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A202EFE.1030101_at_att.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with 1.3.2 - need tips on debugging<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-29 18:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9469.php">deepesh reja: "[OMPI users] To connect two computers as two nodes"</a>
<li><strong>Previous message:</strong> <a href="9467.php">Jeff Layton: "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<li><strong>In reply to:</strong> <a href="9467.php">Jeff Layton: "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You have version confusion somewhere - the error message indicates that
<br>
mpirun is looking for a component that only exists in the 1.2.x series, not
<br>
in 1.3.x. Check that your LD_LIBRARY_PATH is pointing to the 1.3.2 location,
<br>
along with your PATH.
<br>
<p><p><p>On Fri, May 29, 2009 at 12:52 PM, Jeff Layton &lt;laytonjb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've got some more information (after rebuilding Open MPI and the
</span><br>
<span class="quotelev1">&gt; application a few times). I put
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca mpi_show_mca_params enviro
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in my mpirun line to get some of the parameter information back.
</span><br>
<span class="quotelev1">&gt; I get the following information back (warning - it's long).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:      compute-0-0.local
</span><br>
<span class="quotelev1">&gt; Framework: ras
</span><br>
<span class="quotelev1">&gt; Component: proxy
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01564] [[58307,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; ess_hnp_module.c at line 199
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:      compute-0-0.local
</span><br>
<span class="quotelev1">&gt; Framework: ras
</span><br>
<span class="quotelev1">&gt; Component: proxy
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01565] [[58306,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; ess_hnp_module.c at line 199
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:      compute-0-0.local
</span><br>
<span class="quotelev1">&gt; Framework: ras
</span><br>
<span class="quotelev1">&gt; Component: proxy
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01562] [[58309,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; ess_hnp_module.c at line 199
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:      compute-0-0.local
</span><br>
<span class="quotelev1">&gt; Framework: ras
</span><br>
<span class="quotelev1">&gt; Component: proxy
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01560] [[58311,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; ess_hnp_module.c at line 199
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:      compute-0-0.local
</span><br>
<span class="quotelev1">&gt; Framework: ras
</span><br>
<span class="quotelev1">&gt; Component: proxy
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01566] [[58305,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; ess_hnp_module.c at line 199
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:      compute-0-0.local
</span><br>
<span class="quotelev1">&gt; Framework: ras
</span><br>
<span class="quotelev1">&gt; Component: proxy
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01563] [[58308,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; ess_hnp_module.c at line 199
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:      compute-0-0.local
</span><br>
<span class="quotelev1">&gt; Framework: ras
</span><br>
<span class="quotelev1">&gt; Component: proxy
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01559] [[58312,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; ess_hnp_module.c at line 199
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ras_base_open failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01565] [[58306,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ras_base_open failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01564] [[58307,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ras_base_open failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01562] [[58309,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ras_base_open failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01566] [[58305,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ras_base_open failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01560] [[58311,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ras_base_open failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01563] [[58308,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ras_base_open failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01559] [[58312,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01566] [[58305,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; orted/orted_main.c at line 323
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01564] [[58307,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; orted/orted_main.c at line 323
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01565] [[58306,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; orted/orted_main.c at line 323
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01562] [[58309,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; orted/orted_main.c at line 323
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01560] [[58311,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; orted/orted_main.c at line 323
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01563] [[58308,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; orted/orted_main.c at line 323
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01559] [[58312,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; orted/orted_main.c at line 323
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01556] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file ess_singleton_module.c at line 381
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01556] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file ess_singleton_module.c at line 143
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01556] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Unable to start a daemon on the local node (-128)
</span><br>
<span class="quotelev1">&gt; instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01555] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file ess_singleton_module.c at line 381
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01555] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file ess_singleton_module.c at line 143
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01551] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file ess_singleton_module.c at line 381
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01551] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file ess_singleton_module.c at line 143
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01551] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01552] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file ess_singleton_module.c at line 381
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01552] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file ess_singleton_module.c at line 143
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01552] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01554] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file ess_singleton_module.c at line 381
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01554] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file ess_singleton_module.c at line 143
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01554] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01555] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Unable to start a daemon on the local node (-128)
</span><br>
<span class="quotelev1">&gt; instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unable to start a daemon on the local node&quot; (-128) instead
</span><br>
<span class="quotelev1">&gt; of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:1556] Abort before MPI_INIT completed successfully; not
</span><br>
<span class="quotelev1">&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01557] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file ess_singleton_module.c at line 381
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01557] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file ess_singleton_module.c at line 143
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01557] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01558] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file ess_singleton_module.c at line 381
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01558] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file ess_singleton_module.c at line 143
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:01558] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Unable to start a daemon on the local node (-128)
</span><br>
<span class="quotelev1">&gt; instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (and on and on).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have any ideas? Google let me down on this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIA!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Good morning,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just built 1.3.2 on a ROCKS 4.something system. I built my code
</span><br>
<span class="quotelev2">&gt;&gt; (CFL3D) with the Intel 10.1 compilers. I also linked in the
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI libs and the Intel libraries to make sure I had the paths
</span><br>
<span class="quotelev2">&gt;&gt; correct. When I try running my code, I get the following,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; error: executing task of job 2951 failed: execution daemon on host
</span><br>
<span class="quotelev2">&gt;&gt; &quot;compute-2-3.local&quot; didn't accept task
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 12015) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Everything seems correct. I checked that the mpirun was correct
</span><br>
<span class="quotelev2">&gt;&gt; and the binary has the correct libraries (checked using ldd).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone tell me what the &quot;status 1&quot; means? Any tips on debugging
</span><br>
<span class="quotelev2">&gt;&gt; the problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9468/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9469.php">deepesh reja: "[OMPI users] To connect two computers as two nodes"</a>
<li><strong>Previous message:</strong> <a href="9467.php">Jeff Layton: "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<li><strong>In reply to:</strong> <a href="9467.php">Jeff Layton: "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
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
