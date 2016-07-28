<?
$subject_val = "Re: [OMPI users] OpenMPI deadlocks and race conditions ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 19:26:47 2009" -->
<!-- isoreceived="20090518232647" -->
<!-- sent="Mon, 18 May 2009 16:26:26 -0700" -->
<!-- isosent="20090518232626" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI deadlocks and race conditions ?" -->
<!-- id="4A11EEA2.5020209_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A0D1795.2030404_at_labri.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI deadlocks and race conditions ?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 19:26:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9374.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Previous message:</strong> <a href="9372.php">Joshua Bernstein: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>In reply to:</strong> <a href="9352.php">Fran&#231;ois PELLEGRINI: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<!-- nextthread="start" -->
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
Fran&ccedil;ois PELLEGRINI wrote:
<blockquote cite="mid4A0D1795.2030404@labri.fr" type="cite">
  <pre wrap=""><a class="moz-txt-link-abbreviated" href="mailto:users-request@open-mpi.org">users-request@open-mpi.org</a> wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">Date: Thu, 14 May 2009 17:06:07 -0700
From: Eugene Loh <a class="moz-txt-link-rfc2396E" href="mailto:Eugene.Loh@Sun.COM">&lt;Eugene.Loh@Sun.COM&gt;</a>
Subject: Re: [OMPI users] OpenMPI deadlocks and race conditions ?
To: Open MPI Users <a class="moz-txt-link-rfc2396E" href="mailto:users@open-mpi.org">&lt;users@open-mpi.org&gt;</a>

Fran?ois PELLEGRINI wrote:
    </pre>
    <blockquote type="cite">
      <pre wrap="">I sometimes run into deadlocks in OpenMPI (1.3.3a1r21206), when
running my MPI+threaded PT-Scotch software.
      </pre>
    </blockquote>
    <pre wrap="">So, are there multiple threads per process that perform message-passing 
operations?
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Yes. I use the MPI_THREAD_MULTIPLE level of MPI.</pre>
</blockquote>
You mentioned that the problem was pretty easy to reproduce.&nbsp; Could you
send a simple test case (simple means few lines of code and doesn't
take a large system to run)?<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9374.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Previous message:</strong> <a href="9372.php">Joshua Bernstein: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>In reply to:</strong> <a href="9352.php">Fran&#231;ois PELLEGRINI: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
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
