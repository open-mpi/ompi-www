<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan  6 15:17:51 2006" -->
<!-- isoreceived="20060106201751" -->
<!-- sent="Fri, 6 Jan 2006 15:17:43 -0500" -->
<!-- isosent="20060106201743" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Open MPI and gfortran" -->
<!-- id="019BB96B-2DAE-4A3D-A60E-FB0778D48085_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43BDBE88.5050306_at_nchc.org.tw" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-06 15:17:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0493.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>Previous message:</strong> <a href="0491.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0487.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0493.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>Reply:</strong> <a href="0493.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like the files you sent were corrupted -- I didn't see the  
<br>
information that I needed to see.  Were you working on a case- 
<br>
insensitive filesystem, perchance?  I notice that our instructions on  
<br>
the web page would probably result in this kind of corruption for  
<br>
case-insensitive filesystems.  I've updated the web page to make the  
<br>
instructions work on case-insensitive filesystems -- can you go check  
<br>
the instructions, do it again and re-send?  Sorry about that.  :-\
<br>
<p>Specifically, your config.log file had a big chunk of the beginning  
<br>
missing -- it was overlaid with the output of configure (which our  
<br>
instructions previously had you write to config.LOG, and could create  
<br>
this kind of problem on a case-insensitive filesystem).
<br>
<p>FWIW, I just built Open MPI 1.0.1 on a RHEL4U2 machine with gfortran  
<br>
4.0.2; it correctly identified that there was no real(16) support and  
<br>
didn't run into the problems that you are seeing (i.e., it didn't try  
<br>
to make MPI F90 bindings with real(16) parameters).  So I'm curious  
<br>
to see your full logs to figure out why it's failing for you.
<br>
<p><p><p>On Jan 5, 2006, at 7:49 PM, Jyh-Shyong Ho wrote:
<br>
<p><span class="quotelev1">&gt; Dear Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for yor reply. I checked and confirmed that my gfortran is  
</span><br>
<span class="quotelev1">&gt; version 4.0.2, so the
</span><br>
<span class="quotelev1">&gt; test program failed since it does not support real(16).
</span><br>
<span class="quotelev1">&gt; The log files for configure and make are attached.
</span><br>
<span class="quotelev1">&gt; It is strange since I am able to use the same configuration and  
</span><br>
<span class="quotelev1">&gt; build OpenMPI successfully
</span><br>
<span class="quotelev1">&gt; on another SuSE10/AMD 64 computer. Something must be missing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jyh-Shyong Ho, Ph.D.
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; National Center for  High Performance Computing
</span><br>
<span class="quotelev1">&gt; Hsinchu, Taiwan, ROC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What concerns me, though, is that Open MPI shouldn't have tried to  
</span><br>
<span class="quotelev2">&gt;&gt; compile support for real(16) in the first place -- our configure  
</span><br>
<span class="quotelev2">&gt;&gt; script should have detected that the compiler didn't support real 
</span><br>
<span class="quotelev2">&gt;&gt; (16) (which, it at least partially did, because the constants seem  
</span><br>
<span class="quotelev2">&gt;&gt; to have a value of -1) and then the generated F90 bindings should  
</span><br>
<span class="quotelev2">&gt;&gt; not have included support for it. This is why I'd like to see the  
</span><br>
<span class="quotelev2">&gt;&gt; configure output (etc.) and see what happened. On Jan 5, 2006, at  
</span><br>
<span class="quotelev2">&gt;&gt; 12:59 PM, rod mach wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi. To my knowledge you must be using gfortran 4.1 not 4.0 to get  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; access to large kind support like real(16) You can verify by  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trying to compile the following code with gfortran. This compiles  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; under gfortran 4.1, but I don't believe it will work under 4.0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since this support was added in 4.1. program test real(16) :: x,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; y y = 4.0_16 x = sqrt(y) print *, x end --Rod ------ Rod Mach  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Absoft HPC Technical Director www.absoft.com
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Error: Kind -1 not supported for type REAL at (1) In file  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_address_f90.f90:331 make[2]: Leaving directory `/work/source/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-1.0.1/ompi/mpi' make[1]: *** [all-recursive] Error 1 make 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [1]: Leaving directory `/work/source/openmpi-1.0.1/ompi' make:  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** [all-recursive] Error 1 I used the following variables:  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FC=gfortran CC=gcc CXX=g++ F77=gfortran Any hint on how to solve  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this problem? Thanks. Jyh-Shyong Ho, Ph.D. Research Scientist  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; National Center for High Performance Computing Hsinchu, Taiwan, ROC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________ users mailing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/">http://www.open-mpi.org/mailman/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; listinfo.cgi/users
</span><br>
<span class="quotelev2">&gt;&gt; -- {+} Jeff Squyres {+} The Open MPI Project {+} <a href="http://www.open">http://www.open</a>- 
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org/ _______________________________________________ users  
</span><br>
<span class="quotelev2">&gt;&gt; mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/">http://www.open-mpi.org/mailman/</a> 
</span><br>
<span class="quotelev2">&gt;&gt; listinfo.cgi/users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.log.tgz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;make.log.tgz&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0493.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>Previous message:</strong> <a href="0491.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0487.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0493.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>Reply:</strong> <a href="0493.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
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
