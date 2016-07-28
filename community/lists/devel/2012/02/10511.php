<?
$subject_val = "Re: [OMPI devel] non-portable test operator in configure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 17:37:27 2012" -->
<!-- isoreceived="20120220223727" -->
<!-- sent="Mon, 20 Feb 2012 14:37:15 -0800" -->
<!-- isosent="20120220223715" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] non-portable test operator in configure" -->
<!-- id="4F42CB1B.10404_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F42B83C.90408_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] non-portable test operator in configure<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 17:37:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10512.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Previous message:</strong> <a href="10510.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>In reply to:</strong> <a href="10507.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10514.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Reply:</strong> <a href="10514.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short version:
<br>
The &quot;expr: Paren problem&quot; comes from having /usr/ucb/bin ahead of 
<br>
/usr/bin in one's $PATH.
<br>
So, I needed to fix my $PATH.
<br>
<p>Long version:
<br>
<p>This error is coming from configure's own argument parsing logic when 
<br>
the ROMIO sub-configure is invoked.
<br>
The issue appears to be that the expr implementation of parens (for 
<br>
match capture), doesn't like the length of the match.
<br>
This works:
<br>
<span class="quotelev1">&gt; $ expr 'XCPPFLAGS=-D_REENTRANT -I/foo/bar' : '[^=]*=\(.*\)'
</span><br>
<span class="quotelev1">&gt; -D_REENTRANT -I/foo/bar
</span><br>
<p>This (from config.log) does not:
<br>
<span class="quotelev1">&gt; $ expr 'XCPPFLAGS= -D_REENTRANT 
</span><br>
<span class="quotelev1">&gt; -I/export/home/phargrov/OMPI/openmpi-trunk-solaris10-x86-ss12u3/openmpi-1.7a1r25959/opal/mca/hwloc/hwloc132/hwloc/include 
</span><br>
<span class="quotelev1">&gt; -I/export/home/phargrov/OMPI/openmpi-trunk-solaris10-x86-ss12u3/BB/opal/mca/hwloc/hwloc132/hwloc/include  
</span><br>
<span class="quotelev1">&gt; -I/export/home/phargrov/OMPI/openmpi-trunk-solaris10-x86-ss12u3/openmpi-1.7a1r25959/opal/mca/event/libevent2013/libevent 
</span><br>
<span class="quotelev1">&gt; -I/export/home/phargrov/OMPI/openmpi-trunk-solaris10-x86-ss12u3/openmpi-1.7a1r25959/opal/mca/event/libevent2013/libevent/include 
</span><br>
<span class="quotelev1">&gt; -I/export/home/phargrov/OMPI/openmpi-trunk-solaris10-x86-ss12u3/BB/opal/mca/event/libevent2013/libevent/include   
</span><br>
<span class="quotelev1">&gt; -I/usr/include/infiniband -I/usr/include/infiniband' : '[^=]*=\(.*\)'
</span><br>
<span class="quotelev1">&gt; expr: Paren problem
</span><br>
<p>This one works:
<br>
<span class="quotelev1">&gt; expr 'XCPPFLAGS=-D_REENTRANT 
</span><br>
<span class="quotelev1">&gt; -I/foo/bar/baz/1234567890/acdefghijklmnopqrstuvwxyz/this-is-getting-too-long-for-solaris-expr-to-handle-correctly/' 
</span><br>
<span class="quotelev1">&gt; : '[^=]*=\(.*\)'
</span><br>
<span class="quotelev1">&gt; -D_REENTRANT 
</span><br>
<span class="quotelev1">&gt; -I/foo/bar/baz/1234567890/acdefghijklmnopqrstuvwxyz/this-is-getting-too-long-for-solaris-expr-to-handle-correctly/
</span><br>
<p>While 1 more character breaks:
<br>
<span class="quotelev1">&gt; {phargrov_at_cloon BB}$ expr 'XCPPFLAGS=-D_REENTRANT 
</span><br>
<span class="quotelev1">&gt; -I/foo/bar/baz/1234567890/acdefghijklmnopqrstuvwxyz/this-is-getting-too-long-for-solaris-expr-to-handle-correctly/1' 
</span><br>
<span class="quotelev1">&gt; : '[^=]*=\(.*\)'
</span><br>
<span class="quotelev1">&gt; expr: Paren problem
</span><br>
<p>The work-around appears to be to ensure /usr/bin is before /usr/ucb/bin 
<br>
in PATH, since /usr/bin/expr doesn't display this problem.
<br>
I've fixed my own PATH accordingly for my future Solaris testing.
<br>
<p>Even using /bin/sh, I saw no other &quot;odd&quot; behaviors with configure on 
<br>
Solaris-10.
<br>
<p>-Paul
<br>
<p>On 2/20/2012 1:16 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Argh!!
</span><br>
<span class="quotelev1">&gt; I am now trying to track down &quot;expr: Paren problem&quot; on Solaris.
</span><br>
<span class="quotelev1">&gt; The dash shell on Linux doesn't reproduce this one, unfortunately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/20/2012 1:12 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'll report back ASAP on my slowlaris10 results. 
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
<li><strong>Next message:</strong> <a href="10512.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Previous message:</strong> <a href="10510.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>In reply to:</strong> <a href="10507.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10514.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Reply:</strong> <a href="10514.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
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
