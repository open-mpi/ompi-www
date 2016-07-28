<?
$subject_val = "Re: [OMPI users] Array Declaration different approaches";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 16 10:27:28 2009" -->
<!-- isoreceived="20091116152728" -->
<!-- sent="Mon, 16 Nov 2009 07:28:27 -0800" -->
<!-- isosent="20091116152827" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Array Declaration different approaches" -->
<!-- id="4B016F9B.7050204_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="428810f20911140659n3864658kfacd90cd9d306b9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Array Declaration different approaches<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-16 10:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11212.php">Laurin Müller: "[OMPI users] mpirun not working on more than one node"</a>
<li><strong>Previous message:</strong> <a href="11210.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>In reply to:</strong> <a href="11193.php">amjad ali: "[OMPI users] Array Declaration different approaches"</a>
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
amjad ali wrote:
<blockquote
 cite="mid428810f20911140659n3864658kfacd90cd9d306b9@mail.gmail.com"
 type="cite">
  <div class="gmail_quote">Hi All.<br>
  <br>
I have parallel PDE/CFD code in fortran.<br>
Let we consider it consisting of two parts:<br>
  <br>
1) Startup part; that&nbsp; includes input reads, splits, distributions,
forming neighborhood information arrays, grid arrays, and all related.
It includes most of the necessary array declarations.<br>
  <br>
2) Iterative part; we proceed the solution in time.<br>
  <br>
  <br>
Approach One:<br>
============<br>
What I do is that during the Startup phase, I declare the most array
allocatable and then allocate them sizes depending upon the input reads
and domain partitioning. And then In the iterative phase I utilize
those arrays. But I "do not" allocate/deallocate new arrays in the
iterative part.<br>
  <br>
  <br>
Approach Two:<br>
============<br>
I think that,&nbsp; what if I first use to run only the start -up phase of
my parallel code having allocatable like things and get the
sizes-values required for array allocations for a specific problem size
and partitioning. Then I use these values as constant in another
version of my code in which I will declare array with the constant
values obtained.<br>
  <br>
So my question is that will there be any significant
performance/efficiency difference in the "ITERATIVE part" if the
approach two is used (having arrays declared fixed sizes/values)?<br>
  <br>
  <br>
--------------------<br>
  <pre><font style="font-family: tahoma,sans-serif;" size="2">ANOTHER QUESTION ABOUT CALLING SUBROUTINES:
Assume two ways:
1) One way is that we declare arrays in some global module and "USE"
arrays in subroutines which ever is needed there.


2) We pass a large number of arrays (10, 20 or 30 may be) in the header
while making call to a  subroutine.

Which way is quite fast and efficient over the other?</font>
  </pre>
  </div>
</blockquote>
Interesting question, but probably outside the scope of this mail
list.&nbsp; Probably try some timing experiments for your particular
compiler and/or ask a Fortran list.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11212.php">Laurin Müller: "[OMPI users] mpirun not working on more than one node"</a>
<li><strong>Previous message:</strong> <a href="11210.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>In reply to:</strong> <a href="11193.php">amjad ali: "[OMPI users] Array Declaration different approaches"</a>
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
