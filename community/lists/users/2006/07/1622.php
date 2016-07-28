<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 14 10:59:59 2006" -->
<!-- isoreceived="20060714145959" -->
<!-- sent="Fri, 14 Jul 2006 10:58:46 -0400" -->
<!-- isosent="20060714145846" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BTL devices" -->
<!-- id="E413EF9F-E992-47BF-8B51-8680570571F9_at_umich.edu" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="7D5C1BFE-A814-464C-9EDA-E81CE457276C_at_ieee.org" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-14 10:58:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1623.php">Warner Yuen: "[OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="1621.php">Michael Kluskens: "Re: [OMPI users] auto detect hosts"</a>
<li><strong>In reply to:</strong> <a href="1620.php">Michael Kluskens: "[OMPI users] BTL devices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1673.php">Jeff Squyres: "Re: [OMPI users] BTL devices"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2006, at 10:40 AM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've looked through the documentation but I haven't found the
</span><br>
<span class="quotelev1">&gt; discussion about what each BTL device is, for example, I have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA btl: self (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt; MCA btl: sm (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt; MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found a PDF presentation that describes a few:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#149; tcp - TCP/IP
</span><br>
<span class="quotelev1">&gt; &#149; openib &#150; Infiniband OpenIB Stack
</span><br>
<span class="quotelev1">&gt; &#149; gm/mx- Myrinet GM/MX
</span><br>
<span class="quotelev1">&gt; &#149; mvapi - Infiniband Mellanox Verbs
</span><br>
<span class="quotelev1">&gt; &#149; sm - Shared Memory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there any others I may see when interacting with other people's
</span><br>
<span class="quotelev1">&gt; computers?
</span><br>
<p>These will be the most common.  I don't know OMPI plans to support  
<br>
other networks like quadrics in the future or not.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume that if a machine has Myrinet and I don't see MCA btl: gm or
</span><br>
<span class="quotelev1">&gt; MCA btl: mx then I have to explain the problem to the sysadm's.
</span><br>
<p>Yes, did you build OMPI your self or is this a system wide install?   
<br>
If you installed it your self you need to find ware the gm or mx libs  
<br>
are stored and run ./configure with the --with-gm=/path/to/gm  or -- 
<br>
with-mx=/path/to/mx
<br>
On our Mac cluster the gm libs are in /opt/gm/lib  but you only need  
<br>
to do ./configure --with-gm=/opt/gm  --other-options
<br>
<p>Hope that helps
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The second question is should I see both gm &amp; mx, or only one or the
</span><br>
<span class="quotelev1">&gt; other.
</span><br>
<p>You only need one of them.  We have only used GM as our older  
<br>
hardware does not support MX,  but if i understand correctly if you  
<br>
can use MX use it.  Maybe someone who has tested both will chime in?
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1623.php">Warner Yuen: "[OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="1621.php">Michael Kluskens: "Re: [OMPI users] auto detect hosts"</a>
<li><strong>In reply to:</strong> <a href="1620.php">Michael Kluskens: "[OMPI users] BTL devices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1673.php">Jeff Squyres: "Re: [OMPI users] BTL devices"</a>
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
