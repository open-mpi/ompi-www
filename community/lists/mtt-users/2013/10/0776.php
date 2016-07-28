<?
$subject_val = "Re: [MTT users] ssh tunnel and wget";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  2 10:27:17 2013" -->
<!-- isoreceived="20131002142717" -->
<!-- sent="Wed, 2 Oct 2013 14:27:16 +0000" -->
<!-- isosent="20131002142716" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] ssh tunnel and wget" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9162CF_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1742883159.361.1380110036492.JavaMail.root_at_zimbra" -->
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
<strong>Subject:</strong> Re: [MTT users] ssh tunnel and wget<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-02 10:27:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0777.php">Jeff Squyres (jsquyres): "Re: [MTT users] mtt-relay requirements"</a>
<li><strong>Previous message:</strong> <a href="0775.php">Wen Hao Wang: "[MTT users] AUTO: Wen Hao Wang is out of the office (returning 2013/10/14)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/09/0772.php">Christoph Niethammer: "Re: [MTT users] ssh tunnel and wget"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the giant delay in replying to this...
<br>
<p>I think there's 2 options here:
<br>
<p>1. Modify MTT to let you pass something like &quot;ompi_snapshot_wget_header=Host: www.open-mpi.org&quot; in the INI file.  This is certainly do-able; I don't have the time to do it, but I'd be happy to look at a patch if you submit one.
<br>
<p>2. Split your &quot;get&quot; into 2 phases: have some server that has direct access to the internet do the wget on a regular basis, and put the resulting files in a directory that can be accessed by your back-end cluster (i.e., you'll need to write a script to do this).  Then you can have MTT look in that directory for new tarballs (you might need to write this, too?  I don't think MTT does that functionality right now, but it wouldn't be hard to add).
<br>
<p><p><p>On Sep 25, 2013, at 7:53 AM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the replay.
</span><br>
<span class="quotelev1">&gt; My configure section looks nearly the same.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI get: ompi-nightly-trunk]
</span><br>
<span class="quotelev1">&gt; module = OMPI_Snapshot
</span><br>
<span class="quotelev1">&gt; mpi_details = Open MPI
</span><br>
<span class="quotelev1">&gt; ompi_snapshot_url = <a href="http://localhost:PORT/nightly/trunk">http://localhost:PORT/nightly/trunk</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Only www.open-mpi.org is replaced by localhost:PORT which corresponds to a ssh tunnel to outer world open-mpi.org. (PORT is a number in the config)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As of HTTP/1.0 wget sends a Host header entry - in this case localhost - which is denied by the open-mpi website.
</span><br>
<span class="quotelev1">&gt; I would like to overwrite this in the mtt settings instead of using a wget wrapper if possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Christoph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Urspr&#252;ngliche Mail -----
</span><br>
<span class="quotelev1">&gt; Von: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; An: &quot;General user list for the MPI Testing Tool&quot; &lt;mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Gesendet: Freitag, 20. September 2013 15:40:30
</span><br>
<span class="quotelev1">&gt; Betreff: Re: [MTT users] ssh tunnel and wget
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I always do it within MTT - here is the relevant block in the MTT .ini file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # MPI get phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI get: ompi-nightly-trunk]
</span><br>
<span class="quotelev1">&gt; mpi_details = Open MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = OMPI_Snapshot
</span><br>
<span class="quotelev1">&gt; ompi_snapshot_url = <a href="http://www.open-mpi.org/nightly/trunk">http://www.open-mpi.org/nightly/trunk</a>
</span><br>
<span class="quotelev1">&gt; ompi_snapshot_version_file = /home/common/mtt-versions/trunk&amp;getenv(&quot;MTT_VERSION_FILE_SUFFIX&quot;).txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 20, 2013, at 1:56 AM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have to go through ssh tunnels to fetch Open MPI snapshots/svn and report results.
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately there is a problem with wget, as the Hostname requesting does not fit.
</span><br>
<span class="quotelev2">&gt;&gt; I can solve this by using a wget wrapper including the --header=&quot;Host: www.open-mpi.org&quot; option
</span><br>
<span class="quotelev2">&gt;&gt; which is far from optimal, as this does only work for open-mpi downloads then...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My question now: Is there a better/more elegant way to do this, maybe in MTT itself?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Christoph
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0777.php">Jeff Squyres (jsquyres): "Re: [MTT users] mtt-relay requirements"</a>
<li><strong>Previous message:</strong> <a href="0775.php">Wen Hao Wang: "[MTT users] AUTO: Wen Hao Wang is out of the office (returning 2013/10/14)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/09/0772.php">Christoph Niethammer: "Re: [MTT users] ssh tunnel and wget"</a>
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
