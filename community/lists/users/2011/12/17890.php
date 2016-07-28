<?
$subject_val = "Re: [OMPI users] Qlogic &amp; openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  5 11:35:09 2011" -->
<!-- isoreceived="20111205163509" -->
<!-- sent="Mon, 5 Dec 2011 17:35:04 +0100" -->
<!-- isosent="20111205163504" -->
<!-- name="Bogdan Costescu" -->
<!-- email="bcostescu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Qlogic &amp;amp; openmpi" -->
<!-- id="CAH+WPduiR1tHfpdcN6SJte=JeOdakn5uziruXbWctcfUwTmcXw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1F06E7C0-D6DE-4A0D-BCAA-A57ECD4A6DCC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Qlogic &amp; openmpi<br>
<strong>From:</strong> Bogdan Costescu (<em>bcostescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-05 11:35:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17891.php">Fernanda Oliveira: "[OMPI users] MPI_Comm_spawn problem"</a>
<li><strong>Previous message:</strong> <a href="17889.php">Jeff Squyres: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<li><strong>In reply to:</strong> <a href="17887.php">Ralph Castain: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Dec 5, 2011 at 16:12, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Sounds like we should be setting this value when starting the process - yes?
</span><br>
<span class="quotelev1">&gt; If so, what is the &quot;good&quot; value, and how do we compute it?
</span><br>
<p>I've also been just looking at this for the past few days. What I came
<br>
up with is a small script psm_shctx which sets the envvar then execs
<br>
the MPI binary and is inserted between mpirun and the MPI binary:
<br>
<p>mpirun psm_shctx my_mpi_app
<br>
<p>Of course the same effect can be obtained if the orted would set the
<br>
envvar before starting the process. There is however a problem:
<br>
deciding how many contexts to use. For max. performance, one should
<br>
use a ratio of 1:1 between MPI ranks and contexts; the highest ratio
<br>
possible (but with lowest performance) is 4 MPI ranks per context;
<br>
another restriction is that each job should have at least 1 context.
<br>
<p>F.e. on AMD cluster nodes with 4 CPUs of 12 cores (so total of 48
<br>
cores) one gets 16 contexts; assigning all 16 contexts to 48 ranks
<br>
would mean a ratio of 1:3 but this can only apply if allocation of
<br>
cores is done in multiples of 4; with a less advantageous allocation
<br>
strategy more contexts are lost due to rounding up. At the extreme, if
<br>
there's only one rank per job, there can only be maximum 16 jobs -
<br>
using all 16 contexts and the rest of 32 cores have to remain idle or
<br>
be used for other jobs that don't require communication over
<br>
InfiniPath.
<br>
<p>There is a further issue though: MPI-2 dynamic creation of processes -
<br>
if it's not known how many ranks there will be, I guess one should use
<br>
the highest context sharing ratio (1:4) to be on the safe side.
<br>
<p>I've found a mention of this envvar being handled in the changelog for
<br>
MVAPICH2 1.4.1 - maybe that can serve as source of inspiration ? (but
<br>
I haven't looked at it...)
<br>
<p>Hope this helps,
<br>
Bogdan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17891.php">Fernanda Oliveira: "[OMPI users] MPI_Comm_spawn problem"</a>
<li><strong>Previous message:</strong> <a href="17889.php">Jeff Squyres: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<li><strong>In reply to:</strong> <a href="17887.php">Ralph Castain: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
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
