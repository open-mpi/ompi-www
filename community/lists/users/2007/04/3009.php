<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 08:33:17 2007" -->
<!-- isoreceived="20070404123317" -->
<!-- sent="Wed, 04 Apr 2007 14:33:07 +0200" -->
<!-- isosent="20070404123307" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]" -->
<!-- id="46139B03.8020803_at_sara.nl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="27BBB716-ED58-49B9-A818-9F96899CD393_at_cisco.com" -->
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
<strong>Date:</strong> 2007-04-04 08:33:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3010.php">Marcin Dulak: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<li><strong>Previous message:</strong> <a href="3008.php">Jeff Squyres: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>In reply to:</strong> <a href="3008.php">Jeff Squyres: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3012.php">pooja_at_[hidden]: "[OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<li><strong>Reply:</strong> <a href="3012.php">pooja_at_[hidden]: "[OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 4, 2007, at 7:59 AM, Bas van der Vlies wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes i get this error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note the following one the building.php web page:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Autoconf/Automake Note: Autoconf 2.59 / Automake 1.9.6 will  
</span><br>
<span class="quotelev1">&gt; currently work with all branches available in the SVN repository.  
</span><br>
<span class="quotelev1">&gt; Autoconf 2.60 (and higher) and Automake 1.10 (and higher) will not  
</span><br>
<span class="quotelev1">&gt; work with any branch earlier than v1.2. Further, if Autoconf 2.60  
</span><br>
<span class="quotelev1">&gt; (and higher) is used, Automake 1.10 (and higher) must be used.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Jeff,
<br>
<p>&nbsp;&nbsp;You are right. It is my fault. I thought automake 1.9.6 is newer then 
<br>
automake 1.10. I just made automake 1.10 the default one and now 
<br>
everything is fine ;-).
<br>
<p>Thanks a lot
<br>
<p><p><span class="quotelev2">&gt;&gt; *** Running GNU tools
</span><br>
<span class="quotelev2">&gt;&gt; [Running] autom4te --language=m4sh ompi_get_version.m4sh -o
</span><br>
<span class="quotelev2">&gt;&gt; ompi_get_version.sh
</span><br>
<span class="quotelev2">&gt;&gt; [Running] aclocal
</span><br>
<span class="quotelev2">&gt;&gt; [Running] autoheader
</span><br>
<span class="quotelev2">&gt;&gt; [Running] autoconf
</span><br>
<span class="quotelev2">&gt;&gt; [Running] libtoolize --automake --copy --ltdl
</span><br>
<span class="quotelev2">&gt;&gt; Adjusting libltdl for OMPI :-(
</span><br>
<span class="quotelev2">&gt;&gt;    -- patching for argz bugfix in libtool 1.5
</span><br>
<span class="quotelev2">&gt;&gt;       ==&gt; your libtool doesn't need this! yay!
</span><br>
<span class="quotelev2">&gt;&gt;    -- patching 64-bit OS X bug in ltmain.sh
</span><br>
<span class="quotelev2">&gt;&gt;       ==&gt; your libtool doesn't need this! yay!
</span><br>
<span class="quotelev2">&gt;&gt;    -- RTLD_GLOBAL in libltdl
</span><br>
<span class="quotelev2">&gt;&gt;       ==&gt; your libltdl doesn't need this! yay!
</span><br>
<span class="quotelev2">&gt;&gt;    -- patching configure for broken -c/-o compiler test
</span><br>
<span class="quotelev2">&gt;&gt; [Running] automake --foreign -a --copy --include-deps
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac:51: require Automake 1.10, but have 1.9.6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Based on this message^^^, it looks like you are using AC 2.60 or  
</span><br>
<span class="quotelev1">&gt; later, but not using AM 1.10 or later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the execution of &quot;automake --foreign -a --copy
</span><br>
<span class="quotelev2">&gt;&gt; --include-deps&quot; has failed.  See above for
</span><br>
<span class="quotelev2">&gt;&gt; the specific error message that caused it to abort.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This *MAY* be caused by an older version of one of the required
</span><br>
<span class="quotelev2">&gt;&gt; packages.  Please make sure you are using at least the following
</span><br>
<span class="quotelev2">&gt;&gt; versions:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; GNU Autoconf 2.59
</span><br>
<span class="quotelev2">&gt;&gt; GNU Automake 1.9.6
</span><br>
<span class="quotelev2">&gt;&gt; GNU Libtool  1.5.16
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that this message is technically correct, but it does not  
</span><br>
<span class="quotelev1">&gt; contain the caveat about AC 2.60 or above (although it does contain a  
</span><br>
<span class="quotelev1">&gt; reference to &quot;see above for the specific error message...&quot;).  We can  
</span><br>
<span class="quotelev1">&gt; probably make it a bit more specific.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
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
<li><strong>Next message:</strong> <a href="3010.php">Marcin Dulak: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<li><strong>Previous message:</strong> <a href="3008.php">Jeff Squyres: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>In reply to:</strong> <a href="3008.php">Jeff Squyres: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3012.php">pooja_at_[hidden]: "[OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<li><strong>Reply:</strong> <a href="3012.php">pooja_at_[hidden]: "[OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
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
