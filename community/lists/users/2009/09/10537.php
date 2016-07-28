<?
$subject_val = "Re: [OMPI users] Job distribution on many-core NUMA system";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 18:22:16 2009" -->
<!-- isoreceived="20090901222216" -->
<!-- sent="Tue, 01 Sep 2009 15:23:01 -0700" -->
<!-- isosent="20090901222301" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Job distribution on many-core NUMA system" -->
<!-- id="4A9D9EC5.1090602_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1251488200.2175.1332138363_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Job distribution on many-core NUMA system<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-01 18:23:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10538.php">Marcus Herrmann: "[OMPI users] ompi_info segmentation fault with Snow Leopard"</a>
<li><strong>Previous message:</strong> <a href="10536.php">Dorian Krause: "Re: [OMPI users] problems with one sided MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10513.php">A. Austen: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
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
A. Austen wrote:
<blockquote
 cite="mid1251488200.2175.1332138363@webmail.messagingengine.com"
 type="cite">
  <pre wrap="">On Fri, 28 Aug 2009 10:16 -0700, "Eugene Loh" <a class="moz-txt-link-rfc2396E" href="mailto:Eugene.Loh@Sun.COM">&lt;Eugene.Loh@Sun.COM&gt;</a>
wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">Big topic and actually the subject of much recent discussion.  Here are 
a few comments:

1)  "Optimally" depends on what you're doing.  A big issue is making 
sure each MPI process gets as much memory bandwidth (and cache and other 
shared resources) as possible.   This would argue that processes 
*should* be spread over as many sockets as possible.  And, indeed, some 
MPIs default to this behavior.  It depends on lots of things, including 
how much of the machine you're using.
    </pre>
  </blockquote>
  <pre wrap=""><!---->Yes, you're right.  In my case, my processes within a single MPI job are
tightly coupled.  These jobs are communication-intensive, and if I want
to use as many of the processors as possible, then minimizing the
cross-processor communication should yield the best overall throughput. 
However, I see your point completely -- for an embarassingly parallel
problem, spreading the processes amongst the different sockets/memory
pools would probably give the best performance.
  </pre>
</blockquote>
The problem doesn't even need to be embarrassingly parallel.&nbsp; Many MPI
applications depend on computational performance, which is often
sensitive to memory bandwidth.&nbsp; This factor can be more important to
application performance than interprocess communications.<br>
<blockquote
 cite="mid1251488200.2175.1332138363@webmail.messagingengine.com"
 type="cite">
  <blockquote type="cite">
    <pre wrap="">2)  Currently (1.3.2), there is rankfile support.  This is probably a 
little bit more gruesome than you hope for.  E.g., if you have multiple 
jobs, you need to custom tailor the rankfile for each.
    </pre>
  </blockquote>
  <pre wrap=""><!---->So then it would seem like at least for now, I can get the behavior I
want by using rankfiles?
  </pre>
</blockquote>
Yes.&nbsp; Or, pick up the latest/greatest changes in the trunk
(bind-by-core, etc.), but there still is no multi-job awareness.<br>
<blockquote
 cite="mid1251488200.2175.1332138363@webmail.messagingengine.com"
 type="cite">
  <pre wrap="">Also, if I use the rankfile to distribute the processes, how about the
affinity issue?  Can I still use affinity and expect that it will apply
to the topology specified in the rankfile, or will all the MPI jobs
always try to bind to the same processors in sequence?
  </pre>
</blockquote>
If you use rankfiles, each MPI job will try to bind per the rankfile
specified for it.&nbsp; So, if you're willing to construct a different
rankfile for each job, you'll be set with rankfiles.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10538.php">Marcus Herrmann: "[OMPI users] ompi_info segmentation fault with Snow Leopard"</a>
<li><strong>Previous message:</strong> <a href="10536.php">Dorian Krause: "Re: [OMPI users] problems with one sided MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10513.php">A. Austen: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
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
