<?
$subject_val = "[OMPI users] localhost only";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 16 18:36:59 2012" -->
<!-- isoreceived="20120116233659" -->
<!-- sent="Mon, 16 Jan 2012 23:34:56 -0000" -->
<!-- isosent="20120116233456" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="[OMPI users] localhost only" -->
<!-- id="000001ccd4a7$751fff80$5f5ffe80$_at_com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] localhost only<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-16 18:34:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18173.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18171.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18173.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<li><strong>Reply:</strong> <a href="18173.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi,
<br>
<p>&nbsp;
<br>
<p>when my wireless adapter is down on my laptop, only localhost is configured.
<br>
<p>In this case, when I mpirun 2 binaries on my laptop, mpirun fails with this
<br>
error:
<br>
<p><p><p>&nbsp;
<br>
<p>It looks like orte_init failed for some reason; your parallel process i
<br>
<p>likely to abort.  There are many reasons that a parallel process can
<br>
<p>fail during orte_init; some of which are due to configuration or
<br>
<p>environment problems.  This failure appears to be an internal failure;
<br>
<p>here's some additional information (which may only be relevant to an
<br>
<p>Open MPI developer):
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;orte_rml_base_select failed
<br>
<p>&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>when I turn on the wireless adapter back on, the mpirun works fine
<br>
<p>&nbsp;
<br>
<p>Is there a way to make mpirun realize all my binaries run on the same box,
<br>
and therefore don't need any other interface but localhost?
<br>
<p>&nbsp;
<br>
<p>PS: this is ipconfig when the wireless adapter is off
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt;ipconfig /all
</span><br>
<p>&nbsp;
<br>
<p>Windows IP Configuration
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Host Name . . . . . . . . . . . . : 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Primary Dns Suffix  . . . . . . . : 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Node Type . . . . . . . . . . . . : Hybrid
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IP Routing Enabled. . . . . . . . : No
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WINS Proxy Enabled. . . . . . . . : No
<br>
<p>&nbsp;
<br>
<p>Ethernet adapter Wireless Network Connection:
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Media State . . . . . . . . . . . : Media disconnected
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description . . . . . . . . . . . : Intel(R) WiFi Link 5100 AGN
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Physical Address. . . . . . . . . : 
<br>
<p>&nbsp;
<br>
<p>rds,
<br>
<p>&nbsp;
<br>
<p>MM
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18172/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18173.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18171.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18173.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<li><strong>Reply:</strong> <a href="18173.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
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
