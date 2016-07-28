<?
$subject_val = "[OMPI users] setting the btl_tcp_eager_limit";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 13:20:46 2008" -->
<!-- isoreceived="20080428172046" -->
<!-- sent="Mon, 28 Apr 2008 19:20:32 +0200" -->
<!-- isosent="20080428172032" -->
<!-- name="jean-christophe.mignot_at_[hidden]" -->
<!-- email="jean-christophe.mignot_at_[hidden]" -->
<!-- subject="[OMPI users] setting the btl_tcp_eager_limit" -->
<!-- id="48160760.4040205_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> [OMPI users] setting the btl_tcp_eager_limit<br>
<strong>From:</strong> <a href="mailto:jean-christophe.mignot_at_[hidden]?Subject=Re:%20[OMPI%20users]%20setting%20the%20btl_tcp_eager_limit"><em>jean-christophe.mignot_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-04-28 13:20:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5555.php">Brian Taylor: "Re: [OMPI users] Processor affinitiy"</a>
<li><strong>Previous message:</strong> <a href="5553.php">Doug Reeder: "Re: [OMPI users] trouble building on a macbook"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5565.php">George Bosilca: "Re: [OMPI users] setting the btl_tcp_eager_limit"</a>
<li><strong>Reply:</strong> <a href="5565.php">George Bosilca: "Re: [OMPI users] setting the btl_tcp_eager_limit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;Hi all,
<br>
We're using a pingpong in order to measure the bandwidth and latency 
<br>
available with open MPI.
<br>
In our first experiments done with the 1.1.4 version, we were using the 
<br>
btl_tcp_eager_limit parameter to modify the eager limit. We've upgraded 
<br>
to the 1.2.6 version and the limit parameter we fix doesn't seem to be 
<br>
taken in account.  The value we want to use is 67108864. The command 
<br>
line is:
<br>
mpirun -np 2 -machinefile node_file -mca btl_tcp_sndbuf 4194304 -mca 
<br>
btl_tcp_rcvbuf 4194304 -mca btl_tcp_eager_limit 67108864 pingpong.
<br>
Is this parameter still useful (ompi_info shows that this parameter is 
<br>
still available) ?
<br>
Does anybody have any idea ?
<br>
Thanks in advance.
<br>
JC Mignot and Ludovic Hablot
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5555.php">Brian Taylor: "Re: [OMPI users] Processor affinitiy"</a>
<li><strong>Previous message:</strong> <a href="5553.php">Doug Reeder: "Re: [OMPI users] trouble building on a macbook"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5565.php">George Bosilca: "Re: [OMPI users] setting the btl_tcp_eager_limit"</a>
<li><strong>Reply:</strong> <a href="5565.php">George Bosilca: "Re: [OMPI users] setting the btl_tcp_eager_limit"</a>
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
