<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 22:05:39 2006" -->
<!-- isoreceived="20060411020539" -->
<!-- sent="Mon, 10 Apr 2006 22:05:31 -0400" -->
<!-- isosent="20060411020531" -->
<!-- name="Aniruddha Shet" -->
<!-- email="shet_at_[hidden]" -->
<!-- subject="[OMPI users] Error while loading shared libraries" -->
<!-- id="002201c65d0c$6b1f4540$2402a8c0_at_Aniruddha" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Aniruddha Shet (<em>shet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-10 22:05:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1012.php">Lee D. Peterson: "[OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Previous message:</strong> <a href="1010.php">Audet, Martin: "[OMPI users] Incorrect behavior for attributes attached to MPI_COMM_SELF."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1030.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Maybe reply:</strong> <a href="1030.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Maybe reply:</strong> <a href="1049.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Maybe reply:</strong> <a href="1053.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have built OpenMPI using ifort and icc Intel compilers 
<br>
with --enable-static --disable-shared options. I compile my job using 
<br>
OpenMPI wrapper compilers, additionally with -static option. When I run the 
<br>
job, I get the error 'orted:error while loading shared libraries: 
<br>
libcprts.so.5: cannot open shared object file: No such file or directory'. I 
<br>
also have the path of Intel compiler libraries in LD_LIBRARY_PATH. Please 
<br>
find attached a tar file having config.log and ompi_info output.
<br>
<p>Thanks,
<br>
Aniruddha
<br>
----------------------------------------------------------------------------------
<br>
Aniruddha Shet | Project webpage: <a href="http://forge-fre.ornl.gov/molar/index.html">http://forge-fre.ornl.gov/molar/index.html</a>
<br>
Graduate Research Associate | Project webpage: www.cs.unm.edu/~fastos
<br>
Dept. of Comp. Sci. &amp; Engg | Personal webpage: www.cse.ohio-state.edu/~shet
<br>
The Ohio State University | Office: DL 474
<br>
2015 Neil Avenue | Phone: +1 (614) 292 7036
<br>
Columbus OH 43210-1277 | Cell: +1 (614) 446 1630
<br>
----------------------------------------------------------------------------------
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1011/ompi_output.tar.gz">ompi_output.tar.gz</a>
</ul>
<!-- attachment="ompi_output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1012.php">Lee D. Peterson: "[OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Previous message:</strong> <a href="1010.php">Audet, Martin: "[OMPI users] Incorrect behavior for attributes attached to MPI_COMM_SELF."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1030.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Maybe reply:</strong> <a href="1030.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Maybe reply:</strong> <a href="1049.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Maybe reply:</strong> <a href="1053.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
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
