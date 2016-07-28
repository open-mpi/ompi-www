<?
$subject_val = "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 08:44:22 2008" -->
<!-- isoreceived="20080724124422" -->
<!-- sent="Thu, 24 Jul 2008 14:44:17 +0200" -->
<!-- isosent="20080724124417" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &amp;quot;-Wl, --as-needed -Wl, --no-undefined&amp;quot;)" -->
<!-- id="20080724124416.GA17264_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BF6977CC-05E9-4C66-A2B5-F7B5F3BDC792_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-24 08:44:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4425.php">Ralf Wildenhues: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Previous message:</strong> <a href="4423.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>In reply to:</strong> <a href="4422.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4428.php">Jeff Squyres: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4428.php">Jeff Squyres: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Brian Barrett wrote on Thu, Jul 24, 2008 at 02:28:45PM CEST:
<br>
<span class="quotelev1">&gt; When I looked at the same problem in LAM, I couldn't get the  
</span><br>
<span class="quotelev1">&gt; dependencies right between libraries when only one makefile was used. It 
</span><br>
<span class="quotelev1">&gt; worked up until I would do a parallel build, then would die because the 
</span><br>
<span class="quotelev1">&gt; libraries weren't ready at the right time.  There's probably a way, but I 
</span><br>
<span class="quotelev1">&gt; ended up with Jeff's approach.
</span><br>
<p>I have no idea what Jeff's approach is, and I would not recommend
<br>
entering some makefiles more than once, but what you can do is list
<br>
some files outside their directory.  I.e, you could have
<br>
<p>-- mpi/f77/Makefile_base.am --
<br>
libmpi_f77_base_la_SOURCES = mpi/f77/file1.f ...
<br>
<p>-- Makefile.am --
<br>
include mpi/f77/Makefile_base.am
<br>
...
<br>
<p>-- mpi/f77/Makefile.am --
<br>
# This will appear later in SUBDIRS
<br>
libmpi_f77_la_SOURCES = file3.f ...
<br>
...
<br>
<p>to avoid actually moving around files.  If you find a bug with parallel
<br>
make that way, then please report it to the Automake list (but we
<br>
haven't seen any Automake bugs in this area for quite a while).
<br>
<p>I haven't checked how the profiling stuff fits in this picture.
<br>
<p>Just remember that the ordered graph connecting Makefiles (as opposed to
<br>
included makefile snippets, or source files) through SUBDIRS entries
<br>
should be a tree, and this tree is always traversed bottom up unless '.'
<br>
is listed somewhere explicitly.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4425.php">Ralf Wildenhues: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Previous message:</strong> <a href="4423.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>In reply to:</strong> <a href="4422.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4428.php">Jeff Squyres: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4428.php">Jeff Squyres: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
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
