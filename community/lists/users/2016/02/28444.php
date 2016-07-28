<?
$subject_val = "[OMPI users] Conflicting directives for mapping policy";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  3 12:07:13 2016" -->
<!-- isoreceived="20160203170713" -->
<!-- sent="Wed, 3 Feb 2016 17:07:11 +0000" -->
<!-- isosent="20160203170711" -->
<!-- name="Jingchao Zhang" -->
<!-- email="zhang_at_[hidden]" -->
<!-- subject="[OMPI users] Conflicting directives for mapping policy" -->
<!-- id="SN2PR0801MB5927B4D40E25A0F601674BFADD00_at_SN2PR0801MB592.namprd08.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Conflicting directives for mapping policy<br>
<strong>From:</strong> Jingchao Zhang (<em>zhang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-03 12:07:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28445.php">Gilles Gouaillardet: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>Previous message:</strong> <a href="28443.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28445.php">Gilles Gouaillardet: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>Reply:</strong> <a href="28445.php">Gilles Gouaillardet: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>Maybe reply:</strong> <a href="28446.php">Jingchao Zhang: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p><p>We have an application named &quot;GAMESS&quot; that worked fine with OpenMPI v1.8.4 but having problems with v1.8.8.
<br>
<p><p>The mpi command in the application is:
<br>
<p>orterun --oversubscribe -mca hwloc_base_binding_policy core:overload-allowed -np $NPROCS --npernode $PPN2 $GMSPATH/gamess.$VERNO.x &lt; /dev/null
<br>
<p><p>The above command works for v1.8.4 but for v1.8.8, it give the following error:
<br>
<p>--------------------------------------------------------------------------
<br>
Conflicting directives for mapping policy are causing the policy
<br>
to be redefined:
<br>
<p>&nbsp;&nbsp;New policy:   RANK_FILE
<br>
&nbsp;&nbsp;Prior policy:  BYCORE:OVERSUBSCRIBE
<br>
<p>Please check that only one policy is defined.
<br>
--------------------------------------------------------------------------
<br>
<p><p>We used to have binding issues with v1.8.8 which led to poor application performances. To resolve it, we added the following parameters to the &quot;openmpi-mca-params.conf&quot; file:
<br>
<p>orte_hetero_nodes=1
<br>
hwloc_base_binding_policy=core
<br>
rmaps_base_mapping_policy=core
<br>
<p><p>The above changes in v1.8.8 work great for other stuff but breaks GAMESS. Does anyone know how to resolve the conflict? Any suggestion is appreciated.
<br>
<p><p>Thanks,
<br>
<p><p>Dr. Jingchao Zhang
<br>
Holland Computing Center
<br>
University of Nebraska-Lincoln
<br>
402-472-6400
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28444/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28445.php">Gilles Gouaillardet: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>Previous message:</strong> <a href="28443.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28445.php">Gilles Gouaillardet: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>Reply:</strong> <a href="28445.php">Gilles Gouaillardet: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>Maybe reply:</strong> <a href="28446.php">Jingchao Zhang: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
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
