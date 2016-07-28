<?
$subject_val = "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 14:50:05 2009" -->
<!-- isoreceived="20090406185005" -->
<!-- sent="Mon, 06 Apr 2009 11:49:14 -0700" -->
<!-- isosent="20090406184914" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac 1857: SM btl hangs when msg &amp;gt;=4k" -->
<!-- id="49DA4EAA.90609_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="453d39990904060500i6c98d1dbnd34cbc9cc583b129_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 14:49:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5797.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5795.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>In reply to:</strong> <a href="5795.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5797.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5797.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
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
This strikes me as very reasonable.&nbsp; That is, the PML should be fixed,
but to keep the issue from being a 1.3.2 blocker we should bump the
mpool_sm_min_size default back up again so that 1.3.2 is no worse than
1.3.1.<br>
<br>
I put back SVN r20944 with this change.&nbsp; osu_bw now runs (for me).<br>
<br>
I filed CMR 1870 to add this change to the 1.3.2 branch.&nbsp; I guess I
need a code review.&nbsp; Could someone review the code for r20944 and
annotate the CMR?&nbsp; It's a one-line/several-character change that bumps
the min default size from 0 to 64M.<br>
<br>
At this point, I assume 1857 is no longer a blocker, but in the long
term the PML should be fixed.<br>
<br>
Lenny Verkhovsky wrote:<br>
<blockquote
 cite="mid453d39990904060500i6c98d1dbnd34cbc9cc583b129@mail.gmail.com"
 type="cite">
  <div dir="ltr">
  <div>Changing default value is an easy fix. This fix will not add new
possible bugs/dead locks/pathes where noone has gone before on the PML
level.</div>
  <div>This fix can be added to Open MPI 1.3 that currently is blocked
due to OSU failure.</div>
  <div>&nbsp;</div>
  <div>PML fix can be done later (IMHO)<br>
  <br>
  </div>
  <div class="gmail_quote">On Sat, Apr 4, 2009 at 1:46 AM, Eugene Loh <span
 dir="ltr">&lt;<a href="mailto:Eugene.Loh@sun.com">Eugene.Loh@sun.com</a>&gt;</span>
wrote:<br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0px 0px 0px 0.8ex; padding-left: 1ex;">What's
next on this ticket? &nbsp;It's supposed to be a blocker. &nbsp;Again, the issue
is that osu_bw deluges a receiver with rendezvous messages, but the
receiver does not have enough eager frags to acknowledge them all. &nbsp;We
see this now that the sizing of the mmap file has changed and there's
less headroom to grow the free lists. &nbsp;Possible fixes are:<br>
    <br>
A) Just make the mmap file default size larger (though less overkill
than we used to have).<br>
B) Fix the PML code that is supposed to deal with cases like this. &nbsp;(At
least I think the PML has code that's intended for this purpose.)
    <div>
    <div class="h5"><br>
    <br>
Eugene Loh wrote:<br>
    <br>
    <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0px 0px 0px 0.8ex; padding-left: 1ex;">In
osu_bw, process 0 pumps lots of Isend's to process 1, and process 1 in
turn sets up lots of matching Irecvs. &nbsp;Many messages are in flight.
&nbsp;The question is what happens when resources are exhausted and OMPI
cannot handle so much in-flight traffic. &nbsp;Let's specifically consider
the case of long, rendezvous messages. &nbsp;There are at least two
situations.<br>
      <br>
1) When the sender no longer has any fragments (nor can grow its free
list any more), it queues a send up with add_request_to_send_pending()
and somehow life is good. &nbsp;The PML seems to handle this case
"correctly".<br>
      <br>
2) When the receiver -- specifically
mca_pml_ob1_recv_request_ack_send_btl() -- no longer has any fragments
to send ACKs back to confirm readiness for rendezvous, the
resource-exhaustion signal travels up the call stack to
mca_pml_ob1_recv_request_ack_send(), who does a
MCA_PML_OB1_ADD_ACK_TO_PENDING(). &nbsp;In short, the PML adds the ACK to
pckt_pending. &nbsp;Somehow, this code path doesn't work.<br>
      <br>
The reason we see the problem now is that I added "autosizing" of the
shared-memory area. &nbsp;We used to mmap *WAY* too much shared-memory for
small-np jobs. &nbsp;(Yes, that's a subjective statement.) &nbsp;Meanwhile, at
large-np, we didn't mmap enough and jobs wouldn't start. &nbsp;(Objective
statement there.) &nbsp;So, I added heuristics to size the shared area
"appropriately". &nbsp;The heuristics basically targetted the needs of
MPI_Init(). &nbsp;If you want fragment free lists to grow on demand after
MPI_Init(), you now basically have to bump mpool_sm_min_size up
explicitly.<br>
      <br>
I'd like feedback on a fix. &nbsp;Here are two options:<br>
      <br>
A) Someone (could be I) increases the default resources. &nbsp;E.g., we
could start with a larger eager free list. &nbsp;Or, I could change those
"heuristics" to allow some amount of headroom for free lists to grow on
demand. &nbsp;Either way, I'd appreciate feedback on how big to set these
things.<br>
      <br>
B) Someone (not I, since I don't know how) fixes the ob1 PML to handle
scenario 2 above correctly. <br>
    </blockquote>
    </div>
    </div>
  </blockquote>
  </div>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5797.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5795.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>In reply to:</strong> <a href="5795.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5797.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5797.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
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
