<?
$subject_val = "[OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 14 12:14:14 2010" -->
<!-- isoreceived="20100714161414" -->
<!-- sent="Wed, 14 Jul 2010 09:16:21 -0700" -->
<!-- isosent="20100714161621" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]" -->
<!-- id="4C3DE2D5.6080604_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="604928.66255.qm_at_web80806.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2010-07-14 12:16:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13636.php">Eugene Loh: "[OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]"</a>
<li><strong>Previous message:</strong> <a href="13634.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13634.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
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
I took the liberty of changing the subject line.<br>
<br>
Yes, MPI_Barrier waits until all other processes in the communicator
catch up.&nbsp; So, long barrier time usually indicates there is some "load
imbalance"... one or more processes reach the synchronization point
well before the others.&nbsp; Other communications might be instantaneous.&nbsp;
E.g., a "send" can take a short time, but the corresponding receive
might be long (if the receiver was blocking on the message well before
it was sent) and associated barriers might also show long waits.<br>
<br>
But, there is presumably a lot more information available at your
finger tips.&nbsp; Try clicking on the MPI Timeline tab to see a timeline of
what happened.&nbsp; You can drag the mouse horizontally to zoom in on a
time interval.&nbsp; You should be able to see the load imbalances that are
causing your long(ish) barrier times.<br>
<br>
Or, you stay on the "MPI Chart" tab where you were already.&nbsp; Drag
vertically on the "MPI_Barrier" bar and click on the "Filter" glyph.&nbsp;
This will filter out all data except for MPI_Barrier calls.&nbsp; Then, go
to that timeline and the Barrier calls should stick out.&nbsp; Or, stick
with the MPI Chart and change the y axis to be "process" (or rank or
something, I forget offhand what it's called).&nbsp; Since you've filtered
out everything but barrier, it should show you time spent per process
but only for barrier calls.&nbsp; This will show you if there is an overall
imbalance in who is spending barrier time.&nbsp; The processes with the most
barrier time are those reaching the barriers first... the processes
with least computational work (or in any case fastest for some other
reason).&nbsp; The processese with the least barrier time are the problem:&nbsp;
they're the processes holding everyone else up.<br>
<br>
On the MPI Timeline tab, there are also message lines.&nbsp; They'll help
you understand the relationship between fast MPI_Sends and long
MPI_Recvs... presumably, one process waits on another.&nbsp; The message
gets sent quickly, but it's sent "late".<br>
<br>
I don't know LS-DYNA, so I don't know what opportunities you'll have
to, for example, balance loads better for better performance.&nbsp; But,
synchronization delays in the execution due to load imbalances may be
more of a problem than the performance of the data transfers.<br>
<br>
<br>
, you can go to the right-hand panel and construct other charts.&nbsp; E.g.,
"Functions" "2d Chart" X: "<br>
<br>
Robert Walters wrote:
<blockquote cite="mid604928.66255.qm@web80806.mail.mud.yahoo.com"
 type="cite">
  <table border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td
 style="font-family: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-size: inherit; line-height: inherit; font-size-adjust: inherit; font-stretch: inherit;"
 valign="top">Also, I finally got some graphical output from <span
 style="border-bottom: 2px dotted rgb(54, 99, 136); cursor: pointer;"
 class="yshortcuts" id="lw_1279121278_0">Sun Studio</span> Analyzer.<br>
        <br>
I see MPI_Recv and MPI_Wait taking a lot of time, but I would think
that is ok, this program does heavy number crunching and I would expect
it to need to Wait or wait to Receive very often since there is a
decent amount of time between communications. Is this the correct
assumption?<br>
        <br>
What does catch my eye is MPI_Barrier takes up a significant chunk of
around 10%. I read that MPI_Barrier blocks the caller until all
processes have called? Perhaps there is something fishy there that it
is taking an awful long time for processes to call each other although
MPI_Send is not taking very long so it makes me feel more comfortable
about network communication.<br>
        <br>
Anyways, please have a look and let me know what you think could be the
issue.<br>
        <br>
Regards,<br>
        <span
 style="background: transparent none repeat scroll 0%; cursor: pointer; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"
 class="yshortcuts" id="lw_1279121278_1">Robert Walters</span><br>
        <br>
--- On <b>Tue, 7/13/10, Robert Walters <i><a class="moz-txt-link-rfc2396E" href="mailto:raw19896@yahoo.com">&lt;raw19896@yahoo.com&gt;</a></i></b>
wrote:<br>
        <blockquote
 style="border-left: 2px solid rgb(16, 16, 255); margin-left: 5px; padding-left: 5px;"><br>
From: Robert Walters <a class="moz-txt-link-rfc2396E" href="mailto:raw19896@yahoo.com">&lt;raw19896@yahoo.com&gt;</a><br>
Subject: Re: [OMPI users] OpenMPI Hangs, No Error<br>
To: "Open MPI Users" <a class="moz-txt-link-rfc2396E" href="mailto:users@open-mpi.org">&lt;users@open-mpi.org&gt;</a><br>
Date: Tuesday, July 13, 2010, 10:42 PM<br>
          <br>
          <div id="yiv1186663845">
          <table border="0" cellpadding="0" cellspacing="0">
            <tbody>
              <tr>
                <td
 style="font-family: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-size: inherit; line-height: inherit; font-size-adjust: inherit; font-stretch: inherit;"
 valign="top">Naturally, a forgotten attachment.<br>
                <br>
An to edit that, it was compiled to be used with OpenMPI 1.4.1, but as
I understand, 1.4.2 is just a bug fix of 1.4.1.<br>
                <br>
--- On <b>Tue, 7/13/10, Robert Walters <i><a class="moz-txt-link-rfc2396E" href="mailto:raw19896@yahoo.com">&lt;raw19896@yahoo.com&gt;</a></i></b>
wrote:<br>
                <blockquote
 style="border-left: 2px solid rgb(16, 16, 255); margin-left: 5px; padding-left: 5px;"><br>
From: Robert Walters <a class="moz-txt-link-rfc2396E" href="mailto:raw19896@yahoo.com">&lt;raw19896@yahoo.com&gt;</a><br>
Subject: Re: [OMPI users] OpenMPI Hangs, No Error<br>
To: "Open MPI Users" <a class="moz-txt-link-rfc2396E" href="mailto:users@open-mpi.org">&lt;users@open-mpi.org&gt;</a><br>
Date: Tuesday, July 13, 2010, 10:38 PM<br>
                  <br>
                  <div id="yiv1911659308">
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
                        <br>
Sorry this e-mail was long. Thank you again for all of your help.<br>
                        <br>
Regards,<br>
Robert Walters<br>
                        <br>
--- On <b>Tue, 7/13/10, David Zhang <i><a class="moz-txt-link-rfc2396E" href="mailto:solarbikedz@gmail.com">&lt;solarbikedz@gmail.com&gt;</a></i></b>
wrote:<br>
                        <blockquote
 style="border-left: 2px solid rgb(16, 16, 255); margin-left: 5px; padding-left: 5px;"><br>
From: David Zhang <a class="moz-txt-link-rfc2396E" href="mailto:solarbikedz@gmail.com">&lt;solarbikedz@gmail.com&gt;</a><br>
Subject: Re: [OMPI users] OpenMPI Hangs, No Error<br>
To: "Open MPI Users" <a class="moz-txt-link-rfc2396E" href="mailto:users@open-mpi.org">&lt;users@open-mpi.org&gt;</a><br>
Date: Tuesday, July 13, 2010, 9:42 PM<br>
                          <br>
                          <div id="yiv365870172">Like Ralph says, the
slow down may not be coming from the kernel, but rather on waiting for
messages. &nbsp;What MPI send/recv commands are you using?<br>
                          <br>
                          <div class="gmail_quote">On Tue, Jul 13, 2010
at 11:53 AM, Ralph Castain <span dir="ltr">&lt;<a rel="nofollow">rhc@open-mpi.org</a>&gt;</span>
wrote:<br>
                          <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
                            <div style="">I'm afraid that having 2
cores on a single machine will always outperform having 1 core on each
machine if any communication is involved.
                            <div><br>
                            </div>
                            <div>The most likely thing that is
happening is that OMPI is polling waiting for messages to arrive. You
might look closer at your code to try and optimize it better so that
number-crunching can get more attention.</div>
                            <div><br>
                            </div>
                            <div>Others on this list are far more
knowledgeable than I am about doing such things, so I'll let them take
it from here. Glad it is now running!</div>
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
                  </div>
                  <div class="plainMail"><a rel="nofollow"></a><br>
                  <a rel="nofollow" target="_blank"
 href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></div>
                </blockquote>
                </td>
              </tr>
            </tbody>
          </table>
          <br>
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
<li><strong>Next message:</strong> <a href="13636.php">Eugene Loh: "[OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]"</a>
<li><strong>Previous message:</strong> <a href="13634.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13634.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
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
