<?
$subject_val = "Re: [OMPI users] problems with establishing an intercommunicator";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  9 12:16:56 2011" -->
<!-- isoreceived="20110309171656" -->
<!-- sent="Wed, 09 Mar 2011 11:16:49 -0600" -->
<!-- isosent="20110309171649" -->
<!-- name="Waclaw Kusnierczyk" -->
<!-- email="waku_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with establishing an intercommunicator" -->
<!-- id="4D77B601.2050306_at_idi.ntnu.no" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D0ABC68C-F2B6-4C58-9FCB-5E0F2077F622_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with establishing an intercommunicator<br>
<strong>From:</strong> Waclaw Kusnierczyk (<em>waku_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-09 12:16:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15825.php">Randall Svancara: "[OMPI users] Error with an application, miscalculate message sizes"</a>
<li><strong>Previous message:</strong> <a href="15823.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>In reply to:</strong> <a href="15822.php">Jeff Squyres: "Re: [OMPI users] problems with establishing an intercommunicator"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/09/2011 09:44 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; The MPI_Comm_connect and MPI_Comm_accept calls are collective over their entire communicators.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if you pass MPI_COMM_WORLD into MPI_Comm_connect/accept, then *all* processes in those respective MPI_COMM_WORLD's need to call MPI_Comm_connect/accept.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For your 2nd question, when you get this to work, then all processes can send directly to each other -- Open MPI doesn't currently have any &quot;routing&quot; capabilities (e.g., sending through some other process to get to a 3rd process).
</span><br>
<p>Such a simple fix, I actually suspected this might be the case, should 
<br>
have checked before asking.
<br>
<p>Thanks for the advice!  Things seem to work now as desired.
<br>
<p>Best,
<br>
vQ
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15825.php">Randall Svancara: "[OMPI users] Error with an application, miscalculate message sizes"</a>
<li><strong>Previous message:</strong> <a href="15823.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>In reply to:</strong> <a href="15822.php">Jeff Squyres: "Re: [OMPI users] problems with establishing an intercommunicator"</a>
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
