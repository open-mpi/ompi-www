<?
$subject_val = "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 16:17:32 2012" -->
<!-- isoreceived="20121206211732" -->
<!-- sent="Thu, 6 Dec 2012 13:17:27 -0800" -->
<!-- isosent="20121206211727" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2" -->
<!-- id="F1FAF69B-B540-40A1-8A30-36E24184C577_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3685_1354828301_qB6LBa2h028615_F0658F4E7C8A084AB7E7895A257838CC5AB7C01AE8_at_ADMMBX5.adf.bham.ac.uk" -->
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
<strong>Date:</strong> 2012-12-06 16:17:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20893.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="20891.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="20891.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20894.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Reply:</strong> <a href="20894.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Reply:</strong> <a href="20895.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This does not appear to be the right config.log -- the test in question passed:
<br>
<p>configure:53489: checking Fortran 90 kind of MPI_INTEGER_KIND (selected_int_kind(9))
<br>
configure:53507: gfortran   -o conftest conftestf.f90  
<br>
configure:53514: $? = 0
<br>
<p><p><p>On Dec 6, 2012, at 1:11 PM, Paul Hatton wrote:
<br>
<p><span class="quotelev1">&gt; Thanks. zip-ed config.log attached
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Sent: 06 December 2012 20:54
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc
</span><br>
<span class="quotelev2">&gt;&gt; 4.7.2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have not tested with gfortran 4.7.2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you send the config.log file? (please compress)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 6, 2012, at 12:42 PM, Paul Hatton wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've searched the FAQ but not come up with anything about this ...
</span><br>
<span class="quotelev2">&gt;&gt; with OpenMPI 1.6.3 and gcc 4.7.2, when I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure  --prefix=/gpfs/apps/openmpi/1.6.3/gcc_4.7.2-tm-ib \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; F77=gfortran FC=gfortran CC=gcc CXX=c++ \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-tm=/gpfs/sysapps/torque/4.1.2 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-openib \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2&gt;&amp;1|tee ../logs/configure-`date +%y_%m_%d_%Hh%Mm`.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure fails with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking Fortran 90 kind of MPI_INTEGER_KIND
</span><br>
<span class="quotelev2">&gt;&gt; (selected_int_kind(9))...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   configure: error: Could not determine kind of
</span><br>
<span class="quotelev2">&gt;&gt; selected_int_kind(MPI_INTEGER_KIND)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone built 1.6.3 with gcc 4.7.2? It build fine with Intel
</span><br>
<span class="quotelev2">&gt;&gt; 2013.0.079 and also the system (Scientific Linux 6.3) gcc which is
</span><br>
<span class="quotelev2">&gt;&gt; 4.4.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've attached the output from the configure command.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul Hatton
</span><br>
<span class="quotelev3">&gt;&gt;&gt; High Performance Computing and Visualisation Specialist
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IT Services, The University of Birmingham
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph: 0121-414-3994  Mob: 07785-977340  Skype: P.S.Hatton
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Service Manager, Birmingham Environment for Academic Research]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Also Technical Director, IBM Visual and Spatial Technology Centre]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;configure-
</span><br>
<span class="quotelev2">&gt;&gt; 12_12_06_19h48m.log&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** WARNING:  This email contains an attachment of a very suspicious type.  **
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are absolutely     **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate.  Opening this attachment may cause irreparable   **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files.  If you have any questions      **
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail scanner.   **
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;config.zip&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="20893.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="20891.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="20891.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20894.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Reply:</strong> <a href="20894.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Reply:</strong> <a href="20895.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
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
