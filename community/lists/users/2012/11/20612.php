<?
$subject_val = "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 12:08:59 2012" -->
<!-- isoreceived="20121101160859" -->
<!-- sent="Thu, 1 Nov 2012 09:08:52 -0700" -->
<!-- isosent="20121101160852" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tester for cygwin openmpi-1.6.3 package" -->
<!-- id="58A3CFCC-4322-417B-9E59-CAF4E040284C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOB9epqkjC4_1=ekPhaihGxhBH2fzwi2MiwA_s9aMaKmNJ6kRg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] tester for cygwin openmpi-1.6.3 package<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 12:08:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20613.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Previous message:</strong> <a href="20611.php">Ralph Castain: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>In reply to:</strong> <a href="20606.php">Omar Andr&#233;s Zapata Mesa: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20613.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Reply:</strong> <a href="20613.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think we'd be interested in looking at possibly adding this to the code base. We still need to announce this (and will shortly), but our Windows maintainer has moved on to other pastures. So support for native Windows operations is ending with the 1.6 series, barring someone stepping up to fill the void.
<br>
<p>Having a cygwin alternative would let people at least continue to work on the Windows platform, albeit in a different mode. Is this something you are interested in pursuing?
<br>
<p><p>On Oct 31, 2012, at 9:28 PM, Omar Andr&#233;s Zapata Mesa &lt;andresete.chaos_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi marco.
</span><br>
<span class="quotelev1">&gt; it was tested and it is working very good,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; good initiative
</span><br>
<span class="quotelev1">&gt; thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Oct 31, 2012 at 7:34 PM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I built and packaged openmpi-1.6.3 for cygwin.
</span><br>
<span class="quotelev1">&gt; Before deploying it as an official package, I would
</span><br>
<span class="quotelev1">&gt; like feedback from testers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Source and binary here:
</span><br>
<span class="quotelev1">&gt; <a href="http://matzeri.altervista.org/cygwin-1.7/openmpi/">http://matzeri.altervista.org/cygwin-1.7/openmpi/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To install using cygwin setup program
</span><br>
<span class="quotelev1">&gt; setup.exe -X -O -s <a href="http://matzeri.altervista.org">http://matzeri.altervista.org</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Current configuration is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          LDFLAGS=&quot;-Wl,--export-all-symbols -no-undefined&quot;  \
</span><br>
<span class="quotelev1">&gt;                  --disable-mca-dso \
</span><br>
<span class="quotelev1">&gt;                 --without-udapl \
</span><br>
<span class="quotelev1">&gt;                 --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;                 --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;                 --without-cs-fs \
</span><br>
<span class="quotelev1">&gt;                 --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;                 --with-mpi-param_check=always \
</span><br>
<span class="quotelev1">&gt;                 --enable-contrib-no-build=vt,libompitrace \
</span><br>
<span class="quotelev1">&gt;                 --enable-mca-nobuild= memory_mallopt, paffinity, installdirs-windows, timer-windows, shmem-sysv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Only additional patch
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/27539">https://svn.open-mpi.org/trac/ompi/changeset/27539</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; C, C++ and Fortran pass basic tests
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ time mpirun -n 4 ./hello_f90.exe
</span><br>
<span class="quotelev1">&gt;  Hello, world, I am            0  of            4
</span><br>
<span class="quotelev1">&gt;  Hello, world, I am            2  of            4
</span><br>
<span class="quotelev1">&gt;  Hello, world, I am            1  of            4
</span><br>
<span class="quotelev1">&gt;  Hello, world, I am            3  of            4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; real    1m9.607s
</span><br>
<span class="quotelev1">&gt; user    0m1.542s
</span><br>
<span class="quotelev1">&gt; sys     0m2.135s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I guess there is a long delay/timeout on startup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Omar Andres Zapata Mesa
</span><br>
<span class="quotelev1">&gt; Fundamental Interaction Phenomenology Gruop (Gfif)
</span><br>
<span class="quotelev1">&gt; Head Developer 
</span><br>
<span class="quotelev1">&gt; <a href="http://gfif.udea.edu.co">http://gfif.udea.edu.co</a>
</span><br>
<span class="quotelev1">&gt; Gfif Developers (Gfif Dev)
</span><br>
<span class="quotelev1">&gt; Division of computer science 
</span><br>
<span class="quotelev1">&gt; System Engineering Student
</span><br>
<span class="quotelev1">&gt; Universidad de Antioquia At Medellin - Colombia
</span><br>
<span class="quotelev1">&gt; Usuario Linux  #490962
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20612/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20613.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Previous message:</strong> <a href="20611.php">Ralph Castain: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>In reply to:</strong> <a href="20606.php">Omar Andr&#233;s Zapata Mesa: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20613.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Reply:</strong> <a href="20613.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
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
