<?
$subject_val = "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 14:36:14 2010" -->
<!-- isoreceived="20100826183614" -->
<!-- sent="Thu, 26 Aug 2010 11:35:59 -0700" -->
<!-- isosent="20100826183559" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C76B40F.1010609_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100826174912.GE8657_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 14:35:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8391.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23665"</a>
<li><strong>Previous message:</strong> <a href="8389.php">Paul H. Hargrove: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8386.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8389.php">Paul H. Hargrove: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralf Wildenhues wrote:
<br>
<span class="quotelev1">&gt; * Ralf Wildenhues wrote on Thu, Aug 26, 2010 at 07:29:17AM CEST:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; * Paul H. Hargrove wrote on Thu, Aug 26, 2010 at 05:37:23AM CEST:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: install: (cd /usr/local/pkg/ompi-1.5rc5/lib &amp;&amp; { ln -s -f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi.so.0.0.2 libmpi.so.0 || { rm -f libmpi.so.0 &amp;&amp; ln -s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi.so.0.0.2 libmpi.so.0; }; })
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Usage: ln [-f] [-s] f1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is due to an incomprehensibly stupid &quot;ln&quot; that cares about the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; order of the &quot;-s&quot; and &quot;-f&quot; options:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ rm -f b; touch a; ln -f -s a b
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ rm -f b; touch a; ln -s -f a b
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Usage: ln [-f] [-s] f1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       ln [-f] [-s] f1 f2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       ln [-f] [-s] f1 ... fn d1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ which ln
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/ucb/ln
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ uname -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SunOS lem.lbl.gov 5.10 s10_69 sun4u sparc SUNW,Ultra-5_10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I'll fix that option order in libtool, but I don't see how it could have
</span><br>
<span class="quotelev2">&gt;&gt; caused a failed install for you, because we explicitly do
</span><br>
<span class="quotelev2">&gt;&gt;   ln -s -f A B || { rm -f B &amp;&amp; ln -s A B; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please also note that this ln does not do the right thing with -f -s
</span><br>
<span class="quotelev2">&gt;&gt; when the target file already exists:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm, reordering would be ugly because of the $LN_S abstraction.  Upon
</span><br>
<span class="quotelev1">&gt; reconsideration, I don't think it is that important to try to avoid some
</span><br>
<span class="quotelev1">&gt; inconsequential error message stemming from a setup which the default
</span><br>
<span class="quotelev1">&gt; GNU INSTALL file already advises not to use:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;    On Solaris, don't put `/usr/ucb' early in your `PATH'.  This
</span><br>
<span class="quotelev1">&gt; directory contains several dysfunctional programs; working variants of
</span><br>
<span class="quotelev1">&gt; these programs are available in `/usr/bin'.  So, if you need `/usr/ucb'
</span><br>
<span class="quotelev1">&gt; in your `PATH', put it _after_ `/usr/bin'.
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure if OpenMPI copies this text somewhere, but if it doesn't, maybe
</span><br>
<span class="quotelev1">&gt; it should?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You didn't confirm whether your installation actually failed though.
</span><br>
<span class="quotelev1">&gt; Did it succeed?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I will take the advice about moving /usr/ucb to the end of my PATH - 
<br>
thanks for that.
<br>
<p>I am having other issues on this platform that leave me uncertain about 
<br>
whether the install was successful or not.  The &quot;make install&quot; did run 
<br>
to completion, but despite adding $prefix/lib to my LD_LIBRARY_PATH, I 
<br>
don't seem to have a working build.  Keep in mind, however, that this is 
<br>
the same platform for which I just sent the &quot;../libtool --config&quot; output 
<br>
due to &quot;make check&quot; failing to locate libmpi.so.0.  So, I think I should 
<br>
wait for that to be resolved first.
<br>
<p>Now that I think of it, I had best retry from scratch with /usr/ucb at 
<br>
the end of my PATH to see if that other problem goes away.
<br>
<p>-Paul
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ralf
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
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8391.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23665"</a>
<li><strong>Previous message:</strong> <a href="8389.php">Paul H. Hargrove: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8386.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8389.php">Paul H. Hargrove: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
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
