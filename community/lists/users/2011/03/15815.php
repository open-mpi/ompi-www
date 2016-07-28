<?
$subject_val = "Re: [OMPI users] multi-threaded programming";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 14:17:50 2011" -->
<!-- isoreceived="20110308191750" -->
<!-- sent="Tue, 08 Mar 2011 11:17:39 -0800" -->
<!-- isosent="20110308191739" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multi-threaded programming" -->
<!-- id="4D7680D3.6090305_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinoaZdueWa+SzHExzkDJ=sh67iU8yGKvmjP9+wq_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] multi-threaded programming<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 14:17:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15816.php">Jeff Squyres: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Previous message:</strong> <a href="15814.php">Durga Choudhury: "Re: [OMPI users] multi-threaded programming"</a>
<li><strong>In reply to:</strong> <a href="15814.php">Durga Choudhury: "Re: [OMPI users] multi-threaded programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15843.php">Jeff Squyres: "Re: [OMPI users] multi-threaded programming"</a>
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
Durga Choudhury wrote:
<blockquote
 cite="midAANLkTinoaZdueWa+SzHExzkDJ=sh67iU8yGKvmjP9+wq@mail.gmail.com"
 type="cite">
  <pre wrap="">A follow-up question (and pardon if this sounds stupid) is this:

If I want to make my process multithreaded, BUT only one thread has
anything to do with MPI (for example, using OpenMP inside MPI), then
the results will be correct EVEN IF #1 or #2 of Eugene holds true. Is
this correct?
  </pre>
</blockquote>
<br>
I believe this is thoroughly covered by the standard (though I suppose
the same could have been said about my question).<br>
<br>
In any case, for your situation, initialize MPI with
MPI_Init_thread().&nbsp; Ask for thread level MPI_THREAD_FUNNELED and check
that that level is provided.&nbsp; That should cover your case.&nbsp; See the man
page for MPI_Init_thread().&nbsp; My question should not have anything to do
with your case.<br>
<blockquote
 cite="midAANLkTinoaZdueWa+SzHExzkDJ=sh67iU8yGKvmjP9+wq@mail.gmail.com"
 type="cite">
  <pre wrap="">On Tue, Mar 8, 2011 at 12:34 PM, Eugene Loh <a class="moz-txt-link-rfc2396E" href="mailto:eugene.loh@oracle.com">&lt;eugene.loh@oracle.com&gt;</a> wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">Let's say you have multi-threaded MPI processes, you request
MPI_THREAD_MULTIPLE and get MPI_THREAD_MULTIPLE, and you use the self,sm,tcp
BTLs (which have some degree of threading support). &nbsp;Is it okay to have an
[MPI_Isend|MPI_Irecv] on one thread be completed by an MPI_Wait on another
thread? &nbsp;I'm assuming some sort of synchronization and memory barrier/flush
in between to protect against funny race conditions.

If it makes things any easier on you, we can do this multiple-choice style:

1) &nbsp;Forbidden by the MPI standard.
2) &nbsp;Not forbidden by the MPI standard, but will not work with OMPI (not even
with the BTLs that claim to be multi-threaded).
3) &nbsp;Works well with OMPI (provided you use a BTL that's multi-threaded).

It's looking like #2 to me, but I'm not sure.
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

    </pre>
  </blockquote>
  <pre wrap=""><!---->
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
  </pre>
</blockquote>
<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15816.php">Jeff Squyres: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Previous message:</strong> <a href="15814.php">Durga Choudhury: "Re: [OMPI users] multi-threaded programming"</a>
<li><strong>In reply to:</strong> <a href="15814.php">Durga Choudhury: "Re: [OMPI users] multi-threaded programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15843.php">Jeff Squyres: "Re: [OMPI users] multi-threaded programming"</a>
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
