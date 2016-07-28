<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 21 01:54:18 2006" -->
<!-- isoreceived="20061121065418" -->
<!-- sent="Tue, 21 Nov 2006 06:53:58 +0000 (GMT)" -->
<!-- isosent="20061121065358" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="Re: [OMPI users] myrinet mx and openmpi using solaris, sun compilers" -->
<!-- id="Pine.GSO.4.53.0611210648210.1133_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.32743.1164069357.28407.users_at_open-mpi.org" -->
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
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-21 01:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2198.php">Galen M. Shipman: "Re: [OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<li><strong>Previous message:</strong> <a href="2196.php">Jeff Squyres: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
<li><strong>Maybe in reply to:</strong> <a href="2193.php">Lydia Heck: "[OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2198.php">Galen M. Shipman: "Re: [OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<li><strong>Reply:</strong> <a href="2198.php">Galen M. Shipman: "Re: [OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you very much.
<br>
<p>I tried
<br>
<p>mpirun -np 6 -machinefile ./myh -mca pml cm ./b_eff
<br>
<p>and to amuse you
<br>
<p>&nbsp;mpirun -np 6 -machinefile ./myh -mca btl mx,sm,self ./b_eff
<br>
<p>with myh containing two host names
<br>
<p>and both commands went swimmingly.
<br>
<p>To make absolutely sure, I checked the usage of the myrinet ports
<br>
and on each system 3 myrinet ports were open.
<br>
<p>Lydia
<br>
<p>On Mon, 20 Nov 2006 users-request_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Mon, 20 Nov 2006 20:05:22 +0000 (GMT)
</span><br>
<span class="quotelev1">&gt; From: Lydia Heck &lt;lydia.heck_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] myrinet mx and openmpi using solaris, sun
</span><br>
<span class="quotelev1">&gt; 	compilers
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;Pine.GSO.4.53.0611201939260.3758_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: TEXT/PLAIN; charset=US-ASCII
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have built the myrinet drivers with gcc or the studio 11 compilers from sun.
</span><br>
<span class="quotelev1">&gt; The following problem appears for both installations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tested the myrinet installations using myricoms own test programs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I build open-mpi using the studio11 compilers enabling myrinet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the library paths are correctly set and I can run my test program
</span><br>
<span class="quotelev1">&gt; which is written in C, successfully, if I choose the number of CPUs to be equal
</span><br>
<span class="quotelev1">&gt; the number of nodes, which means one instance of process per node!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each node has 4 CPUs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I now request the number of CPUs for the run to be larger than the
</span><br>
<span class="quotelev1">&gt; number of nodes I get an error message, which clearly indicates
</span><br>
<span class="quotelev1">&gt; that the openmpi cannot communicate over more than one channel
</span><br>
<span class="quotelev1">&gt; on the myrinet card. However I should be able to communicate over
</span><br>
<span class="quotelev1">&gt; 4 channels at least - colleagues of mine are doing that using
</span><br>
<span class="quotelev1">&gt; mpich and the same type of myrinet card.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idead why this should happen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the hostfile looks like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; m2009 slots=4
</span><br>
<span class="quotelev1">&gt; m2010 slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but it will provide the same error if the hosts file is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; m2009
</span><br>
<span class="quotelev1">&gt; m2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info | grep mx
</span><br>
<span class="quotelev1">&gt; 2001(128) &gt; ompi_info | grep mx
</span><br>
<span class="quotelev1">&gt;                  MCA btl: mx (MCA v1.0, API v1.0.1, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: mx (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt; m2009(160) &gt; /opt/mx/bin/mx_endpoint_info
</span><br>
<span class="quotelev1">&gt; 1 Myrinet board installed.
</span><br>
<span class="quotelev1">&gt; The MX driver is configured to support up to 4 endpoints on 4 boards.
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; Board #0:
</span><br>
<span class="quotelev1">&gt; Endpoint         PID             Command                 Info
</span><br>
<span class="quotelev1">&gt; &lt;raw&gt;           15039
</span><br>
<span class="quotelev1">&gt; 0               15544
</span><br>
<span class="quotelev1">&gt; There are currently 1 regular endpoint open
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; m2001(120) &gt; mpirun -np 6 -hostfile hostsfile -mca btl mx,self  b_eff
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.0 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.2 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.4 is unable to reach 0.1.4 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.5 is unable to reach 0.1.4 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.3 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; m2001(121) &gt; mpirun -np 4 -hostfile hostsfile -mca btl mx b_eff
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.0 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.2 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.3 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr E L  Heck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; University of Durham
</span><br>
<span class="quotelev1">&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev1">&gt; Ogden Centre
</span><br>
<span class="quotelev1">&gt; Department of Physics
</span><br>
<span class="quotelev1">&gt; South Road
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev1">&gt; United Kingdom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev1">&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev1">&gt; ___________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Mon, 20 Nov 2006 13:25:55 -0700
</span><br>
<span class="quotelev1">&gt; From: &quot;Galen M. Shipman&quot; &lt;gshipman_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] myrinet mx and openmpi using solaris, sun
</span><br>
<span class="quotelev1">&gt; 	compilers
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;45620F53.806_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;m2001(120) &gt; mpirun -np 6 -hostfile hostsfile -mca btl mx,self  b_eff
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This does appear to be a bug, although you are using the MX BTL. Our
</span><br>
<span class="quotelev1">&gt; higher performance path is the MX MTL. To use this try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 6 -hostfile hostsfile -mca pml cm b_eff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, just for grins, could you try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 6 -hostfile hostsfile -mca btl mx,sm,self b_eff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will use the BTL interface but provides Shared Memory between
</span><br>
<span class="quotelev1">&gt; processes on the same node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;Process 0.1.0 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev2">&gt; &gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt; &gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt; &gt;usable components.
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;Process 0.1.2 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev2">&gt; &gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt; &gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt; &gt;usable components.
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;Process 0.1.4 is unable to reach 0.1.4 for MPI communication.
</span><br>
<span class="quotelev2">&gt; &gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt; &gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt; &gt;usable components.
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev2">&gt; &gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt; &gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt; &gt;usable components.
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;Process 0.1.5 is unable to reach 0.1.4 for MPI communication.
</span><br>
<span class="quotelev2">&gt; &gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt; &gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt; &gt;usable components.
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;Process 0.1.3 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev2">&gt; &gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt; &gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt; &gt;usable components.
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt;fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt; &gt;problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt; &gt;additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt;fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt; &gt;problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt; &gt;additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  PML add procs failed
</span><br>
<span class="quotelev2">&gt; &gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;PML add procs failed
</span><br>
<span class="quotelev2">&gt; &gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt;fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt; &gt;problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt; &gt;additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  PML add procs failed
</span><br>
<span class="quotelev2">&gt; &gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;*** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt;*** before MPI was initialized
</span><br>
<span class="quotelev2">&gt; &gt;*** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt;*** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt;*** before MPI was initialized
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt;fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt; &gt;problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt; &gt;additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  PML add procs failed
</span><br>
<span class="quotelev2">&gt; &gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;*** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt;*** before MPI was initialized
</span><br>
<span class="quotelev2">&gt; &gt;*** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt;*** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt;m2001(121) &gt; mpirun -np 4 -hostfile hostsfile -mca btl mx b_eff
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;Process 0.1.0 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev2">&gt; &gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt; &gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt; &gt;usable components.
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev2">&gt; &gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt; &gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt; &gt;usable components.
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;Process 0.1.2 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev2">&gt; &gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt; &gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt; &gt;usable components.
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;Process 0.1.3 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev2">&gt; &gt;If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt; &gt;forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt; &gt;usable components.
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt;fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt; &gt;problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt; &gt;additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  PML add procs failed
</span><br>
<span class="quotelev2">&gt; &gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt;fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt; &gt;problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt; &gt;additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  PML add procs failed
</span><br>
<span class="quotelev2">&gt; &gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;*** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt;*** before MPI was initialized
</span><br>
<span class="quotelev2">&gt; &gt;*** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt;*** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt;*** before MPI was initialized
</span><br>
<span class="quotelev2">&gt; &gt;*** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt;fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt; &gt;problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt; &gt;additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  PML add procs failed
</span><br>
<span class="quotelev2">&gt; &gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;*** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt;*** before MPI was initialized
</span><br>
<span class="quotelev2">&gt; &gt;*** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt;fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt; &gt;problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt; &gt;additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  PML add procs failed
</span><br>
<span class="quotelev2">&gt; &gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;*** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt;*** before MPI was initialized
</span><br>
<span class="quotelev2">&gt; &gt;*** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;Dr E L  Heck
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;University of Durham
</span><br>
<span class="quotelev2">&gt; &gt;Institute for Computational Cosmology
</span><br>
<span class="quotelev2">&gt; &gt;Ogden Centre
</span><br>
<span class="quotelev2">&gt; &gt;Department of Physics
</span><br>
<span class="quotelev2">&gt; &gt;South Road
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;DURHAM, DH1 3LE
</span><br>
<span class="quotelev2">&gt; &gt;United Kingdom
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev2">&gt; &gt;Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev2">&gt; &gt;___________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Mon, 20 Nov 2006 17:35:35 -0700
</span><br>
<span class="quotelev1">&gt; From: &quot;Maestas, Christopher Daniel&quot; &lt;cdmaest_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Quote on mvapich site
</span><br>
<span class="quotelev1">&gt; To: mvapich_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;347180497203A942A6AA82C85846CBC9034F60B3_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe the quote regarding thunderbird on the following site is not
</span><br>
<span class="quotelev1">&gt; correct:
</span><br>
<span class="quotelev1">&gt; 	<a href="http://nowlab.cse.ohio-state.edu/projects/mpi-iba/">http://nowlab.cse.ohio-state.edu/projects/mpi-iba/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We do have mvapich installed on thunderbird, but I believe the quote is
</span><br>
<span class="quotelev1">&gt; misleading in leading people to believe mvapich was used to obtain our
</span><br>
<span class="quotelev1">&gt; recent top500 number.  However, this is not the case and is documented
</span><br>
<span class="quotelev1">&gt; here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.sandia.gov/news/resources/releases/2006/thunderbird.html">http://www.sandia.gov/news/resources/releases/2006/thunderbird.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Who can we get to correct this on the mvapich site?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -cdm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End of users Digest, Vol 437, Issue 2
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>------------------------------------------
<br>
Dr E L  Heck
<br>
<p>University of Durham
<br>
Institute for Computational Cosmology
<br>
Ogden Centre
<br>
Department of Physics
<br>
South Road
<br>
<p>DURHAM, DH1 3LE
<br>
United Kingdom
<br>
<p>e-mail: lydia.heck_at_[hidden]
<br>
<p>Tel.: + 44 191 - 334 3628
<br>
Fax.: + 44 191 - 334 3645
<br>
___________________________________________
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2198.php">Galen M. Shipman: "Re: [OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<li><strong>Previous message:</strong> <a href="2196.php">Jeff Squyres: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
<li><strong>Maybe in reply to:</strong> <a href="2193.php">Lydia Heck: "[OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2198.php">Galen M. Shipman: "Re: [OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<li><strong>Reply:</strong> <a href="2198.php">Galen M. Shipman: "Re: [OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
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
