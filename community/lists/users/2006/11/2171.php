<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov 10 11:57:09 2006" -->
<!-- isoreceived="20061110165709" -->
<!-- sent="Fri, 10 Nov 2006 11:55:55 -0500" -->
<!-- isosent="20061110165555" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] problems with gm support on OSX PPC" -->
<!-- id="43484394-FB70-4E1D-9722-9276ED8A27A9_at_umich.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-10 11:55:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2172.php">Manal Helal: "Re: [OMPI users] debugging problem"</a>
<li><strong>Previous message:</strong> <a href="2170.php">Ralph Castain: "Re: [OMPI users] debugging problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Users,
<br>
<p>We have seen a problem with OMPI-1.1.2 and 1.1.1 on gm on OSX G5's.    
<br>
The application is just HPL.  The runs get bad results when running  
<br>
OMPI over GM but are just fine when ran over TCP  (--mca btl ^gm).
<br>
<p>The gm version is 2.0.11,  We do not see this problem with lam-7.1.2   
<br>
and the problem still occurs with different nodes/cables and myrinet  
<br>
switch.   Because the problem happens with only OMPI built apps.  I  
<br>
figure this is the best place to start looking for posable causes.
<br>
<p>On a side note, OMPI was configured with tm,  spawning time is  
<br>
horribly slow even for just 2 nodes (4 cpus)
<br>
<p>======================================================================== 
<br>
====
<br>
T/V                N    NB     P     Q               Time              
<br>
Gflops
<br>
------------------------------------------------------------------------ 
<br>
<pre>
----
WR00L2L2        8000    80     2     2              28.92           
1.180e+01
------------------------------------------------------------------------ 
----
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =  
85506062224954416.0000000 ...... FAILED
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =  
290454392935.0558472 ...... FAILED
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =  
2864265481.4369669 ...... FAILED
||Ax-b||_oo  . . . . . . . . . . . . . . . . . =   156110557.630010
||A||_oo . . . . . . . . . . . . . . . . . . . =        2043.004083
||A||_1  . . . . . . . . . . . . . . . . . . . =        2055.583636
||x||_oo . . . . . . . . . . . . . . . . . . . =    30036515.855307
||x||_1  . . . . . . . . . . . . . . . . . . . =  2355097786.221416
Brock Palen
Center for Advanced Computing
brockp_at_[hidden]
(734)936-1985
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2172.php">Manal Helal: "Re: [OMPI users] debugging problem"</a>
<li><strong>Previous message:</strong> <a href="2170.php">Ralph Castain: "Re: [OMPI users] debugging problem"</a>
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
