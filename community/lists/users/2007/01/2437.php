<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan  5 15:41:33 2007" -->
<!-- isoreceived="20070105204133" -->
<!-- sent="Fri, 5 Jan 2007 14:41:19 -0600" -->
<!-- isosent="20070105204119" -->
<!-- name="Grobe, Gary L. \(JSC-EV\)[ESCG]" -->
<!-- email="gary.l.grobe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="559847D38F12F742B0EE27727596F42901A7F343_at_NDJSEVS14.ndc.nasa.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="559847D38F12F742B0EE27727596F42901A7F319_at_NDJSEVS14.ndc.nasa.gov" -->
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
<strong>From:</strong> Grobe, Gary L. \(JSC-EV\)[ESCG] (<em>gary.l.grobe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-05 15:41:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2438.php">Rainer Keller: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Previous message:</strong> <a href="2436.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2436.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2439.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, sorry about that last. I think someone just bumped up the required
<br>
version of Automake. 
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Grobe, Gary L. (JSC-EV)[ESCG]
<br>
Sent: Friday, January 05, 2007 2:29 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Ompi failing on mx only
<br>
<p>This is just an FYI of the Jan 5th snapshot.
<br>
<p>I'll send a backtrace of the processes as soon as I get a b3 running.
<br>
Between my filtered webdav svn access problems and the latest nightly
<br>
snapshots, my builds are currently failing where the same config lines
<br>
worked on previous snapshots ...
<br>
<p>$./configure --prefix=/usr/local/openmpi-1.2b3r13006 --with-mx=/opt/mx
<br>
--with-mx-libdir=/opt/mx/lib ...
<br>
<p>*** GNU libltdl setup
<br>
configure: OMPI configuring in opal/libltdl
<br>
configure: running /bin/sh './configure'
<br>
'--prefix=/usr/local/openmpi-1.2b3r13006' '--with-mx=/opt/mx'
<br>
'--with-mx-libdir=/opt/mx/lib' 'F77=ifort' --enable-ltdl-convenience
<br>
--disable-ltdl-install --enable-shared --disable-static
<br>
--cache-file=/dev/null --srcdir=.
<br>
checking for a BSD-compatible install... /usr/bin/install -c checking
<br>
whether build environment is sane... configure: error: newly created
<br>
file is older than distributed files!
<br>
Check your system clock
<br>
configure: /bin/sh './configure' *failed* for opal/libltdl
<br>
configure: error: Failed to build GNU libltdl.  This usually means that
<br>
something is incorrectly setup with your environment.  There may be
<br>
useful information in opal/libltdl/config.log.  You can also disable GNU
<br>
libltdl (which will disable dynamic shared object loading) by
<br>
configuring with --disable-dlopen.
<br>
<p>---- end of output of /opal/libltdl/config.log ----
<br>
<p>## ----------- ##
<br>
## confdefs.h. ##
<br>
## ----------- ##
<br>
<p>#define PACKAGE_BUGREPORT &quot;bug-libtool_at_[hidden]&quot;
<br>
#define PACKAGE_NAME &quot;libltdl&quot;
<br>
#define PACKAGE_STRING &quot;libltdl 2.1a&quot;
<br>
#define PACKAGE_TARNAME &quot;libltdl&quot;
<br>
#define PACKAGE_VERSION &quot;2.1a&quot;
<br>
<p>configure: exit 1
<br>
<p><p>-----Original Message-----
<br>
Now, if you use the latest trunk, you can use the new MX BTL which
<br>
provide support for shared memory and self communications. Add &quot;--mca
<br>
pml ob1 --mca btl mx --mca btl_mx_shared_mem 1 --mca btl_mx_self 1&quot;  
<br>
in order to activate these new features. If you have a 10G cards, I
<br>
suggest you add &quot;--mca btl_mx_flags 2&quot; as well.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>PS: Is there any way you can attach to the processes with gdb ? I would
<br>
like to see the backtrace as showed by gdb in order to be able to figure
<br>
out what's wrong there.
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2438.php">Rainer Keller: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Previous message:</strong> <a href="2436.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2436.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2439.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
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
