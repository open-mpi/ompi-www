<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 09:50:38 2007" -->
<!-- isoreceived="20070509135038" -->
<!-- sent="Wed, 09 May 2007 15:50:30 +0200" -->
<!-- isosent="20070509135030" -->
<!-- name="Boris Bierbaum" -->
<!-- email="boris_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work" -->
<!-- id="4641D1A6.30603_at_lfbs.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4641C8EF.5080709_at_open-mpi.org" -->
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
<strong>From:</strong> Boris Bierbaum (<em>boris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-09 09:50:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3220.php">Andrew Friedley: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3218.php">Andrew Friedley: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>In reply to:</strong> <a href="3218.php">Andrew Friedley: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3220.php">Andrew Friedley: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>Reply:</strong> <a href="3220.php">Andrew Friedley: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've run the whole IMB Benchmark Suite on 2, 3, and 4 nodes with 2
<br>
processes per node and --mca btl udapl,self. I didn't encouter any problems.
<br>
<p>The comment above line 197 says that dat_ep_query() returns wrong port
<br>
numbers (which it does indeed), but I can't find any call to
<br>
dat_ep_query() in the uDAPL BTL code. Maybe the comment is out of date?
<br>
<p>Boris
<br>
<p><p>Andrew Friedley wrote:
<br>
<span class="quotelev1">&gt; You say that fixes the problem, does it work even when running more than 
</span><br>
<span class="quotelev1">&gt; one MPI process per node? (that is the case the hack fixes)  Simply 
</span><br>
<span class="quotelev1">&gt; doing an mpirun with a -np paremeter higher than the number of nodes you 
</span><br>
<span class="quotelev1">&gt; have set up should trigger this case, and making sure to use '-mca btl 
</span><br>
<span class="quotelev1">&gt; udapl,self' (ie not SM or anything else).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Boris Bierbaum wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It has been explained in a different thread on [ofa-general] that the
</span><br>
<span class="quotelev2">&gt;&gt; problem lies in a combination of the OpenIB-cma provider not setting the
</span><br>
<span class="quotelev2">&gt;&gt; local and remote port numbers on endpoints correctly and Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; stepping over the IA to save the port number to circumvent this problem,
</span><br>
<span class="quotelev2">&gt;&gt; thereby confusing the provider.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I commented out line 197 in ompi/mca/btl/udapl/btl_udapl.c (Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.1 release) and this fixes the problem. As the problem in the
</span><br>
<span class="quotelev2">&gt;&gt; provider is currently being fixed, the whole saving of the port number
</span><br>
<span class="quotelev2">&gt;&gt; in the uDAPL BTL code will be unnecessary in the future.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can the UDAPL OFED wizards shed any light on the error messages that  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are listed below?  In particular, these seem to be worrysome:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  setup_listener Address already in use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; These failures are from rdma_cm_bind indicating the port is already 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bound to this IA address. How are you creating the service point?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dat_psp_create or dat_psp_create_any? If it is psp_create_any then you 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will see some failures until it  gets to a free port. That is normal. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just make sure your create call returns DAT_SUCCESS.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Arlin, why doesn't dapl_psp_create_any() just pass a port of zero down
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and let the rdma-cma pick an available port number?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; general mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; general_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general">http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To unsubscribe, please visit <a href="http://openib.org/mailman/listinfo/openib-general">http://openib.org/mailman/listinfo/openib-general</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
|  _  RWTH | Boris Bierbaum
|_|_`_     | Lehrstuhl fuer Betriebssysteme
   | |_) _  | RWTH Aachen D-52056 Aachen
     |_)(_` | Tel: +49-241-80-27805
        ._) | Fax: +49-241-80-22339
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3220.php">Andrew Friedley: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3218.php">Andrew Friedley: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>In reply to:</strong> <a href="3218.php">Andrew Friedley: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3220.php">Andrew Friedley: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>Reply:</strong> <a href="3220.php">Andrew Friedley: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
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
