<?
$subject_val = "Re: [OMPI users] libnuma issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 15:03:08 2009" -->
<!-- isoreceived="20090415190308" -->
<!-- sent="Wed, 15 Apr 2009 21:03:03 +0200" -->
<!-- isosent="20090415190303" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libnuma issue" -->
<!-- id="b87c422a0904151203l36640ct1a768984844e6bc8_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49E629DE.60307_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] libnuma issue<br>
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-15 15:03:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8939.php">Nysal Jan: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Previous message:</strong> <a href="8937.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
<li><strong>In reply to:</strong> <a href="8937.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8939.php">Nysal Jan: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Reply:</strong> <a href="8939.php">Nysal Jan: "Re: [OMPI users] libnuma issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 15, 2009 at 8:39 PM, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Francesco Pietra wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I used --with-libnuma=/usr since Prentice Bisbal's suggestion and it
</span><br>
<span class="quotelev2">&gt;&gt; worked. Unfortunately, I found no way to fix the failure in finding
</span><br>
<span class="quotelev2">&gt;&gt; libimf.so when compiling openmpi-1.3.1 with intels, as you have seen
</span><br>
<span class="quotelev2">&gt;&gt; in other e-mail from me. And gnu compilers (which work well with both
</span><br>
<span class="quotelev2">&gt;&gt; openmpi and the slower code of my application) are defeated by the
</span><br>
<span class="quotelev2">&gt;&gt; faster code of my application. With limited hardware resources, I must
</span><br>
<span class="quotelev2">&gt;&gt; rely on that 40% speeding up.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To fix the libimf.so problem you need to include the path to Intel's
</span><br>
<span class="quotelev1">&gt; libimf.so in your LD_LIBRARY_PATH environment variable. On my system, I
</span><br>
<span class="quotelev1">&gt; installed v11.074 of the Intel compilers in /usr/local/intel, so my
</span><br>
<span class="quotelev1">&gt; libimf.so file is located here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/intel/Compiler/11.0/074/lib/intel64/libimf.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I just add that to my LD_LIBRARY_PATH:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/intel/Compiler/11.0/074/lib/intel64:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH
</span><br>
<p>Just a clarification: With my system I use the latest intels version
<br>
10, 10.1.2.024, and mkl 10.1.2.024 because it proved difficult to make
<br>
a debian package with version 11. At
<br>
<p>echo $LD_LIBRARY_PATH
<br>
<p>/opt/intel/mkl/10.1.2.024/lib/em64t:/opt/intel/cce/10.1.022/lib:opt/intel/fce/10.1.022/lib:/usr/local/lib
<br>
<p>(that /lib contains libimf.so)
<br>
<p>That results from sourcing in my .bashrc:
<br>
<p>. /opt/intel/fce/10.1.022/bin/ifortvars.sh
<br>
. /opt/intel/cce/10.1.022/bin/iccvars.sh
<br>
<p>&nbsp;Did you suppress that sourcing before exporting the LD_EXPORT_PATH to
<br>
the library at issue? Having so much turned around the proble, it is
<br>
not unlikely that I am messing myself.
<br>
<p>thanks
<br>
francesco
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I can run whatever programs need libimf.so without any problems. In
</span><br>
<span class="quotelev1">&gt; your case, you'll want to that before your make command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's exactly what I use to compile OpenMPI with the Intel Compilers:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=/usr/local/intel/Compiler/11.0/074/bin/intel64:$PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/intel/Compiler/11.0/074/lib/intel64:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../configure CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; --prefix=/usr/local/openmpi-1.2.8/intel-11/x86_64 --disable-ipv6
</span><br>
<span class="quotelev1">&gt; --with-sge --with-openib --enable-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Prentice
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8939.php">Nysal Jan: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Previous message:</strong> <a href="8937.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
<li><strong>In reply to:</strong> <a href="8937.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8939.php">Nysal Jan: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Reply:</strong> <a href="8939.php">Nysal Jan: "Re: [OMPI users] libnuma issue"</a>
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
