<?
$subject_val = "[OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 20 10:42:50 2008" -->
<!-- isoreceived="20080720144250" -->
<!-- sent="Sun, 20 Jul 2008 10:45:48 -0400" -->
<!-- isosent="20080720144548" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="[OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks" -->
<!-- id="48834F9C.3020308_at_scalableinformatics.com" -->
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
<strong>Subject:</strong> [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks<br>
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-20 10:45:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6095.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>Previous message:</strong> <a href="6093.php">Bill Broadley: "[OMPI users] Can't use tcp instead of openib/infinipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6095.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>Reply:</strong> <a href="6095.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks:
<br>
<p>&nbsp;&nbsp;&nbsp;This is a deeper dive into the code that was giving me fits over the 
<br>
last two weeks.
<br>
<p>&nbsp;&nbsp;&nbsp;It uses MPI_Waitsome and MPI_Allstart to launch/monitor progress. 
<br>
More on that in a moment.
<br>
<p>&nbsp;&nbsp;&nbsp;The testing I have done to date on this platform suggests that 
<br>
OpenMPI is working fine, though I don't normally exercise these two API 
<br>
functions.  Other MPI codes run without problem.  The gigabit and IB 
<br>
networks are operational, with no issues that I can spot.
<br>
<p>&nbsp;&nbsp;&nbsp;The symptoms:
<br>
<p>1) smaller test cases *sometimes* work, and sometimes hang.  The hanging 
<br>
appears (in strace) to be a tight loop in a poll.  Changing from default 
<br>
to btl tcp,self seems to help the code a little, and the test jobs run
<br>
repeatedly to conclusion.  The same binary, larger code, more CPUs (64 
<br>
vs 4), does not work, regardless of btl settings.
<br>
<p>2) this happens with OpenMPI 1.2.2, 1.2.6, 1.2.7.  I will check other 
<br>
stacks as well, but my hope is to use OpenMPI due to the nice (sane) 
<br>
interface to SGE.
<br>
<p>3) using btl to turn off sm and openib, generates lots of these messages:
<br>
<p>[c1-8][0,1,4][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() failed with errno=113
<br>
[c1-8][0,1,5][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() failed with errno=113
<br>
[c1-8][0,1,6][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() failed with errno=113
<br>
[c1-5][0,1,24][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() failed with errno=113
<br>
[c1-5][0,1,28][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() failed with errno=113
<br>
[c1-11][0,1,41][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() failed with errno=113
<br>
[c1-11][0,1,45][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() failed with errno=113
<br>
<p>The FAQ reports that this is a TCP error and the error number of 113 
<br>
corresponds to
<br>
<p>No route to host at -e line 1.
<br>
<p>This is wrong, all the nodes are visible from all the other nodes on a 
<br>
private subnet. For example:
<br>
<p>scalable:~ # pdsh &quot;ping -c 1 c1-8 | grep '64 bytes'&quot;
<br>
c1-1: 64 bytes from c1-8.susecluster (192.168.32.8): icmp_seq=1 ttl=64 
<br>
time=0.126 ms
<br>
c1-12: 64 bytes from c1-8.susecluster (192.168.32.8): icmp_seq=1 ttl=64 
<br>
time=0.067 ms
<br>
c1-13: 64 bytes from c1-8.susecluster (192.168.32.8): icmp_seq=1 ttl=64 
<br>
time=0.127 ms
<br>
c1-11: 64 bytes from c1-8.susecluster (192.168.32.8): icmp_seq=1 ttl=64 
<br>
time=0.084 ms
<br>
c1-4: 64 bytes from c1-8.susecluster (192.168.32.8): icmp_seq=1 ttl=64 
<br>
time=0.090 ms
<br>
c1-16: 64 bytes from c1-8.susecluster (192.168.32.8): icmp_seq=1 ttl=64 
<br>
time=0.116 ms
<br>
c1-14: 64 bytes from c1-8.susecluster (192.168.32.8): icmp_seq=1 ttl=64 
<br>
time=0.076 ms
<br>
c1-2: 64 bytes from c1-8.susecluster (192.168.32.8): icmp_seq=1 ttl=64 
<br>
time=0.113 ms
<br>
c1-3: 64 bytes from c1-8.susecluster (192.168.32.8): icmp_seq=1 ttl=64 
<br>
time=0.065 ms
<br>
c1-5: 64 bytes from c1-8.susecluster (192.168.32.8): icmp_seq=1 ttl=64 
<br>
time=0.127 ms
<br>
c1-17: 64 bytes from c1-8.susecluster (192.168.32.8): icmp_seq=1 ttl=64 
<br>
time=0.046 ms
<br>
c1-6: 64 bytes from c1-8.susecluster (192.168.32.8): icmp_seq=1 ttl=64 
<br>
time=0.073 ms
<br>
c1-8: 64 bytes from c1-8.susecluster (192.168.32.8): icmp_seq=1 ttl=64 
<br>
time=0.020 ms
<br>
c1-15: 64 bytes from c1-8.susecluster (192.168.32.8): icmp_seq=1 ttl=64 
<br>
time=0.109 ms
<br>
c1-7: 64 bytes from c1-8.susecluster (192.168.32.8): icmp_seq=1 ttl=64 
<br>
time=0.075 ms
<br>
c1-9: 64 bytes from c1-8.susecluster (192.168.32.8): icmp_seq=1 ttl=64 
<br>
time=0.098 ms
<br>
<p>Basically the problem appears to be that MPI_Waitsome is looping forever 
<br>
as it can't seem to see posted completions using IB.  With TCP, it 
<br>
appears to have other issues, that are problematic, though don't exhibit 
<br>
themselves with other tests.
<br>
<p>I am not sure if this is a bug in the implementation of MPI_Waitsome, 
<br>
though the odd behavior differences between the transports and the 
<br>
scaling observation, suggests some sort of buffer size issue.  Are there 
<br>
any specific things we can do to tweak internal OpenMPI buffer sizes to 
<br>
&nbsp;&nbsp;experiment with this?  Should I rebuild OpenMPI with -O0?  Should I 
<br>
use the Intel compiler for OpenMPI (using gcc 4.1.2 right now)?  Main 
<br>
code is in fortran and we are using Intel 10.1.015.  Are there any tcp 
<br>
stack issues I should be thinking about to deal with the 113 error (user 
<br>
would be ok with tcp while we get IB ironed out).
<br>
<p>Please advise.
<br>
<p><pre>
-- 
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics LLC,
email: landman_at_[hidden]
web  : <a href="http://www.scalableinformatics.com">http://www.scalableinformatics.com</a>
        <a href="http://jackrabbit.scalableinformatics.com">http://jackrabbit.scalableinformatics.com</a>
phone: +1 734 786 8423
fax  : +1 866 888 3112
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6095.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>Previous message:</strong> <a href="6093.php">Bill Broadley: "[OMPI users] Can't use tcp instead of openib/infinipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6095.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>Reply:</strong> <a href="6095.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
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
