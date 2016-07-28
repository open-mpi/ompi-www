<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 12:28:14 2009" -->
<!-- isoreceived="20091204172814" -->
<!-- sent="Fri, 04 Dec 2009 09:29:38 -0800" -->
<!-- isosent="20091204172938" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes" -->
<!-- id="4B194702.5000007_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="dcf611bd0912040923s593252a7u23db47cecea9f3c7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 12:29:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11418.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11416.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11416.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11418.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11418.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
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
Nicolas Bock wrote:
<blockquote
 cite="middcf611bd0912040923s593252a7u23db47cecea9f3c7@mail.gmail.com"
 type="cite">
  <div class="gmail_quote">On Fri, Dec 4, 2009 at 10:10, Eugene Loh <span
 dir="ltr">&lt;<a href="mailto:Eugene.Loh@sun.com">Eugene.Loh@sun.com</a>&gt;</span>
wrote:<br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
    <div bgcolor="#ffffff" text="#000000">Yield helped, but
not as effectively as one might have imagined.<br>
    </div>
  </blockquote>
  <div><br>
Yes, that's the impression I get as well, the master process might be
yielding, but it doesn't appear to be a lot. Maybe I should do this
differently to avoid this CPU usage in master. All I really want is to
execute another process somewhere on a free node in my MPI universe,
wait for it to be done and go on. From my limited understanding of MPI,
MPI_Comm_spawn() and MPI_Barrier() seemed just like what I needed, but
as I said, maybe there are other ways to do this.<br>
  </div>
  </div>
</blockquote>
I think you might observe a world of difference if the master issued
some non-blocking call and then intermixed MPI_Test calls with sleep
calls.&nbsp; You should see *much* more subservient behavior.&nbsp; As I
remember, putting such passivity into OMPI is on somebody's to-do list,
but just not very high.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11418.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11416.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11416.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11418.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11418.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
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
