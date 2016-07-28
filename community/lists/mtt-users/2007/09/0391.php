<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  4 12:36:44 2007" -->
<!-- isoreceived="20070904163644" -->
<!-- sent="Tue, 4 Sep 2007 12:36:38 -0400" -->
<!-- isosent="20070904163638" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] Associating &amp;quot;description&amp;quot; with a single phase" -->
<!-- id="20070904163638.GS11675_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-04 12:36:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0392.php">Jeff Squyres: "Re: [MTT users] [MTT] #245: Support multiplicative effect for	other INI params"</a>
<li><strong>Previous message:</strong> <a href="0390.php">Ethan Mallove: "Re: [MTT users] [MTT] #245: Support multiplicative effect for	other INI params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0400.php">Jeff Squyres: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<li><strong>Reply:</strong> <a href="0400.php">Jeff Squyres: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
reporter.php has a search field for &quot;description&quot;, but which
<br>
phase is that for? MPI Install, Test build, or Test run? A
<br>
scenario is that Sun will have a home-grown &quot;funclet_files&quot;
<br>
funclet set the &quot;description&quot; in the Install phase (e.g., a
<br>
label identifying which ISO is being tested). It would be
<br>
useful to have one of two things:
<br>
<p>&nbsp;&nbsp;* [easier] Have the &quot;description&quot; fields broken out in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;reporter by phase. E.g.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* MPI Install description
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* Test build description
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* Test run description
<br>
&nbsp;&nbsp;* [harder] Be able to have a phase description carry over
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to subsequent phases. I think the logic should work like
<br>
&nbsp;&nbsp;&nbsp;&nbsp;this: if an MPI Install has a description, then this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;description will carry-over to its Test build and Test
<br>
&nbsp;&nbsp;&nbsp;&nbsp;runs if another description is not specified in those
<br>
&nbsp;&nbsp;&nbsp;&nbsp;post-MPI-Install phases. (Same for Test build.)
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0392.php">Jeff Squyres: "Re: [MTT users] [MTT] #245: Support multiplicative effect for	other INI params"</a>
<li><strong>Previous message:</strong> <a href="0390.php">Ethan Mallove: "Re: [MTT users] [MTT] #245: Support multiplicative effect for	other INI params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0400.php">Jeff Squyres: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<li><strong>Reply:</strong> <a href="0400.php">Jeff Squyres: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
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
