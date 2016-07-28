<?
$subject_val = "Re: [OMPI users] OpenMPI portability problems: debug info isn'thelpful";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 10:25:45 2008" -->
<!-- isoreceived="20081017142545" -->
<!-- sent="Fri, 17 Oct 2008 09:25:41 -0500" -->
<!-- isosent="20081017142541" -->
<!-- name="Mike Hanby" -->
<!-- email="mhanby_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI portability problems: debug info isn'thelpful" -->
<!-- id="16AE1027F52DD64CB278BD8950529B63021000E8_at_UABEXMB5.ad.uab.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87r66gphhf.fsf_at_inbox.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI portability problems: debug info isn'thelpful<br>
<strong>From:</strong> Mike Hanby (<em>mhanby_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-17 10:25:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7011.php">Raymond Wan: "[OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Previous message:</strong> <a href="7009.php">Simone Giannerini: "[OMPI users] Problems with OpenMPI running with Rmpi"</a>
<li><strong>In reply to:</strong> <a href="7004.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7028.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some further clarification, I read a post over on the SGE mailing list
<br>
that said the --with-sge is part of ompi 1.3, not 1.2.x.
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Aleksej Saushev
<br>
Sent: Thursday, October 16, 2008 12:39 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI portability problems: debug info
<br>
isn'thelpful
<br>
<p>Jeff Squyres &lt;jsquyres_at_[hidden]&gt; writes:
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
[asau.local:04648] [NO-NAME] ORTE_ERROR_LOG: Not found in file
<br>
runtime/orte_init_stage1.c at line 182
<br>
------------------------------------------------------------------------
<br>
<pre>
--
It looks like orte_init failed for some reason; your parallel process is
likely to abort.  There are many reasons that a parallel process can
fail during orte_init; some of which are due to configuration or
environment problems.  This failure appears to be an internal failure;
here's some additional information (which may only be relevant to an
Open MPI developer):
  orte_rml_base_select failed
  --&gt; Returned value -13 instead of ORTE_SUCCESS
------------------------------------------------------------------------
--
[asau.local:04648] [NO-NAME] ORTE_ERROR_LOG: Not found in file
runtime/orte_system_init.c at line 42
[asau.local:04648] [NO-NAME] ORTE_ERROR_LOG: Not found in file
runtime/orte_init.c at line 52
------------------------------------------------------------------------
--
Open RTE was unable to initialize properly.  The error occured while
attempting to orte_init().  Returned value -13 instead of ORTE_SUCCESS.
------------------------------------------------------------------------
--
Why don't you use strerror(3) to print errno value explanation?
&gt;From &lt;sys/errno.h&gt;:
#define	ENXIO		6		/* Device not configured */
It seems that I have to debug network interface probing,
how should I use *_output subroutines so that they do print?
I tried these changes but in vain:
--- opal/util/if.c.orig	2008-08-25 23:16:50.000000000 +0400
+++ opal/util/if.c	2008-10-15 23:55:07.000000000 +0400
@@ -242,6 +242,8 @@
         if(ifr-&gt;ifr_addr.sa_family != AF_INET)
             continue;
 
+	opal_output(0, &quot;opal_ifinit: checking netif %s&quot;, ifr-&gt;ifr_name);
+	/* HERE IT FAILS!! */
         if(ioctl(sd, SIOCGIFFLAGS, ifr) &lt; 0) {
             opal_output(0, &quot;opal_ifinit: ioctl(SIOCGIFFLAGS) failed
with errno=%d&quot;, errno);
             continue;
--- opal/util/if.c.orig	2008-08-25 23:16:50.000000000 +0400
+++ opal/util/if.c	2008-10-15 23:55:07.000000000 +0400
@@ -242,6 +242,8 @@
         if(ifr-&gt;ifr_addr.sa_family != AF_INET)
             continue;
 
+	fprintf(stderr, &quot;opal_ifinit: checking netif %s\n&quot;,
ifr-&gt;ifr_name);
+	/* HERE IT FAILS!! */
         if(ioctl(sd, SIOCGIFFLAGS, ifr) &lt; 0) {
             opal_output(0, &quot;opal_ifinit: ioctl(SIOCGIFFLAGS) failed
with errno=%d&quot;, errno);
             continue;
--- opal/util/output.c.orig	2008-08-25 23:16:50.000000000 +0400
+++ opal/util/output.c	2008-10-16 19:58:49.000000000 +0400
@@ -41,7 +41,7 @@
 /*
  * Private data
  */
-static int verbose_stream = -1;
+static int verbose_stream = 0;
 static opal_output_stream_t verbose;
 static char *output_dir = NULL;
 static char *output_prefix = NULL;
It seems a bit tricky, and it is scarcely documented.
Have I overlooked it?
What makes it strange, that fprintf(stderr,..) doen't work.
&gt; Specifically: I predict that the tcp oob component is declining
&gt; to run  (which then causes the greater OOB init to fail, because
&gt; no OOB  components will be able to be found, which then causes
&gt; the RML OOB  init to fail, and therefore RML init fails because
&gt; no RML components  can be found).  My guess is that
&gt; orte/mca/oob/tcp/ oob_tcp.c:oob_tcp_component_init() is failing
&gt; to find any valid/UP IP  interfaces.  It starts traversing the
&gt; list of interfaces at line 864  with the call to opal_ifbegin()
&gt; (&quot;OPAL&quot; is our underlying portability  layer).  If this was the
&gt; first time opal_ifbegin() was invoked, it'll  scan the kernel
&gt; for all the interfaces; otherwise it'll just traverse  the list
&gt; that it already has.  Either way, you might want to run this
&gt; section through a debugger and see if it's not finding anything.
&gt;
&gt; Just an offhand question: do you have non-localhost IPv4
&gt; interfaces  enabled on your machines?
Yes.
ifconfig -l ==&gt; bce0 fwip0 rum0 lo0 pppoe0
&gt;&gt;&gt;&gt; That's also odd.  I don't see any problems in the source code in
&gt;&gt;&gt; this  particular area.  What is the output of this area of the
&gt;&gt;&gt; code when  compiled with -E?  It should show some obvious
&gt;&gt;&gt; problem.
&gt;&gt;
&gt;&gt; I'll check this a bit later, if you don't object.
&gt;
&gt; No problem.
I've met some difficulties on this way today. I take time for further
investigations. Though I think this isn't needed now.
I'll be unavailable starting from Saturday (probably,
since Monday for sure).
-- 
HE CE3OH...
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7011.php">Raymond Wan: "[OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Previous message:</strong> <a href="7009.php">Simone Giannerini: "[OMPI users] Problems with OpenMPI running with Rmpi"</a>
<li><strong>In reply to:</strong> <a href="7004.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7028.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
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
