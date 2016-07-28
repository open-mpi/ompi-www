<?
$subject_val = "Re: [OMPI users] Problem moving from 1.4 to 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 28 11:10:58 2014" -->
<!-- isoreceived="20140628151058" -->
<!-- sent="Sat, 28 Jun 2014 15:10:55 +0000" -->
<!-- isosent="20140628151055" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem moving from 1.4 to 1.6" -->
<!-- id="89A8B88C-CF76-4BE3-B61A-F2BAF2F07087_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="58B39D55-78D5-482F-A079-0B3B9263F82D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem moving from 1.4 to 1.6<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-28 11:10:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24729.php">Đỗ Mai Anh Tú: "[OMPI users] Missing -enable-crdebug option in configure step"</a>
<li><strong>Previous message:</strong> <a href="24727.php">Ralph Castain: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>In reply to:</strong> <a href="24727.php">Ralph Castain: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24731.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might well be able to:
<br>
<p>&nbsp;&nbsp;mpirun --mca btl ^openib,udapl ...
<br>
<p>Which excludes both openib and udapl (both of which used the same librdmacm).
<br>
<p>If this doesn't solve the problem, then please send the info Ralph asked for, and we'll dig deeper...
<br>
<p><p>On Jun 27, 2014, at 3:41 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Let me steer you on a different course. Can you run &quot;ompi_info&quot; and paste the output here? It looks to me like someone installed a version that includes uDAPL support, so you may have to disable some additional things to get it to run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 27, 2014, at 9:53 AM, Jeffrey A Cummings &lt;Jeffrey.A.Cummings_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have recently upgraded our cluster to a version of Linux which comes with openMPI version 1.6.2. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; An application which ran previously (using some version of 1.4) now errors out with the following messages: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         librdmacm: Fatal: no RDMA devices found 
</span><br>
<span class="quotelev2">&gt;&gt;         librdmacm: Fatal: no RDMA devices found 
</span><br>
<span class="quotelev2">&gt;&gt;         librdmacm: Fatal: no RDMA devices found 
</span><br>
<span class="quotelev2">&gt;&gt;         -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;         WARNING: Failed to open &quot;OpenIB-cma&quot; [DAT_INTERNAL_ERROR:]. 
</span><br>
<span class="quotelev2">&gt;&gt;         This may be a real error or it may be an invalid entry in the uDAPL 
</span><br>
<span class="quotelev2">&gt;&gt;         Registry which is contained in the dat.conf file. Contact your local 
</span><br>
<span class="quotelev2">&gt;&gt;         System Administrator to confirm the availability of the interfaces in 
</span><br>
<span class="quotelev2">&gt;&gt;         the dat.conf file. 
</span><br>
<span class="quotelev2">&gt;&gt;         -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;         [tupile:25363] 2 more processes have sent help message help-mpi-btl-udapl.txt / dat_ia_open fail 
</span><br>
<span class="quotelev2">&gt;&gt;         [tupile:25363] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The mpirun command line contains the argument '--mca btl ^openib', which I thought told mpi to not look for the ib interface. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone suggest what the problem might be?  Did the relevant syntax change between versions 1.4 and 1.6? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeffrey A. Cummings
</span><br>
<span class="quotelev2">&gt;&gt; Engineering Specialist
</span><br>
<span class="quotelev2">&gt;&gt; Performance Modeling and Analysis Department
</span><br>
<span class="quotelev2">&gt;&gt; Systems Analysis and Simulation Subdivision
</span><br>
<span class="quotelev2">&gt;&gt; Systems Engineering Division
</span><br>
<span class="quotelev2">&gt;&gt; Engineering and Technology Group
</span><br>
<span class="quotelev2">&gt;&gt; The Aerospace Corporation
</span><br>
<span class="quotelev2">&gt;&gt; 571-307-4220
</span><br>
<span class="quotelev2">&gt;&gt; jeffrey.a.cummings_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24721.php">http://www.open-mpi.org/community/lists/users/2014/06/24721.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24727.php">http://www.open-mpi.org/community/lists/users/2014/06/24727.php</a>
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
<li><strong>Next message:</strong> <a href="24729.php">Đỗ Mai Anh Tú: "[OMPI users] Missing -enable-crdebug option in configure step"</a>
<li><strong>Previous message:</strong> <a href="24727.php">Ralph Castain: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>In reply to:</strong> <a href="24727.php">Ralph Castain: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24731.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
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
