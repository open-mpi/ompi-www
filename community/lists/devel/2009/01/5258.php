<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 12:37:24 2009" -->
<!-- isoreceived="20090121173724" -->
<!-- sent="Wed, 21 Jan 2009 09:41:35 -0800" -->
<!-- isosent="20090121174135" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="49775E4F.8040203_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4976A7DF.5020201_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: sm Latency<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 12:41:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5259.php">Jeff Squyres: "[OMPI devel] VT problems on Debian"</a>
<li><strong>Previous message:</strong> <a href="5257.php">Ralph Castain: "[OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<li><strong>In reply to:</strong> <a href="5252.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5265.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5265.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=Big5" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Patrick Geoffray wrote:
<blockquote cite="mid4976A7DF.5020201@myri.com" type="cite">
  <pre wrap="">Eugene Loh wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">To recap:
1) The work is already done.
    </pre>
  </blockquote>
  <pre wrap=""><!---->How do you do "directed polling" with ANY_TAG ?</pre>
</blockquote>
Not sure I understand the question.&nbsp; So, maybe we start by being
explicitly about what we mean by "directed polling".<br>
<br>
Currently, the sm BTL has connection-based FIFOs.&nbsp; That is, for each
on-node sender/receiver (directed) pair, there is a FIFO.&nbsp; For a
receiver to receive messages, it needs to check its in-bound FIFOs.&nbsp; It
can check all in-bound FIFOs all the time to discover messages.&nbsp; By
"directed polling", I mean that if the user posts a receive from a
specified source, we poll only the FIFO on which that message is
expected.<br>
<br>
With that in mind, let's go back to your question.&nbsp; If a user posts a
receive with a specified source but a wildcard tag, we go to the
specified FIFO.&nbsp; We check the item on the FIFO's tail.&nbsp; We check if
this item is the one we're looking for.&nbsp; The "ANY_TAG" comes into play
only here, on the matching.&nbsp; It's unrelated to "directed polling",
which has to do only with the source process.<br>
<br>
Possibly, you meant to ask how one does directed polling with a
wildcard source MPI_ANY_SOURCE.&nbsp; If that was your question, the answer
is we punt.&nbsp; We report failure to the ULP, which reverts to the
standard code path.<br>
<br>
One alternative is, of course, the single receiver queue.&nbsp; I agree that
that alternative has many merits.&nbsp; To recap, however, the proposed
optimizations are already "in the bag" (implemented in a workspace) and
address some optimizations that are orthogonal to the "directed
polling" (and single receiver queue) approach.&nbsp; I think there are also
some uncertainties about the single recv queue approach, but I guess
I'll just have to prototype that alternative to explore those
uncertainties.<br>
<blockquote cite="mid4976A7DF.5020201@myri.com" type="cite">
  <pre wrap="">How do you ensure you check all incoming queues from time to time to prevent flow control (specially if the queues are small for scaling) ?</pre>
</blockquote>
There are a variety of choices here.&nbsp; Further, I'm afraid we ultimately
have to expose some of those choices to the user (MCA parameters or
something).<br>
<br>
Let's say some congestion is starting to build on some internal OMPI
resource.&nbsp; Arguably, we should do something to start relieving that
congestion.&nbsp; What if then the user code posts a rather specific request
(receive a message with a particular tag on a particular communicator
from a particular source) and with high urgency (blocking request... "I
ain't going anywhere until you give me what I'm asking for").&nbsp; A good
servant would drop whatever else s/he is doing to oblige the boss.<br>
<br>
So, let's say there's a standard MPI_Recv.&nbsp; Let's say there's also some
congestion starting to build.&nbsp; What should the MPI implementation do?&nbsp;
Alternatives include:<br>
A) If the receive can be completed "immediately", then do so and return
control to the user as soon as possible.<br>
B) If the receive cannot be completed "immediately", fill your wait
time with general housekeeping like relieving congested resources.<br>
C) Figure out what's on the critical path and do it.<br>
<br>
At least A should be available for the user.&nbsp; Probably also B, and the
RFC proposal allows for that by rolling over to the traditional code
path when the request cannot be satisfied "immediately".&nbsp; (That said,
there are different definitions of "immediately" and different ways of
implementing all this.)<br>
<br>
The definitions I've used for "immediately" include:<br>
*) We know which FIFO to check.<br>
*) The message is the next item on that FIFO.<br>
*) The message is being delivered entirely in one chunk.<br>
<br>
I am also going to add a time-out.<br>
<br>
One could also mix a little bit of general polling in.&nbsp;
(Unfortunately), there is no end to all the artful tuning one could do.<br>
<blockquote cite="mid4976A7DF.5020201@myri.com" type="cite">
  <pre wrap="">What about the one-sided that Brian mentioned where there is no corresponding receive to tell you which queue to poll ?
  </pre>
</blockquote>
I appreciate Jeff's explanation, but I still don't understand this
100%.&nbsp; The receive side looks to see if it can handle the request
"immediately".&nbsp; It checks to see if the next item on the specified FIFO
is "the one".&nbsp; If it is, it completes the request.&nbsp; If not, it returns
control to the ULP, who rolls over to the traditional code path.<br>
<br>
I don't 100% know how to handle the concern you/Brian raise, but I have
the PML passing the flag MCA_PML_OB1_HDR_TYPE_MATCH into the BTL,
saying "this is the kind of message to look for".&nbsp; Does this address
the concern?&nbsp; The intent is that if it encounters something it doesn't
know how to handle, it reverts to the traditional receive code path.<br>
<blockquote cite="mid4976A7DF.5020201@myri.com" type="cite">
  <pre wrap="">If you want to handle all the constraints, a single-queue model is much less work in the end, IMHO.
  </pre>
</blockquote>
Again, important speedups appear to be achievable if one bypasses the
PML receive-request data structure.&nbsp; So, we're talking about
optimizations that are orthogonal to the single-queue issue.<br>
<blockquote cite="mid4976A7DF.5020201@myri.com" type="cite">
  <blockquote type="cite">
    <pre wrap="">2) The single-queue model addresses only one of the RFC's issues.
    </pre>
  </blockquote>
  <pre wrap=""><!---->The single-queue model addresses not only the latency overhead when
scaling, but also the exploding memory footprint.</pre>
</blockquote>
Right.&nbsp; Very attractive.&nbsp; I'm not ruling out the single-queue model.<br>
<blockquote cite="mid4976A7DF.5020201@myri.com" type="cite">
  <pre wrap="">By experience, the linear overhead of polling N queues very quickly
become greater than all the optimizations you can do on the send side.
  </pre>
</blockquote>
Yes, and you could toss the receive-side optimizations as well.&nbsp; So,
one could say, "Our np=2 latency remains 2x slower than Scali's, but at
least we no longer have that hideous scaling with large np."&nbsp; Maybe
that's where we want to end up.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5259.php">Jeff Squyres: "[OMPI devel] VT problems on Debian"</a>
<li><strong>Previous message:</strong> <a href="5257.php">Ralph Castain: "[OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<li><strong>In reply to:</strong> <a href="5252.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5265.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5265.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
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
