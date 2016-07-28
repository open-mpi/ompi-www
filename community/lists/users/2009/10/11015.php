<?
$subject_val = "[OMPI users] Fortran Library Problem using openMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 07:44:43 2009" -->
<!-- isoreceived="20091030114443" -->
<!-- sent="Fri, 30 Oct 2009 12:45:07 +0100" -->
<!-- isosent="20091030114507" -->
<!-- name="Georg A. Reichstein" -->
<!-- email="reichstein_at_[hidden]" -->
<!-- subject="[OMPI users] Fortran Library Problem using openMPI" -->
<!-- id="D49F4D3BCDB3460AA6F2C204044FD298_at_ila.unistuttgart.de" -->
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
<strong>Subject:</strong> [OMPI users] Fortran Library Problem using openMPI<br>
<strong>From:</strong> Georg A. Reichstein (<em>reichstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 07:45:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11016.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Previous message:</strong> <a href="11014.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11016.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Maybe reply:</strong> <a href="11016.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Maybe reply:</strong> <a href="11018.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>&nbsp;
<br>
<p>I&#146;m trying to compile a Fortran file. I did not code it myself and am not
<br>
familiar with it&#146;s detailed workings &#150; I&#146;m interested in the program it will
<br>
result in after compiling. 
<br>
<p>Along with the file I also received a command line.
<br>
<p>My OS is openSuse 11.1. As I need openMPI and the Intel compiler is
<br>
recommended I downloaded both and installed them. I &#150; hopefully &#150; configured
<br>
openMPI in the right way. When I run the command I get the following result
<br>
(&lt;file&gt;.f is the name of the Fortran code that I got):
<br>
<p>&nbsp;
<br>
<p># mpif77 -O3 -ip -pad -xW -o &lt;file&gt; &lt;file&gt;.f
<br>
<p>ld: skipping incompatible /usr/local/lib/libmpi_f77.so when searching for
<br>
-lmpi_f77
<br>
<p>ld: skipping incompatible /usr/local/lib/libmpi_f77.so when searching for
<br>
-lmpi_f77
<br>
<p>ld: cannot find -lmpi_f77
<br>
<p>&nbsp;
<br>
<p>Obviously there is an issue with the library lmpi_f77. The file
<br>
/usr/local/lib/libmpi_f77.so exists &#150; I just do not know how to check it and
<br>
find out why it is labelled &#147;incompatible&#148;. 
<br>
<p>I have attached all logs from ./configure, make all and make install as
<br>
mentioned on the openMPI website. They are compressed in a single folder. 
<br>
<p>I very much appreciate your help! Please feel free to contact me about
<br>
further details where needed.
<br>
<p>Thanks
<br>
<p>Georg
<br>
<p>&nbsp;
<br>
<p>PS
<br>
<p>I also tried to find help in a few forums on the net &#150; but without success.
<br>
<p>________________________________________________
<br>
<p>&nbsp;
<br>
<p>Dipl.-Ing. Georg A. Reichstein, SM
<br>
<p>&nbsp;
<br>
<p>Institut f&#252;r Luftfahrtantriebe (ILA)
<br>
<p>Universit&#228;t Stuttgart
<br>
<p>&nbsp;
<br>
<p>Pfaffenwaldring 6
<br>
<p>D-70569 Stuttgart
<br>
<p>&nbsp;
<br>
<p>Tel:  +49 (0) 711 685 - 69396
<br>
<p>Fax: +49 (0) 711 685 - 63505
<br>
<p>reichstein_at_[hidden]
<br>
<p>www.ila.uni-stuttgart.de
<br>
<p>&nbsp;
<br>
<p><p><p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11015/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11015/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11016.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Previous message:</strong> <a href="11014.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11016.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Maybe reply:</strong> <a href="11016.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Maybe reply:</strong> <a href="11018.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
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
