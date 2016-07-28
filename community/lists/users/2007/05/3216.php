<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 03:25:03 2007" -->
<!-- isoreceived="20070509072503" -->
<!-- sent="Wed, 09 May 2007 09:24:56 +0200" -->
<!-- isosent="20070509072456" -->
<!-- name="Boris Bierbaum" -->
<!-- email="boris_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work" -->
<!-- id="46417748.4020602_at_lfbs.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1178655353.11455.14.camel_at_stevo-desktop" -->
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
<strong>Date:</strong> 2007-05-09 03:24:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3217.php">Kevin Radican: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Previous message:</strong> <a href="3215.php">Brock Palen: "Re: [OMPI users] Newbie question. Please help."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3218.php">Andrew Friedley: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>Reply:</strong> <a href="3218.php">Andrew Friedley: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It has been explained in a different thread on [ofa-general] that the
<br>
problem lies in a combination of the OpenIB-cma provider not setting the
<br>
local and remote port numbers on endpoints correctly and Open MPI
<br>
stepping over the IA to save the port number to circumvent this problem,
<br>
thereby confusing the provider.
<br>
<p>I commented out line 197 in ompi/mca/btl/udapl/btl_udapl.c (Open MPI
<br>
1.2.1 release) and this fixes the problem. As the problem in the
<br>
provider is currently being fixed, the whole saving of the port number
<br>
in the uDAPL BTL code will be unnecessary in the future.
<br>
<p>Steve Wise wrote:
<br>
<span class="quotelev3">&gt;&gt;&gt; Can the UDAPL OFED wizards shed any light on the error messages that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are listed below?  In particular, these seem to be worrysome:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  setup_listener Address already in use
</span><br>
<span class="quotelev2">&gt;&gt; These failures are from rdma_cm_bind indicating the port is already 
</span><br>
<span class="quotelev2">&gt;&gt; bound to this IA address. How are you creating the service point?
</span><br>
<span class="quotelev2">&gt;&gt; dat_psp_create or dat_psp_create_any? If it is psp_create_any then you 
</span><br>
<span class="quotelev2">&gt;&gt; will see some failures until it  gets to a free port. That is normal. 
</span><br>
<span class="quotelev2">&gt;&gt; Just make sure your create call returns DAT_SUCCESS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Arlin, why doesn't dapl_psp_create_any() just pass a port of zero down
</span><br>
<span class="quotelev1">&gt; and let the rdma-cma pick an available port number?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; general mailing list
</span><br>
<span class="quotelev1">&gt; general_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general">http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To unsubscribe, please visit <a href="http://openib.org/mailman/listinfo/openib-general">http://openib.org/mailman/listinfo/openib-general</a>
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
<li><strong>Next message:</strong> <a href="3217.php">Kevin Radican: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Previous message:</strong> <a href="3215.php">Brock Palen: "Re: [OMPI users] Newbie question. Please help."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3218.php">Andrew Friedley: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>Reply:</strong> <a href="3218.php">Andrew Friedley: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
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
