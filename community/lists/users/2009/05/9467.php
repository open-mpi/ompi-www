<?
$subject_val = "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 14:52:08 2009" -->
<!-- isoreceived="20090529185208" -->
<!-- sent="Fri, 29 May 2009 14:52:46 -0400" -->
<!-- isosent="20090529185246" -->
<!-- name="Jeff Layton" -->
<!-- email="laytonjb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with 1.3.2 - need tips on debugging" -->
<!-- id="4A202EFE.1030101_at_att.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A1FEB35.3060505_at_att.net" -->
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
<strong>From:</strong> Jeff Layton (<em>laytonjb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-29 14:52:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9468.php">Ralph Castain: "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<li><strong>Previous message:</strong> <a href="9466.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9465.php">Jeff Layton: "[OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9468.php">Ralph Castain: "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<li><strong>Reply:</strong> <a href="9468.php">Ralph Castain: "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've got some more information (after rebuilding Open MPI and the
<br>
application a few times). I put
<br>
<p>-mca mpi_show_mca_params enviro
<br>
<p><p>in my mpirun line to get some of the parameter information back.
<br>
I get the following information back (warning - it's long).
<br>
<p>--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      compute-0-0.local
<br>
Framework: ras
<br>
Component: proxy
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01564] [[58307,0],0] ORTE_ERROR_LOG: Error in file 
<br>
ess_hnp_module.c at line 199
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      compute-0-0.local
<br>
Framework: ras
<br>
Component: proxy
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01565] [[58306,0],0] ORTE_ERROR_LOG: Error in file 
<br>
ess_hnp_module.c at line 199
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      compute-0-0.local
<br>
Framework: ras
<br>
Component: proxy
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01562] [[58309,0],0] ORTE_ERROR_LOG: Error in file 
<br>
ess_hnp_module.c at line 199
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      compute-0-0.local
<br>
Framework: ras
<br>
Component: proxy
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01560] [[58311,0],0] ORTE_ERROR_LOG: Error in file 
<br>
ess_hnp_module.c at line 199
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      compute-0-0.local
<br>
Framework: ras
<br>
Component: proxy
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01566] [[58305,0],0] ORTE_ERROR_LOG: Error in file 
<br>
ess_hnp_module.c at line 199
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      compute-0-0.local
<br>
Framework: ras
<br>
Component: proxy
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01563] [[58308,0],0] ORTE_ERROR_LOG: Error in file 
<br>
ess_hnp_module.c at line 199
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      compute-0-0.local
<br>
Framework: ras
<br>
Component: proxy
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01559] [[58312,0],0] ORTE_ERROR_LOG: Error in file 
<br>
ess_hnp_module.c at line 199
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ras_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01565] [[58306,0],0] ORTE_ERROR_LOG: Error in file 
<br>
runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ras_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01564] [[58307,0],0] ORTE_ERROR_LOG: Error in file 
<br>
runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ras_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01562] [[58309,0],0] ORTE_ERROR_LOG: Error in file 
<br>
runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ras_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01566] [[58305,0],0] ORTE_ERROR_LOG: Error in file 
<br>
runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ras_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01560] [[58311,0],0] ORTE_ERROR_LOG: Error in file 
<br>
runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ras_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01563] [[58308,0],0] ORTE_ERROR_LOG: Error in file 
<br>
runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ras_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01559] [[58312,0],0] ORTE_ERROR_LOG: Error in file 
<br>
runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01566] [[58305,0],0] ORTE_ERROR_LOG: Error in file 
<br>
orted/orted_main.c at line 323
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01564] [[58307,0],0] ORTE_ERROR_LOG: Error in file 
<br>
orted/orted_main.c at line 323
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01565] [[58306,0],0] ORTE_ERROR_LOG: Error in file 
<br>
orted/orted_main.c at line 323
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01562] [[58309,0],0] ORTE_ERROR_LOG: Error in file 
<br>
orted/orted_main.c at line 323
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01560] [[58311,0],0] ORTE_ERROR_LOG: Error in file 
<br>
orted/orted_main.c at line 323
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01563] [[58308,0],0] ORTE_ERROR_LOG: Error in file 
<br>
orted/orted_main.c at line 323
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01559] [[58312,0],0] ORTE_ERROR_LOG: Error in file 
<br>
orted/orted_main.c at line 323
<br>
[compute-0-0.local:01556] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file ess_singleton_module.c at line 381
<br>
[compute-0-0.local:01556] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file ess_singleton_module.c at line 143
<br>
[compute-0-0.local:01556] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Unable to start a daemon on the local node (-128) 
<br>
instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:01555] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file ess_singleton_module.c at line 381
<br>
[compute-0-0.local:01555] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file ess_singleton_module.c at line 143
<br>
[compute-0-0.local:01551] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file ess_singleton_module.c at line 381
<br>
[compute-0-0.local:01551] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file ess_singleton_module.c at line 143
<br>
[compute-0-0.local:01551] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file runtime/orte_init.c at line 132
<br>
[compute-0-0.local:01552] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file ess_singleton_module.c at line 381
<br>
[compute-0-0.local:01552] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file ess_singleton_module.c at line 143
<br>
[compute-0-0.local:01552] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file runtime/orte_init.c at line 132
<br>
[compute-0-0.local:01554] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file ess_singleton_module.c at line 381
<br>
[compute-0-0.local:01554] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file ess_singleton_module.c at line 143
<br>
[compute-0-0.local:01554] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file runtime/orte_init.c at line 132
<br>
[compute-0-0.local:01555] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Unable to start a daemon on the local node (-128) 
<br>
instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unable to start a daemon on the local node&quot; (-128) 
<br>
instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[compute-0-0.local:1556] Abort before MPI_INIT completed successfully; 
<br>
not able to guarantee that all other processes were killed!
<br>
[compute-0-0.local:01557] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file ess_singleton_module.c at line 381
<br>
[compute-0-0.local:01557] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file ess_singleton_module.c at line 143
<br>
[compute-0-0.local:01557] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file runtime/orte_init.c at line 132
<br>
[compute-0-0.local:01558] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file ess_singleton_module.c at line 381
<br>
[compute-0-0.local:01558] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file ess_singleton_module.c at line 143
<br>
[compute-0-0.local:01558] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to 
<br>
start a daemon on the local node in file runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Unable to start a daemon on the local node (-128) 
<br>
instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
<p>(and on and on).
<br>
<p>Does anyone have any ideas? Google let me down on this one.
<br>
<p>TIA!
<br>
<p>Jeff
<br>
<p><p><span class="quotelev1">&gt; Good morning,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just built 1.3.2 on a ROCKS 4.something system. I built my code
</span><br>
<span class="quotelev1">&gt; (CFL3D) with the Intel 10.1 compilers. I also linked in the
</span><br>
<span class="quotelev1">&gt; OpenMPI libs and the Intel libraries to make sure I had the paths
</span><br>
<span class="quotelev1">&gt; correct. When I try running my code, I get the following,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; error: executing task of job 2951 failed: execution daemon on host 
</span><br>
<span class="quotelev1">&gt; &quot;compute-2-3.local&quot; didn't accept task
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A daemon (pid 12015) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have 
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything seems correct. I checked that the mpirun was correct
</span><br>
<span class="quotelev1">&gt; and the binary has the correct libraries (checked using ldd).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone tell me what the &quot;status 1&quot; means? Any tips on debugging
</span><br>
<span class="quotelev1">&gt; the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9468.php">Ralph Castain: "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<li><strong>Previous message:</strong> <a href="9466.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9465.php">Jeff Layton: "[OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9468.php">Ralph Castain: "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<li><strong>Reply:</strong> <a href="9468.php">Ralph Castain: "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
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
