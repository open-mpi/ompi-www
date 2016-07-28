<?
$subject_val = "[OMPI devel] non-blocking collectives, SPARC, and alignment";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 16 15:50:24 2012" -->
<!-- isoreceived="20120716195024" -->
<!-- sent="Mon, 16 Jul 2012 15:50:16 -0400" -->
<!-- isosent="20120716195016" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] non-blocking collectives, SPARC, and alignment" -->
<!-- id="50047078.4080008_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] non-blocking collectives, SPARC, and alignment<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-16 15:50:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11296.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<li><strong>Previous message:</strong> <a href="11294.php">Jeff Squyres: "[OMPI devel] SVN write access annual cleaning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11296.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<li><strong>Reply:</strong> <a href="11296.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The NBC functionality doesn't fare very well on SPARC.  One of the 
<br>
problems is with data alignment.  An NBC schedule is a number of 
<br>
variously sized fields laid out contiguously in linear memory  (e.g., 
<br>
see nbc_internal.h or nbc.c) and words don't have much natural 
<br>
alignment.  On SPARC, the &quot;default&quot; (for some definition of that word) 
<br>
is to sigbus when a word is not properly aligned.  In any case (even 
<br>
non-SPARC), one might argue misalignment and subsequent exception 
<br>
handling is nice to avoid.
<br>
<p>Here are two specific issues.
<br>
<p>*)  Schedule layout uses single-char delimiters between &quot;round 
<br>
schedules&quot;.  So, even if the first &quot;round schedule&quot; has nice alignment, 
<br>
the second will have single-byte offsets for its components.
<br>
<p>*)  8-byte pointers can fall on 4-byte boundaries.  E.g., say a schedule 
<br>
starts on some &quot;nice&quot; alignment.  The first words of the schedule will be:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int            total size of the schedule
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int            number of elements in the first round schedule
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enum           type of function
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *         pointer to some buffer
<br>
<p>So, with -m64, that 8-byte pointer is on a 12-byte boundary.
<br>
<p>Any input/comments on how to proceed?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11296.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<li><strong>Previous message:</strong> <a href="11294.php">Jeff Squyres: "[OMPI devel] SVN write access annual cleaning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11296.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<li><strong>Reply:</strong> <a href="11296.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
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
