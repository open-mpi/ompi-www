<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  6 08:40:19 2006" -->
<!-- isoreceived="20060706124019" -->
<!-- sent="Thu, 6 Jul 2006 08:40:01 -0400" -->
<!-- isosent="20060706124001" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error in running openmpi on remote node" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFB24884_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] error in running openmpi on remote node" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-06 08:40:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1565.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<li><strong>Previous message:</strong> <a href="1563.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] run time Error"</a>
<li><strong>Maybe in reply to:</strong> <a href="1537.php">Chengwen Chen: "[OMPI users] error in running openmpi on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1675.php">Chengwen Chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Reply:</strong> <a href="1675.php">Chengwen Chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ick.  This isn't a helpful error message, is it?  :-)
<br>
&nbsp;
<br>
Can you try upgrading to the recently-released v1.1 and see if the error
<br>
is still occurring?
<br>
&nbsp;
<br>
Have you tried running your application through a memory-checking
<br>
debugger such as valgrind, perchance?
<br>
&nbsp;
<br>
<p><p>________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden]
<br>
[mailto:users-bounces_at_[hidden]] On Behalf Of Chengwen Chen
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Wednesday, July 05, 2006 3:32 AM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: Open MPI Users
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: Re: [OMPI users] error in running openmpi on remote
<br>
node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank you very much. This problem is solved when I change the
<br>
shell of remote node to B shell. Because I set the LD_LIBRARY_PATH in
<br>
.bashrc file while the default shell was C shell.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Althoguth it works on my testing program test.x, some errors
<br>
occured when I run other programme. BTW, I tried to run this programme
<br>
on single PC with 2 np successfully.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any suggestions? Thank you
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[say_at_wolf45 tmp]$ mpirun -np 2 --host wolf45,wolf46
<br>
/usr/local/amber9/exe/sander.MPI -O -i /tmp/amber9mintest.in -o
<br>
/tmp/amber9mintest.out -c /tmp/amber9mintest.inpcrd -p
<br>
/tmp/amber9mintest.prmtop -r /tmp/amber9mintest.rst 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[wolf46.chem.cuhk.edu.hk:06002
<br>
&lt;<a href="http://wolf46.chem.cuhk.edu.hk:06002/">http://wolf46.chem.cuhk.edu.hk:06002/</a>&gt; ] *** An error occurred in
<br>
MPI_Barrier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ wolf46.chem.cuhk.edu.hk:06002
<br>
&lt;<a href="http://wolf46.chem.cuhk.edu.hk:06002/">http://wolf46.chem.cuhk.edu.hk:06002/</a>&gt; ] *** on communicator
<br>
MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[wolf46.chem.cuhk.edu.hk:06002
<br>
&lt;<a href="http://wolf46.chem.cuhk.edu.hk:06002/">http://wolf46.chem.cuhk.edu.hk:06002/</a>&gt; ] *** MPI_ERR_INTERN: internal
<br>
error
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ wolf46.chem.cuhk.edu.hk:06002
<br>
&lt;<a href="http://wolf46.chem.cuhk.edu.hk:06002/">http://wolf46.chem.cuhk.edu.hk:06002/</a>&gt; ] *** MPI_ERRORS_ARE_FATAL
<br>
(goodbye) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 process killed (possibly by Open MPI)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On 7/4/06, Brian Barrett &lt;brbarret_at_[hidden] &gt; wrote: 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Jul 4, 2006, at 1:53 AM, Chengwen Chen wrote:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<span class="quotelev1">		&gt; Dear openmpi users,
</span><br>
<span class="quotelev1">		&gt;
</span><br>
<span class="quotelev1">		&gt; I am using openmpi-1.0.2 on Redhat linux. I can
</span><br>
succussfully run
<br>
<span class="quotelev1">		&gt; mpirun in single PC with 2 np. But fail in remote
</span><br>
node. Can you
<br>
<span class="quotelev1">		&gt; give me some advices? thank you very much in advance.
</span><br>
<span class="quotelev1">		&gt;
</span><br>
<span class="quotelev1">		&gt; [say_at_wolf45 tmp]$ mpirun -np 2 /tmp/test.x 
</span><br>
<span class="quotelev1">		&gt;
</span><br>
<span class="quotelev1">		&gt; [say_at_wolf45 tmp]$ mpirun -np 2 --host wolf45,wolf46
</span><br>
/tmp/test.x
<br>
<span class="quotelev1">		&gt; say_at_wolf46's password:
</span><br>
<span class="quotelev1">		&gt; orted: Command not found.
</span><br>
<span class="quotelev1">		&gt; [wolf45:11357] ERROR: A daemon on node wolf46 failed
</span><br>
to start as
<br>
<span class="quotelev1">		&gt; expected.
</span><br>
<span class="quotelev1">		&gt; [wolf45:11357] ERROR: There may be more information
</span><br>
available from
<br>
<span class="quotelev1">		&gt; [wolf45:11357] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">		&gt; [wolf45:11357] ERROR: The daemon exited unexpectedly
</span><br>
with status 1. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kefeng is correct that you should setup your ssh keys so
<br>
that you
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;aren't prompted for a password, but that isn't the cause
<br>
of your
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;failure.  The problem appears to be that orted (one of
<br>
the Open MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;commands) is not in your path on the remote node.  You
<br>
should take a 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;look at one of the other FAQ sections on the setup
<br>
required for Open
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI in an rsh/ssh type environment.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
<br>
&lt;<a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hope this helps,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brian
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brian Barrett
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI developer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a> &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1564/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1565.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<li><strong>Previous message:</strong> <a href="1563.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] run time Error"</a>
<li><strong>Maybe in reply to:</strong> <a href="1537.php">Chengwen Chen: "[OMPI users] error in running openmpi on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1675.php">Chengwen Chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Reply:</strong> <a href="1675.php">Chengwen Chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
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
