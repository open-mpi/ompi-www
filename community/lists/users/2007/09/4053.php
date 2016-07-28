<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 21 09:51:55 2007" -->
<!-- isoreceived="20070921135155" -->
<!-- sent="Fri, 21 Sep 2007 09:51:41 -0400" -->
<!-- isosent="20070921135141" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;OpenIB unable to find any HCAs&amp;quot;: Why is this shown on a single SMP machine?" -->
<!-- id="FEAF753A-45E8-43A3-AE58-35C0A3D75544_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CCDC434B-DBD0-4B97-86AB-BF6BAEE18DBB_at_cisco.com" -->
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
<strong>Date:</strong> 2007-09-21 09:51:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4054.php">Yvan Fournier: "[OMPI users] Bug in Open MPI 1.2.3 using MPI_Recv with an indexed datatype"</a>
<li><strong>Previous message:</strong> <a href="4052.php">Jeff Squyres: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<li><strong>In reply to:</strong> <a href="4052.php">Jeff Squyres: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As Jeff indicate setting btl to ^openib will only remove warnings  
<br>
about openib. You might want to suppress th warnings from udapl as  
<br>
well. Therefore btl=^openib,udapl (which remove support for both  
<br>
openib and udapl) is what you're looking for.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sep 20, 2007, at 8:40 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI currently has a &quot;negative ACK&quot; kind of assumption built into
</span><br>
<span class="quotelev1">&gt; it -- it assumes that if you have high-speed network support built
</span><br>
<span class="quotelev1">&gt; into it, you'll want to know if you're not using it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're correct that you can disable this warning by setting the &quot;btl&quot;
</span><br>
<span class="quotelev1">&gt; MCA parameter to ^openib (or any other inclusive value that does not
</span><br>
<span class="quotelev1">&gt; have &quot;openib&quot; in it).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 19, 2007, at 1:19 PM, Tobias Burnus wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I start an MPI job with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the following gets shown:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0]: OpenIB on host tux was unable to find any HCAs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0]: uDAPL on host tux was unable to find any NICs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; before it runs the job. The point is: As I have *one* SMP machine,
</span><br>
<span class="quotelev2">&gt;&gt; there
</span><br>
<span class="quotelev2">&gt;&gt; is no need to use Infiniband etc. as accessing the local memory
</span><br>
<span class="quotelev2">&gt;&gt; directly
</span><br>
<span class="quotelev2">&gt;&gt; will be faster ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why is this message shown in this case?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (I read that one can suppress the first message via &quot;btl=^openib&quot; in
</span><br>
<span class="quotelev2">&gt;&gt; /etc/openmpi-mca-params.conf:.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tobias
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4053/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4054.php">Yvan Fournier: "[OMPI users] Bug in Open MPI 1.2.3 using MPI_Recv with an indexed datatype"</a>
<li><strong>Previous message:</strong> <a href="4052.php">Jeff Squyres: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<li><strong>In reply to:</strong> <a href="4052.php">Jeff Squyres: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
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
