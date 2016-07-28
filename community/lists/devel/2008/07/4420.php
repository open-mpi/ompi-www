<?
$subject_val = "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 12:52:29 2008" -->
<!-- isoreceived="20080723165229" -->
<!-- sent="Wed, 23 Jul 2008 09:52:12 -0700" -->
<!-- isosent="20080723165212" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &amp;quot;-Wl, --as-needed -Wl, --no-undefined&amp;quot;)" -->
<!-- id="D391A0D6-F220-4E00-9563-00301E4A5190_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-07-23 12:52:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4421.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Previous message:</strong> <a href="4419.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>In reply to:</strong> <a href="4418.php">Jeff Squyres: "[OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4421.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4421.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First, sorry about the previous message - I'm incapable of using my e- 
<br>
mail apparently.
<br>
<p>Based on discusions with people when this came up for LAM, it sounds  
<br>
like this will become common for the next set of major releases from  
<br>
the distros.  The feature is fairly new to GNU ld, but has some nice  
<br>
features for the OS, which I don't totally understand.
<br>
<p>Because this problem will only become more common during the lifespan  
<br>
of 1.3.x , it makes sense to put this in v1.3, in my opinion.
<br>
<p>Brian
<br>
<p><pre>
-- 
Brian Barrett
There is an art . . . to flying. The knack lies in learning how to
throw yourself at the ground and miss.
On Jul 23, 2008, at 9:32, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; Release managers: I have created ticket 1409 for this issue.  I need  
&gt; a ruling: do you want this fixed for v1.3?
&gt;
&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/1409">https://svn.open-mpi.org/trac/ompi/ticket/1409</a>
&gt;
&gt; PRO: It's not too heinous to fix, but it does require moving some  
&gt; code around.
&gt; CON: This is the first time anyone has ever run into this issue.
&gt; ???: I don't know if this is a trend where distros will start  
&gt; wanting to compile with -Wl,--no-undefined.
&gt;
&gt;
&gt;
&gt; On Jul 23, 2008, at 10:15 AM, Jeff Squyres wrote:
&gt;
&gt;&gt; On Jul 23, 2008, at 10:08 AM, Ralf Wildenhues wrote:
&gt;&gt;
&gt;&gt;&gt;&gt; Is the attached patch what you're talking about?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; If so, I'll commit to trunk, v1.2, and v1.3.
&gt;&gt;&gt;
&gt;&gt;&gt; Can you verify that it work with a pristine build?  The  
&gt;&gt;&gt; dependencies as
&gt;&gt;&gt; such look sane to me, also the cruft removal, but I fail to see how
&gt;&gt;&gt; your directory ordering can work:
&gt;&gt;
&gt;&gt; You're right; I tested only in an already-built tree.  I also  
&gt;&gt; didn't run &quot;make install&quot; to an empty tree, which also shows the  
&gt;&gt; problem.
&gt;&gt;
&gt;&gt; Let me twonk around with this a bit...
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; Jeff Squyres
&gt;&gt; Cisco Systems
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt;
&gt; -- 
&gt; Jeff Squyres
&gt; Cisco Systems
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4421.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Previous message:</strong> <a href="4419.php">Brian Barrett: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>In reply to:</strong> <a href="4418.php">Jeff Squyres: "[OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4421.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4421.php">George Bosilca: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
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
