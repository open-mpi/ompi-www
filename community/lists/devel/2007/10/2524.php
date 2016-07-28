<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 30 13:31:33 2007" -->
<!-- isoreceived="20071030173133" -->
<!-- sent="Tue, 30 Oct 2007 10:31:28 -0700" -->
<!-- isosent="20071030173128" -->
<!-- name="Tom Mitchell" -->
<!-- email="tom.mitchell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]" -->
<!-- id="20071030173128.GA17029_at_qlogic.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.0710301204390.21934_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Tom Mitchell (<em>tom.mitchell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-30 13:31:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2525.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2523.php">Dirk Eddelbuettel: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2522.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2525.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2525.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 30 02:06, Bogdan Costescu wrote:
<br>
<span class="quotelev1">&gt; On Mon, 29 Oct 2007, Tom Mitchell wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Debian is not supported by the PathScale compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your answer. In the meantime I have found a workaround for 
</span><br>
<span class="quotelev1">&gt; my situation, but I'll answer for the sake of the e-mail archives.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; which one is is being used?  The new Debian etch 64bit has minimal 
</span><br>
<span class="quotelev2">&gt; &gt; support for 32 bit user space programs by default. It may be 
</span><br>
<span class="quotelev2">&gt; &gt; necessary to install 32 bit libs and or compatability libs to get it 
</span><br>
<span class="quotelev2">&gt; &gt; to run correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is indeed the 64bit version. However I was able to use the 
</span><br>
<span class="quotelev1">&gt; PathScale compiler to compile other applications without problems, so 
</span><br>
<span class="quotelev1">&gt; it was a specific interaction, probably with the threading support, 
</span><br>
<span class="quotelev1">&gt; that was triggered by Open MPI which showed up. I guess that if the 
</span><br>
<span class="quotelev1">&gt; necessary libs would be missing, the compiler wouldn't work at all or 
</span><br>
<span class="quotelev1">&gt; ldd would show missing libs for the other executables that the 
</span><br>
<span class="quotelev1">&gt; compiler produced.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I do not know which gcc compiler suite Debian GCC is based on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gcc version 4.1.2 20061115 (prerelease) (Debian 4.1.1-21)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In RHEL4 compare and contrast gcc4-4.1.1-53 .vs. gcc-3.4.6-8. The 
</span><br>
<span class="quotelev2">&gt; &gt; Pathscale compiler is recently rebased to also work with gcc4 based 
</span><br>
<span class="quotelev2">&gt; &gt; systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should I understand from this statement that the PathScale compilers 
</span><br>
<span class="quotelev1">&gt; version 3.0 are only compatible with gcc 3.4 and not with gcc 4.1 
</span><br>
<span class="quotelev1">&gt; based systems ?
</span><br>
<p>No but there are choices in how pathcc can be invoked
<br>
and thus what frontend and other chunks are active.
<br>
Example on CentOS release 4.5 (RHEL4.5).
<br>
<p><p>$ pathcc -v
<br>
QLogic PathScale(TM) Compiler Suite: Version 3.0
<br>
Built on: 2007-02-22 13:05:15 -0800
<br>
Thread model: posix
<br>
GNU gcc version 3.3.1 (PathScale 3.0 driver)
<br>
<p>$ pathcc -v -gnu4
<br>
QLogic PathScale(TM) Compiler Suite: Version 3.0
<br>
Built on: 2007-02-22 13:05:15 -0800
<br>
Thread model: posix
<br>
GNU gcc version 4.0.2 (PathScale 3.0 driver)
<br>
<p>Try adding -gnu4 to the &quot;C&quot; flags and see if 
<br>
the segmentation faults exit.   If .../bin/orterun
<br>
segfaults 
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Do foundation Open MPI tools like .../bin/orterun compile and run 
</span><br>
<span class="quotelev2">&gt; &gt; well enough to return errors?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They compile fine, but they give segmentation faults when run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Scan the eko man page for PathScale compiler specific options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't quite understand what you mean here... especially what 
</span><br>
<span class="quotelev1">&gt; 'specific options' refer to.
</span><br>
<p>Since major parts of the PathScale are gcc or gcc compatable
<br>
the most common flags are in the GCC suite and man pages.
<br>
Flags like -gnu4 are covered in the eko man page and are 
<br>
specific to the pathscale compiler.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info does not capture compiler flags so report your configure 
</span><br>
<span class="quotelev2">&gt; &gt; line, make line and environment variables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One of my earlier messages already included the configure line; the 
</span><br>
<span class="quotelev1">&gt; environment is only modified to set CC=pathcc, etc. and there are no 
</span><br>
<span class="quotelev1">&gt; options on the make line; just like the documentation says that I 
</span><br>
<span class="quotelev1">&gt; should do...
</span><br>
<p>Thanks.  
<br>
Since you are on Debian it may be interesting to see
<br>
what 'configure' found and what the  generated compile line for 
<br>
orterun and it's library functions ended up being.
<br>
<p>This can include the &quot;libtool&quot; lines.  
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Bogdan Costescu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IWR - Interdisziplinaeres Zentrum fuer Wissenschaftliches Rechnen
</span><br>
<span class="quotelev1">&gt; Universitaet Heidelberg, INF 368, D-69120 Heidelberg, GERMANY
</span><br>
<span class="quotelev1">&gt; Telephone: +49 6221 54 8869, Telefax: +49 6221 54 8868
</span><br>
<span class="quotelev1">&gt; E-mail: Bogdan.Costescu_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
	T o m   M i t c h e l l
	Host Solutions Group, QLogic Corp.  
	<a href="http://www.qlogic.com">http://www.qlogic.com</a>   <a href="http://support.qlogic.com">http://support.qlogic.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2525.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2523.php">Dirk Eddelbuettel: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2522.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2525.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2525.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
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
