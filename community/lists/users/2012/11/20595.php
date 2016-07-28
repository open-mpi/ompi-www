<?
$subject_val = "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 00:29:40 2012" -->
<!-- isoreceived="20121101042940" -->
<!-- sent="Wed, 31 Oct 2012 23:28:55 -0500" -->
<!-- isosent="20121101042855" -->
<!-- name="Omar Andr&#233;s Zapata Mesa" -->
<!-- email="andresete.chaos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tester for cygwin openmpi-1.6.3 package" -->
<!-- id="CAOB9epqkjC4_1=ekPhaihGxhBH2fzwi2MiwA_s9aMaKmNJ6kRg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5091C383.9010008_at_gmail.com" -->
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
<strong>From:</strong> Omar Andr&#233;s Zapata Mesa (<em>andresete.chaos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 00:28:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20596.php">George Bosilca: "Re: [OMPI users] [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<li><strong>Previous message:</strong> <a href="20594.php">George Bosilca: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="../../2012/10/20593.php">marco atzeri: "[OMPI users] tester for cygwin  openmpi-1.6.3 package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20601.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Reply:</strong> <a href="20601.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi marco.
<br>
it was tested and it is working very good,
<br>
<p>good initiative
<br>
thanks!
<br>
<p><p><p>On Wed, Oct 31, 2012 at 7:34 PM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
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
<span class="quotelev1">&gt; <a href="http://matzeri.altervista.org/**cygwin-1.7/openmpi/<http://matzeri.altervista.org/cygwin-1.7/openmpi/">http://matzeri.altervista.org/**cygwin-1.7/openmpi/<http://matzeri.altervista.org/cygwin-1.7/openmpi/</a>&gt;
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
<span class="quotelev1">&gt;          LDFLAGS=&quot;-Wl,--export-all-**symbols -no-undefined&quot;  \
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
<span class="quotelev1">&gt;                 --enable-contrib-no-build=vt,**libompitrace \
</span><br>
<span class="quotelev1">&gt;                 --enable-mca-nobuild= memory_mallopt, paffinity,
</span><br>
<span class="quotelev1">&gt; installdirs-windows, timer-windows, shmem-sysv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Only additional patch
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/**ompi/changeset/27539<https://svn.open-mpi.org/trac/ompi/changeset/27539">https://svn.open-mpi.org/trac/**ompi/changeset/27539<https://svn.open-mpi.org/trac/ompi/changeset/27539</a>&gt;
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
<p><p><p><pre>
-- 
Omar Andres Zapata Mesa
Fundamental Interaction Phenomenology Gruop (Gfif)
Head Developer
<a href="http://gfif.udea.edu.co">http://gfif.udea.edu.co</a>
Gfif Developers (Gfif Dev)
Division of computer science
System Engineering Student
Universidad de Antioquia At Medellin - Colombia
Usuario Linux  #490962
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-20595/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20596.php">George Bosilca: "Re: [OMPI users] [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<li><strong>Previous message:</strong> <a href="20594.php">George Bosilca: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="../../2012/10/20593.php">marco atzeri: "[OMPI users] tester for cygwin  openmpi-1.6.3 package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20601.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Reply:</strong> <a href="20601.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
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
