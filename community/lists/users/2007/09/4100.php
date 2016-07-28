<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Sep 29 09:57:26 2007" -->
<!-- isoreceived="20070929135726" -->
<!-- sent="Sat, 29 Sep 2007 09:57:12 -0400" -->
<!-- isosent="20070929135712" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self" -->
<!-- id="200709290957.12788.tprins_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="46FDE842.4090403_at_niit.edu.pk" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-29 09:57:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4101.php">Tim Mattox: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>Previous message:</strong> <a href="4099.php">Massimo Cafaro: "Re: [OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="4098.php">Hammad Siddiqi: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4101.php">Tim Mattox: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>Reply:</strong> <a href="4101.php">Tim Mattox: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4106.php">Hammad Siddiqi: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would reccommend trying a few things:
<br>
<p>1. Set some debugging flags and see if that helps. So, I would try something 
<br>
like:
<br>
/opt/SUNWhpc/HPC7.0/bin/mpirun -np 2 -mca btl 
<br>
mx,self  -host &quot;indus1,indus2&quot; -mca btl_base_debug 1000 ./hello
<br>
<p>This will output information as each btl is loaded, and whether or not the 
<br>
load succeeds.
<br>
<p>2. Try running with the mx mtl instead of the btl:
<br>
/opt/SUNWhpc/HPC7.0/bin/mpirun -np 2 -mca mtl mx -host &quot;indus1,indus2&quot; ./hello
<br>
<p>Similarly, for debug output:
<br>
/opt/SUNWhpc/HPC7.0/bin/mpirun -np 2 -mca mtl mx -host &quot;indus1,indus2&quot; -mca 
<br>
mtl_base_debug 1000 ./hello
<br>
<p>Let me know if any of these work.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>On Saturday 29 September 2007 01:53:06 am Hammad Siddiqi wrote:
<br>
<span class="quotelev1">&gt; Hi Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for replying. The following command is working fine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC7.0/bin/mpirun -np 4 -mca btl tcp,sm,self  -machinefile
</span><br>
<span class="quotelev1">&gt; machines ./hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The contents of machines are:
</span><br>
<span class="quotelev1">&gt; indus1
</span><br>
<span class="quotelev1">&gt; indus2
</span><br>
<span class="quotelev1">&gt; indus3
</span><br>
<span class="quotelev1">&gt; indus4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried using np=2 over pairs of machines, but the problem is same.
</span><br>
<span class="quotelev1">&gt; The errors that occur are given below with the command that I am trying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **Test 1**
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC7.0/bin/mpirun -np 2 -mca btl mx,sm,self  -host
</span><br>
<span class="quotelev1">&gt; &quot;indus1,indus2&quot; ./hello
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
<span class="quotelev1">&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
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
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **Test 2*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; */opt/SUNWhpc/HPC7.0/bin/mpirun -np 2 -mca btl mx,sm,self  -host
</span><br>
<span class="quotelev1">&gt; &quot;indus1,indus3&quot; ./hello
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
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
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
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
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *Test 3*
</span><br>
<span class="quotelev1">&gt; */opt/SUNWhpc/HPC7.0/bin/mpirun -np 2 -mca btl mx,sm,self  -host
</span><br>
<span class="quotelev1">&gt; &quot;indus1,indus4&quot; ./hello
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
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
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
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
<span class="quotelev1">&gt; **Test4**
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC7.0/bin/mpirun -np 2 -mca btl mx,sm,self  -host
</span><br>
<span class="quotelev1">&gt; &quot;indus2,indus4&quot; ./hello
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
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
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
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
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Test5*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * /opt/SUNWhpc/HPC7.0/bin/mpirun -np 2 -mca btl mx,sm,self  -host
</span><br>
<span class="quotelev1">&gt; &quot;indus2,indus3&quot; ./hello
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
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
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
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
<span class="quotelev1">&gt; **Test 6*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * /opt/SUNWhpc/HPC7.0/bin/mpirun -np 2 -mca btl mx,sm,self  -host
</span><br>
<span class="quotelev1">&gt; &quot;indus3,indus4&quot; ./hello
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
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
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
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
<span class="quotelev1">&gt; **END OF TESTS**
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is one thing to note that when I run this command including -mca
</span><br>
<span class="quotelev1">&gt; pml cm it works fine :S
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -mca btl mx,sm,self -mca pml cm -machinefile machines  ./hello
</span><br>
<span class="quotelev1">&gt; Hello MPI! Process 4 of 1 on indus2
</span><br>
<span class="quotelev1">&gt; Hello MPI! Process 4 of 2 on indus3
</span><br>
<span class="quotelev1">&gt; Hello MPI! Process 4 of 3 on indus4
</span><br>
<span class="quotelev1">&gt; Hello MPI! Process 4 of 0 on indus1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To my knowledge this command is not using shared memory and is only
</span><br>
<span class="quotelev1">&gt; using myrinet as interconnect.
</span><br>
<span class="quotelev1">&gt; One more thing I cannot start more than 4 processes in this case, The
</span><br>
<span class="quotelev1">&gt; mpirun process hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once again, thanks for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Hammad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Hammad,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It looks to me like none of the btl's could resolve a route between the
</span><br>
<span class="quotelev2">&gt; &gt; node that process rank 0 is on to the other nodes.
</span><br>
<span class="quotelev2">&gt; &gt; I would suggest trying np=2 over a couple pairs of machines to see if
</span><br>
<span class="quotelev2">&gt; &gt; that works and you can truly be sure that only the
</span><br>
<span class="quotelev2">&gt; &gt; first node is having this problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It also might be helpful as a sanity check to use the tcp btl instead of
</span><br>
<span class="quotelev2">&gt; &gt; mx and see if you get more traction with that.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --td
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *From:* Hammad Siddiqi (/hammad.siddiqi_at_[hidden]/)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *Date:* 2007-09-28 07:38:01
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am using Sun HPC Toolkit 7.0 to compile and run my C MPI programs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have tested the myrinet installations using myricoms own test
</span><br>
<span class="quotelev3">&gt; &gt;&gt; programs. The Myricom software stack I am using is MX and the vesrion is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mx2g-1.1.7, mx_mapper is also used.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We have 4 nodes having 8 dual core processors each (Sun Fire v890) and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the operating system is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Solaris 10 (SunOS indus1 5.10 Generic_125100-10 sun4u sparc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; SUNW,Sun-Fire-V890).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The contents of machine file are:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; indus1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; indus2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; indus3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; indus4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The output of *mx_info* on each node is given below
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =====*=
</span><br>
<span class="quotelev3">&gt; &gt;&gt; indus1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *======
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MX Version: 1.1.7rc3cvs1_1_fixes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MX Build: @indus4:/opt/mx2g-1.1.7rc3 Thu May 31 11:36:59 PKT 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2 Myrinet boards installed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The MX driver is configured to support up to 4 instances and 1024 nodes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Instance #0: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         MAC Address: 00:60:dd:47:ad:7c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Serial number: 297218
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             ROUTE COUNT
</span><br>
<span class="quotelev3">&gt; &gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----- -----------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------- ---
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    0) 00:60:dd:47:ad:7c indus1:0 1,1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    2) 00:60:dd:47:ad:68 indus4:0 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    3) 00:60:dd:47:b3:e8 indus4:1 7,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    4) 00:60:dd:47:b3:ab indus2:0 7,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    5) 00:60:dd:47:ad:66 indus3:0 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    6) 00:60:dd:47:ad:76 indus3:1 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    7) 00:60:dd:47:ad:77 jhelum1:0 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    8) 00:60:dd:47:b3:5a ravi2:0 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    9) 00:60:dd:47:ad:5f ravi2:1 1,1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   10) 00:60:dd:47:b3:bf ravi1:0 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ======
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *indus2*
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ======
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MX Version: 1.1.7rc3cvs1_1_fixes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MX Build: @indus2:/opt/mx2g-1.1.7rc3 Thu May 31 11:24:03 PKT 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2 Myrinet boards installed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The MX driver is configured to support up to 4 instances and 1024 nodes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Instance #0: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         MAC Address: 00:60:dd:47:b3:ab
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Serial number: 296636
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                                                 ROUTE
</span><br>
<span class="quotelev3">&gt; &gt;&gt; COUNT
</span><br>
<span class="quotelev3">&gt; &gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    0) 00:60:dd:47:b3:ab indus2:0 1,1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    2) 00:60:dd:47:ad:68 indus4:0 1,1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    3) 00:60:dd:47:b3:e8 indus4:1 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    4) 00:60:dd:47:ad:66 indus3:0 1,1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    5) 00:60:dd:47:ad:76 indus3:1 7,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    6) 00:60:dd:47:ad:77 jhelum1:0 7,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    8) 00:60:dd:47:ad:7c indus1:0 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    9) 00:60:dd:47:b3:5a ravi2:0 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   10) 00:60:dd:47:ad:5f ravi2:1 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   11) 00:60:dd:47:b3:bf ravi1:0 7,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Instance #1: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Status: Running, P0: Link down
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         MAC Address: 00:60:dd:47:b3:c3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Serial number: 296612
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ======
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *indus3*
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ======
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MX Version: 1.1.7rc3cvs1_1_fixes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MX Build: @indus3:/opt/mx2g-1.1.7rc3 Thu May 31 11:29:03 PKT 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2 Myrinet boards installed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The MX driver is configured to support up to 4 instances and 1024 nodes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Instance #0: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         MAC Address: 00:60:dd:47:ad:66
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Serial number: 297240
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                                                 ROUTE
</span><br>
<span class="quotelev3">&gt; &gt;&gt; COUNT
</span><br>
<span class="quotelev3">&gt; &gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    0) 00:60:dd:47:ad:66 indus3:0 1,1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    1) 00:60:dd:47:ad:76 indus3:1 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    2) 00:60:dd:47:ad:68 indus4:0 1,1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    3) 00:60:dd:47:b3:e8 indus4:1 6,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    4) 00:60:dd:47:ad:77 jhelum1:0 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    5) 00:60:dd:47:b3:ab indus2:0 1,1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    7) 00:60:dd:47:ad:7c indus1:0 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    8) 00:60:dd:47:b3:5a ravi2:0 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    9) 00:60:dd:47:ad:5f ravi2:1 7,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   10) 00:60:dd:47:b3:bf ravi1:0 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Instance #1: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         MAC Address: 00:60:dd:47:ad:76
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Serial number: 297224
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                                                 ROUTE
</span><br>
<span class="quotelev3">&gt; &gt;&gt; COUNT
</span><br>
<span class="quotelev3">&gt; &gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    0) 00:60:dd:47:ad:66 indus3:0 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    1) 00:60:dd:47:ad:76 indus3:1 1,1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    2) 00:60:dd:47:ad:68 indus4:0 7,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    3) 00:60:dd:47:b3:e8 indus4:1 1,1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    4) 00:60:dd:47:ad:77 jhelum1:0 1,1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    5) 00:60:dd:47:b3:ab indus2:0 7,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    7) 00:60:dd:47:ad:7c indus1:0 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    8) 00:60:dd:47:b3:5a ravi2:0 6,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    9) 00:60:dd:47:ad:5f ravi2:1 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   10) 00:60:dd:47:b3:bf ravi1:0 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ======
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *indus4*
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ======
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MX Version: 1.1.7rc3cvs1_1_fixes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MX Build: @indus4:/opt/mx2g-1.1.7rc3 Thu May 31 11:36:59 PKT 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2 Myrinet boards installed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The MX driver is configured to support up to 4 instances and 1024 nodes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Instance #0: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         MAC Address: 00:60:dd:47:ad:68
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Serial number: 297238
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                                                 ROUTE
</span><br>
<span class="quotelev3">&gt; &gt;&gt; COUNT
</span><br>
<span class="quotelev3">&gt; &gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    0) 00:60:dd:47:ad:68 indus4:0 1,1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    1) 00:60:dd:47:b3:e8 indus4:1 7,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    2) 00:60:dd:47:ad:77 jhelum1:0 7,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    3) 00:60:dd:47:ad:66 indus3:0 1,1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    4) 00:60:dd:47:ad:76 indus3:1 7,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    5) 00:60:dd:47:b3:ab indus2:0 1,1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    7) 00:60:dd:47:ad:7c indus1:0 7,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    8) 00:60:dd:47:b3:5a ravi2:0 7,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    9) 00:60:dd:47:ad:5f ravi2:1 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   10) 00:60:dd:47:b3:bf ravi1:0 7,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Instance #1: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         MAC Address: 00:60:dd:47:b3:e8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Serial number: 296575
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                                                 ROUTE
</span><br>
<span class="quotelev3">&gt; &gt;&gt; COUNT
</span><br>
<span class="quotelev3">&gt; &gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    0) 00:60:dd:47:ad:68 indus4:0 6,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    1) 00:60:dd:47:b3:e8 indus4:1 1,1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    2) 00:60:dd:47:ad:77 jhelum1:0 1,1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    3) 00:60:dd:47:ad:66 indus3:0 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    4) 00:60:dd:47:ad:76 indus3:1 1,1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    5) 00:60:dd:47:b3:ab indus2:0 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    7) 00:60:dd:47:ad:7c indus1:0 7,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    8) 00:60:dd:47:b3:5a ravi2:0 6,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    9) 00:60:dd:47:ad:5f ravi2:1 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   10) 00:60:dd:47:b3:bf ravi1:0 8,3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The output from *ompi_info* is:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 Open MPI: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Open MPI SVN revision: 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 Open RTE: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Open RTE SVN revision: 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                     OPAL: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        OPAL SVN revision: 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                   Prefix: /opt/SUNWhpc/HPC7.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Configured architecture: sparc-sun-solaris2.10
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Configured by: root
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Configured on: Fri Mar 30 12:49:36 EDT 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           Configure host: burpen-on10-0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 Built by: root
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 Built on: Fri Mar 30 13:10:46 EDT 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               Built host: burpen-on10-0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Fortran90 bindings size: trivial
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               C compiler: cc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      C compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/cc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             C++ compiler: CC
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    C++ compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/CC
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fortran77 compiler: f77
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Fortran77 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f77
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fortran90 compiler: f95
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Fortran90 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f95
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           C++ exceptions: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           Thread support: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  mpirun default --prefix: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            MCA backtrace: printstack (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            MCA paffinity: solaris (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA timer: solaris (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA mpool: udapl (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: mx (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: udapl (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA mtl: mx (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.2.1) MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.1) MCA rds:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; resfile (MCA v1.0, API v1.3, Component v1.2.1) MCA rmaps: round_robin
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.2.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When I try to run a simple hello world program by issuing following
</span><br>
<span class="quotelev3">&gt; &gt;&gt; command:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *mpirun -np 4 -mca btl mx,sm,self -machinefile machines ./hello
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *The following error appears:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; usable components.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; environment
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; usable components.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; environment
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0.1.3 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; usable components.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; environment
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0.1.2 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; usable components.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; environment
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-*** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The output from more */var/run/fms/fma.log*
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sat Sep 22 10:47:50 2007 NIC 0: M3F-PCIXF-2 s/n=297218 1 ports, speed=2G
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sat Sep 22 10:47:50 2007 mac = 00:60:dd:47:ad:7c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sat Sep 22 10:47:50 2007 NIC 1: M3F-PCIXF-2 s/n=297248 1 ports, speed=2G
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sat Sep 22 10:47:50 2007 mac = 00:60:dd:47:ad:5e
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sat Sep 22 10:47:50 2007 fms-1.2.1 fma starting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sat Sep 22 10:47:50 2007 Mapper was 00:00:00:00:00:00, l=0, is now
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 00:60:dd:47:ad:7c, l=1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sat Sep 22 10:47:50 2007 Mapping fabric...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sat Sep 22 10:47:54 2007 Mapper was 00:60:dd:47:ad:7c, l=1, is now
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 00:60:dd:47:b3:e8, l=1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sat Sep 22 10:47:54 2007 Cancelling mapping
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sat Sep 22 10:47:59 2007 5 hosts, 8 nics, 6 xbars, 40 links
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sat Sep 22 10:47:59 2007 map version is 1987557551
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sat Sep 22 10:47:59 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sat Sep 22 10:47:59 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sat Sep 22 10:47:59 2007 map seems OK
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sat Sep 22 10:47:59 2007 Routing took 0 seconds
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mon Sep 24 14:26:46 2007 Requesting remap from indus4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (00:60:dd:47:b3:e8): scouted by 00:60:dd:47:b3:5a, lev=1, pkt_type=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mon Sep 24 14:26:51 2007 6 hosts, 10 nics, 6 xbars, 42 links
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mon Sep 24 14:26:51 2007 map version is 1987557552
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mon Sep 24 14:26:51 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mon Sep 24 14:26:51 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mon Sep 24 14:26:51 2007 map seems OK
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mon Sep 24 14:26:51 2007 Routing took 0 seconds
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mon Sep 24 14:35:17 2007 Requesting remap from indus4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (00:60:dd:47:b3:e8): scouted by 00:60:dd:47:b3:bf, lev=1, pkt_type=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mon Sep 24 14:35:19 2007 7 hosts, 11 nics, 6 xbars, 43 links
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mon Sep 24 14:35:19 2007 map version is 1987557553
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mon Sep 24 14:35:19 2007 Found NIC 0 at index 5!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mon Sep 24 14:35:19 2007 Found NIC 1 at index 4!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mon Sep 24 14:35:19 2007 map seems OK
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mon Sep 24 14:35:19 2007 Routing took 0 seconds
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:47:52 2007 6 hosts, 9 nics, 6 xbars, 41 links
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:47:52 2007 map version is 1987557554
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:47:52 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:47:52 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:47:52 2007 map seems OK
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:47:52 2007 Routing took 0 seconds
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:52:02 2007 Requesting remap from indus4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (00:60:dd:47:b3:e8): empty port x0p15 is no longer empty
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:52:07 2007 6 hosts, 10 nics, 6 xbars, 42 links
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:52:07 2007 map version is 1987557555
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:52:07 2007 Found NIC 0 at index 4!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:52:07 2007 Found NIC 1 at index 3!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:52:07 2007 map seems OK
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:52:07 2007 Routing took 0 seconds
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:52:23 2007 7 hosts, 11 nics, 6 xbars, 43 links
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:52:23 2007 map version is 1987557556
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:52:23 2007 Found NIC 0 at index 6!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:52:23 2007 Found NIC 1 at index 5!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:52:23 2007 map seems OK
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tue Sep 25 21:52:23 2007 Routing took 0 seconds
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wed Sep 26 05:07:01 2007 Requesting remap from indus4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (00:60:dd:47:b3:e8): verify failed x1p2, nic 0, port 0 route=-9 4 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; reply=-10 -4 9 , remote=ravi2 NIC
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  1, p0 mac=00:60:dd:47:ad:5f
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wed Sep 26 05:07:06 2007 6 hosts, 9 nics, 6 xbars, 41 links
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wed Sep 26 05:07:06 2007 map version is 1987557557
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wed Sep 26 05:07:06 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wed Sep 26 05:07:06 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wed Sep 26 05:07:06 2007 map seems OK
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wed Sep 26 05:07:06 2007 Routing took 0 seconds
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wed Sep 26 05:11:19 2007 7 hosts, 11 nics, 6 xbars, 43 links
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wed Sep 26 05:11:19 2007 map version is 1987557558
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wed Sep 26 05:11:19 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wed Sep 26 05:11:19 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wed Sep 26 05:11:19 2007 map seems OK
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wed Sep 26 05:11:19 2007 Routing took 0 seconds
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thu Sep 27 11:45:37 2007 6 hosts, 9 nics, 6 xbars, 41 links
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thu Sep 27 11:45:37 2007 map version is 1987557559
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thu Sep 27 11:45:37 2007 Found NIC 0 at index 6!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thu Sep 27 11:45:37 2007 Found NIC 1 at index 5!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thu Sep 27 11:45:37 2007 map seems OK
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thu Sep 27 11:45:37 2007 Routing took 0 seconds
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thu Sep 27 11:51:02 2007 7 hosts, 11 nics, 6 xbars, 43 links
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thu Sep 27 11:51:02 2007 map version is 1987557560
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thu Sep 27 11:51:02 2007 Found NIC 0 at index 6!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thu Sep 27 11:51:02 2007 Found NIC 1 at index 5!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thu Sep 27 11:51:02 2007 map seems OK
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thu Sep 27 11:51:02 2007 Routing took 0 seconds
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fri Sep 28 13:27:10 2007 Requesting remap from indus4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (00:60:dd:47:b3:e8): verify failed x5p0, nic 1, port 0 route=-8 15 6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; reply=-6 -15 8 , remote=ravi1 NIC
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  0, p0 mac=00:60:dd:47:b3:bf
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fri Sep 28 13:27:24 2007 6 hosts, 8 nics, 6 xbars, 40 links
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fri Sep 28 13:27:24 2007 map version is 1987557561
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fri Sep 28 13:27:24 2007 Found NIC 0 at index 5!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fri Sep 28 13:27:24 2007 Cannot find NIC 1 (00:60:dd:47:ad:5e) in map!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fri Sep 28 13:27:24 2007 map seems OK
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fri Sep 28 13:27:24 2007 Routing took 0 seconds
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fri Sep 28 13:27:44 2007 7 hosts, 10 nics, 6 xbars, 42 links
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fri Sep 28 13:27:44 2007 map version is 1987557562
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fri Sep 28 13:27:44 2007 Found NIC 0 at index 7!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fri Sep 28 13:27:44 2007 Cannot find NIC 1 (00:60:dd:47:ad:5e) in map!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fri Sep 28 13:27:44 2007 map seems OK
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fri Sep 28 13:27:44 2007 Routing took 0 seconds
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Do you have any suggestion or comments why this error appear and whats
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the solution to this problem. I have checked community mailing list for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this problem and found few topics related to this, but could find any
</span><br>
<span class="quotelev3">&gt; &gt;&gt; solution. Any suggestion or comments will be highly appreciated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The code that i m trying to run is given as follows:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   int rank, size, tag, rc, i;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   MPI_Status status;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   char message[20];
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   rc = MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   rc = MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   rc = MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   tag = 100;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   if(rank == 0) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     strcpy(message, &quot;Hello, world&quot;);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     for (i=1; i&lt;size; i++)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       rc = MPI_Send(message, 13, MPI_CHAR, i, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   else
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     rc = MPI_Recv(message, 13, MPI_CHAR, 0, tag, MPI_COMM_WORLD,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &amp;status);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   printf( &quot;node %d : %.13s\n&quot;, rank,message);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   rc = MPI_Finalize();
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   return 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Looking forward.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hammad Siddiqi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Center for High Performance Scientific Computing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NUST Institute of Information Technology,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; National University of Sciences and Technology,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rawalpindi, Pakistan.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4101.php">Tim Mattox: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>Previous message:</strong> <a href="4099.php">Massimo Cafaro: "Re: [OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="4098.php">Hammad Siddiqi: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4101.php">Tim Mattox: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>Reply:</strong> <a href="4101.php">Tim Mattox: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4106.php">Hammad Siddiqi: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
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
