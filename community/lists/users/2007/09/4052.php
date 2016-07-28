<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 20:40:12 2007" -->
<!-- isoreceived="20070921004012" -->
<!-- sent="Thu, 20 Sep 2007 20:40:00 -0400" -->
<!-- isosent="20070921004000" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;OpenIB unable to find any HCAs&amp;quot;: Why is this shown on a single SMP machine?" -->
<!-- id="CCDC434B-DBD0-4B97-86AB-BF6BAEE18DBB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46F15A2A.1060801_at_net-b.de" -->
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
<strong>Date:</strong> 2007-09-20 20:40:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4053.php">George Bosilca: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<li><strong>Previous message:</strong> <a href="4051.php">Troy Telford: "[OMPI users] Bad performance - OpenIB 1.2.3"</a>
<li><strong>In reply to:</strong> <a href="4041.php">Tobias Burnus: "[OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4053.php">George Bosilca: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<li><strong>Reply:</strong> <a href="4053.php">George Bosilca: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI currently has a &quot;negative ACK&quot; kind of assumption built into  
<br>
it -- it assumes that if you have high-speed network support built  
<br>
into it, you'll want to know if you're not using it.
<br>
<p>You're correct that you can disable this warning by setting the &quot;btl&quot;  
<br>
MCA parameter to ^openib (or any other inclusive value that does not  
<br>
have &quot;openib&quot; in it).
<br>
<p><p>On Sep 19, 2007, at 1:19 PM, Tobias Burnus wrote:
<br>
<p><span class="quotelev1">&gt; If I start an MPI job with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the following gets shown:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; [0,1,0]: OpenIB on host tux was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; [0,1,0]: uDAPL on host tux was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; before it runs the job. The point is: As I have *one* SMP machine,  
</span><br>
<span class="quotelev1">&gt; there
</span><br>
<span class="quotelev1">&gt; is no need to use Infiniband etc. as accessing the local memory  
</span><br>
<span class="quotelev1">&gt; directly
</span><br>
<span class="quotelev1">&gt; will be faster ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why is this message shown in this case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I read that one can suppress the first message via &quot;btl=^openib&quot; in
</span><br>
<span class="quotelev1">&gt; /etc/openmpi-mca-params.conf:.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tobias
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
<li><strong>Next message:</strong> <a href="4053.php">George Bosilca: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<li><strong>Previous message:</strong> <a href="4051.php">Troy Telford: "[OMPI users] Bad performance - OpenIB 1.2.3"</a>
<li><strong>In reply to:</strong> <a href="4041.php">Tobias Burnus: "[OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4053.php">George Bosilca: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<li><strong>Reply:</strong> <a href="4053.php">George Bosilca: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
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
