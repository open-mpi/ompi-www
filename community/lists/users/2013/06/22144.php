<?
$subject_val = "Re: [OMPI users] error with openmpi on snow leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 19 15:05:32 2013" -->
<!-- isoreceived="20130619190532" -->
<!-- sent="Wed, 19 Jun 2013 12:05:32 -0700" -->
<!-- isosent="20130619190532" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error with openmpi on snow leopard" -->
<!-- id="3B0DF3A0-2230-4BD1-B040-9A7EACD7DC38_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BLU0-SMTP4601849A6B38B2D7934A1E1CB8D0_at_phx.gbl" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-19 15:05:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22145.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>Previous message:</strong> <a href="22143.php">Lorenzo Don&#224;: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>In reply to:</strong> <a href="22143.php">Lorenzo Don&#224;: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22146.php">Lorenzo Donà: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>Reply:</strong> <a href="22146.php">Lorenzo Donà: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
what prefix did you give configure? is your path and ld_library_path set to that location?
<br>
<p>On Jun 19, 2013, at 11:59 AM, Lorenzo Don&#224; &lt;lorechimica91_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have it I used gfortran after configuration I typed ake ckech and I passed all the tests
</span><br>
<span class="quotelev1">&gt; but when I try to use mpif90 or others mpi compilers I find always
</span><br>
<span class="quotelev1">&gt; Cannot open configuration file /Users/lorenzodona/Desktop/openmpi-1.7.1/share/openmpi/opal_wrapper-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; Error parsing data file opal_wrapper: Not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Il giorno 19/giu/2013, alle ore 20.45, Jeff Squyres (jsquyres) ha scritto:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Have a look at the README file; it contains a lot of information about building Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In short, for F90 support, you want to have a Fortran 90 compiler (E.g., gfortran) in your PATH when you run configure.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 19, 2013, at 2:41 PM, Lorenzo Don&#224; &lt;lorechimica91_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure it with gnu 4.6 without configurations options
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when I compile another program this i the message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can you help me to configure correctly openmpi?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Il giorno 19/giu/2013, alle ore 19.02, Ralph Castain ha scritto:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How did you configure it?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 19, 2013, at 9:26 AM, Lorenzo Don&#224; &lt;lorechimica91_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Inizio messaggio inoltrato:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Da: Lorenzo Don&#224; &lt;lorechimica91_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data: 19 giugno 2013 18.14.26 GMT+02.00
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; A: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Oggetto: error with openmpi on snow leopard
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi I compiled openmpi v1.7.1 and previous but I always found this message:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cannot open configuration file /Users/lorenzodona/Desktop/openmpi-1.7.1/share/openmpi/opal_wrapper-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Error parsing data file opal_wrapper: Not found
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Please can you help me?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thans for your patience dearly
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Lorenzo.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22144/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22145.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>Previous message:</strong> <a href="22143.php">Lorenzo Don&#224;: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>In reply to:</strong> <a href="22143.php">Lorenzo Don&#224;: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22146.php">Lorenzo Donà: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>Reply:</strong> <a href="22146.php">Lorenzo Donà: "Re: [OMPI users] error with openmpi on snow leopard"</a>
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
