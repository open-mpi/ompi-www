<?
$subject_val = "[OMPI users] Xgrid an openmpi  1.2 and 1.5rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 16 15:14:41 2010" -->
<!-- isoreceived="20100616191441" -->
<!-- sent="Wed, 16 Jun 2010 13:14:36 -0600 (MDT)" -->
<!-- isosent="20100616191436" -->
<!-- name="Charlie E. Strauss" -->
<!-- email="cems_at_[hidden]" -->
<!-- subject="[OMPI users] Xgrid an openmpi  1.2 and 1.5rc1" -->
<!-- id="44435.130.55.127.2.1276715676.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1<br>
<strong>From:</strong> Charlie E. Strauss (<em>cems_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-16 15:14:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13336.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Previous message:</strong> <a href="13334.php">Stephan Hackstedt: "[OMPI users] ompi-ps failure on WinXP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13336.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Reply:</strong> <a href="13336.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm new to openMPI.  I'm trying to set it up for using xgrid.  I have read
<br>
that v1.3 and v1.4 are broken on OSX 10.5 and 10.6 although I have seen
<br>
some discussions in the archives of this mail list saying some people have
<br>
v1.4 running on 10.6.
<br>
<p>I have now compiled both openMPI 1.2 and openMPI1.5rc  and neither of
<br>
these is working for me with xgrid.   Both of these say they work with
<br>
xgrid.
<br>
<p>The failuremodes are different.
<br>
<p>Anyone know how to get a working install?  I am building this on a OSX 10.5.8
<br>
machine.  THe xgrid controller is on a OSX 10.6 server machine.  I have tried
<br>
configuring with and without the --with-xgrid option.
<br>
<p>Behaviour of openMPI1.2
<br>
$ /usr/local/openmpi/bin/mpirun -nolocal -n 2 /bin/hostname
<br>
<p>THe job appears in the xgrid queue, and the logs show it is running on a
<br>
remote machine.  However nothing ever happens and peeking in the xgrid
<br>
results I see:
<br>
<p>$ xgrid -job results -id 8703
<br>
[brio.llnl.gov:38789] [0,0,1]-[0,0,0] mca_oob_tcp_peer_complete_connect:
<br>
connection failed: Operation timed out (60) - retrying
<br>
[brio.llnl.gov:38792] [0,0,2]-[0,0,0] mca_oob_tcp_peer_complete_connect:
<br>
connection failed: Operation timed out (60) - retrying
<br>
<p>Perhaps a firewall issue?
<br>
<p>Of course I'm more interested in getting the new openMPI1.5 working.
<br>
When I run this, again I get an entry in the queue, and the job runs on a
<br>
remote machine but  I get a job failed message
<br>
<p>$ /usr/local/openmpi5/bin/mpirun -n 2 /bin/hostname
<br>
$ xgrid -job results -id 8702
<br>
[brio.llnl.gov:38776] Error: unknown option &quot;-mca&quot;
<br>
<p><pre>
----
Note I have NOT installed openMPI on any of the other computers in the
grid.  So perhaps that is the problem?  If I did install it on other
computers how would I tell mpirun where to find the path to the install
point?
----
Finally in both cases, I don't see any way to pass xgrid specific argument
in on the mpi command line.  An xgrid controller divides the agents into
sets of logical grids and you need to specify which logical grid to submit
the job to.    In xgrid cli syntax one write &quot;xgrid -gid 2&quot;  for grid 2. 
When I use openMPI all the jobs get sent to just the default grid which is
the grid that xgrid uses if no gid is specified.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13336.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Previous message:</strong> <a href="13334.php">Stephan Hackstedt: "[OMPI users] ompi-ps failure on WinXP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13336.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Reply:</strong> <a href="13336.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
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
