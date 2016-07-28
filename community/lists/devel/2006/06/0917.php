<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 09:12:05 2006" -->
<!-- isoreceived="20060602131205" -->
<!-- sent="Fri, 02 Jun 2006 07:12:00 -0600" -->
<!-- isosent="20060602131200" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SIGSTOP and SIGCONT on orted" -->
<!-- id="44803920.9030002_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF94C4D7_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-02 09:12:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0918.php">Pak Lui: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Previous message:</strong> <a href="0916.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>In reply to:</strong> <a href="0916.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0918.php">Pak Lui: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Reply:</strong> <a href="0918.php">Pak Lui: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
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
<br>
<br>
Jeff Squyres (jsquyres) wrote:
<blockquote
 cite="midC835B9C9CB0F1C4E9DA48913C9E8F8AF94C4D7@xmb-rtp-215.amer.cisco.com"
 type="cite">
  <meta http-equiv="Content-Type" content="text/html; ">
  <meta content="MSHTML 6.00.2900.2883" name="GENERATOR">
  <div><span class="184592412-02062006"><font color="#0000ff"
 face="Arial" size="2">Just curious -- what's difficult about this?&nbsp;
SIGTSTP and SIGCONT can be caught; is there something preventing us
from sending&nbsp;"stop" and "continue" messages (just like we send "die"
messages)?</font></span></div>
</blockquote>
Nothing preventing it at all. The problem lies in what you do when you
receive it. Take the example of a launch that used orted daemons. We
could pass the "stop" or "continue" message to the orted, which could
signal its child processes (i.e., the application processes on that
node) with the appropriate signal. That would stop/continue the child
process just fine - but what about communications that are still
in-progress?? Bad news.<br>
<br>
So instead you could pass the application process a "stop" message. The
process could then "quiet" the MPI-based messaging system, reply back
to the orted that all is now quiet, and then the orted could send the
appropriate OS-level signal so the process would truly "stop".
"Continue" is much easier, of course - there is no "quieting" to be
done, so the orted could just issue a "continue" signal to its children.<br>
<br>
Great - except we still haven't "stopped" the run-time! What happens if
the registry is in the middle of a notification process (e.g., we hit a
stage gate and all the notification messages are being sent, or someone
is in the middle of a put that causes a set of subscriptions to fire
and send out messages - that may in turn cause additional action on the
remote host)? What about messages being routed through the orteds (once
we get the routing system in-place)?<br>
<br>
Well, we now could go through a similar process to first "quiet" the
run-time itself. We would have to ensure that every subsystem completed
its on-going operation and then "stopped". We would of course have to
tell all the remote processes to "stop" first so that new requests
would quit coming in, or else this process would never complete. Note
that this means the remote processes would have to receive and "log"
any notifications that come in from the registry after we tell the
process to "stop", but could not take action on those notices until we
"continue" the process.<br>
<br>
So now we have the MPI and run-time layers "quiet". We send a message
to the remote orteds indicating they should go ahead and send their
local application processes an OS-level signal to "stop" so that the OS
knows not to spend cycles on them. Unfortunately, we cannot do the same
for the orteds themselves, so that means that the orteds remain "awake"
and operating, but they can just "spin".<br>
<br>
All sounds fine. Now all we have to deal with are: all the race
conditions inherent in what I just described; how to deal with receipt
of asynchronous notifications when we've already been told to stop; the
scenarios where we don't have orted daemons on every node; how to
stop/restart major MPI collectives in mid operation; etc. etc.<br>
<br>
Not saying it cannot be done - just indicating that there were reasons
why it wasn't initially done other than "we just didn't get around to
it". <span class="moz-smiley-s1"><span> :-) </span></span><br>
<br>
<br>
<blockquote
 cite="midC835B9C9CB0F1C4E9DA48913C9E8F8AF94C4D7@xmb-rtp-215.amer.cisco.com"
 type="cite">
  <div><span class="184592412-02062006"></span>&nbsp;</div>
  <div><span class="184592412-02062006"><font color="#0000ff"
 face="Arial" size="2">(If I had to guess, I think the user is asking
because some other MPI implementations implement this kind of behavior)</font></span></div>
  <div><span class="184592412-02062006"></span>&nbsp;</div>
  <div><span class="184592412-02062006"><font color="#0000ff"
 face="Arial" size="2">Thanks!</font></span></div>
  <br>
  <blockquote dir="ltr"
 style="border-left: 2px solid rgb(0, 0, 255); padding-left: 5px; margin-left: 5px; margin-right: 0px;">
    <div class="OutlookMessageHeader" dir="ltr" align="left"
 lang="en-us">
    <hr tabindex="-1"> <font face="Tahoma" size="2"><b>From:</b>
<a class="moz-txt-link-abbreviated" href="mailto:devel-bounces@open-mpi.org">devel-bounces@open-mpi.org</a> [<a class="moz-txt-link-freetext" href="mailto:devel-bounces@open-mpi.org">mailto:devel-bounces@open-mpi.org</a>] <b>On
Behalf Of </b>Ralph Castain<br>
    <b>Sent:</b> Thursday, June 01, 2006 10:50 PM<br>
    <b>To:</b> Open MPI Developers<br>
    <b>Subject:</b> Re: [OMPI devel] SIGSTOP and SIGCONT on orted<br>
    </font><br>
    </div>
Actually, there were some implementation issues that might prevent this
from working and were the reason we didn't implement it right away. We
don't actually transmit the SIGTERM - we capture it in mpirun and then
propagate our own "die" command to the remote processes and daemons.
Fortunately, "die" is very easy to implement.<br>
    <br>
Unfortunately, "stop" and "continue" are much harder to implement from
inside of a process. We'll have to look at it, but this may not really
be feasible.<br>
    <br>
Ralph<br>
    <br>
    <br>
    <br>
Jeff Squyres (jsquyres) wrote:
    <blockquote
 cite="midC835B9C9CB0F1C4E9DA48913C9E8F8AF94C42F@xmb-rtp-215.amer.cisco.com"
 type="cite">
      <pre wrap="">The main reason that it doesn't work is because we didn't do any thing
to make it work.  :-)

Specifically, mpirun is not intercepting SIGSTOP and passing it on to
the remote nodes.  There is nothing in the design or architecture that
would prevent this, but we just don't do it [yet].
 

  </pre>
      <blockquote type="cite">
        <pre wrap="">-----Original Message-----
From: <a class="moz-txt-link-abbreviated"
 href="mailto:devel-bounces@open-mpi.org">devel-bounces@open-mpi.org</a> 
[<a class="moz-txt-link-freetext"
 href="mailto:devel-bounces@open-mpi.org">mailto:devel-bounces@open-mpi.org</a>] On Behalf Of Pak Lui
Sent: Thursday, June 01, 2006 5:02 PM
To: <a class="moz-txt-link-abbreviated" href="mailto:devel@open-mpi.org">devel@open-mpi.org</a>
Subject: [OMPI devel] SIGSTOP and SIGCONT on orted

Hi,

I have a question on signals. Normally when I do a SIGTERM 
(control-C) 
on mpirun, the signal seems to get handled in a way that it 
broadcasts 
to the orted and processes on the execution hosts. However, 
when I send 
a SIGSTOP to mpirun, mpirun seems to have stopped, but the 
processes of 
the user executable continue to run. I guess I could hook up the 
debugger to mpirun and orted to see why they are handled differently, 
but I guess I anxious to hear about it here.

I am trying to see the behavior of SIGSTOP and SIGCONT for the 
suspension/resumption feature in N1GE. It'll try to use these 
signals to 
stop and continue both mpirun and orted (and its processes), but the 
signals (SIGSTOP and SIGCONT) don't seem to get propagated to 
the remote 
orted.

I can see there are some issues for implementing this feature on N1GE 
because the 'qrsh' interface does not send the signal to orted on the 
remote node, but only to 'mpirun'. I am trying to see how to 
work around 
this.

-- 

Thanks,

- Pak Lui
<a class="moz-txt-link-abbreviated" href="mailto:pak.lui@sun.com">pak.lui@sun.com</a>

_______________________________________________
devel mailing list
<a class="moz-txt-link-abbreviated" href="mailto:devel@open-mpi.org">devel@open-mpi.org</a>
<a class="moz-txt-link-freetext"
 href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>

    </pre>
      </blockquote>
      <pre wrap=""><!---->
_______________________________________________
devel mailing list
<a class="moz-txt-link-abbreviated" href="mailto:devel@open-mpi.org">devel@open-mpi.org</a>
<a class="moz-txt-link-freetext"
 href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>

  </pre>
    </blockquote>
  </blockquote>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0918.php">Pak Lui: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Previous message:</strong> <a href="0916.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>In reply to:</strong> <a href="0916.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0918.php">Pak Lui: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Reply:</strong> <a href="0918.php">Pak Lui: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
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
