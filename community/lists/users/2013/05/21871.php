<?
$subject_val = "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 11:26:26 2013" -->
<!-- isoreceived="20130507152626" -->
<!-- sent="Tue, 07 May 2013 16:25:43 +0100" -->
<!-- isosent="20130507152543" -->
<!-- name="Angel de Vicente" -->
<!-- email="angelv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers" -->
<!-- id="yeg8v3q95hk.fsf_at_carro.ll.iac.es" -->
<!-- charset="utf-8" -->
<!-- inreplyto="yegehdjl6qq.fsf_at_carro.ll.iac.es" -->
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
<strong>From:</strong> Angel de Vicente (<em>angelv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 11:25:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers"</a>
<li><strong>Previous message:</strong> <a href="21870.php">Nenad Vujicic: "[OMPI users] Problems with building with VS 2010 and VS 2012"</a>
<li><strong>In reply to:</strong> <a href="21857.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers"</a>
<li><strong>Reply:</strong> <a href="21872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers"</a>
<li><strong>Reply:</strong> <a href="21873.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>Angel de Vicente &lt;angelv_at_[hidden]&gt; writes:
<br>
<span class="quotelev1">&gt; yes, that's just what I did with orted. I saw the port that it was
</span><br>
<span class="quotelev1">&gt; trying to connect and telnet to it, and I got &quot;No route to host&quot;, so
</span><br>
<span class="quotelev1">&gt; that's why I was going the firewall path. Hopefully the sysadmins can
</span><br>
<span class="quotelev1">&gt; disable the firewall for the internal network today, and I can see if
</span><br>
<span class="quotelev1">&gt; that solves the issue.
</span><br>
<p>OK, removing the firewall for the private network improved things a
<br>
lot. 
<br>
<p>A simple &quot;Hello World&quot; seems to work without issues, but if I run my
<br>
code, I have a problem like this:
<br>
<p>[angelv_at_comer RTI2D.Parallel]$ mpiexec -prefix $OMPI_PREFIX -hostfile
<br>
$MPI_HOSTS -n 10 ../../../mancha2D_mpi_h5fc.x mancha.trol
<br>
<p>[...]
<br>
<p>[comer][[58110,1],0][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 161.72.206.3 failed: No route to host (113)
<br>
[comer][[58110,1],1][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
<br>
[comer][[58110,1],3][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 161.72.206.3 failed: No route to host (113)
<br>
connect() to 161.72.206.3 failed: No route to host (113)
<br>
[comer][[58110,1],1][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 161.72.206.3 failed: No route to host (113)
<br>
[comer][[58110,1],2][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 161.72.206.3 failed: No route to host (113)
<br>
<p>But MPI_HOSTS points to a file with 
<br>
$ cat /net/nas7/polar/minicluster/machinefile-openmpi
<br>
c0 slots=5
<br>
c1 slots=5
<br>
c2 slots=5
<br>
<p>c0, c1, and c2 are the names of the machines in the internal network,
<br>
but for some reason it is using the public interfaces and complaining
<br>
(the firewall in those is still active). I thought just specifying the
<br>
names of the machines in the machinefile would make sure that we were
<br>
using the right interface... 
<br>
<p>Any help? Thanks,
<br>
<pre>
-- 
&#195;&#129;ngel de Vicente
<a href="http://angel-de-vicente.blogspot.com/">http://angel-de-vicente.blogspot.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers"</a>
<li><strong>Previous message:</strong> <a href="21870.php">Nenad Vujicic: "[OMPI users] Problems with building with VS 2010 and VS 2012"</a>
<li><strong>In reply to:</strong> <a href="21857.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers"</a>
<li><strong>Reply:</strong> <a href="21872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers"</a>
<li><strong>Reply:</strong> <a href="21873.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
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
