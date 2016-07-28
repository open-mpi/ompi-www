<?
$subject_val = "Re: [OMPI users] MPI loop problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 12:28:53 2009" -->
<!-- isoreceived="20090819162853" -->
<!-- sent="Wed, 19 Aug 2009 09:29:13 -0700" -->
<!-- isosent="20090819162913" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI loop problem" -->
<!-- id="4A8C2859.9090900_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="375423.12035.qm_at_web51312.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI loop problem<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 12:29:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10437.php">tomek: "[OMPI users] Problem with linking on OS X"</a>
<li><strong>Previous message:</strong> <a href="10435.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>In reply to:</strong> <a href="10435.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10451.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Reply:</strong> <a href="10451.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
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
Julia He wrote:
<blockquote cite="mid375423.12035.qm@web51312.mail.re2.yahoo.com"
 type="cite">
  <table border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td
 style="font-family: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-size: inherit; line-height: inherit; font-size-adjust: inherit; font-stretch: inherit;"
 valign="top">does the problem show up even if you turn MPI off?<br>
My answer: Yes and No. Yes, when I used ifort compiler. But the problem
did not show up when I used gfortran, which was much slower.<br>
        </td>
      </tr>
    </tbody>
  </table>
</blockquote>
Okay.&nbsp; So, if this is not an MPI problem, as much as we like you and
wish you luck, this mail list might not be the best place to resolve
this problem!&nbsp; :^)<br>
<br>
Humor aside, there appears to be something special about how the code
is compiled, and the code looks like it's non-trivial.&nbsp; So, you
probably need to pursue this issue somewhere other than this mail
list.&nbsp; I don't know what resources are available to you for pursuing
ifort issues.<br>
<br>
Since you have a working and non-working version, maybe there are ways
of "divide and conquer" to isolate what the essential difference is
between the two.&nbsp; E.g., does the ifort version work at lower
optimization levels?&nbsp; Etc.<br>
<br>
Good luck.&nbsp; I'm sorry, but this mail alias probably isn't the right
place to resolve this particular problem.<br>
<blockquote cite="mid375423.12035.qm@web51312.mail.re2.yahoo.com"
 type="cite">
  <table border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td
 style="font-family: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-size: inherit; line-height: inherit; font-size-adjust: inherit; font-stretch: inherit;"
 valign="top">So, I think I can conclude that the problem is related to
the Intel compiler -- ifort. I guess the mpif90 and mpif77 are wrappers
to ifort.<br>
        </td>
      </tr>
    </tbody>
  </table>
</blockquote>
(I should know this, but OMPI man pages should probably tell you for
sure.)&nbsp; I suspect the mpi wrappers can be used to invoke "any"
compiler.&nbsp; In any case, it appears you've isolated the problem to be
due to the underlying compilers and not to an MPI component.<br>
<blockquote cite="mid375423.12035.qm@web51312.mail.re2.yahoo.com"
 type="cite">
  <table border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td
 style="font-family: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-size: inherit; line-height: inherit; font-size-adjust: inherit; font-stretch: inherit;"
 valign="top">Do you know how to solve this problem? Is there any flag
that I need to use in ifort?<br>
        </td>
      </tr>
    </tbody>
  </table>
</blockquote>
Sorry, I'm not familiar with ifort.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10437.php">tomek: "[OMPI users] Problem with linking on OS X"</a>
<li><strong>Previous message:</strong> <a href="10435.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>In reply to:</strong> <a href="10435.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10451.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Reply:</strong> <a href="10451.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
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
