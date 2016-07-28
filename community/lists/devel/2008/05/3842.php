<?
$subject_val = "Re: [OMPI devel] NO IP address found";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 11:03:26 2008" -->
<!-- isoreceived="20080506150326" -->
<!-- sent="Tue, 6 May 2008 11:03:14 -0400" -->
<!-- isosent="20080506150314" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] NO IP address found" -->
<!-- id="5D064F8B-C4F2-4700-9003-5633139DC316_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200805061000.22636.jon_at_opengridcomputing.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 11:03:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3843.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Previous message:</strong> <a href="3841.php">Jon Mason: "Re: [OMPI devel] NO IP address found"</a>
<li><strong>In reply to:</strong> <a href="3841.php">Jon Mason: "Re: [OMPI devel] NO IP address found"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the larger issue, though, is whether rdmacm will work properly  
<br>
for the LMC&gt;0 case over IB, right?
<br>
<p>The fact that it shouldn't be displaying this error message now  
<br>
because RDMA CM is not the default is one issue, but it's not the  
<br>
*real* issue...
<br>
<p><p>On May 6, 2008, at 11:00 AM, Jon Mason wrote:
<br>
<p><span class="quotelev1">&gt; On Tuesday 06 May 2008 09:41:53 am Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I actually don't know what the RDMA CM requires for the LMC&gt;0 case --
</span><br>
<span class="quotelev2">&gt;&gt; does it require a unique IP address for every LID?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It requires a unique IP address for every hca/port in use by rdmacm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see the bug in rdmacm (since I don't believe you were trying to  
</span><br>
<span class="quotelev1">&gt; use rdmacm), and will have a patch out shortly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 6, 2008, at 5:09 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running BW benchmark with btl_openib_max_lmc &gt;= 2 couses warning
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ( MPI from the TRUNK ) !!!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #mpirun --bynode -np 40 -hostfile hostfile_ompi_arbel  -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_max_lmc 2  ./mpi_p_LMC  -t bw -s 400000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BW (40) (size min max avg)  400000      321.493757
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 342.972837      329.493715
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #mpirun --bynode -np 40 -hostfile hostfile_ompi_arbel  -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_max_lmc 3  ./mpi_p_LMC  -t bw -s 400000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch9][[7493,1],7][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch2][[7493,1],0][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch10][[7493,1],9][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch6][[7493,1],4][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch4][[7493,1],2][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch7][[7493,1],5][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch2][[7493,1],10][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch9][[7493,1],17][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch5][[7493,1],3][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch8][[7493,1],6][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch6][[7493,1],14][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch10][[7493,1],19][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch5][[7493,1],13][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch4][[7493,1],12][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch9][[7493,1],27][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch5][[7493,1],23][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch2][[7493,1],20][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch9][[7493,1],37][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch7][[7493,1],35][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch4][[7493,1],32][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch4][[7493,1],22][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch5][[7493,1],33][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch2][[7493,1],30][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch8][[7493,1],16][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch7][[7493,1],15][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch10][[7493,1],39][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch7][[7493,1],25][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch10][[7493,1],29][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch6][[7493,1],34][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch8][[7493,1],26][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch6][[7493,1],24][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch8][[7493,1],36][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_rdmacm.c:989:create_message] No IP address found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BW (40) (size min max avg)  400000      312.622582
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 334.037277      324.014814
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using -mca btl openib,self causes warning with LMC &gt;=10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3843.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Previous message:</strong> <a href="3841.php">Jon Mason: "Re: [OMPI devel] NO IP address found"</a>
<li><strong>In reply to:</strong> <a href="3841.php">Jon Mason: "Re: [OMPI devel] NO IP address found"</a>
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
