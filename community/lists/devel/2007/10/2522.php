<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 30 09:06:37 2007" -->
<!-- isoreceived="20071030130637" -->
<!-- sent="Tue, 30 Oct 2007 14:06:31 +0100 (CET)" -->
<!-- isosent="20071030130631" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]" -->
<!-- id="Pine.LNX.4.64.0710301204390.21934_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071030035113.GA22646_at_qlogic.com" -->
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
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-30 09:06:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2523.php">Dirk Eddelbuettel: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2521.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2521.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2524.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2524.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 29 Oct 2007, Tom Mitchell wrote:
<br>
<p><span class="quotelev1">&gt; Debian is not supported by the PathScale compiler.
</span><br>
<p>Thanks for your answer. In the meantime I have found a workaround for 
<br>
my situation, but I'll answer for the sake of the e-mail archives.
<br>
<p><span class="quotelev1">&gt; which one is is being used?  The new Debian etch 64bit has minimal 
</span><br>
<span class="quotelev1">&gt; support for 32 bit user space programs by default. It may be 
</span><br>
<span class="quotelev1">&gt; necessary to install 32 bit libs and or compatability libs to get it 
</span><br>
<span class="quotelev1">&gt; to run correctly.
</span><br>
<p>It is indeed the 64bit version. However I was able to use the 
<br>
PathScale compiler to compile other applications without problems, so 
<br>
it was a specific interaction, probably with the threading support, 
<br>
that was triggered by Open MPI which showed up. I guess that if the 
<br>
necessary libs would be missing, the compiler wouldn't work at all or 
<br>
ldd would show missing libs for the other executables that the 
<br>
compiler produced.
<br>
<p><span class="quotelev1">&gt; I do not know which gcc compiler suite Debian GCC is based on.
</span><br>
<p>gcc version 4.1.2 20061115 (prerelease) (Debian 4.1.1-21)
<br>
<p><span class="quotelev1">&gt; In RHEL4 compare and contrast gcc4-4.1.1-53 .vs. gcc-3.4.6-8. The 
</span><br>
<span class="quotelev1">&gt; Pathscale compiler is recently rebased to also work with gcc4 based 
</span><br>
<span class="quotelev1">&gt; systems.
</span><br>
<p>Should I understand from this statement that the PathScale compilers 
<br>
version 3.0 are only compatible with gcc 3.4 and not with gcc 4.1 
<br>
based systems ?
<br>
<p><span class="quotelev1">&gt; Do foundation Open MPI tools like .../bin/orterun compile and run 
</span><br>
<span class="quotelev1">&gt; well enough to return errors?
</span><br>
<p>They compile fine, but they give segmentation faults when run.
<br>
<p><span class="quotelev1">&gt; Scan the eko man page for PathScale compiler specific options.
</span><br>
<p>I don't quite understand what you mean here... especially what 
<br>
'specific options' refer to.
<br>
<p><span class="quotelev1">&gt; ompi_info does not capture compiler flags so report your configure 
</span><br>
<span class="quotelev1">&gt; line, make line and environment variables.
</span><br>
<p>One of my earlier messages already included the configure line; the 
<br>
environment is only modified to set CC=pathcc, etc. and there are no 
<br>
options on the make line; just like the documentation says that I 
<br>
should do...
<br>
<p><pre>
-- 
Bogdan Costescu
IWR - Interdisziplinaeres Zentrum fuer Wissenschaftliches Rechnen
Universitaet Heidelberg, INF 368, D-69120 Heidelberg, GERMANY
Telephone: +49 6221 54 8869, Telefax: +49 6221 54 8868
E-mail: Bogdan.Costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2523.php">Dirk Eddelbuettel: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2521.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2521.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2524.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2524.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
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
