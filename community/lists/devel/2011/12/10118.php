<?
$subject_val = "Re: [OMPI devel] OMPI 1.4.5rc1 tested: gm";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 13:34:19 2011" -->
<!-- isoreceived="20111214183419" -->
<!-- sent="Wed, 14 Dec 2011 13:34:14 -0500" -->
<!-- isosent="20111214183414" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.4.5rc1 tested: gm" -->
<!-- id="64E92F8D-0A68-4966-918F-2D5CAA047956_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EE83629.6060803_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.4.5rc1 tested: gm<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 13:34:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10119.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="10117.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>In reply to:</strong> <a href="10092.php">Paul H. Hargrove: "[OMPI devel] OMPI 1.4.5rc1 tested: gm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10138.php">Ashley Pittman: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for all the testing, Paul!
<br>
<p>On Dec 14, 2011, at 12:37 AM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; On one of the same &quot;System 2&quot; that I used to check compilation against Quadrics Elan, I have multiple versions of the Myrinet GM headers/libs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; System 2: Linux/x86
</span><br>
<span class="quotelev2">&gt;&gt; $ cat /etc/redhat-release
</span><br>
<span class="quotelev2">&gt;&gt; Red Hat Linux release 8.0 (Psyche)
</span><br>
<span class="quotelev2">&gt;&gt; $ uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Linux [hostname] 2.4.21-60.ELsmp #1 SMP Fri Aug 28 06:45:10 EDT 2009 i686 i686 i386 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt; $ gcc --version | head -1
</span><br>
<span class="quotelev2">&gt;&gt; gcc (GCC) 3.4.0 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to build against the following GM releases:
</span><br>
<span class="quotelev1">&gt;   gm-2.0.19
</span><br>
<span class="quotelev1">&gt;   gm-2.0.12
</span><br>
<span class="quotelev1">&gt;   gm-2.0.6
</span><br>
<span class="quotelev1">&gt;   gm-1.6.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All four &quot;make all install check&quot; w/o incident.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally, I have a newer system:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; System 3: Linux/x86-64
</span><br>
<span class="quotelev2">&gt;&gt; $ cat /etc/redhat-release
</span><br>
<span class="quotelev2">&gt;&gt; Scientific Linux SL release 5.5 (Boron)
</span><br>
<span class="quotelev2">&gt;&gt; $ uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Linux [hostname] 2.6.18-238.1.1.el5 #1 SMP Tue Jan 18 18:49:37 EST 2011 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt; $ gcc --version | head -1
</span><br>
<span class="quotelev2">&gt;&gt; gcc (GCC) 4.1.2 20080704 (Red Hat 4.1.2-48)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is running (w/ actual h/w) gm-2.1.30.
</span><br>
<span class="quotelev1">&gt; Again, &quot;make all install check&quot; runs w/o incident.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/8/2011 2:13 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 1.4.5rc1 is now posted in the usual place:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gearing up for a pre-Christmas release -- please test!  There have only been a few bug fixes since 1.4.4.  See <a href="http://svn.open-mpi.org/svn/ompi/branches/v1.4/NEWS">http://svn.open-mpi.org/svn/ompi/branches/v1.4/NEWS</a> for details.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (note that we'll likely have a 1.5.5rc1 shortly, too)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10119.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="10117.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>In reply to:</strong> <a href="10092.php">Paul H. Hargrove: "[OMPI devel] OMPI 1.4.5rc1 tested: gm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10138.php">Ashley Pittman: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
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
