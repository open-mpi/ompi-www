<?
$subject_val = "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 11:20:20 2014" -->
<!-- isoreceived="20140227162020" -->
<!-- sent="Thu, 27 Feb 2014 10:20:15 -0600" -->
<!-- isosent="20140227162015" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-ROMIO-OrangeFS" -->
<!-- id="530F65BF.4070403_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="87zjlcef1e.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-ROMIO-OrangeFS<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 11:20:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23690.php">Brock Palen: "[OMPI users] OpenIB Cannot Allocate Memory error"</a>
<li><strong>Previous message:</strong> <a href="23688.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23687.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23765.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23765.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23960.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/27/2014 9:44 AM, Dave Love wrote:
<br>
<span class="quotelev1">&gt; Edgar Gabriel &lt;gabriel_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; so we had ROMIO working with PVFS2 (not OrangeFS, which is however
</span><br>
<span class="quotelev2">&gt;&gt; registered as PVFS2 internally). We have one cluster which uses
</span><br>
<span class="quotelev2">&gt;&gt; OrangeFS, on that machine however we used OMPIO, not ROMIO.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [What's OMPIO, and should we want it?]
</span><br>
<p>OMPIO is the 'native' implementation of MPI I/O in Open MPI, its however
<br>
only available from the 1.7 series onwards.
<br>
<p>I am still looking into the PVFS2 with ROMIO problem with the 1.6
<br>
series, where (as I mentioned yesterday) the problem I am having right
<br>
now is that the data is wrong. Not sure what causes it, but since I have
<br>
teach this afternoon again, it might be friday until I can digg into that.
<br>
<p>Thanks
<br>
Edgar
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is another vote for working 1.6.5 romio with orangefs -- or pvfs2
</span><br>
<span class="quotelev1">&gt; if the re-branded version won't work.  It seems particularly attractive
</span><br>
<span class="quotelev1">&gt; for use on a system that was mistakenly bought with just NFS, especially
</span><br>
<span class="quotelev1">&gt; if it can be spun up in user space practically.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got OMPI built for 1.6.5 with the two obvious patches from the repo,
</span><br>
<span class="quotelev1">&gt; but it sounds as though that's not good enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.6 is required for compatibility with RHEL6, by the way.
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
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23689/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23690.php">Brock Palen: "[OMPI users] OpenIB Cannot Allocate Memory error"</a>
<li><strong>Previous message:</strong> <a href="23688.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23687.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23765.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23765.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23960.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
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
