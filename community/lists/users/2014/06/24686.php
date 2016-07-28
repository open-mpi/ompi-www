<?
$subject_val = "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 14:42:20 2014" -->
<!-- isoreceived="20140620184220" -->
<!-- sent="Fri, 20 Jun 2014 11:42:17 -0700" -->
<!-- isosent="20140620184217" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update." -->
<!-- id="DD6DC45D-2EBB-4D0E-BFDE-FD2C924E4BC0_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="0CDC5C0A257A5D40A5DCDC6E58F28E5EA62A74C820_at_KIT-MSX-07.kit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-20 14:42:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24687.php">Ivanov, Aleksandar (INR): "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error	after Infini-band stack update."</a>
<li><strong>Previous message:</strong> <a href="24685.php">Ivanov, Aleksandar (INR): "[OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>In reply to:</strong> <a href="24685.php">Ivanov, Aleksandar (INR): "[OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24687.php">Ivanov, Aleksandar (INR): "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error	after Infini-band stack update."</a>
<li><strong>Reply:</strong> <a href="24687.php">Ivanov, Aleksandar (INR): "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error	after Infini-band stack update."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What was updated? If the OS, did you remember to set the memory registration limits to max?
<br>
<p><p>On Jun 20, 2014, at 11:25 AM, Ivanov, Aleksandar (INR) &lt;aleksandar.ivanov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Dear Sir or Madam,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am using the openmpi 1.6.5 library compiled with IFORT / ICC 13.1.5. Since a recent update of our machine I started generating mpi errors. The code crashes after completing approx. 24 % from the total job. The same code and input were run before on the same machine and no such problems were ever observed. The actual error message is attached.
</span><br>
<span class="quotelev1">&gt; I presume that after the update an incompatibility between the infiniband-stack and the openmpi library might have been introduced. I think that the suggested  &#147;out of memory problem&#148; should not be causing the malfunction, since the application uses only 1GB of the total 32 GB available.  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I would appreciate your help and ideas how to clarify this issue.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thank you in advance
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Best Regards
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Aleksandar Ivanov
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;openmpi.log&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24685.php">http://www.open-mpi.org/community/lists/users/2014/06/24685.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24686/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24687.php">Ivanov, Aleksandar (INR): "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error	after Infini-band stack update."</a>
<li><strong>Previous message:</strong> <a href="24685.php">Ivanov, Aleksandar (INR): "[OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>In reply to:</strong> <a href="24685.php">Ivanov, Aleksandar (INR): "[OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24687.php">Ivanov, Aleksandar (INR): "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error	after Infini-band stack update."</a>
<li><strong>Reply:</strong> <a href="24687.php">Ivanov, Aleksandar (INR): "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error	after Infini-band stack update."</a>
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
