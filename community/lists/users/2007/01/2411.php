<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  2 10:50:57 2007" -->
<!-- isoreceived="20070102155057" -->
<!-- sent="Tue, 2 Jan 2007 10:50:46 -0500" -->
<!-- isosent="20070102155046" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&amp;gt;dispatch() failed." -->
<!-- id="5395439B-4BFE-40C9-9F87-8AC9D9834AE3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E76804D5-562A-4D07-9F8F-FB4CD6680E75_at_cfp.ist.utl.pt" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-02 10:50:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2412.php">jcolmenares_at_[hidden]: "[OMPI users] orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="2410.php">Jeff Squyres: "Re: [OMPI users] segv at runtime with ifort"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2406.php">Michael Marti: "[OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2450.php">Michael Marti: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<li><strong>Reply:</strong> <a href="2450.php">Michael Marti: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yikes - that's not a good error.  :-(
<br>
<p>We don't regularly build / test on AIX, so I don't have much  
<br>
immediate guidance for you.  My best suggestion at this point would  
<br>
be to try the latest 1.2 beta or nightly snapshot.  We did an update  
<br>
of the event engine (the portion of the code that you're seeing the  
<br>
error issue from) that *may* alleviate the problem...?  (I have no  
<br>
idea, actually -- I'm just kinda hoping that the new version of the  
<br>
event engine will fix your problem :-\ )
<br>
<p><p>On Dec 27, 2006, at 10:29 AM, Michael Marti wrote:
<br>
<p><span class="quotelev1">&gt; Dear All
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to get openmpi-1.1.2 to work on AIX 5.3 / power5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :: Compilation seems to have worked with the following sequence:
</span><br>
<span class="quotelev1">&gt; ====================================================================
</span><br>
<span class="quotelev1">&gt; setenv OBJECT_MODE 64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv CC xlc
</span><br>
<span class="quotelev1">&gt; setenv CXX xlC
</span><br>
<span class="quotelev1">&gt; setenv F77 xlf
</span><br>
<span class="quotelev1">&gt; setenv FC xlf90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv CFLAGS &quot;-qthreaded -O3 -qmaxmem=-1 -qarch=pwr5x -qtune=pwr5 - 
</span><br>
<span class="quotelev1">&gt; q64&quot;
</span><br>
<span class="quotelev1">&gt; setenv CXXFLAGS &quot;-qthreaded -O3 -qmaxmem=-1 -qarch=pwr5x - 
</span><br>
<span class="quotelev1">&gt; qtune=pwr5 -q64&quot;
</span><br>
<span class="quotelev1">&gt; setenv FFLAGS &quot;-qthreaded -O3 -qmaxmem=-1 -qarch=pwr5x -qtune=pwr5 - 
</span><br>
<span class="quotelev1">&gt; q64&quot;
</span><br>
<span class="quotelev1">&gt; setenv FCFLAGS &quot;-qthreaded -O3 -qmaxmem=-1 -qarch=pwr5x -qtune=pwr5  
</span><br>
<span class="quotelev1">&gt; -q64&quot;
</span><br>
<span class="quotelev1">&gt; setenv LDFLAGS &quot;-Wl,-brtl&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/ist/openmpi-1.1.2 \
</span><br>
<span class="quotelev1">&gt;   --disable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;   --disable-mpi-cxx-seek \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-threads \
</span><br>
<span class="quotelev1">&gt;   --enable-progress-threads \
</span><br>
<span class="quotelev1">&gt;   --enable-static \
</span><br>
<span class="quotelev1">&gt;   --disable-shared \
</span><br>
<span class="quotelev1">&gt;   --disable-io-romio
</span><br>
<span class="quotelev1">&gt; ====================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :: After the compilation I ran make check and all 11 tests passed  
</span><br>
<span class="quotelev1">&gt; successfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :: Now I'm trying to run the following command just for test:
</span><br>
<span class="quotelev1">&gt; # mpirun -hostfile /gpfs/MICHAEL/MPI_hostfiles/mpinodes_b41- 
</span><br>
<span class="quotelev1">&gt; b44_1.asc -np 2 /usr/bin/hostname
</span><br>
<span class="quotelev1">&gt; - The file /gpfs/MICHAEL/MPI_hostfiles/mpinodes_b41-b44_1.asc  
</span><br>
<span class="quotelev1">&gt; contains 4 hosts:
</span><br>
<span class="quotelev1">&gt;     r1blade041 slots=1
</span><br>
<span class="quotelev1">&gt;     r1blade042 slots=1
</span><br>
<span class="quotelev1">&gt;     r1blade043 slots=1
</span><br>
<span class="quotelev1">&gt;     r1blade044 slots=1
</span><br>
<span class="quotelev1">&gt; - The mpirun command eventually hangs with the following message:
</span><br>
<span class="quotelev1">&gt;     [r1blade041:418014] poll failed with errno=25
</span><br>
<span class="quotelev1">&gt;     [r1blade041:418014] opal_event_loop: ompi_evesel-&gt;dispatch()  
</span><br>
<span class="quotelev1">&gt; failed.
</span><br>
<span class="quotelev1">&gt; - In this state mpirun cannot be killed by hitting &lt;ctrl-c&gt; only a  
</span><br>
<span class="quotelev1">&gt; kill -9 will do the trick.
</span><br>
<span class="quotelev1">&gt; - While the mpirun still hangs I can see that the &quot;orted&quot; has been  
</span><br>
<span class="quotelev1">&gt; launched on both requested hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :: I turned on all debug options in openmpi-mca-params.conf. The  
</span><br>
<span class="quotelev1">&gt; output for the same call of mpirun is in the file mpirun-debug.txt.gz.
</span><br>
<span class="quotelev1">&gt; &lt;mpirun-debug.txt.gz&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :: As sugested in the mailinglis rules I include config.log  
</span><br>
<span class="quotelev1">&gt; (config.log.gz) and the output of ompi_info (ompi_info.txt.gz).
</span><br>
<span class="quotelev1">&gt; &lt;config.log.gz&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.txt.gz&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :: As I am completely new to openmpi (I have some experience with  
</span><br>
<span class="quotelev1">&gt; lam) I am lost at this stage. I would really appreciate if someone  
</span><br>
<span class="quotelev1">&gt; could give me some hints as to what is going wrong and where I  
</span><br>
<span class="quotelev1">&gt; could get more info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Marti.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; Michael Marti
</span><br>
<span class="quotelev1">&gt; Centro de Fisica dos Plasmas
</span><br>
<span class="quotelev1">&gt; Instituto Superior Tecnico
</span><br>
<span class="quotelev1">&gt; Av. Rovisco Pais
</span><br>
<span class="quotelev1">&gt; 1049-001 Lisboa
</span><br>
<span class="quotelev1">&gt; Portugal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel:       +351 218 419 379
</span><br>
<span class="quotelev1">&gt; Fax:      +351 218 464 455
</span><br>
<span class="quotelev1">&gt; Mobile:  +351 968 434 327
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ------
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2412.php">jcolmenares_at_[hidden]: "[OMPI users] orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="2410.php">Jeff Squyres: "Re: [OMPI users] segv at runtime with ifort"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2406.php">Michael Marti: "[OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2450.php">Michael Marti: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<li><strong>Reply:</strong> <a href="2450.php">Michael Marti: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
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
