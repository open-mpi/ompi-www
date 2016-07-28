<?
$subject_val = "[OMPI users] FW: hanging after many comm create/destroy's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 11:04:23 2009" -->
<!-- isoreceived="20090520150423" -->
<!-- sent="Wed, 20 May 2009 11:04:18 -0400" -->
<!-- isosent="20090520150418" -->
<!-- name="Lippert, Ross" -->
<!-- email="Ross.Lippert_at_[hidden]" -->
<!-- subject="[OMPI users] FW: hanging after many comm create/destroy's" -->
<!-- id="96333742376F884F89C59F423E34CEE4069154_at_mailnyc1.nyc.deshaw.com" -->
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
<strong>Subject:</strong> [OMPI users] FW: hanging after many comm create/destroy's<br>
<strong>From:</strong> Lippert, Ross (<em>Ross.Lippert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-20 11:04:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9405.php">Edgar Gabriel: "Re: [OMPI users] FW: hanging after many comm create/destroy's"</a>
<li><strong>Previous message:</strong> <a href="9403.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9405.php">Edgar Gabriel: "Re: [OMPI users] FW: hanging after many comm create/destroy's"</a>
<li><strong>Reply:</strong> <a href="9405.php">Edgar Gabriel: "Re: [OMPI users] FW: hanging after many comm create/destroy's"</a>
<li><strong>Maybe reply:</strong> <a href="9406.php">Lippert, Ross: "Re: [OMPI users] FW: hanging after many comm create/destroy's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
<p>The attached program prints hangs at after printing &quot;Iteration 65524&quot;.
<br>
It does not appear to me that it should.  Removal of the barrier call or
<br>
changing the barrier call to use MPI_COMM_WORLD does get rid of the
<br>
hang, so I believe this program is a minimal representation of a bug.
<br>
<p>I have attached the output of ompi_info --all as well.  I do not have
<br>
access to the config.log.
<br>
<p>The command to compile was
<br>
<p>mpicc mpibug.c
<br>
<p>The command to run was 
<br>
<p>orterun --np 8 --mca btl tcp,self -- ./a.out
<br>
<p><p>-r
<br>
<p>
<br><hr>
<ul>
<li>application/x-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9404/report.tgz">report.tgz</a>
</ul>
<!-- attachment="report.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9405.php">Edgar Gabriel: "Re: [OMPI users] FW: hanging after many comm create/destroy's"</a>
<li><strong>Previous message:</strong> <a href="9403.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9405.php">Edgar Gabriel: "Re: [OMPI users] FW: hanging after many comm create/destroy's"</a>
<li><strong>Reply:</strong> <a href="9405.php">Edgar Gabriel: "Re: [OMPI users] FW: hanging after many comm create/destroy's"</a>
<li><strong>Maybe reply:</strong> <a href="9406.php">Lippert, Ross: "Re: [OMPI users] FW: hanging after many comm create/destroy's"</a>
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
