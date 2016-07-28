<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  6 13:12:11 2013" -->
<!-- isoreceived="20130706171211" -->
<!-- sent="Sat, 6 Jul 2013 10:12:04 -0700" -->
<!-- isosent="20130706171204" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="DD77EFDA-B11E-4A5D-8197-2D5AFE28BB1F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJGE3zXTuh9=9tLFnPDJBUUbGLUmYZpzcEzbJGN1mL+Z_=GThQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-06 13:12:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22265.php">Patrick Brückner: "[OMPI users] Trouble with MPI_Recv not filling buffer"</a>
<li><strong>Previous message:</strong> <a href="22263.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>In reply to:</strong> <a href="22243.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22160.php">Lorenzo Don&#224;: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 3, 2013, at 1:00 PM, Riccardo Murri &lt;riccardo.murri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff, Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; first of all: thanks for your work on this!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3 July 2013 21:09, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 1. The root cause of the issue is that you are assigning a
</span><br>
<span class="quotelev2">&gt;&gt; non-existent IP address to a name.  I.e., &lt;foo&gt; maps to 127.0.1.1,
</span><br>
<span class="quotelev2">&gt;&gt; but that IP address does not exist anywhere.  Hence, OMPI will never
</span><br>
<span class="quotelev2">&gt;&gt; conclude that that &lt;foo&gt; is &quot;local&quot;.  If you had assigned &lt;foo&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; the 127.0.0.1 address, things should have worked fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, I see.  Would that have worked also if I had added the 127.0.1.1
</span><br>
<span class="quotelev1">&gt; address to the &quot;lo&quot; interface (in addition to 127.0.0.1)?
</span><br>
<p>Probably, but I can't say for sure.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just curious: why are you doing this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's commonplace in Ubuntu/Debian installations; see, e.g.,
</span><br>
<span class="quotelev1">&gt; <a href="http://serverfault.com/questions/363095/what-does-127-0-1-1-represent-in-etc-hosts">http://serverfault.com/questions/363095/what-does-127-0-1-1-represent-in-etc-hosts</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In our case, it was rolled out as a fix for some cron job running on
</span><br>
<span class="quotelev1">&gt; Apache servers (apparently Debian's Apache looks up 127.0.1.1 and uses
</span><br>
<span class="quotelev1">&gt; that as the ServerName, unless a server name is not explicitly
</span><br>
<span class="quotelev1">&gt; configured), which was later extended to all hosts because &quot;what harm
</span><br>
<span class="quotelev1">&gt; can it do?&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Needless to say, we have rolled back the change.)
</span><br>
<p>Weird - never heard of that before!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. That being said, OMPI is not currently looking at all the
</span><br>
<span class="quotelev2">&gt;&gt; responses from gethostbyname() -- we're only looking at the first
</span><br>
<span class="quotelev2">&gt;&gt; one.  In the spirit of how clients are supposed to behave when
</span><br>
<span class="quotelev2">&gt;&gt; multiple IP addresses are returned from a single name lookup, OMPI
</span><br>
<span class="quotelev2">&gt;&gt; should examine all of those addresses and see if it finds one that
</span><br>
<span class="quotelev2">&gt;&gt; it &quot;likes&quot;, and then use that.  So we should extend OMPI to examine
</span><br>
<span class="quotelev2">&gt;&gt; all the IP addresses from gethostbyname().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just for curiosity: would it have worked, had I compiled OMPI with
</span><br>
<span class="quotelev1">&gt; IPv6 support?  (As far as I understand IPv6, an application is
</span><br>
<span class="quotelev1">&gt; required to examine all the addresses returned for a host name, and
</span><br>
<span class="quotelev1">&gt; not just pick the first one.)
</span><br>
<p>Actually, yes - for some reason, the code path when IPv6 support is enabled had already been extended to look at all addresses. Not sure why, but that change was never carried over to the IPv6-disabled code path. I've done so now, so this won't be a problem in the future.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph is going to work on this, but it'll likely take him a little
</span><br>
<span class="quotelev2">&gt;&gt; time to get it done.  We'll get it into the trunk and probably ask
</span><br>
<span class="quotelev2">&gt;&gt; you to verify that it works for you.  And if so, we'll back-port to
</span><br>
<span class="quotelev2">&gt;&gt; the v1.6 and v1.7 series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm glad to help and verify, but I guess we do not need the backport
</span><br>
<span class="quotelev1">&gt; or an urgent fix.  The easy workaround for us was to remove the
</span><br>
<span class="quotelev1">&gt; 127.0.1.1 line from the compute nodes (we keep it only on Apache
</span><br>
<span class="quotelev1">&gt; servers where it originated).
</span><br>
<p>Glad you found an easy solution!
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Riccardo
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22265.php">Patrick Brückner: "[OMPI users] Trouble with MPI_Recv not filling buffer"</a>
<li><strong>Previous message:</strong> <a href="22263.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>In reply to:</strong> <a href="22243.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22160.php">Lorenzo Don&#224;: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
