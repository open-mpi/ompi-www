<?
$subject_val = "Re: [OMPI users] deprecated MCA parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 09:07:42 2012" -->
<!-- isoreceived="20120828130742" -->
<!-- sent="Tue, 28 Aug 2012 15:07:37 +0200" -->
<!-- isosent="20120828130737" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deprecated MCA parameter" -->
<!-- id="CAKbzMGcO8Cczeagbiurrvea+=s=igHgVaq3=rxv4XR_D3fm5TA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1DF89128-33A7-41B2-96E5-4EFEE77698FE_at_open-mpi.org" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-28 09:07:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20035.php">Ralph Castain: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="20033.php">Tim Prince: "Re: [OMPI users] &#232;&#189;&#172;&#229;&#143;&#145;&#239;&#188;&#154;lwkmpi"</a>
<li><strong>In reply to:</strong> <a href="20032.php">Ralph Castain: "Re: [OMPI users] deprecated MCA parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20035.php">Ralph Castain: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>Reply:</strong> <a href="20035.php">Ralph Castain: "Re: [OMPI users] deprecated MCA parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rallph
<br>
<p>I get one of these messages
<br>
--------------------------------------------------------------------------
<br>
A deprecated MCA parameter value was specified in the environment or
<br>
on the command line.  Deprecated MCA parameters should be avoided;
<br>
they may disappear in future releases.
<br>
<p>&nbsp;&nbsp;Deprecated parameter: plm_rsh_agent
<br>
--------------------------------------------------------------------------
<br>
for every process that starts...
<br>
<p>My openmpi version is 1.6 (gentoo package sys-cluster/openmpi-1.6-r1)
<br>
<p>jody
<br>
<p>On Tue, Aug 28, 2012 at 2:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Guess I'm confused - what is the issue here? The param still exists:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &lt;ssh : rsh&gt;, data source: default value, synonyms:
</span><br>
<span class="quotelev1">&gt;                           pls_rsh_agent, orte_rsh_agent)
</span><br>
<span class="quotelev1">&gt;                           The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am unaware of any plans to deprecate it. Is there a problem with it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 28, 2012, at 2:24 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In order to open a xterm for each of my processes i use the MCA
</span><br>
<span class="quotelev2">&gt;&gt; parameter 'plm_rsh_agent'
</span><br>
<span class="quotelev2">&gt;&gt; like this:
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun -np 5 -hostfile allhosts    -mca plm_base_verbose 1 -mca
</span><br>
<span class="quotelev2">&gt;&gt; plm_rsh_agent &quot;ssh -Y&quot;  --leave-session-attached xterm  -hold -e
</span><br>
<span class="quotelev2">&gt;&gt; ./MPIProg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Without the option ' -mca plm_rsh_agent &quot;ssh -Y&quot;' i can't open windows
</span><br>
<span class="quotelev2">&gt;&gt; from the remote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; jody_at_boss /mnt/data1/neander $  mpirun -np 5 -hostfile allhosts
</span><br>
<span class="quotelev2">&gt;&gt; -mca plm_base_verbose 1   --leave-session-attached xterm -hold -e
</span><br>
<span class="quotelev2">&gt;&gt; ./MPIStruct
</span><br>
<span class="quotelev2">&gt;&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev2">&gt;&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev2">&gt;&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev2">&gt;&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev2">&gt;&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev2">&gt;&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev2">&gt;&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev2">&gt;&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev2">&gt;&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev2">&gt;&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there some replacement for this parameter,
</span><br>
<span class="quotelev2">&gt;&gt; or how else can i get mpi to use&quot; ssh -Y for&quot; its connections?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank You
</span><br>
<span class="quotelev2">&gt;&gt;  jody
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20035.php">Ralph Castain: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="20033.php">Tim Prince: "Re: [OMPI users] &#232;&#189;&#172;&#229;&#143;&#145;&#239;&#188;&#154;lwkmpi"</a>
<li><strong>In reply to:</strong> <a href="20032.php">Ralph Castain: "Re: [OMPI users] deprecated MCA parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20035.php">Ralph Castain: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>Reply:</strong> <a href="20035.php">Ralph Castain: "Re: [OMPI users] deprecated MCA parameter"</a>
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
