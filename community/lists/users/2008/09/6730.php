<?
$subject_val = "Re: [OMPI users] mca:base:select:( ess) No component selected!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 15:28:37 2008" -->
<!-- isoreceived="20080924192837" -->
<!-- sent="Wed, 24 Sep 2008 15:28:31 -0400" -->
<!-- isosent="20080924192831" -->
<!-- name="Will Portnoy" -->
<!-- email="will.portnoy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca:base:select:( ess) No component selected!" -->
<!-- id="e1ac6ccc0809241228t6e7b7b0dh89d8f014d84ec96f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9A1347CA-833A-4DDF-9C5E-D27272B9B2D9_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] mca:base:select:( ess) No component selected!<br>
<strong>From:</strong> Will Portnoy (<em>will.portnoy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-24 15:28:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6731.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>Previous message:</strong> <a href="6729.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>In reply to:</strong> <a href="6729.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6731.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>Reply:</strong> <a href="6731.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, your first sentence is correct.  I intend to use the unmodified
<br>
orted, but I need to set up the unix environment after the ssh has
<br>
completed but before orted is executed.
<br>
<p>In particular, one of the more important tasks for me to do after ssh
<br>
connects is to set LD_LIBRARY_PATH and PATH to include the paths of
<br>
the openmpi's install lib and bin directories, respectively.
<br>
Otherwise, orted will not be on the PATH, and its dependent libraries
<br>
will not be in LD_LIBRARY_PATH.
<br>
<p>Is there a recommended method to set LD_LIBRARY_PATH and PATH when ssh
<br>
is used to connect to other hosts when running an mpi job?
<br>
<p>thank you,
<br>
<p>Will
<br>
<p>On Wed, Sep 24, 2008 at 2:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; So this is a singleton comm_spawn scenario, that requires you specify a
</span><br>
<span class="quotelev1">&gt; launch_agent to execute? Just trying to ensure I understand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, let me ensure we have a common understanding of what
</span><br>
<span class="quotelev1">&gt; orte_launch_agent does. Basically, that param stipulates the command to be
</span><br>
<span class="quotelev1">&gt; used in place of &quot;orted&quot; - it doesn't substitute for &quot;ssh&quot;. So if you set
</span><br>
<span class="quotelev1">&gt; -mca orte_launch_agent foo, what will happen is: &quot;ssh nodename foo&quot; instead
</span><br>
<span class="quotelev1">&gt; of &quot;ssh nodename orted&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The intent was to provide a way to do things like run valgrind on the orted
</span><br>
<span class="quotelev1">&gt; itself. So you could do -mca orte_launch_agent &quot;valgrind orted&quot;, and we
</span><br>
<span class="quotelev1">&gt; would dutifully run &quot;ssh nodename valrind orted&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or if you wanted to write your own orted (e.g., bar-orted), you could
</span><br>
<span class="quotelev1">&gt; substitute it for our &quot;orted&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or if you wanted to set mca params solely to be seen on the backend
</span><br>
<span class="quotelev1">&gt;  nodes/procs, you could set -mca orte_launch_agent &quot;orted -mca foo bar&quot;, and
</span><br>
<span class="quotelev1">&gt; we would launch &quot;ssh nodename orted -mca foo bar&quot;. This allows us to set mca
</span><br>
<span class="quotelev1">&gt; params without having mpirun see them - helps us to look at debug output,
</span><br>
<span class="quotelev1">&gt; for example, from only the backend procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If what you need to do is set something in the environment for the orted,
</span><br>
<span class="quotelev1">&gt; there are certain cmd line options that will do that for you -
</span><br>
<span class="quotelev1">&gt; orte_launch_agent may or may not be a good method.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps it would help if you could tell me exactly what you wanted to have
</span><br>
<span class="quotelev1">&gt; orte_launch_agent actually do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2008, at 12:22 PM, Will Portnoy wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the miscommunication: The processes are started by my
</span><br>
<span class="quotelev2">&gt;&gt; program with MPI_Comm_spawn, so there was no mpirun involved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you can suggest a test program I can use with mpirun to validate my
</span><br>
<span class="quotelev2">&gt;&gt; openmpi environment and install, that would probably produce the
</span><br>
<span class="quotelev2">&gt;&gt; output you would like to see.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I'm not sure that will make it clear how the file pointed to by
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orte_launch_agent&quot; in &quot;mca-params.conf&quot; should be written to setup an
</span><br>
<span class="quotelev2">&gt;&gt; environment and start orted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Will
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Sep 24, 2008 at 2:17 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Afraid I am confused. This was the entire output from the job?? If so,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that means mpirun itself wasn't able to find a launch environment it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use, so you never got to the point of actually launching an orted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have ssh in your path? My best immediate guess is that you don't,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that mpirun therefore doesn't see anything it can use to launch a job. We
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have discussed internally that we need to improve that error message -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be this is another case emphasizing that point.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.3 is fine to use - still patching some bugs, but nothing that should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; impact this issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 24, 2008, at 12:11 PM, Will Portnoy wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That was the output with plm_base_verbose set to 99 - it's the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output with 1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, I'd like to use ssh.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orted wasn't starting properly with orte_launch_agent (which was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; needed because my environment on the target machine wasn't set up), so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that's why I thought I would try it directly on the command line on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; localhost.  I thought this was a simpler case: to verify that orted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could find all of its necessary components without the complexity of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; everything else I'm doing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I needed to use orte_launch_agent, how should I pass the necessary
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parameters to start orted after I set up my environment?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am I better off using trunk over 1.3?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thank you,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Sep 24, 2008 at 2:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Could you rerun that with -mca plm_base_verbose 1? What environment are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in - I assume rsh/ssh?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I would like to see the cmd line being used to launch the orted. What
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; indicates is that we are not getting the cmd line correct. Could just
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that some patch in the trunk didn't get completely applied to the 1.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; branch.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; BTW: you probably can't run orted directly off of the cmd line. It
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; likely
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; needs some cmd line params to get critical info.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 24, 2008, at 9:47 AM, Will Portnoy wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm trying to use MPI_Comm_Spawn with MPI_Info's host key to spawn
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; processes from a process not started with mpirun.  This works with the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; host key set to the localhost's hostname, but it does not work when I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; use other hosts.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm using version 1.3a1r19602.  I need to use orte_launch_agent to set
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; up my environment a bit before orted is started, but it fails with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; errors listed below.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When I try to run orted directly on the command line with some of the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; verbosity flags turned to &quot;11&quot;, I receive the same messages.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Does anybody have any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; thank you,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Will
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca: base: components_open: Looking for ess components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca: base: components_open: opening ess components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca: base: components_open: found loaded component env
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca: base: components_open: component env has no register
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca: base: components_open: component env open function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca: base: components_open: found loaded component hnp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca: base: components_open: component hnp has no register
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca: base: components_open: component hnp open function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; singleton
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca: base: components_open: component singleton has no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca: base: components_open: component singleton open
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca: base: components_open: component slurm has no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca: base: components_open: component slurm open function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca: base: components_open: found loaded component tool
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca: base: components_open: component tool has no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; register
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca: base: components_open: component tool open function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca:base:select: Auto-selecting ess components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Querying component [env]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Skipping component [env]. Query
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Querying component [hnp]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Skipping component [hnp]. Query
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Querying component [singleton]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Skipping component [singleton].
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Querying component [slurm]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Skipping component [slurm]. Query
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Querying component [tool]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Skipping component [tool]. Query
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] mca:base:select:(  ess) No component selected!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; runtime/orte_init.c at line 125
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; orte_ess_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fqdn:24761] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; orted/orted_main.c at line 315
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6731.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>Previous message:</strong> <a href="6729.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>In reply to:</strong> <a href="6729.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6731.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>Reply:</strong> <a href="6731.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
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
