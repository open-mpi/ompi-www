<?
$subject_val = "Re: [OMPI users] open mpi on smp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 08:33:07 2008" -->
<!-- isoreceived="20080416123307" -->
<!-- sent="Wed, 16 Apr 2008 14:32:58 +0200" -->
<!-- isosent="20080416123258" -->
<!-- name="Jozef K&#225;&#232;er" -->
<!-- email="quickparser_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on smp" -->
<!-- id="8803b3d0804160532t60d9e82embeb01b83894163f3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b05971d10804150938u22f2b7cfu463ccb827c19a781_at_mail.gmail.com" -->
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
<strong>From:</strong> Jozef K&#225;&#232;er (<em>quickparser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-16 08:32:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5402.php">Crni Gorac: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Previous message:</strong> <a href="5400.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>In reply to:</strong> <a href="5395.php">Cally K: "[OMPI users] open mpi on smp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5403.php">Mark Kosmowski: "Re: [OMPI users] open mpi on smp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that in pure OpenMPI environment (without any resorce manager) you
<br>
should be able to run applications like this:
<br>
<p>mpirun -np 2 mpi_executable
<br>
or
<br>
mpirun -np 4 -machinefile machines.list mpi_executable
<br>
<p>where machines.list contains a list of your computers identified by their
<br>
host names.
<br>
The former command should run the program locally on 2 processors/cores, the
<br>
latter
<br>
one on those specified in the list.
<br>
<p>Regards,
<br>
Jozef
<br>
<p>On Tue, Apr 15, 2008 at 6:38 PM, Cally K &lt;kalpana0611_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; hi, am beginner in openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could anyone tell me how do i run programs in open mpi on smp.. as in do I
</span><br>
<span class="quotelev1">&gt; have to do any changes in hostfile ... like in mpich -- I write
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; server:2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; how do I do it openmpi
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5401/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5402.php">Crni Gorac: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Previous message:</strong> <a href="5400.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>In reply to:</strong> <a href="5395.php">Cally K: "[OMPI users] open mpi on smp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5403.php">Mark Kosmowski: "Re: [OMPI users] open mpi on smp"</a>
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
