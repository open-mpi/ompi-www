<?
$subject_val = "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 11:54:26 2012" -->
<!-- isoreceived="20120215165426" -->
<!-- sent="Wed, 15 Feb 2012 11:54:26 -0500" -->
<!-- isosent="20120215165426" -->
<!-- name="yanyg_at_[hidden]" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list" -->
<!-- id="4F3B9CF2.10938.6783515A_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list" -->
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
<strong>Subject:</strong> Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list<br>
<strong>From:</strong> <a href="mailto:yanyg_at_[hidden]?Subject=Re:%20[OMPI%20users]%20help:%20sm%20btl%20does%20not%20work%20when%20I%20specify%20the%20same%20host%20twice%20or%20more%20in%20the%20node%20list"><em>yanyg_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-02-15 11:54:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18485.php">Tohiko Looka: "Re: [OMPI users] Different Prefix for different nodes"</a>
<li><strong>Previous message:</strong> <a href="18483.php">Shamis, Pavel: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<li><strong>Maybe in reply to:</strong> <a href="18425.php">yanyg_at_[hidden]: "[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18490.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Reply:</strong> <a href="18490.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; No, there are no others you need to set. Ralph's referring to the fact
</span><br>
<span class="quotelev1">&gt; that we set OMPI environment variables in the processes that are
</span><br>
<span class="quotelev1">&gt; started on the remote nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was asking to ensure you hadn't set any MCA parameters in the
</span><br>
<span class="quotelev1">&gt; environment that could be creating a problem. Do you have any set in
</span><br>
<span class="quotelev1">&gt; files, perchance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And can you run &quot;env | grep OMPI&quot; from the script that you invoked via
</span><br>
<span class="quotelev1">&gt; mpirun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So just to be clear on the exact problem you're seeing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - you mpirun on a single node and all works fine
</span><br>
<span class="quotelev1">&gt; - you mpirun on multiple nodes and all works fine (e.g., mpirun --host
</span><br>
<span class="quotelev1">&gt; a,b,c your_executable) - you mpirun on multiple nodes and list a host
</span><br>
<span class="quotelev1">&gt; more than once and it hangs (e.g., mpirun --host a,a,b,c
</span><br>
<span class="quotelev1">&gt; your_executable)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, can you attach a debugger to one of the hung processes and see
</span><br>
<span class="quotelev1">&gt; exactly where it's hung? (i.e., get the stack traces)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Per a question from your prior mail: yes, Open MPI does create mmapped
</span><br>
<span class="quotelev1">&gt; files in /tmp for use with shared memory communication. They *should*
</span><br>
<span class="quotelev1">&gt; get cleaned up when you exit, however, unless something disastrous
</span><br>
<span class="quotelev1">&gt; happens. 
</span><br>
<p>Thank you very much!
<br>
<p>Now I am more clear with what Ralph asked. 
<br>
<p>Yes what you described is right with the sm btl layer. As I double 
<br>
checked again, the problem is that when I use sm btl for MPI 
<br>
commnunication on the same host(as --mca btl openib,sm,self), 
<br>
issues come up as you described, all ran well on a single node, all 
<br>
ran well on multiple but different nodes, but it hang at MPI_Init() call 
<br>
if I ran on multiple nodes and list a host more than once. However, 
<br>
if I instead use tcp or openib btl without sm layer(as --mca btl 
<br>
openib,self), all these 3 cases ran just fine. 
<br>
<p>I do setup the MCAs &quot;plm_rsh_agent&quot; to &quot;rsh:ssh&quot; and 
<br>
&quot;btl_openib_warn_default_gid_prefix&quot; to 0 in all cases, with or 
<br>
without sm btl layer. The OMPI environment variables set for each 
<br>
processes are quoted below(as output by env | grep OMPI in my 
<br>
script invoked by mpirun):
<br>
<p>------
<br>
//process #0:
<br>
<p>OMPI_MCA_plm_rsh_agent=rsh:ssh 
<br>
OMPI_MCA_btl_openib_warn_default_gid_prefix=0 
<br>
OMPI_MCA_btl=openib,sm,self 
<br>
OMPI_MCA_orte_precondition_transports=3a07553f5dca58b5-
<br>
21784eac1fc85294 
<br>
OMPI_MCA_orte_local_daemon_uri=195559424.0;tcp://198.177.14
<br>
6.70:53997;tcp://10.10.10.4:53997;tcp://172.23.10.1:53997;tcp://172
<br>
.33.10.1:53997 
<br>
OMPI_MCA_orte_hnp_uri=195559424.0;tcp://198.177.146.70:53997
<br>
;tcp://10.10.10.4:53997;tcp://172.23.10.1:53997;tcp://172.33.10.1:53
<br>
997 OMPI_MCA_mpi_yield_when_idle=0 
<br>
OMPI_MCA_orte_app_num=0 OMPI_UNIVERSE_SIZE=4 
<br>
OMPI_MCA_ess=env OMPI_MCA_orte_ess_num_procs=4 
<br>
OMPI_COMM_WORLD_SIZE=4 
<br>
OMPI_COMM_WORLD_LOCAL_SIZE=2 
<br>
OMPI_MCA_orte_ess_jobid=195559425 
<br>
OMPI_MCA_orte_ess_vpid=0 OMPI_COMM_WORLD_RANK=0 
<br>
OMPI_COMM_WORLD_LOCAL_RANK=0
<br>
<p>//process #1:
<br>
<p>OMPI_MCA_plm_rsh_agent=rsh:ssh 
<br>
OMPI_MCA_btl_openib_warn_default_gid_prefix=0 
<br>
OMPI_MCA_btl=openib,sm,self 
<br>
OMPI_MCA_orte_precondition_transports=3a07553f5dca58b5-
<br>
21784eac1fc85294 
<br>
OMPI_MCA_orte_local_daemon_uri=195559424.0;tcp://198.177.14
<br>
6.70:53997;tcp://10.10.10.4:53997;tcp://172.23.10.1:53997;tcp://172
<br>
.33.10.1:53997 
<br>
OMPI_MCA_orte_hnp_uri=195559424.0;tcp://198.177.146.70:53997
<br>
;tcp://10.10.10.4:53997;tcp://172.23.10.1:53997;tcp://172.33.10.1:53
<br>
997 OMPI_MCA_mpi_yield_when_idle=0 
<br>
OMPI_MCA_orte_app_num=1 OMPI_UNIVERSE_SIZE=4 
<br>
OMPI_MCA_ess=env OMPI_MCA_orte_ess_num_procs=4 
<br>
OMPI_COMM_WORLD_SIZE=4 
<br>
OMPI_COMM_WORLD_LOCAL_SIZE=2 
<br>
OMPI_MCA_orte_ess_jobid=195559425 
<br>
OMPI_MCA_orte_ess_vpid=1 OMPI_COMM_WORLD_RANK=1 
<br>
OMPI_COMM_WORLD_LOCAL_RANK=1
<br>
<p>//process #3:
<br>
<p>OMPI_MCA_plm_rsh_agent=rsh:ssh 
<br>
OMPI_MCA_btl_openib_warn_default_gid_prefix=0 
<br>
OMPI_MCA_btl=openib,sm,self 
<br>
OMPI_MCA_orte_precondition_transports=3a07553f5dca58b5-
<br>
21784eac1fc85294 OMPI_MCA_orte_daemonize=1 
<br>
OMPI_MCA_orte_hnp_uri=195559424.0;tcp://198.177.146.70:53997
<br>
;tcp://10.10.10.4:53997;tcp://172.23.10.1:53997;tcp://172.33.10.1:53
<br>
997 OMPI_MCA_ess=env OMPI_MCA_orte_ess_jobid=195559425 
<br>
OMPI_MCA_orte_ess_vpid=3 OMPI_MCA_orte_ess_num_procs=4 
<br>
OMPI_MCA_orte_local_daemon_uri=195559424.1;tcp://198.177.14
<br>
6.71:53290;tcp://10.10.10.1:53290;tcp://172.23.10.2:53290;tcp://172
<br>
.33.10.2:53290 OMPI_MCA_mpi_yield_when_idle=0 
<br>
OMPI_MCA_orte_app_num=3 OMPI_UNIVERSE_SIZE=4 
<br>
OMPI_COMM_WORLD_SIZE=4 
<br>
OMPI_COMM_WORLD_LOCAL_SIZE=2 
<br>
OMPI_COMM_WORLD_RANK=3 
<br>
OMPI_COMM_WORLD_LOCAL_RANK=1
<br>
<p>//process #2:
<br>
<p>OMPI_MCA_plm_rsh_agent=rsh:ssh 
<br>
OMPI_MCA_btl_openib_warn_default_gid_prefix=0 
<br>
OMPI_MCA_btl=openib,sm,self 
<br>
OMPI_MCA_orte_precondition_transports=3a07553f5dca58b5-
<br>
21784eac1fc85294 OMPI_MCA_orte_daemonize=1 
<br>
OMPI_MCA_orte_hnp_uri=195559424.0;tcp://198.177.146.70:53997
<br>
;tcp://10.10.10.4:53997;tcp://172.23.10.1:53997;tcp://172.33.10.1:53
<br>
997 OMPI_MCA_ess=env OMPI_MCA_orte_ess_jobid=195559425 
<br>
OMPI_MCA_orte_ess_vpid=2 OMPI_MCA_orte_ess_num_procs=4 
<br>
OMPI_MCA_orte_local_daemon_uri=195559424.1;tcp://198.177.14
<br>
6.71:53290;tcp://10.10.10.1:53290;tcp://172.23.10.2:53290;tcp://172
<br>
.33.10.2:53290 OMPI_MCA_mpi_yield_when_idle=0 
<br>
OMPI_MCA_orte_app_num=2 OMPI_UNIVERSE_SIZE=4 
<br>
OMPI_COMM_WORLD_SIZE=4 
<br>
OMPI_COMM_WORLD_LOCAL_SIZE=2 
<br>
OMPI_COMM_WORLD_RANK=2 
<br>
OMPI_COMM_WORLD_LOCAL_RANK=0
<br>
<p>------
<br>
process #0 and #1 are on the same host, while process #2 and #3 
<br>
are on the other.
<br>
<p>When I use sm btl layer, my program just hang at the MPI_Init() at 
<br>
the very beginning. 
<br>
<p>I wish I made myself clear.
<br>
<p>Thanks,
<br>
Yiguang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18485.php">Tohiko Looka: "Re: [OMPI users] Different Prefix for different nodes"</a>
<li><strong>Previous message:</strong> <a href="18483.php">Shamis, Pavel: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<li><strong>Maybe in reply to:</strong> <a href="18425.php">yanyg_at_[hidden]: "[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18490.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Reply:</strong> <a href="18490.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
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
