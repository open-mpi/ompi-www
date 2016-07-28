<?
$subject_val = "Re: [MTT users] mtt-relay requirements";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  2 10:29:13 2013" -->
<!-- isoreceived="20131002142913" -->
<!-- sent="Wed, 2 Oct 2013 14:29:12 +0000" -->
<!-- isosent="20131002142912" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] mtt-relay requirements" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F916327_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1142653011.112.1380268442244.JavaMail.root_at_zimbra" -->
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
<strong>Subject:</strong> Re: [MTT users] mtt-relay requirements<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-02 10:29:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0778.php">Jeff Squyres (jsquyres): "Re: [MTT users] Not working &amp;env_max_procs() function"</a>
<li><strong>Previous message:</strong> <a href="0776.php">Jeff Squyres (jsquyres): "Re: [MTT users] ssh tunnel and wget"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/09/0773.php">Christoph Niethammer: "[MTT users] mtt-relay requirements"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you figure this problem out?
<br>
<p>On Sep 27, 2013, at 3:54 AM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was setting up an init script for mtt-relay on a debian system following the /etc/init.d/skeleton template.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The start dependencies are as follows:
</span><br>
<span class="quotelev1">&gt; # Required-Start:    $syslog hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The script options are:
</span><br>
<span class="quotelev1">&gt; DAEMON=$MTT_HOME/client/$NAME
</span><br>
<span class="quotelev1">&gt; DAEMON_ARGS=&quot;--daemon -d&quot;
</span><br>
<span class="quotelev1">&gt; PIDFILE=/var/run/$NAME.pid
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately mtt-relay exits with error code 99 within this script during boot time.
</span><br>
<span class="quotelev1">&gt; If I call the init script manually it works without any problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What does mtt-relay require what is not available during boot time?!
</span><br>
<span class="quotelev1">&gt; Its position in the boot order is right behind sshd.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any hints.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
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
<li><strong>Next message:</strong> <a href="0778.php">Jeff Squyres (jsquyres): "Re: [MTT users] Not working &amp;env_max_procs() function"</a>
<li><strong>Previous message:</strong> <a href="0776.php">Jeff Squyres (jsquyres): "Re: [MTT users] ssh tunnel and wget"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/09/0773.php">Christoph Niethammer: "[MTT users] mtt-relay requirements"</a>
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
