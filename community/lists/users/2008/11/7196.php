<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1055, Issue 2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 16:14:43 2008" -->
<!-- isoreceived="20081103211443" -->
<!-- sent="Mon, 3 Nov 2008 14:14:36 -0700" -->
<!-- isosent="20081103211436" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1055, Issue 2" -->
<!-- id="2FBDF4DC-B2DF-4486-A644-0F18C96E8EB2_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7503b17d0811031239j4f5f9a57w1f0c1087cadbab4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1055, Issue 2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-03 16:14:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7197.php">Jeff Squyres: "Re: [OMPI users] switch from mpich2 to openMPI &lt;newbie question&gt;"</a>
<li><strong>Previous message:</strong> <a href="7195.php">PattiMichelle: "[OMPI users] switch from mpich2 to openMPI &lt;newbie question&gt;"</a>
<li><strong>In reply to:</strong> <a href="7193.php">Rima Chaudhuri: "Re: [OMPI users] users Digest, Vol 1055, Issue 2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is that you didn't specify or allocate any nodes for the  
<br>
job. At the least, you need to tell us what nodes to use via a hostfile.
<br>
<p>Alternatively, are you using a resource manager to assign the nodes?  
<br>
OMPI didn't see anything from one, but it could be that we just didn't  
<br>
see the right envar.
<br>
<p>Ralph
<br>
<p>On Nov 3, 2008, at 1:39 PM, Rima Chaudhuri wrote:
<br>
<p><span class="quotelev1">&gt; Thanks a lot Ralph!
</span><br>
<span class="quotelev1">&gt; I corrected the no_local to nolocal and now when I try to execute the
</span><br>
<span class="quotelev1">&gt; script step1 (pls find it attached)
</span><br>
<span class="quotelev1">&gt; [rchaud_at_helios amber10]$ ./step1
</span><br>
<span class="quotelev1">&gt; [helios.structure.uic.edu:16335] [0,0,0] ORTE_ERROR_LOG: Not available
</span><br>
<span class="quotelev1">&gt; in file ras_bjs.c at line 247
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are no available nodes allocated to this job. This could be  
</span><br>
<span class="quotelev1">&gt; because
</span><br>
<span class="quotelev1">&gt; no nodes were found or all the available nodes were already used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that since the -nolocal option was given no processes can be
</span><br>
<span class="quotelev1">&gt; launched on the local node.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [helios.structure.uic.edu:16335] [0,0,0] ORTE_ERROR_LOG: Temporarily
</span><br>
<span class="quotelev1">&gt; out of resource in file base/rmaps_base_support_fns.c at line 168
</span><br>
<span class="quotelev1">&gt; [helios.structure.uic.edu:16335] [0,0,0] ORTE_ERROR_LOG: Temporarily
</span><br>
<span class="quotelev1">&gt; out of resource in file rmaps_rr.c at line 402
</span><br>
<span class="quotelev1">&gt; [helios.structure.uic.edu:16335] [0,0,0] ORTE_ERROR_LOG: Temporarily
</span><br>
<span class="quotelev1">&gt; out of resource in file base/rmaps_base_map_job.c at line 210
</span><br>
<span class="quotelev1">&gt; [helios.structure.uic.edu:16335] [0,0,0] ORTE_ERROR_LOG: Temporarily
</span><br>
<span class="quotelev1">&gt; out of resource in file rmgr_urm.c at line 372
</span><br>
<span class="quotelev1">&gt; [helios.structure.uic.edu:16335] mpirun: spawn failed with errno=-3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I use the script without the --nolocal option, I get the  
</span><br>
<span class="quotelev1">&gt; following error:
</span><br>
<span class="quotelev1">&gt; [helios.structure.uic.edu:20708] [0,0,0] ORTE_ERROR_LOG: Not available
</span><br>
<span class="quotelev1">&gt; in file ras_bjs.c at line 247
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Nov 3, 2008 at 2:04 PM,  &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev2">&gt;&gt;       users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt;&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt;&gt;       users-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt;&gt;       users-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  1. Scyld Beowulf and openmpi (Rima Chaudhuri)
</span><br>
<span class="quotelev2">&gt;&gt;  2. Re: Scyld Beowulf and openmpi (Ralph Castain)
</span><br>
<span class="quotelev2">&gt;&gt;  3. Problems installing in Cygwin - Problem with GCC 3.4.4
</span><br>
<span class="quotelev2">&gt;&gt;     (Gustavo Seabra)
</span><br>
<span class="quotelev2">&gt;&gt;  4. Re: MPI + Mixed language coding(Fortran90 + C++) (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt;&gt;  5. Re: Problems installing in Cygwin - Problem with GCC      3.4.4
</span><br>
<span class="quotelev2">&gt;&gt;     (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, 3 Nov 2008 11:30:01 -0600
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Rima Chaudhuri&quot; &lt;rima.chaudhuri_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Scyld Beowulf and openmpi
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt;       &lt;7503b17d0811030930i13acb974kc627983a1d481192_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello!
</span><br>
<span class="quotelev2">&gt;&gt; I am a new user of openmpi -- I've installed openmpi 1.2.6 for our
</span><br>
<span class="quotelev2">&gt;&gt; x86_64 linux scyld beowulf cluster inorder to make it run with  
</span><br>
<span class="quotelev2">&gt;&gt; amber10
</span><br>
<span class="quotelev2">&gt;&gt; MD simulation package.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The nodes can see the home directory i.e. a bpsh to the nodes works
</span><br>
<span class="quotelev2">&gt;&gt; fine and lists all the files in the home directory where I have both
</span><br>
<span class="quotelev2">&gt;&gt; openmpi and amber10 installed.
</span><br>
<span class="quotelev2">&gt;&gt; However if I try to run:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $MPI_HOME/bin/mpirun -no_local=1 -np 4 $AMBERHOME/exe/ 
</span><br>
<span class="quotelev2">&gt;&gt; sander.MPI ........
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt; [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at line 247
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Failed to find the following executable:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Host:       helios.structure.uic.edu
</span><br>
<span class="quotelev2">&gt;&gt; Executable: -o
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cannot continue.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [helios.structure.uic.edu:23611] [0,0,0] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev2">&gt;&gt; file rmgr_urm.c at line 462
</span><br>
<span class="quotelev2">&gt;&gt; [helios.structure.uic.edu:23611] mpirun: spawn failed with errno=-13
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; any cues?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; -Rima
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 2
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, 3 Nov 2008 12:08:36 -0700
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Scyld Beowulf and openmpi
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;91044A7E-ADA5-4B94-AA11-B3C1D9843606_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For starters, there is no &quot;-no_local&quot; option to mpirun. You might  
</span><br>
<span class="quotelev2">&gt;&gt; want
</span><br>
<span class="quotelev2">&gt;&gt; to look at mpirun --help, or man mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect the option you wanted was --nolocal. Note that --nolocal
</span><br>
<span class="quotelev2">&gt;&gt; does not take an argument.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mpirun is confused by the incorrect option and looking for an
</span><br>
<span class="quotelev2">&gt;&gt; incorrectly named executable.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 3, 2008, at 10:30 AM, Rima Chaudhuri wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am a new user of openmpi -- I've installed openmpi 1.2.6 for our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x86_64 linux scyld beowulf cluster inorder to make it run with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; amber10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MD simulation package.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The nodes can see the home directory i.e. a bpsh to the nodes works
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fine and lists all the files in the home directory where I have both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi and amber10 installed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However if I try to run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $MPI_HOME/bin/mpirun -no_local=1 -np 4 $AMBERHOME/exe/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sander.MPI ........
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at line 247
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Failed to find the following executable:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host:       helios.structure.uic.edu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Executable: -o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cannot continue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios.structure.uic.edu:23611] [0,0,0] ORTE_ERROR_LOG: Not found  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file rmgr_urm.c at line 462
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios.structure.uic.edu:23611] mpirun: spawn failed with errno=-13
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any cues?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Rima
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 3
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, 3 Nov 2008 14:53:55 -0500
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Gustavo Seabra&quot; &lt;gustavo.seabra_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Problems installing in Cygwin - Problem with  
</span><br>
<span class="quotelev2">&gt;&gt; GCC
</span><br>
<span class="quotelev2">&gt;&gt;       3.4.4
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt;       &lt;f79359b60811031153l5591e0f8j49a7e4d9fb02eea3_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's a &quot;progress report&quot;... more questions in the end :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Finally, I was *almost* able to compile OpenMPI in Cygwin using the
</span><br>
<span class="quotelev2">&gt;&gt; following configure command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/home/seabra/local/openmpi-1.3b1 \
</span><br>
<span class="quotelev2">&gt;&gt;               --with-mpi-param_check=always --with-threads=posix \
</span><br>
<span class="quotelev2">&gt;&gt;               --enable-mpi-threads --disable-io-romio \
</span><br>
<span class="quotelev2">&gt;&gt;               --enable-mca-no- 
</span><br>
<span class="quotelev2">&gt;&gt; build=memory_mallopt,maffinity,paffinity \
</span><br>
<span class="quotelev2">&gt;&gt;               --enable-contrib-no-build=vt \
</span><br>
<span class="quotelev2">&gt;&gt;               FC=g95 'FFLAGS=-O0  -fno-second-underscore' CXX=g++
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I then had a very weird error during compilation of
</span><br>
<span class="quotelev2">&gt;&gt; ompi/tools/ompi_info/params.cc. (See below).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The lines causing the compilation errors are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; vector.tcc:307:      const size_type __len = __old_size +
</span><br>
<span class="quotelev2">&gt;&gt; std::max(__old_size, __n);
</span><br>
<span class="quotelev2">&gt;&gt; vector.tcc:384:      const size_type __len = __old_size +
</span><br>
<span class="quotelev2">&gt;&gt; std::max(__old_size, __n);
</span><br>
<span class="quotelev2">&gt;&gt; stl_bvector.h:522:  const size_type __len = size() +  
</span><br>
<span class="quotelev2">&gt;&gt; std::max(size(), __n);
</span><br>
<span class="quotelev2">&gt;&gt; stl_bvector.h:823:  const size_type __len = size() +  
</span><br>
<span class="quotelev2">&gt;&gt; std::max(size(), __n);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Notice that those are from the standard gcc libraries.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After googling it for a while, I could find that this error is caused
</span><br>
<span class="quotelev2">&gt;&gt; because, at come point, the source code being compiled redefined the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;max&quot; function with a macro, g++ cannot recognize the &quot;std::max&quot; that
</span><br>
<span class="quotelev2">&gt;&gt; happens in those lines and only &quot;sees&quot; a (...), thus printing that
</span><br>
<span class="quotelev2">&gt;&gt; cryptic complaint.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I looked in some places in the OpenMPI code, but I couldn't find
</span><br>
<span class="quotelev2">&gt;&gt; &quot;max&quot; being redefined anywhere, but I may be looking in the wrong
</span><br>
<span class="quotelev2">&gt;&gt; places. Anyways, the only way of found of compiling OpenMPI was a  
</span><br>
<span class="quotelev2">&gt;&gt; very
</span><br>
<span class="quotelev2">&gt;&gt; ugly hack: I have to go into those files and remove the &quot;std::&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; before
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;max&quot;. With that, it all compiled cleanly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did try running the tests in the 'tests' directory (with 'make
</span><br>
<span class="quotelev2">&gt;&gt; check'), and I didn't get any alarming message, except that in some
</span><br>
<span class="quotelev2">&gt;&gt; cases (class, threads, peruse) it printed &quot;All 0 tests passed&quot;. I got
</span><br>
<span class="quotelev2">&gt;&gt; and &quot;All (n) tests passed&quot; (n&gt;0) for asm and datatype.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody comment on the meaning of those test results? Should I be
</span><br>
<span class="quotelev2">&gt;&gt; alarmed with the &quot;All 0 tests passed&quot; messages?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Finally, in the absence of big red flags (that I noticed), I went
</span><br>
<span class="quotelev2">&gt;&gt; ahead and tried to compile my program. However, as soon as  
</span><br>
<span class="quotelev2">&gt;&gt; compilation
</span><br>
<span class="quotelev2">&gt;&gt; starts, I get the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /local/openmpi/openmpi-1.3b1/bin/mpif90 -c -O3  -fno-second- 
</span><br>
<span class="quotelev2">&gt;&gt; underscore
</span><br>
<span class="quotelev2">&gt;&gt; -ffree-form  -o constants.o _constants.f
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev2">&gt;&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [constants.o] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/seabra/local/amber11/src/sander'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [parallel] Error 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Notice that I compiled OpenMPI with g95, so there *should* be
</span><br>
<span class="quotelev2">&gt;&gt; Fortran95 support... Any ideas on what could be going wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much,
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ======================================
</span><br>
<span class="quotelev2">&gt;&gt; Error in the compilation of params.cc
</span><br>
<span class="quotelev2">&gt;&gt; ======================================
</span><br>
<span class="quotelev2">&gt;&gt; $ g++ -DHAVE_CONFIG_H -I. -I../../../opal/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../orte/include -I../../../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../opal/mca/paffinity/linux/plpa/src/libplpa
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_CONFIGURE_USER=&quot;\&quot;seabra\&quot;&quot; -DOMPI_CONFIGURE_HOST=&quot;\&quot;ACS02\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_CONFIGURE_DATE=&quot;\&quot;Sat Nov  1 20:44:32 EDT 2008\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; -DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; -DOMPI_BUILD_CFLAGS=&quot;\&quot;-O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing \&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../..  -D_REENTRANT\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O3 -DNDEBUG -finline-functions \&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../..  -D_REENTRANT\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_BUILD_FFLAGS=&quot;\&quot;-O0  -fno-second-underscore\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_BUILD_FCFLAGS=&quot;\&quot;\&quot;&quot; -DOMPI_BUILD_LDFLAGS=&quot;\&quot;-export-dynamic
</span><br>
<span class="quotelev2">&gt;&gt; \&quot;&quot; -DOMPI_BUILD_LIBS=&quot;\&quot;-lutil  \&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_CC_ABSOLUTE=&quot;\&quot;/usr/bin/gcc\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_CXX_ABSOLUTE=&quot;\&quot;/usr/bin/g++\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_F77_ABSOLUTE=&quot;\&quot;/usr/bin/g77\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_F90_ABSOLUTE=&quot;\&quot;/usr/local/bin/g95\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_F90_BUILD_SIZE=&quot;\&quot;small\&quot;&quot; -I../../..  -D_REENTRANT  -O3
</span><br>
<span class="quotelev2">&gt;&gt; -DNDEBUG -finline-functions  -MT param.o -MD -MP -MF $depbase.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; -o param.o param.cc
</span><br>
<span class="quotelev2">&gt;&gt; In file included from /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/ 
</span><br>
<span class="quotelev2">&gt;&gt; vector:72,
</span><br>
<span class="quotelev2">&gt;&gt;                from ../../../ompi/tools/ompi_info/ompi_info.h:24,
</span><br>
<span class="quotelev2">&gt;&gt;                from param.cc:43:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/stl_bvector.h: In
</span><br>
<span class="quotelev2">&gt;&gt; member function `void std::vector&lt;bool,
</span><br>
<span class="quotelev2">&gt;&gt; _Alloc&gt;::_M_insert_range(std::_Bit_iterator, _ForwardIterator,
</span><br>
<span class="quotelev2">&gt;&gt; _ForwardIterator, std::forward_iterator_tag)':
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/stl_bvector.h:522:
</span><br>
<span class="quotelev2">&gt;&gt; error: expected unqualified-id before '(' token
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/stl_bvector.h: In
</span><br>
<span class="quotelev2">&gt;&gt; member function `void std::vector&lt;bool,
</span><br>
<span class="quotelev2">&gt;&gt; _Alloc&gt;::_M_fill_insert(std::_Bit_iterator, size_t, bool)':
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/stl_bvector.h:823:
</span><br>
<span class="quotelev2">&gt;&gt; error: expected unqualified-id before '(' token
</span><br>
<span class="quotelev2">&gt;&gt; In file included from /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/ 
</span><br>
<span class="quotelev2">&gt;&gt; vector:75,
</span><br>
<span class="quotelev2">&gt;&gt;                from ../../../ompi/tools/ompi_info/ompi_info.h:24,
</span><br>
<span class="quotelev2">&gt;&gt;                from param.cc:43:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/vector.tcc: In
</span><br>
<span class="quotelev2">&gt;&gt; member function `void std::vector&lt;_Tp,
</span><br>
<span class="quotelev2">&gt;&gt; _Alloc&gt;::_M_fill_insert(__gnu_cxx::__normal_iterator&lt;typename
</span><br>
<span class="quotelev2">&gt;&gt; _Alloc::pointer, std::vector&lt;_Tp, _Alloc&gt; &gt;, size_t, const _Tp&amp;)':
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/vector.tcc:307:
</span><br>
<span class="quotelev2">&gt;&gt; error: expected unqualified-id before '(' token
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/vector.tcc: In
</span><br>
<span class="quotelev2">&gt;&gt; member function `void std::vector&lt;_Tp,
</span><br>
<span class="quotelev2">&gt;&gt; _Alloc&gt;::_M_range_insert(__gnu_cxx::__normal_iterator&lt;typename
</span><br>
<span class="quotelev2">&gt;&gt; _Alloc::pointer, std::vector&lt;_Tp, _Alloc&gt; &gt;, _ForwardIterator,
</span><br>
<span class="quotelev2">&gt;&gt; _ForwardIterator, std::forward_iterator_tag)':
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/vector.tcc:384:
</span><br>
<span class="quotelev2">&gt;&gt; error: expected unqualified-id before '(' token
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Seabra
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Associate
</span><br>
<span class="quotelev2">&gt;&gt; Quantum Theory Project - University of Florida
</span><br>
<span class="quotelev2">&gt;&gt; Gainesville - Florida - USA
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 4
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, 3 Nov 2008 14:54:25 -0500
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C+ 
</span><br>
<span class="quotelev2">&gt;&gt; +)
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;45698801-0857-466F-A19D-C529F72D4A18_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you replicate the scenario in smaller / different cases?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - write a sample plugin in C instead of C++
</span><br>
<span class="quotelev2">&gt;&gt; - write a non-MPI Fortran application that loads your C++ application
</span><br>
<span class="quotelev2">&gt;&gt; - ...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In short, *MPI* shouldn't be interfering with Fortran/C++ common
</span><br>
<span class="quotelev2">&gt;&gt; blocks.  Try taking MPI out of the picture and see if that makes the
</span><br>
<span class="quotelev2">&gt;&gt; problem go away.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Those are pretty much shots in the dark, but I don't know where to  
</span><br>
<span class="quotelev2">&gt;&gt; go,
</span><br>
<span class="quotelev2">&gt;&gt; either -- try random things until you find what you want.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 3, 2008, at 3:51 AM, Rajesh Ramaya wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Helllo Jeff, Gustavo, Mi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Thank for the advice. I am familiar with the difference in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler code generation for C, C++ &amp; FORTRAN. I even tried to look
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at some of the common block symbols. The name of the symbol remains
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same. The only difference that I observe is in FORTRAN compiled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *.o  0000000000515bc0 B aux7loc_  and the C++ compiled code  U
</span><br>
<span class="quotelev3">&gt;&gt;&gt; aux7loc_  the memory is not allocated as it has been declared as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extern in C++. When the executable loads the shared library it finds
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all the undefined symbols. Atleast if it did not manage to find a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; single symbol it prints undefined symbol error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am completely stuck up and do not know how to continue further.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rajesh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Behalf Of Mi Yan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: samedi 1 novembre 2008 23:26
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cc: 'Open MPI Users'; users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So your tests show:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. &quot;Shared library in FORTRAN + MPI executable in FORTRAN&quot; works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. &quot;Shared library in C++ + MPI executable in FORTRAN &quot; does not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems to me that the symbols in C library are not really
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recognized by FORTRAN executable as you thought. What compilers did
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yo use to built OpenMPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Different compiler has different convention to handle symbols. E.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if there is a variable &quot;var_foo&quot; in your FORTRAN code, some FORTRN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler will save &quot;var_foo_&quot; in the object file by default; if you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want to access &quot;var_foo&quot; in C code, you actually need to refer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;var_foo_&quot; in C code. If you define &quot;var_foo&quot; in a module in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FORTAN compiler, some FORTRAN compiler may append the module name to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;var_foo&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I suggest to check the symbols in the object files generated by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your FORTAN and C compiler to see the difference.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;image001.gif&gt;&quot;Rajesh Ramaya&quot; &lt;rajesh.ramaya_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;Rajesh Ramaya&quot; &lt;rajesh.ramaya_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10/31/2008 03:07 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please respond to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;image002.gif&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;image003.gif&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;'Open MPI Users'&quot; &lt;users_at_[hidden]&gt;, &quot;'Jeff Squyres'&quot; &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;image002.gif&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;image003.gif&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;image002.gif&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;image003.gif&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;image003.gif&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;image003.gif&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Jeff Squyres,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thank you very much for the immediate reply. I am able to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successfully
</span><br>
<span class="quotelev3">&gt;&gt;&gt; access the data from the common block but the values are zero. In my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; algorithm I even update a common block but the update made by the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library is not taken in to account by the executable. Can you please
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be very
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specific how to make the parallel algorithm aware of the data?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actually I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not writing any MPI code inside? It's the executable (third party
</span><br>
<span class="quotelev3">&gt;&gt;&gt; software)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; who does that part. All that I am doing is to compile my code with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler and add it in the LD_LIBIRARY_PATH.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In fact I did a simple test by creating a shared library using a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FORTRAN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code and the update made to the common block is taken in to account
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; executable. Is there any flag or pragma that need to be activated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for mixed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; language MPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you once again for the reply.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rajesh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: vendredi 31 octobre 2008 18:53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 31, 2008, at 11:57 AM, Rajesh Ramaya wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    I am completely new to MPI. I have a basic question concerning
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI and mixed language coding. I hope any of you could help me out.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it possible to access FORTRAN common blocks in C++ in a MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiled code. It works without MPI but as soon I switch to MPI the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; access of common block does not work anymore.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a Linux MPI executable which loads a shared library at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; runtime and resolves all undefined symbols etc  The shared library
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is written in C++ and the MPI executable in written in FORTRAN.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of the input that the shared library looking for are in the Fortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; common blocks. As I access those common blocks during runtime the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; values are not  initialized.  I would like to know if what I am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doing is possible ?I hope that my problem is clear......
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Generally, MPI should not get in the way of sharing common blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between Fortran and C/C++.  Indeed, in Open MPI itself, we share a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; few
</span><br>
<span class="quotelev3">&gt;&gt;&gt; common blocks between Fortran and the main C Open MPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the exact symptom that you are seeing?  Is the application
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failing to resolve symbols at run-time, possibly indicating that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something hasn't instantiated a common block?  Or are you able to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successfully access the data from the common block, but it doesn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have the values you expect (e.g., perhaps you're seeing all zeros)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the former, you might want to check your build procedure.  You
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *should* be able to simply replace your C++ / F90 compilers with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicxx and mpif90, respectively, and be able to build an MPI version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of your app.  If the latter, you might need to make your parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; algorithm aware of what data is available in which MPI process --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perhaps not all the data is filled in on each MPI process...?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
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
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 5
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, 3 Nov 2008 15:04:47 -0500
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Problems installing in Cygwin - Problem  
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt;       GCC     3.4.4
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;8E364B51-6726-4533-ADE2-AEA266380DCC_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 3, 2008, at 2:53 PM, Gustavo Seabra wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Finally, I was *almost* able to compile OpenMPI in Cygwin using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following configure command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/home/seabra/local/openmpi-1.3b1 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               --with-mpi-param_check=always --with-threads=posix \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               --enable-mpi-threads --disable-io-romio \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               --enable-mca-no-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build=memory_mallopt,maffinity,paffinity \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               --enable-contrib-no-build=vt \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               FC=g95 'FFLAGS=-O0  -fno-second-underscore' CXX=g++
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For your fortran issue, the Fortran 90 interface needs the Fortran 77
</span><br>
<span class="quotelev2">&gt;&gt; interface.  So you need to supply an F77 as well (the output from
</span><br>
<span class="quotelev2">&gt;&gt; configure should indicate that the F90 interface was disabled because
</span><br>
<span class="quotelev2">&gt;&gt; the F77 interface was disabled).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I then had a very weird error during compilation of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/tools/ompi_info/params.cc. (See below).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The lines causing the compilation errors are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vector.tcc:307:      const size_type __len = __old_size +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::max(__old_size, __n);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vector.tcc:384:      const size_type __len = __old_size +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::max(__old_size, __n);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stl_bvector.h:522:  const size_type __len = size() +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::max(size(), __n);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stl_bvector.h:823:  const size_type __len = size() +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::max(size(), __n);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Notice that those are from the standard gcc libraries.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After googling it for a while, I could find that this error is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; caused
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because, at come point, the source code being compiled redefined the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;max&quot; function with a macro, g++ cannot recognize the &quot;std::max&quot;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happens in those lines and only &quot;sees&quot; a (...), thus printing that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cryptic complaint.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I looked in some places in the OpenMPI code, but I couldn't find
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;max&quot; being redefined anywhere, but I may be looking in the wrong
</span><br>
<span class="quotelev3">&gt;&gt;&gt; places. Anyways, the only way of found of compiling OpenMPI was a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; very
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ugly hack: I have to go into those files and remove the &quot;std::&quot;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the &quot;max&quot;. With that, it all compiled cleanly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I follow -- I don't see anywhere in OMPI where we use
</span><br>
<span class="quotelev2">&gt;&gt; std::max.  What areas did you find that you needed to change?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did try running the tests in the 'tests' directory (with 'make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check'), and I didn't get any alarming message, except that in some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cases (class, threads, peruse) it printed &quot;All 0 tests passed&quot;. I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; got
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and &quot;All (n) tests passed&quot; (n&gt;0) for asm and datatype.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anybody comment on the meaning of those test results? Should I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; alarmed with the &quot;All 0 tests passed&quot; messages?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No.  We don't really maintain the &quot;make check&quot; stuff too well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; End of users Digest, Vol 1055, Issue 2
</span><br>
<span class="quotelev2">&gt;&gt; **************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -Rima
</span><br>
<span class="quotelev1">&gt; &lt;step1&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="7197.php">Jeff Squyres: "Re: [OMPI users] switch from mpich2 to openMPI &lt;newbie question&gt;"</a>
<li><strong>Previous message:</strong> <a href="7195.php">PattiMichelle: "[OMPI users] switch from mpich2 to openMPI &lt;newbie question&gt;"</a>
<li><strong>In reply to:</strong> <a href="7193.php">Rima Chaudhuri: "Re: [OMPI users] users Digest, Vol 1055, Issue 2"</a>
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
