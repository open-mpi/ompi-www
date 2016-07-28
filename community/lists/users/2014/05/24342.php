<?
$subject_val = "Re: [OMPI users] Intercommunicators Collective Communciation";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 10 06:02:11 2014" -->
<!-- isoreceived="20140510100211" -->
<!-- sent="Sat, 10 May 2014 10:02:09 +0000" -->
<!-- isosent="20140510100209" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intercommunicators Collective Communciation" -->
<!-- id="DFC8DD8A-00DC-4F67-BA8F-A87164A3AD91_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEBucnBfNQo3b638NwXwPirLy=2KBJei2hxWi8iO2HZVDDO3ZA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Intercommunicators Collective Communciation<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-10 06:02:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24343.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>Previous message:</strong> <a href="24341.php">Wijnberg, Tom: "Re: [OMPI users] No output when adding host to hostfile"</a>
<li><strong>In reply to:</strong> <a href="24339.php">Spenser Gilliland: "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 9, 2014, at 8:34 PM, Spenser Gilliland &lt;spenser_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the quick response.  I'm having alot of fun learning MPI and this mailing list has been invaluable.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So,  If I do a scatter on an inter communicator will this use all left process to scatter on all right processes?
</span><br>
<p>Yes.  And vice versa (simultaneously).  See the official description of MPI_SCATTER, including its definition for what happens on intercommunicators in the MPI-3.0 document:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.mpi-forum.org/docs/mpi-3.0/mpi30-report.pdf">http://www.mpi-forum.org/docs/mpi-3.0/mpi30-report.pdf</a>
<br>
<p>The description for MPI_SCATTER starts on p159.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24343.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>Previous message:</strong> <a href="24341.php">Wijnberg, Tom: "Re: [OMPI users] No output when adding host to hostfile"</a>
<li><strong>In reply to:</strong> <a href="24339.php">Spenser Gilliland: "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
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
