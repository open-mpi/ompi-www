<?
$subject_val = "[OMPI devel] README / OS X versions (was: 1.7.4rc2r30168 - configure failure on Mac OSX 10.5)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 08:42:40 2014" -->
<!-- isoreceived="20140110134240" -->
<!-- sent="Fri, 10 Jan 2014 13:42:38 +0000" -->
<!-- isosent="20140110134238" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] README / OS X versions (was: 1.7.4rc2r30168 - configure failure on Mac OSX 10.5)" -->
<!-- id="7AA6B243-5543-4408-BF81-17E34DB0F66D_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA1689yv=C+6AsZm3AWPNDKyGsAt6+HPE-pHRLQtOjP8_ow_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] README / OS X versions (was: 1.7.4rc2r30168 - configure failure on Mac OSX 10.5)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 08:42:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13685.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Previous message:</strong> <a href="13683.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>In reply to:</strong> <a href="13654.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13697.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For my own sanity:
<br>
<p>10.9: Mavericks, last release Dec 2013
<br>
10.8: Mountain Lion, last release Oct 2013 (maybe not dead)
<br>
10.7: Lion, last release Oct 2012 (dead)
<br>
10.6: Snow Leopard, last release 2011 (dead)
<br>
10.5: Leopard, last release 2009 (dead)
<br>
<p>I don't think we should expend any effort for 10.5; it's too old.  I don't think I care about 10.6, either, but if it still works, I guess there's no real reason to remove it.
<br>
<p>So this is just a +1 on removing 10.5 from the README.
<br>
<p><p>On Jan 9, 2014, at 7:50 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can build fine on 10.7 (the system I am typing on now), and on 10.6 too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have no strong opinion on fix-vs-document, but as Jeff knows quite well if you say you support it I am going to try to make it break :).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 9, 2014 at 4:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I dunno if we really go back that far, Paul - I doubt anyone has tested on anything less than 10.8, frankly. Might be better if we update to not make claims that far back.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Were you able to build/run on 10.7?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 9, 2014, at 3:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As I noted in another email, 1.7.4's README claims support for Mac OSX versions 10.5 through 10.7.  So, I just now tried (but failed) to build on 10.5 (Leopard):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *** Assembler
</span><br>
<span class="quotelev2">&gt;&gt; checking dependency style of gcc -std=gnu99... gcc3
</span><br>
<span class="quotelev2">&gt;&gt; checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -p
</span><br>
<span class="quotelev2">&gt;&gt; checking the name lister (/usr/bin/nm -p) interface... BSD nm
</span><br>
<span class="quotelev2">&gt;&gt; checking for fgrep... /usr/bin/grep -F
</span><br>
<span class="quotelev2">&gt;&gt; checking if need to remove -g from CCASFLAGS... OS X Leopard - yes ( -O3 -DNDEBUG -finline-functions -fno-strict-aliasing)
</span><br>
<span class="quotelev2">&gt;&gt; checking whether to enable smp locks... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if .proc/endp is needed... no
</span><br>
<span class="quotelev2">&gt;&gt; checking directive for setting text section... .text
</span><br>
<span class="quotelev2">&gt;&gt; checking directive for exporting symbols... .globl
</span><br>
<span class="quotelev2">&gt;&gt; checking for objdump... no
</span><br>
<span class="quotelev2">&gt;&gt; checking if .note.GNU-stack is needed... no
</span><br>
<span class="quotelev2">&gt;&gt; checking suffix for labels... :
</span><br>
<span class="quotelev2">&gt;&gt; checking prefix for global symbol labels... none
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: Could not determine global symbol label prefix
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The same failure is seen on a PPC system running OSX Leopard, too.  However, I figure it best to focus on getting x86 working first before worrying any about PPC.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The only configure option used was --prefix.
</span><br>
<span class="quotelev2">&gt;&gt; The bzip2-compressed config.log is attached.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; &lt;openmpi-1.7-latest-macos10.5-x86.config.log.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13685.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Previous message:</strong> <a href="13683.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>In reply to:</strong> <a href="13654.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13697.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
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
