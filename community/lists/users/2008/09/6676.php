<?
$subject_val = "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 18:12:08 2008" -->
<!-- isoreceived="20080922221208" -->
<!-- sent="Mon, 22 Sep 2008 15:04:01 -0700" -->
<!-- isosent="20080922220401" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure and Build ok, but mpi module not recognized?" -->
<!-- id="C7D8C7E9-3387-4775-9A9C-56B0B9216AD6_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48535380809221452s4e6bea6ep174b7c60497ebeef_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure and Build ok, but mpi module not recognized?<br>
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 18:04:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6677.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6675.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6673.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>Try doing a make clean before doing the build with your new make file  
<br>
(from the new configure process). It looks like you are getting the  
<br>
leftover module files from the old makefile/compilers.
<br>
<p>Doug reeder
<br>
On Sep 22, 2008, at 2:52 PM, Brian Harker wrote:
<br>
<p><span class="quotelev1">&gt; Ok, here's something funny/weird/stupid:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the actual mpi.mod module file in the $OPENMPI_HOME/lib
</span><br>
<span class="quotelev1">&gt; directory, the very first line is:
</span><br>
<span class="quotelev1">&gt; GFORTRAN module created from mpi.f90 on Fri Sep 19 14:01:27 2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WTF!?  I specified that I wanted to use the ifort/icc/icpc compiler
</span><br>
<span class="quotelev1">&gt; suite when I installed (see my first post)!  Why would it create the
</span><br>
<span class="quotelev1">&gt; module with gfortran?  This would seem to be the source of my
</span><br>
<span class="quotelev1">&gt; troubles...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Sep 22, 2008 at 11:27 AM, Gus Correa  
</span><br>
<span class="quotelev1">&gt; &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Brian and list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I read your original posting and Jeff's answers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here on CentOS from Rocks Cluster I have a &quot;native&quot; OpenMPI, with  
</span><br>
<span class="quotelev2">&gt;&gt; a mpi.mod,
</span><br>
<span class="quotelev2">&gt;&gt; compiled with gfortran.
</span><br>
<span class="quotelev2">&gt;&gt; Note that I don't even have gfortran installed!
</span><br>
<span class="quotelev2">&gt;&gt; This is besides the MPI versions (MPICH2 and OpenMPI)
</span><br>
<span class="quotelev2">&gt;&gt; I installed from scratch using combinations of ifort and pgi with  
</span><br>
<span class="quotelev2">&gt;&gt; gcc.
</span><br>
<span class="quotelev2">&gt;&gt; It may be that mpif90 is not picking the right mpi.mod, as Jeff  
</span><br>
<span class="quotelev2">&gt;&gt; suggested.
</span><br>
<span class="quotelev2">&gt;&gt; Something like this may be part of your problem.
</span><br>
<span class="quotelev2">&gt;&gt; A &quot;locate mpi.mod&quot; should show what your system has.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried to force the directory where mpi.mod is searched for?
</span><br>
<span class="quotelev2">&gt;&gt; Something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /full/path/to/openmpi/bin/mpif90  -module
</span><br>
<span class="quotelev2">&gt;&gt;  /full/path/to/openmpi_mpi.mod_directory/   hello_f90.f90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The ifort man pages has the &quot;-module&quot; syntax details.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian Harker wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Gus-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the input.  I have been using full path names to both the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrapper compilers and mpiexec from the first day I had two MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementations on my machine, depending on if I want to use  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPICH or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openMPI, but still the problem remains.  ARGGGGGG!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Sep 22, 2008 at 9:40 AM, Gus Correa  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello Brian and list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My confusing experiences with multiple MPI implementations
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; were fixed the day I decided to use full path names to the MPI  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiler
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrappers (mpicc, mpif77, etc) at compile time,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and to the MPI job launcher (mpirun, mpiexec, and so on) at run  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; time,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and to do this in a consistent fashion (using the tools from the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; install to compile and to run the programs).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Most Linux distributions come with built in MPI implementations  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (often
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; times
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more than one),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and so do commercial compilers and other tools.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You end up with a mess of different MPI versions on your  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;native&quot; PATH,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as well as variety of bin, lib, and include directories containing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI stuff.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The easy way around is to use full path names, particularly if you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; yet another MPI implementation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from scratch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Another way is to fix your PATH on your initialization files  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (.cshrc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; etc)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to point to your preferred implementation (put the appropriate bin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ahead of everything else).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yet another is to install the &quot;environment modules&quot; package on your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and use it consistently.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My two cents.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian Harker wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I built and installed both MPICH2 and openMPI from source, so no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; distribution packages or anything.  MPICH2 has the modules  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; located in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/local/include, which I assume would be found (since its in my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; path), were it not for specifying -I$OPENMPI_HOME/lib at  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compile time,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; right?  I can't imagine that if you tell it where to look for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; correct modules, it would search through your path first before  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; going
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to where you tell it to go.  Or am I too optimistic?  Thanks  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; again for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the input!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mon, Sep 22, 2008 at 8:58 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Sep 22, 2008, at 10:10 AM, Brian Harker wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for the reply...crap, $HOME/openmpi/lib does contains  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; various lilbmpi* files as well as mpi.mod,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; That should be correct.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; but still get the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; error at compile-time.  Yes, I made sure to specifically  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; build openMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; with ifort 10.1.012, and did run the --showme command right  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; after
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; installation to make sure the wrapper compiler was using  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ifort as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ok, good.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Before posting to this mailing list, I did uninstall and re- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; openMPI several times to make sure I had a clean install.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Still no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; luck.  :(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ok.  Have you checked around your machine to ensure that there  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; other
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpi.mod that the compiler is finding first?  E.g., in your MPICH2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; installation?  Or is Open MPI installed by your distro,  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; perchance?  You
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; might want to try a &quot;rpm -qa | grep openmpi&quot; (or whatever your  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; distro's
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; equivalent is to check already-installed packages).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; brian.harker_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;In science, there is only physics; all the rest is stamp-collecting.&quot;
</span><br>
<span class="quotelev1">&gt;  -Ernest Rutherford
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6677.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6675.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6673.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
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
