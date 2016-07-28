<?
$subject_val = "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 20 15:54:10 2015" -->
<!-- isoreceived="20150820195410" -->
<!-- sent="Thu, 20 Aug 2015 19:54:07 +0000" -->
<!-- isosent="20150820195407" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure" -->
<!-- id="190F69C2-4985-47BA-B8EE-EA3AB223898C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA15Vy81_pUJ7OMMJKrrNsNZEeOk90UAvmEZ_489zH8QWzA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-20 15:54:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17776.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Previous message:</strong> <a href="17774.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>In reply to:</strong> <a href="17774.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17776.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Reply:</strong> <a href="17776.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, I see the issue:
<br>
<p>-----
<br>
&nbsp;&nbsp;GENERATE psizeof_f.f90
<br>
&nbsp;&nbsp;FC       psizeof_f.lo
<br>
WARNING: Source file &quot;psizeof_f.f90&quot; contains no Fortran statements.
<br>
<p>f90comp: 29 SOURCE LINES
<br>
f90comp: 0 ERRORS, 1 WARNINGS, 0 OTHER MESSAGES, 0 ANSI
<br>
-----
<br>
<p>As you can see, (p)sizeof_f.f90 is a generated file.  I'll bet that OMPI determined that your Fortran compiler didn't support enough Fortran mojo to properly support MPI_SIZEOF.  So it generated an empty .f90 file.  And therefore it 
<br>
<p>Easy enough to fix...
<br>
<p><p><span class="quotelev1">&gt; On Aug 20, 2015, at 2:52 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My testing scripts always pass V=1 to each make command, but as you can see in my report that didn't give full command lines.
</span><br>
<span class="quotelev1">&gt; It is worth noting that on this system &quot;make&quot; is not Gnu-Make.
</span><br>
<span class="quotelev1">&gt; I am venturing a guess that this is why V=1 is not producing the expected output.
</span><br>
<span class="quotelev1">&gt; That might be the known/expected automake behavior with non-Gnu version of make - I honestly don't know.
</span><br>
<span class="quotelev1">&gt; So, you can consider this observation an additional bug report if you are so inclined (and if you ignore it then I'll not complain).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After manually applying Nathan's fix for opal/include/opal/sys/ia32/atomic.h this second failure mode remains.
</span><br>
<span class="quotelev1">&gt; I checked that first, in case the missing atomic functions had prevented creation of the lib.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached transcript should contain the requested output.
</span><br>
<span class="quotelev1">&gt; It includes &quot;make clean all V=1&quot; *and* &quot;gmake clean all V=1&quot;.
</span><br>
<span class="quotelev1">&gt; The gmake case also fails, but at least V=1 works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In case anybody wants to reproduce for themselves:
</span><br>
<span class="quotelev1">&gt; I am using a VirtualBox VM image which anyone (with registration) can download from Oracle.
</span><br>
<span class="quotelev1">&gt; I can provide more details upon request.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 20, 2015 at 10:59 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; OK, I'll see what I can do.  I have a conf call in an hour.
</span><br>
<span class="quotelev1">&gt; So I'll if I don't have your requested output before that, it will be much later today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 20, 2015 at 10:53 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Paul --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you give me more info on this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you &quot;make clean all V=1&quot; in the ompi/mpi/fortran/mpif-h directory and send me the output?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally, can you send the output of &quot;ls -l ompi/mpi/fortran/mpif-h/.libs&quot; after the make?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 14, 2015, at 11:40 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The following is seen on my Solaris-11.2 (but not 11.1) system.
</span><br>
<span class="quotelev2">&gt; &gt; It is present with the Studio compilers (at least 12.4 and 12.3) for both 32- and 64-bit targets.
</span><br>
<span class="quotelev2">&gt; &gt; It is also present with the Gnu compiler for 64-bit targets (with 32-bit the build dies for a different reason).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   FCLD     libmpi_mpifh_pmpi.la
</span><br>
<span class="quotelev2">&gt; &gt;   FCLD     libmpi_mpifh_sizeof.la
</span><br>
<span class="quotelev2">&gt; &gt;   CCLD     libmpi_mpifh.la
</span><br>
<span class="quotelev2">&gt; &gt; ld: fatal: file ./.libs/libmpi_mpifh_sizeof.a: open failed: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On this same system I can build the 1.10.0rc2 tarball fine with identical configure args (other than the prefix setting).
</span><br>
<span class="quotelev2">&gt; &gt; I retested RC2 just now to be certain nothing relevant had changed in my configuration.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17751.php">http://www.open-mpi.org/community/lists/devel/2015/08/17751.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17770.php">http://www.open-mpi.org/community/lists/devel/2015/08/17770.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; &lt;typescript.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17774.php">http://www.open-mpi.org/community/lists/devel/2015/08/17774.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17776.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Previous message:</strong> <a href="17774.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>In reply to:</strong> <a href="17774.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17776.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Reply:</strong> <a href="17776.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
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
