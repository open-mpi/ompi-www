<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 15 00:35:44 2005" -->
<!-- isoreceived="20050315053544" -->
<!-- sent="Mon, 14 Mar 2005 21:35:05 -0800" -->
<!-- isosent="20050315053505" -->
<!-- name="Greg Lindahl" -->
<!-- email="lindahl_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Fwd: Thoughts on an MPI ABI" -->
<!-- id="20050315053505.GA1879_at_greglaptop.attbi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="52fc5743a9a9f3a5f1a2f7831f397239_at_open-mpi.org" -->
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
<strong>From:</strong> Greg Lindahl (<em>lindahl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-15 00:35:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0023.php">Toon Knapen: "Re: [O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0021.php">Jeff Squyres: "[O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0021.php">Jeff Squyres: "[O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0023.php">Toon Knapen: "Re: [O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>One of the interesting aspects of an ABI MPI is that some folks won't
<br>
be convinced that it's interesting until they've had it proven that it
<br>
will work, both technically and socially, which is putting the cart
<br>
before the horse to a certain extent. It's also not helpful that all I
<br>
distributed were power-point slides; I did have a detailed writeup,
<br>
but it gave proposed solutions to too many problems, which is likely
<br>
to cause more arguments than it would solve.
<br>
<p>In any case, discussion is a good thing, and here are some answers to
<br>
the issues you raise. I'm afraid that a casual observer won't
<br>
necessarily learn much from our exchange about whether or not an ABI
<br>
is possible or desirable. I also don't think I have all the answers,
<br>
but a few of the issues you raise do delve into things that I've
<br>
worked on in the past.
<br>
<p>1. An ABI still leaves you vulnerable to different C++ and F90 issues.
<br>
<p>On AMD64/EM64T and x86, Intel, gcc, and PathScale have compatible C++
<br>
implementations. This is not a coincidence.
<br>
<p>The F90 issue is real, but note that it reduces to N libraries for
<br>
N compilers, instead of N*M libraries for N compilers and M MPIs.
<br>
<p>1a. You're vulnerable to OS issues.
<br>
<p>Yes. People who distribute binaries today already deal somewhat
<br>
successfully with that. We distribute only 4 sets of compiler RPMs,
<br>
but they happen to work successfully on RedHat Enterprise, Fedora, and
<br>
9, SUSE Professional and Enterprise, Mandrake, Debian, Gentoo, White
<br>
Hat, Rocks, and a few others I've forgotten because they're too
<br>
obscure.
<br>
<p>2. Choosing an MPI implementation
<br>
<p>One existing solution is &quot;modules&quot;. It takes the guesswork out of
<br>
setting and resetting PATH. It's definitely something that has to be
<br>
scripted or users can't use it reliably. You are correct that setting
<br>
LD_LIBRARY_PATH in an MPI job is an issue, but this needs a fix
<br>
anyway, as users run up against it all the time -- &quot;Your Fortran docs
<br>
say I need to set this environment variable to change the output
<br>
format; it works with a serial code, but doesn't work with MPI! Help!&quot;
<br>
<p>3. This isn't an immediately perfect solution for all ISVs
<br>
<p>Well, yes. I actually said that in my slides. For the average ISV,
<br>
being able to test other MPIs without recompiling is a first step
<br>
towards being able to eventually support more than one. But it's not
<br>
the only step.  An above-average ISV will then be willing to let
<br>
customers use other MPIs, as long as any bugs are replicated using a
<br>
supported platform (i.e. using OpenMPI over TCP/IP).  I expect it to
<br>
take a while for the average ISV to get there, but at least they have
<br>
a chance. Today they have no chance.
<br>
<p>You also mention that some ISVs tend to distribute static linked
<br>
executables. This is true. Were I an ISV, I would distribute such an
<br>
executable for debugging purposes.
<br>
<p>4. Non-standardized parts of MPI are an issue in real programs.
<br>
<p>I agree with this one. I think these issues should be discussed as
<br>
part of the ABI effort. What parts are the worst problems, and can we
<br>
successfully standardize them?
<br>
<p>5. Biologists and Chemists don't care about an ABI.
<br>
<p>Yes, but they do care about having their apps just work. And an ABI
<br>
helps that. I can imagine a future in which an rpm for a biology app
<br>
distributes a test suite, and MPI implementers / interconnect vendors
<br>
who care will download the rpm and test it. That's easier with an ABI
<br>
than without; with an ABI you don't have to rebuild (which, for a
<br>
poorly packaged app, can be very tricky for a 3rd party to do), and
<br>
you can be fairly sure that you didn't introduce/delete a bug by
<br>
recompiling.
<br>
<p>6. ISVs can ship MPI-independent apps today using a thin abstraction
<br>
layer.
<br>
<p>Yes, but that wastes money and complicates testing. I wouldn't be
<br>
surprised if few of them did that. I suspect the ISVs that did that,
<br>
if any, would like an ABI more than their current system.
<br>
<p>7. It's expensive to change sizes and types of MPI handles to a new
<br>
standard
<br>
<p>Look at your f77 interface -- it's a roadmap for converting from
<br>
fortran integer arguments to pointers. This is what I suggest you do
<br>
for C/C++. I'd be happy to write the code for you, actually.
<br>
<p>8. Embedded MPI might have different constraints
<br>
<p>An ABI doesn't have to be all things to all people. I find that most
<br>
HPC embedded systems are based on a fairly general-purpose platform,
<br>
so an ABI may manage to reach most of today's embedded players. (We
<br>
do do business in that space.)
<br>
<p>9. Is recompiling really that difficult?
<br>
<p>I don't think you or I are the right people to answer that one, we
<br>
recompile all the time. But I assure you that the compiler people in
<br>
my company would answer YES! YES! Why? Because compilers are heavily
<br>
QAed, and we can name numerous source files in our compiler that have
<br>
obscure bugs appear if compiled with gcc -O2 instead of -O0. These
<br>
bugs come and go, too, as we rearrange our source code. So for them,
<br>
they would never send a compiler binary out the door that had not been
<br>
fully QAed -- that exact binary. No &quot;let's recompile for one fix and
<br>
then not re-run the entire test suite.&quot;
<br>
<p>10. OpenMPI implements multiple batch queue systems already.
<br>
<p>I did not mean to imply that no one had did this. In fact, several
<br>
MPIs have done it. But that doesn't help the average cluster admin,
<br>
who only has 1 batch queue system.
<br>
<p>Likewise, many &quot;portable&quot; MPIs support multiple interconnects. But
<br>
that doesn't solve the issues associated with multiple interconnects,
<br>
for many reasons that have been stated already.
<br>
<p>I do find it entertaining that you say supporting several run-times
<br>
is not difficult, while changing to support one mpi.h is expensive ;-)
<br>
<p>11. Uber-mpirun sounds hard
<br>
<p>I have a strawman idea for it; that's the kind of thing the committee
<br>
should discuss, not to be hashed out completely before the committee
<br>
ever meets. I've read many MPI startups and the strawman addresses all
<br>
of them. Quadrics and Portals both work with the concept.
<br>
<p>I wouldn't be surprised if Uber-mpirun didn't make it into the ABI.
<br>
I'm OK with that, I don't think leaving it out fatally weakens the ABI
<br>
concept.
<br>
<p>12. MPI-2 dynamic functions are hard to standardize
<br>
<p>Yes, and lack of integration with queue systems is why I've never
<br>
observed a customer using them, ever. A quality-of-implementation
<br>
consensus would help these functions become useful, and is currently
<br>
crying out for action.
<br>
<p><span class="quotelev1">&gt; Finally, this uber-mpirun will have a consistent syntax across all 
</span><br>
<span class="quotelev1">&gt; platforms and RTEs, but what about mpiexec?  The MPI Forum explicitly 
</span><br>
<span class="quotelev1">&gt; specified mpiexec to fulfill this requirement.  Has it failed?  Are all 
</span><br>
<span class="quotelev1">&gt; the mpiexec implementations out there so radically different as to be 
</span><br>
<span class="quotelev1">&gt; useless in terms of uniform syntax?  (this is an honest question)
</span><br>
<p>I don't know, I've never used it. The fact that it isn't mentioned in
<br>
the slides is simple ignorance on my part ;-) One would hope that mpiexec
<br>
was complete enough, but it would be an interesting exercise to see
<br>
if, for the purposes of this ABI, it was or not.
<br>
<p><span class="quotelev1">&gt; Having an MPI ABI gains nothing for MPI 
</span><br>
<span class="quotelev1">&gt; implementation researchers except that they don't have to recompile 
</span><br>
<span class="quotelev1">&gt; applications for their new implementation.  This is exactly the same as 
</span><br>
<span class="quotelev1">&gt; it is for everyone else (per restrictions discussed above); singling 
</span><br>
<span class="quotelev1">&gt; out MPI implementation researchers is misleading.
</span><br>
<p>I'm sorry if you find it misleading. I think it is useful to
<br>
specifically call out the benefit to an extremely important group of
<br>
people, the people for whom an MPI ABI is an expense. You are in that
<br>
group, and I think an ABI won't get going if you can't be convinced.
<br>
Hence I write 232 line emails...
<br>
<p><span class="quotelev1">&gt; - On the &quot;Winners: Interconnect implementors&quot; slide: Why will 
</span><br>
<span class="quotelev1">&gt; interconnect implementors only reach systems that recompile?
</span><br>
<p>I was referring to recompiling *applications*, not the MPI
<br>
implementation.  Quadrics isn't supported by most of the &quot;portable&quot;
<br>
MPIs today.  So a Quadrics customer has to compile applications
<br>
themselves.
<br>
<p><span class="quotelev1">&gt; - On the &quot;Winners: Commercial software vendors&quot; slide: I talked about 
</span><br>
<span class="quotelev1">&gt; this above.  An ABI does *not* make testing easier --
</span><br>
<p>It does, because you don't have to recompile, thus you can be confident
<br>
that you don't have new compiler issues, you'll only have MPI issues.
<br>
<p><span class="quotelev1">&gt; Just because they don't have to recompile will not significantly reduce 
</span><br>
<span class="quotelev1">&gt; the logistics of all ISV's.
</span><br>
<p>An ABI doesn't have to significantly help all ISVs to be successful.
<br>
<p><span class="quotelev1">&gt; I don't see how automated testing becomes easier with an ABI.
</span><br>
<p>If I don't have to recompile my ten million line application for each
<br>
interconnect, that's easier. I would suspect it cuts the work in half,
<br>
actually. Inside PathScale, for example, we build all 4 platforms
<br>
twice a day for each active branch, and archive *all* the builds, so
<br>
we can binary search for regressions. That's our minimum effort for &quot;a
<br>
different recompile.&quot;
<br>
<p><span class="quotelev1">&gt; - On the &quot;Winners: Open Source Software Projects&quot; slide: you say 
</span><br>
<span class="quotelev1">&gt; &quot;Tomorrow, MPI is just like everything else...&quot;  Are you saying that 
</span><br>
<span class="quotelev1">&gt; MPI will be DLL Hell just like all other packages out there?
</span><br>
<p>No, that it will mostly work, like most things today. DLL hell in
<br>
Linux, from my experience, happens when you want to use an RPM that's
<br>
too wildly different, or that depends on multiple not-commonly-
<br>
distributed libraries. The typical biologist downloads a set of RPMs
<br>
built for nearly-exactly the system they're on; they stay relatively
<br>
up to date on Linux distros because the people building the RPMs tell
<br>
them to do that.
<br>
<p><span class="quotelev1">&gt; - On the &quot;Issues: Startup and queue systems&quot; slide: it sounds like you 
</span><br>
<span class="quotelev1">&gt; are now talking about standardizing queue systems which is a much, much 
</span><br>
<span class="quotelev1">&gt; larger effort than just the MPI (or even the HPC) community.
</span><br>
<p>No, that was not my intent. I was talking about how uber-mpirun
<br>
interfaces, in a generic way, to queue systems. I know that
<br>
standardizing anything about queue systems is bound to fail, I've
<br>
personally seen a couple of such efforts not accomplish anything.
<br>
That's one thing I like about the MPI process, it has proven to be a
<br>
big success so far.
<br>
<p>To sum up, if such a huge scatter-brained email can be summed up, I
<br>
think the cart is a bit before the horse in this discussion, and that
<br>
it would pay for us to listen to some of the people with bigger
<br>
benefit from an ABI before deciding it isn't interesting. After all,
<br>
MPI implementers pay the main cost of implementing an ABI, so it's no
<br>
surprise they're the hardest to convince. But, I think that this
<br>
discussion is an important step towards convincing people, hopefully
<br>
including you.
<br>
<p>-- greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0023.php">Toon Knapen: "Re: [O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0021.php">Jeff Squyres: "[O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0021.php">Jeff Squyres: "[O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0023.php">Toon Knapen: "Re: [O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
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
