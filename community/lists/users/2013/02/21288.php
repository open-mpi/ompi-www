<?
$subject_val = "[OMPI users] FW:  error configuring OpenMPI 1.6.3 with gcc 4.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 09:06:47 2013" -->
<!-- isoreceived="20130204140647" -->
<!-- sent="Mon, 4 Feb 2013 14:06:34 +0000" -->
<!-- isosent="20130204140634" -->
<!-- name="Paul Hatton" -->
<!-- email="p.s.hatton_at_[hidden]" -->
<!-- subject="[OMPI users] FW:  error configuring OpenMPI 1.6.3 with gcc 4.7.2" -->
<!-- id="F0658F4E7C8A084AB7E7895A257838CC5AC0638730_at_ADMMBX5.adf.bham.ac.uk" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] FW:  error configuring OpenMPI 1.6.3 with gcc 4.7.2<br>
<strong>From:</strong> Paul Hatton (<em>p.s.hatton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-04 09:06:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21289.php">George Bosilca: "Re: [OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()"</a>
<li><strong>Previous message:</strong> <a href="21287.php">Stefan Mauerberger: "[OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For completeness to the list and archive in case it helps anyone else now or in the future ....
<br>
<p>The problem was due to me not adding the lib64 directory for my gcc build to LD_RUN_PATH, which is needed when gcc is linking other applications, as well as LD_LIBRARY_PATH which is used at run time. Just needed (Bourne shell) to
<br>
<p>export LD_RUN_PATH=/gpfs/apps/gcc/v4.7.2/lib64:$LD_RUN_PATH
<br>
<p>before configure-ing OpenMPI with the new gcc on the PATH. Thanks to all who responded to this and pointed me in the right direction.
<br>
<p><pre>
-- 
Paul Hatton
High Performance Computing and Visualisation Specialist
IT Services, The University of Birmingham
Ph: 0121-414-3994  Mob: 07785-977340  Skype: P.S.Hatton
[Service Manager, Birmingham Environment for Academic Research]
[Also Technical Director, IBM Visual and Spatial Technology Centre]
&gt; -----Original Message-----
&gt; From: Paul Hatton [mailto:p.s.hatton_at_[hidden]]
&gt; Sent: 06 December 2012 22:37
&gt; To: 'Open MPI Users'
&gt; Subject: RE: [OMPI users] error configuring OpenMPI 1.6.3 with gcc
&gt; 4.7.2
&gt; 
&gt; Thanks. This is obviously (now) a problem with my gcc build which
&gt; isn't appropriate for this list. I'll re-visit this and post a
&gt; solution once I've (hopefully) got this working. I don't have any
&gt; shared libraries (*.so.*) in my gcc tree so something went badly
&gt; wrong ...
&gt; 
&gt; Thanks for your help.
&gt; 
&gt; --
&gt; Paul Hatton
&gt; High Performance Computing and Visualisation Specialist
&gt; IT Services, The University of Birmingham
&gt; Ph: 0121-414-3994&#160; Mob: 07785-977340&#160; Skype: P.S.Hatton
&gt; [Service Manager, Birmingham Environment for Academic Research]
&gt; [Also Technical Director, IBM Visual and Spatial Technology Centre]
&gt; 
&gt; 
&gt; &gt; -----Original Message-----
&gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open-
&gt; mpi.org] On
&gt; &gt; Behalf Of Gunter, David O
&gt; &gt; Sent: 06 December 2012 22:27
&gt; &gt; To: Open MPI Users
&gt; &gt; Subject: Re: [OMPI users] error configuring OpenMPI 1.6.3 with
&gt; gcc
&gt; &gt; 4.7.2
&gt; &gt;
&gt; &gt; My gcc 4.7.2 build appears to be ignoring the one in /usr/lib64
&gt; and
&gt; &gt; using the one in its own install tree:
&gt; &gt; /usr/projects/hpcsoft/moonlight/gcc/4.7.2/lib64/libgfortran.so.3
&gt; &gt;
&gt; &gt; -david
&gt; &gt;
&gt; &gt; --
&gt; &gt; David Gunter
&gt; &gt; HPC-3: Infrastructure Team
&gt; &gt; Los Alamos National Laboratory
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; On Dec 6, 2012, at 2:50 PM, Paul Hatton wrote:
&gt; &gt;
&gt; &gt; &gt; Ahh, it's looking in /usr/lib64 and finding libgfortran.so.3
&gt; which is
&gt; &gt; older than the one expected by gcc 4.7 (system gcc is 4.4.6).
&gt; Looking
&gt; &gt; at my gcc installation I don't have any shared libraries in
&gt; there, just
&gt; &gt; static ones.
&gt; &gt; &gt;
&gt; &gt; &gt; David - if you don't mind a slight diversion, where is your
&gt; &gt; libgfortran.so.3? Does your system have one in /usr/lib64
&gt; (assuming
&gt; &gt; you're on a 64-bit system) or in
&gt; &gt; /usr/projects/hpcsoft/moonlight/gcc/4.7.2/somewhere?
&gt; &gt; &gt;
&gt; &gt; &gt; I'll have a play with my setup as well. Should have spotted
&gt; this
&gt; &gt; myself.
&gt; &gt; &gt;
&gt; &gt; &gt; Thanks for your help
&gt; &gt; &gt;
&gt; &gt; &gt; --
&gt; &gt; &gt; Paul Hatton
&gt; &gt; &gt; High Performance Computing and Visualisation Specialist
&gt; &gt; &gt; IT Services, The University of Birmingham
&gt; &gt; &gt; Ph: 0121-414-3994  Mob: 07785-977340  Skype: P.S.Hatton
&gt; &gt; &gt; [Service Manager, Birmingham Environment for Academic Research]
&gt; &gt; &gt; [Also Technical Director, IBM Visual and Spatial Technology
&gt; Centre]
&gt; &gt; &gt;
&gt; &gt; &gt;
&gt; &gt; &gt;&gt; -----Original Message-----
&gt; &gt; &gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open-
&gt; mpi.org]
&gt; &gt; On
&gt; &gt; &gt;&gt; Behalf Of Jeff Squyres
&gt; &gt; &gt;&gt; Sent: 06 December 2012 21:30
&gt; &gt; &gt;&gt; To: Open MPI Users
&gt; &gt; &gt;&gt; Subject: Re: [OMPI users] error configuring OpenMPI 1.6.3 with
&gt; gcc
&gt; &gt; &gt;&gt; 4.7.2
&gt; &gt; &gt;&gt;
&gt; &gt; &gt;&gt; It looks like your gfortran compiler is broken...?
&gt; &gt; &gt;&gt;
&gt; &gt; &gt;&gt; configure:53489: checking Fortran 90 kind of MPI_INTEGER_KIND
&gt; &gt; &gt;&gt; (selected_int_kind(9))
&gt; &gt; &gt;&gt; configure:53507: gfortran   -o conftest conftestf.f90
&gt; &gt; &gt;&gt; configure:53514: $? = 0
&gt; &gt; &gt;&gt; configure:53554: ./conftest
&gt; &gt; &gt;&gt; ./conftest: /usr/lib64/libgfortran.so.3: version
&gt; `GFORTRAN_1.4' not
&gt; &gt; &gt;&gt; found (required by ./conftest)
&gt; &gt; &gt;&gt; configure:53561: $? = 1
&gt; &gt; &gt;&gt;
&gt; &gt; &gt;&gt;
&gt; &gt; &gt;&gt;
&gt; &gt; &gt;&gt; On Dec 6, 2012, at 1:22 PM, Paul Hatton wrote:
&gt; &gt; &gt;&gt;
&gt; &gt; &gt;&gt;&gt; failed one attached.
&gt; &gt; &gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt; --
&gt; &gt; &gt;&gt;&gt; Paul Hatton
&gt; &gt; &gt;&gt;&gt; High Performance Computing and Visualisation Specialist
&gt; &gt; &gt;&gt;&gt; IT Services, The University of Birmingham
&gt; &gt; &gt;&gt;&gt; Ph: 0121-414-3994  Mob: 07785-977340  Skype: P.S.Hatton
&gt; &gt; &gt;&gt;&gt; [Service Manager, Birmingham Environment for Academic
&gt; Research]
&gt; &gt; &gt;&gt;&gt; [Also Technical Director, IBM Visual and Spatial Technology
&gt; Centre]
&gt; &gt; &gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt; -----Original Message-----
&gt; &gt; &gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open-
&gt; &gt; mpi.org]
&gt; &gt; &gt;&gt; On
&gt; &gt; &gt;&gt;&gt;&gt; Behalf Of Jeff Squyres
&gt; &gt; &gt;&gt;&gt;&gt; Sent: 06 December 2012 21:17
&gt; &gt; &gt;&gt;&gt;&gt; To: Open MPI Users
&gt; &gt; &gt;&gt;&gt;&gt; Subject: Re: [OMPI users] error configuring OpenMPI 1.6.3
&gt; with gcc
&gt; &gt; &gt;&gt;&gt;&gt; 4.7.2
&gt; &gt; &gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt; This does not appear to be the right config.log -- the test
&gt; in
&gt; &gt; &gt;&gt; question
&gt; &gt; &gt;&gt;&gt;&gt; passed:
&gt; &gt; &gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt; configure:53489: checking Fortran 90 kind of
&gt; MPI_INTEGER_KIND
&gt; &gt; &gt;&gt;&gt;&gt; (selected_int_kind(9))
&gt; &gt; &gt;&gt;&gt;&gt; configure:53507: gfortran   -o conftest conftestf.f90
&gt; &gt; &gt;&gt;&gt;&gt; configure:53514: $? = 0
&gt; &gt; &gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt; On Dec 6, 2012, at 1:11 PM, Paul Hatton wrote:
&gt; &gt; &gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt; Thanks. zip-ed config.log attached
&gt; &gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt; --
&gt; &gt; &gt;&gt;&gt;&gt;&gt; Paul Hatton
&gt; &gt; &gt;&gt;&gt;&gt;&gt; High Performance Computing and Visualisation Specialist
&gt; &gt; &gt;&gt;&gt;&gt;&gt; IT Services, The University of Birmingham
&gt; &gt; &gt;&gt;&gt;&gt;&gt; Ph: 0121-414-3994  Mob: 07785-977340  Skype: P.S.Hatton
&gt; &gt; &gt;&gt;&gt;&gt;&gt; [Service Manager, Birmingham Environment for Academic
&gt; Research]
&gt; &gt; &gt;&gt;&gt;&gt;&gt; [Also Technical Director, IBM Visual and Spatial Technology
&gt; &gt; Centre]
&gt; &gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; -----Original Message-----
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-
&gt; bounces_at_open-
&gt; &gt; &gt;&gt; mpi.org]
&gt; &gt; &gt;&gt;&gt;&gt; On
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Behalf Of Jeff Squyres
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Sent: 06 December 2012 20:54
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] error configuring OpenMPI 1.6.3
&gt; with
&gt; &gt; gcc
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 4.7.2
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; I have not tested with gfortran 4.7.2.
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Can you send the config.log file? (please compress)
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; On Dec 6, 2012, at 12:42 PM, Paul Hatton wrote:
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I've searched the FAQ but not come up with anything about
&gt; this
&gt; &gt; &gt;&gt; ...
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; with OpenMPI 1.6.3 and gcc 4.7.2, when I
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ./configure  --prefix=/gpfs/apps/openmpi/1.6.3/gcc_4.7.2-
&gt; tm-ib
&gt; &gt; \
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; F77=gfortran FC=gfortran CC=gcc CXX=c++ \
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-tm=/gpfs/sysapps/torque/4.1.2 \
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-openib \
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 2&gt;&amp;1|tee ../logs/configure-`date +%y_%m_%d_%Hh%Mm`.log
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; configure fails with
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; checking Fortran 90 kind of MPI_INTEGER_KIND
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; (selected_int_kind(9))...
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; configure: error: Could not determine kind of
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; selected_int_kind(MPI_INTEGER_KIND)
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Has anyone built 1.6.3 with gcc 4.7.2? It build fine with
&gt; Intel
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 2013.0.079 and also the system (Scientific Linux 6.3) gcc
&gt; which
&gt; &gt; is
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 4.4.6
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I've attached the output from the configure command.
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; --
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Paul Hatton
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; High Performance Computing and Visualisation Specialist
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; IT Services, The University of Birmingham
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Ph: 0121-414-3994  Mob: 07785-977340  Skype: P.S.Hatton
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [Service Manager, Birmingham Environment for Academic
&gt; Research]
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [Also Technical Director, IBM Visual and Spatial
&gt; Technology
&gt; &gt; &gt;&gt; Centre]
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;configure-
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;
&gt; 12_12_06_19h48m.log&gt;_______________________________________________
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; --
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;
&gt; &gt;
&gt; *******************************************************************
&gt; ****
&gt; &gt; &gt;&gt;&gt;&gt; ******
&gt; &gt; &gt;&gt;&gt;&gt;&gt; **
&gt; &gt; &gt;&gt;&gt;&gt; **
&gt; &gt; &gt;&gt;&gt;&gt;&gt; ** WARNING:  This email contains an attachment of a very
&gt; &gt; suspicious
&gt; &gt; &gt;&gt;&gt;&gt; type.  **
&gt; &gt; &gt;&gt;&gt;&gt;&gt; ** You are urged NOT to open this attachment unless you are
&gt; &gt; &gt;&gt;&gt;&gt; absolutely     **
&gt; &gt; &gt;&gt;&gt;&gt;&gt; ** sure it is legitimate.  Opening this attachment may
&gt; cause
&gt; &gt; &gt;&gt;&gt;&gt; irreparable   **
&gt; &gt; &gt;&gt;&gt;&gt;&gt; ** damage to your computer and your files.  If you have any
&gt; &gt; &gt;&gt; questions
&gt; &gt; &gt;&gt;&gt;&gt; **
&gt; &gt; &gt;&gt;&gt;&gt;&gt; ** about the validity of this message, PLEASE SEEK HELP
&gt; BEFORE
&gt; &gt; &gt;&gt;&gt;&gt; OPENING IT. **
&gt; &gt; &gt;&gt;&gt;&gt;&gt; **
&gt; &gt; &gt;&gt;&gt;&gt; **
&gt; &gt; &gt;&gt;&gt;&gt;&gt; ** This warning was added by the IU Computer Science Dept.
&gt; mail
&gt; &gt; &gt;&gt;&gt;&gt; scanner.   **
&gt; &gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;
&gt; &gt;
&gt; *******************************************************************
&gt; ****
&gt; &gt; &gt;&gt;&gt;&gt; ******
&gt; &gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;&gt; &lt;config.zip&gt;_______________________________________________
&gt; &gt; &gt;&gt;&gt;&gt;&gt; users mailing list
&gt; &gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; &gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt; --
&gt; &gt; &gt;&gt;&gt;&gt; Jeff Squyres
&gt; &gt; &gt;&gt;&gt;&gt; jsquyres_at_[hidden]
&gt; &gt; &gt;&gt;&gt;&gt; For corporate legal information go to:
&gt; &gt; &gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt; &gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt; &gt;&gt;&gt;&gt; users mailing list
&gt; &gt; &gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; &gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;
&gt; &gt; &gt;&gt;
&gt; &gt;
&gt; *******************************************************************
&gt; ****
&gt; &gt; &gt;&gt; ******
&gt; &gt; &gt;&gt;&gt; **
&gt; &gt; &gt;&gt; **
&gt; &gt; &gt;&gt;&gt; ** WARNING:  This email contains an attachment of a very
&gt; suspicious
&gt; &gt; &gt;&gt; type.  **
&gt; &gt; &gt;&gt;&gt; ** You are urged NOT to open this attachment unless you are
&gt; &gt; &gt;&gt; absolutely     **
&gt; &gt; &gt;&gt;&gt; ** sure it is legitimate.  Opening this attachment may cause
&gt; &gt; &gt;&gt; irreparable   **
&gt; &gt; &gt;&gt;&gt; ** damage to your computer and your files.  If you have any
&gt; &gt; questions
&gt; &gt; &gt;&gt; **
&gt; &gt; &gt;&gt;&gt; ** about the validity of this message, PLEASE SEEK HELP
&gt; BEFORE
&gt; &gt; &gt;&gt; OPENING IT. **
&gt; &gt; &gt;&gt;&gt; **
&gt; &gt; &gt;&gt; **
&gt; &gt; &gt;&gt;&gt; ** This warning was added by the IU Computer Science Dept.
&gt; mail
&gt; &gt; &gt;&gt; scanner.   **
&gt; &gt; &gt;&gt;&gt;
&gt; &gt; &gt;&gt;
&gt; &gt;
&gt; *******************************************************************
&gt; ****
&gt; &gt; &gt;&gt; ******
&gt; &gt; &gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt;
&gt; &gt; &gt;&gt;&gt; &lt;config.zip&gt;_______________________________________________
&gt; &gt; &gt;&gt;&gt; users mailing list
&gt; &gt; &gt;&gt;&gt; users_at_[hidden]
&gt; &gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; &gt;&gt;
&gt; &gt; &gt;&gt;
&gt; &gt; &gt;&gt; --
&gt; &gt; &gt;&gt; Jeff Squyres
&gt; &gt; &gt;&gt; jsquyres_at_[hidden]
&gt; &gt; &gt;&gt; For corporate legal information go to:
&gt; &gt; &gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt; &gt;&gt;
&gt; &gt; &gt;&gt;
&gt; &gt; &gt;&gt; _______________________________________________
&gt; &gt; &gt;&gt; users mailing list
&gt; &gt; &gt;&gt; users_at_[hidden]
&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; &gt;
&gt; &gt; &gt; _______________________________________________
&gt; &gt; &gt; users mailing list
&gt; &gt; &gt; users_at_[hidden]
&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21289.php">George Bosilca: "Re: [OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()"</a>
<li><strong>Previous message:</strong> <a href="21287.php">Stefan Mauerberger: "[OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()"</a>
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
