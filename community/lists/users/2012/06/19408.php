<?
$subject_val = "Re: [OMPI users] mpicc, mpif90, ... not created during installation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 08:20:26 2012" -->
<!-- isoreceived="20120601122026" -->
<!-- sent="Fri, 1 Jun 2012 08:20:20 -0400" -->
<!-- isosent="20120601122020" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc, mpif90, ... not created during installation" -->
<!-- id="C6E2523F-805C-46B6-ADAA-160E0E425053_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAKf_S2JockMgQOhhW9zDT954t7yCTvR7Aw+akYL6WA4OZD_TSw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpicc, mpif90, ... not created during installation<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 08:20:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19409.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Previous message:</strong> <a href="19407.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19405.php">denis cohen: "[OMPI users] mpicc, mpif90, ... not created during installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19409.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Reply:</strong> <a href="19409.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Reply:</strong> <a href="19410.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You need to pass the following option to configure: 
<br>
--with-devel-headers --enable-binaries 
<br>
<p>I don't know exactly why the default is not to build them anymore, this is a bit confusing. 
<br>
<p>Aurelien
<br>
<p><p>Le 1 juin 2012 &#224; 04:16, denis cohen a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to install openmpi-1.6 using the Intel compilers.
</span><br>
<span class="quotelev1">&gt; Looks like everything went fine but there was no mpicc mpif90, mpic++,
</span><br>
<span class="quotelev1">&gt; ....  created during the installation process.
</span><br>
<span class="quotelev1">&gt; I made links to opal-wrapper (and also orterun for mpirun) but then
</span><br>
<span class="quotelev1">&gt; when trying to compile the examples/hello_c.c I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/openmpi-1.6/bin/mpicc hello_c.c
</span><br>
<span class="quotelev1">&gt; Cannot open configuration file
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/openmpi-1.6/share/openmpi/mpicc-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; Error parsing data file mpicc: Not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Denis
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
--
* Dr. Aur&#233;lien Bouteiller
* Researcher at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 309b
* Knoxville, TN 37996
* 865 974 9375

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19408/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19409.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Previous message:</strong> <a href="19407.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19405.php">denis cohen: "[OMPI users] mpicc, mpif90, ... not created during installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19409.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Reply:</strong> <a href="19409.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Reply:</strong> <a href="19410.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
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
