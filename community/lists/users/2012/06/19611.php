<?
$subject_val = "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 10:31:04 2012" -->
<!-- isoreceived="20120618143104" -->
<!-- sent="Mon, 18 Jun 2012 10:30:59 -0400" -->
<!-- isosent="20120618143059" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NVCC mpi.h: error: attribute &amp;quot;__deprecated__&amp;quot; does not take arguments" -->
<!-- id="51A9BE28-F6CF-4955-B569-F8288EF703B3_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAGR4S9Fw64R0QeXv-Oeq4XT248NLJgj6oybU+a9NCDCSbe-E2g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-18 10:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19612.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Previous message:</strong> <a href="19610.php">Dmitry N. Mikushin: "[OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>In reply to:</strong> <a href="19610.php">Dmitry N. Mikushin: "[OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19612.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Reply:</strong> <a href="19612.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you configure and build Open MPI with nvcc?
<br>
<p>I ask because Open MPI should auto-detect whether the underlying compiler can handle a message argument with the deprecated directive or not.
<br>
<p>You should be able to build Open MPI with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./configure CC=nvcc ....etc.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make clean all install
<br>
<p>If you're building Open MPI with one compiler and then trying to compile with another (like the command line in your mail implies), all bets are off because Open MPI has tuned itself to the compiler that it was configured with.
<br>
<p><p><p><p>On Jun 18, 2012, at 10:20 AM, Dmitry N. Mikushin wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With openmpi svn trunk as of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Repository Root: <a href="http://svn.open-mpi.org/svn/ompi">http://svn.open-mpi.org/svn/ompi</a>
</span><br>
<span class="quotelev1">&gt; Repository UUID: 63e3feb5-37d5-0310-a306-e8a459e722fe
</span><br>
<span class="quotelev1">&gt; Revision: 26616
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we are observing the following strange issue (see below). How do you think, is it a problem of NVCC or OpenMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; - Dima.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dmikushin_at_tesla-apc mpitest]$ cat mpitest.cu
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; __global__ void kernel() { }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dmikushin_at_tesla-apc mpitest]$ nvcc -I/opt/openmpi-trunk/include -c mpitest.cu
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(365): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(374): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(382): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(724): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(730): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(736): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(790): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(791): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1049): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1070): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1072): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1074): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1145): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1149): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1151): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1345): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1347): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1484): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1507): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1510): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1515): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1525): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1527): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1589): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1610): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1612): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1614): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1685): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1689): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1691): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1886): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(1888): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(2024): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(2047): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(2050): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(2055): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(2065): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/mpi.h(2067): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/openmpi/ompi/mpi/cxx/comm.h(102): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/openmpi/ompi/mpi/cxx/win.h(90): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-trunk/include/openmpi/ompi/mpi/cxx/file.h(298): error: attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 41 errors detected in the compilation of &quot;/tmp/tmpxft_00004a17_00000000-4_mpitest.cpp1.ii&quot;.
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19612.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Previous message:</strong> <a href="19610.php">Dmitry N. Mikushin: "[OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>In reply to:</strong> <a href="19610.php">Dmitry N. Mikushin: "[OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19612.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Reply:</strong> <a href="19612.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
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
