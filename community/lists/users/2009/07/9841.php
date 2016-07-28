<?
$subject_val = "[OMPI users] any way to get serial time on head node?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 12:48:57 2009" -->
<!-- isoreceived="20090706164857" -->
<!-- sent="Mon, 06 Jul 2009 09:48:46 -0700" -->
<!-- isosent="20090706164846" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="[OMPI users] any way to get serial time on head node?" -->
<!-- id="1246898926.559.63.camel_at_corn.betterworld.us" -->
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
<strong>Subject:</strong> [OMPI users] any way to get serial time on head node?<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 12:48:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9842.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Previous message:</strong> <a href="9840.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9870.php">Jeff Squyres: "Re: [OMPI users] any way to get serial time on head node?"</a>
<li><strong>Reply:</strong> <a href="9870.php">Jeff Squyres: "Re: [OMPI users] any way to get serial time on head node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let total time on my slot 0 process be S+C+B+I
<br>
= serial computations + communication + busy wait + idle
<br>
Is there a way to find out S?
<br>
S+C would probably also be useful, since I assume C is low.
<br>
<p>The problem is that I = 0, roughly, and B is big.  Since B is big, the
<br>
usual process timing methods don't work.
<br>
<p>If B all went to &quot;system&quot; as opposed to &quot;user&quot; time I could use the
<br>
latter, but I don't think that's the case.  Can anyone confirm that?
<br>
<p>If S is big, I might be able to gain by parallelizing in a different
<br>
way.  By S I mean to refer to serial computation that is part of my
<br>
algorithm, rather than the technical fact that all the computation is
<br>
serial on a given slot.
<br>
<p>I'm running R/RMPI.
<br>
<p>Thanks.
<br>
Ross
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9842.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Previous message:</strong> <a href="9840.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9870.php">Jeff Squyres: "Re: [OMPI users] any way to get serial time on head node?"</a>
<li><strong>Reply:</strong> <a href="9870.php">Jeff Squyres: "Re: [OMPI users] any way to get serial time on head node?"</a>
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
