<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 20 12:49:38 2007" -->
<!-- isoreceived="20070620164938" -->
<!-- sent="Wed, 20 Jun 2007 09:49:16 -0700 (PDT)" -->
<!-- isosent="20070620164916" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error -- libtool unsupported hardcode properties" -->
<!-- id="Pine.GSO.4.64.0706200947240.6869_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46794AC4.3070702_at_open-mpi.org" -->
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
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-20 12:49:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3518.php">Jeff Pummill: "[OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>Previous message:</strong> <a href="3516.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>In reply to:</strong> <a href="3515.php">Andrew Friedley: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why not edit libtool to see what it is doing (it's just a script)
<br>
- you will get a lot of output:
<br>
<p>Add a &quot;set -x&quot; as the second line and stand well back :-)
<br>
<p>#! /bin/sh
<br>
set -x
<br>
<p>Mostyn
<br>
<p>On Wed, 20 Jun 2007, Andrew Friedley wrote:
<br>
<p><span class="quotelev1">&gt; I'm not seeing anything particularly relevant in the libtool
</span><br>
<span class="quotelev1">&gt; documentation.  I think this might be referring to hardcoding paths in
</span><br>
<span class="quotelev1">&gt; shared libraries?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using pathf90 for both FC and F77 does not change anything.  Should have
</span><br>
<span class="quotelev1">&gt; been more clear in my first email -- gcc 3.4.5 using pathf90 for FC
</span><br>
<span class="quotelev1">&gt; works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even more interesting -- I just tried configuring with --disable-mpi-f77
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f90 and still see the exact same error.  So I'm pretty
</span><br>
<span class="quotelev1">&gt; convinced this is not a fortran issue.  I've tried disabling debugging
</span><br>
<span class="quotelev1">&gt; and using -O0 as well, but still get the same error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there anywhere else I should be looking?  I have to admit, I'm
</span><br>
<span class="quotelev1">&gt; stumped here..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It could be; I didn't mention it because this is building ompi_info,
</span><br>
<span class="quotelev2">&gt;&gt; a C++ application that should have no fortran issues with it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But then again, who knows?  Maybe you're right :-) -- perhaps libtool
</span><br>
<span class="quotelev2">&gt;&gt; is just getting confused because you used g77 and pathf90 -- why not
</span><br>
<span class="quotelev2">&gt;&gt; use pathf90 for both FC and F77?  pathf90 is capable of compiling
</span><br>
<span class="quotelev2">&gt;&gt; both Fortran 77 and 90 applications.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 20, 2007, at 5:58 AM, Terry Frankcombe wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Isn't this another case of trying to use two different Fortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at the same time?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, 2007-06-19 at 20:04 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have not seen this before -- did you look in the libtool
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; documentation?  (&quot;See the libtool documentation for more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; information.&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 19, 2007, at 6:46 PM, Andrew Friedley wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm trying to build Open MPI v1.2.2 with gcc/g++/g77 3.4.4 and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pathf90 v2.4 on a linux system, and see this error when compiling
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_info:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /bin/sh ../../../libtool --tag=CXX --mode=link g++  -g -O2 -finline-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; functions -pthread  -export-dynamic   -o ompi_info components.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_info.o output.o param.o version.o ../../../ompi/libmpi.la -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libtool: link: unsupported hardcode properties
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libtool: link: See the libtool documentation for more information.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libtool: link: Fatal configuration error.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: *** [ompi_info] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory `/g/g21/afriedle/work/ompibuild/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi-1.2.2/ompi/tools/ompi_info'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Google didn't turn anything up.  Strange thing is, gcc 3.4.5 works
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; just fine on this system.  I'm using this to build:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export CC=gcc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export CXX=g++
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export F77=g77
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export FC=pathf90
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export CFLAGS=&quot;-g -O2&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export CXXFLAGS=&quot;-g -O2&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export FFLAGS=&quot;-fno-second-underscore -g -O2&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export FCFLAGS=&quot;-fno-second-underscore -g -O2&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export PREFIX=$ROOT/gnudbg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure --prefix=$PREFIX --enable-debug --enable-mpi-f77 --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; enable-mpi-f90 --with-openib=/usr
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've attached the config.log.. any ideas?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Andrew
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;config.log.bz2&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;mime-attachment.txt&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="3518.php">Jeff Pummill: "[OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>Previous message:</strong> <a href="3516.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>In reply to:</strong> <a href="3515.php">Andrew Friedley: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
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
