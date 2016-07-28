<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 11:25:42 2006" -->
<!-- isoreceived="20060524152542" -->
<!-- sent="Wed, 24 May 2006 11:24:57 -0400" -->
<!-- isosent="20060524152457" -->
<!-- name="Terry Reeves" -->
<!-- email="reeves.2_at_[hidden]" -->
<!-- subject="[OMPI users] Fortran support not installing" -->
<!-- id="AD4F715C-49B8-418F-9E2D-A9B072BDF56B_at_osu.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Terry Reeves (<em>reeves.2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-24 11:24:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1268.php">СоїЖ: "[OMPI users] .bashrc or .bash_profile"</a>
<li><strong>Previous message:</strong> <a href="1266.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1269.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Maybe reply:</strong> <a href="1269.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Reply:</strong> <a href="1270.php">Michael Kluskens: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Maybe reply:</strong> <a href="1272.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Maybe reply:</strong> <a href="1276.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Maybe reply:</strong> <a href="1293.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Maybe reply:</strong> <a href="1301.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Maybe reply:</strong> <a href="1304.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, everyone.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have g95 fortran installed. I'm told it works. I'm doing this for  
<br>
some grad students, I am not myself a programmer or a unix expert but  
<br>
I know a bit more than the basics.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is a Mac OS X dual G5 processor xserve running OS X Server  
<br>
10.4.6. I have xcode 2.2 installed which gives me gcc 3.3 and 4.01  
<br>
installed.
<br>
<p>I do this
<br>
<p>./configure FC=g95
<br>
make all
<br>
make install
<br>
<p>then mpif90 yields this
<br>
------------------------------------------------------------------------ 
<br>
<pre>
--
Unfortunately, this installation of Open MPI was not compiled with
Fortran 90 support.  As such, the mpif90 compiler is non-functional.
------------------------------------------------------------------------ 
--
btw if I try this
./configure F77=g95 FC=g95 it bombs in the configure stage but as far  
as I know f77 support is not needed but perhaps its useful info.
I have included config.log, config.out, make-install.out, make.out,  
and ompi_config.h per instructions on the web site.
I have also tried this with gfortran with the same results.
Any help you can give would be appreciated
&#239;&#191;&#188;
--------------------------------------------------------
Terry Reeves 2-1013 - reeves.2_at_[hidden]
Computing Services
Office of Information Technology
The Ohio State University
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1267/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1267/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1267/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1268.php">СоїЖ: "[OMPI users] .bashrc or .bash_profile"</a>
<li><strong>Previous message:</strong> <a href="1266.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1269.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Maybe reply:</strong> <a href="1269.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Reply:</strong> <a href="1270.php">Michael Kluskens: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Maybe reply:</strong> <a href="1272.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Maybe reply:</strong> <a href="1276.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Maybe reply:</strong> <a href="1293.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Maybe reply:</strong> <a href="1301.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Maybe reply:</strong> <a href="1304.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
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
