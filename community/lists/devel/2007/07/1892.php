<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 14 16:02:53 2007" -->
<!-- isoreceived="20070714200253" -->
<!-- sent="Sat, 14 Jul 2007 13:02:47 -0700" -->
<!-- isosent="20070714200247" -->
<!-- name="Matthew Moskewicz" -->
<!-- email="moskewcz_at_[hidden]" -->
<!-- subject="[OMPI devel] lsf support / farm use models" -->
<!-- id="325001540707141302v1436dfb3y69524dcc78417bc6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Matthew Moskewicz (<em>moskewcz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-14 16:02:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1893.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1891.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1895.php">Ralph Castain: "Re: [OMPI devel] lsf support / farm use models"</a>
<li><strong>Reply:</strong> <a href="1895.php">Ralph Castain: "Re: [OMPI devel] lsf support / farm use models"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi everyone,
<br>
<p>firstly, i'm new around here, and somewhat clueless when it comes to the
<br>
details of working with an big autoconfiscated project like
<br>
open-rte/open-mpi the svn checkout level ...
<br>
<p>i've read some of the archives that turned up in searches for terms like
<br>
'LSF', and it would seem there was some discussion about adding some form of
<br>
LSF support to open-rte, but that the discussion ended a while back. so,
<br>
after  playing around with the 1.2.3 release tarball for a while, and
<br>
reading  various pieces of the code until i  had a (vague) idea of the
<br>
top-level control flow and such, i decided i was ready to try to add ras and
<br>
pls component to support LSF. once i had the build system up, i tried to
<br>
create an ras/lsf directory, and slightly to my surprise, it already
<br>
existed. i was kinda hoping for that, but it appears to be *very* fresh code
<br>
at the moment. nonetheless, i played around a bit more, and ran into two
<br>
issues:
<br>
<p>1) it appears that you (jeff, i guess ;) are using new LSF 7.0 API features.
<br>
i'm working to support customers in the EDA space, and it's not clear
<br>
if/when they will migrate to 7.0 -- not to mention that our company
<br>
(cadence) doesn't appear to have LSF 7.0 yet. i'm still looking in to the
<br>
deatils, but it appears that (from the Platform docs) lsb_getalloc is
<br>
probably just a thin wrapper around the LSB_MCPU_HOSTS (spelling?)
<br>
environment variable. so that could be worked around fairly easily. i dunno
<br>
about lsb_launch -- it seems equivalent to a set of ls_rtask() calls (one
<br>
per process). however, i have heard that there can be significant subtleties
<br>
with the semantics of these functions, in terms of compatibility across
<br>
differently configured LSF-controlled farms, specifically with regrads to
<br>
administrators ability to track and control job execution. personally, i
<br>
don't see how it's really possible for LSF to prevent 'bad' users from
<br>
spamming out jobs or short-cutting queues, but perhaps some of the methods
<br>
they attempt to use can complicate things for a library like open-rte.
<br>
<p>2) this brings us to point 2 -- upon talking to the author(s) of cadence's
<br>
internal open-rte-like library, several key issues were raised. mainly,
<br>
customers want their applications to be 'farm-friendly' in several key ways.
<br>
firstly, they do not want any persistent daemons running outside of a given
<br>
job -- this requirement seems met by the current open-mpi default behavior,
<br>
at least as far i can tell. secondly, they prefer (strongly) that
<br>
applications acquire resources incrementally, and perform work with whatever
<br>
nodes are currently available, rather than forcing a large up-front node
<br>
allocation. fault tolerance is nice too, although it's unclear to me if it's
<br>
really practically needed. in any case, many of our applications can
<br>
structure their computation to use resources in just such a way, generally
<br>
by dividing the work into independent, restartable pieces (i.e. they are
<br>
embarrassingly ||). also, MPI communication + MPI-2 process creation seems
<br>
to be a reasonable interface for handling communication and dynamic process
<br>
creation on the application side. however, it's not clear that open-rte
<br>
supports the needed dynamic resource acquisition model in any of the ras/pls
<br>
components i looked at. in fact, other that just folding everything in the
<br>
pls component, it's not clear that the entire flow via the rmgr really
<br>
supports it very well. specifically for LSF, the use model is that the
<br>
initial job either is created with bsub/lsb_submit(),  (or automatically
<br>
submits itself as step zero perhaps) to run initially on N machines. N
<br>
should be 'small' (1-16) -- perhaps only 1 for simplicity. then, as the
<br>
application runs, it will continue to consume more resources as limited by
<br>
the farm status, the user selection, and the max # of processes that the job
<br>
can usefully support (generally 'large' -- 100-1000 cpus).
<br>
<p>so, i figure it's up to me to implement this stuff ;) ... clearly, i want to
<br>
keep the 'normal' style ras/pls for LSF working, but somehow add the dynamic
<br>
behavior as an option. my initial thought was to (in the dynamic case)
<br>
basically ignore/fudge the ras/rmaps(/pls?) stages and simply use
<br>
bsub/lsb_submit() in pls to launch new daemons as needed/requested.  again,
<br>
though it's not clear that the current control flow supports this well.
<br>
given that there may be a large (10sec - 15min) delay between lsb_submit()
<br>
and job launch, it may be necessary to both acquire minimum size blocks of
<br>
new daemons at a time, and to have some non-blocking way to perform
<br>
spawning. for example, in the current code, the MPI-2 spawn is blocking
<br>
because it needs to return a communicator to the spawned process. however,
<br>
this is not really necessary for the application to continue -- it can
<br>
continue with other work until the new worker is up and running. perhaps
<br>
some form of multi-threading could help with this, but it's not totally
<br>
clear. i think i would prefer some lower-level open-rte calls that perform
<br>
daemon pre-allocation (i.e. dynamic ras/daemon startup), such that i know
<br>
that if there are idle daemons, it is safe to spawn without risk of
<br>
blocking.
<br>
<p>oh, and at first glance there appears to be a bunch of duplicated code
<br>
across the various flavors of ras (and similarly for pls, sds). is it
<br>
reasonable to attempt to factor things out? i seem to recall reading that
<br>
some major rework was in progress, so perhaps this would not be a good time?
<br>
<p>uhm ... well, any advice on anything here?
<br>
<p>thanks,
<br>
<p>Matt.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1892/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1893.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1891.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1895.php">Ralph Castain: "Re: [OMPI devel] lsf support / farm use models"</a>
<li><strong>Reply:</strong> <a href="1895.php">Ralph Castain: "Re: [OMPI devel] lsf support / farm use models"</a>
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
