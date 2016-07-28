<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 16 17:33:54 2005" -->
<!-- isoreceived="20050616223354" -->
<!-- sent="Thu, 16 Jun 2005 18:33:51 -0400" -->
<!-- isosent="20050616223351" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] re build time" -->
<!-- id="c514a892f6a98a08847dde24ab4de0a7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050616185818.GC27775_at_flying-walenda.ca.sandia.gov" -->
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
<strong>Date:</strong> 2005-06-16 17:33:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0086.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<li><strong>Previous message:</strong> <a href="0084.php">Jonathan Day: "[O-MPI users] Further thoughts"</a>
<li><strong>In reply to:</strong> <a href="0081.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0086.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0086.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 16, 2005, at 2:58 PM, Ben Allan wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Ah -- I thought that that would be a different issue (I presume you're
</span><br>
<span class="quotelev2">&gt;&gt; speaking of the compile/lib flags command, like gnome-config et
</span><br>
<span class="quotelev2">&gt;&gt; al.)...?  Are you saying that the compile/lib flags should be
</span><br>
<span class="quotelev2">&gt;&gt; accessible from ompi_info in a fine-grained fashion as well?  (they're
</span><br>
<span class="quotelev2">&gt;&gt; not right now -- only &quot;compile flags&quot; and &quot;link flags&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As much info we can get, in as flexible a format as possible,
</span><br>
<span class="quotelev1">&gt; is the best thing I can imagine.  And of course some attention
</span><br>
<span class="quotelev1">&gt; is needed so that from release to release, information output
</span><br>
<span class="quotelev1">&gt; is consistent with the prior releases, i.e. the labels don't
</span><br>
<span class="quotelev1">&gt; change gratuitously. What's called &quot;c compiler&quot; in one release
</span><br>
<span class="quotelev1">&gt; shouldn't be called ISO-C-compiler in the next.
</span><br>
<span class="quotelev1">&gt; New labels can be added, of course.
</span><br>
<p>That's the intent.
<br>
<p><span class="quotelev2">&gt;&gt; That would obviate using the frameworks like gnome-config (which can
</span><br>
<span class="quotelev2">&gt;&gt; read arbitrary *Conf.sh files), or ... er... I swear there was another
</span><br>
<span class="quotelev2">&gt;&gt; one, but I can't seem to find it at the moment.  I'm not saying that
</span><br>
<span class="quotelev2">&gt;&gt; this is necessarily a Bad Thing; it's just something else that would
</span><br>
<span class="quotelev2">&gt;&gt; need to be implemented.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, i'm perfectly happy with a
</span><br>
<span class="quotelev1">&gt; ompiConf.sh provided there's an open-mpi-config that will
</span><br>
<span class="quotelev1">&gt; tell me where it sits (and maybe even query it for me).
</span><br>
<p>The only reason to have something like ompiConf.sh is to use the 
<br>
frameworks that already exist (like the gnome-conf thingy).  I was only 
<br>
tossing that out as an example -- I didn't know if you were looking to 
<br>
use a standardized tool or didn't really care where the info came from 
<br>
as long as there was a defined interface to it.
<br>
<p>It sounds like the latter.
<br>
<p><span class="quotelev2">&gt;&gt; Did you look at the output when you run with the -parsable flag?  (see
</span><br>
<span class="quotelev2">&gt;&gt; my other mail about this)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried that just now and it doesn't look different. Will check your
</span><br>
<span class="quotelev1">&gt; other mail (which apparently i haven't reached yet in the mail reader).
</span><br>
<span class="quotelev1">&gt; I take that back, apparently -parseable isn't recognized but -parsable
</span><br>
<span class="quotelev1">&gt; is.
</span><br>
<p>Hah!  Since there is bound to be confusion over this, I'll add a 
<br>
synonym for both -parsable and -parseable (to-MAY-to, to-MAH-to).
<br>
<p><span class="quotelev1">&gt; A :-separated output results. tolerable. :)
</span><br>
<span class="quotelev1">&gt; Kudos to you all, actually. I haven't seen anything this useful
</span><br>
<span class="quotelev1">&gt; from the mpich team yet. {now matt can correct me...}
</span><br>
<p>I have a strong sysadmin and build system background.  I feel your pain.
<br>
<p><span class="quotelev2">&gt;&gt; I'm still not sure that you're getting what you want, though.  Note
</span><br>
<span class="quotelev2">&gt;&gt; that there's two sets of flags provided by &quot;ompi_info -all&quot; -- the
</span><br>
<span class="quotelev2">&gt;&gt; flags that Open MPI was built with and the flags that are added by the
</span><br>
<span class="quotelev2">&gt;&gt; wrapper compilers.  Are you just extracting the wrapper compiler 
</span><br>
<span class="quotelev2">&gt;&gt; flags?
</span><br>
<span class="quotelev2">&gt;&gt;   Are they sufficient?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is useful to know both.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also note that the wrapper compilers will report their flags to you as
</span><br>
<span class="quotelev2">&gt;&gt; well:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	mpicc -showme
</span><br>
<span class="quotelev2">&gt;&gt; 	mpicc -showme:compile
</span><br>
<span class="quotelev2">&gt;&gt; 	mpicc -showme:link
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As usual, mpicc --help doesn't show showme as an option.
</span><br>
<p>The *only* flag that mpicc (and friends) recognizes is --showme.  
<br>
*Everything* else is passed to the underlying compiler.  We didn't want 
<br>
to take the chance, for example, that --help was actually a valid flag 
<br>
for the underlying compiler.
<br>
<p>This kinda hamstrings the ability to add features into wrapper 
<br>
compilers, but we can figure out something safe if we need to.
<br>
<p><span class="quotelev2">&gt;&gt; Finally, is there a reason you can't just use the wrapper compilers
</span><br>
<span class="quotelev2">&gt;&gt; themselves?  They can even be layered with other compilers if
</span><br>
<span class="quotelev2">&gt;&gt; necessary.  Unless there's a technical reason that you can't, I would
</span><br>
<span class="quotelev2">&gt;&gt; strongly advise using the wrapper compilers -- we wrote them for
</span><br>
<span class="quotelev2">&gt;&gt; exactly this purpose.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I love it when compiler wrappers work.
</span><br>
<span class="quotelev1">&gt; But in the context of
</span><br>
<span class="quotelev1">&gt; multi-language builds,
</span><br>
<span class="quotelev1">&gt; cranky c++ and fortran compilers competing for who gets to link
</span><br>
<span class="quotelev1">&gt; either the executable or construct the shared library,
</span><br>
<span class="quotelev1">&gt; mis-installations by sysadmins,
</span><br>
<span class="quotelev1">&gt; portability to horrors like AIX, etc, all wrappers are
</span><br>
<span class="quotelev1">&gt; taken with a grain of salt.
</span><br>
<p>I guess I still don't understand why -- all the reasons you cited above 
<br>
are going to be problematic regardless of whether you're using a 
<br>
wrapper compiler or not.  All that mpicc (and friends) do is add the 
<br>
proper -I, -L, -l, and other flags (like -pthread).  That's it.  Which 
<br>
you use to link your application / create your shared library is still 
<br>
up to you (e.g., mpicc/c++/f77/f90), for example.
<br>
<p>I remember that MPI wrapper compilers in the mid- and late-90's were 
<br>
pretty crappy.  But I think they're all gotten pretty reasonable of 
<br>
late (I could be wrong here, though...?).
<br>
<p>More specifically: if all that you're doing is extracting the flags 
<br>
from the wrapper compilers and inserting them in your own build 
<br>
process, are you really doing anything different than what the wrapper 
<br>
compiler is doing?
<br>
<p>Here's a snipit from OMPI's wrapper compiler documentation (something 
<br>
similar will someday make into a man page, similar to LAM's):
<br>
<p>/// At most, we end up with a command line in the following form:
<br>
///
<br>
/// [compiler(*)] [Xppflags(*)] [Xflags(*)] [user args] [ldflags(*)] 
<br>
[libs(*)]
<br>
///
<br>
/// Items with (*) can be overridden at run time with environment 
<br>
variables.
<br>
///
<br>
/// X can be replaced with C, CXX, F, and FC for C, C++, Fortran 77,
<br>
/// and Fortran 90, respectively.
<br>
<p>I would suggest that if this is not suitable for your usage that we 
<br>
morph it until it is.  The whole point of the wrapper compilers is for 
<br>
exactly this kind of purpose, so if they're not actually useful, then 
<br>
we should change them so that they are.
<br>
<p>Let me know if the wrappers work for you (ditto for LAM/MPI; the 
<br>
wrappers in OMPI are basically the same -- but slightly expanded -- as 
<br>
the wrappers from LAM/MPI).  I have only seen one situation (extremely 
<br>
recently) where a LAM user *couldn't* use the wrapper compilers, but 
<br>
they wanted to intercept MPI calls in a fairly non-standard way, so we 
<br>
judged that an acceptable failure for the wrappers (i.e., the user was 
<br>
satisfied with --showme:foo).
<br>
<p><span class="quotelev1">&gt; My users expect to combine c,c++,fortran,python,java(!),and 
</span><br>
<span class="quotelev1">&gt; fortran-variant-x
</span><br>
<span class="quotelev1">&gt; all in the same executable on a diversity of platforms.
</span><br>
<span class="quotelev1">&gt; And when it doesn't work, they don't go to you, they
</span><br>
<span class="quotelev1">&gt; tell me &quot;hey, make it work, my mpi isn't broken -- it
</span><br>
<span class="quotelev1">&gt; runs my vanilla C code all the time.&quot; The real issue is,
</span><br>
<span class="quotelev1">&gt; of course, the utter insanity of history that is the linker.
</span><br>
<span class="quotelev1">&gt; The workaround always involves reverse-engineering the
</span><br>
<span class="quotelev1">&gt; compiler wrappers and assembling the link line details
</span><br>
<span class="quotelev1">&gt; explicitly. Far better that this kind of insanity be
</span><br>
<span class="quotelev1">&gt; testable and the work-arounds picked out by my configure
</span><br>
<span class="quotelev1">&gt; scripts than all the users coming back to me for
</span><br>
<span class="quotelev1">&gt; individual attention.
</span><br>
<p>Are you saying that your configure re-orders the flags that you're 
<br>
getting back from MPI installations?
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Please, extract the full path name to the compilers your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrappers are going to invoke and put them in ompi_info.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, it is whatever was given to configure.  In this case, only
</span><br>
<span class="quotelev2">&gt;&gt; &quot;gcc&quot; was given to configure.  For example, if you:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	./configure CC=/path/to/gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You'll see:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler: /path/to/gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And that's also the name that mpicc will fork/exec to compile C
</span><br>
<span class="quotelev2">&gt;&gt; applications.  I'd prefer to leave it this way for the following
</span><br>
<span class="quotelev2">&gt;&gt; reasons:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - this is the way that I've seen most Autoconf-enabled build systems
</span><br>
<span class="quotelev2">&gt;&gt; work
</span><br>
<span class="quotelev2">&gt;&gt; - if people want to use absolute names for compilers, they can
</span><br>
<span class="quotelev2">&gt;&gt; - those who don't want absolute names aren't forced to (there's many 
</span><br>
<span class="quotelev2">&gt;&gt; an
</span><br>
<span class="quotelev2">&gt;&gt; installation out there that only has the C bindings and don't give a
</span><br>
<span class="quotelev2">&gt;&gt; whit about C++ or Fortran)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Those are all fine reasons, and i'm not saying (since for example)
</span><br>
<span class="quotelev1">&gt; compiler:c:command:gcc
</span><br>
<span class="quotelev1">&gt; should be changed to read
</span><br>
<span class="quotelev1">&gt; compiler:c:command:/some/godawful/experimental/gcc
</span><br>
<span class="quotelev1">&gt; No, i want whatever is there to keep going just as is so that
</span><br>
<span class="quotelev1">&gt; no existing build processes break.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm just requesting that be added:
</span><br>
<span class="quotelev1">&gt; compiler:which_c:command:/usr/local/bin/gcc
</span><br>
<span class="quotelev1">&gt; compiler:which_f77:command:/opt/intel/whatever
</span><br>
<span class="quotelev1">&gt; compiler:which_cxx:command:/opt/intel/whatever
</span><br>
<span class="quotelev1">&gt; where which_$X indicates the full path to the
</span><br>
<span class="quotelev1">&gt; critter X that was built with.
</span><br>
<p>Ah, ok.  That's easy enough to do (too late for beta, I'll commit this 
<br>
on the trunk tonight -- we try not to make configure.ac changes during 
<br>
the work day; it keeps peer developer frustration down ;-) ).
<br>
<p>Slight rename, though:
<br>
<p>-----
<br>
shell$ ./ompi_info --parsable -c | grep compiler: | egrep 
<br>
':command:|:absolute:'
<br>
compiler:c:command:gcc
<br>
compiler:c:absolute:/usr/i686-pc-linux-gnu/gcc-bin/3.3.5-20050130/gcc
<br>
compiler:cxx:command:g++
<br>
compiler:cxx:absolute:/usr/i686-pc-linux-gnu/gcc-bin/3.3.5-20050130/g++
<br>
compiler:f77:command:g77
<br>
compiler:f77:absolute:/usr/i686-pc-linux-gnu/gcc-bin/3.3.5-20050130/g77
<br>
compiler:f90:command:none
<br>
compiler:f90:absolute:none
<br>
-----
<br>
<p>That's two minor changes:
<br>
<p>1. Making the second field stay the name for easy grouped grepping 
<br>
(e.g., grepping on &quot;compiler:c:&quot; gets all info about the C compiler); 
<br>
make the 3rd field be different.
<br>
<p>2. Change it from &quot;which&quot; to &quot;absolute&quot;, because &quot;which&quot; reflects a 
<br>
command that not everyone will necessarily be familiar with.  Indeed, 
<br>
we're really presenting the absolute filename of the compiler as it was 
<br>
located in the $PATH.
<br>
<p>Acceptable?
<br>
<p><span class="quotelev1">&gt; In some fantasy future I might then be able to
</span><br>
<span class="quotelev1">&gt; submit a patch to the c++/fortran compiler wrapper so that
</span><br>
<span class="quotelev1">&gt; if the wrapper is used in an environment where
</span><br>
<span class="quotelev1">&gt; the compiler invoked is not the same as the
</span><br>
<span class="quotelev1">&gt; compiler open-mpi libraries were built with I could
</span><br>
<span class="quotelev1">&gt; issue a compiler warning. This would save a lot
</span><br>
<span class="quotelev1">&gt; of headaches to a lot of naive users.
</span><br>
<p>Not a bad idea.
<br>
<p>I'd also want to make it possible for systems to *not* give that 
<br>
warning, or perhaps give aliases that mean &quot;don't warn if I'm using 
<br>
this compiler&quot;, or somesuch.  You can easily imagine scenarios where 
<br>
this could present false warnings.  For example: a sysadmin installs a 
<br>
compiler at location X, but later moves (reinstalls) it to location Y.  
<br>
If we didn't provide a way to disable such warnings (and/or provide 
<br>
aliases), either the sysadmin has to reinstall OMPI (which makes the 
<br>
sysadmin unhappy), or users would always get false warnings about this 
<br>
situation (and software really shouldn't warn about indecisive 
<br>
sysadmins ;-) ).
<br>
<p>More work than I have time for today, unfortunately.  I'll see if I can 
<br>
sneak in such functionality while waiting for long compiles, etc.  No 
<br>
promises about timeframe...
<br>
<p><span class="quotelev1">&gt; The autoconf process, if ompi_info is to be believed,
</span><br>
<span class="quotelev1">&gt; checks a lot of machine specific and compiler specific
</span><br>
<span class="quotelev1">&gt; things to do with alignment, size, type existence, etc
</span><br>
<span class="quotelev1">&gt; and records these assumptions. Throwing a random
</span><br>
<span class="quotelev1">&gt; compiler (or worse, the primitive size-changing fortran switches)
</span><br>
<span class="quotelev1">&gt; into a compiler wrapper's path is just asking for trouble.
</span><br>
<span class="quotelev1">&gt; We need good config info to diagnose these kinds of user idiocy
</span><br>
<span class="quotelev1">&gt; efficiently.
</span><br>
<p>Yep -- that's exactly the purpose of ompi_info (we've been requesting 
<br>
the full output of laminfo along with bug reports for the past few 
<br>
years, and it's been incredibly helpful).  Your point about adding the 
<br>
absolute compiler path is a good step in the right direction for this 
<br>
functionality.
<br>
<p>Any other suggestions?
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
<li><strong>Next message:</strong> <a href="0086.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<li><strong>Previous message:</strong> <a href="0084.php">Jonathan Day: "[O-MPI users] Further thoughts"</a>
<li><strong>In reply to:</strong> <a href="0081.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0086.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0086.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
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
