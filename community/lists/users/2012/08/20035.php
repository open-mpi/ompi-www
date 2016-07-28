<?
$subject_val = "Re: [OMPI users] deprecated MCA parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 09:17:56 2012" -->
<!-- isoreceived="20120828131756" -->
<!-- sent="Tue, 28 Aug 2012 06:17:45 -0700" -->
<!-- isosent="20120828131745" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deprecated MCA parameter" -->
<!-- id="314C886B-D0F9-416B-A959-F6DB41E98533_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKbzMGcO8Cczeagbiurrvea+=s=igHgVaq3=rxv4XR_D3fm5TA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] deprecated MCA parameter<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-28 09:17:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20036.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="20034.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>In reply to:</strong> <a href="20034.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20036.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>Reply:</strong> <a href="20036.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, I see - yeah, the parameter technically is being renamed to &quot;orte_rsh_agent&quot; to avoid having users need to know the internal topology of the code base (i.e., that it is in the plm framework and the rsh component). It will always be there, though - only the name is changing to protect the innocent. :-)
<br>
<p><p>On Aug 28, 2012, at 6:07 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Rallph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get one of these messages
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A deprecated MCA parameter value was specified in the environment or
</span><br>
<span class="quotelev1">&gt; on the command line.  Deprecated MCA parameters should be avoided;
</span><br>
<span class="quotelev1">&gt; they may disappear in future releases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Deprecated parameter: plm_rsh_agent
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; for every process that starts...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My openmpi version is 1.6 (gentoo package sys-cluster/openmpi-1.6-r1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 28, 2012 at 2:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Guess I'm confused - what is the issue here? The param still exists:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &lt;ssh : rsh&gt;, data source: default value, synonyms:
</span><br>
<span class="quotelev2">&gt;&gt;                          pls_rsh_agent, orte_rsh_agent)
</span><br>
<span class="quotelev2">&gt;&gt;                          The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am unaware of any plans to deprecate it. Is there a problem with it?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 28, 2012, at 2:24 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In order to open a xterm for each of my processes i use the MCA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter 'plm_rsh_agent'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 5 -hostfile allhosts    -mca plm_base_verbose 1 -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm_rsh_agent &quot;ssh -Y&quot;  --leave-session-attached xterm  -hold -e
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./MPIProg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Without the option ' -mca plm_rsh_agent &quot;ssh -Y&quot;' i can't open windows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the remote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jody_at_boss /mnt/data1/neander $  mpirun -np 5 -hostfile allhosts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca plm_base_verbose 1   --leave-session-attached xterm -hold -e
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./MPIStruct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there some replacement for this parameter,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or how else can i get mpi to use&quot; ssh -Y for&quot; its connections?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jody
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20036.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="20034.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>In reply to:</strong> <a href="20034.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20036.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>Reply:</strong> <a href="20036.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
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
