<?
$subject_val = "Re: [OMPI users] Beowulf cluster and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 12:08:23 2008" -->
<!-- isoreceived="20081105170823" -->
<!-- sent="Wed, 5 Nov 2008 12:08:13 -0500" -->
<!-- isosent="20081105170813" -->
<!-- name="Kelley, Sean" -->
<!-- email="Sean.Kelley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Beowulf cluster and openmpi" -->
<!-- id="A804E989DCC5234FBA6C4E62B939978F2EB3D5_at_ava-es5.solers.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7503b17d0811031450o3b0a91c5ge55167f43c7426f0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Beowulf cluster and openmpi<br>
<strong>From:</strong> Kelley, Sean (<em>Sean.Kelley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-05 12:08:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7212.php">Rima Chaudhuri: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<li><strong>Previous message:</strong> <a href="7210.php">Ralph Castain: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<li><strong>In reply to:</strong> <a href="7198.php">Rima Chaudhuri: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7212.php">Rima Chaudhuri: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would suggest making sure that the /etc/beowulf/config file has a
<br>
&quot;libraries&quot; line for every directory where required shared libraries
<br>
(application and mpi) are located.
<br>
<p>Also, make sure that the filesystems containing the executables and
<br>
shared libraries are accessible from the compute nodes. 
<br>
<p>Sean
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Rima Chaudhuri
<br>
Sent: Monday, November 03, 2008 5:50 PM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Beowulf cluster and openmpi
<br>
<p>I added the option for -hostfile machinefile where the machinefile is a
<br>
file with the IP of the nodes:
<br>
#host names
<br>
192.168.0.100 slots=2
<br>
192.168.0.101 slots=2
<br>
192.168.0.102 slots=2
<br>
192.168.0.103 slots=2
<br>
192.168.0.104 slots=2
<br>
192.168.0.105 slots=2
<br>
192.168.0.106 slots=2
<br>
192.168.0.107 slots=2
<br>
192.168.0.108 slots=2
<br>
192.168.0.109 slots=2
<br>
<p><p>[rchaud_at_helios amber10]$ ./step1
<br>
------------------------------------------------------------------------
<br>
<pre>
--
A daemon (pid 29837) launched by the bproc PLS component on node 192
died unexpectedly so we are aborting.
This may be because the daemon was unable to find all the needed shared
libraries on the remote node. You may set your LD_LIBRARY_PATH to have
the location of the shared libraries on the remote nodes and this will
automatically be forwarded to the remote nodes.
------------------------------------------------------------------------
--
[helios.structure.uic.edu:29836] [0,0,0] ORTE_ERROR_LOG: Error in file
pls_bproc.c at line 717 [helios.structure.uic.edu:29836] [0,0,0]
ORTE_ERROR_LOG: Error in file pls_bproc.c at line 1164
[helios.structure.uic.edu:29836] [0,0,0] ORTE_ERROR_LOG: Error in file
rmgr_urm.c at line 462 [helios.structure.uic.edu:29836] mpirun: spawn
failed with errno=-1
I used bpsh to see if the master and one of the nodes n8 could see the
$LD_LIBRARY_PATH, and it does..
[rchaud_at_helios amber10]$ echo $LD_LIBRARY_PATH
/home/rchaud/openmpi-1.2.6/openmpi-1.2.6_ifort/lib
[rchaud_at_helios amber10]$ bpsh n8 echo $LD_LIBRARY_PATH
/home/rchaud/openmpi-1.2.6/openmpi-1.2.6_ifort/lib
thanks!
On Mon, Nov 3, 2008 at 3:14 PM,  &lt;users-request_at_[hidden]&gt; wrote:
&gt; Send users mailing list submissions to
&gt;        users_at_[hidden]
&gt;
&gt; To subscribe or unsubscribe via the World Wide Web, visit
&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; or, via email, send a message with subject or body 'help' to
&gt;        users-request_at_[hidden]
&gt;
&gt; You can reach the person managing the list at
&gt;        users-owner_at_[hidden]
&gt;
&gt; When replying, please edit your Subject line so it is more specific 
&gt; than &quot;Re: Contents of users digest...&quot;
&gt;
&gt;
&gt; Today's Topics:
&gt;
&gt;   1. Re: Problems installing in Cygwin - Problem with GCC      3.4.4
&gt;      (Jeff Squyres)
&gt;   2. switch from mpich2 to openMPI &lt;newbie question&gt; (PattiMichelle)
&gt;   3. Re: users Digest, Vol 1055, Issue 2 (Ralph Castain)
&gt;
&gt;
&gt; ----------------------------------------------------------------------
&gt;
&gt; Message: 1
&gt; Date: Mon, 3 Nov 2008 15:52:22 -0500
&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; Subject: Re: [OMPI users] Problems installing in Cygwin - Problem with
&gt;        GCC     3.4.4
&gt; To: &quot;Gustavo Seabra&quot; &lt;gustavo.seabra_at_[hidden]&gt;
&gt; Cc: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Message-ID: &lt;A016B8C4-510B-4FD2-AD3B-A1B6440508F5_at_[hidden]&gt;
&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
&gt;
&gt; On Nov 3, 2008, at 3:36 PM, Gustavo Seabra wrote:
&gt;
&gt;&gt;&gt; For your fortran issue, the Fortran 90 interface needs the Fortran 
&gt;&gt;&gt; 77 interface.  So you need to supply an F77 as well (the output from
&gt;&gt;&gt; configure should indicate that the F90 interface was disabled 
&gt;&gt;&gt; because the F77 interface was disabled).
&gt;&gt;
&gt;&gt; Is that what you mean (see below)?
&gt;
&gt; Ah yes -- that's another reason the f90 interface could be disabled:
&gt; if configure detects that the f77 and f90 compilers are not link- 
&gt; compatible.
&gt;
&gt;&gt; I thought the g95 compiler could
&gt;&gt; deal with F77 as well as F95... If so, could I just pass F77='g95'?
&gt;
&gt; That would probably work (F77=g95).  I don't know the g95 compiler at 
&gt; all, so I don't know if it also accepts Fortran-77-style codes.  But 
&gt; if it does, then you're set.  Otherwise, specify a different F77 
&gt; compiler that is link compatible with g95 and you should be good.
&gt;&gt;&gt;&gt; I looked in some places in the OpenMPI code, but I couldn't find 
&gt;&gt;&gt;&gt; &quot;max&quot; being redefined anywhere, but I may be looking in the wrong 
&gt;&gt;&gt;&gt; places. Anyways, the only way of found of compiling OpenMPI was a 
&gt;&gt;&gt;&gt; very ugly hack: I have to go into those files and remove the 
&gt;&gt;&gt;&gt; &quot;std::&quot;
&gt;&gt;&gt;&gt; before
&gt;&gt;&gt;&gt; the &quot;max&quot;. With that, it all compiled cleanly.
&gt;&gt;&gt;
&gt;&gt;&gt; I'm not sure I follow -- I don't see anywhere in OMPI where we use 
&gt;&gt;&gt; std::max.
&gt;&gt;&gt; What areas did you find that you needed to change?
&gt;&gt;
&gt;&gt; These files are part of the standard C++ headers. In my case, they 
&gt;&gt; sit in:
&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits
&gt;
&gt; Ah, I see.
&gt;
&gt;&gt; In principle, the problems that comes from those files would mean 
&gt;&gt; that the OpenMPI source has some macro redefining max, but that's 
&gt;&gt; what I could not find :-(
&gt;
&gt; Gotcha.  I don't think we are defining a &quot;max&quot; macro anywhere in the 
&gt; ompi_info source or related header files.  :-(
&gt;
&gt;&gt;&gt; No.  We don't really maintain the &quot;make check&quot; stuff too well.
&gt;&gt;
&gt;&gt; Oh well... What do you use for testing the implementation?
&gt;
&gt;
&gt; We have a whole pile of MPI tests in a private SVN repository.  The 
&gt; repository is only private because it contains a lot of other people's
&gt; [public] MPI test suites and benchmarks, and we never looked into 
&gt; redistribution rights for their software.  There's nothing really 
&gt; secret about it -- we just haven't bothered to look into the IP 
&gt; issues.  :-)
&gt;
&gt; We use the MPI Testing Tool (MTT) for nightly regression across the
&gt; community:
&gt;
&gt;     <a href="http://www.open-mpi.org/mtt/">http://www.open-mpi.org/mtt/</a>
&gt;
&gt; We have weekday and weekend testing schedules.  M-Th we do nightly 
&gt; tests; F-Mon morning, we do a long weekend schedule.  This weekend, 
&gt; for example, we ran about 675k regression tests:
&gt;
&gt;     <a href="http://www.open-mpi.org/mtt/index.php?do_redir=875">http://www.open-mpi.org/mtt/index.php?do_redir=875</a>
&gt;
&gt; --
&gt; Jeff Squyres
&gt; Cisco Systems
&gt;
&gt;
&gt;
&gt; ------------------------------
&gt;
&gt; Message: 2
&gt; Date: Mon, 03 Nov 2008 12:59:59 -0800
&gt; From: PattiMichelle &lt;miche1_at_[hidden]&gt;
&gt; Subject: [OMPI users] switch from mpich2 to openMPI &lt;newbie question&gt;
&gt; To: users_at_[hidden], patti.sheaffer_at_[hidden]
&gt; Message-ID: &lt;490F664F.4000000_at_[hidden]&gt;
&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
&gt;
&gt; I just found out I need to switch from mpich2 to openMPI for some code
&gt; I'm running.  I noticed that it's available in an openSuSE repo (I'm 
&gt; using openSuSE 11.0 x86_64 on a TYAN 32-processor Opteron 8000 
&gt; system), but when I was using mpich2 I seemed to have better luck 
&gt; compiling it from code.  This is the line I used:
&gt;
&gt; # $ F77=/path/to/g95 F90=/path/to/g95 ./configure 
&gt; --prefix=/some/place/mpich2-install
&gt;
&gt; But usually I left the &quot;--prefix=&quot; off and just let it install to it's
&gt; default...  which is /usr/local/bin and that's nice because it's 
&gt; already in the PATH and very usable.  I guess my question is whether 
&gt; or not the defaults and configuration syntax have stayed the same in 
&gt; openMPI.  I also could use a &quot;quickstart&quot; guide for a non-programming 
&gt; user (e.g., I think I have to start a daemon before running
parallelized programs).
&gt;
&gt; THANKS!!!
&gt; PattiM.
&gt; -------------- next part -------------- HTML attachment scrubbed and 
&gt; removed
&gt;
&gt; ------------------------------
&gt;
&gt; Message: 3
&gt; Date: Mon, 3 Nov 2008 14:14:36 -0700
&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt; Subject: Re: [OMPI users] users Digest, Vol 1055, Issue 2
&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Message-ID: &lt;2FBDF4DC-B2DF-4486-A644-0F18C96E8EB2_at_[hidden]&gt;
&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
&gt;
&gt; The problem is that you didn't specify or allocate any nodes for the 
&gt; job. At the least, you need to tell us what nodes to use via a
hostfile.
&gt;
&gt; Alternatively, are you using a resource manager to assign the nodes?
&gt; OMPI didn't see anything from one, but it could be that we just didn't
&gt; see the right envar.
&gt;
&gt; Ralph
&gt;
&gt; On Nov 3, 2008, at 1:39 PM, Rima Chaudhuri wrote:
&gt;
&gt;&gt; Thanks a lot Ralph!
&gt;&gt; I corrected the no_local to nolocal and now when I try to execute the
&gt;&gt; script step1 (pls find it attached) [rchaud_at_helios amber10]$ ./step1 
&gt;&gt; [helios.structure.uic.edu:16335] [0,0,0] ORTE_ERROR_LOG: Not 
&gt;&gt; available in file ras_bjs.c at line 247
&gt;&gt; ---------------------------------------------------------------------
&gt;&gt; ----- There are no available nodes allocated to this job. This could 
&gt;&gt; be because no nodes were found or all the available nodes were 
&gt;&gt; already used.
&gt;&gt;
&gt;&gt; Note that since the -nolocal option was given no processes can be 
&gt;&gt; launched on the local node.
&gt;&gt; ---------------------------------------------------------------------
&gt;&gt; ----- [helios.structure.uic.edu:16335] [0,0,0] ORTE_ERROR_LOG: 
&gt;&gt; Temporarily out of resource in file base/rmaps_base_support_fns.c at 
&gt;&gt; line 168 [helios.structure.uic.edu:16335] [0,0,0] ORTE_ERROR_LOG: 
&gt;&gt; Temporarily out of resource in file rmaps_rr.c at line 402 
&gt;&gt; [helios.structure.uic.edu:16335] [0,0,0] ORTE_ERROR_LOG: Temporarily 
&gt;&gt; out of resource in file base/rmaps_base_map_job.c at line 210 
&gt;&gt; [helios.structure.uic.edu:16335] [0,0,0] ORTE_ERROR_LOG: Temporarily 
&gt;&gt; out of resource in file rmgr_urm.c at line 372 
&gt;&gt; [helios.structure.uic.edu:16335] mpirun: spawn failed with errno=-3
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; If I use the script without the --nolocal option, I get the following
&gt;&gt; error:
&gt;&gt; [helios.structure.uic.edu:20708] [0,0,0] ORTE_ERROR_LOG: Not 
&gt;&gt; available in file ras_bjs.c at line 247
&gt;&gt;
&gt;&gt;
&gt;&gt; thanks,
&gt;&gt;
&gt;&gt;
&gt;&gt; On Mon, Nov 3, 2008 at 2:04 PM,  &lt;users-request_at_[hidden]&gt; wrote:
&gt;&gt;&gt; Send users mailing list submissions to
&gt;&gt;&gt;       users_at_[hidden]
&gt;&gt;&gt;
&gt;&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
&gt;&gt;&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; or, via email, send a message with subject or body 'help' to
&gt;&gt;&gt;       users-request_at_[hidden]
&gt;&gt;&gt;
&gt;&gt;&gt; You can reach the person managing the list at
&gt;&gt;&gt;       users-owner_at_[hidden]
&gt;&gt;&gt;
&gt;&gt;&gt; When replying, please edit your Subject line so it is more specific 
&gt;&gt;&gt; than &quot;Re: Contents of users digest...&quot;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; Today's Topics:
&gt;&gt;&gt;
&gt;&gt;&gt;  1. Scyld Beowulf and openmpi (Rima Chaudhuri)  2. Re: Scyld Beowulf
&gt;&gt;&gt; and openmpi (Ralph Castain)  3. Problems installing in Cygwin - 
&gt;&gt;&gt; Problem with GCC 3.4.4
&gt;&gt;&gt;     (Gustavo Seabra)
&gt;&gt;&gt;  4. Re: MPI + Mixed language coding(Fortran90 + C++) (Jeff Squyres)
&gt;&gt;&gt;  5. Re: Problems installing in Cygwin - Problem with GCC      3.4.4
&gt;&gt;&gt;     (Jeff Squyres)
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; --------------------------------------------------------------------
&gt;&gt;&gt; --
&gt;&gt;&gt;
&gt;&gt;&gt; Message: 1
&gt;&gt;&gt; Date: Mon, 3 Nov 2008 11:30:01 -0600
&gt;&gt;&gt; From: &quot;Rima Chaudhuri&quot; &lt;rima.chaudhuri_at_[hidden]&gt;
&gt;&gt;&gt; Subject: [OMPI users] Scyld Beowulf and openmpi
&gt;&gt;&gt; To: users_at_[hidden]
&gt;&gt;&gt; Message-ID:
&gt;&gt;&gt;       &lt;7503b17d0811030930i13acb974kc627983a1d481192_at_[hidden]&gt;
&gt;&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1
&gt;&gt;&gt;
&gt;&gt;&gt; Hello!
&gt;&gt;&gt; I am a new user of openmpi -- I've installed openmpi 1.2.6 for our
&gt;&gt;&gt; x86_64 linux scyld beowulf cluster inorder to make it run with 
&gt;&gt;&gt; amber10 MD simulation package.
&gt;&gt;&gt;
&gt;&gt;&gt; The nodes can see the home directory i.e. a bpsh to the nodes works 
&gt;&gt;&gt; fine and lists all the files in the home directory where I have both
&gt;&gt;&gt; openmpi and amber10 installed.
&gt;&gt;&gt; However if I try to run:
&gt;&gt;&gt;
&gt;&gt;&gt; $MPI_HOME/bin/mpirun -no_local=1 -np 4 $AMBERHOME/exe/ sander.MPI 
&gt;&gt;&gt; ........
&gt;&gt;&gt;
&gt;&gt;&gt; I get the following error:
&gt;&gt;&gt; [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at line 247
&gt;&gt;&gt; --------------------------------------------------------------------
&gt;&gt;&gt; ------ Failed to find the following executable:
&gt;&gt;&gt;
&gt;&gt;&gt; Host:       helios.structure.uic.edu
&gt;&gt;&gt; Executable: -o
&gt;&gt;&gt;
&gt;&gt;&gt; Cannot continue.
&gt;&gt;&gt; --------------------------------------------------------------------
&gt;&gt;&gt; ------ [helios.structure.uic.edu:23611] [0,0,0] ORTE_ERROR_LOG: Not 
&gt;&gt;&gt; found in file rmgr_urm.c at line 462 
&gt;&gt;&gt; [helios.structure.uic.edu:23611] mpirun: spawn failed with errno=-13
&gt;&gt;&gt;
&gt;&gt;&gt; any cues?
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; --
&gt;&gt;&gt; -Rima
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; ------------------------------
&gt;&gt;&gt;
&gt;&gt;&gt; Message: 2
&gt;&gt;&gt; Date: Mon, 3 Nov 2008 12:08:36 -0700
&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt;&gt;&gt; Subject: Re: [OMPI users] Scyld Beowulf and openmpi
&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt;&gt;&gt; Message-ID: &lt;91044A7E-ADA5-4B94-AA11-B3C1D9843606_at_[hidden]&gt;
&gt;&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
&gt;&gt;&gt;
&gt;&gt;&gt; For starters, there is no &quot;-no_local&quot; option to mpirun. You might 
&gt;&gt;&gt; want to look at mpirun --help, or man mpirun.
&gt;&gt;&gt;
&gt;&gt;&gt; I suspect the option you wanted was --nolocal. Note that --nolocal 
&gt;&gt;&gt; does not take an argument.
&gt;&gt;&gt;
&gt;&gt;&gt; Mpirun is confused by the incorrect option and looking for an 
&gt;&gt;&gt; incorrectly named executable.
&gt;&gt;&gt; Ralph
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Nov 3, 2008, at 10:30 AM, Rima Chaudhuri wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Hello!
&gt;&gt;&gt;&gt; I am a new user of openmpi -- I've installed openmpi 1.2.6 for our
&gt;&gt;&gt;&gt; x86_64 linux scyld beowulf cluster inorder to make it run with 
&gt;&gt;&gt;&gt; amber10 MD simulation package.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; The nodes can see the home directory i.e. a bpsh to the nodes works
&gt;&gt;&gt;&gt; fine and lists all the files in the home directory where I have 
&gt;&gt;&gt;&gt; both openmpi and amber10 installed.
&gt;&gt;&gt;&gt; However if I try to run:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; $MPI_HOME/bin/mpirun -no_local=1 -np 4 $AMBERHOME/exe/ sander.MPI 
&gt;&gt;&gt;&gt; ........
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; I get the following error:
&gt;&gt;&gt;&gt; [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at line 247
&gt;&gt;&gt;&gt; -------------------------------------------------------------------
&gt;&gt;&gt;&gt; ------- Failed to find the following executable:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Host:       helios.structure.uic.edu
&gt;&gt;&gt;&gt; Executable: -o
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Cannot continue.
&gt;&gt;&gt;&gt; -------------------------------------------------------------------
&gt;&gt;&gt;&gt; ------- [helios.structure.uic.edu:23611] [0,0,0] ORTE_ERROR_LOG: 
&gt;&gt;&gt;&gt; Not found in file rmgr_urm.c at line 462 
&gt;&gt;&gt;&gt; [helios.structure.uic.edu:23611] mpirun: spawn failed with 
&gt;&gt;&gt;&gt; errno=-13
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; any cues?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt; -Rima
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; ------------------------------
&gt;&gt;&gt;
&gt;&gt;&gt; Message: 3
&gt;&gt;&gt; Date: Mon, 3 Nov 2008 14:53:55 -0500
&gt;&gt;&gt; From: &quot;Gustavo Seabra&quot; &lt;gustavo.seabra_at_[hidden]&gt;
&gt;&gt;&gt; Subject: [OMPI users] Problems installing in Cygwin - Problem with 
&gt;&gt;&gt; GCC
&gt;&gt;&gt;       3.4.4
&gt;&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
&gt;&gt;&gt; Message-ID:
&gt;&gt;&gt;       &lt;f79359b60811031153l5591e0f8j49a7e4d9fb02eea3_at_[hidden]&gt;
&gt;&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1
&gt;&gt;&gt;
&gt;&gt;&gt; Hi everyone,
&gt;&gt;&gt;
&gt;&gt;&gt; Here's a &quot;progress report&quot;... more questions in the end :-)
&gt;&gt;&gt;
&gt;&gt;&gt; Finally, I was *almost* able to compile OpenMPI in Cygwin using the 
&gt;&gt;&gt; following configure command:
&gt;&gt;&gt;
&gt;&gt;&gt; ./configure --prefix=/home/seabra/local/openmpi-1.3b1 \
&gt;&gt;&gt;               --with-mpi-param_check=always --with-threads=posix \
&gt;&gt;&gt;               --enable-mpi-threads --disable-io-romio \
&gt;&gt;&gt;               --enable-mca-no-
&gt;&gt;&gt; build=memory_mallopt,maffinity,paffinity \
&gt;&gt;&gt;               --enable-contrib-no-build=vt \
&gt;&gt;&gt;               FC=g95 'FFLAGS=-O0  -fno-second-underscore' CXX=g++
&gt;&gt;&gt;
&gt;&gt;&gt; I then had a very weird error during compilation of 
&gt;&gt;&gt; ompi/tools/ompi_info/params.cc. (See below).
&gt;&gt;&gt;
&gt;&gt;&gt; The lines causing the compilation errors are:
&gt;&gt;&gt;
&gt;&gt;&gt; vector.tcc:307:      const size_type __len = __old_size +
&gt;&gt;&gt; std::max(__old_size, __n);
&gt;&gt;&gt; vector.tcc:384:      const size_type __len = __old_size +
&gt;&gt;&gt; std::max(__old_size, __n);
&gt;&gt;&gt; stl_bvector.h:522:  const size_type __len = size() + 
&gt;&gt;&gt; std::max(size(), __n);
&gt;&gt;&gt; stl_bvector.h:823:  const size_type __len = size() + 
&gt;&gt;&gt; std::max(size(), __n);
&gt;&gt;&gt;
&gt;&gt;&gt; (Notice that those are from the standard gcc libraries.)
&gt;&gt;&gt;
&gt;&gt;&gt; After googling it for a while, I could find that this error is 
&gt;&gt;&gt; caused because, at come point, the source code being compiled 
&gt;&gt;&gt; redefined the &quot;max&quot; function with a macro, g++ cannot recognize the 
&gt;&gt;&gt; &quot;std::max&quot; that happens in those lines and only &quot;sees&quot; a (...), thus
&gt;&gt;&gt; printing that cryptic complaint.
&gt;&gt;&gt;
&gt;&gt;&gt; I looked in some places in the OpenMPI code, but I couldn't find 
&gt;&gt;&gt; &quot;max&quot; being redefined anywhere, but I may be looking in the wrong 
&gt;&gt;&gt; places. Anyways, the only way of found of compiling OpenMPI was a 
&gt;&gt;&gt; very ugly hack: I have to go into those files and remove the &quot;std::&quot;
&gt;&gt;&gt; before
&gt;&gt;&gt; the &quot;max&quot;. With that, it all compiled cleanly.
&gt;&gt;&gt;
&gt;&gt;&gt; I did try running the tests in the 'tests' directory (with 'make 
&gt;&gt;&gt; check'), and I didn't get any alarming message, except that in some 
&gt;&gt;&gt; cases (class, threads, peruse) it printed &quot;All 0 tests passed&quot;. I 
&gt;&gt;&gt; got and &quot;All (n) tests passed&quot; (n&gt;0) for asm and datatype.
&gt;&gt;&gt;
&gt;&gt;&gt; Can anybody comment on the meaning of those test results? Should I 
&gt;&gt;&gt; be alarmed with the &quot;All 0 tests passed&quot; messages?
&gt;&gt;&gt;
&gt;&gt;&gt; Finally, in the absence of big red flags (that I noticed), I went 
&gt;&gt;&gt; ahead and tried to compile my program. However, as soon as 
&gt;&gt;&gt; compilation starts, I get the following:
&gt;&gt;&gt;
&gt;&gt;&gt; /local/openmpi/openmpi-1.3b1/bin/mpif90 -c -O3  -fno-second- 
&gt;&gt;&gt; underscore -ffree-form  -o constants.o _constants.f
&gt;&gt;&gt; --------------------------------------------------------------------
&gt;&gt;&gt; ------ Unfortunately, this installation of Open MPI was not compiled
&gt;&gt;&gt; with Fortran 90 support.  As such, the mpif90 compiler is 
&gt;&gt;&gt; non-functional.
&gt;&gt;&gt; --------------------------------------------------------------------
&gt;&gt;&gt; ------
&gt;&gt;&gt; make[1]: *** [constants.o] Error 1
&gt;&gt;&gt; make[1]: Leaving directory `/home/seabra/local/amber11/src/sander'
&gt;&gt;&gt; make: *** [parallel] Error 2
&gt;&gt;&gt;
&gt;&gt;&gt; Notice that I compiled OpenMPI with g95, so there *should* be
&gt;&gt;&gt; Fortran95 support... Any ideas on what could be going wrong?
&gt;&gt;&gt;
&gt;&gt;&gt; Thank you very much,
&gt;&gt;&gt; Gustavo.
&gt;&gt;&gt;
&gt;&gt;&gt; ======================================
&gt;&gt;&gt; Error in the compilation of params.cc 
&gt;&gt;&gt; ======================================
&gt;&gt;&gt; $ g++ -DHAVE_CONFIG_H -I. -I../../../opal/include 
&gt;&gt;&gt; -I../../../orte/include -I../../../ompi/include 
&gt;&gt;&gt; -I../../../opal/mca/paffinity/linux/plpa/src/libplpa
&gt;&gt;&gt; -DOMPI_CONFIGURE_USER=&quot;\&quot;seabra\&quot;&quot; -DOMPI_CONFIGURE_HOST=&quot;\&quot;ACS02\&quot;&quot;
&gt;&gt;&gt; -DOMPI_CONFIGURE_DATE=&quot;\&quot;Sat Nov  1 20:44:32 EDT 2008\&quot;&quot;
&gt;&gt;&gt; -DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; -DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot;
&gt;&gt;&gt; -DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; -DOMPI_BUILD_CFLAGS=&quot;\&quot;-O3 -DNDEBUG 
&gt;&gt;&gt; -finline-functions -fno-strict-aliasing \&quot;&quot;
&gt;&gt;&gt; -DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../..  -D_REENTRANT\&quot;&quot;
&gt;&gt;&gt; -DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O3 -DNDEBUG -finline-functions \&quot;&quot;
&gt;&gt;&gt; -DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../..  -D_REENTRANT\&quot;&quot;
&gt;&gt;&gt; -DOMPI_BUILD_FFLAGS=&quot;\&quot;-O0  -fno-second-underscore\&quot;&quot;
&gt;&gt;&gt; -DOMPI_BUILD_FCFLAGS=&quot;\&quot;\&quot;&quot; -DOMPI_BUILD_LDFLAGS=&quot;\&quot;-export-dynamic
&gt;&gt;&gt; \&quot;&quot; -DOMPI_BUILD_LIBS=&quot;\&quot;-lutil  \&quot;&quot;
&gt;&gt;&gt; -DOMPI_CC_ABSOLUTE=&quot;\&quot;/usr/bin/gcc\&quot;&quot;
&gt;&gt;&gt; -DOMPI_CXX_ABSOLUTE=&quot;\&quot;/usr/bin/g++\&quot;&quot;
&gt;&gt;&gt; -DOMPI_F77_ABSOLUTE=&quot;\&quot;/usr/bin/g77\&quot;&quot;
&gt;&gt;&gt; -DOMPI_F90_ABSOLUTE=&quot;\&quot;/usr/local/bin/g95\&quot;&quot;
&gt;&gt;&gt; -DOMPI_F90_BUILD_SIZE=&quot;\&quot;small\&quot;&quot; -I../../..  -D_REENTRANT  -O3 
&gt;&gt;&gt; -DNDEBUG -finline-functions  -MT param.o -MD -MP -MF $depbase.Tpo -c
&gt;&gt;&gt; -o param.o param.cc In file included from 
&gt;&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/
&gt;&gt;&gt; vector:72,
&gt;&gt;&gt;                from ../../../ompi/tools/ompi_info/ompi_info.h:24,
&gt;&gt;&gt;                from param.cc:43:
&gt;&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/stl_bvector.h: In
&gt;&gt;&gt; member function `void std::vector&lt;bool, 
&gt;&gt;&gt; _Alloc&gt;::_M_insert_range(std::_Bit_iterator, _ForwardIterator, 
&gt;&gt;&gt; _ForwardIterator, std::forward_iterator_tag)':
&gt;&gt;&gt;
/usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/stl_bvector.h:522:
&gt;&gt;&gt; error: expected unqualified-id before '(' token
&gt;&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/stl_bvector.h: In
&gt;&gt;&gt; member function `void std::vector&lt;bool, 
&gt;&gt;&gt; _Alloc&gt;::_M_fill_insert(std::_Bit_iterator, size_t, bool)':
&gt;&gt;&gt;
/usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/stl_bvector.h:823:
&gt;&gt;&gt; error: expected unqualified-id before '(' token In file included 
&gt;&gt;&gt; from /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/
&gt;&gt;&gt; vector:75,
&gt;&gt;&gt;                from ../../../ompi/tools/ompi_info/ompi_info.h:24,
&gt;&gt;&gt;                from param.cc:43:
&gt;&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/vector.tcc: In 
&gt;&gt;&gt; member function `void std::vector&lt;_Tp, 
&gt;&gt;&gt; _Alloc&gt;::_M_fill_insert(__gnu_cxx::__normal_iterator&lt;typename
&gt;&gt;&gt; _Alloc::pointer, std::vector&lt;_Tp, _Alloc&gt; &gt;, size_t, const _Tp&amp;)':
&gt;&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/vector.tcc:307:
&gt;&gt;&gt; error: expected unqualified-id before '(' token
&gt;&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/vector.tcc: In 
&gt;&gt;&gt; member function `void std::vector&lt;_Tp, 
&gt;&gt;&gt; _Alloc&gt;::_M_range_insert(__gnu_cxx::__normal_iterator&lt;typename
&gt;&gt;&gt; _Alloc::pointer, std::vector&lt;_Tp, _Alloc&gt; &gt;, _ForwardIterator, 
&gt;&gt;&gt; _ForwardIterator, std::forward_iterator_tag)':
&gt;&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/vector.tcc:384:
&gt;&gt;&gt; error: expected unqualified-id before '(' token
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; --
&gt;&gt;&gt; Gustavo Seabra
&gt;&gt;&gt; Postdoctoral Associate
&gt;&gt;&gt; Quantum Theory Project - University of Florida Gainesville - Florida
&gt;&gt;&gt; - USA
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; ------------------------------
&gt;&gt;&gt;
&gt;&gt;&gt; Message: 4
&gt;&gt;&gt; Date: Mon, 3 Nov 2008 14:54:25 -0500
&gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt;&gt;&gt; Subject: Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C+
&gt;&gt;&gt; +)
&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt;&gt;&gt; Message-ID: &lt;45698801-0857-466F-A19D-C529F72D4A18_at_[hidden]&gt;
&gt;&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
&gt;&gt;&gt;
&gt;&gt;&gt; Can you replicate the scenario in smaller / different cases?
&gt;&gt;&gt;
&gt;&gt;&gt; - write a sample plugin in C instead of C++
&gt;&gt;&gt; - write a non-MPI Fortran application that loads your C++ 
&gt;&gt;&gt; application
&gt;&gt;&gt; - ...?
&gt;&gt;&gt;
&gt;&gt;&gt; In short, *MPI* shouldn't be interfering with Fortran/C++ common 
&gt;&gt;&gt; blocks.  Try taking MPI out of the picture and see if that makes the
&gt;&gt;&gt; problem go away.
&gt;&gt;&gt;
&gt;&gt;&gt; Those are pretty much shots in the dark, but I don't know where to 
&gt;&gt;&gt; go, either -- try random things until you find what you want.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Nov 3, 2008, at 3:51 AM, Rajesh Ramaya wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Helllo Jeff, Gustavo, Mi
&gt;&gt;&gt;&gt;   Thank for the advice. I am familiar with the difference in the 
&gt;&gt;&gt;&gt; compiler code generation for C, C++ &amp; FORTRAN. I even tried to look
&gt;&gt;&gt;&gt; at some of the common block symbols. The name of the symbol remains
&gt;&gt;&gt;&gt; the same. The only difference that I observe is in FORTRAN compiled
&gt;&gt;&gt;&gt; *.o  0000000000515bc0 B aux7loc_  and the C++ compiled code  U 
&gt;&gt;&gt;&gt; aux7loc_  the memory is not allocated as it has been declared as 
&gt;&gt;&gt;&gt; extern in C++. When the executable loads the shared library it 
&gt;&gt;&gt;&gt; finds all the undefined symbols. Atleast if it did not manage to 
&gt;&gt;&gt;&gt; find a single symbol it prints undefined symbol error.
&gt;&gt;&gt;&gt; I am completely stuck up and do not know how to continue further.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Thanks,
&gt;&gt;&gt;&gt; Rajesh
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] 
&gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]]
&gt;&gt;&gt;&gt; On Behalf Of Mi Yan
&gt;&gt;&gt;&gt; Sent: samedi 1 novembre 2008 23:26
&gt;&gt;&gt;&gt; To: Open MPI Users
&gt;&gt;&gt;&gt; Cc: 'Open MPI Users'; users-bounces_at_[hidden]
&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C
&gt;&gt;&gt;&gt; ++)
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; So your tests show:
&gt;&gt;&gt;&gt; 1. &quot;Shared library in FORTRAN + MPI executable in FORTRAN&quot; works.
&gt;&gt;&gt;&gt; 2. &quot;Shared library in C++ + MPI executable in FORTRAN &quot; does not 
&gt;&gt;&gt;&gt; work.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; It seems to me that the symbols in C library are not really 
&gt;&gt;&gt;&gt; recognized by FORTRAN executable as you thought. What compilers did
&gt;&gt;&gt;&gt; yo use to built OpenMPI?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Different compiler has different convention to handle symbols. E.g.
&gt;&gt;&gt;&gt; if there is a variable &quot;var_foo&quot; in your FORTRAN code, some FORTRN 
&gt;&gt;&gt;&gt; compiler will save &quot;var_foo_&quot; in the object file by default; if you
&gt;&gt;&gt;&gt; want to access &quot;var_foo&quot; in C code, you actually need to refer 
&gt;&gt;&gt;&gt; &quot;var_foo_&quot; in C code. If you define &quot;var_foo&quot; in a module in the 
&gt;&gt;&gt;&gt; FORTAN compiler, some FORTRAN compiler may append the module name 
&gt;&gt;&gt;&gt; to &quot;var_foo&quot;.
&gt;&gt;&gt;&gt; So I suggest to check the symbols in the object files generated by 
&gt;&gt;&gt;&gt; your FORTAN and C compiler to see the difference.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Mi
&gt;&gt;&gt;&gt; &lt;image001.gif&gt;&quot;Rajesh Ramaya&quot; &lt;rajesh.ramaya_at_[hidden]&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; &quot;Rajesh Ramaya&quot; &lt;rajesh.ramaya_at_[hidden]&gt; Sent by: 
&gt;&gt;&gt;&gt; users-bounces_at_[hidden]
&gt;&gt;&gt;&gt; 10/31/2008 03:07 PM
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Please respond to
&gt;&gt;&gt;&gt; Open MPI Users &lt;users_at_[hidden]&gt; &lt;image002.gif&gt; To 
&gt;&gt;&gt;&gt; &lt;image003.gif&gt; &quot;'Open MPI Users'&quot; &lt;users_at_[hidden]&gt;, &quot;'Jeff 
&gt;&gt;&gt;&gt; Squyres'&quot; &lt;jsquyres_at_[hidden]
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; &lt;image002.gif&gt;
&gt;&gt;&gt;&gt; cc
&gt;&gt;&gt;&gt; &lt;image003.gif&gt;
&gt;&gt;&gt;&gt; &lt;image002.gif&gt;
&gt;&gt;&gt;&gt; Subject
&gt;&gt;&gt;&gt; &lt;image003.gif&gt;
&gt;&gt;&gt;&gt; Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; &lt;image003.gif&gt;
&gt;&gt;&gt;&gt; &lt;image003.gif&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Hello Jeff Squyres,
&gt;&gt;&gt;&gt;  Thank you very much for the immediate reply. I am able to 
&gt;&gt;&gt;&gt; successfully access the data from the common block but the values 
&gt;&gt;&gt;&gt; are zero. In my algorithm I even update a common block but the 
&gt;&gt;&gt;&gt; update made by the shared library is not taken in to account by the
&gt;&gt;&gt;&gt; executable. Can you please be very specific how to make the 
&gt;&gt;&gt;&gt; parallel algorithm aware of the data?
&gt;&gt;&gt;&gt; Actually I am
&gt;&gt;&gt;&gt; not writing any MPI code inside? It's the executable (third party
&gt;&gt;&gt;&gt; software)
&gt;&gt;&gt;&gt; who does that part. All that I am doing is to compile my code with 
&gt;&gt;&gt;&gt; MPI c compiler and add it in the LD_LIBIRARY_PATH.
&gt;&gt;&gt;&gt; In fact I did a simple test by creating a shared library using a 
&gt;&gt;&gt;&gt; FORTRAN code and the update made to the common block is taken in to
&gt;&gt;&gt;&gt; account by the executable. Is there any flag or pragma that need to
&gt;&gt;&gt;&gt; be activated for mixed language MPI?
&gt;&gt;&gt;&gt; Thank you once again for the reply.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Rajesh
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; -----Original Message-----
&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] 
&gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]]
&gt;&gt;&gt;&gt; On
&gt;&gt;&gt;&gt; Behalf Of Jeff Squyres
&gt;&gt;&gt;&gt; Sent: vendredi 31 octobre 2008 18:53
&gt;&gt;&gt;&gt; To: Open MPI Users
&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C
&gt;&gt;&gt;&gt; ++)
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On Oct 31, 2008, at 11:57 AM, Rajesh Ramaya wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;    I am completely new to MPI. I have a basic question concerning 
&gt;&gt;&gt;&gt;&gt; MPI and mixed language coding. I hope any of you could help me
out.
&gt;&gt;&gt;&gt;&gt; Is it possible to access FORTRAN common blocks in C++ in a MPI 
&gt;&gt;&gt;&gt;&gt; compiled code. It works without MPI but as soon I switch to MPI 
&gt;&gt;&gt;&gt;&gt; the access of common block does not work anymore.
&gt;&gt;&gt;&gt;&gt; I have a Linux MPI executable which loads a shared library at 
&gt;&gt;&gt;&gt;&gt; runtime and resolves all undefined symbols etc  The shared library
&gt;&gt;&gt;&gt;&gt; is written in C++ and the MPI executable in written in FORTRAN.
&gt;&gt;&gt;&gt;&gt; Some
&gt;&gt;&gt;&gt;&gt; of the input that the shared library looking for are in the 
&gt;&gt;&gt;&gt;&gt; Fortran common blocks. As I access those common blocks during 
&gt;&gt;&gt;&gt;&gt; runtime the values are not  initialized.  I would like to know if 
&gt;&gt;&gt;&gt;&gt; what I am doing is possible ?I hope that my problem is clear......
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Generally, MPI should not get in the way of sharing common blocks 
&gt;&gt;&gt;&gt; between Fortran and C/C++.  Indeed, in Open MPI itself, we share a 
&gt;&gt;&gt;&gt; few common blocks between Fortran and the main C Open MPI 
&gt;&gt;&gt;&gt; implementation.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; What is the exact symptom that you are seeing?  Is the application 
&gt;&gt;&gt;&gt; failing to resolve symbols at run-time, possibly indicating that 
&gt;&gt;&gt;&gt; something hasn't instantiated a common block?  Or are you able to 
&gt;&gt;&gt;&gt; successfully access the data from the common block, but it doesn't 
&gt;&gt;&gt;&gt; have the values you expect (e.g., perhaps you're seeing all zeros)?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; If the former, you might want to check your build procedure.  You
&gt;&gt;&gt;&gt; *should* be able to simply replace your C++ / F90 compilers with 
&gt;&gt;&gt;&gt; mpicxx and mpif90, respectively, and be able to build an MPI 
&gt;&gt;&gt;&gt; version of your app.  If the latter, you might need to make your 
&gt;&gt;&gt;&gt; parallel algorithm aware of what data is available in which MPI 
&gt;&gt;&gt;&gt; process -- perhaps not all the data is filled in on each MPI
process...?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt;&gt; Cisco Systems
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; --
&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt; Cisco Systems
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; ------------------------------
&gt;&gt;&gt;
&gt;&gt;&gt; Message: 5
&gt;&gt;&gt; Date: Mon, 3 Nov 2008 15:04:47 -0500
&gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt;&gt;&gt; Subject: Re: [OMPI users] Problems installing in Cygwin - Problem 
&gt;&gt;&gt; with
&gt;&gt;&gt;       GCC     3.4.4
&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt;&gt;&gt; Message-ID: &lt;8E364B51-6726-4533-ADE2-AEA266380DCC_at_[hidden]&gt;
&gt;&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
&gt;&gt;&gt;
&gt;&gt;&gt; On Nov 3, 2008, at 2:53 PM, Gustavo Seabra wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Finally, I was *almost* able to compile OpenMPI in Cygwin using the
&gt;&gt;&gt;&gt; following configure command:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; ./configure --prefix=/home/seabra/local/openmpi-1.3b1 \
&gt;&gt;&gt;&gt;               --with-mpi-param_check=always --with-threads=posix \
&gt;&gt;&gt;&gt;               --enable-mpi-threads --disable-io-romio \
&gt;&gt;&gt;&gt;               --enable-mca-no-
&gt;&gt;&gt;&gt; build=memory_mallopt,maffinity,paffinity \
&gt;&gt;&gt;&gt;               --enable-contrib-no-build=vt \
&gt;&gt;&gt;&gt;               FC=g95 'FFLAGS=-O0  -fno-second-underscore' CXX=g++
&gt;&gt;&gt;
&gt;&gt;&gt; For your fortran issue, the Fortran 90 interface needs the Fortran 
&gt;&gt;&gt; 77 interface.  So you need to supply an F77 as well (the output from
&gt;&gt;&gt; configure should indicate that the F90 interface was disabled 
&gt;&gt;&gt; because the F77 interface was disabled).
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; I then had a very weird error during compilation of 
&gt;&gt;&gt;&gt; ompi/tools/ompi_info/params.cc. (See below).
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; The lines causing the compilation errors are:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; vector.tcc:307:      const size_type __len = __old_size +
&gt;&gt;&gt;&gt; std::max(__old_size, __n);
&gt;&gt;&gt;&gt; vector.tcc:384:      const size_type __len = __old_size +
&gt;&gt;&gt;&gt; std::max(__old_size, __n);
&gt;&gt;&gt;&gt; stl_bvector.h:522:  const size_type __len = size() + 
&gt;&gt;&gt;&gt; std::max(size(), __n);
&gt;&gt;&gt;&gt; stl_bvector.h:823:  const size_type __len = size() + 
&gt;&gt;&gt;&gt; std::max(size(), __n);
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; (Notice that those are from the standard gcc libraries.)
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; After googling it for a while, I could find that this error is 
&gt;&gt;&gt;&gt; caused because, at come point, the source code being compiled 
&gt;&gt;&gt;&gt; redefined the &quot;max&quot; function with a macro, g++ cannot recognize the
&gt;&gt;&gt;&gt; &quot;std::max&quot;
&gt;&gt;&gt;&gt; that
&gt;&gt;&gt;&gt; happens in those lines and only &quot;sees&quot; a (...), thus printing that 
&gt;&gt;&gt;&gt; cryptic complaint.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; I looked in some places in the OpenMPI code, but I couldn't find 
&gt;&gt;&gt;&gt; &quot;max&quot; being redefined anywhere, but I may be looking in the wrong 
&gt;&gt;&gt;&gt; places. Anyways, the only way of found of compiling OpenMPI was a 
&gt;&gt;&gt;&gt; very ugly hack: I have to go into those files and remove the 
&gt;&gt;&gt;&gt; &quot;std::&quot;
&gt;&gt;&gt;&gt; before
&gt;&gt;&gt;&gt; the &quot;max&quot;. With that, it all compiled cleanly.
&gt;&gt;&gt;
&gt;&gt;&gt; I'm not sure I follow -- I don't see anywhere in OMPI where we use 
&gt;&gt;&gt; std::max.  What areas did you find that you needed to change?
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; I did try running the tests in the 'tests' directory (with 'make 
&gt;&gt;&gt;&gt; check'), and I didn't get any alarming message, except that in some
&gt;&gt;&gt;&gt; cases (class, threads, peruse) it printed &quot;All 0 tests passed&quot;. I 
&gt;&gt;&gt;&gt; got and &quot;All (n) tests passed&quot; (n&gt;0) for asm and datatype.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Can anybody comment on the meaning of those test results? Should I 
&gt;&gt;&gt;&gt; be alarmed with the &quot;All 0 tests passed&quot; messages?
&gt;&gt;&gt;
&gt;&gt;&gt; No.  We don't really maintain the &quot;make check&quot; stuff too well.
&gt;&gt;&gt;
&gt;&gt;&gt; --
&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt; Cisco Systems
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; ------------------------------
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt; End of users Digest, Vol 1055, Issue 2
&gt;&gt;&gt; **************************************
&gt;&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; --
&gt;&gt; -Rima
&gt;&gt; &lt;step1&gt;_______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt;
&gt; ------------------------------
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt; End of users Digest, Vol 1055, Issue 4
&gt; **************************************
&gt;
--
-Rima
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7212.php">Rima Chaudhuri: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<li><strong>Previous message:</strong> <a href="7210.php">Ralph Castain: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<li><strong>In reply to:</strong> <a href="7198.php">Rima Chaudhuri: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7212.php">Rima Chaudhuri: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
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
