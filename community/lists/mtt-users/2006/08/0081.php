<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 30 16:17:29 2006" -->
<!-- isoreceived="20060830201729" -->
<!-- sent="Wed, 30 Aug 2006 16:17:18 -0400" -->
<!-- isosent="20060830201718" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] Status" -->
<!-- id="C11B6A8E.24EB9%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-08-30 16:17:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/09/0082.php">Jeff Squyres: "[MTT users] How's it going?"</a>
<li><strong>Previous message:</strong> <a href="0080.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh noticed that Test Run data is not currently being recorded.  I actually
<br>
had already filed ticket #42 about this -- just to let you all know, we're
<br>
aware of the problem and Ethan is working on it.
<br>
<p>Also, I just brought over the CSH script fix that Josh identified earlier
<br>
(i.e., the sourceable script that is generated now contains &quot;$?&quot; properly,
<br>
not &quot;0&quot;).  And I added a new variable to the generated scripts: $MPI_ROOT.
<br>
The intent is that you can source these scripts and then run with OMPI as
<br>
such:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --prefix $MPI_ROOT -np 8 a.out
<br>
<p>For systems that need --prefix (e.g., rsh/ssh environments -- SLURM/PBS
<br>
users need not worry).
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/09/0082.php">Jeff Squyres: "[MTT users] How's it going?"</a>
<li><strong>Previous message:</strong> <a href="0080.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
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
