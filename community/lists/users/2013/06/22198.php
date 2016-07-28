<?
$subject_val = "Re: [OMPI users] Error when build openmpi on Mac Pro";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 23 12:18:05 2013" -->
<!-- isoreceived="20130623161805" -->
<!-- sent="Sun, 23 Jun 2013 17:18:01 +0100" -->
<!-- isosent="20130623161801" -->
<!-- name="Reem Alraddadi" -->
<!-- email="raba500_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when build openmpi on Mac Pro" -->
<!-- id="CANKsntH=ox_5qKWdsFFqtHSGpJy9-Xu8TKJMbPwHz-2TLLm8wA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="62B33087-FFEC-4C90-B5E0-10E953093239_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2013-06-23 12:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22199.php">dani: "Re: [OMPI users] errors trying to run a simple mpi task"</a>
<li><strong>Previous message:</strong> <a href="22197.php">Gustavo Correa: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>In reply to:</strong> <a href="22197.php">Gustavo Correa: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22200.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
I did that and I just used this time &quot;make&quot; rather than &quot;make all&quot; but
<br>
still this error about &quot;all&quot; I have. I am wondering if this error is vital
<br>
or I can just ignore it.
<br>
<p>Thanks,
<br>
Reem
<br>
<p><p>On 23 June 2013 16:30, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Reem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can do a &quot;make distclean&quot; in your build directory first,
</span><br>
<span class="quotelev1">&gt; to get rid of any residual of previous builds.
</span><br>
<span class="quotelev1">&gt; Or just untar the OMPI  tarball again and start fresh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then use the regular sequence of &quot;configure ...&quot;, &quot;make&quot;, &quot;make install&quot;,
</span><br>
<span class="quotelev1">&gt; to build Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 23, 2013, at 6:32 AM, Reem Alraddadi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I fixed the problem with CXX . Thanks, Now, I have only one problem:
</span><br>
<span class="quotelev2">&gt; &gt; ''
</span><br>
<span class="quotelev2">&gt; &gt; Making all in test
</span><br>
<span class="quotelev2">&gt; &gt; Making all in support
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev2">&gt; &gt; Making all in asm
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev2">&gt; &gt; Making all in class
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev2">&gt; &gt; Making all in threads
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev2">&gt; &gt; Making all in datatype
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev2">&gt; &gt; Making all in util
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Nothing to be done for `all-am'.
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Nothing to be done for `all-am'.
</span><br>
<span class="quotelev2">&gt; &gt; '''
</span><br>
<span class="quotelev2">&gt; &gt; I don't understand what's it 'all' mean here??
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any idea??
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Reem
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 14 June 2013 14:41, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Gus picked up the issue properly - you're setting CXX to gcc; it needs
</span><br>
<span class="quotelev1">&gt; to be g++.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If configure fails with g++, then you have a busted C++ compiler (that's
</span><br>
<span class="quotelev1">&gt; a guess; I haven't seen the output from failed configure when uu specify
</span><br>
<span class="quotelev1">&gt; CXX=g++). You can disable OMPI's use of C++ with. --disable-MPI-CXX on the
</span><br>
<span class="quotelev1">&gt; configure command line.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My phone auto corrected MPI and CXX to be caps in the option name;
</span><br>
<span class="quotelev2">&gt; &gt; They should be lower case.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 14, 2013, at 5:31 AM, &quot;Reem Alraddadi&quot; &lt;raba500_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi  all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff -- I am not sure want do you mean by STL but currently I am using
</span><br>
<span class="quotelev1">&gt; mpich-3.0.4 with gcc and I don't have any problem. Is there a way to know
</span><br>
<span class="quotelev1">&gt; if C++ still works on Mac or not? I am sure that on Mac I use C++ but i
</span><br>
<span class="quotelev1">&gt; haven't try to use it before.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gus-- I tried to use CXX=g++ but the configure step fail. since gcc has
</span><br>
<span class="quotelev1">&gt; C compiler I just switch to gcc.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reem
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 13 June 2013 22:13, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi all
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 06/13/2013 05:02 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It looks like you might have a busted C++ compiler.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Why not use CXX=g++?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Would this be the problem?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; $ export CXX=gcc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you compile any non-MPI C++ programs that use the STL?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 12, 2013, at 6:58 AM, Reem Alraddadi&lt;raba500_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am trying to build openmpi-1.6.1 on Mac os x version 10.7.5. The
</span><br>
<span class="quotelev1">&gt; configuration process goes without any error. However, when I did &quot;make
</span><br>
<span class="quotelev1">&gt; all&quot; I got an error:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; std::allocator&lt;std::pair&lt;unsigned int const, unsigned int&gt;  &gt;  &gt;*)
</span><br>
<span class="quotelev1">&gt; constin Stats.o
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev3">&gt; &gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[9]: *** [otfaux] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[8]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[7]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[6]: *** [all] Error 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you can see the whole make file in attachement. In configure step I
</span><br>
<span class="quotelev1">&gt; wrote the following:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ export F77=gfortran
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ export FFLAGS='-m64'
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ export FC=gfortran
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ export FCFLAGS='-m64'
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ export CC=gcc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ export CXX=gcc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $export ARCHFLAGS=&quot;-arch x86_64&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ ~/Desktop/openmpi-1.6.1/configure
</span><br>
<span class="quotelev1">&gt; --prefix=/Users/reemalraddadi/openmpi-install 2&gt;&amp;1 |tee c.txt
</span><br>
<span class="quotelev1">&gt;  --enable-gfortran -with-gnu-ld  -o
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am pretty sure that I use my Mac is 64-bit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ file /usr/lib/libffi.dylib
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /usr/lib/libffi.dylib: Mach-O universal binary with 2
</span><br>
<span class="quotelev1">&gt; architectures/usr/lib/libffi.dylib (for architecture x86_64):    Mach-O
</span><br>
<span class="quotelev1">&gt; 64-bit dynamically linked shared library x86_64
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /usr/lib/libffi.dylib (for architecture i386):    Mach-O dynamically
</span><br>
<span class="quotelev1">&gt; linked shared library i386
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Does anyone has an idea where the wrong is?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reem
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;make output.txt&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22198/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22199.php">dani: "Re: [OMPI users] errors trying to run a simple mpi task"</a>
<li><strong>Previous message:</strong> <a href="22197.php">Gustavo Correa: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>In reply to:</strong> <a href="22197.php">Gustavo Correa: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22200.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
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
