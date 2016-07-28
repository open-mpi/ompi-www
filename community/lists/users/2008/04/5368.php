<?
$subject_val = "Re: [OMPI users] cross compiler make problem with mpi 1.2.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 12:15:25 2008" -->
<!-- isoreceived="20080410161525" -->
<!-- sent="Thu, 10 Apr 2008 11:15:16 -0500 (CDT)" -->
<!-- isosent="20080410161516" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cross compiler make problem with mpi 1.2.6" -->
<!-- id="Pine.LNX.4.64.0804101113590.27491_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5CDB6DEFA3B8074999B6F988BD512C4A642B27_at_CHM-EMAIL1.ad.mc.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] cross compiler make problem with mpi 1.2.6<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-10 12:15:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5369.php">Swati Kher: "Re: [OMPI users] configuring with --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="5367.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
<li><strong>In reply to:</strong> <a href="5362.php">Bailey, Eric: "[OMPI users] cross compiler make problem with mpi 1.2.6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, as a quick hack, you can try adding --disable-dlopen to the 
<br>
configure line.  It will disable the building of individual components 
<br>
(instead linking them into the main shared libraries).  It means that you 
<br>
have to be slightly more careful about which components you build, but in 
<br>
practice usually makes things a little bit easier, especially when cross 
<br>
compiling (less things to move around).
<br>
<p>Brian
<br>
<p>On Thu, 10 Apr 2008, Bailey, Eric wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found an archive email with the same basic error I am running into for
</span><br>
<span class="quotelev1">&gt; mpi 1.2.6, unfortunately other then the question and request for the
</span><br>
<span class="quotelev1">&gt; output, there was not an email response on how it was solved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `lt_libltdlc_LTX_preloaded_symbols'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the email link for the 1.2.4 problem..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/10/4310.php">http://www.open-mpi.org/community/lists/users/2007/10/4310.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The email is a response by Jeff Squyres to the originator Jorge Parra.
</span><br>
<span class="quotelev1">&gt; Can either of you help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is my make output failure.. basically identical to the one reported
</span><br>
<span class="quotelev1">&gt; for mpi 1.2.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/tmp/MPI/openmpi-1.2.6-7448/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CC   --mode=link ppc74xx-linux-gcc  -O3
</span><br>
<span class="quotelev1">&gt; -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt; -export-dynamic   -o opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev1">&gt; ../../../opal/libopen-pal.la -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: ppc74xx-linux-gcc -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread -o .libs/opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev1">&gt; -Wl,--export-dynamic  ../../../opal/.libs/libopen-pal.so -ldl -lnsl
</span><br>
<span class="quotelev1">&gt; -lutil -lm -pthread -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/home/MPI/openmpi-1.2.6-install-7448/lib
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `lt_libltdlc_LTX_preloaded_symbols'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/tmp/MPI/openmpi-1.2.6-7448/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/tmp/MPI/openmpi-1.2.6-7448/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; Eric Bailey
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5369.php">Swati Kher: "Re: [OMPI users] configuring with --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="5367.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
<li><strong>In reply to:</strong> <a href="5362.php">Bailey, Eric: "[OMPI users] cross compiler make problem with mpi 1.2.6"</a>
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
