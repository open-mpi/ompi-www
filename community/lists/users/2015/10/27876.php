<?
$subject_val = "Re: [OMPI users] mpirun/mpiexec requires su";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 14:58:39 2015" -->
<!-- isoreceived="20151015185839" -->
<!-- sent="Thu, 15 Oct 2015 14:58:35 -0400" -->
<!-- isosent="20151015185835" -->
<!-- name="Brant Abbott" -->
<!-- email="abbottbrant_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun/mpiexec requires su" -->
<!-- id="CALzow4rqQXzwnLS+Z9ALFOpdtkhsf3ysY1jCN85bmtNuj-wTSQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="FDA97ED6-25A4-4588-A8EE-3394FC3D8C6E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun/mpiexec requires su<br>
<strong>From:</strong> Brant Abbott (<em>abbottbrant_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-15 14:58:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27877.php">Diego Avesani: "Re: [OMPI users] MPI_GATHERV error"</a>
<li><strong>Previous message:</strong> <a href="27875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<li><strong>In reply to:</strong> <a href="27874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Reply:</strong> <a href="27878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks for the input.
<br>
<p>When I look for mpirun:
<br>
<p>brant.abbott_at_rust:~$ whereis mpirun
<br>
mpirun: /usr/bin/mpirun.openmpi /usr/bin/mpirun /usr/bin/X11/mpirun.openmpi
<br>
/usr                                                    /bin/X11/mpirun
<br>
/usr/share/man/man1/mpirun.1.gz
<br>
<p>If I use mpirun.openmpi everything works as normal. I suppose mpirun is
<br>
executing the MPICH version. I'm not entirely sure why when logged in a
<br>
root it behaves differently, but good enough for me to just use the
<br>
alternative command.
<br>
<p>On Thu, Oct 15, 2015 at 1:54 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; I think you're accidentally using MPICH, not Open MPI.  Specifically,
</span><br>
<span class="quotelev1">&gt; those are error messages from MPICH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check your paths to ensure that mpif90 / mpirun / etc. are all the ones
</span><br>
<span class="quotelev1">&gt; that you think you're executing.  And then double check your
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH to ensure that libmpi is the library that you think it
</span><br>
<span class="quotelev1">&gt; should be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 15, 2015, at 1:19 PM, Brant Abbott &lt;abbottbrant_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've installed openmpi on a workstation running Ubuntu 14.04.3 LTS.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Logged in as root I can compile using mpif90 and run the programs using
</span><br>
<span class="quotelev1">&gt; mpirun. Logged in as a regular user I can compile using mpif90, but cannot
</span><br>
<span class="quotelev1">&gt; run the programs using mpirun (or mpiexec). The error messages are:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; brant.abbott_at_rust:~/Downloads/openmpi-1.10.0/examples$ mpif90
</span><br>
<span class="quotelev1">&gt; hello_usempi.f90 -o mainmpi
</span><br>
<span class="quotelev2">&gt; &gt; brant.abbott_at_rust:~/Downloads/openmpi-1.10.0/examples$ mpirun -np 2
</span><br>
<span class="quotelev1">&gt; mainmpi
</span><br>
<span class="quotelev2">&gt; &gt; /opt/intel/composer_xe_2013.2.146/mpirt/bin/intel64/mpirun: 96: .: Can't
</span><br>
<span class="quotelev1">&gt; open /opt/intel/composer_xe_2013.2.146/mpirt/bin/intel64/mpivars.sh
</span><br>
<span class="quotelev2">&gt; &gt; brant.abbott_at_rust:~/Downloads/openmpi-1.10.0/examples$ mpiexec -np 2
</span><br>
<span class="quotelev1">&gt; mainmpi
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec_rust: cannot connect to local mpd
</span><br>
<span class="quotelev1">&gt; (/tmp/mpd2.console_brant.abbott); possible causes:
</span><br>
<span class="quotelev2">&gt; &gt;   1. no mpd is running on this host
</span><br>
<span class="quotelev2">&gt; &gt;   2. an mpd is running but was started without a &quot;console&quot; (-n option)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However logged in as root:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; brant.abbott_at_rust:~/Downloads/openmpi-1.10.0/examples$ su
</span><br>
<span class="quotelev2">&gt; &gt; Password:
</span><br>
<span class="quotelev2">&gt; &gt; root_at_rust:/home/brant.abbott/Downloads/openmpi-1.10.0/examples# mpirun
</span><br>
<span class="quotelev1">&gt; -np 4 mainmpi
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am  1 of  4:
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am  2 of  4:
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am  0 of  4:
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am  3 of  4:
</span><br>
<span class="quotelev2">&gt; &gt; root_at_rust:/home/brant.abbott/Downloads/openmpi-1.10.0/examples# mpiexec
</span><br>
<span class="quotelev1">&gt; -np 4 mainmpi
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am  0 of  4:
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am  1 of  4:
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am  2 of  4:
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am  3 of  4:
</span><br>
<span class="quotelev2">&gt; &gt; root_at_rust:/home/brant.abbott/Downloads/openmpi-1.10.0/examples#
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I saw this thread:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2010/03/12291.php">http://www.open-mpi.org/community/lists/users/2010/03/12291.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and tried reinstalling using
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/usr/local --disable-pty-support
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; at the appropriate step. However, I still have the problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does anyone know the solution?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Many Thanks!
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27872.php">http://www.open-mpi.org/community/lists/users/2015/10/27872.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27874.php">http://www.open-mpi.org/community/lists/users/2015/10/27874.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27876/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27877.php">Diego Avesani: "Re: [OMPI users] MPI_GATHERV error"</a>
<li><strong>Previous message:</strong> <a href="27875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<li><strong>In reply to:</strong> <a href="27874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Reply:</strong> <a href="27878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
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
