<?
$subject_val = "Re: [OMPI users] Conflicting directives for mapping policy";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  3 18:44:11 2016" -->
<!-- isoreceived="20160203234411" -->
<!-- sent="Thu, 4 Feb 2016 08:44:09 +0900" -->
<!-- isosent="20160203234409" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Conflicting directives for mapping policy" -->
<!-- id="56B290C9.5070003_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="SN2PR0801MB5927B4D40E25A0F601674BFADD00_at_SN2PR0801MB592.namprd08.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Conflicting directives for mapping policy<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-03 18:44:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28446.php">Jingchao Zhang: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>Previous message:</strong> <a href="28444.php">Jingchao Zhang: "[OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>In reply to:</strong> <a href="28444.php">Jingchao Zhang: "[OMPI users] Conflicting directives for mapping policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28446.php">Jingchao Zhang: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I checked the v1.10 source code, and for some reasons, it seems
<br>
rmaps_rank_file_path is defined.
<br>
<p>before invoking mpirun, can you please run
<br>
ompi_info --all | grep rmaps_rank_file
<br>
<p>and confirm that
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2/4/2016 2:07 AM, Jingchao Zhang wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have an application named &quot;GAMESS&quot; that worked fine with OpenMPI 
</span><br>
<span class="quotelev1">&gt; v1.8.4 but having problems with v1.8.8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpi command in the application is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orterun --oversubscribe -mca hwloc_base_binding_policy 
</span><br>
<span class="quotelev1">&gt; core:overload-allowed -np $NPROCS --npernode $PPN2 
</span><br>
<span class="quotelev1">&gt; $GMSPATH/gamess.$VERNO.x &lt; /dev/null
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The above command works for v1.8.4 but for v1.8.8, it give the 
</span><br>
<span class="quotelev1">&gt; following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Conflicting directives for mapping policy are causing the policy
</span><br>
<span class="quotelev1">&gt; to be redefined:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   New policy:   RANK_FILE
</span><br>
<span class="quotelev1">&gt;   Prior policy:  BYCORE:OVERSUBSCRIBE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please check that only one policy is defined.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We used to have binding issues with v1.8.8 which led to poor 
</span><br>
<span class="quotelev1">&gt; application performances. To resolve it, we added the following 
</span><br>
<span class="quotelev1">&gt; parameters to the &quot;openmpi-mca-params.conf&quot; file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte_hetero_nodes=1
</span><br>
<span class="quotelev1">&gt; hwloc_base_binding_policy=core
</span><br>
<span class="quotelev1">&gt; rmaps_base_mapping_policy=core
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The above changes in v1.8.8 work great for other stuff but breaks 
</span><br>
<span class="quotelev1">&gt; GAMESS. Does anyone know how to resolve the conflict? Any suggestion 
</span><br>
<span class="quotelev1">&gt; is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dr. Jingchao Zhang
</span><br>
<span class="quotelev1">&gt; Holland Computing Center
</span><br>
<span class="quotelev1">&gt; University of Nebraska-Lincoln
</span><br>
<span class="quotelev1">&gt; 402-472-6400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28444.php">http://www.open-mpi.org/community/lists/users/2016/02/28444.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28445/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28446.php">Jingchao Zhang: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>Previous message:</strong> <a href="28444.php">Jingchao Zhang: "[OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>In reply to:</strong> <a href="28444.php">Jingchao Zhang: "[OMPI users] Conflicting directives for mapping policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28446.php">Jingchao Zhang: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
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
