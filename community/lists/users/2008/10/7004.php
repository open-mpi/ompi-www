<?
$subject_val = "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 13:39:14 2008" -->
<!-- isoreceived="20081016173914" -->
<!-- sent="Thu, 16 Oct 2008 21:39:08 +0400" -->
<!-- isosent="20081016173908" -->
<!-- name="Aleksej Saushev" -->
<!-- email="asau_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful" -->
<!-- id="87r66gphhf.fsf_at_inbox.ru" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3A64DB59-ACB1-4951-811A-0361A0733816_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful<br>
<strong>From:</strong> Aleksej Saushev (<em>asau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-16 13:39:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7005.php">Mostyn Lewis: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="7003.php">Mike Hanby: "Re: [OMPI users] The --with-sge option"</a>
<li><strong>In reply to:</strong> <a href="6963.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7010.php">Mike Hanby: "Re: [OMPI users] OpenMPI portability problems: debug info isn'thelpful"</a>
<li><strong>Reply:</strong> <a href="7010.php">Mike Hanby: "Re: [OMPI users] OpenMPI portability problems: debug info isn'thelpful"</a>
<li><strong>Reply:</strong> <a href="7028.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; On Oct 11, 2008, at 10:20 AM, Aleksej Saushev wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ompi_info | grep oob
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun --mca rml_base_debug 100 -np 2 skosfile
</span><br>
<span class="quotelev2">&gt;&gt; [asau.local:09060] mca: base: components_open: Looking for rml
</span><br>
<span class="quotelev2">&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt; [asau.local:09060] mca: base: components_open: distilling rml
</span><br>
<span class="quotelev2">&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt; [asau.local:09060] mca: base: components_open: accepting all
</span><br>
<span class="quotelev2">&gt;&gt; rml  components
</span><br>
<span class="quotelev2">&gt;&gt; [asau.local:09060] mca: base: components_open: opening rml components
</span><br>
<span class="quotelev2">&gt;&gt; [asau.local:09060] mca: base: components_open: found loaded
</span><br>
<span class="quotelev2">&gt;&gt; component oob
</span><br>
<span class="quotelev2">&gt;&gt; [asau.local:09060] mca: base: components_open: component oob
</span><br>
<span class="quotelev2">&gt;&gt; open  function successful
</span><br>
<span class="quotelev2">&gt;&gt; [asau.local:09060] orte_rml_base_select: initializing rml
</span><br>
<span class="quotelev2">&gt;&gt; component  oob
</span><br>
<span class="quotelev2">&gt;&gt; [asau.local:09060] orte_rml_base_select: init returned failure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah ha -- this is progress.  For some reason, your &quot;oob&quot; RML
</span><br>
<span class="quotelev1">&gt; plugin is  declining to run.  I see that its
</span><br>
<span class="quotelev1">&gt; query/initialization function is  actually quite short:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if(mca_oob_base_init() != ORTE_SUCCESS)
</span><br>
<span class="quotelev1">&gt;         return NULL;
</span><br>
<span class="quotelev1">&gt;     *priority = 1;
</span><br>
<span class="quotelev1">&gt;     return &amp;orte_rml_oob_module;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it must be failing the mca_oob_base_init() function -- this
</span><br>
<span class="quotelev1">&gt; is what  initializes the underling &quot;OOB&quot; (out of band)
</span><br>
<span class="quotelev1">&gt; communications subsystem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, this doesn't fail often, so we don't have any
</span><br>
<span class="quotelev1">&gt; run-time  switches to enable the debugging output.  :-(  Edit
</span><br>
<span class="quotelev1">&gt; orte/mca/oob/base/ oob_base_open.c line 43 and change the value
</span><br>
<span class="quotelev1">&gt; of mca_oob_base_output  from -1 to 0.  Let's see that output --
</span><br>
<span class="quotelev1">&gt; I'm particularly interested in  the output from querying the tcp
</span><br>
<span class="quotelev1">&gt; oob component.  I suspect that it's  declining to run as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if this is going to end up being an opal_if() issue --
</span><br>
<span class="quotelev1">&gt; where  we are traversing all the IP network interfaces from the
</span><br>
<span class="quotelev1">&gt; kernel...   I'll bet even money that it is.
</span><br>
<p>[asau.local:04648] opal_ifinit: ioctl(SIOCGIFFLAGS) failed with errno=6
<br>
[asau.local:04648] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init_stage1.c at line 182
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_rml_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -13 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[asau.local:04648] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_system_init.c at line 42
<br>
[asau.local:04648] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 52
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to initialize properly.  The error occured while
<br>
attempting to orte_init().  Returned value -13 instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p>Why don't you use strerror(3) to print errno value explanation?
<br>
<p><span class="quotelev1">&gt;From &lt;sys/errno.h&gt;:
</span><br>
#define	ENXIO		6		/* Device not configured */
<br>
<p>It seems that I have to debug network interface probing,
<br>
how should I use *_output subroutines so that they do print?
<br>
I tried these changes but in vain:
<br>
<p>--- opal/util/if.c.orig	2008-08-25 23:16:50.000000000 +0400
<br>
+++ opal/util/if.c	2008-10-15 23:55:07.000000000 +0400
<br>
@@ -242,6 +242,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(ifr-&gt;ifr_addr.sa_family != AF_INET)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;
<br>
+	opal_output(0, &quot;opal_ifinit: checking netif %s&quot;, ifr-&gt;ifr_name);
<br>
+	/* HERE IT FAILS!! */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(ioctl(sd, SIOCGIFFLAGS, ifr) &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;opal_ifinit: ioctl(SIOCGIFFLAGS) failed with errno=%d&quot;, errno);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
--- opal/util/if.c.orig	2008-08-25 23:16:50.000000000 +0400
<br>
+++ opal/util/if.c	2008-10-15 23:55:07.000000000 +0400
<br>
@@ -242,6 +242,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(ifr-&gt;ifr_addr.sa_family != AF_INET)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;
<br>
+	fprintf(stderr, &quot;opal_ifinit: checking netif %s\n&quot;, ifr-&gt;ifr_name);
<br>
+	/* HERE IT FAILS!! */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(ioctl(sd, SIOCGIFFLAGS, ifr) &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;opal_ifinit: ioctl(SIOCGIFFLAGS) failed with errno=%d&quot;, errno);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
--- opal/util/output.c.orig	2008-08-25 23:16:50.000000000 +0400
<br>
+++ opal/util/output.c	2008-10-16 19:58:49.000000000 +0400
<br>
@@ -41,7 +41,7 @@
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Private data
<br>
&nbsp;&nbsp;*/
<br>
-static int verbose_stream = -1;
<br>
+static int verbose_stream = 0;
<br>
&nbsp;static opal_output_stream_t verbose;
<br>
&nbsp;static char *output_dir = NULL;
<br>
&nbsp;static char *output_prefix = NULL;
<br>
<p>It seems a bit tricky, and it is scarcely documented.
<br>
Have I overlooked it?
<br>
<p>What makes it strange, that fprintf(stderr,..) doen't work.
<br>
<p><span class="quotelev1">&gt; Specifically: I predict that the tcp oob component is declining
</span><br>
<span class="quotelev1">&gt; to run  (which then causes the greater OOB init to fail, because
</span><br>
<span class="quotelev1">&gt; no OOB  components will be able to be found, which then causes
</span><br>
<span class="quotelev1">&gt; the RML OOB  init to fail, and therefore RML init fails because
</span><br>
<span class="quotelev1">&gt; no RML components  can be found).  My guess is that
</span><br>
<span class="quotelev1">&gt; orte/mca/oob/tcp/ oob_tcp.c:oob_tcp_component_init() is failing
</span><br>
<span class="quotelev1">&gt; to find any valid/UP IP  interfaces.  It starts traversing the
</span><br>
<span class="quotelev1">&gt; list of interfaces at line 864  with the call to opal_ifbegin()
</span><br>
<span class="quotelev1">&gt; (&quot;OPAL&quot; is our underlying portability  layer).  If this was the
</span><br>
<span class="quotelev1">&gt; first time opal_ifbegin() was invoked, it'll  scan the kernel
</span><br>
<span class="quotelev1">&gt; for all the interfaces; otherwise it'll just traverse  the list
</span><br>
<span class="quotelev1">&gt; that it already has.  Either way, you might want to run this
</span><br>
<span class="quotelev1">&gt; section through a debugger and see if it's not finding anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just an offhand question: do you have non-localhost IPv4
</span><br>
<span class="quotelev1">&gt; interfaces  enabled on your machines?
</span><br>
<p>Yes.
<br>
<p>ifconfig -l ==&gt; bce0 fwip0 rum0 lo0 pppoe0
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; That's also odd.  I don't see any problems in the source code in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this  particular area.  What is the output of this area of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code when  compiled with -E?  It should show some obvious
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll check this a bit later, if you don't object.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No problem.
</span><br>
<p>I've met some difficulties on this way today. I take time for further
<br>
investigations. Though I think this isn't needed now.
<br>
<p>I'll be unavailable starting from Saturday (probably,
<br>
since Monday for sure).
<br>
<p><p><pre>
-- 
HE CE3OH...
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7005.php">Mostyn Lewis: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="7003.php">Mike Hanby: "Re: [OMPI users] The --with-sge option"</a>
<li><strong>In reply to:</strong> <a href="6963.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7010.php">Mike Hanby: "Re: [OMPI users] OpenMPI portability problems: debug info isn'thelpful"</a>
<li><strong>Reply:</strong> <a href="7010.php">Mike Hanby: "Re: [OMPI users] OpenMPI portability problems: debug info isn'thelpful"</a>
<li><strong>Reply:</strong> <a href="7028.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
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
