<?
$subject_val = "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 10:43:44 2012" -->
<!-- isoreceived="20120425144344" -->
<!-- sent="Wed, 25 Apr 2012 10:43:37 -0400" -->
<!-- isosent="20120425144337" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines" -->
<!-- id="36EDC7B0-F067-44B6-B88D-58365C074901_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+vDB+NdrxHW_3g4F_3cpp3bZ-JtwwsVbEOg9kC_e6k8fKKutw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 10:43:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19122.php">Doug Reeder: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>Previous message:</strong> <a href="19120.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>In reply to:</strong> <a href="19120.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19134.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any chance you could upgrade to Open MPI 1.5.5?  It has a better version of the processor affinity stuff than the 1.4 series.
<br>
<p><p>On Apr 25, 2012, at 10:35 AM, Kyle Boe wrote:
<br>
<p><span class="quotelev1">&gt; I tried this and got the same result. Any other thing I might be missing...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Did you tell it --bind-to-core? If not, then the procs would be unbound to any particular core - so your code might well think they are &quot;sharing&quot; cores. _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="19122.php">Doug Reeder: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>Previous message:</strong> <a href="19120.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>In reply to:</strong> <a href="19120.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19134.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
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
