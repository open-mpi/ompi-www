<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 16 12:28:19 2007" -->
<!-- isoreceived="20071016162819" -->
<!-- sent="Tue, 16 Oct 2007 12:28:11 -0400" -->
<!-- isosent="20071016162811" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="95B65875-A79B-4AF9-B36F-50954C60090E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3DDE62E5-567A-4750-A538-42143C820051_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-16 12:28:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4224.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4222.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4222.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4224.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 16, 2007, at 11:56 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 16, 2007, at 11:20 AM, Brian Granger wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Wow, that is quite a study of the different options.  I will spend
</span><br>
<span class="quotelev2">&gt;&gt; some time looking over things to better understand the (complex)
</span><br>
<span class="quotelev2">&gt;&gt; situation.  I will also talk with Lisandro Dalcin about what he  
</span><br>
<span class="quotelev2">&gt;&gt; thinks
</span><br>
<span class="quotelev2">&gt;&gt; the best approach is for mpi4py.  One question though.  You said that
</span><br>
<span class="quotelev2">&gt;&gt; nothing had changed in this respect from 1.2.3 to 1.2.4, but 1.2.3
</span><br>
<span class="quotelev2">&gt;&gt; doesn't show the problem.  Does this make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wondered about that as well.  Is there any chance that you simply
</span><br>
<span class="quotelev1">&gt; weren't using the one-sided MPI functionality between your different
</span><br>
<span class="quotelev1">&gt; versions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or are you using the same version of your software with v1.2.3 and
</span><br>
<span class="quotelev1">&gt; v1.2.4 of OMPI?  If so, I'm kinda at a loss.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: our one-sided support loads lazily; it doesn't load during
</span><br>
<span class="quotelev1">&gt; MPI_INIT like most of the rest of the plugins that we have.  Since
</span><br>
<span class="quotelev1">&gt; not many MPI applications use it, we decided to make it only load the
</span><br>
<span class="quotelev1">&gt; osc plugins the first time an MPI window is created.
</span><br>
<p>Actually, I never wrote the lazy open code, so we load the components  
<br>
during MPI_INIT.  They aren't initialized until first use, but they  
<br>
are loaded.  Just to verify, I did a build of 1.2.3 and of 1.2.4 and  
<br>
there's no difference in the list of undefined symbols or library  
<br>
references between the pt2pt osc components in the two builds.
<br>
<p>Still at a loss for why the change between releases -- I would not  
<br>
have expected it to work with 1.2.3.
<br>
<p>Brian.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4224.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4222.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4222.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4224.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
