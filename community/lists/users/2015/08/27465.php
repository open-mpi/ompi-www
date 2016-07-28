<?
$subject_val = "Re: [OMPI users] segfault on java binding from MPI.init()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 02:20:10 2015" -->
<!-- isoreceived="20150814062010" -->
<!-- sent="Fri, 14 Aug 2015 15:20:02 +0900" -->
<!-- isosent="20150814062002" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault on java binding from MPI.init()" -->
<!-- id="55CD8892.1070703_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAKMpcFqgRJ-BiZyoJSWyPbJ+tL6T1yPVKCm-+5BfnYySNXNUkw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] segfault on java binding from MPI.init()<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-14 02:20:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27466.php">Schlottke-Lakemper, Michael: "[OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27464.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27450.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27471.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Reply:</strong> <a href="27471.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nate,
<br>
<p>i could get rid of the problem by not using the psm mtl.
<br>
the infinipath library (used by the psm mtl) sets some signal handlers 
<br>
that conflict with the JVM
<br>
that can be seen by running
<br>
mpirun -np 1 java -Xcheck:jni MPITestBroke data/
<br>
<p>so instead of running
<br>
mpirun -np 1 java MPITestBroke data/
<br>
please run
<br>
mpirun --mca mtl ^psm -np 1 java MPITestBroke data/
<br>
<p>that solved the issue for me
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 8/13/2015 9:19 AM, Nate Chambers wrote:
<br>
<span class="quotelev1">&gt; *I appreciate you trying to help! I put the Java and its compiled 
</span><br>
<span class="quotelev1">&gt; .class file on Dropbox. The directory contains the .java and .class 
</span><br>
<span class="quotelev1">&gt; files, as well as a data/ directory:*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.dropbox.com/sh/pds5c5wecfpb2wk/AAAcz17UTDQErmrUqp2SPjpqa?dl=0">http://www.dropbox.com/sh/pds5c5wecfpb2wk/AAAcz17UTDQErmrUqp2SPjpqa?dl=0</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *You can run it with and without MPI:*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  java MPITestBroke data/
</span><br>
<span class="quotelev2">&gt; &gt;  mpirun -np 1 java MPITestBroke data/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Attached is a text file of what I see when I run it with mpirun and 
</span><br>
<span class="quotelev1">&gt; your debug flag. Lots of debug lines.*
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; Nate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 12, 2015 at 11:09 AM, Howard Pritchard 
</span><br>
<span class="quotelev1">&gt; &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Nate,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Sorry for the delay in getting back to you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     We're somewhat stuck on how to help you, but here are two suggestions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Could you add the following to your launch command line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --mca odls_base_verbose 100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     so we can see exactly what arguments are being feed to java when
</span><br>
<span class="quotelev1">&gt;     launching
</span><br>
<span class="quotelev1">&gt;     your app.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Also, if you could put your MPITestBroke.class file somewhere
</span><br>
<span class="quotelev1">&gt;     (like google drive)
</span><br>
<span class="quotelev1">&gt;     where we could get it and try to run locally or at NERSC, that
</span><br>
<span class="quotelev1">&gt;     might help us
</span><br>
<span class="quotelev1">&gt;     narrow down the problem.    Better yet, if you have the class or
</span><br>
<span class="quotelev1">&gt;     jar file for
</span><br>
<span class="quotelev1">&gt;     the entire app plus some data sets, we could try that out as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     All the config outputs, etc. you've sent so far indicate a correct
</span><br>
<span class="quotelev1">&gt;     installation
</span><br>
<span class="quotelev1">&gt;     of open mpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Aug 6, 2015 1:54 PM, &quot;Nate Chambers&quot; &lt;nchamber_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:nchamber_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Howard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I tried the nightly build openmpi-dev-2223-g731cfe3 and it
</span><br>
<span class="quotelev1">&gt;         still segfaults as before. I must admit I am new to MPI, so is
</span><br>
<span class="quotelev1">&gt;         it possible I'm just configuring or running incorrectly? Let
</span><br>
<span class="quotelev1">&gt;         me list my steps for you, and maybe something will jump out?
</span><br>
<span class="quotelev1">&gt;         Also attached is my config.log.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         CONFIGURE
</span><br>
<span class="quotelev1">&gt;         ./configure --prefix=&lt;install-dir&gt; --enable-mpi-java CC=gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MAKE
</span><br>
<span class="quotelev1">&gt;         make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         RUN
</span><br>
<span class="quotelev1">&gt;         &lt;install-dir&gt;/mpirun -np 1 java MPITestBroke twitter/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         DEFAULT JAVA AND GCC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         $ java -version
</span><br>
<span class="quotelev1">&gt;         java version &quot;1.7.0_21&quot;
</span><br>
<span class="quotelev1">&gt;         Java(TM) SE Runtime Environment (build 1.7.0_21-b11)
</span><br>
<span class="quotelev1">&gt;         Java HotSpot(TM) 64-Bit Server VM (build 23.21-b01, mixed mode)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         $ gcc --v
</span><br>
<span class="quotelev1">&gt;         Using built-in specs.
</span><br>
<span class="quotelev1">&gt;         Target: x86_64-redhat-linux
</span><br>
<span class="quotelev1">&gt;         Configured with: ../configure --prefix=/usr
</span><br>
<span class="quotelev1">&gt;         --mandir=/usr/share/man --infodir=/usr/share/info
</span><br>
<span class="quotelev1">&gt;         --with-bugurl=<a href="http://bugzilla.redhat.com/bugzilla">http://bugzilla.redhat.com/bugzilla</a>
</span><br>
<span class="quotelev1">&gt;         --enable-bootstrap --enable-shared --enable-threads=posix
</span><br>
<span class="quotelev1">&gt;         --enable-checking=release --with-system-zlib
</span><br>
<span class="quotelev1">&gt;         --enable-__cxa_atexit --disable-libunwind-exceptions
</span><br>
<span class="quotelev1">&gt;         --enable-gnu-unique-object
</span><br>
<span class="quotelev1">&gt;         --enable-languages=c,c++,objc,obj-c++,java,fortran,ada
</span><br>
<span class="quotelev1">&gt;         --enable-java-awt=gtk --disable-dssi
</span><br>
<span class="quotelev1">&gt;         --with-java-home=/usr/lib/jvm/java-1.5.0-gcj-1.5.0.0/jre
</span><br>
<span class="quotelev1">&gt;         --enable-libgcj-multifile --enable-java-maintainer-mode
</span><br>
<span class="quotelev1">&gt;         --with-ecj-jar=/usr/share/java/eclipse-ecj.jar
</span><br>
<span class="quotelev1">&gt;         --disable-libjava-multilib --with-ppl --with-cloog
</span><br>
<span class="quotelev1">&gt;         --with-tune=generic --with-arch_32=i686
</span><br>
<span class="quotelev1">&gt;         --build=x86_64-redhat-linux
</span><br>
<span class="quotelev1">&gt;         Thread model: posix
</span><br>
<span class="quotelev1">&gt;         gcc version 4.4.7 20120313 (Red Hat 4.4.7-4) (GCC)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Thu, Aug 6, 2015 at 7:58 AM, Howard Pritchard
</span><br>
<span class="quotelev1">&gt;         &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             HI Nate,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             We're trying this out on a mac running mavericks and a
</span><br>
<span class="quotelev1">&gt;             cray xc system.   the mac has java 8
</span><br>
<span class="quotelev1">&gt;             while the cray xc has java 7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             We could not get the code to run just using the java
</span><br>
<span class="quotelev1">&gt;             launch command, although we noticed if you add
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             catch(NoClassDefFoundError e) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   System.out.println(&quot;Not using MPI its out to lunch
</span><br>
<span class="quotelev1">&gt;             for now&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             as one of the catches after the try for firing up MPI, you
</span><br>
<span class="quotelev1">&gt;             can get further.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Instead we tried on the two systems using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             mpirun -np 1 java MPITestBroke tweets repeat.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             and, you guessed it, we can't reproduce the error, at
</span><br>
<span class="quotelev1">&gt;             least using master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Would you mind trying to get a copy of nightly master
</span><br>
<span class="quotelev1">&gt;             build off of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/nightly/master/">http://www.open-mpi.org/nightly/master/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             and install that version and give it a try.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             If that works, then I'd suggest using master (or v2.0) for
</span><br>
<span class="quotelev1">&gt;             now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             2015-08-05 14:41 GMT-06:00 Nate Chambers
</span><br>
<span class="quotelev1">&gt;             &lt;nchamber_at_[hidden] &lt;mailto:nchamber_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Howard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Thanks for looking at all this. Adding System.gc() did
</span><br>
<span class="quotelev1">&gt;                 not cause it to segfault. The segfault still comes
</span><br>
<span class="quotelev1">&gt;                 much later in the processing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 I was able to reduce my code to a single test file
</span><br>
<span class="quotelev1">&gt;                 without other dependencies. It is attached. This code
</span><br>
<span class="quotelev1">&gt;                 simply opens a text file and reads its lines, one by
</span><br>
<span class="quotelev1">&gt;                 one. Once finished, it closes and opens the same file
</span><br>
<span class="quotelev1">&gt;                 and reads the lines again. On my system, it does this
</span><br>
<span class="quotelev1">&gt;                 about 4 times until the segfault fires. Obviously this
</span><br>
<span class="quotelev1">&gt;                 code makes no sense, but it's based on our actual code
</span><br>
<span class="quotelev1">&gt;                 that reads millions of lines of data and does various
</span><br>
<span class="quotelev1">&gt;                 processing to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Attached is a tweets.tgz file that you can uncompress
</span><br>
<span class="quotelev1">&gt;                 to have an input directory. The text file is just the
</span><br>
<span class="quotelev1">&gt;                 same line over and over again. Run it as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 *java MPITestBroke tweets/*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Nate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 On Wed, Aug 5, 2015 at 8:29 AM, Howard Pritchard
</span><br>
<span class="quotelev1">&gt;                 &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Hi Nate,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Sorry for the delay in getting back. Thanks for
</span><br>
<span class="quotelev1">&gt;                     the sanity check.  You may have a point about the
</span><br>
<span class="quotelev1">&gt;                     args string to MPI.init -
</span><br>
<span class="quotelev1">&gt;                     there's nothing the Open MPI is needing from this
</span><br>
<span class="quotelev1">&gt;                     but that is a difference with your use case - your
</span><br>
<span class="quotelev1">&gt;                     app has an argument.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Would you mind adding a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     System.gc()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     call immediately after MPI.init call and see if
</span><br>
<span class="quotelev1">&gt;                     the gc blows up with a segfault?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Also, may be interesting to add the -verbose:jni
</span><br>
<span class="quotelev1">&gt;                     to your command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     We'll do some experiments here with the init
</span><br>
<span class="quotelev1">&gt;                     string arg.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Is your app open source where we could download it
</span><br>
<span class="quotelev1">&gt;                     and try to reproduce the problem locally?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     2015-08-04 18:52 GMT-06:00 Nate Chambers
</span><br>
<span class="quotelev1">&gt;                     &lt;nchamber_at_[hidden] &lt;mailto:nchamber_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         Sanity checks pass. Both Hello and Ring.java
</span><br>
<span class="quotelev1">&gt;                         run correctly with the expected program's output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         Does MPI.init(args) expect anything from those
</span><br>
<span class="quotelev1">&gt;                         command-line args?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         Nate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         On Tue, Aug 4, 2015 at 12:26 PM, Howard
</span><br>
<span class="quotelev1">&gt;                         Pritchard &lt;hppritcha_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                         &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             Hello Nate,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             As a sanity check of your installation,
</span><br>
<span class="quotelev1">&gt;                             could you try to compile the
</span><br>
<span class="quotelev1">&gt;                             examples/*.java codes using the mpijavac
</span><br>
<span class="quotelev1">&gt;                             you've installed and see that those run
</span><br>
<span class="quotelev1">&gt;                             correctly?
</span><br>
<span class="quotelev1">&gt;                             I'd be just interested in the Hello.java
</span><br>
<span class="quotelev1">&gt;                             and Ring.java?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             2015-08-04 14:34 GMT-06:00 Nate Chambers
</span><br>
<span class="quotelev1">&gt;                             &lt;nchamber_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                             &lt;mailto:nchamber_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 Sure, I reran the configure with
</span><br>
<span class="quotelev1">&gt;                                 CC=gcc and then make install. I think
</span><br>
<span class="quotelev1">&gt;                                 that's the proper way to do it.
</span><br>
<span class="quotelev1">&gt;                                 Attached is my config log. The
</span><br>
<span class="quotelev1">&gt;                                 behavior when running our code appears
</span><br>
<span class="quotelev1">&gt;                                 to be the same. The output is the same
</span><br>
<span class="quotelev1">&gt;                                 error I pasted in my email above. It
</span><br>
<span class="quotelev1">&gt;                                 occurs when calling MPI.init().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 I'm not great at debugging this sort
</span><br>
<span class="quotelev1">&gt;                                 of stuff, but happy to try things out
</span><br>
<span class="quotelev1">&gt;                                 if you need me to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 Nate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 On Tue, Aug 4, 2015 at 5:09 AM, Howard
</span><br>
<span class="quotelev1">&gt;                                 Pritchard &lt;hppritcha_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                                 &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     Hello Nate,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     As a first step to addressing
</span><br>
<span class="quotelev1">&gt;                                     this, could you please try using
</span><br>
<span class="quotelev1">&gt;                                     gcc rather than the Intel
</span><br>
<span class="quotelev1">&gt;                                     compilers to build Open MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     We've been doing a lot of work
</span><br>
<span class="quotelev1">&gt;                                     recently on the java bindings,
</span><br>
<span class="quotelev1">&gt;                                     etc. but have never tried using
</span><br>
<span class="quotelev1">&gt;                                     any compilers other
</span><br>
<span class="quotelev1">&gt;                                     than gcc when working with the
</span><br>
<span class="quotelev1">&gt;                                     java bindings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     2015-08-03 17:36 GMT-06:00 Nate
</span><br>
<span class="quotelev1">&gt;                                     Chambers &lt;nchamber_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                                     &lt;mailto:nchamber_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                         We've been struggling with
</span><br>
<span class="quotelev1">&gt;                                         this error for a while, so
</span><br>
<span class="quotelev1">&gt;                                         hoping someone more
</span><br>
<span class="quotelev1">&gt;                                         knowledgeable can help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                         Our java MPI code exits with a
</span><br>
<span class="quotelev1">&gt;                                         segfault during its normal
</span><br>
<span class="quotelev1">&gt;                                         operation, *but the segfault
</span><br>
<span class="quotelev1">&gt;                                         occurs before our code ever
</span><br>
<span class="quotelev1">&gt;                                         uses MPI functionality like
</span><br>
<span class="quotelev1">&gt;                                         sending/receiving. *We've
</span><br>
<span class="quotelev1">&gt;                                         removed all message calls and
</span><br>
<span class="quotelev1">&gt;                                         any use of MPI.COMM_WORLD from
</span><br>
<span class="quotelev1">&gt;                                         the code. The segfault occurs
</span><br>
<span class="quotelev1">&gt;                                         if we call MPI.init(args) in
</span><br>
<span class="quotelev1">&gt;                                         our code, and does not if we
</span><br>
<span class="quotelev1">&gt;                                         comment that line out. Further
</span><br>
<span class="quotelev1">&gt;                                         vexing us, the crash doesn't
</span><br>
<span class="quotelev1">&gt;                                         happen at the point of the
</span><br>
<span class="quotelev1">&gt;                                         MPI.init call, but later on in
</span><br>
<span class="quotelev1">&gt;                                         the program. I don't have an
</span><br>
<span class="quotelev1">&gt;                                         easy-to-run example here
</span><br>
<span class="quotelev1">&gt;                                         because our non-MPI code is so
</span><br>
<span class="quotelev1">&gt;                                         large and complicated. We have
</span><br>
<span class="quotelev1">&gt;                                         run simpler test programs with
</span><br>
<span class="quotelev1">&gt;                                         MPI and the segfault does not
</span><br>
<span class="quotelev1">&gt;                                         occur.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                         We have isolated the line
</span><br>
<span class="quotelev1">&gt;                                         where the segfault occurs.
</span><br>
<span class="quotelev1">&gt;                                         However, if we comment that
</span><br>
<span class="quotelev1">&gt;                                         out, the program will run
</span><br>
<span class="quotelev1">&gt;                                         longer, but then randomly (but
</span><br>
<span class="quotelev1">&gt;                                         deterministically) segfault
</span><br>
<span class="quotelev1">&gt;                                         later on in the code. Does
</span><br>
<span class="quotelev1">&gt;                                         anyone have tips on how to
</span><br>
<span class="quotelev1">&gt;                                         debug this? We have tried
</span><br>
<span class="quotelev1">&gt;                                         several flags with mpirun, but
</span><br>
<span class="quotelev1">&gt;                                         no good clues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                         We have also tried several MPI
</span><br>
<span class="quotelev1">&gt;                                         versions, including stable
</span><br>
<span class="quotelev1">&gt;                                         1.8.7 and the most recent 1.8.8rc1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                         ATTACHED
</span><br>
<span class="quotelev1">&gt;                                         - config.log from installation
</span><br>
<span class="quotelev1">&gt;                                         - output from `ompi_info -all`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                         OUTPUT FROM RUNNING
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;                                         &gt; mpirun -np 2 java -mx4g
</span><br>
<span class="quotelev1">&gt;                                         FeaturizeDay datadir/ days.txt
</span><br>
<span class="quotelev1">&gt;                                         ...
</span><br>
<span class="quotelev1">&gt;                                         some normal output from our code
</span><br>
<span class="quotelev1">&gt;                                         ...
</span><br>
<span class="quotelev1">&gt;                                         --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                                         mpirun noticed that process
</span><br>
<span class="quotelev1">&gt;                                         rank 0 with PID 29646 on node
</span><br>
<span class="quotelev1">&gt;                                         r9n69 exited on signal 11
</span><br>
<span class="quotelev1">&gt;                                         (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;                                         --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                         _______________________________________________
</span><br>
<span class="quotelev1">&gt;                                         users mailing list
</span><br>
<span class="quotelev1">&gt;                                         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                                         &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                                         Subscription:
</span><br>
<span class="quotelev1">&gt;                                         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                                         Link to this post:
</span><br>
<span class="quotelev1">&gt;                                         <a href="http://www.open-mpi.org/community/lists/users/2015/08/27386.php">http://www.open-mpi.org/community/lists/users/2015/08/27386.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     _______________________________________________
</span><br>
<span class="quotelev1">&gt;                                     users mailing list
</span><br>
<span class="quotelev1">&gt;                                     users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                                     &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                                     Subscription:
</span><br>
<span class="quotelev1">&gt;                                     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                                     Link to this post:
</span><br>
<span class="quotelev1">&gt;                                     <a href="http://www.open-mpi.org/community/lists/users/2015/08/27389.php">http://www.open-mpi.org/community/lists/users/2015/08/27389.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;                                 users mailing list
</span><br>
<span class="quotelev1">&gt;                                 users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                                 &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                                 Subscription:
</span><br>
<span class="quotelev1">&gt;                                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                                 Link to this post:
</span><br>
<span class="quotelev1">&gt;                                 <a href="http://www.open-mpi.org/community/lists/users/2015/08/27391.php">http://www.open-mpi.org/community/lists/users/2015/08/27391.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             _______________________________________________
</span><br>
<span class="quotelev1">&gt;                             users mailing list
</span><br>
<span class="quotelev1">&gt;                             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                             Subscription:
</span><br>
<span class="quotelev1">&gt;                             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                             Link to this post:
</span><br>
<span class="quotelev1">&gt;                             <a href="http://www.open-mpi.org/community/lists/users/2015/08/27392.php">http://www.open-mpi.org/community/lists/users/2015/08/27392.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         _______________________________________________
</span><br>
<span class="quotelev1">&gt;                         users mailing list
</span><br>
<span class="quotelev1">&gt;                         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                         Subscription:
</span><br>
<span class="quotelev1">&gt;                         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                         Link to this post:
</span><br>
<span class="quotelev1">&gt;                         <a href="http://www.open-mpi.org/community/lists/users/2015/08/27393.php">http://www.open-mpi.org/community/lists/users/2015/08/27393.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     _______________________________________________
</span><br>
<span class="quotelev1">&gt;                     users mailing list
</span><br>
<span class="quotelev1">&gt;                     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                     Subscription:
</span><br>
<span class="quotelev1">&gt;                     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                     Link to this post:
</span><br>
<span class="quotelev1">&gt;                     <a href="http://www.open-mpi.org/community/lists/users/2015/08/27396.php">http://www.open-mpi.org/community/lists/users/2015/08/27396.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;                 users mailing list
</span><br>
<span class="quotelev1">&gt;                 users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                 Subscription:
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                 Link to this post:
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/community/lists/users/2015/08/27399.php">http://www.open-mpi.org/community/lists/users/2015/08/27399.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             Subscription:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             Link to this post:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/community/lists/users/2015/08/27405.php">http://www.open-mpi.org/community/lists/users/2015/08/27405.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/08/27406.php">http://www.open-mpi.org/community/lists/users/2015/08/27406.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/08/27446.php">http://www.open-mpi.org/community/lists/users/2015/08/27446.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27450.php">http://www.open-mpi.org/community/lists/users/2015/08/27450.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27465/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27466.php">Schlottke-Lakemper, Michael: "[OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27464.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27450.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27471.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Reply:</strong> <a href="27471.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
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
