<?
$subject_val = "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 18:48:42 2008" -->
<!-- isoreceived="20080421224842" -->
<!-- sent="Tue, 22 Apr 2008 00:48:33 +0200 (CEST)" -->
<!-- isosent="20080421224833" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling" -->
<!-- id="37794.210.9.137.237.1208818113.squirrel_at_webmail.chalmers.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20080421223314.GZ15077_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-21 18:48:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5431.php">gildo.rex_at_[hidden]: "[OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5429.php">Adrian Knoth: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<li><strong>In reply to:</strong> <a href="5429.php">Adrian Knoth: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5446.php">Dirk Eddelbuettel: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; vrotival_at_vrotival-laptop:~/Work/workbench$ ompi_info --all
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info: Symbol `mca_allocator_base_components' has different size in
</span><br>
<span class="quotelev2">&gt;&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Usually, this &quot;has different size&quot; means that libraries have changed
</span><br>
<span class="quotelev1">&gt; since you've compiled your program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; updates in Ubuntu (although I do not want to incriminate it at first)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps you got the Ubuntu Open MPI package. You should make sure that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    - ompi_info shows all the right paths
</span><br>
<span class="quotelev1">&gt;    - no openmpi-* package is installed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If in doubt, rip out every installed &quot;Open MPI&quot; and recompile. (just to
</span><br>
<span class="quotelev1">&gt; make sure you don't have a mix of different versions)
</span><br>
<p><p>I'd also suggest having a close look at your synaptic logs to see what has
<br>
actually been upgraded.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5431.php">gildo.rex_at_[hidden]: "[OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5429.php">Adrian Knoth: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<li><strong>In reply to:</strong> <a href="5429.php">Adrian Knoth: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5446.php">Dirk Eddelbuettel: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
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
