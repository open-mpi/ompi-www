<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 21 11:37:51 2006" -->
<!-- isoreceived="20061121163751" -->
<!-- sent="Tue, 21 Nov 2006 08:37:41 -0800" -->
<!-- isosent="20061121163741" -->
<!-- name="Adam Young" -->
<!-- email="ayoung_at_[hidden]" -->
<!-- subject="Re: [OMPI users] removing hard-coded paths from OpenMPI shared libraries" -->
<!-- id="3142CEFB1403044F9954E2DF6C85660F0A551D_at_jellyfish.highlyscyld.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] removing hard-coded paths from OpenMPI shared libraries" -->
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
<strong>From:</strong> Adam Young (<em>ayoung_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-21 11:37:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2200.php">Brock Palen: "[OMPI users] myirnet problems on OSX"</a>
<li><strong>Previous message:</strong> <a href="2198.php">Galen M. Shipman: "Re: [OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<li><strong>Maybe in reply to:</strong> <a href="2192.php">Patrick Jessee: "[OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not knowing the openmpi build system, I am a little reluctant to say.  But in most projects  there is usually multiple paths that can be set at configure time.  In most autoconfed projects it is called prefix.  There are other ones that can be set for headers, etc.
<br>
<p>&nbsp;-----Original Message-----
<br>
From: 	Patrick Jessee [mailto:pj_at_[hidden]]
<br>
Sent:	Mon Nov 20 11:56:48 2006
<br>
To:	users_at_[hidden]
<br>
Subject:	[OMPI users] removing hard-coded paths from OpenMPI shared libraries
<br>
<p><p>Hello.  I'm wondering if anyone knows of a way to get OpenMPI to compile 
<br>
shared libraries without hard-coding the installation directory in 
<br>
them.  After compiling and installing OpenMPI, the shared libraries have 
<br>
the installation libraries hard-coded in them.  For instance:
<br>
<p>$ ldd libmpi.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;liborte.so.0 =&gt; 
<br>
/usr/local/fluent/develop/multiport4.4/packages/lnamd64/openmpi/openmpi-1.1.2/lib/liborte.so.0 
<br>
(0x0000002a956ea000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000002a95852000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000002a95968000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x0000002a95a6c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0 (0x0000002a95bc4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x0000002a95cd8000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopal.so.0 =&gt; 
<br>
/usr/local/fluent/develop/multiport4.4/packages/lnamd64/openmpi/openmpi-1.1.2/lib/libopal.so.0 
<br>
(0x0000002a95f00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x000000552aaaa000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000002a9605a000)
<br>
<p><p>In the above, 
<br>
&quot;/usr/local/fluent/develop/multiport4.4/packages/lnamd64/openmpi/openmpi-1.1.2/lib&quot; 
<br>
is hardcoded into libmpi.so using --rpath when libmpi.so is compiled.
<br>
<p>This is problematic because the installation cannot be moved after it is 
<br>
installed.  It is often useful to compile/install libraries on one 
<br>
machine and then move the libraries to a different location on other 
<br>
machines (of course, LD_LIBRARY_PATH or some means then needs to be used 
<br>
to pick up libs are runtime).  This relocation is also useful when 
<br>
redistributing the MPI installation with an application.  The hard-coded 
<br>
paths prohibit this.
<br>
<p>I've tried to modify the &quot;--rpath&quot; argument in libtool and 
<br>
opal/libltdl/libtool, but have not gotten this to work.
<br>
<p>Has anyone else had experience with this?  (I'm building OpenMPI 1.1.2 
<br>
on linux x86_64.)  Thanks in advance for any potential help.
<br>
<p>Regards,
<br>
<p>-Patrick
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2199/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2200.php">Brock Palen: "[OMPI users] myirnet problems on OSX"</a>
<li><strong>Previous message:</strong> <a href="2198.php">Galen M. Shipman: "Re: [OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<li><strong>Maybe in reply to:</strong> <a href="2192.php">Patrick Jessee: "[OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
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
