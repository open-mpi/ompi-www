<?
$subject_val = "Re: [OMPI devel] vt compiler warnings and errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 05:35:33 2008" -->
<!-- isoreceived="20080201103533" -->
<!-- sent="Fri, 1 Feb 2008 11:35:26 +0100" -->
<!-- isosent="20080201103526" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt compiler warnings and errors" -->
<!-- id="20080201103526.GA8847_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8D296FD4-C2C1-4D17-97BB-CB86526A7F74_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vt compiler warnings and errors<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 05:35:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3110.php">Josh Hursey: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>Previous message:</strong> <a href="3108.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/3106.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3111.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="3111.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Jeff Squyres wrote on Thu, Jan 31, 2008 at 07:10:36PM CET:
<br>
<span class="quotelev1">&gt; Ah -- I didn't notice this before -- do you have a configure script  
</span><br>
<span class="quotelev1">&gt; committed to SVN?  If so, this could be the problem.
</span><br>
<p><span class="quotelev2">&gt; &gt; On Do, 2008-01-31 at 08:09 -0500, Tim Prins wrote:
</span><br>
[...]
<br>
<span class="quotelev3">&gt; &gt;&gt; [tprins_at_sif test]$ make clean
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;lots of output&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Making clean in otf
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[5]: Entering directory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; `/san/homedirs/tprins/sif/test/ompi/contrib/vt/vt/extlib/otf'
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   cd . &amp;&amp; /bin/sh
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /u/tprins/sif/test/ompi/contrib/vt/vt/extlib/otf/missing --run
</span><br>
<span class="quotelev3">&gt; &gt;&gt; automake-1.10 --gnu
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cd . &amp;&amp; /bin/sh /u/tprins/sif/test/ompi/contrib/vt/vt/extlib/otf/ 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; missing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --run autoconf
</span><br>
[...]
<br>
<p>These files do not belong in SVN, they are generated by aclocal:
<br>
&nbsp;&nbsp;ompi/contrib/vt/vt/extlib/otf/aclocal.m4
<br>
&nbsp;&nbsp;ompi/contrib/vt/vt/aclocal.m4
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3110.php">Josh Hursey: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>Previous message:</strong> <a href="3108.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/3106.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3111.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="3111.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
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
