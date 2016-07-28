<?
$subject_val = "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 10:12:46 2010" -->
<!-- isoreceived="20100310151246" -->
<!-- sent="Wed, 10 Mar 2010 16:12:42 +0100" -->
<!-- isosent="20100310151242" -->
<!-- name="Olivier Riff" -->
<!-- email="oliriff_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun" -->
<!-- id="6ca4ee801003100712q2aa29f61h68291a94990571db_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="122EA463-B34C-4E8F-80CB-1EBDD484B640_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun<br>
<strong>From:</strong> Olivier Riff (<em>oliriff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 10:12:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12300.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12298.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>In reply to:</strong> <a href="12298.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12301.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Reply:</strong> <a href="12301.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, it works now thanks. I forgot to add the slots information in the
<br>
machinefile.
<br>
<p>Cheers,
<br>
<p>Olivier
<br>
<p><p><p>2010/3/10 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; It is the exact same syntax inside of the machinefile:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; user1_at_machine1 slots=4
</span><br>
<span class="quotelev1">&gt; user2_at_machine2 slots=3
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2010, at 5:41 AM, Olivier Riff wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using openmpi on several machines which have different user accounts
</span><br>
<span class="quotelev1">&gt; and I cannot find a way to specify the login for each machine in the
</span><br>
<span class="quotelev1">&gt; machinefile passed to mpirun.
</span><br>
<span class="quotelev2">&gt; &gt; The only solution I found is to use the -host argument of mpirun, such
</span><br>
<span class="quotelev1">&gt; as:
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 --host user1_at_machine1,user2_at_machine2 MyProgram
</span><br>
<span class="quotelev2">&gt; &gt; which is very inconvenient with a lot of machines.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to do the same using a machinefile text? :
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 -machinefile machinefile.txt MyProgram
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I cannot find the appropriate syntax for specifying a user in
</span><br>
<span class="quotelev1">&gt; machinefile.txt...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Olivier
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12299/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12300.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12298.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>In reply to:</strong> <a href="12298.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12301.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Reply:</strong> <a href="12301.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
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
