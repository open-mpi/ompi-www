<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1164";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 15:30:25 2008" -->
<!-- isoreceived="20080320193025" -->
<!-- sent="Thu, 20 Mar 2008 15:30:14 -0400" -->
<!-- isosent="20080320193014" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1164" -->
<!-- id="F0C4C581-6DEE-4DE7-85F6-8EF364846906_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080320161911.GM51303_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1164<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-20 15:30:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/04/0252.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1176"</a>
<li><strong>Previous message:</strong> <a href="0250.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1164"</a>
<li><strong>In reply to:</strong> <a href="0250.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1164"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 20, 2008, at 12:19 PM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; I sense this &quot;do_not_run&quot; stuff could be useful to me, but
</span><br>
<span class="quotelev1">&gt; I'm not sure. Can you give a simple use case for
</span><br>
<span class="quotelev1">&gt; &quot;do_not_run&quot;? Could &quot;do_not_run&quot; be achieved by just
</span><br>
<span class="quotelev1">&gt; commenting out the INI lines that pertain to a certain
</span><br>
<span class="quotelev1">&gt; group? E.g., do these &quot;#&quot; comments ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # simple_really_slow:tests = src/MPI_Isend_flood_c src/ 
</span><br>
<span class="quotelev1">&gt; MPI_Send_flood_c
</span><br>
<p>No, because if an upper-level &amp;find_executables() found  
<br>
MPI_*end_flood_c, then they'll run in that section (vs. the  
<br>
simple_really_slow subsection).  The intent was to have a mechanism to  
<br>
specify: here's some tests, exclude them from all other sections, but  
<br>
*don't* run them.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # simple_really_slow:pass = &amp;and(&amp;test_wifexited(),  
</span><br>
<span class="quotelev1">&gt; &amp;eq(&amp;test_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt;  # simple_really_slow:exclusive = 1
</span><br>
<span class="quotelev1">&gt;  # simple_really_slow:timeout = &amp;sum(90, &amp;multiply(3, &amp;test_np()))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ... have the same effect as this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  simple_really_slow:do_not_run = 1
</span><br>
<p>Instead, you'd have:
<br>
<p>simple_really_slow:tests = src/MPI_Isend_flood_c src/MPI_Send_flood_c
<br>
simple_really_slow:do_not_run = 1
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/04/0252.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1176"</a>
<li><strong>Previous message:</strong> <a href="0250.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1164"</a>
<li><strong>In reply to:</strong> <a href="0250.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1164"</a>
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
