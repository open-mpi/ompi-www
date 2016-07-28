<?
$subject_val = "Re: [OMPI users] mpicc, mpif90, ... not created during installation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 09:18:22 2012" -->
<!-- isoreceived="20120601131822" -->
<!-- sent="Fri, 1 Jun 2012 15:18:17 +0200" -->
<!-- isosent="20120601131817" -->
<!-- name="denis cohen" -->
<!-- email="Denis.cohen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc, mpif90, ... not created during installation" -->
<!-- id="CAKf_S2+bbq9UHLpEOALOv2vh9hE4+9njcRr2zg2gCEc58M1cFQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C6E2523F-805C-46B6-ADAA-160E0E425053_at_eecs.utk.edu" -->
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
<strong>From:</strong> denis cohen (<em>Denis.cohen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 09:18:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19399.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Previous message:</strong> <a href="19397.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>In reply to:</strong> <a href="19397.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19399.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Aurelien.
<br>
This fixed it.
<br>
<p>Denis
<br>
<p><p>On Fri, Jun 1, 2012 at 2:20 PM, Aur&#233;lien Bouteiller
<br>
&lt;bouteill_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; You need to pass the following option to configure:
</span><br>
<span class="quotelev1">&gt; --with-devel-headers --enable-binaries
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know exactly why the default is not to build them anymore, this is a bit confusing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 1 juin 2012 &#224; 04:16, denis cohen a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to install openmpi-1.6 using the Intel compilers.
</span><br>
<span class="quotelev2">&gt;&gt; Looks like everything went fine but there was no mpicc mpif90, mpic++,
</span><br>
<span class="quotelev2">&gt;&gt; .... &#160;created during the installation process.
</span><br>
<span class="quotelev2">&gt;&gt; I made links to opal-wrapper (and also orterun for mpirun) but then
</span><br>
<span class="quotelev2">&gt;&gt; when trying to compile the examples/hello_c.c I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/openmpi-1.6/bin/mpicc hello_c.c
</span><br>
<span class="quotelev2">&gt;&gt; Cannot open configuration file
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/openmpi-1.6/share/openmpi/mpicc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; Error parsing data file mpicc: Not found
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Denis
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev1">&gt; * Researcher at Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; * University of Tennessee
</span><br>
<span class="quotelev1">&gt; * 1122 Volunteer Boulevard, suite 309b
</span><br>
<span class="quotelev1">&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt; * 865 974 9375
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19399.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Previous message:</strong> <a href="19397.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>In reply to:</strong> <a href="19397.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19399.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
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
