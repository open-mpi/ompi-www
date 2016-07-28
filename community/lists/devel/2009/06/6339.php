<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 18:50:30 2009" -->
<!-- isoreceived="20090624225030" -->
<!-- sent="Wed, 24 Jun 2009 16:50:15 -0600" -->
<!-- isosent="20090624225015" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513" -->
<!-- id="C4D5639D-8364-4291-9A7C-21E0CF2AA8A5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="670F7C7B-3D2C-4A7A-94C3-12B384CBF034_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 18:50:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6340.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>Previous message:</strong> <a href="6338.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>In reply to:</strong> <a href="6338.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6340.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe you are using a bad example here George. If you look closely  
<br>
at the code, you will see that we treat the orte_launch_agent  
<br>
separately from everything else - it gets passed through the following  
<br>
code:
<br>
<p>int orte_plm_base_setup_orted_cmd(int *argc, char ***argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i, loc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char **tmpv;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* set default location */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;loc = -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* split the command apart in case it is multi-word */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmpv = opal_argv_split(orte_launch_agent, ' ');
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; NULL != tmpv &amp;&amp; NULL != tmpv[i]; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 == strcmp(tmpv[i], &quot;orted&quot;)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;loc = i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_argv_append(argc, argv, tmpv[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_argv_free(tmpv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return loc;
<br>
}
<br>
<p>Thus, we automatically deal with orte_launch_agent just in case it is  
<br>
a multi-word command.
<br>
<p>The only things that go through your code loop are the non-orte-launch- 
<br>
agent params - and they get messed up.
<br>
<p>We added this code specifically because Tim P and I wanted to pass  
<br>
multi-word orted cmds. It was (and is) the only case where this is of  
<br>
any use today.
<br>
<p>Ralph
<br>
<p>On Jun 24, 2009, at 4:05 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Just for the sake of it. A funy command line to try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bosilca_at_dancer ~]$ mpirun --mca routed_base_verbose 0 --leave- 
</span><br>
<span class="quotelev1">&gt; session-attached -np 1 --mca orte_launch_agent &quot;orted --mca  
</span><br>
<span class="quotelev1">&gt; routed_base_verbose 1&quot; uptime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node03:22355] [[14661,0],1] routed_linear: init routes for daemon  
</span><br>
<span class="quotelev1">&gt; job [14661,0]
</span><br>
<span class="quotelev1">&gt; 	hnp_uri 960823296.0;tcp://192.168.1.254:58135;tcp://192.168.0.2:58135
</span><br>
<span class="quotelev1">&gt; 18:02:59 up 26 days, 17:41,  0 users,  load average: 0.97, 0.50, 0.53
</span><br>
<span class="quotelev1">&gt; [bosilca_at_dancer ~]$ [node03:22355] [[14661,0],1]  
</span><br>
<span class="quotelev1">&gt; routed_linear_get([[14661,0],0]) --&gt; [[14661,0],0]
</span><br>
<span class="quotelev1">&gt; [node03:22355] [[14661,0],1] routed_linear: init routes for daemon  
</span><br>
<span class="quotelev1">&gt; job [14661,0]
</span><br>
<span class="quotelev1">&gt; 	hnp_uri 960823296.0;tcp://192.168.1.254:58135;tcp://192.168.0.2:58135
</span><br>
<span class="quotelev1">&gt; [node03:22355] [[14661,0],1] routed_linear_get([[14661,0],0]) --&gt;  
</span><br>
<span class="quotelev1">&gt; [[14661,0],0]
</span><br>
<span class="quotelev1">&gt; [node03:22355] [[14661,0],1] routed_linear_get([[14661,0],0]) --&gt;  
</span><br>
<span class="quotelev1">&gt; [[14661,0],0]
</span><br>
<span class="quotelev1">&gt; [node03:22355] [[14661,0],1] routed_linear_get([[14661,0],0]) --&gt;  
</span><br>
<span class="quotelev1">&gt; [[14661,0],0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This set the routed_base_verbose to zero for the HNP, and to 1 for  
</span><br>
<span class="quotelev1">&gt; everybody else. As you can see from the output the orted output  
</span><br>
<span class="quotelev1">&gt; routed information which means it correctly interpreted the  
</span><br>
<span class="quotelev1">&gt; multiword argument.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 24, 2009, at 17:52 , George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 24, 2009, at 17:41 , Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [14:38] svbu-mpi:~/svn/ompi/orte % mpirun --mca plm_base_verbose  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 100 --leave-session-attached -np 1 --mca orte_launch_agent &quot;$bogus/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bin/orted -s&quot; uptime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...lots of output...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	srun --nodes=1 --ntasks=1 --kill-on-bad-exit --nodelist=svbu- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi062 /home/jsquyres/bogus/bin/orted -s -mca ess slurm -mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ess_jobid 3195142144 -mca orte_ess_vpid 1 -mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ess_num_procs 2 --hnp-uri &quot;3195142144.0;tcp:// 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 172.29.218.140:34489;tcp://10.10.20.250:34489;tcp:// 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10.10.30.250:34489;tcp://192.168.183.1:34489;tcp:// 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 192.168.184.1:34489&quot; -mca orte_nodelist svbu-mpi062 --mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm_base_verbose 100 --mca orte_launch_agent &quot;/home/jsquyres/bogus/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bin/orted -s&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and it hangs, because the argv[0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/home/jsquyres/bogus/bin/orted -s&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (including the quotes!) cannot be exec'ed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK so maybe the -s option was a bad example (it's the one I use  
</span><br>
<span class="quotelev2">&gt;&gt; regularly). It block the orted, you will have to log on each node,  
</span><br>
<span class="quotelev2">&gt;&gt; attach with gdb to the orted, and release them by doing a &quot;set  
</span><br>
<span class="quotelev2">&gt;&gt; orted_spin_flag=0&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 24, 2009, at 5:15 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can't guarantee this for all PLM but I can confirm that rsh and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slurm (1.3.12) works well with this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We try with and without Open MPI, and the outcome is the same.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [bosilca_at_dancer c]$ srun -n 4 echo &quot;1 2 3 4 5 it works&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 2 3 4 5 it works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 2 3 4 5 it works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 2 3 4 5 it works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 2 3 4 5 it works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [bosilca_at_dancer c]$ srun -N 2 -c 2 mpirun --mca plm slurm --mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_launch_agent &quot;orted -s&quot; --mca plm_rsh_tree_spawn 1 --bynode  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pml ob1 --mca orte_daemon_spin 0 ./hello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 0 of 2 on node03
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 1 of 2 on node04
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *after releasing the orted from their spin.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In fact what I find strange is the old behavior. Dropping arguments
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; without even letting the user know about it, is certainly not a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; desirable approach.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 24, 2009, at 16:15 , Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Yo George
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; This commit is going to break non-rsh launchers. While it is true
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; that the rsh launcher may handle multi-word options by putting  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; them
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; in quotes, we specifically avoided it here because it breaks  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Torque, and others.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; This is why we specifically put the inclusion of multi-word  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; options
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; in the rsh plm module, and not here. Would you please move it  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; back
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; there?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; On Wed, Jun 24, 2009 at 1:51 PM, &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Date: 2009-06-24 15:51:52 EDT (Wed, 24 Jun 2009)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; New Revision: 21513
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21513">https://svn.open-mpi.org/trac/ompi/changeset/21513</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Log:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; When we get a report from an orted about its state, don't use the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; sender of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; the message to update the structures, but instead use the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; information from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; the URI. The reason is that even the launch report messages can  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; get
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; routed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Deal with the orted_cmd_line in a single location.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;   trunk/orte/mca/plm/base/plm_base_launch_support.c |    69 ++++ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++++
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; ++++++++++++++----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;   1 files changed, 41 insertions(+), 28 deletions(-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Modified: trunk/orte/mca/plm/base/plm_base_launch_support.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; --- trunk/orte/mca/plm/base/plm_base_launch_support.c    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (original)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +++ trunk/orte/mca/plm/base/plm_base_launch_support.c    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2009-06-24
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; 15:51:52 EDT (Wed, 24 Jun 2009)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; @@ -433,7 +433,8 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;  {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     orte_message_event_t *mev = (orte_message_event_t*)data;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     opal_buffer_t *buffer = mev-&gt;buffer;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -    char *rml_uri;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +    orte_process_name_t peer;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +    char *rml_uri = NULL;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     int rc, idx;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     int32_t arch;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     orte_node_t **nodes;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; @@ -442,19 +443,11 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     int64_t setupsec, setupusec;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     int64_t startsec, startusec;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -    OPAL_OUTPUT_VERBOSE((5, orte_plm_globals.output,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -                         &quot;%s plm:base:orted_report_launch from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; daemon %s&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -                         ORTE_NAME_PRINT(&amp;mev-&gt;sender)));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     /* see if we need to timestamp this receipt */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     if (orte_timing) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;         gettimeofday(&amp;recvtime, NULL);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -    /* update state */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -    pdatorted[mev-&gt;sender.vpid]-&gt;state =  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE_PROC_STATE_RUNNING;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     /* unpack its contact info */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     idx = 1;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     if (ORTE_SUCCESS != (rc = opal_dss.unpack(buffer, &amp;rml_uri,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; &amp;idx, OPAL_STRING))) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; @@ -466,13 +459,26 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     /* set the contact info into the hash table */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_rml.set_contact_info(rml_uri))) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;         ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -        free(rml_uri);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;         orted_failed_launch = true;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;         goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -    /* lookup and record this daemon's contact info */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -    pdatorted[mev-&gt;sender.vpid]-&gt;rml_uri = strdup(rml_uri);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -    free(rml_uri);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +    rc = orte_rml_base_parse_uris(rml_uri, &amp;peer, NULL );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +    if( ORTE_SUCCESS != rc ) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +        orted_failed_launch = true;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +        goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +    OPAL_OUTPUT_VERBOSE((5, orte_plm_globals.output,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +                         &quot;%s plm:base:orted_report_launch from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; daemon %s via %s&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +                         ORTE_NAME_PRINT(&amp;peer),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +                         ORTE_NAME_PRINT(&amp;mev-&gt;sender)));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +    /* update state and record for this daemon contact info */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +    pdatorted[peer.vpid]-&gt;state = ORTE_PROC_STATE_RUNNING;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +    pdatorted[peer.vpid]-&gt;rml_uri = rml_uri;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     /* get the remote arch */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     idx = 1;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; @@ -555,31 +561,33 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     /* lookup the node */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     nodes = (orte_node_t**)orte_node_pool-&gt;addr;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -    if (NULL == nodes[mev-&gt;sender.vpid]) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +    if (NULL == nodes[peer.vpid]) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;         ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;         orted_failed_launch = true;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;         goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     /* store the arch */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -    nodes[mev-&gt;sender.vpid]-&gt;arch = arch;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +    nodes[peer.vpid]-&gt;arch = arch;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     /* if a tree-launch is underway, send the cmd back */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     if (NULL != orte_tree_launch_cmd) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -        orte_rml.send_buffer(&amp;mev-&gt;sender, orte_tree_launch_cmd,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; ORTE_RML_TAG_DAEMON, 0);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +        orte_rml.send_buffer(&amp;peer, orte_tree_launch_cmd,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; ORTE_RML_TAG_DAEMON, 0);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;  CLEANUP:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     OPAL_OUTPUT_VERBOSE((5, orte_plm_globals.output,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -                         &quot;%s plm:base:orted_report_launch %s for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; daemon %s at contact %s&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +                         &quot;%s plm:base:orted_report_launch %s for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; daemon %s (via %s) at contact %s&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                          ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                          orted_failed_launch ? &quot;failed&quot; :  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;completed&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -                         ORTE_NAME_PRINT(&amp;mev-&gt;sender),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; pdatorted[mev-&gt;sender.vpid]-&gt;rml_uri));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +                         ORTE_NAME_PRINT(&amp;peer),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +                         ORTE_NAME_PRINT(&amp;mev-&gt;sender),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; pdatorted[peer.vpid]-&gt;rml_uri));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     /* release the message */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     OBJ_RELEASE(mev);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     if (orted_failed_launch) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +        if( NULL != rml_uri ) free(rml_uri);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;         orte_errmgr.incomplete_start(ORTE_PROC_MY_NAME-&gt;jobid,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; ORTE_ERROR_DEFAULT_EXIT_CODE);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     } else {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;         orted_num_callback++;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; @@ -1133,18 +1141,23 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;      * being sure to &quot;purge&quot; any that would cause problems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;      * on backend nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;      */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -    if (ORTE_PROC_IS_HNP) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +    if (ORTE_PROC_IS_HNP || ORTE_PROC_IS_DAEMON) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;         cnt = opal_argv_count(orted_cmd_line);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;         for (i=0; i &lt; cnt; i+=3) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -            /* if the specified option is more than one word, we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; don't
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -             * have a generic way of passing it as some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; environments ignore
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -             * any quotes we add, while others don't - so we  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ignore
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -             * such options. In most cases, this won't be a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -             * they typically only apply to things of interest  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; the HNP.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -             * Individual environments can add these back into  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; cmd line
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -             * as they know if it can be supported
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -             */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; -            if (NULL != strchr(orted_cmd_line[i+2], ' ')) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +             /* in the rsh environment, we can append multi-word
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; arguments
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +              * by enclosing them in quotes. Check for any  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; multi-word
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +              * mca params passed to mpirun and include them
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +              */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +             if (NULL != strchr(orted_cmd_line[i+2], ' ')) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +                char* param;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +                /* must add quotes around it */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +                asprintf(&amp;param, &quot;\&quot;%s\&quot;&quot;, orted_cmd_line[i+2]);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +                /* now pass it along */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +                opal_argv_append(argc, argv, orted_cmd_line[i]);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +                opal_argv_append(argc, argv, orted_cmd_line[i 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +1]);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +                opal_argv_append(argc, argv, param);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; +                free(param);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                 continue;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;             }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;             /* The daemon will attempt to open the PLM on the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; remote
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; svn mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6339/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6340.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>Previous message:</strong> <a href="6338.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>In reply to:</strong> <a href="6338.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6340.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
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
