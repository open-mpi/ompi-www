<?
$subject_val = "Re: [OMPI users] open mpi on smp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 12:34:22 2008" -->
<!-- isoreceived="20080416163422" -->
<!-- sent="Wed, 16 Apr 2008 12:34:13 -0400" -->
<!-- isosent="20080416163413" -->
<!-- name="Mark Kosmowski" -->
<!-- email="mark.kosmowski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on smp" -->
<!-- id="c84311bb0804160934q1874caa8r190df5672837d6ac_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] open mpi on smp" -->
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
<strong>Subject:</strong> Re: [OMPI users] open mpi on smp<br>
<strong>From:</strong> Mark Kosmowski (<em>mark.kosmowski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-16 12:34:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Previous message:</strong> <a href="5402.php">Crni Gorac: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Maybe in reply to:</strong> <a href="5395.php">Cally K: "[OMPI users] open mpi on smp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5408.php">Cally K: "Re: [OMPI users] open mpi on smp"</a>
<li><strong>Reply:</strong> <a href="5408.php">Cally K: "Re: [OMPI users] open mpi on smp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cally:
<br>
<p>In the hostfile you add a &quot;slots&quot; line.  For example on my dual
<br>
opteron (single core) system, I have slots=2.  This can be read about
<br>
in more detail in the FAQ - I provide a link for this section below -
<br>
you may need to scroll down to see the example hostfile at the end of
<br>
the section.
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
<br>
<p>Happy computing,
<br>
<p>Mark Kosmowski
<br>
<p><span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Wed, 16 Apr 2008 14:32:58 +0200
</span><br>
<span class="quotelev1">&gt; From: &quot; Jozef K??er &quot; &lt;quickparser_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] open mpi on smp
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;8803b3d0804160532t60d9e82embeb01b83894163f3_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that in pure OpenMPI environment (without any resorce manager) you
</span><br>
<span class="quotelev1">&gt; should be able to run applications like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 mpi_executable
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -machinefile machines.list mpi_executable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where machines.list contains a list of your computers identified by their
</span><br>
<span class="quotelev1">&gt; host names.
</span><br>
<span class="quotelev1">&gt; The former command should run the program locally on 2 processors/cores, the
</span><br>
<span class="quotelev1">&gt; latter
</span><br>
<span class="quotelev1">&gt; one on those specified in the list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jozef
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 15, 2008 at 6:38 PM, Cally K &lt;kalpana0611_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; hi, am beginner in openmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; could anyone tell me how do i run programs in open mpi on smp.. as in do I
</span><br>
<span class="quotelev2">&gt; &gt; have to do any changes in hostfile ... like in mpich -- I write
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; server:2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; how do I do it openmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Previous message:</strong> <a href="5402.php">Crni Gorac: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Maybe in reply to:</strong> <a href="5395.php">Cally K: "[OMPI users] open mpi on smp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5408.php">Cally K: "Re: [OMPI users] open mpi on smp"</a>
<li><strong>Reply:</strong> <a href="5408.php">Cally K: "Re: [OMPI users] open mpi on smp"</a>
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
