<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jan 28 08:55:10 2006" -->
<!-- isoreceived="20060128135510" -->
<!-- sent="Sat, 28 Jan 2006 08:55:03 -0500" -->
<!-- isosent="20060128135503" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] libtool error" -->
<!-- id="C1FB100F-3D5F-41AF-B1A7-4CA30CF8A305_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71026C24-6686-4C5A-9302-41C4BA8D3FE6_at_osc.edu" -->
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
<strong>Date:</strong> 2006-01-28 08:55:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0535.php">Jeff Squyres: "Re: [O-MPI users] a familiar problem?"</a>
<li><strong>Previous message:</strong> <a href="0533.php">Tom Rosmond: "[O-MPI users] a familiar problem?"</a>
<li><strong>In reply to:</strong> <a href="0530.php">Dave Hudak: "[O-MPI users] libtool error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave --
<br>
<p>&nbsp;From your config.log, it looks like you had either the environment  
<br>
variable LDFLAGS or LIBS set to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-L~/param/lib -L/opt/local/lib
<br>
<p>This is what is causing the libtool error -- the &quot;~&quot; construct is a  
<br>
shell construct that is only interpreted properly when it begins a  
<br>
token on the command line (i.e., since it's the 3rd character in the  
<br>
token above, it is not replaced with your home directory).
<br>
<p>Unless you need these -L's for Open MPI to build properly, you might  
<br>
want to simply unset LDFLAGS / LIBS before running Open MPI's  
<br>
configure.  If you do need them, replace &quot;~&quot; with the full path to  
<br>
your home directory (or use $HOME, which will be substituted properly  
<br>
in the middle of a shell command line token).
<br>
<p><p>On Jan 27, 2006, at 12:36 PM, Dave Hudak wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am having problem with the configure stage of building openmpi.   
</span><br>
<span class="quotelev1">&gt; I downloaded the 1.0.1 release tarball, unpacked it and ran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi | &amp; tee config-output.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...it ran for a couple minutes and then said:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; config.status: config.h is unchanged
</span><br>
<span class="quotelev1">&gt; config.status: executing depfiles commands
</span><br>
<span class="quotelev1">&gt; configure: /bin/sh './configure' succeeded for opal/libltdl
</span><br>
<span class="quotelev1">&gt; checking for libtool-supplied linker flags... libtool error!
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached the config.log and the output of configure.  I have  
</span><br>
<span class="quotelev1">&gt; a PowerMac quad G5, OS X 10.4.4, XCode 2.2, plus assorted utilities  
</span><br>
<span class="quotelev1">&gt; installed from darwinports and fink.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Dave Hudak
</span><br>
<span class="quotelev1">&gt; &lt;dhudak-error.tgz&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; David E. Hudak, Ph.D.
</span><br>
<span class="quotelev1">&gt; dhudak_at_[hidden]
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0535.php">Jeff Squyres: "Re: [O-MPI users] a familiar problem?"</a>
<li><strong>Previous message:</strong> <a href="0533.php">Tom Rosmond: "[O-MPI users] a familiar problem?"</a>
<li><strong>In reply to:</strong> <a href="0530.php">Dave Hudak: "[O-MPI users] libtool error"</a>
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
