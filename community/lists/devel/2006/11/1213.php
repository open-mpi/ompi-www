<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 30 10:10:44 2006" -->
<!-- isoreceived="20061130151044" -->
<!-- sent="Thu, 30 Nov 2006 08:10:35 -0700" -->
<!-- isosent="20061130151035" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build system changes" -->
<!-- id="C194427B.A40%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061130150351.GC19753_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2006-11-30 10:10:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1214.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Previous message:</strong> <a href="1212.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<li><strong>In reply to:</strong> <a href="1211.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
m4 version is 1.4.2
<br>
<p>I see no errors earlier in the output. There were a few additional lines
<br>
after the ones I quoted below - here is the full error output:
<br>
<p>*** Running GNU tools
<br>
[Running] aclocal
<br>
configure.in:1994: warning: macro `AM_PROG_LIBTOOL' not found in library
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
<p>I then get a prompt. Note that I was able to update and rebuild on odin, so
<br>
perhaps this is one of those infamous wild cases where subversion didn't get
<br>
everything quite right. I will try a fresh checkout later on - got meetings
<br>
the rest of the day. I'll let you know what I find.
<br>
<p>Should have noted: this is on a MacBook Pro.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On 11/30/06 8:03 AM, &quot;Ralf Wildenhues&quot; &lt;Ralf.Wildenhues_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; * Ralph Castain wrote on Thu, Nov 30, 2006 at 03:55:05PM CET:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I updated this morning and hit a few problems. I found I was using autoconf
</span><br>
<span class="quotelev2">&gt;&gt; 2.60, so I had to update to automake 1.10 as you indicated. However, once I
</span><br>
<span class="quotelev2">&gt;&gt; did that, I still couldn't build due to the following errors:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:1994: warning: macro `AM_PROG_LIBTOOL' not found in library
</span><br>
<span class="quotelev2">&gt;&gt; [Running] autoheader
</span><br>
<span class="quotelev2">&gt;&gt; [Running] autoconf
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:1997: error: possibly undefined macro: AM_PROG_LIBTOOL
</span><br>
<span class="quotelev2">&gt;&gt;       If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev2">&gt;&gt;       See the Autoconf documentation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am running:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Autoconf 2.60
</span><br>
<span class="quotelev2">&gt;&gt; Automake 1.10
</span><br>
<span class="quotelev2">&gt;&gt; Libtool 1.5.22
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which version of m4 do you use?  Did libtoolize throw an error (earlier
</span><br>
<span class="quotelev1">&gt; in the autogen output)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1214.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Previous message:</strong> <a href="1212.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<li><strong>In reply to:</strong> <a href="1211.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<!-- nextthread="start" -->
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
