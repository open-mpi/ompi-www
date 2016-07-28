<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 30 09:55:15 2006" -->
<!-- isoreceived="20061130145515" -->
<!-- sent="Thu, 30 Nov 2006 07:55:05 -0700" -->
<!-- isosent="20061130145505" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build system changes" -->
<!-- id="C1943ED9.A31%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7CF88995-E6C0-498A-8C99-B09409DF7BB6_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-30 09:55:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1211.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Previous message:</strong> <a href="1209.php">Galen Shipman: "[OMPI devel] For Open MPI + BPROC users"</a>
<li><strong>In reply to:</strong> <a href="1208.php">Brian W Barrett: "[OMPI devel] Build system changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1211.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Reply:</strong> <a href="1211.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo Brian
<br>
<p>I updated this morning and hit a few problems. I found I was using autoconf
<br>
2.60, so I had to update to automake 1.10 as you indicated. However, once I
<br>
did that, I still couldn't build due to the following errors:
<br>
<p>configure.in:1994: warning: macro `AM_PROG_LIBTOOL' not found in library
<br>
[Running] autoheader
<br>
[Running] autoconf
<br>
configure.in:1997: error: possibly undefined macro: AM_PROG_LIBTOOL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If this token and others are legitimate, please use m4_pattern_allow.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See the Autoconf documentation.
<br>
<p>-------------------------------------------------------------------------
<br>
It seems that the execution of &quot;autoconf&quot; has failed.  See above for
<br>
the specific error message that caused it to abort.
<br>
<p>This *MAY* be caused by an older version of one of the required
<br>
packages.  Please make sure you are using at least the following
<br>
versions:
<br>
<p>GNU Autoconf 2.59
<br>
GNU Automake 1.9.6
<br>
GNU Libtool  1.5.16
<br>
-------------------------------------------------------------------------
<br>
<p>Error running autogen.sh -l in romio.  Aborting.
<br>
pn1169403:~/openmpi/trunk rhc$
<br>
<p>I am running:
<br>
<p>Autoconf 2.60
<br>
Automake 1.10
<br>
Libtool 1.5.22
<br>
<p>Any suggestions?
<br>
Ralph
<br>
<p><p><p>On 11/29/06 2:17 PM, &quot;Brian W Barrett&quot; &lt;bbarrett_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just wanted to give everyone a heads up that there will be two
</span><br>
<span class="quotelev1">&gt; changes to the build system that should have minimal impact on
</span><br>
<span class="quotelev1">&gt; everyone, but are worth noting:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1) If you are using Autoconf 2.60 or later, you *MUST* be using
</span><br>
<span class="quotelev1">&gt;       Automake 1.10 or later.  Most people are still using AC 2.59,
</span><br>
<span class="quotelev1">&gt;       so this should have zero impact on the group.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    2) We will now be checking to make sure that the C++, F77, F90,
</span><br>
<span class="quotelev1">&gt;       and ObjC compilers can link against the C compiler.  This
</span><br>
<span class="quotelev1">&gt;       should clean up some of the amorphous errors people have been
</span><br>
<span class="quotelev1">&gt;       getting when they do something like: 'CFLAGS=-m32 CXXFLAGS=-m64',
</span><br>
<span class="quotelev1">&gt;       usually by not specifying one of the two...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1211.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Previous message:</strong> <a href="1209.php">Galen Shipman: "[OMPI devel] For Open MPI + BPROC users"</a>
<li><strong>In reply to:</strong> <a href="1208.php">Brian W Barrett: "[OMPI devel] Build system changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1211.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Reply:</strong> <a href="1211.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
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
