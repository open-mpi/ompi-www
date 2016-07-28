<?
$subject_val = "Re: [OMPI users] open mpi on smp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 05:48:48 2008" -->
<!-- isoreceived="20080417094848" -->
<!-- sent="Thu, 17 Apr 2008 17:48:26 +0800" -->
<!-- isosent="20080417094826" -->
<!-- name="Cally K" -->
<!-- email="kalpana0611_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on smp" -->
<!-- id="b05971d10804170248w6f02029di630da49a5a61b383_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c84311bb0804160934q1874caa8r190df5672837d6ac_at_mail.gmail.com" -->
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
<strong>From:</strong> Cally K (<em>kalpana0611_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-17 05:48:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5409.php">Cally K: "[OMPI users] Allocating some amount of memory for a process"</a>
<li><strong>Previous message:</strong> <a href="5407.php">Crni Gorac: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>In reply to:</strong> <a href="5403.php">Mark Kosmowski: "Re: [OMPI users] open mpi on smp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi thanks..everyone, it was very helpful.. I have another question too, but
<br>
I will post it as a different topic
<br>
<p>On 4/17/08, Mark Kosmowski &lt;mark.kosmowski_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cally:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the hostfile you add a &quot;slots&quot; line.  For example on my dual
</span><br>
<span class="quotelev1">&gt; opteron (single core) system, I have slots=2.  This can be read about
</span><br>
<span class="quotelev1">&gt; in more detail in the FAQ - I provide a link for this section below -
</span><br>
<span class="quotelev1">&gt; you may need to scroll down to see the example hostfile at the end of
</span><br>
<span class="quotelev1">&gt; the section.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Happy computing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark Kosmowski
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 1
</span><br>
<span class="quotelev2">&gt; &gt; Date: Wed, 16 Apr 2008 14:32:58 +0200
</span><br>
<span class="quotelev2">&gt; &gt; From: &quot; Jozef K??er &quot; &lt;quickparser_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] open mpi on smp
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID:
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;8803b3d0804160532t60d9e82embeb01b83894163f3_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think that in pure OpenMPI environment (without any resorce manager)
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev2">&gt; &gt; should be able to run applications like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 mpi_executable
</span><br>
<span class="quotelev2">&gt; &gt; or
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 4 -machinefile machines.list mpi_executable
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; where machines.list contains a list of your computers identified by
</span><br>
<span class="quotelev1">&gt; their
</span><br>
<span class="quotelev2">&gt; &gt; host names.
</span><br>
<span class="quotelev2">&gt; &gt; The former command should run the program locally on 2 processors/cores,
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; latter
</span><br>
<span class="quotelev2">&gt; &gt; one on those specified in the list.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Jozef
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Apr 15, 2008 at 6:38 PM, Cally K &lt;kalpana0611_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hi, am beginner in openmpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; could anyone tell me how do i run programs in open mpi on smp.. as in
</span><br>
<span class="quotelev1">&gt; do I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; have to do any changes in hostfile ... like in mpich -- I write
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; server:2
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; how do I do it openmpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5408/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5409.php">Cally K: "[OMPI users] Allocating some amount of memory for a process"</a>
<li><strong>Previous message:</strong> <a href="5407.php">Crni Gorac: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>In reply to:</strong> <a href="5403.php">Mark Kosmowski: "Re: [OMPI users] open mpi on smp"</a>
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
