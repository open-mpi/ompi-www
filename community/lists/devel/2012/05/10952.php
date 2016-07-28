<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  libevent socket code";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 11:04:57 2012" -->
<!-- isoreceived="20120501150457" -->
<!-- sent="Tue, 1 May 2012 15:03:57 +0000" -->
<!-- isosent="20120501150357" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  libevent socket code" -->
<!-- id="CBC555DB.E217%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FD42507E-8063-49A6-AD66-1CEE0C0095A6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re:  libevent socket code<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 11:03:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10953.php">Jeff Squyres: "[OMPI devel] RFC: Upgrade trunk to AC 2.69"</a>
<li><strong>Previous message:</strong> <a href="10951.php">Hjelm, Nathan T: "[OMPI devel] Potential ob1 bug"</a>
<li><strong>In reply to:</strong> <a href="10948.php">Ralph Castain: "Re: [OMPI devel] libevent socket code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10950.php">Hjelm, Nathan T: "Re: [OMPI devel] libevent socket code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This isn't a static library problem and it can't be fixed by the cluster
<br>
admins, it's a glibc design problem.  There are a set of functions (those
<br>
that use the services configured with nsswitch.conf, which includes host
<br>
name resolution and user information resolution) that are implemented
<br>
through a set of modules which are dlopened.  There are four or five
<br>
solutions to the problem, none good, including:
<br>
<p>&nbsp;&nbsp;- Don't use functions which cause the warning
<br>
&nbsp;&nbsp;- Don't use glibc
<br>
&nbsp;&nbsp;- Don't try to statically link
<br>
&nbsp;&nbsp;- Create a dynamically linked &quot;proxy app&quot; for those functions
<br>
&nbsp;&nbsp;- Make sure that glibc is installed on the compute machines, so that the
<br>
runtime libraries are available, and ignore the warnings (things will work
<br>
correctly in this mode)
<br>
<p>Personally, I like option 3.  There's really no reason to statically link
<br>
glibc into your executable.  It should already be staged on the compute
<br>
node if the machine admin knows what he's doing.
<br>
<p>Brian
<br>
<p><p>On 5/1/12 8:20 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I looked and the answer is &quot;no&quot;. I could add one and push it upstream,
</span><br>
<span class="quotelev1">&gt;but the problem is really due to someone not installing one or more
</span><br>
<span class="quotelev1">&gt;static libraries. It looks like we are only finding the shared library
</span><br>
<span class="quotelev1">&gt;versions of a couple of libs. I'm going to explore a little more and
</span><br>
<span class="quotelev1">&gt;possibly request that someone fix it on the cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On May 1, 2012, at 7:29 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a libevent configure switch we can use to disable those unused
</span><br>
<span class="quotelev2">&gt;&gt;libevent functions?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 30, 2012, at 11:49 PM, Hjelm, Nathan T wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When building statically on Cielito I see the following warnings:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /scratch/hjelmn/xe6/openmpi-gcc/trunk/lib/libmpi.a(session_dir.o): In
</span><br>
<span class="quotelev3">&gt;&gt;&gt;function `orte_session_dir_get_name':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; session_dir.c:(.text+0x204): warning: Using 'getpwuid' in statically
</span><br>
<span class="quotelev3">&gt;&gt;&gt;linked applications requires at runtime the shared libraries from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;glibc version used for linking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /scratch/hjelmn/xe6/openmpi-gcc/trunk/lib/libmpi.a(evutil.o): In
</span><br>
<span class="quotelev3">&gt;&gt;&gt;function `test_for_getaddrinfo_hacks':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; evutil.c:(.text+0x7a): warning: Using 'getaddrinfo' in statically
</span><br>
<span class="quotelev3">&gt;&gt;&gt;linked applications requires at runtime the shared libraries from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;glibc version used for linking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /scratch/hjelmn/xe6/openmpi-gcc/trunk/lib/libmpi.a(evutil.o): In
</span><br>
<span class="quotelev3">&gt;&gt;&gt;function `evutil_unparse_protoname':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; evutil.c:(.text+0x7a): warning: Using 'getprotobynumber' in statically
</span><br>
<span class="quotelev3">&gt;&gt;&gt;linked applications requires at runtime the shared libraries from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;glibc version used for linking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /scratch/hjelmn/xe6/openmpi-gcc/trunk/lib/libmpi.a(if.o): In function
</span><br>
<span class="quotelev3">&gt;&gt;&gt;`opal_ifaddrtoname':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if.c:(.text+0x37c): warning: Using 'gethostbyname' in statically
</span><br>
<span class="quotelev3">&gt;&gt;&gt;linked applications requires at runtime the shared libraries from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;glibc version used for linking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Two of those warnings are coming from libevent functions we do not use
</span><br>
<span class="quotelev3">&gt;&gt;&gt;(and probably never will). The other two may be a little trickier to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;fix.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Excuse the terribly reply format. OWA sucks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, April 30, 2012 2:55 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] libevent socket code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you send me a copy of the warnings, or tell me which machine at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;LANL is generating them? I'm working on libevent now (found a bug they
</span><br>
<span class="quotelev3">&gt;&gt;&gt;are helping with) and can take a look at it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 25, 2012, at 11:05 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Let me take a look. The code in question is in evutil.c and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;bufferevent_sock.c . If there is no option we might be able to get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;away with just removing these files from the Makefile.am.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, 25 Apr 2012, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 25, 2012, at 12:50 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can't it be done with configuring --without-libevent-sockets or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;some such thing? I really hate munging the code directly as it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;creates lots of support issues and makes it harder to upgrade.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If there's a libevent configure option we should be using, we can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;probably set that to be enabled by default.  Let me know.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10953.php">Jeff Squyres: "[OMPI devel] RFC: Upgrade trunk to AC 2.69"</a>
<li><strong>Previous message:</strong> <a href="10951.php">Hjelm, Nathan T: "[OMPI devel] Potential ob1 bug"</a>
<li><strong>In reply to:</strong> <a href="10948.php">Ralph Castain: "Re: [OMPI devel] libevent socket code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10950.php">Hjelm, Nathan T: "Re: [OMPI devel] libevent socket code"</a>
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
