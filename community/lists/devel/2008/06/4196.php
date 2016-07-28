<?
$subject_val = "Re: [OMPI devel] BW benchmark hangs after r 18551";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 04:42:16 2008" -->
<!-- isoreceived="20080623084216" -->
<!-- sent="Mon, 23 Jun 2008 11:42:07 +0300" -->
<!-- isosent="20080623084207" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BW benchmark hangs after r 18551" -->
<!-- id="453d39990806230142g7e0603bahfc887fcb4988734e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990806190737m46b76e4dg53c0de93766b7fdb_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-06-23 04:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4197.php">Adrian Knoth: "Re: [OMPI devel] multiple GigE interfaces..."</a>
<li><strong>Previous message:</strong> <a href="4195.php">Jeff Squyres: "[OMPI devel] Fwd: Create success (r1.3a1r18704)"</a>
<li><strong>In reply to:</strong> <a href="4165.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Seqf bug fixed in r18706.
<br>
<p>Best Regards
<br>
Lenny.
<br>
On Thu, Jun 19, 2008 at 5:37 PM, Lenny Verkhovsky &lt;
<br>
lenny.verkhovsky_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry,
</span><br>
<span class="quotelev1">&gt; I checked it without sm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pls ignore this mail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 19, 2008 at 4:32 PM, Lenny Verkhovsky &lt;
</span><br>
<span class="quotelev1">&gt; lenny.verkhovsky_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I found what caused the problem in both cases.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/btl/sm/btl_sm.c    (revision 18675)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/btl/sm/btl_sm.c    (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -812,7 +812,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;       */
</span><br>
<span class="quotelev2">&gt;&gt;      MCA_BTL_SM_FIFO_WRITE(endpoint, endpoint-&gt;my_smp_rank,
</span><br>
<span class="quotelev2">&gt;&gt;                            endpoint-&gt;peer_smp_rank, frag-&gt;hdr, false, rc);
</span><br>
<span class="quotelev2">&gt;&gt; -    return (rc &lt; 0 ? rc : 1);
</span><br>
<span class="quotelev2">&gt;&gt; +   return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt; I am just not sure if it's OK.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;   On Wed, Jun 18, 2008 at 3:21 PM, Lenny Verkhovsky &lt;
</span><br>
<span class="quotelev2">&gt;&gt; lenny.verkhovsky_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not sure if it related,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I applied your patch ( r18667 )  to r 18656 ( one before NUMA )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; together with disabling sendi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The result still the same ( hanging ).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  On Tue, Jun 17, 2008 at 2:10 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lenny,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I guess you're running the latest version. If not, please update, Galen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and myself corrected some bugs last week. If you're using the latest (and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; greatest) then ... well I imagine there is at least one bug left.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is a quick test you can do. In the btl_sm.c in the module
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; structure at the beginning of the file, please replace the sendi function by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NULL. If this fix the problem, then at least we know that it's a sm send
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; immediate problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 17, 2008, at 7:54 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, George,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have a problem running BW benchmark on 100 rank cluster after r18551.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The BW is mpi_p that runs mpi_bandwidth with 100K between all pairs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #mpirun -np 100 -hostfile hostfile_w  ./mpi_p_18549 -t bw -s 100000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; BW (100) (size min max avg)  100000     576.734030      2001.882416
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1062.698408
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #mpirun -np 100 -hostfile hostfile_w ./mpi_p_18551 -t bw -s 100000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ( it hangs even after 10 hours ).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It doesn't happen if I run --bynode or btl openib,self only.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4196/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4197.php">Adrian Knoth: "Re: [OMPI devel] multiple GigE interfaces..."</a>
<li><strong>Previous message:</strong> <a href="4195.php">Jeff Squyres: "[OMPI devel] Fwd: Create success (r1.3a1r18704)"</a>
<li><strong>In reply to:</strong> <a href="4165.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
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
