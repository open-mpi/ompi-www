<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 13:01:19 2009" -->
<!-- isoreceived="20090330170119" -->
<!-- sent="Mon, 30 Mar 2009 18:01:14 +0100" -->
<!-- isosent="20090330170114" -->
<!-- name="Kevin McManus" -->
<!-- email="k.mcmanus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure problem" -->
<!-- id="20090330170114.GS13818_at_gre.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9f8092cc0903300824va02495fh753873f8f9f7f943_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Linux opteron infiniband sunstudio configure problem<br>
<strong>From:</strong> Kevin McManus (<em>k.mcmanus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 13:01:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8644.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8642.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio	configure	problem"</a>
<li><strong>In reply to:</strong> <a href="8637.php">John Hearns: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8639.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Mar 30, 2009 at 04:24:54PM +0100, John Hearns wrote:
<br>
<span class="quotelev1">&gt; 2009/3/30 Kevin McManus &lt;k.mcmanus_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can find psm libs at...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib/libpsm_infinipath.so.1.0
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib/libpsm_infinipath.so.1
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib64/libpsm_infinipath.so.1.0
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib64/libpsm_infinipath.so.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On x86_64 type systems /usr/lib64 are the 64 bit libraries,  /usr/lib
</span><br>
<span class="quotelev1">&gt; are the 32 bit ones
</span><br>
<p>it was more the exact syntax of passing a path to configure I am less
<br>
than clear about. Tried building with...
<br>
<p>../configure x86_64 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CC=cc CXX=CC F77=f77 FC=f90 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-static \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-orterun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-f90 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-mpi-threads \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-psm \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-psm-lib=/usr/lib64
<br>
<p>but still hang on the bucket error
<br>
<p><p>k.mcmanus_at_[hidden] - <a href="http://staffweb.cms.gre.ac.uk/~k.mcmanus">http://staffweb.cms.gre.ac.uk/~k.mcmanus</a>
<br>
--------------------------------------------------------------
<br>
Dr Kevin McManus                                Queen Mary 413
<br>
School of Computing &amp; Mathematical Sciences,
<br>
University of Greenwich,
<br>
Old Royal Naval College,
<br>
Park Row, Greenwich,                   Tel +44 (0)208 331 8719 
<br>
London, SE10 9LS                       Fax +44 (0)208 331 8665
<br>
--------------------------------------------------------------
<br>
<p>University of Greenwich, a charity and company limited by
<br>
guarantee, registered in England (reg no. 986729)
<br>
Registered Office: Old Royal Naval College
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8644.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8642.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio	configure	problem"</a>
<li><strong>In reply to:</strong> <a href="8637.php">John Hearns: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8639.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
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
