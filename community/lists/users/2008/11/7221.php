<?
$subject_val = "Re: [OMPI users] Open MPI programs with autoconf/automake?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 09:08:51 2008" -->
<!-- isoreceived="20081106140851" -->
<!-- sent="Thu, 6 Nov 2008 09:08:44 -0500" -->
<!-- isosent="20081106140844" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI programs with autoconf/automake?" -->
<!-- id="FE5A8CEC-1E41-4FD9-A813-D71504EF11A4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4912D685.505_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI programs with autoconf/automake?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 09:08:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7222.php">vladimir marjanovic: "[OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Previous message:</strong> <a href="7220.php">Jeff Squyres: "Re: [OMPI users] Compiling on different servers"</a>
<li><strong>In reply to:</strong> <a href="7218.php">Raymond Wan: "[OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7245.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Reply:</strong> <a href="7245.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OMPI itself uses AC/AM to build itself, but our configure.ac and some  
<br>
of our Makefile.am's are fairly complex -- I wouldn't use these as  
<br>
starting points.
<br>
<p>You probably want to start with some general AC/AM tutorials (the AM  
<br>
documentation reads somewhat like a tutorial -- you might want to look  
<br>
there?).  Just google around for AC/AM tutorials; leave &quot;MPI&quot; out of  
<br>
your searching.  Indeed, all you really want to do is build your  
<br>
software -- the only real difference between your app and other apps  
<br>
is that you want to use mpicc and friends to build it (vs. gcc and  
<br>
friends).  Most other aspects should be the same.
<br>
<p>Hence, the big difference for building an MPI application with AC/AM  
<br>
is that you want to set the C, C++, and Fortran compilers to the  
<br>
various &quot;wrapper&quot; MPI compilers (e.g., CC=mpicc, CXX=mpic++,  
<br>
FC=mpif90, F77=mpif77).  Then AC_PROG_CC (etc.) will find the wrapper  
<br>
compiler instead of gcc (for example).
<br>
<p>It gets tricky, though, because not all MPI implementations have  
<br>
wrapper compilers -- so it's up to you to decide how portable you want  
<br>
to be.  The open source MPI's both have wrapper compilers by the same  
<br>
names (mpicc et al.), but some of the vendor/MPP platform-specific  
<br>
MPI's may not.
<br>
<p>Good luck.
<br>
<p><p>On Nov 6, 2008, at 6:35 AM, Raymond Wan wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure if this is relevant to this mailing list, but I'm  
</span><br>
<span class="quotelev1">&gt; trying to get autoconf/automake working with an Open MPI program I  
</span><br>
<span class="quotelev1">&gt; am writing (in C++) but unfortunately, I don't know where to begin.   
</span><br>
<span class="quotelev1">&gt; I'm new to both tools but have it working well enough for a non-MPI  
</span><br>
<span class="quotelev1">&gt; program.  When I google for these terms, I end up with results of  
</span><br>
<span class="quotelev1">&gt; people who have problems with autoconf/automake and *installing*  
</span><br>
<span class="quotelev1">&gt; Open MPI -- which isn't what I am looking for.  Or, I get results  
</span><br>
<span class="quotelev1">&gt; that are well beyond what I need...I just need something to start  
</span><br>
<span class="quotelev1">&gt; with and won't be combining programming languages, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have a brief example of configure.ac and/or Makefile.am  
</span><br>
<span class="quotelev1">&gt; to start me off or know of a tutorial that describes how they can be  
</span><br>
<span class="quotelev1">&gt; adapted for Open MPI from a non-MPI program?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you -- any help appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ray
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7222.php">vladimir marjanovic: "[OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Previous message:</strong> <a href="7220.php">Jeff Squyres: "Re: [OMPI users] Compiling on different servers"</a>
<li><strong>In reply to:</strong> <a href="7218.php">Raymond Wan: "[OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7245.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Reply:</strong> <a href="7245.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
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
