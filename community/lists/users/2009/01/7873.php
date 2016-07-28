<?
$subject_val = "[OMPI users] Issue with PBS Pro";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 10:32:05 2009" -->
<!-- isoreceived="20090129153205" -->
<!-- sent="Thu, 29 Jan 2009 16:32:02 +0100" -->
<!-- isosent="20090129153202" -->
<!-- name="Kiril Dichev" -->
<!-- email="dichev_at_[hidden]" -->
<!-- subject="[OMPI users] Issue with PBS Pro" -->
<!-- id="1233243122.32326.8.camel_at_hp-laptop" -->
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
<strong>Subject:</strong> [OMPI users] Issue with PBS Pro<br>
<strong>From:</strong> Kiril Dichev (<em>dichev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-29 10:32:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7874.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on Linux Itanium system&quot;"</a>
<li><strong>Previous message:</strong> <a href="7872.php">Wayne Gilmore: "[OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7881.php">Ralph Castain: "Re: [OMPI users] Issue with PBS Pro"</a>
<li><strong>Reply:</strong> <a href="7881.php">Ralph Castain: "Re: [OMPI users] Issue with PBS Pro"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to run with Open MPI 1.3 on a cluster using PBS Pro:
<br>
<p>pbs_version = PBSPro_9.2.0.81361
<br>
<p><p>However, after compiling with these options:
<br>
<p>../configure
<br>
--prefix=/home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit-dynamic-threads CC=/opt/intel/cce/10.1.015/bin/icc CXX=/opt/intel/cce/10.1.015/bin/icpc CPP=&quot;/opt/intel/cce/10.1.015/bin/icc -E&quot; FC=/opt/intel/fce/10.1.015/bin/ifort F90=/opt/intel/fce/10.1.015/bin/ifort F77=/opt/intel/fce/10.1.015/bin/ifort --enable-mpi-f90 --with-tm=/usr/pbs/ --enable-mpi-threads=yes --enable-contrib-no-build=vt
<br>
<p>I get runtime errors when running on more than one reserved node
<br>
even /bin/hostname:
<br>
<p>/home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit-dynamic-threads/bin/mpirun  -np 5  /bin/hostname 
<br>
/home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit-dynamic-threads/bin/mpirun: symbol lookup error: /home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit-dynamic-threads/lib/openmpi/mca_plm_tm.so: undefined symbol: tm_init
<br>
<p>When running on one node only, I don't get this error.
<br>
<p>Now, I see that I only have static PBS libraries so I tried to compile
<br>
this component statically. I added to the above configure:
<br>
&quot;--enable-mca-static=ras-tm,pls-tm&quot;
<br>
<p>However, nothing changed. The same errors occurr.
<br>
<p><p>But if I compile Open MPI only with static libraries (&quot;--enable-static
<br>
--disable-shared&quot;), the MPI (or non-MPI) programs run OK.
<br>
<p>Can you help me here ?
<br>
<p>Thanks,
<br>
Kiril
<br>
<p><p><p><pre>
-- 
Dipl.-Inf. Kiril Dichev
Tel.: +49 711 685 60492
E-mail: dichev_at_[hidden]
High Performance Computing Center Stuttgart (HLRS)
Universit&#195;&#164;t Stuttgart
70550 Stuttgart
Germany
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7874.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on Linux Itanium system&quot;"</a>
<li><strong>Previous message:</strong> <a href="7872.php">Wayne Gilmore: "[OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7881.php">Ralph Castain: "Re: [OMPI users] Issue with PBS Pro"</a>
<li><strong>Reply:</strong> <a href="7881.php">Ralph Castain: "Re: [OMPI users] Issue with PBS Pro"</a>
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
