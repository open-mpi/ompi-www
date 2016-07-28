<?
$subject_val = "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 16:23:22 2012" -->
<!-- isoreceived="20121206212322" -->
<!-- sent="Thu, 6 Dec 2012 21:22:46 +0000" -->
<!-- isosent="20121206212246" -->
<!-- name="Paul Hatton" -->
<!-- email="p.s.hatton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2" -->
<!-- id="3685_1354829002_qB6LNH6M029570_F0658F4E7C8A084AB7E7895A257838CC5AB7C01AEB_at_ADMMBX5.adf.bham.ac.uk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F1FAF69B-B540-40A1-8A30-36E24184C577_at_cisco.com" -->
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
<strong>Date:</strong> 2012-12-06 16:22:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20896.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="20894.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="20892.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20896.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Reply:</strong> <a href="20896.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
failed one attached.
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
&gt; Sent: 06 December 2012 21:17
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc
&gt; 4.7.2
&gt; 
&gt; This does not appear to be the right config.log -- the test in question
&gt; passed:
&gt; 
&gt; configure:53489: checking Fortran 90 kind of MPI_INTEGER_KIND
&gt; (selected_int_kind(9))
&gt; configure:53507: gfortran   -o conftest conftestf.f90
&gt; configure:53514: $? = 0
&gt; 
&gt; 
&gt; 
&gt; On Dec 6, 2012, at 1:11 PM, Paul Hatton wrote:
&gt; 
&gt; &gt; Thanks. zip-ed config.log attached
&gt; &gt;
&gt; &gt; --
&gt; &gt; Paul Hatton
&gt; &gt; High Performance Computing and Visualisation Specialist
&gt; &gt; IT Services, The University of Birmingham
&gt; &gt; Ph: 0121-414-3994  Mob: 07785-977340  Skype: P.S.Hatton
&gt; &gt; [Service Manager, Birmingham Environment for Academic Research]
&gt; &gt; [Also Technical Director, IBM Visual and Spatial Technology Centre]
&gt; &gt;
&gt; &gt;
&gt; &gt;&gt; -----Original Message-----
&gt; &gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
&gt; On
&gt; &gt;&gt; Behalf Of Jeff Squyres
&gt; &gt;&gt; Sent: 06 December 2012 20:54
&gt; &gt;&gt; To: Open MPI Users
&gt; &gt;&gt; Subject: Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc
&gt; &gt;&gt; 4.7.2
&gt; &gt;&gt;
&gt; &gt;&gt; I have not tested with gfortran 4.7.2.
&gt; &gt;&gt;
&gt; &gt;&gt; Can you send the config.log file? (please compress)
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; On Dec 6, 2012, at 12:42 PM, Paul Hatton wrote:
&gt; &gt;&gt;
&gt; &gt;&gt;&gt; I've searched the FAQ but not come up with anything about this ...
&gt; &gt;&gt; with OpenMPI 1.6.3 and gcc 4.7.2, when I
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; ./configure  --prefix=/gpfs/apps/openmpi/1.6.3/gcc_4.7.2-tm-ib \
&gt; &gt;&gt;&gt; F77=gfortran FC=gfortran CC=gcc CXX=c++ \
&gt; &gt;&gt;&gt; --with-tm=/gpfs/sysapps/torque/4.1.2 \
&gt; &gt;&gt;&gt; --with-openib \
&gt; &gt;&gt;&gt; 2&gt;&amp;1|tee ../logs/configure-`date +%y_%m_%d_%Hh%Mm`.log
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; configure fails with
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; checking Fortran 90 kind of MPI_INTEGER_KIND
&gt; &gt;&gt; (selected_int_kind(9))...
&gt; &gt;&gt;&gt;   configure: error: Could not determine kind of
&gt; &gt;&gt; selected_int_kind(MPI_INTEGER_KIND)
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Has anyone built 1.6.3 with gcc 4.7.2? It build fine with Intel
&gt; &gt;&gt; 2013.0.079 and also the system (Scientific Linux 6.3) gcc which is
&gt; &gt;&gt; 4.4.6
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; I've attached the output from the configure command.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Thanks
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; --
&gt; &gt;&gt;&gt; Paul Hatton
&gt; &gt;&gt;&gt; High Performance Computing and Visualisation Specialist
&gt; &gt;&gt;&gt; IT Services, The University of Birmingham
&gt; &gt;&gt;&gt; Ph: 0121-414-3994  Mob: 07785-977340  Skype: P.S.Hatton
&gt; &gt;&gt;&gt; [Service Manager, Birmingham Environment for Academic Research]
&gt; &gt;&gt;&gt; [Also Technical Director, IBM Visual and Spatial Technology Centre]
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; &lt;configure-
&gt; &gt;&gt; 12_12_06_19h48m.log&gt;_______________________________________________
&gt; &gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; --
&gt; &gt;&gt; Jeff Squyres
&gt; &gt;&gt; jsquyres_at_[hidden]
&gt; &gt;&gt; For corporate legal information go to:
&gt; &gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; ***********************************************************************
&gt; ******
&gt; &gt; **
&gt; **
&gt; &gt; ** WARNING:  This email contains an attachment of a very suspicious
&gt; type.  **
&gt; &gt; ** You are urged NOT to open this attachment unless you are
&gt; absolutely     **
&gt; &gt; ** sure it is legitimate.  Opening this attachment may cause
&gt; irreparable   **
&gt; &gt; ** damage to your computer and your files.  If you have any questions
&gt; **
&gt; &gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE
&gt; OPENING IT. **
&gt; &gt; **
&gt; **
&gt; &gt; ** This warning was added by the IU Computer Science Dept. mail
&gt; scanner.   **
&gt; &gt;
&gt; ***********************************************************************
&gt; ******
&gt; &gt;
&gt; &gt;
&gt; &gt; &lt;config.zip&gt;_______________________________________________
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
<li>application/x-zip-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20895/config.zip">config.zip</a>
</ul>
<!-- attachment="config.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20896.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="20894.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="20892.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20896.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Reply:</strong> <a href="20896.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
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
