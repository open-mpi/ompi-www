<?
$subject_val = "Re: [OMPI devel] RFC: libevent update";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 17:20:03 2008" -->
<!-- isoreceived="20080318212003" -->
<!-- sent="Tue, 18 Mar 2008 17:19:49 -0400" -->
<!-- isosent="20080318211949" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: libevent update" -->
<!-- id="92288373-416C-42BB-8D3C-18EC08553E14_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="67A4A4B0-7AEA-47CF-8EA4-5EA153A0B6A8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: libevent update<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 17:19:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3464.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Previous message:</strong> <a href="3462.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>In reply to:</strong> <a href="3462.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3464.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Reply:</strong> <a href="3464.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Its like rewriting libevent from scratch. I guess it can be done, but  
<br>
it will be a long and painful process. How about the following solution:
<br>
<p>- the daemons are aware that the checkpointing is enabled. They can  
<br>
set the environment variable which will force the opal_event_include  
<br>
to be set to select.
<br>
<p>- as the environment variables have a higher priority over the  
<br>
configuration file, this will work on most cases (except when the user  
<br>
add the mca parameter by hand).
<br>
<p>- in the checkpoint/restart code, we can add a test that check the  
<br>
value of opal_event_include, print a message if the value is not  
<br>
select, and disable the checkpoint/restart functionality.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 18, 2008, at 4:59 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; George added an MCA parameter for it (opal_event_include is a string
</span><br>
<span class="quotelev1">&gt; that can be set to &quot;select&quot; or &quot;poll&quot;), but it has to be set before
</span><br>
<span class="quotelev1">&gt; opal_init().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh: could you try running with the MCA parameter opal_event_include
</span><br>
<span class="quotelev1">&gt; set to &quot;select&quot;?  This would confirm Brian's hypothesis...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given that opal_init() is the first thing that happens in
</span><br>
<span class="quotelev1">&gt; ompi_mpi_init(), this may not be enough -- you could *detect* that we
</span><br>
<span class="quotelev1">&gt; can't do BLCR, but this mechanism doesn't allow libmpi to set
</span><br>
<span class="quotelev1">&gt; something saying &quot;reset libevent to be able to only use select().&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George -- is that hard to add?  I would imagine that it could be kinda
</span><br>
<span class="quotelev1">&gt; difficult to reset libevent after there are already users of it, fd's
</span><br>
<span class="quotelev1">&gt; and other events that may have been added, etc...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 18, 2008, at 4:29 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff / George -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you add a way to specify which event modules are used?  Because
</span><br>
<span class="quotelev2">&gt;&gt; epoll
</span><br>
<span class="quotelev2">&gt;&gt; pushs the socket list into the kernel, I can see how it would screw  
</span><br>
<span class="quotelev2">&gt;&gt; up
</span><br>
<span class="quotelev2">&gt;&gt; BLCR.  I bet everything would work if we forced the use of poll /
</span><br>
<span class="quotelev2">&gt;&gt; select.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 18 Mar 2008, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Crud, ok.  Keep us posted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 18, 2008, at 4:16 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm testing with checkpoint/restart and the new libevent seems to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; messing up the checkpoints generated by BLCR. I'll be taking a look
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at it over the next couple of days, but just thought I'd let people
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; know. Unfortunately I don't have any more details at the moment.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 17, 2008, at 2:50 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHAT: Bring new version of libevent to the trunk.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHY: Newer version, slightly better performance (lower overheads /
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lighter weight), properly integrate the use of epoll and other
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; scalable fd monitoring mechanisms.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHERE: 98% of the changes are in opal/event; there's a few
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; changes to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configury and one change to the orted.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TIMEOUT: COB, Friday, 21 March 2008
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; DESCRIPTION:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; George/UTK has done the bulk of the work to integrate a new  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; version
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libevent on the following tmp branch:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   <a href="https://svn.open-mpi.org/svn/ompi/tmp-public/libevent-merge">https://svn.open-mpi.org/svn/ompi/tmp-public/libevent-merge</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ** WE WOULD VERY MUCH APPRECIATE IF PEOPLE COULD MTT TEST THIS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; BRANCH!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; **
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cisco ran MTT on this branch on Friday and everything checked out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (i.e., no more failures than on the trunk).  We just made a few
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; more
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; minor changes today and I'm running MTT again now, but I'm not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; expecting any new failures (MTT will take several hours).  We  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; like to bring the new libevent in over this upcoming weekend, but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would very much appreciate if others could test on their platforms
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (Cisco tests mainly 64 bit RHEL4U4).  This new libevent *should*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fairly side-effect free change, but it is possible that since  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; we're
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; now using epoll and other scalable fd monitoring tools, we'll run
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; into
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some unanticipated issues on some platforms.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here's a consolidated diff if you want to see the changes:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset?old_path=tmp-public">https://svn.open-mpi.org/trac/ompi/changeset?old_path=tmp-public</a>%
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2Flibevent-merge&amp;old=17846&amp;new_path=trunk&amp;new=17842
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3463/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3464.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Previous message:</strong> <a href="3462.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>In reply to:</strong> <a href="3462.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3464.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Reply:</strong> <a href="3464.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
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
