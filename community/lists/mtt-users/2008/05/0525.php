<?
$subject_val = "Re: [MTT users] propose reducing MPI Install stdout_save_lines to	50";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 09:35:55 2008" -->
<!-- isoreceived="20080506133555" -->
<!-- sent="Tue, 6 May 2008 09:35:45 -0400" -->
<!-- isosent="20080506133545" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] propose reducing MPI Install stdout_save_lines to	50" -->
<!-- id="20080506133544.GQ51303_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F631EC48-0041-40BE-8C49-976527563D46_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] propose reducing MPI Install stdout_save_lines to	50<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 09:35:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0526.php">Ethan Mallove: "Re: [MTT users] MTT server side problem"</a>
<li><strong>Previous message:</strong> <a href="0524.php">Jeff Squyres: "[MTT users] propose reducing MPI Install stdout_save_lines to 50"</a>
<li><strong>In reply to:</strong> <a href="0524.php">Jeff Squyres: "[MTT users] propose reducing MPI Install stdout_save_lines to 50"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Works for me.
<br>
<p>-Ethan
<br>
<p>On Tue, May/06/2008 09:16:57AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; What do you think of reducing the default number of saved stdout lines  
</span><br>
<span class="quotelev1">&gt; in MPI install sections from 100 to 50?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The main use for saving the stdout in MPI Install is to give context  
</span><br>
<span class="quotelev1">&gt; for when there's stderr output.  I think that 50 lines is still much  
</span><br>
<span class="quotelev1">&gt; more than enough; I think that 100 lines has shown to be excessive.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The default for stderr should stay at 100 because a) there usually  
</span><br>
<span class="quotelev1">&gt; isn't much sent to stdout, and b) it's good to keep it semi-large so  
</span><br>
<span class="quotelev1">&gt; that we can see all the compiler warnings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0526.php">Ethan Mallove: "Re: [MTT users] MTT server side problem"</a>
<li><strong>Previous message:</strong> <a href="0524.php">Jeff Squyres: "[MTT users] propose reducing MPI Install stdout_save_lines to 50"</a>
<li><strong>In reply to:</strong> <a href="0524.php">Jeff Squyres: "[MTT users] propose reducing MPI Install stdout_save_lines to 50"</a>
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
