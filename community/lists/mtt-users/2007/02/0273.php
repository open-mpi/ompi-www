<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 21 16:59:56 2007" -->
<!-- isoreceived="20070221215956" -->
<!-- sent="Wed, 21 Feb 2007 16:59:44 -0500" -->
<!-- isosent="20070221215944" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] MTT proxy (for offline clusters)" -->
<!-- id="20070221215944.GF31640_at_sun.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-21 16:59:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0274.php">Jeff Squyres: "Re: [MTT users] MTT proxy (for offline clusters)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/01/0272.php">Jeff Squyres: "[MTT users] v2.0.1 on release branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0274.php">Jeff Squyres: "Re: [MTT users] MTT proxy (for offline clusters)"</a>
<li><strong>Reply:</strong> <a href="0274.php">Jeff Squyres: "Re: [MTT users] MTT proxy (for offline clusters)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>If you have a cluster which can not access the Internet (and
<br>
thus can not submit results to www.open-mpi.org), there's a
<br>
solution now.  In mtt/trunk/client there's a simple web
<br>
proxy you can run like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ client/mtt-relay --port 6789 &amp;
<br>
<p>Set mttdatabase_url as below in your [Reporter: IU database]
<br>
section, and your results should get submitted. 
<br>
<p>mttdatabase_url = host.where.mtt-relay.runs:6789
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0274.php">Jeff Squyres: "Re: [MTT users] MTT proxy (for offline clusters)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/01/0272.php">Jeff Squyres: "[MTT users] v2.0.1 on release branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0274.php">Jeff Squyres: "Re: [MTT users] MTT proxy (for offline clusters)"</a>
<li><strong>Reply:</strong> <a href="0274.php">Jeff Squyres: "Re: [MTT users] MTT proxy (for offline clusters)"</a>
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
