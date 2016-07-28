<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 27 19:39:09 2007" -->
<!-- isoreceived="20070927233909" -->
<!-- sent="Thu, 27 Sep 2007 16:39:01 -0700 (PDT)" -->
<!-- isosent="20070927233901" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="[OMPI users] --enable-mca-no-build broken or bad docs?" -->
<!-- id="Pine.GSO.4.64.0709271635120.5908_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-27 19:39:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4085.php">Mostyn Lewis: "[OMPI users] aclocal.m4 booboo?"</a>
<li><strong>Previous message:</strong> <a href="4083.php">Tim Prins: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4086.php">Tim Prins: "Re: [OMPI users] --enable-mca-no-build broken or bad docs?"</a>
<li><strong>Reply:</strong> <a href="4086.php">Tim Prins: "Re: [OMPI users] --enable-mca-no-build broken or bad docs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see docs for this like:
<br>
<p>--enable-mca-no-build=btl:mvapi,btl:openib,btl:gm,btl:mx,mtl:psm
<br>
<p>however, the code in a generated configure that parse this looks like:
<br>
<p>...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ifs_save=&quot;$IFS&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IFS=&quot;${IFS}$PATH_SEPARATOR,&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg=
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for item in $enable_mca_no_build; do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type=&quot;`echo $item | cut -s -f1 -d-`&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comp=&quot;`echo $item | cut -s -f2- -d-`&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test -z $type -o -z $comp ; then
<br>
...
<br>
<p>So this actually expects &quot;-&quot; and not &quot;:&quot; as a delimiter and
<br>
<p>--enable-mca-no-build=btl-mvapi,btl-openib,btl-gm,btl-mx,mtl-psm
<br>
<p>would parse.
<br>
<p>So, which is it? The docs or the last above?
<br>
<span class="quotelev1">&gt;From a SVN of today.
</span><br>
<p>Regards,
<br>
Mostyn Lewis
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4085.php">Mostyn Lewis: "[OMPI users] aclocal.m4 booboo?"</a>
<li><strong>Previous message:</strong> <a href="4083.php">Tim Prins: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4086.php">Tim Prins: "Re: [OMPI users] --enable-mca-no-build broken or bad docs?"</a>
<li><strong>Reply:</strong> <a href="4086.php">Tim Prins: "Re: [OMPI users] --enable-mca-no-build broken or bad docs?"</a>
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
