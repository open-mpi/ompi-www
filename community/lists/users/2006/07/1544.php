<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul  4 10:07:23 2006" -->
<!-- isoreceived="20060704140723" -->
<!-- sent="Tue, 4 Jul 2006 08:06:46 -0600" -->
<!-- isosent="20060704140646" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error in running openmpi on remote node" -->
<!-- id="D5DD492B-8AE9-430F-8D6E-B8F516035D09_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c5e12fe60607040053s5c91a99j54c47624d974d391_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-04 10:06:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1545.php">Brian Barrett: "Re: [OMPI users] runtime error"</a>
<li><strong>Previous message:</strong> <a href="1543.php">Brian Barrett: "Re: [OMPI users] Where can I get mpi api reference"</a>
<li><strong>In reply to:</strong> <a href="1537.php">Chengwen Chen: "[OMPI users] error in running openmpi on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1548.php">Chengwen Chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Reply:</strong> <a href="1548.php">Chengwen Chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 4, 2006, at 1:53 AM, Chengwen Chen wrote:
<br>
<p><span class="quotelev1">&gt; Dear openmpi users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using openmpi-1.0.2 on Redhat linux. I can succussfully run  
</span><br>
<span class="quotelev1">&gt; mpirun in single PC with 2 np. But fail in remote node. Can you  
</span><br>
<span class="quotelev1">&gt; give me some advices? thank you very much in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [say_at_wolf45 tmp]$ mpirun -np 2 /tmp/test.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [say_at_wolf45 tmp]$ mpirun -np 2 --host wolf45,wolf46 /tmp/test.x
</span><br>
<span class="quotelev1">&gt; say_at_wolf46's password:
</span><br>
<span class="quotelev1">&gt; orted: Command not found.
</span><br>
<span class="quotelev1">&gt; [wolf45:11357] ERROR: A daemon on node wolf46 failed to start as  
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<span class="quotelev1">&gt; [wolf45:11357] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [wolf45:11357] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [wolf45:11357] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<p>Kefeng is correct that you should setup your ssh keys so that you  
<br>
aren't prompted for a password, but that isn't the cause of your  
<br>
failure.  The problem appears to be that orted (one of the Open MPI  
<br>
commands) is not in your path on the remote node.  You should take a  
<br>
look at one of the other FAQ sections on the setup required for Open  
<br>
MPI in an rsh/ssh type environment.
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1545.php">Brian Barrett: "Re: [OMPI users] runtime error"</a>
<li><strong>Previous message:</strong> <a href="1543.php">Brian Barrett: "Re: [OMPI users] Where can I get mpi api reference"</a>
<li><strong>In reply to:</strong> <a href="1537.php">Chengwen Chen: "[OMPI users] error in running openmpi on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1548.php">Chengwen Chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Reply:</strong> <a href="1548.php">Chengwen Chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
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
