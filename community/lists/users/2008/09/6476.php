<?
$subject_val = "Re: [OMPI users] Warnings in Ubuntu Hardy";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  8 13:35:47 2008" -->
<!-- isoreceived="20080908173547" -->
<!-- sent="Mon, 08 Sep 2008 10:38:28 -0700" -->
<!-- isosent="20080908173828" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Warnings in Ubuntu Hardy" -->
<!-- id="48C56314.9080304_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="18627.12197.85659.480045_at_ron.nulle.part" -->
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
<strong>Subject:</strong> Re: [OMPI users] Warnings in Ubuntu Hardy<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-08 13:38:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6477.php">Jeff Squyres: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>Previous message:</strong> <a href="6475.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for configuretion files?"</a>
<li><strong>In reply to:</strong> <a href="6472.php">Dirk Eddelbuettel: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6477.php">Jeff Squyres: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>Reply:</strong> <a href="6477.php">Jeff Squyres: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev1">&gt;On 6 September 2008 at 22:13, Davi Vercillo C. Garcia (    ) wrote:
</span><br>
<span class="quotelev1">&gt;| I'm trying to execute some programs in my notebook (Ubuntu 8.04) using
</span><br>
<span class="quotelev1">&gt;| OpenMPI, and I always get a warning message like:
</span><br>
<span class="quotelev1">&gt;| 
</span><br>
<span class="quotelev1">&gt;| libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;| --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;| [0,0,0]: OpenIB on host juliana was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt;| Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt;| lower performance.
</span><br>
<span class="quotelev1">&gt;| --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;| 
</span><br>
<span class="quotelev1">&gt;| What is this ?!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Uncomment this in /etc/openmpi/openmpi-mca-params.conf:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # Disable the use of InfiniBand
</span><br>
<span class="quotelev1">&gt;  btl = ^openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;which is the default in newer packages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Is there some way the message could have been written so users wouldn't 
<br>
have to solicit the alias for help?  I don't know if the diagnosibility 
<br>
of error messages has gotten much attention in the Open MPI community, 
<br>
but I would think messages should be understandable and suggest user 
<br>
actions in terms that a typical user would understand.  In this case, 
<br>
the message seems rather readable to me, but leaves the user far short 
<br>
of the seemingly sensible advice that Dirk provides.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6477.php">Jeff Squyres: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>Previous message:</strong> <a href="6475.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for configuretion files?"</a>
<li><strong>In reply to:</strong> <a href="6472.php">Dirk Eddelbuettel: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6477.php">Jeff Squyres: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>Reply:</strong> <a href="6477.php">Jeff Squyres: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
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
