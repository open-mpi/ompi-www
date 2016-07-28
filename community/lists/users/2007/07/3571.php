<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  4 22:21:45 2007" -->
<!-- isoreceived="20070705022145" -->
<!-- sent="Thu, 05 Jul 2007 12:21:38 +1000" -->
<!-- isosent="20070705022138" -->
<!-- name="Graham Jenkins" -->
<!-- email="Graham.Jenkins_at_[hidden]" -->
<!-- subject="[OMPI users] Unable to find any HCAs .." -->
<!-- id="468C55B2.70102_at_its.monash.edu.au" -->
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
<strong>From:</strong> Graham Jenkins (<em>Graham.Jenkins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-04 22:21:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3572.php">Brian Barrett: "Re: [OMPI users] Unable to find any HCAs .."</a>
<li><strong>Previous message:</strong> <a href="3570.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3572.php">Brian Barrett: "Re: [OMPI users] Unable to find any HCAs .."</a>
<li><strong>Reply:</strong> <a href="3572.php">Brian Barrett: "Re: [OMPI users] Unable to find any HCAs .."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using the openmpi-1.1.1-5.el5.x86_64 RPM on a Scientific Linux 5 
<br>
cluster, with no installed HCAs. And a simple MPI job submitted to that 
<br>
cluster runs OK .. except that it issues messages for each node like the 
<br>
one shown below.  Is there some way I can supress these, perhaps by an 
<br>
appropriate entry in /etc/openmpi-mca-params.conf ?
<br>
<p><pre>
--
libibverbs: Fatal: couldn't open sysfs class 'infiniband_verbs'.
--------------------------------------------------------------------------
[0,1,0]: OpenIB on host localhost was unable to find any HCAs.
Another transport will be used instead, although this may result in
lower performance.
--
-- 
Graham Jenkins
Senior Software Specialist, E-Research
Email: Graham.Jenkins_at_[hidden]
Tel:   +613 9905-5942
Mob:   +614 4850-2491
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3572.php">Brian Barrett: "Re: [OMPI users] Unable to find any HCAs .."</a>
<li><strong>Previous message:</strong> <a href="3570.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3572.php">Brian Barrett: "Re: [OMPI users] Unable to find any HCAs .."</a>
<li><strong>Reply:</strong> <a href="3572.php">Brian Barrett: "Re: [OMPI users] Unable to find any HCAs .."</a>
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
