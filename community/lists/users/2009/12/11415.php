<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 12:09:03 2009" -->
<!-- isoreceived="20091204170903" -->
<!-- sent="Fri, 04 Dec 2009 09:10:28 -0800" -->
<!-- isosent="20091204171028" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes" -->
<!-- id="4B194284.1040103_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="dcf611bd0912040726r76d29e33me5682cfa085f2dc2_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-12-04 12:10:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11416.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11414.php">Cupp, Matthew R: "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<li><strong>In reply to:</strong> <a href="11413.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11416.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11416.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
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
 cite="middcf611bd0912040726r76d29e33me5682cfa085f2dc2@mail.gmail.com"
 type="cite">
  <div class="gmail_quote">On Fri, Dec 4, 2009 at 08:21, Ralph Castain <span
 dir="ltr">&lt;<a href="mailto:rhc@open-mpi.org">rhc@open-mpi.org</a>&gt;</span>
wrote:<br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
    <div style="">You used it correctly. Remember, all that cpu number
is telling you is the percentage of use by that process. So bottom line
is: we are releasing it as much as we possibly can, but no other
process wants to use the cpu, so we go ahead and use it.
    <div><br>
    </div>
    <div>If any other process wanted it, then the percentage would drop
and the other proc would take some.</div>
    </div>
  </blockquote>
  </div>
When you say "the other proc would take some", how much do you expect
it to take? In my case above, the master process does not appear to
yield a whole lot. Can I reduce the polling frequency? I know that my
slave processes typically run several minutes to hours.<br>
</blockquote>
In my (limited) experience, the situation is a little of both.&nbsp; OMPI is
yielding.&nbsp; Yielding makes a difference only if someone else wants the
CPU.&nbsp; But even if someone else wants the CPU, OMPI in yield mode will
still be consuming cycles.&nbsp; It's like the way I drive a car.&nbsp; When I
approach a stop sign, I slow down -- really, officer, I do -- and if
there is cross traffic I let it go by ahead of me.&nbsp; But if there is no
cross traffic, I, ahem, proceed expediently.&nbsp; And, even if there is
cross traffic, their progress is still impacted by me -- heck, I'm all
for obeying stop signs and all, but I'm no doormat.&nbsp; OMPI processes can
yield, but they only check to yield every now and then.&nbsp; Between
checks, they are not timid processes, even if other processes are
waiting to run.&nbsp; I once had some numbers on this.&nbsp; Yield helped, but
not as effectively as one might have imagined.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11416.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11414.php">Cupp, Matthew R: "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<li><strong>In reply to:</strong> <a href="11413.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11416.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11416.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
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
