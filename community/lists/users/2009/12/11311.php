<?
$subject_val = "[OMPI users] Program deadlocks, on simple send/recv loop";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 10:47:00 2009" -->
<!-- isoreceived="20091201154700" -->
<!-- sent="Tue, 1 Dec 2009 10:46:54 -0500" -->
<!-- isosent="20091201154654" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] Program deadlocks, on simple send/recv loop" -->
<!-- id="13E7FC1A-8EB2-4163-ADC4-9A77437033D4_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] Program deadlocks, on simple send/recv loop<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 10:46:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11312.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11310.php">Jeff Squyres: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11312.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11312.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11343.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The attached code, is an example where openmpi/1.3.2 will lock up, if  
<br>
ran on 48 cores, of IB (4 cores per node),
<br>
The code loops over recv from all processors on rank 0 and sends from  
<br>
all other ranks, as far as I know this should work, and I can't see  
<br>
why not.
<br>
Note yes I know we can do the same thing with a gather, this is a  
<br>
simple case to demonstrate the issue.
<br>
Note that if I increase the openib eager limit, the program runs,  
<br>
which normally means improper MPI, but I can't on my own figure out  
<br>
the problem with this code.
<br>
<p>Any input on why code like this locks up, unless we up the eager  
<br>
buffer would be helpful, as we should be be having to up the buffer  
<br>
size, just to make code run, makes me feel hacky and dirty.
<br>
<p><p>

<br><p>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11311/sendbuf.f90">sendbuf.f90</a>
</ul>
<!-- attachment="sendbuf.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11312.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11310.php">Jeff Squyres: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11312.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11312.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11343.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
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
