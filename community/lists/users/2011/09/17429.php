<?
$subject_val = "Re: [OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 24 09:14:57 2011" -->
<!-- isoreceived="20110924131457" -->
<!-- sent="Sat, 24 Sep 2011 09:14:52 -0400" -->
<!-- isosent="20110924131452" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)" -->
<!-- id="D8119A47-BE29-45A2-A5C7-0FEB28917EA4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E7C5692.7050606_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-24 09:14:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17430.php">Jeff Squyres: "Re: [OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<li><strong>Previous message:</strong> <a href="17428.php">Jeff Squyres: "Re: [OMPI users] on cluster job slowdown near end"</a>
<li><strong>In reply to:</strong> <a href="17404.php">Paul Kapinos: "[OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As a pure guess, it might actually be this one:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;- Fix to detect and avoid overlapping memcpy().  Thanks to
<br>
&nbsp;&nbsp;Francis Pellegrini for identifying the issue.
<br>
<p>We're actually very close to releasing 1.4.4 -- using the latest RC should be pretty safe.
<br>
<p><p>On Sep 23, 2011, at 5:51 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Hi Open MPI volks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we see some quite strange effects with our installations of Open MPI 1.4.3 with Intel 12.x compilers, which makes us puzzling: Different programs reproducibly deadlock or die with errors alike the below-listed ones.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some of the errors looks alike programming issue at first look (well, a deadlock *is* usually a programming error) but we do not believe it is so: the errors arise in many well-tested codes including HPL (*) and only with a special compiler + Open MPI version (Intel 12.x compiler + open MPI 1.4.3) and only on special number of processes (usually high ones). For example, HPL reproducible deadlocks with 72 procs and dies with error message #2 with 384 processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All this errors seem to be somehow related to MPI communicators; and 1.4.4rc3 and in 1.5.3 and 1.5.4 seem not to have this problem. Also 1.4.3 if using together with Intel 11.x compielr series seem to be unproblematic. So probably this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1.4.4 release notes:)
</span><br>
<span class="quotelev1">&gt; - Fixed a segv in MPI_Comm_create when called with GROUP_EMPTY.
</span><br>
<span class="quotelev1">&gt;  Thanks to Dominik Goeddeke for finding this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is also fix for our issues? Or maybe not, because 1.5.3 is _older_ than this fix?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as we workarounded the problem by switching our production to 1.5.3 this issue is not a &quot;burning&quot; one; but I decieded still to post this because any issue on such fundamental things may be interesting for developers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (*) <a href="http://www.netlib.org/benchmark/hpl/">http://www.netlib.org/benchmark/hpl/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ################################################################
</span><br>
<span class="quotelev1">&gt; Fatal error in MPI_Comm_size: Invalid communicator, error stack:
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(111): MPI_Comm_size(comm=0x0, size=0x6f4a90) failed
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(69).: Invalid communicator
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ################################################################
</span><br>
<span class="quotelev1">&gt; [linuxbdc05.rz.RWTH-Aachen.DE:23219] *** An error occurred in MPI_Comm_split
</span><br>
<span class="quotelev1">&gt; [linuxbdc05.rz.RWTH-Aachen.DE:23219] *** on communicator MPI COMMUNICATOR 3 SPLIT FROM 0
</span><br>
<span class="quotelev1">&gt; [linuxbdc05.rz.RWTH-Aachen.DE:23219] *** MPI_ERR_IN_STATUS: error code in status
</span><br>
<span class="quotelev1">&gt; [linuxbdc05.rz.RWTH-Aachen.DE:23219] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ################################################################
</span><br>
<span class="quotelev1">&gt; forrtl: severe (71): integer divide by zero
</span><br>
<span class="quotelev1">&gt; Image PC Routine Line Source
</span><br>
<span class="quotelev1">&gt; libmpi.so.0 00002AAAAD9EDF52 Unknown Unknown Unknown
</span><br>
<span class="quotelev1">&gt; libmpi.so.0 00002AAAAD9EE45D Unknown Unknown Unknown
</span><br>
<span class="quotelev1">&gt; libmpi.so.0 00002AAAAD9C3375 Unknown Unknown Unknown
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so.0 00002AAAAD75C37A Unknown Unknown Unknown
</span><br>
<span class="quotelev1">&gt; vasp_mpi_gamma 000000000057E010 Unknown Unknown Unknown
</span><br>
<span class="quotelev1">&gt; vasp_mpi_gamma 000000000059F636 Unknown Unknown Unknown
</span><br>
<span class="quotelev1">&gt; vasp_mpi_gamma 0000000000416C5A Unknown Unknown Unknown
</span><br>
<span class="quotelev1">&gt; vasp_mpi_gamma 0000000000A62BEE Unknown Unknown Unknown
</span><br>
<span class="quotelev1">&gt; libc.so.6 0000003EEB61EC5D Unknown Unknown Unknown
</span><br>
<span class="quotelev1">&gt; vasp_mpi_gamma 0000000000416A29 Unknown Unknown Unknown
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17430.php">Jeff Squyres: "Re: [OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<li><strong>Previous message:</strong> <a href="17428.php">Jeff Squyres: "Re: [OMPI users] on cluster job slowdown near end"</a>
<li><strong>In reply to:</strong> <a href="17404.php">Paul Kapinos: "[OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)"</a>
<!-- nextthread="start" -->
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
