<?
$subject_val = "Re: [OMPI devel] sm latency putback";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 15:52:48 2009" -->
<!-- isoreceived="20090217205248" -->
<!-- sent="Tue, 17 Feb 2009 15:52:43 -0500" -->
<!-- isosent="20090217205243" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm latency putback" -->
<!-- id="ea86ce220902171252j4e520b6esdde30fc8baa5b10_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="499ADFE9.6010108_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] sm latency putback<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-17 15:52:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5453.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Previous message:</strong> <a href="5451.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>In reply to:</strong> <a href="5441.php">Eugene Loh: "[OMPI devel] sm latency putback"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eugene,
<br>
<p>On Tue, Feb 17, 2009 at 11:03 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I think I just did my first putback to the trunk.  God help us all!
</span><br>
<p>Glad to have you helping out!
<br>
<p><span class="quotelev1">&gt; It's r20578 and feedback (e.g., &quot;you broke everything&quot;) is appreciated,
</span><br>
<span class="quotelev1">&gt; gentle feedback even more so.
</span><br>
<p>This commit looks good to me, but I haven't run/built it yet.
<br>
Having looked at it some (mostly to see how you did things),
<br>
I ran across one small bit of unprotected debugging
<br>
code in btl_sm_component.c that should be changed like this:
<br>
<p>+ #if OMPI_ENABLE_DEBUG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( FIFO_MAP(peer_smp_rank) != j )
<br>
+                {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;mca_btl_sm_component_progress: &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;rank %d got %d on FIFO %d, but this sender
<br>
should send to FIFO %d\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_smp_rank, peer_smp_rank, j, FIFO_MAP(peer_smp_rank));
<br>
+                }
<br>
+ #endif
<br>
<p>That would avoid adding an &quot;if&quot; to the critical code path on receiving
<br>
a sm message.
<br>
<p>Jeff graciously just added a Developer Configure Options wiki page
<br>
that describes OMPI_ENABLE_DEBUG among other useful things:
<br>
&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/developer/ConfigureOptions">https://svn.open-mpi.org/trac/ompi/wiki/developer/ConfigureOptions</a>
<br>
<p>Have a look.
<br>
<pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5453.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Previous message:</strong> <a href="5451.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>In reply to:</strong> <a href="5441.php">Eugene Loh: "[OMPI devel] sm latency putback"</a>
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
