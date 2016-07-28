<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  3 09:47:24 2006" -->
<!-- isoreceived="20060803134724" -->
<!-- sent="Thu, 3 Aug 2006 15:47:20 +0200" -->
<!-- isosent="20060803134720" -->
<!-- name="Martin Schaff&#195;&#182;ner" -->
<!-- email="martin.schaffoener_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI / PBS / TM interaction" -->
<!-- id="200608031547.20295.martin.schaffoener_at_e-technik.uni-magdeburg.de" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Martin Schaff&#195;&#182;ner (<em>martin.schaffoener_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-03 09:47:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1718.php">Ralph H Castain: "Re: [OMPI users] OpenMPI / PBS / TM interaction"</a>
<li><strong>Previous message:</strong> <a href="1716.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1718.php">Ralph H Castain: "Re: [OMPI users] OpenMPI / PBS / TM interaction"</a>
<li><strong>Reply:</strong> <a href="1718.php">Ralph H Castain: "Re: [OMPI users] OpenMPI / PBS / TM interaction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I noticed by accident that if I allocate only 1 of 2 CPUs on, say, x nodes 
<br>
with PBS, it is possible to run mpiexec with -np = 2*x, i.e. I can use both 
<br>
CPUs on each SMP node. This is not would I would expect or want. I would 
<br>
guess that this is due to the fact that even if the _one_ orted launched 
<br>
through PBS' TM interface can launch as many processes as you like which is 
<br>
not the case if one would launch MPI processes directly through the TM 
<br>
interface. How can this behavior be fixed?
<br>
<p>Regards,
<br>
<pre>
-- 
Martin Schaff&#195;&#182;ner
Cognitive Systems Group, Institute of Electronics, Signal Processing and 
Communication Technologies, Department of Electrical Engineering, 
Otto-von-Guericke University Magdeburg
Phone: +49 391 6720063
PGP-Public-Key: <a href="http://ca.uni-magdeburg.de/certs/pgp0Cschaffoener64D8BEC0.asc">http://ca.uni-magdeburg.de/certs/pgp0Cschaffoener64D8BEC0.asc</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1718.php">Ralph H Castain: "Re: [OMPI users] OpenMPI / PBS / TM interaction"</a>
<li><strong>Previous message:</strong> <a href="1716.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1718.php">Ralph H Castain: "Re: [OMPI users] OpenMPI / PBS / TM interaction"</a>
<li><strong>Reply:</strong> <a href="1718.php">Ralph H Castain: "Re: [OMPI users] OpenMPI / PBS / TM interaction"</a>
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
