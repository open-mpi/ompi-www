<?
$subject_val = "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 25 04:45:31 2011" -->
<!-- isoreceived="20111025084531" -->
<!-- sent="Tue, 25 Oct 2011 16:45:25 +0800" -->
<!-- isosent="20111025084525" -->
<!-- name="&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;" -->
<!-- email="lvhuiwei_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware" -->
<!-- id="CAOGuw7t9APcmWGy2aF9sCBM+eVP7y5-mgVuASeXt_TBnwT--HA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8C728965-E68D-4E58-826E-CB99F146960A_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-10-25 04:45:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17601.php">devendra rai: "Re: [OMPI users] Visual debugging on the cluster"</a>
<li><strong>Previous message:</strong> <a href="17599.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>In reply to:</strong> <a href="17599.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17612.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>Reply:</strong> <a href="17612.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Ralph. Yes, I have taking that into account. The problem is not to
<br>
compare two proc with one proc, but the &quot;multi-threading effect&quot;.
<br>
Multi-threading is good on the first machine for one and two proc, but on
<br>
the second machine, it disappears for two proc.
<br>
<p>To narrow down the problem, I reinstalled the operating system on the second
<br>
machine from SUSE 11(kernel 2.6.32.12, gcc 4.3.4) to Red Hat 5.4
<br>
(kernel 2.6.18, gcc 4.1.2) which is similar to the first machine (Cent OS
<br>
5.3, kernel 2.6.18, gcc 4.1.2). Then the problem disappears. So the problem
<br>
must lies somewhere in OS kernel or GCC version. Any suggestions? Thanks.
<br>
<p><pre>
--
Huiwei Lv
On Tue, Oct 25, 2011 at 3:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; Okay - thanks for testing it.
&gt;
&gt; Of course, one obvious difference is that there isn't any communication
&gt; when you run only one proc, but there is when you run two or more, assuming
&gt; your application has MPI send/recv (or calls collective and other functions
&gt; that communicate) calls in it. Communication to yourself is very fast as no
&gt; bits actually move - sending messages to another proc is considerably
&gt; slower.
&gt;
&gt; Are you taking that into account?
&gt;
&gt;
&gt; On Oct 24, 2011, at 8:47 PM, &#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159; wrote:
&gt;
&gt; No. There's a difference between &quot;mpirun -np 1 ./my_hybrid_app...&quot;
&gt; and &quot;mpirun -np 2 ./...&quot;.
&gt;
&gt; Run &quot;mpirun -np 1 ./my_hybrid_app...&quot; will increase the performance with
&gt; more number of threads, but run &quot;mpirun -np 2 ./...&quot; decrease the
&gt; performance.
&gt;
&gt; --
&gt; Huiwei Lv
&gt;
&gt; On Tue, Oct 25, 2011 at 12:00 AM, &lt;users-request_at_[hidden]&gt; wrote:
&gt;
&gt;&gt;
&gt;&gt; Date: Mon, 24 Oct 2011 07:14:21 -0600
&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt;&gt; Subject: Re: [OMPI users] Hybrid MPI/Pthreads program behaves
&gt;&gt;        differently on  two different machines with same hardware
&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt;&gt; Message-ID: &lt;42C53D0B-1586-4001-B9D2-D77AF0033961_at_[hidden]&gt;
&gt;&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
&gt;&gt;
&gt;&gt; Does the difference persist if you run the single process using mpirun? In
&gt;&gt; other words, does &quot;mpirun -np 1 ./my_hybrid_app...&quot; behave the same as
&gt;&gt; &quot;mpirun -np 2 ./...&quot;?
&gt;&gt;
&gt;&gt; There is a slight difference in the way procs start when run as
&gt;&gt; singletons. It shouldn't make a difference here, but worth testing.
&gt;&gt;
&gt;&gt; On Oct 24, 2011, at 12:37 AM, ??? wrote:
&gt;&gt;
&gt;&gt; &gt; Dear List,
&gt;&gt; &gt;
&gt;&gt; &gt; I have a hybrid MPI/Pthreads program named &quot;my_hybrid_app&quot;, this program
&gt;&gt; is memory-intensive and take advantage of multi-threading to improve memory
&gt;&gt; throughput. I run &quot;my_hybrid_app&quot; on two machines, which have same hardware
&gt;&gt; configuration but different OS and GCC. The problem is: when I run
&gt;&gt; &quot;my_hybrid_app&quot; with one process, two machines behaves the same: the more
&gt;&gt; number of threads, the better the performance; however, when I run
&gt;&gt; &quot;my_hybrid_app&quot; with two or more processes. The first machine still increase
&gt;&gt; performance with more threads, the second machine degrades in performance
&gt;&gt; with more threads.
&gt;&gt; &gt;
&gt;&gt; &gt; Since running &quot;my_hybrid_app&quot; with one process behaves correctly, I
&gt;&gt; suspect my linking to MPI library has some problem. Would somebody point me
&gt;&gt; in the right direction? Thanks in advance.
&gt;&gt; &gt;
&gt;&gt; &gt; Attached are the commandline used, my machine informantion and link
&gt;&gt; informantion.
&gt;&gt; &gt; p.s. 1: Commandline
&gt;&gt; &gt; single process: ./my_hybrid_app &lt;number of threads&gt;
&gt;&gt; &gt; multiple process: mpirun -np 2 ./my_hybrid_app &lt;number of threads&gt;
&gt;&gt; &gt;
&gt;&gt; &gt; p.s. 2: Machine Informantion
&gt;&gt; &gt; The first machine is CentOS 5.3 with GCC 4.1.2:
&gt;&gt; &gt; Target: x86_64-redhat-linux
&gt;&gt; &gt; Configured with: ../configure --prefix=/usr --mandir=/usr/share/man
&gt;&gt; --infodir=/usr/share/info --enable-shared --enable-threads=posix
&gt;&gt; --enable-checking=release --with-system-zlib --enable-__cxa_atexit
&gt;&gt; --disable-libunwind-exceptions --enable-libgcj-multifile
&gt;&gt; --enable-languages=c,c++,objc,obj-c++,java,fortran,ada --enable-java-awt=gtk
&gt;&gt; --disable-dssi --enable-plugin
&gt;&gt; --with-java-home=/usr/lib/jvm/java-1.4.2-gcj-1.4.2.0/jre --with-cpu=generic
&gt;&gt; --host=x86_64-redhat-linux
&gt;&gt; &gt; Thread model: posix
&gt;&gt; &gt; gcc version 4.1.2 20080704 (Red Hat 4.1.2-44)
&gt;&gt; &gt; The second machine is SUSE Enterprise Server 11 with GCC 4.3.4:
&gt;&gt; &gt; Target: x86_64-suse-linux
&gt;&gt; &gt; Configured with: ../configure --prefix=/usr --infodir=/usr/share/info
&gt;&gt; --mandir=/usr/share/man --libdir=/usr/lib64 --libexecdir=/usr/lib64
&gt;&gt; --enable-languages=c,c++,objc,fortran,obj-c++,java,ada
&gt;&gt; --enable-checking=release --with-gxx-include-dir=/usr/include/c++/4.3
&gt;&gt; --enable-ssp --disable-libssp --with-bugurl=<a href="http://bugs.opensuse.org/--with-pkgversion">http://bugs.opensuse.org/--with-pkgversion</a>='SUSE Linux' --disable-libgcj --disable-libmudflap
&gt;&gt; --with-slibdir=/lib64 --with-system-zlib --enable-__cxa_atexit
&gt;&gt; --enable-libstdcxx-allocator=new --disable-libstdcxx-pch
&gt;&gt; --enable-version-specific-runtime-libs --program-suffix=-4.3
&gt;&gt; --enable-linux-futex --without-system-libunwind --with-cpu=generic
&gt;&gt; --build=x86_64-suse-linux
&gt;&gt; &gt; Thread model: posix
&gt;&gt; &gt; gcc version 4.3.4 [gcc-4_3-branch revision 152973] (SUSE Linux)
&gt;&gt; &gt;
&gt;&gt; &gt; p.s. 3: ldd Informantion
&gt;&gt; &gt; The first machine:
&gt;&gt; &gt; $ ldd my_hybrid_app
&gt;&gt; &gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x000000358d400000)
&gt;&gt; &gt;         libmpi.so.0 =&gt; /usr/local/openmpi/lib/libmpi.so.0
&gt;&gt; (0x00002af0d53a7000)
&gt;&gt; &gt;         libopen-rte.so.0 =&gt; /usr/local/openmpi/lib/libopen-rte.so.0
&gt;&gt; (0x00002af0d564a000)
&gt;&gt; &gt;         libopen-pal.so.0 =&gt; /usr/local/openmpi/lib/libopen-pal.so.0
&gt;&gt; (0x00002af0d5895000)
&gt;&gt; &gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x000000358d000000)
&gt;&gt; &gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x000000358f000000)
&gt;&gt; &gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x000000359a600000)
&gt;&gt; &gt;         libgomp.so.1 =&gt; /usr/lib64/libgomp.so.1 (0x00002af0d5b07000)
&gt;&gt; &gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x000000358d800000)
&gt;&gt; &gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x000000358cc00000)
&gt;&gt; &gt;         /lib64/ld-linux-x86-64.so.2 (0x000000358c800000)
&gt;&gt; &gt;         librt.so.1 =&gt; /lib64/librt.so.1 (0x000000358dc00000)
&gt;&gt; &gt; The second machine:
&gt;&gt; &gt; $ ldd my_hybrid_app
&gt;&gt; &gt;         linux-vdso.so.1 =&gt;  (0x00007fff3eb5f000)
&gt;&gt; &gt;         libmpi.so.0 =&gt; /root/opt/openmpi/lib/libmpi.so.0
&gt;&gt; (0x00007f68627a1000)
&gt;&gt; &gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00007f686254b000)
&gt;&gt; &gt;         libopen-rte.so.0 =&gt; /root/opt/openmpi/lib/libopen-rte.so.0
&gt;&gt; (0x00007f68622fc000)
&gt;&gt; &gt;         libopen-pal.so.0 =&gt; /root/opt/openmpi/lib/libopen-pal.so.0
&gt;&gt; (0x00007f68620a5000)
&gt;&gt; &gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007f6861ea1000)
&gt;&gt; &gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00007f6861c89000)
&gt;&gt; &gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007f6861a86000)
&gt;&gt; &gt;         libgomp.so.1 =&gt; /usr/lib64/libgomp.so.1 (0x00007f686187d000)
&gt;&gt; &gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007f6861660000)
&gt;&gt; &gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00007f6861302000)
&gt;&gt; &gt;         /lib64/ld-linux-x86-64.so.2 (0x00007f6862a58000)
&gt;&gt; &gt;         librt.so.1 =&gt; /lib64/librt.so.1 (0x00007f68610f9000)
&gt;&gt; &gt; I installed openmpi-1.4.2 to a user directory /root/opt/openmpi and use
&gt;&gt; &quot;-L/root/opt/openmpi -Wl,-rpath,/root/opt/openmpi&quot; when linking.
&gt;&gt; &gt; --
&gt;&gt; &gt; Huiwei Lv
&gt;&gt; &gt; PhD. student at Institute of Computing Technology,
&gt;&gt; &gt; Beijing, China
&gt;&gt; &gt; <a href="http://asg.ict.ac.cn/lhw">http://asg.ict.ac.cn/lhw</a>
&gt;
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17600/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17601.php">devendra rai: "Re: [OMPI users] Visual debugging on the cluster"</a>
<li><strong>Previous message:</strong> <a href="17599.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>In reply to:</strong> <a href="17599.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17612.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>Reply:</strong> <a href="17612.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
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
