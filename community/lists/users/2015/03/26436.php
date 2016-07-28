<?
$subject_val = "[OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  6 09:31:07 2015" -->
<!-- isoreceived="20150306143107" -->
<!-- sent="Fri, 6 Mar 2015 09:31:05 -0500" -->
<!-- isosent="20150306143105" -->
<!-- name="Irena Johnson" -->
<!-- email="ijohnson_at_[hidden]" -->
<!-- subject="[OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015" -->
<!-- id="CADTPv6Ew8+2f6oZr23CrNm7H=-f2w04pja+Q5JfMVkaQBeivfQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015<br>
<strong>From:</strong> Irena Johnson (<em>ijohnson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-06 09:31:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26437.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>Previous message:</strong> <a href="26435.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26437.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>Reply:</strong> <a href="26437.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>Reply:</strong> <a href="26442.php">Aurélien Bouteiller: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to build BLACS for openmpi-1.8.4  and intel/2015.u1
<br>
<p>The compilation was successful, but I am getting the following error when
<br>
building the examples:
<br>
<p><p>( cd TESTING ; make  )
<br>
make[1]: Entering directory `/l/sunfire28/ijohnson/BLACS/TESTING'
<br>
mpif77   -o /pfs/tmp/ijohnson/BLACS/TESTING/EXE/xFbtest_MPI-LINUX-0
<br>
blacstest.o btprim_MPI.o tools.o
<br>
/pfs/tmp/ijohnson/BLACS/LIB/blacsF77init_MPI-LINUX-0.a
<br>
/pfs/tmp/ijohnson/BLACS/LIB/blacs_MPI-LINUX-0.a
<br>
/pfs/tmp/ijohnson/BLACS/LIB/blacsF77init_MPI-LINUX-0.a
<br>
blacstest.o: In function `MAIN__':
<br>
blacstest.f:(.text+0x8e): undefined reference to `blacs_pinfo_'
<br>
blacstest.o: In function `runtests_':
<br>
blacstest.f:(.text+0x1236): undefined reference to `blacs_pinfo_'
<br>
blacstest.o: In function `auxtest_':
<br>
blacstest.f:(.text+0x7cd9): undefined reference to `blacs_pinfo_'
<br>
blacstest.f:(.text+0xb28b): undefined reference to `blacs_pinfo_'
<br>
/pfs/tmp/ijohnson/BLACS/LIB/blacsF77init_MPI-LINUX-0.a(Cblacs_pinfo.o): In
<br>
function `Cblacs_pinfo':
<br>
blacs_pinfo_.c:(.text+0x73): undefined reference to `bi_f77_get_constants__'
<br>
blacs_pinfo_.c:(.text+0xaa): undefined reference to `bi_f77_init__'
<br>
make[1]: *** [/pfs/tmp/ijohnson/BLACS/TESTING/EXE/xFbtest_MPI-LINUX-0]
<br>
Error 1
<br>
make[1]: Leaving directory `/l/sunfire28/ijohnson/BLACS/TESTING'
<br>
make: *** [tester] Error 2
<br>
<p><p>I have attached Bmake.inc and log.make
<br>
<p>Please advise. Thank you,
<br>
<p><pre>
-- 
Irena


</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26436/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26436/Bmake.inc">Bmake.inc</a>
</ul>
<!-- attachment="Bmake.inc" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26436/log.make">log.make</a>
</ul>
<!-- attachment="log.make" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26437.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>Previous message:</strong> <a href="26435.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26437.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>Reply:</strong> <a href="26437.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>Reply:</strong> <a href="26442.php">Aurélien Bouteiller: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
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
