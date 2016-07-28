<?
$subject_val = "Re: [OMPI users] cluster LiveCD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 16:09:36 2008" -->
<!-- isoreceived="20080807200936" -->
<!-- sent="Thu, 7 Aug 2008 13:09:31 -0700" -->
<!-- isosent="20080807200931" -->
<!-- name="Michael Jennings" -->
<!-- email="mej_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cluster LiveCD" -->
<!-- id="20080807200930.GD31790_at_lbl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ea86ce220808071203x52a0f944m2b7881e955985027_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] cluster LiveCD<br>
<strong>From:</strong> Michael Jennings (<em>mej_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-07 16:09:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6294.php">Adam C Powell IV: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>Previous message:</strong> <a href="6292.php">Ben Payne: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>In reply to:</strong> <a href="6291.php">Tim Mattox: "Re: [OMPI users] cluster LiveCD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6294.php">Adam C Powell IV: "Re: [OMPI users] cluster LiveCD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday, 07 August 2008, at 15:03:24 (-0400),
<br>
Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; I think a better approach than using NFS-root or LiveCDs is to use Perceus in
</span><br>
<span class="quotelev1">&gt; this situation, since it has been developed over many years to handle this
</span><br>
<span class="quotelev1">&gt; sort of thing (diskless/stateless beowulf clusters):
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.perceus.org/">http://www.perceus.org/</a>
</span><br>
<span class="quotelev1">&gt; It leverages PXE booting so all you need to do on a per-node basis is enable
</span><br>
<span class="quotelev1">&gt; PXE booting in the BIOS.  The primary limitation I see would be if your
</span><br>
<span class="quotelev1">&gt; windows machines are set up to use DHCP to get their IP addresses from
</span><br>
<span class="quotelev1">&gt; some server that is outside your control, since Perceus would need to take
</span><br>
<span class="quotelev1">&gt; over DHCP services to do its magic.
</span><br>
<p>At the risk of being slightly off-topic, Perceus actually has no
<br>
problem working with a separate DHCP server.  It has to be properly
<br>
configured to hand out the payload, of course, but it works fine.
<br>
<p>Michael
<br>
<p><pre>
-- 
Michael Jennings &lt;mej_at_[hidden]&gt;
Linux Systems and Cluster Admin
UNIX and Cluster Computing Group
Bldg 50B-3209E   W: 510-495-2687
MS 050C-3396     F: 510-486-8615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6294.php">Adam C Powell IV: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>Previous message:</strong> <a href="6292.php">Ben Payne: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>In reply to:</strong> <a href="6291.php">Tim Mattox: "Re: [OMPI users] cluster LiveCD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6294.php">Adam C Powell IV: "Re: [OMPI users] cluster LiveCD"</a>
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
