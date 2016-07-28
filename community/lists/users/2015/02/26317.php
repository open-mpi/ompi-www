<?
$subject_val = "Re: [OMPI users] How to disable the MCA MTL setting at run time";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 20:07:22 2015" -->
<!-- isoreceived="20150212010722" -->
<!-- sent="Wed, 11 Feb 2015 17:07:21 -0800 (PST)" -->
<!-- isosent="20150212010721" -->
<!-- name="Avalon Johnson" -->
<!-- email="avalonjo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to disable the MCA MTL setting at run time" -->
<!-- id="alpine.LRH.2.00.1502111705120.27419_at_indigo.usc.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.LRH.2.00.1502111129520.27419_at_indigo.usc.edu" -->
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
<strong>From:</strong> Avalon Johnson (<em>avalonjo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-11 20:07:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26318.php">Riccardo Zese: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="26316.php">Rolf vandeVaart: "Re: [OMPI users] GPUDirect with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="26315.php">Avalon Johnson: "[OMPI users] How to disable the MCA MTL setting at run time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26319.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<li><strong>Reply:</strong> <a href="26319.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>I have figured this out. For anyone who needs to at run time disable a single 
<br>
item default MCA value, the solution is to set.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_MCA_mtl=^mx
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_MCA_btl=self,sm,openib,tcp
<br>
<p><p>as mentioned
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_MCA_mtl=&quot;&quot;
<br>
<p>will not do the job.
<br>
<p>Avalon Johnson
<br>
ITS HPCC
<br>
USC
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;It takes a village ...&quot;
<br>
<p>On Wed, 11 Feb 2015, Avalon Johnson wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a cluster which is a combination of Myrinet and Infiniband nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are using a common openmpi 1.8.4 software tree accessible to both set of 
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our Infiniband nodes do NOT have the libmyriexpress.so library installed 
</span><br>
<span class="quotelev1">&gt; (since it is not needed).
</span><br>
<span class="quotelev1">&gt; Likewise the Myrinet nodes do not have the OFED libraries installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When running an MPI program on the Infiniband node, openmpi in trying to 
</span><br>
<span class="quotelev1">&gt; determine what transport methods are available, tries to load the 
</span><br>
<span class="quotelev1">&gt; libmyriexpress.so, and then complains that it is not found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to disable this behavior. I had hoped to use the OMPI_MCA_mtl 
</span><br>
<span class="quotelev1">&gt; environment variable to do this.
</span><br>
<span class="quotelev1">&gt; But I unable to come up with a setting that accomplishes this. That is have 
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl set to 'self,sm,openib,tcp' and no MCA mtl checked or used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the equivalent problem on our Myrinet cluster I set OMPI_MCA_btl, to 
</span><br>
<span class="quotelev1">&gt; 'self,sm,tcp' and OMPI_MCA_mtl to 'mx'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know how to disable the MCA mtl at run time, since it's not 
</span><br>
<span class="quotelev1">&gt; needed on the Infiniband nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My apologies if this has been addressed before,  I did not find it when 
</span><br>
<span class="quotelev1">&gt; searching the list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Avalon Johnson ITS HPCC
</span><br>
<span class="quotelev1">&gt; USC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      &quot;It takes a village ...&quot;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26315.php">http://www.open-mpi.org/community/lists/users/2015/02/26315.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26318.php">Riccardo Zese: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="26316.php">Rolf vandeVaart: "Re: [OMPI users] GPUDirect with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="26315.php">Avalon Johnson: "[OMPI users] How to disable the MCA MTL setting at run time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26319.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<li><strong>Reply:</strong> <a href="26319.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
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
