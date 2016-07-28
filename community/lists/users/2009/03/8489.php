<?
$subject_val = "Re: [OMPI users] mpirun hangs when launching job on remote node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 21:17:35 2009" -->
<!-- isoreceived="20090318011735" -->
<!-- sent="Tue, 17 Mar 2009 21:17:31 -0400 (EDT)" -->
<!-- isosent="20090318011731" -->
<!-- name="Ron Babich" -->
<!-- email="rbabich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs when launching job on remote node" -->
<!-- id="Pine.LNX.4.64.0903172050300.18707_at_buphy.bu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49C04434.3010202_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hangs when launching job on remote node<br>
<strong>From:</strong> Ron Babich (<em>rbabich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 21:17:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8490.php">-andria-: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
<li><strong>Previous message:</strong> <a href="8488.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8487.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8492.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Reply:</strong> <a href="8492.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ray,
<br>
<p>Thanks for your response.  I had noticed your thread, which is why I'm 
<br>
embarrassed (but happy) to say that it looks like my problem was the same 
<br>
as yours.  I mentioned in my original email that there was no firewall 
<br>
running, which it turns out was a lie.  I think that when I checked 
<br>
before, I must have forgotten &quot;sudo.&quot;  Instead of &quot;permission denied&quot; or 
<br>
the like, I got this misleading response:
<br>
<p>node02:~ % /etc/init.d/iptables status
<br>
Firewall is not configured.
<br>
<p>When I checked again just now (with sudo this time), it turned out that 
<br>
the firewall was in fact configured and running.  Turning it off has 
<br>
solved all my problems.
<br>
<p>Thanks again,
<br>
Ron
<br>
<p><p>On Wed, 18 Mar 2009, Raymond Wan wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ron,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ron Babich wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  Hi Everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I'm having a very basic problem getting an MPI job to run on multiple
</span><br>
<span class="quotelev2">&gt;&gt;  nodes. My setup consists of two identically configured nodes, called
</span><br>
<span class="quotelev2">&gt;&gt;  node01 and node02, connected via ethernet and infiniband.  They are
</span><br>
<span class="quotelev2">&gt;&gt;  running CentOS 5.2 and the bundled OMPI, version 1.2.5.  I've attached the
</span><br>
<span class="quotelev2">&gt;&gt;  output of &quot;ompi_info --all&quot;, which is the same for both nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far, this sounds awfully like the problem I had a few days ago.  Perhaps 
</span><br>
<span class="quotelev1">&gt; you can check the firewall settings and if it is enabled (like it was for 
</span><br>
<span class="quotelev1">&gt; me), then try disabling it.  If that is the case, then you might want to look 
</span><br>
<span class="quotelev1">&gt; into setting it properly since the solution I've adopted is to &quot;simply&quot; keep 
</span><br>
<span class="quotelev1">&gt; it disabled...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ray
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8490.php">-andria-: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
<li><strong>Previous message:</strong> <a href="8488.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8487.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8492.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Reply:</strong> <a href="8492.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
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
