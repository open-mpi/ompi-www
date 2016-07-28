<?
$subject_val = "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 15:54:11 2012" -->
<!-- isoreceived="20121206205411" -->
<!-- sent="Thu, 6 Dec 2012 12:54:06 -0800" -->
<!-- isosent="20121206205406" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2" -->
<!-- id="E4D4A407-AD06-4DBA-B813-F8DA915C5AB3_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F0658F4E7C8A084AB7E7895A257838CC5AB7C01AE6_at_ADMMBX5.adf.bham.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-06 15:54:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20890.php">Gunter, David O: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="20888.php">Paul Hatton: "[OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="20888.php">Paul Hatton: "[OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20891.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Reply:</strong> <a href="20891.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have not tested with gfortran 4.7.2.
<br>
<p>Can you send the config.log file? (please compress)
<br>
<p><p>On Dec 6, 2012, at 12:42 PM, Paul Hatton wrote:
<br>
<p><span class="quotelev1">&gt; I've searched the FAQ but not come up with anything about this ... with OpenMPI 1.6.3 and gcc 4.7.2, when I
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure  --prefix=/gpfs/apps/openmpi/1.6.3/gcc_4.7.2-tm-ib \
</span><br>
<span class="quotelev1">&gt;  F77=gfortran FC=gfortran CC=gcc CXX=c++ \
</span><br>
<span class="quotelev1">&gt;  --with-tm=/gpfs/sysapps/torque/4.1.2 \
</span><br>
<span class="quotelev1">&gt;  --with-openib \
</span><br>
<span class="quotelev1">&gt;  2&gt;&amp;1|tee ../logs/configure-`date +%y_%m_%d_%Hh%Mm`.log
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure fails with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking Fortran 90 kind of MPI_INTEGER_KIND (selected_int_kind(9))...
</span><br>
<span class="quotelev1">&gt;    configure: error: Could not determine kind of selected_int_kind(MPI_INTEGER_KIND)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone built 1.6.3 with gcc 4.7.2? It build fine with Intel 2013.0.079 and also the system (Scientific Linux 6.3) gcc which is 4.4.6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've attached the output from the configure command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul Hatton
</span><br>
<span class="quotelev1">&gt; High Performance Computing and Visualisation Specialist
</span><br>
<span class="quotelev1">&gt; IT Services, The University of Birmingham
</span><br>
<span class="quotelev1">&gt; Ph: 0121-414-3994  Mob: 07785-977340  Skype: P.S.Hatton
</span><br>
<span class="quotelev1">&gt; [Service Manager, Birmingham Environment for Academic Research]
</span><br>
<span class="quotelev1">&gt; [Also Technical Director, IBM Visual and Spatial Technology Centre]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;configure-12_12_06_19h48m.log&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20890.php">Gunter, David O: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="20888.php">Paul Hatton: "[OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="20888.php">Paul Hatton: "[OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20891.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Reply:</strong> <a href="20891.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
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
