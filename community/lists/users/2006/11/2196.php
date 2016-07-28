<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 20 20:51:01 2006" -->
<!-- isoreceived="20061121015101" -->
<!-- sent="Mon, 20 Nov 2006 20:50:49 -0500" -->
<!-- isosent="20061121015049" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] removing hard-coded paths from OpenMPI shared libraries" -->
<!-- id="3A645291-9D27-4556-A085-254305BAF673_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45620803.8050404_at_fluent.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-20 20:50:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2197.php">Lydia Heck: "Re: [OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<li><strong>Previous message:</strong> <a href="2195.php">Maestas, Christopher Daniel: "[OMPI users] Quote on mvapich site"</a>
<li><strong>In reply to:</strong> <a href="2192.php">Patrick Jessee: "[OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2204.php">Patrick Jessee: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared	libraries"</a>
<li><strong>Reply:</strong> <a href="2204.php">Patrick Jessee: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared	libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is certainly the default for GNU Libtool-build shared libraries  
<br>
(such as Open MPI).  Ralf W -- is there a way to disable this?
<br>
<p>As a sidenote, we added the &quot;--prefix&quot; option to mpirun to be able to  
<br>
override the LD_LIBRARY_PATH on remote nodes for circumstances like  
<br>
this.  For example, say you build/install to /somedir, but then  
<br>
distribute Open MPI and the user installs it to /otherdir.  I know  
<br>
almost nothing about Fluent :-(, but do you wrap the call to mpirun  
<br>
in a script/executable somewhere?  Such that you could hide:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --prefix /otherdir ...
<br>
<p>This might be good enough to do what you need.
<br>
<p>Would that work?
<br>
<p><p>On Nov 20, 2006, at 2:54 PM, Patrick Jessee wrote:
<br>
<p><span class="quotelev1">&gt; Hello.  I'm wondering if anyone knows of a way to get OpenMPI to  
</span><br>
<span class="quotelev1">&gt; compile shared libraries without hard-coding the installation  
</span><br>
<span class="quotelev1">&gt; directory in them.  After compiling and installing OpenMPI, the  
</span><br>
<span class="quotelev1">&gt; shared libraries have the installation libraries hard-coded in  
</span><br>
<span class="quotelev1">&gt; them.  For instance:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ldd libmpi.so
</span><br>
<span class="quotelev1">&gt;        liborte.so.0 =&gt; /usr/local/fluent/develop/multiport4.4/ 
</span><br>
<span class="quotelev1">&gt; packages/lnamd64/openmpi/openmpi-1.1.2/lib/liborte.so.0  
</span><br>
<span class="quotelev1">&gt; (0x0000002a956ea000)
</span><br>
<span class="quotelev1">&gt;        libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000002a95852000)
</span><br>
<span class="quotelev1">&gt;        libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000002a95968000)
</span><br>
<span class="quotelev1">&gt;        libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x0000002a95a6c000)
</span><br>
<span class="quotelev1">&gt;        libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0  
</span><br>
<span class="quotelev1">&gt; (0x0000002a95bc4000)
</span><br>
<span class="quotelev1">&gt;        libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x0000002a95cd8000)
</span><br>
<span class="quotelev1">&gt;        libopal.so.0 =&gt; /usr/local/fluent/develop/multiport4.4/ 
</span><br>
<span class="quotelev1">&gt; packages/lnamd64/openmpi/openmpi-1.1.2/lib/libopal.so.0  
</span><br>
<span class="quotelev1">&gt; (0x0000002a95f00000)
</span><br>
<span class="quotelev1">&gt;        /lib64/ld-linux-x86-64.so.2 (0x000000552aaaa000)
</span><br>
<span class="quotelev1">&gt;        libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000002a9605a000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the above, &quot;/usr/local/fluent/develop/multiport4.4/packages/ 
</span><br>
<span class="quotelev1">&gt; lnamd64/openmpi/openmpi-1.1.2/lib&quot; is hardcoded into libmpi.so  
</span><br>
<span class="quotelev1">&gt; using --rpath when libmpi.so is compiled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is problematic because the installation cannot be moved after  
</span><br>
<span class="quotelev1">&gt; it is installed.  It is often useful to compile/install libraries  
</span><br>
<span class="quotelev1">&gt; on one machine and then move the libraries to a different location  
</span><br>
<span class="quotelev1">&gt; on other machines (of course, LD_LIBRARY_PATH or some means then  
</span><br>
<span class="quotelev1">&gt; needs to be used to pick up libs are runtime).  This relocation is  
</span><br>
<span class="quotelev1">&gt; also useful when redistributing the MPI installation with an  
</span><br>
<span class="quotelev1">&gt; application.  The hard-coded paths prohibit this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried to modify the &quot;--rpath&quot; argument in libtool and opal/ 
</span><br>
<span class="quotelev1">&gt; libltdl/libtool, but have not gotten this to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone else had experience with this?  (I'm building OpenMPI  
</span><br>
<span class="quotelev1">&gt; 1.1.2 on linux x86_64.)  Thanks in advance for any potential help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Patrick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;pj.vcf&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2197.php">Lydia Heck: "Re: [OMPI users] myrinet mx and openmpi using solaris, sun compilers"</a>
<li><strong>Previous message:</strong> <a href="2195.php">Maestas, Christopher Daniel: "[OMPI users] Quote on mvapich site"</a>
<li><strong>In reply to:</strong> <a href="2192.php">Patrick Jessee: "[OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2204.php">Patrick Jessee: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared	libraries"</a>
<li><strong>Reply:</strong> <a href="2204.php">Patrick Jessee: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared	libraries"</a>
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
