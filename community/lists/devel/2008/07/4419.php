<?
$subject_val = "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 12:45:38 2008" -->
<!-- isoreceived="20080723164538" -->
<!-- sent="Wed, 23 Jul 2008 09:45:24 -0700" -->
<!-- isosent="20080723164524" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &amp;quot;-Wl, --as-needed -Wl, --no-undefined&amp;quot;)" -->
<!-- id="8D4F1F0C-099F-4C8E-83D2-C48F5262044D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D7D19DF1-4A01-479F-9317-7E7AD9F185B2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 12:45:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4420.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Previous message:</strong> <a href="4418.php">Jeff Squyres: "[OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>In reply to:</strong> <a href="4418.php">Jeff Squyres: "[OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4420.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian
<br>
<p>--  
<br>
Brian Barrett
<br>
<p>There is an art . . . to flying. The knack lies in learning how to
<br>
throw yourself at the ground and miss.
<br>
<p>On Jul 23, 2008, at 9:32, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Release managers: I have created ticket 1409 for this issue.  I need  
</span><br>
<span class="quotelev1">&gt; a ruling: do you want this fixed for v1.3?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/1409">https://svn.open-mpi.org/trac/ompi/ticket/1409</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PRO: It's not too heinous to fix, but it does require moving some  
</span><br>
<span class="quotelev1">&gt; code around.
</span><br>
<span class="quotelev1">&gt; CON: This is the first time anyone has ever run into this issue.
</span><br>
<span class="quotelev1">&gt; ???: I don't know if this is a trend where distros will start  
</span><br>
<span class="quotelev1">&gt; wanting to compile with -Wl,--no-undefined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 23, 2008, at 10:15 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 23, 2008, at 10:08 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is the attached patch what you're talking about?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If so, I'll commit to trunk, v1.2, and v1.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you verify that it work with a pristine build?  The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dependencies as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such look sane to me, also the cruft removal, but I fail to see how
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your directory ordering can work:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You're right; I tested only in an already-built tree.  I also  
</span><br>
<span class="quotelev2">&gt;&gt; didn't run &quot;make install&quot; to an empty tree, which also shows the  
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me twonk around with this a bit...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4420.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Previous message:</strong> <a href="4418.php">Jeff Squyres: "[OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>In reply to:</strong> <a href="4418.php">Jeff Squyres: "[OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4420.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
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
