<?
$subject_val = "Re: [OMPI users] mpirun/mpiexec requires su";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 13:38:16 2015" -->
<!-- isoreceived="20151015173816" -->
<!-- sent="Thu, 15 Oct 2015 20:38:11 +0300" -->
<!-- isosent="20151015173811" -->
<!-- name="Surivinta Surivinta" -->
<!-- email="surivinta_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun/mpiexec requires su" -->
<!-- id="CAC+Fo8FM-S8WLKkJ7JNo+ygP2R8dccV6p9_B8XSx8OOnOOW3RA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Surivinta Surivinta (<em>surivinta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-15 13:38:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Previous message:</strong> <a href="27872.php">Brant Abbott: "[OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>In reply to:</strong> <a href="27872.php">Brant Abbott: "[OMPI users] mpirun/mpiexec requires su"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You install openmpi as root, and run executable with perm of root on user.
<br>
Don't you think something wrong? (hint: when you root mpirun work)
<br>
Try install openmpi for user.
<br>
Also, you use ubuntu - binary based distro, you can use apt-get to install
<br>
openmpi:
<br>
<p>sudo apt-get install libopenmpi-dev openmpi-bin openmpi-doc
<br>
<p><p>2015-10-15 20:19 GMT+03:00 Brant Abbott &lt;abbottbrant_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've installed openmpi on a workstation running Ubuntu 14.04.3 LTS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Logged in as root I can compile using mpif90 and run the programs using
</span><br>
<span class="quotelev1">&gt; mpirun. Logged in as a regular user I can compile using mpif90, but cannot
</span><br>
<span class="quotelev1">&gt; run the programs using mpirun (or mpiexec). The error messages are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; brant.abbott_at_rust:~/Downloads/openmpi-1.10.0/examples$ mpif90
</span><br>
<span class="quotelev1">&gt; hello_usempi.f90 -o mainmpi
</span><br>
<span class="quotelev1">&gt; brant.abbott_at_rust:~/Downloads/openmpi-1.10.0/examples$ mpirun -np 2
</span><br>
<span class="quotelev1">&gt; mainmpi
</span><br>
<span class="quotelev1">&gt; /opt/intel/composer_xe_2013.2.146/mpirt/bin/intel64/mpirun: 96: .: Can't
</span><br>
<span class="quotelev1">&gt; open /opt/intel/composer_xe_2013.2.146/mpirt/bin/intel64/mpivars.sh
</span><br>
<span class="quotelev1">&gt; brant.abbott_at_rust:~/Downloads/openmpi-1.10.0/examples$ mpiexec -np 2
</span><br>
<span class="quotelev1">&gt; mainmpi
</span><br>
<span class="quotelev1">&gt; mpiexec_rust: cannot connect to local mpd
</span><br>
<span class="quotelev1">&gt; (/tmp/mpd2.console_brant.abbott); possible causes:
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
<span class="quotelev1">&gt; root_at_rust:/home/brant.abbott/Downloads/openmpi-1.10.0/examples# mpirun
</span><br>
<span class="quotelev1">&gt; -np 4 mainmpi
</span><br>
<span class="quotelev1">&gt; Hello, world, I am  1 of  4:
</span><br>
<span class="quotelev1">&gt; Hello, world, I am  2 of  4:
</span><br>
<span class="quotelev1">&gt; Hello, world, I am  0 of  4:
</span><br>
<span class="quotelev1">&gt; Hello, world, I am  3 of  4:
</span><br>
<span class="quotelev1">&gt; root_at_rust:/home/brant.abbott/Downloads/openmpi-1.10.0/examples# mpiexec
</span><br>
<span class="quotelev1">&gt; -np 4 mainmpi
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27872.php">http://www.open-mpi.org/community/lists/users/2015/10/27872.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
-- 
&#208;&#161; &#209;&#131;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27873/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Previous message:</strong> <a href="27872.php">Brant Abbott: "[OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>In reply to:</strong> <a href="27872.php">Brant Abbott: "[OMPI users] mpirun/mpiexec requires su"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
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
