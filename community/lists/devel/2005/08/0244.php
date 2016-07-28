<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 26 09:46:47 2005" -->
<!-- isoreceived="20050826144647" -->
<!-- sent="Fri, 26 Aug 2005 10:46:40 -0400" -->
<!-- isosent="20050826144640" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="SLURM support" -->
<!-- id="2bf8fddc13c493e0d78bba3651c5779c_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-08-26 09:46:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0245.php">Peter Kjellstr&#246;m: "configure hangs in libtool.."</a>
<li><strong>Previous message:</strong> <a href="0243.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian and I finished up the SLURM support (more to the point; I did all 
<br>
the easy stuff and Brian did all the hard stuff).  So now on IU's odin 
<br>
and thor clusters, for example, you don't need to specify hostfiles and 
<br>
you won't be using rsh/ssh.  For example:
<br>
<p>odin% srun -N 4 -A
<br>
odin% orterun -np 4 hostname
<br>
odin027
<br>
odin026
<br>
odin025
<br>
odin024
<br>
<p>Woo hoo!
<br>
<p>(similar things happen in PBS/Torque environments, in case you forgot 
<br>
:-) )
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
<li><strong>Next message:</strong> <a href="0245.php">Peter Kjellstr&#246;m: "configure hangs in libtool.."</a>
<li><strong>Previous message:</strong> <a href="0243.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
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
