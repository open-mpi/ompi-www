<?
$subject_val = "[OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 24 02:37:09 2011" -->
<!-- isoreceived="20111024063709" -->
<!-- sent="Mon, 24 Oct 2011 14:37:02 +0800" -->
<!-- isosent="20111024063702" -->
<!-- name="&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;" -->
<!-- email="lvhuiwei_at_[hidden]" -->
<!-- subject="[OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware" -->
<!-- id="CAOGuw7siK=U6FkbwV0k6wYCmJbqW0cwMDn74iiaSr6de4MGPzQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware<br>
<strong>From:</strong> &#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159; (<em>lvhuiwei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-24 02:37:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17594.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>Previous message:</strong> <a href="17592.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17594.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>Reply:</strong> <a href="17594.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>Maybe reply:</strong> <a href="17598.php">吕慧伟: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear List,
<br>
<p>I have a hybrid MPI/Pthreads program named &quot;my_hybrid_app&quot;, this program is
<br>
memory-intensive and take advantage of multi-threading to improve memory
<br>
throughput. I run &quot;my_hybrid_app&quot; on two machines, which have same hardware
<br>
configuration but different OS and GCC. The problem is: when I run
<br>
&quot;my_hybrid_app&quot; with one process, two machines behaves the same: the more
<br>
number of threads, the better the performance; however, when I
<br>
run &quot;my_hybrid_app&quot; with two or more processes. The first machine still
<br>
increase performance with more threads, the second machine degrades in
<br>
performance with more threads.
<br>
<p>Since running &quot;my_hybrid_app&quot; with one process behaves correctly, I suspect
<br>
my linking to MPI library has some problem. Would somebody point me in the
<br>
right direction? Thanks in advance.
<br>
<p>Attached are the commandline used, my machine informantion and link
<br>
informantion.
<br>
p.s. 1: Commandline
<br>
<p>single process: ./my_hybrid_app &lt;number of threads&gt;
<br>
multiple process: mpirun -np 2 ./my_hybrid_app &lt;number of threads&gt;
<br>
<p>p.s. 2: Machine Informantion
<br>
<p>The first machine is CentOS 5.3 with GCC 4.1.2:
<br>
<p>Target: x86_64-redhat-linux
<br>
<p>Configured with: ../configure --prefix=/usr --mandir=/usr/share/man
<br>
--infodir=/usr/share/info --enable-shared --enable-threads=posix
<br>
--enable-checking=release --with-system-zlib --enable-__cxa_atexit
<br>
--disable-libunwind-exceptions --enable-libgcj-multifile
<br>
--enable-languages=c,c++,objc,obj-c++,java,fortran,ada --enable-java-awt=gtk
<br>
--disable-dssi --enable-plugin
<br>
--with-java-home=/usr/lib/jvm/java-1.4.2-gcj-1.4.2.0/jre --with-cpu=generic
<br>
--host=x86_64-redhat-linux
<br>
<p>Thread model: posix
<br>
<p>gcc version 4.1.2 20080704 (Red Hat 4.1.2-44)
<br>
<p>The second machine is SUSE Enterprise Server 11 with GCC 4.3.4:
<br>
<p>Target: x86_64-suse-linux
<br>
<p>Configured with: ../configure --prefix=/usr --infodir=/usr/share/info
<br>
--mandir=/usr/share/man --libdir=/usr/lib64 --libexecdir=/usr/lib64
<br>
--enable-languages=c,c++,objc,fortran,obj-c++,java,ada
<br>
--enable-checking=release --with-gxx-include-dir=/usr/include/c++/4.3
<br>
--enable-ssp --disable-libssp
<br>
--with-bugurl=<a href="http://bugs.opensuse.org/--with-pkgversion">http://bugs.opensuse.org/--with-pkgversion</a>='SUSE Linux'
<br>
--disable-libgcj --disable-libmudflap
<br>
--with-slibdir=/lib64 --with-system-zlib --enable-__cxa_atexit
<br>
--enable-libstdcxx-allocator=new --disable-libstdcxx-pch
<br>
--enable-version-specific-runtime-libs --program-suffix=-4.3
<br>
--enable-linux-futex --without-system-libunwind --with-cpu=generic
<br>
--build=x86_64-suse-linux
<br>
<p>Thread model: posix
<br>
<p>gcc version 4.3.4 [gcc-4_3-branch revision 152973] (SUSE Linux)
<br>
<p><p>p.s. 3: ldd Informantion
<br>
<p>The first machine:
<br>
$ ldd my_hybrid_app
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x000000358d400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /usr/local/openmpi/lib/libmpi.so.0
<br>
(0x00002af0d53a7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /usr/local/openmpi/lib/libopen-rte.so.0
<br>
(0x00002af0d564a000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /usr/local/openmpi/lib/libopen-pal.so.0
<br>
(0x00002af0d5895000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x000000358d000000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x000000358f000000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x000000359a600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgomp.so.1 =&gt; /usr/lib64/libgomp.so.1 (0x00002af0d5b07000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x000000358d800000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x000000358cc00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x000000358c800000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib64/librt.so.1 (0x000000358dc00000)
<br>
The second machine:
<br>
$ ldd my_hybrid_app
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fff3eb5f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /root/opt/openmpi/lib/libmpi.so.0
<br>
(0x00007f68627a1000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00007f686254b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /root/opt/openmpi/lib/libopen-rte.so.0
<br>
(0x00007f68622fc000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /root/opt/openmpi/lib/libopen-pal.so.0
<br>
(0x00007f68620a5000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007f6861ea1000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00007f6861c89000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007f6861a86000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgomp.so.1 =&gt; /usr/lib64/libgomp.so.1 (0x00007f686187d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007f6861660000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00007f6861302000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007f6862a58000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib64/librt.so.1 (0x00007f68610f9000)
<br>
I installed openmpi-1.4.2 to a user directory /root/opt/openmpi and use
<br>
&quot;-L/root/opt/openmpi -Wl,-rpath,/root/opt/openmpi&quot; when linking.
<br>
<p><pre>
-- 
Huiwei Lv
PhD. student at Institute of Computing Technology,
Beijing, China
<a href="http://asg.ict.ac.cn/lhw">http://asg.ict.ac.cn/lhw</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17593/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17594.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>Previous message:</strong> <a href="17592.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17594.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>Reply:</strong> <a href="17594.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>Maybe reply:</strong> <a href="17598.php">吕慧伟: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
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
