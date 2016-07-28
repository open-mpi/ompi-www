<?
$subject_val = "Re: [OMPI users] Error when build openmpi on Mac Pro";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 14 05:31:35 2013" -->
<!-- isoreceived="20130614093135" -->
<!-- sent="Fri, 14 Jun 2013 10:31:27 +0100" -->
<!-- isosent="20130614093127" -->
<!-- name="Reem Alraddadi" -->
<!-- email="raba500_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when build openmpi on Mac Pro" -->
<!-- id="CANKsntE446FK97NzBaYk=HATjYOCHwRcyK3oP7gKtE3dA4+iCg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51BA35DC.907_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Reem Alraddadi (<em>raba500_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-14 05:31:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22092.php">Ralph Castain: "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>Previous message:</strong> <a href="22090.php">Zehan Cui: "[OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>In reply to:</strong> <a href="22089.php">Gus Correa: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22093.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Reply:</strong> <a href="22093.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi  all,
<br>
Jeff -- I am not sure want do you mean by STL but currently I am using
<br>
mpich-3.0.4 with gcc and I don't have any problem. Is there a way to know
<br>
if C++ still works on Mac or not? I am sure that on Mac I use C++ but i
<br>
haven't try to use it before.
<br>
<p>Gus-- I tried to use CXX=g++ but the configure step fail. since gcc has C
<br>
compiler I just switch to gcc.
<br>
<p>Thanks,
<br>
Reem
<br>
<p><p><p>On 13 June 2013 22:13, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 06/13/2013 05:02 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like you might have a busted C++ compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Why not use CXX=g++?
</span><br>
<span class="quotelev1">&gt; Would this be the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ export CXX=gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Can you compile any non-MPI C++ programs that use the STL?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 12, 2013, at 6:58 AM, Reem Alraddadi&lt;raba500_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to build openmpi-1.6.1 on Mac os x version 10.7.5. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configuration process goes without any error. However, when I did &quot;make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all&quot; I got an error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::allocator&lt;std::pair&lt;**unsigned int const, unsigned int&gt;  &gt;  &gt;*)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constin Stats.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[9]: *** [otfaux] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[8]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[7]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[6]: *** [all] Error 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you can see the whole make file in attachement. In configure step I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ export F77=gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ export FFLAGS='-m64'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ export FC=gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ export FCFLAGS='-m64'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ export CC=gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ export CXX=gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $export ARCHFLAGS=&quot;-arch x86_64&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ~/Desktop/openmpi-1.6.1/**configure --prefix=/Users/reemalraddadi/**openmpi-install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2&gt;&amp;1 |tee c.txt  --enable-gfortran -with-gnu-ld  -o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am pretty sure that I use my Mac is 64-bit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ file /usr/lib/libffi.dylib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/libffi.dylib: Mach-O universal binary with 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; architectures/usr/lib/libffi.**dylib (for architecture x86_64):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Mach-O 64-bit dynamically linked shared library x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/libffi.dylib (for architecture i386):    Mach-O dynamically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linked shared library i386
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone has an idea where the wrong is?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;make output.txt&gt;___________________**____________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22091/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22092.php">Ralph Castain: "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>Previous message:</strong> <a href="22090.php">Zehan Cui: "[OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>In reply to:</strong> <a href="22089.php">Gus Correa: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22093.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Reply:</strong> <a href="22093.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
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
