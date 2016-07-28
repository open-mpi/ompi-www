<?
$subject_val = "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  1 18:18:17 2011" -->
<!-- isoreceived="20110201231817" -->
<!-- sent="Tue, 1 Feb 2011 18:17:48 -0500" -->
<!-- isosent="20110201231748" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?" -->
<!-- id="D5B71CD0-4A3A-4931-862B-273C4E08C535_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF108CC97F.B196FEFB-ON8525782A.0077CB83-8525782A.00790D1C_at_notes.aero.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-01 18:17:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15473.php">Jeff Squyres: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Previous message:</strong> <a href="15471.php">Reuti: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15468.php">Jeffrey A Cummings: "[OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15473.php">Jeff Squyres: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 1, 2011, at 5:02 PM, Jeffrey A Cummings wrote:
<br>
<p><span class="quotelev1">&gt; I use OpenMPI on a variety of platforms:  stand-alone servers running Solaris on sparc boxes and Linux (mostly CentOS) on AMD/Intel boxes, also Linux (again CentOS) on large clusters of AMD/Intel boxes.  These platforms all have some version of the 1.3 OpenMPI stream.  I recently requested an upgrade on all systems to 1.4.3 (for production work) and 1.5.1 (for experimentation).  I'm getting a lot of push back from the SysAdmin folks claiming that OpenMPI is closely intertwined with the specific version of the operating system and/or other system software (i.e., Rocks on the clusters).  I need to know if they are telling me the truth or if they're just making excuses to avoid the work.  To state my question another way:  Apparently each release of Linux and/or Rocks comes with some version of OpenMPI bundled in.  Is it dangerous in some way to upgrade to a newer version of OpenMPI?  Thanks in advance for any insight anyone can provide. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Jeff_______________________________________________
</span><br>
<p>Hi Jeffrey
<br>
<p>As others said, Rocks has a default MPI (some version OpenMPI built with Gnu compilers with
<br>
support for Ethernet only) which comes with the &quot;hpc&quot; Rocks roll.
<br>
You can use that MPI, but you don't have to.
<br>
<p>This doesn't prevent you to install any other version of OpenMPI (actually of any other software)
<br>
with support to whatever you have (e.g. Infiniband, Torque resource manager, 
<br>
using other compilers than Gnu, etc).
<br>
<p>The right location to install on Rocks is the /share/apps directory of the head/frontend node,
<br>
which is NFS mounted on the nodes.
<br>
It is wise to use subdirectories with names identifying your version somehow,
<br>
e.g. /share/apps/ompi-1.4.3/intel-11.1.020, for something compiled with intel compilers.
<br>
<p>The --prefix=/share/apps/bla/bla option of OpenMPI configure will put the 
<br>
installed directory tree wherever you want.
<br>
<p>'configure --help' will tell tons of possibilities (e.g. tight coupling with Torque os SGE,
<br>
Infinband support, etc).
<br>
<p>You also need to set the user environment.
<br>
<p>A simple minded way is to prepend the OpenMPI bin directory to the PATH
<br>
environment variable (say in the .bashrc/.cshrc user file), and the lib directory
<br>
to the LD_LIBRARY_PATH.
<br>
Adding share/man to the MANPATH is not mandatory, but helpful.
<br>
This is rather inflexible and requires editing those initialization files every time you
<br>
want to switch the MPI version you use, though.
<br>
<p>A much better and flexible way, as was also mentioned, is to use the environment modules,
<br>
but your Sys Admin must be willing to learn how to write the corresponding module files
<br>
(in Tcl/Tk jargon).
<br>
This will allow you switch to across different versions by just issuing a command line
<br>
like 'module switch path/to/old/version  path/to/new/version'.
<br>
<p>See:
<br>
<a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a>
<br>
<p>I can't speak about Solaris, but it also supports environment modules, if I am not mistaken.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15473.php">Jeff Squyres: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Previous message:</strong> <a href="15471.php">Reuti: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15468.php">Jeffrey A Cummings: "[OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15473.php">Jeff Squyres: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
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
