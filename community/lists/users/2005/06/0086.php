<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 16 18:11:06 2005" -->
<!-- isoreceived="20050616231106" -->
<!-- sent="Thu, 16 Jun 2005 23:10:59 +0000" -->
<!-- isosent="20050616231059" -->
<!-- name="Ben Allan" -->
<!-- email="baallan_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] re build time" -->
<!-- id="20050616231059.GB28347_at_flying-walenda.ca.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="c514a892f6a98a08847dde24ab4de0a7_at_open-mpi.org" -->
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
<strong>From:</strong> Ben Allan (<em>baallan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-06-16 18:10:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0087.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Previous message:</strong> <a href="0085.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>In reply to:</strong> <a href="0085.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0087.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0087.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jun 16, 2005 at 06:33:51PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 16, 2005, at 2:58 PM, Ben Allan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only reason to have something like ompiConf.sh is to use the 
</span><br>
<span class="quotelev1">&gt; frameworks that already exist (like the gnome-conf thingy).  I was only 
</span><br>
<span class="quotelev1">&gt; tossing that out as an example -- I didn't know if you were looking to 
</span><br>
<span class="quotelev1">&gt; use a standardized tool or didn't really care where the info came from 
</span><br>
<span class="quotelev1">&gt; as long as there was a defined interface to it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It sounds like the latter.
</span><br>
<p>I'm sure any standardized tool i assume won't be there,
<br>
so yes, the latter.
<br>
&nbsp;
<br>
<span class="quotelev2">&gt; &gt; As usual, mpicc --help doesn't show showme as an option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The *only* flag that mpicc (and friends) recognizes is --showme.  
</span><br>
<span class="quotelev1">&gt; *Everything* else is passed to the underlying compiler.  We didn't want 
</span><br>
<span class="quotelev1">&gt; to take the chance, for example, that --help was actually a valid flag 
</span><br>
<span class="quotelev1">&gt; for the underlying compiler.
</span><br>
<p>So is this called out in the mpi-2 standard?
<br>
Please god let it be so; i haven't noticed it yet if it is.
<br>
<p><span class="quotelev1">&gt; This kinda hamstrings the ability to add features into wrapper 
</span><br>
<span class="quotelev1">&gt; compilers, but we can figure out something safe if we need to.
</span><br>
<p>yah. wouldn't it be nice if we could reserve
<br>
--mpi-* for the compiler wrapper guys? I'm guessing
<br>
there aren't *too many* existing serial compilers that
<br>
already use --mpi-$x.
<br>
<p><span class="quotelev2">&gt; &gt; portability to horrors like AIX, etc, all wrappers are
</span><br>
<span class="quotelev2">&gt; &gt; taken with a grain of salt.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess I still don't understand why -- all the reasons you cited above 
</span><br>
<span class="quotelev1">&gt; are going to be problematic regardless of whether you're using a 
</span><br>
<span class="quotelev1">&gt; wrapper compiler or not.  All that mpicc (and friends) do is add the 
</span><br>
<span class="quotelev1">&gt; proper -I, -L, -l, and other flags (like -pthread).  That's it.  Which 
</span><br>
<span class="quotelev1">&gt; you use to link your application / create your shared library is still 
</span><br>
<span class="quotelev1">&gt; up to you (e.g., mpicc/c++/f77/f90), for example.
</span><br>
<p>Well, unfortunately not. Some of those flags and libraries
<br>
linked by an arbitrary (not necessarily your) mpi wrapper
<br>
may make very definite assumptions about things like c++ or dynamic
<br>
loading.
<br>
That's fine when all the code in all the components in the
<br>
final executable are built with your compiler wrapper.
<br>
Unfortunately people have the habit of using serial libraries
<br>
built ahead of time with non-mpi compilers in parallel applications.
<br>
They even still do things like use pvm in mpi applications.
<br>
Frequently it's much easier to extract CXXFLAGS and propagate them
<br>
than it is to convince some third-party configure script
<br>
to accept mpicxx as a compiler.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; I remember that MPI wrapper compilers in the mid- and late-90's were 
</span><br>
<span class="quotelev1">&gt; pretty crappy.  But I think they're all gotten pretty reasonable of 
</span><br>
<span class="quotelev1">&gt; late (I could be wrong here, though...?).
</span><br>
<p>I pray you're right, but am skeptical.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Let me know if the wrappers work for you (ditto for LAM/MPI; the 
</span><br>
<span class="quotelev1">&gt; wrappers in OMPI are basically the same -- but slightly expanded -- as 
</span><br>
<span class="quotelev1">&gt; the wrappers from LAM/MPI).  I have only seen one situation (extremely 
</span><br>
<span class="quotelev1">&gt; recently) where a LAM user *couldn't* use the wrapper compilers, but 
</span><br>
<span class="quotelev1">&gt; they wanted to intercept MPI calls in a fairly non-standard way, so we 
</span><br>
<span class="quotelev1">&gt; judged that an acceptable failure for the wrappers (i.e., the user was 
</span><br>
<span class="quotelev1">&gt; satisfied with --showme:foo).
</span><br>
<p>On my list to test. That's why the bootleg source. I'm optimistic
<br>
from what i've seen, but busy getting out some papers just now.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Are you saying that your configure re-orders the flags that you're 
</span><br>
<span class="quotelev1">&gt; getting back from MPI installations?
</span><br>
<p>Well, I very much prefer to avoid doing that kind of thing,
<br>
but S*** happens. usually I try to convince people to go through
<br>
CXXFLAGS in the env or something rather than rehack
<br>
multiple configure scripts.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Ah, ok.  That's easy enough to do (too late for beta, I'll commit this 
</span><br>
<span class="quotelev1">&gt; on the trunk tonight -- we try not to make configure.ac changes during 
</span><br>
<span class="quotelev1">&gt; the work day; it keeps peer developer frustration down ;-) ).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Slight rename, though:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; shell$ ./ompi_info --parsable -c | grep compiler: | egrep 
</span><br>
<span class="quotelev1">&gt; ':command:|:absolute:'
</span><br>
<span class="quotelev1">&gt; compiler:c:command:gcc
</span><br>
<span class="quotelev1">&gt; compiler:c:absolute:/usr/i686-pc-linux-gnu/gcc-bin/3.3.5-20050130/gcc
</span><br>
<span class="quotelev1">&gt; compiler:cxx:command:g++
</span><br>
<span class="quotelev1">&gt; compiler:cxx:absolute:/usr/i686-pc-linux-gnu/gcc-bin/3.3.5-20050130/g++
</span><br>
<span class="quotelev1">&gt; compiler:f77:command:g77
</span><br>
<span class="quotelev1">&gt; compiler:f77:absolute:/usr/i686-pc-linux-gnu/gcc-bin/3.3.5-20050130/g77
</span><br>
<span class="quotelev1">&gt; compiler:f90:command:none
</span><br>
<span class="quotelev1">&gt; compiler:f90:absolute:none
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's two minor changes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Making the second field stay the name for easy grouped grepping 
</span><br>
<span class="quotelev1">&gt; (e.g., grepping on &quot;compiler:c:&quot; gets all info about the C compiler); 
</span><br>
<span class="quotelev1">&gt; make the 3rd field be different.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Change it from &quot;which&quot; to &quot;absolute&quot;, because &quot;which&quot; reflects a 
</span><br>
<span class="quotelev1">&gt; command that not everyone will necessarily be familiar with.  Indeed, 
</span><br>
<span class="quotelev1">&gt; we're really presenting the absolute filename of the compiler as it was 
</span><br>
<span class="quotelev1">&gt; located in the $PATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Acceptable?
</span><br>
<p>sure. well-defined is the best i can hope for absent an mpi standard.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Not a bad idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd also want to make it possible for systems to *not* give that 
</span><br>
<span class="quotelev1">&gt; warning, or perhaps give aliases that mean &quot;don't warn if I'm using 
</span><br>
<span class="quotelev1">&gt; this compiler&quot;, or somesuch.  You can easily imagine scenarios where 
</span><br>
<p>amen.
<br>
One other project I know provides
<br>
--override-installpath
<br>
to suppress warnings about compilers being different
<br>
from those the wrapper saw.
<br>
<p><span class="quotelev1">&gt; Any other suggestions?
</span><br>
&nbsp;
<br>
Probably, but only after I get to more extensively test things. 
<br>
<p>In the default build I managed, it looks like as part of
<br>
your architecture there simply is no obvious option to static-link
<br>
the entire application. Did I miss some files/(some goofy ELF feature) 
<br>
someplace, or is this true? 
<br>
I can live with it, but some people I know on exotic platforms
<br>
are gonna be unhappy. Of course maybe on those platforms we just
<br>
use the vendor mpi and forget it.
<br>
<p>thanks,
<br>
Ben
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0087.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Previous message:</strong> <a href="0085.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>In reply to:</strong> <a href="0085.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0087.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0087.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
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
