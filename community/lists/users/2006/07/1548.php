<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  5 03:32:09 2006" -->
<!-- isoreceived="20060705073209" -->
<!-- sent="Wed, 5 Jul 2006 15:32:03 +0800" -->
<!-- isosent="20060705073203" -->
<!-- name="Chengwen Chen" -->
<!-- email="chenchengwen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error in running openmpi on remote node" -->
<!-- id="c5e12fe60607050032n73fda897pc8b44baa407136c3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D5DD492B-8AE9-430F-8D6E-B8F516035D09_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-07-05 03:32:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1549.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] open-mpi on MacOS X"</a>
<li><strong>Previous message:</strong> <a href="1547.php">Samuel Wieczorek: "Re: [OMPI users] Compilation problem"</a>
<li><strong>In reply to:</strong> <a href="1544.php">Brian Barrett: "Re: [OMPI users] error in running openmpi on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1564.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error in running openmpi on remote node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you very much. This problem is solved when I change the shell of
<br>
remote node to B shell. Because I set the LD_LIBRARY_PATH in .bashrc file
<br>
while the default shell was C shell.
<br>
<p>Althoguth it works on my testing program test.x, some errors occured when I
<br>
run other programme. BTW, I tried to run this programme on single PC with 2
<br>
np successfully.
<br>
<p>Any suggestions? Thank you
<br>
<p>[say_at_wolf45 tmp]$ mpirun -np 2 --host wolf45,wolf46
<br>
/usr/local/amber9/exe/sander.MPI -O -i /tmp/amber9mintest.in -o
<br>
/tmp/amber9mintest.out -c /tmp/amber9mintest.inpcrd -p
<br>
/tmp/amber9mintest.prmtop -r /tmp/amber9mintest.rst
<br>
[wolf46.chem.cuhk.edu.hk:06002] *** An error occurred in MPI_Barrier
<br>
[ wolf46.chem.cuhk.edu.hk:06002] *** on communicator MPI_COMM_WORLD
<br>
[wolf46.chem.cuhk.edu.hk:06002] *** MPI_ERR_INTERN: internal error
<br>
[ wolf46.chem.cuhk.edu.hk:06002] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
1 process killed (possibly by Open MPI)
<br>
<p><p><p><p><p><p>On 7/4/06, Brian Barrett &lt;brbarret_at_[hidden] &gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 4, 2006, at 1:53 AM, Chengwen Chen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear openmpi users,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using openmpi-1.0.2 on Redhat linux. I can succussfully run
</span><br>
<span class="quotelev2">&gt; &gt; mpirun in single PC with 2 np. But fail in remote node. Can you
</span><br>
<span class="quotelev2">&gt; &gt; give me some advices? thank you very much in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [say_at_wolf45 tmp]$ mpirun -np 2 /tmp/test.x
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [say_at_wolf45 tmp]$ mpirun -np 2 --host wolf45,wolf46 /tmp/test.x
</span><br>
<span class="quotelev2">&gt; &gt; say_at_wolf46's password:
</span><br>
<span class="quotelev2">&gt; &gt; orted: Command not found.
</span><br>
<span class="quotelev2">&gt; &gt; [wolf45:11357] ERROR: A daemon on node wolf46 failed to start as
</span><br>
<span class="quotelev2">&gt; &gt; expected.
</span><br>
<span class="quotelev2">&gt; &gt; [wolf45:11357] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt; &gt; [wolf45:11357] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt; &gt; [wolf45:11357] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kefeng is correct that you should setup your ssh keys so that you
</span><br>
<span class="quotelev1">&gt; aren't prompted for a password, but that isn't the cause of your
</span><br>
<span class="quotelev1">&gt; failure.  The problem appears to be that orted (one of the Open MPI
</span><br>
<span class="quotelev1">&gt; commands) is not in your path on the remote node.  You should take a
</span><br>
<span class="quotelev1">&gt; look at one of the other FAQ sections on the setup required for Open
</span><br>
<span class="quotelev1">&gt; MPI in an rsh/ssh type environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Brian Barrett
</span><br>
<span class="quotelev1">&gt;   Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1548/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1549.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] open-mpi on MacOS X"</a>
<li><strong>Previous message:</strong> <a href="1547.php">Samuel Wieczorek: "Re: [OMPI users] Compilation problem"</a>
<li><strong>In reply to:</strong> <a href="1544.php">Brian Barrett: "Re: [OMPI users] error in running openmpi on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1564.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error in running openmpi on remote node"</a>
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
