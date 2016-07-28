<?
$subject_val = "Re: [OMPI users] Problem with feupdateenv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 03:27:31 2008" -->
<!-- isoreceived="20081210082731" -->
<!-- sent="Wed, 10 Dec 2008 13:57:25 +0530" -->
<!-- isosent="20081210082725" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with feupdateenv" -->
<!-- id="cb60cbc40812100027n4b0e036clfb687a8eee8918ff_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2b5e0c120812070738j4500cd7csaa1acdd38b769e3b_at_mail.gmail.com" -->
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
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 03:27:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7489.php">Gilbert Grosdidier: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>Previous message:</strong> <a href="7487.php">&#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215;: "Re: [OMPI users] collective algorithms"</a>
<li><strong>In reply to:</strong> <a href="7440.php">Brian Dobbins: "Re: [OMPI users] Problem with feupdateenv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7489.php">Gilbert Grosdidier: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>Reply:</strong> <a href="7489.php">Gilbert Grosdidier: "Re: [OMPI users] Problem with feupdateenv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Now its working fine.
<br>
<p>Thanks for the suggestion.
<br>
<p>Some clarifications required:
<br>
<p>I think its possible to mention: communication should happen thru only
<br>
IB, not Ethernet.
<br>
Not getting how to do it.
<br>
<p>How to check whether IB is used or not?
<br>
<p>Regards,
<br>
Sangamesh
<br>
On Sun, Dec 7, 2008 at 9:08 PM, Brian Dobbins &lt;bdobbins_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Sangamesh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I think the problem is that you're loading a different version of OpenMPI
</span><br>
<span class="quotelev1">&gt; at runtime:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [master:17781] [ 1] /usr/lib64/openmpi/libmpi.so.0 [0x34b19544b8]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   .. The path there is to '/usr/lib64/openmpi', which is probably a
</span><br>
<span class="quotelev1">&gt; system-installed GCC version.  You want to use your version in:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/openmpi_intel/1.2.8/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   You probably just need to re-set your LD_LIBRARY_PATH environment variable
</span><br>
<span class="quotelev1">&gt; to reflect this new path, such as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (for bash)
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/opt/openmpi_intel/1.2.8/lib:${LD_LIBRARY_PATH}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ... By doing this, it should find the proper library files (assuming
</span><br>
<span class="quotelev1">&gt; that's the directory they're in - check your instal!).  You may also wish to
</span><br>
<span class="quotelev1">&gt; remove the old version of OpenMPI that came with the system - a yum 'list'
</span><br>
<span class="quotelev1">&gt; command should show you the package, and then just remove it.  The
</span><br>
<span class="quotelev1">&gt; 'feupdateenv' thing is more of a red herring, I think... this happens (I
</span><br>
<span class="quotelev1">&gt; think!) because the system uses a Linux version of the library instead of an
</span><br>
<span class="quotelev1">&gt; Intel one.  You can add the flag '-shared-intel' to your compile flags or
</span><br>
<span class="quotelev1">&gt; command line and that should get rid of that, if it bugs you.  Someone else
</span><br>
<span class="quotelev1">&gt; can, I'm sure, explain in far more detail what the issue there is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Hope that helps.. if not, post the output of 'ldd hellompi' here, as well
</span><br>
<span class="quotelev1">&gt; as an 'ls /opt/openmpi_intel/1.2.8/'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Cheers!
</span><br>
<span class="quotelev1">&gt;   - Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Dec 7, 2008 at 9:50 AM, Sangamesh B &lt;forum.san_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Installed Open MPI 1.2.8 with Intel C++compilers on Cent OS 4.5 based
</span><br>
<span class="quotelev2">&gt;&gt; Rocks 4.3 linux cluster (&amp; Voltaire infiniband). Installation was
</span><br>
<span class="quotelev2">&gt;&gt; smooth.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The following error occurred during compilation:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # mpicc hellompi.c -o hellompi
</span><br>
<span class="quotelev2">&gt;&gt; /opt/intel/cce/10.1.018/lib/libimf.so: warning: warning: feupdateenv
</span><br>
<span class="quotelev2">&gt;&gt; is not implemented and will always fail
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It produced the executable. But during execution it failed with
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  # which mpirun
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi_intel/1.2.8/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; # mpirun -np 2 ./hellompi
</span><br>
<span class="quotelev2">&gt;&gt; ./hellompi: Symbol `ompi_mpi_comm_world' has different size in shared
</span><br>
<span class="quotelev2">&gt;&gt; object, consider re-linking
</span><br>
<span class="quotelev2">&gt;&gt; ./hellompi: Symbol `ompi_mpi_comm_world' has different size in shared
</span><br>
<span class="quotelev2">&gt;&gt; object, consider re-linking
</span><br>
<span class="quotelev2">&gt;&gt; [master:17781] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [master:17781] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [master:17781] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [master:17781] Failing at address: 0x10
</span><br>
<span class="quotelev2">&gt;&gt; [master:17781] [ 0] /lib64/tls/libpthread.so.0 [0x34b150c4f0]
</span><br>
<span class="quotelev2">&gt;&gt; [master:17781] [ 1] /usr/lib64/openmpi/libmpi.so.0 [0x34b19544b8]
</span><br>
<span class="quotelev2">&gt;&gt; [master:17781] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/openmpi/libmpi.so.0(ompi_proc_init+0x14d) [0x34b1954cfd]
</span><br>
<span class="quotelev2">&gt;&gt; [master:17781] [ 3] /usr/lib64/openmpi/libmpi.so.0(ompi_mpi_init+0xba)
</span><br>
<span class="quotelev2">&gt;&gt; [0x34b19567da]
</span><br>
<span class="quotelev2">&gt;&gt; [master:17781] [ 4] /usr/lib64/openmpi/libmpi.so.0(MPI_Init+0x94)
</span><br>
<span class="quotelev2">&gt;&gt; [0x34b1977ab4]
</span><br>
<span class="quotelev2">&gt;&gt; [master:17781] [ 5] ./hellompi(main+0x44) [0x401c0c]
</span><br>
<span class="quotelev2">&gt;&gt; [master:17781] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev2">&gt;&gt; [0x34b0e1c3fb]
</span><br>
<span class="quotelev2">&gt;&gt; [master:17781] [ 7] ./hellompi [0x401b3a]
</span><br>
<span class="quotelev2">&gt;&gt; [master:17781] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [master:17778] [0,0,0]-[0,1,1] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev2">&gt;&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 17781 on node master exited on
</span><br>
<span class="quotelev2">&gt;&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But this is not the case, during non-mpi c code compilation or execution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # icc sample.c -o sample
</span><br>
<span class="quotelev2">&gt;&gt; # ./sample
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Compiler is working
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What might be the reason for this &amp; how it can be resolved?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Sangamesh
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7489.php">Gilbert Grosdidier: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>Previous message:</strong> <a href="7487.php">&#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215;: "Re: [OMPI users] collective algorithms"</a>
<li><strong>In reply to:</strong> <a href="7440.php">Brian Dobbins: "Re: [OMPI users] Problem with feupdateenv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7489.php">Gilbert Grosdidier: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>Reply:</strong> <a href="7489.php">Gilbert Grosdidier: "Re: [OMPI users] Problem with feupdateenv"</a>
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
