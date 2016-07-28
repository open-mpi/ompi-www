<?
$subject_val = "[OMPI users] Notifier Framework howto";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 17:06:49 2009" -->
<!-- isoreceived="20091210220649" -->
<!-- sent="Thu, 10 Dec 2009 17:06:43 -0500" -->
<!-- isosent="20091210220643" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] Notifier Framework howto" -->
<!-- id="6E882F4C-77A0-45A2-82F2-5439659172AF_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] Notifier Framework howto<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 17:06:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11507.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11505.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11514.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
<li><strong>Reply:</strong> <a href="11514.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would like to try out the notifier framework, problem is I am having  
<br>
trouble finding documentation for it,  I am digging around the website  
<br>
and not finding much.
<br>
<p>Currently we have a problem where hosts are throwing up errors like:
<br>
[nyx0891.engin.umich.edu][[25560,1],45][btl_tcp_endpoint.c: 
<br>
631:mca_btl_tcp_endpoint_complete_connect] connect() failed:  
<br>
Connection timed out (110)
<br>
[nyx0887.engin.umich.edu][[25560,1],36][btl_tcp_endpoint.c: 
<br>
631:mca_btl_tcp_endpoint_complete_connect] connect() failed:  
<br>
Connection timed out (110)
<br>
[nyx0881.engin.umich.edu][[25560,1],13][btl_tcp_endpoint.c: 
<br>
631:mca_btl_tcp_endpoint_complete_connect] connect() failed:  
<br>
Connection timed out (110)
<br>
[nyx0888.engin.umich.edu][[25560,1],44][btl_tcp_endpoint.c: 
<br>
631:mca_btl_tcp_endpoint_complete_connect] connect() failed:  
<br>
Connection timed out (110)
<br>
[nyx0880.engin.umich.edu][[25560,1],12][btl_tcp_endpoint.c: 
<br>
631:mca_btl_tcp_endpoint_complete_connect] connect() failed:  
<br>
Connection timed out (110)
<br>
[nyx0880.engin.umich.edu][[25560,1],10][btl_tcp_endpoint.c: 
<br>
631:mca_btl_tcp_endpoint_complete_connect] connect() failed:  
<br>
Connection timed out (110)
<br>
etc,
<br>
<p>We would like when this happens to notify us, so we can put time  
<br>
stamps on events going on on the network.  Is this even possible with  
<br>
the frame work?  See we don't show any interfaces coming up and down,  
<br>
or any errors on interfaces, so we are looking to isolate the problem  
<br>
more.  Only the MPI library knows when this happens.
<br>
<p>Just that lack of docs for notifier framework, I am assuming I am just  
<br>
blind though. Any help on it would be great!
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11507.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11505.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11514.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
<li><strong>Reply:</strong> <a href="11514.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
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
