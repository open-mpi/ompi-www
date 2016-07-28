<?
$subject_val = "[OMPI users] mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 06:52:42 2009" -->
<!-- isoreceived="20090224115242" -->
<!-- sent="Tue, 24 Feb 2009 12:52:32 +0100" -->
<!-- isosent="20090224115232" -->
<!-- name="Jovana Knezevic" -->
<!-- email="jovana.knezevic.83_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun problem" -->
<!-- id="9d13e50c0902240352g26a0622fm33a244bbfbf1109f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] mpirun problem<br>
<strong>From:</strong> Jovana Knezevic (<em>jovana.knezevic.83_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 06:52:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8177.php">j artieda: "[OMPI users] mingw"</a>
<li><strong>Previous message:</strong> <a href="8175.php">Thomas Exner: "[OMPI users] Gamess with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8295.php">Jeff Squyres: "Re: [OMPI users] mpirun problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8295.php">Jeff Squyres: "Re: [OMPI users] mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm new to MPI, so I'm going to explain my problem in detail
<br>
I'm trying to compile a simple application using mpicc (on SUSE 10.0)
<br>
and run it - compilation passes well, but mpirun is the problem.
<br>
So, let's say the program is called 1.c, I tried the following:
<br>
<p>&nbsp;mpicc -o 1 1.c
<br>
<p>(and, just for the case, after problems with mpirun, I tried the following, too)
<br>
<p>&nbsp;mpicc --showme:compile
<br>
<p>&nbsp;mpicc --showme:link
<br>
<p>&nbsp;mpicc -I/include -pthread 1.c -pthread -I/lib -lmpi -lopen-rte
<br>
-lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl -o 1
<br>
<p>Both versions (wih or without flags) produced executables as expected
<br>
(so, when I write: ./1 it executes in expected manner),
<br>
but when I try this:
<br>
<p><p>mpirun -np 4 ./1,
<br>
<p>it terminates giving the following message:
<br>
<p><p>ssh: (none): Name or service not known
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 6877) died unexpectedly with status 255 while attempting
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
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p><p>Those are the PATH and LD_LIBRARY_PATH variables (I changed profile
<br>
file manually and those are the results:)
<br>
<p>/* note: openmpi-1.3 folder with the instalation is in /root/Desktop ,
<br>
I configured it with --prefix /root/Desktop/openmpi-1.3, so bin and
<br>
lib folders are in /root/Desktop/openmpi-1.3 */
<br>
<p><p>echo $PATH
<br>
/root/Desktop/openmpi-1.3/bin:/usr/lib/qt3/bin:/root/Desktop/openmpi-1.3/bin:/usr/lib/qt3/bin:/sbin:/usr/sbin:/usr/local/sbin:/opt/kde3/sbin:/opt/gnome/sbin:/root/bin:/usr/local/bin:/usr/bin:/usr/X11R6/bin:/bin:/usr/games:/opt/gnome/bin:/opt/kde3/bin:/usr/lib/mit/bin:/usr/lib/mit/sbin
<br>
<p>echo $LD_LIBRARY_PATH
<br>
/root/Desktop/openmpi-1.3/lib:/usr/lib/qt3/lib:/root/Desktop/openmpi-1.3/lib:/usr/lib/qt3/lib:
<br>
<p><p>I included in Attachment the 'omp-info'  and 'ifconfig' - command
<br>
results in separate files  as well as compressed config.log file from
<br>
the root folder of the instalation
<br>
<p><p>Thank you very much in advance for your help.
<br>
<p>Regards,
<br>
Jovana K.
<br>
<p>
<br><hr>
<ul>
<li>application/x-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8176/ompi_support.tar">ompi_support.tar</a>
</ul>
<!-- attachment="ompi_support.tar" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8177.php">j artieda: "[OMPI users] mingw"</a>
<li><strong>Previous message:</strong> <a href="8175.php">Thomas Exner: "[OMPI users] Gamess with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8295.php">Jeff Squyres: "Re: [OMPI users] mpirun problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8295.php">Jeff Squyres: "Re: [OMPI users] mpirun problem"</a>
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
