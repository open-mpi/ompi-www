<?
$subject_val = "[OMPI users] InfiniBand, different OpenFabrics transport types";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 28 13:46:12 2011" -->
<!-- isoreceived="20110628174612" -->
<!-- sent="Tue, 28 Jun 2011 10:46:00 -0700 (PDT)" -->
<!-- isosent="20110628174600" -->
<!-- name="Bill Johnstone" -->
<!-- email="beejstone3_at_[hidden]" -->
<!-- subject="[OMPI users] InfiniBand, different OpenFabrics transport types" -->
<!-- id="1309283160.28789.YahooMailNeo_at_web121818.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] InfiniBand, different OpenFabrics transport types<br>
<strong>From:</strong> Bill Johnstone (<em>beejstone3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-28 13:46:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16774.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="16772.php">yanyg_at_[hidden]: "[OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16848.php">Jeff Squyres: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16848.php">Jeff Squyres: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all.
<br>
<p>I have a heterogeneous network of InfiniBand-equipped hosts which are all connected to the same backbone switch, an older SDR 10 Gb/s unit.
<br>
<p>One set of nodes uses the Mellanox &quot;ib_mthca&quot; driver, while the other uses the &quot;mlx4&quot; driver.
<br>
<p><p>This is on Linux 2.6.32, with Open MPI 1.5.3 .
<br>
<p><p>When I run Open MPI across these node types, I get an error message of the form:
<br>
<p>Open MPI detected two different OpenFabrics transport types in the same Infiniband network. 
<br>
Such mixed network trasport configuration is not supported by Open MPI.
<br>
<p>Local host: compute-chassis-1-node-01
<br>
Local adapter: mthca0 (vendor 0x5ad, part ID 25208) 
<br>
Local transport type: MCA_BTL_OPENIB_TRANSPORT_UNKNOWN 
<br>
<p>Remote host: compute-chassis-3-node-01
<br>
Remote Adapter: (vendor 0x2c9, part ID 26428) 
<br>
Remote transport type: MCA_BTL_OPENIB_TRANSPORT_IB
<br>
<p>Two questions:
<br>
<p>1. Why is this occurring if both adapters have all the OpenIB software set up?&#160; Is it because Open MPI is trying to use functionality such as ConnectX with the newer hardware, which is incompatible with older hardware, or is it something more mundane?
<br>
<p>2. How can I use IB amongst these heterogeneous nodes?
<br>
<p>Thank you.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16774.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="16772.php">yanyg_at_[hidden]: "[OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16848.php">Jeff Squyres: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16848.php">Jeff Squyres: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
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
