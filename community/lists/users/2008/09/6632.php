<?
$subject_val = "[OMPI users] TCP BTL in different subnets?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 19:00:28 2008" -->
<!-- isoreceived="20080919230028" -->
<!-- sent="Sat, 20 Sep 2008 01:00:24 +0200" -->
<!-- isosent="20080919230024" -->
<!-- name="Jeroen Kleijer" -->
<!-- email="jeroen.kleijer_at_[hidden]" -->
<!-- subject="[OMPI users] TCP BTL in different subnets?" -->
<!-- id="dad39cd60809191600l7534a2efqdbda2481f9724296_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] TCP BTL in different subnets?<br>
<strong>From:</strong> Jeroen Kleijer (<em>jeroen.kleijer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 19:00:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6633.php">Tim Mattox: "Re: [OMPI users] MPI Finalize"</a>
<li><strong>Previous message:</strong> <a href="6631.php">Brian Harker: "[OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6792.php">Jeff Squyres: "Re: [OMPI users] TCP BTL in different subnets?"</a>
<li><strong>Reply:</strong> <a href="6792.php">Jeff Squyres: "Re: [OMPI users] TCP BTL in different subnets?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to get an openmpi application running accross different
<br>
nodes but seem to have hit a snag when the processes are on different
<br>
nodes, especially when the machines are on different TCP subnets.
<br>
The orted daemons start up fine but after that application borks with
<br>
the message
<br>
<p>[0,1,2][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=111
<br>
<p>I've read in this thread
<br>
<a href="http://thread.gmane.org/gmane.comp.clustering.open-mpi.user/3427/focus=3437">http://thread.gmane.org/gmane.comp.clustering.open-mpi.user/3427/focus=3437</a>
<br>
that openmpi currently can't do this yet but (pre-release?) versions
<br>
of openmpi 1.3 will work.
<br>
I've tried compiling openmpi 1.3a (nightly build) and running my
<br>
program with that (compiled with the mpicc of openmpi 1.3a) but I got
<br>
the same error message.
<br>
<p>Can anybody confirm that:
<br>
1) openmpi has dificulties using the tcp btl accross different subnets
<br>
2) there are currently no workarounds for this.
<br>
<p>If there are solutions to this I'd really like to know about it as
<br>
I've been trying this for quite a while now.
<br>
<p>Regards,
<br>
<p>Jeroen Kleijer
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6633.php">Tim Mattox: "Re: [OMPI users] MPI Finalize"</a>
<li><strong>Previous message:</strong> <a href="6631.php">Brian Harker: "[OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6792.php">Jeff Squyres: "Re: [OMPI users] TCP BTL in different subnets?"</a>
<li><strong>Reply:</strong> <a href="6792.php">Jeff Squyres: "Re: [OMPI users] TCP BTL in different subnets?"</a>
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
