<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 24 03:47:58 2006" -->
<!-- isoreceived="20060724074758" -->
<!-- sent="Mon, 24 Jul 2006 15:47:55 +0800" -->
<!-- isosent="20060724074755" -->
<!-- name="Chengwen Chen" -->
<!-- email="chenchengwen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error in running openmpi on remote node" -->
<!-- id="c5e12fe60607240047l6d38af62gb429ffa85586f245_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFB24884_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Chengwen Chen (<em>chenchengwen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-24 03:47:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1676.php">Joachim Worringen: "[OMPI users] EuroPVM/MPI 2006: Call for Participation"</a>
<li><strong>Previous message:</strong> <a href="1674.php">Jeff Squyres: "Re: [OMPI users] What Really Happens During OpenMPI MPI_INIT?"</a>
<li><strong>In reply to:</strong> <a href="1564.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error in running openmpi on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1714.php">Jeff Squyres: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1714.php">Jeff Squyres: "Re: [OMPI users] error in running openmpi on remote node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have tried to use v1.1 openmpi. but the program (AMBER9) I am using can't
<br>
be compiled correctly by v1.1. So I seems that I have to keep using
<br>
openmpi-1.02.
<br>
I am new in linux, I really have no idea about debugger. Would you please
<br>
give me some advice to try in a simple way?
<br>
Thank you very much!
<br>
<p><p>On 7/6/06, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Ick.  This isn't a helpful error message, is it?  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try upgrading to the recently-released v1.1 and see if the error
</span><br>
<span class="quotelev1">&gt; is still occurring?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried running your application through a memory-checking debugger
</span><br>
<span class="quotelev1">&gt; such as valgrind, perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Chengwen Chen
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, July 05, 2006 3:32 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] error in running openmpi on remote node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thank you very much. This problem is solved when I change the shell of
</span><br>
<span class="quotelev1">&gt; remote node to B shell. Because I set the LD_LIBRARY_PATH in .bashrc file
</span><br>
<span class="quotelev1">&gt; while the default shell was C shell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Althoguth it works on my testing program test.x, some errors occured when
</span><br>
<span class="quotelev1">&gt; I run other programme. BTW, I tried to run this programme on single PC with
</span><br>
<span class="quotelev1">&gt; 2 np successfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions? Thank you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [say_at_wolf45 tmp]$ mpirun -np 2 --host wolf45,wolf46
</span><br>
<span class="quotelev1">&gt; /usr/local/amber9/exe/sander.MPI -O -i /tmp/amber9mintest.in -o
</span><br>
<span class="quotelev1">&gt; /tmp/amber9mintest.out -c /tmp/amber9mintest.inpcrd -p
</span><br>
<span class="quotelev1">&gt; /tmp/amber9mintest.prmtop -r /tmp/amber9mintest.rst
</span><br>
<span class="quotelev1">&gt; [wolf46.chem.cuhk.edu.hk:06002] *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev1">&gt; [ wolf46.chem.cuhk.edu.hk:06002] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [wolf46.chem.cuhk.edu.hk:06002 ] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [ wolf46.chem.cuhk.edu.hk:06002] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 1 process killed (possibly by Open MPI)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/4/06, Brian Barrett &lt;brbarret_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 4, 2006, at 1:53 AM, Chengwen Chen wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Dear openmpi users,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am using openmpi-1.0.2 on Redhat linux. I can succussfully run
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun in single PC with 2 np. But fail in remote node. Can you
</span><br>
<span class="quotelev3">&gt; &gt; &gt; give me some advices? thank you very much in advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [say_at_wolf45 tmp]$ mpirun -np 2 /tmp/test.x
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [say_at_wolf45 tmp]$ mpirun -np 2 --host wolf45,wolf46 /tmp/test.x
</span><br>
<span class="quotelev3">&gt; &gt; &gt; say_at_wolf46's password:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orted: Command not found.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [wolf45:11357] ERROR: A daemon on node wolf46 failed to start as
</span><br>
<span class="quotelev3">&gt; &gt; &gt; expected.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [wolf45:11357] ERROR: There may be more information available from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [wolf45:11357] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [wolf45:11357] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kefeng is correct that you should setup your ssh keys so that you
</span><br>
<span class="quotelev2">&gt; &gt; aren't prompted for a password, but that isn't the cause of your
</span><br>
<span class="quotelev2">&gt; &gt; failure.  The problem appears to be that orted (one of the Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; commands) is not in your path on the remote node.  You should take a
</span><br>
<span class="quotelev2">&gt; &gt; look at one of the other FAQ sections on the setup required for Open
</span><br>
<span class="quotelev2">&gt; &gt; MPI in an rsh/ssh type environment.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope this helps,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;   Brian Barrett
</span><br>
<span class="quotelev2">&gt; &gt;   Open MPI developer
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1675/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1676.php">Joachim Worringen: "[OMPI users] EuroPVM/MPI 2006: Call for Participation"</a>
<li><strong>Previous message:</strong> <a href="1674.php">Jeff Squyres: "Re: [OMPI users] What Really Happens During OpenMPI MPI_INIT?"</a>
<li><strong>In reply to:</strong> <a href="1564.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error in running openmpi on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1714.php">Jeff Squyres: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1714.php">Jeff Squyres: "Re: [OMPI users] error in running openmpi on remote node"</a>
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
