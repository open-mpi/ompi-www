<?
$subject_val = "Re: [OMPI users] requirement on ssh when run openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 28 22:00:42 2013" -->
<!-- isoreceived="20130729020042" -->
<!-- sent="Mon, 29 Jul 2013 10:00:17 +0800 (CST)" -->
<!-- isosent="20130729020017" -->
<!-- name="meng " -->
<!-- email="qsmeng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] requirement on ssh when run openmpi" -->
<!-- id="c737607.41b5.140282794ba.Coremail.qsmeng_at_126.com" -->
<!-- charset="GBK" -->
<!-- inreplyto="9D30F4CA-690B-4901-A13E-7BB1DEFC2E73_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] requirement on ssh when run openmpi<br>
<strong>From:</strong> meng  (<em>qsmeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-28 22:00:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22403.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22401.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>In reply to:</strong> <a href="22401.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22404.php">dani: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Reply:</strong> <a href="22404.php">dani: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Reuti,
<br>
&nbsp;&nbsp;Thank you for the reply.
<br>
&nbsp;&nbsp;In examples directory on the computer c1, command &quot;mpiexec -np 4 hello_c&quot; is correctly executed.
<br>
&nbsp;If I run &quot; mpiexec -machinefile hosts hello_c &quot; on computer c1, where hosts contains two line :
<br>
&quot;  node3
<br>
&nbsp;&nbsp;localhost
<br>
&quot;
<br>
the screen displays as follows:
<br>
bash: orted: command not found
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 5247) died unexpectedly with status 127 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
&nbsp;&nbsp;I dont know whats wrong with it.
<br>
&nbsp;&nbsp;Thank you.
<br>
&nbsp;Regards,
<br>
Meng
<br>
<p><p><p><p><p><p>At 2013-07-27 16:44:56,Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Am 27.07.2013 um 08:48 schrieb meng:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    what 's the requriement, especially on ssh, to run openmpi? I have two computers, say c1 and c2. Through ssh, c1 can access c2 without password, but c2 can't access c1. Under this environment, can I use openmpi to compute parallely? 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;as long as you execute `mpiexec` only on c1, it should work. But you can't start a job on c2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Regards,
</span><br>
<span class="quotelev2">&gt;&gt; meng
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
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22402/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22403.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22401.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>In reply to:</strong> <a href="22401.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22404.php">dani: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Reply:</strong> <a href="22404.php">dani: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
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
