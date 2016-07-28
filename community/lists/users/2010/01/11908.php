<?
$subject_val = "Re: [OMPI users] Wrappers should put include path *after* user args";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 09:04:11 2010" -->
<!-- isoreceived="20100128140411" -->
<!-- sent="Thu, 28 Jan 2010 09:04:03 -0500" -->
<!-- isosent="20100128140403" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Wrappers should put include path *after* user args" -->
<!-- id="5018CF5A-43DF-427B-8AEC-A69429782C38_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100119183908.GA20938_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Wrappers should put include path *after* user args<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 09:04:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11909.php">Laurence Marks: "[OMPI users] Trapping fortran I/O errors leaving zombie mpi processes"</a>
<li><strong>Previous message:</strong> <a href="11907.php">Ralph Castain: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>In reply to:</strong> <a href="11821.php">Justin Bronder: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry guys -- this one slipped off the radar.  You're right that it didn't make it into v1.4.1.
<br>
<p>Short version
<br>
-------------
<br>
<p>I looked into this yesterday and chatted with some other OMPI developers about it.  We agree; we can move the user options up in the command line creation.  I'll file a ticket for this for 1.4.2.
<br>
<p>Longer version
<br>
--------------
<br>
<p>I just checked into this (thanks for the reminder about Fortran compilers; ugh!).  I grok the problem explified by HDF5.
<br>
<p>Here's a little background -- Open MPI's wrappers build the command line something like this:
<br>
<p>- start with a blank argv
<br>
- add the compiler
<br>
- add OMPI's CPP flags
<br>
- add OMPI's CFLAGS / CXXFLAGS / FFLAGS / FCFLAGS (depending on the language)
<br>
- add all the user args
<br>
- add OMPI's LDFLAGS
<br>
- add OMPI's LIBS
<br>
<p>(there's some conditionals in there, of course, but let's consider the simple case where everything is added)
<br>
<p>I talked this over with Brian Barrett; we initially constructed the command line this way because we through there would be ramifications of the user command line overriding some of OMPI's CPP flags (e.g., -D_REENTRANT).  However, some testing yesterday, and a bunch of &quot;well, would this cause a problem?&quot;s, and we convinced ourselves that you're right.
<br>
<p>Like I mentioned above, I'll file a ticket about this (and CC you guys) and ensure that it gets into 1.4.2.
<br>
<p>Thanks for your persistence; please feel free to bump us if we neglect to reply to stuff (despite best intentions, sometimes issues just fall on the floor -- but they can be picked up!).  Also note that we now allow random people to get accounts on our Trac system; you can file tickets, add comments, add yourself to the CC to see when tickets are updated, etc.
<br>
<p><p><p><p><p>On Jan 19, 2010, at 1:39 PM, Justin Bronder wrote:
<br>
<p><span class="quotelev1">&gt; On 04/12/09 16:20 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Oy -- more specifically, we should not be putting -I/usr/include on the command line *at all* (because it's special and already included by the compiler search paths; similar for /usr/lib and /usr/lib64).  We should have some special case code that looks for /usr/include and simply drops it.  Let me check and see what's going on...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe this was initially added here: <a href="https://svn.open-mpi.org/trac/ompi/ticket/870">https://svn.open-mpi.org/trac/ompi/ticket/870</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Can you send the contents of your $prefix/share/openmpi/mpif90-wrapper-data.txt?  (it is *likely* in that directory, but it could be somewhere else under prefix as well -- the mpif90-wrapper-data.txt file is the important one)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 4, 2009, at 1:08 PM, Jed Brown wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Open MPI is installed by the distro with headers in /usr/include
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   $ mpif90 -showme:compile -I/some/special/path
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   -I/usr/include -pthread -I/usr/lib/openmpi -I/some/special/path
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Here's why it's a problem:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; HDF5 is also installed in /usr with modules at /usr/include/h5*.mod.  A
</span><br>
<span class="quotelev3">&gt; &gt; &gt; new HDF5 cannot be compiled using the wrappers because it will always
</span><br>
<span class="quotelev3">&gt; &gt; &gt; resolve the USE statements to /usr/include which is binary-incompatible
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with the the new version (at a minimum, they &quot;fixed&quot; the size of an
</span><br>
<span class="quotelev3">&gt; &gt; &gt; argument to H5Lget_info_f between 1.8.3 and 1.8.4).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To build the library, the current choices are
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   (a) get rid of the system copy before building
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   (b) not use mpif90 wrapper
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I just checked that MPICH2 wrappers consistently put command-line args
</span><br>
<span class="quotelev3">&gt; &gt; &gt; before the wrapper args.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any news on this?  It doesn't look like it made it into the 1.4.1 release.
</span><br>
<span class="quotelev1">&gt; Also, it's not just /usr/include that is a problem, but the fact that the
</span><br>
<span class="quotelev1">&gt; wrappers are passing their paths before the user specified ones.  Here's an
</span><br>
<span class="quotelev1">&gt; example using mpich2 and openmpi with non-standard install paths.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mpich2 (Some output stripped as mpicc -compile_info prints everything):
</span><br>
<span class="quotelev1">&gt; jbronder_at_mejis ~ $ which mpicc
</span><br>
<span class="quotelev1">&gt; /usr/lib64/mpi/mpi-mpich2/usr/bin/mpicc
</span><br>
<span class="quotelev1">&gt; jbronder_at_mejis ~ $ mpicc -compile_info -I/bleh
</span><br>
<span class="quotelev1">&gt; x86_64-pc-linux-gnu-gcc -I/bleh -I/usr/lib64/mpi/mpi-mpich2/usr/include
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI:
</span><br>
<span class="quotelev1">&gt; jbronder_at_mejis ~ $ which mpicc
</span><br>
<span class="quotelev1">&gt; /usr/lib64/mpi/mpi-openmpi/usr/bin/mpicc
</span><br>
<span class="quotelev1">&gt; jbronder_at_mejis ~ $ mpicc -showme:compile -I/bleh
</span><br>
<span class="quotelev1">&gt; -I/usr/lib64/mpi/mpi-openmpi/usr/include/openmpi -pthread -I/bleh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Justin Bronder
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;ATT3130120.dat&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11909.php">Laurence Marks: "[OMPI users] Trapping fortran I/O errors leaving zombie mpi processes"</a>
<li><strong>Previous message:</strong> <a href="11907.php">Ralph Castain: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>In reply to:</strong> <a href="11821.php">Justin Bronder: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<!-- nextthread="start" -->
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
