<?
$subject_val = "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 08:02:38 2008" -->
<!-- isoreceived="20080910120238" -->
<!-- sent="Wed, 10 Sep 2008 08:02:31 -0400" -->
<!-- isosent="20080910120231" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI" -->
<!-- id="6EE13556-5A31-4D1B-A138-D8D06BF3DDBB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48C78E70.4040602_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-10 08:02:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6494.php">Daniel Spångberg: "[OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
<li><strong>Previous message:</strong> <a href="6492.php">Ramiro Alba Queipo: "[OMPI users] Doubts about the hpcc MPIRandomAccess problem"</a>
<li><strong>In reply to:</strong> <a href="6491.php">Samuel Sarholz: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6496.php">Amidu Oloso: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6496.php">Amidu Oloso: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you need per-job settings, then a wrapper is probably your best bet.
<br>
<p><p>On Sep 10, 2008, at 5:08 AM, Samuel Sarholz wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think setting global limits will not help in this case as the  
</span><br>
<span class="quotelev1">&gt; limits like stacksize need to be program specific.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far I am using wrappers, however the solution is a bit nasty.
</span><br>
<span class="quotelev1">&gt; If there is another way it would be great.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hoever I doubt that there is a way as the FAQ states:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More specifically -- it may not be sufficient to simply execute the  
</span><br>
<span class="quotelev1">&gt; following, because the ulimit may not be in effect on all nodes  
</span><br>
<span class="quotelev1">&gt; where Open MPI processes will be run:
</span><br>
<span class="quotelev1">&gt; shell$ ulimit -l unlimited
</span><br>
<span class="quotelev1">&gt; shell$ mpirun -np 2 my_mpi_application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But this case is what is needed as any global or user global (bashrc  
</span><br>
<span class="quotelev1">&gt; zshrc .. ) setting will only work if you run one kind of jobs at the  
</span><br>
<span class="quotelev1">&gt; same time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And wrapping:
</span><br>
<span class="quotelev1">&gt; wrap.sh:
</span><br>
<span class="quotelev1">&gt; ulimit -s 300000
</span><br>
<span class="quotelev1">&gt; a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 zsh -c wrap.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; works but is not nice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; There are several factors that can come into play here.  See this  
</span><br>
<span class="quotelev2">&gt;&gt; FAQ entry about registered memory limits (the same concepts apply  
</span><br>
<span class="quotelev2">&gt;&gt; to the other limits):
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more</a>
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 9, 2008, at 7:04 PM, Amidu Oloso wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun under OpenMPI is not picking the limit settings from the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user environment. Is there a way to do this, short of wrapping my  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; executable in a script where my limits are set and then invoking  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun on that script?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Hamid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="6494.php">Daniel Spångberg: "[OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
<li><strong>Previous message:</strong> <a href="6492.php">Ramiro Alba Queipo: "[OMPI users] Doubts about the hpcc MPIRandomAccess problem"</a>
<li><strong>In reply to:</strong> <a href="6491.php">Samuel Sarholz: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6496.php">Amidu Oloso: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6496.php">Amidu Oloso: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
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
