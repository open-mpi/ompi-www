<?
$subject_val = "Re: [OMPI users] OpenMPI without IPoIB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 19:55:21 2009" -->
<!-- isoreceived="20091202005521" -->
<!-- sent="Tue, 1 Dec 2009 19:55:15 -0500" -->
<!-- isosent="20091202005515" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI without IPoIB" -->
<!-- id="FACB2BEA-7BDE-4EBA-B7D3-D57D372C15F2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B0D7160.4090605_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI without IPoIB<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 19:55:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11346.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11344.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11285.php">Don Kerr: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15849.php">Bernardo F Costa: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might also want to ensure that your Open MPI was built with  
<br>
OpenFabrics support (i.e., to use verbs directly instead of IPoIB).   
<br>
Try this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ompi_info | grep openib
<br>
<p>If that returns a line with &quot;openib&quot; and &quot;btl&quot; in it, then your Open  
<br>
MPI has OpenFabrics support (we named the plugin &quot;openib&quot; way back  
<br>
when the OpenFabrics project was named &quot;OpenIB&quot; -- we stuck with the  
<br>
name rather than updating it).  If the output is empty, then your Open  
<br>
MPI wasn't build with verbs/OpenFabrics support.
<br>
<p><p>On Nov 25, 2009, at 1:03 PM, Don Kerr wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/25/09 02:04, Vivek Satpute wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to execute OpenMPI examples from OFED-1.4 stack and found  
</span><br>
<span class="quotelev2">&gt;&gt; that all those
</span><br>
<span class="quotelev2">&gt;&gt; examples uses IPoIB.
</span><br>
<span class="quotelev1">&gt; How are you determining that it is using IPoIB?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any way to execute MPI applications on only Infiniband  
</span><br>
<span class="quotelev2">&gt;&gt; stack i.e. without
</span><br>
<span class="quotelev2">&gt;&gt; using IPoIB module ?
</span><br>
<span class="quotelev2">&gt;&gt; Can we execute MPI applications using libibverbs, librdma, or some  
</span><br>
<span class="quotelev2">&gt;&gt; other libraries ?
</span><br>
<span class="quotelev1">&gt; OpenMPI by default will select and use the best available path. If  
</span><br>
<span class="quotelev1">&gt; the ibverbs interace is available and operational OpenMPI will use  
</span><br>
<span class="quotelev1">&gt; this for off-node MPI communication. If you are concerned that  
</span><br>
<span class="quotelev1">&gt; ibverbs is not in use specifically calling it out on the mpirun  
</span><br>
<span class="quotelev1">&gt; command line will assure you that it is being used, e.g.  &quot;mpirun -- 
</span><br>
<span class="quotelev1">&gt; mca btl self,sm,openib .... &quot;. This command will instruct OpenMPI to  
</span><br>
<span class="quotelev1">&gt; use shared memory for on node communication and openib (ibverbs),  
</span><br>
<span class="quotelev1">&gt; for off-node communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Vivek
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11346.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11344.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11285.php">Don Kerr: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15849.php">Bernardo F Costa: "Re: [OMPI users] OpenMPI without IPoIB"</a>
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
