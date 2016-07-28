<?
$subject_val = "Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 10:02:34 2009" -->
<!-- isoreceived="20091112150234" -->
<!-- sent="Thu, 12 Nov 2009 07:03:46 -0800" -->
<!-- isosent="20091112150346" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards" -->
<!-- id="4AFC23D2.5090704_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="661b788e0911112104i1bbab7afr8c1f0de54bf4bd3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 10:03:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11174.php">Jeff Squyres: "Re: [OMPI users] Release date for 1.3.4?"</a>
<li><strong>Previous message:</strong> <a href="11172.php">Ralph Castain: "Re: [OMPI users] Release date for 1.3.4?"</a>
<li><strong>In reply to:</strong> <a href="11167.php">RightCFD: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11178.php">Gus Correa: "Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards"</a>
<li><strong>Reply:</strong> <a href="11178.php">Gus Correa: "Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards"</a>
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
RightCFD wrote:
<blockquote
 cite="mid661b788e0911112104i1bbab7afr8c1f0de54bf4bd3@mail.gmail.com"
 type="cite">
  <div class="gmail_quote">
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">Date:
Thu, 29 Oct 2009 15:45:06 -0400<br>
From: Brock Palen &lt;<a href="mailto:brockp@umich.edu">brockp@umich.edu</a>&gt;<br>
Subject: Re: [OMPI users] mpi functions are slow when first called and<br>
&nbsp; &nbsp; &nbsp; &nbsp;become normal afterwards<br>
To: Open MPI Users &lt;<a href="mailto:users@open-mpi.org">users@open-mpi.org</a>&gt;<br>
Message-ID: &lt;<a
 href="mailto:890CC430-68B0-4307-8260-24A6FADAE319@umich.edu">890CC430-68B0-4307-8260-24A6FADAE319@umich.edu</a>&gt;<br>
Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes<br>
    <br>
&gt; When MPI_Bcast and MPI_Reduce are called for the first time, they<br>
&gt; are very slow. But after that, they run at normal and stable speed.<br>
&gt; Is there anybody out there who have encountered such problem? If
you<br>
&gt; need any other information, please let me know and I'll provide.<br>
&gt; Thanks in advance.<br>
    <br>
This is expected, and I think you can dig though the message archive<br>
to find the answer. &nbsp;OMPI does not wireup all the communication at<br>
startup, thus the first time you communicate with a host the<br>
connection is made, but after that it is fast because it is already<br>
open. &nbsp;This behavior is expected, and is needed for very large systems<br>
where you could run out of sockets for some types of communication<br>
with so many hosts.<br>
    <br>
Brock Palen<br>
    <a href="http://www.umich.edu/%7Ebrockp" target="_blank">www.umich.edu/~brockp</a><br>
Center for Advanced Computing<br>
    <a href="mailto:brockp@umich.edu">brockp@umich.edu</a><br>
(734)936-1985<br>
    <br>
Thanks for your reply. I am surprised to know this is an expected
behavior of OMPI. I searched the archival but did not find many
relevant messages. I am wondering why other users of OMPI do not
complain this. Is there a way to avoid this when timing an MPI program?</blockquote>
  </div>
</blockquote>
An example of this is the NAS Parallel Benchmarks, which have been
around nearly 20 years.&nbsp; They:<br>
<br>
*) turn timers on after MPI_Init and off before MPI_Finalize<br>
*) execute at least one iteration before starting timers<br>
<br>
Even so, with at least one of the NPB tests and with at least one MPI
implementation, I've seen more than one iteration needed to warm things
up.&nbsp; That is, if you timed each iteration, you could see that multiple
iterations were needed to warm everything up.&nbsp; In performance analysis,
it is reasonably common to expect to have to run multiple iterations
and correct data set size to get representative behavior.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11174.php">Jeff Squyres: "Re: [OMPI users] Release date for 1.3.4?"</a>
<li><strong>Previous message:</strong> <a href="11172.php">Ralph Castain: "Re: [OMPI users] Release date for 1.3.4?"</a>
<li><strong>In reply to:</strong> <a href="11167.php">RightCFD: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11178.php">Gus Correa: "Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards"</a>
<li><strong>Reply:</strong> <a href="11178.php">Gus Correa: "Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards"</a>
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
