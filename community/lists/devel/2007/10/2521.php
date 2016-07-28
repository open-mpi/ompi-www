<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 29 23:51:17 2007" -->
<!-- isoreceived="20071030035117" -->
<!-- sent="Mon, 29 Oct 2007 20:51:13 -0700" -->
<!-- isosent="20071030035113" -->
<!-- name="Tom Mitchell" -->
<!-- email="tom.mitchell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]" -->
<!-- id="20071030035113.GA22646_at_qlogic.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8088526F-C5C7-4B47-B257-72B7DD849E65_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-29 23:51:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2522.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2520.php">David Erukhimovich: "Re: [OMPI devel] Hostfile param: was Trying to get total procs num in odls framework"</a>
<li><strong>In reply to:</strong> <a href="2485.php">Jeff Squyres: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2522.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2522.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2523.php">Dirk Eddelbuettel: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 23 08:57, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 23, 2007, at 6:33 AM, Bogdan Costescu wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There is in the openib BTL.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The bug #1025 has in one the answers the following phrase:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;It looks like this will affect many threading issues with the
</span><br>
<span class="quotelev2">&gt; &gt; pathscale compiler -- the openib BTL is simply the first place we
</span><br>
<span class="quotelev2">&gt; &gt; tripped it.&quot;
</span><br>
......
<br>
<p><span class="quotelev3">&gt; &gt;&gt; and I do not see the problems that you are seeing.  :-\  Is Debian
</span><br>
<span class="quotelev3">&gt; &gt;&gt; etch a supported pathscale platform?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Seems like it's not... And indeed the older RHEL4 is a supported
</span><br>
<span class="quotelev2">&gt; &gt; platform, which might explain the different results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might want to ask them if Debian etch is supported.
</span><br>
<p><p>Debian is not supported by the PathScale compiler.  It might
<br>
be possible to get it to run... ;-) on the most recent &quot;Debian
<br>
etch&quot; but I am sure it is untested.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.pathscale.com/docs/Install.pdf">http://www.pathscale.com/docs/Install.pdf</a>
<br>
<p>See Section 2:  Table 2-1 Supported Linux Distributions and Platforms
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Red Hat Enterprise Linux 4 (RHEL4) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fedora Core 3, 4, 5 (FC3, FC4, FC5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUSE Linux Enterprise 10a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUSE Linux Enterprise Server (SLES) 9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUSE Linux Professional 9.3
<br>
<p>The Pathscale compiler itself is a 32bit object.
<br>
There are two versions of Debian etch,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;32bit and 64bit
<br>
which one is is being used?  The new Debian etch 64bit has
<br>
minimal support for 32 bit user space programs by default. It may be
<br>
necessary to install 32 bit libs and or compatability libs to
<br>
get it to run correctly.
<br>
<p>I do not know which gcc compiler suite Debian GCC is based on.
<br>
&quot;gcc -v &quot; can tell volumes.  Since the PathScale compiler
<br>
uses parts of the gcc compiler suite this could be important.
<br>
In RHEL4 compare and contrast gcc4-4.1.1-53  .vs. gcc-3.4.6-8.
<br>
The Pathscale compiler is recently rebased to also work with gcc4
<br>
based systems.
<br>
<p>Do foundation Open MPI tools like .../bin/orterun 
<br>
compile and run well enough to return errors?  If the Usage message
<br>
fails to print then all bets are off for MPI itself. Example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$  OMPIhome/bin/orterun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orterun (OpenRTE) YourVersion
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Usage: orterun [OPTION]...  [PROGRAM]...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start the given program using Open RTE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;... etc.
<br>
<p>Scan the eko man page for PathScale compiler specific options.
<br>
<p>ompi_info does not capture compiler flags so report your
<br>
configure line, make line and environment variables.
<br>
<p><p><p><pre>
-- 
	T o m   M i t c h e l l
	Host Solutions Group, QLogic Corp.  
	<a href="http://www.qlogic.com">http://www.qlogic.com</a>   <a href="http://support.qlogic.com">http://support.qlogic.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2522.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2520.php">David Erukhimovich: "Re: [OMPI devel] Hostfile param: was Trying to get total procs num in odls framework"</a>
<li><strong>In reply to:</strong> <a href="2485.php">Jeff Squyres: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2522.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2522.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2523.php">Dirk Eddelbuettel: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
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
