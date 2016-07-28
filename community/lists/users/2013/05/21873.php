<?
$subject_val = "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 11:44:47 2013" -->
<!-- isoreceived="20130507154447" -->
<!-- sent="Tue, 7 May 2013 08:44:40 -0700" -->
<!-- isosent="20130507154440" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers" -->
<!-- id="28C9E1A5-6375-40A5-B99A-94662E522DCD_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="yeg8v3q95hk.fsf_at_carro.ll.iac.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 11:44:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21874.php">Ralph Castain: "Re: [OMPI users] Problems with building with VS 2010 and VS 2012"</a>
<li><strong>Previous message:</strong> <a href="21872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers"</a>
<li><strong>In reply to:</strong> <a href="21871.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Look at the MCA params btl_tcp_if_include and btl_tcp_if_exclude. Either include the internal network (to restrict to *only* using that one), or exclude the public one
<br>
<p><p>On May 7, 2013, at 8:25 AM, Angel de Vicente &lt;angelv_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Angel de Vicente &lt;angelv_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt; yes, that's just what I did with orted. I saw the port that it was
</span><br>
<span class="quotelev2">&gt;&gt; trying to connect and telnet to it, and I got &quot;No route to host&quot;, so
</span><br>
<span class="quotelev2">&gt;&gt; that's why I was going the firewall path. Hopefully the sysadmins can
</span><br>
<span class="quotelev2">&gt;&gt; disable the firewall for the internal network today, and I can see if
</span><br>
<span class="quotelev2">&gt;&gt; that solves the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, removing the firewall for the private network improved things a
</span><br>
<span class="quotelev1">&gt; lot. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A simple &quot;Hello World&quot; seems to work without issues, but if I run my
</span><br>
<span class="quotelev1">&gt; code, I have a problem like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [angelv_at_comer RTI2D.Parallel]$ mpiexec -prefix $OMPI_PREFIX -hostfile
</span><br>
<span class="quotelev1">&gt; $MPI_HOSTS -n 10 ../../../mancha2D_mpi_h5fc.x mancha.trol
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [comer][[58110,1],0][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 161.72.206.3 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [comer][[58110,1],1][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; [comer][[58110,1],3][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 161.72.206.3 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; connect() to 161.72.206.3 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [comer][[58110,1],1][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 161.72.206.3 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [comer][[58110,1],2][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 161.72.206.3 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But MPI_HOSTS points to a file with 
</span><br>
<span class="quotelev1">&gt; $ cat /net/nas7/polar/minicluster/machinefile-openmpi
</span><br>
<span class="quotelev1">&gt; c0 slots=5
</span><br>
<span class="quotelev1">&gt; c1 slots=5
</span><br>
<span class="quotelev1">&gt; c2 slots=5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; c0, c1, and c2 are the names of the machines in the internal network,
</span><br>
<span class="quotelev1">&gt; but for some reason it is using the public interfaces and complaining
</span><br>
<span class="quotelev1">&gt; (the firewall in those is still active). I thought just specifying the
</span><br>
<span class="quotelev1">&gt; names of the machines in the machinefile would make sure that we were
</span><br>
<span class="quotelev1">&gt; using the right interface... 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help? Thanks,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &#193;ngel de Vicente
</span><br>
<span class="quotelev1">&gt; <a href="http://angel-de-vicente.blogspot.com/">http://angel-de-vicente.blogspot.com/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21874.php">Ralph Castain: "Re: [OMPI users] Problems with building with VS 2010 and VS 2012"</a>
<li><strong>Previous message:</strong> <a href="21872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers"</a>
<li><strong>In reply to:</strong> <a href="21871.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
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
