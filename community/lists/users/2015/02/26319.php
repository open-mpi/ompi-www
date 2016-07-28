<?
$subject_val = "Re: [OMPI users] How to disable the MCA MTL setting at run time";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 10:59:09 2015" -->
<!-- isoreceived="20150212155909" -->
<!-- sent="Thu, 12 Feb 2015 15:59:07 +0000" -->
<!-- isosent="20150212155907" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to disable the MCA MTL setting at run time" -->
<!-- id="1AC7BD45-C76F-4709-AA05-D22EADA75D7E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.00.1502111705120.27419_at_indigo.usc.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to disable the MCA MTL setting at run time<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-12 10:59:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26320.php">Avalon Johnson: "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<li><strong>Previous message:</strong> <a href="26318.php">Riccardo Zese: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="26317.php">Avalon Johnson: "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26320.php">Avalon Johnson: "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<li><strong>Reply:</strong> <a href="26320.php">Avalon Johnson: "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for not replying earlier.
<br>
<p>Yes, you hit on a solution.
<br>
<p>Note, too, that the MTLs are only used by the &quot;cm&quot; PML, and the BTLs are only used by the &quot;ob1&quot; PML.
<br>
<p>So if you're using the openib BTL for IB support (vs. the MXM MTL), you can effectively choose one or the other by setting 
<br>
<p>OMPI_MCA_pml=ob1
<br>
or
<br>
OMPI_MCA_pml=cm
<br>
<p>Which will force the use of ob1 or cm, and therefore force the use of the BTLs or MTLs, respectively.  More importantly, forcing the use of ob1/BTLs means that the MTLs will *not* be opened (i.e., so you won't see the MX MTL complain about the lack of myriexpress).
<br>
<p>Make sense?
<br>
<p>You probably figured out that you can set these values either in the environments of these machines or in machine-specific config files in the Open MPI installation tree. Environment is usually easier, especially if you have Open MPI installed in a single, common location on a networked filesystem that is available on all servers.
<br>
<p>Hope that helps!
<br>
<p><p><p><span class="quotelev1">&gt; On Feb 11, 2015, at 8:07 PM, Avalon Johnson &lt;avalonjo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have figured this out. For anyone who needs to at run time disable a single item default MCA value, the solution is to set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    OMPI_MCA_mtl=^mx
</span><br>
<span class="quotelev1">&gt;    OMPI_MCA_btl=self,sm,openib,tcp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as mentioned
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    OMPI_MCA_mtl=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; will not do the job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Avalon Johnson
</span><br>
<span class="quotelev1">&gt; ITS HPCC
</span><br>
<span class="quotelev1">&gt; USC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      &quot;It takes a village ...&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 11 Feb 2015, Avalon Johnson wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have a cluster which is a combination of Myrinet and Infiniband nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are using a common openmpi 1.8.4 software tree accessible to both set of nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Our Infiniband nodes do NOT have the libmyriexpress.so library installed (since it is not needed).
</span><br>
<span class="quotelev2">&gt;&gt; Likewise the Myrinet nodes do not have the OFED libraries installed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When running an MPI program on the Infiniband node, openmpi in trying to determine what transport methods are available, tries to load the libmyriexpress.so, and then complains that it is not found.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would like to disable this behavior. I had hoped to use the OMPI_MCA_mtl environment variable to do this.
</span><br>
<span class="quotelev2">&gt;&gt; But I unable to come up with a setting that accomplishes this. That is have OMPI_MCA_btl set to 'self,sm,openib,tcp' and no MCA mtl checked or used.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For the equivalent problem on our Myrinet cluster I set OMPI_MCA_btl, to 'self,sm,tcp' and OMPI_MCA_mtl to 'mx'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone know how to disable the MCA mtl at run time, since it's not needed on the Infiniband nodes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My apologies if this has been addressed before,  I did not find it when searching the list.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Avalon Johnson ITS HPCC
</span><br>
<span class="quotelev2">&gt;&gt; USC
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;It takes a village ...&quot;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26315.php">http://www.open-mpi.org/community/lists/users/2015/02/26315.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26317.php">http://www.open-mpi.org/community/lists/users/2015/02/26317.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26320.php">Avalon Johnson: "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<li><strong>Previous message:</strong> <a href="26318.php">Riccardo Zese: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="26317.php">Avalon Johnson: "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26320.php">Avalon Johnson: "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<li><strong>Reply:</strong> <a href="26320.php">Avalon Johnson: "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
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
