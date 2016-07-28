<?
$subject_val = "Re: [OMPI devel] Amateur Guidance";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 10:36:26 2008" -->
<!-- isoreceived="20081103153626" -->
<!-- sent="Mon, 03 Nov 2008 07:39:33 -0800" -->
<!-- isosent="20081103153933" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Amateur Guidance" -->
<!-- id="490F1B35.8010406_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="f6ed2720811020918t54eb447ft57b4a7d229288aa5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Amateur Guidance<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-03 10:39:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4843.php">Shipman, Galen M.: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>Previous message:</strong> <a href="4841.php">Timothy Hayes: "[OMPI devel] Amateur Guidance"</a>
<li><strong>In reply to:</strong> <a href="4841.php">Timothy Hayes: "[OMPI devel] Amateur Guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4843.php">Shipman, Galen M.: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>Reply:</strong> <a href="4843.php">Shipman, Galen M.: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>Reply:</strong> <a href="4845.php">Jeff Squyres: "Re: [OMPI devel] Amateur Guidance"</a>
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
Timothy Hayes wrote:
<blockquote
 cite="midf6ed2720811020918t54eb447ft57b4a7d229288aa5@mail.gmail.com"
 type="cite">I'm a regular OpenMPI user but I'm new to the strange
world of development and hence this mailing list. I'm currently working
on a project that involves OpenMPI and I was wondering if I might get
some guidance and pointers in the right direction.<br>
  <div class="MsoNormal" style="margin: 0cm 0cm 10pt;"><font
 face="Calibri" size="3">The problem I'm having is jumping into the
OpenMPI code. I've read two papers I found on the homepage: "Open MPI:
Goals, Concept, and Design of a Next Generation MPI Implementation" and
"TEG: A High-Performance, Scalable, Multi-Network Point-to-Point
Communications Methodology" which gave me some insight about the MCA,
PML and PTL. However, I'm finding it quite difficult to get a foothold
into the codebase and I'm wondering if anyone might be able to point me
to a guide or some documentation that might help get me started.<br>
  <br>
  </font></div>
  <p class="MsoNormal" style="margin: 0cm 0cm 10pt;"><font
 face="Calibri" size="3">I'm very eager to do this project well and
contribute to the OpenMPI community, and if anyone has some advice or
pointers I'd really appreciate it.</font></p>
</blockquote>
I'm no expert.&nbsp; Indeed, I'm quite the opposite.&nbsp; I started looking at
OMPI a few months ago.&nbsp; As a newbie, I'd say:<br>
<br>
There seems to be no really great docs here for developers.&nbsp; You just
need to start reading source code, asking questions, stepping through
with a debugger, etc., and immerse yourself for a while ... a few
months?&nbsp; This is a little frustrating since one of the objectives of
OMPI is to provide a framework in which a researcher should be able to
modify only one component and do something interesting.&nbsp; Meanwhile,
there is no good description of what the interfaces are among the
various components nor what they all really do.&nbsp; And, you do kind of
need an understanding of what other pieces are doing and what your
component is supposed to do.&nbsp; So, instead of just reading up on one
component and writing it, you end up having to study a big body of
source code, reverse engineering a number of its parts, and then try
implementing the piece you're interested in playing with.<br>
<br>
I do have a bunch of notes I've accumulated that could theoretically
help someone else who is trying to learn the same things I am.&nbsp; My
focus has been on the sm BTL, so might not be 100% of interest to you.&nbsp;
I've walked through and found the code paths of interest to me,
expanded data structures, done some analysis, etc.&nbsp; I guess I should
try to clean these notes up for other people and share them.&nbsp; There are
lots of pointers in there to source code so one can look at the notes
and click to see the relevant source code.&nbsp; These notes are invaluable
to me (and the product of 3 buckets full of blood, sweat, and tears),
but again reflect my own interests.&nbsp; The pointers to the source code
use OpenGrok -- <a class="moz-txt-link-freetext" href="http://opensolaris.org/os/project/opengrok/">http://opensolaris.org/os/project/opengrok/</a> -- but you
may have your own favorite tools.<br>
<br>
Main answer: no great docs to look at.&nbsp; I think I've asked some OMPI
experts and that was basically the answer they gave me.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4843.php">Shipman, Galen M.: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>Previous message:</strong> <a href="4841.php">Timothy Hayes: "[OMPI devel] Amateur Guidance"</a>
<li><strong>In reply to:</strong> <a href="4841.php">Timothy Hayes: "[OMPI devel] Amateur Guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4843.php">Shipman, Galen M.: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>Reply:</strong> <a href="4843.php">Shipman, Galen M.: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>Reply:</strong> <a href="4845.php">Jeff Squyres: "Re: [OMPI devel] Amateur Guidance"</a>
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
