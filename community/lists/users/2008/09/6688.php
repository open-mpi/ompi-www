<?
$subject_val = "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 21:56:46 2008" -->
<!-- isoreceived="20080923015646" -->
<!-- sent="Mon, 22 Sep 2008 21:56:34 -0400" -->
<!-- isosent="20080923015634" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure and Build ok, but mpi module not recognized?" -->
<!-- id="48D84CD2.8010106_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48535380809221715l461256b9w6e31b2e0d6ce835c_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-09-22 21:56:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6689.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6687.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6682.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6689.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6689.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian and list
<br>
<p>On my code I have
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
<p>with single quotes around the file name.
<br>
I use single quotes, but double quotes are also possible according to 
<br>
the F90 standard.
<br>
If you start at column 7 and end at column 72,
<br>
you avoid any problems with free vs. fixed Fortran form (which may 
<br>
happen if one decides
<br>
to mess the compiler options on Makefiles, for instance).
<br>
This is PDP, paranoid defensive programming.
<br>
I type the Fortran commands in lowercase (include) but this may not 
<br>
really make any difference
<br>
(although there are compiler options to transliterate upper to lower, 
<br>
be/not be case sensitive, etc)
<br>
<p>However, since you asked, I changed the &quot;include 'mpif.h'&quot; location to 
<br>
column 1, column 6,
<br>
etc, and I could compile the code with OpenMPI mpif90 without any problems.
<br>
Hence, I presume mpif90 uses the free form as default.
<br>
So, I wonder if you still have some residual mix of gfortran and ifort 
<br>
there,
<br>
or if there is some funny configuration on your ifort.cfg file choosing 
<br>
the fixed form as a default.
<br>
<p>In any case, going out of scope probably has nothing to do with fixed vs 
<br>
free form.
<br>
I only have one &quot;use mpi&quot; statement, no other modules &quot;used&quot; in the 
<br>
little hello_f90.
<br>
It may well be that if you try other &quot;use&quot;  statements, particularly if 
<br>
the respective modules
<br>
involve other MPI modules or MPI function interfaces, things may break 
<br>
and be out of scope.
<br>
I presume you are not talking of hello_f90 anymore, but of a larger code.
<br>
The large code examples I have here use other F90 modules (not mpi.mod),
<br>
but they don't rely on MPI interfaces.
<br>
<p>Glad to know that the main problem is gone (I read the more recent 
<br>
messages).
<br>
I was reluctant to tell you to do a &quot;make distclean&quot;, and start fresh, 
<br>
configure again, make again,
<br>
because you said you had built the OpenMPI library more than once.
<br>
Now I think that was exactly what I should have told you to do.
<br>
Everybody builds these things many times to get them right.
<br>
Then a few more times to make it efficient, to optimize, etc.
<br>
Can you imagine how many times Rutherford set up that gold foil 
<br>
experiment until he got it right?  :)
<br>
After it is done, the past errors become trivial, and all the rest is 
<br>
reduced just to stamp collecting.  :)
<br>
Configure is always complex, and dumping its output to a log file is
<br>
worth the effort, to check out for sticky problems like this, which 
<br>
often happen.
<br>
(Likewise for make and make install.)
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><pre>
-- 
---------------------------------------------------------------------
Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
Lamont-Doherty Earth Observatory - Columbia University
P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
---------------------------------------------------------------------
Brian Harker wrote:
&gt;Hi Gus-
&gt;
&gt;Thanks for the idea.  One question: how do you position INCLUDE
&gt;statements in a fortran program, because if I just straight substitute
&gt;' INCLUDE &quot;mpif.h&quot; ' for ' USE mpi ', I get a lot of crap telling me
&gt;my other USE statements are not positioned correctly within the scope
&gt;and nothing compiles.  I have tried various positions, but I seem to
&gt;be suffering from a lot of BS.  Am I overlooking something very
&gt;obvious?
&gt;
&gt;On Mon, Sep 22, 2008 at 5:42 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
&gt;  
&gt;
&gt;&gt;Hi Brian and list
&gt;&gt;
&gt;&gt;I seldom used the &quot;use mpi&quot; syntax before.
&gt;&gt;I have a lot of code here written in Fortran 90,
&gt;&gt;but and mpif.h is included instead &quot;use mpi&quot;.
&gt;&gt;The MPI function calls are the same in Fortran 77 and Fortran 90 syntax,
&gt;&gt;hence there is just one line of code to change, if one wants to go fully
&gt;&gt;F90.
&gt;&gt;All works well, though.
&gt;&gt;This style is a legacy from the times when the Fortran90 interface of MPI
&gt;&gt;was not fully developed,
&gt;&gt;and the mpi.mod was broken most of the time.
&gt;&gt;That is no longer the case, though.
&gt;&gt;
&gt;&gt;This mixed mode may be one way around your problem, although not ideal.
&gt;&gt;The main drawback of using the &quot;include mpif.h&quot; syntax
&gt;&gt;is that there is no parameter checking of the MPI function calls,
&gt;&gt;whereas the &quot;use mpi&quot; syntax provide some level of parameter checking
&gt;&gt;through the mpi.mod module.
&gt;&gt;If you are careful when you write your MPI calls,
&gt;&gt;and check if all parameters match the syntax requirements strictly,
&gt;&gt;this shouldn't be a problem, though.
&gt;&gt;(Nevertheless, a few days ago somebody was suffering here on the list with a
&gt;&gt;problem that was just
&gt;&gt;a missing &quot;ierr&quot; parameter in an MPI_Send call.   Jeff found it out, after
&gt;&gt;several emails back and forth.)
&gt;&gt;
&gt;&gt;If not for anything else, just for the fun of it, to see how far the
&gt;&gt;compilation goes,
&gt;&gt;I would comment out &quot;use mpi&quot; and replace it by &quot;include mpif.h&quot;.
&gt;&gt;
&gt;&gt;As for architecture and compiler, I have used with no problem OpenMPI  (and
&gt;&gt;MPICH2 and MPICH-1) on various
&gt;&gt;x86 and x86_64 machines, both AMD and Intel, under different Linux flavors
&gt;&gt;(Fedora, CentOS, Red Hat),
&gt;&gt;in standalone machines (using SMP and shared memory),
&gt;&gt;and on a small cluster using Ethernet 100T , then using  Gigabit Ethernet,
&gt;&gt;compiling it with gcc and ifort and with gcc and pgf90.
&gt;&gt;
&gt;&gt;Note that I don't have icc, I use gcc and g++.
&gt;&gt;Are the icc and ifort versions that you have the same?
&gt;&gt;I don't know if different versions may not mix well, but it is a
&gt;&gt;possibility.
&gt;&gt;
&gt;&gt;I tried to reproduce your problem by writing a simple hello_f90.f90 program,
&gt;&gt;with the &quot;use mpi&quot; syntax,
&gt;&gt;and compiling it with the OpenMPI mpif90.
&gt;&gt;However, the program compiled without any problem,
&gt;&gt;and I didn't need to point to the mpi.mod directory using the &quot;-module&quot; flag
&gt;&gt;either,
&gt;&gt;despite my having a &quot;gfortran-openmpi&quot; version of mpi.mod in
&gt;&gt;/usr/lib/openmpi/.
&gt;&gt;The program runs fine too, with  2 processes, 4 processes, etc.
&gt;&gt;
&gt;&gt;On your first message on this thread, your configure command declares
&gt;&gt;environment
&gt;&gt;variables for CC, CXX, F77, and FC without full paths.
&gt;&gt;I wonder if there is any chance that there are multiple versions of Intel
&gt;&gt;compilers on your
&gt;&gt;system, that somehow may be the cause for the confusion (perhaps as early as
&gt;&gt;the build time).
&gt;&gt;
&gt;&gt;Also, note that mpi.mod is not an include file.
&gt;&gt;It is located in the lib directory of openmpi.
&gt;&gt;There was some confusion about this before, with a discussion about &quot;-I&quot;
&gt;&gt;directories, etc,
&gt;&gt;but hopefully this was clarified already.
&gt;&gt;
&gt;&gt;Another thing to check is if there is any funny compiler configuration (say
&gt;&gt;in /opt/intel/fc/bla/bla/ifort.cfg).
&gt;&gt;
&gt;&gt;Yet another thing I would look at are the logs for OpenMPI configure, make,
&gt;&gt;and make install,
&gt;&gt;if you saved them, to see if the Fortran90 interface was built to
&gt;&gt;completion.
&gt;&gt;
&gt;&gt;Also, a suggestion is to compile with the verbose &quot;-v&quot; option, to see if it
&gt;&gt;spits out some
&gt;&gt;clue to what is going on.
&gt;&gt;I hope this helps.
&gt;&gt;
&gt;&gt;Gus Correa
&gt;&gt;(from the stamp-collecting side of science :) )
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
&gt;&gt;&gt;Hi guys-
&gt;&gt;&gt;
&gt;&gt;&gt;Still no dice.  The only mpi.mod files I have are the ones generated
&gt;&gt;&gt;from my compile and build from source (and they are where they should
&gt;&gt;&gt;be), so there's definitely no confusion amongst the modules.  And
&gt;&gt;&gt;specifying the fulls path to the correct mpi.mod module (like Gus
&gt;&gt;&gt;suggested with the -module option) gives no change.  I am running out
&gt;&gt;&gt;of ideas and patience, as I'm sure you all are too!  Perhaps openMPI
&gt;&gt;&gt;just doesn't play nice with my compiler suite and hardware
&gt;&gt;&gt;architecture...?  Thanks for all the input!
&gt;&gt;&gt;
&gt;&gt;&gt;On Mon, Sep 22, 2008 at 11:27 AM, Gus Correa &lt;gus_at_[hidden]&gt;
&gt;&gt;&gt;wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;      
&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Hi Brian and list
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;I read your original posting and Jeff's answers.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Here on CentOS from Rocks Cluster I have a &quot;native&quot; OpenMPI, with a
&gt;&gt;&gt;&gt;mpi.mod,
&gt;&gt;&gt;&gt;compiled with gfortran.
&gt;&gt;&gt;&gt;Note that I don't even have gfortran installed!
&gt;&gt;&gt;&gt;This is besides the MPI versions (MPICH2 and OpenMPI)
&gt;&gt;&gt;&gt;I installed from scratch using combinations of ifort and pgi with gcc.
&gt;&gt;&gt;&gt;It may be that mpif90 is not picking the right mpi.mod, as Jeff
&gt;&gt;&gt;&gt;suggested.
&gt;&gt;&gt;&gt;Something like this may be part of your problem.
&gt;&gt;&gt;&gt;A &quot;locate mpi.mod&quot; should show what your system has.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Have you tried to force the directory where mpi.mod is searched for?
&gt;&gt;&gt;&gt;Something like this:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;/full/path/to/openmpi/bin/mpif90  -module
&gt;&gt;&gt;&gt;/full/path/to/openmpi_mpi.mod_directory/   hello_f90.f90
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;The ifort man pages has the &quot;-module&quot; syntax details.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;I hope this helps.
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
&gt;&gt;&gt;&gt;&gt;Hi Gus-
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;Thanks for the input.  I have been using full path names to both the
&gt;&gt;&gt;&gt;&gt;wrapper compilers and mpiexec from the first day I had two MPI
&gt;&gt;&gt;&gt;&gt;implementations on my machine, depending on if I want to use MPICH or
&gt;&gt;&gt;&gt;&gt;openMPI, but still the problem remains.  ARGGGGGG!
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;On Mon, Sep 22, 2008 at 9:40 AM, Gus Correa &lt;gus_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt;wrote:
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;          
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;Hello Brian and list
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;My confusing experiences with multiple MPI implementations
&gt;&gt;&gt;&gt;&gt;&gt;were fixed the day I decided to use full path names to the MPI compiler
&gt;&gt;&gt;&gt;&gt;&gt;wrappers (mpicc, mpif77, etc) at compile time,
&gt;&gt;&gt;&gt;&gt;&gt;and to the MPI job launcher (mpirun, mpiexec, and so on) at run time,
&gt;&gt;&gt;&gt;&gt;&gt;and to do this in a consistent fashion (using the tools from the same
&gt;&gt;&gt;&gt;&gt;&gt;install to compile and to run the programs).
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;Most Linux distributions come with built in MPI implementations (often
&gt;&gt;&gt;&gt;&gt;&gt;times
&gt;&gt;&gt;&gt;&gt;&gt;more than one),
&gt;&gt;&gt;&gt;&gt;&gt;and so do commercial compilers and other tools.
&gt;&gt;&gt;&gt;&gt;&gt;You end up with a mess of different MPI versions on your &quot;native&quot; PATH,
&gt;&gt;&gt;&gt;&gt;&gt;as well as variety of bin, lib, and include directories containing
&gt;&gt;&gt;&gt;&gt;&gt;different
&gt;&gt;&gt;&gt;&gt;&gt;MPI stuff.
&gt;&gt;&gt;&gt;&gt;&gt;The easy way around is to use full path names, particularly if you
&gt;&gt;&gt;&gt;&gt;&gt;install
&gt;&gt;&gt;&gt;&gt;&gt;yet another MPI implementation
&gt;&gt;&gt;&gt;&gt;&gt;from scratch.
&gt;&gt;&gt;&gt;&gt;&gt;Another way is to fix your PATH on your initialization files (.cshrc,
&gt;&gt;&gt;&gt;&gt;&gt;etc)
&gt;&gt;&gt;&gt;&gt;&gt;to point to your preferred implementation (put the appropriate bin
&gt;&gt;&gt;&gt;&gt;&gt;directory
&gt;&gt;&gt;&gt;&gt;&gt;ahead of everything else).
&gt;&gt;&gt;&gt;&gt;&gt;Yet another is to install the &quot;environment modules&quot; package on your
&gt;&gt;&gt;&gt;&gt;&gt;system
&gt;&gt;&gt;&gt;&gt;&gt;and use it consistently.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;My two cents.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;Gus Correa
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;Lamont-Doherty Earth Observatory - Columbia University
&gt;&gt;&gt;&gt;&gt;&gt;P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
&gt;&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;Brian Harker wrote:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;            
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;I built and installed both MPICH2 and openMPI from source, so no
&gt;&gt;&gt;&gt;&gt;&gt;&gt;distribution packages or anything.  MPICH2 has the modules located in
&gt;&gt;&gt;&gt;&gt;&gt;&gt;/usr/local/include, which I assume would be found (since its in my
&gt;&gt;&gt;&gt;&gt;&gt;&gt;path), were it not for specifying -I$OPENMPI_HOME/lib at compile time,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;right?  I can't imagine that if you tell it where to look for the
&gt;&gt;&gt;&gt;&gt;&gt;&gt;correct modules, it would search through your path first before going
&gt;&gt;&gt;&gt;&gt;&gt;&gt;to where you tell it to go.  Or am I too optimistic?  Thanks again for
&gt;&gt;&gt;&gt;&gt;&gt;&gt;the input!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Mon, Sep 22, 2008 at 8:58 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;              
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Sep 22, 2008, at 10:10 AM, Brian Harker wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Thanks for the reply...crap, $HOME/openmpi/lib does contains all the
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;various lilbmpi* files as well as mpi.mod,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                  
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;That should be correct.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;but still get the same
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;error at compile-time.  Yes, I made sure to specifically build
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;openMPI
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;with ifort 10.1.012, and did run the --showme command right after
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;installation to make sure the wrapper compiler was using ifort as
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;well.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                  
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Ok, good.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Before posting to this mailing list, I did uninstall and re-install
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;openMPI several times to make sure I had a clean install.  Still no
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;luck.  :(
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                  
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Ok.  Have you checked around your machine to ensure that there is no
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;other
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;mpi.mod that the compiler is finding first?  E.g., in your MPICH2
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;installation?  Or is Open MPI installed by your distro, perchance?
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;might want to try a &quot;rpm -qa | grep openmpi&quot; (or whatever your
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;distro's
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;equivalent is to check already-installed packages).
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Jeff Squyres
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Cisco Systems
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;              
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6689.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6687.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6682.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6689.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6689.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
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
