<?
$subject_val = "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 11:41:42 2008" -->
<!-- isoreceived="20080922154142" -->
<!-- sent="Mon, 22 Sep 2008 11:40:38 -0400" -->
<!-- isosent="20080922154038" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure and Build ok, but mpi module not recognized?" -->
<!-- id="48D7BC76.5080700_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48535380809220814t4ed70fb7k8bc7faf339881aeb_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-09-22 11:40:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6660.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6658.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6657.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6660.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6660.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Brian and list
<br>
<p>My confusing experiences with multiple MPI implementations
<br>
were fixed the day I decided to use full path names to the MPI compiler
<br>
wrappers (mpicc, mpif77, etc) at compile time,
<br>
and to the MPI job launcher (mpirun, mpiexec, and so on) at run time,
<br>
and to do this in a consistent fashion (using the tools from the same 
<br>
install to compile and to run the programs).
<br>
<p>Most Linux distributions come with built in MPI implementations (often 
<br>
times more than one),
<br>
and so do commercial compilers and other tools.
<br>
You end up with a mess of different MPI versions on your &quot;native&quot; PATH,
<br>
as well as variety of bin, lib, and include directories containing 
<br>
different MPI stuff.
<br>
The easy way around is to use full path names, particularly if you 
<br>
install yet another MPI implementation
<br>
from scratch.
<br>
Another way is to fix your PATH on your initialization files (.cshrc, 
<br>
etc) to point to your preferred implementation (put the appropriate bin 
<br>
directory ahead of everything else).
<br>
Yet another is to install the &quot;environment modules&quot; package on your 
<br>
system and use it consistently.
<br>
<p>My two cents.
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
&gt;I built and installed both MPICH2 and openMPI from source, so no
&gt;distribution packages or anything.  MPICH2 has the modules located in
&gt;/usr/local/include, which I assume would be found (since its in my
&gt;path), were it not for specifying -I$OPENMPI_HOME/lib at compile time,
&gt;right?  I can't imagine that if you tell it where to look for the
&gt;correct modules, it would search through your path first before going
&gt;to where you tell it to go.  Or am I too optimistic?  Thanks again for
&gt;the input!
&gt;
&gt;On Mon, Sep 22, 2008 at 8:58 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt;  
&gt;
&gt;&gt;On Sep 22, 2008, at 10:10 AM, Brian Harker wrote:
&gt;&gt;
&gt;&gt;    
&gt;&gt;
&gt;&gt;&gt;Thanks for the reply...crap, $HOME/openmpi/lib does contains all the
&gt;&gt;&gt;various lilbmpi* files as well as mpi.mod,
&gt;&gt;&gt;      
&gt;&gt;&gt;
&gt;&gt;That should be correct.
&gt;&gt;
&gt;&gt;    
&gt;&gt;
&gt;&gt;&gt;but still get the same
&gt;&gt;&gt;error at compile-time.  Yes, I made sure to specifically build openMPI
&gt;&gt;&gt;with ifort 10.1.012, and did run the --showme command right after
&gt;&gt;&gt;installation to make sure the wrapper compiler was using ifort as
&gt;&gt;&gt;well.
&gt;&gt;&gt;      
&gt;&gt;&gt;
&gt;&gt;Ok, good.
&gt;&gt;
&gt;&gt;    
&gt;&gt;
&gt;&gt;&gt;Before posting to this mailing list, I did uninstall and re-install
&gt;&gt;&gt;openMPI several times to make sure I had a clean install.  Still no
&gt;&gt;&gt;luck.  :(
&gt;&gt;&gt;      
&gt;&gt;&gt;
&gt;&gt;Ok.  Have you checked around your machine to ensure that there is no other
&gt;&gt;mpi.mod that the compiler is finding first?  E.g., in your MPICH2
&gt;&gt;installation?  Or is Open MPI installed by your distro, perchance?  You
&gt;&gt;might want to try a &quot;rpm -qa | grep openmpi&quot; (or whatever your distro's
&gt;&gt;equivalent is to check already-installed packages).
&gt;&gt;
&gt;&gt;--
&gt;&gt;Jeff Squyres
&gt;&gt;Cisco Systems
&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6660.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6658.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6657.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6660.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6660.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
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
