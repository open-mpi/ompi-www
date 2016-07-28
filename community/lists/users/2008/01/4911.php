<?
$subject_val = "[OMPI users] general problems with Open mpi and WRF";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 02:36:14 2008" -->
<!-- isoreceived="20080130073614" -->
<!-- sent="Wed, 30 Jan 2008 08:36:06 +0100" -->
<!-- isosent="20080130073606" -->
<!-- name="Martin Horvat" -->
<!-- email="martin.horvat_at_[hidden]" -->
<!-- subject="[OMPI users] general problems with Open mpi and WRF" -->
<!-- id="20080130083606.1cb3e0e8_at_localhost.localdomain" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] general problems with Open mpi and WRF<br>
<strong>From:</strong> Martin Horvat (<em>martin.horvat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 02:36:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4912.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4910.php">Jeff Squyres: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4931.php">Jeff Squyres: "Re: [OMPI users] general problems with Open mpi and WRF"</a>
<li><strong>Reply:</strong> <a href="4931.php">Jeff Squyres: "Re: [OMPI users] general problems with Open mpi and WRF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ompi users,
<br>
<p>I am new to HPC, but I am helping a friend to compile and run WRF (Weather research and forcasting) on our simple cluster: Intel Xeon PCs connected via 1G ethernet.
<br>
<p>(1) First I would like to clarify the problem connected to open-mpi. It was compiled with intel suit:
<br>
<p>ifort --version
<br>
ifort (IFORT) 10.0 20070613
<br>
Copyright (C) 1985-2007 Intel Corporation.  All rights reserved.
<br>
<p>using configuraton
<br>
<p>./configure --prefix=/data/horvat/rahela/openmpi CC=icc CXX=icpc F77=ifort FC=ifort --without-memory-manager
<br>
<p>The flag &quot;--without-memory-manager&quot; is used as I had problems with some &quot;opal wrapper&quot; at compiling stage. Perhaps it is important to mention that I have compiled open_mpi as a normal user on the cluster with maui/torque schedule manager.
<br>
<p>By running &quot;ompi_info -a&quot; in by bash shell i get first number numerious such messages
<br>
<p>mca: base: component_find: unable to open ***
<br>
<p>after that I guess I get the normal status of the open-mpi that I have installed. I attach the whole output in a.dat.gz.
<br>
<p>(2) By test running of successfuly compiler WRF programs I get also some similar errors as described above, which are all connected to open-mpi. The list of errors ends with the line
<br>
<p>[asgard:18655] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init_stage1.c at line 182
<br>
<p>before giving some general remarks about MPI status. I attach the errors in &quot;b.dat.gz&quot;. 
<br>
<p>I would greatly appreciate if I/We could solve at least the first OPEN-MPI question as I don't know much about WRF anyway.
<br>
<p>Thank in advance,
<br>
<p>Martin
<br>
<p>&nbsp;
<br>
<p>

<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4911/a.dat.gz">a.dat.gz</a>
</ul>
<!-- attachment="a.dat.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4911/b.dat.gz">b.dat.gz</a>
</ul>
<!-- attachment="b.dat.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4912.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4910.php">Jeff Squyres: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4931.php">Jeff Squyres: "Re: [OMPI users] general problems with Open mpi and WRF"</a>
<li><strong>Reply:</strong> <a href="4931.php">Jeff Squyres: "Re: [OMPI users] general problems with Open mpi and WRF"</a>
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
