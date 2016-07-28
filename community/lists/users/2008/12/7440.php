<?
$subject_val = "Re: [OMPI users] Problem with feupdateenv";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  7 10:39:04 2008" -->
<!-- isoreceived="20081207153904" -->
<!-- sent="Sun, 7 Dec 2008 10:38:59 -0500" -->
<!-- isosent="20081207153859" -->
<!-- name="Brian Dobbins" -->
<!-- email="bdobbins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with feupdateenv" -->
<!-- id="2b5e0c120812070738j4500cd7csaa1acdd38b769e3b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="cb60cbc40812070650u2f2cb839ree50a086be176cde_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with feupdateenv<br>
<strong>From:</strong> Brian Dobbins (<em>bdobbins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-07 10:38:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7441.php">Brock Palen: "[OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>Previous message:</strong> <a href="7439.php">Sangamesh B: "[OMPI users] Problem with feupdateenv"</a>
<li><strong>In reply to:</strong> <a href="7439.php">Sangamesh B: "[OMPI users] Problem with feupdateenv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7488.php">Sangamesh B: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>Reply:</strong> <a href="7488.php">Sangamesh B: "Re: [OMPI users] Problem with feupdateenv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sangamesh,
<br>
<p>&nbsp;&nbsp;I think the problem is that you're loading a different version of OpenMPI
<br>
at runtime:
<br>
<p>*[master:17781] [ 1] /usr/lib64/openmpi/libmpi.so.0 [0x34b19544b8]*
<br>
<p>&nbsp;&nbsp;.. The path there is to '/usr/lib64/openmpi', which is probably a
<br>
system-installed GCC version.  You want to use your version in:
<br>
<p>* /opt/openmpi_intel/1.2.8/*
<br>
<p>&nbsp;&nbsp;You probably just need to re-set your LD_LIBRARY_PATH environment variable
<br>
to reflect this new path, such as:
<br>
*
<br>
(for bash)
<br>
export LD_LIBRARY_PATH=/opt/openmpi_intel/1.2.8/lib:${LD_LIBRARY_PATH}*
<br>
<p>&nbsp;&nbsp;... By doing this, it should find the proper library files (assuming
<br>
that's the directory they're in - check your instal!).  You may also wish to
<br>
remove the old version of OpenMPI that came with the system - a yum 'list'
<br>
command should show you the package, and then just remove it.  The
<br>
'feupdateenv' thing is more of a red herring, I think... this happens (I
<br>
think!) because the system uses a Linux version of the library instead of an
<br>
Intel one.  You can add the flag '-shared-intel' to your compile flags or
<br>
command line and that should get rid of that, if it bugs you.  Someone else
<br>
can, I'm sure, explain in far more detail what the issue there is.
<br>
<p>&nbsp;&nbsp;Hope that helps.. if not, post the output of 'ldd hellompi' here, as well
<br>
as an 'ls /opt/openmpi_intel/1.2.8/'
<br>
<p>&nbsp;&nbsp;Cheers!
<br>
&nbsp;&nbsp;- Brian
<br>
<p><p><p>On Sun, Dec 7, 2008 at 9:50 AM, Sangamesh B &lt;forum.san_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Installed Open MPI 1.2.8 with Intel C++compilers on Cent OS 4.5 based
</span><br>
<span class="quotelev1">&gt; Rocks 4.3 linux cluster (&amp; Voltaire infiniband). Installation was
</span><br>
<span class="quotelev1">&gt; smooth.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following error occurred during compilation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpicc hellompi.c -o hellompi
</span><br>
<span class="quotelev1">&gt; /opt/intel/cce/10.1.018/lib/libimf.so: warning: warning: feupdateenv
</span><br>
<span class="quotelev1">&gt; is not implemented and will always fail
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It produced the executable. But during execution it failed with
</span><br>
<span class="quotelev1">&gt; Segmentation fault:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # which mpirun
</span><br>
<span class="quotelev1">&gt; /opt/openmpi_intel/1.2.8/bin/mpirun
</span><br>
<span class="quotelev1">&gt; # mpirun -np 2 ./hellompi
</span><br>
<span class="quotelev1">&gt; ./hellompi: Symbol `ompi_mpi_comm_world' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; ./hellompi: Symbol `ompi_mpi_comm_world' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; [master:17781] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [master:17781] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [master:17781] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [master:17781] Failing at address: 0x10
</span><br>
<span class="quotelev1">&gt; [master:17781] [ 0] /lib64/tls/libpthread.so.0 [0x34b150c4f0]
</span><br>
<span class="quotelev1">&gt; [master:17781] [ 1] /usr/lib64/openmpi/libmpi.so.0 [0x34b19544b8]
</span><br>
<span class="quotelev1">&gt; [master:17781] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/libmpi.so.0(ompi_proc_init+0x14d) [0x34b1954cfd]
</span><br>
<span class="quotelev1">&gt; [master:17781] [ 3] /usr/lib64/openmpi/libmpi.so.0(ompi_mpi_init+0xba)
</span><br>
<span class="quotelev1">&gt; [0x34b19567da]
</span><br>
<span class="quotelev1">&gt; [master:17781] [ 4] /usr/lib64/openmpi/libmpi.so.0(MPI_Init+0x94)
</span><br>
<span class="quotelev1">&gt; [0x34b1977ab4]
</span><br>
<span class="quotelev1">&gt; [master:17781] [ 5] ./hellompi(main+0x44) [0x401c0c]
</span><br>
<span class="quotelev1">&gt; [master:17781] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev1">&gt; [0x34b0e1c3fb]
</span><br>
<span class="quotelev1">&gt; [master:17781] [ 7] ./hellompi [0x401b3a]
</span><br>
<span class="quotelev1">&gt; [master:17781] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [master:17778] [0,0,0]-[0,1,1] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev1">&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 17781 on node master exited on
</span><br>
<span class="quotelev1">&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But this is not the case, during non-mpi c code compilation or execution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # icc sample.c -o sample
</span><br>
<span class="quotelev1">&gt; # ./sample
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiler is working
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What might be the reason for this &amp; how it can be resolved?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sangamesh
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7440/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7441.php">Brock Palen: "[OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>Previous message:</strong> <a href="7439.php">Sangamesh B: "[OMPI users] Problem with feupdateenv"</a>
<li><strong>In reply to:</strong> <a href="7439.php">Sangamesh B: "[OMPI users] Problem with feupdateenv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7488.php">Sangamesh B: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>Reply:</strong> <a href="7488.php">Sangamesh B: "Re: [OMPI users] Problem with feupdateenv"</a>
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
