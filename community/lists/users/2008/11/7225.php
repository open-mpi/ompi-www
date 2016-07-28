<?
$subject_val = "Re: [OMPI users] Progress of the asynchronous messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 12:49:27 2008" -->
<!-- isoreceived="20081106174927" -->
<!-- sent="Thu, 06 Nov 2008 09:52:28 -0800" -->
<!-- isosent="20081106175228" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Progress of the asynchronous messages" -->
<!-- id="49132EDC.9030303_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="319186.87820.qm_at_web24102.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Progress of the asynchronous messages<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 12:52:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7226.php">George Bosilca: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Previous message:</strong> <a href="7224.php">vladimir marjanovic: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>In reply to:</strong> <a href="7224.php">vladimir marjanovic: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7226.php">George Bosilca: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Reply:</strong> <a href="7226.php">George Bosilca: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Reply:</strong> <a href="7227.php">Jeff Squyres: "Re: [OMPI users] Progress of the asynchronous messages"</a>
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
vladimir marjanovic wrote:
<blockquote cite="mid319186.87820.qm@web24102.mail.ird.yahoo.com"
 type="cite">
  <style type="text/css"><!-- DIV {margin:0px;} --></style>
  <div
 style="font-family: times new roman,new york,times,serif; font-size: 12pt;">
  <div
 style="font-family: times new roman,new york,times,serif; font-size: 12pt;">In
order to overlap communication and computation I don't want to use
MPI_Wait.</div>
  </div>
</blockquote>
Right.&nbsp; One thing to keep in mind is that there are two ways of
overlapping communication and computation.&nbsp; One is you start a send
(MPI_Isend), you do a bunch of computation while the message is being
sent, and then after the message has been sent you call MPI_Wait just
to clean up.&nbsp; This assumes that the MPI implementation can send a
message while control of the program has been returned to you.&nbsp; The
experts can give you the fine print, but my simple assertion is, "This
doesn't usually happen."<br>
<br>
Rather, the MPI implementation typically will send data only when your
code is in some MPI call.&nbsp; That's why you have to call MPI_Test
periodically... or some other MPI function.<br>
<blockquote cite="mid319186.87820.qm@web24102.mail.ird.yahoo.com"
 type="cite">
  <div
 style="font-family: times new roman,new york,times,serif; font-size: 12pt;">
  <div
 style="font-family: times new roman,new york,times,serif; font-size: 12pt;">For
sure the message is being decomposed into chucks and the size of chuck
is probably defined by environment variable. <br>
  <div
 style="font-family: times new roman,new york,times,serif; font-size: 12pt;">Maybe
do you know how can I control size of chuck?<br>
  </div>
  </div>
  </div>
</blockquote>
I don't.&nbsp; Try running "ompi_info -a" and looking through the
parameters.&nbsp; For the shared-memory BTL, it's mca_btl_sm_max_frag_size.&nbsp;
I also see something like coll_sm_fragment_size.&nbsp; Maybe look at the
parameters that have "btl_openib_max" in their names.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7226.php">George Bosilca: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Previous message:</strong> <a href="7224.php">vladimir marjanovic: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>In reply to:</strong> <a href="7224.php">vladimir marjanovic: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7226.php">George Bosilca: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Reply:</strong> <a href="7226.php">George Bosilca: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Reply:</strong> <a href="7227.php">Jeff Squyres: "Re: [OMPI users] Progress of the asynchronous messages"</a>
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
