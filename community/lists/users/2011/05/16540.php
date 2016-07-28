<?
$subject_val = "Re: [OMPI users] Scheduling dynamically spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 13 18:11:23 2011" -->
<!-- isoreceived="20110513221123" -->
<!-- sent="Fri, 13 May 2011 19:11:19 -0300" -->
<!-- isosent="20110513221119" -->
<!-- name="Rodrigo Silva Oliveira" -->
<!-- email="rsilva_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scheduling dynamically spawned processes" -->
<!-- id="BANLkTi=uXGZ7hxk-RJA=Oj9bTAcePJGQQg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Scheduling dynamically spawned processes" -->
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
<strong>Subject:</strong> Re: [OMPI users] Scheduling dynamically spawned processes<br>
<strong>From:</strong> Rodrigo Silva Oliveira (<em>rsilva_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-13 18:11:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16541.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Previous message:</strong> <a href="16539.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Maybe in reply to:</strong> <a href="16534.php">Rodrigo Oliveira: "[OMPI users] Scheduling dynamically spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16541.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Reply:</strong> <a href="16541.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I think I was not specific enough. I need to spawn the copies of a process
<br>
in a unique mpi_spawn call. It is, I have to specify a list of machines and
<br>
how many copies of the process will be spawned on each one. Is it possible?
<br>
<p>I would be something like that:
<br>
<p>machines     #copies
<br>
m1                1
<br>
m2                3
<br>
m3                1
<br>
<p>After an unique call to spawn, I want the copies running in this fashion. I
<br>
tried use a hostfile with the option slot, but I'm not sure if it is the
<br>
best way.
<br>
<p>hostfile:
<br>
<p>m1 slots=1
<br>
m2 slots=3
<br>
m3 slots=1
<br>
<p>Thanks
<br>
<p><pre>
-- 
Rodrigo Silva Oliveira
M.Sc. Student - Computer Science
Universidade Federal de Minas Gerais
www.dcc.ufmg.br/~rsilva &lt;<a href="http://www.dcc.ufmg.br/%7Ersilva">http://www.dcc.ufmg.br/%7Ersilva</a>&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16540/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16541.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Previous message:</strong> <a href="16539.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Maybe in reply to:</strong> <a href="16534.php">Rodrigo Oliveira: "[OMPI users] Scheduling dynamically spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16541.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Reply:</strong> <a href="16541.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
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
