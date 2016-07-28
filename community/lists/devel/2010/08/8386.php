<?
$subject_val = "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 13:49:19 2010" -->
<!-- isoreceived="20100826174919" -->
<!-- sent="Thu, 26 Aug 2010 19:49:12 +0200" -->
<!-- isosent="20100826174912" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)" -->
<!-- id="20100826174912.GE8657_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100826052917.GB7177_at_gmx.de" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 13:49:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8387.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8385.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5: attribute((noreturn)) and pointers to functions"</a>
<li><strong>In reply to:</strong> <a href="8373.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8390.php">Paul H. Hargrove: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8390.php">Paul H. Hargrove: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Ralf Wildenhues wrote on Thu, Aug 26, 2010 at 07:29:17AM CEST:
<br>
<span class="quotelev1">&gt; * Paul H. Hargrove wrote on Thu, Aug 26, 2010 at 05:37:23AM CEST:
</span><br>
<span class="quotelev2">&gt; &gt; libtool: install: (cd /usr/local/pkg/ompi-1.5rc5/lib &amp;&amp; { ln -s -f
</span><br>
<span class="quotelev2">&gt; &gt; libmpi.so.0.0.2 libmpi.so.0 || { rm -f libmpi.so.0 &amp;&amp; ln -s
</span><br>
<span class="quotelev2">&gt; &gt; libmpi.so.0.0.2 libmpi.so.0; }; })
</span><br>
<span class="quotelev2">&gt; &gt; Usage: ln [-f] [-s] f1
</span><br>
[...]
<br>
<p><span class="quotelev2">&gt; &gt; This is due to an incomprehensibly stupid &quot;ln&quot; that cares about the
</span><br>
<span class="quotelev2">&gt; &gt; order of the &quot;-s&quot; and &quot;-f&quot; options:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ rm -f b; touch a; ln -f -s a b
</span><br>
<span class="quotelev2">&gt; &gt; $ rm -f b; touch a; ln -s -f a b
</span><br>
<span class="quotelev2">&gt; &gt; Usage: ln [-f] [-s] f1
</span><br>
<span class="quotelev2">&gt; &gt;       ln [-f] [-s] f1 f2
</span><br>
<span class="quotelev2">&gt; &gt;       ln [-f] [-s] f1 ... fn d1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ which ln
</span><br>
<span class="quotelev2">&gt; &gt; /usr/ucb/ln
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ uname -a
</span><br>
<span class="quotelev2">&gt; &gt; SunOS lem.lbl.gov 5.10 s10_69 sun4u sparc SUNW,Ultra-5_10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll fix that option order in libtool, but I don't see how it could have
</span><br>
<span class="quotelev1">&gt; caused a failed install for you, because we explicitly do
</span><br>
<span class="quotelev1">&gt;   ln -s -f A B || { rm -f B &amp;&amp; ln -s A B; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please also note that this ln does not do the right thing with -f -s
</span><br>
<span class="quotelev1">&gt; when the target file already exists:
</span><br>
<p>Hmm, reordering would be ugly because of the $LN_S abstraction.  Upon
<br>
reconsideration, I don't think it is that important to try to avoid some
<br>
inconsequential error message stemming from a setup which the default
<br>
GNU INSTALL file already advises not to use:
<br>
<p>[...]
<br>
&nbsp;&nbsp;&nbsp;On Solaris, don't put `/usr/ucb' early in your `PATH'.  This
<br>
directory contains several dysfunctional programs; working variants of
<br>
these programs are available in `/usr/bin'.  So, if you need `/usr/ucb'
<br>
in your `PATH', put it _after_ `/usr/bin'.
<br>
[...]
<br>
<p>Not sure if OpenMPI copies this text somewhere, but if it doesn't, maybe
<br>
it should?
<br>
<p>You didn't confirm whether your installation actually failed though.
<br>
Did it succeed?
<br>
<p>Thanks,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8387.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8385.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5: attribute((noreturn)) and pointers to functions"</a>
<li><strong>In reply to:</strong> <a href="8373.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8390.php">Paul H. Hargrove: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8390.php">Paul H. Hargrove: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
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
