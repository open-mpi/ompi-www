<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May  5 11:36:48 2006" -->
<!-- isoreceived="20060505153648" -->
<!-- sent="Fri, 05 May 2006 17:38:51 +0200" -->
<!-- isosent="20060505153851" -->
<!-- name="Dries Kimpe" -->
<!-- email="Dries.Kimpe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pnetcdf &amp;amp; Open MPI" -->
<!-- id="445B718B.8000905_at_cs.kuleuven.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4457C1F8.4040400_at_cs.kuleuven.be" -->
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
<strong>From:</strong> Dries Kimpe (<em>Dries.Kimpe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-05 11:38:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1218.php">Dries Kimpe: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="1216.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Intercomm_merge broken"</a>
<li><strong>In reply to:</strong> <a href="1197.php">Dries Kimpe: "[OMPI users] pnetcdf &amp; Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1218.php">Dries Kimpe: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Reply:</strong> <a href="1218.php">Dries Kimpe: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dries Kimpe wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks as if the problem is not really due to Open MPI, but to the
</span><br>
<span class="quotelev1">&gt; included ROM-IO:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>In the end it turned out to be a combination of a newer Open MPI with an older ROMIO ...
<br>
<p>Quoting Rob Ross (on the pnetcdf mailing list):
<br>
<p>&lt;quote&gt;
<br>
The problem is that the OpenMPI group takes ROMIO as-is from an older release. Then they pass
<br>
MPI_COMBINER_SUBARRAY as-is to ROMIO, which in that release it does not understand. Then ROMIO blows up.
<br>
&lt;/quote&gt;
<br>
<p>I'll try recompiling Open MPI with a newer version of ROMIO.
<br>
<p>&nbsp;&nbsp;Greetings,
<br>
&nbsp;&nbsp;Dries
<br>
<p><p>Disclaimer: <a href="http://www.kuleuven.be/cwis/email_disclaimer.htm">http://www.kuleuven.be/cwis/email_disclaimer.htm</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1218.php">Dries Kimpe: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="1216.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Intercomm_merge broken"</a>
<li><strong>In reply to:</strong> <a href="1197.php">Dries Kimpe: "[OMPI users] pnetcdf &amp; Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1218.php">Dries Kimpe: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Reply:</strong> <a href="1218.php">Dries Kimpe: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
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
