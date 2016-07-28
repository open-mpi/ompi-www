<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 08:03:58 2007" -->
<!-- isoreceived="20070404120358" -->
<!-- sent="Wed, 4 Apr 2007 08:03:28 -0400" -->
<!-- isosent="20070404120328" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]" -->
<!-- id="27BBB716-ED58-49B9-A818-9F96899CD393_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46139317.8080206_at_sara.nl" -->
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
<strong>Date:</strong> 2007-04-04 08:03:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3009.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="3007.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>In reply to:</strong> <a href="3007.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3009.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Reply:</strong> <a href="3009.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 4, 2007, at 7:59 AM, Bas van der Vlies wrote:
<br>
<p><span class="quotelev2">&gt;&gt;      <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Yes i get this error message:
</span><br>
<p>Note the following one the building.php web page:
<br>
<p>&quot;Autoconf/Automake Note: Autoconf 2.59 / Automake 1.9.6 will  
<br>
currently work with all branches available in the SVN repository.  
<br>
Autoconf 2.60 (and higher) and Automake 1.10 (and higher) will not  
<br>
work with any branch earlier than v1.2. Further, if Autoconf 2.60  
<br>
(and higher) is used, Automake 1.10 (and higher) must be used.&quot;
<br>
<p><span class="quotelev1">&gt; *** Running GNU tools
</span><br>
<span class="quotelev1">&gt; [Running] autom4te --language=m4sh ompi_get_version.m4sh -o
</span><br>
<span class="quotelev1">&gt; ompi_get_version.sh
</span><br>
<span class="quotelev1">&gt; [Running] aclocal
</span><br>
<span class="quotelev1">&gt; [Running] autoheader
</span><br>
<span class="quotelev1">&gt; [Running] autoconf
</span><br>
<span class="quotelev1">&gt; [Running] libtoolize --automake --copy --ltdl
</span><br>
<span class="quotelev1">&gt; Adjusting libltdl for OMPI :-(
</span><br>
<span class="quotelev1">&gt;    -- patching for argz bugfix in libtool 1.5
</span><br>
<span class="quotelev1">&gt;       ==&gt; your libtool doesn't need this! yay!
</span><br>
<span class="quotelev1">&gt;    -- patching 64-bit OS X bug in ltmain.sh
</span><br>
<span class="quotelev1">&gt;       ==&gt; your libtool doesn't need this! yay!
</span><br>
<span class="quotelev1">&gt;    -- RTLD_GLOBAL in libltdl
</span><br>
<span class="quotelev1">&gt;       ==&gt; your libltdl doesn't need this! yay!
</span><br>
<span class="quotelev1">&gt;    -- patching configure for broken -c/-o compiler test
</span><br>
<span class="quotelev1">&gt; [Running] automake --foreign -a --copy --include-deps
</span><br>
<span class="quotelev1">&gt; configure.ac:51: require Automake 1.10, but have 1.9.6
</span><br>
<p>Based on this message^^^, it looks like you are using AC 2.60 or  
<br>
later, but not using AM 1.10 or later.
<br>
<p><span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; It seems that the execution of &quot;automake --foreign -a --copy
</span><br>
<span class="quotelev1">&gt; --include-deps&quot; has failed.  See above for
</span><br>
<span class="quotelev1">&gt; the specific error message that caused it to abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This *MAY* be caused by an older version of one of the required
</span><br>
<span class="quotelev1">&gt; packages.  Please make sure you are using at least the following
</span><br>
<span class="quotelev1">&gt; versions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GNU Autoconf 2.59
</span><br>
<span class="quotelev1">&gt; GNU Automake 1.9.6
</span><br>
<span class="quotelev1">&gt; GNU Libtool  1.5.16
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<p>Note that this message is technically correct, but it does not  
<br>
contain the caveat about AC 2.60 or above (although it does contain a  
<br>
reference to &quot;see above for the specific error message...&quot;).  We can  
<br>
probably make it a bit more specific.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3009.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="3007.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>In reply to:</strong> <a href="3007.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3009.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Reply:</strong> <a href="3009.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
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
