<?
$subject_val = "[MTT users] propose reducing MPI Install stdout_save_lines to 50";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 09:17:11 2008" -->
<!-- isoreceived="20080506131711" -->
<!-- sent="Tue, 6 May 2008 09:16:57 -0400" -->
<!-- isosent="20080506131657" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] propose reducing MPI Install stdout_save_lines to 50" -->
<!-- id="F631EC48-0041-40BE-8C49-976527563D46_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [MTT users] propose reducing MPI Install stdout_save_lines to 50<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 09:16:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0525.php">Ethan Mallove: "Re: [MTT users] propose reducing MPI Install stdout_save_lines to	50"</a>
<li><strong>Previous message:</strong> <a href="0523.php">Pavel Shamis (Pasha): "[MTT users] MTT server side problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0525.php">Ethan Mallove: "Re: [MTT users] propose reducing MPI Install stdout_save_lines to	50"</a>
<li><strong>Reply:</strong> <a href="0525.php">Ethan Mallove: "Re: [MTT users] propose reducing MPI Install stdout_save_lines to	50"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What do you think of reducing the default number of saved stdout lines  
<br>
in MPI install sections from 100 to 50?
<br>
<p>The main use for saving the stdout in MPI Install is to give context  
<br>
for when there's stderr output.  I think that 50 lines is still much  
<br>
more than enough; I think that 100 lines has shown to be excessive.
<br>
<p>The default for stderr should stay at 100 because a) there usually  
<br>
isn't much sent to stdout, and b) it's good to keep it semi-large so  
<br>
that we can see all the compiler warnings.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0525.php">Ethan Mallove: "Re: [MTT users] propose reducing MPI Install stdout_save_lines to	50"</a>
<li><strong>Previous message:</strong> <a href="0523.php">Pavel Shamis (Pasha): "[MTT users] MTT server side problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0525.php">Ethan Mallove: "Re: [MTT users] propose reducing MPI Install stdout_save_lines to	50"</a>
<li><strong>Reply:</strong> <a href="0525.php">Ethan Mallove: "Re: [MTT users] propose reducing MPI Install stdout_save_lines to	50"</a>
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
