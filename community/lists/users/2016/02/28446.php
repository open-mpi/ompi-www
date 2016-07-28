<?
$subject_val = "Re: [OMPI users] Conflicting directives for mapping policy";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 00:00:03 2016" -->
<!-- isoreceived="20160204050003" -->
<!-- sent="Thu, 4 Feb 2016 04:59:58 +0000" -->
<!-- isosent="20160204045958" -->
<!-- name="Jingchao Zhang" -->
<!-- email="zhang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Conflicting directives for mapping policy" -->
<!-- id="SN2PR0801MB5925089A2E59AB7A06ED1B4ADD10_at_SN2PR0801MB592.namprd08.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6946_1454543056_u13NiGH3017572_56B290C9.5070003_at_rist.or.jp" -->
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
<strong>From:</strong> Jingchao Zhang (<em>zhang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-03 23:59:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28447.php">Gilles Gouaillardet: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>Previous message:</strong> <a href="28445.php">Gilles Gouaillardet: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>Maybe in reply to:</strong> <a href="28444.php">Jingchao Zhang: "[OMPI users] Conflicting directives for mapping policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28447.php">Gilles Gouaillardet: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>Reply:</strong> <a href="28447.php">Gilles Gouaillardet: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p><p>Here is what I have for v1.8.8
<br>
<p>$ompi_info --all | grep rmaps_rank_file
<br>
<p>514:                MCA orte: parameter &quot;orte_rankfile&quot; (current value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: string, synonym of: rmaps_rank_file_path)
<br>
774:               MCA rmaps: parameter &quot;rmaps_rank_file_priority&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
<br>
776:               MCA rmaps: parameter &quot;rmaps_rank_file_path&quot; (current value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: string, synonyms: orte_rankfile)
<br>
778:               MCA rmaps: parameter &quot;rmaps_rank_file_physical&quot; (current value: &quot;false&quot;, data source: default, level: 5 tuner/detail, type: bool)
<br>
<p><p>and v1.10.1
<br>
<p>$ompi_info --all | grep rmaps_rank_file
<br>
<p>514:                MCA orte: parameter &quot;orte_rankfile&quot; (current value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: string, synonym of: rmaps_rank_file_path)
<br>
770:               MCA rmaps: parameter &quot;rmaps_rank_file_priority&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
<br>
772:               MCA rmaps: parameter &quot;rmaps_rank_file_path&quot; (current value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: string, synonyms: orte_rankfile)
<br>
774:               MCA rmaps: parameter &quot;rmaps_rank_file_physical&quot; (current value: &quot;false&quot;, data source: default, level: 5 tuner/detail, type: bool)
<br>
<p><p>I am not sure if this is the root of the problem because v1.8.4 seems to have the same results
<br>
<p>$ompi_info --all | grep rmaps_rank_file
<br>
<p>508:                MCA orte: parameter &quot;orte_rankfile&quot; (current value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: string, synonym of: rmaps_rank_file_path)
<br>
755:               MCA rmaps: parameter &quot;rmaps_rank_file_priority&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
<br>
757:               MCA rmaps: parameter &quot;rmaps_rank_file_path&quot; (current value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: string, synonyms: orte_rankfile)
<br>
759:               MCA rmaps: parameter &quot;rmaps_rank_file_physical&quot; (current value: &quot;false&quot;, data source: default, level: 5 tuner/detail, type: bool)
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
<p><p>________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
Sent: Wednesday, February 3, 2016 5:44 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Conflicting directives for mapping policy
<br>
<p>I checked the v1.10 source code, and for some reasons, it seems
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
<p>Hi all,
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
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28444.php">http://www.open-mpi.org/community/lists/users/2016/02/28444.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28446/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28447.php">Gilles Gouaillardet: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>Previous message:</strong> <a href="28445.php">Gilles Gouaillardet: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>Maybe in reply to:</strong> <a href="28444.php">Jingchao Zhang: "[OMPI users] Conflicting directives for mapping policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28447.php">Gilles Gouaillardet: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>Reply:</strong> <a href="28447.php">Gilles Gouaillardet: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
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
