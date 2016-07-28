<?
$subject_val = "Re: [OMPI users] NFS and openmpi through different NICs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 11:20:31 2009" -->
<!-- isoreceived="20091215162031" -->
<!-- sent="Tue, 15 Dec 2009 11:20:16 -0500" -->
<!-- isosent="20091215162016" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NFS and openmpi through different NICs" -->
<!-- id="4B27B740.7020803_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B2712C7.70400_at_duke.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] NFS and openmpi through different NICs<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-15 11:20:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11545.php">Dmitry Zaletnev: "[OMPI users] OpenFOAM fail to run under openmpi-1.3.3 on 2x Ubuntu 9.10 x64 Server"</a>
<li><strong>Previous message:</strong> <a href="11543.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>In reply to:</strong> <a href="11538.php">Bill Rankin: "Re: [OMPI users] NFS and openmpi through different NICs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11545.php">Dmitry Zaletnev: "[OMPI users] OpenFOAM fail to run under openmpi-1.3.3 on 2x Ubuntu 9.10 x64 Server"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dmitry
<br>
<p>Yes, we do it here.
<br>
<p>Besides Bill's recommendations
<br>
you can also use different host/interface names
<br>
for, say, eth0 and eth1, in /etc/hosts.
<br>
<p>Moreover, you should set OpenMPI to use only the specific
<br>
subnet/ports you want to dedicate to MPI, say, eth1.
<br>
See these faq:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=sysadmin#sysadmin-mca-params">http://www.open-mpi.org/faq/?category=sysadmin#sysadmin-mca-params</a>
<br>
<p>Also, add &quot;sm&quot; to the -mca btl parameters.
<br>
<p>My $0.02.
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Bill Rankin wrote:
<br>
<span class="quotelev1">&gt; On 12/14/2009 11:11 PM, Dmitry Zaletnev wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; is it possible to have NFS and openmpi running on different NICs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.  Just make sure that the two subnets for the NICs don't overlap and
</span><br>
<span class="quotelev1">&gt; that your routing tables are correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for channel bonding, I'll let someone who has actually used it
</span><br>
<span class="quotelev1">&gt; address that question. :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bill
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
<li><strong>Next message:</strong> <a href="11545.php">Dmitry Zaletnev: "[OMPI users] OpenFOAM fail to run under openmpi-1.3.3 on 2x Ubuntu 9.10 x64 Server"</a>
<li><strong>Previous message:</strong> <a href="11543.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>In reply to:</strong> <a href="11538.php">Bill Rankin: "Re: [OMPI users] NFS and openmpi through different NICs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11545.php">Dmitry Zaletnev: "[OMPI users] OpenFOAM fail to run under openmpi-1.3.3 on 2x Ubuntu 9.10 x64 Server"</a>
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
