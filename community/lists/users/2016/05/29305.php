<?
$subject_val = "Re: [OMPI users] users Digest, Vol 3510, Issue 2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 09:21:44 2016" -->
<!-- isoreceived="20160524132144" -->
<!-- sent="Tue, 24 May 2016 06:21:24 -0700" -->
<!-- isosent="20160524132124" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 3510, Issue 2" -->
<!-- id="0AD9FCC2-E379-4640-AEA7-B81DEC2EBD84_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="35E90605-A4BF-406E-8DF2-DE189E451A29_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 3510, Issue 2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-24 09:21:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29306.php">Scott Shaw: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="29304.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>In reply to:</strong> <a href="29302.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29306.php">Scott Shaw: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to clarify, as this is a frequent misconception: the statement that the absolute path will setup your remote environment is only true when using the rsh/ssh launcher. It is not true when running under a resource manager (e.g., SLURM, LSF, PBSPro, etc.). In those cases, it is up to the RM configuration as to whether or not the local environment is forwarded, and we have no control or influence over the remote path.
<br>
<p><p><span class="quotelev1">&gt; On May 24, 2016, at 6:14 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doesn't Abaqus do its own environment setup?  I.e., I'm *guessing* that you should be able to set your environment startup files (e.g., $HOME/.bashrc) to point your PATH / LD_LIBRARY_PATH to point to whichever MPI implementation you want, and Abaqus will do whatever it needs to a) be independent of your environment, and b) be able to function with whatever underlying MPI it wants to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a supposition on my part -- I am not an Abaqus user.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note, too that popular MPI implementations support a command line option such that if you invoke the absolute path name of mpirun/mpiexec, it'll setup the PATH / LD_LIBRARY_PATH on the remote servers to echo that of the local server.  E.g.:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  /path/to/open/mpi/install/bin/mpirun -np 4 --host a,b,c,d my_program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 24, 2016, at 6:25 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Megdich Islem &lt;megdich_islem_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, Empire does the fluid structure coupling. It couples OpenFoam (fluid analysis) and Abaqus (structural analysis).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does all the software need to have the same MPI architecture in order to communicate ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I doubt it's doing that, and presumably you have no control over abaqus,
</span><br>
<span class="quotelev2">&gt;&gt; which is a major source of pain here.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You could wrap one (set of) program(s) in a script to set the
</span><br>
<span class="quotelev2">&gt;&gt; appropriate environment before invoking the real program.  That might be
</span><br>
<span class="quotelev2">&gt;&gt; a bit painful if you need many of the OF components, but it should be
</span><br>
<span class="quotelev2">&gt;&gt; straightforward to put scripts somewhere on PATH ahead of the real
</span><br>
<span class="quotelev2">&gt;&gt; versions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On the other hand, it never ceases to amaze how difficult proprietary
</span><br>
<span class="quotelev2">&gt;&gt; engineering applications make life on HPC systems; I could believe
</span><br>
<span class="quotelev2">&gt;&gt; there's a catch.  Also you (or systems people) normally want programs to
</span><br>
<span class="quotelev2">&gt;&gt; use the system MPI, assuming that's been set up appropriately.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29299.php">http://www.open-mpi.org/community/lists/users/2016/05/29299.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29302.php">http://www.open-mpi.org/community/lists/users/2016/05/29302.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29306.php">Scott Shaw: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="29304.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>In reply to:</strong> <a href="29302.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29306.php">Scott Shaw: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
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
