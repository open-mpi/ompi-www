<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 20 11:33:51 2007" -->
<!-- isoreceived="20070820153351" -->
<!-- sent="Mon, 20 Aug 2007 11:33:34 -0400" -->
<!-- isosent="20070820153334" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.3: can't find mca libraries" -->
<!-- id="D9DC1F1B-EFAF-4175-B8E3-7857B4642000_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1187383604.11150.409.camel_at_showhorse.timb.com" -->
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
<strong>Date:</strong> 2007-08-20 11:33:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3891.php">Kees Verstoep: "[OMPI users] MX/BTL eager_limit/min_send_size"</a>
<li><strong>Previous message:</strong> <a href="3889.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] Process termination problem"</a>
<li><strong>In reply to:</strong> <a href="3886.php">Tudor Buican: "[OMPI users] OpenMPI 1.2.3: can't find mca libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you post all the information requested here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>...slightly amended to show the exact compile/link error that you're  
<br>
seeing when you try to create your application.
<br>
<p>That will help us understand your problem.  Thanks.
<br>
<p><p>On Aug 17, 2007, at 4:46 PM, Tudor Buican wrote:
<br>
<p><span class="quotelev1">&gt; Hi, everybody.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just added OpenMPI 1.2.3 to a Rocks cluster that already had OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.1 installed. I built an rpm for 1.2.3 from the tarball I had
</span><br>
<span class="quotelev1">&gt; downloaded from open-mpi.org, and I used the option --with-devel-
</span><br>
<span class="quotelev1">&gt; headers, which I needed in order to build a software package that
</span><br>
<span class="quotelev1">&gt; required all the headers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far, so good. However, I am now trying to build yet another  
</span><br>
<span class="quotelev1">&gt; software
</span><br>
<span class="quotelev1">&gt; package that requires OpenMPI, only to find that it needs what  
</span><br>
<span class="quotelev1">&gt; appear to
</span><br>
<span class="quotelev1">&gt; be missing mca-related libraries. When I compared the lib directories
</span><br>
<span class="quotelev1">&gt; for OpenMPI versions 1.1 and 1.2.3, I noticed that 1.1 had a whole  
</span><br>
<span class="quotelev1">&gt; bunch
</span><br>
<span class="quotelev1">&gt; of mca-related libraries, like libmca_common_sm, mca_allocator_basic,
</span><br>
<span class="quotelev1">&gt; etc., which are missing from my newly built version 1.2.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions about how to get the full set of 1.2.3 libraries would
</span><br>
<span class="quotelev1">&gt; be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; -Tudor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tudor N. Buican, PhD
</span><br>
<span class="quotelev1">&gt; Managing Member
</span><br>
<span class="quotelev1">&gt; SEA LLC
</span><br>
<span class="quotelev1">&gt; phone: 505-271-9925, 505-818-7303
</span><br>
<span class="quotelev1">&gt; fax: 505-271-9925
</span><br>
<span class="quotelev1">&gt; email: tudor_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3891.php">Kees Verstoep: "[OMPI users] MX/BTL eager_limit/min_send_size"</a>
<li><strong>Previous message:</strong> <a href="3889.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] Process termination problem"</a>
<li><strong>In reply to:</strong> <a href="3886.php">Tudor Buican: "[OMPI users] OpenMPI 1.2.3: can't find mca libraries"</a>
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
