<?
$subject_val = "[OMPI users] enable-cuda with disable-dlopen";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  5 17:22:28 2014" -->
<!-- isoreceived="20140905212228" -->
<!-- sent="Fri, 5 Sep 2014 17:22:23 -0400" -->
<!-- isosent="20140905212223" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] enable-cuda with disable-dlopen" -->
<!-- id="8F4B48D5-EC27-477E-B468-BCC8DC7D0125_at_umich.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] enable-cuda with disable-dlopen<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-05 17:22:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25283.php">Rolf vandeVaart: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
<li><strong>Previous message:</strong> <a href="25281.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25283.php">Rolf vandeVaart: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
<li><strong>Reply:</strong> <a href="25283.php">Rolf vandeVaart: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We found with 1.8.[1,2]  that is you compile with 
<br>
<p>--with-mxm
<br>
--with-cuda
<br>
--disable-dlopen
<br>
<p>OMPI will compile install and run, but if you run disabling mxm (say to debug something)
<br>
<p>mpirun --mca mtl ^mxm ./a.out
<br>
<p>You will get a notice saying that you cannot have enable cuda with disable dlopen, and the job dies.
<br>
<p>Is there any reason this shouldn't be a configure time error?  Rather than a runtime error?
<br>
<p>Note we have moved to --disable-mca-dso to get the result we want (less iops to the server hosting the install)
<br>
<p>Our full configure was:
<br>
<p>PREFIX=/home/software/rhel6/openmpi-1.8.2/gcc-4.8.0
<br>
MXM=/opt/mellanox/mxm
<br>
FCA=/opt/mellanox/fca
<br>
KNEM=/opt/knem-1.1.1.90mlnx
<br>
CUDA=/home/software/rhel6/cuda/5.5/cuda
<br>
COMPILERS='CC=gcc CXX=g++ FC=gfortran'
<br>
./configure \
<br>
--prefix=$PREFIX \
<br>
--mandir=${PREFIX}/man \
<br>
--disable-dlopen \
<br>
--enable-shared \
<br>
--enable-java   \
<br>
--enable-mpi-java \
<br>
--with-cuda=$CUDA \
<br>
--with-hwloc=internal \
<br>
--with-verbs \
<br>
--with-psm   \
<br>
--with-tm=/usr/local/torque \
<br>
--with-fca=$FCA \
<br>
--with-mxm=$MXM \
<br>
--with-knem=$KNEM \
<br>
--with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre' \
<br>
&nbsp;&nbsp;&nbsp;$COMPILERS
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25282/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25283.php">Rolf vandeVaart: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
<li><strong>Previous message:</strong> <a href="25281.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25283.php">Rolf vandeVaart: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
<li><strong>Reply:</strong> <a href="25283.php">Rolf vandeVaart: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
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
