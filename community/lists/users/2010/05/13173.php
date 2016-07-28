<?
$subject_val = "Re: [OMPI users] Open MPI 1.4.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 27 18:20:05 2010" -->
<!-- isoreceived="20100527222005" -->
<!-- sent="Thu, 27 May 2010 18:20:00 -0400" -->
<!-- isosent="20100527222000" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.4.2 released" -->
<!-- id="E8FE9E9D-B925-4CA6-9ECC-BAD992F6D372_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87fx1sw6a6.fsf_at_inbox.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.4.2 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-27 18:20:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13174.php">David Singleton: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<li><strong>Previous message:</strong> <a href="13172.php">Jeff Squyres: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="13056.php">Aleksej Saushev: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13174.php">David Singleton: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 16, 2010, at 5:21 AM, Aleksej Saushev wrote:
<br>
<p><span class="quotelev1">&gt; <a href="http://cvsweb.netbsd.org/bsdweb.cgi/pkgsrc/parallel/openmpi/patches/">http://cvsweb.netbsd.org/bsdweb.cgi/pkgsrc/parallel/openmpi/patches/</a>
</span><br>
<p>Sorry for the high latency reply...
<br>
<p>aa: We haven't added RPATH support yet.  We've talked about it but never done it.  There are some in OMPI who insist that rpath support needs to be optional.  A full patch solution would be appreciated.
<br>
<p>ab: This should now be moot on the dev trunk as of r23158.  It won't go to v1.4, but it is slated for the v1.5 series.  I was waiting for your reply to my off-list pings on testing this stuff before I filed a v1.5 CMR, but I just went ahead and filed one anyway: <a href="https://svn.open-mpi.org/trac/ompi/ticket/2423">https://svn.open-mpi.org/trac/ompi/ticket/2423</a>.
<br>
<p>ac: ditto to ab
<br>
<p>ad: ditto to ab
<br>
<p>ae: ditto to ab
<br>
<p>af: ditto to ab -- but I might have missed this one.  Can you test?
<br>
<p>ag: ditto to ab -- but I might have missed this one.  Can you test?
<br>
<p>ah: this should be applied -- did we miss it?  Gah!  I just checked and it didn't go.  What the heck happened here... (checking)  I see that it went into v1.5.  It supposedly went into v1.4 in r22890.  ....gahh!  It looks like the commit message on r22890 *says* it put in r22640, but it didn't actually *do* it.  :-(
<br>
<p>ag: should be moot by ab, above.
<br>
<p>ai: I think you explained this to me before, but I forget (sorry!).  These are actually configuration files, not example files.  Hence, we install them into sysconfdir.  Is this a difference of definitions, somehow?  (i.e., what you define as usage policies for exampledir and sysconfdir)
<br>
<p>aj: ditto to ai
<br>
<p>ak: ditto to ai
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="13174.php">David Singleton: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<li><strong>Previous message:</strong> <a href="13172.php">Jeff Squyres: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="13056.php">Aleksej Saushev: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13174.php">David Singleton: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
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
