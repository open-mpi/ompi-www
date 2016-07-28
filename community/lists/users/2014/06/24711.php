<?
$subject_val = "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 26 16:44:33 2014" -->
<!-- isoreceived="20140626204433" -->
<!-- sent="Thu, 26 Jun 2014 22:44:31 +0200" -->
<!-- isosent="20140626204431" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC" -->
<!-- id="53AC862F.4010400_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABnrQwT0t_xoVa6HoZt4K-4JK9LuvpS4gDJmNGbKZGLpequn5w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-26 16:44:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24712.php">Luigi Santangelo: "[OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>Previous message:</strong> <a href="24710.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="24709.php">Adam Jundt: "[OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's what I used to build 1.8.1 with Intel 13.5 recently:
<br>
<p>module load compiler/13.5.192
<br>
export PATH=/usr/linux-k1om-4.7/bin/:$PATH
<br>
../configure --prefix=/path/to/your/ompi/install \
<br>
&nbsp;&nbsp;CC=&quot;icc -mmic&quot; CXX=&quot;icpc -mmic&quot; \
<br>
&nbsp;&nbsp;--build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \
<br>
&nbsp;&nbsp;&nbsp;AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib \
<br>
&nbsp;&nbsp;&nbsp;LD=x86_64-k1om-linux-ld \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default --disable-io-romio \
<br>
&nbsp;&nbsp;&nbsp;--disable-vt --disable-mpi-fortran \
<br>
&nbsp;&nbsp;&nbsp;--enable-mca-no-build=btl-usnic,btl-openib,common-verbs
<br>
make
<br>
make install
<br>
<p>Problem with this is that you get a mpicc that must run on MIC, while
<br>
you want a host-mpicc that generates MIC code.
<br>
<p>$ ssh mic0
<br>
$ &lt;put your icc compiler stuff in the environment&gt;
<br>
$ /path/to/your/ompi/install/bin/mpicc --show
<br>
icc -mmic -I/home/goglin/mic/openmpi-1.7.4/build-mic/install/include \
<br>
&nbsp;&nbsp;-pthread -Wl,-rpath -Wl,/home/goglin/mic/openmpi-1.7.4/build-mic/install/lib \
<br>
&nbsp;&nbsp;-Wl,--enable-new-dtags -L/home/goglin/mic/openmpi-1.7.4/build-mic/install/lib \
<br>
&nbsp;&nbsp;-lmpi
<br>
<p>Now use the above line as mpicc on the host to build for the MIC. But I
<br>
had to append this:
<br>
<p>&nbsp;&nbsp;-Wl,-rpath -Wl,/opt/cluster/intel/composer_xe_2013.5.192/compiler/lib/mic/ \
<br>
&nbsp;&nbsp;-L/opt/cluster/intel/composer_xe_2013.5.192/compiler/lib/mic/
<br>
<p>I hoped WRAPPER_* configure variables would help solving all this, but I
<br>
couldn't make them work.
<br>
<p>Brice
<br>
<p><p><p><p>Le 26/06/2014 22:31, Adam Jundt a &#233;crit :
<br>
<span class="quotelev1">&gt; I'm currently working towards setting up a single node system with a
</span><br>
<span class="quotelev1">&gt; xeon phi card. We have intel compilers (v.13.1.3) installed and I was
</span><br>
<span class="quotelev1">&gt; able to get the standard openmpi (v1.6.5) to install.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right now, I am just hoping to run codes natively on the xeon phi.
</span><br>
<span class="quotelev1">&gt; When trying to compile a hello world code via &quot;mpicc -mmic hello.c&quot; it
</span><br>
<span class="quotelev1">&gt; results in the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; x86_64-k1om-linux-ld: skipping incompatible
</span><br>
<span class="quotelev1">&gt; /ssd/apps/openmpi-intel/lib/libmpi.so when searching for -lmpi
</span><br>
<span class="quotelev1">&gt; x86_64-k1om-linux-ld: cannot find -lmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing this is due to not having compiled openmpi with the
</span><br>
<span class="quotelev1">&gt; &quot;-mmic&quot; option. Although, attempting to configure openmpi with -mmic
</span><br>
<span class="quotelev1">&gt; will fail instantly as the configure attempts to test basic codes with
</span><br>
<span class="quotelev1">&gt; &quot;-mmic&quot; on the host processor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In a couple of threads it was mentioned that people have been able to
</span><br>
<span class="quotelev1">&gt; get this to work, but not much detail on how they built openmpi to
</span><br>
<span class="quotelev1">&gt; achieve this. Any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Adam
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24709.php">http://www.open-mpi.org/community/lists/users/2014/06/24709.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24712.php">Luigi Santangelo: "[OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>Previous message:</strong> <a href="24710.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="24709.php">Adam Jundt: "[OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
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
