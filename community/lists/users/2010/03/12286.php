<?
$subject_val = "[OMPI users] newbe question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  9 14:10:11 2010" -->
<!-- isoreceived="20100309191011" -->
<!-- sent="Tue, 09 Mar 2010 22:10:04 +0300" -->
<!-- isosent="20100309191004" -->
<!-- name="Vasiliy G Tolstov" -->
<!-- email="v.tolstov_at_[hidden]" -->
<!-- subject="[OMPI users] newbe question" -->
<!-- id="1268161804.3410.45.camel_at_mobile.selfvps.net" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] newbe question<br>
<strong>From:</strong> Vasiliy G Tolstov (<em>v.tolstov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-09 14:10:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12287.php">Lasse Kliemann: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>Previous message:</strong> <a href="12285.php">Douglas Guptill: "Re: [OMPI users] MPI_Comm_accept() busy waiting?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12289.php">Ralph Castain: "Re: [OMPI users] newbe question"</a>
<li><strong>Reply:</strong> <a href="12289.php">Ralph Castain: "Re: [OMPI users] newbe question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello.
<br>
Some times ago i run study MPI (openmpi). 
<br>
I need to write application (client/server) runs on 50 servers in
<br>
parallel. Each application can communicate with others by tcp/ip (send
<br>
commands, doing some parallel computations).
<br>
<p>Master - controls all clients - slaves (send control commands, if needed
<br>
restart clients). If master machine with server application die, some
<br>
other server need to recive master role and controls other slaves.
<br>
<p>Can i do this things with openmpi? Or i need to write standart tcp/ip
<br>
client/server application?
<br>
<p>I'm try to read some search results in google like this -
<br>
<a href="http://docs.sun.com/source/819-7480-11/ExecutingPrograms.htmlaopenmpi">http://docs.sun.com/source/819-7480-11/ExecutingPrograms.htmlaopenmpi</a>%
<br>
20orted%20persistent%20daemon
<br>
but orted return error:
<br>
<p>orted --daemonize
<br>
[mobile:24107] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
<br>
runtime/orte_init.c at line 125
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
<p><p>Thank You. Sorry for my poor english.
<br>
<p><p><pre>
-- 
Vasiliy G Tolstov &lt;v.tolstov_at_[hidden]&gt;
Selfip.Ru
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12287.php">Lasse Kliemann: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>Previous message:</strong> <a href="12285.php">Douglas Guptill: "Re: [OMPI users] MPI_Comm_accept() busy waiting?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12289.php">Ralph Castain: "Re: [OMPI users] newbe question"</a>
<li><strong>Reply:</strong> <a href="12289.php">Ralph Castain: "Re: [OMPI users] newbe question"</a>
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
