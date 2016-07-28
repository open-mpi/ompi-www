<?
$subject_val = "[OMPI users] new overcommitment warning?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  5 18:34:35 2014" -->
<!-- isoreceived="20140905223435" -->
<!-- sent="Fri, 5 Sep 2014 18:34:33 -0400 (EDT)" -->
<!-- isosent="20140905223433" -->
<!-- name="Allin Cottrell" -->
<!-- email="cottrell_at_[hidden]" -->
<!-- subject="[OMPI users] new overcommitment warning?" -->
<!-- id="alpine.LFD.2.03.1409051814090.8164_at_wfu.edu" -->
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
<strong>Subject:</strong> [OMPI users] new overcommitment warning?<br>
<strong>From:</strong> Allin Cottrell (<em>cottrell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-05 18:34:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25285.php">Brock Palen: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
<li><strong>Previous message:</strong> <a href="25283.php">Rolf vandeVaart: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25286.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Reply:</strong> <a href="25286.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suspect there is a new (to openmpi 1.8.N?) warning with respect to 
<br>
requesting a number of MPI processes greater than the number of 
<br>
&quot;real&quot; cores on a given machine. I can provide a good deal more 
<br>
information is that's required, but can I just pose it as a question 
<br>
for now? Does anyone know of a a relevant change in the code?
<br>
<p>The reason I'm asking is that I've been experimenting, on a couple 
<br>
of machines and with more than one computational problem, to see if 
<br>
I'm better off restricting the number of MPI processes to the number 
<br>
of &quot;real&quot; or &quot;physical&quot; cores available, or if it's better to allow 
<br>
a larger number of processes up to the number of hyperthreads 
<br>
available (which is twice the number of cores on the machines I'm 
<br>
working on).
<br>
<p>It seems to me that openmpi &gt;= 1.8 is giving me a (somewhat obscure 
<br>
and non-user friendly) warning whenever I specify to mpiexec a 
<br>
number of processes &gt; the number of &quot;real&quot; cores -- even if the 
<br>
computation is in fact completed faster that way -- and I'd like to 
<br>
track down what has changed.
<br>
<p>As I indicated, I'll be happy to provide more information if this is 
<br>
not enough to understand what I'm talking about.
<br>
<p><pre>
-- 
Allin Cottrell
Department of Economics
Wake Forest University
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25285.php">Brock Palen: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
<li><strong>Previous message:</strong> <a href="25283.php">Rolf vandeVaart: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25286.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Reply:</strong> <a href="25286.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
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
