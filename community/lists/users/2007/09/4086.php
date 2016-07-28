<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 27 21:01:52 2007" -->
<!-- isoreceived="20070928010152" -->
<!-- sent="Thu, 27 Sep 2007 21:01:53 -0400" -->
<!-- isosent="20070928010153" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] --enable-mca-no-build broken or bad docs?" -->
<!-- id="46FC5281.1050008_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.GSO.4.64.0709271635120.5908_at_aragorn.brc.West.Sun.COM" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-27 21:01:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4087.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
<li><strong>Previous message:</strong> <a href="4085.php">Mostyn Lewis: "[OMPI users] aclocal.m4 booboo?"</a>
<li><strong>In reply to:</strong> <a href="4084.php">Mostyn Lewis: "[OMPI users] --enable-mca-no-build broken or bad docs?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mostyn,
<br>
<p>It looks like the documentation is wrong (and has been wrong for years). 
<br>
I assume you were looking at the FAQ? I will update it tonight or tomorrow.
<br>
<p>Thanks for the report!
<br>
<p>Tim
<br>
<p>Mostyn Lewis wrote:
<br>
<span class="quotelev1">&gt; I see docs for this like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=btl:mvapi,btl:openib,btl:gm,btl:mx,mtl:psm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; however, the code in a generated configure that parse this looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;          ifs_save=&quot;$IFS&quot;
</span><br>
<span class="quotelev1">&gt;          IFS=&quot;${IFS}$PATH_SEPARATOR,&quot;
</span><br>
<span class="quotelev1">&gt;          msg=
</span><br>
<span class="quotelev1">&gt;          for item in $enable_mca_no_build; do
</span><br>
<span class="quotelev1">&gt;              type=&quot;`echo $item | cut -s -f1 -d-`&quot;
</span><br>
<span class="quotelev1">&gt;              comp=&quot;`echo $item | cut -s -f2- -d-`&quot;
</span><br>
<span class="quotelev1">&gt;              if test -z $type -o -z $comp ; then
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So this actually expects &quot;-&quot; and not &quot;:&quot; as a delimiter and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=btl-mvapi,btl-openib,btl-gm,btl-mx,mtl-psm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; would parse.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, which is it? The docs or the last above?
</span><br>
<span class="quotelev2">&gt;&gt;From a SVN of today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mostyn Lewis
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4087.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
<li><strong>Previous message:</strong> <a href="4085.php">Mostyn Lewis: "[OMPI users] aclocal.m4 booboo?"</a>
<li><strong>In reply to:</strong> <a href="4084.php">Mostyn Lewis: "[OMPI users] --enable-mca-no-build broken or bad docs?"</a>
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
