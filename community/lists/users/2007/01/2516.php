<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 17:21:29 2007" -->
<!-- isoreceived="20070119222129" -->
<!-- sent="Fri, 19 Jan 2007 14:21:24 -0800" -->
<!-- isosent="20070119222124" -->
<!-- name="Evan Smyth" -->
<!-- email="evan_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi equivalent to mpich serv_p4 daemon" -->
<!-- id="45B14464.9060800_at_dreamworks.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Evan Smyth (<em>evan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-19 17:21:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2517.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2515.php">Jeff Squyres: "Re: [OMPI users] Slurm and Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2556.php">Jeff Squyres: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<li><strong>Reply:</strong> <a href="2556.php">Jeff Squyres: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had been using MPICH and its serv_p4 daemon to speed startup times. 
<br>
I've decided to try OpenMPI (primarily for the fault-tolerance features) 
<br>
and would like to know what the equivalent of the serv_p4 daemon is.
<br>
<p>It appears as though the orted daemon may be what I am after but I don't 
<br>
quite understand it. I used to run serv_p4 with a specific port number 
<br>
and then pass a -p4ssport &lt;portnumber&gt; flag to mpirun. The daemon would 
<br>
remain running on each node and each new mpirun job would simply 
<br>
communicate directly through a port with the already running instance of 
<br>
the daemon on that machine and would save the mpirun from having to 
<br>
launch an rsh. This was great for reducing startup and run times due to 
<br>
rsh issues. The orted daemon does support a -persistent flag which seems 
<br>
relevant, but I cannot find a real usage example.
<br>
<p>I expect that most of the readers will find this to be a trivial problem 
<br>
but I'm hoping someone can give me an openmpi equivalent usage example.
<br>
<p>Thanks in advance,
<br>
<p>Evan
<br>
<p><p><pre>
-- 
------
Evan Smyth
evan_at_[hidden]
Dreamworks Animation
818.695.4105, Riverside 146
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2517.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2515.php">Jeff Squyres: "Re: [OMPI users] Slurm and Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2556.php">Jeff Squyres: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<li><strong>Reply:</strong> <a href="2556.php">Jeff Squyres: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
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
