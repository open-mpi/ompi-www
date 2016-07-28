<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 13 13:47:41 2005" -->
<!-- isoreceived="20050813184741" -->
<!-- sent="Sat, 13 Aug 2005 14:47:39 -0400" -->
<!-- isosent="20050813184739" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="frameworks in OPAL" -->
<!-- id="ac4ec65130903f02e4c4b4726b4039bf_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-13 13:47:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0148.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0146.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It finally happened -- OPAL has sprouted 2 frameworks:
<br>
<p>- memory: which Brian described in an earlier mail (although it's a 
<br>
little different than all of our other frameworks -- the components in 
<br>
this framework are generally designed for either LD_PRELOADing or 
<br>
statically linked into libopal, which is why some of the other 
<br>
configure changes came in at about the same time [a component 
<br>
specifically saying that it can only be built as a DSO or as rolled up 
<br>
in a higher-level library])
<br>
<p>- paffinity: process affinity, per the mail that I sent around a while 
<br>
ago.  The linux 2.6 component is complete; I need to do a little 
<br>
testing/debugging to get it to work on the back-ported 2.4 Linux 
<br>
process affinity kernels (the API is different).  I started a Solaris 
<br>
component as well, just for kicks (because it looked darn simple).
<br>
<p>Nothing yet calls paffinity -- I'll be working on that next.  The first 
<br>
cut will probably be all based on MCA params (i.e., the user must 
<br>
specifically ask for it).
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0148.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0146.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
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
