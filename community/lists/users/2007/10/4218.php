<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 15 17:36:41 2007" -->
<!-- isoreceived="20071015213641" -->
<!-- sent="Mon, 15 Oct 2007 15:36:35 -0600 (MDT)" -->
<!-- isosent="20071015213635" -->
<!-- name="Jorge Parra" -->
<!-- email="jeparra_at_[hidden]" -->
<!-- subject="[OMPI users] 1.2.4 cross-compilation problem" -->
<!-- id="Pine.LNX.4.64.0710151503200.5505_at_rhsvr03.ece.unm.edu" -->
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
<strong>From:</strong> Jorge Parra (<em>jeparra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-15 17:36:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4219.php">Oleg Morajko: "Re: [OMPI users] Tool communication"</a>
<li><strong>Previous message:</strong> <a href="4217.php">Christian Bell: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4310.php">Jeff Squyres: "Re: [OMPI users] 1.2.4 cross-compilation problem"</a>
<li><strong>Reply:</strong> <a href="4310.php">Jeff Squyres: "Re: [OMPI users] 1.2.4 cross-compilation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to cross-compile Open-mpi 1.2.4 for an embedded system. 
<br>
The development system is a i686 Linux and the target system is a ppc 
<br>
405 based. When trying &quot;make all&quot; I get the following error:
<br>
<p>/bin/sh ../../../libtool --tag=CC   --mode=link 
<br>
/opt/powerpc-405-linux/bin/powerpc-405-linux-gnu-gcc  -O3 -DNDEBUG 
<br>
-finline-functions -fno-strict-aliasing -pthread  -export-dynamic   -o 
<br>
opal_wrapper opal_wrapper.o ../../../opal/libopen-pal.la -lnsl -lutil  -lm
<br>
libtool: link: /opt/powerpc-405-linux/bin/powerpc-405-linux-gnu-gcc -O3 
<br>
-DNDEBUG -finline-functions -fno-strict-aliasing -pthread -o opal_wrapper 
<br>
opal_wrapper.o -Wl,--export-dynamic  ../../../opal/.libs/libopen-pal.a 
<br>
-ldl -lnsl -lutil -lm -pthread
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0xbe): In 
<br>
function `lt_dlinit':
<br>
: undefined reference to `lt_libltdlc_LTX_preloaded_symbols'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0xc2): In 
<br>
function `lt_dlinit':
<br>
: undefined reference to `lt_libltdlc_LTX_preloaded_symbols'
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [opal_wrapper] Error 1
<br>
make[2]: Leaving directory `/opt/openmpi-1.2.4/opal/tools/wrappers'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/opt/openmpi-1.2.4/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Older versions of opem-mpi have been succesfully compiled in the same 
<br>
development system. I am attaching to this email all the output and the 
<br>
configuration information.
<br>
<p>Any help will greatly appreciated.
<br>
<p>Thank you,
<br>
<p>Jorge
<br>

<br><hr>
<ul>
<li>APPLICATION/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4218/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4219.php">Oleg Morajko: "Re: [OMPI users] Tool communication"</a>
<li><strong>Previous message:</strong> <a href="4217.php">Christian Bell: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4310.php">Jeff Squyres: "Re: [OMPI users] 1.2.4 cross-compilation problem"</a>
<li><strong>Reply:</strong> <a href="4310.php">Jeff Squyres: "Re: [OMPI users] 1.2.4 cross-compilation problem"</a>
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
