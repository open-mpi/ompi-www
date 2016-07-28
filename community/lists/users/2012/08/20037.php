<?
$subject_val = "Re: [OMPI users] deprecated MCA parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 10:19:02 2012" -->
<!-- isoreceived="20120828141902" -->
<!-- sent="Tue, 28 Aug 2012 10:18:57 -0400" -->
<!-- isosent="20120828141857" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deprecated MCA parameter" -->
<!-- id="AA5A8D5B-A149-49BD-830C-0FE7055EFE0C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKbzMGegxKc5SjMCAxqshxu3gKmahJqub=MA3LLy7N4n-Sockw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-28 10:18:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20038.php">Tony Raymond: "[OMPI users] MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="20036.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>In reply to:</strong> <a href="20036.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and I talked about this -- it seems like we should extend the help message.  If there is no replacement for the param, it should say that.  If there is a replacement, it should be listed.
<br>
<p>We'll take this as a feature enhancement.
<br>
<p>On Aug 28, 2012, at 9:23 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I renamed the parameter in my script,
</span><br>
<span class="quotelev1">&gt; and now there are no more ugly messages :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 28, 2012 at 3:17 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ah, I see - yeah, the parameter technically is being renamed to &quot;orte_rsh_agent&quot; to avoid having users need to know the internal topology of the code base (i.e., that it is in the plm framework and the rsh component). It will always be there, though - only the name is changing to protect the innocent. :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 28, 2012, at 6:07 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Rallph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get one of these messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A deprecated MCA parameter value was specified in the environment or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the command line.  Deprecated MCA parameters should be avoided;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they may disappear in future releases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Deprecated parameter: plm_rsh_agent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for every process that starts...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My openmpi version is 1.6 (gentoo package sys-cluster/openmpi-1.6-r1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Aug 28, 2012 at 2:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Guess I'm confused - what is the issue here? The param still exists:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &lt;ssh : rsh&gt;, data source: default value, synonyms:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         pls_rsh_agent, orte_rsh_agent)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am unaware of any plans to deprecate it. Is there a problem with it?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 28, 2012, at 2:24 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In order to open a xterm for each of my processes i use the MCA
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parameter 'plm_rsh_agent'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; like this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 5 -hostfile allhosts    -mca plm_base_verbose 1 -mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; plm_rsh_agent &quot;ssh -Y&quot;  --leave-session-attached xterm  -hold -e
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./MPIProg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Without the option ' -mca plm_rsh_agent &quot;ssh -Y&quot;' i can't open windows
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from the remote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jody_at_boss /mnt/data1/neander $  mpirun -np 5 -hostfile allhosts
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mca plm_base_verbose 1   --leave-session-attached xterm -hold -e
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./MPIStruct
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xterm: Xt error: Can't open display:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xterm: DISPLAY is not set
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there some replacement for this parameter,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or how else can i get mpi to use&quot; ssh -Y for&quot; its connections?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jody
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20038.php">Tony Raymond: "[OMPI users] MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="20036.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>In reply to:</strong> <a href="20036.php">jody: "Re: [OMPI users] deprecated MCA parameter"</a>
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
