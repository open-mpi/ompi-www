<?
$subject_val = "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 18:09:24 2016" -->
<!-- isoreceived="20160505220924" -->
<!-- sent="Thu, 5 May 2016 16:09:23 -0600" -->
<!-- isosent="20160505220923" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1" -->
<!-- id="20160505220922.GJ42233_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="572BC387.7010700_at_hpe.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 18:09:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29103.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29101.php">Andy Riebs: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>In reply to:</strong> <a href="29101.php">Andy Riebs: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29104.php">Andy Riebs: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>Reply:</strong> <a href="29104.php">Andy Riebs: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It should work fine with ob1 (the default). Did you determine what was
<br>
causing it to fail?
<br>
<p>-Nathan
<br>
<p>On Thu, May 05, 2016 at 06:04:55PM -0400, Andy Riebs wrote:
<br>
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
<span class="quotelev1">&gt;      On Thu, May 5, 2016 at 7:32 AM, Andy Riebs &lt;andy.riebs_at_[hidden]&gt; wrote:
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
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29101.php">http://www.open-mpi.org/community/lists/users/2016/05/29101.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29102/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29103.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29101.php">Andy Riebs: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>In reply to:</strong> <a href="29101.php">Andy Riebs: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29104.php">Andy Riebs: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>Reply:</strong> <a href="29104.php">Andy Riebs: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
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
