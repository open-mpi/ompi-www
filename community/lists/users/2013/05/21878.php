<?
$subject_val = "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 12:12:42 2013" -->
<!-- isoreceived="20130507161242" -->
<!-- sent="Tue, 7 May 2013 09:12:34 -0700" -->
<!-- isosent="20130507161234" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers" -->
<!-- id="006AD18A-BC72-48D3-8C8E-B112B67DC6B1_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="yegzjw67p4j.fsf_at_carro.ll.iac.es" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 12:12:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21879.php">Paul Kapinos: "Re: [OMPI users] Building Open MPI with LSF"</a>
<li><strong>Previous message:</strong> <a href="21877.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to	run	MPI	code across computers"</a>
<li><strong>In reply to:</strong> <a href="21876.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21873.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The FAQ assumes you realize that CIDR notation requires a value for the &quot;x&quot;... :-)
<br>
<p><p>On May 7, 2013, at 9:04 AM, Angel de Vicente &lt;angelv_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt; The list of names in the hostfile specifies the servers that will be used, not the network interfaces.  Have a look at the TCP portion of the FAQ:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/faq/?category=tcp">http://www.open-mpi.org/faq/?category=tcp</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot for this. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now it works OK if I run it like 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [angelv_at_comer RTI2D.Parallel]$ mpiexec -loadbalance --mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include p1p1  -prefix $OMPI_PREFIX -hostfile $MPI_HOSTS -n 4
</span><br>
<span class="quotelev1">&gt; ../../../mancha2D_mpi_h5fc.x\
</span><br>
<span class="quotelev1">&gt; mancha.trol
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, the FAQ seems to be wrong, since it also says that I should be able
</span><br>
<span class="quotelev1">&gt; to run like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [angelv_at_comer RTI2D.Parallel]$ mpiexec -loadbalance --mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include 192.168.1.x/24  -prefix $OMPI_PREFIX -hostfile
</span><br>
<span class="quotelev1">&gt; $MPI_HOSTS -n 4 ../../../mancha2D_\
</span><br>
<span class="quotelev1">&gt; mpi_h5fc.x mancha.trol
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but then I get the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: An invalid value was given for btl_tcp_if_include.  This
</span><br>
<span class="quotelev1">&gt; value will be ignored.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Local host: catar
</span><br>
<span class="quotelev1">&gt;  Value:      192.168.1.x/24
</span><br>
<span class="quotelev1">&gt;  Message:    Invalid specification (inet_pton() failed)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I specify the subnet as 192.168.1.0/24 all is in order.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running 1.6.4:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [angelv_at_comer RTI2D.Parallel]$ ompi_info
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI angelv_at_comer Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.6.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
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
<li><strong>Next message:</strong> <a href="21879.php">Paul Kapinos: "Re: [OMPI users] Building Open MPI with LSF"</a>
<li><strong>Previous message:</strong> <a href="21877.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to	run	MPI	code across computers"</a>
<li><strong>In reply to:</strong> <a href="21876.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run	MPI	code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21873.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
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
