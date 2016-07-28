<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 30 10:50:14 2006" -->
<!-- isoreceived="20060530145014" -->
<!-- sent="Tue, 30 May 2006 10:49:50 -0400" -->
<!-- isosent="20060530144950" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Updating to r10118" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FDBFA_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-30 10:49:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0901.php">Jeff Squyres \(jsquyres\): "[OMPI devel] FW: [all-osl-users] Fwd: Electrical Outage Saturday, June 3, all day"</a>
<li><strong>Previous message:</strong> <a href="0899.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When you update to r10118 (or beyond), you may see the following SVN
<br>
error:
<br>
<p>svn: Failed to add file 'ompi/include/mpif-common.h': object of the same
<br>
name already exists
<br>
<p>Short version: 
<br>
--------------
<br>
<p>This is harmless -- just &quot;rm ompi/include/mpif-common.h&quot; and &quot;svn up&quot;
<br>
again (or do the &quot;rm&quot; before updating).
<br>
<p>Longer version:
<br>
---------------
<br>
<p>What is happening is that SVN is saying, &quot;Hey, I'm trying to put in a
<br>
new file somewhere, but there's already a file by that name!  I don't
<br>
know what you want me to do, so I'm going to quit.&quot;
<br>
<p>This is actually not a problem.  As specified above, just remove the
<br>
file and &quot;svn up&quot; again.
<br>
<p>But why is it happening?
<br>
<p>We used to generate a file named mpif-common.h from configure (and
<br>
therefore SVN had no knowledge of this file).  r10118 introduced a file
<br>
in svn named mpif-common.h that is not generated via configure.  Hence,
<br>
when you update, you may have an old generated version of mpif-common.h
<br>
where SVN is trying to put the new mpif-common.h, so SVN takes the
<br>
conservative route and says &quot;Help!&quot;. 
<br>
<p>Sorry for any confusion!
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0901.php">Jeff Squyres \(jsquyres\): "[OMPI devel] FW: [all-osl-users] Fwd: Electrical Outage Saturday, June 3, all day"</a>
<li><strong>Previous message:</strong> <a href="0899.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
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
