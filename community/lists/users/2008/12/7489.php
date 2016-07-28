<?
$subject_val = "Re: [OMPI users] Problem with feupdateenv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 04:17:07 2008" -->
<!-- isoreceived="20081210091707" -->
<!-- sent="Wed, 10 Dec 2008 10:17:01 +0100" -->
<!-- isosent="20081210091701" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="grodid_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with feupdateenv" -->
<!-- id="Pine.LNX.4.58.0812101016500.1935_at_lxplus221.cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="cb60cbc40812100027n4b0e036clfb687a8eee8918ff_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilbert Grosdidier (<em>grodid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 04:17:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7490.php">Gabriele Fatigati: "[OMPI users] Export enviroment variable"</a>
<li><strong>Previous message:</strong> <a href="7488.php">Sangamesh B: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>In reply to:</strong> <a href="7488.php">Sangamesh B: "Re: [OMPI users] Problem with feupdateenv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7491.php">Jeff Squyres: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>Reply:</strong> <a href="7491.php">Jeff Squyres: "Re: [OMPI users] Problem with feupdateenv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;I suggest you use the '--mca btl sm,openib,self' option when launching your job
<br>
with the mpirun command. Or '--mca btl openib,self'  if shared-memory is not    
<br>
involved.
<br>
&nbsp;
<br>
&nbsp;I think there is no cheap way to check this other than switching on several
<br>
'btl' related mca debug flags. Please refer to the list provided thru the
<br>
ompi_info list (or the FAQs).
<br>
&nbsp;
<br>
&nbsp;Regards,   Gilbert.
<br>
&nbsp;
<br>
On Wed, 10 Dec 2008, Sangamesh B wrote:
<br>
<p><span class="quotelev1">&gt; Now its working fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the suggestion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some clarifications required:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think its possible to mention: communication should happen thru only
</span><br>
<span class="quotelev1">&gt; IB, not Ethernet.
</span><br>
<span class="quotelev1">&gt; Not getting how to do it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How to check whether IB is used or not?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Sangamesh
</span><br>
<span class="quotelev1">&gt; On Sun, Dec 7, 2008 at 9:08 PM, Brian Dobbins &lt;bdobbins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Sangamesh,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   I think the problem is that you're loading a different version of OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt; at runtime:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [master:17781] [ 1] /usr/lib64/openmpi/libmpi.so.0 [0x34b19544b8]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   .. The path there is to '/usr/lib64/openmpi', which is probably a
</span><br>
<span class="quotelev2">&gt; &gt; system-installed GCC version.  You want to use your version in:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  /opt/openmpi_intel/1.2.8/
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   You probably just need to re-set your LD_LIBRARY_PATH environment variable
</span><br>
<span class="quotelev2">&gt; &gt; to reflect this new path, such as:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (for bash)
</span><br>
<span class="quotelev2">&gt; &gt; export LD_LIBRARY_PATH=/opt/openmpi_intel/1.2.8/lib:${LD_LIBRARY_PATH}
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   ... By doing this, it should find the proper library files (assuming
</span><br>
<span class="quotelev2">&gt; &gt; that's the directory they're in - check your instal!).  You may also wish to
</span><br>
<span class="quotelev2">&gt; &gt; remove the old version of OpenMPI that came with the system - a yum 'list'
</span><br>
<span class="quotelev2">&gt; &gt; command should show you the package, and then just remove it.  The
</span><br>
<span class="quotelev2">&gt; &gt; 'feupdateenv' thing is more of a red herring, I think... this happens (I
</span><br>
<span class="quotelev2">&gt; &gt; think!) because the system uses a Linux version of the library instead of an
</span><br>
<span class="quotelev2">&gt; &gt; Intel one.  You can add the flag '-shared-intel' to your compile flags or
</span><br>
<span class="quotelev2">&gt; &gt; command line and that should get rid of that, if it bugs you.  Someone else
</span><br>
<span class="quotelev2">&gt; &gt; can, I'm sure, explain in far more detail what the issue there is.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Hope that helps.. if not, post the output of 'ldd hellompi' here, as well
</span><br>
<span class="quotelev2">&gt; &gt; as an 'ls /opt/openmpi_intel/1.2.8/'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Cheers!
</span><br>
<span class="quotelev2">&gt; &gt;   - Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sun, Dec 7, 2008 at 9:50 AM, Sangamesh B &lt;forum.san_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Installed Open MPI 1.2.8 with Intel C++compilers on Cent OS 4.5 based
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rocks 4.3 linux cluster (&amp; Voltaire infiniband). Installation was
</span><br>
<span class="quotelev3">&gt; &gt;&gt; smooth.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The following error occurred during compilation:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # mpicc hellompi.c -o hellompi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /opt/intel/cce/10.1.018/lib/libimf.so: warning: warning: feupdateenv
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is not implemented and will always fail
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It produced the executable. But during execution it failed with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Segmentation fault:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  # which mpirun
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /opt/openmpi_intel/1.2.8/bin/mpirun
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # mpirun -np 2 ./hellompi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./hellompi: Symbol `ompi_mpi_comm_world' has different size in shared
</span><br>
<span class="quotelev3">&gt; &gt;&gt; object, consider re-linking
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./hellompi: Symbol `ompi_mpi_comm_world' has different size in shared
</span><br>
<span class="quotelev3">&gt; &gt;&gt; object, consider re-linking
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [master:17781] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [master:17781] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [master:17781] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [master:17781] Failing at address: 0x10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [master:17781] [ 0] /lib64/tls/libpthread.so.0 [0x34b150c4f0]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [master:17781] [ 1] /usr/lib64/openmpi/libmpi.so.0 [0x34b19544b8]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [master:17781] [ 2]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /usr/lib64/openmpi/libmpi.so.0(ompi_proc_init+0x14d) [0x34b1954cfd]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [master:17781] [ 3] /usr/lib64/openmpi/libmpi.so.0(ompi_mpi_init+0xba)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [0x34b19567da]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [master:17781] [ 4] /usr/lib64/openmpi/libmpi.so.0(MPI_Init+0x94)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [0x34b1977ab4]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [master:17781] [ 5] ./hellompi(main+0x44) [0x401c0c]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [master:17781] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [0x34b0e1c3fb]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [master:17781] [ 7] ./hellompi [0x401b3a]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [master:17781] *** End of error message ***
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [master:17778] [0,0,0]-[0,1,1] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun noticed that job rank 0 with PID 17781 on node master exited on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But this is not the case, during non-mpi c code compilation or execution.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # icc sample.c -o sample
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # ./sample
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Compiler is working
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What might be the reason for this &amp; how it can be resolved?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sangamesh
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt;
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
<p><pre>
-- 
*---------------------------------------------------------------------*
  Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]
  LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
  Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
  B.P. 34, F-91898 Orsay Cedex (FRANCE)
 ---------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7490.php">Gabriele Fatigati: "[OMPI users] Export enviroment variable"</a>
<li><strong>Previous message:</strong> <a href="7488.php">Sangamesh B: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>In reply to:</strong> <a href="7488.php">Sangamesh B: "Re: [OMPI users] Problem with feupdateenv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7491.php">Jeff Squyres: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>Reply:</strong> <a href="7491.php">Jeff Squyres: "Re: [OMPI users] Problem with feupdateenv"</a>
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
