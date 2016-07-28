<?
$subject_val = "Re: [OMPI users] mpirun/mpiexec requires su";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 13:54:26 2015" -->
<!-- isoreceived="20151015175426" -->
<!-- sent="Thu, 15 Oct 2015 17:54:07 +0000" -->
<!-- isosent="20151015175407" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun/mpiexec requires su" -->
<!-- id="FDA97ED6-25A4-4588-A8EE-3394FC3D8C6E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALzow4ohM76LCh57SB5xt5epBoemgwHSMMwELCJzi4o7SQKjww_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-15 13:54:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<li><strong>Previous message:</strong> <a href="27873.php">Surivinta Surivinta: "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>In reply to:</strong> <a href="27872.php">Brant Abbott: "[OMPI users] mpirun/mpiexec requires su"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27876.php">Brant Abbott: "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Reply:</strong> <a href="27876.php">Brant Abbott: "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you're accidentally using MPICH, not Open MPI.  Specifically, those are error messages from MPICH.
<br>
<p>Check your paths to ensure that mpif90 / mpirun / etc. are all the ones that you think you're executing.  And then double check your LD_LIBRARY_PATH to ensure that libmpi is the library that you think it should be.
<br>
<p><p><span class="quotelev1">&gt; On Oct 15, 2015, at 1:19 PM, Brant Abbott &lt;abbottbrant_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've installed openmpi on a workstation running Ubuntu 14.04.3 LTS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Logged in as root I can compile using mpif90 and run the programs using mpirun. Logged in as a regular user I can compile using mpif90, but cannot run the programs using mpirun (or mpiexec). The error messages are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; brant.abbott_at_rust:~/Downloads/openmpi-1.10.0/examples$ mpif90 hello_usempi.f90 -o mainmpi
</span><br>
<span class="quotelev1">&gt; brant.abbott_at_rust:~/Downloads/openmpi-1.10.0/examples$ mpirun -np 2 mainmpi
</span><br>
<span class="quotelev1">&gt; /opt/intel/composer_xe_2013.2.146/mpirt/bin/intel64/mpirun: 96: .: Can't open /opt/intel/composer_xe_2013.2.146/mpirt/bin/intel64/mpivars.sh
</span><br>
<span class="quotelev1">&gt; brant.abbott_at_rust:~/Downloads/openmpi-1.10.0/examples$ mpiexec -np 2 mainmpi
</span><br>
<span class="quotelev1">&gt; mpiexec_rust: cannot connect to local mpd (/tmp/mpd2.console_brant.abbott); possible causes:
</span><br>
<span class="quotelev1">&gt;   1. no mpd is running on this host
</span><br>
<span class="quotelev1">&gt;   2. an mpd is running but was started without a &quot;console&quot; (-n option)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However logged in as root:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; brant.abbott_at_rust:~/Downloads/openmpi-1.10.0/examples$ su
</span><br>
<span class="quotelev1">&gt; Password:
</span><br>
<span class="quotelev1">&gt; root_at_rust:/home/brant.abbott/Downloads/openmpi-1.10.0/examples# mpirun -np 4 mainmpi
</span><br>
<span class="quotelev1">&gt; Hello, world, I am  1 of  4:
</span><br>
<span class="quotelev1">&gt; Hello, world, I am  2 of  4:
</span><br>
<span class="quotelev1">&gt; Hello, world, I am  0 of  4:
</span><br>
<span class="quotelev1">&gt; Hello, world, I am  3 of  4:
</span><br>
<span class="quotelev1">&gt; root_at_rust:/home/brant.abbott/Downloads/openmpi-1.10.0/examples# mpiexec -np 4 mainmpi
</span><br>
<span class="quotelev1">&gt; Hello, world, I am  0 of  4:
</span><br>
<span class="quotelev1">&gt; Hello, world, I am  1 of  4:
</span><br>
<span class="quotelev1">&gt; Hello, world, I am  2 of  4:
</span><br>
<span class="quotelev1">&gt; Hello, world, I am  3 of  4:
</span><br>
<span class="quotelev1">&gt; root_at_rust:/home/brant.abbott/Downloads/openmpi-1.10.0/examples#
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I saw this thread:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/03/12291.php">http://www.open-mpi.org/community/lists/users/2010/03/12291.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and tried reinstalling using
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local --disable-pty-support
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; at the appropriate step. However, I still have the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone know the solution?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many Thanks!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27872.php">http://www.open-mpi.org/community/lists/users/2015/10/27872.php</a>
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
<li><strong>Next message:</strong> <a href="27875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<li><strong>Previous message:</strong> <a href="27873.php">Surivinta Surivinta: "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>In reply to:</strong> <a href="27872.php">Brant Abbott: "[OMPI users] mpirun/mpiexec requires su"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27876.php">Brant Abbott: "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Reply:</strong> <a href="27876.php">Brant Abbott: "Re: [OMPI users] mpirun/mpiexec requires su"</a>
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
