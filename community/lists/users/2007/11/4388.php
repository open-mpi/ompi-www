<?
$subject_val = "Re: [OMPI users] mpirun udapl problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 19:41:42 2007" -->
<!-- isoreceived="20071101234142" -->
<!-- sent="Thu, 1 Nov 2007 19:41:33 -0400" -->
<!-- isosent="20071101234133" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun udapl problem" -->
<!-- id="FAF2C80E-9E6B-4FC3-9FD3-0A66C3A8A203_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071101225206.GB2743_at_opengridcomputing.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-01 19:41:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4389.php">Oleg Morajko: "[OMPI users] MPI_Request and attributes"</a>
<li><strong>Previous message:</strong> <a href="4387.php">Jon Mason: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>In reply to:</strong> <a href="4387.php">Jon Mason: "Re: [OMPI users] mpirun udapl problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4391.php">Jon Mason: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Reply:</strong> <a href="4391.php">Jon Mason: "Re: [OMPI users] mpirun udapl problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are two things that are reflected in your email.
<br>
<p>1. You can run Open MPI (or at least ompi_info) on the head node, and  
<br>
udapl is in the list of BTL. This means the head node has all  
<br>
libraries required to load udapl, and your LD_LIBRARY_PATH is  
<br>
correctly configured on the head node.
<br>
<p>2. When running between vic12-10g and vic20-10g udapl cannot or refuse  
<br>
to be loaded. This can means 2 things: some of the shared libraries  
<br>
are missing or not in the LD_LIBRARY_PATH or once initialized udapl  
<br>
detect that the connection to the remote node is impossible.
<br>
<p>The next thing to do is to test that your LD_LIBRARY_PATH is correctly  
<br>
(which means it contain not only the path to the Open MPI libraries  
<br>
but the path to the udapl libraries) set for non-interactive shells on  
<br>
each node in the cluster. A &quot;ssh vic12-10g printenv | grep  
<br>
LD_LIBRARY_PATH&quot; should give you the answer.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;georg.e
<br>
<p>On Nov 1, 2007, at 6:52 PM, Jon Mason wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Oct 31, 2007 at 06:45:10PM -0400, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jon,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just to make sure, running 'ompi_info' shows that you have the  
</span><br>
<span class="quotelev2">&gt;&gt; udapl btl
</span><br>
<span class="quotelev2">&gt;&gt; installed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I get the following:
</span><br>
<span class="quotelev1">&gt; # ompi_info | grep dapl
</span><br>
<span class="quotelev1">&gt;                 MCA btl: udapl (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I do not include &quot;self&quot; in the mca, then I get an error saying it
</span><br>
<span class="quotelev1">&gt; cannot find the btl component:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpirun --n 2 --host vic12-10g,vic20-10g -mca btl udapl /usr/mpi/ 
</span><br>
<span class="quotelev1">&gt; gcc/openmpi-1.2.2-1/tests/IMB-2.3/IMB-MPI1 pingpong
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; No available btl components were found!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This means that there are no components of this type installed on your
</span><br>
<span class="quotelev1">&gt; system or all the components reported that they could not be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a fatal error; your MPI process is likely to abort.  Check the
</span><br>
<span class="quotelev1">&gt; output of the &quot;ompi_info&quot; command and ensure that components of this
</span><br>
<span class="quotelev1">&gt; type are available on your system.  You may also wish to check the
</span><br>
<span class="quotelev1">&gt; value of the &quot;component_path&quot; MCA parameter and ensure that it has at
</span><br>
<span class="quotelev1">&gt; least one directory that contains valid MCA components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 1 with PID 4335 on node vic20-10g  
</span><br>
<span class="quotelev1">&gt; exited on
</span><br>
<span class="quotelev1">&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ompi_info --all | grep component_path
</span><br>
<span class="quotelev1">&gt;                 MCA mca: parameter &quot;mca_component_path&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;/usr/mpi/gcc/openmpi-1.2-svn/lib/openmpi:/root/.openmpi/ 
</span><br>
<span class="quotelev1">&gt; components&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ls /usr/mpi/gcc/openmpi-1.2-svn/lib/openmpi | grep dapl
</span><br>
<span class="quotelev1">&gt; mca_btl_udapl.la
</span><br>
<span class="quotelev1">&gt; mca_btl_udapl.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it looks to me like it should be finding it, but perhaps I am  
</span><br>
<span class="quotelev1">&gt; lacking
</span><br>
<span class="quotelev1">&gt; something in my configuration.  Any ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday 31 October 2007 06:11:39 pm Jon Mason wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am having a bit of a problem getting udapl to work via mpirun  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (over
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open-mpi, obviously).  I am running a basic pingpong test and I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # mpirun --n 2 --host vic12-10g,vic20-10g -mca btl udapl,self
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/mpi/gcc/open*/tests/IMB*/IMB-MPI1 pingpong
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usable components.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  PML add procs failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usable components.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  PML add procs failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The command is successful if udapl is replaced with tcp or  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openib.  So I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think my setup is correct.  Also, dapltest successfully completes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without any problems over IB or iWARP.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any thoughts or suggestions would be greatly appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jon
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4388/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4389.php">Oleg Morajko: "[OMPI users] MPI_Request and attributes"</a>
<li><strong>Previous message:</strong> <a href="4387.php">Jon Mason: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>In reply to:</strong> <a href="4387.php">Jon Mason: "Re: [OMPI users] mpirun udapl problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4391.php">Jon Mason: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Reply:</strong> <a href="4391.php">Jon Mason: "Re: [OMPI users] mpirun udapl problem"</a>
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
