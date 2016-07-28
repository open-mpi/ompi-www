<?
$subject_val = "Re: [OMPI users] Rmpi installation issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 12:20:17 2008" -->
<!-- isoreceived="20081013162017" -->
<!-- sent="Mon, 13 Oct 2008 12:20:12 -0400" -->
<!-- isosent="20081013162012" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rmpi installation issues" -->
<!-- id="603C00F9-2ADF-4A66-AEB6-483850114EFE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="264855a00810130918h73cc9e81i4a647961263b4b18_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Rmpi installation issues<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-13 12:20:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6972.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6970.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6970.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6973.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 13, 2008, at 12:18 PM, Sean Davis wrote:
<br>
<p><span class="quotelev2">&gt;&gt; # ln -s /usr/lib64/mpi/gcc/openmpi/lib64/ /usr/lib64/mpi/gcc/ 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt; # CC=&quot;mpicc&quot;  R CMD INSTALL  Rmpi_0.5-5.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt; --configure-args=--with-mpi=/usr/lib64/mpi/gcc/openmpi/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can drop the --configure-args.  Using the correct mpicc should
</span><br>
<span class="quotelev1">&gt; take care of all the linking, etc.
</span><br>
<p><p>You can probably also drop the sym link.
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
<li><strong>Next message:</strong> <a href="6972.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6970.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6970.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6973.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
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
