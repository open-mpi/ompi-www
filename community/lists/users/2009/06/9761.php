<?
$subject_val = "Re: [OMPI users] Compile problems with 1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 19:18:50 2009" -->
<!-- isoreceived="20090629231850" -->
<!-- sent="Mon, 29 Jun 2009 16:18:46 -0700" -->
<!-- isosent="20090629231846" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compile problems with 1.3.2" -->
<!-- id="df8c8a6d0906291618k1e42e66ct436df671ca7adb32_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A493212.1060606_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compile problems with 1.3.2<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-29 19:18:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9762.php">Jeff Squyres: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9760.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9760.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9762.php">Jeff Squyres: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Reply:</strong> <a href="9762.php">Jeff Squyres: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Reply:</strong> <a href="9763.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That sounds good; I'm glad there are a variety of tools out there.
<br>
<p>However, this now brings me back to my origional problem.  I was
<br>
successful at compiling openmpi after disabling vt, but if I want to
<br>
use (some of) these tools, I'll need that enabled...So how do I fix
<br>
the actual problem and compile openmpi with vt?
<br>
<p>Also, as a side note, the rpm generation process also mentioned
<br>
several files that were &quot;installed but unpackaged&quot;; many of these look
<br>
like they should not be:
<br>
<p>warning: Installed (but unpackaged) file(s) found:
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-gcc/1.3.2/bin/ompi-checkpoint
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-gcc/1.3.2/bin/ompi-clean
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-gcc/1.3.2/bin/ompi-iof
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-gcc/1.3.2/bin/ompi-ps
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-gcc/1.3.2/bin/ompi-restart
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-gcc/1.3.2/bin/ompi-server
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-gcc/1.3.2/bin/orte-clean
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-gcc/1.3.2/bin/orte-iof
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-gcc/1.3.2/bin/orte-ps
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-gcc/1.3.2/etc/openmpi-default-hostfile
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-gcc/1.3.2/etc/openmpi-mca-params.conf
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-gcc/1.3.2/etc/openmpi-totalview.tcl
<br>
<p>Thanks!
<br>
--Jim
<br>
<p>On Mon, Jun 29, 2009 at 2:28 PM, Eugene Loh&lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Jim Kusznir wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, trying now. &#160;This does bring up a question I've been meaning to
</span><br>
<span class="quotelev2">&gt;&gt; ask. &#160;I need to find a way to analyze the efficiency of parallel jobs,
</span><br>
<span class="quotelev2">&gt;&gt; and the only way I've known about in the past is through vampire. &#160;I
</span><br>
<span class="quotelev2">&gt;&gt; do not have the software license presently (and last I looked, it was
</span><br>
<span class="quotelev2">&gt;&gt; a commercial licensed product). &#160;Does this configure flag suggest that
</span><br>
<span class="quotelev2">&gt;&gt; openmpi has native support for generating vampire trace files? &#160;Is
</span><br>
<span class="quotelev2">&gt;&gt; there any open source tools for analyzing them (or another route I
</span><br>
<span class="quotelev2">&gt;&gt; should be looking at)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Writing up a FAQ entry on this subject remains on my &quot;to do&quot; list. &#160;(Hasn't
</span><br>
<span class="quotelev1">&gt; gotten dropped off the list, but hasn't gotten done either.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI *does* have VampirTrace in it, but then VampirTrace is available
</span><br>
<span class="quotelev1">&gt; freely anyhow. &#160;The question is what you're going to do with the trace data.
</span><br>
<span class="quotelev1">&gt; &#160;You can get a Vampir license. &#160;If you want an open-source tool for
</span><br>
<span class="quotelev1">&gt; analyzing VT traces, I *think* you can use TAU, but am not sure. &#160;There are
</span><br>
<span class="quotelev1">&gt; also crude tools like otfprofile and otfdump. &#160;Leo P recently raised some
</span><br>
<span class="quotelev1">&gt; number of these issues on the &quot;devel&quot; alias and was told by the Vampir
</span><br>
<span class="quotelev1">&gt; people (per e-mail not reported to the devel archives) that to look at VT
</span><br>
<span class="quotelev1">&gt; data, you really need to get Vampir. &#160;Evaluation licenses are apparently
</span><br>
<span class="quotelev1">&gt; available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought I had sent e-mail out on this subject before, but cannot find it.
</span><br>
<span class="quotelev1">&gt; &#160;Other open source performance tools supposedly include Jumpshot (associated
</span><br>
<span class="quotelev1">&gt; with MPICH, but usable with OMPI), mpiP, FPMPI, and IPM. &#160;(I'm just dropping
</span><br>
<span class="quotelev1">&gt; a bunch of acronyms on you here. &#160;I'm not that familiar with any of these
</span><br>
<span class="quotelev1">&gt; tools.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're not so much interested in open source as in &quot;free download&quot;, then
</span><br>
<span class="quotelev1">&gt; another option is Sun Studio Performance Analyzer, which uses VT tracing and
</span><br>
<span class="quotelev1">&gt; provides a GUI and command-line tool to look at the data. &#160;Use was described
</span><br>
<span class="quotelev1">&gt; in this message:
</span><br>
<span class="quotelev1">&gt; &#160;<a href="http://www.open-mpi.org/community/lists/devel/2009/06/6234.php">http://www.open-mpi.org/community/lists/devel/2009/06/6234.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Personally, I'd recommend Sun Studio. &#160;(Fair disclosure: &#160;I'm a Sun
</span><br>
<span class="quotelev1">&gt; employee.)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9762.php">Jeff Squyres: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9760.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9760.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9762.php">Jeff Squyres: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Reply:</strong> <a href="9762.php">Jeff Squyres: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Reply:</strong> <a href="9763.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
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
