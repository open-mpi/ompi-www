<?
$subject_val = "Re: [OMPI users] RSH agent working but no output";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 27 16:49:09 2015" -->
<!-- isoreceived="20150927204909" -->
<!-- sent="Sun, 27 Sep 2015 21:49:05 +0100" -->
<!-- isosent="20150927204905" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RSH agent working but no output" -->
<!-- id="B119C7DF-D834-47A7-9AED-6A18C810B5D5_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="7CA3E184-8B40-4262-8A5B-2566B7D5BA54_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] RSH agent working but no output<br>
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-27 16:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27687.php">Saliya Ekanayake: "[OMPI users] Binding to hardware thread"</a>
<li><strong>Previous message:</strong> <a href="27685.php">marcin.krotkiewski: "[OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>In reply to:</strong> <a href="27684.php">Ralph Castain: "Re: [OMPI users] RSH agent working but no output"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph,
<br>
<p>I am using Open MPI 1.10. I will recompile with &quot;&#226;&#128;&#148;enable-debug&quot; and do as you suggested. I get back in touch with more information soon.
<br>
<p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://fspiga.github.io">http://fspiga.github.io</a> ~ skype: filippo.spiga
&#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
&gt; On Sep 27, 2015, at 6:08 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; 
&gt; Is this a debug build of OMPI? In other words, was it configured with &#226;&#128;&#148;enable-debug? If so, you can get some further output to see what is causing the problem by adding the following to your cmd line:
&gt; 
&gt; &#226;&#128;&#148;leave-session-attached &#226;&#128;&#148;mca plm_base_verbose 5  &#226;&#128;&#148;mca state_base_verbose 5
&gt; 
&gt; BTW: what version of OMPI are you using?
&gt; 
&gt; 
&gt;&gt; On Sep 27, 2015, at 8:47 AM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; wrote:
&gt;&gt; 
&gt;&gt; Hello,
&gt;&gt; 
&gt;&gt; I am trying to run OpenMPI on a cluster where I am only allow to use RSH to spawn processes across compute nodes. I modified my mpirun command in this way:
&gt;&gt; 
&gt;&gt; mpirun -np 48 --hostfile ./hostfile --mca plm_rsh_agent &quot;rsh&quot; /central_storage/osu_barrier
&gt;&gt; 
&gt;&gt; the file &quot;hostfile&quot; contain the machine where I am running mpirun plus another node. Libraries and osu_barrier are located in a central storage mounted by all nodes. The processes osu_barrier are spawn correctly across two nodes but no output is returned and the command seems stuck. Any idea what can I look at to try to solve this issue?
&gt;&gt; 
&gt;&gt; Thanks
&gt;&gt; 
&gt;&gt; --
&gt;&gt; Mr. Filippo SPIGA, M.Sc.
&gt;&gt; <a href="http://fspiga.github.io">http://fspiga.github.io</a> ~ skype: filippo.spiga
&gt;&gt; 
&gt;&gt; &#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
&gt;&gt; 
&gt;&gt; *****
&gt;&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27683.php">http://www.open-mpi.org/community/lists/users/2015/09/27683.php</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27684.php">http://www.open-mpi.org/community/lists/users/2015/09/27684.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27687.php">Saliya Ekanayake: "[OMPI users] Binding to hardware thread"</a>
<li><strong>Previous message:</strong> <a href="27685.php">marcin.krotkiewski: "[OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>In reply to:</strong> <a href="27684.php">Ralph Castain: "Re: [OMPI users] RSH agent working but no output"</a>
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
