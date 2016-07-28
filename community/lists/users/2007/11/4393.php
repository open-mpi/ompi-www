<?
$subject_val = "Re: [OMPI users] mpirun udapl problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 13:03:39 2007" -->
<!-- isoreceived="20071102170339" -->
<!-- sent="Fri, 2 Nov 2007 10:03:12 -0700" -->
<!-- isosent="20071102170312" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun udapl problem" -->
<!-- id="BB8AC749-95C3-43F4-8828-6ABA8229D696_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071102163837.GA6181_at_opengridcomputing.com" -->
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
<strong>Date:</strong> 2007-11-02 13:03:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4394.php">Don Kerr: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Previous message:</strong> <a href="4392.php">Jeff Squyres: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>In reply to:</strong> <a href="4391.php">Jon Mason: "Re: [OMPI users] mpirun udapl problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4392.php">Jeff Squyres: "Re: [OMPI users] mpirun udapl problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George is right that the error message either indicates that the  
<br>
dlopen() of the udapl component is failing (which seems unlikely, or  
<br>
you'd see errors when you run ompi_info -- we use the same exact code  
<br>
to open components in ompi_info as we do in MPI processes), the udapl  
<br>
BTL is electing not to run for some reason, or the udapl btl doesn't  
<br>
think that it can reach its peers (e.g., OMPI finds a pair of MPI  
<br>
processes where no communication route has been defined).
<br>
<p>I *think* your udapl component is loading ok.  I'm *guessing* that  
<br>
it's electing to not run for some reason.  You might want to attach a  
<br>
debugger and look in the udapl BTL init functions:
<br>
<p>mca_btl_udapl_component_open ()
<br>
mca_btl_udapl_component_init ()
<br>
<p>I'm guessing that one of these two functions is failing / returning  
<br>
NULL (meaning &quot;I don't want to run&quot;).
<br>
<p>I have very little experience with udapl on linux; I have only tried  
<br>
the udapl btl a few times (a long time ago).
<br>
<p><p><p><p>On Nov 2, 2007, at 9:38 AM, Jon Mason wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Nov 01, 2007 at 07:41:33PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; There are two things that are reflected in your email.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. You can run Open MPI (or at least ompi_info) on the head node, and
</span><br>
<span class="quotelev2">&gt;&gt; udapl is in the list of BTL. This means the head node has all
</span><br>
<span class="quotelev2">&gt;&gt; libraries required to load udapl, and your LD_LIBRARY_PATH is
</span><br>
<span class="quotelev2">&gt;&gt; correctly configured on the head node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. When running between vic12-10g and vic20-10g udapl cannot or  
</span><br>
<span class="quotelev2">&gt;&gt; refuse
</span><br>
<span class="quotelev2">&gt;&gt; to be loaded. This can means 2 things: some of the shared libraries
</span><br>
<span class="quotelev2">&gt;&gt; are missing or not in the LD_LIBRARY_PATH or once initialized udapl
</span><br>
<span class="quotelev2">&gt;&gt; detect that the connection to the remote node is impossible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The next thing to do is to test that your LD_LIBRARY_PATH is  
</span><br>
<span class="quotelev2">&gt;&gt; correctly
</span><br>
<span class="quotelev2">&gt;&gt; (which means it contain not only the path to the Open MPI libraries
</span><br>
<span class="quotelev2">&gt;&gt; but the path to the udapl libraries) set for non-interactive  
</span><br>
<span class="quotelev2">&gt;&gt; shells on
</span><br>
<span class="quotelev2">&gt;&gt; each node in the cluster. A &quot;ssh vic12-10g printenv | grep
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH&quot; should give you the answer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the help.  Per your request, I get the following:
</span><br>
<span class="quotelev1">&gt; # ssh vic12-10g printenv | grep LD
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/mpi/gcc/openmpi-1.2-svn/lib64:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That directory contains the btl udapl libraries, as you said.
</span><br>
<span class="quotelev1">&gt; # ls -R /usr/mpi/gcc/openmpi-1.2-svn/lib64/ | grep dapl
</span><br>
<span class="quotelev1">&gt; mca_btl_udapl.la
</span><br>
<span class="quotelev1">&gt; mca_btl_udapl.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A search on the system shows libdaplcma and libdat in /usr/lib/.  For
</span><br>
<span class="quotelev1">&gt; giggles, I added /usr/lib to the env, but the programs still fails to
</span><br>
<span class="quotelev1">&gt; run with the same error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe I have the correct rpms installed for the libs.  Here is  
</span><br>
<span class="quotelev1">&gt; what
</span><br>
<span class="quotelev1">&gt; I have on the systems.
</span><br>
<span class="quotelev1">&gt; # rpm -qa | grep dapl
</span><br>
<span class="quotelev1">&gt; dapl-devel-1.2.1-0
</span><br>
<span class="quotelev1">&gt; dapl-1.2.1-0
</span><br>
<span class="quotelev1">&gt; dapl-utils-1.2.1-0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What should I be looking to link against?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;     georg.e
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 1, 2007, at 6:52 PM, Jon Mason wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Oct 31, 2007 at 06:45:10PM -0400, Tim Prins wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Jon,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just to make sure, running 'ompi_info' shows that you have the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; udapl btl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; installed?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I get the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ompi_info | grep dapl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA btl: udapl (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I do not include &quot;self&quot; in the mca, then I get an error saying it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cannot find the btl component:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # mpirun --n 2 --host vic12-10g,vic20-10g -mca btl udapl /usr/mpi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc/openmpi-1.2.2-1/tests/IMB-2.3/IMB-MPI1 pingpong
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No available btl components were found!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This means that there are no components of this type installed on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system or all the components reported that they could not be used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a fatal error; your MPI process is likely to abort.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Check the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output of the &quot;ompi_info&quot; command and ensure that components of this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type are available on your system.  You may also wish to check the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value of the &quot;component_path&quot; MCA parameter and ensure that it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; least one directory that contains valid MCA components.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that job rank 1 with PID 4335 on node vic20-10g
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exited on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ompi_info --all | grep component_path
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA mca: parameter &quot;mca_component_path&quot; (current
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value: &quot;/usr/mpi/gcc/openmpi-1.2-svn/lib/openmpi:/root/.openmpi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; components&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ls /usr/mpi/gcc/openmpi-1.2-svn/lib/openmpi | grep dapl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_btl_udapl.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_btl_udapl.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So it looks to me like it should be finding it, but perhaps I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lacking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something in my configuration.  Any ideas?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jon
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wednesday 31 October 2007 06:11:39 pm Jon Mason wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am having a bit of a problem getting udapl to work via mpirun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (over
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; open-mpi, obviously).  I am running a basic pingpong test and I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; get the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; following error.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # mpirun --n 2 --host vic12-10g,vic20-10g -mca btl udapl,self
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/mpi/gcc/open*/tests/IMB*/IMB-MPI1 pingpong
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; usable components.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; environment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PML add procs failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; usable components.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; environment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PML add procs failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The command is successful if udapl is replaced with tcp or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openib.  So I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; think my setup is correct.  Also, dapltest successfully completes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; without any problems over IB or iWARP.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any thoughts or suggestions would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jon
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4394.php">Don Kerr: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Previous message:</strong> <a href="4392.php">Jeff Squyres: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>In reply to:</strong> <a href="4391.php">Jon Mason: "Re: [OMPI users] mpirun udapl problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4392.php">Jeff Squyres: "Re: [OMPI users] mpirun udapl problem"</a>
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
