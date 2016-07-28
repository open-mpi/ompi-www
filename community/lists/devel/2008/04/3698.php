<?
$subject_val = "[OMPI devel] Dynamic Collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 15:04:36 2008" -->
<!-- isoreceived="20080410190436" -->
<!-- sent="Thu, 10 Apr 2008 15:04:27 -0400" -->
<!-- isosent="20080410190427" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Dynamic Collectives" -->
<!-- id="47FE64BB.5070403_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8DA010CE-A4E8-41A8-9744-737A90E44A2C_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Dynamic Collectives<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-10 15:04:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3699.php">Ralph Castain: "[OMPI devel] Latest scaling test results available"</a>
<li><strong>Previous message:</strong> <a href="3697.php">Swati Kher: "[OMPI devel] configuring with --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="3690.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to figure out a few things about the run-time selection of 
<br>
collectives.  It appears from the code that I could create a file that 
<br>
would specify which algorithms to use for each of the collectives at 
<br>
runtime making use of the dynamic decision feature.   However, I cannot 
<br>
figure out the format for that file.  Also, it appears that I could at 
<br>
run time force a specific algorithm to be used.  Does anyone have more 
<br>
details on these features?  I have hunted around the code and the 
<br>
documents, but come up empty.  Giving me a RTFM would be fine.
<br>
<p>Thanks,
<br>
Rolf V
<br>
<p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3699.php">Ralph Castain: "[OMPI devel] Latest scaling test results available"</a>
<li><strong>Previous message:</strong> <a href="3697.php">Swati Kher: "[OMPI devel] configuring with --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="3690.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
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
