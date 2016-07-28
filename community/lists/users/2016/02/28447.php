<?
$subject_val = "Re: [OMPI users] Conflicting directives for mapping policy";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 02:19:24 2016" -->
<!-- isoreceived="20160204071924" -->
<!-- sent="Thu, 4 Feb 2016 16:19:21 +0900" -->
<!-- isosent="20160204071921" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Conflicting directives for mapping policy" -->
<!-- id="56B2FB79.1010904_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="SN2PR0801MB5925089A2E59AB7A06ED1B4ADD10_at_SN2PR0801MB592.namprd08.prod.outlook.com" -->
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
<strong>Date:</strong> 2016-02-04 02:19:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28448.php">Brian Taylor: "[OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28446.php">Jingchao Zhang: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>In reply to:</strong> <a href="28446.php">Jingchao Zhang: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is what i get trying something similar :
<br>
<p>$ mpirun -np 1 --npernode 1 --map-by core hostname
<br>
--------------------------------------------------------------------------
<br>
Conflicting directives for mapping policy are causing the policy
<br>
to be redefined:
<br>
<p>&nbsp;&nbsp;&nbsp;New policy:   bynode
<br>
&nbsp;&nbsp;&nbsp;Prior policy:  BYCORE
<br>
<p>Please check that only one policy is defined.
<br>
--------------------------------------------------------------------------
<br>
<p><p>i assume you invoke mpirun from a batch manager, if so, did you also 
<br>
invoke ompi_info from the same job ?
<br>
if not, then i have no idea where RANK_FILE is coming from.
<br>
<p><p>currently, --npernode is telling ompi to use the &quot;ppr&quot; mapper, and it 
<br>
causes a conflict with the &quot;map by core&quot; policy.
<br>
<p>Ralph,
<br>
can you please comment on that ?
<br>
<p>btw,
<br>
<p>i also tried to map by node, and the result is quite surprising :
<br>
$ mpirun -np 1 --npernode 1 --map-by node hostname
<br>
--------------------------------------------------------------------------
<br>
Conflicting directives for mapping policy are causing the policy
<br>
to be redefined:
<br>
<p>&nbsp;&nbsp;&nbsp;New policy:   bynode
<br>
&nbsp;&nbsp;&nbsp;Prior policy:  BYNODE
<br>
<p>Please check that only one policy is defined.
<br>
--------------------------------------------------------------------------
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2/4/2016 1:59 PM, Jingchao Zhang wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is what I have for v1.8.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ompi_info --all | grep rmaps_rank_file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 514:                MCA orte: parameter &quot;orte_rankfile&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: string, 
</span><br>
<span class="quotelev1">&gt; synonym of: rmaps_rank_file_path)
</span><br>
<span class="quotelev1">&gt; 774:               MCA rmaps: parameter &quot;rmaps_rank_file_priority&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt; 776:               MCA rmaps: parameter &quot;rmaps_rank_file_path&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: 
</span><br>
<span class="quotelev1">&gt; string, synonyms: orte_rankfile)
</span><br>
<span class="quotelev1">&gt; 778:               MCA rmaps: parameter &quot;rmaps_rank_file_physical&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;false&quot;, data source: default, level: 5 tuner/detail, 
</span><br>
<span class="quotelev1">&gt; type: bool)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and v1.10.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ompi_info --all | grep rmaps_rank_file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 514:                MCA orte: parameter &quot;orte_rankfile&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: string, 
</span><br>
<span class="quotelev1">&gt; synonym of: rmaps_rank_file_path)
</span><br>
<span class="quotelev1">&gt; 770:               MCA rmaps: parameter &quot;rmaps_rank_file_priority&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt; 772:               MCA rmaps: parameter &quot;rmaps_rank_file_path&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: 
</span><br>
<span class="quotelev1">&gt; string, synonyms: orte_rankfile)
</span><br>
<span class="quotelev1">&gt; 774:               MCA rmaps: parameter &quot;rmaps_rank_file_physical&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;false&quot;, data source: default, level: 5 tuner/detail, 
</span><br>
<span class="quotelev1">&gt; type: bool)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure if this is the root of the problem because v1.8.4 seems 
</span><br>
<span class="quotelev1">&gt; to have the same results
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ompi_info --all | grep rmaps_rank_file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 508:                MCA orte: parameter &quot;orte_rankfile&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: string, 
</span><br>
<span class="quotelev1">&gt; synonym of: rmaps_rank_file_path)
</span><br>
<span class="quotelev1">&gt; 755:               MCA rmaps: parameter &quot;rmaps_rank_file_priority&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt; 757:               MCA rmaps: parameter &quot;rmaps_rank_file_path&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: 
</span><br>
<span class="quotelev1">&gt; string, synonyms: orte_rankfile)
</span><br>
<span class="quotelev1">&gt; 759:               MCA rmaps: parameter &quot;rmaps_rank_file_physical&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;false&quot;, data source: default, level: 5 tuner/detail, 
</span><br>
<span class="quotelev1">&gt; type: bool)
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users &lt;users-bounces_at_[hidden]&gt; on behalf of Gilles 
</span><br>
<span class="quotelev1">&gt; Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, February 3, 2016 5:44 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Conflicting directives for mapping policy
</span><br>
<span class="quotelev1">&gt; I checked the v1.10 source code, and for some reasons, it seems
</span><br>
<span class="quotelev1">&gt; rmaps_rank_file_path is defined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; before invoking mpirun, can you please run
</span><br>
<span class="quotelev1">&gt; ompi_info --all | grep rmaps_rank_file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and confirm that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/4/2016 2:07 AM, Jingchao Zhang wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have an application named &quot;GAMESS&quot; that worked fine with OpenMPI 
</span><br>
<span class="quotelev2">&gt;&gt; v1.8.4 but having problems with v1.8.8.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The mpi command in the application is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orterun --oversubscribe -mca hwloc_base_binding_policy 
</span><br>
<span class="quotelev2">&gt;&gt; core:overload-allowed -np $NPROCS --npernode $PPN2 
</span><br>
<span class="quotelev2">&gt;&gt; $GMSPATH/gamess.$VERNO.x &lt; /dev/null
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The above command works for v1.8.4 but for v1.8.8, it give the 
</span><br>
<span class="quotelev2">&gt;&gt; following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Conflicting directives for mapping policy are causing the policy
</span><br>
<span class="quotelev2">&gt;&gt; to be redefined:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   New policy:   RANK_FILE
</span><br>
<span class="quotelev2">&gt;&gt;   Prior policy:  BYCORE:OVERSUBSCRIBE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please check that only one policy is defined.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We used to have binding issues with v1.8.8 which led to poor 
</span><br>
<span class="quotelev2">&gt;&gt; application performances. To resolve it, we added the following 
</span><br>
<span class="quotelev2">&gt;&gt; parameters to the &quot;openmpi-mca-params.conf&quot; file:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orte_hetero_nodes=1
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_base_binding_policy=core
</span><br>
<span class="quotelev2">&gt;&gt; rmaps_base_mapping_policy=core
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The above changes in v1.8.8 work great for other stuff but breaks 
</span><br>
<span class="quotelev2">&gt;&gt; GAMESS. Does anyone know how to resolve the conflict? Any suggestion 
</span><br>
<span class="quotelev2">&gt;&gt; is appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Jingchao Zhang
</span><br>
<span class="quotelev2">&gt;&gt; Holland Computing Center
</span><br>
<span class="quotelev2">&gt;&gt; University of Nebraska-Lincoln
</span><br>
<span class="quotelev2">&gt;&gt; 402-472-6400
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/02/28444.php">http://www.open-mpi.org/community/lists/users/2016/02/28444.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28446.php">http://www.open-mpi.org/community/lists/users/2016/02/28446.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28447/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28448.php">Brian Taylor: "[OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28446.php">Jingchao Zhang: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>In reply to:</strong> <a href="28446.php">Jingchao Zhang: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
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
