<?
$subject_val = "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 24 22:47:38 2011" -->
<!-- isoreceived="20111025024738" -->
<!-- sent="Tue, 25 Oct 2011 10:47:33 +0800" -->
<!-- isosent="20111025024733" -->
<!-- name="&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;" -->
<!-- email="lvhuiwei_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware" -->
<!-- id="CAOGuw7v8HWKbATk0f9XG+8V4U1vgCA6zPt=GiDSjHFfcUh+yaQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware<br>
<strong>From:</strong> &#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159; (<em>lvhuiwei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-24 22:47:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17599.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>Previous message:</strong> <a href="17597.php">Meredith Creekmore: "Re: [OMPI users] Visual debugging on the cluster"</a>
<li><strong>Maybe in reply to:</strong> <a href="17593.php">&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;: "[OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17599.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>Reply:</strong> <a href="17599.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No. There's a difference between &quot;mpirun -np 1 ./my_hybrid_app...&quot; and &quot;mpirun
<br>
-np 2 ./...&quot;.
<br>
<p>Run &quot;mpirun -np 1 ./my_hybrid_app...&quot; will increase the performance with
<br>
more number of threads, but run &quot;mpirun -np 2 ./...&quot; decrease the
<br>
performance.
<br>
<p><pre>
--
Huiwei Lv
On Tue, Oct 25, 2011 at 12:00 AM, &lt;users-request_at_[hidden]&gt; wrote:
&gt;
&gt; Date: Mon, 24 Oct 2011 07:14:21 -0600
&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt; Subject: Re: [OMPI users] Hybrid MPI/Pthreads program behaves
&gt;        differently on  two different machines with same hardware
&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Message-ID: &lt;42C53D0B-1586-4001-B9D2-D77AF0033961_at_[hidden]&gt;
&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
&gt;
&gt; Does the difference persist if you run the single process using mpirun? In
&gt; other words, does &quot;mpirun -np 1 ./my_hybrid_app...&quot; behave the same as
&gt; &quot;mpirun -np 2 ./...&quot;?
&gt;
&gt; There is a slight difference in the way procs start when run as singletons.
&gt; It shouldn't make a difference here, but worth testing.
&gt;
&gt; On Oct 24, 2011, at 12:37 AM, ??? wrote:
&gt;
&gt; &gt; Dear List,
&gt; &gt;
&gt; &gt; I have a hybrid MPI/Pthreads program named &quot;my_hybrid_app&quot;, this program
&gt; is memory-intensive and take advantage of multi-threading to improve memory
&gt; throughput. I run &quot;my_hybrid_app&quot; on two machines, which have same hardware
&gt; configuration but different OS and GCC. The problem is: when I run
&gt; &quot;my_hybrid_app&quot; with one process, two machines behaves the same: the more
&gt; number of threads, the better the performance; however, when I run
&gt; &quot;my_hybrid_app&quot; with two or more processes. The first machine still increase
&gt; performance with more threads, the second machine degrades in performance
&gt; with more threads.
&gt; &gt;
&gt; &gt; Since running &quot;my_hybrid_app&quot; with one process behaves correctly, I
&gt; suspect my linking to MPI library has some problem. Would somebody point me
&gt; in the right direction? Thanks in advance.
&gt; &gt;
&gt; &gt; Attached are the commandline used, my machine informantion and link
&gt; informantion.
&gt; &gt; p.s. 1: Commandline
&gt; &gt; single process: ./my_hybrid_app &lt;number of threads&gt;
&gt; &gt; multiple process: mpirun -np 2 ./my_hybrid_app &lt;number of threads&gt;
&gt; &gt;
&gt; &gt; p.s. 2: Machine Informantion
&gt; &gt; The first machine is CentOS 5.3 with GCC 4.1.2:
&gt; &gt; Target: x86_64-redhat-linux
&gt; &gt; Configured with: ../configure --prefix=/usr --mandir=/usr/share/man
&gt; --infodir=/usr/share/info --enable-shared --enable-threads=posix
&gt; --enable-checking=release --with-system-zlib --enable-__cxa_atexit
&gt; --disable-libunwind-exceptions --enable-libgcj-multifile
&gt; --enable-languages=c,c++,objc,obj-c++,java,fortran,ada --enable-java-awt=gtk
&gt; --disable-dssi --enable-plugin
&gt; --with-java-home=/usr/lib/jvm/java-1.4.2-gcj-1.4.2.0/jre --with-cpu=generic
&gt; --host=x86_64-redhat-linux
&gt; &gt; Thread model: posix
&gt; &gt; gcc version 4.1.2 20080704 (Red Hat 4.1.2-44)
&gt; &gt; The second machine is SUSE Enterprise Server 11 with GCC 4.3.4:
&gt; &gt; Target: x86_64-suse-linux
&gt; &gt; Configured with: ../configure --prefix=/usr --infodir=/usr/share/info
&gt; --mandir=/usr/share/man --libdir=/usr/lib64 --libexecdir=/usr/lib64
&gt; --enable-languages=c,c++,objc,fortran,obj-c++,java,ada
&gt; --enable-checking=release --with-gxx-include-dir=/usr/include/c++/4.3
&gt; --enable-ssp --disable-libssp --with-bugurl=<a href="http://bugs.opensuse.org/--with-pkgversion">http://bugs.opensuse.org/--with-pkgversion</a>='SUSE Linux' --disable-libgcj --disable-libmudflap
&gt; --with-slibdir=/lib64 --with-system-zlib --enable-__cxa_atexit
&gt; --enable-libstdcxx-allocator=new --disable-libstdcxx-pch
&gt; --enable-version-specific-runtime-libs --program-suffix=-4.3
&gt; --enable-linux-futex --without-system-libunwind --with-cpu=generic
&gt; --build=x86_64-suse-linux
&gt; &gt; Thread model: posix
&gt; &gt; gcc version 4.3.4 [gcc-4_3-branch revision 152973] (SUSE Linux)
&gt; &gt;
&gt; &gt; p.s. 3: ldd Informantion
&gt; &gt; The first machine:
&gt; &gt; $ ldd my_hybrid_app
&gt; &gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x000000358d400000)
&gt; &gt;         libmpi.so.0 =&gt; /usr/local/openmpi/lib/libmpi.so.0
&gt; (0x00002af0d53a7000)
&gt; &gt;         libopen-rte.so.0 =&gt; /usr/local/openmpi/lib/libopen-rte.so.0
&gt; (0x00002af0d564a000)
&gt; &gt;         libopen-pal.so.0 =&gt; /usr/local/openmpi/lib/libopen-pal.so.0
&gt; (0x00002af0d5895000)
&gt; &gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x000000358d000000)
&gt; &gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x000000358f000000)
&gt; &gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x000000359a600000)
&gt; &gt;         libgomp.so.1 =&gt; /usr/lib64/libgomp.so.1 (0x00002af0d5b07000)
&gt; &gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x000000358d800000)
&gt; &gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x000000358cc00000)
&gt; &gt;         /lib64/ld-linux-x86-64.so.2 (0x000000358c800000)
&gt; &gt;         librt.so.1 =&gt; /lib64/librt.so.1 (0x000000358dc00000)
&gt; &gt; The second machine:
&gt; &gt; $ ldd my_hybrid_app
&gt; &gt;         linux-vdso.so.1 =&gt;  (0x00007fff3eb5f000)
&gt; &gt;         libmpi.so.0 =&gt; /root/opt/openmpi/lib/libmpi.so.0
&gt; (0x00007f68627a1000)
&gt; &gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00007f686254b000)
&gt; &gt;         libopen-rte.so.0 =&gt; /root/opt/openmpi/lib/libopen-rte.so.0
&gt; (0x00007f68622fc000)
&gt; &gt;         libopen-pal.so.0 =&gt; /root/opt/openmpi/lib/libopen-pal.so.0
&gt; (0x00007f68620a5000)
&gt; &gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007f6861ea1000)
&gt; &gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00007f6861c89000)
&gt; &gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007f6861a86000)
&gt; &gt;         libgomp.so.1 =&gt; /usr/lib64/libgomp.so.1 (0x00007f686187d000)
&gt; &gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007f6861660000)
&gt; &gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00007f6861302000)
&gt; &gt;         /lib64/ld-linux-x86-64.so.2 (0x00007f6862a58000)
&gt; &gt;         librt.so.1 =&gt; /lib64/librt.so.1 (0x00007f68610f9000)
&gt; &gt; I installed openmpi-1.4.2 to a user directory /root/opt/openmpi and use
&gt; &quot;-L/root/opt/openmpi -Wl,-rpath,/root/opt/openmpi&quot; when linking.
&gt; &gt; --
&gt; &gt; Huiwei Lv
&gt; &gt; PhD. student at Institute of Computing Technology,
&gt; &gt; Beijing, China
&gt; &gt; <a href="http://asg.ict.ac.cn/lhw">http://asg.ict.ac.cn/lhw</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17598/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17599.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>Previous message:</strong> <a href="17597.php">Meredith Creekmore: "Re: [OMPI users] Visual debugging on the cluster"</a>
<li><strong>Maybe in reply to:</strong> <a href="17593.php">&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;: "[OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17599.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>Reply:</strong> <a href="17599.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
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
