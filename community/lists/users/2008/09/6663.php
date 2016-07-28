<?
$subject_val = "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 13:28:08 2008" -->
<!-- isoreceived="20080922172808" -->
<!-- sent="Mon, 22 Sep 2008 13:27:59 -0400" -->
<!-- isosent="20080922172759" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure and Build ok, but mpi module not recognized?" -->
<!-- id="48D7D59F.8090103_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48535380809220903h55f1b9bal74e204008137271f_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-09-22 13:27:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6664.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6662.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>In reply to:</strong> <a href="6660.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6672.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6672.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6673.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian and list
<br>
<p>I read your original posting and Jeff's answers.
<br>
<p>Here on CentOS from Rocks Cluster I have a &quot;native&quot; OpenMPI, with a mpi.mod,
<br>
compiled with gfortran.
<br>
Note that I don't even have gfortran installed!
<br>
This is besides the MPI versions (MPICH2 and OpenMPI)
<br>
I installed from scratch using combinations of ifort and pgi with gcc.
<br>
It may be that mpif90 is not picking the right mpi.mod, as Jeff suggested.
<br>
Something like this may be part of your problem.
<br>
A &quot;locate mpi.mod&quot; should show what your system has.
<br>
<p>Have you tried to force the directory where mpi.mod is searched for?
<br>
Something like this:
<br>
<p>/full/path/to/openmpi/bin/mpif90  -module  
<br>
/full/path/to/openmpi_mpi.mod_directory/   hello_f90.f90
<br>
<p>The ifort man pages has the &quot;-module&quot; syntax details.
<br>
<p>I hope this helps.
<br>
<p>Gus Correa
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
&gt;Thanks for the input.  I have been using full path names to both the
&gt;wrapper compilers and mpiexec from the first day I had two MPI
&gt;implementations on my machine, depending on if I want to use MPICH or
&gt;openMPI, but still the problem remains.  ARGGGGGG!
&gt;
&gt;On Mon, Sep 22, 2008 at 9:40 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
&gt;  
&gt;
&gt;&gt;Hello Brian and list
&gt;&gt;
&gt;&gt;My confusing experiences with multiple MPI implementations
&gt;&gt;were fixed the day I decided to use full path names to the MPI compiler
&gt;&gt;wrappers (mpicc, mpif77, etc) at compile time,
&gt;&gt;and to the MPI job launcher (mpirun, mpiexec, and so on) at run time,
&gt;&gt;and to do this in a consistent fashion (using the tools from the same
&gt;&gt;install to compile and to run the programs).
&gt;&gt;
&gt;&gt;Most Linux distributions come with built in MPI implementations (often times
&gt;&gt;more than one),
&gt;&gt;and so do commercial compilers and other tools.
&gt;&gt;You end up with a mess of different MPI versions on your &quot;native&quot; PATH,
&gt;&gt;as well as variety of bin, lib, and include directories containing different
&gt;&gt;MPI stuff.
&gt;&gt;The easy way around is to use full path names, particularly if you install
&gt;&gt;yet another MPI implementation
&gt;&gt;from scratch.
&gt;&gt;Another way is to fix your PATH on your initialization files (.cshrc, etc)
&gt;&gt;to point to your preferred implementation (put the appropriate bin directory
&gt;&gt;ahead of everything else).
&gt;&gt;Yet another is to install the &quot;environment modules&quot; package on your system
&gt;&gt;and use it consistently.
&gt;&gt;
&gt;&gt;My two cents.
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
&gt;&gt;&gt;I built and installed both MPICH2 and openMPI from source, so no
&gt;&gt;&gt;distribution packages or anything.  MPICH2 has the modules located in
&gt;&gt;&gt;/usr/local/include, which I assume would be found (since its in my
&gt;&gt;&gt;path), were it not for specifying -I$OPENMPI_HOME/lib at compile time,
&gt;&gt;&gt;right?  I can't imagine that if you tell it where to look for the
&gt;&gt;&gt;correct modules, it would search through your path first before going
&gt;&gt;&gt;to where you tell it to go.  Or am I too optimistic?  Thanks again for
&gt;&gt;&gt;the input!
&gt;&gt;&gt;
&gt;&gt;&gt;On Mon, Sep 22, 2008 at 8:58 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;      
&gt;&gt;&gt;
&gt;&gt;&gt;&gt;On Sep 22, 2008, at 10:10 AM, Brian Harker wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;        
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;Thanks for the reply...crap, $HOME/openmpi/lib does contains all the
&gt;&gt;&gt;&gt;&gt;various lilbmpi* files as well as mpi.mod,
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;          
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;That should be correct.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;        
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;but still get the same
&gt;&gt;&gt;&gt;&gt;error at compile-time.  Yes, I made sure to specifically build openMPI
&gt;&gt;&gt;&gt;&gt;with ifort 10.1.012, and did run the --showme command right after
&gt;&gt;&gt;&gt;&gt;installation to make sure the wrapper compiler was using ifort as
&gt;&gt;&gt;&gt;&gt;well.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;          
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Ok, good.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;        
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;Before posting to this mailing list, I did uninstall and re-install
&gt;&gt;&gt;&gt;&gt;openMPI several times to make sure I had a clean install.  Still no
&gt;&gt;&gt;&gt;&gt;luck.  :(
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;          
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Ok.  Have you checked around your machine to ensure that there is no
&gt;&gt;&gt;&gt;other
&gt;&gt;&gt;&gt;mpi.mod that the compiler is finding first?  E.g., in your MPICH2
&gt;&gt;&gt;&gt;installation?  Or is Open MPI installed by your distro, perchance?  You
&gt;&gt;&gt;&gt;might want to try a &quot;rpm -qa | grep openmpi&quot; (or whatever your distro's
&gt;&gt;&gt;&gt;equivalent is to check already-installed packages).
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;--
&gt;&gt;&gt;&gt;Jeff Squyres
&gt;&gt;&gt;&gt;Cisco Systems
&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6664.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6662.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>In reply to:</strong> <a href="6660.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6672.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6672.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6673.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
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
