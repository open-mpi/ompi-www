<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 13 12:14:27 2007" -->
<!-- isoreceived="20070913161427" -->
<!-- sent="Thu, 13 Sep 2007 11:15:47 -0500" -->
<!-- isosent="20070913161547" -->
<!-- name="Tim Campbell" -->
<!-- email="tim.campbell_at_[hidden]" -->
<!-- subject="[OMPI users] connect failed with errno=111" -->
<!-- id="36AA0B11-AA1E-4E8C-BEEF-7E103FD0E787_at_nrlssc.navy.mil" -->
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
<strong>From:</strong> Tim Campbell (<em>tim.campbell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-13 12:15:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3998.php">Pak Lui: "Re: [OMPI users] connect failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="3996.php">jody: "Re: [OMPI users] OpenMPI Documentation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3998.php">Pak Lui: "Re: [OMPI users] connect failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="3998.php">Pak Lui: "Re: [OMPI users] connect failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="4000.php">Adrian Knoth: "Re: [OMPI users] connect failed with errno=111"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>I am using OpenMPI v1.2.3 via SGE on a network of amd64  
<br>
workstations.  When mpirun tries to start the processes on certain  
<br>
nodes I get the following error output.
<br>
<p>[sr70][0,1,2][btl_tcp_endpoint.c: 
<br>
572:mca_btl_tcp_endpoint_complete_connect] connect() failed with  
<br>
errno=111
<br>
[sr71][0,1,3][btl_tcp_endpoint.c: 
<br>
572:mca_btl_tcp_endpoint_complete_connect] connect() failed with  
<br>
errno=111
<br>
<p>Using perl -e 'die$!=111' I see that the error message is &quot;Connection  
<br>
refused&quot;.  I am able to connect to both nodes in question via ssh and/ 
<br>
or rsh.  I changed btl_base_debug to 2, but that did not provide  
<br>
additional information.
<br>
<p>What are some possible issues that might be causing this?  What can I  
<br>
do to get more information?
<br>
<p>Thanks,
<br>
~Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3998.php">Pak Lui: "Re: [OMPI users] connect failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="3996.php">jody: "Re: [OMPI users] OpenMPI Documentation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3998.php">Pak Lui: "Re: [OMPI users] connect failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="3998.php">Pak Lui: "Re: [OMPI users] connect failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="4000.php">Adrian Knoth: "Re: [OMPI users] connect failed with errno=111"</a>
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
