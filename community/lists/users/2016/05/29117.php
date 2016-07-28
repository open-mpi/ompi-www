<?
$subject_val = "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 08:30:34 2016" -->
<!-- isoreceived="20160506123034" -->
<!-- sent="Fri, 6 May 2016 08:30:23 -0400" -->
<!-- isosent="20160506123023" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1" -->
<!-- id="CAG4F6z8oy8-eqo3T7ekHejPVsKZFnuhS+FVjEOc6czOhjb1OYg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="572BEDFB.3040507_at_hpe.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 08:30:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29118.php">Joshua Ladd: "Re: [OMPI users] SLOAVx alltoallv"</a>
<li><strong>Previous message:</strong> <a href="29116.php">Dave Love: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>In reply to:</strong> <a href="29104.php">Andy Riebs: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
They had a port configured for Ethernet and did not exclude it. OpenIB
<br>
emits a warning about not finding a suitable CPC.
<br>
<p>Josh
<br>
<p>On Thu, May 5, 2016 at 9:06 PM, Andy Riebs &lt;andy.riebs_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, my output listing was incomplete -- the program did run after the
</span><br>
<span class="quotelev1">&gt; &quot;No OpenFabrics&quot; message, but (I presume) ran over Ethernet rather than
</span><br>
<span class="quotelev1">&gt; InfiniBand. So I can't really say what was causing it to fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 05/05/2016 06:09 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should work fine with ob1 (the default). Did you determine what was
</span><br>
<span class="quotelev1">&gt; causing it to fail?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, May 05, 2016 at 06:04:55PM -0400, Andy Riebs wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    For anyone like me who happens to google this in the future, the solution
</span><br>
<span class="quotelev1">&gt;    was to set OMPI_MCA_pml=yalla
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Many thanks Josh!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    On 05/05/2016 12:52 PM, Joshua Ladd wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      We are working with Andy offline.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Josh
</span><br>
<span class="quotelev1">&gt;      On Thu, May 5, 2016 at 7:32 AM, Andy Riebs &lt;andy.riebs_at_[hidden]&gt; &lt;andy.riebs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        I've built 1.10.2 with all my favorite configuration options, but I
</span><br>
<span class="quotelev1">&gt;        get messages such as this (one for each rank with
</span><br>
<span class="quotelev1">&gt;        orte_base_help_aggregate=0) when I try to run on a MOFED system:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        $ shmemrun -H hades02,hades03 $PWD/shmem.out
</span><br>
<span class="quotelev1">&gt;        --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        No OpenFabrics connection schemes reported that they were able to be
</span><br>
<span class="quotelev1">&gt;        used on a specific port.  As such, the openib BTL (OpenFabrics
</span><br>
<span class="quotelev1">&gt;        support) will be disabled for this port.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          Local host:           hades03
</span><br>
<span class="quotelev1">&gt;          Local device:         mlx4_0
</span><br>
<span class="quotelev1">&gt;          Local port:           2
</span><br>
<span class="quotelev1">&gt;          CPCs attempted:       rdmacm, udcm
</span><br>
<span class="quotelev1">&gt;        --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        My configure options:
</span><br>
<span class="quotelev1">&gt;        config_opts=&quot;--prefix=${INSTALL_DIR} \
</span><br>
<span class="quotelev1">&gt;                --without-mpi-param-check \
</span><br>
<span class="quotelev1">&gt;                --with-knem=/opt/mellanox/hpcx/knem \
</span><br>
<span class="quotelev1">&gt;                --with-mxm=/opt/mellanox/mxm  \
</span><br>
<span class="quotelev1">&gt;                --with-mxm-libdir=/opt/mellanox/mxm/lib \
</span><br>
<span class="quotelev1">&gt;                --with-fca=/opt/mellanox/fca \
</span><br>
<span class="quotelev1">&gt;                --with-pmi=${INSTALL_ROOT}/slurm \
</span><br>
<span class="quotelev1">&gt;                --without-psm --disable-dlopen \
</span><br>
<span class="quotelev1">&gt;                --disable-vt \
</span><br>
<span class="quotelev1">&gt;                --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;                --enable-debug-symbols&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        There aren't any obvious error messages in the build log -- what am I
</span><br>
<span class="quotelev1">&gt;        missing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Andy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        --
</span><br>
<span class="quotelev1">&gt;        Andy Riebs
</span><br>
<span class="quotelev1">&gt;        andy.riebs_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        Hewlett-Packard Enterprise
</span><br>
<span class="quotelev1">&gt;        High Performance Computing Software Engineering
</span><br>
<span class="quotelev1">&gt;        +1 404 648 9024
</span><br>
<span class="quotelev1">&gt;        My opinions are not necessarily those of HPE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        _______________________________________________
</span><br>
<span class="quotelev1">&gt;        users mailing list
</span><br>
<span class="quotelev1">&gt;        users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;        Link to this post:
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/community/lists/users/2016/05/29094.php">http://www.open-mpi.org/community/lists/users/2016/05/29094.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29100.php">http://www.open-mpi.org/community/lists/users/2016/05/29100.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29101.php">http://www.open-mpi.org/community/lists/users/2016/05/29101.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29102.php">http://www.open-mpi.org/community/lists/users/2016/05/29102.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29104.php">http://www.open-mpi.org/community/lists/users/2016/05/29104.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29117/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29118.php">Joshua Ladd: "Re: [OMPI users] SLOAVx alltoallv"</a>
<li><strong>Previous message:</strong> <a href="29116.php">Dave Love: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>In reply to:</strong> <a href="29104.php">Andy Riebs: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
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
