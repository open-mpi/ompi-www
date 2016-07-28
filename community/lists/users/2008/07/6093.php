<?
$subject_val = "[OMPI users] Can't use tcp instead of openib/infinipath";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 19 07:06:02 2008" -->
<!-- isoreceived="20080719110602" -->
<!-- sent="Sat, 19 Jul 2008 04:06:57 -0700" -->
<!-- isosent="20080719110657" -->
<!-- name="Bill Broadley" -->
<!-- email="bill_at_[hidden]" -->
<!-- subject="[OMPI users] Can't use tcp instead of openib/infinipath" -->
<!-- id="4881CAD1.809_at_cse.ucdavis.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Can't use tcp instead of openib/infinipath<br>
<strong>From:</strong> Bill Broadley (<em>bill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-19 07:06:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6094.php">Joe Landman: "[OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>Previous message:</strong> <a href="6092.php">Edgar Gabriel: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>Reply:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I built openib-1.2.6 on centos-5.2 with gcc-4.3.1.
<br>
<p>I did a tar xvzf, cd openib-1.2.6, mkdir obj, cd obj:
<br>
(I put gcc-4.3.1/bin first in my path)
<br>
../configure --prefix=/opt/pkg/openmpi-1.2.6 --enable-shared --enable-debug
<br>
<p>If I look in config.log I see:
<br>
MCA_btl_ALL_COMPONENTS=' self sm gm mvapi mx openib portals tcp udapl'
<br>
MCA_btl_DSO_COMPONENTS=' self sm openib tcp'
<br>
<p>So both openib and tcp are available and have many parameters under
<br>
ompi_info --param btl tcp
<br>
ompi_info --param btl openib
<br>
<p>Yet, when I run a MPI program I can't get use TCP:
<br>
# which mpirun
<br>
/opt/pkg/openmpi-1.2.6/bin/mpirun
<br>
# mpirun -mca btl ^openib -np 2 -machinefile m ./relay 1
<br>
compute-0-1.local compute-0-0.local
<br>
size=    1, 131072 hops, 2 nodes in  0.304 sec ( 2.320 us/hop)   1683 KB/sec
<br>
<p>Or if I try the inverse:
<br>
# mpirun -mca btl self,tcp -np 2 -machinefile m ./relay 1
<br>
compute-0-1.local compute-0-0.local
<br>
size=    1, 131072 hops, 2 nodes in  0.313 sec ( 2.386 us/hop)   1637 KB/sec
<br>
<p>2.3us is definitely faster than GigE.  I don't have IPoverIB setup, ifconfig 
<br>
-a shows ib0, but it has no IP address.
<br>
<p>I removed all other openib implementations (infinipath came with one) before I
<br>
compiled, and the binary seems to be linked against the right libraries:
<br>
# ldd ./relay
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /opt/pkg/openmpi-1.2.6/lib/libmpi.so.0 (0x00002aaaaacc7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /opt/pkg/openmpi-1.2.6/lib/libopen-rte.so.0 
<br>
(0x00002aaaaafb5000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /opt/pkg/openmpi-1.2.6/lib/libopen-pal.so.0 
<br>
(0x00002aaaab23d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002aaaab4b2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002aaaab6b6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002aaaab8ce000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00002aaaabad2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002aaaabd55000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00002aaaabf6f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00002aaaaaaab000)
<br>
<p>Can anyone suggest what to look into?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6094.php">Joe Landman: "[OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>Previous message:</strong> <a href="6092.php">Edgar Gabriel: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>Reply:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
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
