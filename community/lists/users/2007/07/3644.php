<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 12:49:34 2007" -->
<!-- isoreceived="20070711164934" -->
<!-- sent="Wed, 11 Jul 2007 11:49:31 -0500 (CDT)" -->
<!-- isosent="20070711164931" -->
<!-- name="Lev Gelb" -->
<!-- email="gelb_at_[hidden]" -->
<!-- subject="[OMPI users] Recursive use of &amp;quot;orterun&amp;quot;" -->
<!-- id="Pine.LNX.4.61.0707111149140.25340_at_globe.wustl.edu" -->
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
<strong>From:</strong> Lev Gelb (<em>gelb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 12:49:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3645.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint"</a>
<li><strong>Previous message:</strong> <a href="3643.php">George Bosilca: "Re: [OMPI users] openmpi fails on mx endpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3646.php">Ralph H Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot;"</a>
<li><strong>Reply:</strong> <a href="3646.php">Ralph H Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi -
<br>
<p>I'm trying to port an application to use OpenMPI, and running
<br>
into a problem.  The program (written in Python, parallelized
<br>
using either of &quot;pypar&quot; or &quot;pyMPI&quot;) itself invokes &quot;mpirun&quot;
<br>
in order to manage external, parallel processes, via something like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;orterun -np 2 python myapp.py
<br>
<p>where myapp.py contains:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;os.system('orterun -np 2 nwchem.x nwchem.inp &gt; nwchem.out')
<br>
<p>I have this working under both LAM-MPI and MPICH on a variety
<br>
of different machines.  However, with OpenMPI,  all I get is an
<br>
immediate return from the system call and the error:
<br>
<p>&quot;OOB: Connection to HNP lost&quot;
<br>
<p>I have verified that the command passed to os.system is correct,
<br>
and even that it runs correctly if &quot;myapp.py&quot; doesn't invoke any
<br>
MPI calls of its own.
<br>
<p>I'm testing openMPI on a single box, so there's no machinefile-stuff currently 
<br>
active.  The system is running Fedora Core 6 x86-64, I'm using the latest 
<br>
openmpi-1.2.3-1.src.rpm rebuilt on the machine in question,
<br>
I can provide additional configuration details if necessary.
<br>
<p>Thanks, in advance, for any help or advice,
<br>
<p>Lev
<br>
<p><p>------------------------------------------------------------------
<br>
Lev Gelb Associate Professor Department of Chemistry, Washington University in 
<br>
St. Louis, St. Louis, MO 63130  USA
<br>
<p>email: gelb_at_[hidden]
<br>
phone: (314)935-5026 fax:   (314)935-4481
<br>
<p><a href="http://www.chemistry.wustl.edu/~gelb">http://www.chemistry.wustl.edu/~gelb</a> 
<br>
------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3645.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint"</a>
<li><strong>Previous message:</strong> <a href="3643.php">George Bosilca: "Re: [OMPI users] openmpi fails on mx endpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3646.php">Ralph H Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot;"</a>
<li><strong>Reply:</strong> <a href="3646.php">Ralph H Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot;"</a>
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
