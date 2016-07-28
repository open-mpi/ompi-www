<?
$subject_val = "Re: [OMPI devel] NO IP address found";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 11:00:30 2008" -->
<!-- isoreceived="20080506150030" -->
<!-- sent="Tue, 6 May 2008 10:00:22 -0500" -->
<!-- isosent="20080506150022" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] NO IP address found" -->
<!-- id="200805061000.22636.jon_at_opengridcomputing.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="219018CC-9660-4F9D-AC22-734E5F5DF108_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] NO IP address found<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 11:00:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3842.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
<li><strong>Previous message:</strong> <a href="3840.php">Brian W. Barrett: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>In reply to:</strong> <a href="3839.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3842.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
<li><strong>Reply:</strong> <a href="3842.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday 06 May 2008 09:41:53 am Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I actually don't know what the RDMA CM requires for the LMC&gt;0 case --  
</span><br>
<span class="quotelev1">&gt; does it require a unique IP address for every LID?
</span><br>
<p>It requires a unique IP address for every hca/port in use by rdmacm.
<br>
<p>I see the bug in rdmacm (since I don't believe you were trying to use rdmacm), and will have a patch out shortly.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 6, 2008, at 5:09 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; running BW benchmark with btl_openib_max_lmc &gt;= 2 couses warning  
</span><br>
<span class="quotelev2">&gt; &gt; ( MPI from the TRUNK ) !!!!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  #mpirun --bynode -np 40 -hostfile hostfile_ompi_arbel  -mca  
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_max_lmc 2  ./mpi_p_LMC  -t bw -s 400000
</span><br>
<span class="quotelev2">&gt; &gt; BW (40) (size min max avg)  400000      321.493757       
</span><br>
<span class="quotelev2">&gt; &gt; 342.972837      329.493715
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  #mpirun --bynode -np 40 -hostfile hostfile_ompi_arbel  -mca  
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_max_lmc 3  ./mpi_p_LMC  -t bw -s 400000
</span><br>
<span class="quotelev2">&gt; &gt; [witch9][[7493,1],7][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch2][[7493,1],0][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch10][[7493,1],9][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch6][[7493,1],4][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch4][[7493,1],2][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch7][[7493,1],5][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch2][[7493,1],10][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch9][[7493,1],17][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch5][[7493,1],3][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch8][[7493,1],6][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch6][[7493,1],14][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch10][[7493,1],19][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch5][[7493,1],13][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch4][[7493,1],12][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch9][[7493,1],27][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch5][[7493,1],23][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch2][[7493,1],20][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch9][[7493,1],37][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch7][[7493,1],35][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch4][[7493,1],32][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch4][[7493,1],22][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch5][[7493,1],33][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch2][[7493,1],30][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch8][[7493,1],16][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch7][[7493,1],15][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch10][[7493,1],39][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch7][[7493,1],25][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch10][[7493,1],29][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch6][[7493,1],34][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch8][[7493,1],26][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch6][[7493,1],24][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; [witch8][[7493,1],36][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev2">&gt; &gt; BW (40) (size min max avg)  400000      312.622582       
</span><br>
<span class="quotelev2">&gt; &gt; 334.037277      324.014814
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; using -mca btl openib,self causes warning with LMC &gt;=10
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards
</span><br>
<span class="quotelev2">&gt; &gt; Lenny.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3842.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
<li><strong>Previous message:</strong> <a href="3840.php">Brian W. Barrett: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>In reply to:</strong> <a href="3839.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3842.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
<li><strong>Reply:</strong> <a href="3842.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
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
