<?
$subject_val = "Re: [OMPI users] Open MPI programs with autoconf/automake?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  9 22:35:39 2008" -->
<!-- isoreceived="20081110033539" -->
<!-- sent="Mon, 10 Nov 2008 12:35:30 +0900" -->
<!-- isosent="20081110033530" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI programs with autoconf/automake?" -->
<!-- id="4917AC02.80303_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FE5A8CEC-1E41-4FD9-A813-D71504EF11A4_at_cisco.com" -->
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
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-09 22:35:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7246.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Previous message:</strong> <a href="7244.php">Robert Kubrick: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>In reply to:</strong> <a href="7221.php">Jeff Squyres: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7253.php">Jed Brown: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Reply:</strong> <a href="7253.php">Jed Brown: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thank you for your reply!
<br>
<p>Indeed, I was never going to look at OMPI's use of AC/AM...no doubt that 
<br>
would be far too complex for me.  :-)
<br>
<p>The AC/AM documents I have found so far are quite difficult for me -- I 
<br>
really am starting from zero.  Prior to using MPI, I have been writing 
<br>
my own Makefiles and for the projects I work on [usually alone], that 
<br>
was sufficient.  However, your tip did help me; I dropped &quot;MPI&quot; from my 
<br>
search and added &quot;tutorial&quot; instead and the hits are better.
<br>
<p>As a starting point, I probably will only support open source MPIs.  One 
<br>
thing I was wondering about was whether it is possible, though the use 
<br>
of #define's, to create code that is both multi-processor (MPI/mpic++) 
<br>
and single-processor (normal g++).  That is, if users do not have any 
<br>
MPI installed, it compiles it with g++. 
<br>
<p>With #define's and compiler flags, I think that can be  easily done -- 
<br>
was wondering if this is something that developers using MPI do and 
<br>
whether AC/AM  supports it.
<br>
<p>But thanks and I'll try more phrase combinations in google...
<br>
<p>Ray
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; OMPI itself uses AC/AM to build itself, but our configure.ac and some 
</span><br>
<span class="quotelev1">&gt; of our Makefile.am's are fairly complex -- I wouldn't use these as 
</span><br>
<span class="quotelev1">&gt; starting points.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You probably want to start with some general AC/AM tutorials (the AM 
</span><br>
<span class="quotelev1">&gt; documentation reads somewhat like a tutorial -- you might want to look 
</span><br>
<span class="quotelev1">&gt; there?).  Just google around for AC/AM tutorials; leave &quot;MPI&quot; out of 
</span><br>
<span class="quotelev1">&gt; your searching.  Indeed, all you really want to do is build your 
</span><br>
<span class="quotelev1">&gt; software -- the only real difference between your app and other apps 
</span><br>
<span class="quotelev1">&gt; is that you want to use mpicc and friends to build it (vs. gcc and 
</span><br>
<span class="quotelev1">&gt; friends).  Most other aspects should be the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, the big difference for building an MPI application with AC/AM 
</span><br>
<span class="quotelev1">&gt; is that you want to set the C, C++, and Fortran compilers to the 
</span><br>
<span class="quotelev1">&gt; various &quot;wrapper&quot; MPI compilers (e.g., CC=mpicc, CXX=mpic++, 
</span><br>
<span class="quotelev1">&gt; FC=mpif90, F77=mpif77).  Then AC_PROG_CC (etc.) will find the wrapper 
</span><br>
<span class="quotelev1">&gt; compiler instead of gcc (for example).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It gets tricky, though, because not all MPI implementations have 
</span><br>
<span class="quotelev1">&gt; wrapper compilers -- so it's up to you to decide how portable you want 
</span><br>
<span class="quotelev1">&gt; to be.  The open source MPI's both have wrapper compilers by the same 
</span><br>
<span class="quotelev1">&gt; names (mpicc et al.), but some of the vendor/MPP platform-specific 
</span><br>
<span class="quotelev1">&gt; MPI's may not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good luck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 6, 2008, at 6:35 AM, Raymond Wan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure if this is relevant to this mailing list, but I'm trying 
</span><br>
<span class="quotelev2">&gt;&gt; to get autoconf/automake working with an Open MPI program I am 
</span><br>
<span class="quotelev2">&gt;&gt; writing (in C++) but unfortunately, I don't know where to begin.  I'm 
</span><br>
<span class="quotelev2">&gt;&gt; new to both tools but have it working well enough for a non-MPI 
</span><br>
<span class="quotelev2">&gt;&gt; program.  When I google for these terms, I end up with results of 
</span><br>
<span class="quotelev2">&gt;&gt; people who have problems with autoconf/automake and *installing* Open 
</span><br>
<span class="quotelev2">&gt;&gt; MPI -- which isn't what I am looking for.  Or, I get results that are 
</span><br>
<span class="quotelev2">&gt;&gt; well beyond what I need...I just need something to start with and 
</span><br>
<span class="quotelev2">&gt;&gt; won't be combining programming languages, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone have a brief example of configure.ac and/or Makefile.am 
</span><br>
<span class="quotelev2">&gt;&gt; to start me off or know of a tutorial that describes how they can be 
</span><br>
<span class="quotelev2">&gt;&gt; adapted for Open MPI from a non-MPI program?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you -- any help appreciated!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ray
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7246.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Previous message:</strong> <a href="7244.php">Robert Kubrick: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>In reply to:</strong> <a href="7221.php">Jeff Squyres: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7253.php">Jed Brown: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Reply:</strong> <a href="7253.php">Jed Brown: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
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
