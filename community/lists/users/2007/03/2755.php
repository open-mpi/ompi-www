<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 04:24:31 2007" -->
<!-- isoreceived="20070306092431" -->
<!-- sent="Tue, 6 Mar 2007 10:24:17 +0100" -->
<!-- isosent="20070306092417" -->
<!-- name="Christian Simon" -->
<!-- email="csimon_at_[hidden]" -->
<!-- subject="[OMPI users] configure is too smart !" -->
<!-- id="23E582CD-DEE3-4238-963E-0E01B60A987D_at_ccr.jussieu.fr" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Christian Simon (<em>csimon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-06 04:24:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2756.php">Jeff Squyres: "Re: [OMPI users] Current working directory issue"</a>
<li><strong>Previous message:</strong> <a href="2754.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2762.php">Brian Barrett: "Re: [OMPI users] configure is too smart !"</a>
<li><strong>Reply:</strong> <a href="2762.php">Brian Barrett: "Re: [OMPI users] configure is too smart !"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear developers,
<br>
<p>I &quot;switched&quot; from Lam-MPI to Open MPI recently. I am using MacOS X  
<br>
server
<br>
on small clusters, previously with XLF/XLC on G5, now gfortran/gcc  
<br>
with Intels.
<br>
<p>Since users are used to Unix file systems, since most applications/ 
<br>
libraries compilations are not aware of HFS+ file system case  
<br>
insensitivity, I have installed a UFS formatted disk on our new cluster.
<br>
<p>Being a careful administrator, I configured/compiled OpenMPI as a  
<br>
user, on the UFS partition.
<br>
Then I installed it as root, on an HFS+ system partition.
<br>
<p>When I tried to install Scalapack, BLACS compilation failed miserably:
<br>
<p>BI_EmergencyBuff.c: In function 'void BI_EmergencyBuff(int)':
<br>
BI_EmergencyBuff.c:34: error: invalid conversion from 'void*' to 'char*'
<br>
make[2]: *** [BI_EmergencyBuff.o] Error 1
<br>
make[1]: *** [INTERN] Error 2
<br>
make: *** [MPI] Error 2
<br>
<p>This is, I guess, due to confusion between wrappers :
<br>
<p>$/usr/local/openmpi-1.1.4_32bits/bin/mpic++
<br>
i686-apple-darwin8-g++-4.0.1: no input files
<br>
<p>seems ok, but:
<br>
<p>$ /usr/local/openmpi-1.1.4_32bits/bin/mpicc
<br>
i686-apple-darwin8-g++-4.0.1: no input files
<br>
<p>is wrong...
<br>
Re-compiling OpenMPI on an HFS+ filesystem, I get:
<br>
<p>$ /usr/local/openmpi-1.1.4_32bits_hfs/bin/mpic++
<br>
i686-apple-darwin8-g++-4.0.1: no input files
<br>
<p>and
<br>
<p>$ /usr/local/openmpi-1.1.4_32bits_hfs/bin/mpicc
<br>
i686-apple-darwin8-gcc-4.0.1: no input files
<br>
<p>which is correct.
<br>
Then BLACS/Scalapack and others get compiled without troubles.
<br>
(I have not tested execution yet !)
<br>
<p>Is my explanation right ?
<br>
<p>If yes, although the documentation is excellent, and FAQ already well  
<br>
detailed, could you please add a caveat somewhere:
<br>
OpenMPI's configure is smarter than the average: it is case  
<br>
sensitiveness aware.
<br>
<p>Anyway, many thanks for your great great job !
<br>
<pre>
--
Dr. Christian SIMON, Maitre de Conferences
Laboratoire LI2C-UMR7612                Bat. F74, piece 757
Universite Pierre et Marie Curie        Tel:+33.1.44.27.32.65
Case 51                                 Fax:+33.1.44.27.32.28
4 Place Jussieu
75252 Paris Cedex 05
France/Europe
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2756.php">Jeff Squyres: "Re: [OMPI users] Current working directory issue"</a>
<li><strong>Previous message:</strong> <a href="2754.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2762.php">Brian Barrett: "Re: [OMPI users] configure is too smart !"</a>
<li><strong>Reply:</strong> <a href="2762.php">Brian Barrett: "Re: [OMPI users] configure is too smart !"</a>
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
