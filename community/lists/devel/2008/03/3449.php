<?
$subject_val = "[OMPI devel] RFC: libevent update";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 14:51:09 2008" -->
<!-- isoreceived="20080317185109" -->
<!-- sent="Mon, 17 Mar 2008 14:50:55 -0400" -->
<!-- isosent="20080317185055" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: libevent update" -->
<!-- id="43CE15B7-5581-40B1-B6F2-83921B315549_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: libevent update<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-17 14:50:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3450.php">Jeff Squyres: "[OMPI devel] bml_r2_btl.c"</a>
<li><strong>Previous message:</strong> <a href="3448.php">Ralph H Castain: "Re: [OMPI devel] orte\mca\smr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3457.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Reply:</strong> <a href="3457.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Reply:</strong> <a href="3466.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Bring new version of libevent to the trunk.
<br>
<p>WHY: Newer version, slightly better performance (lower overheads /  
<br>
lighter weight), properly integrate the use of epoll and other  
<br>
scalable fd monitoring mechanisms.
<br>
<p>WHERE: 98% of the changes are in opal/event; there's a few changes to  
<br>
configury and one change to the orted.
<br>
<p>TIMEOUT: COB, Friday, 21 March 2008
<br>
<p>DESCRIPTION:
<br>
<p>George/UTK has done the bulk of the work to integrate a new version of  
<br>
libevent on the following tmp branch:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/svn/ompi/tmp-public/libevent-merge">https://svn.open-mpi.org/svn/ompi/tmp-public/libevent-merge</a>
<br>
<p>** WE WOULD VERY MUCH APPRECIATE IF PEOPLE COULD MTT TEST THIS BRANCH!  
<br>
**
<br>
<p>Cisco ran MTT on this branch on Friday and everything checked out  
<br>
(i.e., no more failures than on the trunk).  We just made a few more  
<br>
minor changes today and I'm running MTT again now, but I'm not  
<br>
expecting any new failures (MTT will take several hours).  We would  
<br>
like to bring the new libevent in over this upcoming weekend, but  
<br>
would very much appreciate if others could test on their platforms  
<br>
(Cisco tests mainly 64 bit RHEL4U4).  This new libevent *should* be a  
<br>
fairly side-effect free change, but it is possible that since we're  
<br>
now using epoll and other scalable fd monitoring tools, we'll run into  
<br>
some unanticipated issues on some platforms.
<br>
<p>Here's a consolidated diff if you want to see the changes:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset?old_path=tmp-public%2Flibevent-merge&amp;old=17846&amp;new_path=trunk&amp;new=17842">https://svn.open-mpi.org/trac/ompi/changeset?old_path=tmp-public%2Flibevent-merge&amp;old=17846&amp;new_path=trunk&amp;new=17842</a>
<br>
<p>Thanks.
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
<li><strong>Next message:</strong> <a href="3450.php">Jeff Squyres: "[OMPI devel] bml_r2_btl.c"</a>
<li><strong>Previous message:</strong> <a href="3448.php">Ralph H Castain: "Re: [OMPI devel] orte\mca\smr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3457.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Reply:</strong> <a href="3457.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Reply:</strong> <a href="3466.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
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
