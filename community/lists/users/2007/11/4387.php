<?
$subject_val = "Re: [OMPI users] mpirun udapl problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 18:52:12 2007" -->
<!-- isoreceived="20071101225212" -->
<!-- sent="Thu, 1 Nov 2007 17:52:06 -0500" -->
<!-- isosent="20071101225206" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun udapl problem" -->
<!-- id="20071101225206.GB2743_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200710311845.11023.tprins_at_open-mpi.org" -->
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
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-01 18:52:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4388.php">George Bosilca: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Previous message:</strong> <a href="4386.php">Karsten Bolding: "[OMPI users] Slightly OT: mpi job terminates"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4372.php">Tim Prins: "Re: [OMPI users] mpirun udapl problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4388.php">George Bosilca: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Reply:</strong> <a href="4388.php">George Bosilca: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Reply:</strong> <a href="4392.php">Jeff Squyres: "Re: [OMPI users] mpirun udapl problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 31, 2007 at 06:45:10PM -0400, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hi Jon,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to make sure, running 'ompi_info' shows that you have the udapl btl 
</span><br>
<span class="quotelev1">&gt; installed?
</span><br>
<p>Yes, I get the following:
<br>
# ompi_info | grep dapl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: udapl (MCA v1.0, API v1.0, Component v1.2.5)
<br>
<p>If I do not include &quot;self&quot; in the mca, then I get an error saying it
<br>
cannot find the btl component:
<br>
<p># mpirun --n 2 --host vic12-10g,vic20-10g -mca btl udapl /usr/mpi/gcc/openmpi-1.2.2-1/tests/IMB-2.3/IMB-MPI1 pingpong
<br>
--------------------------------------------------------------------------
<br>
No available btl components were found!
<br>
<p>This means that there are no components of this type installed on your
<br>
system or all the components reported that they could not be used.
<br>
<p>This is a fatal error; your MPI process is likely to abort.  Check the
<br>
output of the &quot;ompi_info&quot; command and ensure that components of this
<br>
type are available on your system.  You may also wish to check the
<br>
value of the &quot;component_path&quot; MCA parameter and ensure that it has at
<br>
least one directory that contains valid MCA components.
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that job rank 1 with PID 4335 on node vic20-10g exited on
<br>
signal 15 (Terminated).
<br>
<p># ompi_info --all | grep component_path
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mca: parameter &quot;mca_component_path&quot; (current value: &quot;/usr/mpi/gcc/openmpi-1.2-svn/lib/openmpi:/root/.openmpi/components&quot;)
<br>
<p># ls /usr/mpi/gcc/openmpi-1.2-svn/lib/openmpi | grep dapl
<br>
mca_btl_udapl.la
<br>
mca_btl_udapl.so
<br>
<p>So it looks to me like it should be finding it, but perhaps I am lacking
<br>
something in my configuration.  Any ideas?
<br>
<p>Thanks,
<br>
Jon
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wednesday 31 October 2007 06:11:39 pm Jon Mason wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I am having a bit of a problem getting udapl to work via mpirun (over
</span><br>
<span class="quotelev2">&gt; &gt; open-mpi, obviously).  I am running a basic pingpong test and I get the
</span><br>
<span class="quotelev2">&gt; &gt; following error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # mpirun --n 2 --host vic12-10g,vic20-10g -mca btl udapl,self
</span><br>
<span class="quotelev2">&gt; &gt; /usr/mpi/gcc/open*/tests/IMB*/IMB-MPI1 pingpong
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev2">&gt; &gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt; &gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt; &gt; usable components.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment
</span><br>
<span class="quotelev2">&gt; &gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt; &gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt; &gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev2">&gt; &gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt; &gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt; &gt; usable components.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment
</span><br>
<span class="quotelev2">&gt; &gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt; &gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt; &gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The command is successful if udapl is replaced with tcp or openib.  So I
</span><br>
<span class="quotelev2">&gt; &gt; think my setup is correct.  Also, dapltest successfully completes
</span><br>
<span class="quotelev2">&gt; &gt; without any problems over IB or iWARP.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any thoughts or suggestions would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Jon
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4388.php">George Bosilca: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Previous message:</strong> <a href="4386.php">Karsten Bolding: "[OMPI users] Slightly OT: mpi job terminates"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4372.php">Tim Prins: "Re: [OMPI users] mpirun udapl problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4388.php">George Bosilca: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Reply:</strong> <a href="4388.php">George Bosilca: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Reply:</strong> <a href="4392.php">Jeff Squyres: "Re: [OMPI users] mpirun udapl problem"</a>
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
