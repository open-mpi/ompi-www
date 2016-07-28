<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  6 09:37:18 2006" -->
<!-- isoreceived="20060906133718" -->
<!-- sent="Wed, 6 Sep 2006 15:37:15 +0200" -->
<!-- isosent="20060906133715" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails	to run OpenIB BTL" -->
<!-- id="20060906133715.GG31632_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20060906132638.GA21058_at_minantech.com" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-06 09:37:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1032.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails to run OpenIB BTL"</a>
<li><strong>Previous message:</strong> <a href="1030.php">Gleb Natapov: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails to run	OpenIB BTL"</a>
<li><strong>In reply to:</strong> <a href="1030.php">Gleb Natapov: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails to run	OpenIB BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1033.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails to run OpenIB BTL"</a>
<li><strong>Reply:</strong> <a href="1033.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails to run OpenIB BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Gleb Natapov wrote on Wed, Sep 06, 2006 at 03:26:38PM CEST:
<br>
<span class="quotelev1">&gt; This error is usually happens when libibverbs is dlopened without
</span><br>
<span class="quotelev1">&gt; RTLD_GLOBAL flag.
</span><br>
<p>Ah, yep.  That is a difference between 2.1a and 1.5.x.  Not an
<br>
undisputed one.
<br>
<p>I don't know enough about the setup to suggest a workaround right away.
<br>
It may also be useful to bring this up on the Libtool list, as a case
<br>
in point against this change (or for some way to choose either).
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1032.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails to run OpenIB BTL"</a>
<li><strong>Previous message:</strong> <a href="1030.php">Gleb Natapov: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails to run	OpenIB BTL"</a>
<li><strong>In reply to:</strong> <a href="1030.php">Gleb Natapov: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails to run	OpenIB BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1033.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails to run OpenIB BTL"</a>
<li><strong>Reply:</strong> <a href="1033.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails to run OpenIB BTL"</a>
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
