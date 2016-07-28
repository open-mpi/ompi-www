<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan  5 15:29:08 2007" -->
<!-- isoreceived="20070105202908" -->
<!-- sent="Fri, 5 Jan 2007 14:28:55 -0600" -->
<!-- isosent="20070105202855" -->
<!-- name="Grobe, Gary L. \(JSC-EV\)[ESCG]" -->
<!-- email="gary.l.grobe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="559847D38F12F742B0EE27727596F42901A7F319_at_NDJSEVS14.ndc.nasa.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0B3D6095-A116-4D41-8B98-901FE8D3D174_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-01-05 15:28:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2437.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2435.php">lund_at_[hidden]: "[OMPI users] external32 i/o not implemented?"</a>
<li><strong>In reply to:</strong> <a href="2434.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2437.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2437.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is just an FYI of the Jan 5th snapshot.
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
--with-mx-libdir=/opt/mx/lib
<br>
...
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
checking for a BSD-compatible install... /usr/bin/install -c
<br>
checking whether build environment is sane... configure: error: newly
<br>
created file is older than distributed files!
<br>
Check your system clock
<br>
configure: /bin/sh './configure' *failed* for opal/libltdl
<br>
configure: error: Failed to build GNU libltdl.  This usually means that
<br>
something
<br>
is incorrectly setup with your environment.  There may be useful
<br>
information in
<br>
opal/libltdl/config.log.  You can also disable GNU libltdl (which will
<br>
disable
<br>
dynamic shared object loading) by configuring with --disable-dlopen.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2437.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2435.php">lund_at_[hidden]: "[OMPI users] external32 i/o not implemented?"</a>
<li><strong>In reply to:</strong> <a href="2434.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2437.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2437.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
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
