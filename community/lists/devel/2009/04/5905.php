<?
$subject_val = "[OMPI devel] what I liked about scons (was: RFC: proposed GPLv3 license exception draft)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 14:01:05 2009" -->
<!-- isoreceived="20090429180105" -->
<!-- sent="Wed, 29 Apr 2009 14:00:59 -0400" -->
<!-- isosent="20090429180059" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] what I liked about scons (was: RFC: proposed GPLv3 license exception draft)" -->
<!-- id="D79CC0C3-4A94-4E16-BDEB-B509F7BEB3CB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090425123343.GA19430_at_gmx.de" -->
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
<strong>Subject:</strong> [OMPI devel] what I liked about scons (was: RFC: proposed GPLv3 license exception draft)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 14:00:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5906.php">Rayson Ho: "Re: [OMPI devel] OpenMPI without RSH"</a>
<li><strong>Previous message:</strong> <a href="5904.php">Jerry Ye: "[OMPI devel] OpenMPI without RSH"</a>
<li><strong>In reply to:</strong> <a href="5875.php">Ralf Wildenhues: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5878.php">Ralph Castain: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2009, at 8:33 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; I hardly know scons.  What's cool about it that autotools don't have?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>This is worthy of its own thread, so I re-subjected the mail.
<br>
<p>I worked up a prototype usage of scons in OMPI a few years ago.  It  
<br>
was actually fully functional -- it built (and installed?  I don't  
<br>
remember, but I assume so) a usable OMPI.  The work is still available  
<br>
here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/browser/tmp-public/scons">https://svn.open-mpi.org/trac/ompi/browser/tmp-public/scons</a>
<br>
<p>The OMPI source tree was quite different back then; that work would  
<br>
need to be significantly updated for it to be relevant to today's OMPI  
<br>
SVN trunk.
<br>
<p>Here's what I remember liking (and not liking) about scons.  Take this  
<br>
with a big grain of salt -- this was a few years ago; both my memory  
<br>
may be bad and things may (likely) have changed in scons since then (I  
<br>
have not kept up with scons since).  Note that *all* of this is IMHO.
<br>
<p>Likes:
<br>
<p>+++ Treating the whole tree as a single entity: with a traditional  
<br>
&quot;make&quot; setup, you have a standalone Makefile in each directory in your  
<br>
tree, and upper-level Makefiles effectively &quot;cd subdir; $(MAKE)&quot;.   
<br>
scons treats your entire source tree as one entity (even though you  
<br>
can have multiple scons data files scattered throughout the tree --  
<br>
you don't have to have everything in a single, top-level file).   
<br>
Specifically: scons will analyze the entire tree at once, decide what  
<br>
to build, and build it.  There's no notion of recursive traversal.
<br>
<p>Sidenote: of course, you can implement such a system with Make as  
<br>
well, but, IMHO, make is not well setup to handle that (especially for  
<br>
very large source trees).  Automake does it a bit better, but it would  
<br>
still be cumbersome to have (effectively) one Makefile.am for the  
<br>
entire OMPI tree (meaning: no recursive traversal, even if we had a  
<br>
single top-level Makefile.am + lots of Makefile.include's scattered  
<br>
around the tree).
<br>
<p>+++ I was writing [python] code to build OMPI.  This was incredibly  
<br>
natural; significantly easier than writing rules with embeded bourne  
<br>
shell scripts (sometimes with extremely awkward quoting).  Some of my  
<br>
friends / colleagues disagreed with me -- they worried that you would  
<br>
then need to QA the build system (because it's developer-written  
<br>
code).  But I contend that we have to do that today already (look how  
<br>
much m4 code is in contrib/*m4 and elsewhere in the OMPI tree!).
<br>
<p>+++ I had subroutines -- subroutines! -- for common (to OMPI) build  
<br>
actions.  This was *fantastic* -- I could customize the build process  
<br>
by writing real code, and having the full power of python behind it.   
<br>
For example, building a component was something trivial like this:
<br>
<p>Import('ompi_build_component')
<br>
ompi_build_component(sources = Split(&quot;&quot;&quot;
<br>
ptl_tcp.c
<br>
ptl_tcp_component.c
<br>
ptl_tcp_peer.c
<br>
ptl_tcp_proc.c
<br>
ptl_tcp_recvfrag.c
<br>
ptl_tcp_sendfrag.c
<br>
ptl_tcp_sendreq.c&quot;&quot;&quot;))
<br>
<p>The ompi_build_component() python subroutine (that I obviously wrote)  
<br>
that did the Right Thing to build the OMPI components, regardless of  
<br>
whether we were slurping components up into libmpi (etc.) or building  
<br>
as standalone DSOs.
<br>
<p>Having the ability to effectively extend scons and have my own  
<br>
subroutines for project-specific functionality was simply  
<br>
fantabulous.  This is probably one of the two biggest things that I  
<br>
liked about scons -- I had subroutines (and the power of a real/full  
<br>
scripting language) that I could invoke anywhere in the project's  
<br>
source tree.
<br>
<p>--&gt; From the above example, I don't see/remember offhand how the TCP  
<br>
PTL's .h files got slurped into the distribution tarball; it's  
<br>
possible that I stopped doing the scons work before I got to the part  
<br>
of making the tarball.  Or perhaps scons did source code analysis and  
<br>
just figured it out...?  I honestly don't remember.
<br>
<p>+++ No need for a fixed, pre-determined directory layout.  A decision  
<br>
that we made way back in the beginning of Open MPI was that we wanted  
<br>
to make it [relatively] easy for developers to add new frameworks and  
<br>
components -- essentially, make a new directory, put in a few specific  
<br>
files, and then re-run autogen.sh.  Specifically: normal developers  
<br>
shouldn't have to edit the configure/build system to add new  
<br>
frameworks and components.  I still stand by this decision; it would  
<br>
have been a Big Mess if we had to educate all of our developers in the  
<br>
intricacies of the autotools about how to add new frameworks/ 
<br>
components (in short: the vast majority of developers don't know squat  
<br>
about configure/build systems, so we wanted to make the bar as low as  
<br>
possible to add new frameworks/components without needing to touch the  
<br>
configure/build system at all since it's a relatively common OMPI  
<br>
developer action).
<br>
<p>This decision ended up generating *significantly complicated*  
<br>
autogen.sh and various m4 scripts in OMPI's pre-configure/configure/ 
<br>
build system.  Early in 2009, Brian Barrett and I sat down with  
<br>
another OMPI developer and tried to explain OMPI's configure/build  
<br>
system.  Needless to say, it was a many-hour conversation, and the  
<br>
other developer was reeling when we were all done.  :-)
<br>
<p>With scons, I had subroutines to -- at build time -- discover OMPI's  
<br>
frameworks and components, and then build them.  Specifically: with  
<br>
scons, it was trivial to have a pre-determined directory layout (just  
<br>
like the autotools).  But it was also fairly straightforward to have a  
<br>
dynamic directory layout: I wrote real python logic to go look at a  
<br>
directory, decide if it was a valid framework/component, and if so, go  
<br>
build it.
<br>
<p>This was the 2nd of the &quot;two biggest things&quot; that I liked about  
<br>
scons.  It's likely that OMPI is fairly unique in its &quot;we want to  
<br>
discover frameworks / components at run time&quot; requirement, but I would  
<br>
imagine that other plugin-based projects might use such functionality  
<br>
if it were easy to do (it is *not* easy to do with the current  
<br>
autotools!).
<br>
<p>Disclaimer: like I mentioned above, when I did this, the OMPI tree was  
<br>
significantly different than it is today.  I'm don't remember how I  
<br>
handled the configuration vs. building of conditional components  
<br>
(e.g., only build the openib component if you have OpenFabrics devel  
<br>
support installed on your system).  I.e.: just &quot;discovering&quot; a  
<br>
component at build time is not enough -- it also has to have been  
<br>
configured properly first.  I don't remember the details of what I did  
<br>
there.
<br>
<p>+++ As mentioned above, you could split the build specification in  
<br>
multiple files throughout the tree (similar to how we have  
<br>
Makefile.am's throughout the tree).  A nice feature is that each  
<br>
separate scons file (named SConscript) was in its own python  
<br>
namespace.  This gave a nice, well-defined mechanism for sharing data  
<br>
without fear of accidentally tromping on variables in another file  
<br>
elsewhere in the tree.
<br>
<p>+++ There were pre-defined constructs (subroutines, IIRC?) that were  
<br>
Automake-like in that you would just say &quot;build a library, here's the  
<br>
sources&quot; -- and the right Magic happened behind the scenes.  Such a  
<br>
feature is pretty much a given for a build system, of course -- but it  
<br>
did make the learning curve for &quot;write code to build your code&quot; much  
<br>
less steep.
<br>
<p>+++ Scons would build a distribution tarball that would include enough  
<br>
scons bootstrapping such that the end-user did not need to have scons  
<br>
pre-installed just to build Open MPI.  This was(is) a huge requirement  
<br>
-- it was a deal-breaker if a build system didn't support this (I  
<br>
believe that, at least at the time, only the autotools and scons did  
<br>
this).
<br>
<p>+++ Support for Windows native Microsoft build system stuff.  I didn't  
<br>
get to investigate this at all, but supposedly scons would generate  
<br>
project files that could be slurped into MS Developer Studio (or  
<br>
whatever it's called).  That would have been nice.
<br>
<p>Dislikes:
<br>
<p>--- Scons also tried to replace Autoconf by allowing you to embed  
<br>
tests in the build process (e.g., built-in subroutines the equivalent  
<br>
of AC_CHECK_HEADER, etc.).  This has the side effect of running the  
<br>
tests *every* time you build.  Even if the answers are cached and the  
<br>
test is therefore really fast, that just seems weird to me.   
<br>
Configuration is different than building.  Indeed, look at the length  
<br>
of OMPI's configure script -- there's no way I'd want to run that  
<br>
every time I do a build (even if the answers are cached).  As a  
<br>
developer, I build OMPI many, many more times than I configure it.  In  
<br>
the OMPI scons solution that I coded up, I still used Autoconf/ 
<br>
configure; it output a file with all the results of its tests that was  
<br>
then slurped up into scons for building.
<br>
<p>--- Scons support of various compilers was not nearly as complete /  
<br>
comprehensive as Libtool's.
<br>
<p>--- I had to learn Python (at least, learn enough to get by).  Python  
<br>
seemed like a neat language and it wasn't *that* hard to learn, but I  
<br>
started from zero and had to do a bunch of learning before I could  
<br>
really use scons.  There were definitely times where I had to go spend  
<br>
an hour and figure something out in Python before I could continue  
<br>
what I wanted to do in scons.  This is probably true of most tools if  
<br>
you're not already familiar with the back-end language, so it may not  
<br>
be a fair &quot;dislike&quot;, but I mention it anyway.  Did I mention that this  
<br>
is all IMHO?  :-)
<br>
<p>Hope this helps!
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5906.php">Rayson Ho: "Re: [OMPI devel] OpenMPI without RSH"</a>
<li><strong>Previous message:</strong> <a href="5904.php">Jerry Ye: "[OMPI devel] OpenMPI without RSH"</a>
<li><strong>In reply to:</strong> <a href="5875.php">Ralf Wildenhues: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5878.php">Ralph Castain: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
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
