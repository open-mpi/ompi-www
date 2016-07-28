<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 10:33:26 2007" -->
<!-- isoreceived="20070306153326" -->
<!-- sent="Tue, 6 Mar 2007 08:32:53 -0700" -->
<!-- isosent="20070306153253" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure is too smart !" -->
<!-- id="6F5AAD23-20A5-4A7C-9D1B-C7FBEFA179E7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="23E582CD-DEE3-4238-963E-0E01B60A987D_at_ccr.jussieu.fr" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-06 10:32:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2763.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2761.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>In reply to:</strong> <a href="2755.php">Christian Simon: "[OMPI users] configure is too smart !"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2766.php">Christian Simon: "Re: [OMPI users] configure is too smart !"</a>
<li><strong>Reply:</strong> <a href="2766.php">Christian Simon: "Re: [OMPI users] configure is too smart !"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure, we can add a FAQ entry on that :).
<br>
<p>At present, configure decides whether Open MPI will be installed on a  
<br>
case sensitive file-system or not based on what the build file system  
<br>
does.  Which is far from perfect, but covers 99.9% of the cases.  You  
<br>
happen to be the .1%, but we do have an option for you.  You can  
<br>
specify --with-cs-fs or --without-cs-fs to specify whether the  
<br>
installation filesystem is case sensitive or not (overriding the auto- 
<br>
detection).
<br>
<p>Of course, I suppose I could add a sanity check during &quot;make install&quot;  
<br>
to ensure that the installation filesystem really is case sensitive  
<br>
if we expect it to be.  mmm...  I'll add that to the long term todo  
<br>
list.  For now, I think a FAQ entry will do.
<br>
<p>Brian
<br>
<p><p>On Mar 6, 2007, at 2:24 AM, Christian Simon wrote:
<br>
<p><span class="quotelev1">&gt; Dear developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I &quot;switched&quot; from Lam-MPI to Open MPI recently. I am using MacOS X
</span><br>
<span class="quotelev1">&gt; server
</span><br>
<span class="quotelev1">&gt; on small clusters, previously with XLF/XLC on G5, now gfortran/gcc
</span><br>
<span class="quotelev1">&gt; with Intels.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since users are used to Unix file systems, since most applications/
</span><br>
<span class="quotelev1">&gt; libraries compilations are not aware of HFS+ file system case
</span><br>
<span class="quotelev1">&gt; insensitivity, I have installed a UFS formatted disk on our new  
</span><br>
<span class="quotelev1">&gt; cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Being a careful administrator, I configured/compiled OpenMPI as a
</span><br>
<span class="quotelev1">&gt; user, on the UFS partition.
</span><br>
<span class="quotelev1">&gt; Then I installed it as root, on an HFS+ system partition.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I tried to install Scalapack, BLACS compilation failed miserably:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BI_EmergencyBuff.c: In function 'void BI_EmergencyBuff(int)':
</span><br>
<span class="quotelev1">&gt; BI_EmergencyBuff.c:34: error: invalid conversion from 'void*' to  
</span><br>
<span class="quotelev1">&gt; 'char*'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [BI_EmergencyBuff.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [INTERN] Error 2
</span><br>
<span class="quotelev1">&gt; make: *** [MPI] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is, I guess, due to confusion between wrappers :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $/usr/local/openmpi-1.1.4_32bits/bin/mpic++
</span><br>
<span class="quotelev1">&gt; i686-apple-darwin8-g++-4.0.1: no input files
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; seems ok, but:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /usr/local/openmpi-1.1.4_32bits/bin/mpicc
</span><br>
<span class="quotelev1">&gt; i686-apple-darwin8-g++-4.0.1: no input files
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is wrong...
</span><br>
<span class="quotelev1">&gt; Re-compiling OpenMPI on an HFS+ filesystem, I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /usr/local/openmpi-1.1.4_32bits_hfs/bin/mpic++
</span><br>
<span class="quotelev1">&gt; i686-apple-darwin8-g++-4.0.1: no input files
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /usr/local/openmpi-1.1.4_32bits_hfs/bin/mpicc
</span><br>
<span class="quotelev1">&gt; i686-apple-darwin8-gcc-4.0.1: no input files
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which is correct.
</span><br>
<span class="quotelev1">&gt; Then BLACS/Scalapack and others get compiled without troubles.
</span><br>
<span class="quotelev1">&gt; (I have not tested execution yet !)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is my explanation right ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If yes, although the documentation is excellent, and FAQ already well
</span><br>
<span class="quotelev1">&gt; detailed, could you please add a caveat somewhere:
</span><br>
<span class="quotelev1">&gt; OpenMPI's configure is smarter than the average: it is case
</span><br>
<span class="quotelev1">&gt; sensitiveness aware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, many thanks for your great great job !
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr. Christian SIMON, Maitre de Conferences
</span><br>
<span class="quotelev1">&gt; Laboratoire LI2C-UMR7612                Bat. F74, piece 757
</span><br>
<span class="quotelev1">&gt; Universite Pierre et Marie Curie        Tel:+33.1.44.27.32.65
</span><br>
<span class="quotelev1">&gt; Case 51                                 Fax:+33.1.44.27.32.28
</span><br>
<span class="quotelev1">&gt; 4 Place Jussieu
</span><br>
<span class="quotelev1">&gt; 75252 Paris Cedex 05
</span><br>
<span class="quotelev1">&gt; France/Europe
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
<li><strong>Next message:</strong> <a href="2763.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2761.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>In reply to:</strong> <a href="2755.php">Christian Simon: "[OMPI users] configure is too smart !"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2766.php">Christian Simon: "Re: [OMPI users] configure is too smart !"</a>
<li><strong>Reply:</strong> <a href="2766.php">Christian Simon: "Re: [OMPI users] configure is too smart !"</a>
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
