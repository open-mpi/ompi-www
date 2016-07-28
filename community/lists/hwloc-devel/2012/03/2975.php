<?
$subject_val = "Re: [hwloc-devel] BGQ empty topology with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 06:35:06 2012" -->
<!-- isoreceived="20120322103506" -->
<!-- sent="Thu, 22 Mar 2012 11:35:00 +0100" -->
<!-- isosent="20120322103500" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] BGQ empty topology with MPI" -->
<!-- id="20120322103500.GH4365_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="360801348.33393.1332410326390.JavaMail.root_at_zmbs5.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] BGQ empty topology with MPI<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-22 06:35:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2976.php">Daniel Ibanez: "[hwloc-devel] Fwd:  BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2974.php">Brice Goglin: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="2966.php">Daniel Ibanez: "[hwloc-devel] BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2977.php">Samuel Thibault: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Thu 22 Mar 2012 10:58:46 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I don't see anything bad in your outputs.
</span><br>
<span class="quotelev1">&gt; So there's something strange going on when MPI is added. Which MPI are using?
</span><br>
<span class="quotelev1">&gt; Is this a derivative of MPICH that embeds hwloc? (MPICH &gt;= 1.2.1 if I remember
</span><br>
<span class="quotelev1">&gt; correctly)
</span><br>
<p>There might be symbol conflicts then, indeed.  That's the usual problem
<br>
with embedding instead of using an installed library.  Doesn't its
<br>
configure use the installed library if one exists?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2976.php">Daniel Ibanez: "[hwloc-devel] Fwd:  BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2974.php">Brice Goglin: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="2966.php">Daniel Ibanez: "[hwloc-devel] BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2977.php">Samuel Thibault: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
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
