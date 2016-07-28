<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  7 11:18:07 2005" -->
<!-- isoreceived="20051207161807" -->
<!-- sent="Wed, 7 Dec 2005 17:17:55 +0100 (CET)" -->
<!-- isosent="20051207161755" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] error creating high priority cq for mthca0" -->
<!-- id="Pine.LNX.4.63.0512071700510.32350_at_dingo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A7A2E3AF-7C00-47FF-B2D7-0339251C2CEB_at_open-mpi.org" -->
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
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-07 11:17:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0431.php">Bogdan Costescu: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Previous message:</strong> <a href="0429.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>In reply to:</strong> <a href="0427.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0431.php">Bogdan Costescu: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Reply:</strong> <a href="0431.php">Bogdan Costescu: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 6 Dec 2005, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; With Tim's response to this -- I'm curious (so that we get correct 
</span><br>
<span class="quotelev1">&gt; information on the FAQ) -- is the /etc/security/limit.conf method a 
</span><br>
<span class="quotelev1">&gt; system-wide way of setting these values, and &quot;ulimit -l&quot; a per-user 
</span><br>
<span class="quotelev1">&gt; way of setting it?
</span><br>
<p>You can see the official docs, including examples, at:
<br>
<p><a href="http://www.kernel.org/pub/linux/libs/pam/Linux-PAM-html/pam-6.html#ss6.12">http://www.kernel.org/pub/linux/libs/pam/Linux-PAM-html/pam-6.html#ss6.12</a>
<br>
<p>You can look at the limits.conf way as a way to set a default (for 
<br>
soft) and a maximum (for hard) per session - these values are usually 
<br>
static, but if the admin (or some program with enough priviledges) 
<br>
modifies them, only the shells started afterwards will get the new 
<br>
values, the running shells keep their current values.
<br>
<p>So it's similar to the system-wide shell environment settings (f.e. 
<br>
/etc/csh.cshrc) which only take effect in the shells started after the 
<br>
modifications were made. It's also disimilar to writing to /proc/sys/ 
<br>
which usually affects all running processes.
<br>
<p><span class="quotelev1">&gt; That doesn't sound quite right to me -- I'm assuming that a user
</span><br>
<span class="quotelev1">&gt; can't &quot;ulimit -l X&quot; where X is larger than the numbers in /etc/
</span><br>
<span class="quotelev1">&gt; security/limits.conf -- can someone confirm if this is Right?
</span><br>
<p>... can't &quot;ulimit -l X&quot; where X is larger than the &quot;hard&quot; value from 
<br>
limits.conf.
<br>
<p><pre>
--
Bogdan Costescu
IWR - Interdisziplinaeres Zentrum fuer Wissenschaftliches Rechnen
Universitaet Heidelberg, INF 368, D-69120 Heidelberg, GERMANY
Telephone: +49 6221 54 8869, Telefax: +49 6221 54 8868
E-mail: Bogdan.Costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0431.php">Bogdan Costescu: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Previous message:</strong> <a href="0429.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>In reply to:</strong> <a href="0427.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0431.php">Bogdan Costescu: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Reply:</strong> <a href="0431.php">Bogdan Costescu: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
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
