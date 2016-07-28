<?
$subject_val = "Re: [OMPI users] Intercommunicators Collective Communciation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  9 20:34:03 2014" -->
<!-- isoreceived="20140510003403" -->
<!-- sent="Fri, 9 May 2014 19:34:02 -0500" -->
<!-- isosent="20140510003402" -->
<!-- name="Spenser Gilliland" -->
<!-- email="spenser_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intercommunicators Collective Communciation" -->
<!-- id="CAEBucnBfNQo3b638NwXwPirLy=2KBJei2hxWi8iO2HZVDDO3ZA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8402474A-38AC-4AE7-A4B2-15B209DAD6E2_at_cisco.com" -->
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
<strong>From:</strong> Spenser Gilliland (<em>spenser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-09 20:34:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24340.php">Ralph Castain: "Re: [OMPI users] Issue running mpi program"</a>
<li><strong>Previous message:</strong> <a href="24338.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<li><strong>In reply to:</strong> <a href="24338.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24342.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<li><strong>Reply:</strong> <a href="24342.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the quick response.  I'm having alot of fun learning MPI and
<br>
this mailing list has been invaluable.
<br>
<p>So,  If I do a scatter on an inter communicator will this use all left
<br>
process to scatter on all right processes?
<br>
<p>Where the left processes define MPI_ROOT and the right processes define
<br>
rank.
<br>
<p>Thanks,
<br>
Spenser
<br>
On May 9, 2014 7:22 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On May 9, 2014, at 7:56 PM, Spenser Gilliland &lt;spenser_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm having some trouble understanding Intercommunicators with
</span><br>
<span class="quotelev2">&gt; &gt; Collective Communication.  Is there a collective routine to express a
</span><br>
<span class="quotelev2">&gt; &gt; transfer from all left process to all right processes? or vice versa?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The intercomm collectives are all basically defined as data movement from
</span><br>
<span class="quotelev1">&gt; one group to the other (*and* vice versa), with the obvious exception of
</span><br>
<span class="quotelev1">&gt; Barrier, which has no data movement -- just synchronization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The key to understand is (aside from barrier):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - collectives with intracomms are data movement in the *same* group
</span><br>
<span class="quotelev1">&gt; - collectives with intercomms are data movement to the *other* group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24339/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24340.php">Ralph Castain: "Re: [OMPI users] Issue running mpi program"</a>
<li><strong>Previous message:</strong> <a href="24338.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<li><strong>In reply to:</strong> <a href="24338.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24342.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<li><strong>Reply:</strong> <a href="24342.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
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
