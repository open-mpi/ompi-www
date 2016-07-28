<?
$subject_val = "Re: [OMPI users] Issue with PBS Pro";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 04:29:37 2009" -->
<!-- isoreceived="20090130092937" -->
<!-- sent="Fri, 30 Jan 2009 10:28:52 +0100" -->
<!-- isosent="20090130092852" -->
<!-- name="Kiril Dichev" -->
<!-- email="dichev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with PBS Pro" -->
<!-- id="1233307732.3289.9.camel_at_hp-laptop" -->
<!-- charset="utf-8" -->
<!-- inreplyto="ECBA3BBE-4646-4B0C-B002-6F9A8D7006B5_at_lanl.gov" -->
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
<strong>From:</strong> Kiril Dichev (<em>dichev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 04:28:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7891.php">Peter Kjellstrom: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Previous message:</strong> <a href="7889.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>In reply to:</strong> <a href="7881.php">Ralph Castain: "Re: [OMPI users] Issue with PBS Pro"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I did a few things wrong before:
<br>
<p>1. The new name of the component &quot;pls&quot; is &quot;plm&quot;.
<br>
2. It seems for the components, now a &quot;:&quot; separation is used instead of
<br>
a &quot;-&quot; separation.
<br>
<p>Anyway, for me specifying &quot;--enable-mca-static=plm:tm&quot; seems to fix the
<br>
problem - I still have shared libraries for Open MPI with statically
<br>
compiled Torque support.
<br>
<p>Cheers,
<br>
Kiril
<br>
<p>On Thu, 2009-01-29 at 12:37 -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On a Torque system, your job is typically started on a backend node.  
</span><br>
<span class="quotelev1">&gt; Thus, you need to have the Torque libraries installed on those nodes -  
</span><br>
<span class="quotelev1">&gt; or else build OMPI static, as you found.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have never tried --enable-mca-static, so I have no idea if this  
</span><br>
<span class="quotelev1">&gt; works or what it actually does. If I want static, I just build the  
</span><br>
<span class="quotelev1">&gt; entire tree that way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you want to run dynamic, though, you'll have to make the Torque  
</span><br>
<span class="quotelev1">&gt; libs available on the backend nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 29, 2009, at 8:32 AM, Kiril Dichev wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to run with Open MPI 1.3 on a cluster using PBS Pro:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; pbs_version = PBSPro_9.2.0.81361
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, after compiling with these options:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ../configure
</span><br>
<span class="quotelev2">&gt; &gt; --prefix=/home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3- 
</span><br>
<span class="quotelev2">&gt; &gt; intel10.1-64bit-dynamic-threads CC=/opt/intel/cce/10.1.015/bin/icc  
</span><br>
<span class="quotelev2">&gt; &gt; CXX=/opt/intel/cce/10.1.015/bin/icpc CPP=&quot;/opt/intel/cce/10.1.015/ 
</span><br>
<span class="quotelev2">&gt; &gt; bin/icc -E&quot; FC=/opt/intel/fce/10.1.015/bin/ifort F90=/opt/intel/fce/ 
</span><br>
<span class="quotelev2">&gt; &gt; 10.1.015/bin/ifort F77=/opt/intel/fce/10.1.015/bin/ifort --enable- 
</span><br>
<span class="quotelev2">&gt; &gt; mpi-f90 --with-tm=/usr/pbs/ --enable-mpi-threads=yes --enable- 
</span><br>
<span class="quotelev2">&gt; &gt; contrib-no-build=vt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I get runtime errors when running on more than one reserved node
</span><br>
<span class="quotelev2">&gt; &gt; even /bin/hostname:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit- 
</span><br>
<span class="quotelev2">&gt; &gt; dynamic-threads/bin/mpirun  -np 5  /bin/hostname
</span><br>
<span class="quotelev2">&gt; &gt; /home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit- 
</span><br>
<span class="quotelev2">&gt; &gt; dynamic-threads/bin/mpirun: symbol lookup error: /home_nfs/parma/ 
</span><br>
<span class="quotelev2">&gt; &gt; x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit-dynamic-threads/ 
</span><br>
<span class="quotelev2">&gt; &gt; lib/openmpi/mca_plm_tm.so: undefined symbol: tm_init
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When running on one node only, I don't get this error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now, I see that I only have static PBS libraries so I tried to compile
</span><br>
<span class="quotelev2">&gt; &gt; this component statically. I added to the above configure:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;--enable-mca-static=ras-tm,pls-tm&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, nothing changed. The same errors occurr.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But if I compile Open MPI only with static libraries (&quot;--enable-static
</span><br>
<span class="quotelev2">&gt; &gt; --disable-shared&quot;), the MPI (or non-MPI) programs run OK.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you help me here ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Kiril
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Dipl.-Inf. Kiril Dichev
</span><br>
<span class="quotelev2">&gt; &gt; Tel.: +49 711 685 60492
</span><br>
<span class="quotelev2">&gt; &gt; E-mail: dichev_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev2">&gt; &gt; Universit&#195;&#164;t Stuttgart
</span><br>
<span class="quotelev2">&gt; &gt; 70550 Stuttgart
</span><br>
<span class="quotelev2">&gt; &gt; Germany
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
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
<li><strong>Next message:</strong> <a href="7891.php">Peter Kjellstrom: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Previous message:</strong> <a href="7889.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>In reply to:</strong> <a href="7881.php">Ralph Castain: "Re: [OMPI users] Issue with PBS Pro"</a>
<!-- nextthread="start" -->
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
