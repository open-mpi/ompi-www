<?
$subject_val = "[OMPI devel] Two large patches in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 13 19:09:02 2008" -->
<!-- isoreceived="20080613230902" -->
<!-- sent="Fri, 13 Jun 2008 17:08:54 -0600" -->
<!-- isosent="20080613230854" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] Two large patches in trunk" -->
<!-- id="4F305833-9EFA-4D69-B3A5-3278D61F5BD6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Two large patches in trunk<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-13 19:08:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4130.php">Terry Dontje: "[OMPI devel] SLES 9 compilation error"</a>
<li><strong>Previous message:</strong> <a href="4128.php">Ralf Wildenhues: "Re: [OMPI devel] libdir not propagated to contrib/vt/vt ??"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>I just pushed two rather large patches into the trunk for v1.3 (with  
<br>
George and Brad's blessing).
<br>
<p>First, the ptmalloc2 changes are in the trunk.  So going forward,  
<br>
ptmalloc2 will not be linked into the application binary by default.   
<br>
You will have to set libs to -lopenmpi-malloc to get ptmalloc2.   
<br>
However, leave_pinned will turn on mallopt by default now, so for most  
<br>
users there will be no visible change.  There is also a configure flag  
<br>
if users really want the old behavior.  Nothing substantial has  
<br>
changed on this front since my more detailed e-mail last week.
<br>
<p>Second, Open MPI now provides the option of using perl-based wrapper  
<br>
compilers instead of the traditional C based ones.  The Perl based  
<br>
ones do not have nearly as much functionality as the C based ones,  
<br>
lacking multilib, installdirs, and multi-project (ie opalcc/ortecc)  
<br>
support (in addition to not supporting many of the -showme options).   
<br>
The C versions are still the default and are intended to remain that  
<br>
way for the foreseeable future.  The Perl compilers are intended to be  
<br>
used for cross-compile installs, which seems to be the bulk of my use  
<br>
of Open MPI these days.  Specifying --enable-script-wrapper-compilers  
<br>
will disable the C based compilers and enable the Perl based  
<br>
compilers.  Finally, --enable-script-wrapper-compilers combined with -- 
<br>
disable-binaries will still result in the Perl based wrapper compilers  
<br>
being installed.
<br>
<p>As always, let me know what I broke.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   There is an art . . . to flying. The knack lies in learning how to
   throw yourself at the ground and miss.
       Douglas Adams, 'The Hitchhikers Guide to the Galaxy'
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4130.php">Terry Dontje: "[OMPI devel] SLES 9 compilation error"</a>
<li><strong>Previous message:</strong> <a href="4128.php">Ralf Wildenhues: "Re: [OMPI devel] libdir not propagated to contrib/vt/vt ??"</a>
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
