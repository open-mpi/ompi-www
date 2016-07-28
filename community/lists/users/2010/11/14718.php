<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  Creating 64-bit objects?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 08:38:59 2010" -->
<!-- isoreceived="20101110133859" -->
<!-- sent="Wed, 10 Nov 2010 06:38:35 -0700" -->
<!-- isosent="20101110133835" -->
<!-- name="Price, Brian M (N-KCI)" -->
<!-- email="brian.m.price_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  Creating 64-bit objects?" -->
<!-- id="07E77CF9C426584F8126A762FD1AFEA414BC72968B_at_HDXMSPA.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimEePGRh20ArGa4F37CdNi_DicycdxNQ2bfOBSw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  Creating 64-bit objects?<br>
<strong>From:</strong> Price, Brian M (N-KCI) (<em>brian.m.price_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-10 08:38:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14719.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  Creating 64-bit objects?"</a>
<li><strong>Previous message:</strong> <a href="14717.php">Grzegorz Maj: "[OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>In reply to:</strong> <a href="14716.php">Nysal Jan: "Re: [OMPI users] Creating 64-bit objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14731.php">Nysal Jan: "Re: [OMPI users] EXTERNAL: Re: Creating 64-bit objects?"</a>
<li><strong>Reply:</strong> <a href="14731.php">Nysal Jan: "Re: [OMPI users] EXTERNAL: Re: Creating 64-bit objects?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Nysal.
<br>
<p>The only problem I'm having now is connecting a libtool version (e.g. 2.2.8) with an OpenMPI version.  I'm sorry if it's a silly question, but can you tell me in which version of OpenMPI this problem will go away?
<br>
<p>Thanks, again.
<br>
<p>Brian
<br>
<p><p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Nysal Jan
<br>
Sent: Wednesday, November 10, 2010 12:19 AM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] Creating 64-bit objects?
<br>
<p>Hi Brian,
<br>
This problem was first reported by Paul H. Hargrove in the developer mailing list. It is a bug in libtool and has been fixed in the latest release (2.2.8). More details are available here - <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8606.php">http://www.open-mpi.org/community/lists/devel/2010/10/8606.php</a>
<br>
<p>Regards
<br>
--Nysal
<br>
On Wed, Nov 10, 2010 at 1:04 AM, Price, Brian M (N-KCI) &lt;brian.m.price_at_[hidden]&lt;mailto:brian.m.price_at_[hidden]&gt;&gt; wrote:
<br>
OpenMPI version: 1.3.3 &amp; 1.4.3
<br>
Platform: IBM P5
<br>
Issue:  I want OpenMPI to support some existing 64-bit FORTRAN software, but I can't seem to get 64-bit objects from OpenMPI without some modification to the Makefile in ompi/mpi/f90.
<br>
I can configure, build, and install just fine with the following compilers:
<br>
<p>-          CC = xlC_r
<br>
<p>-          CXX = xlC_r
<br>
<p>-          F77 = xlf95_r
<br>
<p>-          FC = xlf95_r
<br>
But, this configuration produces 32-bit objects for all languages.
<br>
So, to produce 64-bit objects for all languages, I supply the following flags:
<br>
<p>-          CFLAGS = -q64
<br>
<p>-          CXXFLAGS = -q64
<br>
<p>-          FFLAGS = -q64
<br>
<p>-          FCFLAGS = -q64
<br>
This configuration results in the following error during the build (more specifically, link) phase:
<br>
<p>-          When creating libmpi_f90.la&lt;<a href="http://libmpi_f90.la">http://libmpi_f90.la</a>&gt; in ompi/mpi/f90
<br>
<p>-          COMMANDS:
<br>
<p>o   /bin/sh ../../../libtool  --mode=link xlf95_r -I../../../ompi/include -I../../../ompi/include -I. -I. -I../../../ompi/mpi/f90  -q64 -version-info 0:1:0  -export-dynamic  -o libmpi_f90.la&lt;<a href="http://libmpi_f90.la">http://libmpi_f90.la</a>&gt; -rpath &lt;prefix&gt;/lib mpi.lo mpi_sizeof.lo mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo mpi_wtime_f90.lo  ../../../ompi/libmpi.la&lt;<a href="http://libmpi.la">http://libmpi.la</a>&gt; -lnsl -lutil
<br>
<p>o   libtool: link: /usr/bin/ld -m elf64ppc -shared  .libs/mpi.o .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.lo  -L&lt;topdir&gt;/orte/.libs -L&lt;topdir&gt;/opal/.libs ../../../ompi/.libs/libmpi.so &lt;topdir&gt;/orte/.libs/libopen-rte.so &lt;topdir&gt;/opal/.libs/libopen-pal.so -ldl -lnsl -lutil  -q64  -soname libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.1
<br>
<p>-          OUTPUT:
<br>
/usr/bin/ld: unrecognized option '-q64'
<br>
/usr/bin/ld: use the --help option for usage information
<br>
make[4]: *** [libmpi_f90.la&lt;<a href="http://libmpi_f90.la">http://libmpi_f90.la</a>&gt;] Error 1
<br>
make[4]: Leaving directory `&lt;topdir&gt;/ompi/mpi/f90`
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[3]: Leaving directory `&lt;topdir&gt;/ompi/mpi/f90`
<br>
make[2]: *** [all] Error 2
<br>
make[2]: Leaving directory `&lt;topdir&gt;/ompi/mpi/f90`
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `&lt;topdir&gt;/ompi`
<br>
make: *** [all-recursive] Error 1
<br>
<p>The -q64 option, while valid for the xlf95_r compiler, is not a valid option for /usr/bin/ld.  So, I'm wondering why this option got passed to /usr/bin/ld.  After looking at &lt;topdir&gt;/ompi/mpi/f90/Makefile, I see that FCFLAGS shows up in link lines (&quot;libmpi_f90_la_LINK&quot; and &quot;FCLINK&quot;).  This direction seems to come from Makefile.in.
<br>
If I remove these FCFLAGS references from the Makefile, I am able to complete the build and install of OpenMPI, and it seems to correctly support my existing software.
<br>
So,  now for my question:
<br>
Should FCFLAGS show up on these links lines and, if so, how would I get 64-bit objects?
<br>
Thanks,
<br>
Brian Price
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14718/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14719.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  Creating 64-bit objects?"</a>
<li><strong>Previous message:</strong> <a href="14717.php">Grzegorz Maj: "[OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>In reply to:</strong> <a href="14716.php">Nysal Jan: "Re: [OMPI users] Creating 64-bit objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14731.php">Nysal Jan: "Re: [OMPI users] EXTERNAL: Re: Creating 64-bit objects?"</a>
<li><strong>Reply:</strong> <a href="14731.php">Nysal Jan: "Re: [OMPI users] EXTERNAL: Re: Creating 64-bit objects?"</a>
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
