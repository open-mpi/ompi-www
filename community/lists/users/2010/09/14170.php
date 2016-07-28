<?
$subject_val = "Re: [OMPI users] spin-wait backoff";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  3 08:05:51 2010" -->
<!-- isoreceived="20100903120551" -->
<!-- sent="Fri, 3 Sep 2010 08:05:45 -0400" -->
<!-- isosent="20100903120545" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] spin-wait backoff" -->
<!-- id="C9B2FAA3-F5DA-4B49-89CE-6FB1AF0C7256_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D77AC4F3-C693-4B5D-8033-98F752511116_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] spin-wait backoff<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-03 08:05:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14171.php">Patrik Jonsson: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>Previous message:</strong> <a href="14169.php">Peter Kjellstrom: "Re: [OMPI users] Problems with mpirun"</a>
<li><strong>In reply to:</strong> <a href="14167.php">Ralph Castain: "Re: [OMPI users] spin-wait backoff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14176.php">David Singleton: "Re: [OMPI users] spin-wait backoff"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 3, 2010, at 12:16 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Backing off the polling rate requires more application-specific logic like that offered below, so it is a little difficult for us to implement at the MPI library level. Not saying we eventually won't - just not sure anyone quite knows how to do so in a generalized form.
</span><br>
<p>FWIW, we've *talked* about this kind of stuff among the developers -- it's at least somewhat similar to the &quot;backoff to blocking communications instead of polling communications&quot; issues.  That work in particular has been discussed for a long time but never implemented.
<br>
<p>Are your jobs hanging because of deadlock (i.e., application error), or infrastructure error?  If they're hanging because of deadlock, there are some PMPI-based tools that might be able to help.
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
<li><strong>Next message:</strong> <a href="14171.php">Patrik Jonsson: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>Previous message:</strong> <a href="14169.php">Peter Kjellstrom: "Re: [OMPI users] Problems with mpirun"</a>
<li><strong>In reply to:</strong> <a href="14167.php">Ralph Castain: "Re: [OMPI users] spin-wait backoff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14176.php">David Singleton: "Re: [OMPI users] spin-wait backoff"</a>
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
