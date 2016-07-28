<?
$subject_val = "Re: [OMPI users] deprecated MCA parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 08:38:29 2012" -->
<!-- isoreceived="20120828123829" -->
<!-- sent="Tue, 28 Aug 2012 05:38:22 -0700" -->
<!-- isosent="20120828123822" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deprecated MCA parameter" -->
<!-- id="1DF89128-33A7-41B2-96E5-4EFEE77698FE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKbzMGd137PQ4jp4gg23_34xw2BrN0gYww7-htA_eJFkuvK7zQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-08-28 08:38:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20033.php">Tim Prince: "Re: [OMPI users] &#232;&#189;&#172;&#229;&#143;&#145;&#239;&#188;&#154;lwkmpi"</a>
<li><strong>Previous message:</strong> <a href="20031.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with installing open mpi with	intelcompiler11.1.07 on ubuntu"</a>
<li><strong>In reply to:</strong> <a href="20029.php">jody: "[OMPI users] deprecated MCA parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20034.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>Reply:</strong> <a href="20034.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guess I'm confused - what is the issue here? The param still exists:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &lt;ssh : rsh&gt;, data source: default value, synonyms:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pls_rsh_agent, orte_rsh_agent)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
<br>
<p>I am unaware of any plans to deprecate it. Is there a problem with it?
<br>
<p>On Aug 28, 2012, at 2:24 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In order to open a xterm for each of my processes i use the MCA
</span><br>
<span class="quotelev1">&gt; parameter 'plm_rsh_agent'
</span><br>
<span class="quotelev1">&gt; like this:
</span><br>
<span class="quotelev1">&gt;  mpirun -np 5 -hostfile allhosts    -mca plm_base_verbose 1 -mca
</span><br>
<span class="quotelev1">&gt; plm_rsh_agent &quot;ssh -Y&quot;  --leave-session-attached xterm  -hold -e
</span><br>
<span class="quotelev1">&gt; ./MPIProg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Without the option ' -mca plm_rsh_agent &quot;ssh -Y&quot;' i can't open windows
</span><br>
<span class="quotelev1">&gt; from the remote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; jody_at_boss /mnt/data1/neander $  mpirun -np 5 -hostfile allhosts
</span><br>
<span class="quotelev1">&gt; -mca plm_base_verbose 1   --leave-session-attached xterm -hold -e
</span><br>
<span class="quotelev1">&gt; ./MPIStruct
</span><br>
<span class="quotelev1">&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev1">&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev1">&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev1">&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev1">&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev1">&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev1">&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev1">&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev1">&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev1">&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there some replacement for this parameter,
</span><br>
<span class="quotelev1">&gt; or how else can i get mpi to use&quot; ssh -Y for&quot; its connections?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;  jody
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
<li><strong>Next message:</strong> <a href="20033.php">Tim Prince: "Re: [OMPI users] &#232;&#189;&#172;&#229;&#143;&#145;&#239;&#188;&#154;lwkmpi"</a>
<li><strong>Previous message:</strong> <a href="20031.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with installing open mpi with	intelcompiler11.1.07 on ubuntu"</a>
<li><strong>In reply to:</strong> <a href="20029.php">jody: "[OMPI users] deprecated MCA parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20034.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>Reply:</strong> <a href="20034.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
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
