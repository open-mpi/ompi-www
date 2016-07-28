<?
$subject_val = "Re: [OMPI users] environment variables and MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 15:37:59 2013" -->
<!-- isoreceived="20131219203759" -->
<!-- sent="Thu, 19 Dec 2013 21:37:56 +0100" -->
<!-- isosent="20131219203756" -->
<!-- name="tom fogal" -->
<!-- email="tfogal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] environment variables and MPI_Comm_spawn" -->
<!-- id="52B35924.2000307_at_sci.utah.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50000879-96B5-4920-BF83-9B64FAD92CC6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] environment variables and MPI_Comm_spawn<br>
<strong>From:</strong> tom fogal (<em>tfogal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 15:37:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23260.php">Brandon Turner: "Re: [OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)"</a>
<li><strong>Previous message:</strong> <a href="23258.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23257.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23261.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="23261.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, no worries on the delay, and thanks!  -tom
<br>
<p>On 12/19/2013 04:32 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Sorry for delay - buried in my &quot;day job&quot;. Adding values to the env array is fine, but this isn't how we would normally do it. I've got it noted on my &quot;to-do&quot; list and will try to get to it in time for 1.7.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 13, 2013, at 4:42 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the first 2 patches, Tom -- I applied them to the SVN trunk and scheduled them to go into the v1.7 series.  I don't know if they'll make 1.7.4 or be pushed to 1.7.5, but they'll get there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll defer to Ralph for the rest of the discussion about info keys.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 13, 2013, at 9:16 AM, tom fogal &lt;tfogal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph, thanks for your help!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain writes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It would have to be done via MPI_Info arguments, and we never had a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; request to do so (and hence, don't define such an argument). It would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be easy enough to do so (look in the ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, I wanted to just report success, but I've only got the easy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; side of it: saving the arguments from the MPI_Info arguments into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the orte_job_t struct.  See attached &quot;0003&quot; patch (against trunk).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I couldn't figure out how to get the other side: reading out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the environment variables and setting them at fork.  Maybe you could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help with (or do :-) that?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or just guide me as to where again: I threw abort()s in 'spawn'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functions I found under plm/, but my programs didn't abort and so I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not sure where they went.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI implementations generally don't forcibly propagate envars because
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it is so hard to know which ones to handle - it is easy to propagate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a system envar that causes bad things to happen on the remote end.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I understand.  Though in this case, I'm /trying/ to make Bad Things
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (tm) happen ;-).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; One thing you could do, of course, is add that envar to your default
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shell setup (.bashrc or whatever). This would set the variable by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default on your remote locations (assuming you are using rsh/ssh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for your launcher), and then any process you start would get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it. However, that won't help if this is an envar intended only for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the comm_spawned process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately what I want to play with at the moment are LD_*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variables, and fiddling with these in my .bashrc will mess up a lot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more than just the simulation I am presently hacking.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can add this capability to the OMPI trunk, and port it to the 1.7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; release - but we don't go all the way back to the 1.4 series any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, having this in a 1.7 release would be great!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTW, I encountered a couple other small things while grepping through
</span><br>
<span class="quotelev3">&gt;&gt;&gt; source/waiting for trunk to build, so there are two other small patches
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attached.  One gets rid of warnings about unused functions in generated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lexing code.  I believe the second fixes resource leaks on error paths.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, it turned out none of my user-level code hit that function at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all, so I haven't been able to test it.  Take from it what you will...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -tom
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Dec 11, 2013 at 2:10 PM, tom fogal &lt;tfogal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm developing on Open MPI 1.4.5-ubuntu2 on Ubuntu 13.10 (so, Ubuntu's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; packaged Open MPI) at the moment.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'd like to pass environment variables to processes started via
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Comm_spawn.  Unfortunately, the MPI 3.0 standard (at least) does
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; not seem to specify a way to do this; thus I have been searching for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; implementation-specific ways to accomplish my task.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have tried setting the environment variable using the POSIX setenv(3)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; call, but it seems that Open MPI comm-spawn'd processes do not inherit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; environment variables.  See the attached 2 C99 programs; one prints
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; out the environment it receives, and one sets the MEANING_OF_LIFE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; environment variable, spawns the previous 'env printing' program, and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exits.  I run via:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ env -i HOME=/home/tfogal \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PATH=/bin:/usr/bin:/usr/local/bin:/sbin:/usr/sbin \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -x TJFVAR=testing -n 5 ./mpienv ./envpar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and expect (well, hope) to find the MEANING_OF_LIFE in 'envpar's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; output.  I do see TJFVAR, but the MEANING_OF_LIFE sadly does not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; propagate.  Perhaps I am asking the wrong question...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I found another MPI implementation which allowed passing such
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; information via the MPI_Info argument, however I could find no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; documentation of similar functionality in Open MPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there a way to accomplish what I'm looking for?  I could even be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; convinced to hack source, but a starting pointer would be appreciated.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -tom
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  From 8285a7625e5ea014b9d4df5dd65a7642fd4bc322 Mon Sep 17 00:00:00 2001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Tom Fogal &lt;tfogal_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Fri, 13 Dec 2013 12:03:56 +0100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [PATCH 1/3] btl: Remove warnings about unused lexing functions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/mca/btl/openib/btl_openib_lex.l | 2 ++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 file changed, 2 insertions(+)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/ompi/mca/btl/openib/btl_openib_lex.l b/ompi/mca/btl/openib/btl_openib_lex.l
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 2aa6059..7455b78 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/ompi/mca/btl/openib/btl_openib_lex.l
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/ompi/mca/btl/openib/btl_openib_lex.l
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1,3 +1,5 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +%option nounput
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +%option noinput
</span><br>
<span class="quotelev3">&gt;&gt;&gt; %{ /* -*- C -*- */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.8.3.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  From dff9fd5ef69f09de6d0fee2236c39a79e8674f92 Mon Sep 17 00:00:00 2001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Tom Fogal &lt;tfogal_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Fri, 13 Dec 2013 13:06:41 +0100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [PATCH 2/3] mca: cleanup buf, ps when errors occur.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/mca/plm/base/plm_base_proxy.c | 4 +++-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 file changed, 3 insertions(+), 1 deletion(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/orte/mca/plm/base/plm_base_proxy.c b/orte/mca/plm/base/plm_base_proxy.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 5d2b100..275cb3a 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/orte/mca/plm/base/plm_base_proxy.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/orte/mca/plm/base/plm_base_proxy.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -128,14 +128,15 @@ int orte_plm_proxy_spawn(orte_job_t *jdata)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    command = ORTE_PLM_LAUNCH_JOB_CMD;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (ORTE_SUCCESS != (rc = opal_dss.pack(buf, &amp;command, 1, ORTE_PLM_CMD))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        OBJ_RELEASE(buf);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        goto CLEANUP;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* pack the jdata object */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (ORTE_SUCCESS != (rc = opal_dss.pack(buf, &amp;jdata, 1, ORTE_JOB))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        OBJ_RELEASE(buf);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        goto CLEANUP;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* create the proxy spawn object */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -153,6 +154,7 @@ int orte_plm_proxy_spawn(orte_job_t *jdata)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                          orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OBJ_RELEASE(buf);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        OBJ_RELEASE(ps);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        goto CLEANUP;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.8.3.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  From a90f1fb49df1ff9442476b5e4294353ebb94498b Mon Sep 17 00:00:00 2001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Tom Fogal &lt;tfogal_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Fri, 13 Dec 2013 15:09:10 +0100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [PATCH 3/3] info: accept env vars desired in child processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This looks for &quot;env&quot; keys in MPI_Info structures, which should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then used to forward environment variables from parent to child
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when spawning jobs.  However, note this doesn't (yet) change the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawn machinery.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/mca/dpm/orte/dpm_orte.c | 12 ++++++++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/runtime/orte_globals.c  |  2 ++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/runtime/orte_globals.h  |  2 ++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 files changed, 16 insertions(+)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/ompi/mca/dpm/orte/dpm_orte.c b/ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 65099a5..b61d6f2 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -680,6 +680,7 @@ static int spawn(int count, const char *array_of_commands[],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    char mapper[OPAL_PATH_MAX];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    int npernode;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    char slot_list[OPAL_PATH_MAX];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    char envvar[1024]; /* better magic number? */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    orte_job_t *jdata;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    orte_app_context_t *app;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -705,6 +706,7 @@ static int spawn(int count, const char *array_of_commands[],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       - &quot;path&quot;: list of directories where to look for the executable
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       - &quot;file&quot;: filename, where additional information is provided.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       - &quot;soft&quot;: see page 92 of MPI-2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +       - &quot;env&quot;: environment variables desired in the children.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* setup the job object */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1358,6 +1360,16 @@ static int spawn(int count, const char *array_of_commands[],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    jdata-&gt;stdin_target = strtoul(stdin_target, NULL, 10);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            /* did the user want us to forward any environment variables? */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            ompi_info_get (array_of_info[i], &quot;env&quot;, sizeof(envvar)-1, envvar,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                           &amp;flag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            if ( flag ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +              jdata-&gt;nenv_vars++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +              jdata-&gt;env_vars = realloc(jdata-&gt;env_vars,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                        jdata-&gt;nenv_vars*sizeof(char*));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +              jdata-&gt;env_vars[jdata-&gt;nenv_vars-1] = strdup(envvar);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        /* default value: If the user did not tell us where to look for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/orte/runtime/orte_globals.c b/orte/runtime/orte_globals.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index f3e3029..e4ba975 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/orte/runtime/orte_globals.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/orte/runtime/orte_globals.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -742,6 +742,8 @@ static void orte_job_construct(orte_job_t* job)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    job-&gt;ckpt_snapshot_ref = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    job-&gt;ckpt_snapshot_loc = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    job-&gt;env_vars = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    job-&gt;nenv_vars = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static void orte_job_destruct(orte_job_t* job)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/orte/runtime/orte_globals.h b/orte/runtime/orte_globals.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index f284045..d12296b 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/orte/runtime/orte_globals.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/orte/runtime/orte_globals.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -463,6 +463,8 @@ typedef struct {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* snapshot location */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    char *ckpt_snapshot_loc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    char** env_vars;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    size_t nenv_vars;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; } orte_job_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_DECLSPEC OBJ_CLASS_DECLARATION(orte_job_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.8.3.2
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="23260.php">Brandon Turner: "Re: [OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)"</a>
<li><strong>Previous message:</strong> <a href="23258.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23257.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23261.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="23261.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
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
