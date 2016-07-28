<?
$subject_val = "Re: [OMPI users] error with openmpi on snow leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 19 16:23:40 2013" -->
<!-- isoreceived="20130619202340" -->
<!-- sent="Wed, 19 Jun 2013 21:23:36 +0100" -->
<!-- isosent="20130619202336" -->
<!-- name="Reem Alraddadi" -->
<!-- email="raba500_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error with openmpi on snow leopard" -->
<!-- id="CANKsntEicGvRs7Vjn16Qgja1GDw611c2OGx7wLFXeKHr9y6YaQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BLU0-SMTP267F22A13FEE799EFF26D02CB8D0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] error with openmpi on snow leopard<br>
<strong>From:</strong> Reem Alraddadi (<em>raba500_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-19 16:23:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22154.php">Gus Correa: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>Previous message:</strong> <a href="22152.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22150.php">Lorenzo Don&#224;: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22155.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error with openmpi on snow leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Lorenzo,
<br>
<p>I think you should  export the following before doing configuration step:
<br>
<p>$ export F77=gfortran
<br>
<p>$ export FFLAGS='-m64'
<br>
<p>$ export FC=gfortran
<br>
<p>$ export FCFLAGS='-m64'
<br>
<p>Also include  --enable-gfortran  in the configure step line.
<br>
<p>Yours,
<br>
<p>Reem
<br>
<p><p><p>On 19 June 2013 21:11, Lorenzo Don&#224; &lt;lorechimica91_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I export the two paths like you told me but the error it is the same
</span><br>
<span class="quotelev1">&gt; Cannot open configuration file
</span><br>
<span class="quotelev1">&gt; /Users/lorenzodona/Desktop/openmpi-1.7.1/share/openmpi/opal_wrapper-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; Error parsing data file opal_wrapper: Not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when i type in bin:
</span><br>
<span class="quotelev1">&gt; MacBook-Pro-di-Lorenzo-Dona:bin lorenzodona$ mpif90
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev1">&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; but when i type:
</span><br>
<span class="quotelev1">&gt; MacBook-Pro-di-Lorenzo-Dona:bin lorenzodona$ ./mpif90
</span><br>
<span class="quotelev1">&gt; gfortran: fatal error: no input files
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; infact if i put a f.90 file after ./mpif90 it can compile it.
</span><br>
<span class="quotelev1">&gt; Thanks again with your patience with me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Il giorno 19/giu/2013, alle ore 21.37, Ralph Castain ha scritto:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you need to put your prefix at the beginning:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PATH=/Users/lorenzodona/Desktop/openmpi-1.7.1/bin:$PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/Users/lorenzodona/Desktop/openmpi-1.7.1/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then check that you have it correct by
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which mpif90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2013, at 12:31 PM, Lorenzo Don&#224; &lt;lorechimica91_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I export PATH=/usr/local/gfortran/bin:$PATH
</span><br>
<span class="quotelev1">&gt; i configured it in this way:
</span><br>
<span class="quotelev1">&gt; ./configure CC=gcc CXX=g++ F77=gfortran FC=gfortran
</span><br>
<span class="quotelev1">&gt; -prefix=/Users/lorenzodona/Desktop/openmpi-1.7.1/bin
</span><br>
<span class="quotelev1">&gt; but the problem is the same
</span><br>
<span class="quotelev1">&gt; after type make i type make check and I passed all the test.
</span><br>
<span class="quotelev1">&gt; when I try to compile a f.90 file with mpif90
</span><br>
<span class="quotelev1">&gt; typing:
</span><br>
<span class="quotelev1">&gt; mpif90 &lt;input.f90 i find an error
</span><br>
<span class="quotelev1">&gt; but when I type
</span><br>
<span class="quotelev1">&gt; ./mpif90 &lt;input.f90 it's work......
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Il giorno 19/giu/2013, alle ore 21.05, Ralph Castain ha scritto:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what prefix did you give configure? is your path and ld_library_path set
</span><br>
<span class="quotelev1">&gt; to that location?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2013, at 11:59 AM, Lorenzo Don&#224; &lt;lorechimica91_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have it I used gfortran after configuration I typed ake ckech and I
</span><br>
<span class="quotelev1">&gt; passed all the tests
</span><br>
<span class="quotelev1">&gt; but when I try to use mpif90 or others mpi compilers I find always
</span><br>
<span class="quotelev1">&gt; Cannot open configuration file
</span><br>
<span class="quotelev1">&gt; /Users/lorenzodona/Desktop/openmpi-1.7.1/share/openmpi/opal_wrapper-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; Error parsing data file opal_wrapper: Not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Il giorno 19/giu/2013, alle ore 20.45, Jeff Squyres (jsquyres) ha scritto:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have a look at the README file; it contains a lot of information about
</span><br>
<span class="quotelev1">&gt; building Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short, for F90 support, you want to have a Fortran 90 compiler (E.g.,
</span><br>
<span class="quotelev1">&gt; gfortran) in your PATH when you run configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2013, at 2:41 PM, Lorenzo Don&#224; &lt;lorechimica91_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure it with gnu 4.6 without configurations options
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when I compile another program this i the message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you help me to configure correctly openmpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Il giorno 19/giu/2013, alle ore 19.02, Ralph Castain ha scritto:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How did you configure it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2013, at 9:26 AM, Lorenzo Don&#224; &lt;lorechimica91_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Inizio messaggio inoltrato:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Da: Lorenzo Don&#224; &lt;lorechimica91_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Data: 19 giugno 2013 18.14.26 GMT+02.00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oggetto: error with openmpi on snow leopard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi I compiled openmpi v1.7.1 and previous but I always found this message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cannot open configuration file
</span><br>
<span class="quotelev1">&gt; /Users/lorenzodona/Desktop/openmpi-1.7.1/share/openmpi/opal_wrapper-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error parsing data file opal_wrapper: Not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please can you help me?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thans for your patience dearly
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lorenzo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22153/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22154.php">Gus Correa: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>Previous message:</strong> <a href="22152.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22150.php">Lorenzo Don&#224;: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22155.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error with openmpi on snow leopard"</a>
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
