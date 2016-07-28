<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 12 09:08:25 2007" -->
<!-- isoreceived="20070212140825" -->
<!-- sent="Mon, 12 Feb 2007 08:56:25 -0500" -->
<!-- isosent="20070212135625" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111" -->
<!-- id="4F41D48F-93F4-4EDE-81AE-06AC4C081095_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1171226729.45cf806971700_at_imapwww.epfl.ch" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-12 08:56:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2668.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="2666.php">matteo.guglielmi_at_[hidden]: "[OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="2666.php">matteo.guglielmi_at_[hidden]: "[OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2668.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="2668.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm assuming that these are Linux hosts.  If so, errno 111 is  
<br>
&quot;connection refused&quot; possibly meaning that there is still some  
<br>
firewall active or the wrong interface is being used to establish  
<br>
connections between these machines.
<br>
<p>Can you send the output of &quot;ifconfig&quot; (might be /sbin/ifconfig on  
<br>
your machine?) from both machines?
<br>
<p><p>On Feb 11, 2007, at 3:45 PM, matteo.guglielmi_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Since I've installed openmpi I cannot submit any job that uses cpus  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; different machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ### hostfile ###
</span><br>
<span class="quotelev1">&gt; lcbcpc02.epfl.ch slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt; lcbcpc04.epfl.ch slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt; ################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ### error message ###
</span><br>
<span class="quotelev1">&gt; [matteo_at_lcbcpc02 TEST]$ mpirun --hostfile ~matteo/hostfile -np 8
</span><br>
<span class="quotelev1">&gt; /home/matteo/Software/NWChem/5.0/bin/nwchem ./nwchem.nw
</span><br>
<span class="quotelev1">&gt; [0,1,5][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; [0,1,6][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=111
</span><br>
<span class="quotelev1">&gt; 6: lcbcpc04.epfl.ch len=16
</span><br>
<span class="quotelev1">&gt; [0,1,4][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=111
</span><br>
<span class="quotelev1">&gt; 4: lcbcpc04.epfl.ch len=16
</span><br>
<span class="quotelev1">&gt; [0,1,7][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=111
</span><br>
<span class="quotelev1">&gt; 7: lcbcpc04.epfl.ch len=16
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=111
</span><br>
<span class="quotelev1">&gt; 5: lcbcpc04.epfl.ch len=16
</span><br>
<span class="quotelev1">&gt; #####################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did disable the firewall on both machines but I still get that  
</span><br>
<span class="quotelev1">&gt; error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; MG.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2668.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="2666.php">matteo.guglielmi_at_[hidden]: "[OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="2666.php">matteo.guglielmi_at_[hidden]: "[OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2668.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="2668.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
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
