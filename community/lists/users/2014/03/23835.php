<?
$subject_val = "Re: [OMPI users] trying to use personal copy of 1.7.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 15:15:55 2014" -->
<!-- isoreceived="20140313191555" -->
<!-- sent="Thu, 13 Mar 2014 12:15:50 -0700" -->
<!-- isosent="20140313191550" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trying to use personal copy of 1.7.4" -->
<!-- id="1394738150.15874.82.camel_at_localhost" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAB2ovovPwPL+ST+HYnoT70x9gcG3V9q1pmaUcR9LeH2Sev7-Xg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-13 15:15:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23836.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Previous message:</strong> <a href="23834.php">Ralph Castain: "Re: [OMPI users] Question about &quot;--appfile&quot;"</a>
<li><strong>In reply to:</strong> <a href="23823.php">Bennet Fauber: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23836.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Reply:</strong> <a href="23836.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24252.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2014-03-12 at 10:52 -0400, Bennet Fauber wrote:
<br>
<span class="quotelev1">&gt; My experience with Rmpi and OpenMPI is that it doesn't seem to do well
</span><br>
<span class="quotelev1">&gt; with the dlopen or dynamic loading.  I recently installed R 3.0.3, and
</span><br>
<span class="quotelev1">&gt; Rmpi, which failed when built against our standard OpenMPI but
</span><br>
<span class="quotelev1">&gt; succeeded using the following 'secret recipe'.  Perhaps there is
</span><br>
<span class="quotelev1">&gt; something here that will be helpful for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I have a couple of things to report.  First,
<br>
<a href="http://www.stats.uwo.ca/faculty/yu/Rmpi/changelogs.htm">http://www.stats.uwo.ca/faculty/yu/Rmpi/changelogs.htm</a> says
<br>
It looks like that the option --disable-dlopen is not necessary to
<br>
install Open MPI 1.6, at least on Debian. This might be R's .onLoad
<br>
correctly loading dynamic libraries and Open MPI is not required to be
<br>
compiled with static libraries enabled.
<br>
<p>Second, I tried rebuilding MPI with --disable-dlopen WITHOUT any of the
<br>
changes to R or Rmpi.  The behavior didn't change.   Nobody said it
<br>
would, but I thought it was worth a try.
<br>
<p>Third, the source of the double-load of mpi-related libraries looks like
<br>
this code in Rmpi.c:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (!dlopen(&quot;libmpi.so.0&quot;, RTLD_GLOBAL | RTLD_LAZY)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp; !dlopen(&quot;libmpi.so&quot;, RTLD_GLOBAL | RTLD_LAZY)){
<br>
So libmpi.so.1 is loaded because it's linked to Rmpi.so, and libmpi.so.0
<br>
is loaded because the code does so explicitly.
<br>
<p>The motivation was
<br>
<a href="http://www.stats.uwo.ca/faculty/yu/Rmpi/changelogs.htm">http://www.stats.uwo.ca/faculty/yu/Rmpi/changelogs.htm</a> notes
<br>
----------------------------------
<br>
2007-10-24, version 0.5-5:
<br>
<p>dlopen has been used to load libmpi.so explicitly. This is mainly useful
<br>
for Rmpi under OpenMPI where one might see many error messages:
<br>
mca: base: component_find: unable to open osc pt2pt: file not found
<br>
(ignored)
<br>
if libmpi.so is not loaded with RTLD_GLOBAL flag.
<br>
-------------------------------------
<br>
<p>I think I'll try changing to to try libmpi.so first so that it picks up
<br>
libmpi.so.1 if available.  I've already rebuilt R, though it looks as if
<br>
Rmpi may have been the source of the problems.
<br>
<p>Ross
<br>
<span class="quotelev1">&gt; ###  Install openmpi 1.6.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export PREFIX=/scratch/support_flux/
</span><br>
<span class="quotelev1">&gt; bennet/local
</span><br>
<span class="quotelev1">&gt; COMPILERS='CC=gcc CXX=g++ FC=gfortran F77=gfortran'
</span><br>
<span class="quotelev1">&gt; CONFIGURE_FLAGS='--disable-dlopen --enable-static'
</span><br>
<span class="quotelev1">&gt; cd openmpi-1.6.5
</span><br>
<span class="quotelev1">&gt; ./configure    --prefix=${PREFIX} \
</span><br>
<span class="quotelev1">&gt;    --mandir=${PREFIX}/man \
</span><br>
<span class="quotelev1">&gt;    --with-tm=/usr/local/torque \
</span><br>
<span class="quotelev1">&gt;    --with-openib --with-psm \
</span><br>
<span class="quotelev1">&gt;    --with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre' \
</span><br>
<span class="quotelev1">&gt;    $CONFIGURE_FLAGS \
</span><br>
<span class="quotelev1">&gt;    $COMPILERS
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; make check
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ### Install R 3.0.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; wget <a href="http://cran.case.edu/src/base/R-3/R-3.0.3.tar.gz">http://cran.case.edu/src/base/R-3/R-3.0.3.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; tar xzvf R-3.0.3.tar.gz
</span><br>
<span class="quotelev1">&gt; cd R-3.0.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export MPI_HOME=/scratch/support_
</span><br>
<span class="quotelev1">&gt; flux/bennet/local
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$MPI_HOME/lib:${LD_LIBRARY_PATH}
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$MPI_HOME/openmpi:${LD_LIBRARY_PATH}
</span><br>
<span class="quotelev1">&gt; export PATH=${PATH}:${MPI_HOME}/bin
</span><br>
<span class="quotelev1">&gt; export LDFLAGS='-Wl,-O1'
</span><br>
<span class="quotelev1">&gt; export R_PAPERSIZE=letter
</span><br>
<span class="quotelev1">&gt; export R_INST=${PREFIX}
</span><br>
<span class="quotelev1">&gt; export FFLAGS='-O3 -mtune=native'
</span><br>
<span class="quotelev1">&gt; export CFLAGS='-O3 -mtune=native'
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=${R_INST} --mandir=${R_INST}/man
</span><br>
<span class="quotelev1">&gt; --enable-R-shlib --without-x
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; make check
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt; wget <a href="http://www.stats.uwo.ca/faculty/yu/Rmpi/download/linux/Rmpi_0.6-3.tar.gz">http://www.stats.uwo.ca/faculty/yu/Rmpi/download/linux/Rmpi_0.6-3.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; R CMD INSTALL Rmpi_0.6-3.tar.gz \
</span><br>
<span class="quotelev1">&gt;    --configure-args=&quot;--with-Rmpi-include=$MPI_HOME/include
</span><br>
<span class="quotelev1">&gt; --with-Rmpi-libpath=$MPI_HOME/lib --with-Rmpi-type=OPENMPI&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Make sure environment variables and paths are set
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_HOME=/home/software/rhel6/openmpi-1.6.5/gcc-4.4.7-static
</span><br>
<span class="quotelev1">&gt; PATH=/home/software/rhel6/openmpi-1.6.5/gcc-4.4.7-static/bin
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH}:/home/software/rhel6/openmpi-1.6.5/gcc-4.4.7-static/lib
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH}:/home/software/rhel6/openmpi-1.6.5/gcc-4.4.7-static/lib/openmpi
</span><br>
<span class="quotelev1">&gt; PATH=/home/software/rhel6/R/3.0.3/bin:$LD_LIBRARY_PATH}
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/home/software/rhel6/R/3.0.3/lib64/R/lib:$LD_LIBRARY_PATH}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##  Then install snow with
</span><br>
<span class="quotelev1">&gt; R
</span><br>
<span class="quotelev2">&gt; &gt; install.packages('snow')
</span><br>
<span class="quotelev1">&gt; [ . . . .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the key thing is the --disable-dlopen, though it might require
</span><br>
<span class="quotelev1">&gt; both.  Jeff Squyres had a post about this quite a while ago that gives
</span><br>
<span class="quotelev1">&gt; more detail about what's happening:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10840.php">http://www.open-mpi.org/community/lists/devel/2012/04/10840.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- bennet
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23836.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Previous message:</strong> <a href="23834.php">Ralph Castain: "Re: [OMPI users] Question about &quot;--appfile&quot;"</a>
<li><strong>In reply to:</strong> <a href="23823.php">Bennet Fauber: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23836.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Reply:</strong> <a href="23836.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24252.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
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
