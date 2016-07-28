<?
$subject_val = "Re: [OMPI devel] trunk build failure on Altix [w/ WORK AROUND]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 18:26:28 2012" -->
<!-- isoreceived="20120217232628" -->
<!-- sent="Fri, 17 Feb 2012 15:26:10 -0800" -->
<!-- isosent="20120217232610" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failure on Altix [w/ WORK AROUND]" -->
<!-- id="4F3EE212.20707_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA16O2ub=ZhE9JSJLF2WN4uhamO8TJEZPXkgx=4c4H1zWyA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk build failure on Altix [w/ WORK AROUND]<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 18:26:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10488.php">Matthias Jurenz: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>Previous message:</strong> <a href="10486.php">Jeff Squyres: "Re: [OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch"</a>
<li><strong>In reply to:</strong> <a href="10418.php">Paul Hargrove: "[OMPI devel] trunk build failure on Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10499.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>Reply:</strong> <a href="10499.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've poked enough at the ompi configure magic to *think* I understand 
<br>
the source of the problem I've seen w/ both trunk and 1.5.x on the Altix.
<br>
<p>The problem appears to be that both timer/altix/configure.m4 and 
<br>
timer/linux/configure.m4 are setting the value of $timer_base_include 
<br>
and the LAST one &quot;wins&quot;.  Meanwhile, only the FIRST one is getting added 
<br>
to $static_components (&quot;there can be only one&quot;).  So, I suspect the 
<br>
difference I saw between trunk and 1.5 was just a matter of which 
<br>
configure probe ran first.
<br>
<p>The result of having FIRST and LAST &quot;win&quot; in different settings is a 
<br>
mismatch.
<br>
<p><span class="quotelev1">&gt; $ grep -e timer:linux -e timer:altix configure.out
</span><br>
<span class="quotelev1">&gt; --- MCA component timer:linux (m4 configuration macro, priority 30)
</span><br>
<span class="quotelev1">&gt; checking for MCA component timer:linux compile mode... static
</span><br>
<span class="quotelev1">&gt; checking if MCA component timer:linux can compile... yes
</span><br>
<span class="quotelev1">&gt; --- MCA component timer:altix (m4 configuration macro, priority 30)
</span><br>
<span class="quotelev1">&gt; checking for MCA component timer:altix compile mode... static
</span><br>
<span class="quotelev1">&gt; checking if MCA component timer:altix can compile... no
</span><br>
<p>which picks timer:linux and rejects timer:altix, as compared to:
<br>
<p><span class="quotelev1">&gt; $ grep -e '&quot;MCA_opal_timer_[SD]' -e MCA_timer_ config.status
</span><br>
<span class="quotelev1">&gt; S[&quot;MCA_opal_timer_DSO_SUBDIRS&quot;]=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; S[&quot;MCA_opal_timer_STATIC_SUBDIRS&quot;]=&quot; mca/timer/linux&quot;
</span><br>
<span class="quotelev1">&gt; S[&quot;MCA_opal_timer_STATIC_LTLIBS&quot;]=&quot;mca/timer/linux/libmca_timer_linux.la &quot;
</span><br>
<span class="quotelev1">&gt; S[&quot;MCA_opal_timer_DSO_COMPONENTS&quot;]=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; S[&quot;MCA_opal_timer_STATIC_COMPONENTS&quot;]=&quot; linux&quot;
</span><br>
<span class="quotelev1">&gt; D[&quot;MCA_timer_IMPLEMENTATION_HEADER&quot;]=&quot; 
</span><br>
<span class="quotelev1">&gt; \&quot;opal/mca/timer/altix/timer_altix.h\&quot;&quot;
</span><br>
<p>Which will build timer:linux but has improperly picked up the 
<br>
timer:altix HEADER!
<br>
<p><p>For the present, an explicit --with-timer=altix works-around the problem 
<br>
in either branch.
<br>
However, the setting of the header variable by a NON-selected component 
<br>
is ERRONEOUS and should get fixed.
<br>
In trunk, it may also make sense to raise the priority of timer:altix 
<br>
above that of timer:linux.
<br>
<p>-Paul
<br>
<p>On 2/15/2012 12:41 AM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; I've configured the ompi trunk (nightly tarball 1.7a1r25927) on an SGI 
</span><br>
<span class="quotelev1">&gt; Altix.
</span><br>
<span class="quotelev1">&gt; I used no special arguments indicating that this is an Altix, and 
</span><br>
<span class="quotelev1">&gt; there does not appear to be an altix-specific file in contrib/platform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My build fails as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     make: Entering directory
</span><br>
<span class="quotelev1">&gt;     `/mnt/home/c_phargrov/OMPI/openmpi-trunk-linux-ia64/BLD/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt;       CC     opal_wrapper.o
</span><br>
<span class="quotelev1">&gt;       CCLD   opal_wrapper
</span><br>
<span class="quotelev1">&gt;     ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;     `opal_timer_altix_mmdev_timer_addr'
</span><br>
<span class="quotelev1">&gt;     ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;     `opal_timer_altix_freq'
</span><br>
<span class="quotelev1">&gt;     collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure-generated opal_config.h contains
</span><br>
<span class="quotelev1">&gt; #define MCA_timer_IMPLEMENTATION_HEADER 
</span><br>
<span class="quotelev1">&gt; &quot;opal/mca/timer/altix/timer_altix.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nothing appears to have been built in BUILDDIR/opal/mca/timer/altix.
</span><br>
<span class="quotelev1">&gt; However, BUILDDIR/opal/mca/timer/linux has been built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352 
</span><br>
<span class="quotelev1">&gt; &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 
</span><br>
<span class="quotelev1">&gt; &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10487/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10488.php">Matthias Jurenz: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>Previous message:</strong> <a href="10486.php">Jeff Squyres: "Re: [OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch"</a>
<li><strong>In reply to:</strong> <a href="10418.php">Paul Hargrove: "[OMPI devel] trunk build failure on Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10499.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>Reply:</strong> <a href="10499.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
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
