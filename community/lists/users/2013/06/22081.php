<?
$subject_val = "[OMPI users] Error when build openmpi on Mac Pro";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 12 06:59:02 2013" -->
<!-- isoreceived="20130612105902" -->
<!-- sent="Wed, 12 Jun 2013 11:58:57 +0100" -->
<!-- isosent="20130612105857" -->
<!-- name="Reem Alraddadi" -->
<!-- email="raba500_at_[hidden]" -->
<!-- subject="[OMPI users] Error when build openmpi on Mac Pro" -->
<!-- id="CANKsntH2p6O1F__=eEXBRtgJDJ3=c9kGk2mbfPx0eUCaL+ppZA_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Error when build openmpi on Mac Pro<br>
<strong>From:</strong> Reem Alraddadi (<em>raba500_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-12 06:58:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22082.php">Mike Dubman: "Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem"</a>
<li><strong>Previous message:</strong> <a href="22080.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22088.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Reply:</strong> <a href="22088.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am trying to build openmpi-1.6.1 on Mac os x version 10.7.5. The
<br>
configuration process goes without any error. However, when I did &quot;make
<br>
all&quot; I got an error:
<br>
<p>std::allocator&lt;std::pair&lt;unsigned int const, unsigned int&gt; &gt; &gt;*) constin
<br>
Stats.o
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
<p>you can see the whole make file in attachement. In configure step I wrote
<br>
the following:
<br>
<p>&nbsp;$ export F77=gfortran
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
<p>$ ~/Desktop/openmpi-1.6.1/configure
<br>
--prefix=/Users/reemalraddadi/openmpi-install 2&gt;&amp;1 |tee c.txt
<br>
--enable-gfortran
<br>
-with-gnu-ld  -o
<br>
<p><p>I am pretty sure that I use my Mac is 64-bit :
<br>
<p>$ file /usr/lib/libffi.dylib
<br>
<p>/usr/lib/libffi.dylib: Mach-O universal binary with 2
<br>
architectures/usr/lib/libffi.dylib (for architecture x86_64):    Mach-O
<br>
64-bit dynamically linked shared library x86_64
<br>
/usr/lib/libffi.dylib (for architecture i386):    Mach-O dynamically linked
<br>
shared library i386
<br>
<p>Does anyone has an idea where the wrong is?
<br>
<p>Thanks,
<br>
<p>Reem
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22081/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22081/make_output.txt">make_output.txt</a>
</ul>
<!-- attachment="make_output.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22082.php">Mike Dubman: "Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem"</a>
<li><strong>Previous message:</strong> <a href="22080.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22088.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Reply:</strong> <a href="22088.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
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
