<?
$subject_val = "Re: [OMPI users] openMPI shared with NFS, but says different version";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 18:59:50 2010" -->
<!-- isoreceived="20100727225950" -->
<!-- sent="Tue, 27 Jul 2010 18:59:29 -0400" -->
<!-- isosent="20100727225929" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI shared with NFS, but says different version" -->
<!-- id="4C4F64D1.8050602_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimVnOuU2GNm_VwwvQyBFFm1rMY=KhZz_JzV4Sav_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI shared with NFS, but says different version<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-27 18:59:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13811.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13809.php">Cristobal Navarro: "[OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13809.php">Cristobal Navarro: "[OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13811.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13811.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Cristobal
<br>
<p>Try using the --prefix option of mpiexec.
<br>
&quot;man mpiexec&quot; is your friend!
<br>
<p>Alternatively, append the OpenMPI directories to your
<br>
PATH *and* LD_LIBRARY_PATH on your .bashrc/.csrhc file
<br>
See this FAQ:
<br>
<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p>I hope it helps,
<br>
Gus Correa
<br>
<p>Cristobal Navarro wrote:
<br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even when executing a hello world openmpi, i get this error, which is 
</span><br>
<span class="quotelev1">&gt; then ignored.
</span><br>
<span class="quotelev1">&gt; fcluster_at_fuego:~$ mpirun --hostfile myhostfile -np 5 testMPI/hola 
</span><br>
<span class="quotelev1">&gt; [agua:02357] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:02354] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:02356] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:02358] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:02355] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:02358] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:02355] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:02354] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:02356] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:02357] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; Process 3 on agua out of 5
</span><br>
<span class="quotelev1">&gt; Process 4 on agua out of 5
</span><br>
<span class="quotelev1">&gt; Process 1 on agua out of 5
</span><br>
<span class="quotelev1">&gt; Process 2 on agua out of 5
</span><br>
<span class="quotelev1">&gt; Process 0 on agua out of 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/ is shared through NFS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; master node did had an older openmpi version before installing 1.4.2, 
</span><br>
<span class="quotelev1">&gt; but i removed them all with
</span><br>
<span class="quotelev1">&gt; sudo apt-get --purge remove libopenmpi1 libopenmpi-dev openmpi-bin 
</span><br>
<span class="quotelev1">&gt; openmpi-dev openmpi-common
</span><br>
<span class="quotelev1">&gt; i checked for /usr/lib64/openmpi   and for  /usr/lib/openmpi   and 
</span><br>
<span class="quotelev1">&gt; deleted them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; however, when compiling again i keep getting this error,
</span><br>
<span class="quotelev1">&gt; something must be remaining from the older version of openmpi, but i 
</span><br>
<span class="quotelev1">&gt; really dont know where that remaining could be.
</span><br>
<span class="quotelev1">&gt; any help, welcome
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="13811.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13809.php">Cristobal Navarro: "[OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13809.php">Cristobal Navarro: "[OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13811.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13811.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
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
