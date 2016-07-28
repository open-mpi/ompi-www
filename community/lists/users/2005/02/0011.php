<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 17 08:53:34 2005" -->
<!-- isoreceived="20050217135334" -->
<!-- sent="Thu, 17 Feb 2005 08:53:29 -0500" -->
<!-- isosent="20050217135329" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Several queries" -->
<!-- id="42d0b9203cf27a47d7c80b756875545a_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050216191956.76986.qmail_at_web12307.mail.yahoo.com" -->
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
<strong>Date:</strong> 2005-02-17 08:53:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2005/03/0012.php">Larry Stewart: "[O-MPI users] How's it going?"</a>
<li><strong>Previous message:</strong> <a href="0010.php">Jonathan Day: "[O-MPI users] Several queries"</a>
<li><strong>In reply to:</strong> <a href="0010.php">Jonathan Day: "[O-MPI users] Several queries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 16, 2005, at 2:19 PM, Jonathan Day wrote:
<br>
<p><span class="quotelev1">&gt; First off, I noticed in a previous posting that bproc
</span><br>
<span class="quotelev1">&gt; was supported. Will this also be true for Mosix and/or
</span><br>
<span class="quotelev1">&gt; OpenMosix?
</span><br>
<p>It depends on what you mean by &quot;support&quot;.
<br>
<p>Open MPI will not initially have any migration capabilities, so Open 
<br>
MPI applications running under *Mosix would fail if *Mosix tried to 
<br>
migrate them.  Future versions of Open MPI will have checkpoint / 
<br>
restart / migration capabilities, so it would enable the possibility of 
<br>
running in Condor and or *Mosix kinds of environments.
<br>
<p>Open MPI will support a bunch of different schedulers and back-end 
<br>
run-time launchers (e.g., rsh/ssh, bproc, PBS/TM, etc.).  I'm not 
<br>
familiar with *Mosix at all, so I don't know what scheduler / launcher 
<br>
*Mosix uses (or if it has its own).  It's quite possible that a *Mosix 
<br>
&quot;plugin&quot; would need to be written for Open MPI to support running on 
<br>
such clusters (all of Open MPI's interactions with the back-end 
<br>
run-time environment are component-ized; supporting new back-end RTE's 
<br>
is simply a matter of writing more plugins).
<br>
<p><span class="quotelev1">&gt; Second, I've been monitoring the progress of various
</span><br>
<span class="quotelev1">&gt; MPI projects for a while. I've seen no progress on
</span><br>
<span class="quotelev1">&gt; IPMI for some time. Likewise, the very-high-speed
</span><br>
<span class="quotelev1">&gt; MP-MPICH project (which provides optimized support for
</span><br>
<span class="quotelev1">&gt; things like SCI) seems to be comatose at best.
</span><br>
<p>(I assume you mean IMPI, not IPMI...?)
<br>
<p>We do plan to eventually support IMPI.  LAM/MPI was one of the first 
<br>
MPI implementations to support IMPI (parts of it, at least -- LAM had 
<br>
some architectural issues that made it quite difficult to support all 
<br>
of IMPI); our long term plans include migrating all that work into Open 
<br>
MPI and finishing the implementation.
<br>
<p>IMPI simply didn't make the first cut for Open MPI; we had too much 
<br>
else to do to get a basic MPI implementation working, etc.
<br>
<p><span class="quotelev1">&gt; What, if anything, will be utilized from these
</span><br>
<span class="quotelev1">&gt; projects? Or will it be assumed that the failures
</span><br>
<span class="quotelev1">&gt; indicate a flaw in the concept or design?
</span><br>
<p>I'm not familiar with MP-MPICH, but I can say that our architecture is 
<br>
quite different than that of MPICH's.  Open MPI will support a variety 
<br>
of high-speed interconnects.  We currently don't have access to any SCI 
<br>
clusters, and therefore an SCI device for MPI message/IO traffic is not 
<br>
currently planned (i.e., it's not a priority for any of the current 
<br>
members).
<br>
<p>However, this is one of the main points of the Open MPI project: as 
<br>
with our RTE support, much of the MPI layer is component-ized.  So 
<br>
supporting SCI interconnects is simply a matter of writing one or more 
<br>
plugins.  Eventually, we'll have full documentation for all of our 
<br>
component frameworks and we'll be actively encouraging third parties to 
<br>
write independent components for Open MPI.
<br>
<p>Another strength is that Open MPI components can be distributed and 
<br>
installed independently of the main Open MPI distribution.  Once you 
<br>
have a base installation of Open MPI, you can download and install 3rd 
<br>
party components (users and developers can even have their own 
<br>
user-specific components in a system-wide Open MPI installation).
<br>
<p><span class="quotelev1">&gt; Third, there are several projects which utilize
</span><br>
<span class="quotelev1">&gt; modified versions of MPICH - implying there may be a
</span><br>
<span class="quotelev1">&gt; lack of some critical hooks in MPI implementations.
</span><br>
<span class="quotelev1">&gt; The projects I know of that do this are Globus (a grid
</span><br>
<span class="quotelev1">&gt; computing system) and Gamma (a very low level, low
</span><br>
<span class="quotelev1">&gt; latency IPC system).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What, if anything, has been learned from such projects
</span><br>
<span class="quotelev1">&gt; and what sort of support will Open-MPI provide to
</span><br>
<span class="quotelev1">&gt; cover such cases? One thing I would like to see is the
</span><br>
<span class="quotelev1">&gt; ability to load/unload modules on-the-fly on systems
</span><br>
<span class="quotelev1">&gt; that support a working dlopen(), in a similar manner
</span><br>
<span class="quotelev1">&gt; to the Linux kernel.
</span><br>
<p>As implied by my text above, this is how we do components in Open MPI 
<br>
(dlopen, etc.).  So installing a new component is [usually] just a 
<br>
matter of putting a .so in a specific directory.
<br>
<p>This work was started in LAM/MPI -- the component architecture in LAM 
<br>
has 4 different &quot;plugin&quot; types: point-to-point device, collective 
<br>
algorithms, checkpoint/restart system, and run-time environment.
<br>
<p>We took the best of the component concepts from LAM/MPI, expanded on 
<br>
them, and used them extensively throughout Open MPI.  I think we 
<br>
currently have 30+ component types in Open MPI, and are continually 
<br>
adding more.
<br>
<p>We really, really hope to solve (or at least greatly help) the &quot;code 
<br>
forking&quot; problems that have been common in MPI implementations (20+ 
<br>
different installations of MPI on a cluster).  One of our goals is to 
<br>
enable one MPI implementation installation with lots and lots of 
<br>
plugins, and a flexible system for users to pick which components to 
<br>
use (or, in most cases, have a sane set of components automatically 
<br>
picked for them).
<br>
<p>That's utopia, however, and not 100% realizable.  For example, you'll 
<br>
still need multiple Open MPI installations -- one for each different 
<br>
set of compilers, etc.  Different compiler name mangling schemes and 
<br>
data type layouts and sizes are problems that are beyond the scope of 
<br>
an MPI implementation to solve, unfortunately.  :-\
<br>
<p><span class="quotelev1">&gt; Finally, with regards to the development process - do
</span><br>
<span class="quotelev1">&gt; you have a mechanism in place for external developers
</span><br>
<span class="quotelev1">&gt; to track bugs, submit fixes/extensions, etc?
</span><br>
<p>Not yet, but we very much plan to.  Once we get over this initial hump 
<br>
of a basic MPI implementation, we'll be opening our doors, so to speak 
<br>
and strongly utilizing the open source model.  Our release branches in 
<br>
Subversion will be open to the public.
<br>
<p>I'll say this right up front, however: the main distribution of Open 
<br>
MPI needs to be production-quality code.  So we'll likely be quite 
<br>
choosy about who is allowed to commit and what patches we'll take.  
<br>
That, too, I think falls quite in-line with the Open Source philosophy 
<br>
(darwinism of patches / source code donations, if you will).
<br>
<p>Finally, Open MPI will be released under a BSD-like license.  Any code 
<br>
that is contributed to the main Open MPI repository *must* be properly 
<br>
copyrighted and released under a compatible license.
<br>
<p><span class="quotelev1">&gt; Engaging the interest of a significant number of Open
</span><br>
<span class="quotelev1">&gt; Source developers is hard, but it appears to be true
</span><br>
<span class="quotelev1">&gt; that the more transparent the process, the greater the
</span><br>
<span class="quotelev1">&gt; success.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know plenty of &quot;Open Source&quot; scientific/academic
</span><br>
<span class="quotelev1">&gt; projects where the administrators won't even permit
</span><br>
<span class="quotelev1">&gt; the project to be listed on Open Source catalogues and
</span><br>
<span class="quotelev1">&gt; databases. Needless to say, such projects evolve
</span><br>
<span class="quotelev1">&gt; painfully slowly or fall apart entirely. The
</span><br>
<span class="quotelev1">&gt; assumption that internal effort is enough often proves
</span><br>
<span class="quotelev1">&gt; optimistic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What plans do you have to avoid the pitfalls of other
</span><br>
<span class="quotelev1">&gt; projects?
</span><br>
<p>I think that this is part of the strength that the LAM/MPI team brings 
<br>
to this project -- look at our project history and you'll see active 
<br>
engagement of the community, open access to our repository, active 
<br>
mailing lists, a full and comprehensive web site, etc.  LAM/MPI is 
<br>
listed in multiple Open Source catalogues and is distributed in nearly 
<br>
every Linux distribution (and several BSD distributions).  Indeed, the 
<br>
name of our parent organization here at Indiana University is the Open 
<br>
Systems Laboratory (www.osl.iu.edu).
<br>
<p>So we're quite committed to making Open MPI follow the best practices 
<br>
of open source projects.  As I mentioned above, this does not 
<br>
necessarily mean that we'll accept patches from just anyone, nor does 
<br>
it mean that we can provide 24/7 support to random users around the 
<br>
world (we will have our own deadlines and internal deliverables that 
<br>
need to be met, for example -- and those will inevitably sometimes take 
<br>
precedence over answering support e-mails).  But we will do our best to 
<br>
provide access, engage third party developers, and give support to 
<br>
users.
<br>
<p>I hope that this answers your questions.  Please feel free to ping us 
<br>
with more!
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
<li><strong>Next message:</strong> <a href="../../2005/03/0012.php">Larry Stewart: "[O-MPI users] How's it going?"</a>
<li><strong>Previous message:</strong> <a href="0010.php">Jonathan Day: "[O-MPI users] Several queries"</a>
<li><strong>In reply to:</strong> <a href="0010.php">Jonathan Day: "[O-MPI users] Several queries"</a>
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
