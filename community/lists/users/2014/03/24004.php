<?
$subject_val = "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 18:45:42 2014" -->
<!-- isoreceived="20140327224542" -->
<!-- sent="Thu, 27 Mar 2014 22:45:41 +0000" -->
<!-- isosent="20140327224541" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-ROMIO-OrangeFS" -->
<!-- id="87ioqz6z1m.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53319306.5020809_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-ROMIO-OrangeFS<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 18:45:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24005.php">Dave Love: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="24003.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="23966.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24011.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="24011.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Edgar Gabriel &lt;gabriel_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; not sure honestly. Basically, as suggested in this email chain earlier,
</span><br>
<span class="quotelev1">&gt; I had to disable the PVFS2_IreadContig and PVFS2_IwriteContig routines
</span><br>
<span class="quotelev1">&gt; in ad_pvfs2.c to make the tests pass. Otherwise the tests worked but
</span><br>
<span class="quotelev1">&gt; produced wrong data. I did not have however the time to figure what
</span><br>
<span class="quotelev1">&gt; actually goes wrong underneath the hood.
</span><br>
<p>[I can't get into trac to comment on the issue (hangs on login), so I'm
<br>
following up here.]
<br>
<p>In case it's not clear, the changes for 1.6 and 1.7 are different, and
<br>
probably shouldn't be.  The patch I took from 1.7 looked similar to
<br>
what's in mpich, but hard-wired rather than autoconfiscated, whereas the
<br>
patch for 1.6 on the tracker sets the entries to NULL instead.
<br>
<p><span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/25/2014 9:21 AM, Rob Latham wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 03/25/2014 07:32 AM, Dave Love wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar Gabriel &lt;gabriel_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am still looking into the PVFS2 with ROMIO problem with the 1.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; series, where (as I mentioned yesterday) the problem I am having right
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; now is that the data is wrong. Not sure what causes it, but since I have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; teach this afternoon again, it might be friday until I can digg into
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Was there any progress with this?  Otherwise, what version of PVFS2 is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; known to work with OMPI 1.6?  Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Edgar, should I pick this up for MPICH, or was this fix specific to
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ==rob
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24005.php">Dave Love: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="24003.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="23966.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24011.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="24011.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
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
