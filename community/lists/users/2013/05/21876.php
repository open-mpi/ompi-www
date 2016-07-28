<?
$subject_val = "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 12:05:12 2013" -->
<!-- isoreceived="20130507160512" -->
<!-- sent="Tue, 07 May 2013 17:04:28 +0100" -->
<!-- isosent="20130507160428" -->
<!-- name="Angel de Vicente" -->
<!-- email="angelv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers" -->
<!-- id="yegzjw67p4j.fsf_at_carro.ll.iac.es" -->
<!-- charset="utf-8" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F60C38B_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers<br>
<strong>From:</strong> Angel de Vicente (<em>angelv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 12:04:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21877.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to	run	MPI	code across computers"</a>
<li><strong>Previous message:</strong> <a href="21875.php">Ralph Castain: "Re: [OMPI users] Building Open MPI with LSF"</a>
<li><strong>In reply to:</strong> <a href="21872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21877.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to	run	MPI	code across computers"</a>
<li><strong>Reply:</strong> <a href="21877.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to	run	MPI	code across computers"</a>
<li><strong>Reply:</strong> <a href="21878.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<span class="quotelev1">&gt; The list of names in the hostfile specifies the servers that will be used, not the network interfaces.  Have a look at the TCP portion of the FAQ:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=tcp">http://www.open-mpi.org/faq/?category=tcp</a>
</span><br>
<p>Thanks a lot for this. 
<br>
<p>Now it works OK if I run it like 
<br>
<p>[angelv_at_comer RTI2D.Parallel]$ mpiexec -loadbalance --mca
<br>
btl_tcp_if_include p1p1  -prefix $OMPI_PREFIX -hostfile $MPI_HOSTS -n 4
<br>
../../../mancha2D_mpi_h5fc.x\
<br>
&nbsp;mancha.trol
<br>
<p>But, the FAQ seems to be wrong, since it also says that I should be able
<br>
to run like:
<br>
<p>[angelv_at_comer RTI2D.Parallel]$ mpiexec -loadbalance --mca
<br>
btl_tcp_if_include 192.168.1.x/24  -prefix $OMPI_PREFIX -hostfile
<br>
$MPI_HOSTS -n 4 ../../../mancha2D_\
<br>
mpi_h5fc.x mancha.trol
<br>
<p>but then I get the following error:
<br>
<p>--------------------------------------------------------------------------
<br>
WARNING: An invalid value was given for btl_tcp_if_include.  This
<br>
value will be ignored.
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Local host: catar
<br>
&nbsp;&nbsp;Value:      192.168.1.x/24
<br>
&nbsp;&nbsp;Message:    Invalid specification (inet_pton() failed)
<br>
--------------------------------------------------------------------------
<br>
<p>If I specify the subnet as 192.168.1.0/24 all is in order.
<br>
<p>I'm running 1.6.4:
<br>
<p>[angelv_at_comer RTI2D.Parallel]$ ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI angelv_at_comer Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.4
<br>
<p><p>Thanks,
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
<li><strong>Next message:</strong> <a href="21877.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to	run	MPI	code across computers"</a>
<li><strong>Previous message:</strong> <a href="21875.php">Ralph Castain: "Re: [OMPI users] Building Open MPI with LSF"</a>
<li><strong>In reply to:</strong> <a href="21872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21877.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to	run	MPI	code across computers"</a>
<li><strong>Reply:</strong> <a href="21877.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to	run	MPI	code across computers"</a>
<li><strong>Reply:</strong> <a href="21878.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers"</a>
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
