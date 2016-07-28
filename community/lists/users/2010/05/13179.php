<?
$subject_val = "Re: [OMPI users] [torqueusers] which eth interface does mpi use by default when torque supplies it with a hostfile?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 28 17:45:13 2010" -->
<!-- isoreceived="20100528214513" -->
<!-- sent="Fri, 28 May 2010 17:45:10 -0400" -->
<!-- isosent="20100528214510" -->
<!-- name="George Wm Turner" -->
<!-- email="turnerg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [torqueusers] which eth interface does mpi use by default when torque supplies it with a hostfile?" -->
<!-- id="9A115C6F-53C3-4BF5-A285-82AFEBC3A811_at_indiana.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="23755_1275082167_o4SLTOPu010353_AANLkTino0M3cbnGdlqmCQZkSnFTWKJYAhviNMnSaXvAn_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [torqueusers] which eth interface does mpi use by default when torque supplies it with a hostfile?<br>
<strong>From:</strong> George Wm Turner (<em>turnerg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-28 17:45:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13180.php">Ralph Castain: "Re: [OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?"</a>
<li><strong>Previous message:</strong> <a href="13178.php">Rahul Nabar: "[OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI is very aggressive about looking for and using any tcp
<br>
communications device it can find.  In your case it will use both the
<br>
10.0.. network and the 192.168.. network at the same time.  Open MPI
<br>
does not pay attention to the hosts names for the communications
<br>
channel.  You want to do something like:
<br>
<p>mpirun --mca btl_tcp_if_include lo,eth1
<br>
<p>Please see the Open MPI FAQ:
<br>
<p>Tuning the run-time characteristics of MPI TCP communications
<br>
<p>7. How do I tell Open MPI which TCP networks to use?
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<p><p>george wm turner
<br>
high performance systems
<br>
812 855 5156
<br>
<p><p>On May 28, 2010, at 5:29 PM, Rahul Nabar wrote:
<br>
<p><span class="quotelev1">&gt; Each of our servers has twin eth cards: 1GigE and 10GigE. How does
</span><br>
<span class="quotelev1">&gt; openmpi decide which card to use while sending messages on? One of the
</span><br>
<span class="quotelev1">&gt; cards is on a 10.0. IP address subnet whereas the other cards are on a
</span><br>
<span class="quotelev1">&gt; 192.168 adress subnet. Can I select one or the other by specifying the
</span><br>
<span class="quotelev1">&gt; --host option with the correct IP addresses?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How does it select the default though? Frequently I call mpirun from
</span><br>
<span class="quotelev1">&gt; within a PBS wrapper and then there is no explicit --host directive.
</span><br>
<span class="quotelev1">&gt; (I think PBS somehow communicates to mpirun what the assigned hostfile
</span><br>
<span class="quotelev1">&gt; is) In such a case though, which interface will mpirun use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rahul
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; torqueusers mailing list
</span><br>
<span class="quotelev1">&gt; torqueusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.supercluster.org/mailman/listinfo/torqueusers">http://www.supercluster.org/mailman/listinfo/torqueusers</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13180.php">Ralph Castain: "Re: [OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?"</a>
<li><strong>Previous message:</strong> <a href="13178.php">Rahul Nabar: "[OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?"</a>
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
