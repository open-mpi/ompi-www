<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 16 19:44:51 2005" -->
<!-- isoreceived="20050617004451" -->
<!-- sent="Thu, 16 Jun 2005 20:44:48 -0400" -->
<!-- isosent="20050617004448" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] re build time" -->
<!-- id="ad419ed8905d7befba0dd91152a5c120_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050616231059.GB28347_at_flying-walenda.ca.sandia.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-06-16 19:44:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0088.php">Jeff Squyres: "Re: [O-MPI users] Further thoughts"</a>
<li><strong>Previous message:</strong> <a href="0086.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<li><strong>In reply to:</strong> <a href="0086.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0090.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0090.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 16, 2005, at 7:10 PM, Ben Allan wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The *only* flag that mpicc (and friends) recognizes is --showme.
</span><br>
<span class="quotelev2">&gt;&gt; *Everything* else is passed to the underlying compiler.  We didn't 
</span><br>
<span class="quotelev2">&gt;&gt; want
</span><br>
<span class="quotelev2">&gt;&gt; to take the chance, for example, that --help was actually a valid flag
</span><br>
<span class="quotelev2">&gt;&gt; for the underlying compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So is this called out in the mpi-2 standard?
</span><br>
<span class="quotelev1">&gt; Please god let it be so; i haven't noticed it yet if it is.
</span><br>
<p>No.  No wrapper compilers are even mentioned in the standard.  --showme 
<br>
is simply a flag that has existed in LAM/MPI for many, many years (a 
<br>
decade?) and no one has ever complained about it.  So we figured it was 
<br>
&quot;safe enough&quot;.
<br>
<p>FWIW, the only command that the MPI spec [somewhat] standardizes is 
<br>
mpiexec.
<br>
<p>MPI took a cue from the Fortran standard -- it only defines behavior 
<br>
after the MPI application is running.  It does not define how to create 
<br>
MPI executables nor how to launch them (with the exception of the 
<br>
loosely-standardized mpiexec command, added in MPI-2).  Those are all 
<br>
implementation-dependent issues.
<br>
<p><span class="quotelev2">&gt;&gt; This kinda hamstrings the ability to add features into wrapper
</span><br>
<span class="quotelev2">&gt;&gt; compilers, but we can figure out something safe if we need to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yah. wouldn't it be nice if we could reserve
</span><br>
<span class="quotelev1">&gt; --mpi-* for the compiler wrapper guys? I'm guessing
</span><br>
<span class="quotelev1">&gt; there aren't *too many* existing serial compilers that
</span><br>
<span class="quotelev1">&gt; already use --mpi-$x.
</span><br>
<p>I probably wouldn't be opposed to adding flags like that; you're right 
<br>
that they seem fairly safe.  Have anything in mind?  If not now, let us 
<br>
know later.
<br>
<p>We have long-term goals of allowing multiple compiler-installs such as 
<br>
fat/universal OSX binaries, installed libraries for multiple C++ 
<br>
compilers (e.g., the wrapper compiler would pick the &quot;right&quot; one 
<br>
somehow), but those goals are a ways off.
<br>
<p><span class="quotelev2">&gt;&gt; I guess I still don't understand why -- all the reasons you cited 
</span><br>
<span class="quotelev2">&gt;&gt; above
</span><br>
<span class="quotelev2">&gt;&gt; are going to be problematic regardless of whether you're using a
</span><br>
<span class="quotelev2">&gt;&gt; wrapper compiler or not.  All that mpicc (and friends) do is add the
</span><br>
<span class="quotelev2">&gt;&gt; proper -I, -L, -l, and other flags (like -pthread).  That's it.  Which
</span><br>
<span class="quotelev2">&gt;&gt; you use to link your application / create your shared library is still
</span><br>
<span class="quotelev2">&gt;&gt; up to you (e.g., mpicc/c++/f77/f90), for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, unfortunately not. Some of those flags and libraries
</span><br>
<span class="quotelev1">&gt; linked by an arbitrary (not necessarily your) mpi wrapper
</span><br>
<span class="quotelev1">&gt; may make very definite assumptions about things like c++ or dynamic
</span><br>
<span class="quotelev1">&gt; loading.
</span><br>
<span class="quotelev1">&gt; That's fine when all the code in all the components in the
</span><br>
<span class="quotelev1">&gt; final executable are built with your compiler wrapper.
</span><br>
<span class="quotelev1">&gt; Unfortunately people have the habit of using serial libraries
</span><br>
<span class="quotelev1">&gt; built ahead of time with non-mpi compilers in parallel applications.
</span><br>
<span class="quotelev1">&gt; They even still do things like use pvm in mpi applications.
</span><br>
<span class="quotelev1">&gt; Frequently it's much easier to extract CXXFLAGS and propagate them
</span><br>
<span class="quotelev1">&gt; than it is to convince some third-party configure script
</span><br>
<span class="quotelev1">&gt; to accept mpicxx as a compiler.
</span><br>
<p>Ok, I can see the &quot;users are silly&quot; argument, and I guess I shouldn't 
<br>
try to speak for any other wrappers other than mine, but can't any 
<br>
Autoconf-generated configure script be used thusly:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure CXX=mpicxx ...
<br>
<p>I have done this myself many times.
<br>
<p>I think I'm still somehow missing the crux of your argument (apologies; 
<br>
it's the end of a long day).  Can you give a concrete example where a 
<br>
wrapper won't work? (see below)
<br>
<p><span class="quotelev2">&gt;&gt; Let me know if the wrappers work for you (ditto for LAM/MPI; the
</span><br>
<span class="quotelev2">&gt;&gt; wrappers in OMPI are basically the same -- but slightly expanded -- as
</span><br>
<span class="quotelev2">&gt;&gt; the wrappers from LAM/MPI).  I have only seen one situation (extremely
</span><br>
<span class="quotelev2">&gt;&gt; recently) where a LAM user *couldn't* use the wrapper compilers, but
</span><br>
<span class="quotelev2">&gt;&gt; they wanted to intercept MPI calls in a fairly non-standard way, so we
</span><br>
<span class="quotelev2">&gt;&gt; judged that an acceptable failure for the wrappers (i.e., the user was
</span><br>
<span class="quotelev2">&gt;&gt; satisfied with --showme:foo).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On my list to test. That's why the bootleg source. I'm optimistic
</span><br>
<span class="quotelev1">&gt; from what i've seen, but busy getting out some papers just now.
</span><br>
<p>No problem-o.
<br>
<p>Give it a whirl when you get a chance and let us know if something 
<br>
breaks.  Then let's figure out how to fix it.
<br>
<p><span class="quotelev2">&gt;&gt; Not a bad idea.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd also want to make it possible for systems to *not* give that
</span><br>
<span class="quotelev2">&gt;&gt; warning, or perhaps give aliases that mean &quot;don't warn if I'm using
</span><br>
<span class="quotelev2">&gt;&gt; this compiler&quot;, or somesuch.  You can easily imagine scenarios where
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; amen.
</span><br>
<span class="quotelev1">&gt; One other project I know provides
</span><br>
<span class="quotelev1">&gt; --override-installpath
</span><br>
<span class="quotelev1">&gt; to suppress warnings about compilers being different
</span><br>
<span class="quotelev1">&gt; from those the wrapper saw.
</span><br>
<p>Duly noted.
<br>
<p><span class="quotelev2">&gt;&gt; Any other suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Probably, but only after I get to more extensively test things.
</span><br>
<p>The [e-mail] door is always open.
<br>
<p><span class="quotelev1">&gt; In the default build I managed, it looks like as part of
</span><br>
<span class="quotelev1">&gt; your architecture there simply is no obvious option to static-link
</span><br>
<span class="quotelev1">&gt; the entire application. Did I miss some files/(some goofy ELF feature)
</span><br>
<span class="quotelev1">&gt; someplace, or is this true?
</span><br>
<span class="quotelev1">&gt; I can live with it, but some people I know on exotic platforms
</span><br>
<span class="quotelev1">&gt; are gonna be unhappy. Of course maybe on those platforms we just
</span><br>
<span class="quotelev1">&gt; use the vendor mpi and forget it.
</span><br>
<p>The default build is to make libmpi be a shared library and build all 
<br>
the components as dynamic shared objects (think &quot;plugins&quot;).
<br>
<p>But we currently use Autoconf+Automake+Libtool, so to build everything 
<br>
static, the standard flags suffice:
<br>
<p>./configure --enable-static --disable-shared
<br>
<p>This will make libmpi.a, all the components are statically linked into 
<br>
libmpi.a, etc.  There's more esoteric configure flags that allow 
<br>
building some components as DSOs and others statically linked into 
<br>
libmpi, but most people want entirely one way or the other, so I won't 
<br>
provide the [uninteresting] details here.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0088.php">Jeff Squyres: "Re: [O-MPI users] Further thoughts"</a>
<li><strong>Previous message:</strong> <a href="0086.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<li><strong>In reply to:</strong> <a href="0086.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0090.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0090.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
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
