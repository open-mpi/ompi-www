<?
$subject_val = "[OMPI devel] ibm/dynamic/loop_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 15 11:47:07 2011" -->
<!-- isoreceived="20110815154707" -->
<!-- sent="Mon, 15 Aug 2011 08:47:17 -0700" -->
<!-- isosent="20110815154717" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] ibm/dynamic/loop_spawn" -->
<!-- id="4E493F85.30305_at_oracle.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] ibm/dynamic/loop_spawn<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-15 11:47:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9647.php">Matthew Russell: "[OMPI devel] Building Error"</a>
<li><strong>Previous message:</strong> <a href="9645.php">Edgar Gabriel: "[OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9648.php">Rolf vandeVaart: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Reply:</strong> <a href="9648.php">Rolf vandeVaart: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Reply:</strong> <a href="9657.php">Jeff Squyres: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a question about ompi-tests/ibm/dynamic.  Some of these tests 
<br>
(spawn, spawn_multiple, loop_spawn/child, and no-disconnect) exercise 
<br>
MPI_Comm_spawn* functionality.  Specifically, they spawn additional 
<br>
processes (beyond the initial mpirun launch) and therefore exert a 
<br>
different load on a test system than one might naively expect from the 
<br>
&quot;mpirun -np &lt;np&gt;&quot; command line.
<br>
<p>One approach to testing is to have the test harness know characteristics 
<br>
about individual tests like this.  E.g., if I have only 8 processors and 
<br>
I don't want to oversubscribe, have the test harness know that 
<br>
particular tests should be launched with fewer processes.  On the other 
<br>
hand, building such generality into a test harness when changes would 
<br>
have to be so pervasive (subjective assessment) and so few tests require 
<br>
it may not make that much sense.
<br>
<p>Another approach would be to manage oversubscription in the tests 
<br>
themselves.  E.g., for spawn.c, instead of spawning np new processes, do 
<br>
the following:
<br>
<p>- idle np/2 of the processes
<br>
- have the remaining np/2 processes spawn np/2 new ones
<br>
<p>(Okay, so that leaves open the possibility that the newly spawned 
<br>
processes might not appear on the same nodes where idled processes have 
<br>
&quot;made room&quot; for them.  Each solution seems loaded with shortcomings.)
<br>
<p>Anyhow, I was interested in some feedback on this topic.  A very small 
<br>
number (1-4) of spawning tests are causing us lots of problems (undue 
<br>
complexity in the test harness as well as a bunch of our time for 
<br>
reasons I find difficult to explain succinctly).  We're inclined to 
<br>
modify the tests so that they're a little more social.  E.g., make 
<br>
decisions about how many of the launched processes should &quot;really&quot; be 
<br>
used, idling some fraction of the processes, and continuing the test 
<br>
only with the remaining fraction.
<br>
<p>Comments?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9647.php">Matthew Russell: "[OMPI devel] Building Error"</a>
<li><strong>Previous message:</strong> <a href="9645.php">Edgar Gabriel: "[OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9648.php">Rolf vandeVaart: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Reply:</strong> <a href="9648.php">Rolf vandeVaart: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Reply:</strong> <a href="9657.php">Jeff Squyres: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
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
