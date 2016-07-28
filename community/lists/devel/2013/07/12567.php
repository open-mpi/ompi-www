<?
$subject_val = "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  9 08:14:45 2013" -->
<!-- isoreceived="20130709121445" -->
<!-- sent="Tue, 9 Jul 2013 12:14:34 +0000" -->
<!-- isosent="20130709121434" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A1AC40AF7_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHYyVz7TrTfHEssBkjZOjQHXD7CuXnOqcvK0s1ZUafZOFENAjg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-09 08:14:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12568.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12566.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>In reply to:</strong> <a href="12564.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12570.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Reply:</strong> <a href="12570.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, he's not &quot;our&quot; Vasily :). I thought it was also until today. He had the build issues last week - I thought this was &quot;our&quot; Vasily also, that's why I responded! I'm in Israel now and just spoke with Vasily; he was confused as to why I was emailing him about SVN problems.
<br>
<p><p><p>Josh
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Vasiliy
<br>
Sent: Tuesday, July 09, 2013 7:02 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries
<br>
<p>I'll have to look into that. It looks like with all my humble patches it should compile and pass the tests successfully even if compiled with -march=native -mtune=native -Ofast+ optimization, and all the perks enabled. That is, if the missing headers will be made available.
<br>
<p>No, I haven't been contacted by Mellanox nor by any respectful organization mentioned on the OMPI membership list to support Open MPI under Cygwin 32/64-bit. Even if I have a degree in Physics, invested a personal fortune in my Quantitative..., in my second-third degree studies in Switzerland, and have 20+ years of work experience in the IT field, quite recently with the Brutus cluster, who would be willing to look for a new hire nowadays?
<br>
<p>On Mon, Jul 8, 2013 at 9:09 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; This is not enough information to know what is going wrong with the debugger library -- all you pasted was a link failure with no surrounding context...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Don't forget that we officially dropped Windows support in v1.7.  Cygwin supposedly works, but we're not testing it, so I wouldn't be surprised if there's bit rot in there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you the same Vasily from Mellanox?  If so, are you saying that Mellanox is working to support Open MPI under Cygwin?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 8, 2013, at 3:00 PM, Vasiliy wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I haven't checked that yet, however, from my experience, creating a 
</span><br>
<span class="quotelev2">&gt;&gt; shared library manually from the same compiled objects never was a 
</span><br>
<span class="quotelev2">&gt;&gt; problem at a later stage, it's usually because of Makefile's 
</span><br>
<span class="quotelev2">&gt;&gt; inconsistent dependencies ordering:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ uname -srvmo
</span><br>
<span class="quotelev2">&gt;&gt; CYGWIN_NT-6.1 1.7.21(0.267/5/3) 2013-06-28 10:03 x86_64 Cygwin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;code&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in debuggers
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/ompi/debuggers'
</span><br>
<span class="quotelev2">&gt;&gt;  CC       libdebuggers_la-ompi_debuggers.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CCLD     libdebuggers.la
</span><br>
<span class="quotelev2">&gt;&gt;  CC       ompi_debugger_canary.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CCLD     libompi_debugger_canary.la
</span><br>
<span class="quotelev2">&gt;&gt;  CC       libompi_dbg_msgq_la-ompi_msgq_dll.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       libompi_dbg_msgq_la-ompi_common_dll.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CCLD     libompi_dbg_msgq.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: warning: undefined symbols not allowed in 
</span><br>
<span class="quotelev2">&gt;&gt; x86_64-unknown-cygwin shared libraries
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/ompi/debuggers'
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/code&gt;
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12568.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12566.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>In reply to:</strong> <a href="12564.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12570.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Reply:</strong> <a href="12570.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
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
