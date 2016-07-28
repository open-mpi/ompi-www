<?
$subject_val = "Re: [OMPI users] Building vs packaging";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 01:33:47 2016" -->
<!-- isoreceived="20160519053347" -->
<!-- sent="Thu, 19 May 2016 08:33:31 +0300" -->
<!-- isosent="20160519053331" -->
<!-- name="dani" -->
<!-- email="dani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building vs packaging" -->
<!-- id="7a2eca7f-e0f8-72a7-3309-87d758ef7d85_at_letai.org.il" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="8737pi6o46.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building vs packaging<br>
<strong>From:</strong> dani (<em>dani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-19 01:33:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29239.php">Nicolas Joly: "[OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>Previous message:</strong> <a href="29237.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<li><strong>In reply to:</strong> <a href="29212.php">Dave Love: "Re: [OMPI users] Building vs packaging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29254.php">Dave Love: "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Reply:</strong> <a href="29254.php">Dave Love: "Re: [OMPI users] Building vs packaging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know about .deb packages, but at least in the rpms there is a 
<br>
post install scriptlet that re-runs ldconfig to ensure the new libs are 
<br>
in the ldconfig cache.
<br>
<p><p>On 16/05//2016 18:04, Dave Love wrote:
<br>
<span class="quotelev1">&gt; &quot;Rob Malpass&quot; &lt;lug_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Almost in desperation, I cheated:
</span><br>
<span class="quotelev1">&gt; Why is that cheating?  Unless you specifically want a different version,
</span><br>
<span class="quotelev1">&gt; it seems sensible to me, especially as you then have access to packaged
</span><br>
<span class="quotelev1">&gt; versions of at least some MPI programs.  Likewise with rpm-based
</span><br>
<span class="quotelev1">&gt; systems, which I'm afraid I know more about.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also the package system ensures that things don't break by inadvertently
</span><br>
<span class="quotelev1">&gt; removing their dependencies; the hwloc libraries might be an example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sudo  apt-get install openmpi-bin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and hey presto.   I can now do (from head node)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -H node2,node3,node4 -n 10 foo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and it works fine.   So clearly apt-get install has set something that I'd
</span><br>
<span class="quotelev2">&gt;&gt; not done (and it's seemingly not LD_LIBRARY_PATH) as ssh node2 'echo
</span><br>
<span class="quotelev2">&gt;&gt; $LD_LIBRARY_PATH' still returns a blank line.
</span><br>
<span class="quotelev1">&gt; No.  As I said recently, Debian installs a default MPI (via the
</span><br>
<span class="quotelev1">&gt; alternatives system) with libraries in the system search path.  Check
</span><br>
<span class="quotelev1">&gt; the library contents.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29212.php">http://www.open-mpi.org/community/lists/users/2016/05/29212.php</a>
</span><br>
<p><p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29238/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29239.php">Nicolas Joly: "[OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>Previous message:</strong> <a href="29237.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<li><strong>In reply to:</strong> <a href="29212.php">Dave Love: "Re: [OMPI users] Building vs packaging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29254.php">Dave Love: "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Reply:</strong> <a href="29254.php">Dave Love: "Re: [OMPI users] Building vs packaging"</a>
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
