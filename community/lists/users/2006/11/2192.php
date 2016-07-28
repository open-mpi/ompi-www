<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 20 14:53:59 2006" -->
<!-- isoreceived="20061120195359" -->
<!-- sent="Mon, 20 Nov 2006 14:54:43 -0500" -->
<!-- isosent="20061120195443" -->
<!-- name="Patrick Jessee" -->
<!-- email="pj_at_[hidden]" -->
<!-- subject="[OMPI users] removing hard-coded paths from OpenMPI shared libraries" -->
<!-- id="45620803.8050404_at_fluent.com" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Patrick Jessee (<em>pj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-20 14:54:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2193.php">Lydia Heck: "[OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<li><strong>Previous message:</strong> <a href="2191.php">Reuti: "Re: [OMPI users] Advice for a cluster software"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2196.php">Jeff Squyres: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
<li><strong>Reply:</strong> <a href="2196.php">Jeff Squyres: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
<li><strong>Maybe reply:</strong> <a href="2199.php">Adam Young: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello.  I'm wondering if anyone knows of a way to get OpenMPI to compile 
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
<p><p><p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2193.php">Lydia Heck: "[OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<li><strong>Previous message:</strong> <a href="2191.php">Reuti: "Re: [OMPI users] Advice for a cluster software"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2196.php">Jeff Squyres: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
<li><strong>Reply:</strong> <a href="2196.php">Jeff Squyres: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
<li><strong>Maybe reply:</strong> <a href="2199.php">Adam Young: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
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
