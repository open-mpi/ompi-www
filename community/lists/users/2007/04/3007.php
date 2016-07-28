<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 07:59:24 2007" -->
<!-- isoreceived="20070404115924" -->
<!-- sent="Wed, 04 Apr 2007 13:59:19 +0200" -->
<!-- isosent="20070404115919" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]" -->
<!-- id="46139317.8080206_at_sara.nl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="16FCEAB8-06B5-43A6-A84D-65377C3A3BC0_at_cisco.com" -->
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
<strong>From:</strong> Bas van der Vlies (<em>basv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-04 07:59:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3008.php">Jeff Squyres: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="3006.php">Jeff Squyres: "Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]"</a>
<li><strong>In reply to:</strong> <a href="3001.php">Jeff Squyres: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3008.php">Jeff Squyres: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Reply:</strong> <a href="3008.php">Jeff Squyres: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 4, 2007, at 4:28 AM, Bas van der Vlies wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is the fix in trunk or also in the nighly build release. When i  
</span><br>
<span class="quotelev2">&gt;&gt; download
</span><br>
<span class="quotelev2">&gt;&gt; the trunk version ./autogen.sh fails.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You only need to use autogen.sh when building from an SVN checkout.   
</span><br>
<span class="quotelev1">&gt; Did you follow the instructions for SVN builds listed here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Yes i get this error message:
<br>
<p>*** Running GNU tools
<br>
[Running] autom4te --language=m4sh ompi_get_version.m4sh -o 
<br>
ompi_get_version.sh
<br>
[Running] aclocal
<br>
[Running] autoheader
<br>
[Running] autoconf
<br>
[Running] libtoolize --automake --copy --ltdl
<br>
Adjusting libltdl for OMPI :-(
<br>
&nbsp;&nbsp;&nbsp;-- patching for argz bugfix in libtool 1.5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; your libtool doesn't need this! yay!
<br>
&nbsp;&nbsp;&nbsp;-- patching 64-bit OS X bug in ltmain.sh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; your libtool doesn't need this! yay!
<br>
&nbsp;&nbsp;&nbsp;-- RTLD_GLOBAL in libltdl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; your libltdl doesn't need this! yay!
<br>
&nbsp;&nbsp;&nbsp;-- patching configure for broken -c/-o compiler test
<br>
[Running] automake --foreign -a --copy --include-deps
<br>
configure.ac:51: require Automake 1.10, but have 1.9.6
<br>
<p>-------------------------------------------------------------------------
<br>
It seems that the execution of &quot;automake --foreign -a --copy 
<br>
--include-deps&quot; has failed.  See above for
<br>
the specific error message that caused it to abort.
<br>
<p>This *MAY* be caused by an older version of one of the required
<br>
packages.  Please make sure you are using at least the following
<br>
versions:
<br>
<p>GNU Autoconf 2.59
<br>
GNU Automake 1.9.6
<br>
GNU Libtool  1.5.16
<br>
-------------------------------------------------------------------------
<br>
<p><p><p><span class="quotelev2">&gt;&gt; If i use the nighyly build version of openmpi-1.2.1a0r14212.tar.gz. We
</span><br>
<span class="quotelev2">&gt;&gt; still observe a memory leak. Is this the right version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, this version has Mohamad's fixes in it.  Can you be specific  
</span><br>
<span class="quotelev1">&gt; about the memory leak that you are seeing?  Do you have some valgrind  
</span><br>
<span class="quotelev1">&gt; output or something similar?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I do not have valgrind output. What i have done is run this job on 4 
<br>
nodes with two cpus (8 tasks) and run it for a long period and monitor 
<br>
the memory usage with top. What we see is that it consumes more and more 
<br>
memory.
<br>
<p><p><pre>
-- 
********************************************************************
*                                                                  *
*  Bas van der Vlies                     e-mail: basv_at_[hidden]      *
*  SARA - Academic Computing Services    phone:  +31 20 592 8012   *
*  Kruislaan 415                         fax:    +31 20 6683167    *
*  1098 SJ Amsterdam                                               *
*                                                                  *
********************************************************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3008.php">Jeff Squyres: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="3006.php">Jeff Squyres: "Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]"</a>
<li><strong>In reply to:</strong> <a href="3001.php">Jeff Squyres: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3008.php">Jeff Squyres: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Reply:</strong> <a href="3008.php">Jeff Squyres: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
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
