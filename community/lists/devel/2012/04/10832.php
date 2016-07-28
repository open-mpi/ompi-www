<?
$subject_val = "Re: [OMPI devel] RFC: New Fortran bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 13:29:22 2012" -->
<!-- isoreceived="20120405172922" -->
<!-- sent="Thu, 5 Apr 2012 13:29:16 -0400" -->
<!-- isosent="20120405172916" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: New Fortran bindings" -->
<!-- id="F0A571CF-22D0-44CB-882F-174B6B38E1B3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjEmW2h6i9YdG586wt6jDFdQDXeFzF=j=O8u4i_8GnDFcig_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: New Fortran bindings<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-05 13:29:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10833.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Previous message:</strong> <a href="10831.php">Josh Hursey: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<li><strong>In reply to:</strong> <a href="10831.php">Josh Hursey: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10884.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 5, 2012, at 1:26 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; All of the ones I am adding :) [most of the codes I am working with at
</span><br>
<span class="quotelev1">&gt; the moment use the fortran interfaces]
</span><br>
<p>You're killing me.  :-)
<br>
<p><span class="quotelev1">&gt; I think the 'example' extension is the only one that has f77
</span><br>
<span class="quotelev1">&gt; interfaces at the moment. My off-trunk branches have f77/f90
</span><br>
<span class="quotelev1">&gt; interfaces to their mpiext interfaces.
</span><br>
<p>K.  I'll get to work on this, then (i.e., updating so that &quot;example&quot; works).
<br>
<p>Note that &quot;f77&quot; and &quot;f90&quot; are no longer applicable as labels.  Craig, Rolf, and I refer to them as:
<br>
<p>- &quot;mpif.h&quot; (or &quot;em pee eye eff h&quot; or &quot;em-piff-dot-h&quot; for short)
<br>
- &quot;use mpi&quot; (or &quot;mpi module&quot;)
<br>
- &quot;mpi_f08&quot; (no need to say &quot;use&quot; or &quot;module&quot; here)
<br>
<p><span class="quotelev1">&gt; I'm willing to help test/debug, but I don't know enough about the new
</span><br>
<span class="quotelev1">&gt; {fortran+build system} to do the work.
</span><br>
<p>Coolio.  I'll get back with ya.
<br>
<p><span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 5, 2012 at 1:08 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 5, 2012, at 12:30 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the state of 'mpiext' with this patch? From glancing at the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; branch it doesn't look like it has been touched.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, I've been thinking about this -- especially since you committed something relevant to mpiext the other day.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You're right -- it hasn't been touched.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How many extensions currently have fortran in them?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<li><strong>Next message:</strong> <a href="10833.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Previous message:</strong> <a href="10831.php">Josh Hursey: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<li><strong>In reply to:</strong> <a href="10831.php">Josh Hursey: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10884.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
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
