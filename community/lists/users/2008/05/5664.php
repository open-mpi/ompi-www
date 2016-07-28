<?
$subject_val = "Re: [OMPI users] Migrating from lam-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 02:45:36 2008" -->
<!-- isoreceived="20080514064536" -->
<!-- sent="Wed, 14 May 2008 08:45:27 +0200" -->
<!-- isosent="20080514064527" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Migrating from lam-mpi" -->
<!-- id="9b0da5ce0805132345l351c3d37md6f6d8b3459f981e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="002501c8b51b$d43ea980$0b00a8c0_at_marsh" -->
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
<strong>Subject:</strong> Re: [OMPI users] Migrating from lam-mpi<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-14 02:45:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5665.php">Robert Rehammar: "[OMPI users] Open-MPI spawn problem"</a>
<li><strong>Previous message:</strong> <a href="5663.php">JUAN CARLOS LARROYA HUGUET: "Re: [OMPI users] Help configuring openmpi"</a>
<li><strong>In reply to:</strong> <a href="5659.php">Rob Malpass: "[OMPI users] Migrating from lam-mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5674.php">Jeff Squyres: "Re: [OMPI users] Migrating from lam-mpi"</a>
<li><strong>Reply:</strong> <a href="5674.php">Jeff Squyres: "Re: [OMPI users] Migrating from lam-mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
Actually all you need is in this faq:
<br>
<a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
<br>
The analogues to the lam-mpi hostfiles is discussed here
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#mpirun-host">http://www.open-mpi.org/faq/?category=running#mpirun-host</a>
<br>
and here
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#mpirun-host">http://www.open-mpi.org/faq/?category=running#mpirun-host</a>
<br>
<p>There is no booting required.
<br>
All you do is start your application with mpirun
<br>
&nbsp;&nbsp;mpirun --hostfile my_hostfile -np 4 my_parallel_application
<br>
<p>jody
<br>
<p><p>On Tue, May 13, 2008 at 7:07 PM, Rob Malpass &lt;lug_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Could someone help me out with some documentation?   I'm searched the faq
</span><br>
<span class="quotelev1">&gt;  and can't find exactly what I'm after - which is a sort of setup guide.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thus far, I have a couple of Ubuntu nodes running openmpi-1.2.6.   I've
</span><br>
<span class="quotelev1">&gt;  currently got one setup so it can ssh into the other without a password so I
</span><br>
<span class="quotelev1">&gt;  guess all I need to do now is to run the job.   With lam, there was
</span><br>
<span class="quotelev1">&gt;  lam-bhost.def but I've not (this is where I need the help) found any
</span><br>
<span class="quotelev1">&gt;  documentation that talks about the hostfile.   The only thing I can find is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/faq/?category=running#simple-launch">http://www.open-mpi.org/faq/?category=running#simple-launch</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  but with lam, as I recall there were a whole host (no pun intended!) of
</span><br>
<span class="quotelev1">&gt;  configuration files and some test scripts like recon and lamboot to &quot;boot
</span><br>
<span class="quotelev1">&gt;  the supercomputer&quot;.   Are there no such files here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I hope this doesn't offend - I have searched the faq but I can't find
</span><br>
<span class="quotelev1">&gt;  exactly what I'm after - is there a setup guide somewhere?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5665.php">Robert Rehammar: "[OMPI users] Open-MPI spawn problem"</a>
<li><strong>Previous message:</strong> <a href="5663.php">JUAN CARLOS LARROYA HUGUET: "Re: [OMPI users] Help configuring openmpi"</a>
<li><strong>In reply to:</strong> <a href="5659.php">Rob Malpass: "[OMPI users] Migrating from lam-mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5674.php">Jeff Squyres: "Re: [OMPI users] Migrating from lam-mpi"</a>
<li><strong>Reply:</strong> <a href="5674.php">Jeff Squyres: "Re: [OMPI users] Migrating from lam-mpi"</a>
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
