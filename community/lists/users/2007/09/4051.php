<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 19:21:04 2007" -->
<!-- isoreceived="20070920232104" -->
<!-- sent="Thu, 20 Sep 2007 17:20:56 -0600" -->
<!-- isosent="20070920232056" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford.groups_at_[hidden]" -->
<!-- subject="[OMPI users] Bad performance - OpenIB 1.2.3" -->
<!-- id="200709201720.56743.ttelford.groups_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford.groups_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-20 19:20:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4052.php">Jeff Squyres: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<li><strong>Previous message:</strong> <a href="4050.php">Michael: "Re: [OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4160.php">Jeff Squyres: "Re: [OMPI users] Bad performance - OpenIB 1.2.3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4160.php">Jeff Squyres: "Re: [OMPI users] Bad performance - OpenIB 1.2.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm running Intel's IMB benchmark over an InfiniBand cluster; though other 
<br>
benchmarks that Open MPI has done fine in the past are also performing 
<br>
poorly.
<br>
<p>The cluster has DDR IB, and the fabric isn't seeing the kind of symbol errors 
<br>
that indicate a bad fabric; (non-mpi) bandwidth tests over the IB fabric are 
<br>
in the expected range.
<br>
<p>When the number of processes in IMB becomes greater than one node can handle, 
<br>
the bandwidth reported by IMB's 'Sendrecv',  and 'Exchange'  test drops from 
<br>
1.9 GB/sec (4 process - or one process per core in the first node) to 20 
<br>
MB/sec over 8 processes (and two nodes).  
<br>
<p>In other words, when we move from using shared memory and 'self' to an actual 
<br>
network interface, IMB reports _really_ lousy performance, lower by 30x than 
<br>
I've recorded for SDR IB.  (For the same test with a different cluster using 
<br>
SDR IB &amp; Open MPI, I've clocked ~650 MB/sec - quite a bit higher than 20 
<br>
MB/sec)
<br>
<p>On this cluster, however IMB's reported bandwidth remains the same from 2-36 
<br>
nodes, over DDR InfiniBand:  ~20 MB/sec
<br>
<p>We've used the OFED 1.1.1 and 1.2 driver releases so far.
<br>
<p>the command line is pretty simple:
<br>
mpirun -np 128 -machinefile &lt;foo&gt; -mca btl openib,sm,self ./IMB-MPI1
<br>
<p>As far as I'm aware, our command-line excludes TCP/IP (and hence ethernet) 
<br>
from being used; yet we're seeing speeds that are far below the abilities of 
<br>
InfiniBand.
<br>
<p>I've used Open MPI quite a bit, since before the 1.0 days; I've been dealing 
<br>
with IB for even longer.  (And the guy I'm writing in behalf of has used Open 
<br>
MPI on large IB systems as well).
<br>
<p>Even when we specify that only the 'openib' module be used, we are seeing 20 
<br>
MB/sec.
<br>
<p>Oddly enough, the management ethernet is 10/100, and 20 MB/sec seems 'in the 
<br>
same ballpark' as would be reported by IMB when 10/100 ethernet is used.
<br>
<p>We aren't receiving any error messages from Open MPI.  (As normally you would 
<br>
when part of the fabric is down.)
<br>
<p>So we're left a bit stumped:  We're getting speeds you would expect from 100 
<br>
Mbit ethernet, but we're specifying the IB interface, and not receiving any 
<br>
errors from Open MPI.  There isn't an unusual number of symbol errors (ie. 
<br>
errors are low, not increasing, etc.) on the IB fabric, the SM is up and 
<br>
operational.
<br>
<p>One more tidbit that is probably insignificant, but I'll mention anyway:  We 
<br>
are running IBM's GPFS via IPoIB, so there is a little bit of IB traffic from 
<br>
GPFS - which is also a configuration we've used with no problems in the past.
<br>
<p>Any ideas on what I can do to verify that OpenMPI is in fact using the IB 
<br>
fabric?
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4052.php">Jeff Squyres: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<li><strong>Previous message:</strong> <a href="4050.php">Michael: "Re: [OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4160.php">Jeff Squyres: "Re: [OMPI users] Bad performance - OpenIB 1.2.3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4160.php">Jeff Squyres: "Re: [OMPI users] Bad performance - OpenIB 1.2.3"</a>
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
