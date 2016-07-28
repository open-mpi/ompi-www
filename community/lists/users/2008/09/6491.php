<?
$subject_val = "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 05:08:07 2008" -->
<!-- isoreceived="20080910090807" -->
<!-- sent="Wed, 10 Sep 2008 11:08:00 +0200" -->
<!-- isosent="20080910090800" -->
<!-- name="Samuel Sarholz" -->
<!-- email="sarholz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI" -->
<!-- id="48C78E70.4040602_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="32949844-9EF3-41C5-8A5F-53AFCFD93D5D_at_cisco.com" -->
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
<strong>From:</strong> Samuel Sarholz (<em>sarholz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-10 05:08:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6492.php">Ramiro Alba Queipo: "[OMPI users] Doubts about the hpcc MPIRandomAccess problem"</a>
<li><strong>Previous message:</strong> <a href="6490.php">Jeff Squyres: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6490.php">Jeff Squyres: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6493.php">Jeff Squyres: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6493.php">Jeff Squyres: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I think setting global limits will not help in this case as the limits 
<br>
like stacksize need to be program specific.
<br>
<p><p>So far I am using wrappers, however the solution is a bit nasty.
<br>
If there is another way it would be great.
<br>
<p>Hoever I doubt that there is a way as the FAQ states:
<br>
<p>More specifically -- it may not be sufficient to simply execute the 
<br>
following, because the ulimit may not be in effect on all nodes where 
<br>
Open MPI processes will be run:
<br>
shell$ ulimit -l unlimited
<br>
shell$ mpirun -np 2 my_mpi_application
<br>
<p>But this case is what is needed as any global or user global (bashrc 
<br>
zshrc .. ) setting will only work if you run one kind of jobs at the 
<br>
same time.
<br>
<p>And wrapping:
<br>
wrap.sh:
<br>
ulimit -s 300000
<br>
a.out
<br>
<p>mpirun -np 2 zsh -c wrap.sh
<br>
<p>works but is not nice.
<br>
<p>best regards,
<br>
Samuel
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; There are several factors that can come into play here.  See this FAQ 
</span><br>
<span class="quotelev1">&gt; entry about registered memory limits (the same concepts apply to the 
</span><br>
<span class="quotelev1">&gt; other limits):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 9, 2008, at 7:04 PM, Amidu Oloso wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun under OpenMPI is not picking the limit settings from the user 
</span><br>
<span class="quotelev2">&gt;&gt; environment. Is there a way to do this, short of wrapping my 
</span><br>
<span class="quotelev2">&gt;&gt; executable in a script where my limits are set and then invoking 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun on that script?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Hamid
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
<p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6491/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6492.php">Ramiro Alba Queipo: "[OMPI users] Doubts about the hpcc MPIRandomAccess problem"</a>
<li><strong>Previous message:</strong> <a href="6490.php">Jeff Squyres: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6490.php">Jeff Squyres: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6493.php">Jeff Squyres: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6493.php">Jeff Squyres: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
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
