<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 16:52:17 2012" -->
<!-- isoreceived="20120208215217" -->
<!-- sent="Wed, 08 Feb 2012 16:52:11 -0500" -->
<!-- isosent="20120208215211" -->
<!-- name="Tom Bryan" -->
<!-- email="tombry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="CB5858BB.12B5D%tombry_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="423B187C-86B9-46B3-9DA4-40FA70636D77_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine<br>
<strong>From:</strong> Tom Bryan (<em>tombry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 16:52:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18424.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18422.php">Hossein Talebi: "[OMPI users] Cross-compiling openmpi"</a>
<li><strong>In reply to:</strong> <a href="18407.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18424.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18424.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18427.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/6/12 5:10 PM, &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 06.02.2012 um 22:28 schrieb Tom Bryan:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2/6/12 8:14 AM, &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I need MPI_THREAD_MULTIPLE, and openmpi is compiled with thread support,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it's not clear to me whether MPI::Init_Thread() and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI::Inint_Thread(MPI::THREAD_MULTIPLE) would give me the same behavior
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you need thread support, you will need MPI::Init_Thread and it needs one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument (or three).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, typo on my side.  I meant to compare
</span><br>
<span class="quotelev2">&gt;&gt; MPI::Init_thread(MPI::THREAD_MULTIPLE) and MPI::Init().  I think that your
</span><br>
<span class="quotelev2">&gt;&gt; first reply mentioned replacing MPI::Init_thread by MPI::Init.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, if you don't need threads, I don't see any reason why it should add
</span><br>
<span class="quotelev1">&gt; anything to the environment what you could make use of.
</span><br>
<p>Got it.  Unfortunately, we *definitely* need THREAD_MULTIPLE in our case.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Yes, this should work across multiple machines. And it's using `qrsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -inherit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...` so it's failing somewhere in Open MPI - is it working with 1.4.4?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure.  We no longer have our 1.4 test environment, so I'm in the
</span><br>
<span class="quotelev2">&gt;&gt; process of building that now.  I'll let you know once I have a chance to run
</span><br>
<span class="quotelev2">&gt;&gt; that experiment.
</span><br>
<p>You said that both of these cases worked for you in 1.4.  Were you running a
<br>
modified version that did not use THREAD_MULTIPLE?  I ask because I'm
<br>
getting worse errors in 1.4.  I'm using the same code that was working (in
<br>
some cases) with 1.5.4.
<br>
<p>I built 1.4.4 with (among other option)
<br>
--with-threads=posix --enable-mpi-threads
<br>
<p>I rebuilt my code against 1.4.4.
<br>
<p>When I run my test &quot;e&quot; from before, which is basically just
<br>
mpiexec -np 1 ./mpitest
<br>
I get the following in the output file for the job.
<br>
&nbsp;
<br>
Calling init_thread
<br>
[vxr-lnx-11.cisco.com:64618] [[32207,1],0] ORTE_ERROR_LOG: Data unpack would
<br>
read past end of buffer in file util/nidmap.c at line 398
<br>
[vxr-lnx-11.cisco.com:64618] [[32207,1],0] ORTE_ERROR_LOG: Data unpack would
<br>
read past end of buffer in file base/ess_base_nidmap.c at line 62
<br>
[vxr-lnx-11.cisco.com:64618] [[32207,1],0] ORTE_ERROR_LOG: Data unpack would
<br>
read past end of buffer in file ess_env_module.c at line 173
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
<p>&nbsp;&nbsp;orte_ess_base_build_nidmap failed
<br>
&nbsp;&nbsp;--&gt; Returned value Data unpack would read past end of buffer (-26) instead
<br>
of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[vxr-lnx-11.cisco.com:64618] [[32207,1],0] ORTE_ERROR_LOG: Data unpack would
<br>
read past end of buffer in file runtime/orte_init.c at line 132
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
&nbsp;&nbsp;--&gt; Returned value Data unpack would read past end of buffer (-26) instead
<br>
of ORTE_SUCCESS
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
&nbsp;&nbsp;--&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead of
<br>
&quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** The MPI_Init_thread() function was called before MPI_INIT was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
[vxr-lnx-11.cisco.com:64618] Abort before MPI_INIT completed successfully;
<br>
not able to guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
mpiexec has exited due to process rank 0 with PID 64618 on
<br>
node vxr-lnx-11.cisco.com exiting improperly. There are two reasons this
<br>
could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpiexec (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18424.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18422.php">Hossein Talebi: "[OMPI users] Cross-compiling openmpi"</a>
<li><strong>In reply to:</strong> <a href="18407.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18424.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18424.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18427.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
