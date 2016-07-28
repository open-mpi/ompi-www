<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 16 13:58:25 2005" -->
<!-- isoreceived="20050616185825" -->
<!-- sent="Thu, 16 Jun 2005 18:58:18 +0000" -->
<!-- isosent="20050616185818" -->
<!-- name="Ben Allan" -->
<!-- email="baallan_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] re build time" -->
<!-- id="20050616185818.GC27775_at_flying-walenda.ca.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2c0d667472b24622ce7dfcdeeb65a5ec_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-06-16 13:58:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0082.php">Ben Allan: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Previous message:</strong> <a href="0080.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
<li><strong>In reply to:</strong> <a href="0074.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0083.php">Matthew Knepley: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0083.php">Matthew Knepley: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0085.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jun 15, 2005 at 08:27:58PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 15, 2005, at 7:02 PM, Ben Allan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah -- I thought that that would be a different issue (I presume you're 
</span><br>
<span class="quotelev1">&gt; speaking of the compile/lib flags command, like gnome-config et 
</span><br>
<span class="quotelev1">&gt; al.)...?  Are you saying that the compile/lib flags should be 
</span><br>
<span class="quotelev1">&gt; accessible from ompi_info in a fine-grained fashion as well?  (they're 
</span><br>
<span class="quotelev1">&gt; not right now -- only &quot;compile flags&quot; and &quot;link flags&quot;)
</span><br>
<p>As much info we can get, in as flexible a format as possible,
<br>
is the best thing I can imagine.  And of course some attention
<br>
is needed so that from release to release, information output
<br>
is consistent with the prior releases, i.e. the labels don't 
<br>
change gratuitously. What's called &quot;c compiler&quot; in one release
<br>
shouldn't be called ISO-C-compiler in the next.
<br>
New labels can be added, of course.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; That would obviate using the frameworks like gnome-config (which can 
</span><br>
<span class="quotelev1">&gt; read arbitrary *Conf.sh files), or ... er... I swear there was another 
</span><br>
<span class="quotelev1">&gt; one, but I can't seem to find it at the moment.  I'm not saying that 
</span><br>
<span class="quotelev1">&gt; this is necessarily a Bad Thing; it's just something else that would 
</span><br>
<span class="quotelev1">&gt; need to be implemented.
</span><br>
<p>Actually, i'm perfectly happy with a 
<br>
ompiConf.sh provided there's an open-mpi-config that will
<br>
tell me where it sits (and maybe even query it for me).
<br>
<p>&nbsp;
<br>
<span class="quotelev1">&gt; Did you look at the output when you run with the -parsable flag?  (see 
</span><br>
<span class="quotelev1">&gt; my other mail about this)
</span><br>
<p>I tried that just now and it doesn't look different. Will check your
<br>
other mail (which apparently i haven't reached yet in the mail reader).
<br>
I take that back, apparently -parseable isn't recognized but -parsable
<br>
is. A :-separated output results. tolerable. :)
<br>
Kudos to you all, actually. I haven't seen anything this useful
<br>
from the mpich team yet. {now matt can correct me...}
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; I'm still not sure that you're getting what you want, though.  Note 
</span><br>
<span class="quotelev1">&gt; that there's two sets of flags provided by &quot;ompi_info -all&quot; -- the 
</span><br>
<span class="quotelev1">&gt; flags that Open MPI was built with and the flags that are added by the 
</span><br>
<span class="quotelev1">&gt; wrapper compilers.  Are you just extracting the wrapper compiler flags? 
</span><br>
<span class="quotelev1">&gt;   Are they sufficient?
</span><br>
<p>It is useful to know both.
<br>
<p><span class="quotelev1">&gt; Also note that the wrapper compilers will report their flags to you as 
</span><br>
<span class="quotelev1">&gt; well:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	mpicc -showme
</span><br>
<span class="quotelev1">&gt; 	mpicc -showme:compile
</span><br>
<span class="quotelev1">&gt; 	mpicc -showme:link
</span><br>
<p>As usual, mpicc --help doesn't show showme as an option.
<br>
<p><span class="quotelev1">&gt; Finally, is there a reason you can't just use the wrapper compilers 
</span><br>
<span class="quotelev1">&gt; themselves?  They can even be layered with other compilers if 
</span><br>
<span class="quotelev1">&gt; necessary.  Unless there's a technical reason that you can't, I would 
</span><br>
<span class="quotelev1">&gt; strongly advise using the wrapper compilers -- we wrote them for 
</span><br>
<span class="quotelev1">&gt; exactly this purpose.
</span><br>
<p>I love it when compiler wrappers work.
<br>
But in the context of 
<br>
multi-language builds, 
<br>
cranky c++ and fortran compilers competing for who gets to link
<br>
either the executable or construct the shared library,
<br>
mis-installations by sysadmins,
<br>
portability to horrors like AIX, etc, all wrappers are
<br>
taken with a grain of salt.
<br>
<p>My users expect to combine c,c++,fortran,python,java(!),and fortran-variant-x
<br>
all in the same executable on a diversity of platforms.
<br>
And when it doesn't work, they don't go to you, they
<br>
tell me &quot;hey, make it work, my mpi isn't broken -- it
<br>
runs my vanilla C code all the time.&quot; The real issue is,
<br>
of course, the utter insanity of history that is the linker.
<br>
The workaround always involves reverse-engineering the
<br>
compiler wrappers and assembling the link line details
<br>
explicitly. Far better that this kind of insanity be
<br>
testable and the work-arounds picked out by my configure
<br>
scripts than all the users coming back to me for
<br>
individual attention.
<br>
<p><span class="quotelev1">&gt; help messages as of yet.  Don't worry; they will be there in the 
</span><br>
<span class="quotelev1">&gt; not-distant future (look at LAM's documentation and verbose help 
</span><br>
<span class="quotelev1">&gt; messages as an example: I believe in good error messages).
</span><br>
<p>Looking forward to it.
<br>
&nbsp;
<br>
<span class="quotelev2">&gt; &gt; Please, extract the full path name to the compilers your
</span><br>
<span class="quotelev2">&gt; &gt; wrappers are going to invoke and put them in ompi_info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, it is whatever was given to configure.  In this case, only 
</span><br>
<span class="quotelev1">&gt; &quot;gcc&quot; was given to configure.  For example, if you:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	./configure CC=/path/to/gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You'll see:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      C compiler: /path/to/gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And that's also the name that mpicc will fork/exec to compile C 
</span><br>
<span class="quotelev1">&gt; applications.  I'd prefer to leave it this way for the following 
</span><br>
<span class="quotelev1">&gt; reasons:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - this is the way that I've seen most Autoconf-enabled build systems 
</span><br>
<span class="quotelev1">&gt; work
</span><br>
<span class="quotelev1">&gt; - if people want to use absolute names for compilers, they can
</span><br>
<span class="quotelev1">&gt; - those who don't want absolute names aren't forced to (there's many an 
</span><br>
<span class="quotelev1">&gt; installation out there that only has the C bindings and don't give a 
</span><br>
<span class="quotelev1">&gt; whit about C++ or Fortran)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Those are all fine reasons, and i'm not saying (since for example)
<br>
compiler:c:command:gcc
<br>
should be changed to read
<br>
compiler:c:command:/some/godawful/experimental/gcc
<br>
No, i want whatever is there to keep going just as is so that
<br>
no existing build processes break.
<br>
<p>I'm just requesting that be added:
<br>
compiler:which_c:command:/usr/local/bin/gcc
<br>
compiler:which_f77:command:/opt/intel/whatever
<br>
compiler:which_cxx:command:/opt/intel/whatever
<br>
where which_$X indicates the full path to the
<br>
critter X that was built with.
<br>
<p>In some fantasy future I might then be able to
<br>
submit a patch to the c++/fortran compiler wrapper so that
<br>
if the wrapper is used in an environment where 
<br>
the compiler invoked is not the same as the
<br>
compiler open-mpi libraries were built with I could
<br>
issue a compiler warning. This would save a lot
<br>
of headaches to a lot of naive users.
<br>
<p>The autoconf process, if ompi_info is to be believed,
<br>
checks a lot of machine specific and compiler specific
<br>
things to do with alignment, size, type existence, etc
<br>
and records these assumptions. Throwing a random
<br>
compiler (or worse, the primitive size-changing fortran switches)
<br>
into a compiler wrapper's path is just asking for trouble.
<br>
We need good config info to diagnose these kinds of user idiocy
<br>
efficiently.
<br>
<p>Thanks,
<br>
Ben
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0082.php">Ben Allan: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Previous message:</strong> <a href="0080.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
<li><strong>In reply to:</strong> <a href="0074.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0083.php">Matthew Knepley: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0083.php">Matthew Knepley: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0085.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
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
