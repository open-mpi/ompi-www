<?
$subject_val = "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 19:42:35 2008" -->
<!-- isoreceived="20080922234235" -->
<!-- sent="Mon, 22 Sep 2008 19:42:25 -0400" -->
<!-- isosent="20080922234225" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure and Build ok, but mpi module not recognized?" -->
<!-- id="48D82D61.6020109_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48535380809221430i7d4661cal4508dd684a0c981e_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 19:42:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6681.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6679.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6672.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6682.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6682.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian and list
<br>
<p>I seldom used the &quot;use mpi&quot; syntax before.
<br>
I have a lot of code here written in Fortran 90,
<br>
but and mpif.h is included instead &quot;use mpi&quot;.
<br>
The MPI function calls are the same in Fortran 77 and Fortran 90 syntax,
<br>
hence there is just one line of code to change, if one wants to go fully 
<br>
F90.
<br>
All works well, though.
<br>
This style is a legacy from the times when the Fortran90 interface of 
<br>
MPI was not fully developed,
<br>
and the mpi.mod was broken most of the time.
<br>
That is no longer the case, though.
<br>
<p>This mixed mode may be one way around your problem, although not ideal.
<br>
The main drawback of using the &quot;include mpif.h&quot; syntax
<br>
is that there is no parameter checking of the MPI function calls,
<br>
whereas the &quot;use mpi&quot; syntax provide some level of parameter checking
<br>
through the mpi.mod module.
<br>
If you are careful when you write your MPI calls,
<br>
and check if all parameters match the syntax requirements strictly,
<br>
this shouldn't be a problem, though.
<br>
(Nevertheless, a few days ago somebody was suffering here on the list 
<br>
with a problem that was just
<br>
a missing &quot;ierr&quot; parameter in an MPI_Send call.   Jeff found it out, 
<br>
after several emails back and forth.)
<br>
<p>If not for anything else, just for the fun of it, to see how far the 
<br>
compilation goes,
<br>
I would comment out &quot;use mpi&quot; and replace it by &quot;include mpif.h&quot;.
<br>
<p>As for architecture and compiler, I have used with no problem 
<br>
OpenMPI  (and MPICH2 and MPICH-1) on various
<br>
x86 and x86_64 machines, both AMD and Intel, under different Linux 
<br>
flavors (Fedora, CentOS, Red Hat),
<br>
in standalone machines (using SMP and shared memory),
<br>
and on a small cluster using Ethernet 100T , then using  Gigabit Ethernet,
<br>
compiling it with gcc and ifort and with gcc and pgf90.
<br>
<p>Note that I don't have icc, I use gcc and g++.
<br>
Are the icc and ifort versions that you have the same?
<br>
I don't know if different versions may not mix well, but it is a 
<br>
possibility.
<br>
<p>I tried to reproduce your problem by writing a simple hello_f90.f90 
<br>
program, with the &quot;use mpi&quot; syntax,
<br>
and compiling it with the OpenMPI mpif90.
<br>
However, the program compiled without any problem,
<br>
and I didn't need to point to the mpi.mod directory using the &quot;-module&quot; 
<br>
flag either,
<br>
despite my having a &quot;gfortran-openmpi&quot; version of mpi.mod in 
<br>
/usr/lib/openmpi/.
<br>
The program runs fine too, with  2 processes, 4 processes, etc.
<br>
<p>On your first message on this thread, your configure command declares 
<br>
environment
<br>
variables for CC, CXX, F77, and FC without full paths.
<br>
I wonder if there is any chance that there are multiple versions of 
<br>
Intel compilers on your
<br>
system, that somehow may be the cause for the confusion (perhaps as 
<br>
early as the build time).
<br>
<p>Also, note that mpi.mod is not an include file.
<br>
It is located in the lib directory of openmpi.
<br>
There was some confusion about this before, with a discussion about &quot;-I&quot; 
<br>
directories, etc,
<br>
but hopefully this was clarified already.
<br>
<p>Another thing to check is if there is any funny compiler configuration 
<br>
(say in /opt/intel/fc/bla/bla/ifort.cfg).
<br>
<p>Yet another thing I would look at are the logs for OpenMPI configure, 
<br>
make, and make install,
<br>
if you saved them, to see if the Fortran90 interface was built to 
<br>
completion.
<br>
<p>Also, a suggestion is to compile with the verbose &quot;-v&quot; option, to see if 
<br>
it spits out some
<br>
clue to what is going on. 
<br>
<p>I hope this helps.
<br>
<p>Gus Correa
<br>
(from the stamp-collecting side of science :) )
<br>
<p><pre>
-- 
---------------------------------------------------------------------
Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
Lamont-Doherty Earth Observatory - Columbia University
P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
---------------------------------------------------------------------
Brian Harker wrote:
&gt;Hi guys-
&gt;
&gt;Still no dice.  The only mpi.mod files I have are the ones generated
&gt;from my compile and build from source (and they are where they should
&gt;be), so there's definitely no confusion amongst the modules.  And
&gt;specifying the fulls path to the correct mpi.mod module (like Gus
&gt;suggested with the -module option) gives no change.  I am running out
&gt;of ideas and patience, as I'm sure you all are too!  Perhaps openMPI
&gt;just doesn't play nice with my compiler suite and hardware
&gt;architecture...?  Thanks for all the input!
&gt;
&gt;On Mon, Sep 22, 2008 at 11:27 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
&gt;  
&gt;
&gt;&gt;Hi Brian and list
&gt;&gt;
&gt;&gt;I read your original posting and Jeff's answers.
&gt;&gt;
&gt;&gt;Here on CentOS from Rocks Cluster I have a &quot;native&quot; OpenMPI, with a mpi.mod,
&gt;&gt;compiled with gfortran.
&gt;&gt;Note that I don't even have gfortran installed!
&gt;&gt;This is besides the MPI versions (MPICH2 and OpenMPI)
&gt;&gt;I installed from scratch using combinations of ifort and pgi with gcc.
&gt;&gt;It may be that mpif90 is not picking the right mpi.mod, as Jeff suggested.
&gt;&gt;Something like this may be part of your problem.
&gt;&gt;A &quot;locate mpi.mod&quot; should show what your system has.
&gt;&gt;
&gt;&gt;Have you tried to force the directory where mpi.mod is searched for?
&gt;&gt;Something like this:
&gt;&gt;
&gt;&gt;/full/path/to/openmpi/bin/mpif90  -module
&gt;&gt; /full/path/to/openmpi_mpi.mod_directory/   hello_f90.f90
&gt;&gt;
&gt;&gt;The ifort man pages has the &quot;-module&quot; syntax details.
&gt;&gt;
&gt;&gt;I hope this helps.
&gt;&gt;
&gt;&gt;Gus Correa
&gt;&gt;
&gt;&gt;--
&gt;&gt;---------------------------------------------------------------------
&gt;&gt;Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
&gt;&gt;Lamont-Doherty Earth Observatory - Columbia University
&gt;&gt;P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
&gt;&gt;---------------------------------------------------------------------
&gt;&gt;
&gt;&gt;
&gt;&gt;Brian Harker wrote:
&gt;&gt;
&gt;&gt;    
&gt;&gt;
&gt;&gt;&gt;Hi Gus-
&gt;&gt;&gt;
&gt;&gt;&gt;Thanks for the input.  I have been using full path names to both the
&gt;&gt;&gt;wrapper compilers and mpiexec from the first day I had two MPI
&gt;&gt;&gt;implementations on my machine, depending on if I want to use MPICH or
&gt;&gt;&gt;openMPI, but still the problem remains.  ARGGGGGG!
&gt;&gt;&gt;
&gt;&gt;&gt;On Mon, Sep 22, 2008 at 9:40 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;      
&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Hello Brian and list
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;My confusing experiences with multiple MPI implementations
&gt;&gt;&gt;&gt;were fixed the day I decided to use full path names to the MPI compiler
&gt;&gt;&gt;&gt;wrappers (mpicc, mpif77, etc) at compile time,
&gt;&gt;&gt;&gt;and to the MPI job launcher (mpirun, mpiexec, and so on) at run time,
&gt;&gt;&gt;&gt;and to do this in a consistent fashion (using the tools from the same
&gt;&gt;&gt;&gt;install to compile and to run the programs).
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Most Linux distributions come with built in MPI implementations (often
&gt;&gt;&gt;&gt;times
&gt;&gt;&gt;&gt;more than one),
&gt;&gt;&gt;&gt;and so do commercial compilers and other tools.
&gt;&gt;&gt;&gt;You end up with a mess of different MPI versions on your &quot;native&quot; PATH,
&gt;&gt;&gt;&gt;as well as variety of bin, lib, and include directories containing
&gt;&gt;&gt;&gt;different
&gt;&gt;&gt;&gt;MPI stuff.
&gt;&gt;&gt;&gt;The easy way around is to use full path names, particularly if you
&gt;&gt;&gt;&gt;install
&gt;&gt;&gt;&gt;yet another MPI implementation
&gt;&gt;&gt;&gt;from scratch.
&gt;&gt;&gt;&gt;Another way is to fix your PATH on your initialization files (.cshrc,
&gt;&gt;&gt;&gt;etc)
&gt;&gt;&gt;&gt;to point to your preferred implementation (put the appropriate bin
&gt;&gt;&gt;&gt;directory
&gt;&gt;&gt;&gt;ahead of everything else).
&gt;&gt;&gt;&gt;Yet another is to install the &quot;environment modules&quot; package on your
&gt;&gt;&gt;&gt;system
&gt;&gt;&gt;&gt;and use it consistently.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;My two cents.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Gus Correa
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;--
&gt;&gt;&gt;&gt;---------------------------------------------------------------------
&gt;&gt;&gt;&gt;Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
&gt;&gt;&gt;&gt;Lamont-Doherty Earth Observatory - Columbia University
&gt;&gt;&gt;&gt;P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
&gt;&gt;&gt;&gt;---------------------------------------------------------------------
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Brian Harker wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;        
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;I built and installed both MPICH2 and openMPI from source, so no
&gt;&gt;&gt;&gt;&gt;distribution packages or anything.  MPICH2 has the modules located in
&gt;&gt;&gt;&gt;&gt;/usr/local/include, which I assume would be found (since its in my
&gt;&gt;&gt;&gt;&gt;path), were it not for specifying -I$OPENMPI_HOME/lib at compile time,
&gt;&gt;&gt;&gt;&gt;right?  I can't imagine that if you tell it where to look for the
&gt;&gt;&gt;&gt;&gt;correct modules, it would search through your path first before going
&gt;&gt;&gt;&gt;&gt;to where you tell it to go.  Or am I too optimistic?  Thanks again for
&gt;&gt;&gt;&gt;&gt;the input!
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;On Mon, Sep 22, 2008 at 8:58 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt;wrote:
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;          
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;On Sep 22, 2008, at 10:10 AM, Brian Harker wrote:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;            
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;Thanks for the reply...crap, $HOME/openmpi/lib does contains all the
&gt;&gt;&gt;&gt;&gt;&gt;&gt;various lilbmpi* files as well as mpi.mod,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;              
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;That should be correct.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;            
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;but still get the same
&gt;&gt;&gt;&gt;&gt;&gt;&gt;error at compile-time.  Yes, I made sure to specifically build openMPI
&gt;&gt;&gt;&gt;&gt;&gt;&gt;with ifort 10.1.012, and did run the --showme command right after
&gt;&gt;&gt;&gt;&gt;&gt;&gt;installation to make sure the wrapper compiler was using ifort as
&gt;&gt;&gt;&gt;&gt;&gt;&gt;well.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;              
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;Ok, good.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;            
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;Before posting to this mailing list, I did uninstall and re-install
&gt;&gt;&gt;&gt;&gt;&gt;&gt;openMPI several times to make sure I had a clean install.  Still no
&gt;&gt;&gt;&gt;&gt;&gt;&gt;luck.  :(
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;              
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;Ok.  Have you checked around your machine to ensure that there is no
&gt;&gt;&gt;&gt;&gt;&gt;other
&gt;&gt;&gt;&gt;&gt;&gt;mpi.mod that the compiler is finding first?  E.g., in your MPICH2
&gt;&gt;&gt;&gt;&gt;&gt;installation?  Or is Open MPI installed by your distro, perchance?  You
&gt;&gt;&gt;&gt;&gt;&gt;might want to try a &quot;rpm -qa | grep openmpi&quot; (or whatever your distro's
&gt;&gt;&gt;&gt;&gt;&gt;equivalent is to check already-installed packages).
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt;&gt;&gt;&gt;&gt;Jeff Squyres
&gt;&gt;&gt;&gt;&gt;&gt;Cisco Systems
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;users mailing list
&gt;&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;            
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;          
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;_______________________________________________
&gt;&gt;&gt;&gt;users mailing list
&gt;&gt;&gt;&gt;users_at_[hidden]
&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;        
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;      
&gt;&gt;&gt;
&gt;&gt;_______________________________________________
&gt;&gt;users mailing list
&gt;&gt;users_at_[hidden]
&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;&gt;    
&gt;&gt;
&gt;
&gt;
&gt;
&gt;  
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6681.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6679.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6672.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6682.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6682.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
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
