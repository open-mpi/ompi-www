<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr  6 06:09:02 2007" -->
<!-- isoreceived="20070406100902" -->
<!-- sent="Fri, 06 Apr 2007 18:08:52 +0800" -->
<!-- isosent="20070406100852" -->
<!-- name="JiaXing Cai" -->
<!-- email="caijx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="375854132.28904_at_ustc.edu.cn" -->
<!-- inreplyto="[OMPI users] (no subject)" -->
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
<strong>From:</strong> JiaXing Cai (<em>caijx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-06 06:08:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3032.php">Jeff Squyres: "Re: [OMPI users] Grid launcher question."</a>
<li><strong>Previous message:</strong> <a href="3030.php">Ralph Castain: "Re: [OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
<li><strong>Maybe in reply to:</strong> <a href="3000.php">JiaXing Cai: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/02/28566.php">Mike Dubman: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I wrote the information below in my hostfile:
<br>
192.168.1.1 4 slots
<br>
192.168.1.2 4 slots
<br>
<p>and I entered the command below in the directory which contains my
<br>
hostfile(my_host) :
<br>
~Administrator/PCal$ mpirun -np 8 -hostfile my_host --byslot hello 
<br>
<p>then the following information returned:
<br>
---------------------------------------------------
<br>
bash:line 1:orted:command not found.
<br>
[Apple1.local:00516][0,0,0]ORTE_ERROR_LOG:Timeout in file
<br>
base/pls_base,orte+cmds.c at line 275
<br>
...
<br>
[Apple1.local:00516]ERROR:A daemon on node 192.168.1.2 failed to start as
<br>
expected.
<br>
...
<br>
[Apple1.local:00516][0,0,0]ORTE_ERROR_LOG:Timeout in file pls_rsh_module.c at line
<br>
1187.
<br>
...
<br>
mpirun was unable to cleanly terminate the daemons for this job.Returned value
<br>
Timeout instead of ORTE_SUCCESS.
<br>
--------------------------------------------
<br>
Should there be a SSI(Single `System Image) on both of my Apple PCs?How can I do?
<br>
Thank you.
<br>
<p><p>&#212;&#218;&#196;&#250;&#181;&#196;&#192;&#180;&#208;&#197;&#214;&#208;&#212;&#248;&#190;&#173;&#204;&#225;&#181;&#189;:
<br>
<span class="quotelev1">&gt;From: &quot;G&#246;tz Waschk&quot; &lt;goetz.waschk_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] (no subject)
</span><br>
<span class="quotelev1">&gt;Date:Wed, 4 Apr 2007 13:28:15 +0200
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 4/4/07, JiaXing Cai &lt;caijx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    I want to do a parallel job on 2 Apple PowerPCs(Power Ma GS Quad) which run
</span><br>
on
<br>
<span class="quotelev2">&gt;&gt; Mac OS X 10.4.8.How can I make them to communicate with each other using
</span><br>
<span class="quotelev2">&gt;&gt; open-mpi?
</span><br>
<span class="quotelev2">&gt;&gt; I have tried ,but failed.An error related to daemons has occured.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;could you please tell us what exactly you have tried and please
</span><br>
<span class="quotelev1">&gt;include the complete error message as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Regards, G&#246;tz Waschk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;AL I:40: Do what thou wilt shall be the whole of the Law.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3032.php">Jeff Squyres: "Re: [OMPI users] Grid launcher question."</a>
<li><strong>Previous message:</strong> <a href="3030.php">Ralph Castain: "Re: [OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
<li><strong>Maybe in reply to:</strong> <a href="3000.php">JiaXing Cai: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/02/28566.php">Mike Dubman: "Re: [OMPI users] (no subject)"</a>
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
