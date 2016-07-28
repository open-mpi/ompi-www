<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 31 09:04:28 2007" -->
<!-- isoreceived="20070531130428" -->
<!-- sent="Thu, 31 May 2007 07:04:23 -0600" -->
<!-- isosent="20070531130423" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Why the HNP gets so big..." -->
<!-- id="C28423F7.9526%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-31 09:04:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1615.php">Ralph Campbell: "[OMPI devel] request help debugging openmpi on openib/ipath"</a>
<li><strong>Previous message:</strong> <a href="1613.php">George Bosilca: "Re: [OMPI devel] ORTE registry patch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Scaling tests over the last few months have all shown a behavior that has
<br>
elicited significant comment: namely, that the HNP is observed to grow to
<br>
multiple gigabytes in size for runs involving several thousand processes.
<br>
This represents a peak size that declines to a much smaller footprint once
<br>
the application has been launched.
<br>
<p>Given the degree of concern expressed over this behavior, I thought I would
<br>
once again provide the explanation for it. I believe I have sent emails out
<br>
about this before, but I know it can be difficult for people who don't work
<br>
regularly with OpenRTE to remember those notes after time has passed.
<br>
<p>The observed memory spike is caused by the way we handle the STG1 stage gate
<br>
message sent to all processes. There are two contributing factors that
<br>
specifically control this behavior on the current Open MPI releases and
<br>
development trunk:
<br>
<p>1. we send stage gate messages directly to each process. Thus, for N
<br>
processes, there are N messages queued for transmission at the HNP; and
<br>
<p>2. we use non-blocking RML/OOB send commands to do the communication. Note
<br>
that we used to do blocking sends, but for speed purposes converted over to
<br>
non-blocking sends late last year. This is a critical point to understanding
<br>
the behavior, as you'll see in a moment.
<br>
<p>The key to the memory spike lies in knowing that the RML/OOB actually
<br>
*copies* the buffer given to it for transmission, then inserts the comm
<br>
request into its queue for transmission as network access permits. When we
<br>
used blocking sends, we only had *one* message in the queue at any time -
<br>
hence, the memory footprint of the HNP remained small. However, when we
<br>
converted to non-blocking sends, we have N messages in the queue. Thus,
<br>
there are now *N* copies of the message buffer being made inside the HNP!
<br>
<p>As transmission of each message is completed, the corresponding copy of the
<br>
data is released. Hence, the HNP's footprint gradually reduces as the
<br>
communication is completed. Once the STG1 stage gate is passed, the
<br>
footprint is back to a relatively small number.
<br>
<p>One could question why the copy is being done at all. Well, when the
<br>
original author of the RML/OOB wrote that code, he was concerned that
<br>
callers might not retain the provided message buffer until *after* the
<br>
communication had been completed. This was particularly of concern for
<br>
non-blocking sends since the send call immediately returns, but the message
<br>
may not actually be sent for some unknowable time into the future.
<br>
<p>In addition, there are numerous places in the code where someone will create
<br>
a single message buffer and then send it to multiple recipients using
<br>
non-blocking sends. This buffer is then released once the send commands have
<br>
been *issued* - but that doesn't mean that the messages have actually been
<br>
sent! Of course, we could require that the buffer be retained until the
<br>
communication is complete, but that would add complexity to the code in the
<br>
caller's routine - and we opted to avoid that necessity.
<br>
<p>Of course, we can revisit these design decisions in light of how we are
<br>
currently using the system. Perhaps we *should* require the caller to
<br>
maintain the buffer throughout the communication, and force the caller to
<br>
deal with the associated code complexity.
<br>
<p>Note that the obvious solution of just creating a new buffer for each send
<br>
and then releasing it in the corresponding callback function would solve
<br>
nothing - we would just be moving the copy function from the RML/OOB to the
<br>
caller's function. I have seen this done in a few places in the code, but
<br>
all that did was cause us to generate *two* copies of each message. So we
<br>
would have to rely on the caller to be clever about buffer management to
<br>
make any such change work.
<br>
<p>Anyway, that is why the HNP is behaving as observed. Please note that this
<br>
will automatically improve once we turn &quot;on&quot; the more advanced xcast modes
<br>
as the number of messages being queued at the HNP will dramatically decline.
<br>
It won't change how the RML/OOB work, but it will reduce the footprint
<br>
issue.
<br>
<p>I hope that helps clarify and, perhaps, generate some useful thoughts on
<br>
alternative approaches.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1615.php">Ralph Campbell: "[OMPI devel] request help debugging openmpi on openib/ipath"</a>
<li><strong>Previous message:</strong> <a href="1613.php">George Bosilca: "Re: [OMPI devel] ORTE registry patch"</a>
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
