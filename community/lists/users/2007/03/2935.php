<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 28 06:43:01 2007" -->
<!-- isoreceived="20070328104301" -->
<!-- sent="Wed, 28 Mar 2007 03:42:57 -0700 (PDT)" -->
<!-- isosent="20070328104257" -->
<!-- name="Bala" -->
<!-- email="cppbala_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI run with the  SGE launcher, orte PE calrification" -->
<!-- id="423057.57040.qm_at_web35114.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Bala (<em>cppbala_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-28 06:42:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2936.php">Götz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>Previous message:</strong> <a href="2934.php">Justin Bronder: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2936.php">Götz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>Reply:</strong> <a href="2936.php">Götz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We have installed OpenMPI in our cluster,
<br>
I can see from &quot;ompi_info&quot; gridengine support(FAQ:22)
<br>
is there,  now we are creating PE as mentioned in FAQ
<br>
<p>% qconf -sp orte
<br>
....
<br>
start_proc_args   /bin/true
<br>
stop_proc_args    /bin/true
<br>
...
<br>
<p>just want to know anybody successfully running in SGE
<br>
using this PE??
<br>
<p>from my mpich PE I can see start/stop arguments as
<br>
show below 
<br>
<p>start_proc_args   /opt/gridengine/mpi/startmpi.sh
<br>
-catch_rsh
<br>
$pe_hostfile
<br>
stop_proc_args    /opt/gridengine/mpi/stopmpi.sh
<br>
<p>thanks,
<br>
-bala-
<br>
<p><p><p>&nbsp;
<br>
____________________________________________________________________________________
<br>
Finding fabulous fares is fun.  
<br>
Let Yahoo! FareChase search your favorite travel sites to find flight and hotel bargains.
<br>
<a href="http://farechase.yahoo.com/promo-generic-14795097">http://farechase.yahoo.com/promo-generic-14795097</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2936.php">Götz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>Previous message:</strong> <a href="2934.php">Justin Bronder: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2936.php">Götz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>Reply:</strong> <a href="2936.php">Götz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
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
