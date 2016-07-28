<?
$subject_val = "[OMPI users] collective tuning (was: MPI_Bcast implementations in OpenMPI)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 10:14:33 2016" -->
<!-- isoreceived="20160503141433" -->
<!-- sent="Tue, 03 May 2016 15:14:30 +0100" -->
<!-- isosent="20160503141430" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="[OMPI users] collective tuning (was: MPI_Bcast implementations in OpenMPI)" -->
<!-- id="87mvo7i5yx.fsf_-__at_pc102091.liv.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4DCA743F-4C0F-45A4-9633-D22E7A363C05_at_icl.utk.edu" -->
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
<strong>Subject:</strong> [OMPI users] collective tuning (was: MPI_Bcast implementations in OpenMPI)<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-03 10:14:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29077.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="29075.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or	'--hosts' is used"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/04/29028.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev2">&gt;&gt; On Apr 25, 2016, at 11:33 , Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
</span><br>
<p><span class="quotelev3">&gt;&gt;&gt; I have recently reshuffled the tuned module to move all the algorithms
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the base and therefore make them available to other collective
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modules (the code is available in master and 1.10 and the future
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2.0). This move has the potential for allowing different decision
</span><br>
<span class="quotelev3">&gt;&gt;&gt; schemes to coexists, and be dynamically selected at runtime based on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; network properties, network topology, or even applications needs. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; continue to have hopes that network vendors will eventually get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interested in tailoring the collective selection to match their
</span><br>
<span class="quotelev3">&gt;&gt;&gt; network capabilities, and provide their users with a performance boost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by allowing for network specific algorithm selection.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That sounds useful, assuming the speed is generally dominated by the
</span><br>
<span class="quotelev2">&gt;&gt; basic fabric.  What's involved in making the relevant measurements and
</span><br>
<span class="quotelev2">&gt;&gt; plugging them in?  I did look at using OTPO(?) to check this sort of
</span><br>
<span class="quotelev2">&gt;&gt; thing once.  I couldn't make it work in the time I had, but Periscope
</span><br>
<span class="quotelev2">&gt;&gt; might be a good alternative now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is a multidimensional space optimization problem.
</span><br>
<p>Sure, but it's not clear to me that I understand it well enough to
<br>
optimize in principle.
<br>
<p><span class="quotelev1">&gt; The critical
</span><br>
<span class="quotelev1">&gt; point is identifying the switching points between different algorithms
</span><br>
<span class="quotelev1">&gt; based on their performance (taking in account, at least, physical
</span><br>
<span class="quotelev1">&gt; topology, number of processes and amount of data).
</span><br>
<p>Runs of IMB don't necessarily reveal clear switch points (which I could
<br>
believe means there's something wrong with them...).
<br>
<p><span class="quotelev1">&gt; The paper I sent on
</span><br>
<span class="quotelev1">&gt; one of my previous email discusses how we did the decision functions
</span><br>
<span class="quotelev1">&gt; on the current implementation. There are certainly better ways, but
</span><br>
<span class="quotelev1">&gt; the one we took at least did not involve any extra software, and was
</span><br>
<span class="quotelev1">&gt; done using simple scripts.
</span><br>
<p>I'd looked at it, but I couldn't see much about doing the measurements.
<br>
I thought there was a paper (from UTK?) on the OMPI web site which was
<br>
more about that, but I can't find it.
<br>
<p><span class="quotelev2">&gt;&gt; If it's fairly mechanical -- maybe even if not -- it seems like
</span><br>
<span class="quotelev2">&gt;&gt; something that should just be done regardless of vendors.  I'm sure
</span><br>
<span class="quotelev2">&gt;&gt; plenty of people could measure QDR fat tree, for a start (at least where
</span><br>
<span class="quotelev2">&gt;&gt; measurement isn&#226;&#128;&#153;t frowned upon).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Based on feedback from the user mailing list, several users did such
</span><br>
<span class="quotelev1">&gt; optimizations for their specific applications.
</span><br>
<p>That sort of thing is mainly what prompted me to ask.  (And I see plenty
<br>
of pretty useless benchmark-type &quot;studies&quot; that make more-or-less
<br>
absolute statements about MPIs' relative speed without even saying what
<br>
parameters were used.)  One thing I don't know is whether this is likely
<br>
to be significantly application specific, as I've seen suggested.
<br>
<p>Presumably there's m(va)pich work on this that might be useful if they
<br>
use the same algorithms, but I couldn't find a relevant write-up.
<br>
<p><span class="quotelev1">&gt; This makes the
</span><br>
<span class="quotelev1">&gt; optimization problem much simpler, as some of the parameters have
</span><br>
<span class="quotelev1">&gt; discrete values (message size). If we assume a symmetric network, and
</span><br>
<span class="quotelev1">&gt; have a small number of message sizes of interest, it is enough to run
</span><br>
<span class="quotelev1">&gt; few benchmarks (skampi, to the IMB test on the collective of
</span><br>
<span class="quotelev1">&gt; interest), and manually finding the switch point is a relatively
</span><br>
<span class="quotelev1">&gt; simple process.
</span><br>
<p>I've looked at alltoallv, which is important for typical chemistry codes
<br>
whose users have an insatiable appetite for cycles.  To start with it's
<br>
not clear how useful IMB is as it's not exercising the &quot;v&quot;.  Then for
<br>
low-ish process counts I've seen the relative speed of the two
<br>
algorithms all over the place.  However, 2 appears best overall, but
<br>
when I profiled an application, I got ~30% speedup by switching to 1.
<br>
To a hard-bitten experimentalist, this just suggests too little
<br>
understanding to make useful measurements, and that it would be useful
<br>
to have a good review of the issues -- presumably for current sorts of
<br>
interconnect.  Does one exist?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29077.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="29075.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or	'--hosts' is used"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/04/29028.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
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
