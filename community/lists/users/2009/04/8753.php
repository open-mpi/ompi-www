<?
$subject_val = "Re: [OMPI users] Issues on install 1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  2 21:14:27 2009" -->
<!-- isoreceived="20090403011427" -->
<!-- sent="Thu, 02 Apr 2009 21:14:21 -0400" -->
<!-- isosent="20090403011421" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues on install 1.3.1" -->
<!-- id="C939DE04-89B3-45EA-98D3-0CC5D538D79C_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49D507D2.5050705_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issues on install 1.3.1<br>
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-02 21:14:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8754.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8752.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="8745.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8757.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Reply:</strong> <a href="8757.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 2, 2009, at 2:45 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, I don't have an answer about performance.
</span><br>
<span class="quotelev1">&gt; You may need to ask somebody else or google around
</span><br>
<span class="quotelev1">&gt; about the relative performance of 32-bit vs. 64-bit mode.
</span><br>
<p>It is worth trying 64-bit.  The performance is going to depend on the  
<br>
program.  Since 64 bit pointers take more cache space, a program that  
<br>
uses a lot of pointers will run more slowly.  However, the x64  
<br>
architecture has more registers than the x86 architecture, and that  
<br>
can make a 64 bit program run faster.  Overall, it is probably more  
<br>
common for program to run faster in 64 bit mode, but your program  
<br>
could be in the minority.
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8754.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8752.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="8745.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8757.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Reply:</strong> <a href="8757.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
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
