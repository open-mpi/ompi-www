<?
$subject_val = "[OMPI users] cross compiler make problem with mpi 1.2.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 09:26:06 2008" -->
<!-- isoreceived="20080410132606" -->
<!-- sent="Thu, 10 Apr 2008 09:25:58 -0400" -->
<!-- isosent="20080410132558" -->
<!-- name="Bailey, Eric" -->
<!-- email="ebailey_at_[hidden]" -->
<!-- subject="[OMPI users] cross compiler make problem with mpi 1.2.6" -->
<!-- id="5CDB6DEFA3B8074999B6F988BD512C4A642B27_at_CHM-EMAIL1.ad.mc.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] cross compiler make problem with mpi 1.2.6<br>
<strong>From:</strong> Bailey, Eric (<em>ebailey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-10 09:25:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5363.php">Swati Kher: "[OMPI users] configuring with --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="5361.php">Rolf Vandevaart: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5368.php">Brian W. Barrett: "Re: [OMPI users] cross compiler make problem with mpi 1.2.6"</a>
<li><strong>Reply:</strong> <a href="5368.php">Brian W. Barrett: "Re: [OMPI users] cross compiler make problem with mpi 1.2.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;
<br>
I found an archive email with the same basic error I am running into for
<br>
mpi 1.2.6, unfortunately other then the question and request for the
<br>
output, there was not an email response on how it was solved.
<br>
&nbsp;
<br>
the error
<br>
&nbsp;
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to
<br>
`lt_libltdlc_LTX_preloaded_symbols'
<br>
&nbsp;
<br>
Here is the email link for the 1.2.4 problem..
<br>
&nbsp;
<br>
<a href="http://www.open-mpi.org/community/lists/users/2007/10/4310.php">http://www.open-mpi.org/community/lists/users/2007/10/4310.php</a>
<br>
&nbsp;
<br>
The email is a response by Jeff Squyres to the originator Jorge Parra.
<br>
Can either of you help?
<br>
&nbsp;
<br>
here is my make output failure.. basically identical to the one reported
<br>
for mpi 1.2.4
<br>
&nbsp;
<br>
make[2]: Entering directory
<br>
`/tmp/MPI/openmpi-1.2.6-7448/opal/tools/wrappers'
<br>
/bin/sh ../../../libtool --tag=CC   --mode=link ppc74xx-linux-gcc  -O3
<br>
-DNDEBUG -finline-functions -fno-strict-aliasing -pthread
<br>
-export-dynamic   -o opal_wrapper opal_wrapper.o
<br>
../../../opal/libopen-pal.la -lnsl -lutil  -lm 
<br>
libtool: link: ppc74xx-linux-gcc -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -o .libs/opal_wrapper opal_wrapper.o
<br>
-Wl,--export-dynamic  ../../../opal/.libs/libopen-pal.so -ldl -lnsl
<br>
-lutil -lm -pthread -Wl,-rpath
<br>
-Wl,/home/MPI/openmpi-1.2.6-install-7448/lib
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to
<br>
`lt_libltdlc_LTX_preloaded_symbols'
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [opal_wrapper] Error 1
<br>
make[2]: Leaving directory
<br>
`/tmp/MPI/openmpi-1.2.6-7448/opal/tools/wrappers'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/tmp/MPI/openmpi-1.2.6-7448/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Any help is greatly appreciated.
<br>
&nbsp;
<br>
thanks,
<br>
Eric Bailey
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5362/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5363.php">Swati Kher: "[OMPI users] configuring with --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="5361.php">Rolf Vandevaart: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5368.php">Brian W. Barrett: "Re: [OMPI users] cross compiler make problem with mpi 1.2.6"</a>
<li><strong>Reply:</strong> <a href="5368.php">Brian W. Barrett: "Re: [OMPI users] cross compiler make problem with mpi 1.2.6"</a>
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
