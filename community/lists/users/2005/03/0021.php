<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar 13 13:36:32 2005" -->
<!-- isoreceived="20050313183632" -->
<!-- sent="Sun, 13 Mar 2005 13:36:20 -0500" -->
<!-- isosent="20050313183620" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[O-MPI users] Fwd: Thoughts on an MPI ABI" -->
<!-- id="52fc5743a9a9f3a5f1a2f7831f397239_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-13 13:36:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0022.php">Greg Lindahl: "Re: [O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0020.php">Toon Knapen: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0022.php">Greg Lindahl: "Re: [O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0022.php">Greg Lindahl: "Re: [O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0023.php">Toon Knapen: "Re: [O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings.  I loosely watched the MPI ABI discussions on the Beowulf 
<br>
list but refrained from commenting (I stopped checking -- is it still 
<br>
going on?).  Now that the discussion has come to my project's list, I 
<br>
guess I should speak up.  :)
<br>
<p>Since I've been &quot;saving up&quot; for a while, this post is a bit lengthy.  I 
<br>
apologize.
<br>
<p>-----
<br>
<p>On the surface, an ABI looks great.  Greg's slides show a bunch of 
<br>
reasons why an ABI could be a Good Thing(tm) and how a bunch of groups 
<br>
of people could &quot;win&quot; -- the scenarios outlined are certainly 
<br>
attractive.
<br>
<p>But I think that there are deeper problems.  In short, I believe that 
<br>
MPI is only one part of a complex web of issues.  Even if we wave our 
<br>
hands and assume that we have an MPI ABI today, there are many other 
<br>
factors that prevent the scenarios that are described in Greg's slides. 
<br>
&nbsp;&nbsp;I'll discuss these below.
<br>
<p>Because e-mail is such an imprecise media, and because I don't 
<br>
personally know many (most?) of you, I want to stress right up front 
<br>
that I am *not* attempting to start a holy war, flame fest, or any 
<br>
other such nonsense.  This is all simply the opinions of an MPI 
<br>
implementor.  Although I've been around the block a few times, I'm 
<br>
certainly not going to claim to be a definitive expert on all systems 
<br>
everywhere.  This mail simply summarizes my views.
<br>
<p>-----
<br>
<p>First, let me ask a question: what does an MPI ABI *really* get for you?
<br>
<p>The obvious answer is that you don't have to recompile.  Your app runs 
<br>
anywhere with any MPI on any system.  Well, that is, unless want to run 
<br>
on a different architecture (32/64 bit, different CPU, different 
<br>
platform, etc.).  Or if you want to use a different compiler on the 
<br>
same system (let's not forget C++ and F90 name mangling issues).  Or if 
<br>
you want to use different system or compiler flags (e.g., threading / 
<br>
no threading, largefile support on Linux, optimization and debugging 
<br>
support, etc.).
<br>
<p>So -- hmm.  You can run your MPI app on any MPI implementation that is 
<br>
on exactly the same platform, architecture, uses the same compilers, 
<br>
and uses the same system and compiler flags that you want.  So an MPI 
<br>
ABI does not enable the &quot;compile once, run anywhere&quot; scheme -- it 
<br>
really is much narrower than the casual observer might expect.
<br>
<p>But let's say that even that would be a big &quot;win&quot; for users -- you have 
<br>
&quot;similar&quot; systems with &quot;similar&quot; MPI implementations, and you can run 
<br>
your MPI app on any combination of them.  So how does the end user 
<br>
choose which MPI implementation to use?
<br>
<p>The old way was to set your $PATH -- ensure that you have the &quot;right&quot; 
<br>
mpicc, mpirun, etc.  Sure, you can have 20+ MPI implementations loaded 
<br>
on your cluster (and there are many that do), and they can all 
<br>
peacefully co-exist (within reason).  Switching between MPI 
<br>
implementations is [usually] a matter of the user changing their $PATH 
<br>
(sometimes this has to be in their shell startup files).
<br>
<p>As an MPI implementor and support provider, let me tell you that 
<br>
getting users to do this correctly is a nightmare.  Users generally 
<br>
understand PATH, but getting them to set it right [consistently] is 
<br>
quite difficult.  I'm not making any judgements on whether setting 
<br>
$PATH to switch MPI implementations is a good system or not -- I'm just 
<br>
saying that that's [usually] what it is.  And it's difficult enough for 
<br>
the user who doesn't care why/how MPI works.
<br>
<p>The new way is based on MPI shared libraries -- users will change their 
<br>
LD_LIBRARY_PATH instead of their PATH.  Some will claim that this is 
<br>
equivalent; if a user can change their PATH, they can certainly change 
<br>
their LD_LIBRARY_PATH.  I'm guessing, however, that it will be much 
<br>
harder.  Users generally understand $PATH; how many of them have ever 
<br>
heard of LD_LIBRARY_PATH and/or will understand (or care) what it is 
<br>
for?  I have visions of &quot;set ld library path = /opt/xyz-mpi&quot;.
<br>
<p>But I digress -- whether the users will get it right or not is 
<br>
speculative.  My point here is that you have traded one &quot;switch&quot; 
<br>
mechanism for another that, from a procedural standpoint, is equivalent 
<br>
(setting LD_LIBRARY_PATH vs. setting PATH).
<br>
<p>Ok, so let's wave our hands again and assume that this is all working 
<br>
fine and good, and users can switch between MPI implementations on 
<br>
their similar systems with ease.  What have we solved?  My cluster 
<br>
still has 20+ MPI implementations on it, and I (the user) still have to 
<br>
choose which to use.  I don't have to recompile my app, but now I've 
<br>
got a somewhat-intangible way to know which MPI I'm using (look at 
<br>
$LD_LIBRARY_PATH).  Users are now quite accustomed to &quot;myapp-lam&quot;, 
<br>
&quot;myapp-ftmpi&quot;, &quot;myapp-lampi&quot;, &quot;myapp-mpich-gm&quot;, etc., where the 
<br>
difference is quite obvious.  Now it's much less obvious.
<br>
<p>Is this a good or a bad thing?  I don't know -- I just raise the point. 
<br>
&nbsp;&nbsp;When you only have one binary, it becomes harder (or, better put, 
<br>
takes more effort) to ensure that you're running with the MPI 
<br>
implementation that you intend to.  Mistakes (by end users and/or 
<br>
pre-bundled MPI software) will become easier to make.
<br>
<p>A final thought here: the -rpath (and equivalent) linker flags are 
<br>
extremely convenient for users.  You compile against shared libraries 
<br>
and they are magically &quot;found&quot; at run time, regardless of your 
<br>
LD_LIBRARY_PATH.  This is particularly helpful for packages that are 
<br>
installed in non-system-default locations (like the 20 MPI 
<br>
implementations you have installed on your cluster).  Having an MPI ABI 
<br>
will pretty much stop this practice -- you don't want to link an MPI 
<br>
application with -rpath because you don't want to (or can't) assume 
<br>
which MPI a user will want to use.  So they user *has* to set their 
<br>
LD_LIBRARY_PATH -- you no longer have an MPI implementation that &quot;just 
<br>
works&quot;; users must do one [more] thing before an MPI application will 
<br>
run.
<br>
<p>Summary:
<br>
<p>- With an MPI ABI, you can only run on &quot;similar&quot; systems
<br>
- Users now set their LD_LIBRARY_PATH instead of PATH
<br>
- It's less obvious which MPI the user is actually using
<br>
- -rpath linker flag can/should not be used; users *have* to set 
<br>
LD_LIBRARY_PATH
<br>
<p>-----
<br>
<p>What about the ISV?
<br>
<p>Again, on the surface, this looks great -- an ISV can ship *one* 
<br>
executable and have it work &quot;anywhere&quot;.  Er, well, anywhere &quot;similar&quot; 
<br>
(so let's not forget that the ISV will still end up shipping a lot of 
<br>
executables -- they may be shipping *fewer* executables than before, 
<br>
but there will still be [far?] more than one).
<br>
<p>But does an ISV really want that?  Suddenly their app can [potentially] 
<br>
run in a lot of scenarios that they have not verified through their Q&amp;A 
<br>
process.  How do you know that you'll get the right answers?  How do 
<br>
you know it won't crap out in the middle of the run because of a 
<br>
missing symbol (not involving MPI)?  The fact is that the app can now 
<br>
run in a lot of unsupported places, whereas today, the possibilities of 
<br>
this happening are *much* more limited.  ISVs generally choose which 
<br>
MPI implementations, but then their apps *only* run on those 
<br>
implementations (there are exceptions to this rule, I know).
<br>
<p>This is quite an important point, and is something that several others 
<br>
have brought up in other mails: all MPI implementations are not created 
<br>
equal.  Take any two production-quality MPI implementations and they'll 
<br>
have their own quirks and differences.  They'll behave and perform 
<br>
differently.  So even though your application is source code portable, 
<br>
it may not be performance / behavioral portable.  This has been a 
<br>
well-known fact for years (as someone said -- it's an artifact of using 
<br>
a standard with multiple implementations).  This is why ISV's Q&amp;A test 
<br>
their applications with different MPI implementations, and only certify 
<br>
specific ones.  More specifically, if your application works on one MPI 
<br>
implementation, you can't guarantee that it will work on another.  It 
<br>
*probably* will, but customers don't pay for &quot;probably&quot; (e.g., you 
<br>
can't know if you're accidentally relying on a quirk of one [or more!] 
<br>
implementation[s] without testing on exactly the ones that you plan to 
<br>
support).
<br>
<p>I'm not an ISV, so I won't pretend to speak for them, but several whom 
<br>
I've had conversations actually *prefer* having tight control of where 
<br>
their apps run (regardless of the mechanism) -- not just in terms of 
<br>
Q&amp;A, but also in terms of support.  Granted, today's system of 
<br>
enforcing that is rather klunky (you won't get any disagreement from me 
<br>
there), but it gives ISVs what they want (at least, the ones that I 
<br>
have talked to).
<br>
<p>Let's again wave our hands and assume that we have an MPI ABI, and 
<br>
imagine a support call for an ISV's MPI application:
<br>
<p>Tech: &quot;Hello, welcome to ABC support.&quot;
<br>
User: &quot;I'm having a problem with your XYZ product.&quot;
<br>
Tech: &quot;Ah yes, this product uses MPI.  Which MPI are you using?&quot;
<br>
User: &quot;I'm using JKL MPI.&quot;
<br>
Tech: &quot;I'm sorry, we don't support JKL MPI.&quot;
<br>
<p>That's a bit fanciful and simplified, but my point here is that ISV's 
<br>
are still going to choose which MPI's they want to / can support.  If 
<br>
you (the user) use something outside of that set, you're unsupported.  
<br>
This may be confusing for users because the application *runs* (or 
<br>
seems like it is *supposed* to run) -- they have an MPI, right?  So why 
<br>
doesn't the ISV support that MPI?
<br>
<p>More specifically: it is better for an application to not run at all 
<br>
rather than run poorly (or, even worse, silently/unknowingly generate 
<br>
incorrect results).  Having a clear-cut distinction here is a Good 
<br>
Thing(tm).
<br>
<p>Also, let's not forget that some ISV's have chosen to avoid today's 
<br>
klunky mechanisms and simply statically compile a libmpi.a into their 
<br>
application.  They include a stripped down MPI implementation 
<br>
(potentially not their own) inside their own app, and provide varying 
<br>
degrees of hiding the MPI from the user.  Hence, the ISV has delivered 
<br>
a solution that will always work.
<br>
<p>Granted, this isn't [yet] possible for all scenarios.  But it works 
<br>
quite well in a wide variety of environments (let's not discount the 
<br>
number of clusters that are being bought outside of &quot;traditional&quot; HPC 
<br>
environments -- bio, chemical, etc., where TCP-based networks are used 
<br>
heavily).
<br>
<p>While we're on the topic: as cited in Greg's slides, 
<br>
non-traditional-HPC parallel applications (bio, chemical, etc.) are not 
<br>
going to tolerate recompiling.  They expect to get a binary that &quot;just 
<br>
works&quot;.  This is certainly a valid point.  However, these types of 
<br>
users will also be buying a complete solution, from hardware all the 
<br>
way to application (as much as possible).  Specifically, these users 
<br>
don't care (and sometimes don't even know) which MPI they are using.  
<br>
They don't care about running with 20 different MPI implementations.  
<br>
They'll use one -- whichever one their application is bundled with -- 
<br>
and will never use another (on that system, at least).  So an MPI ABI 
<br>
may not be very important to them.
<br>
<p>Another solution that some ISV's use today is to have a thin message 
<br>
passing abstraction layer.  So their main code base consists of 98% 
<br>
application-related stuff; 2% message passing stuff.  Engineered 
<br>
properly, the 98% makes calls into a separate library (i.e., the 2%) 
<br>
that funnels all access to MPI.  Hence, the ISV's really only need to 
<br>
recompile the small library that interfaces to MPI -- not their entire 
<br>
application -- to switch between MPI implementations.
<br>
<p>Don't get me wrong -- I'm not saying that this is a perfect solution.  
<br>
All I'm saying is that with proper planning and engineering, it's not a 
<br>
*bad* one.  Indeed, with slightly more effort, an ISV application could 
<br>
have a dynamic module that opens different libraries to talk to 
<br>
different MPI implementations (e.g., dlopen(&quot;mpi_interface_lam.so&quot;), or 
<br>
dlopen(&quot;mpi_interface_mpich.so&quot;), etc.).
<br>
<p>Hence, it is possible for ISVs to ship MPI-independent applications 
<br>
*today*.  More specifically, this would solve many of the same issues 
<br>
that an MPI ABI would solve *without requiring anything additional from 
<br>
MPI implementations* (and all the baggage that goes along with that) -- 
<br>
but you can still only run on &quot;similar&quot; systems.
<br>
<p>Summary:
<br>
<p>- ISVs are still only going to support some MPI implementations
<br>
- ISVs lost control over which MPI implementations their apps are used 
<br>
with
<br>
- Potential user confusion because it's less obvious which MPI they're 
<br>
using
<br>
- ISVs can ship static executables *today*
<br>
- ISVs can write binary MPI-independent applications *today*
<br>
<p>-----
<br>
<p>Much of what is being discussed first centers around standardizing 
<br>
mpi.h.  I think we all agree that it was not the Forum's goal to 
<br>
standardize mpi.h -- they actually didn't standardize it on purpose (to 
<br>
allow implementors to do whatever they want/need).
<br>
<p>The main differences between mpi.h's can be summarized as:
<br>
<p>1. values of constants
<br>
2. size of MPI_Status
<br>
3. size and types of MPI handles (crassly: pointer vs. integer)
<br>
<p>#1 is probably fairly easy to solve, but it's dependent upon #3.  #2 
<br>
may present some arguments between implementors.  #3 may introduce some 
<br>
fist fights.  ;-)   Canonical example: MPICH* uses integers; Open MPI 
<br>
uses pointers.  I don't think that either side is willing to give them 
<br>
up -- a simple reason (but definitely not the only reason -- this mail 
<br>
is not intended to open that debate) is that the amount of code that 
<br>
will change as a result of converting from int-&gt;pointer or pointer-&gt;int 
<br>
is quite large.  Admittedly, each change is fairly small, but it's 
<br>
still a *lot* of small changes.
<br>
<p>Let's also not forget MPI for smaller niche environments -- do we 
<br>
really want to force an embedded MPI to use 32 or 64 bit handles?  
<br>
That's a silly example, of course, but the point I'm trying to make is 
<br>
that MPI spans a wide range of platforms -- what is suitable for one is 
<br>
not necessarily suitable for another (even at the mpi.h level).
<br>
<p>A user recently asked me, &quot;So why should I suffer because of religious 
<br>
differences between MPI implementors?&quot;
<br>
<p>My reply to that is &quot;How exactly are you suffering?&quot;  Is recompiling 
<br>
really that difficult?  The fact remains that you're still going to 
<br>
have many different MPI implementations out there -- an ABI will not 
<br>
change this.  Just because you slightly change the mechanism of how to 
<br>
switch your application between them; does that really, fundamentally 
<br>
make life better somehow?  I'll return to this question later.
<br>
<p>Every MPI implementation has different goals (research, production, 
<br>
latency, bandwidth, portability / specivity, etc.).  These goals 
<br>
strongly influence the design of that implementation and have tangible 
<br>
impacts on mpi.h.
<br>
<p>Summary:
<br>
<p>- Standardizing the size/type of MPI handles is problematic
<br>
- What is appropriate on one platform is not necessarily appropriate on 
<br>
another
<br>
- Every MPI implementation has different goals, which even affects mpi.h
<br>
<p>-----
<br>
<p>As mentioned multiple times in the slides, having a common mpi.h is 
<br>
only half the story.  You'll still need a common mpirun to really make 
<br>
things transparent to the user (you may even be able to hide some of 
<br>
the LD_LIBRARY_PATH issues if you have a good uber-mpirun).  The slides 
<br>
argue that you can't support multiple batch queue systems in most 
<br>
current MPI implementations.
<br>
<p>I strongly disagree with this.  LAM/MPI has been doing it for years.  
<br>
LAM currently supports -- out of the box -- the run-time decision of 
<br>
whether to use rsh/ssh, PBS, SLURM, BProc (both LANL and Scyld 
<br>
variants), and limited scenarios for Globus.  Open MPI will support 
<br>
even more than this.
<br>
<p>*** Sidenote: this same argument holds for support of different network 
<br>
interconnects.  LAM/MPI has been supporting the run-time decision of 
<br>
which interconnect to use for years.  Open MPI will continue 
<br>
capability.  But let's get back to the RTE discussion...
<br>
<p>I firmly believe -- and the software to back up my belief is freely 
<br>
available -- that this is purely a quality of implementation issue.  If 
<br>
MPI implementations want to support multiple back-end run-time 
<br>
environments (RTEs), they can (this all goes back to the goals of an 
<br>
MPI implementation).  All batch systems have some kind of interface 
<br>
(API or command line) to launch processes; although there is varying 
<br>
support for monitoring and killing, it's simply a question of the MPI 
<br>
implementation using the interface to launch its MPI processes.  It's 
<br>
not difficult; support for all the RTE systems listed above is 
<br>
approximately 2% of LAM/MPI 7.1.2's code base (in terms of lines of 
<br>
code).
<br>
<p>I'm wary of standardizing on an uber-mpirun.  There's more to MPI_INIT 
<br>
than just discovering your peers and your identity (Greg mentioned a 
<br>
few issues in his slides: IO forwarding, process monitoring, etc.).  In 
<br>
some cases, there is no out-of-band channel for newly-started MPI 
<br>
processes to contact mpirun; MPI_INIT has to figure out its peers and 
<br>
identity based on what the back-end RTE gave it (e.g., Quadrics, 
<br>
Portals, etc.).  Hence, you can't hide everything in an uber-mpirun -- 
<br>
the MPI sometimes *needs* knowledge of the back-end RTE.
<br>
<p>You're also going to be standardizing many of the MPI-2 dynamic 
<br>
functions, MPI_FINALIZE, and MPI_ABORT.  That's a *lot* of ground to 
<br>
cover (and to get implementors with different opinions and goals to 
<br>
agree upon).  Indeed, in MPI-2, the Forum went so far as to say 
<br>
(paraphrasing, obviously) &quot;We didn't specify the exact behavior of 
<br>
MPI_FINALIZE on purpose.&quot;
<br>
<p>The MPI's internal RTE is the soul of the machine; everyone has done 
<br>
theirs entirely differently.  Given that mpi.h is halfway specified by 
<br>
the MPI standard and we *still* can't agree on the specifics, it is 
<br>
difficult for me to imagine standardizing critical elements of the 
<br>
back-end of all MPI implementations where there is currently no 
<br>
uniformity at all.  Consider: as I mentioned above, standardizing mpi.h 
<br>
means touching potentially a lot of code in an MPI implementation.  
<br>
Standardizing the internal run-time environment will touch a lot *more* 
<br>
code in an MPI implementation.  That's a hard sell.
<br>
<p>Let's also not forget that some MPI implementations distinguish 
<br>
themselves by their run-time environments.  Some have really good RTEs. 
<br>
&nbsp;&nbsp;Some don't.  But consider: if performance is roughly equivalent among 
<br>
multiple MPI implementations, users will choose by feature sets.  I 
<br>
speak from experience -- long before I became an MPI implementor, I 
<br>
chose to use a specific MPI implementation because it had a fast mpirun 
<br>
and when I hit ctrl-C, all my applications were guaranteed to be 
<br>
killed.  If you eliminate these differences, you're asking some MPI 
<br>
implementations to standardize themselves out of existence.  That, too, 
<br>
is a pretty hard sell.
<br>
<p>Finally, this uber-mpirun will have a consistent syntax across all 
<br>
platforms and RTEs, but what about mpiexec?  The MPI Forum explicitly 
<br>
specified mpiexec to fulfill this requirement.  Has it failed?  Are all 
<br>
the mpiexec implementations out there so radically different as to be 
<br>
useless in terms of uniform syntax?  (this is an honest question)
<br>
<p>Summary:
<br>
<p>- Run-time decision of back-end RTE launcher support is easy and 
<br>
available today
<br>
- An uber-mpirun cannot hide all job control details (MPI_INIT must be 
<br>
involved)
<br>
- An uber-mpirun would effectively standardize MPI_INIT, MPI_FINALIZE, 
<br>
MPI_ABORT, and the MPI-2 dynamic functions
<br>
- Standardizing the internal RTE in MPI implementations is a *LOT* of 
<br>
work
<br>
- What about mpiexec?
<br>
<p>-----
<br>
<p>I have a few random notes on Greg's slides:
<br>
<p>- As I mentioned above, any MPI implementation can support multiple 
<br>
batch-queue systems (or, more specifically, any back-end launching 
<br>
system).  It's purely a quality-of-implementation issue.  An MPI ABI is 
<br>
not required to make MPI implementations support multiple different 
<br>
run-time environments.
<br>
<p>- &quot;Ever wonder why MPI applications don't come with a 'make check' 
<br>
target?&quot;  This is an oversimplification -- you're implying that lack of 
<br>
consistent mpirun syntax makes MPI applications non-portable, and 
<br>
therefore impossible to have a consistent launching mechanism.  This is 
<br>
simply not true; it ignores at least two significant issues:
<br>
<p>1. There are many other external factors required to run an MPI 
<br>
application (e.g., SSH keys, a batch-queue system, permission and time 
<br>
allocation on a cluster/parallel hardware, local setup decisions and 
<br>
policies [pre-staging executables or using a global filesystem], etc.). 
<br>
&nbsp;&nbsp;Indeed, the simple matter of choosing how many CPUs to use and which 
<br>
ones to launch across is different in every run-time environment.  This 
<br>
is not the fault of MPI; this is the &quot;fault&quot; of heterogeneity of 
<br>
run-time environments that exist today.
<br>
<p>2. mpiexec seems to be able to handle at least some of these issues; it 
<br>
already has a more-or-less standardized command line syntax.  The 
<br>
slides did not address mpiexec at all -- are there issues with mpiexec? 
<br>
&nbsp;&nbsp;Regardless, doesn't &quot;mpirun -np 4 my_app&quot; pretty much work on 
<br>
many/most implementations?
<br>
<p>- On the &quot;Recompilation considered harmful&quot; slide: what about different 
<br>
compilers?  Even if we have an MPI ABI, compilers will be (or already 
<br>
are?) the next battleground.  Whatever happened to the C++ ABI effort?  
<br>
Is there, or will there be an F90 ABI effort?  Specifically: MPI is 
<br>
only one piece of the puzzle.  There are a lot of other factors that 
<br>
determine whether recompilation is required or not.  ABIs between 
<br>
compilers (not libraries) would be a good first step.
<br>
<p>- On the &quot;Winners: End Users&quot; slide: this is also an 
<br>
oversimplification.  &quot;Any MPI app works on your system&quot; / &quot;Your app 
<br>
works on your collaborator's system&quot;.  As discussed above, this only 
<br>
works for &quot;similar&quot; systems -- as long as your MPI app was compiled 
<br>
with for the same OS, hardware, same system and compiler flags -- then 
<br>
sure, your app will run in multiple places.  Indeed, we have this today 
<br>
-- if you compile any non-trivial app (MPI or not), you can [only] run 
<br>
it on any similar system.  But if it's not a &quot;similar&quot; system, you can 
<br>
(and will) run into DLL Hell or downright incompatibility.  Therefore, 
<br>
this is not MPI's fault.  This is the &quot;fault&quot; of the heterogeneity of 
<br>
systems out there.
<br>
<p>- On the &quot;Winners: MPI implementation researchers&quot; slide: although 
<br>
there are some (a very small number), most implementation researchers 
<br>
do not write their own MPI from scratch.  Most take an existing open 
<br>
source MPI and modify it.  Having an MPI ABI gains nothing for MPI 
<br>
implementation researchers except that they don't have to recompile 
<br>
applications for their new implementation.  This is exactly the same as 
<br>
it is for everyone else (per restrictions discussed above); singling 
<br>
out MPI implementation researchers is misleading.
<br>
<p>- On the &quot;Winners: Interconnect implementors&quot; slide: Why will 
<br>
interconnect implementors only reach systems that recompile?  Quadrics 
<br>
distributes binaries, for example.  Are you saying that all 
<br>
interconnects must write their own MPI implementations?  I can assure 
<br>
that most interconnect vendors do *not* want to do this.
<br>
<p>- On the &quot;Winners: Commercial software vendors&quot; slide: I talked about 
<br>
this above.  An ABI does *not* make testing easier -- the ISV still 
<br>
have to test with all the target MPIs that they are going to support.  
<br>
Just because they don't have to recompile will not significantly reduce 
<br>
the logistics of all ISV's.  I don't see how automated testing becomes 
<br>
easier with an ABI.  Are you referring to a standardized mpirun?  In 
<br>
several of your e-mails, you have indicated that the standardized 
<br>
mpirun would be a separate effort, not part of the ABI.  So I'm a bit 
<br>
confused by this comment.
<br>
<p>- On the &quot;Winners: Open Source Software Projects&quot; slide: you say 
<br>
&quot;Tomorrow, MPI is just like everything else...&quot;  Are you saying that 
<br>
MPI will be DLL Hell just like all other packages out there?  That's 
<br>
not a snide remark -- today, you have to find an RPM for your specific 
<br>
distro, version, and architecture.  Anything is else is a total 
<br>
crapshoot as to whether it will work (e.g., DLL Hell).  Do you really 
<br>
want MPI implementations to fall into this category?  Although there 
<br>
are obvious drawbacks, using the source can be quite liberating in 
<br>
terms of portability and freedom from DLL Hell.
<br>
<p>- On the &quot;Issues: Startup and queue systems&quot; slide: it sounds like you 
<br>
are now talking about standardizing queue systems which is a much, much 
<br>
larger effort than just the MPI (or even the HPC) community.
<br>
<p>It's quite possible that I'm missing the talking points (and therefore 
<br>
the intent) of some of these slides; I did not see a presentation -- I 
<br>
only read the PDF.  So if I missed the point of some of these slides, I 
<br>
apologize -- but please expand on your text and explain (the PDF is all 
<br>
that everyone has to go on who was not at the IB meeting where they 
<br>
were presented).  Thanks!
<br>
<p>-----
<br>
<p>In conclusion (thanks for staying with me so long!), I guess I really 
<br>
don't see a clear &quot;win&quot; for an MPI ABI and/or an uber-mpirun -- I don't 
<br>
see a compelling &quot;yes, this will make my life better&quot; rationale (where 
<br>
{&quot;my&quot; E (end-user, MPI implementor, ISV, ...etc.)}.  Avoiding 
<br>
recompiling certainly makes some people's lives better in incremental 
<br>
ways.  But it seems like we have far more important problems to solve 
<br>
(extreme scalability, better performance, new platforms, etc.).  Do we 
<br>
know if users really want this?  (i.e., a large percentage of users -- 
<br>
not a vocal few)  Will users really find it easier?  Can you really 
<br>
sell this concept to all MPI implementors?  Will ISVs really want the 
<br>
additional support burden / user confusion?  ...and so on.
<br>
<p>I believe that the *problem* is not MPI, nor any particular 
<br>
implementation.  The *problem* is that there are a lot of different 
<br>
types of systems out there.  You *can't* distribute a binary (even a 
<br>
serial binary) an expect it to work everywhere.  Binaries have to be 
<br>
tailored to specific systems.  This is why, for example, in the Linux 
<br>
world, you can't just grab any RPM that has the application you want -- 
<br>
you have to find the RPM for your distro, version, and hardware.  If 
<br>
nothing else, you prevent DLL Hell kinds of issues this way.  Or, you 
<br>
statically link the whole application and leave nothing to chance 
<br>
(which obviates the need for an MPI ABI).
<br>
<p>Indeed, even on a given system, there many different variations (which 
<br>
compiler to use, which compiler and system flags to use, etc.).  MPI 
<br>
can neither be blamed for all of these variations nor can an MPI ABI be 
<br>
expected to somehow provide uniformity across all of them (e.g., if the 
<br>
application is compiled with -D_REENTRANT and the MPI library is not).
<br>
<p>MPI is only one piece of this DLL Hell (etc.) puzzle.  An MPI ABI isn't 
<br>
nearly as useful as one would think unless all the other issues are 
<br>
solved (e.g., compiler ABIs).  Indeed, the set of &quot;similar&quot; systems out 
<br>
there is pretty small: every cluster is different.  Every one.  There 
<br>
are very, very few cookie-cutter clusters out there that can truly be 
<br>
called &quot;identical&quot; to other clusters.  As such, even expecting serial 
<br>
binaries to be portable is quite a stretch.
<br>
<p>To be blunt: an MPI ABI and/or an uber-mpirun will not solve any of 
<br>
these other issues.
<br>
<p>My $0.02: source code portability is enough.  This was actually quite 
<br>
wise of the MPI Forum; specifying mpi.h and/or making an ABI was never 
<br>
part of the plan.  Any valid MPI application can be recompiled for 
<br>
other target systems.  Indeed, properly engineered parallel 
<br>
applications may only need to recompile small portions of their code 
<br>
base to use a different MPI implementations.  And with a little effort, 
<br>
apps can be made to be MPI-independant (which is a lot less work than 
<br>
getting all MPI implementations to agree to an ABI / uber-mpirun).
<br>
<p>Sure, it would be great to not have to recompile apps, but given the 
<br>
current state of technology, the sheer number of MPI implementations 
<br>
that would have to agree to make an MPI ABI useful, and the fundamental 
<br>
differences in goals between the different MPI implementation, it's 
<br>
hard to justify all the work that would be required for this effort -- 
<br>
just to avoid a simple thing like recompiling.
<br>
<p>Thanks for your time in reading this.
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
<li><strong>Next message:</strong> <a href="0022.php">Greg Lindahl: "Re: [O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0020.php">Toon Knapen: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0022.php">Greg Lindahl: "Re: [O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0022.php">Greg Lindahl: "Re: [O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0023.php">Toon Knapen: "Re: [O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
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
