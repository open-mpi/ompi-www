<?
$subject_val = "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 16:13:30 2014" -->
<!-- isoreceived="20140313201330" -->
<!-- sent="Thu, 13 Mar 2014 13:13:28 -0700" -->
<!-- isosent="20140313201328" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)" -->
<!-- id="1394741608.15874.111.camel_at_localhost" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1394738150.15874.82.camel_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-13 16:13:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23837.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Previous message:</strong> <a href="23835.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="23835.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23837.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Reply:</strong> <a href="23837.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24249.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I changed the calls to dlopen in Rmpi.c so that it tried libmpi.so
<br>
before libmpi.so.0.  I also rebuilt MPI, R, and Rmpi as suggested
<br>
earlier by Bennet Fauber
<br>
(<a href="http://www.open-mpi.org/community/lists/users/2014/03/23823.php">http://www.open-mpi.org/community/lists/users/2014/03/23823.php</a>).
<br>
Thanks Bennet!
<br>
<p>My theory is that the change to dlopen by itself was sufficient.  The
<br>
rebuilding done before (by others) may have worked because they made the
<br>
load of libmpi.so.0 fail.  That's not a great theory since a) if there
<br>
was no libmpi.so.0 on the system it would fail anyway and b) dlopen
<br>
could probably find libmpi.so.0 in standard system locations regardless
<br>
of how R was built or LD_LIBRARY_PATHS setup (assuming it didn't find it
<br>
in a custom place first).
<br>
<p>Which brings me back to my original problem: mpi.isend.Robj (or possibly
<br>
mpi.recv.Robj on the other end) did not seem to be working properly.  I
<br>
had hoped switching to a newer MPI library (1.7.4) would fix this; if
<br>
anything, it made it worse.  I am sending to a fake receiver (at rank 1)
<br>
that does nothing but print a message when it gets a message.  r is a
<br>
list with
<br>
<span class="quotelev1">&gt; length(serialize(r, NULL))  # the mpi.isend.Robj R function serializes
</span><br>
the object and then mpi.isend's it.
<br>
length(serialize(r, NULL))
<br>
[1] 599499  # ~ 0.5 MB
<br>
<span class="quotelev1">&gt; mpi.send.Robj(1, 1, 4)  # send of number works
</span><br>
Fake Assembler: 0 4 numeric
<br>
<span class="quotelev1">&gt; mpi.send.Robj(r, 1, 4)  # send of r works
</span><br>
NULL
<br>
<span class="quotelev1">&gt; Fake Assembler: 0 4 list
</span><br>
mpi.isend.Robj(1, 1, 4)  # isend of number works
<br>
<span class="quotelev1">&gt; Fake Assembler: 0 4 numeric
</span><br>
mpi.isend.Robj(r, 1, 4)  # sometimes this used to work the first time
<br>
<span class="quotelev1">&gt; mpi.send.Robj(r, 1, 4) # sometimes used to get previous message
</span><br>
unstuck
<br>
# never get the command prompt back
<br>
# presumably mpi.send, the C function, does not return.
<br>
<p>I might just switch to mpi.send, though the fact that something is going
<br>
wrong makes me nervous.
<br>
<p>Obviously given the involvement of R it's not clear the problem lies
<br>
with the MPI layer, but that seems at least a possibility.
<br>
<p>Ross
<br>
On Thu, 2014-03-13 at 12:15 -0700, Ross Boylan wrote:
<br>
<span class="quotelev1">&gt; On Wed, 2014-03-12 at 10:52 -0400, Bennet Fauber wrote:
</span><br>
<span class="quotelev2">&gt; &gt; My experience with Rmpi and OpenMPI is that it doesn't seem to do well
</span><br>
<span class="quotelev2">&gt; &gt; with the dlopen or dynamic loading.  I recently installed R 3.0.3, and
</span><br>
<span class="quotelev2">&gt; &gt; Rmpi, which failed when built against our standard OpenMPI but
</span><br>
<span class="quotelev2">&gt; &gt; succeeded using the following 'secret recipe'.  Perhaps there is
</span><br>
<span class="quotelev2">&gt; &gt; something here that will be helpful for you.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; I have a couple of things to report.  First,
</span><br>
<span class="quotelev1">&gt; <a href="http://www.stats.uwo.ca/faculty/yu/Rmpi/changelogs.htm">http://www.stats.uwo.ca/faculty/yu/Rmpi/changelogs.htm</a> says
</span><br>
<span class="quotelev1">&gt; It looks like that the option --disable-dlopen is not necessary to
</span><br>
<span class="quotelev1">&gt; install Open MPI 1.6, at least on Debian. This might be R's .onLoad
</span><br>
<span class="quotelev1">&gt; correctly loading dynamic libraries and Open MPI is not required to be
</span><br>
<span class="quotelev1">&gt; compiled with static libraries enabled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second, I tried rebuilding MPI with --disable-dlopen WITHOUT any of the
</span><br>
<span class="quotelev1">&gt; changes to R or Rmpi.  The behavior didn't change.   Nobody said it
</span><br>
<span class="quotelev1">&gt; would, but I thought it was worth a try.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Third, the source of the double-load of mpi-related libraries looks like
</span><br>
<span class="quotelev1">&gt; this code in Rmpi.c:
</span><br>
<span class="quotelev1">&gt;     if (!dlopen(&quot;libmpi.so.0&quot;, RTLD_GLOBAL | RTLD_LAZY)
</span><br>
<span class="quotelev1">&gt;         &amp;&amp; !dlopen(&quot;libmpi.so&quot;, RTLD_GLOBAL | RTLD_LAZY)){
</span><br>
<span class="quotelev1">&gt; So libmpi.so.1 is loaded because it's linked to Rmpi.so, and libmpi.so.0
</span><br>
<span class="quotelev1">&gt; is loaded because the code does so explicitly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The motivation was
</span><br>
<span class="quotelev1">&gt; <a href="http://www.stats.uwo.ca/faculty/yu/Rmpi/changelogs.htm">http://www.stats.uwo.ca/faculty/yu/Rmpi/changelogs.htm</a> notes
</span><br>
<span class="quotelev1">&gt; ----------------------------------
</span><br>
<span class="quotelev1">&gt; 2007-10-24, version 0.5-5:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dlopen has been used to load libmpi.so explicitly. This is mainly useful
</span><br>
<span class="quotelev1">&gt; for Rmpi under OpenMPI where one might see many error messages:
</span><br>
<span class="quotelev1">&gt; mca: base: component_find: unable to open osc pt2pt: file not found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; if libmpi.so is not loaded with RTLD_GLOBAL flag.
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I'll try changing to to try libmpi.so first so that it picks up
</span><br>
<span class="quotelev1">&gt; libmpi.so.1 if available.  I've already rebuilt R, though it looks as if
</span><br>
<span class="quotelev1">&gt; Rmpi may have been the source of the problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ross
</span><br>
<span class="quotelev2">&gt; &gt; ###  Install openmpi 1.6.5
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; export PREFIX=/scratch/support_flux/
</span><br>
<span class="quotelev2">&gt; &gt; bennet/local
</span><br>
<span class="quotelev2">&gt; &gt; COMPILERS='CC=gcc CXX=g++ FC=gfortran F77=gfortran'
</span><br>
<span class="quotelev2">&gt; &gt; CONFIGURE_FLAGS='--disable-dlopen --enable-static'
</span><br>
<span class="quotelev2">&gt; &gt; cd openmpi-1.6.5
</span><br>
<span class="quotelev2">&gt; &gt; ./configure    --prefix=${PREFIX} \
</span><br>
<span class="quotelev2">&gt; &gt;    --mandir=${PREFIX}/man \
</span><br>
<span class="quotelev2">&gt; &gt;    --with-tm=/usr/local/torque \
</span><br>
<span class="quotelev2">&gt; &gt;    --with-openib --with-psm \
</span><br>
<span class="quotelev2">&gt; &gt;    --with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre' \
</span><br>
<span class="quotelev2">&gt; &gt;    $CONFIGURE_FLAGS \
</span><br>
<span class="quotelev2">&gt; &gt;    $COMPILERS
</span><br>
<span class="quotelev2">&gt; &gt; make
</span><br>
<span class="quotelev2">&gt; &gt; make check
</span><br>
<span class="quotelev2">&gt; &gt; make install
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ### Install R 3.0.3
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; wget <a href="http://cran.case.edu/src/base/R-3/R-3.0.3.tar.gz">http://cran.case.edu/src/base/R-3/R-3.0.3.tar.gz</a>
</span><br>
<span class="quotelev2">&gt; &gt; tar xzvf R-3.0.3.tar.gz
</span><br>
<span class="quotelev2">&gt; &gt; cd R-3.0.3
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; export MPI_HOME=/scratch/support_
</span><br>
<span class="quotelev2">&gt; &gt; flux/bennet/local
</span><br>
<span class="quotelev2">&gt; &gt; export LD_LIBRARY_PATH=$MPI_HOME/lib:${LD_LIBRARY_PATH}
</span><br>
<span class="quotelev2">&gt; &gt; export LD_LIBRARY_PATH=$MPI_HOME/openmpi:${LD_LIBRARY_PATH}
</span><br>
<span class="quotelev2">&gt; &gt; export PATH=${PATH}:${MPI_HOME}/bin
</span><br>
<span class="quotelev2">&gt; &gt; export LDFLAGS='-Wl,-O1'
</span><br>
<span class="quotelev2">&gt; &gt; export R_PAPERSIZE=letter
</span><br>
<span class="quotelev2">&gt; &gt; export R_INST=${PREFIX}
</span><br>
<span class="quotelev2">&gt; &gt; export FFLAGS='-O3 -mtune=native'
</span><br>
<span class="quotelev2">&gt; &gt; export CFLAGS='-O3 -mtune=native'
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=${R_INST} --mandir=${R_INST}/man
</span><br>
<span class="quotelev2">&gt; &gt; --enable-R-shlib --without-x
</span><br>
<span class="quotelev2">&gt; &gt; make
</span><br>
<span class="quotelev2">&gt; &gt; make check
</span><br>
<span class="quotelev2">&gt; &gt; make install
</span><br>
<span class="quotelev2">&gt; &gt; wget <a href="http://www.stats.uwo.ca/faculty/yu/Rmpi/download/linux/Rmpi_0.6-3.tar.gz">http://www.stats.uwo.ca/faculty/yu/Rmpi/download/linux/Rmpi_0.6-3.tar.gz</a>
</span><br>
<span class="quotelev2">&gt; &gt; R CMD INSTALL Rmpi_0.6-3.tar.gz \
</span><br>
<span class="quotelev2">&gt; &gt;    --configure-args=&quot;--with-Rmpi-include=$MPI_HOME/include
</span><br>
<span class="quotelev2">&gt; &gt; --with-Rmpi-libpath=$MPI_HOME/lib --with-Rmpi-type=OPENMPI&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Make sure environment variables and paths are set
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_HOME=/home/software/rhel6/openmpi-1.6.5/gcc-4.4.7-static
</span><br>
<span class="quotelev2">&gt; &gt; PATH=/home/software/rhel6/openmpi-1.6.5/gcc-4.4.7-static/bin
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH}:/home/software/rhel6/openmpi-1.6.5/gcc-4.4.7-static/lib
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH}:/home/software/rhel6/openmpi-1.6.5/gcc-4.4.7-static/lib/openmpi
</span><br>
<span class="quotelev2">&gt; &gt; PATH=/home/software/rhel6/R/3.0.3/bin:$LD_LIBRARY_PATH}
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH=/home/software/rhel6/R/3.0.3/lib64/R/lib:$LD_LIBRARY_PATH}
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ##  Then install snow with
</span><br>
<span class="quotelev2">&gt; &gt; R
</span><br>
<span class="quotelev3">&gt; &gt; &gt; install.packages('snow')
</span><br>
<span class="quotelev2">&gt; &gt; [ . . . .
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think the key thing is the --disable-dlopen, though it might require
</span><br>
<span class="quotelev2">&gt; &gt; both.  Jeff Squyres had a post about this quite a while ago that gives
</span><br>
<span class="quotelev2">&gt; &gt; more detail about what's happening:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10840.php">http://www.open-mpi.org/community/lists/devel/2012/04/10840.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- bennet
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23837.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Previous message:</strong> <a href="23835.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="23835.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23837.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Reply:</strong> <a href="23837.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24249.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
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
