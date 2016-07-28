<?
$subject_val = "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 24 09:14:42 2011" -->
<!-- isoreceived="20111024131442" -->
<!-- sent="Mon, 24 Oct 2011 07:14:21 -0600" -->
<!-- isosent="20111024131421" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware" -->
<!-- id="42C53D0B-1586-4001-B9D2-D77AF0033961_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAOGuw7siK=U6FkbwV0k6wYCmJbqW0cwMDn74iiaSr6de4MGPzQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-24 09:14:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17595.php">Nguyen Toan: "[OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<li><strong>Previous message:</strong> <a href="17593.php">&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;: "[OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>In reply to:</strong> <a href="17593.php">&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;: "[OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17598.php">吕慧伟: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does the difference persist if you run the single process using mpirun? In other words, does &quot;mpirun -np 1 ./my_hybrid_app...&quot; behave the same as &quot;mpirun -np 2 ./...&quot;?
<br>
<p>There is a slight difference in the way procs start when run as singletons. It shouldn't make a difference here, but worth testing.
<br>
<p>On Oct 24, 2011, at 12:37 AM, &#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159; wrote:
<br>
<p><span class="quotelev1">&gt; Dear List,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a hybrid MPI/Pthreads program named &quot;my_hybrid_app&quot;, this program is memory-intensive and take advantage of multi-threading to improve memory throughput. I run &quot;my_hybrid_app&quot; on two machines, which have same hardware configuration but different OS and GCC. The problem is: when I run &quot;my_hybrid_app&quot; with one process, two machines behaves the same: the more number of threads, the better the performance; however, when I run &quot;my_hybrid_app&quot; with two or more processes. The first machine still increase performance with more threads, the second machine degrades in performance with more threads. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since running &quot;my_hybrid_app&quot; with one process behaves correctly, I suspect my linking to MPI library has some problem. Would somebody point me in the right direction? Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached are the commandline used, my machine informantion and link informantion.
</span><br>
<span class="quotelev1">&gt; p.s. 1: Commandline
</span><br>
<span class="quotelev1">&gt; single process: ./my_hybrid_app &lt;number of threads&gt;
</span><br>
<span class="quotelev1">&gt; multiple process: mpirun -np 2 ./my_hybrid_app &lt;number of threads&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; p.s. 2: Machine Informantion
</span><br>
<span class="quotelev1">&gt; The first machine is CentOS 5.3 with GCC 4.1.2:
</span><br>
<span class="quotelev1">&gt; Target: x86_64-redhat-linux
</span><br>
<span class="quotelev1">&gt; Configured with: ../configure --prefix=/usr --mandir=/usr/share/man --infodir=/usr/share/info --enable-shared --enable-threads=posix --enable-checking=release --with-system-zlib --enable-__cxa_atexit --disable-libunwind-exceptions --enable-libgcj-multifile --enable-languages=c,c++,objc,obj-c++,java,fortran,ada --enable-java-awt=gtk --disable-dssi --enable-plugin --with-java-home=/usr/lib/jvm/java-1.4.2-gcj-1.4.2.0/jre --with-cpu=generic --host=x86_64-redhat-linux
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.1.2 20080704 (Red Hat 4.1.2-44)
</span><br>
<span class="quotelev1">&gt; The second machine is SUSE Enterprise Server 11 with GCC 4.3.4:
</span><br>
<span class="quotelev1">&gt; Target: x86_64-suse-linux
</span><br>
<span class="quotelev1">&gt; Configured with: ../configure --prefix=/usr --infodir=/usr/share/info --mandir=/usr/share/man --libdir=/usr/lib64 --libexecdir=/usr/lib64 --enable-languages=c,c++,objc,fortran,obj-c++,java,ada --enable-checking=release --with-gxx-include-dir=/usr/include/c++/4.3 --enable-ssp --disable-libssp --with-bugurl=<a href="http://bugs.opensuse.org/">http://bugs.opensuse.org/</a> --with-pkgversion='SUSE Linux' --disable-libgcj --disable-libmudflap --with-slibdir=/lib64 --with-system-zlib --enable-__cxa_atexit --enable-libstdcxx-allocator=new --disable-libstdcxx-pch --enable-version-specific-runtime-libs --program-suffix=-4.3 --enable-linux-futex --without-system-libunwind --with-cpu=generic --build=x86_64-suse-linux
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.3.4 [gcc-4_3-branch revision 152973] (SUSE Linux)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; p.s. 3: ldd Informantion
</span><br>
<span class="quotelev1">&gt; The first machine:
</span><br>
<span class="quotelev1">&gt; $ ldd my_hybrid_app
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x000000358d400000)
</span><br>
<span class="quotelev1">&gt;         libmpi.so.0 =&gt; /usr/local/openmpi/lib/libmpi.so.0 (0x00002af0d53a7000)
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.0 =&gt; /usr/local/openmpi/lib/libopen-rte.so.0 (0x00002af0d564a000)
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.0 =&gt; /usr/local/openmpi/lib/libopen-pal.so.0 (0x00002af0d5895000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x000000358d000000)
</span><br>
<span class="quotelev1">&gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x000000358f000000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x000000359a600000)
</span><br>
<span class="quotelev1">&gt;         libgomp.so.1 =&gt; /usr/lib64/libgomp.so.1 (0x00002af0d5b07000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x000000358d800000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x000000358cc00000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x000000358c800000)
</span><br>
<span class="quotelev1">&gt;         librt.so.1 =&gt; /lib64/librt.so.1 (0x000000358dc00000)
</span><br>
<span class="quotelev1">&gt; The second machine:
</span><br>
<span class="quotelev1">&gt; $ ldd my_hybrid_app
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007fff3eb5f000)
</span><br>
<span class="quotelev1">&gt;         libmpi.so.0 =&gt; /root/opt/openmpi/lib/libmpi.so.0 (0x00007f68627a1000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00007f686254b000)
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.0 =&gt; /root/opt/openmpi/lib/libopen-rte.so.0 (0x00007f68622fc000)
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.0 =&gt; /root/opt/openmpi/lib/libopen-pal.so.0 (0x00007f68620a5000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007f6861ea1000)
</span><br>
<span class="quotelev1">&gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00007f6861c89000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007f6861a86000)
</span><br>
<span class="quotelev1">&gt;         libgomp.so.1 =&gt; /usr/lib64/libgomp.so.1 (0x00007f686187d000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007f6861660000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00007f6861302000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x00007f6862a58000)
</span><br>
<span class="quotelev1">&gt;         librt.so.1 =&gt; /lib64/librt.so.1 (0x00007f68610f9000)
</span><br>
<span class="quotelev1">&gt; I installed openmpi-1.4.2 to a user directory /root/opt/openmpi and use &quot;-L/root/opt/openmpi -Wl,-rpath,/root/opt/openmpi&quot; when linking.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Huiwei Lv
</span><br>
<span class="quotelev1">&gt; PhD. student at Institute of Computing Technology, 
</span><br>
<span class="quotelev1">&gt; Beijing, China
</span><br>
<span class="quotelev1">&gt; <a href="http://asg.ict.ac.cn/lhw">http://asg.ict.ac.cn/lhw</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17594/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17595.php">Nguyen Toan: "[OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<li><strong>Previous message:</strong> <a href="17593.php">&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;: "[OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>In reply to:</strong> <a href="17593.php">&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;: "[OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17598.php">吕慧伟: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
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
