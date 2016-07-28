<?
$subject_val = "Re: [OMPI devel] libevent socket code";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 10:48:12 2012" -->
<!-- isoreceived="20120501144812" -->
<!-- sent="Tue, 1 May 2012 14:48:07 +0000" -->
<!-- isosent="20120501144807" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libevent socket code" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D71516FBC79C_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C86AFD9A-341C-4FF3-8BD2-5DFAAF3E6ACD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] libevent socket code<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 10:48:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10951.php">Hjelm, Nathan T: "[OMPI devel] Potential ob1 bug"</a>
<li><strong>Previous message:</strong> <a href="10949.php">Ralph Castain: "[OMPI devel] RFC: Update libevent"</a>
<li><strong>In reply to:</strong> <a href="10947.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not that I can find.
<br>
<p>-Nathan
<br>
________________________________________
<br>
From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on behalf of Jeff Squyres [jsquyres_at_[hidden]]
<br>
Sent: Tuesday, May 01, 2012 7:29 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] libevent socket code
<br>
<p>Is there a libevent configure switch we can use to disable those unused libevent functions?
<br>
<p>On Apr 30, 2012, at 11:49 PM, Hjelm, Nathan T wrote:
<br>
<p><span class="quotelev1">&gt; When building statically on Cielito I see the following warnings:
</span><br>
<span class="quotelev1">&gt; /scratch/hjelmn/xe6/openmpi-gcc/trunk/lib/libmpi.a(session_dir.o): In function `orte_session_dir_get_name':
</span><br>
<span class="quotelev1">&gt; session_dir.c:(.text+0x204): warning: Using 'getpwuid' in statically linked applications requires at runtime the shared libraries from the glibc version used for linking
</span><br>
<span class="quotelev1">&gt; /scratch/hjelmn/xe6/openmpi-gcc/trunk/lib/libmpi.a(evutil.o): In function `test_for_getaddrinfo_hacks':
</span><br>
<span class="quotelev1">&gt; evutil.c:(.text+0x7a): warning: Using 'getaddrinfo' in statically linked applications requires at runtime the shared libraries from the glibc version used for linking
</span><br>
<span class="quotelev1">&gt; /scratch/hjelmn/xe6/openmpi-gcc/trunk/lib/libmpi.a(evutil.o): In function `evutil_unparse_protoname':
</span><br>
<span class="quotelev1">&gt; evutil.c:(.text+0x7a): warning: Using 'getprotobynumber' in statically linked applications requires at runtime the shared libraries from the glibc version used for linking
</span><br>
<span class="quotelev1">&gt; /scratch/hjelmn/xe6/openmpi-gcc/trunk/lib/libmpi.a(if.o): In function `opal_ifaddrtoname':
</span><br>
<span class="quotelev1">&gt; if.c:(.text+0x37c): warning: Using 'gethostbyname' in statically linked applications requires at runtime the shared libraries from the glibc version used for linking
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two of those warnings are coming from libevent functions we do not use (and probably never will). The other two may be a little trickier to fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Excuse the terribly reply format. OWA sucks.
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, April 30, 2012 2:55 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] libevent socket code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send me a copy of the warnings, or tell me which machine at LANL is generating them? I'm working on libevent now (found a bug they are helping with) and can take a look at it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 25, 2012, at 11:05 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me take a look. The code in question is in evutil.c and bufferevent_sock.c . If there is no option we might be able to get away with just removing these files from the Makefile.am.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 25 Apr 2012, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 25, 2012, at 12:50 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can't it be done with configuring --without-libevent-sockets or some such thing? I really hate munging the code directly as it creates lots of support issues and makes it harder to upgrade.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If there's a libevent configure option we should be using, we can probably set that to be enabled by default.  Let me know.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10951.php">Hjelm, Nathan T: "[OMPI devel] Potential ob1 bug"</a>
<li><strong>Previous message:</strong> <a href="10949.php">Ralph Castain: "[OMPI devel] RFC: Update libevent"</a>
<li><strong>In reply to:</strong> <a href="10947.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
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
