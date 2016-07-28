<?
$subject_val = "[OMPI users] MPI over ethernet non default-adapter - Need Help/Advice";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 11:41:54 2009" -->
<!-- isoreceived="20090623154154" -->
<!-- sent="Tue, 23 Jun 2009 17:41:49 +0200" -->
<!-- isosent="20090623154149" -->
<!-- name="Andreas Hoelzlwimmer" -->
<!-- email="andreas.hoelzlwimmer_at_[hidden]" -->
<!-- subject="[OMPI users] MPI over ethernet non default-adapter - Need Help/Advice" -->
<!-- id="4A40F7BD.80400_at_fh-hagenberg.at" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] MPI over ethernet non default-adapter - Need Help/Advice<br>
<strong>From:</strong> Andreas Hoelzlwimmer (<em>andreas.hoelzlwimmer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 11:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9674.php">Rolf Vandevaart: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Previous message:</strong> <a href="9672.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9684.php">Gus Correa: "Re: [OMPI users] MPI over ethernet non default-adapter - Need	Help/Advice"</a>
<li><strong>Reply:</strong> <a href="9684.php">Gus Correa: "Re: [OMPI users] MPI over ethernet non default-adapter - Need	Help/Advice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I&#146;m using Open-MPI on a small Cluster of RHEL5.3-Nodes, current 
<br>
MPI-Version. For me it is a requirement now to run MPI over a certain 
<br>
adapter, in the current case the &#147;eth1&#148;-interface of my system. The 
<br>
adapter I want to use MPI for is not the default-adapter (eth0) all the 
<br>
rest of the traffic has to go over, but I cannot make MPI use the other 
<br>
adapter and therefore a different IP-Address.
<br>
<p>The exact problem, showed on 2 Nodes:
<br>
Node 1:
<br>
eth0: 10.42.0.21
<br>
eth1: 10.0.1.21
<br>
<p>Node 2:
<br>
eth0: 10.42.0.22
<br>
eth1: 10.0.1.22
<br>
<p>for testing purposes, I linked the eth1 adapters of both machines 
<br>
together directly and access the machines remotely via eth0. If I now 
<br>
try to run an MPI-Program (in this case the MPI-Benchmark HPL) with a 
<br>
hosts file that specifies 10.0.1.21 and 10.0.1.22 as hosts, it gets 
<br>
quite problematic. The &#147;netstat &#150;a&#148; command shows me that it uses the 
<br>
addresses 10.42.* for the connection, the --debug-demon flag tells me 
<br>
that MPI initializes both nodes, but after that it runs forever and does 
<br>
not terminate. In addition to that, apart from initial traffic of a 
<br>
couple of packets, it does not send any network traffic over either of 
<br>
the network adapters.
<br>
<p>Please tell me if any of you have encounter such a problem or setup and 
<br>
can tell me how to fix it. I tried modifying routing tables, play around 
<br>
with subnetting, but I wasn&#146;t able to get a successful connection. If 
<br>
you need more information on that, please tell me. Please note that I&#146;m 
<br>
quite new to Open-MPI, so it might possibly be something about Open-MPI 
<br>
I just haven&#146;t discovered yet.
<br>
<p><p>Best regards,
<br>
Andreas Hoelzlwimmer
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9674.php">Rolf Vandevaart: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Previous message:</strong> <a href="9672.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9684.php">Gus Correa: "Re: [OMPI users] MPI over ethernet non default-adapter - Need	Help/Advice"</a>
<li><strong>Reply:</strong> <a href="9684.php">Gus Correa: "Re: [OMPI users] MPI over ethernet non default-adapter - Need	Help/Advice"</a>
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
