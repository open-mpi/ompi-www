<?
$subject_val = "Re: [OMPI users] Issue with PBS Pro";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 14:37:49 2009" -->
<!-- isoreceived="20090129193749" -->
<!-- sent="Thu, 29 Jan 2009 12:37:35 -0700" -->
<!-- isosent="20090129193735" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with PBS Pro" -->
<!-- id="ECBA3BBE-4646-4B0C-B002-6F9A8D7006B5_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1233243122.32326.8.camel_at_hp-laptop" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issue with PBS Pro<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-29 14:37:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7882.php">Rolf vandeVaart: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="7880.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;"</a>
<li><strong>In reply to:</strong> <a href="7873.php">Kiril Dichev: "[OMPI users] Issue with PBS Pro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7890.php">Kiril Dichev: "Re: [OMPI users] Issue with PBS Pro"</a>
<li><strong>Reply:</strong> <a href="7890.php">Kiril Dichev: "Re: [OMPI users] Issue with PBS Pro"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On a Torque system, your job is typically started on a backend node.  
<br>
Thus, you need to have the Torque libraries installed on those nodes -  
<br>
or else build OMPI static, as you found.
<br>
<p>I have never tried --enable-mca-static, so I have no idea if this  
<br>
works or what it actually does. If I want static, I just build the  
<br>
entire tree that way.
<br>
<p>If you want to run dynamic, though, you'll have to make the Torque  
<br>
libs available on the backend nodes.
<br>
<p>Ralph
<br>
<p><p>On Jan 29, 2009, at 8:32 AM, Kiril Dichev wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run with Open MPI 1.3 on a cluster using PBS Pro:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pbs_version = PBSPro_9.2.0.81361
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, after compiling with these options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../configure
</span><br>
<span class="quotelev1">&gt; --prefix=/home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3- 
</span><br>
<span class="quotelev1">&gt; intel10.1-64bit-dynamic-threads CC=/opt/intel/cce/10.1.015/bin/icc  
</span><br>
<span class="quotelev1">&gt; CXX=/opt/intel/cce/10.1.015/bin/icpc CPP=&quot;/opt/intel/cce/10.1.015/ 
</span><br>
<span class="quotelev1">&gt; bin/icc -E&quot; FC=/opt/intel/fce/10.1.015/bin/ifort F90=/opt/intel/fce/ 
</span><br>
<span class="quotelev1">&gt; 10.1.015/bin/ifort F77=/opt/intel/fce/10.1.015/bin/ifort --enable- 
</span><br>
<span class="quotelev1">&gt; mpi-f90 --with-tm=/usr/pbs/ --enable-mpi-threads=yes --enable- 
</span><br>
<span class="quotelev1">&gt; contrib-no-build=vt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get runtime errors when running on more than one reserved node
</span><br>
<span class="quotelev1">&gt; even /bin/hostname:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit- 
</span><br>
<span class="quotelev1">&gt; dynamic-threads/bin/mpirun  -np 5  /bin/hostname
</span><br>
<span class="quotelev1">&gt; /home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit- 
</span><br>
<span class="quotelev1">&gt; dynamic-threads/bin/mpirun: symbol lookup error: /home_nfs/parma/ 
</span><br>
<span class="quotelev1">&gt; x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit-dynamic-threads/ 
</span><br>
<span class="quotelev1">&gt; lib/openmpi/mca_plm_tm.so: undefined symbol: tm_init
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When running on one node only, I don't get this error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, I see that I only have static PBS libraries so I tried to compile
</span><br>
<span class="quotelev1">&gt; this component statically. I added to the above configure:
</span><br>
<span class="quotelev1">&gt; &quot;--enable-mca-static=ras-tm,pls-tm&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, nothing changed. The same errors occurr.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if I compile Open MPI only with static libraries (&quot;--enable-static
</span><br>
<span class="quotelev1">&gt; --disable-shared&quot;), the MPI (or non-MPI) programs run OK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you help me here ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Kiril
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Kiril Dichev
</span><br>
<span class="quotelev1">&gt; Tel.: +49 711 685 60492
</span><br>
<span class="quotelev1">&gt; E-mail: dichev_at_[hidden]
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Universit&#228;t Stuttgart
</span><br>
<span class="quotelev1">&gt; 70550 Stuttgart
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7882.php">Rolf vandeVaart: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="7880.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;"</a>
<li><strong>In reply to:</strong> <a href="7873.php">Kiril Dichev: "[OMPI users] Issue with PBS Pro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7890.php">Kiril Dichev: "Re: [OMPI users] Issue with PBS Pro"</a>
<li><strong>Reply:</strong> <a href="7890.php">Kiril Dichev: "Re: [OMPI users] Issue with PBS Pro"</a>
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
