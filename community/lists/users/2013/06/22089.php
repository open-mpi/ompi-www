<?
$subject_val = "Re: [OMPI users] Error when build openmpi on Mac Pro";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 13 17:13:04 2013" -->
<!-- isoreceived="20130613211304" -->
<!-- sent="Thu, 13 Jun 2013 17:13:00 -0400" -->
<!-- isosent="20130613211300" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when build openmpi on Mac Pro" -->
<!-- id="51BA35DC.907_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F68451E_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-13 17:13:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22090.php">Zehan Cui: "[OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>Previous message:</strong> <a href="22088.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>In reply to:</strong> <a href="22088.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22091.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Reply:</strong> <a href="22091.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>On 06/13/2013 05:02 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; It looks like you might have a busted C++ compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Why not use CXX=g++?
<br>
Would this be the problem?
<br>
<p><span class="quotelev2"> &gt;&gt; $ export CXX=gcc
</span><br>
<p>Gus Correa
<br>
<p><p><span class="quotelev1">&gt; Can you compile any non-MPI C++ programs that use the STL?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 12, 2013, at 6:58 AM, Reem Alraddadi&lt;raba500_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to build openmpi-1.6.1 on Mac os x version 10.7.5. The configuration process goes without any error. However, when I did &quot;make all&quot; I got an error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; std::allocator&lt;std::pair&lt;unsigned int const, unsigned int&gt;  &gt;  &gt;*) constin Stats.o
</span><br>
<span class="quotelev2">&gt;&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[9]: *** [otfaux] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[7]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[6]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you can see the whole make file in attachement. In configure step I wrote the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ export F77=gfortran
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ export FFLAGS='-m64'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ export FC=gfortran
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ export FCFLAGS='-m64'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ export CC=gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ export CXX=gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $export ARCHFLAGS=&quot;-arch x86_64&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ~/Desktop/openmpi-1.6.1/configure --prefix=/Users/reemalraddadi/openmpi-install 2&gt;&amp;1 |tee c.txt  --enable-gfortran -with-gnu-ld  -o
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am pretty sure that I use my Mac is 64-bit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ file /usr/lib/libffi.dylib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/libffi.dylib: Mach-O universal binary with 2 architectures/usr/lib/libffi.dylib (for architecture x86_64):    Mach-O 64-bit dynamically linked shared library x86_64
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/libffi.dylib (for architecture i386):    Mach-O dynamically linked shared library i386
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone has an idea where the wrong is?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Reem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;make output.txt&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22090.php">Zehan Cui: "[OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>Previous message:</strong> <a href="22088.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>In reply to:</strong> <a href="22088.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22091.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Reply:</strong> <a href="22091.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
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
