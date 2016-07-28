<?
$subject_val = "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 10:43:11 2009" -->
<!-- isoreceived="20090330144311" -->
<!-- sent="Mon, 30 Mar 2009 16:43:04 +0200" -->
<!-- isosent="20090330144304" -->
<!-- name="Alessandro Surace" -->
<!-- email="zioalex_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init" -->
<!-- id="adbbb9af0903300743m417f563ej305ec1f8b51b535e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init<br>
<strong>From:</strong> Alessandro Surace (<em>zioalex_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 10:43:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8634.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Previous message:</strong> <a href="8632.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8666.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Reply:</strong> <a href="8666.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8717.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
I've a problem with the last stable build and the last nightly snapshot.
<br>
<p>When I run a job directly with mpirun no problem.
<br>
If I try to submit it with lsf:
<br>
bsub -a openmpi -m grid01 mpirun.lsf /mnt/ewd/mpi/fibonacci/fibonacci_mpi
<br>
<p>I get the follow error:
<br>
mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so:
<br>
undefined symbol: lsb_init
<br>
Job  /opt/lsf/7.0/linux2.6-glibc2.3-x86/bin/openmpi_wrapper
<br>
/mnt/ewd/mpi/fibonacci/fibonacci_mpi
<br>
<p>My lsf version is:
<br>
Platform LSF 7.0.4.115872, Sep 24 2008
<br>
Copyright 1992-2008 Platform Computing Corporation
<br>
<p>&nbsp;&nbsp;binary type: linux2.6-glibc2.3-x86
<br>
<p>while in attach the info about Open mpi.
<br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8633/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8633/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8633/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8634.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Previous message:</strong> <a href="8632.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8666.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Reply:</strong> <a href="8666.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8717.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
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
