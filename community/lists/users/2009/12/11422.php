<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 14:08:44 2009" -->
<!-- isoreceived="20091204190844" -->
<!-- sent="Fri, 04 Dec 2009 11:10:14 -0800" -->
<!-- isosent="20091204191014" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes" -->
<!-- id="4B195E96.4070105_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="dcf611bd0912040958r26657541q932bb2cf7a5b2357_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-12-04 14:10:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11423.php">Jeremiah Willcock: "[OMPI users] Typo in mpirun man page"</a>
<li><strong>Previous message:</strong> <a href="11421.php">Jeff Squyres: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>In reply to:</strong> <a href="11418.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11425.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11425.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
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
 cite="middcf611bd0912040958r26657541q932bb2cf7a5b2357@mail.gmail.com"
 type="cite">On Fri, Dec 4, 2009 at 10:29, Eugene Loh <span dir="ltr">&lt;<a
 href="mailto:Eugene.Loh@sun.com">Eugene.Loh@sun.com</a>&gt;</span>
wrote:<br>
  <div class="gmail_quote">
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
    <div bgcolor="#ffffff" text="#000000">I think you might observe a
world of difference if the master issued
some non-blocking call and then intermixed MPI_Test calls with sleep
calls.&nbsp; You should see *much* more subservient behavior.&nbsp; As I
remember, putting such passivity into OMPI is on somebody's to-do list,
but just not very high.<br>
    </div>
  </blockquote>
  <div><br>
could you give me more details?</div>
  </div>
</blockquote>
Nope, sorry.&nbsp; I'm going to drop out here.&nbsp; The basic idea was something
like:<br>
<br>
MPI_Irecv();<br>
while ( !flag ) {<br>
&nbsp; nanosleep(...);<br>
&nbsp; MPI_Test(...&amp;flag...);<br>
}<br>
<br>
but I was hoping to "leave the rest to the reader".<br>
<blockquote
 cite="middcf611bd0912040958r26657541q932bb2cf7a5b2357@mail.gmail.com"
 type="cite">
  <div class="gmail_quote">
  <div>I can't figure out how to do this. I could see that one way to
implement what you are describing is:<br>
  <br>
in slave.c:<br>
MPI_Send() to rank 0<br>
  <br>
in master.c<br>
MPI_IRecv() from the spawned processes<br>
while (1) {&nbsp; MPI_Test(); }<br>
  <br>
I can't figure out how to find the ranks that MPI_Comm_spawn() used.
What's the source argument in MPI_IRecv() supposed to be?<br>
  </div>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11423.php">Jeremiah Willcock: "[OMPI users] Typo in mpirun man page"</a>
<li><strong>Previous message:</strong> <a href="11421.php">Jeff Squyres: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>In reply to:</strong> <a href="11418.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11425.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11425.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
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
