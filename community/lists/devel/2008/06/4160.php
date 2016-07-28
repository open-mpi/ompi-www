<?
$subject_val = "Re: [OMPI devel] BW benchmark hangs after r 18551";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 09:32:52 2008" -->
<!-- isoreceived="20080619133252" -->
<!-- sent="Thu, 19 Jun 2008 16:32:42 +0300" -->
<!-- isosent="20080619133242" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BW benchmark hangs after r 18551" -->
<!-- id="453d39990806190632h296b2c09s6e33ae1fab398c37_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990806180521g6a8ab012o4803b65fe8832366_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BW benchmark hangs after r 18551<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 09:32:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4161.php">Terry Dontje: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>Previous message:</strong> <a href="4159.php">George Bosilca: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>Maybe in reply to:</strong> <a href="4139.php">Lenny Verkhovsky: "[OMPI devel] BW benchmark hangs after r 18551"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4165.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Reply:</strong> <a href="4165.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I found what caused the problem in both cases.
<br>
<p>--- ompi/mca/btl/sm/btl_sm.c    (revision 18675)
<br>
+++ ompi/mca/btl/sm/btl_sm.c    (working copy)
<br>
@@ -812,7 +812,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_SM_FIFO_WRITE(endpoint, endpoint-&gt;my_smp_rank,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint-&gt;peer_smp_rank, frag-&gt;hdr, false, rc);
<br>
-    return (rc &lt; 0 ? rc : 1);
<br>
+   return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
I am just not sure if it's OK.
<br>
<p>Lenny.
<br>
On Wed, Jun 18, 2008 at 3:21 PM, Lenny Verkhovsky &lt;
<br>
lenny.verkhovsky_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am not sure if it related,
</span><br>
<span class="quotelev1">&gt; but I applied your patch ( r18667 )  to r 18656 ( one before NUMA )
</span><br>
<span class="quotelev1">&gt; together with disabling sendi,
</span><br>
<span class="quotelev1">&gt; The result still the same ( hanging ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Tue, Jun 17, 2008 at 2:10 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lenny,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess you're running the latest version. If not, please update, Galen
</span><br>
<span class="quotelev2">&gt;&gt; and myself corrected some bugs last week. If you're using the latest (and
</span><br>
<span class="quotelev2">&gt;&gt; greatest) then ... well I imagine there is at least one bug left.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is a quick test you can do. In the btl_sm.c in the module structure
</span><br>
<span class="quotelev2">&gt;&gt; at the beginning of the file, please replace the sendi function by NULL. If
</span><br>
<span class="quotelev2">&gt;&gt; this fix the problem, then at least we know that it's a sm send immediate
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 17, 2008, at 7:54 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, George,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a problem running BW benchmark on 100 rank cluster after r18551.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The BW is mpi_p that runs mpi_bandwidth with 100K between all pairs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #mpirun -np 100 -hostfile hostfile_w  ./mpi_p_18549 -t bw -s 100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BW (100) (size min max avg)  100000     576.734030      2001.882416
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1062.698408
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #mpirun -np 100 -hostfile hostfile_w ./mpi_p_18551 -t bw -s 100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ( it hangs even after 10 hours ).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It doesn't happen if I run --bynode or btl openib,self only.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4160/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4161.php">Terry Dontje: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>Previous message:</strong> <a href="4159.php">George Bosilca: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>Maybe in reply to:</strong> <a href="4139.php">Lenny Verkhovsky: "[OMPI devel] BW benchmark hangs after r 18551"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4165.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Reply:</strong> <a href="4165.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
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
