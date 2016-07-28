<?
$subject_val = "Re: [OMPI users] Question about MPI_Barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 21 13:06:53 2010" -->
<!-- isoreceived="20101021170653" -->
<!-- sent="Thu, 21 Oct 2010 10:06:41 -0700" -->
<!-- isosent="20101021170641" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about MPI_Barrier" -->
<!-- id="4CC07321.3020409_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTika39DisSnkDd=nKLHtcAFeaiTHcX2Y5PMGDzKV_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about MPI_Barrier<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-21 13:06:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14539.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="14537.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="14537.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14539.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="14539.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
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
My main point was that, while what Jeff said about the short-comings of
calling timers after Barriers was true, I wanted to come in defense of
this timing strategy.&nbsp; Otherwise, I was just agreeing with him that it
seems implausible that commenting out B should influence the timing of
A, but I'm equally clueless what that real issue is.&nbsp; I have seen cases
where the presence or absence of code that isn't executed can influence
timings (perhaps because code will come out of the instruction cache
differently), but all that is speculation.&nbsp; It's all a guess that what
you're really seeing isn't really MPI related at all.<br>
<br>
Storm Zhang wrote:
<blockquote
 cite="midAANLkTika39DisSnkDd=nKLHtcAFeaiTHcX2Y5PMGDzKV@mail.gmail.com"
 type="cite">Hi, Eugene, You said:<br>
" The bottom line here is that from a causal point of view it would
seem that B should not impact the timings. &nbsp;Presumably, some other
variable is actually responsible here."&nbsp; Could you explain it in more
details for the second sentence. Thanks a lot.<br>
  <br>
  <div class="gmail_quote">On Thu, Oct 21, 2010 at 9:58 AM, Eugene Loh <span
 dir="ltr">&lt;<a href="mailto:eugene.loh@oracle.com">eugene.loh@oracle.com</a>&gt;</span>
wrote: <br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
    <div class="im">Jeff Squyres wrote:<br>
    <br>
    <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">MPI::COMM_WORLD.Barrier();<br>
if(rank == master) t1 = clock();<br>
"code A";<br>
MPI::COMM_WORLD.Barrier();<br>
if(rank == master) t2 = clock();<br>
"code B";<br>
      <br>
Remember that the time that individual processes exit barrier is not
guaranteed to be uniform (indeed, it most likely *won't* be the same).
&nbsp;MPI only guarantees that a process will not exit until after all
processes have entered. &nbsp;So taking t2 after the barrier might be a bit
misleading, and may cause unexpected skew.<br>
&nbsp;<br>
    </blockquote>
    </div>
The barrier exit times are not guaranteed to be uniform, but in
practice this style of timing is often the best (or only practical)
tool one has for measuring the collective performance of a group of
processes.<br>
    <div class="im"><br>
    <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
Code B *probably* has no effect on time spent between t1 and t2. &nbsp;But
extraneous effects might cause it to do so -- e.g., are you running in
an oversubscribed scenario? &nbsp;And so on.<br>
&nbsp;<br>
    </blockquote>
    </div>
Right. &nbsp;The bottom line here is that from a causal point of view it
would seem that B should not impact the timings. &nbsp;Presumably, some
other variable is actually responsible here.</blockquote>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14539.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="14537.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="14537.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14539.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="14539.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
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
