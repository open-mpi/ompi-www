<?
$subject_val = "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 16:45:36 2014" -->
<!-- isoreceived="20140423204536" -->
<!-- sent="Wed, 23 Apr 2014 13:45:34 -0700" -->
<!-- isosent="20140423204534" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)" -->
<!-- id="1398285934.6236.50.camel_at_localhost" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="d635462716405a6fc7b91f5d7623625b.squirrel_at_www.stats.uwo.ca" -->
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
<strong>Date:</strong> 2014-04-23 16:45:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24250.php">Vince Grimes: "[OMPI users] Connection timed out on TCP and notify question"</a>
<li><strong>Previous message:</strong> <a href="24248.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23836.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24253.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Reply:</strong> <a href="24253.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2014-04-23 at 13:05 -0400, Hao Yu wrote:
<br>
<span class="quotelev1">&gt; Hi Ross,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for backing to you later on this issue. After finishing my course, I
</span><br>
<span class="quotelev1">&gt; am working on Rmpi 0.6-4 to be released soon to CRAN.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did a few tests like yours and indeed I was able to produce some
</span><br>
<span class="quotelev1">&gt; deadlocks whenever mpi.isend.Robj is used. Later on I traced it to some
</span><br>
<span class="quotelev1">&gt; kind of race condition. If you use mpi.test to test whether mpi.isend.Robj
</span><br>
<span class="quotelev1">&gt; finishes its job or not, this deadlock may be avoided. I did like
</span><br>
<span class="quotelev1">&gt; mpi.isend.Robj(r,1,4,request=0)
</span><br>
<span class="quotelev1">&gt; mpi.test(0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If mpi.test(0) returns FALSE and I run
</span><br>
<span class="quotelev1">&gt; mpi.send.Robj(r2,1,4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then I get no prompt. If mpi.test(0) returns TRUE, then
</span><br>
<span class="quotelev1">&gt; mpi.send.Robj(r2,1,4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is OK. So, if any nonblocking calls are used, one must use mpi.test or
</span><br>
<span class="quotelev1">&gt; mpi.wait to check if they are complete before trying any blocking calls.
</span><br>
That sounds like a different problem than the one I encountered.  The
<br>
system did get hung up, but the reason was that processes received
<br>
corrupted R objects, threw an error, and stopped responding.
<br>
<p>The root of my problem was that objects got garbage collected before the
<br>
isend completed.  This will happen regardless of subsequent R-level
<br>
calls (e.g., to mpi.test).  The object to be transmitted is serialized
<br>
and passed to C, but when the call returns there are no R references to
<br>
the object--that is, the serialized version of the object--and so it is
<br>
subject to garbage collection.
<br>
<p>I'd be happy to provide my modifications to get around this.  Although
<br>
they worked for me, they are not really suitable for general use.  There
<br>
are 2 main issues: first, I ignored the asynchronous receive since I
<br>
didn't use it.  Since MPI request objects are used for both sending and
<br>
receiving, I suspect that mixing irecv's in with code doing isends would
<br>
not work right.  I don't think there's any reason in principle the
<br>
handling of isend's could be extended to include irecv's; I just didn't
<br>
do it.  I also did not put the hooks for the new stuff in calls the
<br>
reset the maximum number of requests.
<br>
<p>The second issue is that my fix changed the interface to a slightly
<br>
higher level of abstraction.  Request objects and numbers are more
<br>
things that are managed by Rmpi than the user.  Rmpi keeps references to
<br>
the serialized objects around as long as the request is outstanding. For
<br>
example, the revised mpi.isend does not take a request number; the
<br>
function works out one and returns it.  And in general the calls do more
<br>
than simply call the corresponding C function.
<br>
<p>Ross Boylan
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hao
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ross Boylan wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I changed the calls to dlopen in Rmpi.c so that it tried libmpi.so
</span><br>
<span class="quotelev2">&gt; &gt; before libmpi.so.0.  I also rebuilt MPI, R, and Rmpi as suggested
</span><br>
<span class="quotelev2">&gt; &gt; earlier by Bennet Fauber
</span><br>
<span class="quotelev2">&gt; &gt; (<a href="http://www.open-mpi.org/community/lists/users/2014/03/23823.php">http://www.open-mpi.org/community/lists/users/2014/03/23823.php</a>).
</span><br>
<span class="quotelev2">&gt; &gt; Thanks Bennet!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My theory is that the change to dlopen by itself was sufficient.  The
</span><br>
<span class="quotelev2">&gt; &gt; rebuilding done before (by others) may have worked because they made the
</span><br>
<span class="quotelev2">&gt; &gt; load of libmpi.so.0 fail.  That's not a great theory since a) if there
</span><br>
<span class="quotelev2">&gt; &gt; was no libmpi.so.0 on the system it would fail anyway and b) dlopen
</span><br>
<span class="quotelev2">&gt; &gt; could probably find libmpi.so.0 in standard system locations regardless
</span><br>
<span class="quotelev2">&gt; &gt; of how R was built or LD_LIBRARY_PATHS setup (assuming it didn't find it
</span><br>
<span class="quotelev2">&gt; &gt; in a custom place first).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Which brings me back to my original problem: mpi.isend.Robj (or possibly
</span><br>
<span class="quotelev2">&gt; &gt; mpi.recv.Robj on the other end) did not seem to be working properly.  I
</span><br>
<span class="quotelev2">&gt; &gt; had hoped switching to a newer MPI library (1.7.4) would fix this; if
</span><br>
<span class="quotelev2">&gt; &gt; anything, it made it worse.  I am sending to a fake receiver (at rank 1)
</span><br>
<span class="quotelev2">&gt; &gt; that does nothing but print a message when it gets a message.  r is a
</span><br>
<span class="quotelev2">&gt; &gt; list with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; length(serialize(r, NULL))  # the mpi.isend.Robj R function serializes
</span><br>
<span class="quotelev2">&gt; &gt; the object and then mpi.isend's it.
</span><br>
<span class="quotelev2">&gt; &gt; length(serialize(r, NULL))
</span><br>
<span class="quotelev2">&gt; &gt; [1] 599499  # ~ 0.5 MB
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpi.send.Robj(1, 1, 4)  # send of number works
</span><br>
<span class="quotelev2">&gt; &gt; Fake Assembler: 0 4 numeric
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpi.send.Robj(r, 1, 4)  # send of r works
</span><br>
<span class="quotelev2">&gt; &gt; NULL
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fake Assembler: 0 4 list
</span><br>
<span class="quotelev2">&gt; &gt; mpi.isend.Robj(1, 1, 4)  # isend of number works
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fake Assembler: 0 4 numeric
</span><br>
<span class="quotelev2">&gt; &gt; mpi.isend.Robj(r, 1, 4)  # sometimes this used to work the first time
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpi.send.Robj(r, 1, 4) # sometimes used to get previous message
</span><br>
<span class="quotelev2">&gt; &gt; unstuck
</span><br>
<span class="quotelev2">&gt; &gt; # never get the command prompt back
</span><br>
<span class="quotelev2">&gt; &gt; # presumably mpi.send, the C function, does not return.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I might just switch to mpi.send, though the fact that something is going
</span><br>
<span class="quotelev2">&gt; &gt; wrong makes me nervous.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Obviously given the involvement of R it's not clear the problem lies
</span><br>
<span class="quotelev2">&gt; &gt; with the MPI layer, but that seems at least a possibility.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ross
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, 2014-03-13 at 12:15 -0700, Ross Boylan wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, 2014-03-12 at 10:52 -0400, Bennet Fauber wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; My experience with Rmpi and OpenMPI is that it doesn't seem to do well
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; with the dlopen or dynamic loading.  I recently installed R 3.0.3, and
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Rmpi, which failed when built against our standard OpenMPI but
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; succeeded using the following 'secret recipe'.  Perhaps there is
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; something here that will be helpful for you.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have a couple of things to report.  First,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.stats.uwo.ca/faculty/yu/Rmpi/changelogs.htm">http://www.stats.uwo.ca/faculty/yu/Rmpi/changelogs.htm</a> says
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It looks like that the option --disable-dlopen is not necessary to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; install Open MPI 1.6, at least on Debian. This might be R's .onLoad
</span><br>
<span class="quotelev3">&gt; &gt;&gt; correctly loading dynamic libraries and Open MPI is not required to be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; compiled with static libraries enabled.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Second, I tried rebuilding MPI with --disable-dlopen WITHOUT any of the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; changes to R or Rmpi.  The behavior didn't change.   Nobody said it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; would, but I thought it was worth a try.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Third, the source of the double-load of mpi-related libraries looks like
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this code in Rmpi.c:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     if (!dlopen(&quot;libmpi.so.0&quot;, RTLD_GLOBAL | RTLD_LAZY)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         &amp;&amp; !dlopen(&quot;libmpi.so&quot;, RTLD_GLOBAL | RTLD_LAZY)){
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So libmpi.so.1 is loaded because it's linked to Rmpi.so, and libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is loaded because the code does so explicitly.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The motivation was
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.stats.uwo.ca/faculty/yu/Rmpi/changelogs.htm">http://www.stats.uwo.ca/faculty/yu/Rmpi/changelogs.htm</a> notes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2007-10-24, version 0.5-5:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; dlopen has been used to load libmpi.so explicitly. This is mainly useful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for Rmpi under OpenMPI where one might see many error messages:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca: base: component_find: unable to open osc pt2pt: file not found
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (ignored)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; if libmpi.so is not loaded with RTLD_GLOBAL flag.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think I'll try changing to to try libmpi.so first so that it picks up
</span><br>
<span class="quotelev3">&gt; &gt;&gt; libmpi.so.1 if available.  I've already rebuilt R, though it looks as if
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rmpi may have been the source of the problems.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ross
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ###  Install openmpi 1.6.5
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; export PREFIX=/scratch/support_flux/
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; bennet/local
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; COMPILERS='CC=gcc CXX=g++ FC=gfortran F77=gfortran'
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; CONFIGURE_FLAGS='--disable-dlopen --enable-static'
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; cd openmpi-1.6.5
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ./configure    --prefix=${PREFIX} \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;    --mandir=${PREFIX}/man \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;    --with-tm=/usr/local/torque \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;    --with-openib --with-psm \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;    --with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre' \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;    $CONFIGURE_FLAGS \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;    $COMPILERS
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; make
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; make check
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; make install
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ### Install R 3.0.3
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; wget <a href="http://cran.case.edu/src/base/R-3/R-3.0.3.tar.gz">http://cran.case.edu/src/base/R-3/R-3.0.3.tar.gz</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; tar xzvf R-3.0.3.tar.gz
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; cd R-3.0.3
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; export MPI_HOME=/scratch/support_
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; flux/bennet/local
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; export LD_LIBRARY_PATH=$MPI_HOME/lib:${LD_LIBRARY_PATH}
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; export LD_LIBRARY_PATH=$MPI_HOME/openmpi:${LD_LIBRARY_PATH}
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; export PATH=${PATH}:${MPI_HOME}/bin
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; export LDFLAGS='-Wl,-O1'
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; export R_PAPERSIZE=letter
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; export R_INST=${PREFIX}
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; export FFLAGS='-O3 -mtune=native'
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; export CFLAGS='-O3 -mtune=native'
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ./configure --prefix=${R_INST} --mandir=${R_INST}/man
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; --enable-R-shlib --without-x
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; make
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; make check
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; make install
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; wget
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.stats.uwo.ca/faculty/yu/Rmpi/download/linux/Rmpi_0.6-3.tar.gz">http://www.stats.uwo.ca/faculty/yu/Rmpi/download/linux/Rmpi_0.6-3.tar.gz</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; R CMD INSTALL Rmpi_0.6-3.tar.gz \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;    --configure-args=&quot;--with-Rmpi-include=$MPI_HOME/include
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; --with-Rmpi-libpath=$MPI_HOME/lib --with-Rmpi-type=OPENMPI&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Make sure environment variables and paths are set
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; MPI_HOME=/home/software/rhel6/openmpi-1.6.5/gcc-4.4.7-static
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; PATH=/home/software/rhel6/openmpi-1.6.5/gcc-4.4.7-static/bin
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH}:/home/software/rhel6/openmpi-1.6.5/gcc-4.4.7-static/lib
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH}:/home/software/rhel6/openmpi-1.6.5/gcc-4.4.7-static/lib/openmpi
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; PATH=/home/software/rhel6/R/3.0.3/bin:$LD_LIBRARY_PATH}
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; LD_LIBRARY_PATH=/home/software/rhel6/R/3.0.3/lib64/R/lib:$LD_LIBRARY_PATH}
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ##  Then install snow with
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; R
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; install.packages('snow')
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; [ . . . .
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I think the key thing is the --disable-dlopen, though it might require
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; both.  Jeff Squyres had a post about this quite a while ago that gives
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; more detail about what's happening:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10840.php">http://www.open-mpi.org/community/lists/devel/2012/04/10840.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; -- bennet
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24250.php">Vince Grimes: "[OMPI users] Connection timed out on TCP and notify question"</a>
<li><strong>Previous message:</strong> <a href="24248.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23836.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24253.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Reply:</strong> <a href="24253.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
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
