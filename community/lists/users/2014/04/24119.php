<?
$subject_val = "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 18:59:19 2014" -->
<!-- isoreceived="20140408225919" -->
<!-- sent="Wed, 9 Apr 2014 06:59:18 +0800" -->
<!-- isosent="20140408225918" -->
<!-- name="Anthony Alba" -->
<!-- email="ascanio.alba7_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify" -->
<!-- id="CADkWibdDU5Mb70WH7QpYFftXXnSnxtSfeaKXFVz=rvqwRx=dzg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A3ED2FB5F_at_MTIDAG01.mtl.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify<br>
<strong>From:</strong> Anthony Alba (<em>ascanio.alba7_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-08 18:59:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24120.php">Zehan Cui: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Previous message:</strong> <a href="24118.php">Daniel Milroy: "[OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="24112.php">Joshua Ladd: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol	hcoll_group_destroy_notify"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24121.php">Anthony Alba: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Joshua,
<br>
I am running MOFED 2.1-1.0.6 and self-compiled openmpi-1.8 using
<br>
--with-hcoll.
<br>
<p>The symbol is in 1.8 source but not exported by MOFED
<br>
/opt/mellanox/hcoll/lib*
<br>
On 8 Apr 2014 21:47, &quot;Joshua Ladd&quot; &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What MOFED version are you running?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users [mailto:users-bounces_at_[hidden]] *On Behalf Of *Anthony
</span><br>
<span class="quotelev1">&gt; Alba
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, April 08, 2014 4:53 AM
</span><br>
<span class="quotelev1">&gt; *To:* users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI users] mca_coll_hcoll.so: undefined symbol
</span><br>
<span class="quotelev1">&gt; hcoll_group_destroy_notify
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ran into a problem running the openshmem examples/ using OpenMPI 1.8
</span><br>
<span class="quotelev1">&gt; compiled with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --with-knem=/opt/knem-1.1.90mlnx2 --with-hcoll=/opt/mellanox/hcoll
</span><br>
<span class="quotelev1">&gt; --with-mxm=/opt/mellanox/mxm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --with-fca=/opt/mellanox/fca
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lib/openmpi/mca_coll_hcoll.so has undefined symbol
</span><br>
<span class="quotelev1">&gt; hcoll_group_destroy_notify
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't find this symbol anywere. The Mellanox libraries
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/*so don't export
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this symbol. hcoll is v2.0.472.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is used in ompi/mca/coll/hcoll/coll_hcoll_module.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int hcoll_comm_attr_del_fn(MPI_Comm comm, int keyval, void *attr_val, void
</span><br>
<span class="quotelev1">&gt; *extra)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mca_coll_hcoll_module_t *hcoll_module;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hcoll_module = (mca_coll_hcoll_module_t*) attr_val;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hcoll_group_destroy_notify(hcoll_module-&gt;hcoll_context);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24119/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24120.php">Zehan Cui: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Previous message:</strong> <a href="24118.php">Daniel Milroy: "[OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="24112.php">Joshua Ladd: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol	hcoll_group_destroy_notify"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24121.php">Anthony Alba: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify"</a>
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
