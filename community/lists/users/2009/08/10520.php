<?
$subject_val = "[OMPI users] connection problem in btl_tcp_endpoint.c";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 09:49:40 2009" -->
<!-- isoreceived="20090831134940" -->
<!-- sent="Mon, 31 Aug 2009 15:49:31 +0200" -->
<!-- isosent="20090831134931" -->
<!-- name="J.S. van Bethlehem" -->
<!-- email="j.s.van.bethlehem_at_[hidden]" -->
<!-- subject="[OMPI users] connection problem in btl_tcp_endpoint.c" -->
<!-- id="4A9BD4EB.7010409_at_astro.rug.nl" -->
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
<strong>Subject:</strong> [OMPI users] connection problem in btl_tcp_endpoint.c<br>
<strong>From:</strong> J.S. van Bethlehem (<em>j.s.van.bethlehem_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-31 09:49:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10521.php">Marcus Daniels: "[OMPI users] problems with one sided MPI"</a>
<li><strong>Previous message:</strong> <a href="10519.php">Lenny Verkhovsky: "Re: [OMPI users] Help: OFED Version problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear users,
<br>
<p>I'm not sure whether this is the right place to go to with my problem,
<br>
but maybe someone can give me some leads. I'm trying to run 'Gadget2'
<br>
using OMPI 1.3.3. The installation seems fine; I can run simple programs
<br>
on as many machines/nodes I want using a machinefile. I can also run
<br>
Gadget2 on the CPUs of a single machine, but when I try to start the
<br>
program distributed over multiple machines I get:
<br>
<p>[virgo02][[20218,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 172.16.189.1 failed: Network is unreachable (101)
<br>
[virgo02][[20218,1],1][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 172.16.189.1 failed: Network is unreachable (101)
<br>
<p>here virgo02 is the name of the first machine in the machinefile:
<br>
$ head -n 1 machinefile
<br>
virgo02 slots=2
<br>
<p>Since I don't have this problem when running other simple programs, my
<br>
initial guess is that it has something to do with Gadget2, however this
<br>
particular message is created by OMPI. So has anyone ever seen this
<br>
before or does anyone has more concrete ideas about what could be going on?
<br>
<p>Greetings,
<br>
Jakob van Bethlehem
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10521.php">Marcus Daniels: "[OMPI users] problems with one sided MPI"</a>
<li><strong>Previous message:</strong> <a href="10519.php">Lenny Verkhovsky: "Re: [OMPI users] Help: OFED Version problem"</a>
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
