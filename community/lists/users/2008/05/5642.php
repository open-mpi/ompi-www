<?
$subject_val = "Re: [OMPI users] mpif77 report Old-style type declaration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 06:20:19 2008" -->
<!-- isoreceived="20080508102019" -->
<!-- sent="Thu, 08 May 2008 20:20:06 +1000" -->
<!-- isosent="20080508102006" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif77 report Old-style type declaration" -->
<!-- id="1210242006.5400.104.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="OFF9E0364B.E5013DCC-ON48257443.002FCDF9-48257443.002FE5A4_at_cn.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpif77 report Old-style type declaration<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-08 06:20:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5643.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Internals &amp; Static-Analysis."</a>
<li><strong>Previous message:</strong> <a href="5641.php">Mukesh K Srivastava: "[OMPI users] OpenMPI Internals &amp; Static-Analysis."</a>
<li><strong>In reply to:</strong> <a href="5640.php">Wen Hao Wang: "[OMPI users] mpif77 report Old-style type declaration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's a function of your underlying compiler.  Try:
<br>
<p>mpif77 --showme
<br>
<p>to see how it's being invoked.
<br>
<p><p>On Thu, 2008-05-08 at 16:55 +0800, Wen Hao Wang wrote:
<br>
<span class="quotelev1">&gt; Hi all:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using openmpi to compile Fortran program on RHEL5.2 x86 machine.
</span><br>
<span class="quotelev1">&gt; Open MPI 1.2.5-2 is installed. mpif77 gave following error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 dtyp]# mpif77 -c -o freal16_f.o freal16_f.f
</span><br>
<span class="quotelev1">&gt; In file freal16_f.f:67
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; real*16 real16
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; Error: Old-style type declaration REAL*16 not supported at (1)
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 dtyp]# vi freal16_f.f
</span><br>
<span class="quotelev1">&gt; 67 real*16 real16
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 dtyp]# which mpif77
</span><br>
<span class="quotelev1">&gt; /usr/bin/mpif77
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 dtyp]# file /usr/bin/mpif77
</span><br>
<span class="quotelev1">&gt; /usr/bin/mpif77: symbolic link to `/etc/alternatives/mpif77'
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 dtyp]# file /etc/alternatives/mpif77
</span><br>
<span class="quotelev1">&gt; /etc/alternatives/mpif77: symbolic link to
</span><br>
<span class="quotelev1">&gt; `/usr/bin/opal_wrapper-1.2.5-gcc-32'
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 dtyp]# rpm -qf /usr/bin/opal_wrapper-1.2.5-gcc-32
</span><br>
<span class="quotelev1">&gt; openmpi-devel-1.2.5-2.el5
</span><br>
<span class="quotelev1">&gt; [root_at_xblade08 dtyp]# mpif77 -v
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target: i386-redhat-linux
</span><br>
<span class="quotelev1">&gt; Configured with: ../configure --prefix=/usr --mandir=/usr/share/man
</span><br>
<span class="quotelev1">&gt; --infodir=/usr/share/info --enable-shared --enable-threads=posix
</span><br>
<span class="quotelev1">&gt; --enable-checking=release --with-system-zlib --enable-__cxa_atexit
</span><br>
<span class="quotelev1">&gt; --disable-libunwind-exceptions --enable-libgcj-multifile
</span><br>
<span class="quotelev1">&gt; --enable-languages=c,c++,objc,obj-c++,java,fortran,ada
</span><br>
<span class="quotelev1">&gt; --enable-java-awt=gtk --disable-dssi --enable-plugin
</span><br>
<span class="quotelev1">&gt; --with-java-home=/usr/lib/jvm/java-1.4.2-gcj-1.4.2.0/jre
</span><br>
<span class="quotelev1">&gt; --with-cpu=generic --host=i386-redhat-linux
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.1.2 20071124 (Red Hat 4.1.2-41)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since mpif77 is one compiler wrapper, how can I get the detailed
</span><br>
<span class="quotelev1">&gt; compiler, environment variables and arguments to the file compile
</span><br>
<span class="quotelev1">&gt; freal16_f.f? I have another file named freal8_f.f, with the sentence
</span><br>
<span class="quotelev1">&gt; &quot;real*8 real8&quot;. But mpif77 can compile it smoothly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wen Hao Wang
</span><br>
<span class="quotelev1">&gt; Email: wangwhao_at_[hidden]
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
<li><strong>Next message:</strong> <a href="5643.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Internals &amp; Static-Analysis."</a>
<li><strong>Previous message:</strong> <a href="5641.php">Mukesh K Srivastava: "[OMPI users] OpenMPI Internals &amp; Static-Analysis."</a>
<li><strong>In reply to:</strong> <a href="5640.php">Wen Hao Wang: "[OMPI users] mpif77 report Old-style type declaration"</a>
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
