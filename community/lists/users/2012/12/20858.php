<?
$subject_val = "Re: [OMPI users] Lustre hints via environment variables/runtime	parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  3 09:36:49 2012" -->
<!-- isoreceived="20121203143649" -->
<!-- sent="Mon, 03 Dec 2012 09:36:44 -0500" -->
<!-- isosent="20121203143644" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Lustre hints via environment variables/runtime	parameters" -->
<!-- id="50BCB8FC.5090200_at_giref.ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF006698ED.9B9E6E74-ONC1257AC9.002DAD0F-C1257AC9.002E0F46_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Lustre hints via environment variables/runtime	parameters<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-03 09:36:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20859.php">Ilias Miroslav: "[OMPI users] 0xc000007b error exit on 64-bit Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20857.php">Silvio a Beccara: "[OMPI users] Possible memory leak in MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="20856.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] Lustre hints via environment variables/runtime	parameters"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/03/2012 03:23 AM, pascal.deveze_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; try with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; striping_unit 1048576
</span><br>
<span class="quotelev1">&gt; striping_factor 16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (stripe_size means striping_unit and stripe_count means striping_factor)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Shame on me! ;-)
<br>
<p>Thank you, it works perfectly now!...
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20859.php">Ilias Miroslav: "[OMPI users] 0xc000007b error exit on 64-bit Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20857.php">Silvio a Beccara: "[OMPI users] Possible memory leak in MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="20856.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] Lustre hints via environment variables/runtime	parameters"</a>
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
