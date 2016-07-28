<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 19:20:28 2006" -->
<!-- isoreceived="20060629232028" -->
<!-- sent="Thu, 29 Jun 2006 16:23:57 -0700" -->
<!-- isosent="20060629232357" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] Testing one-sided message passing with 1.1" -->
<!-- id="44A4610D.2070900_at_reachone.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9D79_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-29 19:23:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1511.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="1509.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>In reply to:</strong> <a href="1501.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1520.php">Brian Barrett: "Re: [OMPI users] Testing one-sided message passing with 1.1"</a>
<li><strong>Reply:</strong> <a href="1520.php">Brian Barrett: "Re: [OMPI users] Testing one-sided message passing with 1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am testing the one-sided message passing (mpi_put, mpi_get) that is 
<br>
now supported in the 1.1 release.  It seems to work OK for some simple 
<br>
test codes, but when I run my big application, it fails.  This 
<br>
application is a large weather model that runs operationally on the SGI 
<br>
Origin 3000, using the native one-sided message passing that has been 
<br>
supported on that system for many years.  At least on that architecture, 
<br>
the code always runs correctly for processor numbers up to 480.  On the 
<br>
O3K a requirement for the one-sided communication to work correctly is 
<br>
to use 'mpi_win_create' to define the RMA 'windows' in symmetric 
<br>
locations on all processors, i.e. the same 'place' in memory on each 
<br>
processor.  This can be  done with static memory, i.e. , in common; or 
<br>
on the 'symmetric heap', which is defined via environment variables.  In 
<br>
my application the latter method is used.  I define several of these 
<br>
'windows' on the symmetric heap, each with a unique handle.
<br>
<p>Before I spend my time trying to diagnose this problem further, I need 
<br>
as much information about the OpenMPI one-sided implementation as 
<br>
available.  Do you have a similar requirement or criteria for symmetric 
<br>
memory for the RMA windows?  Are there runtime parameters that I should 
<br>
be using that are unique to one-sided message passing with OpenMPI?  Any 
<br>
other information will certainly be appreciated.
<br>
<p>I have attached the logfiles and ompi output for my installation.  I am 
<br>
running with Fedora 4 linux on a 2-processor (each dual-core) Opteron 
<br>
system, using the Intel 9.1.033 F90 compiler.
<br>
<p>Tom R.
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1510/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1511.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="1509.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>In reply to:</strong> <a href="1501.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1520.php">Brian Barrett: "Re: [OMPI users] Testing one-sided message passing with 1.1"</a>
<li><strong>Reply:</strong> <a href="1520.php">Brian Barrett: "Re: [OMPI users] Testing one-sided message passing with 1.1"</a>
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
