<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 14 12:43:56 2007" -->
<!-- isoreceived="20070214174356" -->
<!-- sent="Wed, 14 Feb 2007 18:43:21 +0100" -->
<!-- isosent="20070214174321" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] first time user - can run mpi job SMP but not over cluster" -->
<!-- id="20070214174321.GT5332_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="079C3A82-9DB8-4B5E-8702-BF94DC0ACE08_at_cisco.com" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-14 12:43:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2695.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2693.php">Alex Tumanov: "[OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<li><strong>In reply to:</strong> <a href="2692.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2695.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2695.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 14, 2007 at 12:32:46PM -0500, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt; &gt; ... hostname worked, but my application hung and gave a connect()
</span><br>
<span class="quotelev2">&gt; &gt; errno 110.
</span><br>
<p>adi_at_drcomp:~$ perl -e 'die$!=110'
<br>
Connection timed out at -e line 1.
<br>
<p><span class="quotelev1">&gt; Blah.  We definitely need to work on our error messages.
</span><br>
<p>I think we could use gai_strerror(3) for this. If we could agree to get
<br>
rid of SUSv2 and rely on RFC 3493 ;)
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2695.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2693.php">Alex Tumanov: "[OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<li><strong>In reply to:</strong> <a href="2692.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2695.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2695.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
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
