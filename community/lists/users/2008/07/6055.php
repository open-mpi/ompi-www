<?
$subject_val = "Re: [OMPI users] Outputting rank and size for all outputs.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 10:29:10 2008" -->
<!-- isoreceived="20080711142910" -->
<!-- sent="Fri, 11 Jul 2008 15:29:05 +0100" -->
<!-- isosent="20080711142905" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Outputting rank and size for all outputs." -->
<!-- id="1215786545.6514.27.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
<!-- inreplyto="C49CC37A.E411%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Outputting rank and size for all outputs.<br>
<strong>From:</strong> Ashley Pittman (<em>apittman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 10:29:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6056.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Previous message:</strong> <a href="6054.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>In reply to:</strong> <a href="6053.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2008-07-11 at 07:59 -0600, Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; Not until next week's meeting, but I would guess we would simply prepend the
</span><br>
<span class="quotelev1">&gt; rank. The issue will be how often to tag the output since we write it in
</span><br>
<span class="quotelev1">&gt; fragments to avoid blocking - so do we tag the fragment, look for newlines
</span><br>
<span class="quotelev1">&gt; and tag each line, etc.
</span><br>
<p>I don't know if you are familiar with it but pdsh is a very useful
<br>
parallel shell that uses a &quot;$HOSTNAME: &quot; syntax, going along with this
<br>
there is a dshbak command which can take output in that form and present
<br>
it to the user in a number of different ways.  It would be a nice bonus
<br>
if openmpi was to also able to benefit from this command.
<br>
<p>There is a dshbak manpage on-line but unfortunately no examples.
<br>
<p>Feel free to contact me on or off-list if I'm you want a example or
<br>
further information.
<br>
<p>Ashley,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6056.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Previous message:</strong> <a href="6054.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>In reply to:</strong> <a href="6053.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
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
