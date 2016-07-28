<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  1 22:49:37 2006" -->
<!-- isoreceived="20060602024937" -->
<!-- sent="Thu, 01 Jun 2006 20:49:33 -0600" -->
<!-- isosent="20060602024933" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SIGSTOP and SIGCONT on orted" -->
<!-- id="447FA73D.5000102_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF94C42F_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-06-01 22:49:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0916.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Previous message:</strong> <a href="0914.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>In reply to:</strong> <a href="0914.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0916.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
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
From: <a class="moz-txt-link-abbreviated" href="mailto:devel-bounces@open-mpi.org">devel-bounces@open-mpi.org</a> 
[<a class="moz-txt-link-freetext" href="mailto:devel-bounces@open-mpi.org">mailto:devel-bounces@open-mpi.org</a>] On Behalf Of Pak Lui
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
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>

    </pre>
  </blockquote>
  <pre wrap=""><!---->
_______________________________________________
devel mailing list
<a class="moz-txt-link-abbreviated" href="mailto:devel@open-mpi.org">devel@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0916.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Previous message:</strong> <a href="0914.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>In reply to:</strong> <a href="0914.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0916.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
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
