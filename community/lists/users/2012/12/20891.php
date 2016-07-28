<?
$subject_val = "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 16:11:41 2012" -->
<!-- isoreceived="20121206211141" -->
<!-- sent="Thu, 6 Dec 2012 21:11:24 +0000" -->
<!-- isosent="20121206211124" -->
<!-- name="Paul Hatton" -->
<!-- email="p.s.hatton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2" -->
<!-- id="3685_1354828301_qB6LBa2h028615_F0658F4E7C8A084AB7E7895A257838CC5AB7C01AE8_at_ADMMBX5.adf.bham.ac.uk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E4D4A407-AD06-4DBA-B813-F8DA915C5AB3_at_cisco.com" -->
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
<strong>From:</strong> Paul Hatton (<em>p.s.hatton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-06 16:11:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20892.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="20890.php">Gunter, David O: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="20889.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20892.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Reply:</strong> <a href="20892.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks. zip-ed config.log attached
<br>
<p><pre>
-- 
Paul Hatton
High Performance Computing and Visualisation Specialist
IT Services, The University of Birmingham
Ph: 0121-414-3994&#160; Mob: 07785-977340&#160; Skype: P.S.Hatton
[Service Manager, Birmingham Environment for Academic Research]
[Also Technical Director, IBM Visual and Spatial Technology Centre]
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
&gt; Behalf Of Jeff Squyres
&gt; Sent: 06 December 2012 20:54
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc
&gt; 4.7.2
&gt; 
&gt; I have not tested with gfortran 4.7.2.
&gt; 
&gt; Can you send the config.log file? (please compress)
&gt; 
&gt; 
&gt; On Dec 6, 2012, at 12:42 PM, Paul Hatton wrote:
&gt; 
&gt; &gt; I've searched the FAQ but not come up with anything about this ...
&gt; with OpenMPI 1.6.3 and gcc 4.7.2, when I
&gt; &gt;
&gt; &gt; ./configure  --prefix=/gpfs/apps/openmpi/1.6.3/gcc_4.7.2-tm-ib \
&gt; &gt;  F77=gfortran FC=gfortran CC=gcc CXX=c++ \
&gt; &gt;  --with-tm=/gpfs/sysapps/torque/4.1.2 \
&gt; &gt;  --with-openib \
&gt; &gt;  2&gt;&amp;1|tee ../logs/configure-`date +%y_%m_%d_%Hh%Mm`.log
&gt; &gt;
&gt; &gt; configure fails with
&gt; &gt;
&gt; &gt; checking Fortran 90 kind of MPI_INTEGER_KIND
&gt; (selected_int_kind(9))...
&gt; &gt;    configure: error: Could not determine kind of
&gt; selected_int_kind(MPI_INTEGER_KIND)
&gt; &gt;
&gt; &gt; Has anyone built 1.6.3 with gcc 4.7.2? It build fine with Intel
&gt; 2013.0.079 and also the system (Scientific Linux 6.3) gcc which is
&gt; 4.4.6
&gt; &gt;
&gt; &gt; I've attached the output from the configure command.
&gt; &gt;
&gt; &gt; Thanks
&gt; &gt;
&gt; &gt; --
&gt; &gt; Paul Hatton
&gt; &gt; High Performance Computing and Visualisation Specialist
&gt; &gt; IT Services, The University of Birmingham
&gt; &gt; Ph: 0121-414-3994  Mob: 07785-977340  Skype: P.S.Hatton
&gt; &gt; [Service Manager, Birmingham Environment for Academic Research]
&gt; &gt; [Also Technical Director, IBM Visual and Spatial Technology Centre]
&gt; &gt;
&gt; &gt; &lt;configure-
&gt; 12_12_06_19h48m.log&gt;_______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
*****************************************************************************
**                                                                         **
** WARNING:  This email contains an attachment of a very suspicious type.  **
** You are urged NOT to open this attachment unless you are absolutely     **
** sure it is legitimate.  Opening this attachment may cause irreparable   **
** damage to your computer and your files.  If you have any questions      **
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
**                                                                         **
** This warning was added by the IU Computer Science Dept. mail scanner.   **
*****************************************************************************

</pre>
<hr>
<ul>
<li>application/x-zip-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20891/config.zip">config.zip</a>
</ul>
<!-- attachment="config.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20892.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="20890.php">Gunter, David O: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="20889.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20892.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Reply:</strong> <a href="20892.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
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
