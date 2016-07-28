<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18804";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 16:51:09 2008" -->
<!-- isoreceived="20080703205109" -->
<!-- sent="Thu, 3 Jul 2008 16:50:59 -0400" -->
<!-- isosent="20080703205059" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r18804" -->
<!-- id="5460708E-F13D-4C18-A1EE-5ACC9371872A_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200807031753.m63HrbOI013860_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r18804<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-03 16:50:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4275.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4273.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph, this fix does the trick.
<br>
<p>Aurelien
<br>
<p>Le 3 juil. 08 &#224; 13:53, rhc_at_[hidden] a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2008-07-03 13:53:37 EDT (Thu, 03 Jul 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 18804
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18804">https://svn.open-mpi.org/trac/ompi/changeset/18804</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Repair the MPI-2 dynamic operations. This includes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. repair of the linear and direct routed modules
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. repair of the ompi/pubsub/orte module to correctly init routes to  
</span><br>
<span class="quotelev1">&gt; the ompi-server, and correctly handle failure to correctly parse the  
</span><br>
<span class="quotelev1">&gt; provided ompi-server URI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. modification of orterun to accept both &quot;file&quot; and &quot;FILE&quot; for  
</span><br>
<span class="quotelev1">&gt; designating where the ompi-server URI is to be found - purely a  
</span><br>
<span class="quotelev1">&gt; convenience feature
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. resolution of a message ordering problem during the connect/ 
</span><br>
<span class="quotelev1">&gt; accept handshake that allowed the &quot;send-first&quot; proc to attempt to  
</span><br>
<span class="quotelev1">&gt; send to the &quot;recv-first&quot; proc before the HNP had actually updated  
</span><br>
<span class="quotelev1">&gt; its routes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let this be a further reminder to all - message ordering is NOT  
</span><br>
<span class="quotelev1">&gt; guaranteed in the OOB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. Repair the ompi/dpm/orte module to correctly init routes during  
</span><br>
<span class="quotelev1">&gt; connect/accept.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reminder to all: messages sent to procs in another job family (i.e.,  
</span><br>
<span class="quotelev1">&gt; started by a different mpirun) are ALWAYS routed through the  
</span><br>
<span class="quotelev1">&gt; respective HNPs. As per the comments in orte/routed, this is  
</span><br>
<span class="quotelev1">&gt; REQUIRED to maintain connect/accept (where only the root proc on  
</span><br>
<span class="quotelev1">&gt; each side is capable of init'ing the routes), allow communication  
</span><br>
<span class="quotelev1">&gt; between mpirun's using different routing modules, and to minimize  
</span><br>
<span class="quotelev1">&gt; connections on tools such as ompi-server. It is all taken care of  
</span><br>
<span class="quotelev1">&gt; &quot;under the covers&quot; by the OOB to ensure that a route back to the  
</span><br>
<span class="quotelev1">&gt; sender is maintained, even when the different mpirun's are using  
</span><br>
<span class="quotelev1">&gt; different routed modules.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6. corrections in the orte/odls to ensure proper identification of  
</span><br>
<span class="quotelev1">&gt; daemons participating in a dynamic launch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 7. corrections in build/nidmap to support update of an existing  
</span><br>
<span class="quotelev1">&gt; nidmap during dynamic launch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 8. corrected implementation of the update_arch function in the ESS,  
</span><br>
<span class="quotelev1">&gt; along with consolidation of a number of ESS operations into base  
</span><br>
<span class="quotelev1">&gt; functions for easier maintenance. The ability to support info from  
</span><br>
<span class="quotelev1">&gt; multiple jobs was added, although we don't currently do so - this  
</span><br>
<span class="quotelev1">&gt; will come later to support further fault recovery strategies
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 9. minor updates to several functions to remove unnecessary and/or  
</span><br>
<span class="quotelev1">&gt; no longer used variables and envar's, add some debugging output, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 10. addition of a new macro ORTE_PROC_IS_DAEMON that resolves to  
</span><br>
<span class="quotelev1">&gt; true if the provided proc is a daemon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is still more cleanup to be done for efficiency, but this at  
</span><br>
<span class="quotelev1">&gt; least works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tested on single-node Mac, multi-node SLURM via odin. Tests included  
</span><br>
<span class="quotelev1">&gt; connect/accept, publish/lookup/unpublish, comm_spawn,  
</span><br>
<span class="quotelev1">&gt; comm_spawn_multiple, and singleton comm_spawn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fixes ticket #1256
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/base/ess_base_nidmap.c
</span><br>
<span class="quotelev1">&gt; Removed:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/base/ess_base_build_nidmap.c
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/attribute/attribute_predefined.c         |    13
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/dpm/base/base.h                      |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/dpm/base/dpm_base_null_fns.c         |     5
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/dpm/base/dpm_base_open.c             |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/dpm/dpm.h                            |     7
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/dpm/orte/dpm_orte.c                  |   494 +++++++ 
</span><br>
<span class="quotelev1">&gt; +++++++++++++++-----------------
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pubsub/orte/pubsub_orte.c            |    14
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/proc/proc.c                              |     1
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/alps/ess_alps_module.c           |   163 ++++ 
</span><br>
<span class="quotelev1">&gt; +--------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/base/Makefile.am                 |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/base/base.h                      |    12
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/base/ess_base_get.c              |     9
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/base/ess_base_put.c              |     8
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/env/ess_env_module.c             |   144 ++++ 
</span><br>
<span class="quotelev1">&gt; +------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/hnp/ess_hnp_module.c             |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/lsf/ess_lsf_module.c             |   138 ++++ 
</span><br>
<span class="quotelev1">&gt; +-----
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/singleton/ess_singleton_module.c |   182 ++++++ 
</span><br>
<span class="quotelev1">&gt; +------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/slurm/ess_slurm_module.c         |   136 ++++ 
</span><br>
<span class="quotelev1">&gt; +-----
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/tool/ess_tool_module.c           |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/bad/grpcomm_bad_module.c     |    22 +
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/base/grpcomm_base_modex.c    |    13
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_base_default_fns.c    |    52 ++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_base_open.c           |     8
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_private.h             |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rml/base/rml_base_receive.c          |    21 +
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rml/rml_types.h                      |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/binomial/routed_binomial.c    |   192 +++++++ 
</span><br>
<span class="quotelev1">&gt; ++++++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/direct/routed_direct.c        |   316 +++++++ 
</span><br>
<span class="quotelev1">&gt; +++++++++++------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/linear/routed_linear.c        |   198 +++++++ 
</span><br>
<span class="quotelev1">&gt; ++++++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/runtime/orte_globals.h                   |    15 +
</span><br>
<span class="quotelev1">&gt;   trunk/orte/runtime/orte_globals_class_instances.h   |    51 ++++
</span><br>
<span class="quotelev1">&gt;   trunk/orte/test/mpi/accept.c                        |     1
</span><br>
<span class="quotelev1">&gt;   trunk/orte/tools/orterun/orterun.c                  |     3
</span><br>
<span class="quotelev1">&gt;   trunk/orte/util/name_fns.h                          |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/util/nidmap.c                            |   105 ++++----
</span><br>
<span class="quotelev1">&gt;   trunk/orte/util/nidmap.h                            |     3
</span><br>
<span class="quotelev1">&gt;   trunk/orte/util/proc_info.c                         |    10
</span><br>
<span class="quotelev1">&gt;   trunk/orte/util/proc_info.h                         |     5
</span><br>
<span class="quotelev1">&gt;   38 files changed, 1443 insertions(+), 916 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diff not shown due to size (154082 bytes).
</span><br>
<span class="quotelev1">&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	svn diff -r 18803:18804 --no-diff-deleted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4275.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4273.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
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
