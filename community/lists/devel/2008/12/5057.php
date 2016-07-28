<?
$subject_val = "Re: [OMPI devel] shared-memory allocations";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 20:17:21 2008" -->
<!-- isoreceived="20081213011721" -->
<!-- sent="Fri, 12 Dec 2008 17:21:05 -0800" -->
<!-- isosent="20081213012105" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] shared-memory allocations" -->
<!-- id="49430E01.5030403_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C5682A26.2C512%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] shared-memory allocations<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 20:21:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5058.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="5056.php">George Bosilca: "Re: [OMPI devel] BML problem?"</a>
<li><strong>In reply to:</strong> <a href="5054.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5060.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Reply:</strong> <a href="5060.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
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
Richard Graham wrote:
<blockquote cite="midC5682A26.2C512%25rlgraham@ornl.gov" type="cite">
  <title>Re: [OMPI devel] shared-memory allocations</title>
  <font face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">The memory allocation is intended to take
into account that two separate procs may be touching the same memory,
so the intent is to reduce cache conflicts (false sharing)</span></font></blockquote>
Got it.&nbsp; I'm totally fine with that.&nbsp; Separate cachelines.<br>
<blockquote cite="midC5682A26.2C512%25rlgraham@ornl.gov" type="cite"><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">and put the memory close to the process that
is using it.</span></font></blockquote>
Problematic concept, but ... okay, I'll read on.<br>
<blockquote cite="midC5682A26.2C512%25rlgraham@ornl.gov" type="cite"><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">When the code first went in, there was no
explicit memory affinity implemented, so first-touch was relied on to
get the memory in the &#8220;correct&#8221; location.<br>
  </span></font></blockquote>
Okay.<br>
<blockquote cite="midC5682A26.2C512%25rlgraham@ornl.gov" type="cite"><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">If I remember correctly, the head and the
tail each are written to be a different process, and is where the
pointers and counters used to manage the fifo are maintained. &nbsp;They
need to be close to the writer, and on separate cache lines, to avoid
false sharing.</span></font></blockquote>
Why close to the writer (versus reader)?<br>
<br>
Anyhow, so far as I can tell, the 2d structure ompi_fifo_t
fifo[receiver][sender] is organized by receiver.&nbsp; That is, the main
ompi_fifo_t FIFO data structures are local to receivers.<br>
<br>
But then, each FIFO is initialized (that is, circular buffers and
associated allocations) by senders.&nbsp; E.g.,
<a class="moz-txt-link-freetext" href="https://svn.open-mpi.org/trac/ompi/browser/branches/v1.3/ompi/mca/btl/sm/btl_sm.c?version=19785#L537">https://svn.open-mpi.org/trac/ompi/browser/branches/v1.3/ompi/mca/btl/sm/btl_sm.c?version=19785#L537</a><br>
In the call to ompi_fifo_init(), all the circular buffer (CB) data
structures are allocated by the sender.&nbsp; On different cachelines --
even different pages -- but all by the sender.<br>
<br>
Specifically, one accesses FIFO on the receiver side then follow
pointers to the senders side.&nbsp; Doesn't matter if you're talking head,
tail, or queue.<br>
<blockquote cite="midC5682A26.2C512%25rlgraham@ornl.gov" type="cite"><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">The queue itself is accessed most often by
the reader,</span></font></blockquote>
You mean because it's polling often, but writer writes only once?<br>
<blockquote cite="midC5682A26.2C512%25rlgraham@ornl.gov" type="cite"><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">so it should be closer to the reader.</span></font></blockquote>
Are there measurements to substantiate this?&nbsp; Seems to me that in a
cache-based system, a reader could poll on a remote location all it
wanted and there'd be traffic only if the cached copy were
invalidated.&nbsp; Conceivably, a transfer could go cache-to-cache and not
hit memory at all.&nbsp; I tried some measurements and found no difference
for any location -- close to writer, close to reader, or far from both.<br>
<blockquote cite="midC5682A26.2C512%25rlgraham@ornl.gov" type="cite"><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">I honestly don&#8217;t remember much about the
wrapper &#8211; would have to go back to the code to look at it. &nbsp;If we no
longer allow multiple fifo per pair, the wrapper layer can go away &#8211; it
is there to manage multiple fifo&#8217;s per pair.<br>
  </span></font></blockquote>
There is support for multiple circular buffers per FIFO.<br>
<blockquote cite="midC5682A26.2C512%25rlgraham@ornl.gov" type="cite"><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">As far as granularity of allocation &#8211; it
needs to be large enough to accommodate the smallest shared memory
hierarchy, so I suppose in the most general case this may be the
tertiary cache ?<br>
  </span></font></blockquote>
I don't get this.&nbsp; I understand how certain things should be on
separate cachelines.&nbsp; Beyond that, we just figure out what should be
local to a process and allocate all those things together.&nbsp; That takes
us from 3*n*n allocations (and pages) to just n of them.<br>
<blockquote cite="midC5682A26.2C512%25rlgraham@ornl.gov" type="cite"><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">No reason not to allocate objects that need
to be associated with the same process on the same page, as long as one
avoids false sharing.</span></font></blockquote>
Got it.<br>
<blockquote cite="midC5682A26.2C512%25rlgraham@ornl.gov" type="cite"><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">So seems like each process could have all of
it&#8217;s receive fifo&#8217;s on the same page, and these could share the also
with either the heads, or the tails of each queue.<br>
  </span></font></blockquote>
I will propose some specifics and run them by y'all.&nbsp; I think I know
enough to get started.&nbsp; Thanks for the comments.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5058.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="5056.php">George Bosilca: "Re: [OMPI devel] BML problem?"</a>
<li><strong>In reply to:</strong> <a href="5054.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5060.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Reply:</strong> <a href="5060.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
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
