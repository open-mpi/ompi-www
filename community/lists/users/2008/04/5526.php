<?
$subject_val = "[OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 14:23:19 2008" -->
<!-- isoreceived="20080425182319" -->
<!-- sent="Fri, 25 Apr 2008 14:27:39 -0400" -->
<!-- isosent="20080425182739" -->
<!-- name="Roopesh Ojha" -->
<!-- email="rojha_at_[hidden]" -->
<!-- subject="[OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster" -->
<!-- id="C8E9EFD3-C247-47B9-8A3D-85AB9B9F7DA3_at_usno.navy.mil" -->
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
<strong>Subject:</strong> [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster<br>
<strong>From:</strong> Roopesh Ojha (<em>rojha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 14:27:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5527.php">Gregory John Orris: "[OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Previous message:</strong> <a href="5525.php">Michael: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5546.php">Alberto Giannetti: "Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="5546.php">Alberto Giannetti: "Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5598.php">Jeff Squyres: "Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>As a newcomer to the world of openMPI who has perused the faq and  
<br>
searched
<br>
the archives, I have a few questions about how to schedule processes  
<br>
across
<br>
a heterogeneous cluster where some processes must be bound to particular
<br>
nodes and where some processes will not be compute bound, meaning more
<br>
processes than CPU cores is likely desired. Allow me to first  
<br>
describe our
<br>
situation and then ask some specific questions.
<br>
<p>We have a cluster of four nodes/hosts. Two of these have a single  
<br>
Pentium3
<br>
0.8GHz processor each. The other two have dual core processors. Our data
<br>
resides on two external drives that are mounted on the two fast machines
<br>
but are visible to all nodes over nfs. Our setup is not a real  
<br>
cluster in
<br>
the sense that we are using ssh over nfs to link our nodes.
<br>
<p>For our application, some processes (manager and the datastreams) won't
<br>
take much CPU power while others will. Our application first assigns the
<br>
non-compute bound processes and then the high CPU power ones. Clearly we
<br>
would like to be able to assign the former processes to our two slower
<br>
machines. How can we get MPI to achieve this? What is the best way to  
<br>
use
<br>
slot and max-slot commands in the hostfile to optimize performance? How
<br>
does max-slot behave when some node is listed more than once in the  
<br>
hostfile?
<br>
Is there any way to control where processes are deployed apart from the
<br>
basic bynode or byslot round robin schedule?
<br>
<p>Many thanks for your time.
<br>
Regards
<br>
Roo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5527.php">Gregory John Orris: "[OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Previous message:</strong> <a href="5525.php">Michael: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5546.php">Alberto Giannetti: "Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="5546.php">Alberto Giannetti: "Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5598.php">Jeff Squyres: "Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
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
