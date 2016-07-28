<?
$subject_val = "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 22:21:41 2014" -->
<!-- isoreceived="20141028022141" -->
<!-- sent="Tue, 28 Oct 2014 11:21:33 +0900" -->
<!-- isosent="20141028022133" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris" -->
<!-- id="544EFDAD.6070009_at_iferc.org" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BA3FAA27-B3C1-421B-A040-48D949612F97_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 22:21:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25622.php">Ralph Castain: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25620.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
<li><strong>In reply to:</strong> <a href="25614.php">Ralph Castain: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25622.php">Ralph Castain: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Reply:</strong> <a href="25622.php">Ralph Castain: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>On 2014/10/28 0:46, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Actually, I propose to also remove that issue. Simple enough to use a
</span><br>
<span class="quotelev1">&gt; hash_table_32 to handle the jobids, and let that point to a
</span><br>
<span class="quotelev1">&gt; hash_table_32 of vpids. Since we rarely have more than one jobid
</span><br>
<span class="quotelev1">&gt; anyway, the memory overhead actually decreases with this model, and we
</span><br>
<span class="quotelev1">&gt; get rid of that annoying need to memcpy everything. 
</span><br>
sounds good to me.
<br>
from an implementation/performance point of view, should we put treat
<br>
the local jobid differently ?
<br>
(e.g. use a special variable for the hash_table_32 of the vpids of the
<br>
current jobid)
<br>
<span class="quotelev2">&gt;&gt; as far as i am concerned, i am fine with your proposed suggestion to
</span><br>
<span class="quotelev2">&gt;&gt; dump opal_identifier_t.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; about the patch, did you mean you have something ready i can apply to my
</span><br>
<span class="quotelev2">&gt;&gt; PR ?
</span><br>
<span class="quotelev2">&gt;&gt; or do you expect me to do the changes (i am ok to do it if needed)
</span><br>
<span class="quotelev1">&gt; Why don&#226;&#128;&#153;t I grab your branch, create a separate repo based on it (just to keep things clean), push it to my area and give you write access? We can then collaborate on the changes and create a PR from there. This way, you don&#226;&#128;&#153;t need to give me write access to your entire repo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
ok to work on an other &quot;somehow shared&quot; repo for that issue.
<br>
i am not convinced you should grab my branch since all the changes i
<br>
made are will be no more valid.
<br>
anyway, feel free to fork a repo from my branch or the master and i will
<br>
work from here.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25622.php">Ralph Castain: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25620.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
<li><strong>In reply to:</strong> <a href="25614.php">Ralph Castain: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25622.php">Ralph Castain: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Reply:</strong> <a href="25622.php">Ralph Castain: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
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
