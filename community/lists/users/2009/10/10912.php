<?
$subject_val = "Re: [OMPI users] problems with mpexec/mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 12 13:04:01 2009" -->
<!-- isoreceived="20091012170401" -->
<!-- sent="Mon, 12 Oct 2009 19:03:55 +0200" -->
<!-- isosent="20091012170355" -->
<!-- name="Jovana Knezevic" -->
<!-- email="jovana.knezevic.83_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with mpexec/mpirun" -->
<!-- id="9d13e50c0910121003t6bde9ca0r1daa7241a1c0e41a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] problems with mpexec/mpirun" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with mpexec/mpirun<br>
<strong>From:</strong> Jovana Knezevic (<em>jovana.knezevic.83_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-12 13:03:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10913.php">Edgar Gabriel: "Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
<li><strong>Previous message:</strong> <a href="10911.php">Dorian Krause: "[OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid you're right... I was testing it with Open MPI on my laptop, but
<br>
later on the cluster I had some problems... Probably a colleague has
<br>
uploaded mpich...
<br>
But I thought the behavior I see might be &quot;implementation-independant&quot;.
<br>
Probably sounds stupid... :)
<br>
Thanks anyway :)
<br>
<p><p><p>2009/10/12 &lt;users-request_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;        users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;        users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;        users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1. problem with mpiexec/mpirun (Jovana Knezevic)
</span><br>
<span class="quotelev1">&gt;   2. Re: problem with mpiexec/mpirun (Ralph Castain)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Mon, 12 Oct 2009 17:01:03 +0200
</span><br>
<span class="quotelev1">&gt; From: Jovana Knezevic &lt;jovana.knezevic.83_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] problem with mpiexec/mpirun
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;9d13e50c0910120801p4058214n7e5de181c09b0e3_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello everyone!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run 11 instances of my program on 6 dual-core Opterons
</span><br>
<span class="quotelev1">&gt; (it is not time-consuming application anyway, takes 10 seconds at
</span><br>
<span class="quotelev1">&gt; one-core laptop :)).
</span><br>
<span class="quotelev1">&gt; so, when I type:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpiexec -machinefile hostfile -n 11 ./program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nothing happens!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output of:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;mpdtrace -l&quot;  command (from the machine I type the command at) is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lx64a171_41469 (10.156.70.171)
</span><br>
<span class="quotelev1">&gt; lx64a176_47945 (10.156.70.176)
</span><br>
<span class="quotelev1">&gt; lx64a175_42990 (10.156.70.175)
</span><br>
<span class="quotelev1">&gt; lx64a174_39601 (10.156.70.174)
</span><br>
<span class="quotelev1">&gt; lx64a173_45387 (10.156.70.173)
</span><br>
<span class="quotelev1">&gt; lx64a172_55297 (10.156.70.172)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (seems that all 6 machines are there)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have any idea/clue what the reason could be?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jovana
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Mon, 12 Oct 2009 09:10:51 -0600
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] problem with mpiexec/mpirun
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;A99B8347-8E81-4DD7-8B37-B541FA0AB700_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hate to say this, but you don't appear to be using Open MPI.
</span><br>
<span class="quotelev1">&gt; &quot;mpdtrace&quot; is an MPICH command, last I checked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might try their mailing list, or check which mpiexec you are using
</span><br>
<span class="quotelev1">&gt; and contact them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 12, 2009, at 9:01 AM, Jovana Knezevic wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello everyone!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to run 11 instances of my program on 6 dual-core Opterons
</span><br>
<span class="quotelev2">&gt; &gt; (it is not time-consuming application anyway, takes 10 seconds at
</span><br>
<span class="quotelev2">&gt; &gt; one-core laptop :)).
</span><br>
<span class="quotelev2">&gt; &gt; so, when I type:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec -machinefile hostfile -n 11 ./program
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; nothing happens!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The output of:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpdtrace -l&quot;  command (from the machine I type the command at) is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; lx64a171_41469 (10.156.70.171)
</span><br>
<span class="quotelev2">&gt; &gt; lx64a176_47945 (10.156.70.176)
</span><br>
<span class="quotelev2">&gt; &gt; lx64a175_42990 (10.156.70.175)
</span><br>
<span class="quotelev2">&gt; &gt; lx64a174_39601 (10.156.70.174)
</span><br>
<span class="quotelev2">&gt; &gt; lx64a173_45387 (10.156.70.173)
</span><br>
<span class="quotelev2">&gt; &gt; lx64a172_55297 (10.156.70.172)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (seems that all 6 machines are there)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does anyone have any idea/clue what the reason could be?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Jovana
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 1373, Issue 2
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10912/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10913.php">Edgar Gabriel: "Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
<li><strong>Previous message:</strong> <a href="10911.php">Dorian Krause: "[OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
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
