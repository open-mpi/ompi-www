<?
$subject_val = "Re: [OMPI users] Error when build openmpi on Mac Pro";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 14 09:41:07 2013" -->
<!-- isoreceived="20130614134107" -->
<!-- sent="Fri, 14 Jun 2013 13:41:01 +0000" -->
<!-- isosent="20130614134101" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when build openmpi on Mac Pro" -->
<!-- id="E2E6925B-291E-47BA-A92D-B1A73FEF2117_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANKsntE446FK97NzBaYk=HATjYOCHwRcyK3oP7gKtE3dA4+iCg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when build openmpi on Mac Pro<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-14 09:41:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22094.php">Zehan Cui: "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>Previous message:</strong> <a href="22092.php">Ralph Castain: "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>In reply to:</strong> <a href="22091.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22195.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Reply:</strong> <a href="22195.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus picked up the issue properly - you're setting CXX to gcc; it needs to be g++.
<br>
<p>If configure fails with g++, then you have a busted C++ compiler (that's a guess; I haven't seen the output from failed configure when uu specify CXX=g++). You can disable OMPI's use of C++ with. --disable-MPI-CXX on the configure command line.
<br>
<p>My phone auto corrected MPI and CXX to be caps in the option name;
<br>
They should be lower case.
<br>
<p>Sent from my phone. No type good.
<br>
<p>On Jun 14, 2013, at 5:31 AM, &quot;Reem Alraddadi&quot; &lt;raba500_at_[hidden]&lt;mailto:raba500_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hi  all,
<br>
Jeff -- I am not sure want do you mean by STL but currently I am using mpich-3.0.4 with gcc and I don't have any problem. Is there a way to know if C++ still works on Mac or not? I am sure that on Mac I use C++ but i haven't try to use it before.
<br>
<p>Gus-- I tried to use CXX=g++ but the configure step fail. since gcc has C compiler I just switch to gcc.
<br>
<p>Thanks,
<br>
Reem
<br>
<p><p><p>On 13 June 2013 22:13, Gus Correa &lt;gus_at_[hidden]&lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
<br>
Hi all
<br>
<p><p>On 06/13/2013 05:02 PM, Jeff Squyres (jsquyres) wrote:
<br>
It looks like you might have a busted C++ compiler.
<br>
<p><p>Why not use CXX=g++?
<br>
Would this be the problem?
<br>
<p><span class="quotelev2">&gt;&gt; $ export CXX=gcc
</span><br>
<p>Gus Correa
<br>
<p><p><p>Can you compile any non-MPI C++ programs that use the STL?
<br>
<p><p>On Jun 12, 2013, at 6:58 AM, Reem Alraddadi&lt;raba500_at_[hidden]&lt;mailto:raba500_at_[hidden]&gt;&gt;  wrote:
<br>
<p>Dear all,
<br>
<p>I am trying to build openmpi-1.6.1 on Mac os x version 10.7.5. The configuration process goes without any error. However, when I did &quot;make all&quot; I got an error:
<br>
<p>std::allocator&lt;std::pair&lt;unsigned int const, unsigned int&gt;  &gt;  &gt;*) constin Stats.o
<br>
ld: symbol(s) not found for architecture x86_64
<br>
collect2: ld returned 1 exit status
<br>
make[9]: *** [otfaux] Error 1
<br>
make[8]: *** [all-recursive] Error 1
<br>
make[7]: *** [all-recursive] Error 1
<br>
make[6]: *** [all] Error 2
<br>
make[5]: *** [all-recursive] Error 1
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[3]: *** [all] Error 2
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>you can see the whole make file in attachement. In configure step I wrote the following:
<br>
<p>$ export F77=gfortran
<br>
<p>$ export FFLAGS='-m64'
<br>
<p>$ export FC=gfortran
<br>
<p>$ export FCFLAGS='-m64'
<br>
<p>$ export CC=gcc
<br>
<p>$ export CXX=gcc
<br>
<p>$export ARCHFLAGS=&quot;-arch x86_64&quot;
<br>
<p>$ ~/Desktop/openmpi-1.6.1/configure --prefix=/Users/reemalraddadi/openmpi-install 2&gt;&amp;1 |tee c.txt  --enable-gfortran -with-gnu-ld  -o
<br>
<p><p><p>I am pretty sure that I use my Mac is 64-bit :
<br>
<p>$ file /usr/lib/libffi.dylib
<br>
<p>/usr/lib/libffi.dylib: Mach-O universal binary with 2 architectures/usr/lib/libffi.dylib (for architecture x86_64):    Mach-O 64-bit dynamically linked shared library x86_64
<br>
/usr/lib/libffi.dylib (for architecture i386):    Mach-O dynamically linked shared library i386
<br>
<p>Does anyone has an idea where the wrong is?
<br>
<p><p>Thanks,
<br>
Reem
<br>
<p>&lt;make output.txt&gt;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22093/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22094.php">Zehan Cui: "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>Previous message:</strong> <a href="22092.php">Ralph Castain: "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>In reply to:</strong> <a href="22091.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22195.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Reply:</strong> <a href="22195.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
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
