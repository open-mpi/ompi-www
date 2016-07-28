<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 14 10:40:37 2006" -->
<!-- isoreceived="20060714144037" -->
<!-- sent="Fri, 14 Jul 2006 10:40:33 -0400" -->
<!-- isosent="20060714144033" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users] BTL devices" -->
<!-- id="7D5C1BFE-A814-464C-9EDA-E81CE457276C_at_ieee.org" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="39494BE0-9A1C-4768-B1EC-B9CD126B1110_at_cs.utk.edu" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-14 10:40:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1621.php">Michael Kluskens: "Re: [OMPI users] auto detect hosts"</a>
<li><strong>Previous message:</strong> <a href="1619.php">Manal Helal: "Re: [OMPI users] OpenMPI, debugging, and Portland Group's"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1461.php">George Bosilca: "Re: [OMPI users] Fw: OpenMPI version 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1622.php">Brock Palen: "Re: [OMPI users] BTL devices"</a>
<li><strong>Reply:</strong> <a href="1622.php">Brock Palen: "Re: [OMPI users] BTL devices"</a>
<li><strong>Reply:</strong> <a href="1673.php">Jeff Squyres: "Re: [OMPI users] BTL devices"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 24, 2006, at 1:19 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; As your cluster have several network devices that are supported by
</span><br>
<span class="quotelev1">&gt; Open MPI it is possible that the configure script detected the
</span><br>
<span class="quotelev1">&gt; correct path to their libraries. Therefore, they might be included/
</span><br>
<span class="quotelev1">&gt; compiled by default in Open MPI. The simplest way to check is to use
</span><br>
<span class="quotelev1">&gt; the ompi_info tool. &quot;ompi_info | grep btl&quot; will list all the network
</span><br>
<span class="quotelev1">&gt; devices supported by your particular build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If several devices (called BTL in Open MPI terms) are compiled in,
</span><br>
<span class="quotelev1">&gt; only forcing one eth interface for the TCP BTL is not enough. You
</span><br>
<span class="quotelev1">&gt; should specify that you want only the TCP BTL to be used, forcing
</span><br>
<span class="quotelev1">&gt; Open MPI to unload/ignore all other available BTL. Add &quot;--mca btl
</span><br>
<span class="quotelev1">&gt; tcp,self&quot; to your mpirun command and the problem should be solved.
</span><br>
<p>I've looked through the documentation but I haven't found the  
<br>
discussion about what each BTL device is, for example, I have:
<br>
<p>MCA btl: self (MCA v1.0, API v1.0, Component v1.2)
<br>
MCA btl: sm (MCA v1.0, API v1.0, Component v1.2)
<br>
MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
<p>I found a PDF presentation that describes a few:
<br>
<p>&#149; tcp - TCP/IP
<br>
&#149; openib &#150; Infiniband OpenIB Stack
<br>
&#149; gm/mx- Myrinet GM/MX
<br>
&#149; mvapi - Infiniband Mellanox Verbs
<br>
&#149; sm - Shared Memory
<br>
<p>Are there any others I may see when interacting with other people's  
<br>
computers?
<br>
<p>I assume that if a machine has Myrinet and I don't see MCA btl: gm or  
<br>
MCA btl: mx then I have to explain the problem to the sysadm's.
<br>
<p>The second question is should I see both gm &amp; mx, or only one or the  
<br>
other.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1621.php">Michael Kluskens: "Re: [OMPI users] auto detect hosts"</a>
<li><strong>Previous message:</strong> <a href="1619.php">Manal Helal: "Re: [OMPI users] OpenMPI, debugging, and Portland Group's"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1461.php">George Bosilca: "Re: [OMPI users] Fw: OpenMPI version 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1622.php">Brock Palen: "Re: [OMPI users] BTL devices"</a>
<li><strong>Reply:</strong> <a href="1622.php">Brock Palen: "Re: [OMPI users] BTL devices"</a>
<li><strong>Reply:</strong> <a href="1673.php">Jeff Squyres: "Re: [OMPI users] BTL devices"</a>
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
