<?
$subject_val = "Re: [OMPI users] Problem with using MPI in a Python extension";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 14:20:59 2015" -->
<!-- isoreceived="20150917182059" -->
<!-- sent="Thu, 17 Sep 2015 20:20:55 +0200" -->
<!-- isosent="20150917182055" -->
<!-- name="Joel Hermanns" -->
<!-- email="joel.hermanns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with using MPI in a Python extension" -->
<!-- id="75862B73-AE6D-4C58-8AE8-4AA95E097C15_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAbhqc7BsNCLSiWZn-BAOVzOrmUjsk981maVMUS7h_AfU9GXUg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with using MPI in a Python extension<br>
<strong>From:</strong> Joel Hermanns (<em>joel.hermanns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-17 14:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27614.php">Lisandro Dalcin: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Previous message:</strong> <a href="27612.php">Shang Li: "[OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>In reply to:</strong> <a href="27609.php">Nick Papior: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27615.php">Nick Papior: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Reply:</strong> <a href="27615.php">Nick Papior: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; FYI, you can also see what they have done in mpi4py to by-pass this problem. 
</span><br>
<p>Could you elaborate on this or give me some pointer to other resources?
<br>
<p><span class="quotelev1">&gt; I would actually highly recommend you to use mpi4py rather than implementing this from scratch your-self ;)
</span><br>
<p>I fully agree that it is a bad idea to implement something like mpi4py from scratch. However, I don&#146;t plan to do this and 
<br>
I&#146;m not sure if mpi4py will work for us. This problem initially came up when 
<br>
working on a thin layer around some parallel netcdf functionality to request and compare data from NetCDF (especially CDF-5) files. 
<br>
It is written in C++ due to performance reasons. Additionally, I&#146;m not sure if there is any up-to-date python library for parallel netcdf that could help here.
<br>
As you can see, we don&#146;t need full blown MPI features in python, and so I&#146;m not really sure if mpi4py can help us.
<br>
<p>Please correct me if I&#146;m wrong!
<br>
<p>Best,
<br>
Joel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27614.php">Lisandro Dalcin: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Previous message:</strong> <a href="27612.php">Shang Li: "[OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>In reply to:</strong> <a href="27609.php">Nick Papior: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27615.php">Nick Papior: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Reply:</strong> <a href="27615.php">Nick Papior: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
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
