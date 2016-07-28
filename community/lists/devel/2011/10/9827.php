<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 17 18:23:41 2011" -->
<!-- isoreceived="20111017222341" -->
<!-- sent="Mon, 17 Oct 2011 16:23:32 -0600" -->
<!-- isosent="20111017222332" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303" -->
<!-- id="FDE209C1-857E-4CC0-8A65-2508ABFB7068_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E6AAB71F-5184-4A89-A643-1E047FD59FAD_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-17 18:23:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9828.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302"</a>
<li><strong>Previous message:</strong> <a href="9826.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303"</a>
<li><strong>In reply to:</strong> <a href="9826.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9829.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303"</a>
<li><strong>Reply:</strong> <a href="9829.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 17, 2011, at 4:14 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a concern about the code below (snippet from the commit 25303). You moved the setting of proc_flags and proc_name in a function named set_arch. As the name and the lengthy comment above it indicate, the scope of this particular function is to set the architecture of the remote process, not the locality flag or the process name.
</span><br>
<p>I agree. However, there is no harm in moving those settings to that function. Indeed, there is a significant advantage in doing so as it allows the data to be exchanged during the modex, instead of mandating that ORTE provide it.
<br>
<p>I agree that the function name is now somewhat inaccurate, but chose not to change it as (a) I couldn't think of a better alternative, and (b) it seemed a trivial issue. If it bothers you or others, however, please feel free to change the name of the function.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: ompi/proc/proc.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/proc/proc.c	(revision 25302)
</span><br>
<span class="quotelev1">&gt; +++ ompi/proc/proc.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -119,11 +119,6 @@
</span><br>
<span class="quotelev1">&gt;             if (OMPI_SUCCESS != (ret = ompi_modex_send_key_value(&quot;OMPI_ARCH&quot;, &amp;proc-&gt;proc_arch, OPAL_UINT32))) {
</span><br>
<span class="quotelev1">&gt;                 return ret;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; -        } else {
</span><br>
<span class="quotelev1">&gt; -            /* get the locality information */
</span><br>
<span class="quotelev1">&gt; -            proc-&gt;proc_flags = orte_ess.proc_get_locality(&amp;proc-&gt;proc_name);
</span><br>
<span class="quotelev1">&gt; -            /* get the name of the node it is on */
</span><br>
<span class="quotelev1">&gt; -            proc-&gt;proc_hostname = orte_ess.proc_get_hostname(&amp;proc-&gt;proc_name);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -149,8 +144,8 @@
</span><br>
<span class="quotelev1">&gt;     OPAL_THREAD_LOCK(&amp;ompi_proc_lock);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     for( item  = opal_list_get_first(&amp;ompi_proc_list);
</span><br>
<span class="quotelev1">&gt; -        item != opal_list_get_end(&amp;ompi_proc_list);
</span><br>
<span class="quotelev1">&gt; -        item  = opal_list_get_next(item)) {
</span><br>
<span class="quotelev1">&gt; +         item != opal_list_get_end(&amp;ompi_proc_list);
</span><br>
<span class="quotelev1">&gt; +         item  = opal_list_get_next(item)) {
</span><br>
<span class="quotelev1">&gt;         proc = (ompi_proc_t*)item;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if (proc-&gt;proc_name.vpid != ORTE_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev1">&gt; @@ -177,6 +172,10 @@
</span><br>
<span class="quotelev1">&gt;                 OPAL_THREAD_UNLOCK(&amp;ompi_proc_lock);
</span><br>
<span class="quotelev1">&gt;                 return ret;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; +            /* get the locality information */
</span><br>
<span class="quotelev1">&gt; +            proc-&gt;proc_flags = orte_ess.proc_get_locality(&amp;proc-&gt;proc_name);
</span><br>
<span class="quotelev1">&gt; +            /* get the name of the node it is on */
</span><br>
<span class="quotelev1">&gt; +            proc-&gt;proc_hostname = orte_ess.proc_get_hostname(&amp;proc-&gt;proc_name);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     OPAL_THREAD_UNLOCK(&amp;ompi_proc_lock);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 17, 2011, at 16:51 , rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2011-10-17 16:51:22 EDT (Mon, 17 Oct 2011)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 25303
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25303">https://svn.open-mpi.org/trac/ompi/changeset/25303</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Complete implementation of pmi support. Ensure we support both mpirun and direct launch within same configuration to avoid requiring separate builds. Add support for generic pmi, not just under slurm. Add publish/subscribe support, although slurm's pmi implementation will just return an error as it hasn't been done yet.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Added:
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pubsub/pmi/   (props changed)
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pubsub/pmi/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pubsub/pmi/configure.m4
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pubsub/pmi/pubsub_pmi.c
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pubsub/pmi/pubsub_pmi.h
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pubsub/pmi/pubsub_pmi_component.c
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/pmi/   (props changed)
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/pmi/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/pmi/configure.m4
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/pmi/ess_pmi.h
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/pmi/ess_pmi_component.c
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/pmi/ess_pmi_module.c
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/proc/proc.c                             |    13                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/config/orte_check_pmi.m4                |     3                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/slurmd/Makefile.am              |    10                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/slurmd/configure.m4             |    16 -                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/slurmd/ess_slurmd_component.c   |    16 -                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/slurmd/ess_slurmd_module.c      |   158 +++++---------                          
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/grpcomm/pmi/grpcomm_pmi_component.c |    43 +++                                     
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/grpcomm/pmi/grpcomm_pmi_module.c    |   414 +++++++++++++++++++++++++++------------ 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/nidmap.c                           |     3                                         
</span><br>
<span class="quotelev2">&gt;&gt;  9 files changed, 396 insertions(+), 280 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Diff not shown due to size (69184 bytes).
</span><br>
<span class="quotelev2">&gt;&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	svn diff -r 25302:25303 --no-diff-deleted
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9828.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302"</a>
<li><strong>Previous message:</strong> <a href="9826.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303"</a>
<li><strong>In reply to:</strong> <a href="9826.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9829.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303"</a>
<li><strong>Reply:</strong> <a href="9829.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303"</a>
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
