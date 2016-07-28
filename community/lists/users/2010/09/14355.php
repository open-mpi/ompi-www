<?
$subject_val = "Re: [OMPI users] [openib] segfault when using openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 29 13:49:07 2010" -->
<!-- isoreceived="20100929174907" -->
<!-- sent="Wed, 29 Sep 2010 13:49:02 -0400" -->
<!-- isosent="20100929174902" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [openib] segfault when using openib btl" -->
<!-- id="3486875E-F1E6-40C6-B744-43088640AC5C_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CA371B2.9020207_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [openib] segfault when using openib btl<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-29 13:49:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14356.php">jody: "Re: [OMPI users] a question about [MPI]IO on systems without network filesystem"</a>
<li><strong>Previous message:</strong> <a href="14354.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14354.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14357.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="14357.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="14358.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry,
<br>
Ishai Rabinovitz is HPC team manager (I added him to CC)
<br>
<p>Eloi,
<br>
<p>Back to issue. I have seen very similar issue long time ago on some hardware platforms that support relaxed ordering memory operations. If I remember correct it was some IBM platform.
<br>
Do you know if relaxed memory ordering is enabled on your platform ? If it is enabled you have to disable eager rdma.
<br>
<p>Regards,
<br>
Pasha
<br>
<p>On Sep 29, 2010, at 1:04 PM, Terry Dontje wrote:
<br>
<p>Pasha, do you by any chance know who at Mellanox might be responsible for OMPI working?
<br>
<p>--td
<br>
<p>Eloi Gaudry wrote:
<br>
&nbsp;Hi Nysal, Terry,
<br>
Thanks for your input on this issue.
<br>
I'll follow your advice. Do you know any Mellanox developer I may discuss with, preferably someone who has spent some time inside the openib btl ?
<br>
<p>Regards,
<br>
Eloi
<br>
<p>On 29/09/2010 06:01, Nysal Jan wrote:
<br>
Hi Eloi,
<br>
We discussed this issue during the weekly developer meeting &amp; there were no further suggestions, apart from checking the driver and firmware levels. The consensus was that it would be better if you could take this up directly with your IB vendor.
<br>
<p>Regards
<br>
--Nysal
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><pre>
--
&lt;ATT00001..gif&gt;
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;
&lt;ATT00002..txt&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14356.php">jody: "Re: [OMPI users] a question about [MPI]IO on systems without network filesystem"</a>
<li><strong>Previous message:</strong> <a href="14354.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14354.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14357.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="14357.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="14358.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
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
