<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 09:13:26 2007" -->
<!-- isoreceived="20070509131326" -->
<!-- sent="Wed, 09 May 2007 09:13:19 -0400" -->
<!-- isosent="20070509131319" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work" -->
<!-- id="4641C8EF.5080709_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46417748.4020602_at_lfbs.rwth-aachen.de" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-09 09:13:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3219.php">Boris Bierbaum: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3217.php">Kevin Radican: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>In reply to:</strong> <a href="3216.php">Boris Bierbaum: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3219.php">Boris Bierbaum: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>Reply:</strong> <a href="3219.php">Boris Bierbaum: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You say that fixes the problem, does it work even when running more than 
<br>
one MPI process per node? (that is the case the hack fixes)  Simply 
<br>
doing an mpirun with a -np paremeter higher than the number of nodes you 
<br>
have set up should trigger this case, and making sure to use '-mca btl 
<br>
udapl,self' (ie not SM or anything else).
<br>
<p>Andrew
<br>
<p>Boris Bierbaum wrote:
<br>
<span class="quotelev1">&gt; It has been explained in a different thread on [ofa-general] that the
</span><br>
<span class="quotelev1">&gt; problem lies in a combination of the OpenIB-cma provider not setting the
</span><br>
<span class="quotelev1">&gt; local and remote port numbers on endpoints correctly and Open MPI
</span><br>
<span class="quotelev1">&gt; stepping over the IA to save the port number to circumvent this problem,
</span><br>
<span class="quotelev1">&gt; thereby confusing the provider.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I commented out line 197 in ompi/mca/btl/udapl/btl_udapl.c (Open MPI
</span><br>
<span class="quotelev1">&gt; 1.2.1 release) and this fixes the problem. As the problem in the
</span><br>
<span class="quotelev1">&gt; provider is currently being fixed, the whole saving of the port number
</span><br>
<span class="quotelev1">&gt; in the uDAPL BTL code will be unnecessary in the future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Steve Wise wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can the UDAPL OFED wizards shed any light on the error messages that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are listed below?  In particular, these seem to be worrysome:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  setup_listener Address already in use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; These failures are from rdma_cm_bind indicating the port is already 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bound to this IA address. How are you creating the service point?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dat_psp_create or dat_psp_create_any? If it is psp_create_any then you 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will see some failures until it  gets to a free port. That is normal. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just make sure your create call returns DAT_SUCCESS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Arlin, why doesn't dapl_psp_create_any() just pass a port of zero down
</span><br>
<span class="quotelev2">&gt;&gt; and let the rdma-cma pick an available port number?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; general mailing list
</span><br>
<span class="quotelev2">&gt;&gt; general_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general">http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To unsubscribe, please visit <a href="http://openib.org/mailman/listinfo/openib-general">http://openib.org/mailman/listinfo/openib-general</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3219.php">Boris Bierbaum: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3217.php">Kevin Radican: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>In reply to:</strong> <a href="3216.php">Boris Bierbaum: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3219.php">Boris Bierbaum: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>Reply:</strong> <a href="3219.php">Boris Bierbaum: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
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
