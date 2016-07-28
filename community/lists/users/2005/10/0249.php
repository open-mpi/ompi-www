<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 31 11:09:54 2005" -->
<!-- isoreceived="20051031160954" -->
<!-- sent="Mon, 31 Oct 2005 11:05:07 -0500" -->
<!-- isosent="20051031160507" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] TCP problems with 1.0rc4" -->
<!-- id="D0F7CE01-754D-48A1-9C09-B4DB3B15E173_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43663C64.1050408_at_graphics.stanford.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-31 11:05:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0250.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>Previous message:</strong> <a href="0248.php">Mike Houston: "[O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>In reply to:</strong> <a href="0247.php">Mike Houston: "[O-MPI users] TCP problems with 1.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0268.php">Jeff Squyres: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>Reply:</strong> <a href="0268.php">Jeff Squyres: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike,
<br>
<p>If your nodes have more than one network interface it can happens  
<br>
that we do not select the right one. There is a simple way to insure  
<br>
that this does not happens. Create a directory named .openmpi in your  
<br>
home area. In this directory edit the file mca-params.conf. This file  
<br>
is loaded by Open MPI every time you start a job and it contain all  
<br>
the MCA parameters you want/need to set.
<br>
<p>For TCP you can get the list of available MCA parameters using  
<br>
&quot;ompi_info --param btl tcp&quot;. The one involved in selecting the  
<br>
network are:
<br>
btl_tcp_if_include
<br>
btl_tcp_if_exclude
<br>
You just have to set one of them as they are exclusive. So if you  
<br>
want to select the second network interface (let say it is named  
<br>
eth1) you have to add in the mca-params.conf file the following line:
<br>
bl_tcp_if_include=eth1
<br>
<p>&nbsp;&nbsp;&nbsp;Hope it helps,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 31, 2005, at 10:46 AM, Mike Houston wrote:
<br>
<p><span class="quotelev1">&gt; We can't seem to run across TCP.  We did a default 'configure'.   
</span><br>
<span class="quotelev1">&gt; Shared
</span><br>
<span class="quotelev1">&gt; memory seems to work, but trying tcp give us:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_tcp_endpoint.c:557:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm assuming that the tcp backend is the most thoroughly tested, so I
</span><br>
<span class="quotelev1">&gt; thought I'd ask in case we are doing something silly.  The above is
</span><br>
<span class="quotelev1">&gt; caused when running the OSU NBCL mpi_bandwidth test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Mike
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
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0250.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>Previous message:</strong> <a href="0248.php">Mike Houston: "[O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>In reply to:</strong> <a href="0247.php">Mike Houston: "[O-MPI users] TCP problems with 1.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0268.php">Jeff Squyres: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>Reply:</strong> <a href="0268.php">Jeff Squyres: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
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
