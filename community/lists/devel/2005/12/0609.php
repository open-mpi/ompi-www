<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  9 15:06:43 2005" -->
<!-- isoreceived="20051209200643" -->
<!-- sent="Fri, 9 Dec 2005 21:06:39 +0100 (CET)" -->
<!-- isosent="20051209200639" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re:  Linux processor affinity" -->
<!-- id="Pine.LNX.4.63.0512092059030.3612_at_dingo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2C8A6E46-3211-4F81-83DA-30C37B67A950_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-12-09 15:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0610.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0608.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0605.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0610.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0610.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 8 Dec 2005, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; This is friggen' amazing.
</span><br>
<p>Let me disagree with you here... and not because I proposed a 
<br>
different solution. ;-)
<br>
<p><span class="quotelev2">&gt;&gt;      rc = sched_setaffinity(0, sizeof(mask), mask);
</span><br>
<p>This changes whatever affinity might have been set before this check, 
<br>
for example by a (smart, don't know if such exists now) batch system. 
<br>
I haven't checked if it's possible, but I think that a similar 
<br>
solution based on sched_getaffinity would be much better, as this 
<br>
would not disturb the current settings.
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
<li><strong>Next message:</strong> <a href="0610.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0608.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0605.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0610.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0610.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
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
