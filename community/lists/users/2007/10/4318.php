<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 22:05:08 2007" -->
<!-- isoreceived="20071025020508" -->
<!-- sent="Wed, 24 Oct 2007 21:05:03 -0500" -->
<!-- isosent="20071025020503" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot suppress openib error message" -->
<!-- id="18207.63951.754901.992992_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="969DCAFA-414F-4105-A39C-A488CB9211FF_at_cisco.com" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-24 22:05:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4319.php">George Bosilca: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Previous message:</strong> <a href="4317.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>In reply to:</strong> <a href="4317.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4322.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Reply:</strong> <a href="4322.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 24 October 2007 at 21:31, Jeff Squyres wrote:
<br>
| On Oct 24, 2007, at 9:23 PM, Dirk Eddelbuettel wrote:
<br>
| 
<br>
| &gt; | If I had to guess, the systems where you don't see the warning are
<br>
| &gt; | systems that have OFED loaded.
<br>
| &gt;
<br>
| &gt; I am pretty sure that none of the systems (at work) have IB  
<br>
| &gt; hardware.  I am
<br>
| &gt; very sure that my home systems do not, and there the 'btl = ^openib'
<br>
| &gt; successfully suppresses the warning --- whereas at work it doesn't.
<br>
| 
<br>
| Note that you don't need to have IB hardware -- all you need is the  
<br>
| OFED software loaded.  I don't know if Debian ships the OFED  
<br>
| libraries by default...?  In particular, look for libibverbs:
<br>
| 
<br>
| [18:28] svbu-mpi:~/svn/ompi % ldd $bogus/lib/openmpi/mca_btl_openib.so
<br>
|          libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1  
<br>
| (0x0000002a956c2000)
<br>
|          libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000002a957cd000)
<br>
|          libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000002a958e4000)
<br>
|          libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x0000002a959e8000)
<br>
|          libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0  
<br>
| (0x0000002a95b6e000)
<br>
|          libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x0000002a95c83000)
<br>
|          libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000002a95eb8000)
<br>
|          /lib64/ld-linux-x86-64.so.2 (0x000000552aaaa000)
<br>
<p>Good point.  However, I use the .deb packages which are I build for Debian,
<br>
and they use libibverbs where available:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Build-Depends: [...], libibverbs-dev [!kfreebsd-i386 !kfreebsd-amd64 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!hurd-i386], gfortran, libsysfs-dev, automake, gcc (&gt;= 4:4.1.2)
<br>
<p>in particular on i386. Consequently, the binary package ends up with a
<br>
Depends on the run-time package 'libibverbs1' -- and this will hence always
<br>
be present as all my systems use the .deb packages (either from Debian or
<br>
locally rebuild) that forces libibverbs1 in via this Depends.
<br>
<p>At work, I re-build these same package under Ubuntu on my &quot;head node&quot;.  And
<br>
on the head node, no warning is seen -- wherease my computes issue the
<br>
warning.
<br>
<p>Could this be another one of the dlopen issues where basically
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ldopen(&quot;libibverbs.so&quot;) 
<br>
is executed?   Because the compute nodes do NOT have libibverbs.so (from the
<br>
-dev package) but only libibverbs.so.1.0.0 and its matching symlink
<br>
libibverbs.so.1.
<br>
<p>I just tested that hypothesis and install libibverbs-dev, but no beans. Still
<br>
get the warning. 
<br>
&nbsp;
<br>
| However, I note something in your last reply that I may have missed  
<br>
| before -- can you clarify a point for me: are you saying that on your  
<br>
| home machine, this generates the openib &quot;file not found&quot; warning:
<br>
| 
<br>
|      mpirun -np 2 hello
<br>
| 
<br>
| but this does not:
<br>
| 
<br>
|      mpirun -np 2 --mca btl ^openib hello
<br>
<p>More or less, but I use /etc/openmpi/openmci-mca-params.conf to toggle
<br>
^openib.  Adding it again as --mca btl ^openib changes nothing, unfortunately.
<br>
<p>| If so, can you confirm which version of Open MPI you are running?   
<br>
| The only reason that I can think that that would happen is if you are  
<br>
| running a trunk nightly download of Open MPI...  If not, then there's  
<br>
| something else going on that would be worth understanding.
<br>
<p>No, plain 1.2.4 from the original tarballs.
<br>
<p>Still puzzled.  To recap, the head node and the compute node all use the same
<br>
Ubuntu release, use the same binary .deb packages from Open MPI 1.2.4 I
<br>
rebuild there.  The 'sole' difference is that the 'head node' has more
<br>
development packages and tools installed -- but that should not matter.  I
<br>
just re-checked and the compute node does not have any LAM or MPICH
<br>
parts remaining.
<br>
<p>Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4319.php">George Bosilca: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Previous message:</strong> <a href="4317.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>In reply to:</strong> <a href="4317.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4322.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Reply:</strong> <a href="4322.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
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
