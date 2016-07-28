<?
$subject_val = "Re: [OMPI users] What flags for configure for	a	single	machine	installation ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 10:33:48 2009" -->
<!-- isoreceived="20090609143348" -->
<!-- sent="Tue, 09 Jun 2009 16:34:02 +0200" -->
<!-- isosent="20090609143402" -->
<!-- name="DEVEL Michel" -->
<!-- email="Michel.Devel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What flags for configure for	a	single	machine	installation ?" -->
<!-- id="4A2E72DA.8080402_at_ens2m.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1244513758.27569.92.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] What flags for configure for	a	single	machine	installation ?<br>
<strong>From:</strong> DEVEL Michel (<em>Michel.Devel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 10:34:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9577.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9575.php">jody: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>In reply to:</strong> <a href="9570.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a	single	machine	installation ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9550.php">Jeff Squyres: "Re: [OMPI users] What flags for configure for a single machineinstallation ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry Frankcombe a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; I'm no SGE expert.  But don't you have a PE available that simply
</span><br>
<span class="quotelev1">&gt; allocates nodes and calls your script?  Then you can specify in your
</span><br>
<span class="quotelev1">&gt; script any mpirun you want, and it all should still work.
</span><br>
<span class="quotelev1">&gt; Alternatively, can't you shut down the SGE-called mpirun as the first
</span><br>
<span class="quotelev1">&gt; thing you do, then continue on calling your own mpirun?  All this
</span><br>
<span class="quotelev1">&gt; depends on exactly how your machine and SGE is set up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see how statically linking your app avoids this issue at all, if
</span><br>
<span class="quotelev1">&gt; you're still calling the wrong mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Thanks for your suggestions.
<br>
My trials are not a prioritary task in my duty, and furthermore not
<br>
really done in a scientific way I must admit, so that I could very well
<br>
have misunderstood what was the signification of the problems that
<br>
prevented me from executing my code using faster
<br>
settings/compilers/libraries than the default one. (I have made quite a
<br>
lot of attempts but each time during a small amount of time).
<br>
The important thing for me now is that I can at last develop on my own
<br>
new PC and test my code there (the dynamic code stops before doing
<br>
anything when run). I will reconsider things, when we will have a new
<br>
cluster around october.
<br>
<p>Sorry for the confusion in my messages.
<br>
<p><pre>
-- 
Sincerely yours,
Michel DEVEL
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9576/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9577.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9575.php">jody: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>In reply to:</strong> <a href="9570.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a	single	machine	installation ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9550.php">Jeff Squyres: "Re: [OMPI users] What flags for configure for a single machineinstallation ?"</a>
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
