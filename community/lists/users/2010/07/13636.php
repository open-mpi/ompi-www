<?
$subject_val = "[OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 14 14:24:52 2010" -->
<!-- isoreceived="20100714182452" -->
<!-- sent="Wed, 14 Jul 2010 11:26:00 -0700" -->
<!-- isosent="20100714182600" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]" -->
<!-- id="4C3E0138.1090500_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="565254.48681.qm_at_web80808.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-14 14:26:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13637.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Previous message:</strong> <a href="13635.php">Eugene Loh: "[OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]"</a>
<li><strong>In reply to:</strong> <a href="13629.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13640.php">Robert Walters: "Re: [OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]"</a>
<li><strong>Reply:</strong> <a href="13640.php">Robert Walters: "Re: [OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
I started today reading e-mail quickly and out of order.&nbsp; So, I'm going
back to an earlier message now, but still with the new Subject heading,
which better reflects where you are in your progress.&nbsp; I'm extracting
some questions from this thread, from bottom/old to top/new:<br>
<br>
1)&nbsp; What tools to use?&nbsp; As others have commented, the issue may have
less to do with the kernel or inefficient data movement and more to do
with what's going on in your application -- that is, some processes are
reaching synchronization points earlier than others.&nbsp; For
application-level tools, there is an OMPI FAQ category at
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/faq/?category=perftools">http://www.open-mpi.org/faq/?category=perftools</a> and specifically a list
of some tools you could "download for free".&nbsp; Anyhow, sounds like
you're getting traction with Sun Studio -- and personally I think
that's a good choice.&nbsp; :^)<br>
<br>
2)&nbsp; Spread processes on multiple nodes or colocate on one node?&nbsp; It
depends, but I agree with Ralph that it's not surprising if running on
a single node is faster, presumably due to faster communication
performance.&nbsp; (But, I'd temper his statement that it would *always* be
so.)<br>
<br>
3)&nbsp; I agree with David and Ralph that you're probably spending more
time waiting on messages than actually moving data.&nbsp; If you use Sun
Studio with Sun ClusterTools (now Oracle Message Passing Toolkit),
it'll also break apart "MPI wait" time from "MPI work" time (time spent
moving data) and you could see this rather clearly.&nbsp; But, any of the
MPI tracing tools will be able to show you other indications of this
problem.&nbsp; Most graphically, you might look at an MPI timeline.&nbsp; E.g.,
you might see one or more functions stuck in a long MPI_Barrier call,
with other processes lingering in computation before the last process
enters the barrier and all processes are released from that barrier.&nbsp;
Or, one function stuck in a long MPI_Recv, released when the message
arrives, as indicated by a message line joining the sending and
receiving processes.<br>
<br>
4)&nbsp; I could imagine the distributed memory version of LS-DYNA running
faster than the shared-memory version since it has better data locality.<br>
<br>
5)&nbsp; The I/O portion might be very, very significant.&nbsp; Maybe processes
are waiting on other processes that are not computing but doing a lot
of I/O.&nbsp; You say runs are faster when all processes are on the same
node versus when they're on different nodes.&nbsp; One experiment would be
to compare all processes running on node A versus running all processes
on node B versus distributing processes among both A and B.&nbsp; This would
be a way of discriminating between "all on one node is faster than
distributed" versus "one node is faster than another".&nbsp; Alternatively,
if look at the timeline and see one process stuck in a long MPI call,
look at the process it's waiting on.&nbsp; Does the call stack of the
"laggard" suggest what that laggard is doing?&nbsp; Computation or I/O?&nbsp; You
might need to know a little about LS-DYNA to tell.<br>
<br>
6)&nbsp; Functions with "_" at the end are probably Fortran names, which
should make sense for LS-DYNA (which I think is basically Fortran).<br>
<br>
7)&nbsp; Regarding two sets of functions for "everything."&nbsp; I think this is
no surprise.&nbsp; There are "inclusive" and "exclusive" times.&nbsp; If you look
at "inclusive" times (time spent in a function and all its callees),
the time for a function will be almost exactly equal to the time spent
in a wrapper that calls that function.&nbsp; I think this is what you're
seeing.&nbsp; If you were to look instead at "exclusive" times (time spent
in a function, excluding time spent in its callees), the difference
between a "real" function and a wrapper that calls it would be very
clear.&nbsp; If the numbers are percentages, then it's clear they are
"inclusive" since they add up to well over 100%.<br>
<br>
8)&nbsp; Regarding your earlier problems using Studio:&nbsp; no, you shouldn't
need to build OMPI specially for Studio use.&nbsp; (I'm interested in
hearing more about the problems you encountered and how you resolved
them.&nbsp; You can send to me off line since I suspect most of the mail
list would not be interested.)<br>
<br>
I hope at least some of those comments are helpful.&nbsp; Good luck.<br>
<br>
Robert Walters wrote:
<blockquote cite="mid565254.48681.qm@web80808.mail.mud.yahoo.com"
 type="cite">
  <table border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td
 style="font-family: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-size: inherit; line-height: inherit; font-size-adjust: inherit; font-stretch: inherit;"
 valign="top">I think I forgot to mention earlier that the application
I am using is pre-compiled. It is a finite element software called
LS-DYNA. It is not open source and I likely cannot obtain the code it
uses for MPP. This version I am using was specifically compiled, by the
parent company, for OpenMPI 1.4.2 MPP operations. <br>
        <br>
I recently installed the Sun Studio 12.1 to attempt to analyze the
situation. It seems to work partially. It will record various processes
individually, which is cryptic. The function it fails on, though, is
the MPI Tracing. It errors that "no MPI tracing data file in
experiment, MPI Timeline and MPI Charts will not be available".
Sometime during the analysis (about 10,000 iterations later, the
VT_MAX_FLUSHES complains that there are too many i/o flushes and its
not happy. I've increased this number in the environmental variable and
killed the analysis before it had a chance to error but still no MPI
Trace data is recorded. Not sure if you guys have heard of that
happening or know any way to fix it...Did OpenMPI need to be
configured/built for Sun Studio use?<br>
        <br>
I also noticed that from the data I do get back, there are two sets of
functions for everything. There is mpi_recv and then my_recv_, both
with the same % utilization time. The mpi one comes from your program's
library and the my_recv_ one comes from my program. Is that typical or
should the program I'm using be saying mpi_recv only? This data may be
enough to help me see what's wrong so I will pass it along. Keep in
mind this is percent time of total run time and not percent of MPI
communication. I attached the information in a picture rather than me
attempting to format a nice table in this nasty e-mail application.<br>
I blacked out items that are related to LS-DYNA but afterward I just
realized that I think every function with an _ at the end represents a
command issuing from LS-DYNA. <br>
        <br>
These are my big spenders. The processes I did not include are in the
bottom 4%. The processes that would be above these were the LS-DYNA
applications at 100%. Like I mentioned earlier, there are two instances
of every MPI command, and they carry the same percent usage. It's
curious that this version, built for OpenMPI, uses different functions.
        <br>
        <br>
Just for a little more background info, OpenMPI is being launched from
a local hard drive on each machine, but the LS-DYNA job files, and
related data output files, are on a mounted drive on that machine,
where the mounted drive is located on a different machine also in the
cluster. We were thinking that might be an issue but it isn't writing
enough data for me to think that would significantly decrease MPP
performance.<br>
        <br>
I would like to make one last mention. That is that OpenMPI running 8
cores on a single node, with all the communication, works flawlessly.
It works much faster than the Shared Memory Parallel (SMP) version of
LS-DYNA that we currently have used scaled to 8 cores. LS-DYNA seems to
be approximately 25% faster (don't quote me on that) when using the
OpenMPI installation than when using the standard SMP, which is
awesome. My point being that OpenMPI seems to be working fine, even
with the screwy mounted drive. This leads me to continue to point at
the network.<br>
        <br>
Anyhow, let me know if anything seems weird on the OpenMPI
communication subroutines. I don't have any numbers to lean on from
experience.<br>
        <blockquote
 style="border-left: 2px solid rgb(16, 16, 255); margin-left: 5px; padding-left: 5px;">From:
David Zhang <a class="moz-txt-link-rfc2396E" href="mailto:solarbikedz@gmail.com">&lt;solarbikedz@gmail.com&gt;</a><br>
Subject: Re: [OMPI users] OpenMPI Hangs, No Error<br>
To: "Open MPI Users" <a class="moz-txt-link-rfc2396E" href="mailto:users@open-mpi.org">&lt;users@open-mpi.org&gt;</a><br>
Date: Tuesday, July 13, 2010, 9:42 PM<br>
          <br>
          <div id="yiv365870172">Like Ralph says, the slow down may not
be coming from the kernel, but rather on waiting for messages. &nbsp;What
MPI send/recv commands are you using?<br>
          <br>
          <div class="gmail_quote">On Tue, Jul 13, 2010 at 11:53 AM,
Ralph Castain <span dir="ltr">&lt;<a rel="nofollow"
 ymailto="mailto:rhc@open-mpi.org" target="_blank"
 href="/mc/compose?to=rhc@open-mpi.org">rhc@open-mpi.org</a>&gt;</span>
wrote:<br>
          <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
            <div style="">I'm afraid that having 2 cores on a single
machine will always outperform having 1 core on each machine if any
communication is involved.
            <div><br>
            </div>
            <div>The most likely thing that is happening is that OMPI
is polling waiting for messages to arrive. You might look closer at
your code to try and optimize it better so that number-crunching can
get more attention.</div>
            <div>
            <div class="h5">
            <div><br>
            <div>
            <div>On Jul 13, 2010, at 12:22 PM, Robert Walters wrote:</div>
            <blockquote type="cite">
              <table border="0" cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <td
 style="font-family: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-size: inherit; line-height: inherit; font-size-adjust: inherit; font-stretch: inherit;"
 valign="top">Following up. The sysadmin opened ports for machine to
machine communication and OpenMPI is running successfully with no
errors in connectivity_c, hello_c, or ring_c. Since, I have started to
implement our MPP software (finite element analysis) that we have, and
upon running a simple, 1 core on machine1, 1 core on machine2, job, I
notice it is considerably slower than a 2 core job on a single machine.
                    <br>
                    <br>
A quick look at top shows me kernel usage is almost twice what cpu
usage is! On a 16 core job, (8 cores per node so 2 nodes total) test,
OpenMPI was consuming ~65% of the cpu for kernel related items rather
than number-crunching related items...Granted, we are running on GigE,
but this is a finite element code we are running with no heavy data
transfer within it. I'm looking into benchmarking tools, but my
sysadmin is not very open to installing third party softwares. Do you
have any suggestions for what I can use that would be "big name" or
guaranteed safe tools I can use to figure out what's causing the hold
up with all the kernel usage? I'm pretty sure its network traffic but I
have no way of telling (as far as I know because I'm not a Linux whiz)
with the standard tools in RHEL.<br>
                    </td>
                  </tr>
                </tbody>
              </table>
              <br>
            </blockquote>
            </div>
            </div>
            </div>
            </div>
            </div>
          </blockquote>
          </div>
          </div>
        </blockquote>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13637.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Previous message:</strong> <a href="13635.php">Eugene Loh: "[OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]"</a>
<li><strong>In reply to:</strong> <a href="13629.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13640.php">Robert Walters: "Re: [OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]"</a>
<li><strong>Reply:</strong> <a href="13640.php">Robert Walters: "Re: [OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]"</a>
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
