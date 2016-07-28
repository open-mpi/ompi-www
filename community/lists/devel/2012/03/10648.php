<?
$subject_val = "[OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 02:33:45 2012" -->
<!-- isoreceived="20120301073345" -->
<!-- sent="Thu, 01 Mar 2012 16:33:31 +0900" -->
<!-- isosent="20120301073331" -->
<!-- name="Y.MATSUMOTO" -->
<!-- email="yuki.matsumoto_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)" -->
<!-- id="4F4F264B.3020101_at_jp.fujitsu.com" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)<br>
<strong>From:</strong> Y.MATSUMOTO (<em>yuki.matsumoto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 02:33:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10649.php">Nathan Hjelm: "[OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10647.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10669.php">George Bosilca: "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<li><strong>Reply:</strong> <a href="10669.php">George Bosilca: "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<li><strong>Reply:</strong> <a href="10670.php">George Bosilca: "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>Next feedback is about &quot;coll_tuned_dynamic_rules_filename&quot;.
<br>
<p>Incorrect algorithm is selected in following conditions:
<br>
1:&quot;--mca coll_tuned_use_dynamic_rules 1&quot; is set.
<br>
2:&quot;--mca coll_tuned_dynamic_rules_filename&quot; is set.
<br>
3: Collective communication which is written in 2, called &gt;= 2GiB communication.
<br>
(ex) MPI_Bcast:data type size * count &gt;= 2GiB
<br>
MPI_Allgather: data type size * count * communication size &gt;= 2GiB)
<br>
<p>Please see attached patch(Patch is for V1.4.x).
<br>
But, we found problem when over 2GiB message is written in rulefile as &quot;message size&quot;.
<br>
(over 2GiB message cannot read correctly.)
<br>
And we do not fix it.
<br>
<p>Best Regards,
<br>
yuki Matsumoto
<br>
MPI development team,
<br>
Fujitsu
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10648/dynamic_rule.patch">dynamic_rule.patch</a>
</ul>
<!-- attachment="dynamic_rule.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10649.php">Nathan Hjelm: "[OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10647.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10669.php">George Bosilca: "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<li><strong>Reply:</strong> <a href="10669.php">George Bosilca: "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<li><strong>Reply:</strong> <a href="10670.php">George Bosilca: "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
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
