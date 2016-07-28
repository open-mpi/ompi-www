<?
$subject_val = "[OMPI devel] excessive warnings on some BSDs [w/ PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 15:22:15 2012" -->
<!-- isoreceived="20120217202215" -->
<!-- sent="Fri, 17 Feb 2012 12:22:01 -0800" -->
<!-- isosent="20120217202201" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] excessive warnings on some BSDs [w/ PATCH]" -->
<!-- id="4F3EB6E9.2010809_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] excessive warnings on some BSDs [w/ PATCH]<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 15:22:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10485.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10483.php">Paul H. Hargrove: "[OMPI devel] Solaris/SOS build failure in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10540.php">Jeffrey Squyres: "Re: [OMPI devel] excessive warnings on some BSDs [w/ PATCH]"</a>
<li><strong>Reply:</strong> <a href="10540.php">Jeffrey Squyres: "Re: [OMPI devel] excessive warnings on some BSDs [w/ PATCH]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When building trunk or 1.5.x on OpenBSD-5.0 (and maybe others), I get 
<br>
*LOTS* of the following:
<br>
<span class="quotelev1">&gt; /usr/include/arpa/inet.h:74: warning: 'struct in_addr' declared inside 
</span><br>
<span class="quotelev1">&gt; parameter list
</span><br>
<span class="quotelev1">&gt; /usr/include/arpa/inet.h:74: warning: its scope is only this 
</span><br>
<span class="quotelev1">&gt; definition or declaration, which is probably not what you want
</span><br>
<span class="quotelev1">&gt; /usr/include/arpa/inet.h:75: warning: 'struct in_addr' declared inside 
</span><br>
<span class="quotelev1">&gt; parameter list
</span><br>
<p>This is trivial to fix by including netinet/in.h before arpa/inet.h (see 
<br>
attached patch).
<br>
The patch applies cleanly to both the trunk and the 1.5 branch (perhaps 
<br>
to hold back until 1.6)
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900

</pre>
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10484/in_addr_warn.diff">in_addr_warn.diff</a>
</ul>
<!-- attachment="in_addr_warn.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10485.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10483.php">Paul H. Hargrove: "[OMPI devel] Solaris/SOS build failure in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10540.php">Jeffrey Squyres: "Re: [OMPI devel] excessive warnings on some BSDs [w/ PATCH]"</a>
<li><strong>Reply:</strong> <a href="10540.php">Jeffrey Squyres: "Re: [OMPI devel] excessive warnings on some BSDs [w/ PATCH]"</a>
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
