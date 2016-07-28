<?
$subject_val = "Re: [OMPI users] trying to use personal copy of 1.7.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 10:52:23 2014" -->
<!-- isoreceived="20140312145223" -->
<!-- sent="Wed, 12 Mar 2014 10:52:22 -0400" -->
<!-- isosent="20140312145222" -->
<!-- name="Bennet Fauber" -->
<!-- email="bennet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trying to use personal copy of 1.7.4" -->
<!-- id="CAB2ovovPwPL+ST+HYnoT70x9gcG3V9q1pmaUcR9LeH2Sev7-Xg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CB4B3ECC-9DDB-479D-8FAE-934C7013FA90_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] trying to use personal copy of 1.7.4<br>
<strong>From:</strong> Bennet Fauber (<em>bennet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-12 10:52:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23824.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23822.php">Dave Goodell (dgoodell): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="23822.php">Dave Goodell (dgoodell): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23835.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Reply:</strong> <a href="23835.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My experience with Rmpi and OpenMPI is that it doesn't seem to do well
<br>
with the dlopen or dynamic loading.  I recently installed R 3.0.3, and
<br>
Rmpi, which failed when built against our standard OpenMPI but
<br>
succeeded using the following 'secret recipe'.  Perhaps there is
<br>
something here that will be helpful for you.
<br>
<p>###  Install openmpi 1.6.5
<br>
<p>export PREFIX=/scratch/support_flux/
<br>
bennet/local
<br>
COMPILERS='CC=gcc CXX=g++ FC=gfortran F77=gfortran'
<br>
CONFIGURE_FLAGS='--disable-dlopen --enable-static'
<br>
cd openmpi-1.6.5
<br>
./configure    --prefix=${PREFIX} \
<br>
&nbsp;&nbsp;&nbsp;--mandir=${PREFIX}/man \
<br>
&nbsp;&nbsp;&nbsp;--with-tm=/usr/local/torque \
<br>
&nbsp;&nbsp;&nbsp;--with-openib --with-psm \
<br>
&nbsp;&nbsp;&nbsp;--with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre' \
<br>
&nbsp;&nbsp;&nbsp;$CONFIGURE_FLAGS \
<br>
&nbsp;&nbsp;&nbsp;$COMPILERS
<br>
make
<br>
make check
<br>
make install
<br>
<p>### Install R 3.0.3
<br>
<p>wget <a href="http://cran.case.edu/src/base/R-3/R-3.0.3.tar.gz">http://cran.case.edu/src/base/R-3/R-3.0.3.tar.gz</a>
<br>
tar xzvf R-3.0.3.tar.gz
<br>
cd R-3.0.3
<br>
<p>export MPI_HOME=/scratch/support_
<br>
flux/bennet/local
<br>
export LD_LIBRARY_PATH=$MPI_HOME/lib:${LD_LIBRARY_PATH}
<br>
export LD_LIBRARY_PATH=$MPI_HOME/openmpi:${LD_LIBRARY_PATH}
<br>
export PATH=${PATH}:${MPI_HOME}/bin
<br>
export LDFLAGS='-Wl,-O1'
<br>
export R_PAPERSIZE=letter
<br>
export R_INST=${PREFIX}
<br>
export FFLAGS='-O3 -mtune=native'
<br>
export CFLAGS='-O3 -mtune=native'
<br>
./configure --prefix=${R_INST} --mandir=${R_INST}/man
<br>
--enable-R-shlib --without-x
<br>
make
<br>
make check
<br>
make install
<br>
wget <a href="http://www.stats.uwo.ca/faculty/yu/Rmpi/download/linux/Rmpi_0.6-3.tar.gz">http://www.stats.uwo.ca/faculty/yu/Rmpi/download/linux/Rmpi_0.6-3.tar.gz</a>
<br>
R CMD INSTALL Rmpi_0.6-3.tar.gz \
<br>
&nbsp;&nbsp;&nbsp;--configure-args=&quot;--with-Rmpi-include=$MPI_HOME/include
<br>
--with-Rmpi-libpath=$MPI_HOME/lib --with-Rmpi-type=OPENMPI&quot;
<br>
<p>Make sure environment variables and paths are set
<br>
<p>MPI_HOME=/home/software/rhel6/openmpi-1.6.5/gcc-4.4.7-static
<br>
PATH=/home/software/rhel6/openmpi-1.6.5/gcc-4.4.7-static/bin
<br>
LD_LIBRARY_PATH=$LD_LIBRARY_PATH}:/home/software/rhel6/openmpi-1.6.5/gcc-4.4.7-static/lib
<br>
LD_LIBRARY_PATH=$LD_LIBRARY_PATH}:/home/software/rhel6/openmpi-1.6.5/gcc-4.4.7-static/lib/openmpi
<br>
PATH=/home/software/rhel6/R/3.0.3/bin:$LD_LIBRARY_PATH}
<br>
LD_LIBRARY_PATH=/home/software/rhel6/R/3.0.3/lib64/R/lib:$LD_LIBRARY_PATH}
<br>
<p>##  Then install snow with
<br>
R
<br>
<span class="quotelev1">&gt; install.packages('snow')
</span><br>
[ . . . .
<br>
<p><p>I think the key thing is the --disable-dlopen, though it might require
<br>
both.  Jeff Squyres had a post about this quite a while ago that gives
<br>
more detail about what's happening:
<br>
<p><a href="http://www.open-mpi.org/community/lists/devel/2012/04/10840.php">http://www.open-mpi.org/community/lists/devel/2012/04/10840.php</a>
<br>
<p>-- bennet
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23824.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23822.php">Dave Goodell (dgoodell): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="23822.php">Dave Goodell (dgoodell): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23835.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Reply:</strong> <a href="23835.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
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
