<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 07:55:02 2007" -->
<!-- isoreceived="20071025115502" -->
<!-- sent="Thu, 25 Oct 2007 07:54:38 -0400" -->
<!-- isosent="20071025115438" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot suppress openib error message" -->
<!-- id="5007A9F8-1406-44D4-95DE-0CA7EB64CBB9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18207.63951.754901.992992_at_ron.nulle.part" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-25 07:54:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4323.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Previous message:</strong> <a href="4321.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>In reply to:</strong> <a href="4318.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4323.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Reply:</strong> <a href="4323.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Reply:</strong> <a href="4324.php">Dirk Eddelbuettel: "[OMPI users] Solved! (Was:  Cannot suppress openib error message)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 24, 2007, at 10:05 PM, Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev1">&gt; | &gt; | If I had to guess, the systems where you don't see the  
</span><br>
<span class="quotelev1">&gt; warning are
</span><br>
<span class="quotelev1">&gt; | &gt; | systems that have OFED loaded.
</span><br>
<span class="quotelev1">&gt; | &gt;
</span><br>
<span class="quotelev1">&gt; | &gt; I am pretty sure that none of the systems (at work) have IB
</span><br>
<span class="quotelev1">&gt; | &gt; hardware.  I am
</span><br>
<span class="quotelev1">&gt; | &gt; very sure that my home systems do not, and there the 'btl =  
</span><br>
<span class="quotelev1">&gt; ^openib'
</span><br>
<span class="quotelev1">&gt; | &gt; successfully suppresses the warning --- whereas at work it  
</span><br>
<span class="quotelev1">&gt; doesn't.
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | Note that you don't need to have IB hardware -- all you need is the
</span><br>
<span class="quotelev1">&gt; | OFED software loaded.  I don't know if Debian ships the OFED
</span><br>
<span class="quotelev1">&gt; | libraries by default...?  In particular, look for libibverbs:
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | [18:28] svbu-mpi:~/svn/ompi % ldd $bogus/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; |          libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1
</span><br>
<span class="quotelev1">&gt; | (0x0000002a956c2000)
</span><br>
<span class="quotelev1">&gt; |          libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000002a957cd000)
</span><br>
<span class="quotelev1">&gt; |          libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000002a958e4000)
</span><br>
<span class="quotelev1">&gt; |          libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x0000002a959e8000)
</span><br>
<span class="quotelev1">&gt; |          libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; | (0x0000002a95b6e000)
</span><br>
<span class="quotelev1">&gt; |          libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x0000002a95c83000)
</span><br>
<span class="quotelev1">&gt; |          libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000002a95eb8000)
</span><br>
<span class="quotelev1">&gt; |          /lib64/ld-linux-x86-64.so.2 (0x000000552aaaa000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good point.  However, I use the .deb packages which are I build for  
</span><br>
<span class="quotelev1">&gt; Debian,
</span><br>
<span class="quotelev1">&gt; and they use libibverbs where available:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Build-Depends: [...], libibverbs-dev [!kfreebsd-i386 !kfreebsd- 
</span><br>
<span class="quotelev1">&gt; amd64 \
</span><br>
<span class="quotelev1">&gt; 	!hurd-i386], gfortran, libsysfs-dev, automake, gcc (&gt;= 4:4.1.2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in particular on i386. Consequently, the binary package ends up with a
</span><br>
<span class="quotelev1">&gt; Depends on the run-time package 'libibverbs1' -- and this will  
</span><br>
<span class="quotelev1">&gt; hence always
</span><br>
<span class="quotelev1">&gt; be present as all my systems use the .deb packages (either from  
</span><br>
<span class="quotelev1">&gt; Debian or
</span><br>
<span class="quotelev1">&gt; locally rebuild) that forces libibverbs1 in via this Depends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At work, I re-build these same package under Ubuntu on my &quot;head  
</span><br>
<span class="quotelev1">&gt; node&quot;.  And
</span><br>
<span class="quotelev1">&gt; on the head node, no warning is seen -- wherease my computes issue the
</span><br>
<span class="quotelev1">&gt; warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could this be another one of the dlopen issues where basically
</span><br>
<span class="quotelev1">&gt; 	ldopen(&quot;libibverbs.so&quot;)
</span><br>
<span class="quotelev1">&gt; is executed?   Because the compute nodes do NOT have libibverbs.so  
</span><br>
<span class="quotelev1">&gt; (from the
</span><br>
<span class="quotelev1">&gt; -dev package) but only libibverbs.so.1.0.0 and its matching symlink
</span><br>
<span class="quotelev1">&gt; libibverbs.so.1.
</span><br>
<p>We will not dlopen libibverbs.so directly -- we will only dlopen the  
<br>
mca_btl_openib.so file.  The dynamic linker will automatically open  
<br>
all of its dependencies.  If those dependencies cannot be found /  
<br>
symbols cannot be resolved, the dynamic linker will fail the dlopen  
<br>
of libibverbs.
<br>
<p>Can you run &quot;ldd mca_btl_openib.so&quot; on your head node and your  
<br>
compute nodes?  See if there's a difference in the output.  I think  
<br>
this is the next step in this troubleshooting process...
<br>
<p><span class="quotelev1">&gt; I just tested that hypothesis and install libibverbs-dev, but no  
</span><br>
<span class="quotelev1">&gt; beans. Still
</span><br>
<span class="quotelev1">&gt; get the warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | However, I note something in your last reply that I may have missed
</span><br>
<span class="quotelev1">&gt; | before -- can you clarify a point for me: are you saying that on  
</span><br>
<span class="quotelev1">&gt; your
</span><br>
<span class="quotelev1">&gt; | home machine, this generates the openib &quot;file not found&quot; warning:
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |      mpirun -np 2 hello
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | but this does not:
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |      mpirun -np 2 --mca btl ^openib hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More or less, but I use /etc/openmpi/openmci-mca-params.conf to toggle
</span><br>
<span class="quotelev1">&gt; ^openib.  Adding it again as --mca btl ^openib changes nothing,  
</span><br>
<span class="quotelev1">&gt; unfortunately.
</span><br>
<p>This MCA behavior is as expected; adding a param to openmpi-mca- 
<br>
params.conf is exactly the same as putting it on the command line  
<br>
(except that the command line has higher precedence).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4323.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Previous message:</strong> <a href="4321.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>In reply to:</strong> <a href="4318.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4323.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Reply:</strong> <a href="4323.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Reply:</strong> <a href="4324.php">Dirk Eddelbuettel: "[OMPI users] Solved! (Was:  Cannot suppress openib error message)"</a>
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
