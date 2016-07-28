<?
$subject_val = "[OMPI users] How to reduce the use of the network by Open MPI job?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 27 09:33:40 2012" -->
<!-- isoreceived="20121127143340" -->
<!-- sent="Tue, 27 Nov 2012 15:33:35 +0100" -->
<!-- isosent="20121127143335" -->
<!-- name="just me" -->
<!-- email="justme12122012_at_[hidden]" -->
<!-- subject="[OMPI users] How to reduce the use of the network by Open MPI job?" -->
<!-- id="CAOqUk9pnfmufwYDyjcrqJ=kNUczn6+H7jLWmf99B3+XSj_XpEA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How to reduce the use of the network by Open MPI job?<br>
<strong>From:</strong> just me (<em>justme12122012_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-27 09:33:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20775.php">George Markomanolis: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Previous message:</strong> <a href="20773.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all, I have a question related to Open MPI btl_tcp module. How to slow
<br>
down OMPI in terms of network utilization ? My OpenMPI based application
<br>
(lets call it APP1) is sharing hardware components with other software
<br>
(lets call it APP2) which is very sensitive on network saturation. The APP2
<br>
suffers from lost &#147;KEEP_ALIVE_RESPONSE&#148; like tcp packages. Things are more
<br>
complicated because of below described architecture constraints or other
<br>
reasons:
<br>
<p>&nbsp;&nbsp;&nbsp;- We are using Open MPI version 1.4.3 and we rather do not want to
<br>
&nbsp;&nbsp;&nbsp;migrate to newer version right now
<br>
&nbsp;&nbsp;&nbsp;- computational nodes have a some company internal Linux distribution
<br>
&nbsp;&nbsp;&nbsp;(2.6.x core version)
<br>
&nbsp;&nbsp;&nbsp;- I've done some external patches on OMPI 1.4.3 source codes in order to
<br>
&nbsp;&nbsp;&nbsp;address problem with lack of support for the multiple NIC aliases (in
<br>
&nbsp;&nbsp;&nbsp;conjunction with bonds) by OMPI.
<br>
<p><p>&nbsp;&nbsp;&nbsp;1. Ifconfig says us that on every node we have 3 NIC aliases (3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;different IP and names with pattern such as: xxx0, xxx0:0, xxx0:1) in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;conjunction with bond configuration (all have the same HWaddr)
<br>
<p><p>&nbsp;&nbsp;&nbsp;- My patch wasn't so sophisticated, the main idea was to just store a
<br>
&nbsp;&nbsp;&nbsp;local NIC index instead of kernel NIC index. Then I modified the
<br>
&nbsp;&nbsp;&nbsp;mca_btl_tcp_proc_accept() method to iterate over all published by peer
<br>
&nbsp;&nbsp;&nbsp;endpoint NIC IP's (I made some changes to the *
<br>
&nbsp;&nbsp;&nbsp;mca_btl_tcp_component_exchange* method ...) .
<br>
&nbsp;&nbsp;&nbsp;- I'm not allowed to add some new Linux core modules which could be used
<br>
&nbsp;&nbsp;&nbsp;to limit network bandwidth on OS level :(
<br>
<p><p>Any tips are very appreciated
<br>
<p><p>&nbsp;Best Regards, Sylvester
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20774/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20775.php">George Markomanolis: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Previous message:</strong> <a href="20773.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
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
