<?
$subject_val = "Re: [MTT users] ssh tunnel and wget";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 25 07:54:02 2013" -->
<!-- isoreceived="20130925115402" -->
<!-- sent="Wed, 25 Sep 2013 13:53:56 +0200 (CEST)" -->
<!-- isosent="20130925115356" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [MTT users] ssh tunnel and wget" -->
<!-- id="1742883159.361.1380110036492.JavaMail.root_at_zimbra" -->
<!-- charset="utf-8" -->
<!-- inreplyto="BE3F6242-E678-4BFA-98F4-1A1DF9D32B26_at_open-mpi.org" -->
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
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-25 07:53:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0773.php">Christoph Niethammer: "[MTT users] mtt-relay requirements"</a>
<li><strong>Previous message:</strong> <a href="0771.php">Ralph Castain: "Re: [MTT users] ssh tunnel and wget"</a>
<li><strong>In reply to:</strong> <a href="0771.php">Ralph Castain: "Re: [MTT users] ssh tunnel and wget"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/10/0776.php">Jeff Squyres (jsquyres): "Re: [MTT users] ssh tunnel and wget"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/10/0776.php">Jeff Squyres (jsquyres): "Re: [MTT users] ssh tunnel and wget"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Thanks for the replay.
<br>
My configure section looks nearly the same.
<br>
<p>[MPI get: ompi-nightly-trunk]
<br>
module = OMPI_Snapshot
<br>
mpi_details = Open MPI
<br>
ompi_snapshot_url = <a href="http://localhost:PORT/nightly/trunk">http://localhost:PORT/nightly/trunk</a>
<br>
<p>Only www.open-mpi.org is replaced by localhost:PORT which corresponds to a ssh tunnel to outer world open-mpi.org. (PORT is a number in the config)
<br>
<p>As of HTTP/1.0 wget sends a Host header entry - in this case localhost - which is denied by the open-mpi website.
<br>
I would like to overwrite this in the mtt settings instead of using a wget wrapper if possible.
<br>
<p>Regards
<br>
Christoph
<br>
<p>----- Urspr&#195;&#188;ngliche Mail -----
<br>
Von: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
<br>
An: &quot;General user list for the MPI Testing Tool&quot; &lt;mtt-users_at_[hidden]&gt;
<br>
Gesendet: Freitag, 20. September 2013 15:40:30
<br>
Betreff: Re: [MTT users] ssh tunnel and wget
<br>
<p>I always do it within MTT - here is the relevant block in the MTT .ini file:
<br>
<p>#======================================================================
<br>
# MPI get phase
<br>
#======================================================================
<br>
<p>[MPI get: ompi-nightly-trunk]
<br>
mpi_details = Open MPI
<br>
<p>module = OMPI_Snapshot
<br>
ompi_snapshot_url = <a href="http://www.open-mpi.org/nightly/trunk">http://www.open-mpi.org/nightly/trunk</a>
<br>
ompi_snapshot_version_file = /home/common/mtt-versions/trunk&amp;getenv(&quot;MTT_VERSION_FILE_SUFFIX&quot;).txt
<br>
<p><p>On Sep 20, 2013, at 1:56 AM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have to go through ssh tunnels to fetch Open MPI snapshots/svn and report results.
</span><br>
<span class="quotelev1">&gt; Unfortunately there is a problem with wget, as the Hostname requesting does not fit.
</span><br>
<span class="quotelev1">&gt; I can solve this by using a wget wrapper including the --header=&quot;Host: www.open-mpi.org&quot; option
</span><br>
<span class="quotelev1">&gt; which is far from optimal, as this does only work for open-mpi downloads then...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question now: Is there a better/more elegant way to do this, maybe in MTT itself?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Christoph
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p>_______________________________________________
<br>
mtt-users mailing list
<br>
mtt-users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0773.php">Christoph Niethammer: "[MTT users] mtt-relay requirements"</a>
<li><strong>Previous message:</strong> <a href="0771.php">Ralph Castain: "Re: [MTT users] ssh tunnel and wget"</a>
<li><strong>In reply to:</strong> <a href="0771.php">Ralph Castain: "Re: [MTT users] ssh tunnel and wget"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/10/0776.php">Jeff Squyres (jsquyres): "Re: [MTT users] ssh tunnel and wget"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/10/0776.php">Jeff Squyres (jsquyres): "Re: [MTT users] ssh tunnel and wget"</a>
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
