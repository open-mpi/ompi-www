<?
$subject_val = "[MTT users] mtt-relay requirements";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 27 03:54:06 2013" -->
<!-- isoreceived="20130927075406" -->
<!-- sent="Fri, 27 Sep 2013 09:54:02 +0200 (CEST)" -->
<!-- isosent="20130927075402" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="[MTT users] mtt-relay requirements" -->
<!-- id="1142653011.112.1380268442244.JavaMail.root_at_zimbra" -->
<!-- charset="utf-8" -->
<!-- inreplyto="972872181.56.1380265277192.JavaMail.root_at_zimbra" -->
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
<strong>Subject:</strong> [MTT users] mtt-relay requirements<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-27 03:54:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/10/0774.php">Christoph Niethammer: "[MTT users] Not working &amp;env_max_procs() function"</a>
<li><strong>Previous message:</strong> <a href="0772.php">Christoph Niethammer: "Re: [MTT users] ssh tunnel and wget"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/10/0777.php">Jeff Squyres (jsquyres): "Re: [MTT users] mtt-relay requirements"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/10/0777.php">Jeff Squyres (jsquyres): "Re: [MTT users] mtt-relay requirements"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I was setting up an init script for mtt-relay on a debian system following the /etc/init.d/skeleton template.
<br>
<p>The start dependencies are as follows:
<br>
# Required-Start:    $syslog hostname
<br>
<p>The script options are:
<br>
DAEMON=$MTT_HOME/client/$NAME
<br>
DAEMON_ARGS=&quot;--daemon -d&quot;
<br>
PIDFILE=/var/run/$NAME.pid
<br>
<p>Unfortunately mtt-relay exits with error code 99 within this script during boot time.
<br>
If I call the init script manually it works without any problems.
<br>
<p>What does mtt-relay require what is not available during boot time?!
<br>
Its position in the boot order is right behind sshd.
<br>
<p>Thanks in advance for any hints.
<br>
<p>Regards
<br>
Christoph Niethammer
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/10/0774.php">Christoph Niethammer: "[MTT users] Not working &amp;env_max_procs() function"</a>
<li><strong>Previous message:</strong> <a href="0772.php">Christoph Niethammer: "Re: [MTT users] ssh tunnel and wget"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/10/0777.php">Jeff Squyres (jsquyres): "Re: [MTT users] mtt-relay requirements"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/10/0777.php">Jeff Squyres (jsquyres): "Re: [MTT users] mtt-relay requirements"</a>
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
