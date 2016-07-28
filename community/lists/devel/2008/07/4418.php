<?
$subject_val = "[OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 12:33:35 2008" -->
<!-- isoreceived="20080723163335" -->
<!-- sent="Wed, 23 Jul 2008 12:32:26 -0400" -->
<!-- isosent="20080723163226" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &amp;quot;-Wl, --as-needed -Wl, --no-undefined&amp;quot;)" -->
<!-- id="D7D19DF1-4A01-479F-9317-7E7AD9F185B2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453F815F-9434-42DE-A47A-9616495AB314_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 12:32:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4419.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Previous message:</strong> <a href="4417.php">George Bosilca: "[OMPI devel] 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="4406.php">Jeff Squyres: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4419.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4419.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4420.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Release managers: I have created ticket 1409 for this issue.  I need a  
<br>
ruling: do you want this fixed for v1.3?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1409">https://svn.open-mpi.org/trac/ompi/ticket/1409</a>
<br>
<p>PRO: It's not too heinous to fix, but it does require moving some code  
<br>
around.
<br>
CON: This is the first time anyone has ever run into this issue.
<br>
???: I don't know if this is a trend where distros will start wanting  
<br>
to compile with -Wl,--no-undefined.
<br>
<p><p><p>On Jul 23, 2008, at 10:15 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 23, 2008, at 10:08 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is the attached patch what you're talking about?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If so, I'll commit to trunk, v1.2, and v1.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you verify that it work with a pristine build?  The  
</span><br>
<span class="quotelev2">&gt;&gt; dependencies as
</span><br>
<span class="quotelev2">&gt;&gt; such look sane to me, also the cruft removal, but I fail to see how
</span><br>
<span class="quotelev2">&gt;&gt; your directory ordering can work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're right; I tested only in an already-built tree.  I also didn't  
</span><br>
<span class="quotelev1">&gt; run &quot;make install&quot; to an empty tree, which also shows the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me twonk around with this a bit...
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4419.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Previous message:</strong> <a href="4417.php">George Bosilca: "[OMPI devel] 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="4406.php">Jeff Squyres: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4419.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4419.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4420.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
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
