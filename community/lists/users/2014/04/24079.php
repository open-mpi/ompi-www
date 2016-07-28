<?
$subject_val = "Re: [OMPI users] Open Mpi execution error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 11:49:15 2014" -->
<!-- isoreceived="20140407154915" -->
<!-- sent="Mon, 7 Apr 2014 08:48:44 -0700" -->
<!-- isosent="20140407154844" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open Mpi execution error" -->
<!-- id="CD037421-7FFD-4423-ABF9-3C8699940199_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5341764B.9020508_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open Mpi execution error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 11:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24080.php">Hamid Saeed: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Previous message:</strong> <a href="24078.php">Kamal: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>In reply to:</strong> <a href="24076.php">Kamal: "Re: [OMPI users] Open Mpi execution error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nope - make uninstall will not clean everything out, which is one reason we don't recommend putting things in a system directory
<br>
<p>On Apr 6, 2014, at 8:44 AM, Kamal &lt;infikamal5_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Hamid, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I can uninstall just by typing 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ' make uninstall ' right ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what does ' make -j2 ' do ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your reply, 
</span><br>
<span class="quotelev1">&gt; Kamal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/04/2014 17:38, Hamid Saeed wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I also had a same problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; but when i re-installed MPI using 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  ./configure --prefix=/usr/local/
</span><br>
<span class="quotelev2">&gt;&gt; make  -j2
</span><br>
<span class="quotelev2">&gt;&gt; make install 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; it worked.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Apr 6, 2014 at 5:30 PM, Kamal &lt;infikamal5_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Open MPI,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I installed open-mpi with 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/usr/local/
</span><br>
<span class="quotelev2">&gt;&gt; make all 
</span><br>
<span class="quotelev2">&gt;&gt; make install 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; then I launched my sample code which gave me this error 
</span><br>
<span class="quotelev2">&gt;&gt; my LD_LIBRARY_PATH=/usr/local/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have attached the output file with this mail 
</span><br>
<span class="quotelev2">&gt;&gt; could some one please help me with this . 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Kamal 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; Hamid Saeed
</span><br>
<span class="quotelev2">&gt;&gt; CoSynth GmbH &amp; Co. KG
</span><br>
<span class="quotelev2">&gt;&gt; Escherweg 2 - 26121 Oldenburg - Germany
</span><br>
<span class="quotelev2">&gt;&gt; Tel +49 441 9722 738 | Fax -278
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cosynth.com">http://www.cosynth.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24079/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24080.php">Hamid Saeed: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Previous message:</strong> <a href="24078.php">Kamal: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>In reply to:</strong> <a href="24076.php">Kamal: "Re: [OMPI users] Open Mpi execution error"</a>
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
